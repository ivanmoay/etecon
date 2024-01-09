<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospice Clinical Review</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body,
        html {
            width: 100%;
            height: 100%;
        }

        body {
            font-family: sans-serif;
            font-size: 14px;
        }

        p.text-secondary {
            font-size: 1rem;
        }

        .bg-primary {
            background-color: white;
        }

        .bl {
            border-left: 1px solid black;
        }

        .bt {
            border-top: 1px solid black;
        }

        .pl-3 {
            padding-left: 3px;
        }

        .text-bold {
            font-weight: bold;
        }

        .A4 {
            width: 1240px;
            height: auto;
            margin: 2rem auto;
            background: radial-gradient(circle at 10% 20%, rgb(163, 175, 243) 0%, rgb(220, 182, 232) 100.2%);
            padding: 20px 12px;
            border-radius: 18px;
        }

        .brand-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 1rem;
        }

        .title div.choices-heading {
            width: 40%;
            border: 1px solid black;
            border-radius: 15px;
            height: 2.5rem;
            padding: 8px 10px;
            display: flex;
            justify-content: space-between;
        }

        .title h1.heading {
            text-align: right;
        }

        .patient-info {
            display: grid;
            grid-template-columns: 4fr 2fr 1fr;
        }


        .test-uwu {
            display: grid;
            grid-template-columns: 1fr 2fr;
            border-bottom: 1px solid black;
        }

        .table {
            margin-top: 8px;
            color: purple;
            border: 2px solid purple;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 2fr 1fr 1fr;
        }

        div.table div.heading {
            display: grid;
            place-items: center;
            text-align: center;
        }

        span.unik {
            font-weight: 200;
            color: black;
        }

        hr {
            height: 1px;
            border: 0;
            background-color: rgba(0, 0, 0, 0.295);
        }

        input[type='text'],
        input[type='score'],
        input[type='scale'],
        input[type='comment'],
        input[type='input-uwu'],
        input[type='comment'],
        input[type='input-days'],
        input[type='time-input'] {
            background-color: transparent;
            margin-left: 2px;
            font-size: 1rem;
            outline: 0;
            border: none;
            width: 95%;
            height: 1.5rem;
        }

        input[type='score'],
        input[type='scale'],
        input[type='comment'] {
            margin: 0;
            width: 100%;
            height: auto;
            padding-left: 3px;
        }

        input[type='scale'] {
            width: 80%;
        }

        input[type='comment'] {
            width: 100%;
            height: 2rem;
            border-bottom: 1px solid black;
        }

        H3.heading {
            text-align: center;
            color: white;
            border-radius: 12px;
            margin: 5px 0;
            padding: 3px 0;
            background-color: purple;
        }

        div.changes {
            font-size: 1rem;
        }

        div.comments {
            padding-top: 10px;
        }

        div.eligibility {
            padding: 10px 1rem;
            border: 1px solid black;
            border-left: 0;
            border-right: 0;
        }

        .signature {
            display: grid;
            font-size: 1.2rem;
            grid-template-columns: 4fr 1fr;
            border-bottom: 1px solid black;
        }
    </style>
</head>

