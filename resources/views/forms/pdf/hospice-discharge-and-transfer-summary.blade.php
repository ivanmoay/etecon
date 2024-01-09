<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOSPICE DISCHARGE/
        TRANSFER SUMMARY</title>
    <style>
        * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    background-color: #dfd9d9;
    font-size: 14px;
    padding: 8px;
}

.wrapper {
    background-color: rgba(255, 255, 255, 0.788);
    padding: 0 5px;
    border-radius: 10px;
}

.header {
    display: grid;
    grid-template-columns: 1.4fr 1fr 1fr;
}

.heading-col-1 {
    border: 1px solid black;
    border-radius: 8px;
    width: 85%;
}

.heading-col-2 {
    border: 1px solid black;
    border-radius: 8px;
}

.heading-col-3 {
    text-align: right;
}

p.heading {
    font-weight: bold;
    text-transform: uppercase;
    font-size: 16px;
}

.bl {
    border-left: 1px solid black;
}

.bb {
    border-bottom: 1px solid black;
}

.pad {
    padding: 2px;
}

.flex {
    display: flex;
}

.bt {
    border-top: 1px solid black;
}

.justify-between {
    justify-content: space-evenly;
}

.init {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
}

input {
    outline: 0;
    background-color: transparent;
    border: 0;
    width: 80%;
}

input[type='checkbox'] {
    width: 12px;
    margin-right: 1px;
}

input[type='id'] {
    width: 83%;
}

input[type='code'] {
    width: 15px;
    padding: 0;
    margin: 0;
    height: auto;
    border-bottom: 1px solid black;
}

.color-primary {
    color: purple;
}

span.badge {
    background-color: rgba(218, 21, 218, 0.575);
    padding: 1px;
    margin-top: 8px;
    border: 1px solid black;
}

.admin {
    background-color: purple;
    margin-top: 8px;
    padding: 5px 0;
    border-radius: 8px;
}

.admin p.heading{
    color: white;
    text-align: center;
    background-color: purple;
}

.form {
    background-color: white;
    border-radius: 5px;
    margin: 5px;
    padding: 3px;
}

.text-center {
    text-align: center;
}

.three-col {
    display: grid;
    grid-template-columns: 2fr 1.2fr 1fr;
}

.header-cus {
    font-size: 12px;
}

.provider-col2 {
    margin-top: 10px; 
    padding-top: 5px; 
    border-top: 1px solid black;
}

.name-leg {
    display: grid;
    grid-template-columns: 1.3fr 60px 1.2fr 120px;
}

.sss {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-template-columns: 1fr 1.2fr;
}

.reason {
    display: grid;
    grid-template-columns: 365px 1fr;
    font-size: 12px !important;
}

.justify-around {
    justify-content: space-around;
}

.choices {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
}

.title {
    background-color: purple;
    margin-top: 10px;
    color: white;
    padding: 3px;
    border-radius: 15px;
    font-weight: bold;
}

.w-100 {
    width: 100%;
}
.checkboxes {
    display: grid;
    grid-template-columns:  328px 175px 1fr;
}

.summary-sig {
    display: grid;
    grid-template-columns: 2fr 1fr;
}

.f-small {
   text-align: center;
   background-color: rgba(241, 177, 241, 0.507);
}

.sig-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
}

