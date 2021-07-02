<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidFormPackage;
use App\Models\Company;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.packages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $companys = DB::table('companies')->select('id', 'name')->get();
        $companies = array('' => 'Seleccione Empresa') + $companys->pluck('name', 'id')->toArray();

        $elementos = DB::table('elements')->select('id', 'name')->orderBy('id')->get();
        $elements = $elementos->pluck('name', 'id')->toArray();
        return view('admin.packages.create', compact('companies', 'elements'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidFormPackage $request)
    {
        // dd($request->all());
        $package = new Package();
        $package->key = Str::uuid();
        $package->code = $request->code;
        $package->features = $request->features;
        if($request->renown){
            $package->renown = $request->renown;
        }
        $package->user_id = $request->user_id;
        $package->company_id = $request->company_id;
        $package->save();
        $package->elements()->sync($request->elements);
        // return view('admin.packages.index');
        return redirect()->route('admin.packages.index')->with('info', 'El Paquete se creó con exito');
        // return redirect()->route('admin.packages.edit', $company)->with('info', 'La Empresa se creó con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        $companys = DB::table('companies')->select('id', 'name')->get();
        $companies = array('' => 'Seleccione Empresa') + $companys->pluck('name', 'id')->toArray();
        return view('admin.packages.edit', compact('package', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        // dd($request->all());
        $package->code = $request->code;
        $package->features = $request->features;
        if($request->renown){
            $package->renown = $request->renown;
        }
        $package->company_id = $request->company_id;
        $package->status = true;
        $package->save();
        for ($i = 0; $i < count($request->elements); $i++) {
            $package->elements()->updateExistingPivot($request->elements[$i], ['value' => $request->values[$i]]);
        }
        return redirect()->route('admin.packages.index')->with('info', 'El Paquete se actualizó con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        //
    }
}
