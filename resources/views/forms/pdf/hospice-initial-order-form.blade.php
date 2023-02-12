<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospice Initial Orders</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
            font-size: small;
            color: black;
        }

        body, html {
            height: 100%;
        }

        .flex {
            display: flex;
        }

        .wrapper {
            width: 1160px;
            margin: auto;
            margin-top: 100px;
            background-color: #568203b6;
            padding: 0 12px;
            padding-bottom: 15px;
            border-radius: 25px;
        }

        .header {
            margin-bottom: 5px;
        }

        .container {
            display: flex;
        }

        .h2 {
            padding: 5px;
            border-radius: 15px;
            outline: none;
            text-align: center;
            background-color: #8a00c2;
            color: white;
        }

        .h2-1 {
            padding: 5px;
            border-radius: 15px;
            outline: none;
            text-align: left;
            background-color: #8a00c2;
            color: white;
        }

        .content {
            padding: 5px;
            flex-grow: 1;
            /* border: 1px solid black; */
        }

        .oke {
            display: flex;
            justify-content: space-evenly;
            gap: 200px;
        }

        .content .oke1 {
            margin-left: 57px;
        }

        .rectangle {
            border: 1px solid black;
            height: 15px;
            width: 150px;
        }

        .letter {
            width: 10px;
        }

        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
        }

        .word {
            width: 30px;
            margin-right: 0;
            transform: rotate(270deg);
            color: white;
        }

        .sentence {
            padding: 5px;
            transform: rotate(180eg);
            color: white;
        }

        .word1 {
            transform: rotate(270deg);
            font-size: 10px;
            color: white;
        }

        .word2 {
            transform: rotate(270deg);
            font-size: 10px;
            color: white;
        }

        .checkbox-container {
            display: flex;
            justify-content: space-between;
        }

        .tiddies {
            margin: 0;
            background-color: #8a00c2;
        }

        .container table td {
            padding: 3px;
        }

        .bobo {
            width: 250px;
            height: 30px;
            padding: 5px;
        }

        .act,
        .items {
            /* padding: 5px; */
            display: flex;
            gap: 30px;
        }

        .act {
            padding: 10px;
            border: 1px solid black;
            border-left: none;
            border-right: none;
        }

        .container-1 {
            display: flex;
            /* justify-content: space-between; */
            /* align-items: flex-start; */
        }

        .div {
            padding: 10px;
            border-left: 1px solid black;
        }

        .div-1 {
            padding: 10px;
            width: 250px;
        }

        .div-2 {
            padding: 10px;
            width: 150px;
            border-left: 1px solid black;
        }

        .div-3 {
            padding: 10px;
            width: 550px;
            border-left: 1px solid black;
        }

        .div-4 {
            padding: 10px;

            width: 800px;
        }

        .div-5 {
            padding: 10px;
            border-left: 1px solid black;
        }

        .container-1 {
            border: 1px solid black;
        }

        .div-23 {
            padding: 10px;
            width: 150px;
        }

        .title-slide {
            display: flex;
            gap: 30px;
            justify-content: space-between;
        }

        .title {
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
        }

        .title-slide2 {
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .coloran {
            background-color: #8a00c2;
            color: white;
        }

        input[type='text'] {
            background-color: transparent;
            outline: 0;
            border: none;
            width: 100%;
            font-size: 14px;
            border-bottom: 1px solid black;
        }

    </style>
</head>

<body>
    <div class="wrapper">
        <div class="brand-container">
            <div class="flex-container">
                <img src="https://i.ibb.co/kSr11h4/final.png" width="200" alt="final" border="0">
            </div>
        </div>
        <p><b>Level of Care</b></p>
        <div class="header">
            <div class="title">
                <div class="title-slide">
                    <div>
                        <p><input type="checkbox"> Routine Home Care</p>
                        <p><input type="checkbox"> Continuous Care</p>
                    </div>
                    <div>
                        <p><input type="checkbox"> Inpatient</p>
                        <p><input type="checkbox"> Respite</p>
                    </div>
                </div>
                <div class="title-slide1">
                    <p><input type="checkbox"> <b style="font-size: 1.5rem;">HOSPICE PHYSICIAN INITIAL ORDERS</b> </p>
                    <p><input type="checkbox"> <b style="font-size: 1.5rem;">UPDATE TO PHYSICIAN ORDERS</b></p>
                    <div class="title-slide2">
                        <p><input type="checkbox"> <b>90-Days</b></p>
                        <p><input type="checkbox"> <b>60-Days</b></p>
                    </div>
                </div>
            </div>
            <style>
                input[type="text-to"]{
                    background-color: transparent;
                    outline: 0;
                    width: 95px;
                    border: none;
                    font-size: 14px;
                    border-bottom: 1px solid black;  
                }
            </style>
            <div class="act1">
                <div class="container-1">
                    <div class="div-3"> <b>First Name</b>(First, MI, Last) <input type="text"></div>
                    <div class="div-2"> ID No. <input type="text"></div>
                    <div class="div-2"> SOC-Date: <input type="text"></div>
                    <div class="div"><b>Certification/Recertification Period <br> From:
                            <input type="text-to"> To: <input type="text-to"></b>
                    </div>
                </div>
                <style>
                     input[type="text-1"] {
                        background-color: transparent;
                    outline: 0;
                    width: 280px;
                    border: none;
                    font-size: 14px;
                    border-bottom: 1px solid black;  
                }
                </style>
                <div class="container-1">
                    <div class="div-3"> Primary Physician's Name: <input type="text"></div>
                    <div class="div-2"> Address: <input type="text-1"></div>
                    <div class="div-23"></div>
                    <div class="div">Physician's Phone: <input type="text"></div>
                </div>
            </div>

        </div>
        <style>
             input[type="text-2"] {
                    background-color: transparent;
                    outline: 0;
                    width: 180px;
                    border: none;
                    font-size: 14px;
                    border-bottom: 1px solid black;  
                }
                input[type="text-3"] {
                    background-color: transparent;
                    outline: 0;
                    width: 70px;
                    border: none;
                    font-size: 14px;
                    border-bottom: 1px solid black;  
                }
                input[type="text-rec"] {
                    background-color: transparent;
                    outline: 0;
                    width: 150px;
                    border: none;
                    font-size: 14px;
                    border-bottom: 1px solid black;  
                }
        </style>
        <h2 class="h2">DIAGNOSIS</h2>
        <div class="container">
            <div class="content">
                <div class="oke">
                    <p><ins>Primary Diagnosis</ins></p>
                    <p><ins>Diagnosis Code</ins></p>
                </div>
                <div class="flex">
                    <p>
                    <div class="letter">a.</div><input type="text-2"> Date: <input type="text-3"> O/E <input type="text-3">&nbsp;</p>
                    <div class=""><input type="text-rec"> </div>
                </div>
                <div class="oke1">
                    <p><ins>Go-Morbidities</ins></p>
                </div>
                <div class="flex">
                    <p>
                    <div class="letter">b.</div><input type="text-2"> Date: <input type="text-3"> O/E <input type="text-3">&nbsp;</p>
                    <div class=""><input type="text-rec"> </div>
                </div>
                <div class="flex">
                    <p>
                    <div class="letter">c.</div><input type="text-2"> Date: <input type="text-3"> O/E <input type="text-3"> &nbsp;</p>
                    <div class=""><input type="text-rec"> </div>
                </div>
                <div class="flex">
                    <p>
                    <div class="letter">d.</div><input type="text-2"> Date: <input type="text-3"> O/E <input type="text-3"> &nbsp;</p>
                    <div class=""><input type="text-rec"> </div>
                </div>
            </div>
            <div class="content">
                <div class="oke">
                    <p><ins>Surgical Diagnosis</ins></p>
                    <p><ins>Diagnosis Code</ins></p>
                </div>
                <div class="flex">
                    <p>
                    <div class="letter">a.</div> <input type="text-2"> Date: <input type="text-2"> &nbsp;</p>
                    <div class=""><input type="text-rec"> </div>
                </div>
                <div class="flex">
                    <p>
                    <div class="letter">b.</div> <input type="text-2"> Date: <input type="text-2"> &nbsp;</p>
                    <div class=""><input type="text-rec"> </div>
                </div>
            </div>
        </div>
        <h2 class="h2">ORDERS FOR SKILLED NURSING</h2>
        <div class="content">
            <p><input type="checkbox"> SN visit frequency <input type="text-3"> and <input type="text-3"> PRN for changes in status within
                <input type="text-3"> period of time. </p>
            <p><input type="checkbox"> Assess VS & all body systems, knowledge of disease process and its associated
                care and treatment, and S/S complications necessitating medical attention.</p>
            <p><input type="checkbox"> Assess/manage pain and discomfort and provide symptom relief.</p>
            <p><input type="checkbox"> Implement and Instruct Medication Regimen, including dosage, side effects, name,
                route, frequency, desired action, adverse reactions, and medication compliance/med set-up</p>
            <p><input type="checkbox"> Patient/caregiver may administer medications.</p>
            <p><input type="checkbox"> RN may perform pronouncement of death.</p>
            <p><input type="checkbox"> Other:
                <input type="text">
            </p>
        </div>
        <hr>
        <p><b> Is the patient DNR </b>("Do Not Resuscitate") <input type="checkbox"> Yes <input type="checkbox"> No</p>
        <hr>
        <style>
            input[type="text-other"]{
                background-color: transparent;
                    outline: 0;
                    width:350px;
                    border: none;
                    font-size: 14px;
                    border-bottom: 1px solid black;  
            }
        </style>
        
        <div class="container">
            <div class="content">
                <table>
                    <tr>
                        <td rowspan="2" class="coloran">
                            <div class="word" style="width: 30px;">DIAGNOSIS</div>
                        </td>
                        <td style="border-right: none;">
                            <div class="flex">
                                <div class="content">
                                    <p><b>Terminal Care Intervention (all patients): </b>Assess/Perform/Instruct
                                        Pt/Cg:<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A&nbsp;&nbsp;P&nbsp;&nbsp;
                                            I</b></p>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Spiritual, grieving & coping methods</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> S/S of Impending death</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Notification procedures for death at home</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox" style="visibility: hidden;"> <input
                                                type="checkbox" style="visibility: hidden;"> <input type="checkbox">
                                        </div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Counseling</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Grief Management</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <p><input type="checkbox"> Other: <input type="text-other">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-right: none;">
                            <div class="flex">
                                <div class="content">
                                    <p><b>Impending Death Interventions/Imminence of Death: </b> <input type="checkbox">
                                        NA</p>
                                    <p><input type="checkbox"> Educate caregiver/family regarding:</p>
                                    <p>&nbsp;&nbsp;&nbsp;<input type="checkbox"> Signs/Symptoms of impending death</p>
                                    <p>&nbsp;&nbsp;&nbsp;<input type="checkbox"> Interventions caring for dying patient
                                    </p>
                                    <p>&nbsp;&nbsp;&nbsp;<input type="checkbox"> Home death procedure</p>
                                    <p>&nbsp;&nbsp;&nbsp;<input type="checkbox"> Planning for funeral arrangement</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="2" class="coloran">
                            <div class="word" style="width: 30px;">LIVING ARRANGEMENTS</div>
                        </td>
                        <td style="border-right: none;">
                            <div class="flex">
                                <div class="content">
                                    <p><b>Volunteer Interventions: </b>Assess/Perform/Instruct Pt/Cg:</p>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Need for Volunteer Services</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input type="checkbox"></div>
                                    </div>
                                    <p><input type="checkbox"> Volunteer Coordinator will:</p>
                                    <p>&nbsp;&nbsp;&nbsp;<input type="checkbox"> Explain volunteer services</p>
                                    <p>&nbsp;&nbsp;&nbsp;<input type="checkbox"> Arrange for the provision of requested
                                        services</p>
                                    <p>&nbsp;&nbsp;&nbsp;<input type="checkbox"> Maintain supportive relationship with
                                        patient/caregiver</p>
                                    <p><input type="checkbox"> Other: <input type="text-other">
                                    </p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-right: none;">
                            <div class="flex">
                                <div class="content">
                                    <p><b>Caregiver Relief Interventions: </b>Assess/Perform/Instruct Pt/Cg:</p>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Need for Caregiver Relief</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input type="checkbox"></div>
                                    </div>
                                    <p><input type="checkbox"> Change level of care to inpatient respite care per
                                        physician order</p>
                                    <p><input type="checkbox"> Encourage caregiver rest during patient's respite care
                                    </p>
                                    <p><input type="checkbox"> Provide education regarding resources and/or alternate
                                        placement</p>
                                    <p><input type="checkbox"> Other: <input type="text-other">
                                    </p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="3" class="coloran">
                            <div class="word" style="width: 30px;">SENSORY</div>
                        </td>
                        <td style="border-right: none;">
                            <div class="flex">
                                <div class="content">
                                    <p><b>Neurological Interventions: </b>Assess/Perform/Instruct Pt/Cg:</p>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> S/S of seizure activity</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Medication administration, side effects and
                                                response</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Care of patient experiencing seizures</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <p><input type="checkbox"> Other: <input type="text-other">
                                    </p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-right: none;">
                            <div class="flex">
                                <div class="content">
                                    <p><b>Mobility Interventions: </b>Assess/Perform/Instruct Pt/Cg:</p>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Safe transfers</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <p><input type="checkbox"> Provide assistive devices (specify):
                                        <input type="text-2"></p>
                                    <p><input type="checkbox"> Encourage activity as tolerated</p>
                                    <p><input type="checkbox"> Other: <input type="text-other">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-right: none;">
                            <div class="flex">
                                <div class="content">
                                    <p><b>ADL Interventions: </b>Assess/Perform/Instruct Pt/Cg:</p>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Caregiver ability to provide personal care</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input type="checkbox"
                                                style="visibility: hidden;"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Basic personal care techniques and activities of
                                                daily living (ADLs)</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input type="checkbox"></div>
                                    </div>
                                    <p><input type="checkbox"> Provide hospice aide personal care, frequency:
                                        <input type="text-rec"></p>
                                    <p><input type="checkbox"> Other: <input type="text-other">
                                    </p>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="content">
                <table>
                    <tr>
                        <td rowspan="3" class="coloran">
                            <div class="word" style="width: 30px;">SENSORY(continued)</div>
                        </td>
                        <td style="border-right: none;">
                            <div class="flex">
                                <div class="content">
                                    <p><b>Fall Prevention Interventions: </b>Assess/Perform/Instruct Pt/Cg:
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>A&nbsp;&nbsp;&nbsp;P&nbsp;&nbsp;
                                            I</b></p>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Fall Prevention</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <p><input type="checkbox"> Other: <input type="text-other"></p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-right: none;">
                            <div class="flex">
                                <div class="content">
                                    <p><b>Pain Management Interventions: </b>Assess/Perform/Instruct Pt/Cg:</p>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Pain Status</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input type="checkbox"
                                                style="visibility: hidden;"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Response to medications</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input type="checkbox"
                                                style="visibility: hidden;"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Non-Pharmacological pain control measures</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <p><input type="checkbox"> Other: <input type="text-other"></p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-right: none;">
                            <div class="flex">
                                <div class="content">
                                    <p><b>General Inpatient Care: </b>Assess/Perform/Instruct Pt/Cg:</p>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Need for inpatient care for pain/symptom control
                                            </p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input type="checkbox"
                                                style="visibility: hidden;"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Patient/caregiver regarding inpatient care</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox" style="visibility: hidden;"> <input
                                                type="checkbox" style="visibility: hidden;"> <input type="checkbox">
                                        </div>
                                    </div>
                                    <p><input type="checkbox"> Arrange transfer to inpatient facility per physician
                                        order</p>
                                    <p><input type="checkbox"> Other: <input type="text-other"></p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="coloran">
                            <div class="word" style="width: 30px;">INTEGUMENTARY</div>
                        </td>
                        <td style="border-right: none;">
                            <div class="flex">
                                <div class="content">
                                    <p><b>Integumentary Interventions: </b>Assess/Perform/Instruct Pt/Cg:</p>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Skin breakdown and prevention</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Wound care as
                                                follows:</p>
                                            <p><input type="text-other"></p>
                                            <p><input type="text-other"></p>
                                            <p><input type="text-other"></p>
                                            <p><input type="text-other"></p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Stome care as
                                                follows: </p>
                                            <p><input type="text-other"></p>
                                            <p><input type="text-other"></p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> S/S of complications, infection to
                                                include: <input type="text-2"> </p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input type="checkbox"></div>
                                    </div>
                                    <p><input type="checkbox"> Other:
                                        <input type="text-other"></p>
                                    <p><input type="checkbox"> Provide appropriate air mattress</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="coloran">
                            <div class="word" style="width: 30px;">RESPIRATORY</div>
                        </td>
                        <td style="border-right: none;">
                            <div class="flex">
                                <div class="content">
                                    <p><b>Respiratory Interventions: </b>Assess/Perform/Instruct Pt/Cg:</p>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Respiratory status</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input type="checkbox"
                                                style="visibility: hidden;"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Proper and safe use of O<sub>2</sub>
                                                administration at <input type="text-3"> liters/min,</p>
                                            <p>via <input type="text-3"> hours of use</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Response to medications and treatment</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Nebulizer inhalation treatment with:
                                               <input type="text-2"> </p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Sunctions technique</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Trach care</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Pulse Oximetry PRN for respiratory assessment</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <p><input type="checkbox"> Other:
                                        <input type="text-other"></p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="coloran">
                            <div class="word1" style="width: 30px;">CARDIOVA SCULAR</div>
                        </td>
                        <td style="border-right: none;">
                            <div class="flex">
                                <div class="content">
                                    <p><b>Cardiovascular Interventions</b> Assess/Perform/Instruct Pt/Cg:</p>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Cardiovascular status</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input style="visibility: hidden;"
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Edema, fluid retention and dehydration</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> S/S of infection</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input type="checkbox"></div>
                                    </div>
                                    <p><input type="checkbox"> Others:
                                        <input type="text-other"></p>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="h2">ORDERS FOR SKILLED NURSING (continued)</div>
        <div class="container">
            <div class="content">
                <table>
                    <tr>
                        <td class="tiddies" style="width: 30px;">
                            <div class="word">
                                <div class="sentence">RENAL <br>/GENITOURINARY</div>
                            </div>
                        </td>
                        <td style="border-right:none;">
                            <div class="flex">
                                <div class="content">
                                    <p><b>Renal/Genitourary Interventions: </b> Assess/Perform/Instruct Pt/Cg:
                                        <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A&nbsp;&nbsp;P&nbsp;&nbsp;&nbsp;I</b>
                                    </p>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Urinary status</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input style="visibility: hidden;"
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Skin breakdown and prevention</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Condom catheter application and use</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Foley catheter <input type="text-3"> Fr. <input type="text-3"> mL balloon
                                            </p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Foley irrigation: 
                                            </p>
                                            <p><input type="text-other"></p>

                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p>Solution <input type="text-3"> mL <input type="text-3"> frequency <input type="text-3"></p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Suprapubic catheter care: size:
                                                <input type="text-rec"></p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Catheter Care - frequency <input type="text-rec">
                                            </p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Cathether change q <input type="text-3"> with <input type="text-3"> Fr <input type="text-3">
                                                mL</p>
                                            <p>balloon cathether</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <p><input type="checkbox"> Other:
                                        <input type="text-other"></p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="coloran">
                            <div class="word" style="width: 30px;">ENDOCRINE</div>
                        </td>
                        <td style="border-right:none;">
                            <div class="flex">
                                <div class="content">
                                    <p><b>Endocrine Interventions: </b> Assess/Perform/Instruct Pt/Cg:</p>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Diabetic Care</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> S/S of Hpo/Hyperglycemia</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Glucometer Testing</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Medications: administration, use, side effects
                                            </p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Methods to promote oral intake</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> S/S of Neuropathy/Radiculopahy</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="3" class="coloran">
                            <div class="word" style="width: 30px;">GASTROINTESTINAL</div>
                        </td>
                        <td style="border-right:none;">
                            <div class="flex">
                                <div class="content">
                                    <p><b>GI Interventions: </b>Assess/Perform/Instruct Pt/Cg:</p>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Nausea/Vomitting</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input style="visibility: hidden;"
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Medication administration, side effects and
                                                reponse</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Nutritional changes and needs related to terminal
                                                illness</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Risk of aspiration</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Parenteral Nutrition and the care/use of
                                                equipment to include:</p>
                                            <p><input type="text-other"></p>
                                            <p><input type="text-other"></p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Gastrostomy Tube (specify):
                                                <input type="text-2"></p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> NG Tube (specify):
                                                <input type="text-2"></p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> J Tube (specify):
                                                <input type="text-2"></p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Change feeding tube:
                                                <input type="text-2"></p>
                                            <p>using size <input type="text-2"> q <input type="text-2"></p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox" style="visibility: hidden;"></div>
                                    </div>
                                    <p><input type="checkbox"> Other: <input type="text-other"> </p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-right:none;">
                            <div class="flex">
                                <div class="content">
                                    <p><b>Bowel Interventions: </b> Assess/Perform/Instruct Pt/Cg:</p>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Bowel status</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input style="visibility: hidden;"
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Nutrition, hydration and activity</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Fecal impaction and disimpact PRN</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Bowel regimen per physician order and
                                                effectiveness</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Ostomy care to include:
                                                </p>
                                            <p><input type="text-other"></p>
                                            <p><input type="text-other"></p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> S/S enema PRN constipation</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> S/S Fleet enema PRN constipation</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Medication administration, side effects and
                                                response</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Skin breakdown and prevention</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <p><input type="checkbox"> Other: <input type="text-other"></p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-right:none;">
                            <div class="flex">
                                <div class="content">
                                    <p><b>Impaired Swalloling Interventions: </b>Assess/Perform/Instruct Pt/Cg:</p>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Patient's swallowing ability</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input style="visibility: hidden;"
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Medication administration, side effects and
                                                response</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <p><input type="checkbox"> After diet as patient's condition deteriorated, per
                                        physician's order</p>
                                    <p><input type="checkbox"> Other: <input type="text-other"></p>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="content">
                <table>
                    <tr>
                        <td class="coloran">
                            <div class="word2" style="width: 30px;">GASTROINTESTINAL (continue)</div>
                        </td>
                        <td style="border-right: none;">
                            <div class="flex">
                                <div class="content">
                                    <p><b>Nutritional Requirements New or changed:</b></p>
                                    <p><input type="checkbox"><input type="text-3"> Sodium Diet <input type="text-3"> Calorie ADA Diet <input
                                            type="checkbox"> Bland diet</p>
                                    <p><input type="checkbox"><input type="text-3"> Protein High Diet <input type="text-3"> / Low Diet
                                        <input type="text-2"></p>
                                    <p><input type="checkbox"><input type="text-3"> Carbohydrate High Diet <input type="text-3"> / Low Diet
                                        <input type="text-3"></p>
                                    <p><input type="checkbox"> Entering Feeding <input type="text-3"> Amount: <input type="text-3"> mL/day
                                    </p>
                                    <p>Pump Type: <input type="text-2"></p>
                                    <p><input type="checkbox"> Mechanical (Soft, High-Fiber, etc.)
                                        &nbsp;&nbsp;&nbsp;<input type="checkbox"> NG Tube </p>
                                    <p><input type="checkbox"> Regular
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input
                                            type="checkbox"> Gastrotomy Tube </p>
                                    <p><input type="checkbox"> Supplement
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input
                                            type="checkbox"> J Tube </p>
                                    <p><input type="checkbox"> Other (specify): <input type="text-2"></p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="3" class="coloran">
                            <div class="word" style="width: 30px;">PSHYCHOLOGICAL/ MENTAL/EMOTIONAL</div>
                        </td>
                        <td style="border-right: none;">
                            <div class="flex">
                                <div class="content">
                                    <p><b>Pshycological/Mental/Emotional Interventions: </b> Assess/Perform/Instruct
                                        Pt/Cg: <b>&nbsp;&nbsp;A&nbsp;&nbsp;P&nbsp;&nbsp;&nbsp;I</b></p>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Level of consciousness/orientation</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Safety measures to prevent injury</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Current medications/potential side effects
                                                causing alteration</p>
                                            <p>in mental status</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Causes, e.g., infection, pain, urinary retention,
                                                constipation, etc.</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Counseling</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Grief management</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <p><input type="checkbox"> Other:
                                        <input type="text-other"></p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-right: none;">
                            <div class="flex">
                                <div class="content">
                                    <p><b>Sleep Interventions: </b>Assess/Perform/Instruct Pt/Cg:</p>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Causes of interruptions in sleep</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Medication administration, side effects and
                                                response</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <p><input type="checkbox"> Other: <input type="text-other"></p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-right: none;">
                            <div class="flex">
                                <div class="content">
                                    <p><b>Spiritual Need Interventions: </b> Assess/Perform/Instruct Pt/Cg:</p>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Spiritual needs of the patient and caregiver</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Current clergy support</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input style="visibility: hidden;"
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Need for spiritual counselor to provide spiritual
                                                support</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input style="visibility: hidden;"
                                                type="checkbox"></div>
                                    </div>
                                    <p><input type="checkbox"> Other: <input type="text-other"></p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="2" class="coloran">
                            <div class="word" style="width: 30px;">MEDICATIONS</div>
                        </td>
                        <td style="border-right: none;">
                            <div class="flex">
                                <div class="content">
                                    <p><b>Medication Interventions </b>Assess/Perform/Instruct Pt/Cg:</p>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Patient's medicationss will be reviewed</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox" style="visibility: hidden;"> <input
                                                type="checkbox"> <input type="checkbox" style="visibility: hidden;">
                                        </div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Reorder of medications from pharmacy will be
                                                documented</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox" style="visibility: hidden;"> <input
                                                type="checkbox"> <input type="checkbox" style="visibility: hidden;">
                                        </div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Discontinued medications will be discarded per
                                                policy</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Report to physician and IDG any medication
                                                discrepancies</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox" style="visibility: hidden;"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> If misuse or diversion is suspected:</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox" style="visibility: hidden;"> <input
                                                type="checkbox" style="visibility: hidden;"> <input
                                                style="visibility: hidden;" type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Maintain medication in a lock box</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"
                                                style="visibility: hidden;"> <input type="checkbox"
                                                style="visibility: hidden;"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Count medications every nursing visit</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox" style="visibility: hidden;"></div>
                                    </div>
                                    <p><input type="checkbox"> Other: <input type="text-other"></p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-right: none;">
                            <div class="flex">
                                <div class="content">
                                    <p><b>High Tech/Special Procedures: </b> Assess/Perform/Instruct Pt/Cg:</p>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Administration of <input type="text-3"> (IV medication) in
                                                <input type="text-3"></p>
                                            <p>(solution) to run at <input type="text-3"> mL/hr via <input type="text-3"> (Pump/Gravity)</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Flush IV/PICC/Midline wih 5-10mL of NS before and
                                                after antibiotic</p>
                                            <p>infusion. Follow with 3-5mL Heparin <input type="text-3"> units/mL flush</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Change <input type="text-2"> dressing q
                                                <input type="text-2"> and PRN</p>
                                            <p>using sterile technique with alcohol/betadine</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Change injection cap q <input type="text-2"> and PRN</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Flush <input type="text-3"> catheter with
                                                <input type="text-2"></p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Change Huber needle q <input type="text-3"> and PRN using
                                                sterile technique</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Access port q <input type="text-3"> and PRN to flush with
                                                <input type="text-2"></p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Pump/Equipment (specify): <input type="text-2"></p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Equipment use/Safety</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> Start Peripheral IV and maintain site, q
                                                <input type="text-3"> or q <input type="text-3"> days</p>
                                            <p>and PRN for S/S of infiltration/infection</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> S/S of infiltration and emergency procedures</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <p><input type="checkbox"> Other: <input type="text-other"></p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="coloran">
                            <div class="word" style="width: 30px;">EQUIP MENT</div>
                        </td>
                        <td style="border-right: none;">
                            <div class="flex">
                                <div class="content">
                                    <p><b>Equipment Interventions: </b>Assess/Perform/Instruct Pt/Cg:</p>
                                    <div class="checkbox-container">
                                        <div class="first-check">
                                            <p><input type="checkbox"> S/S of infiltration and emergency procedures</p>
                                        </div>
                                        <div class="checkbox"><input type="checkbox"> <input type="checkbox"> <input
                                                type="checkbox"></div>
                                    </div>
                                    <p><input type="checkbox"> Other: <input type="text-other"></p>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <h2 class="h2">ORDERS FOR OTHER DISCIPLINES</h2>
        <div class="container">
            <div class="content">
                <p><input type="checkbox"> Aide visit frequency <input type="text-3"> to assist w/ personal care/ADLs/light <br>
                    housekeeping as needed within <input type="text-3"> period of time</p>
                <p><input type="checkbox"> PT visit frequency <input type="text-3"> within <input type="text-3"> period of time </p>
                <p><input type="checkbox"> PT to consult, evaluate and treat</p>
                <p><input type="checkbox"> OT visit frequency <input type="text-3"> within <input type="text-3"> period of time</p>
                <p><input type="checkbox"> OT to consult, evaluate and treat</p>
                <p><input type="checkbox"> ST visit frequency <input type="text-3"> within <input type="text-3"> period of time</p>
                <p><input type="checkbox"> ST to consult, evaluate and treat</p>
            </div>
            <div class="content">
                <p><input type="checkbox"> SW to evaluate and assess for needs <input type="text-3"> times per month and <br> PRN for
                    counseling within <input type="text-3"> period of time</p>
                <p><input type="checkbox"> Dietary counseling PRN within <input type="text-3"> period of time</p>
                <p><input type="checkbox"> Volunteer for respite PRN within <input type="text-3"> period of time</p>
                <p><input type="checkbox"> Spiritual Care Coordinator for spiritual support PRN within <input type="text-3"> period of
                    time</p>
            </div>
        </div>
        <h2 class="h2-1">GOALS/OUTCOMES</h2>
        <div class="container">
            <div class="content">
                <table>
                    <tr>
                        <td style="border-left: none; border-right: none;">
                            <p><b>TERMINAL CARE/IMPENDING DEATH:</b></p>
                        </td>
                        <td style="border-left: none; border-right: none;">
                            <p> <input type="checkbox"> Caregiver/Family will understand signs and symptoms of dying
                                process prior to patient's death</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-left: none; border-right: none;">
                            <p><b>VOLUNTER SERVICES:</b></p>
                        </td>
                        <td style="border-left: none; border-right: none;">
                            <p><input type="checkbox"> Patient/Caregiver will receive requested volunteer service within
                                <input type="text-3"> days of request</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-left: none; border-right: none;">
                            <p><b>CAREGIVER RELIEF:</b></p>
                        </td>
                        <td style="border-left: none; border-right: none;">
                            <p><input type="checkbox"> Caregiver will receive sufficient rest during patient's terminal
                                illness</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-left: none; border-right: none;">
                            <p><b>NEUROLOGICAL</b></p>
                        </td>
                        <td style="border-left: none; border-right: none;">
                            <p><input type="checkbox"> Seizures will be controlled <input type="checkbox"> during care
                                <input type="checkbox"> within <input type="text-2"></p>
                            <p><input type="checkbox"> Patient will remain safe from injury during seizure activity</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-left: none; border-right: none;">
                            <p><b>MOBILITY</b></p>
                        </td>
                        <td style="border-left: none; border-right: none;">
                            <p><input type="checkbox"> Patient will remain optimal mobility <input type="checkbox">
                                during care <input type="checkbox"> within <input type="text-2"></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-left: none; border-right: none;">
                            <p><b>ADL:</b></p>
                        </td>
                        <td style="border-left: none; border-right: none;">
                            <p><input type="checkbox"> Optimal hygiene will be maintained during care</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-left: none; border-right: none;">
                            <p><b>FALL PREVENTION:</b></p>
                        </td>
                        <td style="border-left: none; border-right: none;">
                            <p><input type="checkbox">Fall prevention will be maintained during care</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-left: none; border-right: none;">
                            <p><b>PAIN:</b></p>
                        </td>
                        <td style="border-left: none; border-right: none;">
                            <p><input type="checkbox"> Patient's pain will remain at comfortable level <input
                                    type="checkbox"> during care <input type="checkbox"> within <input type="text-2"></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-left: none; border-right: none;">
                            <p><b>GENERAL INPATIENT CARE:</b></p>
                        </td>
                        <td style="border-left: none; border-right: none;">
                            <p><input type="checkbox"> Patient will receive optimal level of pain and/or symptom
                                management on short-term basis</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-left: none; border-right: none;">
                            <p><b>INTEGUMENTARY</b></p>
                        </td>
                        <td style="border-left: none; border-right: none;">
                            <p><input type="checkbox"> Skin integrity will be maintained <input type="checkbox"> during
                                care <input type="checkbox"> within <input type="text-2"></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-left: none; border-right: none;">
                            <p><b>CARDIO/RESPIRATORY:</b></p>
                        </td>
                        <td style="border-left: none; border-right: none;">
                            <p><input type="checkbox"> Patient/Caregiver will receive optimal teaching and support as
                                cardiac and pulmonary functions change during care</p>
                            <p><input type="checkbox"> Patient/Caregiver will demonstrate proper and safe use of oxygen
                                and set-up</p>
                            <p><input type="checkbox"> Patient/Caregiver will verbalize understanding of medications and
                                treatments <input type="checkbox"> during care <input type="checkbox"> within
                                <input type="text-2"></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-left: none; border-right: none;">
                            <p><b>RENAL/GENITOURINARY:</b></p>
                        </td>
                        <td style="border-left: none; border-right: none;">
                            <p><input type="checkbox"> Skin will be maintained at optimal level <input type="checkbox">
                                during care <input type="checkbox"> within <input type="text-2"></p>
                            <p><input type="checkbox"> Patientwill be free of urinary tract infection <input
                                    type="checkbox"> during care <input type="checkbox"> within <input type="text-2"></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-left: none; border-right: none;">
                            <p><b>ENDOCRINE:</b></p>
                        </td>
                        <td style="border-left: none; border-right: none;">
                            <p><input type="checkbox"> Patient's blood sugar level will be maintained at optimal level
                                for patient's illness <input type="checkbox"> during care <input type="checkbox"> within
                                <input type="text-2"></p>
                            <p><input type="checkbox"> Patient's neuropathy/radiculopathy will be managed with
                                medications <input type="checkbox"> during care <input type="checkbox"> within
                                <input type="text-2"></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-left: none; border-right: none;">
                            <p><b>GASTROINTESTINAL:</b></p>
                        </td>
                        <td style="border-left: none; border-right: none;">
                            <p><input type="checkbox"> Patient's nausea/vomiting will be controlled within</p>
                            <p><input type="checkbox"> Optimal Nutrition/hydration will be achieved based on patient
                                conditions and/or desires <input type="checkbox"> during care <input type="checkbox">
                                within <input type="text-2"></p>
                            <p><input type="checkbox"> Patient/Caregiver will demonstrate ability to manage bowel
                                routine within <input type="text-2"></p>
                            <p><input type="checkbox"> Patient will maintain optimal swallowing, and patient/caregiver
                                understands risk <input type="checkbox"> during care <input type="checkbox"> within
                                <input type="text-2"></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-left: none; border-right: none;">
                            <p><b>PSYCHOLOGICAL/MENTAL/EMOTIONAL</b></p>
                        </td>
                        <td style="border-left: none; border-right: none;">
                            <p><input type="checkbox"> Caregiver will demonstrate ability to cope with patient's altered
                                mental status within <input type="text-2"></p>
                            <p><input type="checkbox"> Patient will be maintained in safe environment <input
                                    type="checkbox"> during care <input type="checkbox"> within</p>
                            <p><input type="checkbox"> Patient will achieve optimal sleep/rest <input
                                    type="checkbox">during care <input type="checkbox"> within <input type="text-2">
                            </p>
                            <p><input type="checkbox"> Patient will demonstrate or report a decreate in anxiety level
                                <input type="checkbox"> during care <input type="checkbox"> within
                                <input type="text-2"></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-left: none; border-right: none;">
                            <p><b>BEREAVEMENT</b></p>
                        </td>
                        <td style="border-left: none; border-right: none;">
                            <p><input type="checkbox"> Patient/Caregiver will achieve optimal grief reaction prior to
                                patient's death</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-left: none; border-right: none;">
                            <p><b>SPIRITUAL</b></p>
                        </td>
                        <td style="border-left: none; border-right: none;">
                            <p><input type="checkbox">Spiritual needs will met as determined by patiend/caregiver <input
                                    type="checkbox"> during care <input type="checkbox"> within <input type="text-2">
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-left: none; border-right: none;">
                            <p><b>MEDICATIONS</b></p>
                        </td>
                        <td style="border-left: none; border-right: none;">
                            <p><input type="checkbox"> Patient will receive prescribed medications at correct times (see
                                Medication Profile)</p>
                            <p><input type="checkbox"> Patient/Caregiver safely administers drugs and biologicals during
                                care</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-left: none; border-right: none;">
                            <p><b>EQUIPTMENT</b></p>
                        </td>
                        <td style="border-left: none; border-right: none;">
                            <p><input type="checkbox"> Patient's/Caregiver will receive equipment and demonstrate use at
                                time of equipment set-up</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-left: none; border-right: none;">
                            <p><b>OTHER:</b></p>
                        </td>
                        <td style="border-left: none; border-right: none;">
                            <p><input type="checkbox">
                                Other(specify): <input type="text-other">
                            </p>
                            <p><input type="checkbox">
                                Other(specify): <input type="text-other">
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="container">
            <div class="content">
                <table>
                    <tr>
                        <th class="bobo">MEDICATIONS</th>
                        <th class="bobo">DOSE</th>
                        <th class="bobo">ROUTE</th>
                        <th class="bobo">FREQUENCY</th>
                    </tr>
                    <tr>
                        <td class="bobo"><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td class="bobo"><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td class="bobo"><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td class="bobo"><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td class="bobo"><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td class="bobo"><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td class="bobo"><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td class="bobo"><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td class="bobo"><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td class="bobo"><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                </table>
            </div>
            <div class="content">
                <table>
                    <tr>
                        <th class="bobo">MEDICATIONS</th>
                        <th class="bobo">DOSE</th>
                        <th class="bobo">ROUTE</th>
                        <th class="bobo">FREQUENCY</th>
                    </tr>
                    <tr>
                        <td class="bobo"><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td class="bobo"><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td class="bobo"><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td class="bobo"><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td class="bobo"><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td class="bobo"><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td class="bobo"><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td class="bobo"><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td class="bobo"><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td class="bobo"><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="footer">
            <div class="act">
                <p>Activities permitted:</p>
                <div class="items">
                    <div>
                        <p><input type="checkbox"> Complete bed rest</p>
                        <p><input type="checkbox"> Up as tolerated</p>
                    </div>
                    <div>
                        <p><input type="checkbox"> Independent at home</p>
                        <p><input type="checkbox"> Wheelchair</p>
                    </div>
                    <div>
                        <p><input type="checkbox"> Bed rest with BRP</p>
                        <p><input type="checkbox"> Transfer bed - chair</p>
                    </div>
                    <div>
                        <p><input type="checkbox"> Partial - Weight bearing <input type="checkbox"> Cane <input
                                type="checkbox"> Walker <input type="checkbox"> Crutches</p>
                        <p><input type="checkbox"> Other: <input type="text-2"></p>
                    </div>
                </div>
            </div>
            <style>
                input[type="text-equip"]{
                    background-color: transparent;
                    outline: 0;
                    width: 1100px;
                    border: none;
                    font-size: 14px;
                    border-bottom: 1px solid black;
                }
            </style>
            <div class="act">
                <p>Equipment needed: <input type="text-equip"> </p>
            </div>
            <div class="act">
                <p>Additional orders (specify): <input type="text-equip"></p>
            </div>
            <div class="act"></div>
            <div class="act"></div>
            <div class="act1">
                <div class="container-1">
                    <div class="div-1"> RN Signature <input type="text"></div>
                    <div class="div-2"> Date: <input type="text"></div>
                    <div class="div-3"> Physician Signature: <input type="text"></div>
                    <div class="div">Date <input type="text"></div>
                </div>
            </div>
            <div class="act1">
                <div class="container-1">
                    <div class="div-4">
                        <p>Patient Name: <input type="text"></p>
                    </div>
                    <div class="div-5">
                        <p> ID# <input type="text"></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>