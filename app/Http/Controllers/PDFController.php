<?php

namespace App\Http\Controllers;

use App\Models\UserForm;
use Illuminate\Http\Request;
use Elibyy\TCPDF\Facades\TCPDF;

// reference the Dompdf namespace
use Dompdf\Dompdf;

class PDFController extends Controller
{
    public function encode_form(UserForm $userForm)
    {
        if($userForm->form->slug == 'spiritual-care-initial-assessment-and-care-plan'){
            // return view('forms.encode.spiritual-care-initial-assessment-and-care-plan', [
            //     'userForm' => $userForm
            // ]);
            return view('forms.pdf.spiritual-care-initial-assessment-and-care-plan');
        }
        if($userForm->form->slug == 'hospice-homehealth-aide-charting'){
            // return view('forms.encode.hospice-homehealth-aide-charting', [
            //     'userForm' => $userForm
            // ]);
            return view('forms.pdf.hospice-homehealth-aide-charting');
        }
        
        if($userForm->form->slug == 'hospice-bereavement-initial-and-care-plan'){
            return view('forms.pdf.hospice-bereavement-initial-and-care-plan');
        }
        if($userForm->form->slug == 'hospice-initial-order-form'){
            return view('forms.pdf.hospice-initial-order-form');
        }
        if($userForm->form->slug == 'hospice-social-worker-initial-assessment-form'){
            return view('forms.pdf.hospice-social-worker-initial-assessment-form');
        }
    }

    public function print_form(Request $request, UserForm $userForm)
    {
        if($userForm->form->slug == 'spiritual-care-initial-assessment-and-care-plan'){
            //dd($request);
            //$data = $request;
            //$this->generate_pdf($data, $userForm->form->slug);
            return view('forms.pdf.spiritual-care-initial-assessment-and-care-plan', [
                'data' => $request
            ]);
        }
        if($userForm->form->slug == 'hospice-homehealth-aide-charting'){
            return view('forms.pdf.hospice-homehealth-aide-charting', [
                'data' => $request
            ]);
        }
    }

    public function generate_pdf($data, $slug)
    {        
        //dd('xxx');
        // $html = '';

        // $view = \View::make('forms.pdf.'.$slug, $data);
        // $html = $view->render();

        // $pdf = new TCPDF;
        
        // $pdf::SetTitle($slug);
        // $pdf::AddPage('L', 'A4');
        // $pdf::writeHTML($html, true, false, true, false, '');

        // $pdf::Output($slug.'.pdf');       

        // // instantiate and use the dompdf class
        // $dompdf = new Dompdf();
        // $dompdf->loadHtml(view('forms.pdf.'.$slug));

        // // (Optional) Setup the paper size and orientation
        // $dompdf->setPaper('A4', 'landscape');

        // // Render the HTML as PDF
        // $dompdf->render();

        // // Output the generated PDF to Browser
        // $dompdf->stream($slug, ['Attachment' => false]);

        return view('forms.pdf.'.$slug);
    }
}
