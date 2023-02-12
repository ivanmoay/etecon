<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bereavement Initial Assessment</title>

    <style>
        :root {
            --background-gray: #ccc8c8;
            --background-black: #000000;
            --background-grayish-black: #6f6e6e;
            --heading-size: 1.5rem;
            --sub-heading-size: 1rem;
            --text-size: 14px;
            --text-color: #000000;
            --border: 1px solid black;
            --padding: 5px 8px;
            --gap: 3px;

            --form-width: 100%;
            --form-height: auto;
            --form-padding: 1rem;
            --form-border-radius: 15px;

            --container-width: 100%;
            --container-border-radius: 8px;

        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body,
        html {
            margin: 2rem 3rem;
            font-family: 'Roboto', sans-serif;
            color: var(--text-color);
            height: 100%;
        }

        div.title {
            font-weight: bold;
            text-align: end;
        }

        h1 {
            font-size: var(--heading-size);
        }

        h2 {
            font-size: var(--sub-heading-size);
        }

        p {
            font-size: var(--text-size);
            padding: var(--padding);
            padding-left: 0;
        }

        .form-container {
            width: 100%;
            height: auto;
            margin-top: 8px;
            padding: var(--form-padding);
            background-color: var(--background-gray);
            border-radius: var(--form-border-radius);

            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .container {
            line-height: 100%;
            width: 100%;
            border: var(--border);
            padding: var(--form-padding);
            background-color: white;
            border-radius: var(--container-border-radius);
        }

        .border-left {
            border-left: var(--border);
        }

        .signature {
            display: grid;
            background-color: #ccc8c84a;
            height: 3rem;
            width: 100%;
            margin: 1rem 0;
            border: 1px solid black;
            grid-template-columns: 3fr 1fr;
            border-radius: var(--form-border-radius);
            padding: var(--padding);
            background-color: white;
        }

        h2.heading {
            font-size: var(--sub-heading-size);
            background-color: var(--background-black);
            color: #ffffff;
            padding: var(--padding);
        }

        .patient-info {
            padding: var(--form-padding);
            padding-bottom: 0;
            font-size: var(--text-size);
            display: flex;
            justify-content: space-between;
        }

        .patient-info>div {
            height: 2.4rem;
            padding: var(--padding);
            background-color: var(--background-gray);
            border: var(--border);
            border-radius: var(--container-border-radius);
            width: 15rem;
        }

        .form {
            background-color: white;
            width: 100%;
        }

        .form1,
        .form2 {
            border: var(--border);
            border-radius: var(--container-border-radius);
            padding: var(--padding);

        }

        .assessment-heading {
            grid-area: assessment-heading;
            text-align: center;
        }

        .form1-left {
            background-color: blue;
            width: var(--form-width);
            height: 10rem;
        }

        .form1-right {
            background-color: green;
            width: var(--form-width);
            height: 10rem;
        }

        .demo {
            border: 1px solid #C0C0C0;
            border-collapse: collapse;
            padding: 5px;
            min-width: 100%;
        }

        .demo th {
            border: 1px solid #C0C0C0;
            background: #F0F0F0;
        }

        .demo td {
            border: 1px solid #000000;
            padding: 5px;
        }

        table {
            border-spacing: 0;
        }

        .choices-container {
            display: flex;
            gap: 5px;
            justify-content: space-around;
            border: 0;
        }

        .choices {
            background-color: gray;
            padding: 0;
            font-weight: bold;
            margin: 0;
            height: 3rem !important;
            text-align: end;
        }

        .table-container {
            padding: 0;
            margin: 0;

            display: grid;

            line-height: 100%;
        }

        .cont1,
        .cont2 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
        }


        .cont3 {
            display: grid;
            grid-template-columns: 1fr 2fr;
        }


        .cont3-sikan {
            display: grid;
            grid-template-columns: 2fr 1fr;
        }

        .flex {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .flex-items {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            flex-shrink: 0;
            flex-grow: 1;
        }

        .points,
        td.points {
            background-color: var(--background-gray);
            font-weight: bold;
        }

        .patient-fill {
            background-color: var(--background-gray);
            margin-top: 1.2rem;
            border-radius: var(--form-border-radius);
            padding: var(--form-padding);
            padding-bottom: 0;
            padding-top: 0;
            font-size: var(--text-size);
            display: grid;
            grid-template-columns: 2fr 1fr;
        }

        .patient-fill>div {
            height: 2.4rem;
            padding-top: 8px;
            padding-left: 5px;
        }

        .form2-container {
            background-color: var(--background-gray);
            height: auto;
            padding: var(--padding);
            border-radius: var(--form-border-radius);
            margin-top: 1rem;
            display: grid;
        }

        .interventions {
            background-color: white;
            border-radius: var(--form-border-radius);
            padding: 1.2rem 5px;
            height: auto;
        }

        .interventions-choices {
            background-color: var(--background-gray);
            height: 2.5rem;
            text-align: center;
            font-weight: bold;
            border: 1px solid black;
        }


        .table {
            width: 100%;
            line-height: 100%;
            display: grid;
            grid-auto-flow: column;
            grid-template-columns: 5fr 1fr 1fr 1fr 1fr;
        }


        .monthly-contacts {
            background-color: white;
            margin: 1rem 0;
            font-weight: bold;
        }

        .monthly-contacts>div,
        p {
            border: 1px solid black;
        }


        .contacts-table {
            display: grid;
            grid-auto-flow: column;
            grid-template-columns: repeat(10 1fr);
        }

        .contacts-table>p {
            border: 1px solid black;
            text-align: center;
            background-color: var(--background-gray);
        }

        .bold-center {
            font-weight: bold;
            text-align: center;
        }

        .closure-container {
            border-radius: var(--form-border-radius);
            background-color: white;
        }

        .brand-container {
            position: absolute;
            width: 17rem;
            top: -45px;
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
    <div class="brand-container">
        <div class="flex-container">
            <img src="https://i.ibb.co/kSr11h4/final.png" width="200" alt="final" border="0">
        </div>
    </div>
    <div class="main">
        <div class="title">
            <h1>BEREAVEMENT INITIAL ASSESSMENT/CARE PLAN</h1>
            <h2>(ADDENDUM TO COMPREHENSIVE ASSESSMENT) Continued</h2>
        </div>


        <div class="form2-container">
            <div class="patient-info">
                <div>Start of Care: <input type="text"></div>
                <div>Date of Death: <input type="text"></div>
                <div>ID#: <input type="text"></div>
            </div>

            <div class="form-container">
                <div class="form form1" style="background-color: white; margin: 0; padding: 0;">
                    <table class="demo">
                        <thead>
                            <tr style="text-align: left;">
                                <th colspan="3" style="width: 50%; ">
                                    <h2 class="heading">FAMILY/CAREGIVER</h2>
                                </th>
                                <th colspan="3" style="width: 50%;">
                                    <h2 class="heading">PATIENT</h2>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2"><span style="position:absolute;top:240px;font-size:14px;">Name:</span><input type="text">
                                </td>
                                <td style="width:7%;">
                                    <style>

                                    </style>
                                    <div style=" text-align: left;">
                                        <span class="haha"><input type="checkbox"> M<br>
                                            <input type="checkbox"> F</span>
                                    </div>
                                </td>
                                <td colspan="2"><span style="position:absolute;top:240px;font-size:14px;">Name:</span><input type="text">
                                </td>
                                <td style="width:13%;"><span style="position:absolute;top:240px;font-size:14px;">Date of
                                        Birth:</span>
                                        <input type="text">
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-bottom:20px" colspan="3"><span
                                        style="font-size: 12px;">Addess:</span> <input type="text">
                                </td>
                                <td colspan="3"><span
                                        style="position:absolute;top:300px;font-size:14px;">Diagnosis:</span> <input type="text">
                                </td>
                            </tr>
                    </table>
                    <table class="demo">
                        <tr>

                            <td style="padding-bottom:20px;width:30%" colspan="2"><span style="font-size:14px">Phone:
                                    (Home)</span> <input type="text"></td>
                            <td><span style="width:50%;font-size:12px;position:absolute;top:365px;">(Work)</span><input type="text"></td>

                            <td style="padding-bottom:20px;width:30%" colspan="2"><span
                                    style="font-size:12px">Nurse:</span><input type="text">
                            </td>
                            <td style="width:20%"><span style="position:absolute;top: 365px;font-size:14px;">Social
                                    Worker:</span> <input type="text"></td>
                        </tr>
                        <tr>
                            <td style="padding-bottom:20px; " colspan="3"><span style="font-size:14px">Relationship to
                                    Patient:</span><input type="text"></td>
                            <td colspan="3"><span style="font-size:14px;position: absolute;top:425px;">Spiritual
                                    Counselor:</span><input type="text"></td>
                        </tr>
                        <style>
                            input[type="text-other"]{
                                outline: 0;
                                border: none;
                                width:63.5%;
                                font-size: 14px;
                                border-bottom: 1px solid black;
                            }
                        </style>
                        <tr>
                            <td colspan="6"> Type of Contract:&nbsp;&nbsp;
                                <input type="checkbox"> Visit &nbsp;&nbsp;
                                <input type="checkbox"> Phone &nbsp;&nbsp;
                                <input type="checkbox"> Other, Explain: <input type="text-other">
                            </td>
                            <tbody>
                    </table>
                </div>


                <div class="form form2" style="background-color: white; margin: 0; padding: 0;">
                    <table class="demo">
                        <thead>
                            <style>
                                .t {
                                    width: 0%;

                                }
                            </style>

                            <th></th>
                            <th class="t">YES</th>
                            <th class="t">NO</th>
                            <th class="t">NA</th>
                            <th></th>
                            <th class="t">YES</th>
                            <th class="t">NO</thno>
                            <th class="t">NA</th>

                            <div style="text-align: center;">
                                <h2 class="heading">ASSESSMENT</h2>
                            </div>
                            </tr>
                        </thead>
                        <tbody>

                            <td style="width: 35.1%;">Are there dependent family members (disable, elderly, <br> sick
                                children)?</td>
                            <td style="width: 9.5rem;">&nbsp;</td>
                            <td style="width: 8.7rem;">&nbsp;</td>
                            <td style="width: 8.6rem;">&nbsp;</td>
                            <td class="border-left" style="border-left: 0px solid black;">Is death prepared for?</td>
                            <td class="unik" style="width: 5.9rem;">&nbsp;</td>
                            <td class="unik line2" style="width: 5.4rem;">&nbsp;</td>
                            <td class="unik line3" style="width: 4.5rem;">&nbsp;</td>
                            </tr>

                            <tr>
                                <td>Will patient's death result in loss of financial provision?</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>Is the family/caregiver accepting of the impending death?</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Has there been previous experience dealing with loss?</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>Will the damily/caregiver resolve issues with the patient?</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Is there a history of emotional problems or drug/alcohol abuse? if yes, specify:
                                </td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>Are there any legal issues affecting the family? if yes, specify:</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Is there a history of physical or emotional abuse? if yes, specify:</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>Are there any health concerns affecting the family? if yes, specify:</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Is the family/caregiver involved in the care of the patient?</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>Does the current emotional status reflect feelings of despair. anger, guilt or
                                    abandonment?</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        <tbody>
                    </table>
                </div>
                <style>
                    th {
                        background: gray;
                    }
                </style>
                <div class="container">
                    <div class="headers" style="text-align: center;">
                        <h2 class="heading">FAMILY/CAREGIVER BEREAVEMENT RISK FACTORS</h2>
                        <p style="background-color: var(--background-grayish-black);line-height: 100%;">Risk for
                            Complicated
                            Bereavement:
                            Check appropriate answer and circle corresponding points. Add
                            points to determine level of risk.</p>
                    </div>
                    <div class="table-container" style="line-height:100%">
                        <table class="table1" style="width: 100%;line-height:100%;font-size:14px">
                            <th>number of children at home under 14 years of age?</th>
                            <th>POINTS</th>
                            <th>Does the patient seem to be the only person in the caregiver's life?</th>
                            <th>POINTS</th>
                            <th>Perceived/received support</th>
                            <th>POINTS</th>
                            <tr>
                                <td><input type="checkbox" name="" id=""> None</td>
                                <td style="text-align:center">1</td>
                                <td><input type="checkbox" name="" id=""> Has another inportatant relationship</td>
                                <td style="text-align:center">1</td>
                                <td><input type="checkbox" name="" id=""> Exellent support</td>
                                <td style="text-align:center">1</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""> One</td>
                                <td style="text-align:center">2</td>
                                <td><input type="checkbox" name="" id=""> Most important relationship</td>
                                <td style="text-align:center">2</td>
                                <td><input type="checkbox" name="" id=""> Good support</td>
                                <td style="text-align:center">2</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""> Two</td>
                                <td style="text-align:center">3</td>
                                <td><input type="checkbox" name="" id=""> Only important relationship</td>
                                <td style="text-align:center">3</td>
                                <td><input type="checkbox" name="" id=""> Some support</td>
                                <td style="text-align:center">3</td>

                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""> Three</td>
                                <td style="text-align:center">4</td>
                                <td
                                    style="background:gray;text-align:center;border-bottom-color: gray;border-right-color: gray;">
                                    Other relationship of caregiver</td>
                                <td
                                    style="background:gray;text-align:center;border-bottom-color: gray;border-top-color:gray;">
                                    POINTS</td>
                                <td><input type="checkbox" name="" id=""> No support</td>
                                <td style="text-align:center">4</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id="">Four</td>
                                <td style="text-align:center">5</td>
                                <td
                                    style="background:gray;text-align:center;border-right-color:gray;border-top-color:gray">
                                    (not include patient)</td>
                                <td style="border-left-color:gray;background: gray;border-top-color:gray;"></td>
                                <td style="background:gray;text-align:center"> Significant or major changes or events
                                </td>
                                <td
                                    style="background:gray;text-align:center;border-bottom-color: gray;border-left-color: gray">
                                    POINTS</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""> Five or more</td>
                                <td style="text-align:center">6</td>
                                <td><input type="checkbox" name="" id=""> Close relationship</td>
                                <td style="text-align:center">1</td>
                                <td><input type="checkbox" name="" id=""> Not apparent</td>
                                <td style="text-align:center">1</td>
                            </tr>
                            <tr>
                                <td style="background:gray"> Dependence on patient</td>
                                <td style="background:gray;text-align:center">POINTS</td>
                                <td><input type="checkbox" name="" id=""> Warm supportive family expressing feelings
                                </td>
                                <td style="text-align:center">2</td>
                                <td><input type="checkbox" name="" id=""> Yes but manageable</td>
                                <td style="text-align:center">2</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""> Caregiver has been self supporting</td>
                                <td style="text-align:center">1</td>
                                <td><input type="checkbox" name="" id=""> Some support apparent or caring persons living
                                    at a
                                    distance</td>
                                <td style="text-align:center">3</td>
                                <td><input type="checkbox" name="" id=""> Several and/or serious</td>
                                <td style="text-align:center">3</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""> Care giver has substantial homemaking skills
                                </td>
                                <td style="text-align:center">2</td>
                                <td><input type="checkbox" name="" id=""> Doutful or not knowing</td>
                                <td style="text-align:center">4</td>
                                <td style="background:gray;text-align:center"> Caregiver's predicted coping</td>
                                <td style="background:gray;text-align:center">POINTS</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""> Caregiver has reduced income</td>
                                <td style="text-align:center">3</td>
                                <td><input type="checkbox" name="" id=""> Troubled family relationship</td>
                                <td style="text-align:center">5</td>
                                <td><input type="checkbox" name="" id=""> Good no help</td>
                                <td style="text-align:center">1</td>

                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""> Patient has been sole homemaker</td>
                                <td style="text-align:center">4</td>
                                <td style="background-color: gray;border-color:gray"></td>
                                <td style="border: none;"></td>
                                <td><input type="checkbox" name="" id=""> Fair, propably no help</td>
                                <td style="text-align:center">2</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""> Patient has been sole wage earner</td>
                                <td style="text-align:center">5</td>
                                <td style="background-color: gray;border-color:gray"></td>
                                <td style="border: none;"></td>
                                <td><input type="checkbox" name="" id=""> Doubtful,may need help</td>
                                <td style="text-align:center">3</td>
                            </tr>
                            <tr>
                                <td style="background-color: gray;border-color:gray"></td>
                                <td style="background-color: gray;border-color:gray"></td>
                                <td style="background-color: gray;border-color:gray"></td>
                                <td style="border-color:gray"></td>
                                <td><input type="checkbox" name="" id=""> Very poor,urgent help</td>
                                <td style="text-align:center">4</td>

                            </tr>
                            <style>
                                input[type="text-2"]{
                                    outline: 0;
                                    border: none;
                                    width: 50%;
                                    font-size: 14px;
                                    border-bottom: 1px solid black;
                                
                                
                                }
                            </style>
                            <tr style="position:relative;top:-17px">
                                <td style="background: gray;"> Anticipated employment of caregiver</td>
                                <td style="background: gray;">POINTS</td>
                                <td style="background: gray;position:relative;top:-35px;"> Perceived relationship with
                                    patient(circle appropriate points)</td>
                                <td style="border:none;"></td>
                                <td style="border-right:none;border-bottom:none">TOTAL POINTS: <input type="text-2"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="position:relative;top:-19px"><input type="checkbox" name="" id=""> Will work
                                    full
                                    time</td>
                                <td style="text-align:center;position:relative;top:-19px">1</td>
                                <td style="position:relative;top:-54px;">
                                    Stable
                                    &nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;unstable
                                </td>
                                <td></td>
                                <td
                                    style="position:relative;top:-23px;border-top:none;border-bottom:none;border-right:none">
                                    &nbsp;<input type="checkbox" name="" id=""> Low-risk-(13-22 points)
                                </td>
                                <td
                                    style="border-left:none;border-top:none;border-bottom:none;position:relative;top:-23px;">
                                </td>

                            </tr>
                            <tr>
                                <td style="position:relative;top:-19px"><input type="checkbox" name="" id=""> Will work
                                    part-time</td>
                                <td style="text-align:center;position:relative;top:-19px">2</td>
                                <td style="position:relative;top:-54px;"> Open&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    1&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;Closed
                                </td>
                                <td style="position:relative;top:-35px;border-left:none;border:none"></td>
                                <td
                                    style="position:relative;top:-23px;border-top:none;border-bottom:none;border-right:none">
                                    &nbsp;<input type="checkbox" name="" id="">Moderate risk(23-44 points)
                                </td>
                                <td
                                    style="border-left:none;border-top:none;border-bottom:none;position:relative;top:-23px;">
                                </td>

                            </tr>
                            <tr>
                                <td style="position:relative;top:-19px"><input type="checkbox" name="" id=""> Will do
                                    volunteer work</td>
                                <td style="text-align:center;position:relative;top:-19px">3</td>
                                <td style="position:relative;top:-54px;"> Mutually supportive&nbsp;
                                    1&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;unsupportive
                                </td>
                                <td
                                    style="position:relative;top:-35px;border-left:none;border-bottom:none;border-top:none">
                                </td>
                                <td style="position:relative;top:-23px;border-top:none;border-right:none">
                                    &nbsp;
                                    <input type="checkbox" name="" id=""> High-risk (over 45 points)(include the
                                    &nbsp;&nbsp; ADG plan)
                                </td>
                                <td style="border-left:none;border-top:none;position:relative;top:-23px;"></td>

                            </tr>
                            <tr>
                                <td style="position:relative;top:-19px"><input type="checkbox" name="" id=""> Retirement
                                </td>
                                <td style="text-align:center;position:relative;top:-19px">4</td>
                                <td style="position:relative;top:-54px"> Hamounous/mutually respectful
                                    1&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;trobled
                                    conflict</td>
                            </tr>
                            <tr>
                                <td style="position:relative;top:-19px"><input type="checkbox" name="" id=""> Homemaker
                                </td>
                                <td style="text-align:center;position:relative;top:-19px">5</td>
                            </tr>
                            <tr>
                                <td style="position:relative;top:-19px"><input type="checkbox" name="" id="">
                                    Unemployed,job
                                    seeking</td>
                                <td style="text-align:center;position:relative;top:-19px">6</td>
                            </tr>
                            <tr>
                                <td style="border:none"></td>
                                <td style="border:none"></td>
                                <td style="position:relative;top:-90px"> No noted unresolved issues
                                    1&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;many
                                    unsolved issues</td>
                            </tr>
                        </table>
                        <style>
                            @media print and (min-width:10px) {
                                p {
                                    font-size: 14px;
                                }

                                .unik {
                                    width: 5.9rem !important;
                                }

                                .unik.line3 {
                                    width: 4.9rem !important;
                                }

                                .signature,
                                .mailings,
                                .closure-container {
                                    width: 91.5%;
                                }

                                .container.table {
                                    top: -20%;
                                    position: relative;
                                }
                            }
                        </style>


                        <br>


                        <div class="form form3">
                            <div class="container" style="height: auto;position:relative;top:-50px">
                                <div class="summary-container">
                                    <h2>Relevant Comments To Team at IDG Meeting:</h2>
                                    <div style="min-width: 100%; color: #000;" class="lines">
                                       
                                       <input type="text"> 
                                       <input type="text"> 
                                       <input type="text"> 
                                       <input type="text"> 
                                       <input type="text"> 
                                       <input type="text"> 
                                       <input type="text"> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title">
                        <h1>BEREAVEMENT INITIAL ASSESSMENT/CARE PLAN</h1>
                        <h2>(ADDENDUM TO COMPREHENSIVE ASSESSMENT) Continued</h2>
                    </div>

                    <div class="patient-fill">
                        <div>Patient Name:</div>
                        <div class="border-left">ID#:</div>
                    </div>
                   <style>
                    input[type="text-t"]{
                                outline: 0;
                                border: none;
                                width:90%;
                                font-size: 14px;
                                border-bottom: 1px solid black;
                        }
                   </style>
                    <div class="box">
                        <table style="width:100%">
                            <header style="color:white;background:black;">INVENTIONS</header>
                            <th></th>
                            <th>DATE INITIATED</th>
                            <th>INITIALS</th>
                            <th>DATE RESOLVED</th>
                            <th>INITIALS</th>
                            <tr>
                                <td><input type="checkbox" name="" id=""> Offer presence of staff immediately following
                                    death</td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""> Send sympathy</td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""> Attend visitation/funeral</td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""> Mail initial condolence letter within the
                                    firstweek
                                    of bearevement care</td>
                                    <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""> Mail initial bearevement information two weeks
                                    after death of patient</td>
                                    <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""> Telephone contact PRN for continued support
                                </td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""> Home visit PRN for continued support</td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" name="" id=""> Send remembrance card on date of patient's
                                    birthday
                                </td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id="">Send monthly mailing and support group
                                    invitation
                                </td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""> Asses coping skills,ability to verbalize
                                    feelings
                                    and adjustment to death</td>
                                    <td style="text-align: center;"><input type="text-t"></td>
                                    <td style="text-align: center;"><input type="text-t"></td>
                                    <td style="text-align: center;"><input type="text-t"></td>
                                    <td style="text-align: center;"><input type="text-t"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""> Asses support systems within family/community
                                </td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""> Refer to community support group as needed
                                </td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""> Refer to normal grief therapy</td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""> Provide emotional support</td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""> Recommend grief education literature</td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""> Other</td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                                <td style="text-align: center;"><input type="text-t"></td>
                            </tr>
                        </table>
                    </div>

                </div>




                <div class="form2-container">
                    <table>

                        <div class="form2-container">
                            <style>
                                td,
                                th {
                                    border: 1px solid black;
                                }

                                td {
                                    background-color: white;
                                }

                                header {
                                    text-align: center;
                                    border: 1px solid black;
                                    color: white;
                                    background-color: black;

                                }

                                table {
                                    border-radius: 20%;

                                }

                                .th {
                                    width: 20%;
                                }
                            </style>
                            <table class="we">
                                <header>MONTHLY CONTACTS</header>
                                <th class="th">MONTH</th>
                                <th>DATE CONTACTED</th>
                                <th>PHONE</th>
                                <th>MAIL</th>
                                <th>INITIALS</th>
                                <th class="th">MONTH</th>
                                <th>DATE CONTACTED</th>
                                <th>PHONE</th>
                                <th>MAIL</th>
                                <th>INITIALS</th>
                                <tr>
                                    <td>&nbsp;January</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/
                                    </td>
                                    <td><input type="checkbox" style="margin-left: 25px;"></td>
                                    <td><input type="checkbox" style="margin-left: 15px;"></td>
                                    <td style="text-align: center;"><input type="text-t"></td>
                                    <td>&nbsp;July</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/
                                    </td>
                                    <td><input type="checkbox" style="margin-left: 25px;"></td>
                                    <td><input type="checkbox" style="margin-left: 15px;"></td>
                                    <td style="text-align: center;"><input type="text-t"></td>


                                </tr>
                                <tr>
                                    <td>&nbsp;Febuary</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/
                                    </td>
                                    <td><input type="checkbox" style="margin-left: 25px;"></td>
                                    <td><input type="checkbox" style="margin-left: 15px;"></td>
                                    <td style="text-align: center;"><input type="text-t"></td>
                                    <td>&nbsp;August</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/
                                    </td>
                                    <td><input type="checkbox" style="margin-left: 25px;"></td>
                                    <td><input type="checkbox" style="margin-left: 15px;"></td>
                                    <td style="text-align: center;"><input type="text-t"></td>


                                </tr>
                                <tr>
                                    <td>&nbsp;March</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/
                                    </td>
                                    <td><input type="checkbox" style="margin-left: 25px;"></td>
                                    <td><input type="checkbox" style="margin-left: 15px;"></td>
                                    <td style="text-align: center;"><input type="text-t"></td>
                                    <td>&nbsp;September</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/
                                    </td>
                                    <td><input type="checkbox" style="margin-left: 25px;"></td>
                                    <td><input type="checkbox" style="margin-left: 15px;"></td>
                                    <td style="text-align: center;"><input type="text-t"></td>


                                </tr>
                                <tr>
                                    <td>&nbsp;April</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/
                                    </td>
                                    <td><input type="checkbox" style="margin-left: 25px;"></td>
                                    <td><input type="checkbox" style="margin-left: 15px;"></td>
                                    <td style="text-align: center;"><input type="text-t"></td>
                                    <td>&nbsp;October</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/
                                    </td>
                                    <td><input type="checkbox" style="margin-left: 25px;"></td>
                                    <td><input type="checkbox" style="margin-left: 15px;"></td>
                                    <td style="text-align: center;"><input type="text-t"></td>


                                </tr>
                                <tr>
                                    <td>&nbsp;May</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/
                                    </td>
                                    <td><input type="checkbox" style="margin-left: 25px;"></td>
                                    <td><input type="checkbox" style="margin-left: 15px;"></td>
                                    <td style="text-align: center;"><input type="text-t"></td>
                                    <td>&nbsp;November</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/
                                    </td>
                                    <td><input type="checkbox" style="margin-left: 25px;"></td>
                                    <td><input type="checkbox" style="margin-left: 15px;"></td>
                                    <td style="text-align: center;"><input type="text-t"></td>


                                </tr>
                                <tr>
                                    <td>&nbsp;June</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/
                                    </td>
                                    <td><input type="checkbox" style="margin-left: 25px;"></td>
                                    <td><input type="checkbox" style="margin-left: 15px;"></td>
                                    <td style="text-align: center;"><input type="text-t"></td>
                                    <td>&nbsp;December</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/
                                    </td>
                                    <td><input type="checkbox" style="margin-left: 25px;"></td>
                                    <td><input type="checkbox" style="margin-left: 15px;"></td>
                                    <td style="text-align: center;"><input type="text-t"></td>


                                </tr>
                            </table>
                            <div class="closure-container" style="margin-top:20px;border:1px solid black;width:100%">

                                <table style="width:100%">
                                    <header> Closure of the berevement program</header>
                                    <th> INTERVENTIONS </th>
                                    <th> DATE INITIATED</th>
                                    <th> INITIALS</th>
                                    <th> DATE RESOLVED</th>
                                    <th> INITIALS</th>
                                    <tr>
                                        <td> Offer to continue montly support group</td>
                                        <td style="text-align: center;"><input type="text-t"></td>
                                        <td style="text-align: center;"><input type="text-t"></td>
                                        <td style="text-align: center;"><input type="text-t"></td>
                                        <td style="text-align: center;"><input type="text-t"></td>

                                    </tr>
                                    <tr>
                                        <td> Send closure letter</td>
                                        <td style="text-align: center;"><input type="text-t"></td>
                                        <td style="text-align: center;"><input type="text-t"></td>
                                        <td style="text-align: center;"><input type="text-t"></td>
                                        <td style="text-align: center;"><input type="text-t"></td>
                                    </tr>

                                </table>
                                <style>
                                    input[type="text-1"]{
                                        outline: 0;
                                        border: none;
                                        width: 50%;
                                        font-size: 14px;
                                        border-bottom: 1px solid black;
                                    }
                                </style>
                                <h2><span style="border-right:1px solid black;background-color: gray;">BEREAVEMENT
                                        GOAL/OUTCOME </span>
                                    &nbsp; <input type="checkbox"> Normal grief reaction
                                    &nbsp; <input type="checkbox"> Other: <input type="text-1"></h2>
                            </div>
                            <div class="mail"
                                style="margin-top: 1rem; background-color: white; border-radius: var(--form-border-radius); padding: var(--padding)">
                                <div><input type="checkbox"> Mailings only; bereaved verbalizes no further telephone
                                    support
                                    is needed at this
                                    time</div>
                                <div><input type="checkbox"> Services declined</div>
                            </div>

                            <div class="signature">
                                <div class="text-signature" style=" text-align: start; display: flex;">
                                    <span style="font-size: 2rem;" class="triangle">&#9654;</span>
                                    <p class="title" style="border:none">Bereavement Counselor Signature: <input type="text"></p>

                                </div>

                                <div style="  border-left: 1px solid black;">
                                    &nbsp; Date: <input type="text">
                                </div>
                            </div>
                        </div>
                        </td>
                        </tr>
                    </table>

                </div>
            </div>


        </div>

</body>

</html>