<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hospice Patient Information Sheet</title>

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

  body, html {
    background-color: rgba(255, 255, 255, 0.63);
  }

  p.ref-info {
    background-color: #BC13FE;
    padding: 3px 0;
    text-align: center;
    border-radius: 15px;
    border: 0;
    color: white;
  }

  .bg-white {
    background-color: #fff;
  }

  table {
    border-collapse: collapse;
    width: 100%;
  }

  table th,
  table td {
    font-size: 14px;
    border: var(--border);
    padding: 4px;
  }

  table thead {
    color: #fff;
    background: var(--sky-blue);
    height: 35px;
  }

  table td[colspan] {
    color: #fff;
    font-weight: bold;
    background: var(--sky-blue);
    background: linear-gradient(90deg,
        rgba(var(--sky-blue-value), 1) 0%,
        rgba(var(--sky-blue-value), 0) 100%);
  }

  input {
    width: 100%;
    font-size: 14px;
    border: none;
  }

  .container {
    max-width: 960px;
    margin: auto;
    background-color: #41FDFE;
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
    color: #BC13FE;
    place-items: center;
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
    <div style="border-bottom: var(--border);">
      <h2 style="text-align: right; color: #BC13FE;">REFERRAL/PATIENT INFORMATION SHEET</h2>
      <div>
        <p class="ref-info">
          REFERRAL INFORMATION
        </p>
      </div>
    </div>
    <div class="ref-dit bg-white bb">
      <div class="pad">
        <p>Date of Referral:</p>
        <input type="text">
      </div>
      <div class="bl pad">
        <p>Person receiving Referral:</p>
        <input type="text">
      </div>
      <div class="bl pad">
        <p>Referral Source:</p>
        <input type="text">
      </div>
      <div class="bl pad">
        <p>Phone #:</p>
        <input type="text">
      </div>
    </div>
    <div class="bg-white bb">
      <div class="pad">
        <p>Patient Name (First, MI, Last):</p>
        <input type="text">
      </div>
    </div>
    <div class="bg-white bb grid">
      <div class="pad">
        <p>Home Address:</p>
        <input type="text">
      </div>
      <div class="pad bl">
        <p>Home Phone #:</p>
        <input type="text">
      </div>
    </div>
    <div class="bg-white bb" style="grid-auto-flow: row;">
      <div class="pad">
        <p>Patient at:</p>
        <div class="flex" style="justify-content: space-between;">
          <p><input type="checkbox"> Home</p>
          <p><input type="checkbox"> Nursing Home</p>
          <p><input type="checkbox"> Assisted Living Facility</p>
          <p><input type="checkbox"> Hospital</p>
          <p><input type="checkbox"> Other: <input type="text" style="width: 69%;"></p>
        </div>
      </div>
    </div>
    <div class="bg-white bb grid" style="grid-template-columns: 4fr 1fr;">
      <div class="pad">
        <p>Name of Facility:</p>
        <input type="text">
      </div>
      <div class="pad bl">
        <p>Room #:</p>
        <input type="text">
      </div>
    </div>
    <div class="bg-white bb grid" style="grid-template-columns: 3fr 1fr 1fr;">
      <div class="pad">
        <p>Facility Address:</p>
        <input type="text">
      </div>
      <div class="pad bl">
        <p>Facility Phone #:</p>
        <input type="text">
      </div>
      <div class="pad bl">
        <p>Pharmacy Phone #:</p>
        <input type="text">
      </div>
    </div>
    <div class="bg-white bb">
      <div class="pad">
        <p>Direction to Home:</p>
        <input type="text">
      </div>
    </div>
    <div class="bg-white bb">
      <div class="pad">
        <p>&nbsp;</p>
        <input type="text">
      </div>
    </div>
    <div class="bg-white bb grid" style="grid-template-columns: 3fr 1fr 2fr 3fr 3fr 3fr;">
      <div class="pad">
        <p>DOB:</p>
        <input type="text">
      </div>
      <div class="pad bl">
        <p>Age:</p>
        <input type="text">
      </div>
      <div class="pad bl">
        <p>Sex</p>
        <input type="checkbox"> M &nbsp;<input type="checkbox"> F
      </div>
      <div class="pad bl">
        <p>Maritial Status:</p>
        <input type="text">
      </div>
      <div class="pad bl">
        <p>Race:</p>
        <input type="text">
      </div>
      <div class="pad bl" style="font-size: 11px;">
        <p style="font-size: 11px;">English primary language?</p>
        <input type="checkbox"> Yes &nbsp;<input type="checkbox"> No
      </div>
    </div>
    <div class="bg-white bb grid">
      <div class="pad">
        <p>Primary Family/Cargiver contact:</p>
        <input type="text">
      </div>
      <div class="pad bl">
        <p>Relationship:</p>
        <input type="text">
      </div>
    </div>
    <div class="bg-white bb grid" style="grid-template-columns: 3fr 1fr 1fr;">
      <div class="pad">
        <p>Address:</p>
        <input type="text">
      </div>
      <div class="pad bl">
        <p>Phone #:</p>
        <input type="text">
      </div>
      <div class="pad bl">
        <p>Other: Cell</p>
        <input type="text">
      </div>
    </div>
    <div class="bg-white bb grid" style="grid-template-columns: 3fr 1fr 1fr;">
      <div class="pad">
        <p>DPOA Name:(if applicable)</p>
        <input type="text">
      </div>
      <div class="pad bl">
        <p>Phone #:</p>
        <input type="text">
      </div>
      <div class="pad bl">
        <p>Other: Cell</p>
        <input type="text">
      </div>
    </div>
    <div>
      <p class="ref-info">
        PATIENT INFORMATION
      </p>
    </div>
    <div class="bg-white bb grid" style="grid-template-columns: 4.5fr 12fr;">
      <div class="pad flex">
        <p>Primary Diagnosis:</p>
        <input type="text" style="width: 38%;">
      </div>
      <div class="pad bl flex">
        <p>Phone #:</p>
        <input type="text" style="width: 85%;">
      </div>
    </div>
    <div class="bg-white bb grid" style="grid-template-columns: 4.5fr 12fr;">
      <div class="pad flex">
        <p>&nbsp;</p>
        <input type="text">
      </div>
      <div class="pad bl flex">
        <p>&nbsp;</p>
        <input type="text" style="width: 85%;">
      </div>
    </div>
    <div class="bg-white bb grid" style="grid-template-columns: 4.5fr 12fr;">
      <div class="pad flex">
        <p>&nbsp;</p>
        <input type="text">
      </div>
      <div class="pad bl flex">
        <p>&nbsp;</p>
        <input type="text">
      </div>
    </div>
    <div class="bg-white bb grid" style="grid-template-columns: 3fr 6fr 6fr;">
      <div class="pad">
        <p>Recent hospital stay?</p>
        <input type="checkbox">Yes  &nbsp;<input type="checkbox">No
      </div>
      <div class="pad bl">
        <p>Reasons and Dates:</p>
        <input type="text">
      </div>
      <div class="pad bl">
        <p>Hospital name:</p>
        <input type="text">
      </div>
    </div>
    <div class="bg-white bb grid" style="grid-template-columns: 9fr 3fr 3fr;">
      <div class="pad">
        <p>Attending Physician Name:</p>
        <input type="text">
      </div>
      <div class="pad bl">
        <p>Phone #:</p>
        <input type="text">
      </div>
      <div class="pad bl">
        <p>Fax #:</p>
        <input type="text">
      </div>
    </div>

    <div class="bg-white bb grid" style="grid-template-columns: 7fr 4fr;">
      <div class="pad">
        <p>Attending Physician Name:</p>
        <input type="text">
      </div>
      <div class="pad bl">
        <p>Does Attending Physician want Hospice Physician to Follow? <input type="checkbox">Yes  &nbsp;<input type="checkbox">No</p>
      </div>
    </div>
    <div class="bg-white bb">
      <div class="pad flex">
        <p>Patient history/changes in condition leading to referral:</p>
        &nbsp;<input type="text" style="width: 50%;">
      </div>
    </div>
    <div class="bg-white bb">
      <div class="pad flex">
        <input type="text">
      </div>
    </div>
    <div class="bg-white bb">
      <div class="pad flex">
        <input type="text">
      </div>
    </div>
    <div class="bg-white bb grid" style="grid-template-columns: 7fr 4fr;">
      <div class="pad">
        <p>Equipment/special needs for admission:</p>
        <input type="text">
      </div>
      <div class="pad bl">
        <p>Patient has peacemaker? <input type="checkbox">Yes &nbsp;<input type="checkbox">No</p>
        <p>Patient has ICD? <input type="checkbox">Yes &nbsp; <input type="checkbox">No</p>
      </div>
    </div>
    <div class="bg-white bb grid" style="grid-template-columns: 10fr 9fr 5fr;">
      <div class="pad">
        <p>Funeral Home</p>
        <input type="text">
      </div>
      <div class="pad bl">
        <p>Address</p>
        <input type="text">
      </div>
      <div class="pad bl">
        <p>Phone #:</p>
        <input type="text">
      </div>
    </div>
    <div class="bg-white bb grid" style="grid-template-columns: 10fr 9fr 5fr;">
      <div class="pad">
        <p>Church</p>
        <input type="text">
      </div>
      <div class="pad bl">
        <p>Address</p>
        <input type="text">
      </div>
      <div class="pad bl">
        <p>Phone #:</p>
        <input type="text">
      </div>
    </div>
    <div class="bg-white bb grid" style="grid-template-columns: 10fr 8fr 6fr;">
      <div class="pad grid" style="justify-content: space-between;">
        <p>Patient has pets in home?</p>
       <p>
         <input type="checkbox"> Yes
         &nbsp;
        <input type="checkbox"> No
       </p>
      </div>

      <div class="pad bl grid" style="grid-template-columns: 4fr 1fr 1fr">
        <p>Patient/Family smokers?</p>
        <p><input type="checkbox">Yes</p>
        <p><input type="checkbox">No</p>
      </div>
      
      <div class="pad bl">
        <p>Admission Priority Code:</p>
      </div>
    </div>
    <div class="bg-white bb grid" style="grid-template-columns: 18fr 6fr;">
      <div class="pad flex">
        <p>Safety Issues:</p>
        <input type="text" style="width: 80%;">
      </div>
      <div class="pad bl">
        <input type="text">
      </div>
    </div>
    <div class="bg-white bb grid" style="grid-template-columns: 18fr 6fr;">
      <div class="pad" style="padding: 5px 0;">
        <p style="border-bottom: 1px solid black;"><input type="text"></p>
        <p><input type="text"></p>
      </div>
       <div class="bl" style="display: grid; place-items: center;">
        <p style="font-size: 12px;">Patient is a Veteran? <input type="checkbox">Yes <input type="checkbox">No</p>
       </div>
    </div>
    <div class="insurance-info">
      <div>
          <p class="ref-info">
            INSURANCE INFORMATION
          </p>
      </div>
      <div class="choices">
        <h3>PRIMARY:</h3>
        <h3><input type="checkbox" name="" id=""> Medicare</h3>
        <h3><input type="checkbox" name="" id=""> Medicaid</h3>
        <h3><input type="checkbox" name="" id=""> Other: <input type="text" style="width: 70%;"></h3>
      </div>
    </div>


    <div class="bg-white grid bb" style="grid-template-columns: repeat(3, 1fr);">
      <div>
          <p class="pad">
            Medicare #: <input type="text">
          </p>
      </div>
      <div class="bl">
          <p class="pad">
            Social Security #: <input type="text">
          </p>
      </div>
      <div class="bl">
          <p class="pad">
            Medicaid #: <input type="text">
          </p>
      </div>
    </div>
    <div class="bg-white grid bb" style="grid-template-columns: 2fr 1fr;">
      <div>
          <p class="pad bb">
            <strong>Other Insurance Coverage</strong> - Insured Name: <input type="text">
          </p>
         <div class="grid" style="grid-template-columns: repeat(2, 1fr)">
          <p class="pad">
            Group Policy #: <input type="text">
          </p>
          <p class="pad bl">
            Insured Social Security #: <input type="text">
          </p>
         </div>
      </div>
      <div class="bl">
          <p class="pad">
            Co-pay/coverage benefits/limits or VA: <input type="text" style="height: 2.2rem;">
          </p>
      </div>
    </div>
  </div>

</body>
</html>