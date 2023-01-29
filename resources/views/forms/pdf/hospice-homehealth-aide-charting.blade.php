<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hospice Charting</title>

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
      table {
        border-collapse: collapse;
        width: 100%;
      }
      table th,
      table td {
        font-size: 16px;
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
        background: linear-gradient(
          90deg,
          rgba(var(--sky-blue-value), 1) 0%,
          rgba(var(--sky-blue-value), 0) 100%
        );
      }
      input {
        width: 100%;
        font-size: 16px;
        border: none;
      }
      .container {
        max-width: 960px;
        margin: auto;
      }

      .flex {
        display: flex;
      }

      input[type='checkbox'] {
        width: 25px;
      }
    </style>
  </head>
  <body>
    <div class="container" style="padding: 30px 0">
      <div class="flex" style="border-bottom: var(--border)">
        <h3 style="margin-right: 10px; margin-bottom: 8px">
          <input type="checkbox" /><span style="font-size:15px;">Hospice Aide</span> 
        </h3>
        <h3 style="margin-right: 10px; margin-bottom: 8px">
          <input type="checkbox" /><span style="font-size:15px;">Home Health Aide</span> 
        </h3>
        <h3 style="margin-right: 10px; margin-bottom: 8px">
          <input type="checkbox" /><span style="font-size:15px;">Homemaker</span> 
        </h3>
        <h2 style="margin-left: 3rem;"><span style="font-size:18px;">AIDE/HOMEMAKER CARE PLAN</span> </h2>
      </div>
      <div class="flex">
        <div
          style="
            width: 50%;
            border-right: var(--border);
            border-bottom: var(--border);
            padding: 4px;
          "
        >
          <p>Patient Name</p>
          <p>&nbsp;{{$data->patient_name}}</p>
        </div>
        <div style="width: 20%; border-bottom: var(--border); padding: 4px">
          <p>ID #</p>
          <p>&nbsp;{{$data->id_number}}</p>
        </div>
        <div
          style="
            width: 30%;
            border-left: var(--border);
            border-bottom: var(--border);
            padding: 4px;
          "
        >
          <p>Date of First Visit</p>
          <p>&nbsp;{{$data->date_first_visit}}</p>
        </div>
      </div>
      <div class="flex">
        <div
          style="
            width: 40%;
            border-right: var(--border);
            border-bottom: var(--border);
            padding: 4px;
          "
        >
          <p>Team Leader</p>
          <p>&nbsp;{{$data->team_leader}}</p>
        </div>
        <div style="width: 20%; border-bottom: var(--border); padding: 4px">
          <p>Frequency</p>
          <p>&nbsp;{{$data->frequency}}</p>
        </div>
        <div
          style="
            width: 40%;
            border-left: var(--border);
            border-bottom: var(--border);
            padding: 4px;
          "
        >
          <p>Caregiver Name</p>
          <p>&nbsp;{{$data->caregiver_name}}</p>
        </div>
      </div>
      <div style="border-bottom: var(--border); padding: 4px">
        <p>Diagnosis/Patient Problems</p>
        <p>&nbsp;{{$data->diagnosis}}</p>
      </div>
      <div class="flex">
        <div
          style="
            width: 60%;
            border-right: var(--border);
            border-bottom: var(--border);
            padding: 4px;
          "
        >
          <p>Address</p>
          <p>&nbsp;{{$data->address}}</p>
        </div>
        <div style="width: 20%; border-bottom: var(--border); padding: 4px">
          <p>Phone #</p>
          <p>&nbsp;{{$data->phone_number}}</p>
        </div>
        <div
          style="
            width: 20%;
            border-left: var(--border);
            border-bottom: var(--border);
            padding: 4px;
          "
        >
          <p>Date of Birth</p>
          <p>&nbsp;{{$data->dob}}</p>
        </div>
      </div>
      <div style="border-bottom: var(--border); padding: 4px">
        <p>Directions</p>
        {{-- <p>&nbsp;{{$data->directions}}</p> --}}
        @php
            $collection = explode("\n", $data->directions);
        @endphp                           
        @foreach ($collection as $item)
            <p>&nbsp;{{$item}}</p>                              
        @endforeach
      </div>
      {{-- <div style="border-bottom: var(--border); padding: 4px">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </div> --}}

      <p style="margin: 16px auto 8px">
        ASSIGNMENTS: Specify daily visit frequency with day of week.
      </p>
      <div class="flex">
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
                <td>{{$data->temperature}}</td>
              </tr>
              <tr>
                <td>BP</td>
                <td>{{$data->bp}}</td>
              </tr>
              <tr>
                <td>Pulse</td>
                <td>{{$data->pulse}}</td>
              </tr>
              <tr>
                <td>Respiration</td>
                <td>{{$data->respiration}}</td>
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
                <td>{{$data->f_tub}}</td>
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
                <td>{{$data->f_bed}}</td>
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
                <td>{{$data->f_bath}}</td>
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
                <td>{{$data->f_shampoo}}</td>
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
                <td>{{$data->f_comb}}</td>
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
                <td>{{$data->f_mouth}}</td>
              </tr>
              <tr>
                <td>
                  Shave<br />
                  <p><input type="checkbox" />Electr.</p>
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
                <td>{{$data->f_shave}}</td>
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
                <td>{{$data->f_clean_nails}}</td>
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
                <td>{{$data->f_perineal_care}}</td>
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
                <td>{{$data->f_cath_care}}</td>
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
                <td>{{$data->f_measure_cath}}</td>
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
                <td>{{$data->f_empty_drainage}}</td>
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
                <td>{{$data->f_apply_lotion}}</td>
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
                <td>{{$data->f_ambulation}}</td>
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
                <td>{{$data->f_walker}}</td>
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
                <td>{{$data->f_chair}}</td>
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
                <td>{{$data->f_dangle}}</td>
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
                <td>{{$data->f_exercise}}</td>
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
                <td>{{$data->f_reposition}}</td>
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
                <td>{{$data->f_others}}</td>
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
                <td>{{$data->f_prepare_meals}}</td>
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
                <td>{{$data->f_feed}}</td>
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
                <td>{{$data->f_setup}}</td>
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
                <td>{{$data->f_offer_oral}}</td>
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
                <td>{{$data->f_change_linens}}</td>
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
                <td>{{$data->f_make_bed}}</td>
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
                <td>{{$data->f_straighten}}</td>
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
                <td>{{$data->f_laundry}}</td>
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
                <td>{{$data->f_shopping}}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div
        class="flex"
        style="margin: 16px auto 8px; border-bottom: var(--border)"
      >
        <p style="margin-right: 20px; margin-bottom: 8px">
          <input type="checkbox" />DO CPR
        </p>
        <p style="margin-right: 20px; margin-bottom: 8px">
          <input type="checkbox" />DO <strong>NOT</strong> DO CPR
        </p>
      </div>
      <div style="margin-bottom: 8px; border-bottom: var(--border)">
        <p style="font-weight: bold">PERTINENT INFORMATION</p>
        <div class="flex" style="margin-top: 8px">
          <div style="width: 33.33333%">
            <p><input type="checkbox" />DNR</p>
            <p><input type="checkbox" />Lives Alone</p>
            <p><input type="checkbox" />Lives with other: <u>{{$data->p_lives}}</u></p>
            <p><input type="checkbox" />Alone during the day</p>
            <p>
              <span><input type="checkbox" />Bed Bound</span>
              <span><input type="checkbox" />Bed Rest/BRP's</span><br />
              <span style="margin-left: 16px">
                <input type="checkbox" />Up as tolerated
              </span>
            </p>
            <p><input type="checkbox" />Amputee (specify): <u>{{$data->p_amputee}}</u></p>
          </div>
          <div style="width: 33.33333%">
            <p>
              <span><input type="checkbox" />Partial weight bearing:</span
              ><br />
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
            <p><input type="checkbox" />Prosthesis (specify): <u>{{$data->p_prosthesis}}</u></p>
            <p><input type="checkbox" />Special Equipment: <u>{{$data->p_special_equipment}}</u></p>
            <p><input type="checkbox" />Speech/Communication deficit</p>
            <p>
              <span><input type="checkbox" />Vision deficit</span>
              <span><input type="checkbox" />Glasses</span><br />
              <span style="margin-left: 16px">
                <span><input type="checkbox" />Contacts</span>
                <span><input type="checkbox" />Others: <u>{{$data->p_vision_others}}</u></span>
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
              <span style="margin-left: 16px">
                <span><input type="checkbox" />Diet: <u>{{$data->p_diet}}</u></span>
              </span>
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
              <u>{{$data->p_allergies}}</u>
            </p>
          </div>
        </div>
      </div>
      <div style="margin-bottom: 8px; border-bottom: var(--border)">
        <div class="flex">
          <div style="width: 33.33333%; border-right: var(--border)">
            <p style="font-weight: bold; margin-bottom: 8px">SAFETY</p>
            <p><input type="checkbox" />Fall Precautions</p>
            <p><input type="checkbox" />24&deg; Supervision</p>
            <p><input type="checkbox" />Emergency Call System</p>
            <p><input type="checkbox" />Other: <u>{{$data->s_other}}</u></p>
          </div>
          <div style="width: 33.33333%; border-right: var(--border)">
            <p style="margin-bottom: 8px">
              <input type="checkbox" />Other: (specify):
            </p>
            <p><u>{{$data->so_precautions}}</u></p>
            <p><u>{{$data->so_supervision}}</u></p>
            <p><u>{{$data->so_emergency}}</u></p>
            <p><u>{{$data->so_other}}</u></p>
          </div>
          <div style="width: 33.33333%">
            <p style="margin-bottom: 8px">
              <input type="checkbox" />Special Instructions:
            </p>
            <p><u>{{$data->si_precautions}}</u></p>
            <p><u>{{$data->si_supervision}}</u></p>
            <p><u>{{$data->si_emergency}}</u></p>
            <p><u>{{$data->si_other}}</u></p>
          </div>
        </div>
      </div>
      <div style="margin-bottom: 8px">
        <div class="flex">
          <div style="width: 50%; padding-right: 2px">
            <p style="font-weight: bold; margin-bottom: 8px">
              parameters/Special Conditions to report to RN/Therapist:
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
            @php
                $collection = explode("\n", $data->special_instructions);
            @endphp                           
            @foreach ($collection as $item)
                <p><u>{{$item}}</u></p>                             
            @endforeach
            {{-- <p>______________________________________________________</p>
            <p>______________________________________________________</p>
            <p>______________________________________________________</p> --}}
          </div>
        </div>
      </div>
      <div class="flex" style="border: var(--border)">
        <div style="width: 25%; border-right: var(--border)">
          <p style="text-align: center; padding: 8px">
            Review Date / Signature
          </p>
          <p>&nbsp;</p>
        </div>
        <div style="width: 25%; border-right: var(--border)">
          <p style="text-align: center; padding: 8px">
            Review Date / Signature
          </p>
          <p>&nbsp;</p>
        </div>
        <div style="width: 25%; border-right: var(--border)">
          <p style="text-align: center; padding: 8px">
            Review Date / Signature
          </p>
          <p>&nbsp;</p>
        </div>
        <div style="width: 25%">
          <p style="text-align: center; padding: 8px">
            Review Date / Signature
          </p>
          <p>&nbsp;</p>
        </div>
      </div>
      <div class="flex" style="border: var(--border)">
        <div style="width: 75%; border-right: var(--border); display: flex;">
          <span style="font-size: 2rem;" class="triangle">&#9654;</span>
          <p style="padding: 8px">RN / Therapist Signature</p>
          <p>&nbsp;</p>
        </div>
        <div style="width: 25%">
          <p style="padding: 8px">Date</p>
          <p>&nbsp;{{$data->date}}</p>
        </div>
      </div>
    </div>
  </body>
</html>
