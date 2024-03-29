<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HHA Care Plan</title>

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
      border-bottom: 1px solid var(--border-color);
    }
  </style>
</head>

<body>
  <div class="container" style="padding: 30px 10px; margin-top: 1rem; margin-bottom: 1rem; border-radius: 25px;">
    {{-- <div class="brand-container">
      <div class="flex-container">
        <img src="https://i.ibb.co/kSr11h4/final.png" width="200" alt="final" border="0">
      </div>
    </div> --}}
    <div style="display: flex; flex-direction: row; align-items: flex-start; margin-bottom: 1rem;">
      <div style="display: flex; align-items: center">
          @if (!empty(Auth::user()->company_id))
              <img src="{{ asset('/company_images/'.@Auth::user()->company->company_logo) }}" height="60" alt="final" border="0">&nbsp;
              <h3>{{@Auth::user()->company->company_name}}</h3>
          @endif
      </div>
    </div>  
    <div class="flex" style="border-bottom: var(--border)">
      <h3 style="margin-right: 20px; margin-bottom: 8px">
        <input type="checkbox" />Hospice Aide
      </h3>
      <h3 style="margin-right: 20px; margin-bottom: 8px">
        <input type="checkbox" />Home Health Aide
      </h3>
      <h3 style="margin-right: 20px; margin-bottom: 8px">
        <input type="checkbox" />Homemaker
      </h3>
      <h2 style="margin-left: 3rem;">AIDE/HOMEMAKER CARE PLAN</h2>
    </div>
    <div class="flex bg-white">
      <div style="
            width: 50%;
            border-right: var(--border);
            border-bottom: var(--border);
            padding: 4px;
          ">
        <p>Patient Name</p>
        <input type="text">
      </div>
      <div style="width: 20%; border-bottom: var(--border); padding: 4px">
        <p>ID #</p>
        <input type="text">
      </div>
      <div style="
            width: 30%;
            border-left: var(--border);
            border-bottom: var(--border);
            padding: 4px;
          ">
        <p>Date of First Visit</p>
        <input type="text">
      </div>
    </div>
    <div class="flex bg-white">
      <div style="
            width: 40%;
            border-right: var(--border);
            border-bottom: var(--border);
            padding: 4px;
          ">
        <p>Team Leader</p>
        <input type="text">
      </div>
      <div style="width: 20%; border-bottom: var(--border); padding: 4px">
        <p>Frequency</p>
        <input type="text">
      </div>
      <div style="
            width: 40%;
            border-left: var(--border);
            border-bottom: var(--border);
            padding: 4px;
          ">
        <p>Caregiver Name</p>
        <input type="text">
      </div>
    </div>
    <div class="bg-white" style="border-bottom: var(--border); padding: 4px">
      <p>Diagnosis/Patient Problems</p>
      <input type="text">
    </div>
    <div class="flex bg-white">
      <div style="
            width: 60%;
            border-right: var(--border);
            border-bottom: var(--border);
            padding: 4px;
          ">
        <p>Address</p>
        <input type="text">
      </div>
      <div style="width: 20%; border-bottom: var(--border); padding: 4px">
        <p>Phone #</p>
        <input type="text">
      </div>
      <div style="
            width: 20%;
            border-left: var(--border);
            border-bottom: var(--border);
            padding: 4px;
          ">
        <p>Date of Birth</p>
        <input type="text">
      </div>
    </div>
    <div class="bg-white" style="border-bottom: var(--border); padding: 4px">
      <p>Directions</p>
      <input type="text">
    </div>
    <div class="bg-white" style="border-bottom: var(--border); padding: 4px">
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div>

    <p class="bg-white" style="margin: 16px auto 8px">
      ASSIGNMENTS: Specify daily visit frequency with day of week.
    </p>
    <div class="flex bg-white">
      <div style="width: 50%">
        <table>
          <colgroup>
            <col width="30%" />
            <col width="70%" />
          </colgroup>
          <thead>
            <tr>
              <th>VITAL SIGNS</th>
              <th>FREQUENCY</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Temperature</td>
              <td><input type="text"></td>
            </tr>
            <tr>
              <td>BP</td>
              <td><input type="text"></td>
            </tr>
            <tr>
              <td>Pulse</td>
              <td><input type="text"></td>
            </tr>
            <tr>
              <td>Respiration</td>
              <td><input type="text"></td>
            </tr>
          </tbody>
        </table>

        <table>
          <colgroup>
            <col width="40%" />
            <col width="10%" />
            <col width="10%" />
            <col width="10%" />
            <col width="30%" />
          </colgroup>
          <thead>
            <tr>
              <th></th>
              <th style="font-size: 10px">TOTAL SUPPORT</th>
              <th style="font-size: 10px">ASSIST</th>
              <th style="font-size: 10px">SELF CARE</th>
              <th>FREQUENCY</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td colspan="5">BATH</td>
            </tr>
            <tr>
              <td>
                <p><input type="checkbox" />Tub</p>
                <p><input type="checkbox" />Shower</p>
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td>
                <input type="text" style="border-bottom: 0px">
              </td>
            </tr>
            <tr>
              <td>
                Bed<br />
                <p><input type="checkbox" />Partial</p>
                <p><input type="checkbox" />Complete</p>
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td>
                <input type="text" style="border-bottom: 0px">
              </td>
            </tr>
            <tr>
              <td>Assist Bath-Chair</td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td>
                <input type="text" style="border-bottom: 0px">
              </td>
            </tr>
            <tr>
              <td>Shampoo Hair</td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td>
                <input type="text" style="border-bottom: 0px">
              </td>
            </tr>
            <tr>
              <td>Comb Hair</td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td>
                <input type="text" style="border-bottom: 0px">
              </td>
            </tr>
            <tr>
              <td>Mouth Care</td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td>
                <input type="text" style="border-bottom: 0px">
              </td>
            </tr>
            <tr>
              <td>
                Shave<br />
                <p><input type="checkbox" />Electric</p>
                <p><input type="checkbox" />Straight</p>
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td>
                <input type="text" style="border-bottom: 0px">
              </td>
            </tr>
            <tr>
              <td colspan="5">HAND / FOOT CARE</td>
            </tr>
            <tr>
              <td>
                <p><input type="checkbox" />Clean</p>
                <p><input type="checkbox" />File Nails</p>
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td>
                <input type="text" style="border-bottom: 0px">
              </td>
            </tr>
            <tr>
              <td colspan="5">ELIMINATION</td>
            </tr>
            <tr>
              <td>Perineal Care</td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td>
                <input type="text" style="border-bottom: 0px">
              </td>
            </tr>
            <tr>
              <td>External Cath Care</td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td>
                <input type="text" style="border-bottom: 0px">
              </td>
            </tr>
            <tr>
              <td>Measure Cath Output</td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td>
                <input type="text" style="border-bottom: 0px">
              </td>
            </tr>
            <tr>
              <td>Empty Drainage Bag</td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td>
                <input type="text" style="border-bottom: 0px">
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div style="width: 50%">
        <table>
          <colgroup>
            <col width="40%" />
            <col width="10%" />
            <col width="10%" />
            <col width="10%" />
            <col width="30%" />
          </colgroup>
          <thead>
            <tr>
              <th></th>
              <th style="font-size: 10px">TOTAL SUPPORT</th>
              <th style="font-size: 10px">ASSIST</th>
              <th style="font-size: 10px">SELF CARE</th>
              <th>FREQUENCY</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td colspan="5">SKIN CARE</td>
            </tr>
            <tr>
              <td>Apply Lotion</td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td>
                <input type="text" style="border-bottom: 0px">
              </td>
            </tr>
            <tr>
              <td colspan="5">ACTIVITY</td>
            </tr>
            <tr>
              <td>
                <p><input type="checkbox" />Ambulation</p>
                <p><input type="checkbox" />Mobility</p>
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td>
                <input type="text" style="border-bottom: 0px">
              </td>
            </tr>
            <tr>
              <td>
                <p><input type="checkbox" />Walker</p>
                <p><input type="checkbox" />Wheelchair</p>
                <p><input type="checkbox" />Cane</p>
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td>
                <input type="text" style="border-bottom: 0px">
              </td>
            </tr>
            <tr>
              <td>
                <span><input type="checkbox" />Chair</span>
                <span><input type="checkbox" />Bed</span>
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td>
                <input type="text" style="border-bottom: 0px">
              </td>
            </tr>
            <tr>
              <td>
                <p><input type="checkbox" />Dangle</p>
                <p><input type="checkbox" />Commode</p>
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td>
                <input type="text" style="border-bottom: 0px">
              </td>
            </tr>
            <tr>
              <td>
                Exercise-per<br />
                <span><input type="checkbox" />PT</span>
                <span><input type="checkbox" />OT</span>
                <span><input type="checkbox" />SLP</span>
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td>
                <input type="text" style="border-bottom: 0px">
              </td>
            </tr>
            <tr>
              <td>Reposition Patient</td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td>
                <input type="text" style="border-bottom: 0px">
              </td>
            </tr>
            <tr>
              <td>Others:</td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td>
                <input type="text" style="border-bottom: 0px">
              </td>
            </tr>
            <tr>
              <td colspan="5">MEALS</td>
            </tr>
            <tr>
              <td>Prepare</td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td>
                <input type="text" style="border-bottom: 0px">
              </td>
            </tr>
            <tr>
              <td>Feed</td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td>
                <input type="text" style="border-bottom: 0px">
              </td>
            </tr>
            <tr>
              <td>Setup</td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td>
                <input type="text" style="border-bottom: 0px">
              </td>
            </tr>
            <tr>
              <td>Offer Oral Supplement</td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td>
                <input type="text" style="border-bottom: 0px">
              </td>
            </tr>
            <tr>
              <td colspan="5">HOUSEKEEPING</td>
            </tr>
            <tr>
              <td>Change Bed linens</td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td>
                <input type="text" style="border-bottom: 0px">
              </td>
            </tr>
            <tr>
              <td>Make Bed</td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td>
                <input type="text" style="border-bottom: 0px">
              </td>
            </tr>
            <tr>
              <td>Straighten Room</td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td>
                <input type="text" style="border-bottom: 0px">
              </td>
            </tr>
            <tr>
              <td>Laundry</td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td>
                <input type="text" style="border-bottom: 0px">
              </td>
            </tr>
            <tr>
              <td>Shopping</td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td style="text-align: center">
                <input type="checkbox" />
              </td>
              <td>
                <input type="text" style="border-bottom: 0px">
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="flex bg-white" style="margin: 16px auto 8px; border-bottom: var(--border)">
      <p style="margin-right: 20px; margin-bottom: 8px">
        <input type="checkbox" />DO CPR
      </p>
      <p style="margin-right: 20px; margin-bottom: 8px">
        <input type="checkbox" />DO <strong>NOT</strong> DO CPR
      </p>
    </div>
    <div class="bg-white" style="margin-bottom: 8px; border-bottom: var(--border)">
      <p style="font-weight: bold">PERTINENT INFORMATION</p>
      <div class="flex" style="margin-top: 8px">
        <div style="width: 33.33333%">
          <p><input type="checkbox" />DNR</p>
          <p><input type="checkbox" />Lives Alone</p>
          <div class="flex">
            <p><input type="checkbox" />Lives with other: </p>
            <input class="w-50" type="text">
          </div>
          <p><input type="checkbox" />Alone during the day</p>
          <p>
            <span><input type="checkbox" />Bed Bound</span>
            <span><input type="checkbox" />Bed Rest/BRP's</span><br />
            <span style="margin-left: 16px">
              <input type="checkbox" />Up as tolerated
            </span>
          </p>
          <div class="flex">
            <p><input type="checkbox" />Amputee (specify):</p>
            <input class="w-45" type="text">
          </div>
        </div>
        <div style="width: 33.33333%">
          <p>
            <span><input type="checkbox" />Partial weight bearing:</span><br />
            <span style="margin-left: 16px">
              <span><input type="checkbox" />Right</span>
              <span><input type="checkbox" />Left</span>
            </span>
          </p>
          <p>
            <span><input type="checkbox" />Non-weight bearing:</span><br />
            <span style="margin-left: 16px">
              <span><input type="checkbox" />Right</span>
              <span><input type="checkbox" />Left</span>
            </span>
          </p>
          <p><input type="checkbox" />Hip precautions</p>
          <p><input type="checkbox" />Prone to fractures</p>
        </div>
        <div style="width: 33.33333%">
          <div class="flex">
            <p><input type="checkbox" />Prosthesis (specify):</p>
            <input class="w-45" type="text">
          </div>
          <div class="flex">
            <p><input type="checkbox" />Special Equipment:</p>
            <input class="w-45" type="text">
          </div>
          <p><input type="checkbox" />Speech/Communication deficit</p>
          <p>
            <span><input type="checkbox" />Vision deficit</span>
            <span><input type="checkbox" />Glasses</span><br />
            <span style="margin-left: 16px">
              <span><input type="checkbox" />Contacts</span>
              <div class="flex">
                <p><input type="checkbox" />Others:</p>
                <input class="w-50" type="text">
              </div>
            </span>
          </p>
          <p>
            <span><input type="checkbox" />Hearing deficit</span>
            <span><input type="checkbox" />Hearing Aid</span>
          </p>
        </div>
      </div>
      <div class="flex" style="margin-top: 8px">
        <div style="width: 50%; padding-left: 100px">
          <p>
            <span><input type="checkbox" />Dentures:</span><br />
            <span style="margin-left: 16px">
              <span><input type="checkbox" />Upper</span>
              <span><input type="checkbox" />Lower</span>
              <span><input type="checkbox" />Partial</span>
            </span>
          </p>
          <p>
            <span><input type="checkbox" />Oriented x 3</span>
            <span><input type="checkbox" />Alert</span>
          </p>
          <p>
            <span><input type="checkbox" />Forgetful/Confused</span>
          </p>
          <p>
            <span><input type="checkbox" />Diabetic</span><br />
          <div class="flex">
            <span><input type="checkbox" />Diet:</span>
            <input class="w-50" type="text">
          </div>
          </p>
        </div>
        <div style="width: 50%; padding-left: 100px">
          <p>
            <span><input type="checkbox" />Seizure precautions</span>
          </p>
          <p>
            <span><input type="checkbox" />Bleeding precautions</span>
          </p>
          <p>
            <span><input type="checkbox" />Pain Medication</span>
          </p>
          <p>
            <span><input type="checkbox" />O<sub>2</sub></span>
          </p>
          <p>
            <span><input type="checkbox" />Allergies (specify):</span><br />
            <input type="text">
          </p>
        </div>
      </div>
    </div>
    <div class="bg-white" style="margin-bottom: 8px; border-bottom: var(--border)">
      <div class="flex">
        <div style="width: 33.33333%; border-right: var(--border)">
          <p style="font-weight: bold; margin-bottom: 8px">SAFETY</p>
          <p><input type="checkbox" />Fall Precautions</p>
          <p><input type="checkbox" />24&deg; Supervision</p>
          <p><input type="checkbox" />Emergency Call System</p>
          <div class="flex">
            <p><input type="checkbox" />Other:</p>
            <input class="w-50" type="text">
          </div>
        </div>
        <div style="width: 33.33333%; border-right: var(--border)">
          <p style="margin-bottom: 8px">
            <input type="checkbox" />Other: (specify):
          </p>
          <p><input type="text"></p>
          <p><input type="text"></p>
          <p><input type="text"></p>
          <p><input type="text"></p>
        </div>
        <div style="width: 33.33333%">
          <p style="margin-bottom: 8px">
            <input type="checkbox" />Special Instructions:
          </p>
          <p><input type="text"></p>
          <p><input type="text"></p>
          <p><input type="text"></p>
          <p><input type="text"></p>
        </div>
      </div>
    </div>
    <div class="bg-white" style="margin-bottom: 8px">
      <div class="flex">
        <div style="width: 50%; padding-right: 2px">
          <p style="font-weight: bold; margin-bottom: 8px">
            Parameters/Special Conditions to report to RN/Therapist:
          </p>
          <p>
            New Skin or Wound Breakdown, No BM in 3 days, Change in ability to
            rate pain, Patient exhibiting signs of pain such as grimacing,
            moaning and guarding
          </p>
        </div>
        <div style="width: 50%; padding-left: 2px">
          <p style="margin-bottom: 8px">
            <input type="checkbox" />Special Instructions:
          </p>
          <p><input type="text"></p>
          <p><input type="text"></p>
          <p><input type="text"></p>
        </div>
      </div>
    </div>
    <div class="flex bg-white" style="border: var(--border)">
      <div style="width: 25%; border-right: var(--border)">
        <p style="text-align: center; padding: 8px">
          Review Date / Signature
        </p>
        <input type="text">
      </div>
      <div style="width: 25%; border-right: var(--border)">
        <p style="text-align: center; padding: 8px">
          Review Date / Signature
        </p>
        <input type="text">
      </div>
      <div style="width: 25%; border-right: var(--border)">
        <p style="text-align: center; padding: 8px">
          Review Date / Signature
        </p>
        <input type="text">
      </div>
      <div style="width: 25%">
        <p style="text-align: center; padding: 8px">
          Review Date / Signature
        </p>
        <input type="text">
      </div>
    </div>
    <div class="flex bg-white" style="border: var(--border)">
      <div style="width: 75%; border-right: var(--border); display: flex;">
        <span style="font-size: 2rem;" class="triangle">&#9654;</span>
        <p style="padding: 8px">RN / Therapist Signature</p>
        <input type="text">
      </div>
      <div style="width: 25%">
        <p style="padding: 8px">Date</p>
        <input type="text">
      </div>
    </div>
  </div>

  <div class="floating-buttons">
    <button onclick="openPrintPreview()">Print Preview</button>
    <button onclick="saveAsPDF()">Save as PDF</button>
    <button onclick="saveAndEmail()">Save and Email</button>
  </div>

