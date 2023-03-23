<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Person;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;
use PhpParser\Node\Stmt\Foreach_;

class ReportController extends Controller
{

    public function searchPackageDate(){
        return view('admin.reports.searchDate');
    }

    public function searchPackageUser(){
        return view('admin.reports.searchUser');
    }

    public function searchReportDay(){
        return view('admin.reports.searchDay');
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


    public function reportDay(Request $request){
        $day = Carbon::create($request->day);
        $packages = Package::whereDate('created_at', $day)->get();

        $view = \Illuminate\Support\Facades\View::make('admin.packages.dayPdf', compact('packages'));

        $html = $view->render();

        PDF::SetMargins(2, 2, 2);
        PDF::SetAutoPageBreak(TRUE, 2);
        PDF::SetTitle('Certificado de Analisis');
        PDF::AddPage('P', 'A5');

        PDF::writeHTML($html, true, false, true, false, '');
        PDF::Output('reporte '.$packages[0]->created_at.'.pdf');
    }

    public function somePackage(){
        return view('admin.reports.somePackage');
        
    }

    public function reportSome(Request $request){
        
        $codes = $request->codes;
        // dd($codes);
        foreach($codes as $code){
            $packages[] = Package::find($code);
        }
        

        // foreach ($packages as $package) {
            
        //     foreach ($package->elements as $element) {
        //         dd($package->elements->last());
        //         if(!$package->elements->last()){
                    
        //         }
        //         else{
        //             dd($package->elements->last());
        //         }
        //     }
        // }

        $info = array(
            'Name' => 'Laboratorio Quimico SDM',
            'Location' => 'Potosí - Bolivia',
            'Reason' => 'Certificado Digital de Analisis Quimico de Minerales',
            'ContactInfo' => '',
        );
        $view = \Illuminate\Support\Facades\View::make('admin.packages.somePdf', compact('packages'));

        $html = $view->render();

        PDF::SetMargins(2, 2, 2);
        PDF::SetAutoPageBreak(TRUE, 2);
        PDF::SetTitle('Certificado de Analisis');
        PDF::AddPage('P', 'A5');

        PDF::writeHTML($html, true, false, true, false, '');
        // PDF::Text(80, 205, 'QRCODE H - COLORED');
        PDF::Output('reporte '.$packages[0]->company->name.'-'.$packages[0]->updated_at.'.pdf');
        // return view('admin.reports.some', compact('packages'));
    }





    
}
