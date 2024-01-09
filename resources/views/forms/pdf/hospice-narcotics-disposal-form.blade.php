<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hospice Narcotics Disposal Form</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            --border-color: #6c757d;
            --border: 1px solid var(--border-color);
            --sky-blue: rgb(148, 187, 233);
            --sky-blue-value: 148, 187, 233;
            font-family: arial, sans-serif;
        }

        body,
        html {
            background-color: rgba(255, 255, 255, 0.63);
        }

        input {
            width: 100%;
            font-size: 14px;
            border: none;
        }

        .container {
            max-width: 960px;
            margin: auto;
        }

        .flex {
            display: flex;
        }

        .w-45 {
            width: 45%;
        }

        .w-50 {
            width: 50%;
        }

        input[type='checkbox'] {
            width: 25px;
        }

        input[type='text'] {
            background-color: transparent;
            outline: 0;
            padding: 3px 0;
            font-size: 14px;
            border: 0;
            padding: 0;
        }

        .ref-dit {
            display: grid;
            grid-template-columns: 1fr 2fr 1fr 1fr;
        }

        .bl {
            border-left: 1px solid black;
        }

        .bb {
            border-bottom: 1px solid black;
        }

        input[type='checkbox'] {
            font-size: 14px;
            width: auto !important;
            height: 14px;
        }

        .pad {
            padding: 0 3px;
            padding-top: 3px;
        }

        .grid {
            display: grid;
            grid-template-columns: 6fr 4fr;
        }

        p {
            font-size: 14px;
        }

        .insurance-info {
            display: grid;
            grid-template-columns: 1fr 2fr;
            background-color: white;
            border-bottom: 1px solid black;
        }

        .choices {
            display: grid;
            grid-auto-flow: column;
            font-weight: 300;
            font-size: 12px;
            color: #bc13fe;
            place-items: center;
        }

        .header-info {
            /* background-color: red; */
            display: flex;
        }

        .name-date {
            flex: 1;
            display: grid;
            grid-template-columns: 2fr 1fr;
            background-color: white;
            border: 1px solid black;
            padding: 0 2px;
            border-radius: 5px;
        }

        .header-title {
            /* background-color: green; */
            flex: 1;
            color: #bc13fe;
            text-align: end;
            font-weight: bold;
            font-size: 16px;
        }

        .form {
            background-color: #c666ec59;
            margin-top: 8px;
            border-radius: 12px;
        }

        .bold {
            font-weight: bold;
        }

        .form-inputs {
            margin-top: 8px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            background: #644871;
            border-radius: 8px 8px 0 0;
            border: 1px solid black;
            border-bottom: 0;
        }

        .heads,
        .heads-main {
            display: grid;
            grid-auto-flow: column;
            height: 100%;
        }

        .heads>div,
        .heads-main>div {
            height: 100%;
            place-items: center;
            display: grid;
            text-align: center;
            border-left: 1px solid black;
            padding: 8px 5px;
        }

        .heads-main {
            display: grid;
            grid-template-columns: 1fr 1fr 1.5fr;
        }

        div.form-input-header {
            font-size: 9px;
            color: white;
            font-weight: 700;
        }

        .border-none {
            border: none !important;
        }

        .sect-1-inputs {
            display: grid;
            grid-auto-flow: column;
            grid-template-columns: repeat(2, 1fr);
            background-color: white;
        }

        .bg-white {
            background-color: white;
        }

        .first {
            border-top: 1px solid black;
            display: grid;
            grid-template-columns: 1fr 1fr 1.5fr;
        }

        .second {
            border-top: 1px solid black;
            border: 1px solid black;
            border-bottom: 0;
            display: grid;
            grid-template-columns: 63px 83px 82px 54px 1fr;
        }

        p.input {
            border-bottom: 1px solid black;
            padding: 2px;
        }

        .footer-container {
            display: grid;
            grid-template-columns: 2fr 1fr 2fr;
            column-gap: 5px;
        }

        p.footer {
            font-size: 10px;
            font-weight: 500;
        }

        .witness {
            border: 1px solid black;
            border-radius: 8px;
            padding: 2px;
            display: grid;
            grid-template-columns: 2fr 1fr;
            width: 100%;
        }

        .reason {
            border-radius: 8px;
            display: grid;
            border: 1px solid black;
        }

        .reason>p {
            font-size: 10px !important;
        }

        .method {
            background-color: red;
        }

        .last {
            display: grid;
            /* grid-auto-flow: column; */
            grid-template-columns: repeat(2, 1fr);
        }
    </style>
</head>

