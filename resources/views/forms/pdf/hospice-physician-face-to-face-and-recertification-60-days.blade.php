<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F2f encounter</title>
</head>


<style>
    body {
        height: 100%;
        padding: 2rem 3rem;
    }

    #head {
        width: 100%;
        height: 58px;
        border: 5px solid gray;
        color: black;
        padding-left: 10px;
        padding-right: 10px;
    }

    .main {
        background-color: lightblue;
        width: 100%;
    }

    #content {
        width: 100%;
        height: auto;
        border: 1px solid black;
        color: black;
        background-color: white;
        padding: 3px 8px;
        border-radius: 15px;
        /* padding-left: 10px;
        padding-right: 10px; */
    }

    h1 {
        text-align: center;
        font-size: 20px;
        color: black;
    }

    body {
        background-color: lightblue;
        height: auto;
        margin: auto 3rem;
    }

    .patient-info {
        background-color: white;
        padding: 3px 10px;
        border-radius: 15px;
        margin-bottom: 5px;
        border-top: 2px solid black;
        display: grid;
        grid-template-columns: 3fr 1fr 1fr;
    }

    .period {
        width: 100%;
        border-bottom: 2px solid black;
        padding: 8px 0;
        margin-bottom: 5px;
    }

    .np,
    .meddir {
        display: grid;
        grid-template-columns: 3fr 3fr 1fr;
        height: auto;
        border-top: 1px solid black;
        border-bottom: 1px solid black;
        margin-bottom: 5px;
    }


    .lines hr {
        color: black;
        border: 1px solid black;
    }

    input[type='text'] {
        background-color: transparent;
        outline: 0;
        border: none;
        width: 100%;
        font-size: 14px;
        border-bottom: 1px solid black;
    }

    input.w-38 {
        width: 38%;
    }

    input.w-48 {
        width: 48%;
    }

    input.w-35px {
        width: 35px;
    }

    input.w-100px {
        width: 100px;
    }

    @media print {
        input.input-data {
            width: 78px;
        }

        input.w-48 {
            width: 25%;
        }
    }
