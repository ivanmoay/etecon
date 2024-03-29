<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospice Nursing Visit Note</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 14px;
            margin: 0 5px;
        }

        @page {
            size: A4 portrait;
            margin: 1cm;
            background-color: gray;
        }

        .flex {
            display: flex;
        }

        .brand-container {
            justify-content: space-between;
            align-items: center;
            height: auto;
        }

        .form-container {
            background-color: #41FDFE;
            height: auto;
            width: 100%;
            border-radius: 12px;
            margin-top: 5px;
            padding: 5px 3px;
        }

        .info {
            min-height: 3.1rem;
            display: grid;
            grid-template-columns: 3fr 1fr 2fr;
        }

        .text-primary {
            font-weight: 500;
            font-size: 14px;
        }

        .skill-observation h2 {
            background-color: #BC13FE;
            color: white;
            text-align: center;
            border-radius: 10px;
            padding: 2px 0;
        }

        .text-last {
            text-align: right;
        }

        input[type='text'],
        input[type='text-yow'] {
            background-color: transparent;
            /* background-color: red; */
            margin-left: 3px;
            font-size: 14px;
            outline: 0;
            border: none;
            width: 80%;
            height: 1.5rem;
            border-bottom: 1px solid black;
        }


        .pl-3 {
    padding-left: 3px;
}

.w-100 {
    width: 100%;
}

.bl-1 {
    border-left: 1px solid black;
}

.bb-1 {
    border-bottom: 1px solid black;
}

input.other-input {
    width: 88% !important;
}

.heading {
    background-color: rgb(253, 253, 253);
    padding: 0 !important;
    margin: 0 !important;
    display: grid;
    grid-template-columns: 3fr 230px;
    column-gap: 3px;
}

.signature {
    background-color: rgba(242, 248, 242, 0.726);
    margin-top: 8px;
    padding: 10px 15px;
    border-top: 1px solid black;
    border-bottom: 1px solid black;
}

.sig-form {
    background-color: white;
    border-radius: 8px;
    padding: 3px 8px;
}

.sig-form .sign-col1 {
    display: grid;
    grid-template-columns: 3fr 1fr 1fr 2fr;
    border-bottom: 1px solid black;
    padding-bottom: 5px;
    margin-bottom: 5px;
}
.sig-form .sign-col2 {
    display: grid;
    grid-template-columns: 5fr 2fr;
}

hr.line {
    background-color: rgb(15, 13, 13);
    color: black;
    font-size: 5px;
    margin: 5px 0;
}

h2.skilled-heading {
    -webkit-border-top-left-radius: 31px;
    -webkit-border-bottom-left-radius: 31px;
    -moz-border-radius-topleft: 31px;
    -moz-border-radius-bottomleft: 31px;
    border-top-left-radius: 31px !important;
    border-bottom-left-radius: 31px !important;
    padding: 0;
    margin-bottom: 3px;
}

h2.supervision-heading {
    -webkit-border-top-right-radius: 31px;
    -webkit-border-bottom-right-radius: 31px;
    -moz-border-radius-topright: 31px;
    -moz-border-radius-bottomright: 31px;
    border-top-right-radius: 31px !important;
    border-bottom-right-radius: 31px !important;
    margin-bottom: 3px;
}

span.idg {
    padding: 2px;
    border-radius: 5px;
    background-color: rgb(155, 153, 153);
    border: 1px solid black;
}

.total-container {
    display: grid;
}

.refer {
    background-color: white;
    margin-top: 5px;
    padding-bottom: 5px;
}

.total {
    background-color: #568203;
    padding-top: 3px;
    color: white;
}

.total>p {
    color: white;
}

input[type='table-input'] {
    background-color: transparent;
    margin-left: 3px;
    font-size: 12px;
    outline: 0;
    border: none;
    width: 50%;
    border-bottom: 1px solid black;
}

input[type='pain'] {
    background-color: transparent;
    margin-left: 3px;
    font-size: 12px;
    outline: 0;
    border: none;
    width: 50%;
    border-bottom: 1px solid black;
}

input[type='wound'] {
    background-color: transparent;
    margin-left: 3px;
    font-size: 12px;
    outline: 0;
    border: none;
    width: 95%;
    border-bottom: 1px solid black;
}

input[type='text-yow'] {
    width: 50% !important;

}