<body>
    <div class="container" style="padding: 30px 10px; margin-top: 1rem; margin-bottom: 1rem; border-radius: 25px;">
        <div class="brand-container">
            <div class="flex-container">
                @if (!empty(Auth::user()->company_id))
                    <img src="{{ asset('/company_images/'.@Auth::user()->company->company_logo) }}" width="200" alt="final" border="0">
                @endif
            </div>
        </div>
        <div class="">
            <div class="header-info">
                <div class="name-date">
                    <div class="name pad">
                        <p>Patient Name:</p>
                        <input type="text">
                    </div>
                    <div class="date bl pad">
                        <p>Date:</p>
                        <input type="text">
                    </div>
                </div>
                <div class="header-title">
                    HOME MEDICATION DISPOSITION RECORD
                </div>
            </div>

            <div class="form pad">
                <div class="instruction">
                    <p>
                        <span class="bold">Instructions:</span> This form is designed to record and document the
                        disposition of
                        medications from
                        the home setting. Disposition of medication is regulated by Federal and State laws. When
                        medications must be destroyed, the destruction procedures may also be subject to Federal and
                        State laws, and there are recommended destruction procedures to reduce adverse impact to the
                        environment and minimize possession or use of medications by unauthorized parties. See reverse
                        of this form for information on disposal/destruction recommendations.
                    </p>
                </div>

                <div class="form-inputs">
                    <div class="sect-1">
                        <div class="heads-main">
                            <div class="form-input-header border-none">RX #</div>
                            <div class="form-input-header">ORIGINAL <br> DISPENSING DATE</div>
                            <div class="form-input-header">MEDICATION</div>
                        </div>

                    </div>

                    <div class="sect-2 bl">
                        <div class="heads">
                            <div class="form-input-header border-none">STRENGTH</div>
                            <div class="form-input-header">DOSAGE FORM</div>
                            <div class="form-input-header">QTY DISPOSED</div>
                            <div class="form-input-header">REASON <br>(see key)</div>
                            <div class="form-input-header">DISPOSITION <br> METHOD <br> (see key)</div>
                        </div>
                    </div>





                </div>
                <div class="test">
                    <div class="sect-1-inputs">
                        <div class="first bl">
                            <div>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                            </div>
                            <div class="bl">
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                            </div>
                            <div class="bl">
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                            </div>
                        </div>
                        <div class="second bl">
                            <div>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                            </div>
                            <div class="bl">
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                            </div>
                            <div class="bl">
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                            </div>
                            <div class="bl">
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                            </div>
                            <div class="bl">
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                                <p class="input"><input type="text"></p>
                            </div>

                        </div>
                    </div>
                </div>
                <br />
                <div class="bg-white footer-container">
                    <div class="witness">
                        <div class="by">
                            <p class="footer">Form Completed By:</p>
                            <p class="input"><input type="text"></p>
                            <p class="footer">Disposition Witnessed By:</p>
                            <p class="input"><input type="text"></p>
                            <p class="footer">Disposition Witnessed By:</p>
                            <p class="footer"><input type="text"></p>
                        </div>
                        <div class="title">
                            <p class="footer">Title:</p>
                            <p class="input"><input type="text"></p>
                            <p class="footer">Title:</p>
                            <p class="input"><input type="text"></p>
                            <p class="footer">Title:</p>
                            <p class="footer"><input type="text"></p>
                        </div>
                    </div>
                    <div class="reason">
                        <p class="footer bg-white"
                            style="width: 100%; background-color: #644871; color: #ffffff; border-radius: 8px 8px 0 0; padding-left: 15px; padding-top: 5px;">
                            REASON KEY :
                        </p>
                        <p><b style="font-size: 12px; padding-left: 3px;">A</b> <span style="font-size: 12px;">-
                                Deceased</span></p>
                        <p><b style="font-size: 12px; padding-left: 3px;">B</b> - Medication Discontinued</p>
                        <p><b style="font-size: 12px; padding-left: 2px;">C</b> - Medication Dose Changed</p>
                    </div>
                    <div class="reason">
                        <p class="footer"
                            style="width: 100%; background-color: #644871; color: #ffffff; border-radius: 8px 8px 0 0; padding-left: 15px; padding-top: 5px;">
                            DISPOSITION METHOD KEY :
                        </p>
                        <div class="last">
                            <div>
                                <p class="pad footer"><b>1</b> - Returned to Hospice</p>
                                <p class="pad footer"><b>2</b> - Returned to Home Care</p>
                                <p class="pad footer"><b>3</b> - Returned to Pharmacy</p>
                                <p class="pad footer"><b>4</b> - Flushed on site</p>
                            </div>
                            <div class="bl">
                                <p class="pad footer">5 - Incinated on site</p>
                                <p class="pad footer">6 - Household trash (see reverse)</p>
                                <p class="pad footer">7 - Other: <input type="text"
                                        style="border-bottom: 1px solid black; width: 75px;"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

</body>

</html>