<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Person;
use Carbon\Carbon;
use Illuminate\Http\Request;





class ReportController extends Controller
{

    public function searchPackageDate(){
        return view('admin.reports.searchDate');
    }

    public function searchPackageUser(){
        return view('admin.reports.searchUser');
    }


    public function returnReportUser(Request $request){

        $persona = Person::where('ci', $request->ci)->first();
        $packages = $persona->user->packages()->get();
        // dd($packages);
        return view('admin.reports.user', compact('packages', 'persona'));
    }


    public function returnReportDate(Request $request){
        // dd($request->all());
        // $package = Package::find(1);
        // $packages = Package::orderBy('id', 'asc')->paginate(10);

        $from = Carbon::create($request->from);
        $to = Carbon::create($request->to);
        $to->addHours(23);
        // dd($to);


        $packages = Package::whereBetween('created_at', [$from, $to])->get();
        // $packages = Package::whereDate('created_at', '=', Carbon::now()->format('Y-m-d'))->paginate(10);
        $packagesT = Package::whereBetween('created_at', [$from, $to])->get();
        $total = 0;
        foreach($packagesT as $package){
            $totalPaquete = 0;
            foreach($package->elements as $element){
                $totalPaquete += $element->price;
            }
            $total += $totalPaquete;
        }
        return view('admin.reports.date', compact('packages', 'total', 'from', 'to'));
    }
}
