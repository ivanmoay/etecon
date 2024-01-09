<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospice Social Worker Clinical Notes</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box
        }

        body,
        html {
            width: 100%;
            height: 100%
        }

        body {
            font-family: sans-serif;
            font-size: 14px;
            padding: 10px;
            letter-spacing: normal;
            background-color: rgba(201, 195, 195, 0.473);
        }

        .signature {
            background-color: rgba(201, 195, 195, 0.473);
            padding: 1rem 1.2rem;
            border-top: 1px solid #000;
            border-bottom: 2px solid #000
        }

        .sig-col1 {
            border-radius: 10px 10px 0 0;
            border-bottom: 1px solid #000;
            border-top: 1px solid #000;
            display: grid;
            grid-template-columns: 3fr 1fr 1fr 2fr
        }

        .sig-col2 {
            border-bottom: 1px solid #000;
            display: grid;
            grid-template-columns: 5fr 2fr;
            border-radius: 0 0 10px 10px
        }

        input.bb {
            border-bottom: 1px solid #000 !important
        }

        input[type=text],
        p.text-normal {
            font-size: 14px !important
        }

        .padding-sig {
            padding: 0 3px
        }

        .inter {
            display: grid;
            grid-template-columns: repeat(3, 1fr)
        }

        .bg-white {
            background-color: #fff !important
        }

        .title {
            display: grid;
            place-items: center;
            background-color: #bc13fe;
            color: #fff;
            padding: 2px 0;
            border-radius: 15px
        }

        .stats-info {
            color: purple;
            background-color: #ccb4cc;
            width: 100%
        }

        span.header {
            font-weight: 700;
            letter-spacing: -1px
        }

        .flex {
            display: flex
        }

        .container {
            padding: 2px 0
        }

        p.badge {
            background-color: #fff;
            color: #568203;
            font-weight: 700;
            padding: 1px;
            border-radius: 2px;
            font-size: 12px !important
        }

        @page {
            size: A4 portrait
        }

        .patient-information {
            background-color: rgba(255, 255, 255, .952);
            display: grid;
            grid-template-columns: 2fr 1fr 2fr;
            border-top: 1px solid #000
        }

        .head {
            display: grid;
            height: 100%;
            align-items: center;
            grid-template-columns: 1.5fr 2fr
        }

        h1.heading {
            font-size: 23px;
            font-weight: 700;
            text-align: right;
            margin: 5px;
            color: #000
        }

        .main {
            height: auto;
            border-radius: 18px
        }

        .bl {
            border-left: 1px solid #000
        }

        .pl {
            padding-left: 3px
        }

        .pt {
            padding-top: 5px
        }

        div.form {
            background-color: #0165FC;
            border-radius: 18px;
            padding: 10px
        }

        div.patient-info {
            background-color: #fff;
            padding: 0 8px;
            height: 3.5rem;
            border-radius: 10px;
            display: grid;
            grid-template-columns: 4fr 1fr 2fr
        }

        input[type=comment],
        input[type=days],
        input[type=input-days],
        input[type=input-uwu],
        input[type=period],
        input[type=signature],
        input[type=text],
        input[type=time-input] {
            background-color: transparent;
            margin-top: 2px;
            font-size: 1.2rem;
            outline: 0;
            border: none;
            width: 100%
        }

        input[type=days],
        input[type=period],
        input[type=signature] {
            border-bottom: 1px solid #000;
            width: 45%
        }

        input[type=days] {
            width: 50px;
            margin-top: 0;
            height: auto
        }

        input[type=signature] {
            width: 100%;
            margin-top: 0;
            height: auto;
            padding-left: 25px
        }

        span.note {
            background-color: green;
            text-align: center;
            width: 100%;
            font-size: 1.2
        }

        .small-font {
            font-size: 12px !important
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="brand-container">
          @if (!empty(Auth::user()->company_id))
            <img src="{{ asset('/company_images/'.@Auth::user()->company->company_logo) }}" width="200" alt="final" border="0">
          @endif
        </div>
        <h1 class="heading">CLINICAL NOTE</h1>
        <div class="form">
            <div class="patient-information">
                <div class="pl pt">
                    <p class="text-normal">Patient Name:</p>
                    <input type="text">
                </div>
                <div class="bl pt pl">
                    <p class="text-normal">ID#:</p>
                    <input type="text">
                </div>
                <div class="bl pt pl">
                    <p class="text-normal"><strong>DX:</strong></p>
                    <input type="text">
                </div>
            </div>
            <div class="title">
                <p class="text-normal"><strong>ASSESSMENT</strong></p>
            </div>

            <div class="stats">
                <div class="flex container">
                    <p class="text-normal badge">IDG</p>
                    &nbsp;
                    <p class="text-normal stats-info"><span class="header">PSYCHOSOCIAL STATUS</span> - <input
                            type="checkbox"> Unchanged since last visit</p>
                </div>
                <div class="bg-white">
                    <p class="text-normal"><input type="checkbox"> Change in need - Evidenced by: <input type="text"
                            class="bb" style="width: 67%;"></p>
                    <p class="text-normal"><input type="text" class="bb"></p>
                    <p class="text-normal"><input type="text" class="bb"></p>
                    <p class="text-normal"><input type="text" class="bb"></p>
                    <p class="text-normal"><input type="text" class="bb"></p>
                </div>

                <div class="flex container">
                    <p class="text-normal badge">IDG</p>
                    &nbsp;
                    <p class="text-normal stats-info"><span class="header">EMOTIONAL/BEHAVIORAL</span> - <input
                            type="checkbox"> Unchanged since last visit</p>
                </div>
                <div class="bg-white">
                    <p class="text-normal"><input type="checkbox"> Change in need - Evidenced by: <input type="text"
                            class="bb" style="width: 67%;"></p>
                    <p class="text-normal"><input type="text" class="bb"></p>
                    <p class="text-normal"><input type="text" class="bb"></p>
                    <p class="text-normal"><input type="text" class="bb"></p>
                    <p class="text-normal"><input type="text" class="bb"></p>
                </div>

                <div class="flex container">
                    <p class="text-normal badge">IDG</p>
                    &nbsp;
                    <p class="text-normal stats-info"><span class="header">PHYSICAL/MEDICAL DIAGNOSIS STATUS</span> -
                        <input type="checkbox"> Unchanged since last visit
                    </p>
                </div>
                <div class="bg-white">
                    <p class="text-normal"><input type="checkbox"> Change in need - Evidenced by: <input type="text"
                            class="bb" style="width: 67%;"></p>
                    <p class="text-normal"><input type="text" class="bb"></p>
                    <p class="text-normal"><input type="text" class="bb"></p>
                    <p class="text-normal pt">Is the patient uncomfortable due to pain? &nbsp;&nbsp;&nbsp;&nbsp; <input
                            type="checkbox"> No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox"> Yes</p>
                    <p class="text-normal">Are there non-verbal signs of pain?
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input
                            type="checkbox"> No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox"> Yes
                        (specify): <input type="text" class="bb" style="width: 32%;"></p>
                    <p class="text-normal">If yes, was the Case Manager notified?
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input
                            type="checkbox"> No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox"> Yes Time:
                        <input type="text" class="bb" style="width: 50px;">&nbsp;&nbsp;<input type="checkbox">
                        am&nbsp;&nbsp; <input type="checkbox"> pm
                    </p>
                </div>

                <div class="flex container">
                    <p class="text-normal badge">IDG</p>
                    &nbsp;
                    <p class="text-normal stats-info"><span class="header">ENVIRONMENTAL/CAREGIVER SUPPORT
                            SYSTEMS</span> - <input type="checkbox"> Unchanged since last visit</p>
                </div>
                <div class="bg-white">
                    <p class="text-normal"><input type="checkbox"> Change in need - Evidenced by: <input type="text"
                            class="bb" style="width: 67%;"></p>
                    <p class="text-normal"><input type="text" class="bb"></p>
                    <p class="text-normal"><input type="text" class="bb"></p>
                </div>

                <div class="flex container">
                    <p class="text-normal badge">IDG</p>
                    &nbsp;
                    <p class="text-normal stats-info"><span class="header">SPIRITUAL STATUS</span> - <input
                            type="checkbox"> Unchanged since last visit</p>
                </div>
                <div class="bg-white">
                    <p class="text-normal"><input type="checkbox"> Change in need - Evidenced by: <input type="text"
                            class="bb" style="width: 67%;"></p>
                    <p class="text-normal"><input type="text" class="bb"></p>
                    <p class="text-normal"><input type="text" class="bb"></p>
                </div>
            </div>
            <div class="title" style="background-color: rgb(4, 63, 4);">
                <p class="text-normal"><strong>INTERVENTIONS</strong></p>
            </div>
            <div class="inter bg-white">
                <div>
                    <p class="small-font"><input type="checkbox"> Assess level of consciousness/crienlation</p>
                    <p class="small-font"><input type="checkbox"> Assess patient/caregiver reaction to disease and loss
                    </p>
                    <p class="small-font"><input type="checkbox"> Assess/Instruct on spiritual grieving and coping
                        methods</p>
                    <p class="small-font"><input type="checkbox"> Assess/Instruct grief management</p>
                    <p class="small-font"><input type="checkbox"> Provide supportive counseling</p>
                    <p class="small-font"><input type="checkbox"> Facilitate life review</p>
                </div>
                <div>
                    <p class="small-font"><input type="checkbox"> Educate caregiver regarding:</p>
                    <p class="small-font">&nbsp;&nbsp;&nbsp; <input type="checkbox"> Signs/Symptoms of impanding death
                    </p>
                    <p class="small-font">&nbsp;&nbsp;&nbsp; <input type="checkbox"> Interventions caring for dying
                        patient</p>
                    <p class="small-font">&nbsp;&nbsp;&nbsp; <input type="checkbox"> Home death procedures</p>
                    <p class="small-font">&nbsp;&nbsp;&nbsp; <input type="checkbox"> Planning for funeral arrangement
                    </p>
                    <p class="small-font"><input type="checkbox"> Assess/Instruct for long term planning/decision</p>
                    <p class="small-font"><input type="checkbox"> Assess/Instruct safety measures to prevent injury</p>
                </div>
                <div>
                    <p class="small-font"><input type="checkbox"> Assess/Instruct on financial issues and/or community
                        resources</p>
                    <p class="small-font pt"><input type="checkbox"> Refer Spiritual Care Coordination</p>
                    <p class="small-font"><input type="checkbox"> Refer Bereavement</p>
                    <p class="small-font pt"><input type="checkbox"> Other: <input type="text" class="bb"
                            style="width: 170px;"></p>
                    <p class="small-font"><input type="checkbox"> Other: <input type="text" class="bb"
                            style="width: 170px;"></p>
                    <p class="small-font pt"><input type="checkbox"> Other: <input type="text" class="bb"
                            style="width: 170px;"></p>
                </div>
            </div>
            <div class="title">
                <p class="text-normal"><strong>MEASURABLE PROGRESS TO GOALS/OUTCOMES</strong></p>
            </div>
            <div class="bg-white">
                <p class="text-normal"><input type="text" class="bb"></p>
                <p class="text-normal"><input type="text" class="bb"></p>
                <p class="text-normal"><input type="text" class="bb"></p>
                <p class="text-normal"><input type="text" class="bb"></p>
                <p class="text-normal"><input type="text" class="bb"></p>
                <p class="text-normal"><strong>PATIENT/CAREGIVER RESPONSE TO TEACHING</strong></p>
                <p class="text-normal"><input type="text" class="bb"></p>
            </div>
            <div class="title">
                <p class="text-normal"><strong>COORDINATION/PLAN</strong></p>
            </div>
            <div class="bg-white">
                <p class="text-normal" style="background-color: rgb(204, 180, 204);"><input type="checkbox"> Telephone
                    calls to/Communication with (other agencies, resources, family members, etc.) during this visit or
                    prior to this visit which effectsIDG plan of care:</p>
                <p class="text-normal"><input type="text" class="bb"></p>
            </div>
            <div class="coordination bg-white">
                <p class="text-normal" style="background-color: rgb(204, 180, 204);"><strong>Care
                        Coordinated/Conferenced With:</strong></p>
                <p class="text-normal"><input type="checkbox"> SN &nbsp;<input type="checkbox"> PT &nbsp; <input
                        type="checkbox"> OT &nbsp; <input type="checkbox"> SLP &nbsp;<input type="checkbox"> Aide
                    &nbsp;<input type="checkbox"> SCC &nbsp;<input type="checkbox"> Volunteer &nbsp;<input
                        type="checkbox"> Counselor &nbsp; <input type="checkbox"> Dietitian &nbsp;&nbsp;&nbsp; Name:
                    <input type="text" class="bb" style="width: 72px;"></p>
                <p class="text-normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Regarding: <input type="text"
                        class="bb" style="width: 84%;"></p>
                <p class="text-normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="bb"
                        style="width: 94%;"></p>
                <p class="text-normal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="bb"
                        style="width: 60%;"> Date/Time: <input type="text" class="bb" style="width: 23%;"></p>
                <p class="text-normal"><span style="background-color: rgb(204, 180, 204);"><strong>Physician Contacted
                            Re:</strong></span><input type="text" class="bb" style="width: 41%;">Date/Time: <input
                        type="text" class="bb" style="width: 23%;"></p>
                <p class="text-normal">Order Changes: <input type="text" class="bb" style="width: 84%;"></p>
                <p class="text-normal">Plan For Next Visit: <input type="text" class="bb" style="width: 81%;"></p>
            </div>
            <div class="signature">
                <div class="sig-col1 bb bg-white">
                    <div class="padding-sig">
                        <p class="text-normal">
                            SW Signature & Title
                        </p>
                        <input type="text">
                    </div>
                    <div class="bl padding-sig">
                        <p class="text-normal">
                            Time In
                        </p>
                        <input type="text">
                    </div>
                    <div class="bl padding-sig">
                        <p class="text-normal">
                            Time Out
                        </p>
                        <input type="text">
                    </div>
                    <div class="bl padding-sig">
                        <p class="text-normal">
                            Date
                        </p>
                        <input type="text">
                    </div>
                </div>
                <div class="sig-col2 bg-white">
                    <div class="padding-sig">
                        <p class="text-normal">
                            Patient/Caregiver Signature
                        </p>
                        <input type="text">
                    </div>
                    <div class="bl padding-sig">
                        <p class="text-normal">
                            Date
                        </p>
                        <input type="text">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>