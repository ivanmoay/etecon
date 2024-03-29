<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospice Revocation Form</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body,
        html {
            width: 100%;
            height: 100%;
        }

        body {
            font-family: sans-serif;
            font-size: 16px;
            padding: 10px;
        }

        @page {
            size: A4 portrait;
        }

        h1.heading {
            font-size: 23px;
            font-weight: bold;
            text-align: right;
            margin: 5px;
            color: #BC13FE;
        }

        .main {
            height: auto;
            border-radius: 18px;
        }

        p.text-secondary {
            font-size: 20px;
            font-weight: 400;
            color: #BC13FE;
        }

        p.text-primary {
            font-size: 20px;
            color: black;
        }

        .bl {
            border-left: 1px solid black;
        }

        .pl {
            padding-left: 3px;
        }

        .pt {
            padding-top: 5px;
        }

        strong.unik {
            color: #BC13FE;
        }



        div.form {
            background-color: #BC13FE;
            border-radius: 18px;
            padding: 10px;

        }

        div.patient-info {
            background-color: white;
            padding: 0 8px;
            height: 3.5rem;
            border-radius: 10px;
            display: grid;
            grid-template-columns: 4fr 1fr 1fr 1fr;
        }



        div.time-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }

        div.time-container div.format {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            justify-content: flex-end;
            font-size: 14px;
            color: #BC13FE;
        }

        div.letter {
            margin-top: 1rem;
            border-radius: 15px;
            padding: 3rem 5rem;
            background-color: white;
        }



        input[type='text'],
        input[type='period'],
        input[type='days'],
        input[type='signature'],
        input[type='input-uwu'],
        input[type='comment'],
        input[type='input-days'],
        input[type='time-input'] {
            background-color: transparent;
            margin-top: 2px;
            font-size: 1.2rem;
            outline: 0;
            border: none;
            width: 100%;
        }

        input[type='period'],
        input[type='days'],
        input[type='signature'] {
            border-bottom: 1px solid black;
            width: 45%;
        }

        input[type='days'] {
            width: 50px;
            margin-top: 0;
            height: auto;
        }

        input[type='signature'] {
            width: 100%;
            margin-top: 0;
            height: auto;
            padding-left: 25px;
        }

        .signature-label {
            display: flex;
            justify-content: space-between;
            font-size: 20px;
        }

        .signature-label span.date {
            padding-right: 10rem;
        }

        div.tri {
            position: relative;
        }

        span.triangle {
            font-size: 1.3rem;
            position: absolute;
            top: 0;
            bottom: 0;
        }

        span.note {
            background-color: green;
            text-align: center;
            width: 100%;
            font-size: 1.2;
        }

        @media print {
            p.text-secondary {
                font-size: 13px;
            }

            p.text-primary {
                font-size: 14px;
            }

            div.time-container div.format {
                font-size: 12px;
            }

            div.letter {
                padding: 1.2rem;
            }

            .signature-label {
                font-size: 14px;
            }

            .signature-label span.date {
                padding-right: 3rem;
            }

            strong.unik {
                font-size: 13px;
            }

            span.note {
                font-size: 13px;
            }
        }
    </style>
</head>

<body>
    <div class="main">
        {{-- <div class="brand-container">
            <img src="https://i.ibb.co/kSr11h4/final.png" width="200" alt="final" border="0">
        </div> --}}
        <div style="display: flex; flex-direction: row; align-items: flex-start; margin-bottom: 1rem;margin-top: 1rem;">
            <div style="display: flex; align-items: center">
                @if (!empty(Auth::user()->company_id))
                    <img src="{{ asset('/company_images/'.@Auth::user()->company->company_logo) }}" height="60" alt="final" border="0">&nbsp;
                    <h3>{{@Auth::user()->company->company_name}}</h3>
                @endif
            </div>
            <div class="heading" style="margin-left: auto">
                <h1 class="heading">MEDICARE HOSPICE BENEFIT REVOCATION</h1>
            </div>
        </div>
        
        <div class="form">
            <div class="patient-info">
                <div class="pl pt">
                    <p class="text-secondary">Patient Name:</p>
                    <input type="text">
                </div>
                <div class="bl pt pl">
                    <p class="text-secondary pl">ID#:</p>
                    <input type="text">
                </div>
                <div class="bl pt pl">
                    <p class="text-secondary">Date:</p>
                    <input type="text">
                </div>
                <div class="time-container bl pt pl">
                    <div class="time">
                        <p class="text-secondary">Time:</p>
                        <input type="text">
                    </div>
                    <div class="format">
                        <p><input type="checkbox"> AM</p>
                        <p><input type="checkbox"> PM</p>
                    </div>
                </div>
            </div>
            <div class="letter">
                <p class="text-primary">
                    As a Medicare Hospice beneficiary, I wish to revoke the election of Medicare coverage of Hospice
                    <br>
                    care for the remainder of benefit period # <input type="period">.
                    <br>
                    <br>
                    I understand that I am forfeiting the right to <input type="days"> days of Hospice coverage in the
                    current benefit <br>
                    period. I can choose to re-elect the Medicare Hospice benefit at a later time without penalty. <br>
                    <br>
                    The Benefit Periods are as follows: <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; First Benefit Period - 90 days <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Second Benefit Period - 90 days <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Third Benefit Period - 60 days <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fourth Benefir Period - 60 days <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Unlimited Subsequent 60-day Benefit
                    Periods <br>
                    <br>
                    <br>
                    <strong class="unik">
                        I direct this revocation to be effective on <input type="days"> /<input type="days"> / <input
                            type="days"> I understand that on this date <br>
                        the Medicare benefit, which I waived to receive Hospice Medicare coverage, will resume. <br>
                        The reason for revoking the benefit is <input type="period">. <br>
                    </strong>
                    <br>
                    <br>


                <div class="tri">
                    <span class="triangle">&#9658;</span>
                    <input type="signature">
                </div>
                <div class="signature-label">
                    <span class="text-primary">Signature of Beneficiary or Legal Representative</span>
                    <span class="date">Date</span>
                </div>

                <br>
                <br>
                <input type="signature" style="padding-left: 0;">
                <div class="signature-label">
                    <span class="text-primary">Relationship of Legal Representative to Beneficiary</span>
                </div>
                <br>
                <br>
                <br>
                <div class="tri">
                    <span class="triangle">&#9658;</span>
                    <input type="signature">
                </div>
                <div class="signature-label">
                    <span class="text-primary">Signature of Witness</span>
                    <span class="date">Date</span>
                </div>

                <br>
                <span class="note">
                    <p>
                        For Hospice reference only: <br>
                        *Hospice Revocation cannot be effective prior to the date this form is signed. A beneficiary may
                        designate the <br>
                        effective date to be the same date as the signature date or a date in the future. **
                    </p>
                </span>
                </p>
            </div>
        </div>
    </div>
</body>

</html>