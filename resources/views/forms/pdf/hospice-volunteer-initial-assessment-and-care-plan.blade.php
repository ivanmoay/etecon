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
            padding: 10px
        }

        p.text-secondary {
            font-size: 1rem
        }

        .bg-primary {
            background-color: #fff
        }

        .bl {
            border-left: 1px solid #000
        }

        .bt {
            border-top: 1px solid #000
        }

        .pl-3 {
            padding-left: 3px
        }

        .A4 {
            width: 100%;
            height: auto;
            margin: 2rem auto;
            background: radial-gradient(circle at 10% 20%, #a3aff3 0, #dcb6e8 100.2%);
            padding: 20px 12px;
            border-radius: 18px
        }

        .brand-container {
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        .title {
            text-align: right
        }

        .flex {
            display: flex;
            justify-content: space-around;
            align-items: center
        }

        .patient-info {
            display: grid;
            grid-template-columns: 5fr 2fr 3fr
        }

        .basic-info-address {
            display: grid;
            grid-template-columns: 4fr 3fr 1fr 2fr
        }

        .basic-info-details {
            display: grid;
            grid-template-columns: 3fr 1fr 3fr 2fr 1fr
        }

        .basic-info-caregiver {
            display: grid;
            grid-template-columns: 5fr 1.1fr 1fr
        }

        .fill-form {
            background-color: #fff;
            padding: 5px;
            border-radius: 15px;
            border: 1px solid #000
        }

        .test-uwu {
            display: grid;
            grid-template-columns: 6.1fr 1fr;
            border-bottom: 1px solid #000
        }

        .directions {
            margin: 10px 0;
            border-radius: 10px;
            padding: 18px 10px;
            border: 1px solid #000
        }

        .footer {
            display: grid;
            row-gap: 10px
        }

        .footer>div {
            border: 1px solid #000;
            border-radius: 15px;
            background-color: #fff
        }

        .volunteer {
            display: grid;
            grid-template-columns: 3fr 1fr;
            padding: 5px
        }

        .review {
            display: grid;
            grid-template-columns: repeat(4, 1fr) !important
        }

        input[type=comment],
        input[type=directions],
        input[type=input-days],
        input[type=input-uwu],
        input[type=services],
        input[type=scale],
        input[type=text],
        input[type=time-input] {
            background-color: transparent;
            margin-left: 2px;
            font-size: 1rem;
            outline: 0;
            border: none;
            width: 95%;
            height: 1.5rem
        }

        input[type=comment],
        input[type=directions],
        input[type=scale] {
            margin: 0;
            width: 100%;
            height: auto;
            padding-left: 3px
        }

        input[type=directions] {
            width: 99%;
            border-bottom: 1px solid #000;
            height: 1.5rem !important
        }

        input[type=comment] {
            width: 100%;
            height: 2rem;
            border-bottom: 1px solid #000
        }

        input[type=services] {
            height: auto;
            width: 99%;
            padding-right: 0;
            margin-right: 0;
        }

        h3.heading {
            text-align: center;
            color: #fff;
            border-radius: 12px;
            margin: 5px 0;
            padding: 3px 0;
            background-color: purple
        }

        .signature {
            display: grid;
            font-size: 1.2rem;
            grid-template-columns: 4fr 1fr;
            border-bottom: 1px solid #000
        }

        .assessment {
            background-color: white;
            border: 1px solid black;
            margin: 10px 0;
            border-radius: 12px;
            padding: 5px 3px;
        }

        .assessment .boxes {
            display: grid;
            width: 100%;
            grid-template-columns: 210px 165px 255px 198px 180px;
        }

        .boxes>div>p {
            padding: 1.5px 0 !important;
            font-size: 14px;
        }

        .preferences {
            margin-top: 10px;
            /* padding-bottom: 15px; */
        }

        .likes-container {
            display: grid;
            grid-template-columns: 3fr 1fr;
        }

        .choices {
            width: 100%;
            padding: 3px;
        }

        .unik-line {
            border-bottom: 1px solid #000;
            padding-bottom: 3px;
        }

        .service {
            border-radius: 10px;
            padding: 0 10px;
            border: 1px solid #000;
            display: grid;
        }

        .service .col-1 {
            display: grid;
            grid-template-columns: 3fr 1fr 1fr;
        }

        .col-1>div>p.heading,
        .col-2>div>p.heading,
        .pirs p.heading,
        .sikan p.heading {
            background-color: violet;
            padding: 2px;
            color: #fff;
        }

        .text-center {
            text-align: center;
        }

        .col-2 {
            display: grid;
            grid-template-columns: 1fr 2fr 2fr;
        }

        .layered {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-areas:
                "pirs sikan"
                "tird tird";
        }

        .pirs {
            grid-area: pirs;
        }

        .sikan {
            grid-area: sikan;
        }

        .tird {
            grid-area: tird;
        }
    </style>
</head>

<body>
    <div class="A4">
        <div class="brand-container">
            @if (!empty(Auth::user()->company_id))
                <img src="{{ asset('/company_images/'.@Auth::user()->company->company_logo) }}" width="200" alt="final" border="0">
            @endif
        </div>
        <div class="title">
            <h1 class="heading">VOLUNTEER INITIAL ASSESSMENT/CARE PLAN</h1>
        </div>

        <div class="fill-form">
            <div class="patient-info">
                <div class="basic-info pl-3">
                    <p class="text-secondary pad-l">Patient Name:</p>
                    <input type="text">
                </div>
                <div class="id-container pl-3 bl">
                    <p class="text-secondary pad-l">ID#:</p>
                    <input type="text">
                </div>
                <div class="age-container pl-3 bl">
                    <p class="text-secondary pad-l">Referral Date:</p>
                    <input type="text">
                </div>
            </div>
            <div class="basic-info-address pl-3 bt ">
                <div>
                    <p class="text-secondary pad-l">Address:</p>
                    <input type="text">
                </div>
                <div class="bl pl-3">
                    <p class="text-secondary pad-l">City:</p>
                    <input type="text">
                </div>
                <div class="bl pl-3">
                    <p class="text-secondary pad-l">State:</p>
                    <input type="text">
                </div>
                <div class="bl pl-3">
                    <p class="text-secondary pad-l">Zip Code:</p>
                    <input type="text">
                </div>
            </div>
            <div class="basic-info-details pl-3 bt ">
                <div>
                    <p class="text-secondary pad-l">Phone #:</p>
                    <input type="text">
                </div>
                <div class="bl pl-3">
                    <p class="text-secondary pad-l">Age:</p>
                    <input type="text">
                </div>
                <div class="bl pl-3">
                    <p class="text-secondary pad-l">Date of Birth:</p>
                    <input type="text">
                </div>
                <div class="bl pl-3">
                    <p class="text-secondary pad-l">Assessment Performed:</p>
                    <div class="flex">
                        <p><input type="checkbox"> Home Visit</p>
                        <p><input type="checkbox"> Phone</p>
                    </div>
                </div>
                <div class="bl pl-3">
                    <p class="text-secondary pad-l">Date:</p>
                    <input type="text">
                </div>
            </div>
            <div class="basic-info pl-3 bt ">
                <p class="text-secondary pad-l">Diagnosis</p>
                <input type="text">
            </div>
            <div class="basic-info-caregiver pl-3 bt ">
                <div>
                    <p class="text-secondary pad-l">Caregiver Name:</p>
                    <input type="text">
                </div>
                <div class="bl pl-3">
                    <p class="text-secondary pad-l">Relationship:</p>
                    <input type="text">
                </div>
                <div class="bl pl-3">
                    <p class="text-secondary pad-l">Phone:</p>
                    <input type="text">
                </div>
            </div>
            <div class="test-uwu basic-info pl-3 bt " style="border-bottom: 0;">
                <div>
                    <p class="text-secondary pad-l">RN Name:</p>
                    <input type="text">
                </div>
                <div class="bl pl-3">
                    <p class="text-secondary pad-l">Phone:</p>
                    <input type="text">
                </div>
            </div>
        </div>

        <div class="directions bg-primary">
            <p class="text-secondary pad-l">Directions: <input type="directions" style="width: 91%;"></p>
            <input type="directions">
            <input type="directions">
            <input type="directions">
        </div>

        <div class="service bg-primary">
            <div class="col-1">
                <div>
                    <p class="heading"><strong>LOCATION OF SERVICES</strong></p>
                    <p class="text-secondary bt"><input type="checkbox"> Home</p>
                    <p class="text-secondary bt"><input type="checkbox"> Hospital</p>
                    <p class="text-secondary bt"><input type="checkbox"> Nursing Home</p>
                    <p class="text-secondary bt"><input type="checkbox"> Hospice</p>
                    <p class="text-secondary bt"><input type="checkbox"> Other: (specify) <input type="text"
                            style="width: 70%;"> </p>
                </div>
                <div class="bl">
                    <p class="heading pl-3 text-center"><strong>ACTIVITIES REQUESTED</strong></p>
                    <p class="text-secondary pl-3 bt"><input type="checkbox"> Light Meal Preparation</p>
                    <p class="text-secondary pl-3 bt"><input type="checkbox"> Light Housekeeping</p>
                    <p class="text-secondary pl-3 bt"><input type="checkbox"> Shopping</p>
                    <p class="text-secondary pl-3 bt"><input type="checkbox"> Errands</p>
                    <p class="text-secondary pl-3 bt"><input type="checkbox"> Other: (specify) <input type="text"
                            style="width: 60px; height: auto;"></p>
                </div>
                <div class="bl">
                    <p class="heading text-center"><strong>FREQUENCY</strong></p>
                    <p class="text-secondary bt"><input type="services"></p>
                    <p class="text-secondary bt"><input type="services"></p>
                    <p class="text-secondary bt"><input type="services"></p>
                    <p class="text-secondary bt"><input type="services"></p>
                    <p class="text-secondary bt"><input type="services"></p>
                </div>
            </div>
            <div class="col-2">
                <div>
                    <p class="heading"><strong>PSYCHOSOCIAL SERVICE</strong></p>
                    <p class="text-secondary bt pl-3"><input type="checkbox"> Companionship</p>
                    <p class="text-secondary bt pl-3"><input type="checkbox"> Caregiver Respite</p>
                    <p class="text-secondary bt pl-3"><input type="checkbox"> Emotional Support</p>
                    <p class="text-secondary bt pl-3">&nbsp;&nbsp;&nbsp;<input type="checkbox"> Patient</p>
                    <p class="text-secondary bt pl-3">&nbsp;&nbsp;&nbsp;<input type="checkbox"> Caregiver</p>
                    <p class="text-secondary bt pl-3"><input type="checkbox"> Family Support</p>
                    <p class="text-secondary bt pl-3"><input type="checkbox"> Other: (specify) <input type="text"
                            style="width: 60px; height: auto;"></p>
                </div>
                <div class="bl">
                    <p class="heading text-center"><strong>FREQUENCY</strong></p>
                    <p class="text-secondary bt"><input type="services"></p>
                    <p class="text-secondary bt"><input type="services"></p>
                    <p class="text-secondary bt"><input type="services"></p>
                    <p class="text-secondary bt"><input type="services"></p>
                    <p class="text-secondary bt"><input type="services"></p>
                    <p class="text-secondary bt"><input type="services"></p>
                    <p class="text-secondary bt"><input type="services"></p>
                </div>
                <div class="layered bl bt">
                    <div class="pirs">
                        <p class="heading"><strong>BEREAVEMENT</strong></p>
                        <p class="text-secondary bt pl-3"><input type="checkbox"> Phone Support</p>
                        <p class="text-secondary bt pl-3"><input type="checkbox"> Attend Funeral</p>
                        <p class="text-secondary bt pl-3"><input type="checkbox"> Other: (specify) <input type="text"
                                style="width: 60px; height: auto;"></p>
                    </div>
                    <div class="sikan bl">
                        <p class="heading text-center"><strong>FREQUENCY</strong></p>
                        <p class="text-secondary bt pl-3"><input type="services"></p>
                        <p class="text-secondary bt pl-3"><input type="services"></p>
                        <p class="text-secondary bt pl-3"><input type="services"></p>
                    </div>
                    <div class="tird pl-3 bt">
                        <p class="text-secondary">Comments: <input type="text"
                                style="width: 75%; border-bottom: 1px solid black; height: auto;"></p>
                        <p class="text-secondary pl-3"><input type="text"
                                style="border-bottom: 1px solid black; width: 100%; height: auto;"></p>
                        <p class="text-secondary pl-3"><input type="text"
                                style="border-bottom: 1px solid black; width: 100%; height: auto;"></p>
                        <p class="text-secondary pl-3"><input type="text"
                                style="border-bottom: 1px solid black; width: 100%; height: auto;"></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="assessment">
            <p class="text-secondary pad-l"><strong>ASSESSMENT</strong></p>
            <div class="boxes">
                <div>
                    <p class="text-secondary pad-l"><input type="checkbox"> DNR</p>
                    <p class="text-secondary pad-l"><input type="checkbox"> Lives alone</p>
                    <p class="text-secondary pad-l"><input type="checkbox"> Lives with other: <input type="text"
                            style="height: auto; border-bottom: 1px solid black; width: 80px;"></p>
                    <p class="text-secondary pad-l"><input type="checkbox"> Alone during the day</p>
                    <p class="text-secondary pad-l"><input type="checkbox"> Bed bound &nbsp;<input type="checkbox"> Bed
                        rest/BRP's</p>
                    <p class="text-secondary pad-l">&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"> Up as tolerance</p>
                    <p class="text-secondary pad-l"><input type="checkbox"> Amputee: (specify)<input type="text"
                            style="height: auto; border-bottom: 1px solid black; width: 70px;"></p>
                </div>
                <div class="pl-3">
                    <p class="text-secondary pad-l"><input type="checkbox"> Partial weight bearing:</p>
                    <p class="text-secondary pad-l">&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox">
                        Right&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"> Left</p>
                    <p class="text-secondary pad-l"><input type="checkbox"> Non-weight bearing:</p>
                    <p class="text-secondary pad-l">&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox">
                        Right&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"> Left</p>
                    <p class="text-secondary pad-l" style="padding: 3px 0 !important"><input type="checkbox"> Hip
                        precautions</p>
                    <p class="text-secondary pad-l" style="padding: 3px 0 !important"><input type="checkbox"> Prone to
                        fractures</p>
                </div>
                <div class="pl-3">
                    <p class="text-secondary pad-l"><input type="checkbox"> Prosthesis:(specify) <input type="text"
                            style="height: auto; border-bottom: 1px solid black; width: 100px;"></p>
                    <p class="text-secondary pad-l"><input type="checkbox"> Special equipment: <input type="text"
                            style="height: auto; border-bottom: 1px solid black; width: 104px;"></p>
                    <p class="text-secondary pad-l"><input type="checkbox"> Speech/communication deficit</p>
                    <p class="text-secondary pad-l"><input type="checkbox"> Vision deficit&nbsp;<input type="checkbox">
                        Glasses&nbsp;<input type="checkbox"> Contacts</p>
                    <p class="text-secondary pad-l">&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"> Other: <input
                            type="text" style="height: auto; border-bottom: 1px solid black; width: 170px;"></p>
                    <p class="text-secondary pad-l"><input type="checkbox"> Hearing
                        deficit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"> Hearing aide</p>
                    <p class="text-secondary pad-l"><input type="checkbox"> Seizure precautions</p>
                </div>
                <div class="pl-3">
                    <p class="text-secondary pad-l"><input type="checkbox"> Dentures:</p>
                    <p class="text-secondary pad-l">&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"> Upper&nbsp;<input
                            type="checkbox"> Lower&nbsp;<input type="checkbox"> Partial</p>
                    <p class="text-secondary pad-l"><input type="checkbox"> Oriented x 3 &nbsp;&nbsp;<input
                            type="checkbox"> Alert</p>
                    <p class="text-secondary pad-l"><input type="checkbox"> Forgetful / confused</p>
                    <p class="text-secondary pad-l"><input type="checkbox"> Diabetic</p>
                    <p class="text-secondary pad-l">&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"> Diet: <input
                            type="text" style="height: auto; border-bottom: 1px solid black; width: 123px;"></p>
                </div>
                <div class="pl-3">
                    <p class="text-secondary pad-l"><input type="checkbox"> Bleeding precautions</p>
                    <p class="text-secondary pad-l"><input type="checkbox"> Pain medication</p>
                    <p class="text-secondary pad-l"><input type="checkbox"> O<sub>2</sub></p>
                    <p class="text-secondary pad-l"><input type="checkbox"> Allergies:(specify)</p>
                    <p class="text-secondary pad-l"><input type="text"
                            style="border-bottom: 1px solid black; width: 80%; padding: 0; margin: 0; height: auto;">
                    </p>
                    <p class="text-secondary pad-l"><input type="checkbox"> Other: <input type="text"
                            style="height: auto; border-bottom: 1px solid black; width: 80px;"></p>
                </div>
            </div>
            <div class="preferences bt">
                <div class="likes-container">
                    <div class="info-likes">
                        <p class="text-secondary pad-l"> Patient's Likes: <input type="text" style="width: 84%;"></p>
                        <p class="text-secondary pad-l bt"> Patient's Dislikes: <input type="text"
                                style="width: 81.6%;"></p>
                        <p class="text-secondary pad-l bt"> Subjects to Avoid: <input type="text" style="width: 81.5%;">
                        </p>
                        <p class="text-secondary pad-l bt"> Hobbies: <input type="text" style="width: 90%;"></p>
                    </div>
                    <div class="choices bl">
                        <div class="flex">
                            <p class="text-secondary pad-l">Pets in Home:</p>
                            <p class="text-secondary pad-l"><input type="checkbox"> Dog</p>
                            <p class="text-secondary pad-l"><input type="checkbox"> Cat</p>
                            <p class="text-secondary pad-l"><input type="checkbox"> Bird</p>
                        </div>
                        <p class="text-secondary pad-l unik-line"> &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox">
                            Other: <input type="text"
                                style="height: auto; border-bottom: 1px solid black; width: 150px;"></p>
                        <div class="flex unik-line">
                            <p class="text-secondary pad-l">Smoking in Home:</p>
                            <p class="text-secondary pad-l"><input type="checkbox"> Yes</p>
                            <p class="text-secondary pad-l"><input type="checkbox"> No</p>
                        </div>
                        <div class="flex">
                            <p class="text-secondary pad-l" style="font-size: 15px;">Volunteer Prefered:</p>
                            <p class="text-secondary pad-l" style="font-size: 15px;"><input type="checkbox">Female</p>
                            <p class="text-secondary pad-l" style="font-size: 15px;"><input type="checkbox">Male</p>
                        </div>
                        <p class="text-secondary pad-l"> &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"> No Preference:
                            <input type="text" style="height: auto; border-bottom: 1px solid black; width: 80px;"></p>
                    </div>
                </div>
                <p class="text-secondary pad-l bt"> Comments: <input type="text" style="width: 90%;"></p>
                <p class="text-secondary pad-l bt">&nbsp;</p>
            </div>
        </div>

        <div class="footer">
            <div class="volunteer">
                <div class="assigned pl-3">
                    <p class="text-secondary pad-l">Volunteer Assigned:</p>
                    <input type="text">
                </div>
                <div class="phone bl pl-3">
                    <p class="text-secondary pad-l">Phone #:</p>
                    <input type="text">
                </div>
            </div>

            <div class="volunteer review">
                <div class="assigned pl-3">
                    <p class="text-secondary pad-l">Review Date/Initials</p>
                    <input type="text">
                </div>
                <div class="assigned pl-3 bl">
                    <p class="text-secondary pad-l">Review Date/Initials</p>
                    <input type="text">
                </div>
                <div class="assigned pl-3 bl">
                    <p class="text-secondary pad-l">Review Date/Initials</p>
                    <input type="text">
                </div>
                <div class="phone bl pl-3">
                    <p class="text-secondary pad-l">Review Date/Initials</p>
                    <input type="text">
                </div>
            </div>

            <div class="volunteer signature-ccor">
                <div class="coordinator pl-3">
                    <p class="text-secondary pad-l">Volunteer Coordinator's Signature:</p>
                    <input type="text">
                </div>
                <div class="date bl pl-3">
                    <p class="text-secondary pad-l">Date:</p>
                    <input type="text">
                </div>
            </div>
        </div>
    </div>
</body>

</html>