<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospice Physician Certification Initial and Second BP 90 days</title>
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
  font-size: 16px;
  padding: 10px
}

@page {
  size: A4 portrait
}

.head {
  display: grid;
  height: 100%;
  align-items: center;
  grid-template-columns: 1.5fr 2fr
}

.blank {
  display: grid;
  grid-template-columns: 2fr 1.2fr
}

.head .shaded {
  background-color: rgba(0, 0, 0, .849);
  color: #fff;
  padding: 5px 3px;
  height: 100%;
  font-weight: 700;
  border-radius: 10px 0 0 0;
  display: grid;
  place-items: center
}

.head .period {
  background-color: rgba(145, 139, 139, .548);
  color: #000;
  padding: 5px 3px;
  font-weight: 700
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

p.text-secondary {
  font-size: 20px;
  font-weight: 400
}

p.text-primary {
  font-size: 20px;
  color: #000
}

.body-letter {
  height: auto;
  padding: 10px 20px
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
  background-color: #bc13fe;
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

div.letter {
  margin-top: 1rem;
  border-radius: 15px;
  padding-top: 0;
  background-color: #fff
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

@media print {
  p.text-secondary {
    font-size: 13px
  }

  p.text-primary {
    font-size: 14px
  }

  div.letter {
    padding: 1.2rem
  }

  span.note {
    font-size: 13px
  }
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
        <h1 class="heading">PHYSICIAN CERTIFICATION/RECERTIFICATION</h1>
        <h1 class="heading">OF TERMINAL ILLNESS</h1>
        <h1 class="heading" style="font-size: 1rem;"><i>INITIAL/2ND 90-DAY PERIOD</i></h1>
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
                    <p class="text-secondary">Admission Date:</p>
                    <input type="text">
                </div>
            </div>
            <div class="letter">
                <div class="head">
                    <div class="shaded">RECERTIFICATION STATEMENT</div>
                    <div class="period">&nbsp;First 90-Day Period from <input type="text"
                            style="border-bottom: 1px solid black; width: 70px;"> to <input type="text"
                            style="border-bottom: 1px solid black; width: 70px;">
                    </div>
                </div>
                <div class="blank">
                    <div>
                        <input type="text" style="border-bottom: 1px solid black; width: 98%;">
                        <span class="trianglee">&#9658;</span> RN Signature
                    </div>
                    <div>
                        <input type="text" style="border-bottom: 1px solid black;">
                        <p>Verbal Order Certification Date</p>
                    </div>
                </div>

                <div class="body-letter">
                    <p>
                        I certify that <input type="text" style="width: 240px; border-bottom: 1px solid black;">
                        is terminally ill and has a life expectancy of six (6) months or less if the terminal illness
                        runs its normal course. I have reviewed the patient's clinical information and considered the
                        primary terminal condition, related diagnosis, current subjective and objective medical
                        findings, current medication and treatment orders and information about management of unrelated
                        conditions in making this determination. <br><br>
                        <strong> Physician Brief Narrative Statement</strong> (Review the patient's clinical
                        circumstances and synthesize the medical information to provide clinical justification for
                        admission to Hospice services):
                    </p>
                    <div class="inputs">
                        <input type="text" style="border-bottom: 1px solid black;">
                        <input type="text" style="border-bottom: 1px solid black;">
                        <input type="text" style="border-bottom: 1px solid black;">
                        <input type="text" style="border-bottom: 1px solid black;">
                        <input type="text" style="border-bottom: 1px solid black;">
                        <input type="text" style="border-bottom: 1px solid black;">
                    </div>
                </div>
                <br>
                <hr>
                <div class="body-letter">
                    <p>
                        <strong>Attestation</strong>: I confirm that I composed this narrative based on my review of the
                        patient's medical record and/or examination of the patient.
                        <br><br>
                        Hospice Medical Director or Designee Name (Printed): <input type="text"
                            style="border-bottom: 1px solid black; width: 200px;">
                    </p>
                    <div class="blank">
                        <div>
                            <input type="text" style="border-bottom: 1px solid black; width: 98%;">
                            <span class="trianglee">&#9658;</span> Hospice Medical Director or Designee Signature
                        </div>
                        <div>
                            <input type="text" style="border-bottom: 1px solid black;">
                            <p>Date</p>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <div class="body-letter">
                    <p>
                        Attending Physician Name (Printed): <input type="text"
                            style="border-bottom: 1px solid black; width: 335px;">
                    </p>
                    <div class="blank">
                        <div>
                            <input type="text" style="border-bottom: 1px solid black; width: 98%;">
                            <span class="trianglee">&#9658;</span> Attending Physician Signature
                        </div>
                        <div>
                            <input type="text" style="border-bottom: 1px solid black;">
                            <p>Date</p>
                        </div>
                    </div>
                </div>
                <div class="head">
                    <div class="shaded" style="border-radius: 0;">RECERTIFICATION STATEMENT</div>
                    <div class="period">&nbsp;Second 90-Day Period from <input type="text"
                            style="border-bottom: 1px solid black; width: 50px;"> to <input type="text"
                            style="border-bottom: 1px solid black; width: 50px;">
                    </div>
                </div>
                <div class="body-letter">
                    <p>
                        I recertify that I have reviewed the clinical record prior to recertification for the above noted patient and that patient is still
                        considered to be terminally ill and has a life expectancy of six (6) months or less, if the terminal illness runs its normal course. <br><br> <strong>Physician Brief Narrative Statement</strong> (Note: Must be completed no more than 15 days prior to recertification) Review the patient's clinical circumstances and synthesize the medical information to provide clinical justification for continued Hospice services.
                    </p>
                    <div class="inputs">
                        <input type="text" style="border-bottom: 1px solid black;">
                        <input type="text" style="border-bottom: 1px solid black;">
                        <input type="text" style="border-bottom: 1px solid black;">
                        <input type="text" style="border-bottom: 1px solid black;">
                        <input type="text" style="border-bottom: 1px solid black;">
                        <input type="text" style="border-bottom: 1px solid black;">
                    </div>
                </div>
                <br>
                <hr>
                <div class="body-letter">
                    <p>
                        <strong>Attestation</strong>: I confirm that I composed this narrative based on my review of the
                        patient's medical record and/or examination of the patient.
                        <br><br>
                        Hospice Medical Director or Designee Name (Printed): <input type="text"
                            style="border-bottom: 1px solid black; width: 200px;">
                    </p>
                    <div class="blank">
                        <div>
                            <input type="text" style="border-bottom: 1px solid black; width: 98%;">
                            <span class="trianglee">&#9658;</span> Hospice Medical Director or Designee Signature
                        </div>
                        <div>
                            <input type="text" style="border-bottom: 1px solid black;">
                            <p>Date</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>