<body>
    <div class="A4">
        {{-- <div class="brand-container">
            <img src="https://i.ibb.co/kSr11h4/final.png" width="200" alt="final" border="0">
        </div> --}}
        <div style="display: flex; flex-direction: row; align-items: flex-start; margin-bottom: 1rem;">
            <div style="display: flex; align-items: center">
                @if (!empty(Auth::user()->company_id))
                    <img src="{{ asset('/company_images/'.@Auth::user()->company->company_logo) }}" height="60" alt="final" border="0">&nbsp;
                    <h3>{{@Auth::user()->company->company_name}}</h3>
                @endif
            </div>
        </div>
        <div class="title b-bot bg-primary">
            <div class="choices-heading">
                <h2><input type="checkbox"> ADMISSION</h2>
                <h2><input type="checkbox"> RECERTIFICATION</h2>
            </div>
            <h1 class="heading">CLINICAL REVIEW FOR SUPPORT OF <br> HOSPICE ELIGIBILITY</h1>
        </div>

        <div class="patient-info bt bg-primary">
            <div class="basic-info pl-3">
                <p class="text-secondary pad-l">Patient Name (First, MI, Last)</p>
                <input type="text">
            </div>
            <div class="id-container pl-3 bl">
                <p class="text-secondary pad-l">ID#:</p>
                <input type="text">
            </div>
            <div class="age-container pl-3 bl">
                <p class="text-secondary pad-l">Age:</p>
                <input type="text">
            </div>
        </div>
        <div class="basic-info pl-3 bt bg-primary">
            <p class="text-secondary pad-l">Primary Terminal Diagnosis:</p>
            <input type="text">
        </div>
        <div class="basic-info pl-3 bt bg-primary">
            <p class="text-secondary pad-l">If Cancer, Primary Site/Cell Type:</p>
            <input type="text">
        </div>
        <div class="basic-info pl-3 bt bg-primary">
            <p class="text-secondary pad-l">Past Chemotherapy/Radiation Treatment(s) Date:</p>
            <input type="text">
        </div>
        <div class="basic-info pl-3 bt bg-primary">
            <p class="text-secondary pad-l">Current or Planned Treatment:</p>
            <input type="text">
        </div>
        <div class="test-uwu basic-info pl-3 bt bg-primary">
            <div>
                <p class="text-secondary pad-l">Last Hospitalization Date:</p>
                <input type="text">
            </div>
            <div class="bl pl-3">
                <p class="text-secondary pad-l">Reason:</p>
                <input type="text">
            </div>
        </div>

        <div class="table bg-primary">
            <div class="heading text-bold">
                SCALES AND TOOLS
            </div>
            <div class="heading bl text-bold">
                ADMISSION <br> SCORE
            </div>
            <div class="heading bl text-bold">
                CURRENT <br> SCORE
            </div>
            <div class="heading bl text-bold">
                SCALES AND TOOLS
            </div>
            <div class="heading bl text-bold">
                ADMINSSION <br> SCORE
            </div>
            <div class="heading bl text-bold">
                CURRENT <br> SCORE
            </div>
            <div class="bt text-bold pl-3">Karnofsky Scale</div>
            <div class="bl bt"><input type="score"></div>
            <div class="bl bt"><input type="score"></div>
            <div class="bl bt text-bold pl-3">NYHA Classification <span class="unik">(Cardiac Diagnosis)</span></div>
            <div class="bl bt"><input type="score"></div>
            <div class="bl bt"><input type="score"></div>
            <div class="bt text-bold pl-3">Palliative Performance Scale</div>
            <div class="bl bt"><input type="score"></div>
            <div class="bl bt"><input type="score"></div>
            <div class="bl bt text-bold pl-3">Weight: <input type="scale"></div>
            <div class="bl bt"><input type="score"></div>
            <div class="bl bt"><input type="score"></div>
            <div class="bt text-bold pl-3">BMI</div>
            <div class="bl bt"><input type="score"></div>
            <div class="bl bt"><input type="score"></div>
            <div class="bl bt text-bold pl-3">Other: <input type="scale"></div>
            <div class="bl bt"><input type="score"></div>
            <div class="bl bt"><input type="score"></div>
            <div class="bt text-bold pl-3">FAST Scale <span class="unik">(Dementia Diagnosis)</span></div>
            <div class="bl bt"><input type="score"></div>
            <div class="bl bt"><input type="score"></div>
            <div class="bl bt text-bold pl-3">Other: <input type="scale"></div>
            <div class="bl bt"><input type="score"></div>
            <div class="bl bt"><input type="score"></div>
        </div>
        <h3 class="heading">CLINICAL INDICATORS OF DISEASE PROGRESSION</h3>
        <div class="changes bg-primary">
            <div class="basic-info pl-3">
                <p class="text-secondary pad-l">Infections: (History Type/Date)</p>
                <hr>
                <input type="text">
            </div>
            <div class="basic-info pl-3 bt">
                <p class="text-secondary pad-l">Skin/Wound Changes: (Specify)</p>
                <hr>
                <input type="text">
            </div>
            <div class="basic-info pl-3 bt">
                <p class="text-secondary pad-l">Pain Changes: (Specify)</p>
                <hr>
                <input type="text">
            </div>
            <div class="basic-info pl-3 bt">
                <p class="text-secondary pad-l">Symptom Changes: (Specify)</p>
                <hr>
                <input type="text">
            </div>
            <div class="basic-info pl-3 bt">
                <p class="text-secondary pad-l">Functional indicators of disease progression and terminal diagnosis:
                    (i.e., describe change in ADL status, mobility, ability to care for self)</p>
                <hr>
                <input type="comment">
                <input type="comment">
                <input type="comment">
                <input type="comment">
            </div>
            <div class="basic-info pl-3">
                <p class="text-secondary pad-l">Psychosocial/Spiritual changes: (i.e., life closure, personal
                    relationship, will to live)</p>
                <hr>
                <input type="text">
            </div>
            <div class="basic-info pl-3 bt">
                <p class="text-secondary pad-l">Significant co-morbidities affecting terminal diagnosis:</p>
                <hr>
                <input type="text">
            </div>
            <div class="basic-info pl-3 bt">
                <p class="text-secondary pad-l">Pertinent Abnormal Lab/Diagnostic Studies/Dates:</p>
                <hr>
                <input type="text">
            </div>
        </div>
        <div class="eligibility bg-primary">
            <p class="text-secondary pl-3">Hospice Eligibility:</p>
            <br>
            <p class="text-secondary pl-3"><input type="checkbox"> IDG and Physician determine client is eligible for
                Hospice Services</p>
            <p class="text-secondary pl-3"><input type="checkbox"> IDG and Physician determine client is NOT eligible
                for Hospice Services</p>
            <p class="text-secondary pl-3"><input type="checkbox"> Discharge Planning initiated</p>
        </div>
        <div class="comments bg-primary">
            <p class="text-secondary pl-3 text-bold">Additional Comments</p>
            <hr>
            <input type="comment">
            <input type="comment">
            <input type="comment">
        </div>

        <div class="signature bg-primary">
            <div class="text-secondary pl-3">Nurse Signature: <input type="text"></div>
            <div class="bl pl-3">Date: <input type="text"></div>
            <div class="bt pl-3">Physician Signature: (optional per agency policy) <input type="text"></div>
            <div class="bt bl pl-3">Date: <input type="text"></div>
        </div>
    </div>
</body>

</html>