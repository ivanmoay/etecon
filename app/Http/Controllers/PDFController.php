<?php

namespace App\Http\Controllers;

use App\Models\UserForm;
use Illuminate\Http\Request;
use Elibyy\TCPDF\Facades\TCPDF;

class PDFController extends Controller
{
    public function encode_form(UserForm $userForm)
    {
        if($userForm->form->slug == 'spiritual-care-initial-assessment-and-care-plan'){
            return view('forms.encode.spiritual-care-initial-assessment-and-care-plan', [
                'userForm' => $userForm
            ]);
        }
    }

    public function print_form(Request $request, UserForm $userForm)
    {
        if($userForm->form->slug == 'spiritual-care-initial-assessment-and-care-plan'){
            //dd($request);
            //$data = $request;
            $data = [
    		    'service' => 'Hello world!'
    	    ];
            $this->generate_pdf($data, $userForm->form->slug);
        }
    }

    public function generate_pdf($data, $slug)
    {        
        $html = '';

        $view = \View::make('forms.pdf.'.$slug, $data);
        $html = $view->render();

        $pdf = new TCPDF;
        
        $pdf::SetTitle($slug);
        $pdf::AddPage('L', 'A4');
        $pdf::writeHTML($html, true, false, true, false, '');

        $pdf::Output($slug.'.pdf');
    }
}
