<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PATIENT CHART AUDIT AND MONITORING</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap");
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
        font-size: 11px;
      }
      .same {
        width: 119.59px;
      }
      .pos {
        margin-right: 60px;
      }
      body {
        display: flex;
        justify-content: center;
        height: 100%;
        background-color: #f5f5f5;
        padding: 2rem 0;
      }
      .page {
        margin-top: 1px;
        padding: 1cm;
        width: 210mm;
        height: auto;
        background: #fff;
      }
      table {
        border-collapse: collapse;
        empty-cells: hide;
      }
      tr,
      td {
        border: 1px solid black;
      }
      html {
        zoom: 175%;
      }
      @media print {
        html {
          zoom: 100%;
        }
      }
      .b-top {
        border-top: none;
      }
      .b-btm {
        border-bottom: none;
      }
      .b-right {
        border-right: none;
      }
      .b-left {
        border-left: none;
      }
      .f-bold {
        font-weight: bold;
      }
      .w-10 {
        width: 10%;
      }
      .w-20 {
        width: 20%;
      }
      .w-30 {
        width: 30%;
      }
      .w-40 {
        width: 40%;
      }
      .w-50 {
        width: 50%;
      }
      .w-60 {
        width: 60%;
      }
      .w-70 {
        width: 70%;
      }
      .w-80 {
        width: 80%;
      }
      .w-90 {
        width: 90%;
      }
      .w-100 {
        width: 100%;
      }
      .flex {
        display: flex;
      }
      .flex-between {
        display: flex;
        justify-content: space-between;
      }
      .flex-column {
        display: flex;
        flex-direction: column;
      }
      .flex-center {
        display: flex;
        justify-content: center;
      }
      .flex-center-align {
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .flex-around {
        display: flex;
        justify-content: space-around;
      }
      .flex-end {
        display: flex;
        justify-content: flex-end;
      }
      .text-center {
        text-align: center;
      }
      .text-left {
        text-align: left;
      }
      .text-vmid {
        vertical-align: middle;
      }
      .none {
        display: none;
      }
      .visibility {
        visibility: hidden;
      }
      /*border*/
      .border {
        border: 1px solid black;
      }
      .b-none {
        border: none;
      }
      /* width */
      .width-5 {
        width: 5px;
      }
      .width-10 {
        width: 10px;
      }
      .width-20 {
        width: 20px;
      }
      .width-30 {
        width: 30px;
      }
      .width-40 {
        width: 40px;
      }
      .width-50 {
        width: 50px;
      }
      .width-60 {
        width: 60px;
      }
      .width-70 {
        width: 70px;
      }
      .width-80 {
        width: 80px;
      }
      .width-90 {
        width: 90px;
      }
      .width-100 {
        width: 100px;
      }
      .width-125 {
        width: 125px;
      }
      .width-150 {
        width: 150px;
      }
      .width-200 {
        width: 200px;
      }
      .width-160 {
        width: 160px;
      }
      .width-170 {
        width: 170px;
      }
      /* height */
      .height-5 {
        height: 5px;
      }
      .height-10 {
        height: 10px;
      }
      .height-20 {
        height: 20px;
      }
      .height-30 {
        height: 30px;
      }
      .height-40 {
        height: 40px;
      }
      .height-50 {
        height: 50px;
      }
      .height-60 {
        height: 60px;
      }
      .height-70 {
        height: 70px;
      }
      .height-80 {
        height: 80px;
      }
      .height-90 {
        height: 90px;
      }
      .height-100 {
        height: 100px;
      }
      .none {
        display: none;
      }
      /* borders */
      .b-top {
        border-top: none;
      }
      .b-btm {
        border-bottom: none;
      }
      .b-right {
        border-right: none;
      }
      .b-left {
        border-left: none;
      }
      /* padding */
      .pad-5 {
        padding: 5px;
      }
      .inline {
        display: inline;
      }
      .bg-blue {
        background: #00b0f0;
      }
      .bg-green {
        background-color: #92d050;
      }
      .bg-yellow {
        background: #ffff00;
      }
      .bg-red {
        background-color: #ff0000;
      }
      .bg-orange {
        background: #ffc000;
      }
      .bg-green-1 {
        background: #00ff00;
      }
      .bg-white {
        border: 0;
      }
      input[type="text"] {
        outline: none;
      }
    </style>
  </head>
  <body>
    <div class="container">
      
      <div class="page">
        <div style="display: flex; flex-direction: row; align-items: flex-start;">
          <div style="display: flex; align-items: center">
              @if (!empty(Auth::user()->company_id))
                  <img src="{{ asset('/company_images/'.@Auth::user()->company->company_logo) }}" height="40" alt="final" border="0">&nbsp;
                  <h3>{{@Auth::user()->company->company_name}}</h3>
              @endif
          </div>
        </div>   
        <div class="text-center f-bold">PATIENT CHART AUDIT AND MONITORING</div>
        <br />
        <div>
          <table class="w-100">
            <tr>
              <td class="text-center bg-blue w-40">Patient Name</td>
              <td class="text-center bg-blue w-20">MRN</td>
              <td class="text-center bg-blue">Certification Period</td>
            </tr>
            <tr>
              <td><input type="text" class="w-100 b-none" /></td>
              <td><input type="text" class="w-100 b-none" /></td>
              <td><input type="text" class="w-100 b-none" /></td>
            </tr>
          </table>
          <br />
          <br />
          <table>
            <tr class="bg-white">
              <td colspan="2" class="bg-white"></td>
              <td colspan="4" class="text-center bg-green">
                All visits MUST MATCH with Frequency
              </td>
            </tr>
            <tr>
              <td class="text-center w-10 bg-green">SOC DATE</td>
              <td class="text-center w-10 bg-green">Next IDG</td>
              <td class="text-center w-10 bg-green">RN Frequency</td>
              <td class="text-center w-10 bg-green">HHA Frequency</td>
              <td class="text-center w-10 bg-green">SC Frequency</td>
              <td class="text-center w-10 bg-green">SW Frequency</td>
            </tr>
            <tr>
              <td><input type="text" class="w-100 b-none" /></td>
              <td><input type="text" class="w-100 b-none" /></td>
              <td><input type="text" class="w-100 b-none" /></td>
              <td><input type="text" class="w-100 b-none" /></td>
              <td><input type="text" class="w-100 b-none" /></td>
              <td><input type="text" class="w-100 b-none" /></td>
            </tr>
          </table>
          <br />
          <table>
            <tr>
              <td class="text-center bg-green width-150">
                Emergency Plan Form for Patient
              </td>
              <td class="text-center bg-green width-150">
                Hospice Eligibility
              </td>
              <td class="text-center bg-green width-150">
                Emergency Plan Form for Patient
              </td>
            </tr>
            <tr>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
            </tr>
          </table>
          <br />
          <br />
          <div class="inline bg-yellow">FIRST 5 DAYS</div>
          <br />
          <br />

          <table>
            <tr>
              <td class="text-center same bg-red">Signed Consents</td>
              <td class="text-center same bg-yellow">RN Initial Assessment</td>
              <td class="text-center same bg-yellow">SC Initial Assessment</td>
              <td class="text-center same bg-yellow">
                Bereavement Initial Assessment
              </td>
              <td class="text-center same bg-yellow">SW Initial Assessment</td>
              <td class="text-center same bg-yellow">
                Volunteer Coor Initial Assessment
              </td>
            </tr>
            <tr>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
            </tr>
          </table>
          <br />
          <table>
            <tr>
              <td class="text-center same bg-red">Physician Initial Order</td>
              <td class="text-center same bg-red">Admit/Medication Order</td>
              <td class="text-center same bg-red">
                Verbal Certificate or Terminal Illness
              </td>
              <td class="text-center same bg-red">
                Written Certificate of Terminal Illness
              </td>
              <td class="text-center same bg-yellow">Plan of Care</td>
              <td class="text-center same bg-yellow">
                HHA Initial Plan of Care
              </td>
            </tr>
            <tr>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
            </tr>
          </table>
          <br />
          <table>
            <tr>
              <td class="text-center same bg-yellow">HIS Measures Completed</td>
              <td class="text-center same bg-yellow">
                NOE Submission Completed
              </td>
              <td class="text-center same bg-yellow">
                IDG Plan of Care Done/Printed
              </td>
              <td class="text-center same bg-yellow">
                Hospice Binder at Patient's Home
              </td>
              <td class="text-center same bg-yellow">
                HHA Visits Completed per Freq.
              </td>
              <td class="text-center same bg-yellow">
                DME/Comfort Kit Delivered
              </td>
            </tr>
            <tr>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
            </tr>
          </table>
          <br />
          <br />
          <div class="inline bg-yellow">2<sup>nd</sup> WEEK</div>
          <br />
          <div class="flex-end">
            <div class="pos inline bg-green-1">Only during IDG Week</div>
          </div>

          <table>
            <tr>
              <td class="text-center same bg-orange">RN Visits Completed</td>
              <td class="text-center same bg-orange">
                RN Supervision Completed
              </td>
              <td class="text-center same bg-orange">
                HHA Visits Completed per Freq.
              </td>
              <td class="text-center same bg-orange">Plan of Care Updated</td>
              <td class="text-center same bg-orange">
                All Docs Signed by RN,SC,SW,MD
              </td>
              <td class="text-center same bg-orange">
                IDG Meeting w/ Sign-in Sheet
              </td>
            </tr>
            <tr>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
            </tr>
          </table>
          <br />
          <br />
          <div class="inline bg-yellow">3<sup>rd</sup> WEEK</div>
          <br />
          <div class="flex-end">
            <div class="pos inline bg-green-1">Only during IDG Week</div>
          </div>

          <table>
            <tr>
              <td class="text-center same bg-orange">RN Visits Completed</td>
              <td class="text-center same bg-red">
                Medications Review Completed
              </td>
              <td class="text-center same bg-orange">
                HHA Visits Completed per Freq.
              </td>
              <td class="text-center same bg-orange">Plan of Care Updated</td>
              <td class="text-center same bg-orange">
                All Docs Signed by RN,SC,SW,MD
              </td>
              <td class="text-center same bg-orange">
                IDG Meeting w/ Sign-in Sheet
              </td>
            </tr>
            <tr>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
              <td>
                <div class="flex-around">
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                  <div>
                    <input type="text" class="w-100 text-center b-none" />
                  </div>
                </div>
                <div class="flex-around">
                  <div>Y/N</div>
                  <div>Date</div>
                </div>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="page">
        <div class="inline bg-yellow">4<sup>th</sup> WEEK</div>
        <br />
        <div class="flex-end">
          <div class="pos inline bg-green-1">Only during IDG Week</div>
        </div>

        <table>
          <tr>
            <td class="text-center same bg-orange">RN Visits Completed</td>
            <td class="text-center same bg-orange">RN Supervision Completed</td>
            <td class="text-center same bg-orange">
              HHA Visits Completed per Freq.
            </td>
            <td class="text-center same bg-orange">Plan of Care Updated</td>
            <td class="text-center same bg-orange">
              All Docs Signed by RN,SC,SW,MD
            </td>
            <td class="text-center same bg-orange">
              IDG Meeting w/ Sign-in Sheet
            </td>
          </tr>
          <tr>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
          </tr>
        </table>
        <br />
        <br />
        <div class="inline bg-yellow">5<sup>th</sup> WEEK</div>
        <br />
        <div class="flex-end">
          <div class="pos inline bg-green-1">Only during IDG Week</div>
        </div>

        <table>
          <tr>
            <td class="text-center same bg-orange">RN Visits Completed</td>
            <td class="text-center same bg-red">
              Medications Review Completed
            </td>
            <td class="text-center same bg-orange">
              HHA Visits Completed per Freq.
            </td>
            <td class="text-center same bg-yellow">
              SC Monthly Visit Completed
            </td>
            <td class="text-center same bg-yellow">
              SW Monthly Visit Completed
            </td>
            <td class="text-center same bg-orange">
              IDG Meeting w/ Sign-in Sheet
            </td>
          </tr>
          <tr>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
          </tr>
        </table>
        <br />
        <br />
        <div class="inline bg-yellow">6<sup>th</sup> WEEK</div>
        <br />
        <div class="flex-end">
          <div class="pos inline bg-green-1">Only during IDG Week</div>
        </div>

        <table>
          <tr>
            <td class="text-center same bg-orange">RN Visits Completed</td>
            <td class="text-center same bg-orange">RN Supervision Completed</td>
            <td class="text-center same bg-orange">
              HHA Visits Completed per Freq.
            </td>
            <td class="text-center same bg-orange">Plan of Care Updated</td>
            <td class="text-center same bg-orange">
              All Docs Signed by RN,SC,SW,MD
            </td>
            <td class="text-center same bg-orange">
              IDG Meeting w/ Sign-in Sheet
            </td>
          </tr>
          <tr>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
          </tr>
        </table>
        <br />
        <br />
        <div class="inline bg-yellow">7<sup>th</sup> WEEK</div>
        <br />
        <div class="flex-end">
          <div class="pos inline bg-green-1">Only during IDG Week</div>
        </div>

        <table>
          <tr>
            <td class="text-center same bg-orange">RN Visits Completed</td>
            <td class="text-center same bg-red">
              Medications Review Completed
            </td>
            <td class="text-center same bg-orange">
              HHA Visits Completed per Freq.
            </td>
            <td class="text-center same bg-orange">Plan of Care Updated</td>
            <td class="text-center same bg-orange">
              All Docs Signed by RN,SC,SW,MD
            </td>
            <td class="text-center same bg-orange">
              IDG Meeting w/ Sign-in Sheet
            </td>
          </tr>
          <tr>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
          </tr>
        </table>
        <br />
        <br />
        <div class="inline bg-yellow">8<sup>th</sup> WEEK</div>
        <br />
        <div class="flex-end">
          <div class="pos inline bg-green-1">Only during IDG Week</div>
        </div>

        <table>
          <tr>
            <td class="text-center same bg-orange">RN Visits Completed</td>
            <td class="text-center same bg-orange">RN Supervision Completed</td>
            <td class="text-center same bg-orange">
              HHA Visits Completed per Freq.
            </td>
            <td class="text-center same bg-orange">Plan of Care Updated</td>
            <td class="text-center same bg-orange">
              All Docs Signed by RN,SC,SW,MD
            </td>
            <td class="text-center same bg-orange">
              IDG Meeting w/ Sign-in Sheet
            </td>
          </tr>
          <tr>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
          </tr>
        </table>
        <br />
        <br />
        <div class="inline bg-yellow">9<sup>th</sup> WEEK</div>
        <br />
        <div class="flex-end">
          <div class="pos inline bg-green-1">Only during IDG Week</div>
        </div>

        <table>
          <tr>
            <td class="text-center same bg-orange">RN Visits Completed</td>
            <td class="text-center same bg-red">
              Medications Review Completed
            </td>
            <td class="text-center same bg-orange">
              HHA Visits Completed per Freq.
            </td>
            <td class="text-center same bg-yellow">
              SC Monthly Visit Completed
            </td>
            <td class="text-center same bg-yellow">
              SW Monthly Visit Completed
            </td>
            <td class="text-center same bg-orange">
              IDG Meeting w/ Sign-in Sheet
            </td>
          </tr>
          <tr>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="page">
        <div class="inline bg-yellow">10<sup>th</sup> WEEK</div>
        <br />
        <div class="flex-end">
          <div class="pos inline bg-green-1">Only during IDG Week</div>
        </div>

        <table>
          <tr>
            <td class="text-center same bg-orange">RN Visits Completed</td>
            <td class="text-center same bg-orange">RN Supervision Completed</td>
            <td class="text-center same bg-orange">
              HHA Visits Completed per Freq.
            </td>
            <td class="text-center same bg-orange">Plan of Care Updated</td>
            <td class="text-center same bg-orange">
              All Docs Signed by RN,SC,SW,MD
            </td>
            <td class="text-center same bg-orange">
              IDG Meeting w/ Sign-in Sheet
            </td>
          </tr>
          <tr>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
          </tr>
        </table>
        <br />
        <br />
        <div class="inline bg-yellow">11<sup>th</sup> WEEK</div>
        <br />
        <div class="flex-end">
          <div class="pos inline bg-green-1">Only during IDG Week</div>
        </div>

        <table>
          <tr>
            <td class="text-center same bg-orange">RN Visits Completed</td>
            <td class="text-center same bg-red">
              Medications Review Completed
            </td>
            <td class="text-center same bg-orange">
              HHA Visits Completed per Freq.
            </td>
            <td class="text-center same bg-orange">Plan of Care Updated</td>
            <td class="text-center same bg-orange">
              All Docs Signed by RN,SC,SW,MD
            </td>
            <td class="text-center same bg-orange">
              IDG Meeting w/ Sign-in Sheet
            </td>
          </tr>
          <tr>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
          </tr>
        </table>
        <br />
        <br />
        <div class="inline bg-yellow">12<sup>th</sup> WEEK</div>
        <br />
        <div class="flex-end">
          <div class="pos inline bg-green-1">Only during IDG Week</div>
        </div>

        <table>
          <tr>
            <td class="text-center same bg-orange">RN Visits Completed</td>
            <td class="text-center same bg-orange">RN Supervision Completed</td>
            <td class="text-center same bg-orange">
              HHA Visits Completed per Freq.
            </td>
            <td class="text-center same bg-orange">Plan of Care Updated</td>
            <td class="text-center same bg-orange">
              All Docs Signed by RN,SC,SW,MD
            </td>
            <td class="text-center same bg-orange">
              IDG Meeting w/ Sign-in Sheet
            </td>
          </tr>
          <tr>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
          </tr>
        </table>
        <br />
        <br />
        <div class="inline bg-yellow">13<sup>th</sup> WEEK</div>
        <br />
        <div class="flex-end">
          <div class="pos inline bg-green-1">Only during IDG Week</div>
        </div>

        <table>
          <tr>
            <td class="text-center same bg-orange">RN Visits Completed</td>
            <td class="text-center same bg-red">
              Medications Review Completed
            </td>
            <td class="text-center same bg-orange">
              HHA Visits Completed per Freq.
            </td>
            <td class="text-center same bg-yellow">
              SC Monthly Visit Completed
            </td>
            <td class="text-center same bg-yellow">
              SW Monthly Visit Completed
            </td>
            <td class="text-center same bg-orange">
              IDG Meeting w/ Sign-in Sheet
            </td>
          </tr>
          <tr>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
            <td>
              <div class="flex-around">
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
                <div>
                  <input type="text" class="w-100 text-center b-none" />
                </div>
              </div>
              <div class="flex-around">
                <div>Y/N</div>
                <div>Date</div>
              </div>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </body>
</html>