</body>

<style>
  body {
    margin: 0;
    padding: 0;
    position: relative;
    height: 100vh;
  }

  .floating-buttons {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 999;
  }

  .floating-buttons button {
    margin-top: 10px;
    display: block;
  }

  @media print {
    .floating-buttons {
      display: none;
    }
  }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.js"></script>
<script>
function openPrintPreview() {
  window.print();
}

function saveAsPDF() {
  // var element = document.body;

  //   html2pdf(element, {
  //     margin: 10,
  //     filename: 'document.pdf',
  //     image: { type: 'jpeg', quality: 1 },
  //     // html2canvas: { scale: 1 },
  //     jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
  //   });
  var doc = document.body;

    //Wait until PDF is ready to print    
    if (typeof doc.print === 'undefined') {    
        setTimeout(function(){printDocument(documentId);}, 1000);
    } else {
        doc.print();
    }
}

function saveAndEmail() {
  var element = document.body; // Choose the element you want to save as PDF

  html2pdf(element, {
    margin: 10,
    filename: 'document.pdf',
    image: { type: 'jpeg', quality: 0.98 },
    html2canvas: { scale: 2 },
    jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
  }).then(function(pdf) {
    // Convert the PDF to a data URL
    var dataUrl = pdf.output('dataurlstring');

    // Open the user's default email client with a prepopulated email
    window.location.href = 'mailto:recipient@example.com?subject=Document&body=Please find attached document.&attachment=' + encodeURIComponent(dataUrl);
  });
}
</script>

</html>