</style>
<body>
    <div class="main">
        {{-- <div class="brand-container">
            <div class="flex-container">
                <img src="https://i.ibb.co/kSr11h4/final.png" width="200" alt="final" border="0">
            </div>
        </div> --}}
        <div style="display: flex; flex-direction: row; align-items: flex-start;">
            <div style="display: flex; align-items: center">
                @if (!empty(Auth::user()->company_id))
                    <img src="{{ asset('/company_images/'.@Auth::user()->company->company_logo) }}" height="60" alt="final" border="0">&nbsp;
                    <h3>{{@Auth::user()->company->company_name}}</h3>
                @endif
            </div>
            <div class="heading" style="margin-left: auto">
                <h1 style="text-align: end;">PHYSICIAN FACE-TO-FACE ENCOUNTER/ <br> RECERTIFICATION OF TERMINAL ILLNES <br> 60-DAY
                    PERIODS
                </h1>
            </div>
        </div> 
        
        <div class="patient-info">
            <p>Patient Name: <input type="text"></p>
            <p style="border-left: 1px solid black;">&nbsp;ID#<input type="text"></p>
            <p style="border-left: 1px solid black;">&nbsp;Admission Date<input type="text"></p>
        </div>
        </div>
        <div id="content">
            <div class="period">
                <span style="padding: 3px 5px; background-color: rgb(57, 56, 56); color: white; font-weight: bold;">BENEFIT
                    PERIOD</span>
                <span>60 Day Period from<input type="text" class="w-100px"> to <input type="text" class="w-100px"></span>
            </div>
            <span style="padding: 3px 5px; background-color: rgb(180, 176, 176); font-weight: bold;">Face to Face
                Encounter</span> (Note: Must be completed no more than 30 days prior to this benefit period )<br></br>
            <strong> Hospice Nurse Practitioner Attestation:</strong> I confirm that I had a face-to-face encounter with
            <input type="text" class="input-data w-38"> <em>(Patient's Name)</em><br></br>
            on <input type="text" class="w-35px">/<input type="text" class="w-35px">/<input type="text" class="w-35px"> <em>(Date)</em> and that the clinical findings of that encounter have been provided to
            the
            certifyinng physician for use in determining<br></br>
            continued eligibity for hospice care.<br>
            <div class="np">
                <div>NP Name (Printed): <input type="text"> </div>
                <div style="border-left: 1px solid black;">&nbsp;NP Signature: <input type="text"></div>
                <div style="border-left: 1px solid black;">&nbsp;Date: <input type="text"></div>
            </div>
            <strong>Physician Attestation:</strong> I confirm that I had a face-to-face encounter
            with <input type="text" class="w-48"> <em>(Patient's Name)</em><br>
            on <input type="text" class="w-35px">/<input type="text" class="w-35px">/<input type="text" class="w-35px"> <em>(Date)</em> and that I used clinical findings of that encounter in determining
            continued
            eligibility for hospice care.
            <div class="meddir">
                <div>Hospice Medical Director or Designee Name <em>(Printed) <input type="text"></em>:</div>
                <div style="border-left: 1px solid black;">&nbsp;Hospice Medical Director or Designee Signature: <input type="text"></div>
                <div style="border-left: 1px solid black;">&nbsp;Date: <input type="text"></div>
            </div>
            <span style="padding: 3px 5px; background-color: rgb(180, 176, 176); font-weight: bold;">Recertification
                Statement:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; I recertify that I have reviewed the clinical record prior
            to recertification for the above noted patient and that<br>
            patient is still considered to be trminally ill and has a life expectancy of six (6) months or less, if the
            terminal illness runs its normal course.
            <div class="pisisian">
                <span style="padding: 3px 5px; background-color: rgb(180, 176, 176);">
                    <strong>Physician Brief Narrative Statement:</strong></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (Note: Must
                be completed no more than 15 days prior to
                recertification)<br>
                Review the patient's clinical circumtances and synthesize the medical information to provide clinical
                justification for continued Hospice services.
            </div>
            <div class="lines">
                <hr>
                <input type="text">
                <hr>
                <input type="text">
                <hr>
                <input type="text">
                <hr>
                <input type="text">
                <hr>
                <input type="text">
                <hr>
            </div>
            <div style="border-bottom: 1px solid black; margin-bottom: 5px;">Attestation: I confirm that I composed this narrative based on my review of the patient's medical record and/or
                examination of the patient.
            </div>
            
            <div class="meddir">
                <div>Hospice Medical Director or Designee Name <em>(Printed) <input type="text"></em>:</div>
                <div style="border-left: 1px solid black;">&nbsp;Hospice Medical Director or Designee Signature: <input type="text"></div>
                <div style="border-left: 1px solid black;">&nbsp;Date: <input type="text"></div>
            </div>
            <div class="period">
                <span style="padding: 3px 5px; background-color: rgb(57, 56, 56); color: white; font-weight: bold;">BENEFIT
                    PERIOD</span>
                    <span>60 Day Period from <input type="text" class="w-100px"> to <input type="text" class="w-100px"></span>
            </div>
            <span style="padding: 3px 5px; background-color: rgb(180, 176, 176);"><strong>Face to Face Encounter</strong></span> (Note: Must
            be completed no more than 30 days prior to this benefit period )
            <br>
            <br>
            <strong>Hospice Nurse Practitioner Attestation:</strong> I confirm that I had a face-to-face encounter
            with <input type="text" class="w-38"> <em>(Patient's Name)</em><br>
            on <input type="text" class="w-35px"> / <input type="text" class="w-35px"> / <input type="text" class="w-35px"> <em>(Date)</em> and that I used clinical findings of that encounter in determining
            continued
            eligibility for hospice care.
            <br>
            <br>
            <div class="np">
                <div>NP Name (Printed):</div>
                <div style="border-left: 1px solid black;">&nbsp;NP Signature:</div>
                <div style="border-left: 1px solid black;">&nbsp;Date:</div>
            </div>
            <strong>Physician Attestation:</strong> I confirm that I had a face-to-face encounter
            with <input type="text" class="w-48"> <em>(Patient's Name)</em><br>
            on <input type="text" class="w-35px"> / <input type="text" class="w-35px"> / <input type="text" class="w-35px"> <em>(Date)</em> and that I used clinical findings of that encounter in determining
            continued
            eligibility for hospice care.
            <br>
            <br>
            <div class="meddir">
                <div>Hospice Medical Director or Designee Name <em>(Printed) <input type="text"></em>:</div>
                <div style="border-left: 1px solid black;">&nbsp;Hospice Medical Director or Designee Signature: <input type="text"></div>
                <div style="border-left: 1px solid black;">&nbsp;Date: <input type="text"></div>
            </div>
            <br>
            <div style="border-bottom: 1px solid black;">
                <span style="padding: 3px 5px; background-color: rgb(180, 176, 176);">Recertification
                    Statement:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; I recertify that I have reviewed the clinical record prior
                to recertification for the above noted patient and that<br>
                patient is still considered to be trminally ill and has a life expectancy of six (6) months or less, if the
                terminal illness runs its normal course.
            </div>
            <br>
            <div style="border-bottom: 1px solid black;">
                <span style="padding: 3px 5px; background-color: rgb(180, 176, 176);">Physician Brief Narrative
                    Statement:</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (Note: Must be completed no more than 15 days prior to
                recertification)<br>
                Review the patient's clinical circumtances and synthesize the medical information to provide clinical
                justification for continued Hospice services.
            </div>
            <div class="lines">
                <hr>
                <input type="text">
                <hr>
                <input type="text">
                <hr>
                <input type="text">
                <hr>
                <input type="text">
                <hr>
                <input type="text">
                <hr>
            </div>
            <div style="border-bottom: 1px solid black;">
                Attestation: I confirm that I composed this narrative based on my review of the patient's medical record and/or
                examination of the patient.
            </div>
            <div class="meddir">
                <div>Hospice Medical Director or Designee Name <em>(Printed) <input type="text"></em>:</div>
                <div style="border-left: 1px solid black;">&nbsp;Hospice Medical Director or Designee Signature: <input type="text"></div>
                <div style="border-left: 1px solid black;">&nbsp;Date: <input type="text"></div>
            </div>
        </div>
    </div>
</body>
</html>