<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospice Social Initial Assessment Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
            font-size: small;
        }
        body {
            height: 100%;
        }
       
        .wrapper {
            display: flex;
            justify-content: center;
            margin-top: 10vh;
            margin-left: 10vh;
            margin-right: 10vh;
            padding: 20px 0;
            border-radius: 25px;
            background-color: rgba(255, 192, 203, 0.566);
        }
        
        .container{
            width: 85vw;
        }
        .title,
        .header {
            display: flex;
            justify-content: space-between;
        }

        .name,
        .name-1 {
            padding: 3px;
            width: 250px;
            height: 40px;
            border: 1px solid black;
            border-left: none;
            background: #f5f5f5;
            /* border-bottom: none; */
        }

        .name-1 {
            border-right: none;
        }

        h1 {
            font-size: large;
        }

        .h2 {
            text-align: center;
            background: #4c00b0;
            padding: 8px;
            border-radius: 20px;
            outline: none;
            color: white;
        }

        table {
            border-collapse: collapse;
        }

        table td {
            border: 1px solid black;
            height: 30px;
        }

        .grid-container div,
        .grid-container-1 div,
        .grid-container-2 div,
        .grid-container-3 div,
        .grid-container-4 div,
        .grid-container-5 div,
        .grid-container-6 div,
        .grid-container-7 div,
        .grid-container-8 div,
        .grid-container-9 div,
        .grid-container-12 div,
        .grid-container-13 div,
        .grid-container-14 div,
        .grid-container-15 div {
            border: 1px solid black;
            height: 40px;
            padding: 3px;
        }

        .grid-container {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
        }

        .grid-container-1 {
            display: grid;
            grid-template-columns: 2fr 2fr 0.3fr 0.7fr 1fr;
        }

        .grid-container-2 {
            display: grid;
            grid-template-columns: 2fr 1fr 1.7fr .6fr .7fr;
        }

        .grid-container-3 {
            display: grid;
            grid-template-columns: 1fr 2fr .8fr 1fr;
        }

        .grid-container-4 {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .grid-container-5 {
            display: grid;
            grid-template-columns: 1.3fr .7fr 1fr;
        }

        .grid-container-6 {
            display: grid;
            grid-template-columns: 1fr 1fr .5fr .5fr;
        }

        .grid-container-7 {
            display: grid;
            grid-template-columns: .8fr .5fr 1.3fr .8fr;
        }

        .grid-container-9 {
            display: grid;
            grid-template-columns: .8fr 1.6fr;
        }

        .grid-container-10 div,
        .grid-container-11 div {
            border: 1px solid black;
            /* padding: 3px; */
        }

        .grid-container-10 {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .grid-container-10 .content-items {
            padding: 0;
            display: flex;
            justify-content: space-between;
        }

        .grid-container-10 .items {
            border: none;
        }

        .grid-container-11 {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .grid-container-11 .content-items {
            justify-content: space-between;
            padding: 0;
            border: none;
            display: flex;
        }

        .grid-container-11 .items {
            padding: 0;
            border: none;
        }

        .grid-container-12 {
            display: grid;
            grid-template-columns: 1fr 1fr 1.3fr .7fr;
        }

        .grid-container-13 {
            display: grid;
            grid-template-columns: .4fr .2fr 1fr .8fr;
        }

        .grid-container-14 {
            display: grid;
            grid-template-columns: 1.7fr 1.9fr .6fr;
        }

        .grid-container-15 {
            display: grid;
            grid-template-columns: 1fr 1fr 2.8fr .7fr;
        }

        /* page 2 */
        .wrapper-1 {
            display: flex;
            justify-content: center;
            margin-top: 10vh;
        }

        
        .title,
        .header {
            display: flex;
            justify-content: space-between;
        }

        .name,
        .name-1 {
            padding: 3px;
            width: 250px;
            height: 40px;
            border: 1px solid black;
            border-left: none;
            background: #e2e5de;
        }

        .name-1 {
            border-right: none;
        }

        h1 {
            font-size: large;
        }

        .h2 {
            text-align: center;
            background: #4c00b0;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            color: white;
            outline: none;
        }

        .title-ok {
            background: #b289f3;
            border-radius: 10px;
        }

        .bg {
            padding: 8px;
        }

        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            height: 40px;
        }

        .table {
            display: flex;
        }

        .table div {
            flex-grow: 1;
        }

        .grid-container1 div,
        .grid-container-1-2 div,
    
        .grid-container-3-4 div,
        .grid-container-4-5 div {
            border: 1px solid black;
            padding: 3px;
        }

        .grid-container1 {
            display: grid;
            grid-template-columns: 3fr .7fr 3fr .7fr 3fr .7fr;
        }

        .grid-container-1-2 {
            display: grid;
            grid-template-columns: 1fr .3fr 3fr;
        }

        .grid-container-2-3 {
            display: grid;
            grid-template-columns: 1fr;
        }

        .grid-container-2-3 div {
            background: #e2e5de;
            height: 35px;
            border-bottom: none;
            border-left: none;
            border-right: none;
        }

        .grid-container-3-4 {
            height: 35px;
            display: grid;
            grid-template-columns: 3fr .5fr .5fr;
        }

        .grid-container-3-4 div,
        .grid-container-4-5 div {
            background: #e2e5de;
            border-bottom: none;
            border-left: none;
        }

        .grid-container-4-5 {
            height: 35px;
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .flex .items {
            border: none;
            margin: 0;
            padding: 0;
            width: 100%;
        }

        .flex {
            display: flex;
        }

        .box {
            padding: 10px;
            background-color: #b289f3;
            border: 1px solid black;
            /* width: 100%; */
            display: flex;
            flex-direction: column;
            justify-content: center;
            justify-content: space-evenly;
        }

        .box .content {
            display: flex;
        }

        .box-1 {
            width: 100px;
            height: 20px;
            border-radius: 5px;
            border-bottom: 2px solid black;
            background-color: #fff;
        }

        .lines .h2 {
            width: 200px;
        }

        .lines div {
            border-bottom: 1px solid black;
            height: 10px;
        }

        .for {
            display: flex;
            gap: 10px;
        }

        input[type='text'] {
            background-color: transparent;
            outline: 0;
            width: 100%;
            border: none;
            font-size: 14px;
            border-bottom: 1px solid black;
        }
        .flex-user{
            display: flex;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="flex-container">
                <img src="https://i.ibb.co/KhC4SZT/my-dummy-logo.png" width="200" alt="my-dummy-logo" border="0">
            </div>
            <div class="flex-container brand-container">
                <h1 class="text-primary inline-block relative mar-unset pad-unset text-1p8r b-n10">
                    MY COMPANY NAME
                </h1>
            </div>
            <br>
            <br>
            <div class="content">
                <div class="header">
                    <div class="title">
                        <div class="name"><b>Agency S.O.C Date</b><input type="text"></div>
                        <div class="name-1"><b>MSS Evaluation Date</b><input type="text"></div>
                    </div>
                    <div class="title-1 ">
                        <h1>HOSPICE SOCIAL WORKER ASSESSMENT</h1>
                        <p><b>(ADDENDUM TO COMPREHENSIVE ASSESSMENT)</b></p>
                    </div>
                </div>
            </div>
            <style>
                input[type="text-1"] {
                    background-color: transparent;
                    outline: 0;
                    width: 50px;
                    border: none;
                    font-size: 14px;
                    border-bottom: 1px solid black;  
                }
            </style>
            <h2 class="h2">PATIENT DEMOGRAPHICS</h2>
            <div class="grid-container">
                <div>Patient Name: (First, Middle, Last) <input type="text"></div>
                <div>ID# <input type="text"></div>
                <div>Certification Period <br> From: <input type="text-1"> To: <input type="text-1"></div>
            </div>
            <div class="grid-container-1">
                <div>Patient Street Address: <input type="text"></div>
                <div>City <input type="text"></div>
                <div>State <input type="text"></div>
                <div>Zip <input type="text"></div>
                <div>Patient Phone # <input type="text"></div>
            </div>
            <div class="grid-container-2">
                <div>Medicare No. (include suffix,if any) <input type="text"></div>
                <div>Medicaid No. <input type="text"></div>
                <div>Social Security Number <input type="text"></div>
                <div>Birth Date <input type="text"></div>
                <div>Gender <br> <input type="checkbox">M <input type="checkbox">F</div>
            </div>
            <style>
    
                     input[type="text-ok"] {
                    background-color: transparent;
                    outline: 0;
                    width: 50px;
                    border: none;
                    font-size: 14px;
                    border-bottom: 1px solid black;  
                }
            </style>
            <div class="grid-container-3">
                <div>Primary Lang. Spoken<input type="text"></div>
                <div>Interpreter Needed <input type="checkbox"> Yes <input type="checkbox"> No<br>Non-Verbal <input
                        type="checkbox"> Yes <input type="checkbox"> No <input type="checkbox"> Sign Languange </div>
                <div>Physician's Name: <input type="text"></div>
                <div>Physician's Phone<input type="text"></div>
            </div>
            <div class="grid-container-4">
                <div>Principal Diagnosis <input type="text"></div>
                <div>Surgical Procedures <input type="text"></div>
            </div>
            <p style="margin-bottom: 20px;">Other Pertinent Diagnoses <input type="text"></p> 
            <h2 class="h2">PATIENT / FAMILY HISTORY</h2>
            <style>
                 input[type="text-3"] {
                    background-color: transparent;
                    outline: 0;
                    width: 80%;
                    border: none;
                    font-size: 14px;
                    border-bottom: 1px solid black;  
                }
            </style>
            <div class="grid-container-5">
                <div><b>Household Composition:</b>  <br> Name: <input type="text-3"> </div>
                <div>DOB/Age <input type="text"></div>
                <div>Relationship <input type="text"></div>
            </div>
            <div class="grid-container-5">
                <div>Name <input type="text"></div>
                <div>DOB/Age <input type="text"></div>
                <div>Relationship <input type="text"></div>
            </div>
            <div class="grid-container-5">
                <div>Name <input type="text"></div>
                <div>DOB/Age <input type="text"></div>
                <div>Relationship <input type="text"></div>
            </div>
            <style>
                 input[type="text-4"] {
                    background-color: transparent;
                    outline: 0;
                    width: 88.9%;
                    border: none;
                    font-size: 14px;
                    border-bottom: 1px solid black;  
                }
            </style>
            <div class="grid-container-6">
                <div><b>Significant Others Outside the Home: <br></b> Name: <input type="text-4"></div>
                <div>Address <input type="text"></div>
                <div>Relationship <input type="text"></div>
                <div>Phone <input type="text"></div>
            </div>
            <div class="grid-container-6">
                <div>Name <input type="text"></div>
                <div>Address <input type="text"></div>
                <div>Relationship <input type="text"></div>
                <div>Phone <input type="text"></div>
            </div>
            <div class="grid-container-6">
                <div>Name <input type="text"></div>
                <div>Address <input type="text"></div>
                <div>Relationship <input type="text"></div>
                <div>Phone <input type="text"></div>
            </div>
            <style>
                input[type="text-2"]{
                    background-color: transparent;
                    outline: 0;
                    width: 80%;
                    border: none;
                    font-size: 14px;
                    border-bottom: 1px solid black;  
                }
                input[type="text-10"]{
                    background-color: transparent;
                    outline: 0;
                    width: 40%;
                    border: none;
                    font-size: 14px;
                    border-bottom: 1px solid black; 
                }
            </style>
            <div class="grid-container-7">
                <div>Marital History Wedding Anniversarry <input type="text-10"></div>
                <div>No. of children <input type="text"></div>
                <div><b>Employment History:</b><br>Patient: <input type="text-2"></div>
                <div>Primary Caregiver: <input type="text"></div>
            </div>
            <div class="grid-container-8">
                <div><b>Patient/Family's prior experience with death, illness, and how well they coped:</b> <input type="text"></div>
                <div><b>Patient/Family adjustment to terminal illness:</b> <input type="text"></div>
                <div><b>Family dynamics and communication patterns:</b> <input type="text"></div>
                <div><b>Family support systems to help facilitate coping with end of life issues:</b><input type="text"></div>
            </div>
            <div class="grid-container-9">
                <div><b>Support Systems:</b><br><input type="checkbox"> Poor <input type="checkbox"> Good <input
                        type="checkbox"> Excellent</div>
                <div><b>Source of Support:</b><input type="text"></div>
            </div>
            <div class="grid-container-8">
                <div><b>Adequate coping mechanisms:</b><br><input type="checkbox"> Yes <input type="checkbox"> No</div>
                <div><b>Obstacles/Risk Factors that may effecct Plan of Care:</b><input type="text"></div>
            </div>
            <div class="grid-container-4">
                <div><b>Is Family/Caregiver capable of providing care?</b><br><input type="checkbox"> Yes <input
                        type="checkbox"> No &nbsp;&nbsp;&nbsp;&nbsp;Describe:</div>
                <div>Cultural/Ethical Considerations: <br><input type="checkbox"> Yes <input type="checkbox"> No
                    &nbsp;&nbsp;&nbsp;&nbsp;Describe:</div>
            </div>
            <h2 class="h2">SOCIAL / EMOTIONAL ASSESSMENT</h2>
            <div class="grid-container-10">
                <div class="content-items">
                    <div class="items"><b>Social Interactions <br></b><input type="checkbox">Social Isolation <br><input
                            type="checkbox">Abusive relationships</div>
                    <div class="items"><input type="checkbox"> No deficit <br><input type="checkbox"> Relationship
                        problems <br><input type="checkbox"> Dependent on others</div>
                    <div class="items"><br><input type="checkbox"> Noncompliant <br><input type="checkbox"> Other: 
                       <br> <input type="text"></div>
                </div>
                <div class="content-items">
                    <div class="items"><b>Mental/Emotional Status</b> <br><input type="checkbox"> Altered affect
                        <br><input type="checkbox"> Depressed</div>
                    <div class="items"><input type="checkbox"> Anger <br><input type="checkbox"> Anxious <br><input
                            type="checkbox"> No deficit</div>
                    <div class="items"><input type="checkbox"> Suicidal <br><input type="checkbox"> Feelings of
                        helplessness/hopelessness <br><input type="checkbox"> Other: <br> <input type="text"></div>
                </div>
            </div>
            <h2 class="h2">PHYSICAL / FUNCTIONAL ASSESSMENT</h2>
            <div class="grid-container-11">
                <div>
                    <b>Physical Ability</b>
                    <div class="content-items">
                        <div class="items"><input type="checkbox"> Altered ability to ambulate <br><input
                                type="checkbox"> Presence of pain <br><input type="checkbox"> Altered: <input
                                type="checkbox"> hearing <input type="checkbox"> speech <input type="checkbox"> vision
                        </div>
                        <div class="items"><input type="checkbox"> Altered ability to communicate <br><input
                                type="checkbox"> Chronic illness <br><input type="checkbox">
                            Other: <br> <input type="text"></div>
                    </div>
                </div>
                <div>
                    <b>Functionality ability</b>
                    <div class="content-items">
                        <div class="items"><input type="checkbox"> Requires assistance with ADLs <br><input
                                type="checkbox"> Requires meal prep/feeding assistance <br><input type="checkbox">
                            Requires assisstance with transportation</div>
                        <div class="items"><input type="checkbox"> Requires assistance with housekeeping <br><input
                                type="checkbox"> Other: <input type="text"></div>
                    </div>
                </div>
            </div>
            <h2 class="h2">ENVIRONMENTAL / CAREGIVER SUPPORT SYSTEMS</h2>
            <div class="grid-container-11">
                <div>
                    <b>Environmental</b>
                    <div class="content-items">
                        <div class="items">
                            <input type="checkbox"> No deficit <br> <input type="checkbox"> Fire hazard/safety issues
                            <br> <input type="checkbox"> Absence of needed adaptive <br> devices or equipment/supplies
                        </div>
                        <div class="items">
                            <input type="checkbox"> Unfit housing <br> <input type="checkbox"> Unsafe neighborhood <br>
                            <input type="checkbox"> Other: <input type="text">
                        </div>
                    </div>
                </div>
                <div>
                    <b>Caregiver Support Systems</b>
                    <div class="content-items">
                        <div class="items">
                            <input type="checkbox"> No deficit <br> <input type="checkbox"> Absence of needed caregiver
                        </div>
                        <div class="items">
                            Lives with: <br> <input type="checkbox"> Self <input type="checkbox"> Friend <input
                                type="checkbox"> Child <input type="checkbox"> Spouse <input type="checkbox"> Sibling
                            <br> Other: <input type="text">
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="h2">FINANCIAL</h2>
            <div class="grid-container-11">
                <div>
                    <b>Financial</b>
                    <div class="content-items">
                        <div class="items">
                            <input type="checkbox"> No financial factors identified <br> <input type="checkbox"> Unable
                            to meet monthly expenses <br> <input type="checkbox"> Problems with excess spending <br>
                            <input type="checkbox"> Unable to afford medications
                        </div>
                        <div class="items">
                            <input type="checkbox"> Medical need not met by <br> Medicare, Medicaid or Private Insurance
                            <br> <input type="checkbox"> Unable to manage own finances <br> <input type="checkbox">
                            Other: <input type="text">
                        </div>
                    </div>
                </div>
                <div>
                    <b>Lives in:</b>
                    <div class="content-items">
                        <div class="items">
                            <input type="checkbox"> Own home <br> <input type="checkbox"> Rental home <br> <input
                                type="checkbox"> Apartment
                        </div>
                        <div class="items">
                            <input type="checkbox"> Assisted living <br> <input type="checkbox"> Group home <br> <input
                                type="checkbox"> Family member's home
                        </div>
                        <div class="items">
                            <input type="checkbox"> Other: <input type="text">
                            
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="h2">SPIRITUAL ASSESSMENT</h2>
            <div class="grid-container-12">
                <div>Is Patient/Family affiliated <br> with a church<input type="checkbox"> Yes <input
                        type="checkbox"> No</div>
                <div>Church Name:<input type="text"></div>
                <div>Address: <input type="text"></div>
                <div>Phone: <input type="text"></div>
            </div>
            <div class="grid-container-13">
                <div>Clergy Name:<input type="text"></div>
                <div>Phone: <input type="text"></div>
                <div>Does Patient/Family wish their Clergy to be contacted by the Hospice Team?<input
                        type="checkbox"> Yes <input type="checkbox"> No</div>
                <div>Does Patient/Family wish contact <br> from the Hispice Clergy?<input type="checkbox"> Yes
                    <input type="checkbox"> No</div>
            </div>
            <div class="grid-container-14">
                <div>Have funeral arrangements been made? <br><input type="checkbox"> Yes <input
                        type="checkbox"> No <input type="checkbox"> Not discussed</div>
                <div>Funeral Home Name: 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone: 
                    <input type="text">
                </div>
                <div>Comments: <input type="text"></div>
            </div>
            <style>
                 input[type="text-5"] {
                    background-color: transparent;
                    outline: 0;
                    width: 30%;
                    border: none;
                    font-size: 14px;
                    border-bottom: 1px solid black;  
                }
            </style>
            <div class="grid-container-15">
                <div>Advance Directives:<br><input type="checkbox"> Yes <input type="checkbox"> No</div>
                <div>Intent: <br><input type="checkbox"> DNR <input type="checkbox"> Living Will</div>
                <div><input type="checkbox"> Medical Power of Attorney: <br> Name:
                   <input type="text-5"> Phone: <input type="text-5">
                </div>
                <div>Other: <input type="text"></div>
            </div>
            <div class="grid-container-8">
                <div>Copies on File at Agency? <br> <input type="checkbox"> Yes <input type="checkbox"> No if no,
                    describe patient's wishes</div>
                <div><b>Patient's Knowledge/Perception of Diagnosis and Prognosis:</b><input type="text"></div>
                <div><br><input type="text"></div>
            </div>
            <!-- page 2 -->
            <div class="wrapper-1">
                <div class="container">
                    <div class="content">
                        <div class="header">
                            <div class="title">
                                <div class="name"><b>Patient Name</b> <input type="text"></div>
                                <div class="name-1"><b>ID#</b><input type="text"></div>
                            </div>
                            <div class="title-1 ">
                                <h1>HOSPICE SOCIAL WORKER ASSESSMENT</h1>
                                <p><b>(ADDENDUM TO COMPREHENSIVE ASSESSMENT)</b></p>
                            </div>
                        </div>
                        <div class="title-ok">
                            <h2 class="h2">FAMILY / CAREGIVER BEREAVEMENT RISK FACTORS</h2>
                            <div class="bg"><b><i>Risk for Complicated Bereavement: Check appropriate answer and circle
                                        corresponding points. Add points to determine level of risk.</i></b></div>
                        </div>
                        <div class="grid-container1">
                            <div style="background:#b289f3;"><b>Number of children at home <br> under 14 years of
                                    age:</b></div>
                            <div style="text-align: center; background:#b289f3; "><b>POINTS</b></div>
                            <div style="background:#b289f3; background:#b289f3;"><b>Does the patient seem to be the <br>
                                    only person in the caregiver's life</b></div>
                            <div style="text-align: center; background:#b289f3;"><b>POINTS</b></div>
                            <div style="background:#b289f3;"><b>Perceived/received support</b></div>
                            <div style="text-align: center; background:#b289f3;"><b>POINTS</b></div>
                        </div>
                        <div class="grid-container1">
                            <div><input type="checkbox"> None</div>
                            <div style="text-align: center;">1</div>
                            <div><input type="checkbox"> Has another important relationship</div>
                            <div style="text-align: center;">1</div>
                            <div><input type="checkbox"> Excellent support</div>
                            <div style="text-align: center;">1</div>
                        </div>
                        <div class="grid-container1">
                            <div><input type="checkbox"> One</div>
                            <div style="text-align: center;">2</div>
                            <div><input type="checkbox"> Most important relationship</div>
                            <div style="text-align: center;">2</div>
                            <div><input type="checkbox"> Good support</div>
                            <div style="text-align: center;">2</div>
                        </div>
                        <div class="grid-container1">
                            <div><input type="checkbox"> Two</div>
                            <div style="text-align: center;">3</div>
                            <div><input type="checkbox"> Only important relationship</div>
                            <div style="text-align: center;">3</div>
                            <div><input type="checkbox"> Some support</div>
                            <div style="text-align: center;">3</div>
                        </div>
                        <div class="grid-container1">
                            <div><input type="checkbox"> Three</div>
                            <div style="text-align: center;">4</div>
                            <div style="background:#b289f3;"><b>Other relationships of caregiver</b><br><i>(not
                                    including patient)</i></div>
                            <div style="text-align: center; background: #b289f3;"><b>POINTS</b></div>
                            <div><input type="checkbox"> No support</div>
                            <div style="text-align: center;">4</div>
                        </div>
                        <div class="grid-container1">
                            <div><input type="checkbox"> Four</div>
                            <div style="text-align: center;">5</div>
                            <div><input type="checkbox"> Close relationship with another</div>
                            <div style="text-align: center;">1</div>
                            <div style="background-color: #b289f3;"><b>Signficant or majoy changes or events</b></div>
                            <div style="text-align: center; background-color: #b289f3;"><b>POINTS</b></div>
                        </div>
                        <div class="grid-container1">
                            <div><input type="checkbox"> Five or more</div>
                            <div style="text-align: center;">6</div>
                            <div><input type="checkbox"> Warm supportive famiy expressing feelings</div>
                            <div style="text-align: center;">2</div>
                            <div><input type="checkbox"> Not apparent</div>
                            <div style="text-align: center;">1</div>
                        </div>
                        <div class="grid-container1">
                            <div style="background-color: #b289f3;"><b>Dependance on patient</b></div>
                            <div style="text-align: center; background-color: #b289f3;"><b>POINTS</b></div>
                            <div><input type="checkbox"> Some support apparent or caring <br>persons living at a
                                distance</div>
                            <div style="text-align: center;">3</div>
                            <div><input type="checkbox"> Yes, but manageable</div>
                            <div style="text-align: center;">2</div>
                        </div>
                        <div class="grid-container1">
                            <div><input type="checkbox"> Caregiver has been self supporting</div>
                            <div style="text-align: center;">1</div>
                            <div><input type="checkbox"> Doubtful or not knowing</div>
                            <div style="text-align: center;">4</div>
                            <div><input type="checkbox"> Several and/or serious</div>
                            <div style="text-align: center;">3</div>
                        </div>
                        <div class="grid-container1">
                            <div><input type="checkbox"> Caregiver has substantial home making skills</div>
                            <div style="text-align: center;">2</div>
                            <div><input type="checkbox"> Troubled family relationships</div>
                            <div style="text-align: center;">5</div>
                            <div style="background-color: #b289f3;"><b>Caregiver's Predicted Coping</b></div>
                            <div style="text-align: center; background-color: #b289f3;"><b>POINTS</b></div>
                        </div>
                        <div class="grid-container1">
                            <div><input type="checkbox"> Caregiver will have reduced income</div>
                            <div style="text-align: center;">3</div>
                            <div></div>
                            <div style="text-align: center;"></div>
                            <div><input type="checkbox"> Good, no special help</div>
                            <div style="text-align: center;">1</div>
                        </div>
                        <div class="grid-container1">
                            <div><input type="checkbox"> Patient has been sole homemaker</div>
                            <div style="text-align: center;">4</div>
                            <div></div>
                            <div style="text-align: center;"></div>
                            <div><input type="checkbox"> Fair, probably no help</div>
                            <div style="text-align: center;">2</div>
                        </div>
                        <div class="grid-container1">
                            <div><input type="checkbox"> Patient has been sole wage earner</div>
                            <div style="text-align: center;">5</div>
                            <div></div>
                            <div style="text-align: center;"></div>
                            <div><input type="checkbox"> Doubtful, may need help</div>
                            <div style="text-align: center;">3</div>
                        </div>
                        <div class="grid-container1">
                            <div></div>
                            <div style="text-align: center;"></div>
                            <div></div>
                            <div style="text-align: center;"></div>
                            <div><input type="checkbox"> Very poor, urgent help</div>
                            <div style="text-align: center;">4</div>
                        </div>
                        <div class="flex">
                            <div>
                                <div class="grid-container-1-2">
                                    <div style="background-color: #b289f3;"><b>Anticipated employment of caregiver</b>
                                    </div>
                                    <div style="text-align: center; background-color: #b289f3;"><b>POINTS</b></div>
                                    <div style="background-color: #b289f3;"><b>Perceived relationship with patient</b>
                                    </div>
                                </div>
                                <div class="grid-container-1-2">
                                    <div><input type="checkbox"> Will work full-time</div>
                                    <div style="text-align: center;">1</div>
                                    <div class="flex">
                                        <div class="items">Stable</div>
                                        <div class="items"><b>1 2 3 4 5</b> </div>
                                        <div class="items">Unstable</div>
                                    </div>
                                </div>
                                <div class="grid-container-1-2">
                                    <div><input type="checkbox"> Will work part-time</div>
                                    <div style="text-align: center;">2</div>
                                    <div class="flex">
                                        <div class="items">Open</div>
                                        <div class="items"><b>1 2 3 4 5</b></div>
                                        <div class="items">Closed</div>
                                    </div>
                                </div>
                                <div class="grid-container-1-2">
                                    <div><input type="checkbox"> Will do volunteer work</div>
                                    <div style="text-align: center;">3</div>
                                    <div class="flex">
                                        <div class="items">Mutually supportive</div>
                                        <div class="items"><b>1 2 3 4 5</b></div>
                                        <div class="items">Unsupportive</div>
                                    </div>
                                </div>
                                <div class="grid-container-1-2">
                                    <div><input type="checkbox"> Retirement</div>
                                    <div style="text-align: center;">4</div>
                                    <div class="flex">
                                        <div class="items">Harmonious/Mutually respectful</div>
                                        <div class="items"><b>1 2 3 4 5</b></div>
                                        <div class="items">Troubled/Conflicted</div>
                                    </div>
                                </div>
                                <div class="grid-container-1-2">
                                    <div><input type="checkbox"> Homemaker</div>
                                    <div style="text-align: center;">5</div>
                                    <div class="flex">
                                        <div class="items">No noted unresolved issues</div>
                                        <div class="items"><b>1 2 3 4 5</b></div>
                                        <div class="items">Many unsolved issues</div>
                                    </div>
                                </div>
                                <div class="grid-container-1-2">
                                    <div><input type="checkbox"> Unemployment, job-seeking</div>
                                    <div style="text-align: center;">6</div>
                                    <div class="flex">
                                        <div class="items"></div>
                                        <div class="items"></div>
                                        <div class="items"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div>
                                    <b>TOTAL POINTS: </b>
                                    <div class="box-1"><input type="text"></div>
                                </div>
                                <p><b><input type="checkbox"> Low-Risk - </b>(13-22 points)</p>
                                <p><b><input type="checkbox"> Moderate-Risk - </b>(23-44 points)</p>
                                <p><b><input type="checkbox"> High-Risk - </b>(over 45 points)</p>
                                <p><i>(include in IDG Care Plan)</i></p>
                            </div>
                        </div>
                        <div class="lines">
                            <h2 class="h2">PROBLEMS IDENTIFIED</h2>
                            <div><input type="text"></div> <br>
                            <div><input type="text"></div> <br>
                            <div><input type="text"></div> <br>
                            <div><input type="text"></div> <br>
                            <div><input type="text"></div> <br>
                        </div>
                        <h2 class="h2">SOCIAL WORKER ORDERS</h2>
                        <p><b>Frequency/Duration of SW Visits: <input type="text">
                            </b>
                        </p>
                        <style>
                            input[type="text-7"] {
                                background-color: transparent;
                                outline: 0;
                                width: 39vw;
                                border: none;
                                font-size: 14px;
                                border-bottom: 1px solid black;  
                            }
                            input[type="text-other"] {
                                background-color: transparent;
                                outline: 0;
                                width: 75%;
                                border: none;
                                font-size: 14px;
                                border-bottom: 1px solid black;  
                            } 
                            input[type="text-others"] {
                                background-color: transparent;
                                outline: 0;
                                width: 48%;
                                border: none;
                                font-size: 14px;
                                border-bottom: 1px solid black;  
                            } 
                        </style>
                        <div class="for">
                            <p><b>For:</b></p>
                            <div>
                                <p><input type="checkbox"> Counseling for long-range planning/decision making</p>
                                <p><input type="checkbox"> Counseling to assist family/patient with coping and in home
                                    plan/management of illness</p>
                                <p><input type="checkbox"> Counseling for emotional management of:
                                    <input type="text-others"></p>
                                <p><input type="checkbox"> Counseling other:
                                    <input type="text-other"></p>
                                <p><input type="checkbox"> Financial counseling/linkage for additinal resources</p>
                            </div>
                            <div>
                                <p><input type="checkbox"> Volunteer Services</p>
                                <p><input type="checkbox"> Evaluation of psychosocial factors and provide interventions
                                </p>
                                <p><input type="checkbox"> Other: <input type="text-7"></p> <br>
                                <p><input type="checkbox"> Other: <input type="text-7"></p>
                            </div>
                        </div>
                        <style>
                             input[type="text-a"] {
                                background-color: transparent;
                                outline: 0;
                                width: 35%;
                                border: none;
                                font-size: 14px;
                                border-bottom: 1px solid black;  
                            }
                            input[type="text-b"] {
                                background-color: transparent;
                                outline: 0;
                                width: 8vw;
                                border: none;
                                font-size: 14px;
                                border-bottom: 1px solid black;  
                            }
                        </style>
                        <h2 class="h2">GOALS / OUTCOMES</h2>
                        <p><input type="checkbox"> Patient's Social/Emotioal Needs will be met, as evidenced by
                            <input type="text-a"> within <input type="text-b">
                            period of time</p>
                        <p><input type="checkbox"> Patient will be in a safe physical environment, as evidenced by
                            <input type="text-a"> within <input type="text-b">
                            period of time </p>
                        <p><input type="checkbox"> Patient will have financial needs met that adversely effect care, as
                            evidenced by <input type="text-a"> within <input type="text-b">
                            period of time</p>
                        <p><input type="checkbox"> Patient/Caregiver's Expectations
                           <input type="text-a">
                        </p>
                        <p><input type="checkbox"> Other
                            <input type="text-a">
                            within <input type="text-b"> period of time</p>
                        <br>
                        <div class="grid-container-2-3">
                            <div><b>SPECIFIC GOALS/OUTCOMES <br>Short-Term:</b></div>
                        </div>
                        <div class="grid-container-2-3">
                            <div><input type="text"></div>
                        </div>
                        <div class="grid-container-2-3">
                            <div><input type="text"></div>
                        </div>
                        <div class="grid-container-2-3">
                            <div><input type="text"></div>
                        </div>
                        <div class="grid-container-2-3">
                            <div><input type="text"></div>
                        </div>
                        <div class="grid-container-2-3">
                            <div><input type="text"></div>
                        </div>
                        <div class="grid-container-2-3">
                            <div><input type="text"></div>
                        </div>
                        <div class="grid-container-2-3">
                            <div><input type="text"></div>
                        </div>
                        <div class="grid-container-2-3">
                            <div><b>Long term:</b></div>
                        </div>
                        <div class="grid-container-2-3">
                            <div><input type="text"></div>
                        </div>
                        <div class="grid-container-2-3">
                            <div><input type="text"></div>
                        </div>
                        <div class="grid-container-2-3">
                            <div><input type="text"></div>
                        </div>
                        <div class="grid-container-2-3">
                            <div><input type="text"></div>
                        </div>
                        <div class="grid-container-2-3">
                            <div><input type="text"></div>
                        </div>
                        <div class="grid-container-3-4">
                            <div><b>SW Signiture & Date of Verbal SOC Where Applicable</b><input type="text"></div>
                            <div><b>Time</b><input type="text"></div>
                            <div style="border-right: none;"><b>Time out</b><input type="text"></div>
                        </div>
                        <div class="grid-container-4-5">
                            <div><b>PATIENT SIGNATURE (optional per Hospice policy & procedure)</b> <input type="text"></div>
                            <div style="border-right: none;"><b>PHYSICIAN SIGNATURE / DATE (optional per Hospice policy
                                    & procedure) <input type="text"></b></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>