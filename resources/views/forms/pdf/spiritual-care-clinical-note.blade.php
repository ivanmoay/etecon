<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinical Note</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            margin: 2rem 3rem;
            font-family: 'Roboto', sans-serif;
            color: #000000;
        }

        h1 {
            font-size: 1.5rem;
            font-weight: bold;
        }

        h2 {
            font-size: 1rem;
        }

        p {
            font-size: 12px;
        }

        .heading {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
        }

        .form-container {
            width: auto;
            height: auto !important;
            margin-top: 8px;
            padding: 1rem;
            background-color: rgba(255, 255, 0, 0.734);
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .patient-info {
            border: 1px solid black;
            border-radius: 10px;
            padding: 5px 8px;
            height: auto;
            background-color: white;
            display: grid;
            grid-template-columns: 3fr repeat(2, 1fr);
            grid-template-rows: 1fr;
        }

        .border_left {
            border-left: 1px solid black;
            height: 100%;
            padding: 0 5px;
            margin: 0;
        }

        .time_layout {
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding-left: 0;
            height: auto;
        }

        .time-container {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
        }

        .in,
        .out {
            text-align: end;
            align-items: flex-start;
        }

        .format {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 0;
            grid-auto-flow: row;
            width: auto;
            text-align: center;
            font-size: 10px;
        }

        input {
            width: 12px;
        }

        input.checkbox {
            width: 25px;
            margin-top: 5px;

        }

        .patient-assessment {
            border: 1px solid black;
            border-radius: 10px;
            padding: 5px 8px;
            background-color: white;

            display: grid;
            grid-template-columns: 1fr;
            grid-template-columns: 1fr;
        }

        .assessment-obtained {
            height: auto;
            width: 100%;
            text-align: start;
            display: flex;
            justify-content: space-between;
            flex-direction: flex-start;
        }

        .assessment {
            text-align: left;
            height: auto;
        }

        .heading-assessment,
        .heading-goals {
            background-color: rgba(0, 0, 0, 0.867);
            color: white;
            text-align: center;
            height: auto;
            width: 100%;
            padding: 5px 0;
            margin-bottom: 3px;
            text-transform: uppercase;
            letter-spacing: .50px;
        }

        .vertical-line {
            background-color: black;
            width: 1px;
            height: 50px;
        }

        .obtained-from {
            width: 60%;
            height: 50px;
            display: block;
        }

        .obtained-by {
            width: 220px;
            display: inline-block;
        }

        .underline {
            border-top: 2px solid black;
            height: 1rem;
        }

        .supportive-assistance,
        .spiritual-strengths,
        .purpose-visit,
        .spiritual-issue_container,
        .goals-container,
        .summary-container {
            border-top: 2px solid black;
            border-bottom: 2px solid black;
            display: flex;
            padding: 5px 0;
            height: auto;
            flex-direction: column;
        }

        .spiritual-strengths {
            border-top: 0 !important;
        }

        .summary-container {
            border-bottom: 0 !important;
        }

        .goals-container {
            border-top: 0 !important;
            height: 8rem;
        }

        .checkbox-choices {
            display: flex;
            width: 90%;
            justify-content: space-between;
            align-items: flex-start;
            text-align: start;
        }


        .spiritual {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-column-gap: 0px;
            grid-row-gap: 0px;
        }

        .spiritual-issues_choices {
            height: auto;
            display: grid;
            grid-auto-flow: column;
            grid-template-columns: repeat(2, 1fr);
        }

        .spiritual-issue_container {
            border-top: 0 !important;
        }

        .sub-checkbox {
            margin-left: 3rem;
        }

        .changes {
            height: auto;
        }

        .coordination-plan {
            height: 100%;
            margin: 3px 0;
        }

        .signature-form {
            display: grid;
            background-color: #ccc8c84a;
            height: auto;
            width: 100%;
            margin-top: 1rem;
            border: 1px solid black;
            grid-template-columns: 3fr 1fr;
            grid-template-rows: repeat(2, 1fr);
            position: relative;
            left: -9px;
            width: 101.5% !important;
        }

        .text-signature {
            display: flex;
            height: auto;
        }

        .title {
            margin-top: 8px;
            height: 15px;
            font-size: 16px;
        }

        .block {
            gap: 3rem;
            text-align: start;
            display: flex
        }

        .horizontal-line {
            background-color: black;
            width: 100%;
            height: 1px;
        }

        .triangle {
            font-size: 2rem;
        }

        .goals-outcomes {
            height: auto;
        }

        input[type='text'] {
            background-color: transparent;
            outline: 0;
            border: none;
            width: 100%;
            font-size: 14px;
            border-bottom: 1px solid black;
        }

        input.w-300px {
            width: 300px;
        }



        @media print {
            .form-container {
                height: 200%;
            }

            .ins, .outs {
                width: 6rem;
                align-items: flex-start;
            }

            .signature-form {
                left: -6px;
            }

            input.w-300px {
            width: 200px;
        }
        }
    </style>
</head>

<body>
    <div class="main">
        <div style="display: flex; flex-direction: row; align-items: flex-start;">
            <div style="display: flex; align-items: center">
                @if (!empty(Auth::user()->company_id))
                    <img src="{{ asset('/company_images/'.@Auth::user()->company->company_logo) }}" height="60" alt="final" border="0">&nbsp;
                    <h3>{{@Auth::user()->company->company_name}}</h3>
                @endif
            </div>
            <div class="heading" style="margin-left: auto">
                <h1>CLINICAL NOTE</h1>
            </div>
        </div>        

        {{-- <div class="heading">
            <div class="brand-container">
                <div class="flex-container">
                    <img src="https://i.ibb.co/kSr11h4/final.png" width="200" alt="final" border="0">
                </div>
            </div>
            <h1>CLINICAL NOTE</h1>
        </div> --}}

        <div class="form-container">
            <div class="patient-info">
                <div class="name">
                    <p>Patient Name: <input type="text"></p>
                </div>
                <p style="border-bottom: 1px solid black;" class="border_left">ID # <input type="text"></p>
                <div class="time-container border_left" style="border-bottom: 1px solid black; padding-bottom: 4px;">
                    <p class="time">
                    <div class="in ins time_layout" style="padding-right: 3px;">
                        <div style="text-align: start;">
                            <p>Time In: </p>
                            <input type="text" style="width: 65px;">
                        </div>
                        <div class="format">
                            <input type="checkbox">AM
                            <input type="checkbox">PM
                        </div>
                    </div>
                    <div class="out outs time_layout border_left" style="padding-left: 3px;">
                        <div style="text-align: left;">
                            <p>Time Out:</p>
                            <input type="text" style="width: 65px;">
                        </div>
                        <div class="format">
                            <input type="checkbox">AM
                            <input type="checkbox">PM
                        </div>
                    </div>
                    </p>
                </div>
                <div style="border-top: 1px solid black; padding-top: 4px; font-weight: bold;">
                    <p>DX: <input type="text"></p>
                </div>
            </div>


            <div class="patient-assessment">
                <div class='core-container'>
                    <div class="assessment-obtained">
                        <div class="assessment-container">
                            <h2>Information Obtained By:</h2>
                            <div class="obtained-by">
                                <div class="format">
                                    <p class="test-p"><input class="checkbox" type="checkbox">Phone</p>
                                    <p><input class="checkbox" type="checkbox">Visit</p>
                                </div>
                            </div>
                        </div>
                        <div class="obtained-from border_left">
                            <h2>Information Obtained From:</h2>
                            <div class="in time_layout">
                                <div class="block">
                                    <p><input class="checkbox" type="checkbox">Patient</p>
                                    <p><input class="checkbox" type="checkbox">Caregiver Name:
                                        <input type="text" class="w-300px">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="purpose-visit">
                        <h2>Purpose of Visit:</h2>
                        <div class="checkbox-choices">
                            <p style="margin-left: 8rem;"><input type="checkbox"> Spiritual Care</p>
                            <p><input type="checkbox"> Family Support</p>
                            <p style="margin-right: 115px;"><input type="checkbox"> Patient Support</p>
                        </div>
                        <div class="checkbox-choices">
                            <p style="margin-left: 8rem;"><input type="checkbox"> Prayer/Sacraments</p>
                            <p style="margin-left: -15px;"><input type="checkbox"> Crisis Intervention</p>
                            <p><input type="checkbox"> Funeral / Memorial / Bedside Service</p>
                        </div>
                    </div>

                    <div class="assessment">
                        <h2 class="heading-assessment">Assessment</h2>
                        <div>
                            <p><span style="font-size: 1rem; font-weight: bold;">Supportive Assistance:</span>
                                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="checkbox" /> Family
                                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="checkbox" /> Friends
                                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="checkbox" /> Community Organizations
                                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="checkbox" /> Religious Organizations
                            </p>
                        </div>
                        <p><input type="checkbox" />Other: <input type="text" style="width: 80%;"></p>
                    </div>


                    <hr>
                    <div class="spiritual-strengths">
                        <div>
                            <p><span style="font-size: 1rem; font-weight: bold;">Spiritual Strengths:</span>
                                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="checkbox" /> Sense of purpose in life
                                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="checkbox" /> Belief in rituals
                                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="checkbox" /> Forgiveness
                                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="checkbox" /> Belief in life after death
                            </p>
                            <div style="display: flex;">
                                <p><input type="checkbox"> Serenity/Peace</p>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <p><input type="checkbox"> Reconciliation</p>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <p><input type="checkbox"> Acceptance of prognosis</p>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <p><input type="checkbox"> Hope</p>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <p><input type="checkbox"> Other: <input type="text" style="width: 70%;"></p>
                            </div>
                        </div>
                    </div>

                    <div class="spiritual-issue_container">
                        <div class="spiritual-issues_choices">
                            <div class="si-container">
                                <h2>Spiritual Issues: <span style="font-size: 13px; font-weight: 500;">(Check all that
                                        apply)</span></h2>
                                <p><input type="checkbox"> Despair</p>
                                <p><input type="checkbox"> Need for forgiveness</p>
                                <p><input type="checkbox"> Fear/Anxiety</p>
                                <p><input type="checkbox"> Suffering</p>
                                <p><input type="checkbox"> Regrets</p>
                                <p><input type="checkbox"> Feeling of abandonment</p>
                                <p><input type="checkbox"> Quality of life issues</p>
                                <p><input type="checkbox"> Isolation/withdrawal</p>
                                <p><input type="checkbox"> Guilt</p>
                                <p><input type="checkbox"> Shame</p>
                                <p><input type="checkbox"> Unfinished business</p>
                                <p><input type="checkbox"> Depression</p>
                                <p><input type="checkbox"> Anger</p>
                                <p><input type="checkbox"> Suicidal</p>
                                <p><input type="checkbox"> Other: <input type="text" style="width: 70%;"></p>
                                <p>Comments: <input type="text" style="width: 70%;"></p>
                            </div>
                            <div class="inter-container border_left">
                                <h2>Interventions: <span style="font-size: 13px; font-weight: 500;">(Check all that
                                        apply)</span></h2>
                                <p><input type="checkbox"> Estasblish contact by phone or visit</p>
                                <p><input type="checkbox"> Read/Pray with patient</p>
                                <p><input type="checkbox"> Explore spiritual resources for facing illness and death</p>
                                <p><input type="checkbox"> Discern spiritual gifts: Love, Hope, Peace, Acceptance,
                                    Courage,
                                    Faith</p>
                                <p><input type="checkbox"> Build a relationship of trust and support</p>
                                <p><input type="checkbox"> Enable life review</p>
                                <p><input type="checkbox"> Assess spiritual need and visitation</p>
                                <p><input type="checkbox"> Provide ritual service</p>
                                <p><input type="checkbox"> Funeral arrangements</p>
                                <p><input type="checkbox"> Explore conflict issues:
                                    <br>
                                <div class="sub-checkbox">
                                    <p><input type="checkbox"> Guilt
                                        <input type="checkbox"> Fear
                                        <input type="checkbox"> Grief
                                        <input type="checkbox"> Anger
                                        <input type="checkbox"> Reconciliation
                                        <br>
                                        <input type="checkbox"> Other: <input type="text" style="width: 70%;">
                                    </p>
                                </div>
                                </p>
                                <p><input type="checkbox"> Other: <input type="text" style="width: 70%;">
                                <p><input type="checkbox"> Comments: <input type="text" style="width: 70%;">
                            </div>
                        </div>
                    </div>

                    <div class="summary-container">
                        <h2>Summary/Comments:
                        </h2>
                        <div style="min-width: 100%; color: #000;" class="lines">
                            <hr>
                            <input type="text">
                            <br>
                            <hr>
                            <input type="text">
                            <br>
                            <hr>
                            <input type="text">
                            <br>
                            <hr>
                            <input type="text">
                            <br>
                            <hr>
                        </div>
                        <div class="changes">
                            <div class="header-changes" style="display: flex; padding: 1px 0; border-bottom: 1px solid black;">
                                <h4 style="border: 1px solid black; border-radius: 8px; background-color: #5f58585c; padding: 2px 5px;">IDG</h4>
                                <h2 style="margin-top: 3px; background-color: #5f58585c; margin-left: 5px; width: 100%;">CHANGES SINCE LAST VISIT</h2>
                            </div>
                            <div class="lines">
                                <hr>
                                <span style="font-weight: bold;">Spiritual Needs:</span>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox"> No &nbsp;&nbsp; <input type="checkbox"> Yes, &nbsp;&nbsp; <input type="checkbox"> Describe: <input type="text" style="width: 50%;">
                                <br>
                                <hr>
                                Interventions: <input type="text" style="width: 85%;">
                                <br>
                                <hr>
                                <input type="text">
                                <br>
                                <hr>
                                <span style="font-weight: bold;">Emotional Needs:</span>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox"> No &nbsp;&nbsp; <input type="checkbox"> Yes, &nbsp;&nbsp; <input type="checkbox"> Describe: <input type="text" style="width: 50%;">
                                <br>
                                <hr>
                                Interventions: <input type="text" style="width: 85%;">
                                <br>
                                <hr>
                                <input type="text">
                                <br>
                                <hr>
                                <span style="font-weight: bold;">Psychosocial Needs:</span>     &nbsp;&nbsp;&nbsp; <input type="checkbox"> No &nbsp;&nbsp; <input type="checkbox"> Yes, &nbsp;&nbsp; <input type="checkbox"> Describe: <input type="text" style="width: 50%;">
                                <br>
                                <hr>
                                <span style="font-weight: bold;">Physical Needs:</span>      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox"> No &nbsp;&nbsp; <input type="checkbox"> Yes, &nbsp;&nbsp; <input type="checkbox"> Describe: <input type="text" style="width: 50%;">
                                <br>
                                <hr>
                                    <div>Is the patient uncomfortable due to pain?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"> No &nbsp;&nbsp;&nbsp; <input type="checkbox"> Yes</div>
                                    <div>Are there non-verbal signs of pain?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"> No &nbsp;&nbsp;&nbsp; <input type="checkbox"> Yes  &nbsp;&nbsp;&nbsp; (Specify): <input type="text" style="width: 40%;"></div>
                                    <div>If yes to any of the above, was case manager notified?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"> No &nbsp;&nbsp;&nbsp; <input type="checkbox"> Yes  &nbsp;&nbsp;&nbsp; Time: <input type="text" style="width: 50px;"> <span style="display: inline-block;"><input type="checkbox"> AM &nbsp;<br> <input type="checkbox"> PM</span></div>
                            </div>
                        </div>
                        <h2 style="background-color: #5f58585c;">PROGRESS TOWARDS GOALS/OUTCOMES</h2>
                        <div style="min-width: 100%; color: #000; background-color: #ccc8c88b;" class="lines">
                            <hr>
                            <input type="text">
                            <br>
                            <hr>
                            <input type="text">
                            <br>
                            <hr>
                            <input type="text">
                            <br>
                            <hr>
                            <input type="text">
                            <br>
                            <hr>
                            <p style="font-size: 15px; background-color: white;">Patient/Caregiver response to spiritual care: <input type="text" style="width: 60%;"></p>
                        </div>
                        <div class="coordination-plan">
                            <h2 style="background-color: #ccc8c8; padding: 5px 0;">COORDINATION/PLAN</h2>
                            <div style="margin-top: 5px;">
                                <p><span style="font-size: .8rem; font-weight: bold;">Care Coordinated/Conferenced with:
                                    </span>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox"> SN
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox"> AIDE
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox"> SW
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox"> Bereavement
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox"> Volunteer
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox"> Other: <input type="text" style="width: 20%;">
                                </p>
                            </div>
                            <p>Name: <input type="text" style="width: 30%;">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Regarding:<input type="text" style="width: 30%;"></p>
                            <p style="margin-top: 5px;"> <input type="text" style="width: 30%;">
                                Date/Time: <input type="text" style="width: 100px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="display: inline-block;"><input type="checkbox"> AM &nbsp;<br> <input type="checkbox"> PM</span></p>
                            <p style="margin-top: 5px;"><span style="font-size: .8rem; font-weight: bold;">Further spiritual follow-up desired:
                                </span>
                                &nbsp;&nbsp;
                                <input type="checkbox"> Patient
                                &nbsp;&nbsp;
                                <input type="checkbox"> Primary Caregiver
                                &nbsp;&nbsp;
                                <input type="checkbox"> Family
                                &nbsp;&nbsp;
                                <input type="checkbox"> <span style="font-weight: bold;">Specify type of follow-up requested: <input type="text" style="width: 200px;"></span>
                            </p>
                        </div>
                        <div class="signature-form">
                            <div class="text-signature" style="border-bottom: 1px solid black; text-align: start;">
                                <span class="triangle">&#9654;</span>
                                <div style="display: flex;">
                                    <p class="title" style="width: 500px;">
                                        Spiritual Care Coordinator Signature:
                                    </p>
                                    <input type="text" style="height: 30px;">
                                </div>
                            </div>

                            <div style="border-bottom: 1px solid black" class="border_left">
                                Date <input type="text">
                            </div>

                            <div class="text-signature" style="border-bottom: 1px solid black">
                                <span class="triangle">&#9654;</span>
                                <div style="display: flex;">
                                    <p class="title" style="width: 570px;">Visit Verification Signature(per agency policy:</p>
                                    <input type="text" style="height: 30px;">
                                </div>
                            </div>

                            <div class="border_left">
                                Date <input type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>