.col1-container {
    text-align: center;
    display: grid;
    grid-template-columns: 3fr 2fr 1fr 2fr;
}
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="brand-container">
            <img src="https://i.ibb.co/kSr11h4/final.png" width="80px" alt="logo">
        </div>

        <div class="header color-primary">
            <div class="heading-col-1">
                <p><span class="badge">A0000</span> = Hospice Item Set Indicator</p>
                <p style="padding-left: 3.8rem;">Required for HIS-Discharge</p>
            </div>
            <div class="heading-col-2 bl pad">
                <div class="init">
                    <p><input type="checkbox"><strong>Discharge</strong></p>
                    <p><input type="checkbox"><strong>Transfer</strong></p>
                </div>
                <div class="bt">
                    <p class="text-secondary">
                        <strong>ID#:</strong><input type="id" class="pad bb">
                    </p>
                </div>
            </div>
            <div class="heading-col-3 pad">
                <p class="heading">
                    Hospice Discharge/ <br> Transfer Summary
                </p>
            </div>
        </div>

        <div class="admin">
            <p class="heading">Administrative information - <span style="text-transform: none;">Fill Out Per Agency
                    Policy</span></p>
            <div class="form">
                <div class="three-col">
                    <div class="provider">
                        <div class="provider-col1">
                            <p class="header-cus"><span class="badge">A0000</span> <strong>Facility Provider
                                    Numbers</strong><span style="font-size: 10px;"> - Enter code in boxes
                                    provided</span></p>
                            <p class="header-cus pad"><strong>A. National Provider Identifier (NPI):</strong></p>
                            <p class="header-cus"><input type="code"> <input type="code"> <input type="code"> <input
                                    type="code"> <input type="code"> <input type="code"> <input type="code"> <input
                                    type="code"> <input type="code"> <input type="code"></strong></p>
                        </div>
                        <div class="provider-col2">
                            <p class="header-cus pad"><strong>B. CMS Certification Number (CCN):</strong></p>
                            <p class="header-cus"><input type="code"> <input type="code"> <input type="code"> <input
                                    type="code"> <input type="code"> <input type="code"> <input type="code"> <input
                                    type="code"> <input type="code"> <input type="code"> <input type="code"> <input
                                    type="code"></strong></p>
                        </div>
                    </div>
                    <div class="bl pad">
                        <div>
                            <p class="header-cus"><span class="badge">A0220</span> <strong>Admission Date/SOC</p>
                            <p class="header-cus text-center pad">Month
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Day
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                            </p>
                            <p class="header-cus text-center"><input type="code"> <input type="code"> / <input
                                    type="code"> <input type="code"> / <input type="code"> <input type="code"> <input
                                    type="code"> <input type="code"></strong></p>
                        </div>
                        <div class="provider-col2">
                            <p class="header-cus"><span class="badge">A0220</span> <strong>Discharge Date:</p>
                            <p class="header-cus text-center pad">Month
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Day
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                            </p>
                            <p class="header-cus text-center"><input type="code"> <input type="code"> / <input
                                    type="code"> <input type="code"> / <input type="code"> <input type="code"> <input
                                    type="code"> <input type="code"></strong></p>
                        </div>
                    </div>
                    <div class="bl pad">
                        <div class="provider-col1">
                            <p class="header-cus"><span class="badge">A0250</span> <strong>Reason for Record</p>
                            <p class="header-cus pad text-center"><input type="checkbox" class="pad"> 09.
                                <strong>Discharge
                            </p>
                        </div>
                        <div class="provider-col2">
                            <p class="header-cus"><span class="badge">A0220</span> <strong>Transfer Date:</p>
                            <p class="header-cus text-center pad">Month
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Day
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                            </p>
                            <p class="header-cus text-center"><input type="code"> <input type="code"> / <input
                                    type="code"> <input type="code"> / <input type="code"> <input type="code"> <input
                                    type="code"> <input type="code"></strong></p>
                        </div>
                    </div>
                </div>
                <div class="pad bt">
                    <div class="header-cus name-leg">
                        <div class="pad">
                            <p><span class="badge">A0500</span> Legal Name of Patient: &nbsp;&nbsp; A. First Name</p>
                            <br>
                            <p class="pad"><input type="code"> <input type="code"> <input type="code"> <input
                                    type="code"> <input type="code"> <input type="code"> <input type="code"> <input
                                    type="code"> <input type="code"> <input type="code"> <input type="code"> <input
                                    type="code"></p>
                        </div>

                        <p class="pad text-center">B. Middle <br> &nbsp;&nbsp;&nbsp;&nbsp; Initial
                            <input type="code" style="width: 20px;">
                        </p>
                        <p class="pad">&nbsp;&nbsp; C. Last Name <br><br>
                            <input type="code"> <input type="code"> <input type="code"> <input type="code"> <input
                                type="code"> <input type="code"> <input type="code"> <input type="code"> <input
                                type="code"> <input type="code"> <input type="code"> <input type="code"> <input
                                type="code">
                        </p>
                        <p class="pad">D. Suffix <br><br>
                            <input type="code" style="width: 20px;"> <input type="code" style="width: 20px;"> <input
                                type="code" style="width: 20px;">
                        </p>
                    </div>
                </div>
                <div class="sss bt pad">
                    <div class="sss-col1">
                        <p class="header-cus"><span class="badge">A0600</span> <strong>Social Security and Medicare
                                Numbers</strong></p>
                        <p class="header-cus pad"><strong>A. Social Security Number</strong></p>
                        <p class="header-cus"><input type="code"> <input type="code"> <input type="code"> - <input
                                type="code"> <input type="code"> - <input type="code"> <input type="code"> <input
                                type="code"> <input type="code"> </p>
                        <br>
                        <p class="header-cus pad bt"><strong>B. Medicare Number</strong><span style="font-size: 10px;">
                                (or comparable railroad insurance number)</span>
                            <br>
                            <input type="code"> <input type="code"> <input type="code"> <input type="code"> <input
                                type="code"> <input type="code"> <input type="code"> <input type="code"> <input
                                type="code"> <input type="code"> <input type="code"> <input type="code">
                        </p>
                    </div>
                    <div class="bl">
                        <div>
                            <p class="header-cus pad bt"><strong><span class="badge">A0700</span> Medicaid
                                    Number</strong><span style="font-size: 10px;"> - Enter "+" If pending, "N" if
                                    Medicaid Recipient:</span>
                            </p>
                            <p class="header-cus pad">
                                <input type="code"> <input type="code"> <input type="code"> <input type="code"> <input
                                    type="code"> <input type="code"> <input type="code"> <input type="code"> <input
                                    type="code"> <input type="code"> <input type="code"> <input type="code"> <input
                                    type="code"> <input type="code">
                            </p>
                        </div>
                        <div class="pad">
                            <p class="header-cus bt"><strong><span class="badge">A0800</span> Gender</strong>
                                &nbsp;&nbsp; <input type="checkbox">01. Male &nbsp;&nbsp;&nbsp;<input
                                    type="checkbox">02. Female</span>
                            </p>

                        </div>
                        <div class="provider-col2 pad">
                            <p class="header-cus"><span class="badge">A0900</span> <strong>Birth Date:
                                    Month
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Day
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
                            </p>

                            <p class="header-cus text-center"><input type="code"> <input type="code"> / <input
                                    type="code"> <input type="code"> / <input type="code"> <input type="code"> <input
                                    type="code"> <input type="code"></strong></p>
                        </div>

                    </div>
                </div>
                <div class="reason bt">
                    <div class="left">
                        <p class="header-cus"><span class="badge">A2115</span> <strong>Reason for Discharge:</strong>
                        </p>
                        <div class="header-cus">
                            <p><input type="checkbox">01.Expired
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="checkbox">04.Moved out of hospice service area
                            </p>
                            <p><input type="checkbox">02.Revoked
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="checkbox">05.Transferred to another hospice
                            </p>
                            <p><input type="checkbox">03.No longer terminally ill <input type="checkbox">06.Discharged
                                for a cause</p>
                        </div>
                    </div>
                    <div class="right bl pad">
                        <p class="header-cus"><strong>Reason for Transfer:</strong></p>
                        <p class="header-cus"><input type="checkbox">To Respite:</p>
                        <div class="choices">
                            <p>&nbsp;<input type="checkbox">Hospice Home</p>
                            <p><input type="checkbox">General Inpatient</p>
                            <p><input type="checkbox">To Palliative Care</p>
                            <p>&nbsp;<input type="checkbox">Hospice Respite</p>
                            <p><input type="checkbox">Continuous Care</p>
                            <p><input type="checkbox">Other/Comments:</p>
                            <p>&nbsp;<input type="checkbox">Nursing Home</p>
                            <p>&nbsp;<input type="text" class="bb"></p>
                            <p>&nbsp;<input type="text" class="bb"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="comments">
            <div class="discharge">
                <div class="title">
                    <p>CONDITION ON DISCHARGE/TRANSFER</p>
                </div>
                <p class="title-p bb pad"><strong>Physical/Psychosocial Status</strong>(If applicable):</p>
                <p><input type="text" class="bb w-100"></p>
                <p><input type="text" class="bb w-100"></p>
                <p><input type="text" class="bb w-100"></p>
                <p><input type="text" class="bb w-100"></p>
                <p><input type="text" class="bb w-100"></p>
            </div>

            <div class="plan">
                <div class="title">
                    <p>CURRENT PLAN OF CARE &nbsp;&nbsp;<input type="checkbox"> See attached Care Plan</p>
                </div>
                <p><input type="text" class="bb w-100"></p>
                <p><input type="text" class="bb w-100"></p>
                <p><input type="text" class="bb w-100"></p>
                <p><input type="text" class="bb w-100"></p>
                <p><input type="text" class="bb w-100"></p>
            </div>

            <div class="summary">
                <div class="title">
                    <p>CARE SUMMARY <span style="font-weight: normal;">(treatments, symptoms and pain management)</span>
                    </p>
                </div>
                <p><input type="text" class="bb w-100"></p>
                <p><input type="text" class="bb w-100"></p>
                <p><input type="text" class="bb w-100"></p>
                <p><input type="text" class="bb w-100"></p>
                <p><input type="text" class="bb w-100"></p>
                <p><input type="text" class="bb w-100"></p>
                <p class="title-p bb pad"><strong>Continuing symptom(s) management needs:</strong>(e.i pain, N/V,
                    shortness of breath, etc)(if applicable):</p>
                <p><input type="text" class="bb w-100"></p>
                <p><input type="text" class="bb w-100"></p>
                <p><input type="text" class="bb w-100"></p>
            </div>
            <div class="goals">
                <div class="title">
                    <p>GOALS/OUTCOMES</p>
                </div>
                <p class="title-p bb pad"><strong>Goals/Outcomes met:</strong>&nbsp;&nbsp; <input
                        type="checkbox">Stabilized &nbsp;&nbsp; <input type="checkbox">Condition improved</p>
                <p class="title-p bb pad">Expired: Date of Death <input type="code">/<input type="code">/<input
                        type="code"> Time of Death: <input type="code" style="width: 50px;"> &nbsp;<input
                        type="checkbox">AM &nbsp; <input type="checkbox">PM (per agency policy)</p>
                <p class="pad">Other: <input type="text" class="bb" style="width: 93%;"></p>
                <p class="title-p bb pad bt"><strong>Goals/Outcomes not met & reasons</strong>(if applicable):</p>
                <p><input type="text" class="bb w-100"></p>
                <p><input type="text" class="bb w-100"></p>
                <p><input type="text" class="bb w-100"></p>
                <p><input type="text" class="bb w-100"></p>
                <p class="title-p bb pad">Comments:</p>
                <p><input type="text" class="bb w-100"></p>
                <p><input type="text" class="bb w-100"></p>
            </div>
        </div>

        <br>
        <br>
        <br>
        <div class="header color-primary">
            <div>
                &nbsp;
            </div>
            <div>
                &nbsp;
            </div>
            <div class="heading-col-3 pad">
                <p class="heading">
                    Hospice Discharge/ <br> Transfer Summary
                </p>
            </div>
        </div>
        <div class="resource">
            <div class="title">
                <p>RESOURCES ONGOING<span style="font-weight: normal;">(If applicable):</span>
                </p>
            </div>
            <p class="title-p bb pad"><input type="checkbox">Nursing home &nbsp;&nbsp;<input type="checkbox">Meals on
                Wheels &nbsp;&nbsp;<input type="checkbox">State Program &nbsp;&nbsp;<input type="checkbox"> Other
                (specify): <input type="text" class="bb" style="width: 33%;"></p>
            <p class="title-p bb pad"><strong>Resource information provided to patient for continuing needs</strong>(if
                applicable):</p>
            <p><input type="text" class="bb w-100"></p>
            <p><input type="text" class="bb w-100"></p>
            <p><input type="text" class="bb w-100"></p>
            <p class="title-p bb pad">Comments:</p>
            <p><input type="text" class="bb w-100"></p>
            <p><input type="text" class="bb w-100"></p>
        </div>

        <div class="living">
            <div class="title">
                <p>LIVING ARRANGEMENTS AT DISCHARGE<span style="font-weight: normal;">(If applicable):</span>
                </p>
            </div>
            <p class="title-p bb pad"><input type="checkbox">Own home &nbsp;&nbsp;<input type="checkbox">Relative home
                &nbsp;&nbsp;<input type="checkbox">Nursing home &nbsp;&nbsp;<input type="checkbox"> Other (specify):
                <input type="text" class="bb" style="width: 33%;"></p>
            <div class="checkboxes header-cus pad bb">
                <div>
                    <p><input type="checkbox">Discharge from home Hospice &nbsp;<input type="checkbox">Officer scheduler notified</p>
                    <p><input type="checkbox">Home health services offered &nbsp;<input type="checkbox">Physician notified</p>
                    <p><input type="checkbox">Report given to instituition or agency assuming</p>
                    <p>&nbsp;&nbsp;&nbsp; care w/notification of Advance Directive status</p>
                </div>
                <div>
                    <p><input type="checkbox">Referred to bereavement</p>
                    <p><input type="checkbox">Order an summary completed</p>
                    <p><input type="checkbox">Physician provided copy</p>
                    <p><input type="checkbox">Other: <input type="text" class="bb" style="width: 60%;"></p>
                </div>
                <div>
                    <p><input type="checkbox">Medication profile attached <br> (if transferred)</p>
                    <p><input type="checkbox">Medication Profile given to Patient (if discharged)</p>
                    <p><input type="checkbox">IDG notified and discontinued</p>
                </div>
            </div>

            <div class="summary-sig bb pad">
                <div class="pad">
                    <p>Summary Completed By (Signature/Discipline):</p>
                    <input type="text" class="w-100">
                </div>
                <div class="pad bl">
                    <p>Date:</p>
                    <input type="text" class="w-100">
                </div>
            </div>
            <div class="resource">
                <div class="title" style="text-align: center;">
                    <p>HOSPICE PROVIDER USE ONLY AT DISCHARGE</p>
                </div>
                <p class="title-p f-small bb pad"><strong>HIS SECTION Z - RECORD ADMINISTRATION - </strong>Filled out Per Agency Policy by Person(s) completing <strong>HIS Discharge Record</strong> on the iQIES ASAP System
                <p class="title-p bb pad"><span class="badge">Z0400</span><strong>Signature(s) of Person(s) Completing the Record</strong></p>
                <p class="title-p bb pad">I certify that the accompanying information accurately reflects patient assessment information for this patient and that I collected or coordinated collection of this information on the dates specified. To the best of my knowledge, this information was collected in accordance with applicable Medicare and Medicaid requirements. I understand that reporting this information is used as a basis for payment from federal funds. I further understand that failure to report such information may lead to a 2 percentage point reduction in the Fiscal Year payment determination. I also certify that I am authorized to submit this information by this provider on its behalf.</p>
            </div>
            <div class="sig-container">
                <div class="col1-container">
                    <div>
                        <p class="bb"><br><strong>Signature</strong></p>
                        <p class="bb pad"><strong>A.</strong> <input type="text"></p>
                        <p class="bb pad"><strong>B.</strong> <input type="text"></p>
                        <p class="bb pad"><strong>C.</strong> <input type="text"></p>
                        <p class="bb pad"><strong>D.</strong> <input type="text"></p>
                        <p class="bb pad"><strong>E.</strong> <input type="text"></p>
                        <p class="bb pad"><strong>F.</strong> <input type="text"></p>
                    </div>
                    <div class="bl">
                        <p class="bb"><br><strong>Title</strong></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                    </div>
                    <div class="bl">
                        <p class="bb"><br><strong>Sections</strong></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                    </div>
                    <div class="bl">
                        <p class="bb"><strong>Data Section Completed</strong></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                    </div>
                </div>
                <div class="col1-container bl">
                    <div>
                        <p class="bb"><br><strong>Signature</strong></p>
                        <p class="bb pad"><strong>G.</strong> <input type="text"></p>
                        <p class="bb pad"><strong>H.</strong> <input type="text"></p>
                        <p class="bb pad"><strong>I.</strong> <input type="text"></p>
                        <p class="bb pad"><strong>J.</strong> <input type="text"></p>
                        <p class="bb pad"><strong>K.</strong> <input type="text"></p>
                        <p class="bb pad"><strong>L.</strong> <input type="text"></p>
                    </div>
                    <div class="bl">
                        <p class="bb"><br><strong>Title</strong></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                    </div>
                    <div class="bl">
                        <p class="bb"><br><strong>Sections</strong></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                    </div>
                    <div class="bl">
                        <p class="bb"><strong>Data Section Completed</strong></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                        <p class="bb pad"><input type="text"></p>
                    </div>
                </div>
            </div>


           <div class="summary-sig bb pad">
                <div class="pad">
                    <p><span class="badge">Z0500</span> <strong>Signature of Person Verifying Record Completion</strong></p>
                    <p><strong>A. Signature:</strong></p>
                    <input type="text" class="w-100 bb">
                </div>
                <div class="pad bl">
                    <p>&nbsp;</p>
                    <p> <strong>B. Date:</strong></p>
                    <p><input type="code"> <input type="code">/<input type="code"> <input type="code">/<input type="code"> <input type="code"> <input type="code"> <input type="code"><span style="font-size: 10px;">(Month/Day/Year)</span></p>
                </div>
            </div>
            <div class="summary-sig bb pad">
                <div class="pad">
                    <p>Patient Name:</p>
                    <input type="text" class="w-100">
                </div>
                <div class="pad bl">
                    <p>ID #</p>
                    <input type="text" class="w-100">
                </div>
            </div>
            <br>
            <br>
            <br>
        </div>
       
    </div>
</body>

</html>