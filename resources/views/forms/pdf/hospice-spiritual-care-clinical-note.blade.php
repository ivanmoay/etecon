<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospice Spiritual Care Clinical Note</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box
        }

        body {
            margin: 2rem 3rem;
            font-family: Roboto, sans-serif;
            color: #000;
            background-color: rgba(255, 255, 255, .822);
            font-size: 14px
        }

        h1 {
            font-size: 1.5rem;
            font-weight: 700
        }

        h2 {
            font-size: 1rem
        }

        p.text-primary {
            font-size: 14px !important
        }

        .heading {
            text-align: end;
            padding-right: 1.2rem
        }

        .border_left {
            border-left: 1px solid #000;
            height: 100%;
            padding: 0 5px;
            margin: 0
        }

        input[type=comment],
        input[type=coor],
        input[type=sign-baby],
        input[type=text-caregiver-name],
        input[type=text-dx],
        input[type=text] {
            outline: 0;
            background-color: transparent;
            padding: 5px 0;
            width: 100%;
            font-size: 14px
        }

        .form-container {
            width: 100%;
            margin-top: 8px;
            padding: 1rem;
            border-radius: 15px;
            background-color: #0165fc;
            display: flex;
            flex-direction: column
        }

        .patient-info {
            background-color: #fff;
            border: 1px solid #000;
            border-left: 0;
            border-right: 0;
            padding: 1px 8px;
            display: grid;
            grid-template-columns: 5fr 1fr 1fr 1fr
        }

        .dx {
            background-color: #fff;
            border-bottom: 1px solid #000;
            padding: 3px 8px;
            margin-bottom: 5px;
            display: flex
        }

        input[type=text-dx] {
            height: auto;
            padding: 0;
            padding-left: 3px;
            margin: 0;
            font-size: 14px
        }

        .assessment-form {
            border: 1px solid #000;
            border-radius: 10px;
            background-color: #fff
        }

        .obtained-container {
            display: grid;
            grid-template-columns: 1fr 2fr;
            column-gap: 3px
        }

        .obtain-col1,
        .obtain-col2 {
            padding: 5px 8px !important
        }

        .obtain-col2 {
            width: 100%
        }

        .flex {
            display: flex
        }

        .w-80 {
            width: 80% !important
        }

        .justify-content {
            justify-content: space-around
        }

        input[type=text-caregiver-name] {
            width: 70%;
            font-size: 14px;
            border-bottom: 1px solid #000
        }

        .assistance-container {
            padding: 0 5px
        }

        .visit-purpose-container {
            border-bottom: 0;
            border-top: 1px solid #000;
            padding: 5px 8px;
            display: grid;
            grid-template-columns: repeat(4, 1fr)
        }

        .assessment-heading,
        .coordination-heading {
            background-color: #bc13fe;
            color: #fff;
            text-align: center;
            border: 1px solid #000;
            border-left: 0;
            border-right: 0
        }

        div.assessment-heading,
        div.coordination-heading {
            font-size: 14px !important;
            text-transform: uppercase !important
        }

        .cont {
            width: 100%;
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr 1.5fr 1.5fr;
            place-items: center
        }

        .cont h2.head {
            place-items: left;
            width: 100%
        }

        .assistance-container {
            padding: 3px 5px
        }

        .spiritual-container {
            padding: 10px 0;
            border: 1px solid #000;
            padding: 3px 5px;
            border-left: 0;
            border-right: 0;
            border-bottom: 0
        }

        .choices-spirit {
            display: grid;
            grid-template-columns: 1fr 1.2fr 1.2fr 1fr 1.2fr
        }

        input[type=comment] {
            width: 55%;
            margin: 0;
            padding: 0;
            border-bottom: 1px solid #000
        }

        .spiritual-issues_choices {
            padding: 8px 5px;
            border: 1px solid #000;
            border-left: 0;
            border-right: 0;
            display: grid;
            grid-auto-flow: column;
            grid-template-columns: 1fr 1.1fr
        }

        .spiritual-issue_container {
            border-top: 0 !important
        }

        .comments-container {
            padding: 8px
        }

        .signature-container {
            border: 1px solid #000;
            border-left: 0;
            border-right: 0;
            padding: 3px 5px;
            display: grid;
            grid-template-columns: 3fr 1fr
        }

        .text-signature {
            font-size: 19px !important;
            align-items: center
        }

        .sig-tiks {
            font-size: 16px !important
        }

        input[type=sign-baby] {
            width: 55%;
            font-size: 20px;
            padding-left: 3px;
            background-color: transparent
        }

        .date-sig {
            padding: 2px 0
        }

        .coordination-heading {
            text-align: left;
            padding: 5px
        }

        .coordination-container {
            border: 1px solid #000;
            padding: 5px 3px
        }

        .coordination-container .row {
            display: grid;
            grid-template-columns: 3.8fr 1fr 1fr 1fr 1.6fr 1.6fr 2.9fr
        }

        .coordination-container .regard {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 10px
        }

        .coordination-container .infow {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            align-items: end
        }

        input[type=coor] {
            height: auto;
            padding: 0;
            margin: 0;
            border-bottom: 1px solid #000;
            width: 100%
        }

        .further {
            padding-top: 3px;
            display: grid;
            grid-template-columns: 225px 1.3fr 1.5fr
        }

        .progress {
            padding: 5px
        }

        input[type=coorr] {
            width: 69.8%;
            font-size: 14px;
            background-color: transparent;
            border-bottom: 1px solid #000;
            padding: 0;
            margin: 0
        }

        @media print {
            input[type=coorr] {
                width: 562px
            }
        }

        .idg {
            background-color: #568203;
            padding: 2px;
            border-radius: 5px;
            margin: 0
        }

        .needs-container {
            padding: 3px 5px
        }

        .pt-3 {
            padding-top: 3px
        }

        .yow-yes {
            border-top: 1px solid #000;
            margin-top: 7px;
            padding-top: 5px
        }

        .time_layout {
            display: flex;
            justify-content: space-between;
            width: 95%;
            padding-left: 0
        }

        .time-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            place-items: center
        }

        .in,
        .out {
            text-align: end;
            align-items: flex-end
        }

        .format {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 0;
            grid-auto-flow: row;
            width: auto;
            text-align: center;
            font-size: 10px
        }

        input {
            width: 12px
        }

        input.checkbox {
            width: 25px;
            margin-top: 5px
        }

        .patient-assessment {
            border: 1px solid #000;
            border-radius: 10px;
            padding: 5px 8px;
            background-color: #f71515
        }

        .assessment-obtained {
            height: auto;
            width: 100%;
            text-align: start;
            display: flex;
            justify-content: space-between;
            flex-direction: flex-start
        }

        .assessment {
            text-align: left;
            height: auto
        }

        .heading-goals {
            background-color: rgba(0, 0, 0, .867);
            color: #fff;
            text-align: center;
            height: auto;
            width: 100%;
            padding: 5px 0;
            margin-bottom: 3px;
            text-transform: uppercase;
            letter-spacing: .5px
        }

        .vertical-line {
            background-color: #000;
            width: 1px;
            height: 50px
        }

        .obtained-by {
            width: 220px;
            display: inline-block
        }

        .underline {
            border-top: 2px solid #000;
            height: 1rem
        }

        .goals-container,
        .spiritual-issue_container,
        .spiritual-strengths,
        .summary-container,
        .supportive-assistance {
            border-top: 2px solid #000;
            border-bottom: 2px solid #000;
            display: flex;
            padding: 5px 0;
            height: auto;
            flex-direction: column
        }

        .spiritual-strengths {
            border-top: 0 !important
        }

        .summary-container {
            border-bottom: 0 !important
        }

        .goals-container {
            border-top: 0 !important;
            height: 8rem
        }

        .checkbox-choices {
            display: flex;
            width: 90%;
            justify-content: space-between;
            align-items: flex-start;
            text-align: start
        }

        .spiritual {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-column-gap: 0;
            grid-row-gap: 0
        }

        .sub-checkbox {
            margin-left: 3rem
        }

        .signature-form {
            display: grid;
            background-color: #ccc8c84a;
            height: auto;
            width: 100%;
            margin-top: 1rem;
            border: 1px solid #000;
            grid-template-columns: 3fr 1fr;
            grid-template-rows: repeat(2, 1fr);
            position: relative;
            left: -8px;
            width: 101.6% !important
        }

        .title {
            margin-top: 8px;
            height: 15px;
            font-size: 14px
        }

        .block {
            gap: 3rem;
            text-align: start;
            display: flex
        }

        .horizontal-line {
            background-color: #000;
            width: 100%;
            height: 1px
        }

        .triangle {
            font-size: 2rem
        }

        .goals-outcomes {
            height: auto
        }

        .w-100 {
            width: 100%
        }

        .input {
            border: none;
            font-size: 14px;
            width: 100%;
            height: 2rem
        }

        .time-input {
            font-size: 14px;
            width: 50px;
            border: none
        }

        .care-input {
            width: 400px;
            font-size: 14px;
            border: none
        }

        input:focus {
            outline: 0
        }

        input {
            border: 0
        }

        p input.care-input.cus {
            width: 65%
        }

        .con-1st {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            align-items: center
        }

        .time_container {
            height: 100%
        }

        .Ass-ob {
            display: grid;
            grid-auto-flow: column;
            height: 2rem;
            width: 90%;
            padding-top: 5px
        }

        @media print {
            .signature-form {
                width: 103% !important
            }

            .time-format-time {
                height: 100%;
                align-items: center;
                justify-content: start;
                row-gap: 23px;
                grid-template-columns: 2fr 1fr 1fr
            }

            .assessment h2 {
                width: 100%
            }

            .input-care-line {
                width: 60% !important
            }

            .input-care-line-2 {
                width: 70% !important
            }

            .cn {
                width: 110%
            }

            .cn-cn {
                margin-left: 5px;
                width: 50%
            }
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="brand-container">
            <div class="flex-container">
                @if (!empty(Auth::user()->company_id))
                    <img src="{{ asset('/company_images/'.@Auth::user()->company->company_logo) }}" width="200" alt="final" border="0">
                @endif
            </div>
            <div class="heading">
                <h1>SPIRITUAL CARE <br> Clinical Note</h1>
            </div>
        </div>
        <div class="form-container">
            <div class="patient-info">
                <div class="name">
                    <p class="text-primary">Patient Name:</p>
                    <input type="text" />
                </div>
                <div class="border_left">
                    <p class="text-primary">ID #:</p>
                    <input type="text">
                </div>
                <div class="border_left">
                    <p class="text-primary">Time In:</p>
                    <input type="text">
                </div>
                <div class="border_left">
                    <p class="text-primary">Time Out:</p>
                    <input type="text">
                </div>
            </div>
            <div class="dx">
                <p class="text-primary"><strong>DX:</strong></p>
                <input type="text-dx">
            </div>

            <div class="assessment-form">
                <div class="obtained-container">
                    <div class="obtain-col1">
                        <h2>Information Obtained By:</h2>
                        <div class="flex justify-content">
                            <p class="text-primary"><input type="checkbox"> Phone</p>
                            <p class="text-primary"><input type="checkbox"> Visit</p>
                        </div>
                    </div>
                    <div class="obtain-col2 border_left">
                        <h2>Information Obtained From:</h2>
                        <div class="flex justify-content">
                            <p class="text-primary"><input type="checkbox"> Patient</p>
                            <p class="text-primary w-80"><input type="checkbox"> Caregiver name: <input
                                    type="text-caregiver-name"></p>
                        </div>
                    </div>
                </div>
                <div class="visit-purpose-container">
                    <h2>Purpose of visit:</h2>
                    <div>
                        <p class="text-primary"><input type="checkbox"> Spiritual Care</p>
                        <p class="text-primary"><input type="checkbox"> Prayer/Sacraments</p>
                    </div>
                    <div>
                        <p class="text-primary"><input type="checkbox"> Family Support</p>
                        <p class="text-primary"><input type="checkbox"> Crisis Intervention</p>
                    </div>
                    <div>
                        <p class="text-primary"><input type="checkbox"> Patient Support</p>
                        <p class="text-primary"><input type="checkbox"> Funeral/memorial/Bedside</p>
                    </div>
                </div>
                <div class="assessment-heading">
                    <h2>assessment</h2>
                </div>

                <div class="assistance-container">
                    <div class="cont">
                        <h2 class="head">Supportive Assistance:</h2>
                        <p class="text-primary"><input type="checkbox"> Family</p>
                        <p class="text-primary"><input type="checkbox"> Friends</p>
                        <p class="text-primary"><input type="checkbox"> Community Organizations</p>
                        <p class="text-primary"><input type="checkbox"> Religious Organizations</p>
                    </div>
                    <p class="text-primary"><input type="checkbox"> Other: <input type="text-caregiver-name"
                            style="width: 90%;"></p>
                </div>

                <div class="spiritual-container">
                    <div class="choices-spirit">
                        <h2 class="head">Spiritual Strengths:</h2>
                        <p class="text-primary"><input type="checkbox"> Sense of purpose in life</p>
                        <p class="text-primary"><input type="checkbox"> Belief in rituals</p>
                        <p class="text-primary"><input type="checkbox"> Forgiveness</p>
                        <p class="text-primary"><input type="checkbox"> Belief in life after death</p>
                        <p class="text-primary"><input type="checkbox"> Serenity/Peace</p>
                        <p class="text-primary"><input type="checkbox"> Reconciliation</p>
                        <p class="text-primary"><input type="checkbox"> Acceptance of prognosis</p>
                        <p class="text-primary"><input type="checkbox"> Hope</p>
                        <p class="text-primary"><input type="checkbox"> Other: <input type="comment"></p>
                    </div>
                    <p class="text-primary"><input type="checkbox"> Comments: <input type="text-caregiver-name"
                            style="width: 87%;"></p>
                </div>
                <div class="spiritual-issues_choices">
                    <div class="si-container">
                        <h2>Spiritual Issues: <span style="font-size: 12px; font-weight: 500;">(Check all that
                                apply)</span></h2>
                        <p><input type="checkbox"> Despair</p>
                        <p><input type="checkbox"> Need for forgiveness</p>
                        <p><input type="checkbox"> Fear/Anxiety</p>
                        <p><input type="checkbox"> Suffering</p>
                        <p><input type="checkbox"> Regrets</p>
                        <p><input type="checkbox"> Feeling of abandonment</p>
                        <p><input type="checkbox"> Isolation/withdrawal</p>
                        <p><input type="checkbox"> Guilt</p>
                        <p><input type="checkbox"> Shame</p>
                        <p><input type="checkbox"> Unfinished business</p>
                        <p><input type="checkbox"> Depression</p>
                        <p><input type="checkbox"> Anger</p>
                        <p><input type="checkbox"> Suicidal</p>
                        <p><input type="checkbox"> Other: <input type="comment" style="width: 85%;"></p>
                        <p>Comments: <input type="comment" style="width: 81%;"></p>
                        <p><input type="comment" style="width: 98%;"></p>
                        <p><input type="comment" style="width: 98%;"></p>
                    </div>
                    <div class="inter-container border_left">
                        <h2>Interventions: <span style="font-size: 12px; font-weight: 500;">(Check all that
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
                            <p><input type="checkbox"> Guilt &nbsp;
                                <input type="checkbox"> Fear &nbsp;
                                <input type="checkbox"> Grief &nbsp;
                                <input type="checkbox"> Anger &nbsp;
                                <input type="checkbox"> Reconciliation
                                <br>
                            <p><input type="checkbox"> Other: <input type="comment" style="width: 82%;"></p>
                            </p>
                        </div>
                        <p><input type="checkbox"> Other: <input type="comment" style="width: 85%;"></p>
                        <p>Comments: <input type="comment" style="width: 81%;"></p>
                        <p><input type="comment" style="width: 98%;"></p>
                        <p><input type="comment" style="width: 98%;"></p>
                        <p><input type="comment" style="width: 98%;"></p>
                    </div>
                </div>

                <div class="comments-container">
                    <h2>Summary/Comments: <input type="text" style="width: 78%;">
                    </h2>
                    <div style="min-width: 100%; color: #000;" class="lines">
                        <hr>
                        <input class="care-input" style="width: 100%;" type="text">
                        <br>
                        <hr>
                        <input class="care-input" style="width: 100%;" type="text">
                        <br>
                        <hr>
                        <input class="care-input" style="width: 100%;" type="text">
                        <br>
                        <hr>
                        <input class="care-input" style="width: 100%;" type="text">
                        <br>
                        <hr>
                    </div>
                </div>
                <div class="coordination-heading">
                    <div class="flex">
                        <h3 class="idg">IDG</h3>&nbsp;&nbsp;
                        <h2>CHANGES SINCE LAST VISIT</h2>
                    </div>
                </div>
                <div class="needs-container">
                    <p class="text-primary">
                        <strong>Spiritual Needs:</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"> No &nbsp;&nbsp; <input type="checkbox"> Yes, Describe: <input
                            type="coor" style="width: 62%;">
                    </p>
                    <p class="text-primary">Interventions: <input type="coor" style="width: 89%;"></p>
                    <input type="coor">
                    <p class="text-primary pt-3">
                        <strong>Emotional Needs:</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input
                            type="checkbox"> No &nbsp;&nbsp; <input type="checkbox"> Yes, Describe: <input type="coor"
                            style="width: 62%;">
                    </p>
                    <p class="text-primary">Interventions: <input type="coor" style="width: 89%;"></p>
                    <input type="coor">
                    <p class="text-primary pt-3">
                        <strong>Psychosocial Needs:</strong> &nbsp;&nbsp; <input type="checkbox"> No &nbsp;&nbsp; <input
                            type="checkbox"> Yes, Describe: <input type="coor" style="width: 62%;">
                    </p>
                    <p class="text-primary pt-3">
                        <strong>Physical Needs:</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"> No &nbsp;&nbsp; <input type="checkbox"> Yes, Describe: <input
                            type="coor" style="width: 62.5%;">
                    </p>
                    <div class="yow-yes">
                        <p class="text-primary">Is the patient uncomfortable due to pain? &nbsp;&nbsp; <input
                                type="checkbox"> No &nbsp;&nbsp; <input type="checkbox"> Yes</p>
                        <p class="text-primary pt-3">Are there non-verbal signs of pain?
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox">
                            No &nbsp;&nbsp; <input type="checkbox"> Yes (specify): <input type="coor"
                                style="width: 49.5%;"></p>
                        <div class="flex">
                            <p class="text-primary" style="padding-top: 10px;">If yes to any of the above, was case
                                manager notified? &nbsp;&nbsp; <input type="checkbox"> No &nbsp;&nbsp; <input
                                    type="checkbox"> Yes &nbsp;&nbsp;Time:<input type="coor"
                                    style="width: 100px;">&nbsp;</p>
                            <div>
                                <p class="text-primary"><input type="checkbox"> AM</p>
                                <p class="text-primary"><input type="checkbox"> PM</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="coordination-heading">
                    <h2>PROGRESS TOWARD GOALS/OUTCOMES</h2>
                </div>
                <div class="progress">
                    <p class="text-primary"><input type="coor"></p>
                    <p class="text-primary"><input type="coor"></p>
                    <p class="text-primary"><input type="coor"></p>
                    <p class="text-primary">Patient/Caregiver response to spiritual care: <input type="coorr"></p>
                    <p class="text-primary"><input type="coor"></p>
                </div>

                <div class="coordination-heading">
                    <h2>COORDINATION/PLAN</h2>
                </div>

                <div class="coordination-container">
                    <div class="row">
                        <p class="text-primary"><strong>Cars Coordinated/Conferenced with:</strong></p>
                        <p class="text-primary"><input type="checkbox"> SN</p>
                        <p class="text-primary"><input type="checkbox"> Aide</p>
                        <p class="text-primary"><input type="checkbox"> SW</p>
                        <p class="text-primary"><input type="checkbox"> Bereavement</p>
                        <p class="text-primary"><input type="checkbox"> Volunteer</p>
                        <div class="flex">
                            <p class="text-primary"><input type="checkbox"> Other:</p>
                            <input type="comments"
                                style="width: 70%; background-color: transparent; border-bottom: 1px solid black;">
                        </div>
                    </div>
                    <div class="regard">
                        <div class="flex">
                            <p class="text-primary">Name:</p>
                            <input type="coor">
                        </div>
                        <div class="flex">
                            <p class="text-primary">Regarding:</p>
                            <input type="coor">
                        </div>
                    </div>

                    <div class="infow">
                        <div class="flex">
                            <input type="coor">
                        </div>
                        <div class="flex">
                            <p class="text-primary" style="margin-top: 15px;">Date/Time: &nbsp;</p>
                            <input type="coor" style="width: 60px;">&nbsp;
                            <div>
                                <p class="text-primary"><input type="checkbox"> AM</p>
                                <p class="text-primary"><input type="checkbox"> PM</p>
                            </div>
                        </div>
                    </div>
                    <div class="further">
                        <div class="text-primary">Further spiritual follow-up desired:</div>
                        <div class="flex">
                            <p class="text-primary"><input type="checkbox"> Patient &nbsp;&nbsp;</p>
                            <p class="text-primary"><input type="checkbox"> Primary Caregiver &nbsp;&nbsp;</p>
                            <p class="text-primary"><input type="checkbox"> Family</p>
                        </div>
                        <div class="flex" style="width: 100%;">
                            <strong>Specify type of follow-up requested &nbsp;</strong>
                            <input type="coor" style="width: 80px;">
                        </div>
                    </div>
                </div>

                <div class="signature-container">
                    <div class="col1-sig">
                        <div class="text-signature flex">
                            <span class="triangle">&#9654;</span>
                            <div class="text-primary sig-tiks">Spiritual Care Coordinator Signature: </div>
                            <input type="sign-baby">
                        </div>
                        <div class="text-signature flex" style="border-top: 1px solid black;">
                            <span class="triangle">&#9654;</span>
                            <div class="text-primary sig-tiks">Visit Verification Signature: <span
                                    style="font-size: 12px;">(per agency policy)</span></div>
                            <input type="sign-baby" style="width: 300px;">
                        </div>
                    </div>
                    <div class="date-sig border_left">
                        <div class="text-primary sig-tiks">
                            <div class="text-primary">&nbsp;Date</div>
                            <input type="sign-baby" style="width: 100%; height: auto; padding: 0; margin: 0;">
                        </div>
                        <div class="text-primary sig-tiks" style="border-top: 1px solid black">
                            <div class="text-primary">&nbsp;Date</div>
                            <input type="sign-baby" style="width: 100%; height: auto; padding: 0; margin: 0;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>