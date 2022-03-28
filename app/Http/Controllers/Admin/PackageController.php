<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidFormPackage;
use App\Models\Company;
use App\Models\Package;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use PDF;

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
            $package->renown = strtoupper($request->renown);
        }
        $package->user_id = $request->user_id;
        $package->company_id = $request->company_id;
        $package->save();
        $package->elements()->sync($request->elements);



        return redirect()->route('admin.packages.index')->with('info', 'El Paquete se creó con exito');
        // return redirect()->route('admin.packages.edit', $company)->with('info', 'La Empresa se creó con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        return view('admin.packages.show', compact('package'));
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
        // return redirect()->route('admin.packages.index')->with('info', 'El Paquete se actualizó con exito');
        return redirect()->route('admin.packages.show', $package)->with('info', 'El paquete se editó con exito');
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


    public function createPdf($id){
        $package = Package::findorfail($id);

        $info = array(
            'Name' => 'Laboratorio Quimico SDM',
            'Location' => 'Potosí - Bolivia',
            'Reason' => 'Certificado de analisis',
            'ContactInfo' => 'http://www.labsdm.net',
        );
        $view = \Illuminate\Support\Facades\View::make('admin.packages.pdf', compact('package'));

        $html = $view->render();
        PDF::SetMargins(6, 7, 6, 1);
        // PDF::SetAutoPageBreak(TRUE, 2);
        PDF::SetTitle('Certificado de Analisis');
        PDF::AddPage('L', 'A5');

        $style = array(
            'border' => 0,
            'vpadding' => 'auto',
            'hpadding' => 'auto',
            'fgcolor' => array(0,0,0),
            'bgcolor' => false, //array(255,255,255)
            'module_width' => 1, // width of a single module in points
            'module_height' => 1 // height of a single module in points
        );
        PDF::write2DBarcode(url('paquete/pdf/'.$package->key), 'QRCODE,H', 161, 55, 40, 40, $style, 'L');
        PDF::writeHTML($html, true, false, true, false, '');
        // PDF::Text(80, 205, 'QRCODE H - COLORED');
        PDF::Output('paquete-'.$package->key.'.pdf', 'I');
    }


    public function yesterdayReport(){
        // $package = Package::find(1);
        // $packages = Package::orderBy('id', 'asc')->paginate(10);
        $fechaHoy = Carbon::yesterday()->isoFormat('LL');
        $packages = Package::whereDate('created_at', '=', Carbon::yesterday()->format('Y-m-d'))->paginate();
        $packagesT = Package::whereDate('created_at', '=', Carbon::yesterday()->format('Y-m-d'))->get();
        $total = 0;
        foreach($packagesT as $package){
            $totalPaquete = 0;
            foreach($package->elements as $element){
                $totalPaquete += $element->price;
            }
            $total += $totalPaquete;
        }
        return view('admin.packages.ayer', compact('packages', 'fechaHoy', 'total'));
    }

    

    public function ticket($id){
        $package = Package::findorfail($id);
        // $ruta = storage_path() . '\app\public\tikects/';
        // dd($package->user->people->name);
        // dd($package);
        // return view('admin.packages.index');
        PDF::SetMargins(1, 2, 3, 0);
        $view = \Illuminate\Support\Facades\View::make('admin.packages.ticket', compact('package'));
        $html = $view->render();
        $medidas = array(80, 100);
        PDF::AddPage('P', $medidas, true, 'UTF-8', true);
        $style = array(
            'border' => 0,
            'vpadding' => '2',
            'hpadding' => '2',
            'fgcolor' => array(0,0,0),
            'bgcolor' => false, //array(255,255,255)
            'module_width' => 1, // width of a single module in points
            'module_height' => 1 // height of a single module in points
        );
        PDF::write2DBarcode(url('paquete/pdf/'.$package->key), 'QRCODE, Q', 15, 10, 50, 50, $style, 'L');
        PDF::writeHTML($html, true, false, true, false, '');
        // PDF::Text(80, 205, 'QRCODE H - COLORED');
        PDF::Output('paquete-'.$package->key.'.pdf', 'I');
    }


    public function certPdf($id){
        $package = Package::findorfail($id);
        // $ruta = storage_path() . '\app\public\tikects/';
        // dd($package->user->people->name);
        // dd($package);
        // return view('admin.packages.index');
        PDF::SetMargins(1, 2, 3, 0);
        $view = \Illuminate\Support\Facades\View::make('admin.packages.cert', compact('package'));
        $html = $view->render();
        $medidas = array(80, 300);
        PDF::AddPage('P', $medidas, true, 'UTF-8', true);
        $style = array(
            'border' => 0,
            'vpadding' => '2',
            'hpadding' => '2',
            'fgcolor' => array(0,0,0),
            'bgcolor' => false, //array(255,255,255)
            'module_width' => 1, // width of a single module in points
            'module_height' => 1 // height of a single module in points
        );
        PDF::write2DBarcode(url('paquete/pdf/'.$package->key), 'QRCODE, Q', 22, 20, 35, 35, $style, 'L');
        PDF::writeHTML($html, true, false, true, false, '');
        // PDF::Text(80, 205, 'QRCODE H - COLORED');
        PDF::Output('paquete-'.$package->key.'.pdf', 'I');
    }

    public function packagesCompany(){
        $user = User::where('id', auth()->user()->id)->first();
        $persona = $user->people;
        $company = $user->companies->first();
        $packages = Package::where('user_id', $user->id)
                    ->where('company_id', $company->id)
                    ->orderBy("created_at", "asc")
                    ->paginate(15);
        $n = 1;
        // dd($packages);
        return view('admin.packages.company', compact('packages', 'company', 'persona', 'n'));
    }
}
