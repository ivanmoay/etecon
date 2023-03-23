<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospice-IDG</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 14px;
        }


        .A4 {
            width: 1240px;
            height: auto;
            margin-right: auto;
            margin-left: auto;
            background-color: rgba(110, 203, 110, 0.157);
            padding-bottom: 20px;
            border-radius: 18px;
        }

        .absolute {
            position: absolute
        }

        .align-end {
            align-items: flex-end;
        }

        .align-start {
            align-items: flex-start;
        }

        .b-n10 {
            bottom: -10px
        }

        .bg-img-primary {
            background-image: linear-gradient(rgb(231, 235, 220), rgb(255, 255, 255));
        }

        .bg-primary {
            background: rgba(87, 92, 59, 255)
        }

        .bg-secondary {
            background-color: rgba(212, 214, 201, 255);
        }

        .bg-white {
            background: white
        }

        .border-radius-5 {
            border-radius: 5px;
        }

        .border-radius-15 {
            border-radius: 15px
        }

        .border-primary {
            border: 1px solid rgba(87, 92, 59, 255);
        }

        .border-primary-top {
            border-top: 1px solid rgba(87, 92, 59, 255);
        }

        .border-primary-right {
            border-right: 1px solid rgba(87, 92, 59, 255);
        }

        .container {
            margin: 0 4.5rem;
        }

        .flex {
            display: flex;
        }

        .flex-container {
            display: flex;
            box-sizing: border-box;
            flex-wrap: wrap;
            margin: 0 4.5rem;
        }

        .flex-grow {
            flex-grow: 1
        }

        .flex-10 {
            flex: 0 0 10%;
        }

        .flex-15 {
            flex: 0 0 15%;
        }

        .flex-30 {
            flex: 0 0 30%
        }

        .flex-34 {
            flex: 0 0 34%;
        }

        .flex-65 {
            flex: 0 0 65%;
        }

        .flex-300px {
            flex: 0 0 300px;
        }

        .h-100 {
            height: 100%
        }

        .inline {
            display: inline
        }

        .inline-block {
            display: inline-block;
        }

        .justify-end {
            justify-content: end;
        }

        .l-0p5r {
            left: 0.5rem
        }

        .line-height-25 {
            line-height: 25px
        }

        .mar-l-5 {
            margin-left: 5px;
        }

        .mar-l-20 {
            margin-left: 20px;
        }

        .mar-t-1r {
            margin-top: 1rem
        }

        .mar-t-3r {
            margin-top: 3rem;
        }

        .mar-t-10p {
            margin-top: 10px;
        }

        .mar-unset {
            margin: unset
        }

        .pad-5 {
            padding: 5px
        }

        .pad-b-5 {
            padding-bottom: 5px
        }

        .pad-b-20 {
            padding-bottom: 20px !important;
        }

        .pad-t-10 {
            padding-top: 10px
        }

        .pad-unset {
            padding: unset
        }

        .pad-0x10 {
            padding: 0px 10px;
        }

        .pad-0x20 {
            padding: 0 20px;
        }

        .pad-2x10 {
            padding: 2px 10px;
        }

        .pad-3x10 {
            padding: 3px 10px
        }

        .pad-5x0 {
            padding: 5px 0
        }

        .pad-8x5 {
            padding: 8px 5px;
        }

        .pad-5 {
            padding: 5px;
        }

        .relative {
            position: relative;
        }

        .t-neg2p {
            top: -2px;
        }

        .t-neg10 {
            top: -10px
        }

        .t-neg20 {
            top: -20px;
        }

        .t-0p1r {
            top: 0.1rem;
        }

        .text-primary {
            color: rgba(87, 92, 59, 255);
        }

        .text-secondary {
            color: rgba(121, 104, 116, 255)
        }

        .text-white {
            color: white;
        }

        .text-1p8r {
            font-size: 1.8rem;
        }

        .w-30 {
            width: 30%;
        }

        .w-65 {
            width: 66%;
        }

        .w-80 {
            width: 80% !important;
        }

        .w-90 {
            width: 90px
        }

        .w-100 {
            width: 100%;
        }

        .w-50px {
            width: 50px
        }

        .w-80px {
            width: 80px
        }

        .w-160px {
            width: 160px
        }

        .w-240px {
            width: 240px;
        }

        .divider {
            height: 165rem;
            width: 100%;
        }

        .br-none {
            border-right: none;
        }

        .bl-none {
            border-left: none;
        }

        .t-bo {
            text-decoration: solid;
        }

        .br-bot {
            border-bottom: 1px solid rgba(87, 92, 59, 255);
        }

        .br-top {
            border-top: 2px solid rgba(87, 92, 59, 255);
        }

        .other-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            width: 100%;
        }

        .other-container .wa {
            border: 1px solid rgba(87, 92, 59, 255);
            height: 25px;
        }

        .other-container-1 {
            display: grid;
            grid-template-columns: 1.3fr .8fr;
            width: 100%;
        }

        .other-container-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            width: 100%;
        }

        .other-container-3 .wa {
            border: 1px solid rgba(87, 92, 59, 255);
            height: 25px;
        }

        .wa .wa1 {
            grid-row: 2;
        }

        .other-left,
        .other-right {
            width: 100%;
        }

        .pad-l-none {
            padding-left: 0;
            margin-left: 0;
        }

        .mar-r-10 {
            margin-right: 10px;
        }

        .flex-container-1 {
            display: flex;
            justify-content: center;
        }

        .flex-container-1 div {
            border: 1px solid black;
        }

        input[type='text'] {
            background-color: transparent;
            /* background-color: red; */
            outline: 0;
            border: none;
            width: 100%;
            font-size: 14px;
            border-bottom: 1px solid black;
        }
        input.borbot-none {
            border-bottom: none;
            margin-bottom: 2px;
            padding-top: 0;
            margin-top: 0;
        }
    </style>
</head>