.text-secondary {
    font-size: 12px;
    color: black;
}

.col-1 div.wound {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
}

.signs-container {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    width: 100%;
}

.signs-container>div {
    background-color: white;
    border: 1px solid black;
    text-align: start;
    color: black;
    font-size: 12px;
}

.musc .spacer,
.pain .spacer {
    padding: 2.6px 0;
    padding-left: 3px;
}

.signs-container h2.text-primary,
.diagnosis h2.text-primary {
    background-color: #0165FC;
    color: black;
    text-align: center;
    font-size: 14px;
    margin-bottom: 3px;
}

.marcos {
    padding: 0 !important;
    margin: 0 !important;
}

.diagnosis {
    grid-template-columns: 200px 192px 168px 150px auto;
    border-bottom: 1px solid black;
    padding-bottom: 5px;
    display: grid;
    grid-auto-flow: column;
    text-align: start;
}

.diagnosis h2.text-primary {
    text-align: start;
}

.endocrine {
    display: grid;
    grid-template-columns: 1fr 145px 180px 4fr;
    border: 1px solid black;
    border-left: none;
    border-right: none;
}

.endocrine h2.text-primary {
    background-color: #0165FC;
    padding: 3px 0;
    padding-bottom: 5px;
    margin-right: 5px;
    font-size: 14px;
}

input.cus {
    width: 20% !important;
}

@media print {

    .w-add {
        width: 100px;
    }

    .signs-container {
        grid-template-columns: 140px 160px 130px 125px 1fr 110px;
    }

    .signs-container>div>p.test {
        width: 100px;
    }

    .signs-container>div>p.test>span.spacer {
        width: 100px;
        background-color: rgb(204, 91, 16);
    }

    input[type='text-yow'] {
        width: 40% !important;
    }

    input.cus {
        width: 8% !important;
    }

    .padder {
        padding-top: 4.5px;
    }
    .padder-8 {
        padding-top: 8px;
    }

    input.other-input {
        width: 73% !important;
    }

}
    </style>
</head>

