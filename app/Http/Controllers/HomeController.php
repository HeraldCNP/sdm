<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Post;
use Illuminate\Http\Request;
use PDF;
use Artesaos\SEOTools\Facades\SEOTools;

class HomeController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('Laboratorio Químico Instrumental San Martin');
        SEOTools::setDescription('Laboratorio Químico Instrumental San Martin de la ciudad de Potosí Bolivia realizamos análisis de minerales confiables, rápidos y precisos');
        SEOTools::opengraph()->setUrl('http://labsanmartin.com.bo');
        SEOTools::setCanonical('http://labsanmartin.com.bo');
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('@labsanmartin');
        SEOTools::jsonLd()->addImage('http://labsanmartin.com.bo/img/logo/logo.png');


        $posts = Post::latest()
            ->take(3)
            ->get();
        // foreach($posts as $post){
        //     dd($post->category);
        // }
        return view('welcome', compact('posts'));
        // return view('welcome');
    }

    public function createPdf($key){
        // dd($id);
        // Gate::authorize('haveAccess', 'package.show');
        // $package = Package::findorfail($key);
        $packa = Package::where('key', '=', $key)->get();
        $package = $packa[0];

        // $certificate = 'file://'.base_path().'/public/labo.crt';
        $certificate = 'file://'.base_path().'/cert.crt';

        $primaryKey =  'file://'.base_path().'/key.pem';

        $info = array(
            'Name' => 'Laboratorio Quimico Instrumental San Martin',
            'Location' => 'Potosí - Bolivia',
            'Reason' => 'Certificado Digital de Analisis Quimico de Minerales',
            'ContactInfo' => 'https://www.labsanmartin.com.bo',
        );
        $view = \Illuminate\Support\Facades\View::make('admin.packages.pdf2', compact('package'));

        $html = $view->render();

        // PDF::setSignature($certificate, $primaryKey, 'tcpdfdemo', '', 2, $info);
        PDF::setSignature($certificate, $primaryKey, 'micelU76252989', '', 2, $info);
        PDF::SetMargins(5, 5, 5);
        PDF::SetAutoPageBreak(TRUE, 2);
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
        PDF::Output('paquete-'.$package->code.'.pdf');
    }
}