<body>
    <div class="A4">
        {{-- <div class="flex-container">
            <img src="https://i.ibb.co/KhC4SZT/my-dummy-logo.png" width="200" alt="my-dummy-logo" border="0">
        </div>
        <div class="flex-container brand-container">
            <h1 class="text-primary inline-block relative mar-unset pad-unset text-1p8r b-n10">
                MY COMPANY NAME
            </h1>
        </div> --}}
        {{-- display: flex;
            box-sizing: border-box;
            flex-wrap: wrap;
            margin: 0 4.5rem; --}}
        <div style="display: flex; flex-direction: row; align-items: flex-start; box-sizing: border-box; flex-wrap: wrap; margin: 0 4.5rem;">
            <div style="display: flex; align-items: center; margin-top: 1rem">
                @if (!empty(Auth::user()->company_id))
                    <img src="{{ asset('/company_images/'.@Auth::user()->company->company_logo) }}" height="60" alt="final" border="0">&nbsp;
                    <h3>{{@Auth::user()->company->company_name}}</h3>
                @endif
            </div>
        </div> 
        <div class="flex-container" style="margin-top: 1rem;">
            <div class="border-primary flex-300px pad-8x5 border-radius-5 bg-secondary">
                <div class="flex align-start text-primary">
                    <div class="inline-block relative t-neg2p">
                        <input type="checkbox" class="relative t-0p1r"> <strong>FR -</strong>
                    </div>
                    <span class="inline-block w-240px mar-l-5">
                        <strong>
                            Indicates Facility is responsible for performing the respective function
                        </strong>
                    </span>
                </div>
            </div>
            <div class="flex-grow">
                <div class="flex align-end justify-end h-100">
                    <h1 class="text-primary inline-block relative mar-unset pad-unset text-1p8r b-n10">
                        HOSPICE INTERDISCILINARY CARE PLAN
                    </h1>
                </div>
            </div>
        </div>

        <div class="flex-container border-primary-top mar-t-1r bg-img-primary">
            <div class="border-primary-right text-primary flex-65 pad-2x10">
            Patient Name (First, MI, Last)
                <input type="text">
            </div>
            <div class="border-primary-right text-primary pad-2x10 flex-15">
                ID#
                <input type="text">
            </div>
            <div class="text-primary pad-2x10 flex-10">
                SOC Date
                <input type="text">
            </div>
        </div>

        <div class="flex-container border-primary-top bg-img-primary">
            <div class="border-primary-right pad-2x10 text-secondary bg-white flex-34">
                <div class="inline-block relative pad-b-5 w-30">
                    <strong class="inline-block relative t-neg20">Level Of Care:</strong>
                </div>
                <div class="inline-block relative w-65">
                    <div class="inline-block w-160px">
                        <div>
                            <input type="checkbox"> Routine Home Care
                        </div>
                        <div>
                            <input type="checkbox"> Continuous Care
                        </div>
                    </div>
                    <div class="inline-block w-80px">
                        <div>
                            <input type="checkbox"> Inpatient
                        </div>
                        <div>
                            <input type="checkbox"> Respite
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-primary flex-grow pad-2x10">
                Patient's/CareGiver's Goal:
                <input type="text">
            </div>
        </div>

        <div class="flex-container">
            <div class="bg-primary text-white pad-3x10 w-100 border-radius-15">
                <h3 class="inline">TERMINAL CARE/IMPENDING DEATH</h3>
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-grow">
                <h3 class="text-primary pad-5x0 mar-unset">Goals/Outcomes:</h3>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Caregiver/Family will understand signs and symptoms of dying process prior
                    to patient's death
                </div>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>

                <h3 class="inline-block text-secondary pad-5x0 mar-unset">
                    Terminal Care Interventions: <em>(all patients)</em>
                </h3>
                <input type="checkbox">
                <h3 class="inline-block text-secondary pad-5x0 mar-unset">FR</h3>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Spritual, grieving and coping methods
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        S/S of impending death
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Notification procedures for death at home
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Counceling
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Grief management
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>


                <h3 class="inline-block text-secondary pad-5x0 mar-unset">
                    Impending Death Interventions:
                </h3>
                <input type="checkbox">
                <h3 class="inline-block text-primary pad-5x0 mar-unset">FR</h3>
                <input type="checkbox" class="mar-l-20">
                <h3 class="inline-block text-secondary pad-5x0 mar-unset">NA</h3>
                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Educate caregiver/family regarding:
                    <div class="text-secondary pad-0x20">
                        <input type="checkbox"> Sign/Symptoms of impending death
                    </div>
                    <div class="text-secondary pad-0x20">
                        <input type="checkbox"> Interventions caring for dying patient
                    </div>
                    <div class="text-secondary pad-0x20">
                        <input type="checkbox"> Home death procedure
                    </div>
                    <div class="text-secondary pad-0x20">
                        <input type="checkbox"> Planning for funeral arrangements
                    </div>
                </div>
            </div>

            <div class="relative text-secondary flex-30 pad-t-10">
                <h3 class="absolute t-neg10 l-0p5r">Comments</h3>
                <span class="line-height-25">________________________________________________</span>
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
            </div>
        </div>

        <div class="flex-container border-primary-top mar-t-1r bg-img-primary">
            <h3 class="text-primary mar-unset pad-5 w-100">
                Date Initiated <input type="text" style="width: 35px;">/<input type="text" style="width: 35px;">/<input type="text" style="width: 35px;"> Name/Discipline <input type="text" style="width: 65%;">
            </h3>
        </div>

        <div class="flex-container">
            <div class="bg-primary text-white pad-3x10 w-100 border-radius-15">
                <h3 class="inline">ANTICIPATORY GRIEF AND BEREAVEMENT</h3>
            </div>
            <div class="flex-grow">
                <h3 class="text-primary pad-5x0 mar-unset">Goals/Outcomes:</h3>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Patient/Caregiver will achieve optimal grief reaction prior to patient's
                    death
                </div>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>
                <h3 class="inline-block text-secondary pad-5x0 mar-unset">
                    Interventions:
                </h3>
                <input type="checkbox">
                <h3 class="inline-block text-secondary pad-5x0 mar-unset">FR</h3>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess:</em></strong>
                    </div>
                    <div class="inline-block">
                        Patient/Caregiver reaction to disease and loss
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-100">
                        <input type="checkbox"> Facilitate Life Review
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess:</em></strong>
                    </div>
                    <div class="inline-block">
                        Survivor risk factors
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-100">
                        <input type="checkbox"> Establish bereavement plan of care
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-100">
                        <input type="checkbox"> Social Worker and/or Spritual Councelor to provide optimal Interventions
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-100">
                        <input type="checkbox"> Educate regarding bereavement program
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>
            </div>
            <div class="relative text-secondary flex-30 pad-t-10">
                <h3 class="absolute t-neg10 l-0p5r">Comments</h3>
                <span class="line-height-25">________________________________________________</span>
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
            </div>
        </div>
        <div class="flex-container border-primary-top mar-t-1r bg-img-primary">
            <h3 class="text-primary mar-unset pad-5 w-100">
                Date Initiated <input type="text" style="width: 35px;">/<input type="text" style="width: 35px;">/<input type="text" style="width: 35px;"> Name/Discipline <input type="text" style="width: 65%;">
            </h3>
        </div>




        <div class="flex-container">
            <div class="bg-primary text-white pad-3x10 w-100 border-radius-15">
                <h3 class="inline">VOLUNTEER SERVICES</h3>
            </div>
            <div class="flex-grow">
                <h3 class="text-primary pad-5x0 mar-unset">Goals/Outcomes:</h3>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Patient/Caregiver will receive requested volunteer services within <input type="text" style="width: 30px;" >
                    days of request
                </div>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Caregiver will receive sufficient rest during patient's terminal illness
                </div>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>
                <h3 class="inline-block text-secondary pad-5x0 mar-unset">
                    Volunteer Interventions:
                </h3>
                <input type="checkbox">
                <h3 class="inline-block text-primary pad-5x0 mar-unset">FR</h3>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Need for Volunteer Services
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Volunteer Coordinator will:
                    <div class="text-secondary pad-0x20">
                        <input type="checkbox"> Explain volunteer services
                    </div>
                    <div class="text-secondary pad-0x20">
                        <input type="checkbox"> Arrange for the provision of requested services
                    </div>
                    <div class="text-secondary pad-0x20">
                        <input type="checkbox"> Maintain supportive relationship with patient/caregiver
                    </div>
                </div>

                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>
                <h3 class="inline-block text-secondary pad-5x0 mar-unset">
                    Caregiver Relief Interventions:
                </h3>
                <input type="checkbox">
                <h3 class="inline-block text-primary pad-5x0 mar-unset">FR</h3>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Need for Caregiver Relief
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-100">
                        <input type="checkbox"> Change level of care to inpatient respite care per physician order
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-100">
                        <input type="checkbox"> Encourage caregiver rest during patient's respite care
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-100">
                        <input type="checkbox"> Provide education regarding resources and/or alternate placement
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>
            </div>
            <div class="relative text-secondary flex-30 pad-t-10">
                <h3 class="absolute t-neg10 l-0p5r">Comments</h3>
                <span class="line-height-25">________________________________________________</span>
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
            </div>
        </div>


        <div class="flex-container border-primary-top mar-t-1r bg-img-primary">
            <h3 class="text-primary mar-unset pad-5 w-100">
                Date Initiated <input type="text" style="width: 35px;">/<input type="text" style="width: 35px;">/<input type="text" style="width: 35px;"> Name/Discipline <input type="text" style="width: 65%;">
            </h3>
        </div>

        <div class="flex-container">
            <div class="bg-primary text-white pad-3x10 w-100 border-radius-15">
                <h3 class="inline">NEUROLOGICAL STATUS</h3>
            </div>
            <div class="flex-grow">
                <h3 class="text-primary pad-5x0 mar-unset">Goals/Outcomes:</h3>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Seizures will be controlled during care
                    <input type="checkbox"> within <input type="text" style="width: 30px;"> period of time
                </div>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Patient will remain safe from injury during seizure activity
                </div>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>
                <h3 class="inline-block text-secondary pad-5x0 mar-unset">
                    Neurological Interventions:
                </h3>
                <input type="checkbox">
                <h3 class="inline-block text-primary pad-5x0 mar-unset">FR</h3>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        S/S seizure activity
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform:</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Medication administration, side effects and response
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform:</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Care of patient experiencing seizures
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>
            </div>

            <div class="relative text-secondary flex-30 pad-t-10">
                <h3 class="absolute t-neg10 l-0p5r">Comments</h3>
                <span class="line-height-25">________________________________________________</span>
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
            </div>
        </div>
        <div class="flex-container border-primary-top mar-t-1r bg-img-primary">
            <h3 class="text-primary mar-unset pad-5 w-100">
                Date Initiated <input type="text" style="width: 35px;">/<input type="text" style="width: 35px;">/<input type="text" style="width: 35px;"> Name/Discipline <input type="text" style="width: 65%;">
            </h3>
        </div>




        <div class="flex-container">
            <div class="bg-primary text-white pad-3x10 w-100 border-radius-15">
                <h3 class="inline">MUSCULOSKELETAL STATUS</h3>
            </div>
            <div class="flex-grow">
                <h3 class="text-primary pad-5x0 mar-unset">Goals/Outcomes:</h3>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Patient will maintain optimal mobility
                    <input type="checkbox"> during care
                    <input type="checkbox"> within <input type="text" style="width: 30px;"> period of time
                </div>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Optimal hygiene will be maintained during care
                </div>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Fall Prevention will be maintained during care
                </div>

                <h3 class="inline-block text-secondary pad-5x0 mar-unset">
                    Mobility Interventions:
                </h3>
                <input type="checkbox">
                <h3 class="inline-block text-primary pad-5x0 mar-unset">FR</h3>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Safe transfer
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Provide assistive devices (specify):
                    <input type="text" style="width: 55%;">
                    <div class="text-secondary pad-0x20">
                        <input type="checkbox"> Encourage activity as tolerated
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>
            </div>
            <div class="relative text-secondary flex-30 pad-t-10">
                <h3 class="absolute t-neg10 l-0p5r">Comments</h3>
                <span class="line-height-25">________________________________________________</span>
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
            </div>
        </div>
        <div class="flex-container border-primary-top mar-t-1r bg-img-primary">
            <h3 class="text-primary mar-unset pad-5 w-100">
                Date Initiated <input type="text" style="width: 35px;">/<input type="text" style="width: 35px;">/<input type="text" style="width: 35px;"> Name/Discipline <input type="text" style="width: 65%;">
            </h3>
        </div>

        <div class="flex-container">
            <div class="bg-primary text-white pad-3x10 w-100 border-radius-15">
                <h3 class="inline">MUSCULOSKELETAL STATUS (continued)</h3>
            </div>
            <div class="flex-grow">
                <h3 class="inline-block text-secondary pad-5x0 mar-unset">
                    ADL Interventions:
                </h3>
                <input type="checkbox">
                <h3 class="inline-block text-primary pad-5x0 mar-unset">FR</h3>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess:</em></strong>
                    </div>
                    <div class="inline-block">
                        Caregiver ability to provide personal care
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Basic personal care techniques and activities of daily living (ADL's)
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block">
                        <input type="checkbox">
                        Provide hospice aide personal care, frequency: <input type="text" style="width: 30px;">
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>
                <h3 class="inline-block text-secondary pad-5x0 mar-unset">
                    Fall Interventions:
                </h3>
                <input type="checkbox">
                <h3 class="inline-block text-primary pad-5x0 mar-unset">FR</h3>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Fall prevention
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>
            </div>
            <div class="relative text-secondary flex-30 pad-t-10">
                <h3 class="absolute t-neg10 l-0p5r">Comments</h3>
                <span class="line-height-25">________________________________________________</span>
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
            </div>
        </div>
        <div class="flex-container border-primary-top mar-t-1r bg-img-primary">
            <h3 class="text-primary mar-unset pad-5 w-100">
                Date Initiated <input type="text" style="width: 35px;">/<input type="text" style="width: 35px;">/<input type="text" style="width: 35px;"> Name/Discipline <input type="text" style="width: 65%;">
            </h3>
        </div>

        <div class="flex-container">
            <div class="bg-primary text-white pad-3x10 w-100 border-radius-15">
                <h3 class="inline">PAIN STATUS</h3>
            </div>
            <div class="flex-grow">
                <h3 class="text-primary pad-5x0 mar-unset">Goals/Outcomes:</h3>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Patient's pain will remain at comfortable level
                    <input type="checkbox"> during care
                    <input type="checkbox"> within <input type="text" style="width: 30px;"> period of time
                </div>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Patient will receive optimal level of pain and/or symptom managementon short
                    term basis
                </div>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>
                <h3 class="inline-block text-secondary pad-5x0 mar-unset">
                    Pain Interventions:
                </h3>
                <input type="checkbox">
                <h3 class="inline-block text-primary pad-5x0 mar-unset">FR</h3>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess:</em></strong>
                    </div>
                    <div class="inline-block">
                        Pain status
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess:</em></strong>
                    </div>
                    <div class="inline-block">
                        Response to medications
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Non-Pharmacological pain control measures, e.g., relaxation
                    </div>
                    <div class="text-secondary pad-0x20">
                        positioning, massage, etc.
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>
                <h3 class="inline-block text-secondary pad-5x0 mar-unset">
                    General Inpatient Care Interventions:
                </h3>
                <input type="checkbox">
                <h3 class="inline-block text-primary pad-5x0 mar-unset">FR</h3>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess:</em></strong>
                    </div>
                    <div class="inline-block">
                        Need for inpatient care for pain/symptom control
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Patient/Caregiver regarding inpatient care
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block">
                        <input type="checkbox">
                        Arrange transfer to inpatient facility per physician order
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>
            </div>
            <div class="relative text-secondary flex-30 pad-t-10">
                <h3 class="absolute t-neg10 l-0p5r">Comments</h3>
                <span class="line-height-25">________________________________________________</span>
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
            </div>
        </div>
        <div class="flex-container border-primary-top mar-t-1r bg-img-primary">
            <h3 class="text-primary mar-unset pad-5 w-100">
                Date Initiated <input type="text" style="width: 35px;">/<input type="text" style="width: 35px;">/<input type="text" style="width: 35px;"> Name/Discipline <input type="text" style="width: 65%;">
            </h3>
        </div>

        <div class="flex-container">
            <div class="bg-primary text-white pad-3x10 w-100 border-radius-15">
                <h3 class="inline">INTEGUMENTARY STATUS</h3>
            </div>
            <div class="flex-grow">
                <h3 class="text-primary pad-5x0 mar-unset">Goals/Outcomes:</h3>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Skin integrity will be maintained
                    <input type="checkbox"> during care
                    <input type="checkbox"> within <input type="text" style="width: 30px;"> period of time
                </div>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>
                <h3 class="inline-block text-secondary pad-5x0 mar-unset">
                    Integumentary Interventions:
                </h3>
                <input type="checkbox">
                <h3 class="inline-block text-primary pad-5x0 mar-unset">FR</h3>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess:</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Skin breakdown and prevention
                    </div>
                </div>



                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Wound care as follows: <input type="text" style="width: 50%;">
                    </div>
                    <div class="text-secondary pad-0x20">
                        <input type="text" style="width: 86.5%;">
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Stoma care as follows: <input type="text" style="width: 52%;">
                    </div>
                    <div class="text-secondary pad-0x20">
                        <input type="text" style="width: 86.5%;">
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Incisional care as follows: <input type="text" style="width: 44%;">
                    </div>
                    <div class="text-secondary pad-0x20">
                        <input type="text" style="width: 86.5%;">
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        S/S of complications, infection to include: <input type="text" style="width: 34%;">
                    </div>
                    <div class="text-secondary pad-0x20">
                        <input type="text" style="width: 86.5%;">
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block">
                        <input type="checkbox">
                        Provide appropriate air mattress
                    </div>
                </div>


                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>
            </div>
            <div class="relative text-secondary flex-30 pad-t-10">
                <h3 class="absolute t-neg10 l-0p5r">Comments</h3>
                <span class="line-height-25">________________________________________________</span>
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
            </div>
        </div>
        <div class="flex-container border-primary-top mar-t-1r bg-img-primary">
            <h3 class="text-primary mar-unset pad-5 w-100">
                Date Initiated <input type="text" style="width: 35px;">/<input type="text" style="width: 35px;">/<input type="text" style="width: 35px;"> Name/Discipline <input type="text" style="width: 65%;">
            </h3>
        </div>



        <div class="flex-container">
            <div class="bg-primary text-white pad-3x10 w-100 border-radius-15">
                <h3 class="inline">CARDIO/RESPIRATORY STATUS</h3>
            </div>
            <div class="flex-grow">
                <h3 class="text-primary pad-5x0 mar-unset">Goals/Outcomes:</h3>
                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Patient/Caregiver will receive optimal teaching and support as cardiac and
                    pulmonary functions
                    <div class="text-secondary pad-0x20">
                        change during care
                    </div>
                </div>

                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Patient/Caregiver will demonstrate proper and safe use of oxygen set-up
                </div>

                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Patient/Caregiver will verbalize understanding of medications and treatments
                    <input type="checkbox"> during care
                    <div class="text-secondary pad-0x20">
                        <input type="checkbox"> within <input type="text" style="width: 30px;"> period of time
                    </div>
                </div>

                <h3 class="inline-block text-secondary pad-5x0 mar-unset">
                    Respiratory Interventions:
                </h3>
                <input type="checkbox">
                <h3 class="inline-block text-primary pad-5x0 mar-unset">FR</h3>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess:</em></strong>
                    </div>

                    <div class="inline-block">
                        Respiratory status
                    </div>
                </div>


                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Proper and safe use of O<sub>2</sub> administration at <input type="text" style="width: 20px;"> liters/min
                    </div>
                    <div class="text-secondary pad-0x20">
                        via <input type="text" style="width: 20%;">. Hours of use <input type="text" style="width: 30px;">
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Response to medications and treatment
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Nebulizer inhalation treatment with: <input type="text" style="width: 20%;">
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Suctioning technique
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Trach care
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Pulse Oximentry PRN for respiratory assessment
                    </div>
                </div>


                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>
                <h3 class="inline-block text-secondary pad-5x0 mar-unset">
                    Cardiovascular Interventions:
                </h3>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess:</em></strong>
                    </div>
                    <div class="inline-block">
                        Cardiovascular status
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess:</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Edema, fluid retention and dehydration
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess:</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        S/S of infection
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>
            </div>
            <div class="relative text-secondary flex-30 pad-t-10">
                <h3 class="absolute t-neg10 l-0p5r">Comments</h3>
                <span class="line-height-25">________________________________________________</span>
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
            </div>
        </div>
        <div class="flex-container border-primary-top mar-t-1r bg-img-primary">
            <h3 class="text-primary mar-unset pad-5 w-100">
                Date Initiated <input type="text" style="width: 35px;">/<input type="text" style="width: 35px;">/<input type="text" style="width: 35px;"> Name/Discipline <input type="text" style="width: 65%;">
            </h3>
        </div>
    </div>

    {{-- <div class="divider"></div> --}}

    {{-- <div class="A4">
        <div class="flex-container">
            <img src="https://i.ibb.co/KhC4SZT/my-dummy-logo.png" width="200" alt="my-dummy-logo" border="0">
        </div>
        <div class="flex-container brand-container">
            <h1 class="text-primary inline-block relative mar-unset pad-unset text-1p8r b-n10">
                MY COMPANY NAME
            </h1>
        </div>
        <div class="flex-container mar-t-3r">
            <div class="border-primary flex-300px pad-8x5 border-radius-5 bg-secondary">
                <div class="flex align-start text-primary">
                    <div class="inline-block relative t-neg2p">
                        <input type="checkbox" class="relative t-0p1r"> <strong>FR -</strong>
                    </div>
                    <span class="inline-block w-240px mar-l-5">
                        <strong>
                            Indicates Facility is responsible for performing the respective function
                        </strong>
                    </span>
                </div>
            </div>
        </div>

        <div class="flex-container border-primary-top mar-t-1r bg-img-primary">
            <div class="border-primary-right text-primary flex-65 pad-2x10">
                Patient Name (First, MI, Last)
                <input type="text">
            </div>
            <div class="border-primary-right br-none text-primary pad-2x10 flex-grow">
                ID#
                <input type="text">
            </div>
        </div>

        <div class="flex-container">
            <div class="bg-primary text-white pad-3x10 w-100 border-radius-15">
                <h3 class="inline">RENAL/GENITOURINARY STATUS</h3>
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-grow">
                <h3 class="text-primary pad-5x0 mar-unset">Goals/Outcomes:</h3>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Skin will be maintained at optimal level
                    <input type="checkbox"> during care
                    <input type="checkbox"> within <input type="text" style="width: 35px;"> period of time
                </div>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>

                <h3 class="inline-block text-secondary pad-5x0 mar-unset">
                    Renal/Genitourinary Interventions:
                </h3>
                <input type="checkbox">
                <h3 class="inline-block text-primary pad-5x0 mar-unset">FR</h3>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess:</em></strong>
                    </div>
                    <div class="inline-block">
                        Urinary status
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Skin breakdown and prevention
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Condom catheter application and use
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Foley catheter <input type="text" style="width: 50px;"> Fr <input type="text" style="width: 50px;"> mL balloon
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Foley irrigation: <input type="text" style="width: 50%;">
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Solution <input type="text" style="width: 35px;"> mL <input type="text" style="width: 30px;"> frequency <input type="text" style="width: 30px;">
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Suprapubic catheter care: size: <input type="text" style="width: 30px;">
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Catheter care-frequency <input type="text" style="width: 50px;">
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Catheter change q <input type="text" style="width: 50px;"> with <input type="text" style="width: 50px;">
                    </div>
                    <div class="text-secondary pad-0x20">
                        Fr <input type="text" style="width: 50px;"> mL balloon catheter
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>

            </div>


            <div class="relative text-secondary flex-30 pad-t-10">
                <h3 class="absolute t-neg10 l-0p5r">Comments</h3>
                <span class="line-height-25">________________________________________________</span>
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
            </div>
        </div>

        <div class="flex-container border-primary-top mar-t-1r bg-img-primary">
            <h3 class="text-primary mar-unset pad-5 w-100">
                Date Initiated <input type="text" style="width: 35px;">/<input type="text" style="width: 35px;">/<input type="text" style="width: 35px;"> Name/Discipline <input type="text" style="width: 65%;">
            </h3>
        </div>

        <div class="flex-container">
            <div class="bg-primary text-white pad-3x10 w-100 border-radius-15">
                <h3 class="inline">ENDOCRINE STATUS</h3>
            </div>
            <div class="flex-grow">
                <h3 class="text-primary pad-5x0 mar-unset">Goals/Outcomes:</h3>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Patient's blood sugar level will be maintained at optimal level for
                    patient's illness
                    <input type="checkbox"> during care
                    <div class="text-primary pad-0x20">
                        <input type="checkbox"> within <input type="text" style="width: 35px;"> period of time
                    </div>
                </div>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Patient's neuropathy/radiculopathy will be managed with medication
                    <input type="checkbox"> during care
                    <div class="text-primary pad-0x20">
                        <input type="checkbox"> within <input type="text" style="width: 35px;"> period of time
                    </div>
                </div>

                <h3 class="inline-block text-secondary pad-5x0 mar-unset">
                    Endocrine Interventions:
                </h3>
                <input type="checkbox">
                <h3 class="inline-block text-primary pad-5x0 mar-unset">FR</h3>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Diabetic care
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        S/S of hypo/hyperglycemia
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Glucometer testing
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Medications: administration, use, side effects
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Methods to promote oral intake
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        S/S of Neuropathy/Radiculopathy
                    </div>
                </div>
            </div>
            <div class="relative text-secondary flex-30 pad-t-10">
                <h3 class="absolute t-neg10 l-0p5r">Comments</h3>
                <span class="line-height-25">________________________________________________</span>
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
            </div>
        </div>
        <div class="flex-container border-primary-top mar-t-1r bg-img-primary">
            <h3 class="text-primary mar-unset pad-5 w-100">
                Date Initiated <input type="text" style="width: 35px;">/<input type="text" style="width: 35px;">/<input type="text" style="width: 35px;"> Name/Discipline <input type="text" style="width: 65%;">
            </h3>
        </div>




        <div class="flex-container">
            <div class="bg-primary text-white pad-3x10 w-100 border-radius-15">
                <h3 class="inline">GASTROINTESTINAR STATUS</h3>
            </div>
            <div class="flex-grow">
                <h3 class="text-primary pad-5x0 mar-unset">Goals/Outcomes:</h3>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Patient's nausea/vomiting will be controlled within <input type="text" style="width: 35px;"> period of time
                </div>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Optimal nutrition/hydration will be achieved based on patient conditions
                    and/or desires
                    <div class="text-primary pad-0x20">
                        <input type="checkbox"> during care
                        <input type="checkbox"> within <input type="text" style="width: 35px;"> period of time
                    </div>
                </div>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Patient/Caregiver will demonstrate ability to manage bowel routine within
                    <input type="text" style="width: 35px;"> period of time
                </div>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Patient will maintain optimal swallowing, and patient/caregiver understands
                    risk
                    <input type="checkbox"> during care
                    <div class="text-primary pad-0x20">
                        <input type="checkbox"> within <input type="text" style="width: 35px;"> period of time
                    </div>
                </div>

                <h3 class="inline-block text-secondary pad-5x0 mar-unset">
                    GI Interventions:
                </h3>
                <input type="checkbox">
                <h3 class="inline-block text-primary pad-5x0 mar-unset">FR</h3>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block">
                        Nausea/Vomiting
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Medication administration, side effects and response
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>

                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Nutritional changes and needs related to terminal illness
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Risk of aspiration
                    </div>
                </div>



                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Parenteral nutrition and the care/use of equipment to include:
                    </div>
                    <div class="text-secondary pad-0x20">
                        <input type="text" class="w-80">
                    </div>
                    <div class="text-secondary pad-0x20">
                        <input type="text" class="w-80">
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Enteral nutrition and the care/use of equipment to include:
                    </div>
                    <div class="text-secondary pad-0x20">
                        <input type="text" class="w-80">
                    </div>
                    <div class="text-secondary pad-0x20">
                        <input type="text" class="w-80">
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Gastrostomy Tube (specify): <input type="text" style="width: 160px;">
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        NG Tube (specify): <input type="text" style="width: 150px;">
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        J Tube (specify): <input type="text" style="width: 165px;">
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Change feeding tube <input type="text" style="width: 150px;">
                    </div>
                    <div class="text-secondary pad-0x20">
                        using size <input type="text" style="width: 150px;"> q <input type="text" style="width: 150px;">
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>
                <h3 class="inline-block text-secondary pad-5x0 mar-unset">
                    Bowel Interventions:
                </h3>
                <input type="checkbox">
                <h3 class="inline-block text-primary pad-5x0 mar-unset">FR</h3>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess:</em></strong>
                    </div>
                    <div class="inline-block">
                        Bowel status
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Nutrition, hydration and activity
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Fecal impaction and disimpact PRN
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Bowel regimen per physician order and effectiveness
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Ostomy care to include <input type="text" style="width: 120px;">
                    </div>
                    <div class="text-secondary pad-0x20">
                        <input type="text" class="w-80">
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        S/S enema PRN constipation
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        S/S Fleet enema PRN constipation
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Medication administration, side effects and response
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Skin breakdown prevention and prevention
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>


                <h3 class="inline-block text-secondary pad-5x0 mar-unset">
                    Impaired Interventions:
                </h3>
                <input type="checkbox">
                <h3 class="inline-block text-primary pad-5x0 mar-unset">FR</h3>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess:</em></strong>
                    </div>
                    <div class="inline-block">
                        Patient's swallowing ability
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Medication administration, side effects and response
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Alter diet as patient's condition deteriorates, per physician's order
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>
            </div>

            <div class="relative text-secondary flex-30 pad-t-10">
                <h3 class="absolute t-neg10 l-0p5r">Comments</h3>
                <span class="line-height-25">________________________________________________</span>
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
            </div>
        </div>


        <div class="flex-container border-primary-top mar-t-1r bg-img-primary">
            <h3 class="text-primary mar-unset pad-5 w-100">
                Date Initiated <input type="text" style="width: 35px;">/<input type="text" style="width: 35px;">/<input type="text" style="width: 35px;"> Name/Discipline <input type="text" style="width: 65%;">
            </h3>
        </div>

        <div class="flex-container">
            <div class="bg-primary text-white pad-3x10 w-100 border-radius-15">
                <h3 class="inline">PYSCHOLOGICAL/MENTAL/EMOTIONAL STATUS</h3>
            </div>
            <div class="flex-grow">
                <h3 class="text-primary pad-5x0 mar-unset">Goals/Outcomes:</h3>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Caregiver will demonstrate ability to cope with patient's altered mental
                    status within <input type="text" style="width: 35px;">
                    <div class="text-primary pad-0x20">
                        period of time
                    </div>
                </div>

                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Patient will be maintained in safe environment
                    <input type="checkbox"> during care
                    <input type="checkbox"> within <input type="text" style="width: 35px;"> period of time
                </div>

                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Patient's agitation will be controlled to a manageable level
                    <input type="checkbox"> within <input type="text" style="width: 35px;"> period of time
                </div>

                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Patient will achieve optimal sleep/rest
                    <input type="checkbox"> during care
                    <input type="checkbox"> within <input type="text" style="width: 35px;"> period of time
                </div>

                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Patient will demonstrate or report a decrease in anxiety level
                    <input type="checkbox"> during care
                    <input type="checkbox"> within <input type="text" style="width: 35px;">
                    <div class="text-primary pad-0x20">period of time</div>
                </div>

                <h3 class="inline-block text-secondary pad-5x0 mar-unset">
                    Psychological Interventions:
                </h3>
                <input type="checkbox">
                <h3 class="inline-block text-primary pad-5x0 mar-unset">FR</h3>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Level of consciousness/orientation
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform:</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Safety measures to prevent injury
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Current medications/potential side effects
                    </div>
                    <div class="text-secondary pad-0x20">
                        causing alteration in mental status
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Causes, e.g., infection, pain, urinary retention,
                    </div>
                    <div class="text-secondary pad-0x20">
                        constipation etc.
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Counseling
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Grief management
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>

                <h3 class="inline-block text-secondary pad-5x0 mar-unset">
                    Sleep Interventions:
                </h3>
                <input type="checkbox">
                <h3 class="inline-block text-primary pad-5x0 mar-unset">FR</h3>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Causes of interruptions in sleep
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Medication administration, side effects and response
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>
            </div>


            <div class="relative text-secondary flex-30 pad-t-10">
                <h3 class="absolute t-neg10 l-0p5r">Comments</h3>
                <span class="line-height-25">________________________________________________</span>
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
            </div>
        </div>
        <div class="flex-container border-primary-top mar-t-1r bg-img-primary">
            <h3 class="text-primary mar-unset pad-5 w-100">
                Date Initiated <input type="text" style="width: 35px;">/<input type="text" style="width: 35px;">/<input type="text" style="width: 35px;"> Name/Discipline <input type="text" style="width: 65%;">
            </h3>
        </div>




        <div class="flex-container">
            <div class="bg-primary text-white pad-3x10 w-100 border-radius-15">
                <h3 class="inline">SPIRITUAL NEEDS STATUS</h3>
            </div>
            <div class="flex-grow">
                <h3 class="text-primary pad-5x0 mar-unset">Goals/Outcomes:</h3>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Spiritual needs will be met as determined by patient/caregiver
                    patient's illness
                    <input type="checkbox"> during care
                    <div class="text-primary pad-0x20">
                        <input type="checkbox"> within <input type="text" style="width: 35px;"> period of time
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>

                <h3 class="inline-block text-secondary pad-5x0 mar-unset">
                    Spiritual Need Interventions:
                </h3>
                <input type="checkbox">
                <h3 class="inline-block text-primary pad-5x0 mar-unset">FR</h3>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Spiritual needs of the patient and caregiver
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess:</em></strong>
                    </div>
                    <div class="inline-block">
                        Current clergy support
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess:</em></strong>
                    </div>
                    <div class="inline-block">
                        Need for spiritual counselor to provide spiritual support
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>
            </div>
            <div class="relative text-secondary flex-30 pad-t-10">
                <h3 class="absolute t-neg10 l-0p5r">Comments</h3>
                <span class="line-height-25">________________________________________________</span>
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
            </div>
        </div>
        <div class="flex-container border-primary-top mar-t-1r bg-img-primary">
            <h3 class="text-primary mar-unset pad-5 w-100">
                Date Initiated <input type="text" style="width: 35px;">/<input type="text" style="width: 35px;">/<input type="text" style="width: 35px;"> Name/Discipline <input type="text" style="width: 65%;">
            </h3>
        </div>

        <div class="flex-container">
            <div class="bg-primary text-white pad-3x10 w-100 border-radius-15">
                <h3 class="inline">MEDICATIONS</h3>
            </div>
            <div class="flex-grow">
                <h3 class="text-primary pad-5x0 mar-unset">Goals/Outcomes:</h3>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Patient will receive prescribed medication at correct time
                    <div class="text-primary pad-0x20">
                        (see Medication Profile)
                    </div>
                </div>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Patient/caregiver safely administers drugs and biologicals during care
                </div>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Other: <input type="text" class="w-80">
                </div>
                <h3 class="inline-block text-secondary pad-5x0 mar-unset">
                    Medication Interventions:
                </h3>
                <input type="checkbox">
                <h3 class="inline-block text-primary pad-5x0 mar-unset">FR</h3>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform:</em></strong>
                    </div>
                    <div class="inline-block">
                        Patient's medications will be reviewed
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform:</em></strong>
                    </div>
                    <div class="inline-block">
                        Reorder of medications from pharmacy will be documented
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Discontinued medications will be
                    </div>
                    <div class="text-secondary pad-0x20">
                        discarded per policy
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Report to physician and IDG any medication
                    </div>
                    <div class="text-secondary pad-0x20">
                        discrepancies
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block">
                        If misuse or diversion is suspended:
                    </div>
                    <div class="text-secondary pad-0x20">
                        <div class="inline-block w-90">
                            <input type="checkbox"> <strong><em>Assess:</em></strong>
                        </div>
                        <div class="inline-block">
                            Maintain medication in a lock box
                        </div>
                    </div>
                    <div class="text-secondary pad-0x20">
                        <div class="inline-block w-90">
                            <input type="checkbox"> <strong><em>Assess</em></strong>
                        </div>
                        <div class="inline-block w-90">
                            <input type="checkbox"> <strong><em>Perform:</em></strong>
                        </div>
                        <div class="inline-block">
                            Count medications every nursing visit
                        </div>
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Other: <input  type="text" class="w-80" />
                </div>
                <h3 class="inline-block text-secondary pad-5x0 mar-unset">
                    High Tech/Special Procedures Interventions:
                </h3>
                <input type="checkbox">
                <h3 class="inline-block text-primary pad-5x0 mar-unset">FR</h3>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Administration of <input type="text" style="width: 60px;">(IV medication)
                    </div>
                    <div class="text-secondary pad-0x20">
                        in <input type="text" style="width: 60px;"> (solution) to run at <input type="text" style="width: 60px;"> mL/hr via <input type="text" style="width: 60px;"> (<input type="checkbox">
                        Pump/<input type="checkbox"> Gravity )
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Flush IV/PICC/Midline with 5-10mL of NS before and
                    </div>
                    <div class="text-secondary pad-0x20">
                        after antibiotec infusion. Follow with 3-5mL Heparin <input type="text" style="width: 60px;"> units/mL flush
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Change <input type="text" style="width: 120px;"> dressing q
                    </div>
                    <div class="text-secondary pad-0x20">
                        <input type="text" style="width: 120px;"> and PRN using sterile technique with alcohol/betadine
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Change injection cap q <input type="text" style="width: 120px;"> and PRN
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Flush <input type="text" style="width: 120px;"> catheter with <input type="text" style="width: 120px;">
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Change Huber needle q <input type="text" style="width: 80px;"/>
                    </div>
                    <div class="text-secondary pad-0x20">
                        technique
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Access port q <input type="text" style="width: 80px;"> and PRN flush with <input type="text" style="width: 80px;">
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Pump/Equiment (specify): <input type="text" style="width: 120px;">
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Equipment use/Safety
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Start Peripheral IV and maintain site, q <input type="text" style="width: 100px;"> or
                    </div>
                    <div class="text-secondary pad-0x20">
                        q <input type="text" style="width: 100px;"> days and PRN for S/S of infiltration/infection
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        S/S of infiltration and emergency procedures
                    </div>
                </div>

                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>
            </div>
            <div class="relative text-secondary flex-30 pad-t-10">
                <h3 class="absolute t-neg10 l-0p5r">Comments</h3>
                <span class="line-height-25">________________________________________________</span>
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
            </div>
        </div>
        <div class="flex-container border-primary-top mar-t-1r bg-img-primary">
            <h3 class="text-primary mar-unset pad-5 w-100">
                Date Initiated <input type="text" style="width: 35px;">/<input type="text" style="width: 35px;">/<input type="text" style="width: 35px;"> Name/Discipline <input type="text" style="width: 65%;">
            </h3>
        </div>

        <div class="flex-container">
            <div class="bg-primary text-white pad-3x10 w-100 border-radius-15">
                <h3 class="inline">EQUIPMENT</h3>
            </div>
            <div class="flex-grow">
                <h3 class="text-primary pad-5x0 mar-unset">Goals/Outcomes:</h3>
                <div class="text-primary pad-0x10">
                    <input type="checkbox"> Patient/Caregiver will receive equipment and demonstrate use at time of
                    equipment set-up
                </div>
                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>
                <h3 class="inline-block text-secondary pad-5x0 mar-unset">
                    Equipment Interventions:
                </h3>
                <input type="checkbox">
                <div class="text-secondary pad-0x10">
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Assess</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Perform</em></strong>
                    </div>
                    <div class="inline-block w-90">
                        <input type="checkbox"> <strong><em>Instruct:</em></strong>
                    </div>
                    <div class="inline-block">
                        Use of equipment
                    </div>
                </div>
                <div class="text-secondary pad-0x10">
                    <input type="checkbox"> Other: <input class="w-80" type="text">
                </div>
            </div>
            <div class="relative text-secondary flex-30 pad-t-10">
                <h3 class="absolute t-neg10 l-0p5r">Comments</h3>
                <span class="line-height-25">________________________________________________</span>
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
            </div>
        </div>
        <div class="flex-container border-primary-top mar-t-1r bg-img-primary">
            <h3 class="text-primary mar-unset pad-5 w-100">
                Date Initiated <input type="text" style="width: 35px;">/<input type="text" style="width: 35px;">/<input type="text" style="width: 35px;"> Name/Discipline <input type="text" style="width: 65%;">
            </h3>
        </div>

        <div class="other-container">
            <div class="other-left">
                <div class="flex-container">
                    <div class="bg-primary text-white pad-3x10 w-100 border-radius-15">
                        <h3 class="inline">OTHER</h3>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-primary pad-5x0 mar-unset">Goals/Outcomes:</h3>
                        <div class="text-primary pad-0x10">
                            <input type="checkbox"><input type="text" style="width: 90%;">
                        </div>
                        <div class="text-primary pad-0x10">
                            <input type="checkbox"><input type="text" style="width: 90%;">
                        </div>
                        <div class="text-primary pad-0x10">
                            <input type="checkbox"><input type="text" style="width: 90%;">
                        </div>
                        <h3 class="inline-block text-secondary pad-5x0 mar-unset">
                            Interventions:
                        </h3>
                        <input type="checkbox">
                        <h3 class="inline-block text-primary pad-5x0 mar-unset">FR</h3>
                        <div class="text-primary pad-0x10">
                            <input type="checkbox"><input type="text" style="width: 90%;">
                        </div>
                        <div class="text-primary pad-0x10">
                            <input type="checkbox"><input type="text" style="width: 90%;">
                        </div>
                        <div class="text-primary pad-0x10">
                            <input type="checkbox"><input type="text" style="width: 90%;">
                        </div>
                    </div>
                </div>
                <div class="flex-container border-primary-top mar-t-1r bg-img-primary" style="width: 87%;">
                    <h3 class="text-primary mar-unset pad-5">
                        Date Initiated <input type="text" style="width: 20px;">/<input type="text" style="width: 20px;">/<input type="text" style="width: 20px;"> Name/Discipline <input type="text" style="width: 120px;">
                    </h3>
                </div>
                <div class="flex-container border-primary-top bg-white mar-r-10">
                    <div class="text-primary mar-unset pad-5 w-100">
                        Comments 
                        <input type="text" class="w-80">
                    </div>
                </div>
                <div class="flex-container border-primary-top br-bot bg-white mar-r-10">
                    <div class="text-secondary">
                        <input type="checkbox"> Patient/Caregiver is involved in care plan development,
                        <div class="text-secondary pad-0x20">
                            understands and agrees to care plan?&nbsp;<input type="checkbox"> Yes &nbsp;<input
                                type="checkbox"> No
                        </div>
                    </div>
                </div>
            </div>

            <div class="other-right">
                <div class="flex-container pad-l-none">
                    <div class="bg-primary text-white pad-3x10 w-100 border-radius-15">
                        <h3 class="inline">OTHER</h3>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-primary pad-5x0 mar-unset">Goals/Outcomes:</h3>
                        <div class="text-primary pad-0x10">
                            <input type="checkbox"><input type="text" style="width: 90%;">
                        </div>
                        <div class="text-primary pad-0x10">
                            <input type="checkbox"><input type="text" style="width: 90%;">
                        </div>
                        <div class="text-primary pad-0x10">
                            <input type="checkbox"><input type="text" style="width: 90%;">
                        </div>
                        <h3 class="inline-block text-secondary pad-5x0 mar-unset">
                            Interventions:
                        </h3>
                        <input type="checkbox">
                        <h3 class="inline-block text-primary pad-5x0 mar-unset">FR</h3>
                        <div class="text-primary pad-0x10">
                            <input type="checkbox"><input type="text" style="width: 90%;">
                        </div>
                        <div class="text-primary pad-0x10">
                            <input type="checkbox"><input type="text" style="width: 90%;">
                        </div>
                        <div class="text-primary pad-0x10">
                            <input type="checkbox"><input type="text" style="width: 90%;">
                        </div>
                    </div>
                </div>
                <div class="flex-container border-primary-top mar-t-1r bg-img-primary pad-l-none" style="width: 90%;">
                    <h3 class="text-primary mar-unset pad-5">
                        Date Initiated <input type="text" style="width: 20px;">/<input type="text" style="width: 20px;">/<input type="text" style="width: 20px;"> Name/Discipline <input type="text" style="width: 130px;">
                    </h3>
                </div>
                <div class="flex-container border-primary-top bg-white pad-l-none" style="width: 90%;">
                    <div class="text-primary mar-unset pad-5 w-100">
                        Comments 
                        <input type="text" class="w-80">
                    </div>
                </div>
                <div class="flex-container border-primary-top br-bot bg-white pad-l-none" style="width: 90%;">
                    <div class="text-secondary">
                        <input type="checkbox"> Patient/Caregiver wants to participate in IDG? &nbsp;<input
                            type="checkbox"> Yes &nbsp;<input type="checkbox"> No
                    </div>
                </div>
                <div class="flex-container border-primary-top br-bot bg-white pad-l-none" style="width: 90%;">
                    <div class="text-secondary">
                        <input type="checkbox"> Patient/Caregiver educated to their identified responsibilities?
                        <input type="checkbox">Yes<input type="checkbox">No
                    </div>
                </div>

            </div>

        </div>


        <div class="flex-container">
            <div class="bg-primary text-white pad-3x10 w-100 border-radius-15">
                <h3 class="inline">ORDERS</h3>
            </div>
        </div>
        <div class="flex-container pad-b-20">
            <div class="other-container-1">
                <div class="flex-grow">
                    <div><input type="checkbox"> SN visit frequency <input type="text" style="width: 35px;"> and <input type="text" style="width: 35px;"> PRN for changes in status when
                        <input type="text" style="width: 35px;"> period of time</div>
                    <div><input type="checkbox"> Aide visit frequency <input type="text" style="width: 35px;"> to assist w/ personal care/ADLs/fligh
                        housekeeping as needed within <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="width: 35px;"> period of time
                    </div>
                    <div class="inline-block"><input type="checkbox"> PT visit frequency <input type="text" style="width: 35px;"> within <input type="text" style="width: 35px;"> period of
                        time</div>
                    <input type="checkbox"> PT to consult, evaluate and treat <br>
                    <div class="inline-block"><input type="checkbox"> ST visit frequency <input type="text" style="width: 35px;"> within <input type="text" style="width: 35px;"> period of
                        time</div> <input type="checkbox"> ST to consult, evaluate and treat <br>
                    <div class="inline-block"><input type="checkbox"> OT visi frequency <input type="text" style="width: 35px;"> within <input type="text" style="width: 35px;"> period of
                        time</div> <input type="checkbox"> OT to consult, evaluate and treat

                </div>
                <div class="flex-grow">
                    <input type="checkbox"> SW to evaluate and assess for needs <input type="text" style="width: 35px;"> times per month
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and PRN for couseling within <input type="text" style="width: 35px;"> period of time
                    <div><input type="checkbox"> Dietary couseling PRN within <input type="text" style="width: 35px;"> period of time</div>
                    <div><input type="checkbox"> Volunteer for respite PRN within <input type="text" style="width: 35px;"> period of time</div>
                    <div><input type="checkbox"> Spiritual Care Coordinator visit frequency <input type="text" style="width: 35px;"> and PRN
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for spiritual support within <input type="text" style="width: 35px;"> period of time
                    </div>
                </div>
            </div>
            <div class="br-top mar-t-10p" style="width: 100%;">
                <h3 class="text-primary mar-unset">The initial IDG Care Plnan was established with:</h3>
            </div>

            <div class="other-container">
                <div class="wa text-primary pad-5 br-none">
                    Attending Physician
                    <input type="text" class="borbot-none">
                </div>
                <div class="wa text-primary pad-5">Medical Director<input type="text" class="borbot-none"></div>
                <div class="wa text-primary pad-5">RN Designated to Coordinate Care<input type="text" class="borbot-none"></div>
                <div class="wa text-primary pad-5">Social Worker<input type="text" class="borbot-none"></div>
                <div class="wa text-primary pad-5">Spiritual Care Coordinator<input type="text" class="borbot-none"></div>
                <div class="wa text-primary pad-5">Other<input type="text" class="borbot-none"></div>
            </div>
            <div class="other-container-3">
                <div class="wa text-primary pad-5">Signature<input type="text" class="borbot-none"></div>
                <div class="wa text-primary pad-5">Discipline<input type="text" class="borbot-none"></div>
                <div class="wa text-primary pad-5">Date<input type="text" class="borbot-none"></div>
                <div class="wa wa1 text-primary pad-5" style="border-right: none;">Patient Name (First, MI, Last)<input type="text" class="borbot-none"></div>
                <div class="wa text-primary pad-5" style="border-left: none;"></div>
                <div class="wa text-primary pad-5">ID#<input type="text" class="borbot-none"></div>
            </div>

        </div>
    </div> --}}
</body>

</html>