<body>
    <div class="main">
        {{-- <div class="brand-container flex">
            <div class="logo">
                <img src="https://i.ibb.co/kSr11h4/final.png" width="150" alt="final" border="0">
            </div>
            <div class="title text-last">
                <h1>HOSPICE NURSING <br> CLINICAL NOTE</h1>
            </div>
        </div> --}}
        <div style="display: flex; flex-direction: row; align-items: flex-start; margin-top: 1rem;">
            <div style="display: flex; align-items: center">
                @if (!empty(Auth::user()->company_id))
                    <img src="{{ asset('/company_images/'.@Auth::user()->company->company_logo) }}" height="60" alt="final" border="0">&nbsp;
                    <h3>{{@Auth::user()->company->company_name}}</h3>
                @endif
            </div>
            <div class="title text-last" style="margin-left: auto">
                <h1>HOSPICE NURSING <br> CLINICAL NOTE</h1>
            </div>
        </div>  
        <div class="form-container">
            <div class="info">
                <div class="text-primary flex">
                    <p class="w-add">Patient Name</p>
                    <input type="text">
                </div>
                <div class="text-primary flex">
                    <p>ID#</p>
                    <input type="text">
                </div>
                <div class="text-primary flex">
                    <strong>DX:</strong>
                    <input type="text">
                </div>
            </div>

            <div class="observation-container">
                <div class="skill-observation">
                    <h2 class="text-primary">
                        SKILLED OBSERVATION
                    </h2>
                </div>
                <div class="signs-container">
                    <div>
                        <h2 class="text-primary">VITAL SIGNS</h2>
                        <p class="pl-3 padder">T &nbsp;&nbsp; <input type="table-input"></p>
                        <p class="pl-3 padder">P &nbsp;&nbsp; <input type="table-input"></p>
                        <p class="pl-3 padder">R &nbsp;&nbsp; <input type="table-input"></p>
                        <p class="pl-3">Wt <input type="table-input"></p>
                        <p class="pl-3">BP <input type="table-input"> right</p>
                        <p class="pl-3">&nbsp;&nbsp;&nbsp;&nbsp; <input type="table-input"> left</p>
                        <p class="pl-3 padder">Glucometer</p>
                        <p class="pl-3">BS <input type="table-input"></p>
                        <p class="pl-3 padder" style="width: 170px;"><input type="checkbox"> Standard Precautions</p>
                        <p class="pl-3">Maintained</p>
                    </div>
                    <div>
                        <h2 class="text-primary">CARDIOVASCULAR</h2>
                        <p class="pl-3 padder"><input type="checkbox"> No Deficit<input type="table-input"
                                style="width: 70px;">
                        </p>
                        <p class="pl-3 padder"><input type="checkbox"> Chest Pain<input type="table-input"
                                style="width: 70px;">
                        </p>
                        <p class="pl-3 padder"><input type="checkbox"> Heart Sound<input type="table-input"
                                style="width: 60px;"></p>
                        <p class="pl-3 padder" style="width: 170px;"><input type="checkbox"> Peripheral Pulses<input
                                type="table-input" style="width: 40px;"></p>
                        <p class="pl-3 padder"><input type="checkbox"> Dizziness<input type="table-input"
                                style="width: 80px;">
                        </p>
                        <p class="pl-3 padder"><input type="checkbox"> Ederma<input type="table-input"
                                style="width: 90px;">
                        </p>
                        <p class="pl-3 padder"><input type="checkbox"> Neck Vein Distention<input type="table-input"
                                style="width: 20px;"></p>
                        <p class="pl-3 padder"><input type="checkbox"> Arrhythmia<input type="table-input"
                                style="width: 70px;">
                        </p>
                        <p class="pl-3 padder"><input type="checkbox"> Unchanged since last visit </p>
                    </div>
                    <div>
                        <h2 class="text-primary">RESPIRATORY</h2>
                        <p class="pl-3 padder"><input type="checkbox"> No Deficit<input type="table-input"
                                style="width: 47px;">
                        </p>
                        <p class="pl-3 padder"><input type="checkbox"> Rale/Rhonchi<input type="table-input"
                                style="width: 30px;"></p>
                        <p class="pl-3"><input type="checkbox"> SOB <input type="table-input" style="width: 75px;"></p>
                        <p class="pl-3"><input type="checkbox"> Cough <input type="table-input" style="width: 60px;">
                        </p>
                        <p class="pl-3"><input type="checkbox"> Sputum <input type="table-input" style="width: 55px;">
                        </p>
                        <p class="pl-3"><input type="checkbox"> O<sub>2</sub> at<input type="table-input"
                                style="width: 73px;"></p>
                        <p class="pl-3"><input type="checkbox"> O<sub>2</sub> Sat<input type="table-input"
                                style="width: 66px;"></p>
                        <p class="pl-3 padder"><input type="checkbox"> Other<input type="table-input"
                                style="width: 70px;"></p>
                        <p class="pl-3 test padder"><input type="checkbox"> Unchanged since last visit</p>
                    </div>
                    <div>
                        <h2 class="text-primary">NEUROLOGICAL</h2>
                        <p class="pl-3 padder"><input type="checkbox"> No Deficit</p>
                        <p class="pl-3"><input type="checkbox"> Oriented to Person/ Place/Time</p>
                        <p class="pl-3"><input type="checkbox"> Seizures/Tremors SENSORY </p>
                        <p class="pl-3"><input type="checkbox"> Hearing Impaired </p>
                        <p class="pl-3 padder"><input type="checkbox"> Speech Impaired </p>
                        <p class="pl-3 padder"><input type="checkbox"> Visually Impaired</p>
                        <p class="pl-3 padder"><input type="checkbox"> Legally Blind</p>
                        <p class="pl-3 test padder"><input type="checkbox"> Unchanged since last visit</p>
                    </div>
                    <div>
                        <h2 class="text-primary">PYSCHOLOGICAL</h2>
                        <div class="flex">
                            <div>
                                <p class="pl-3 padder-8"><input type="checkbox"> No Deficit</p>
                                <p class="pl-3 padder-8"><input type="checkbox"> Confused</p>
                                <p class="pl-3 padder-8"><input type="checkbox"> Depressed</p>
                                <p class="pl-3 padder-8"><input type="checkbox"> Tearful </p>
                                <p class="pl-3 padder-8"><input type="checkbox"> Withdrawn</p>
                                <p class="pl-3 padder-8"><input type="checkbox"> Agitative</p>
                                <p class="pl-3 padder-8"><input type="checkbox"> Hostile</p>
                            </div>
                            <div>
                                <p class="pl-3 padder-8"><input type="checkbox"> Combative</p>
                                <p class="pl-3 padder-8"><input type="checkbox"> Restless</p>
                                <p class="pl-3 padder-8"><input type="checkbox"> Drowsy</p>
                                <p class="pl-3 padder-8"><input type="checkbox"> Semi-Comatose</p>
                                <p class="pl-3 padder-8"><input type="checkbox"> Comatose</p>
                                <p class="pl-3 padder-8"><input type="checkbox"> Lethargic</p>
                                <p class="pl-3 padder-8"><input type="checkbox"> Forgetful</p>
                            </div>
                        </div>
                        <p class="pl-3 padder-8"><input type="checkbox"> Unchanged since last visit</p>
                    </div>
                    <div>
                        <h2 class="text-primary">GU</h2>
                        <p class="pl-3"><input type="checkbox"> No Deficit</p>
                        <p class="pl-3"><input type="checkbox"> Incontinent</p>
                        <p class="pl-3"><input type="checkbox"> Distention</p>
                        <p class="pl-3"><input type="checkbox"> Retention</p>
                        <p class="pl-3"><input type="checkbox"> Burning</p>
                        <p class="pl-3"><input type="checkbox"> Frequency</p>
                        <p class="pl-3"><input type="checkbox"> Foleycath</p>
                        <p class="pl-3"><input type="checkbox"> Suprapubic</p>
                        <p class="pl-3">Size <input type="table-input" style="width: 25px;"> Fr</p>
                        <p class="pl-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="table-input"
                                style="width: 25px;"> ml</p>
                        <p class="pl-3"><input type="checkbox"> Unchanged since last visit</p>
                    </div>
                </div>
            </div>
            <div class="endocrine">
                <h2 class="text-primary">ENDOCRINE</h2>
                <div style="padding-top: 3px;">
                    <p class="text-secondary"><input type="checkbox"> No Deficit</p>
                </div>
                <div style="padding-top: 3px;">
                    <p class="text-secondary"><input type="checkbox"> Neuropathy/Radiculopathy</p>
                </div>
                <div>
                    <p class="text-secondary"><input type="checkbox"> Diabetes: FSBS results: <input type="text"
                            style="width: 63%;"></p>
                </div>
            </div>
            <div class="diagnosis">
                <div class="col-1">
                    <h2 class="text-primary pl-3">SKIN</h2>
                    <div class="flex"
                        style="justify-content: space-evenly; border-bottom: 1px solid black; padding-bottom: 3px;">
                        <div>
                            <p class="text-secondary"><input type="checkbox"> No Deficit</p>
                            <p class="text-secondary"><input type="checkbox"> Cool/Clammy</p>
                        </div>
                        <div>
                            <p class="text-secondary"><input type="checkbox"> Warm/Dry</p>
                            <p class="text-secondary"><input type="checkbox"> Turgor Adequate</p>
                        </div>
                    </div>
                    <div class="wound">
                        <div>
                            <p class="text-secondary">&nbsp; Wound #1 <br> &nbsp;&nbsp;Location</p>
                            <input type="wound">
                            <p class="text-secondary pl-3">L <input type="text"></p>
                            <p class="text-secondary pl-3">W <input type="text" style="width: 75%;"></p>
                            <p class="text-secondary pl-3">D <input type="text"></p>
                            <p class="text-secondary">&nbsp;Wound Bed</p>
                            <p class="text-secondary">&nbsp;&nbsp;Color <input type="text-yow"></p>
                            <p class="text-secondary">&nbsp;&nbsp;Tissue <input type="text-yow"></p>
                            <p class="text-secondary">&nbsp;Drainage</p>
                            <p class="text-secondary">&nbsp;&nbsp;Amt <input type="text-yow"></p>
                            <p class="text-secondary">&nbsp;&nbsp;Odor <input type="text-yow"></p>
                        </div>
                        <div class="bl-1">
                            <p class="text-secondary pl-3">Wound #2 <br> Location</p>
                            <input type="wound">
                            <p class="text-secondary pl-3">L <input type="text"></p>
                            <p class="text-secondary pl-3">W <input type="text" style="width: 75%;"></p>
                            <p class="text-secondary pl-3">D <input type="text"></p>
                            <p class="text-secondary">&nbsp;Wound Bed</p>
                            <p class="text-secondary">&nbsp;&nbsp;Color <input type="text-yow"></p>
                            <p class="text-secondary">&nbsp;&nbsp;Tissue <input type="text-yow"></p>
                            <p class="text-secondary">&nbsp;Drainage</p>
                            <p class="text-secondary">&nbsp;&nbsp;Amt <input type="text-yow"></p>
                            <p class="text-secondary">&nbsp;&nbsp;Odor <input type="text-yow"></p>
                        </div>
                    </div>
                    <div>&nbsp;&nbsp; <input type="checkbox"> Unchanged since last visit</div>
                </div>
                <div class="marcos bl-1">
                    <h2 class="text-primary pl-3">DIGESTIVE/NUTRITION</h2>
                    <p class="text-secondary pl-3 spacer padder"> <input type="checkbox"> No Deficit-Last BM <input
                            type="text" style="width: 55px;"></p>
                    <p class="text-secondary pl-3 spacer padder"> <input type="checkbox"> N/V <input
                            type="checkbox"> Diarrhea</p>
                    <p class="text-secondary pl-3 spacer padder"><input type="checkbox"> Constipation</p>
                    <p class="text-secondary pl-3 spacer padder"> <input type="checkbox"> Tube Feeding &nbsp;<input
                            type="checkbox"> NPO &nbsp;</p>
                    <p class="text-secondary pl-3 spacer padder">&nbsp;&nbsp;&nbsp;&nbsp; Type/Amt. <input type="text" style="width: 50%;">&nbsp;</p>
                    <p class="text-secondary pl-3 spacer padder"><input type="checkbox"> &check; Placement</p>
                    <p class="text-secondary pl-3 spacer"><input type="checkbox"> &check; Residual/Amt. <input type="text" style="width: 70px;"></p>
                    <p class="text-secondary pl-3 spacer padder"><input type="checkbox"> Bowel Sounds Present</p>
                    <p class="text-secondary pl-3 spacer"><input type="checkbox"> Abd. Girth <input type="text"
                            style="width: 90px;"></p>
                    <p class="text-secondary pl-3 spacer"><input type="checkbox"> Diet <input type="text"
                            style="width: 125px;"></p>
                    <p class="text-secondary pl-3 spacer padder"><input type="checkbox"> Meals Prepared & Administered</p>
                    <p class="text-secondary pl-3 spacer">&nbsp;&nbsp;&nbsp;&nbsp; Appropriately</p>
                    <p class="text-secondary pl-3 spacer padder"><input type="checkbox"> Ascites</p>
                    <p class="text-secondary pl-3 spacer padder"><input type="checkbox"> Unchanged since last visit</p>
                </div>

                <div class="musc bl-1">
                    <h2 class="text-primary pl-3">MUSCULOSKELETAL</h2>
                    <p class="text-secondary pl-3 spacer"> <input type="checkbox"> No Deficit</p>
                    <p class="text-secondary pl-3 spacer"> <input type="checkbox"> Weakness</p>
                    <p class="text-secondary pl-3 spacer"> <input type="checkbox"> Balance/Gait Abnormal</p>
                    <p class="text-secondary pl-3 spacer"> <input type="checkbox"> Limited Mobility/ROM</p>
                    <p class="text-secondary pl-3 spacer"> <input type="checkbox"> Pain</p>
                    <p class="text-secondary pl-3 spacer"> <input type="checkbox"> Grip Strength</p>
                    <p class="text-secondary pl-3 spacer">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; right <input type="text"
                            style="width: 25px;"> left <input type="text" style="width: 25px;"></p>
                    <p class="text-secondary pl-3 spacer"><input type="checkbox"> Bedbound</p>
                    <p class="text-secondary pl-3 spacer"><input type="checkbox"> Chairbound</p>
                    <p class="text-secondary pl-3 spacer"><input type="checkbox"> Contracture</p>
                    <p class="text-secondary pl-3 spacer"><input type="checkbox"> Paralysis</p>
                    <p class="text-secondary pl-3 spacer"><input type="checkbox"> Assistive/Device</p>
                    <p class="text-secondary pl-3 spacer"><input type="checkbox"> Fall Precautions Maintained</p>
                    <div class="text-secondary pl-3 spacer"><input type="checkbox"> Unchanged since last visit</div>
                </div>
                <div class="pain bl-1">
                    <h2 class="text-primary">PAIN</h2>
                    <p class="text-secondary pl-3 spacer"> Primary Site <input type="pain"></p>
                    <p class="text-secondary pl-3 spacer"> Duration<input type="pain"></p>
                    <p class="text-secondary pl-3 spacer"> Frequency<input type="pain"></p>
                    <p class="text-secondary pl-3 spacer"> Character<input type="pain"></p>
                    <p class="text-secondary spacer"> Current pain management & effectiveness</p>
                    <p class="text-secondary pl-3 spacer"> <input type="text"
                            style="padding: 0; margin: 0; font-size: 14px;"></p>
                    <p class="text-secondary pl-3 spacer"><input type="checkbox"> Pain Management Teaching to</p>
                    <p class="text-secondary pl-3 spacer">&nbsp; patient/family (document below)</p>
                    <p class="text-secondary pl-3 spacer">Patient's pain goal/outcome:</p>
                    <p class="text-secondary pl-3 spacer"><input type="text"
                            style="padding: 0; margin: 0; font-size: 14px;"></p>
                    <div class="text-secondary pl-3 spacer"><input type="checkbox"> Unchanged since last visit</div>
                </div>
                <div class="total-container bl-1">
                    <div class="total">
                        <p class="text-secondary spacer pl-3 padder"><input type="checkbox"> See Additional Pain</p>
                        <p class="text-secondary spacer pl-3 padder"> Assessment/Documentation</p>
                        <p class="text-secondary spacer pl-3 padder"> (per agency policy)</p>
                        <div class="refer">
                            <p class="text-secondary spacer pl-3"> <strong>Refer to:</strong></p>
                            <p class="text-secondary"><input type="text"></p>
                        </div>
                    </div>
                    <h2 class="text-primary pl-3 spacer">INFUSION</h2>
                    <p class="text-secondary pl-3 "><input type="checkbox"> IV Tubing Change</p>
                    <p class="text-secondary pl-3 "><input type="checkbox"> Cap Change</p>
                    <p class="text-secondary pl-3 "><input type="checkbox"> Central Line Dressing Change</p>
                    <p class="text-secondary pl-3 "><input type="checkbox"> IV Site Dressing Change</p>
                    <p class="text-secondary pl-3 "><input type="checkbox"> IV Site Change</p>
                    <p class="text-secondary pl-3 "><input type="pain"> Pump</p>
                    <p class="text-secondary pl-3 "><input type="checkbox"> Infusion</p>
                </div>
            </div>
            <div class="medication">
                <div style="padding-top: 3px;">
                    <p class="text-secondary"> <strong><em>Medication change since last visit?</em></strong>
                        &nbsp;&nbsp;&nbsp; <input type="checkbox"> No &nbsp;<input type="checkbox"> Yes, Specify
                        &nbsp;&nbsp;<input type="text" style="width: 50%;"></p>
                </div>
            </div>
            <hr class="line">
            <div class="skill-observation">
                <div class="heading">
                    <div class="col1">
                        <h2 class="text-primary skilled-heading">
                            SKILLED INTERVENTION/TREATMENT/TEACHING/Pt/Cg RESPONSE
                        </h2>
                        <p class="text-secondary pl-3">Patient's pain was brought to a comfortable level within 48 hours
                            of
                            initial assessment: &nbsp;&nbsp;&nbsp; <input type="checkbox"> N/A &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox"> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox"> No
                            Describe: <input type="text" style="width: 78%;">
                        </p>
                        <hr class="line" style="width: 98%;">
                        <p class="text-secondary pl-3 padder">Patient unable to self report due to:&nbsp;<input
                                type="checkbox"> Discharge&nbsp;&nbsp;<input type="checkbox"> Condition deteriorated/No
                            longer able to communicate &nbsp;&nbsp;<input type="checkbox"> Others: <input type="text"
                                class="other-input">
                        </p>
                        <hr class="line" style="width: 98%;">
                        <div class="comments" style="width: 98%;">
                            <p class="text-secondary"><input type="text" style="width:99%;"></p>
                            <p class="text-secondary"><input type="text" style="width:99%;"></p>
                            <p class="text-secondary"><input type="text" style="width:99%;"></p>
                            <p class="text-secondary"><input type="text" style="width:99%;"></p>
                            <p class="text-secondary"><input type="text" style="width:99%;"></p>
                            <p class="text-secondary"><input type="text" style="width:99%;"></p>
                        </div>
                        <hr class="line" style="width: 98%;">
                        <p class="text-secondary pl-3">Interventions: <input type="text" style="width: 84%;"></p>
                        <p class="text-secondary"><input type="text" style="width:97%;"></p>
                        <p class="text-secondary"><input type="text" style="width:97%;"></p>
                        <hr class="line" style="width: 98%;">
                        <p class="text-secondary pl-3"><strong>Psychosocial Needs:</strong> &nbsp;&nbsp;<input
                                type="checkbox"> No &nbsp;&nbsp;&nbsp;<input type="checkbox"> Yes
                            &nbsp;&nbsp;&nbsp;Describe<input type="text" style="width: 51%;"></p>
                        <hr class="line" style="width: 98%;">
                        <p class="text-secondary pl-3">Interventions: <input type="text" style="width: 84%;"></p>
                        <hr class="line" style="width: 98%;">
                        <p class="text-secondary pl-3"><strong>Emotional Needs:</strong> &nbsp;&nbsp;<input
                                type="checkbox">
                            No &nbsp;&nbsp;&nbsp;<input type="checkbox"> Yes &nbsp;&nbsp;&nbsp;Describe<input
                                type="text" style="width: 53%;"></p>
                        <hr class="line" style="width: 98%;">
                        <p class="text-secondary pl-3"><strong>Spiritual Needs:</strong> &nbsp;&nbsp;<input
                                type="checkbox">
                            No &nbsp;&nbsp;&nbsp;<input type="checkbox"> Yes &nbsp;&nbsp;&nbsp;Describe<input
                                type="text" style="width: 55%;"></p>
                        <hr class="line" style="width: 98%;">
                        <p class="text-secondary pl-3">Interventions: <input type="text" style="width: 84%;"></p>
                    </div>
                    <div class="col2">
                        <h2 class="text-primary supervision-heading">
                            SUPERVISION
                        </h2>
                        <p class="text-secondary"><input type="checkbox"> <strong>LPN</strong> &nbsp;&nbsp;&nbsp; <input
                                type="checkbox"><strong> Aide q 14 days</strong></p>
                        <p class="text-secondary"><input type="checkbox"> <strong>Other:</strong><input type="text"
                                style="width: 70%;"></p>
                        <hr class="line" style="width: 98%;">
                        <p class="text-secondary">Present in this visit? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"> Yes&nbsp;<input
                                type="checkbox"> No</p>
                        <hr class="line" style="width: 98%;">
                        <p class="text-secondary">Aide following care plan? &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox">
                            Yes&nbsp;<input type="checkbox"> No</p>
                        <hr class="line" style="width: 98%;">
                        <p class="text-secondary">Aide following infection&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"> Yes&nbsp;<input
                                type="checkbox"> No</p>
                        <p class="text-secondary pl-3">control?</p>
                        <hr class="line">
                        <p class="text-secondary">Good interpersonal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"> Yes&nbsp;<input
                                type="checkbox"> No</p>
                        <p class="text-secondary pl-3">relationship?</p>
                        <hr class="line">
                        <p class="text-secondary">Report changes in patient&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"> Yes&nbsp;<input
                                type="checkbox"> No</p>
                        <p class="text-secondary pl-3">status to Hospice?</p>
                        <hr class="line">
                        <p class="text-secondary">Patient satisfied with care?&nbsp;&nbsp;&nbsp;<input type="checkbox">
                            Yes&nbsp;<input type="checkbox"> No</p>
                        <hr class="line">
                        <p class="text-secondary">Changes made to aide &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"> Yes&nbsp;<input
                                type="checkbox"> No</p>
                        <p class="text-secondary pl-3">care plan??</p>
                        <hr class="line">
                        <p class="text-secondary">Aide reports emergencies? &nbsp;<input type="checkbox">
                            Yes&nbsp;<input type="checkbox"> No</p>
                        <hr class="line">
                        <p class="text-secondary">Additional instruction&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"> Yes&nbsp;<input
                                type="checkbox"> No</p>
                        <p class="text-secondary pl-3">given during visit?</p>
                        <hr class="line">
                        <p class="text-secondary">Aide is competent to&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"> Yes&nbsp;<input
                                type="checkbox"> No</p>
                        <p class="text-secondary pl-3">provide plan?</p>
                        <hr class="line">
                        <p class="text-secondary pl-3">&nbsp;</p>
                        <p class="text-secondary"><strong>Signature:</strong></p>
                        <p class="text-secondary pl-3">&nbsp;</p>
                        <p class="text-secondary"><input type="text"></p>
                    </div>
                </div>
            </div>
            <div class="skill-observation">
                <h2 class="text-primary" style="margin-top: 3px;">
                    COORDINATION/PLAN
                </h2>
                <p class="text-secondary pl-3"><strong>Progress to Goals/Outcome:</strong><input type="text"
                        style="width: 78%;"></p>
                <p class="text-secondary pl-3">Title of Teaching Tool used/given:<input type="text"
                        style="width: 25%;">&nbsp;&nbsp;<input type="checkbox"> Instructed &nbsp;&nbsp;<input
                        type="checkbox">P/tCg. Verbalized Understanding&nbsp;&nbsp;<input type="checkbox"> P/tCg.
                    Demonstration</p>
                <p class="text-secondary pl-3"><strong>Care Coordinated/Conferenced with:</strong> <input
                        type="checkbox">SN&nbsp;&nbsp;<input type="checkbox">PT&nbsp;&nbsp;&nbsp;<input
                        type="checkbox">OT&nbsp;&nbsp;<input type="checkbox">SLP&nbsp;&nbsp;&nbsp;<input
                        type="checkbox">SW&nbsp;&nbsp;<input type="checkbox">Aide&nbsp;&nbsp;<input
                        type="checkbox">SCC&nbsp;&nbsp;<input type="checkbox">Volunteer&nbsp;&nbsp;<input
                        type="checkbox">Counselor&nbsp;&nbsp;&nbsp;<input type="checkbox">Dietitian&nbsp;&nbsp;Name:
                    <input type="text" class="cus">
                </p>
                <p class="text-secondary pl-3">Regarding: <input type="text" style="width: 63%;"> Date/Time: <input
                        type="text" style="width: 20%;"></p>
                <p class="text-secondary pl-3 padder">Educated Regarding:&nbsp;&nbsp;&nbsp; Infection Control:&nbsp;
                    <input type="checkbox"> Yes&nbsp;&nbsp;<input type="checkbox"> No &nbsp;&nbsp;&nbsp;&nbsp;Equipment
                    Safety: &nbsp;<input type="checkbox"> Yes &nbsp;&nbsp; <input type="checkbox"> No
                </p>
                <p class="text-secondary pl-3">Dietary Counseling:<input type="text" style="width: 85%;"></p>
                <p class="text-secondary pl-3"><strong>Physician Contacted Re:</strong> <input type="text"
                        style="width: 55%;"> Date/Time: <input type="text" style="width: 19%;"></p>
                <p class="text-secondary pl-3">Order Changes:<input type="text" style="width: 88%;"></p>
                <p class="text-secondary pl-3">Plan For Next Visit:<input type="text" style="width: 86.4%;"></p>
                <p class="text-secondary pl-3">Pt/Cg Response to Care: &nbsp;<input type="checkbox"> Satisfactory
                    &nbsp;&nbsp;<input type="checkbox"> Not Satisfactory Comments: <input type="text"
                        style="width: 50%;"></p>
            </div>
            <div class="signature">
                <div class="sig-form">
                    <div class="sign-col1">
                        <div>
                            <p><strong>Nurse Signature & Title</strong></p>
                            <input type="text">
                        </div>
                        <div class="bl-1 pl-3">
                            <p><strong>Time In</strong></p>
                            <input type="text">
                        </div>
                        <div class="bl-1 pl-3">
                            <p><strong>Time Out</strong></p>
                            <input type="text">
                        </div>
                        <div class="bl-1 pl-3">
                            <p><strong>Date</strong></p>
                            <input type="text">
                        </div>
                    </div>
                    <div class="sign-col2">
                        <div>
                            <p><strong>Patient/Caregiver Signature (Optional per agency policy)</strong></p>
                            <input type="text">
                        </div>
                        <div class="bl-1 pl-3">
                            <p><strong>Date</strong></p>
                            <input type="text">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>