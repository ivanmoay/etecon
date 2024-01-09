<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use App\Models\Form;
use App\Models\UserForm;

// reference the Dompdf namespace
use Illuminate\Http\Request;
use Elibyy\TCPDF\Facades\TCPDF;

class PDFController extends Controller
{
    public function encode_form(Form $form)
    {
        if($form->slug == 'spiritual-care-initial-assessment-and-care-plan'){
            // return view('forms.encode.spiritual-care-initial-assessment-and-care-plan', [
            //     'userForm' => $userForm
            // ]);
            return view('forms.pdf.spiritual-care-initial-assessment-and-care-plan');
        }
        if($form->slug == 'hospice-homehealth-aide-charting'){
            // return view('forms.encode.hospice-homehealth-aide-charting', [
            //     'userForm' => $userForm
            // ]);
            return view('forms.pdf.hospice-homehealth-aide-charting');
        }        
        
        if($form->slug == 'patient-chart-audit-and-monitoring'){
            return view('forms.pdf.patient-chart-audit-and-monitoring');
        } 
        if($form->slug == 'hospice-nursing-visit-note'){
            return view('forms.pdf.hospice-nursing-visit-note');
        } 
        if($form->slug == 'hospice-revocation-form'){
            return view('forms.pdf.hospice-revocation-form');
        } 
        if($form->slug == 'hospice-clinical-review'){
            return view('forms.pdf.hospice-clinical-review');
        } 
        if($form->slug == 'homemaker-companion-022-tc'){
            return view('forms.pdf.homemaker-companion-022-tc');
        } 
        if($form->slug == 'hha-weekly-report'){
            return view('forms.pdf.hha-weekly-report');
        } 
        if($form->slug == 'hha-progress-notes'){
            return view('forms.pdf.hha-progress-notes');
        }  
        if($form->slug == 'hha-care-plan'){
            return view('forms.pdf.hha-care-plan');
        }   
        if($form->slug == 'spiritual-care-clinical-note'){
            return view('forms.pdf.spiritual-care-clinical-note');
        }   
        if($form->slug == 'skilled-nursing-clinical-note'){
            return view('forms.pdf.skilled-nursing-clinical-note');
        }   
        if($form->slug == 'hospice-physician-face-to-face-and-recertification-60-days'){
            return view('forms.pdf.hospice-physician-face-to-face-and-recertification-60-days');
        }      
        if($form->slug == 'hospice-interdiciplinary-care-plan'){
            return view('forms.pdf.hospice-interdiciplinary-care-plan');
        }
        if($form->slug == 'hospice-initial-order-form'){
            return view('forms.pdf.hospice-initial-order-form');
        }
        if($form->slug == 'hospice-bereavement-initial-and-care-plan'){
            return view('forms.pdf.hospice-bereavement-initial-and-care-plan');
        }
        if($form->slug == 'hospice-initial-order-form'){
            return view('forms.pdf.hospice-initial-order-form');
        }
        if($form->slug == 'hospice-social-worker-initial-assessment-form'){
            return view('forms.pdf.hospice-social-worker-initial-assessment-form');
        }
        if($form->slug == 'hospice-rn-recertification'){
            return view('forms.pdf.hospice-rn-recertification');
        }
        if($form->slug == 'hospice-volunteer-initial-assessment-and-care-plan'){
            return view('forms.pdf.hospice-volunteer-initial-assessment-and-care-plan');
        }
        if($form->slug == 'hospice-spiritual-care-clinical-note'){
            return view('forms.pdf.hospice-spiritual-care-clinical-note');
        }
        if($form->slug == 'hospice-md-initial-recertification-order'){
            return view('forms.pdf.hospice-md-initial-recertification-order');
        } 
        if($form->slug == 'hospice-sw-clinical-notes'){
            return view('forms.pdf.hospice-sw-clinical-notes');
        }  
        if($form->slug == 'hospice-social-worker-clinical-note'){
            return view('forms.pdf.hospice-social-worker-clinical-note');
        }  
        if($form->slug == 'hospice-physician-certification-initial-and-second-bp-90-days'){
            return view('forms.pdf.hospice-physician-certification-initial-and-second-bp-90-days');
        }  
        if($form->slug == 'hospice-patient-information-sheet'){
            return view('forms.pdf.hospice-patient-information-sheet');
        }  
        if($form->slug == 'hospice-patient-emergency-preparedness-plan-form'){
            return view('forms.pdf.hospice-patient-emergency-preparedness-plan-form');
        }  
        if($form->slug == 'hospice-initial-comprehensive-nursing-assessment'){
            return view('forms.pdf.hospice-initial-comprehensive-nursing-assessment');
        } 
        if($form->slug == 'hospice-discharge-and-transfer-summary'){
            return view('forms.pdf.hospice-discharge-and-transfer-summary');
        }
        if($form->slug == 'hospice-narcotics-disposal-form'){
            return view('forms.pdf.hospice-narcotics-disposal-form');
        }    
        
    }

    public function print_form(Request $request, UserForm $userForm)
    {
        // if($form->slug == 'spiritual-care-initial-assessment-and-care-plan'){
        //     //dd($request);
        //     //$data = $request;
        //     //$this->generate_pdf($data, $form->slug);
        //     return view('forms.pdf.spiritual-care-initial-assessment-and-care-plan', [
        //         'data' => $request
        //     ]);
        // }
        // if($form->slug == 'hospice-homehealth-aide-charting'){
        //     return view('forms.pdf.hospice-homehealth-aide-charting', [
        //         'data' => $request
        //     ]);
        // }
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
