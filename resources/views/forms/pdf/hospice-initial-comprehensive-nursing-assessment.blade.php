<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hospice Initial - Comprehensive Nursing Assessment</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap");
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
        font-size: 9px;
        color: #3d0055;
      }
      img {
        width: 100%;
        height: 100%;
        object-fit: fill;
      }
      html {
        zoom: 175%;
      }
      @media print {
        html {
          zoom: 100%;
        }
      }
      body {
        display: flex;
        justify-content: center;
        height: 100%;
        background-color: #f5f5f5;
      }
      .container {
        display: flex;
        flex-direction: column;
      }
      .page {
        padding: 1cm;
        width: 210mm;
        height: 297mm;
        background: #fff;
      }
      /* background */
      .bg-white {
        background-color: #fff;
      }
      .bg-violet {
        background-color: #543052;
      }
      .bg-purple {
        background-color: #ded4df;
      }
      .bg-violet-1 {
        background: linear-gradient(#cdbee6, #fff);
      }
      .bg-violet-2 {
        background: #cdbee6;
      }
      .bg-green {
        background: linear-gradient(#c8fdc6, #fff);
      }
      .bg-green-1 {
        background-color: #c8fdc6;
      }
      input[type="text"] {
        outline: none;
        border: none;
        background-color: transparent;
      }

      input[type="text-1"] {
        outline: none;
        border-top: none;
        border-right: none;
        border-left: none;
        background-color: transparent;
      }
      table {
        border-collapse: collapse;
        width: 100%;
      }
      tr,
      td {
        border: 1px solid black;
      }
      .wala {
        font-size: 6px;
      }
      /* flex */
      .flex {
        display: flex;
      }
      .flex-between {
        display: flex;
        justify-content: space-between;
      }
      .flex-around {
        display: flex;
        justify-content: space-around;
      }
      .flex-column {
        display: flex;
        flex-direction: column;
      }
      .flex-center {
        display: flex;
        justify-content: center;
      }
      .flex-end-1 {
        display: flex;
        justify-content: flex-end;
      }
      .flex-center-1 {
        display: flex;
        align-items: center;
      }
      .flex-center-align {
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .flex-top {
        display: flex;
        align-items: flex-start;
      }
      .flex-grow-1 {
        flex-grow: 1;
      }
      .inline-block {
        display: inline-block;
      }
      .inline {
        display: inline;
      }
      .flex-end {
        display: flex;
        align-items: flex-end;
      }
      .gamay {
        font-size: 7px;
      }
      .kagamay {
        font-size: 6px;
      }
      .fit-content {
        width: fit-content;
      }
      .block-fit {
        block-size: fit-content;
      }
      .w-auto {
        width: auto;
      }
      /*border*/
      .border {
        border: 1px solid black;
      }
      /* width */
      .width-5 {
        width: 5px;
      }
      .width-10 {
        width: 10px;
      }
      .width-15 {
        width: 15px;
      }
      .width-20 {
        width: 20px;
      }
      .width-25 {
        width: 25px;
      }
      .width-30 {
        width: 30px;
      }
      .width-35 {
        width: 35px;
      }
      .width-40 {
        width: 40px;
      }
      .width-45 {
        width: 45px;
      }
      .width-50 {
        width: 50px;
      }
      .width-55 {
        width: 55px;
      }
      .width-60 {
        width: 60px;
      }
      .width-65 {
        width: 65px;
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
      .width-75 {
        width: 75px;
      }
      .width-85 {
        width: 85px;
      }
      .width-95 {
        width: 95px;
      }
      .width-105 {
        width: 105px;
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
      .w-10 {
        width: 10%;
      }
      .w-20 {
        width: 20%;
      }
      .w-25 {
        width: 25%;
      }
      .w-30 {
        width: 30%;
      }
      .w-35 {
        width: 35%;
      }
      .w-40 {
        width: 40%;
      }
      .w-45 {
        width: 45%;
      }
      .w-50 {
        width: 50%;
      }
      .w-55 {
        width: 55%;
      }
      .w-60 {
        width: 60%;
      }
      .w-65 {
        width: 65%;
      }
      .w-70 {
        width: 70%;
      }
      .w-75 {
        width: 75%;
      }
      .w-80 {
        width: 80%;
      }
      .w-85 {
        width: 85%;
      }
      .w-90 {
        width: 90%;
      }
      .w-95 {
        width: 95%;
      }
      .w-100 {
        width: 100%;
      }
      .width-33-12 {
        width: 33.12px;
      }
      .width-33-7 {
        width: 33.7px;
      }
      .height-28 {
        height: 28.58px;
      }
      .height-16 {
        height: 17px;
      }
      /* height */
      .height-5 {
        height: 5px;
      }
      .height-10 {
        height: 10px;
      }
      .height-14-29 {
        height: 14.29px;
      }
      .height-15 {
        height: 15px;
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
      .b-none {
        border: none;
      }
      .b-b {
        border-right: none;
        border-left: none;
        border-top: none;
      }
      .border-white {
        border: 1px solid white;
      }
      .z-1 {
        z-index: 1;
      }
      /* padding */
      .pad-1 {
        padding: 1px;
      }
      .pad-2 {
        padding: 2px;
      }
      .pad-3 {
        padding: 3px;
      }
      .pad-4 {
        padding: 4px;
      }
      .pad-5 {
        padding: 5px;
      }
      /* gap */
      .gap-1 {
        gap: 1px;
      }
      .gap-2 {
        gap: 2px;
      }
      .gap-3 {
        gap: 3px;
      }
      .gap-4 {
        gap: 4px;
      }
      .gap-5 {
        gap: 5px;
      }
      .gap-7 {
        gap: 7px;
      }
      .gap-6 {
        gap: 6px;
      }
      .gap-8 {
        gap: 8px;
      }
      .gap-9 {
        gap: 9px;
      }
      .gap-10 {
        gap: 10px;
      }
      .gap-20 {
        gap: 20px;
      }
      .gap-25 {
        gap: 25px;
      }
      .gap-30 {
        gap: 30px;
      }
      /* Inputs edit */
      input[type="checkbox"] {
        width: 10px;
      }
      /* border radius */
      .br-3 {
        border-radius: 3px;
      }
      .br-5 {
        border-radius: 5px;
      }
      .br-10 {
        border-radius: 10px;
      }
      .br-15 {
        border-radius: 15px;
      }
      .br-20 {
        border-radius: 20px;
      }
      .br-25 {
        border-radius: 25px;
      }
      /* text color and positions */
      .c-white {
        color: white;
      }
      .c-violet {
        color: #3d0055;
      }
      .c-green {
        color: #149603;
      }
      .t-center {
        text-align: center;
      }
      .f-bold {
        font-weight: bold;
      }
      .none-1 {
        border: 0;
      }
      .text-center {
        text-align: center;
      }
      .text-justify {
        text-align: justify;
      }
      .text-right {
        text-align: right;
      }
      .text-left {
        text-align: left;
      }
      .text-justify {
        text-align: justify;
      }
      .visibility-hidden {
        visibility: hidden;
      }
      .v-align-top {
        vertical-align: baseline;
      }
      .v-align-bottom {
        vertical-align: bottom;
      }
      .v-align-middle {
        vertical-align: middle;
      }
    </style>
  </head>
  <body>
    
    <div class="container">
      <div class="page">
        <div class="brand-container" style="width: 80px; position: absolute; top: 0;">
          @if (!empty(Auth::user()->company_id))
              <img src="{{ asset('/company_images/'.@Auth::user()->company->company_logo) }}" alt="final" border="0">
          @endif
      </div>
        
        <div class="flex-between gap-5 flex-end">
          <div class="flex-column">
            <div>
              <div>
                <div class="flex">
                  <div class="border width-125 b-left b-right bg-violet-1">
                    Date <input type="text" class="w-100" />
                  </div>
                  <div class="border width-100 b-right bg-violet-1">
                    Time in <input type="text" class="w-100" />
                  </div>
                  <div class="border width-100 b-right bg-violet-1">
                    Time Out <input type="text" class="w-100" />
                  </div>
                </div>
              </div>
              <div>
                <div class="flex gap-3">
                  <b>Level of Care:</b>
                  <div class="flex"><input type="checkbox" /> Routine</div>
                  <div class="flex"><input type="checkbox" /> Inpatient</div>
                  <div class="flex">
                    <input type="checkbox" /> Continuous Care
                  </div>
                  <div class="flex"><input type="checkbox" /> Respite</div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="flex-column gap-2">
              <div class="border w-90 br-5 pad-5">
                <div class="flex gap-5">
                  <div
                    class="border br-3 flex-center-align f-bold c-violet bg-violet-1"
                  >
                    A0000
                  </div>
                  <p class="c-violet"><b>= Hospice Item Set Indicator</b></p>
                </div>
              </div>
              <div class="border br-5 pad-5">
                <div class="flex gap-5">
                  <div
                    class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                  >
                    1
                  </div>
                  <p class="c-green">
                    <b class="c-green">GREEN Ink</b> = Specific Plan of
                    Treatment Items (completed per agency policy)
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div>
            <p
              style="font-size: 15px; text-align: right"
              class="c-violet f-bold"
            >
              HOSPICE INITIAL/ <br />
              COMPREHENSIVE <br />
              NURSING ASSESSMENT
            </p>
          </div>
        </div>
        <div class="bg-violet pad-5 br-10">
          <p class="c-white t-center">
            ADMINISTRATIVE INFORMATION - Fill Out Per Agency Policy
          </p>
          <div class="contents bg-white br-5">
            <div>
              <div class="flex">
                <div class="border pad-3 b-top b-left">
                  <div
                    class="border br-3 flex-center-align f-bold c-violet bg-violet-1 inline-block"
                  >
                    A0100
                  </div>
                  <div class="inline-block c-violet">
                    <b>Facility Provide Numbers</b> - Enter code in boxes
                    provided
                  </div>
                  <div class="f-bold c-violet">
                    A. National Provider Identifier (NPI)
                  </div>
                  <div class="flex gap-3">
                    <div class="width-20 border b-top b-left b-right">
                      <input type="text" class="w-100 text-center" />
                    </div>
                    <div class="width-20 border b-top b-left b-right">
                      <input type="text" class="w-100 text-center" />
                    </div>
                    <div class="width-20 border b-top b-left b-right">
                      <input type="text" class="w-100 text-center" />
                    </div>
                    <div class="width-20 border b-top b-left b-right">
                      <input type="text" class="w-100 text-center" />
                    </div>
                    <div class="width-20 border b-top b-left b-right">
                      <input type="text" class="w-100 text-center" />
                    </div>
                    <div class="width-20 border b-top b-left b-right">
                      <input type="text" class="w-100 text-center" />
                    </div>
                    <div class="width-20 border b-top b-left b-right">
                      <input type="text" class="w-100 text-center" />
                    </div>
                    <div class="width-20 border b-top b-left b-right">
                      <input type="text" class="w-100 text-center" />
                    </div>
                    <div class="width-20 border b-top b-left b-right">
                      <input type="text" class="w-100 text-center" />
                    </div>
                    <div class="width-20 border b-top b-left b-right">
                      <input type="text" class="w-100 text-center" />
                    </div>
                  </div>
                  <div>
                    <div class="c-violet f-bold">
                      CMS Certification Number (CCN):
                    </div>
                    <div class="flex gap-3">
                      <div class="width-20 border b-top b-left b-right">
                        <input type="text" class="w-100 text-center" />
                      </div>
                      <div class="width-20 border b-top b-left b-right">
                        <input type="text" class="w-100 text-center" />
                      </div>
                      <div class="width-20 border b-top b-left b-right">
                        <input type="text" class="w-100 text-center" />
                      </div>
                      <div class="width-20 border b-top b-left b-right">
                        <input type="text" class="w-100 text-center" />
                      </div>
                      <div class="width-20 border b-top b-left b-right">
                        <input type="text" class="w-100 text-center" />
                      </div>
                      <div class="width-20 border b-top b-left b-right">
                        <input type="text" class="w-100 text-center" />
                      </div>
                      <div class="width-20 border b-top b-left b-right">
                        <input type="text" class="w-100 text-center" />
                      </div>
                      <div class="width-20 border b-top b-left b-right">
                        <input type="text" class="w-100 text-center" />
                      </div>
                      <div class="width-20 border b-top b-left b-right">
                        <input type="text" class="w-100 text-center" />
                      </div>
                      <div class="width-20 border b-top b-left b-right">
                        <input type="text" class="w-100 text-center" />
                      </div>
                      <div class="width-20 border b-top b-left b-right">
                        <input type="text" class="w-100 text-center" />
                      </div>
                      <div class="width-20 border b-top b-left b-right">
                        <input type="text" class="w-100 text-center" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="border pad-3 b-left b-top b-right">
                  <div>
                    <div
                      class="border br-3 flex-center-align f-bold c-violet bg-violet-1 inline-block"
                    >
                      A0205
                    </div>
                    <div class="inline-block f-bold">
                      Site of Service at Admission
                    </div>
                  </div>
                  <div class="flex">
                    <div class="w-50">
                      <div class="flex-center-1">
                        <input type="checkbox" /> 01. Hospice in patient's
                        home/residence
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> 02. Hospice in Assisted Living
                        Facility
                      </div>
                      <div class="flex-top">
                        <input type="checkbox" /> 03. Hospice provided in
                        Nursing Long-Term Care (LTC) or Non-Skilled Nursing
                        Facility (NF)
                      </div>
                      <div class="flex-top">
                        <input type="checkbox" /> 04. Hospice provided in a
                        Skilled Nursing Facility (SNF)
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> 05. Hospice provided in
                        Inpatient Hospital
                      </div>
                    </div>
                    <div class="w-50">
                      <div class="flex-top">
                        <input type="checkbox" /> 06. Hospice provided in
                        Inpatient Hospice Facility
                      </div>
                      <div class="flex-top">
                        <input type="checkbox" /> 07. Hospice provided in
                        Long-Term Care Hospital (LTCH)
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> 08. Hospice in Inpatient
                        Psychiatric Facility
                      </div>
                      <div class="flex-top">
                        <input type="checkbox" /> 09. Hospice Provided in a
                        place not otherwise specified (NOS)
                      </div>
                      <div class="flex-top">
                        <input type="checkbox" /> 10. Hospice home care provided
                        in Hospice Facility
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex">
                <div class="border pad-3 b-top b-left b-right">
                  <div class="flex-center-1 gap-3">
                    <div
                      class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                    >
                      4
                    </div>
                    <div><b>ID#/Medical Record No.</b></div>
                  </div>
                  <div>
                    <input type="text" />
                  </div>
                  <div>
                    <input type="text" />
                  </div>
                </div>
                <div class="border pad-3 b-top">
                  <div class="flex gap-3">
                    <div
                      class="border br-3 flex-center-align f-bold c-violet bg-violet-1 height-20"
                    >
                      A0205
                    </div>
                    <div class="f-bold">Admission Date/SOC</div>
                  </div>
                  <div class="flex-end-1">
                    <div>
                      <div class="flex gap-5">
                        <div class="div text-center width-30">Month</div>
                        <div class="div text-center width-30">Day</div>
                        <div class="div text-center width-30">Year</div>
                      </div>
                      <div class="flex">
                        <div>
                          <input type="text" class="width-30 text-center" />/
                        </div>
                        <div>
                          <input type="text" class="width-30 text-center" />/
                        </div>
                        <div>
                          <input type="text" class="width-30 text-center" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="border pad-3 b-left b-top">
                  <div class="flex gap-3">
                    <div
                      class="border br-3 flex-center-align f-bold c-violet bg-violet-1 height-20"
                    >
                      A0205
                    </div>
                    <div class="f-bold">
                      Date Initial Nursing Assessment Initiated
                    </div>
                  </div>
                  <div class="flex-center-1 gap-5">
                    <div class="w-20 flex-center-align">
                      <div
                        class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                      >
                        2
                      </div>
                    </div>
                    <div>
                      <div class="flex gap-5">
                        <div class="div text-center width-30">Month</div>
                        <div class="div text-center width-30">Day</div>
                        <div class="div text-center width-30">Year</div>
                      </div>
                      <div class="flex">
                        <div>
                          <input type="text" class="width-30 text-center" />/
                        </div>
                        <div>
                          <input type="text" class="width-30 text-center" />/
                        </div>
                        <div>
                          <input type="text" class="width-30 text-center" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="border pad-3 b-left b-right b-top">
                  <div class="flex gap-3">
                    <div
                      class="border br-3 flex-center-align f-bold c-violet bg-violet-1 height-20"
                    >
                      A0205
                    </div>
                    <div class="f-bold">Reason for Record</div>
                  </div>
                  <br />
                  <div class="flex-center-align">
                    <div class="flex-center-1">
                      <input type="checkbox" /> 01. Admission
                    </div>
                  </div>
                </div>
                <div class="border pad-3 b-right b-top">
                  <div class="flex-center-1 gap-5">
                    <div
                      class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                    >
                      3
                    </div>
                    <div class="f-bold">Certification Period</div>
                  </div>
                  <div class="">
                    <div>From: <input type="text" class="w-50" /></div>
                    <div>To: <input type="text" class="w-50" /></div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="flex">
                <div class="pad-3">
                  <div class="flex gap-5">
                    <div
                      class="border br-3 flex-center-align f-bold c-violet bg-violet-1"
                    >
                      A0500
                    </div>
                    <div>
                      <div
                        class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                      >
                        6
                      </div>
                    </div>
                    <div>
                      <b>Legal Name of Patient:</b>
                    </div>
                    <div>
                      <b>A. First Name</b>
                    </div>
                  </div>
                  <div class="border b-top b-right b-left">
                    <input type="text" class="w-100" />
                  </div>
                </div>
                <div class="w-10">
                  <div class="pad-3">
                    <div>
                      <b>B. Middle Initial</b>
                    </div>
                    <div class="border b-top b-right b-left">
                      <input type="text" class="w-100 text-center" />
                    </div>
                  </div>
                </div>
                <div class="w-50">
                  <div class="pad-3">
                    <div>
                      <b>C. Last name</b>
                    </div>
                    <div class="border b-top b-right b-left">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
                <div class="width-50">
                  <div class="pad-3">
                    <div>
                      <b>D. Suffix</b>
                    </div>
                    <div class="border b-top b-right b-left">
                      <input type="text" class="w-100 text-center" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <table>
                <tr class="b-left b-right">
                  <td class="b-left">
                    <div
                      class="flex-top gap-5 border pad-3 b-left b-right b-top b-btm"
                    >
                      <div
                        class="border br-3 flex-center-align f-bold c-violet bg-violet-1 width-30"
                      >
                        A0550
                      </div>
                      <div>
                        <div>
                          <b>Patient Zip Code:</b>
                        </div>
                        <div class="flex gap-5">
                          <div class="border b-top b-right b-left">
                            <input type="text" />
                          </div>
                          <div>-</div>
                          <div class="border b-top b-right b-left">
                            <input type="text" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="pad-3 border b-btm b-left b-right">
                      <div class="flex-top gap-5">
                        <div
                          class="border br-3 flex-center-align f-bold c-violet bg-violet-1 width-30"
                        >
                          A0600
                        </div>
                        <div>
                          <b>Social Security and Medicare Numbers</b>
                        </div>
                      </div>
                      <div>
                        <b>A. Social Security Number:</b>
                      </div>
                      <div class="flex gap-5">
                        <div class="border b-top b-right b-left">
                          <input type="text" class="w-100 text-center" />
                        </div>
                        <div>-</div>
                        <div class="border b-top b-right b-left w-10">
                          <input type="text" class="w-100 text-center" />
                        </div>
                        <div>-</div>
                        <div class="border b-top b-right b-left">
                          <input type="text" class="w-100 text-center" />
                        </div>
                      </div>
                    </div>
                    <div class="border pad-3 b-btm b-left b-right">
                      <div>
                        <div>
                          <b>Medicare Number</b>
                          <i>(or comparable railroad insurance number)</i>
                        </div>
                      </div>
                      <div class="border b-top b-right b-left">
                        <input type="text" class="w-100" />
                      </div>
                    </div>
                  </td>

                  <td class="b-right">
                    <div class="border pad-3 b-left b-right b-btm b-top">
                      <div class="flex-top gap-5">
                        <div
                          class="border br-3 flex-center-align f-bold c-violet bg-violet-1 width-30"
                        >
                          A0700
                        </div>
                        <div>
                          <div>
                            <b>Medicaid Number</b> - Enter "+" if pending, "N"
                            if not Medicaid Recipient:
                          </div>
                          <div class="border b-top b-right b-left">
                            <input type="text" class="w-100" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="border pad-3 b-left b-right b-btm">
                      <div class="flex gap-5">
                        <div
                          class="border br-3 flex-center-align f-bold c-violet bg-violet-1 width-30"
                        >
                          A0800
                        </div>
                        <div>
                          <b>Gender</b>
                        </div>
                        <div>
                          <div class="flex-center-1">
                            <input type="checkbox" /> 01. Male
                          </div>
                        </div>
                        <div>
                          <div class="flex-center-1">
                            <input type="checkbox" /> 02. Female
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="border pad-3 b-right b-left b-btm">
                      <div class="flex-top gap-5">
                        <div
                          class="border br-3 flex-center-align f-bold c-violet bg-violet-1 width-30"
                        >
                          A0900
                        </div>
                        <div>
                          <b>Birth Date</b>
                        </div>
                        <div>
                          <div>
                            <div class="flex gap-5">
                              <div class="div text-center width-30">Month</div>
                              <div class="div text-center width-30">Day</div>
                              <div class="div text-center width-30">Year</div>
                            </div>
                            <div class="flex">
                              <div>
                                <input
                                  type="text"
                                  class="width-30 text-center"
                                />/
                              </div>
                              <div>
                                <input
                                  type="text"
                                  class="width-30 text-center"
                                />/
                              </div>
                              <div>
                                <input
                                  type="text"
                                  class="width-30 text-center"
                                />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
              <table>
                <tr class="b-left b-right b-top">
                  <td class="b-left b-right b-top">
                    <div class="flex">
                      <div class="pad-3 border b-top b-left b-btm w-50">
                        <div class="flex gap-5">
                          <div
                            class="border br-3 flex-center-align f-bold c-violet bg-violet-1 width-30"
                          >
                            A1000
                          </div>
                          <div>
                            <b>Race/Ethnicity <i>(Check all that apply)</i></b>
                          </div>
                        </div>
                        <div class="flex gap-5">
                          <div>
                            <div class="flex-top">
                              <input type="checkbox" /> A. American Indian or
                              Alaska Native
                            </div>
                            <div class="flex-center-1">
                              <input type="checkbox" /> B. Asian
                            </div>
                            <div class="flex-center-1">
                              <input type="checkbox" /> C. Black or African
                              American
                            </div>
                            <div class="flex-center-1">
                              <input type="checkbox" /> D. Hispanic or Latino
                            </div>
                          </div>
                          <div>
                            <div class="flex-top">
                              <input type="checkbox" /> E. Native Hawaiian or
                              Other Pacific Islander
                            </div>
                            <div class="flex-center-1">
                              <input type="checkbox" /> F. White
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="pad-3 w-60">
                        <div class="flex gap-5">
                          <div
                            class="border br-3 flex-center-align f-bold c-violet bg-violet-1 width-30"
                          >
                            A1400
                          </div>
                          <div>
                            <b
                              >Payor Information:
                              <i>(Check all that apply)</i></b
                            >
                          </div>
                        </div>
                        <div class="flex gap-5">
                          <div>
                            <div class="flex-top">
                              <input type="checkbox" /> A. Medicare (traditional
                              fee-for-service)
                            </div>
                            <div class="flex-top">
                              <input type="checkbox" /> B. Medicare (managed
                              care/Part C/Medicare Advantage)
                            </div>
                            <div class="flex-top">
                              <input type="checkbox" /> C. Medicaid (traditional
                              fee-for-service)
                            </div>
                            <div class="flex-center-1">
                              <input type="checkbox" /> D. Medicaid (managed
                              care)
                            </div>
                          </div>
                          <div>
                            <div class="flex-top">
                              <input type="checkbox" /> G. Other Government
                              (e.g. TRICARE, VA, etc.)
                            </div>
                            <div class="flex-top">
                              <input type="checkbox" /> H. Private
                              Insurace/Medigap
                            </div>
                            <div class="flex-center-1">
                              <input type="checkbox" /> I. Private Managed Care
                            </div>
                            <div class="flex-center-1">
                              <input type="checkbox" /> J. Self-Pay
                            </div>
                          </div>
                          <div>
                            <div class="flex-top">
                              <input type="checkbox" /> K. No Payor Source
                            </div>
                            <div class="flex-center-1">
                              <input type="checkbox" /> X. Unknown
                            </div>
                            <div class="flex-center-1">
                              <input type="checkbox" /> Y. Other
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="b-left b-right b-top">
                  <td class="b-left b-right b-top">
                    <div class="pad-3">
                      <div class="flex gap-5">
                        <div
                          class="border br-3 flex-center-align f-bold c-violet bg-violet-1 width-30"
                        >
                          A1802
                        </div>
                        <div>
                          <b
                            >Admitted From - Immediately preceding this
                            admission, where was the patient?</b
                          >
                        </div>
                      </div>
                      <div class="flex gap-5">
                        <div class="w-30">
                          <div class="flex-top">
                            <input type="checkbox" /> 01. Community residential
                            setting (e.g. private home/apt., board/care,
                            assisted living, group home, adult foster care)
                          </div>
                          <div class="flex-center-1">
                            <input type="checkbox" /> 02. Long-Term Care
                            Facility
                          </div>
                        </div>
                        <div>
                          <div class="flex-center-1">
                            <input type="checkbox" /> 03. Skilled Nursing
                            Facility (SNF)
                          </div>
                          <div class="flex-top">
                            <input type="checkbox" /> 04. Hospital Emergency
                            Department
                          </div>
                          <div class="flex-center-1">
                            <input type="checkbox" /> 05. Short-Stay Acute
                            Hospital
                          </div>
                        </div>
                        <div>
                          <div class="flex-center-1">
                            <input type="checkbox" /> 06. Long-Term Care
                            Hospital (LTCH)
                          </div>
                          <div class="flex-top">
                            <input type="checkbox" /> 07. Inpatient
                            Rehabilitation Facility or Unit (IRF)
                          </div>
                          <div class="flex-center-1">
                            <input type="checkbox" /> 08. Psychiatric Hospital
                            or Unit
                          </div>
                        </div>
                        <div>
                          <div class="flex-center-1">
                            <input type="checkbox" /> 09. ID/DD Facility
                          </div>
                          <div class="flex-center-1">
                            <input type="checkbox" /> 10. Hospice
                          </div>
                          <div class="flex-top">
                            <input type="checkbox" /> 99. None of the above
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="b-left b-right b-top">
                  <td class="b-left b-right b-top">
                    <div class="flex">
                      <div
                        class="border b-top b-left b-btm b-right pad-3 flex-grow-1"
                      >
                        <div class="flex gap-5">
                          <div
                            class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                          >
                            24
                          </div>
                          <div>Primary Physician's Name</div>
                        </div>
                        <div>
                          <input type="text" class="w-100" />
                        </div>
                      </div>
                      <div class="border b-top b-btm pad-3 flex-grow-1">
                        <div>Address</div>
                        <div>
                          <input type="text" class="w-100" />
                        </div>
                      </div>
                      <div
                        class="border b-top b-left b-btm b-right pad-3 flex-grow-1"
                      >
                        <div>Physician's Phone #</div>
                        <div>
                          <input type="text" class="w-100" />
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div>
          <div class="bg-violet-2 pad-3 f-bold text-center">
            THE FOLLOWING ARE TO BE DISCUSSED WITH THE PATIENT AND/OR CAREGIVER
            PRIOR TO PROIVISION OF CARE
          </div>
        </div>
        <div>
          <div class="flex">
            <div>
              <div class="flex-center-1">
                <input type="checkbox" /> Rights/Responsibilities
              </div>
              <div class="flex-top">
                <input type="checkbox" /> Charges for Services/Assignments of
                Benefits
              </div>
              <div class="flex-center-1">
                <input type="checkbox" /> Complaint Procedure & Hotline Number
              </div>
            </div>
            <div>
              <div class="flex-top">
                <input type="checkbox" /> Services Provided/Anticipated
                Frequency
              </div>
              <div class="flex-top">
                <input type="checkbox" /> Fire/Safety Disaster & Emergency Plan
              </div>
              <div class="flex-center-1">
                <input type="checkbox" /> Advance Directives
              </div>
            </div>
            <div>
              <div class="flex-top">
                <input type="checkbox" /> Pt/Caregiver Development Plan of Care
                Plan
              </div>
              <div class="flex-center-1">
                <input type="checkbox" /> HIPAA Information
              </div>
              <div class="flex-center-1">
                <input type="checkbox" /> Hospice Benefit
              </div>
            </div>
            <div>
              <div class="flex-top">
                <input type="checkbox" /> Policy for Managing Controlled Drugs
                Given
              </div>
            </div>
          </div>
        </div>
        <div class="bg-violet br-10 pad-5 c-white">DIAGNOSIS</div>
        <div class="border b-top b-left b-right pad-3">
          <div class="f-bold">Nature and Condition causing admission:</div>
        </div>
        <div class="border b-top b-left b-right pad-3">
          <div class="flex-center-1 gap-5">
            <div
              class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
            >
              17
            </div>
            <div class="w-10">
              <b class="c-green">ALLERGIES: </b>
            </div>
            <div class="flex-center-1 w-10"><input type="checkbox" /> NKA</div>
            <div class="flex-center-1">
              <input type="checkbox" /> Allergic to:
            </div>
            <div class="w-40">
              <input type="text" class="w-100" />
            </div>
            <div>Last MD Visit Date:</div>
            <div>
              <div class="flex">
                <div><input type="text" class="width-30 text-center" />/</div>
                <div><input type="text" class="width-30 text-center" />/</div>
                <div>
                  <input type="text" class="width-30 text-center" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="border b-top b-left b-right pad-3">
          <div class="flex gap-5">
            <div class="w-50 flex-column gap-5">
              <div class="flex">
                <div class="visibility-hidden inline-block width-20"></div>
                <div class="inline-block w-70">
                  <div class="flex gap-5">
                    <div
                      class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                    >
                      11
                    </div>
                    <div class="c-green f-bold">
                      <u class="c-green">Primary Diagnosis </u>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="c-green f-bold">
                    <u class="c-green">Diagnosis Code </u>
                  </div>
                </div>
              </div>
              <div>
                <div class="flex gap-3">
                  <div>a.</div>
                  <div class="border b-top b-left b-right">
                    <div class="inline-block w-50">
                      <input type="text" class="w-100" />
                    </div>
                    <div class="inline-block w-40">
                      Date:
                      <input type="text" class="w-70" />
                    </div>
                    <div class="inline-block">O/E</div>
                  </div>
                  <div class="border">
                    <input type="text" />
                  </div>
                </div>
              </div>
              <div class="flex">
                <div class="visibility-hidden inline-block width-20"></div>
                <div class="inline-block w-70">
                  <div class="flex gap-5">
                    <div
                      class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                    >
                      13
                    </div>
                    <div class="c-green f-bold">
                      <u class="c-green">Co-Mobidities</u>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="c-green f-bold">
                    <u class="c-green">Diagnosis Code </u>
                  </div>
                </div>
              </div>
              <div>
                <div class="flex gap-3">
                  <div>b.</div>
                  <div class="border b-top b-left b-right">
                    <div class="inline-block w-50">
                      <input type="text" class="w-100" />
                    </div>
                    <div class="inline-block w-40">
                      Date:
                      <input type="text" class="w-70" />
                    </div>
                    <div class="inline-block">O/E</div>
                  </div>
                  <div class="border">
                    <input type="text" />
                  </div>
                </div>
              </div>
              <div>
                <div class="flex gap-3">
                  <div>c.</div>
                  <div class="border b-top b-left b-right">
                    <div class="inline-block w-50">
                      <input type="text" class="w-100" />
                    </div>
                    <div class="inline-block w-40">
                      Date:
                      <input type="text" class="w-70" />
                    </div>
                    <div class="inline-block">O/E</div>
                  </div>
                  <div class="border">
                    <input type="text" />
                  </div>
                </div>
              </div>
              <div>
                <div class="flex gap-3">
                  <div>d.</div>
                  <div class="border b-top b-left b-right">
                    <div class="inline-block w-50">
                      <input type="text" class="w-100" />
                    </div>
                    <div class="inline-block w-40">
                      Date:
                      <input type="text" class="w-70" />
                    </div>
                    <div class="inline-block">O/E</div>
                  </div>
                  <div class="border">
                    <input type="text" />
                  </div>
                </div>
              </div>
            </div>
            <div class="w-50">
              <div class="flex-column gap-5">
                <div>
                  <div class="flex">
                    <div class="visibility-hidden inline-block width-20"></div>
                    <div class="inline-block w-70">
                      <div class="flex gap-5">
                        <div
                          class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                        >
                          12
                        </div>
                        <div class="c-green f-bold">
                          <u class="c-green">Surgical Diagnosis</u>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="c-green f-bold">
                        <u class="c-green">Diagnosis Code</u>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="flex gap-3">
                    <div>a.</div>
                    <div class="border b-top b-left b-right">
                      <div class="inline-block w-50">
                        <input type="text" class="w-100" />
                      </div>
                      <div class="inline-block w-40">
                        Date:
                        <input type="text" class="w-70" />
                      </div>
                    </div>
                    <div class="border">
                      <input type="text" />
                    </div>
                  </div>
                </div>
                <div>
                  <div class="flex gap-3">
                    <div>b.</div>
                    <div class="border b-top b-left b-right">
                      <div class="inline-block w-50">
                        <input type="text" class="w-100" />
                      </div>
                      <div class="inline-block w-40">
                        Date:
                        <input type="text" class="w-70" />
                      </div>
                    </div>
                    <div class="border">
                      <input type="text" />
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="flex">
                  <div class="w-40">
                    <div class="flex-top gap-5">
                      <div
                        class="border br-3 flex-center-align f-bold c-violet bg-violet-1 width-30"
                      >
                        10010
                      </div>
                      <div>
                        <b>Principal Diagnosis</b>
                      </div>
                    </div>
                    <div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> 01. Cancer
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> 02. Dementia/Alzheimer's
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> 99. None of the above
                      </div>
                    </div>
                  </div>
                  <div class="w-60">
                    <div class="bg-purple border b-left b-right b-top">
                      <b>Comments:</b>
                    </div>
                    <div class="bg-purple border b-left b-right b-top">
                      <input type="text" class="w-100" />
                    </div>
                    <div class="bg-purple border b-left b-right b-top">
                      <input type="text" class="w-100" />
                    </div>
                    <div class="bg-purple border b-left b-right b-top">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="border b-left b-top b-right pad-3">
          <div class="flex gap-5">
            <div
              class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
            >
              21
            </div>
            <div class="f-bold c-green">Is the patient DNR</div>
            <div class="c-green">("Do Not Resuscitate")?</div>
            <div>
              <div class="flex-center-1"><input type="checkbox" /> Yes</div>
            </div>
            <div>
              <div class="flex-center-1"><input type="checkbox" /> No</div>
            </div>
            <div class="flex-grow-1">
              <div class="bg-purple">
                Comments:
                <input type="text" class="w-60" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page">
        <div>
          <b>KARNOFSKY PERFORMANCE STATUS SCALE (complete per agency policy)</b>
        </div>
        <table>
          <tr>
            <td class="pad-3 w-40">
              Able to carry on normal activity and to work; no special care
              needed
            </td>
            <td class="pad-3">
              <div class="flex-center-1 flex-column">
                <div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> 100%
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> 90%
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> 80%
                    </div>
                  </div>
                </div>
              </div>
            </td>
            <td class="pad-3 w-100">
              <div>Normal no complaints; no evidence of disease.</div>
              <div>
                Able to carry on normal activity; minor signs or symptoms of
                disease
              </div>
              <div>
                Normal activity with effort; some signs or symptoms of disease
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              Unable to work; able to live at home and care for most personal
              needs; varying amount of assistance needed.
            </td>
            <td class="pad-3">
              <div class="flex-center-align flex-column">
                <div>
                  <div class="flex-center-1"><input type="checkbox" /> 70%</div>
                  <div class="flex-center-1"><input type="checkbox" /> 60%</div>
                  <div class="flex-center-1"><input type="checkbox" /> 50%</div>
                </div>
              </div>
            </td>
            <td class="pad-3 w-45">
              <div>
                Cares for self; unable to carry on normal activity or to do
                active work
              </div>
              <div>
                Requires occasional assistance, but is able to care for most
                personal needs
              </div>
              <div>
                Requires considerable assistance and frequent medical care
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              Unable to care for self, requires equivalent of institutional or
              hospital care; disease may be progressing rapidly
            </td>
            <td class="pad-3">
              <div class="flex-center-align flex-column">
                <div class="flex-column">
                  <div class="flex-center-1"><input type="checkbox" /> 40%</div>
                  <div class="flex-center-1"><input type="checkbox" /> 30%</div>
                  <div class="flex-center-1"><input type="checkbox" /> 20%</div>
                  <div class="flex-center-1"><input type="checkbox" /> 10%</div>
                  <div class="flex-center-1"><input type="checkbox" /> 0%</div>
                </div>
              </div>
            </td>
            <td class="pad-3 w-100">
              <div>Disabled, requires special care and assistance</div>
              <div>
                Severely disables; hospital admission necessary; active
                supportive treatment necessary
              </div>
              <div>
                Very sick; hospital admission necessary; active supportive
                treatment necessary
              </div>
              <div>Moribund; fatal processes progressing rapidly</div>
              <div>Dead</div>
            </td>
          </tr>
        </table>
        <div class="flex gap-30">
          <div class="bg-violet pad-3 w-50">
            <div class="flex-center-1 c-white">
              <input type="checkbox" /> See Bereavement Assessment/Documentation
              (per agency policy)
            </div>
            <div class="flex gap-5">
              <div class="c-white">Refer to:</div>
              <div class="bg-white w-80">
                <input type="text" />
              </div>
            </div>
          </div>
          <div class="bg-violet pad-3 w-50">
            <div class="flex-center-1 c-white">
              <input type="checkbox" /> See Bereavement Assessment/Documentation
              (per agency policy)
            </div>
            <div class="flex gap-5">
              <div class="c-white">Refer to:</div>
              <div class="bg-white w-80">
                <input type="text" />
              </div>
            </div>
          </div>
        </div>
        <div>
          <table>
            <tr>
              <td class="pad-3 bg-violet-1 w-60">
                <div><b>Patient Name</b> (First, MI, Last)</div>
                <div>
                  <input type="text" class="w-100" />
                </div>
              </td>
              <td class="pad-3 bg-violet-1">
                <div>
                  <b>ID No.</b>
                </div>
                <div>
                  <input type="text" class="w-100" />
                </div>
              </td>
            </tr>
          </table>
        </div>
        <br />
        <div class="border b-top b-left b-right">
          <div class="bg-violet br-10 c-white pad-5">
            DIAGNOSIS <i class="c-white">(continued)</i>
          </div>
          <div class="flex pad-3">
            <div>
              <div class="flex gap-5">
                <div class="w-60">
                  <div class="flex gap-5">
                    <div>
                      <div class="flex-center-1 gap-5">
                        <div
                          class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                        >
                          21
                        </div>
                        <div>
                          <b class="c-green"
                            >Terminal Care Intervention (all patients):
                          </b>
                        </div>
                        <div class="c-green">
                          <u><b class="c-green">A</b></u
                          >ssess/<u><b class="c-green">P</b></u
                          >erform/<u><b class="c-green">I</b></u
                          >nstruct Pt/Cg:
                        </div>
                      </div>
                      <div class="flex-center-1 c-green">
                        <input type="checkbox" /> Spiritual, grieving & coping
                        methods
                      </div>
                      <div class="flex-center-1 c-green">
                        <input type="checkbox" /> S/S of impending death
                      </div>
                      <div class="flex-center-1 c-green">
                        <input type="checkbox" /> Notification procedures for
                        death at home
                      </div>
                      <div class="flex-center-1 c-green">
                        <input type="checkbox" /> Counseling
                      </div>
                      <div class="flex-center-1 c-green">
                        <input type="checkbox" /> Griend Management
                      </div>
                      <div class="flex-center-1 c-green">
                        <input type="checkbox" /> Other(specify):
                        <div class="border b-top b-left b-right w-70">
                          <input type="text" class="w-100" />
                        </div>
                      </div>
                    </div>
                    <div class="flex-column gap-1">
                      <div class="flex-around gap-6">
                        <div class="c-green f-bold w-20">A</div>
                        <div class="c-green f-bold w-20">P</div>
                        <div class="c-green f-bold w-20">I</div>
                      </div>
                      <div class="flex gap-2">
                        <div class="flex-center-1">
                          <input type="checkbox" />
                        </div>
                        <div class="flex-center-1">
                          <input type="checkbox" />
                        </div>
                        <div class="flex-center-1">
                          <input type="checkbox" />
                        </div>
                      </div>
                      <div class="flex gap-2">
                        <div class="flex-center-1">
                          <input type="checkbox" />
                        </div>
                        <div class="flex-center-1 visibility-hidden">
                          <input type="checkbox" />
                        </div>
                        <div class="flex-center-1">
                          <input type="checkbox" />
                        </div>
                      </div>
                      <div class="flex gap-2">
                        <div class="flex-center-1 visibility-hidden">
                          <input type="checkbox" />
                        </div>
                        <div class="flex-center-1 visibility-hidden">
                          <input type="checkbox" />
                        </div>
                        <div class="flex-center-1">
                          <input type="checkbox" />
                        </div>
                      </div>
                      <div class="flex gap-2">
                        <div class="flex-center-1">
                          <input type="checkbox" />
                        </div>
                        <div class="flex-center-1">
                          <input type="checkbox" />
                        </div>
                        <div class="flex-center-1">
                          <input type="checkbox" />
                        </div>
                      </div>
                      <div class="flex gap-2">
                        <div class="flex-center-1">
                          <input type="checkbox" />
                        </div>
                        <div class="flex-center-1">
                          <input type="checkbox" />
                        </div>
                        <div class="flex-center-1">
                          <input type="checkbox" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="flex-center-1 gap-5">
                    <div
                      class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                    >
                      21
                    </div>
                    <div>
                      <b class="c-green"
                        >Impending Death Interventions/Imminence of Death:
                      </b>
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> NA
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Educate caregiver/family
                      regarding:
                    </div>
                  </div>
                  <div>
                    <div class="flex">
                      <div class="w-10"></div>
                      <div>
                        <div class="flex-top c-green">
                          <input type="checkbox" /> Signs/Symptoms of Impending
                          death
                        </div>
                        <div class="flex-top c-green">
                          <input type="checkbox" /> Interventions caring for
                          dying patient
                        </div>
                      </div>
                      <div>
                        <div class="flex-center-1 c-green">
                          <input type="checkbox" /> Home death procedure
                        </div>
                        <div class="flex-top c-green">
                          <input type="checkbox" /> Planning for funeral
                          arrangements
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="w-100">
                      <div class="bg-purple border b-left b-right b-top">
                        <b>Comments:</b>
                      </div>
                      <div class="bg-purple border b-left b-right b-top">
                        <input type="text" class="w-100" />
                      </div>
                      <div class="bg-purple border b-left b-right b-top">
                        <input type="text" class="w-100" />
                      </div>
                      <div class="bg-purple border b-left b-right b-top">
                        <input type="text" class="w-100" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="border b-top b-left b-right pad-3">
          <div class="flex gap-5">
            <div class="w-60">
              <div class="flex">
                <div>
                  <div class="flex gap-5">
                    <div class="f-bold">Advance Directives:</div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Yes
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> No
                    </div>
                  </div>
                </div>
                <div></div>
              </div>
              <div>
                <div class="flex-top gap-5">
                  <div>Intent:</div>
                  <div>
                    <div class="flex gap-5">
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> DNR
                        </div>
                        <div class="flex-top">
                          <input type="checkbox" /> Living Will
                        </div>
                      </div>
                      <div>
                        <div class="flex-top">
                          <input type="checkbox" /> Medical Power of Attorney
                        </div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> Other: (specify)
                        </div>
                        <div class="border b-top b-left b-right">
                          <input type="text" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="flex gap-4">
                  <div>Copy requested?</div>
                  <div class="flex-center-1"><input type="checkbox" /> Yes</div>
                  <div class="flex-center-1"><input type="checkbox" /> No</div>
                  <div class="flex">
                    <div>Result:</div>
                    <div class="border b-top b-left b-right w-100">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div>
              <div class="flex gap-5">
                <div>Patient given advance directives information?</div>
                <div class="flex-center-1"><input type="checkbox" /> Yes</div>
                <div class="flex-center-1"><input type="checkbox" /> No</div>
              </div>
              <div>
                <div class="flex">
                  <div class="flex">
                    Name:
                    <div class="border b-top b-right b-left">
                      <input type="text" />
                    </div>
                  </div>
                  <div class="flex">
                    Phone:
                    <div class="border b-top b-right b-left">
                      <input type="text" />
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="flex gap-4">
                  <div>Copy requested?</div>
                  <div class="flex-center-1"><input type="checkbox" /> Yes</div>
                  <div class="flex-center-1"><input type="checkbox" /> No</div>
                  <div class="flex">
                    <div>Result:</div>
                    <div class="border b-top b-left b-right w-100">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-35">
              <div class="w-100">
                <div class="bg-purple border b-left b-right b-top">
                  <b>Comments:</b>
                </div>
                <div class="bg-purple border b-left b-right b-top">
                  <input type="text" class="w-100" />
                </div>
                <div class="bg-purple border b-left b-right b-top">
                  <input type="text" class="w-100" />
                </div>
                <div class="bg-purple border b-left b-right b-top">
                  <input type="text" class="w-100" />
                </div>
                <div class="bg-purple border b-left b-right b-top">
                  <input type="text" class="w-100" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="border b-top b-left b-right pad-3">
          <div class="flex gap-10">
            <div>
              <div
                class="border br-3 flex-center-align f-bold c-violet bg-violet-1 width-30"
              >
                F2000
              </div>
            </div>
            <div class="f-bold">
              A. Was the patient/responsible party asked about preference
              regarding the use of cardiopulmonary resuscitation (CPR) ?
              <i>Select the most accurate response</i>
            </div>
          </div>
          <div>
            <div class="flex-top gap-10">
              <div>
                <div class="flex-center-1"><input type="checkbox" /> 0. No</div>
              </div>
              <div class="flex-grow-1">
                <div class="flex-center-1">
                  <input type="checkbox" /> 1. Yes, and discussion occurred
                  (specify):
                  <div class="border b-top b-right b-left w-70">
                    <input type="text" />
                  </div>
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 2. Yes, but the patient/responsible
                  party refused to discuss
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="border b-top b-left b-right pad-3 flex">
          <div class="f-bold">
            B. Date the patient/responsible party was first asked about
            preference regarding the use of CPR:
          </div>
          <div class="flex">
            <div><input type="text" class="width-30 text-center" />/</div>
            <div><input type="text" class="width-30 text-center" />/</div>
            <div>
              <input type="text" class="width-30 text-center" />
            </div>
          </div>
          <div>
            <i class="wala">(Month/Day/Year)</i>
          </div>
        </div>
        <div class="border b-top b-left b-right pad-3">
          <div class="flex gap-10">
            <div>
              <div
                class="border br-3 flex-center-align f-bold c-violet bg-violet-1 width-30"
              >
                F2100
              </div>
            </div>
            <div class="f-bold">
              A. Was the patient/responsible party asked about preference
              regarding life-sustaining treatments other than CPR
              <i>Select the most accurate response</i>
            </div>
          </div>
          <div>
            <div class="flex-top gap-10">
              <div>
                <div class="flex-center-1"><input type="checkbox" /> 0. No</div>
              </div>
              <div class="flex-grow-1">
                <div class="flex-center-1">
                  <input type="checkbox" /> 1. Yes, and discussion occurred
                  (specify):
                  <div class="border b-top b-right b-left w-70">
                    <input type="text" />
                  </div>
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 2. Yes, but the patient/responsible
                  party refused to discuss
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="border b-top b-left b-right pad-3 flex">
          <div class="f-bold">
            B. Date the patient/responsible party was first asked about
            preferences regarding life-sustaining treatments other than CPR:
          </div>
          <div class="flex">
            <div><input type="text" class="width-30 text-center" />/</div>
            <div><input type="text" class="width-30 text-center" />/</div>
            <div>
              <input type="text" class="width-30 text-center" />
            </div>
          </div>
          <div>
            <i class="wala">(Month/Day/Year)</i>
          </div>
        </div>
        <div class="border b-top b-left b-right pad-3">
          <div class="flex gap-10">
            <div>
              <div
                class="border br-3 flex-center-align f-bold c-violet bg-violet-1 width-30"
              >
                F2200
              </div>
            </div>
            <div class="f-bold">
              A. Was the patient/responsible party asked about preference
              regarding hospitalization <i>Select the most accurate response</i>
            </div>
          </div>
          <div>
            <div class="flex-top gap-10">
              <div>
                <div class="flex-center-1"><input type="checkbox" /> 0. No</div>
              </div>
              <div class="flex-grow-1">
                <div class="flex-center-1">
                  <input type="checkbox" /> 1. Yes, and discussion occurred
                  (specify):
                  <div class="border b-top b-right b-left w-70">
                    <input type="text" />
                  </div>
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 2. Yes, but the patient/responsible
                  party refused to discuss
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="border b-top b-left b-right pad-3 flex">
          <div class="f-bold">
            B. Date the patient/responsible party was first asked about
            preference regarding hospitalization:
          </div>
          <div class="flex">
            <div><input type="text" class="width-30 text-center" />/</div>
            <div><input type="text" class="width-30 text-center" />/</div>
            <div>
              <input type="text" class="width-30 text-center" />
            </div>
          </div>
          <div>
            <i class="wala">(Month/Day/Year)</i>
          </div>
        </div>
        <div class="bg-violet br-10 pad-5 c-white">SPIRITUAL/EXISTENTIAL</div>
        <div class="pad-3 border b-top b-left b-right">
          <div class="flex">
            <div class="w-50">
              <div class="flex">
                <div class="flex-center-1 gap-5 w-80">
                  <div
                    class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                  >
                    21
                  </div>
                  <div class="f-bold c-green">Spiritual Need Interventions</div>
                  <div class="c-green">
                    <b class="c-green">A</b>ssess/<b class="c-green">P</b
                    >erform/<b class="c-green">I</b>nstruct Pt/Cg:
                  </div>
                </div>
                <div class="flex-center-align gap-8">
                  <div class="f-bold c-green w-20">A</div>
                  <div class="f-bold c-green w-20">P</div>
                  <div class="f-bold c-green w-20">I</div>
                </div>
              </div>
              <div class="flex">
                <div class="w-80">
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Spiritual needs of the patient and
                    caregiver
                  </div>
                </div>
                <div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1 visibility-hidden">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex">
                <div class="w-80">
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Current clergy support
                  </div>
                </div>
                <div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1 visibility-hidden">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1 visibility-hidden">
                      <input type="checkbox" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-50">
              <div class="flex">
                <div class="flex-center-1 gap-5 w-80 visibility-hidden">
                  <div
                    class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                  >
                    21
                  </div>
                  <div class="f-bold c-green">Spiritual Need Interventions</div>
                  <div class="c-green">
                    <b class="c-green">A</b>ssess/<b class="c-green">P</b
                    >erform/<b class="c-green">I</b>nstruct Pt/Cg:
                  </div>
                </div>
                <div class="flex-center-align gap-8">
                  <div class="f-bold c-green w-20">A</div>
                  <div class="f-bold c-green w-20">P</div>
                  <div class="f-bold c-green w-20">I</div>
                </div>
              </div>
              <div class="flex">
                <div class="w-80">
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Need for spiritual counselor to
                    provide spiritual support
                  </div>
                </div>
                <div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1 visibility-hidden">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex">
                <div class="w-80">
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Other:
                    <div class="border w-70 b-top b-left b-right">
                      <input type="text" />
                    </div>
                  </div>
                </div>
                <div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1 visibility-hidden">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1 visibility-hidden">
                      <input type="checkbox" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="border b-top b-left b-right pad-3">
          <div class="flex gap-10">
            <div
              class="border br-3 flex-center-align f-bold c-violet bg-violet-1 width-30"
            >
              F3000
            </div>
            <div class="f-bold">
              A. Was the patient and/or caregiver asked about
              spiritual/existensial concerns?
            </div>
          </div>
          <div>
            <div class="flex-top gap-10">
              <div>
                <div class="flex-center-1"><input type="checkbox" /> 0. No</div>
              </div>
              <div class="flex-grow-1">
                <div class="flex-center-1">
                  <input type="checkbox" /> 1. Yes, and discussion occurred
                  (specify):
                  <div class="border b-top b-right b-left w-70">
                    <input type="text" />
                  </div>
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 2. Yes, but the patient and/or
                  caregiver refused to discuss
                </div>
              </div>
            </div>
          </div>
          <div class="pad-3 flex">
            <div class="f-bold">
              B. Date the patient and/or caregiver was first asked about
              spiritual/existential concerns
            </div>
            <div class="flex">
              <div><input type="text" class="width-30 text-center" />/</div>
              <div><input type="text" class="width-30 text-center" />/</div>
              <div>
                <input type="text" class="width-30 text-center" />
              </div>
            </div>
            <div>
              <i class="wala">(Month/Day/Year)</i>
            </div>
          </div>
        </div>
        <div class="bg-violet pad-3 c-white br-10 pad-5">
          LIVING ARRANGEMENTS
        </div>
        <div class="pad-3 border b-top b-left b-right">
          <div class="flex gap-5">
            <div>
              <b>High-Risk Factors and Complications Affecting Care Plan:</b>
              <div class="flex gap-4">
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Alcohol dependency
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Heavy Smoking
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Drug dependency
                  </div>
                  <div class="flex-center-1 gap-4">
                    <input type="checkbox" /> Chronic conditions
                    <input type="checkbox" /> Obesity
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Cultural/Religious practices that
                    may impact care
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Other (describe):
                    <div class="border b-top b-left b-right w-60">
                      <input type="text" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-30">
              <div class="w-100">
                <div class="bg-purple border b-left b-right b-top">
                  <b>Comments:</b>
                </div>
                <div class="bg-purple border b-left b-right b-top">
                  <input type="text" class="w-100" />
                </div>
                <div class="bg-purple border b-left b-right b-top">
                  <input type="text" class="w-100" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="border pad-3 b-top b-left b-right">
          <div class="flex">
            <div class="w-20">
              <b>Emergency Contact Person: (Not living with patient)</b>
            </div>
            <div class="w-50">
              <div class="flex">
                <div>Name:</div>
                <div class="w-100"><input type="text" class="w-100" /></div>
              </div>
            </div>
            <div class="w-35">
              <div class="flex">
                <div>Phone:</div>
                <div class="w-100"><input type="text" class="w-100" /></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page">
        <div class="border b-top b-left b-right">
          <div class="flex">
            <div class="border b-left b-top b-btm">
              <div class="flex gap-3 pad-3">
                <div>
                  <b>Household Composition:</b>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Other family member
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Lives alone
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> With friend
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> With spouse of significant other
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Other (specify):
                    <div class="border b-top b-left b-right">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="border b-left b-top b-btm">
              <div class="flex-top gap-3 pad-3">
                <div>Marital Status:</div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Single
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Divorced
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Married
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Separated
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Widowed
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Unknown
                  </div>
                </div>
              </div>
            </div>
            <div class="pad-3">
              <div class="flex-top gap-3">
                <div>Family Supportive:</div>
                <div>
                  <div class="flex-center-1"><input type="checkbox" /> Yes</div>
                  <div class="flex-center-1"><input type="checkbox" /> No</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="border b-top b-left b-right pad-3 bg-purple">
          Comments: <input type="text" class="w-90" />
        </div>
        <div class="border b-top b-left b-right pad-3">
          <div class="border b-top b-left b-right">
            <b
              >Family Knowledge and Coping Level Regarding Present
              Diagnosis/Prognisis:</b
            >
            <input type="text" class="w-50" />
          </div>
          <div>
            <input type="text" class="w-100" />
          </div>
        </div>
        <div class="border b-top b-left b-right">
          <div class="flex">
            <div class="w-50 border b-top b-left b-btm">
              <div class="border b-b pad-3">
                <b>Caregiver name:</b>
                <input type="text" class="w-75" />
                <input type="text" class="w-100" />
              </div>
              <div>
                <div class="border b-b pad-3">
                  <b>Relationship:</b>
                  <input type="text" class="w-75" />
                  <input type="text" class="w-100" />
                </div>
              </div>
              <div>
                <div class="pad-3">
                  <div class="flex">
                    <div class="flex-center-1 gap-5 w-90">
                      <div
                        class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                      >
                        21
                      </div>
                      <div class="f-bold c-green">
                        Spiritual Need Interventions
                      </div>
                      <div class="c-green">
                        <b class="c-green">A</b>ssess/<b class="c-green">P</b
                        >erform/<b class="c-green">I</b>nstruct Pt/Cg:
                      </div>
                    </div>
                    <div class="flex-center-align gap-8">
                      <div class="f-bold c-green w-20">A</div>
                      <div class="f-bold c-green w-20">P</div>
                      <div class="f-bold c-green w-20">I</div>
                    </div>
                  </div>
                  <div class="flex">
                    <div class="w-90">
                      <div class="flex-center-1 c-green">
                        <input type="checkbox" /> Need for spiritual counselor
                        to provide spiritual support
                      </div>
                      <div class="flex-center-1 c-green">
                        <input type="checkbox" /> Volunteer Coordinator will:
                      </div>
                      <div class="flex-center-1 c-green">
                        &nbsp; &nbsp; <input type="checkbox" /> Explain
                        volunteer services
                      </div>
                      <div class="flex-center-1 c-green">
                        &nbsp; &nbsp; <input type="checkbox" /> Arrange for the
                        provision of requested services
                      </div>
                      <div class="flex-center-1 c-green">
                        &nbsp; &nbsp; <input type="checkbox" /> Maintain
                        supportive relationship with patien/caregiver
                      </div>
                      <div class="flex-center-1 c-green">
                        <input type="checkbox" /> Other (specify):
                        <div class="border w-70 b-b">
                          <input type="text" class="w-100" />
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="flex gap-2">
                        <div class="flex-center-1">
                          <input type="checkbox" />
                        </div>
                        <div class="flex-center-1 visibility-hidden">
                          <input type="checkbox" />
                        </div>
                        <div class="flex-center-1">
                          <input type="checkbox" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-50">
              <div class="flex pad-3">
                <div class="w-80">
                  Caregiver able/willing to provide all care
                </div>
                <div class="flex gap-10">
                  <div class="flex-center-1"><input type="checkbox" /> Yes</div>
                  <div class="flex-center-1"><input type="checkbox" /> No</div>
                </div>
              </div>
              <div class="flex pad-3">
                <div class="w-80">
                  Caregiver able to receive/follow instruction
                </div>
                <div class="flex gap-10">
                  <div class="flex-center-1"><input type="checkbox" /> Yes</div>
                  <div class="flex-center-1"><input type="checkbox" /> No</div>
                </div>
              </div>
              <div class="flex pad-3">
                <div class="w-80">
                  Caregiver able/willing to assist with ADLs and needed care
                </div>
                <div class="flex gap-10">
                  <div class="flex-center-1"><input type="checkbox" /> Yes</div>
                  <div class="flex-center-1"><input type="checkbox" /> No</div>
                </div>
              </div>
              <div class="border b-right b-left bg-purple pad-3">
                Comments:
                <input type="text" class="w-80" />
              </div>
              <div class="pad-3">
                <div class="flex">
                  <div class="flex-center-1 gap-5 w-90">
                    <div
                      class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                    >
                      21
                    </div>
                    <div class="f-bold c-green">
                      Spiritual Need Interventions
                    </div>
                    <div class="c-green">
                      <b class="c-green">A</b>ssess/<b class="c-green">P</b
                      >erform/<b class="c-green">I</b>nstruct Pt/Cg:
                    </div>
                  </div>
                  <div class="flex-center-align gap-8">
                    <div class="f-bold c-green w-20">A</div>
                    <div class="f-bold c-green w-20">P</div>
                    <div class="f-bold c-green w-20">I</div>
                  </div>
                </div>
                <div class="flex">
                  <div class="w-90">
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Need for Caregiver Relief
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Change level of care to
                      inpatient respite care per physician order
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Encourage caregiver rest during
                      patient's respite care
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Provide education regarding
                      resources and/or alternate placement
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Other (specify):
                      <div class="border w-70 b-b">
                        <input type="text" class="w-100" />
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1 visibility-hidden">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="pad-3">
            <div class="flex gap-5">
              <div>
                <div class="flex-center-1 gap-5">
                  <div
                    class="border width-20 height-10 flex-center-align bg-green c-green pad-5"
                  >
                    18A
                  </div>
                  <b>FUNCTIONAL STATUS</b>
                </div>
                <div class="flex">
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Amputation
                    </div>
                    <div class="flex-top">
                      <input type="checkbox" /> Bowel/Bladder incontinence
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Contracture
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Hearing
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Paralysis
                    </div>
                    <div class="flex-top">
                      <input type="checkbox" /> Decreased endurace
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Ambulation
                    </div>
                    <div class="flex-top">
                      <input type="checkbox" /> Difficult speech
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Legally blind
                    </div>
                  </div>
                  <div>
                    <div class="flex-top">
                      <input type="checkbox" /> Shortness of Breath with minimal
                      exertion
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Fatigue
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Weakness
                    </div>
                  </div>
                  <div>
                    <div class="flex-top">
                      <input type="checkbox" /> Other (specify)
                      <div class="border b-b w-50">
                        <input type="text" class="w-100" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-20">
                <div class="w-100">
                  <div class="bg-purple border b-left b-right b-top">
                    <b>Comments:</b>
                  </div>
                  <div class="bg-purple border b-left b-right b-top">
                    <input type="text" class="w-100" />
                  </div>
                  <div class="bg-purple border b-left b-right b-top">
                    <input type="text" class="w-100" />
                  </div>
                  <div class="bg-purple border b-left b-right b-top">
                    <input type="text" class="w-100" />
                  </div>
                  <div class="bg-purple border b-left b-right b-top">
                    <input type="text" class="w-100" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <table>
            <tr>
              <td class="pad-3 bg-violet-1 w-60">
                <div><b>Patient Name</b> (First, MI, Last)</div>
                <div>
                  <input type="text" class="w-100" />
                </div>
              </td>
              <td class="pad-3 bg-violet-1">
                <div>
                  <b>ID No.</b>
                </div>
                <div>
                  <input type="text" class="w-100" />
                </div>
              </td>
            </tr>
          </table>
        </div>
        <br />
        <br />
        <br />
        <div class="bg-violet pad-5 br-10 c-white">
          LIVING ARRANGEMENT <i class="c-white">(continued)</i>
        </div>
        <div class="border b-b">
          <div class="flex gap-5 pad-3">
            <div class="w-85">
              <div>
                <b>Safety/Sanitation Hazards</b> affecting patient:
                <b><i>(Mark all that apply)</i></b>
              </div>
              <div class="flex gap-10">
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Stairs
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Narrow or obstructed walkways
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> No gas/electric appliances
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Inadequate lighting, heating and
                    cooling
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Lack of fire safety devices
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> No running water, plumbing
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Insect/Rodent Infestation
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Cluttered/Soiled living area
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Smoking materials in home
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Home suitable/adaptable for care
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Other (specify):
                    <div class="border b-b"><input type="text" /></div>
                  </div>
                  <div class="border b-b">
                    <input type="text" class="w-100" />
                  </div>
                </div>
              </div>
            </div>
            <div class="w-25">
              <div class="w-100">
                <div class="bg-purple border b-left b-right b-top">
                  <b>Comments:</b>
                </div>
                <div class="bg-purple border b-left b-right b-top">
                  <input type="text" class="w-100" />
                </div>
                <div class="bg-purple border b-left b-right b-top">
                  <input type="text" class="w-100" />
                </div>
                <div class="bg-purple border b-left b-right b-top">
                  <input type="text" class="w-100" />
                </div>
                <div class="bg-purple border b-left b-right b-top">
                  <input type="text" class="w-100" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="border b-b">
          <div class="flex gap-5 pad-3">
            <div class="w-85">
              <div class="flex-center-1 gap-5">
                <div
                  class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                >
                  15
                </div>
                <b>SAFETY MEASURES:</b>
              </div>
              <div class="flex gap-10">
                <div class="w-100">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Anticoagulant Precautions
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> O2 Precautions
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Slow position change
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Proper position during meals
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Use of assistive devices
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Support during transfer and
                    ambulation
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Emergency plan developed
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Patient
                  </div>
                  <div class="flex-top">
                    <input type="checkbox" /> Caregiver demonstrated knowledge
                    and understanding of safety measures/safety management
                  </div>
                  <div class="flex-center-1">
                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" /> Yes
                    &nbsp;&nbsp;&nbsp;<input type="checkbox" /> No
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Equipment use/safety
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Keep side rails up
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Keep pathways clear
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Safety in ADLs
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Seizure Precautions
                  </div>
                  <div class="flex-top">
                    <input type="checkbox" /> Standard Precautions/Infection
                    Control
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Neutropenic Precautions
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Fail Precautions
                  </div>
                  <div class="flex">
                    <input type="checkbox" /> Other (specify):
                    <div class="border b-b w-50"><input type="text" /></div>
                  </div>
                  <div class="border b-b">
                    <input type="text" class="w-100" />
                  </div>
                </div>
              </div>
            </div>
            <div class="w-25">
              <div>
                <b>Triage/Risk Code (Agency specific):</b>
                <div class="border b-b">
                  <input type="text" class="w-100" />
                </div>
              </div>
              <div class="w-100 bg-purple">
                <b>Disaster Code (Agency specific)</b>
                <div class="border b-b">
                  <input type="text" class="w-100" />
                </div>
                <div class="border b-b">
                  <input type="text" class="w-100" />
                </div>
              </div>
              <div class="w-100">
                <div class="bg-purple border b-left b-right b-top">
                  <b>Comments:</b>
                </div>
                <div class="bg-purple border b-left b-right b-top">
                  <input type="text" class="w-100" />
                </div>
                <div class="bg-purple border b-left b-right b-top">
                  <input type="text" class="w-100" />
                </div>
                <div class="bg-purple border b-left b-right b-top">
                  <input type="text" class="w-100" />
                </div>
                <div class="bg-purple border b-left b-right b-top">
                  <input type="text" class="w-100" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="">
          <div class="flex gap-5 pad-3">
            <div class="w-85">
              <div class="flex gap-5">
                <b>FINANCIAL:</b>
                <div>Ability of Patient to handle Personal Finances</div>
                <div class="flex-center-1">
                  <input type="checkbox" /> Independent
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> Needs assistance
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> Totally dependent
                </div>
              </div>
              <div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Medical expenses not covered by
                    Insurance/Medicare
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Inadequate to buy necessities
                    (food, medications, supplies, etc.)
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Inappropriate use of limited
                    income (buying non-essentials - alcohol, junk food, etc.)
                  </div>
                </div>
              </div>
            </div>
            <div class="w-25">
              <div class="w-100">
                <div class="bg-purple border b-left b-right b-top">
                  <b>Comments:</b>
                </div>
                <div class="bg-purple border b-left b-right b-top">
                  <input type="text" class="w-100" />
                </div>
                <div class="bg-purple border b-left b-right b-top">
                  <input type="text" class="w-100" />
                </div>
                <div class="bg-purple border b-left b-right b-top">
                  <input type="text" class="w-100" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="flex">
          <div class="w-40">
            <table>
              <tr class="b-left">
                <td class="b-left bg-purple w-70">
                  <b>Community Agencies/Social Service Screening</b>
                </td>
                <td class="bg-purple w-10 text-center"><b>Yes</b></td>
                <td class="bg-purple w-10 text-center"><b>No</b></td>
              </tr>
              <tr class="b-left">
                <td class="b-left">
                  Community Resource Info needed to manage care
                </td>
                <td><input type="text" class="w-100 text-center" /></td>
                <td><input type="text" class="w-100 text-center" /></td>
              </tr>
              <tr class="b-left">
                <td class="b-left">
                  Altered affect (i.e., depression, gried, body image change)
                </td>
                <td><input type="text" class="w-100 text-center" /></td>
                <td><input type="text" class="w-100 text-center" /></td>
              </tr>
              <tr class="b-btm b-left">
                <td class="b-left b-btm">Suicide Ideation</td>
                <td class="b-btm">
                  <input type="text" class="w-100 text-center" />
                </td>
                <td class="b-btm">
                  <input type="text" class="w-100 text-center" />
                </td>
              </tr>
            </table>
          </div>
          <div class="w-60">
            <table>
              <tr class="b-left b-right">
                <td class="bg-purple w-70 b-left"></td>
                <td class="bg-purple w-10 text-center"><b>Yes</b></td>
                <td class="bg-purple w-10 text-center b-right"><b>No</b></td>
              </tr>
              <tr class="b-left b-right">
                <td class="b-left">
                  <div>Suspected Abuse/Neglect, i.e.:(Please check)</div>
                  <div>
                    <div class="flex gap-5">
                      <div>
                        <div class="flex-top">
                          <input type="checkbox" /> unexplained bruises
                        </div>
                        <div class="flex-center-1 gamay">
                          <input type="checkbox" /> sexual abuse
                        </div>
                      </div>
                      <div>
                        <div class="flex-top">
                          <input type="checkbox" /> inadequate food
                        </div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> neglect
                        </div>
                      </div>
                      <div>
                        <div class="flex-top">
                          <input type="checkbox" /> fearful of family member
                        </div>
                        <div class="flex-top">
                          <input type="checkbox" /> left unattended if needs
                          constant supervision
                        </div>
                      </div>
                      <div>
                        <div class="flex-top">
                          <input type="checkbox" /> Cg. exploitation of funds
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
                <td><input type="text" class="text-center w-100" /></td>
                <td class="b-right">
                  <input type="text" class="text-center w-100" />
                </td>
              </tr>
              <tr class="b-left b-btm b-right">
                <td class="b-btm b-left">
                  Inadequate methods to cook of shop for groceries
                </td>
                <td class="b-btm">
                  <input type="text" class="text-center w-100" />
                </td>
                <td class="b-btm b-right">
                  <input type="text" class="text-center w-100" />
                </td>
              </tr>
            </table>
          </div>
        </div>
        <div class="border b-left b-right b-btm bg-purple flex pad-3">
          Comments:
          <div class="w-100"><input type="text" class="w-100" /></div>
        </div>
        <div class="bg-violet c-white br-10 pad-5">SENSORY STATUS</div>
        <div class="border b-b">
          <div class="flex">
            <div class="flex-top gap-5">
              <div class="flex gap-10">
                <b>VITAL SIGNS:</b>
                <div>PULSE:</div>
              </div>
              <div class="w-40">
                <div class="flex-center-1 gap-3">
                  <input type="checkbox" /> Apical:
                  <div class="border b-b w-30">
                    <input type="text" class="w-100" />
                  </div>
                  <input type="checkbox" /> Reg <input type="checkbox" /> Irreg
                </div>
                <div class="flex-center-1 gap-3">
                  <input type="checkbox" /> Radial:
                  <div class="border b-b w-30">
                    <input type="text" class="w-100" />
                  </div>
                  <input type="checkbox" /> Reg <input type="checkbox" /> Irreg
                </div>
              </div>
              <div>
                <div class="flex">
                  <div>TEMPT:</div>
                  <div class="border b-b w-30">
                    <input type="text" class="w-100" />
                  </div>
                  <div>RESP:</div>
                  <div class="border b-b w-30">
                    <input type="text" class="w-100" />
                  </div>
                </div>
                <div class="flex gap-5">
                  <div>BP.:</div>
                  <div class="border b-b w-30">
                    <input type="text" class="w-100" />
                  </div>
                  <div class="flex-center-1"><input type="checkbox" /> NA</div>
                </div>
              </div>
            </div>
            <div class="border b-right b-top b-btm pad-3">
              <div class="flex gap-3">
                <div>
                  <div class="flex">
                    Height
                    <div class="border b-b">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                  <div class="flex">
                    Weight
                    <div class="border b-b">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
                <div class="w-100">
                  <div class="w-100">
                    <div class="bg-purple border b-left b-right b-top">
                      <b>Comments:</b>
                    </div>
                    <div class="bg-purple border b-left b-right b-top">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="border b-b">
          <div class="flex">
            <div class="flex-top gap-5 w-70">
              <b>VISION:</b>
              <div>
                <div class="flex-center-1"><input type="checkbox" /> WNL</div>
                <div class="flex-center-1">
                  <input type="checkbox" /> Glasses
                </div>
              </div>
              <div>
                <div class="flex-center-1">
                  <input type="checkbox" /> Blurred Vision
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> Glasses Glaucoma
                </div>
              </div>
              <div>
                <div class="flex-center-1 gap-3">
                  <input type="checkbox" /> Contacts:
                  <input type="checkbox" /> R <input type="checkbox" /> L
                </div>
                <div class="flex-center-1 gap-3">
                  <input type="checkbox" /> Cataracts
                </div>
              </div>
              <div>
                <div class="flex-center-1">
                  <input type="checkbox" /> Other (specify):
                  <div class="border b-b">
                    <input type="text" class="w-100" />
                  </div>
                </div>
                <div class="border b-b">
                  <input type="text" class="w-100" />
                </div>
              </div>
            </div>
            <div class="w-30 pad-3">
              <div class="w-100">
                <div class="bg-purple border b-left b-right b-top">
                  <b>Comments:</b>
                </div>
                <div class="bg-purple border b-left b-right b-top">
                  <input type="text" class="w-100" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page">
        <div class="border b-b">
          <div class="flex">
            <div>
              <div class="flex gap-10 border b-b">
                <div class="pad-3">
                  <div class="flex">
                    <div class="inline-block width-125">
                      <b>EARS/NOSETHROAT/MOUTH</b>
                    </div>
                    <div class="inline-block">
                      <div class="flex-center-1">
                        <input type="checkbox" /> WNL
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="flex gap-10">
                      <div>
                        <div>Hearing Loss?</div>
                        <div>Ear Pain?</div>
                      </div>
                      <div>
                        <div class="flex gap-5">
                          <div>
                            <div class="flex-center-1">
                              <input type="checkbox" /> L
                            </div>
                            <div class="flex-center-1">
                              <input type="checkbox" /> L
                            </div>
                          </div>
                          <div>
                            <div class="flex-center-1">
                              <input type="checkbox" /> R
                            </div>
                            <div class="flex-center-1">
                              <input type="checkbox" /> R
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="flex gap-5">
                          <div>Aid Used?</div>
                          <div>
                            <div class="flex-center-1">
                              <input type="checkbox" /> L
                            </div>
                          </div>
                          <div>
                            <div class="flex-center-1">
                              <input type="checkbox" /> R
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-purple pad-3">
                  <div class="flex">
                    <div class="inline-block width-100">
                      <b>Pharyngeal Condition:</b>
                    </div>
                    <div class="inline-block">
                      <div class="flex-center-1">
                        <input type="checkbox" /> WNL
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Hoarseness
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Sore throat
                    </div>
                  </div>
                  <div class="flex">
                    Other:
                    <div class="border b-b"><input type="text" /></div>
                  </div>
                </div>
              </div>
              <div class="flex gap-2 bg-purple pad-1 border b-b">
                <div><b>Severity of Symptoms</b></div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> <b>No Symptoms</b>
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> <b>Mild</b>
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> <b>Moderate</b>
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> <b>Severe (distressed)</b>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-50">
              <div class="flex gap-5">
                <div>
                  <b>Mouth Condition:</b>
                </div>
                <div>
                  <div class="flex-center-1"><input type="checkbox" /> WNL</div>
                </div>
              </div>
              <div class="flex gap-3">
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Abnormal oral mucosa appearance
                  </div>
                  <div class="flex-center-1 gap-3">
                    <input type="checkbox" /> Dentures
                    <input type="checkbox" /> Difficulty swallowing
                  </div>
                </div>
                <div>
                  <div class="flex-center-1 gap-3">
                    <input type="checkbox" /> Gum problems
                    <input type="checkbox" /> Chewing problems
                  </div>
                  <div class="flex">
                    Other:
                    <div class="border b-b"><input type="text" /></div>
                  </div>
                </div>
              </div>
              <div class="w-100">
                <div class="w-100">
                  <div class="bg-purple border b-left b-right b-top pad-2">
                    <b>Comments:</b>
                  </div>
                  <div class="bg-purple border b-left b-right b-top pad-2">
                    <input type="text" class="w-100" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-purple pad-3">
            <div class="flex">
              Comments:
              <div class="w-90"><input type="text" class="w-100" /></div>
            </div>
          </div>
        </div>
        <div class="border b-b">
          <div class="flex pad-3">
            <div class="w-50">
              <div class="flex">
                <div class="w-80">
                  <div class="flex gap-10">
                    <b>COMMUNICATION</b>
                    <div class="flex-center-1">
                      <input type="checkbox" /> WNL
                    </div>
                  </div>
                </div>
                <div class="flex-center-align gap-25 w-20">
                  <div>
                    <b>YES</b>
                  </div>
                  <div>
                    <b>NO</b>
                  </div>
                </div>
              </div>
              <div class="flex">
                <div class="inline-block w-80">
                  Limited educational background
                </div>
                <div class="inline-block w-20">
                  <div class="flex-center-align gap-20">
                    <div class="flex-center-align width-20">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-align width-20">
                      <input type="checkbox" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex">
                <div class="inline-block w-80">
                  <div class="flex">
                    <div class="w-60">Reading or writing problems</div>
                    <div class="flex gap-20">
                      <div class="flex-center-1">
                        <input type="checkbox" /> Pt.
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Cg.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="inline-block w-20">
                  <div class="flex-center-align gap-20">
                    <div class="flex-center-align width-20">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-align width-20">
                      <input type="checkbox" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex">
                <div class="inline-block w-80">
                  <div class="flex">
                    <div class="w-60">Slow learner</div>
                    <div class="flex gap-20">
                      <div class="flex-center-1">
                        <input type="checkbox" /> Pt.
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Cg.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="inline-block w-20">
                  <div class="flex-center-align gap-20">
                    <div class="flex-center-align width-20">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-align width-20">
                      <input type="checkbox" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex">
                <div class="inline-block w-80">
                  <div class="flex">
                    <div class="w-60">Speech/Language barrier</div>
                    <div class="flex gap-20">
                      <div class="flex-center-1">
                        <input type="checkbox" /> Pt.
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Cg.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="inline-block w-20">
                  <div class="flex-center-align gap-20">
                    <div class="flex-center-align width-20">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-align width-20">
                      <input type="checkbox" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex">
                <div class="inline-block w-80">
                  <div class="flex">
                    <div class="">Primary Language</div>
                    <div class="border w-65 b-b">
                      <input type="text" />
                    </div>
                    <!-- <div class="flex gap-20">
                      <div class="flex-center-1">
                        <input type="checkbox"> Pt.
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox"> Cg.
                      </div>
                    </div> -->
                  </div>
                </div>
                <div class="inline-block w-20">
                  <div class="flex-center-align gap-20">
                    <div class="flex-center-align width-20">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-align width-20">
                      <input type="checkbox" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex">
                <div class="inline-block w-80">
                  <div class="flex">
                    <div class="w-60">Interpreter needed?</div>
                    <!-- <div class="flex gap-20">
                      <div class="flex-center-1">
                        <input type="checkbox"> Pt.
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox"> Cg.
                      </div>
                    </div> -->
                  </div>
                </div>
                <div class="inline-block w-20">
                  <div class="flex-center-align gap-20">
                    <div class="flex-center-align width-20">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-align width-20">
                      <input type="checkbox" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex">
                <div class="inline-block w-80">
                  <div class="flex">
                    <div class="w-60">Motivated to learn?</div>
                    <div class="flex gap-20">
                      <div class="flex-center-1">
                        <input type="checkbox" /> Pt.
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Cg.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="inline-block w-20">
                  <div class="flex-center-align gap-20">
                    <div class="flex-center-align width-20">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-align width-20">
                      <input type="checkbox" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-50">
              <div>
                <div class="flex gap-10">
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> <b>Patient</b>
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                      <b>Caregiver Learning Preferences:</b>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="flex gap-5">
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Verbal
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Visual aides
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Written
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Other (specify):
                      <div class="border b-b width-200">
                        <input type="text" class="w-100" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="w-100">
                  <div class="bg-purple border b-left b-right b-top">
                    <b>Comments:</b>
                  </div>
                  <div class="bg-purple border b-left b-right b-top">
                    <input type="text" class="w-100" />
                  </div>
                  <div class="bg-purple border b-left b-right b-top">
                    <input type="text" class="w-100" />
                  </div>
                  <div class="bg-purple border b-left b-right b-top">
                    <input type="text" class="w-100" />
                  </div>
                  <div class="bg-purple border b-left b-right b-top">
                    <input type="text" class="w-100" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="border b-b">
          <div class="flex">
            <div class="w-50">
              <div class="">
                <div class="flex gap-20 pad-3">
                  <div><b>Neurological</b></div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> WNL
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Dizziness
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> PERRL
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Seizures
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="flex-center-1">
                  <input type="checkbox" /> Headache (describe location,
                  duration):
                  <div class="border b-b w-45">
                    <input type="text" class="w-100" />
                  </div>
                </div>
                <div class="border b-b">
                  <input type="text" class="w-100" />
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> Other (specify):
                  <div class="border b-b w-75">
                    <input type="text" class="w-100" />
                  </div>
                </div>
              </div>
              <div class="flex gap-1 bg-purple pad-1">
                <div><b>Severity of Symptoms</b></div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> <b>No Symptoms</b>
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> <b>Mild</b>
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> <b>Moderate</b>
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> <b>Severe (distressed)</b>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-50">
              <div class="pad-3">
                <div class="flex">
                  <div class="flex-center-1 gap-5 w-90">
                    <div
                      class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                    >
                      21
                    </div>
                    <div class="f-bold c-green">Neurological Interventions</div>
                    <div class="c-green">
                      <b class="c-green">A</b>ssess/<b class="c-green">P</b
                      >erform/<b class="c-green">I</b>nstruct Pt/Cg:
                    </div>
                  </div>
                  <div class="flex-center-align gap-8">
                    <div class="f-bold c-green w-20">A</div>
                    <div class="f-bold c-green w-20">P</div>
                    <div class="f-bold c-green w-20">I</div>
                  </div>
                </div>
                <div class="flex">
                  <div class="w-90">
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> S/S of seizure activity
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Medication administration, side
                      effects and response
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Care of patient experiecing
                      seizures
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Other (specify):
                      <div class="border w-70 b-b">
                        <input type="text" class="w-100" />
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1 visibility-hidden">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-purple border b-left b-right b-btm pad-3">
            <div class="flex">
              Comments:
              <div class="w-90"><input type="text" class="w-100" /></div>
            </div>
          </div>
        </div>
        <div class="">
          <div class="flex">
            <div class="w-50">
              <div class="">
                <div class="flex gap-20 pad-3">
                  <div><b>MUSCULOSKELETAL</b></div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> WNL
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="flex gap-5">
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Independent
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Requires assistance
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Total dependence
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Bed bound
                    </div>
                  </div>
                </div>
                <div>
                  <div class="flex">
                    <div class="w-45">
                      <div class="flex-center-1">
                        <input type="checkbox" /> Limited ROM (give location):
                      </div>
                    </div>
                    <div class="w-50">
                      <div class="border b-b">
                        <input type="text" class="w-100" />
                      </div>
                    </div>
                  </div>
                  <div class="flex">
                    <div class="w-45">
                      <div class="flex-center-1">
                        <input type="checkbox" /> Bone of join problems
                      </div>
                    </div>
                    <div class="w-50">
                      <div class="border b-b">
                        <input type="text" class="w-100" />
                      </div>
                    </div>
                  </div>
                  <div class="flex">
                    <div class="w-45">
                      <div class="flex-center-1">
                        <input type="checkbox" /> Pain or cramps
                      </div>
                    </div>
                    <div class="w-50">
                      <div class="border b-b">
                        <input type="text" class="w-100" />
                      </div>
                    </div>
                  </div>
                  <div class="flex">
                    <div class="w-45">
                      <div class="flex-center-1">
                        <input type="checkbox" /> Redness, warmth, swelling
                      </div>
                    </div>
                    <div class="w-50">
                      <div class="border b-b">
                        <input type="text" class="w-100" />
                      </div>
                    </div>
                  </div>
                  <div class="flex">
                    <div class="w-45">
                      <div class="flex-center-1">
                        <input type="checkbox" /> Decreased mobility/endurance
                      </div>
                    </div>
                    <div class="w-50">
                      <div class="border b-b">
                        <input type="text" class="w-100" />
                      </div>
                    </div>
                  </div>
                  <div class="flex">
                    <div class="w-45">
                      <div class="flex-center-1">
                        <input type="checkbox" /> Tremors
                      </div>
                    </div>
                    <div class="w-50">
                      <div class="border b-b">
                        <input type="text" class="w-100" />
                      </div>
                    </div>
                  </div>
                  <div class="flex">
                    <div class="w-45">
                      <div class="flex-center-1">
                        <input type="checkbox" /> Amputation of
                      </div>
                    </div>
                    <div class="w-50">
                      <div class="border b-b">
                        <input type="text" class="w-100" />
                      </div>
                    </div>
                  </div>
                  <div class="flex">
                    <div class="w-45">
                      <div class="flex-center-1">
                        <input type="checkbox" /> Prosthesis/Appliance
                      </div>
                    </div>
                    <div class="w-50">
                      <div class="border b-b">
                        <input type="text" class="w-100" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex gap-1 bg-purple pad-1">
                <div><b>Severity of Symptoms</b></div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> <b>No Symptoms</b>
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> <b>Mild</b>
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> <b>Moderate</b>
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> <b>Severe (distressed)</b>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-50">
              <div class="pad-3 border b-b">
                <div class="flex">
                  <div class="flex-center-1 gap-5 w-90">
                    <div
                      class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                    >
                      21
                    </div>
                    <div class="f-bold c-green">Mobility Interventions</div>
                    <div class="c-green">
                      <b class="c-green">A</b>ssess/<b class="c-green">P</b
                      >erform/<b class="c-green">I</b>nstruct Pt/Cg:
                    </div>
                  </div>
                  <div class="flex-center-align gap-8">
                    <div class="f-bold c-green w-20">A</div>
                    <div class="f-bold c-green w-20">P</div>
                    <div class="f-bold c-green w-20">I</div>
                  </div>
                </div>
                <div class="flex">
                  <div class="w-90">
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Safety transfers
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Provide assistive decices
                      (specify)
                      <div class="border b-b w-45">
                        <input type="text" class="w-100" />
                      </div>
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Encourage activity as tolerated
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Other (specify):
                      <div class="border w-70 b-b">
                        <input type="text" class="w-100" />
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="pad-3">
                <div class="flex">
                  <div class="flex-center-1 gap-5 w-90">
                    <div
                      class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                    >
                      21
                    </div>
                    <div class="f-bold c-green">ADL Interventions</div>
                    <div class="c-green">
                      <b class="c-green">A</b>ssess/<b class="c-green">P</b
                      >erform/<b class="c-green">I</b>nstruct Pt/Cg:
                    </div>
                  </div>
                  <div class="flex-center-align gap-8">
                    <div class="f-bold c-green w-20">A</div>
                    <div class="f-bold c-green w-20">P</div>
                    <div class="f-bold c-green w-20">I</div>
                  </div>
                </div>
                <div class="flex">
                  <div class="w-90">
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Caregiver ability to provide
                      personal care
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Basic personal care techniques
                      and activities of daily living (ADLs)
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Provide hospice aide personal
                      care frequency:
                      <div class="border b-b w-25">
                        <input type="text" class="w-100" />
                      </div>
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Other (specify):
                      <div class="border w-70 b-b">
                        <input type="text" class="w-100" />
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1 visibility-hidden">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1 visibility-hidden">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1 visibility-hidden">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-purple border b-left b-right b-btm pad-3">
            <div class="flex">
              Comments:
              <div class="w-90"><input type="text" class="w-100" /></div>
            </div>
          </div>
        </div>
        <div class="border b-b">
          <table>
            <tr>
              <td class="pad-3 bg-violet-1 w-60">
                <div><b>Patient Name</b> (First, MI, Last)</div>
                <div>
                  <input type="text" class="w-100" />
                </div>
              </td>
              <td class="pad-3 bg-violet-1">
                <div>
                  <b>ID No.</b>
                </div>
                <div>
                  <input type="text" class="w-100" />
                </div>
              </td>
            </tr>
          </table>
          <br />
          <br />
          <br />
          <div class="bg-violet pad-5 br-10 c-white">
            SENSORY STATUS <i class="c-white">(continued)</i>
          </div>
          <div>
            <div class="flex">
              <div class="w-30 border b-top b-left b-btm">
                <div class="bg-purple pad-3">
                  <b>PATIENT SAFETY/FALL RISK ASSESSMENT</b>
                </div>
                <div class="border b-b pad-3">
                  <b>Level of Consciousness/Menal Status</b>
                  <div class="flex-center-1 gap-2">
                    <input type="checkbox" /> 0 - Alert - (oriented x 3) or
                    Comatose
                  </div>
                  <div class="flex-center-1 gap-2">
                    <input type="checkbox" /> 2 - Disoriented x 3 at all times
                  </div>
                  <div class="flex-center-1 gap-2">
                    <input type="checkbox" /> 4 - Intermittent confusion
                  </div>
                  <div class="text-right flex-end-1 pad-5">
                    <b>Score</b>
                    <div class="border b-b w-10">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
                <div class="border b-b pad-3">
                  <b>History of Falls (past 3 months)</b>
                  <div class="flex-center-1 gap-2">
                    <input type="checkbox" /> 0 - No falls (in past 3 months)
                  </div>
                  <div class="flex-center-1 gap-2">
                    <input type="checkbox" /> 2 - 1-2 fals (in past 3 months)
                  </div>
                  <div class="flex-center-1 gap-2">
                    <input type="checkbox" /> 4 - 3 -r more falls (in past 3
                    months)
                  </div>
                  <div class="text-right flex-end-1 pad-5">
                    <b>Score</b>
                    <div class="border b-b w-10">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
                <div class="border b-b pad-3">
                  <b>Ambulation/Elimination Status</b>
                  <div class="flex-center-1 gap-2">
                    <input type="checkbox" /> 0 - Ambulatory/Continent
                  </div>
                  <div class="flex-center-1 gap-2">
                    <input type="checkbox" /> 2 - Chairbound
                  </div>
                  <div class="flex-center-1 gap-2">
                    <input type="checkbox" /> 4 - Ambulatory/Incontinent
                  </div>
                  <div class="text-right flex-end-1 pad-5">
                    <b>Score</b>
                    <div class="border b-b w-10">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
                <div class="pad-3">
                  <b>Vision Status</b>
                  <div class="flex-center-1 gap-2">
                    <input type="checkbox" /> 0 - Adequate (with or without
                    glasses)
                  </div>
                  <div class="flex-center-1 gap-2">
                    <input type="checkbox" /> 2 - Poor (with or without glasses)
                  </div>
                  <div class="flex-center-1 gap-2">
                    <input type="checkbox" /> 4 - Legally Blind
                  </div>
                  <div class="text-right flex-end-1 pad-5">
                    <b>Score</b>
                    <div class="border b-b w-10">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-40 border b-top b-left b-btm">
                <div class="border b-b pad-3">
                  <b>Gait/Balance</b>
                  <div>
                    Have patient stand on both feet without holding onto
                    anything, walk straight forwrd; walk through a doorway; and
                    make a turn.
                  </div>
                  <b><i>(Mark all that apply.)</i></b>
                  <div class="flex-center-1 gap-2">
                    <input type="checkbox" /> 0 - Gait/Balance normal
                  </div>
                  <div class="flex-center-1 gap-2">
                    <input type="checkbox" /> 1 - Balance problem while standing
                  </div>
                  <div class="flex-center-1 gap-2">
                    <input type="checkbox" /> 1 - Balance problem while walking
                  </div>
                  <div class="flex-center-1 gap-2">
                    <input type="checkbox" /> 1 - Decreased muscular
                    coordination
                  </div>
                  <div class="flex-center-1 gap-2">
                    <input type="checkbox" /> 1 - Change in gait pattern when
                    walking through doorway
                  </div>
                  <div class="flex-center-1 gap-2">
                    <input type="checkbox" /> 1 - Jerking or untable when making
                    turns
                  </div>
                  <div class="flex-top gap-2">
                    <input type="checkbox" /> 1 - Requires the use of assistive
                    device (cane, wheelchair, furniure, etc.)
                  </div>
                  <div class="text-right flex-end-1 pad-5">
                    <b>Score</b>
                    <div class="border b-b w-10">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
                <div class="pad-3">
                  <b>Medications</b>
                  <div class="text-justify">
                    Respond below based on the following types of medications;
                    anesthetics, antihistamines, antihypertensives, antiseizure,
                    benzodiazepines,cahartics, diuretics, hypoglycemis,
                    narcotics, psychotropics, sedatives
                  </div>
                  <div class="flex-top gap-2">
                    <input type="checkbox" /> 0 - None of these medications
                    taken currently or w/in the last 7 days
                  </div>
                  <div class="flex-top gap-2">
                    <input type="checkbox" /> 2 - Takes 1-2 of these medications
                    currenty and/or w/in last 7 days
                  </div>
                  <div class="flex-top gap-2">
                    <input type="checkbox" /> 4 - Takes 3-4 of these medications
                    currently and/on w/in last 7 days
                  </div>
                  <div class="flex-top gap-2">
                    <input type="checkbox" /> 1 - If patient has had a change in
                    medications and/or change in dosage in past 5 days = score 1
                    additional point
                  </div>
                  <div class="text-right flex-end-1 pad-5">
                    <b>Score</b>
                    <div class="border b-b w-10">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-30">
                <div class="border b-b pad-3">
                  <b>Systolic Blood Pressure</b>
                  <div class="flex-top gap-2">
                    <input type="checkbox" /> 0 - No noted drop between lying
                    and standing
                  </div>
                  <div class="flex-top gap-2">
                    <input type="checkbox" /> 2 - Drop, < 20mmHg between lying
                    and standing
                  </div>
                  <div class="flex-top gap-2">
                    <input type="checkbox" /> 4 - Drop, > 20mmHg between lying
                    and standing
                  </div>
                  <div class="text-right flex-end-1 pad-5">
                    <b>Score</b>
                    <div class="border b-b w-10">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
                <div class="border b-b pad-3">
                  <b>Predisposig Diseases</b>
                  <div class="text-justify">
                    Respond below based on the following predisposing
                    conditions: hypotension, vertigo, CVA, Parkison's disease,
                    loss of limb(s), seizures, arthritis, osteoporosis,
                    fractures
                  </div>
                  <div class="flex-center-1 gap-2">
                    <input type="checkbox" /> 0 - None present
                  </div>
                  <div class="flex-center-1 gap-2">
                    <input type="checkbox" /> 2 - 1-2 present
                  </div>
                  <div class="flex-center-1 gap-2">
                    <input type="checkbox" /> 4 - 3-4 or more present
                  </div>
                  <div class="text-right flex-end-1 pad-5">
                    <b>Score</b>
                    <div class="border b-b w-10">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
                <div class="border b-b">
                  <div class="flex-end-1 pad-5">
                    <b>TOTAL SCORE</b>
                    <div class="border b-b w-20">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                  <div class="flex-end-1">
                    <b class="gamay text-right"
                      >(Total score of 10 or higher represents High Risk of
                      Falls)</b
                    >
                  </div>
                  <div class="flex-end-1 gamay">
                    <i class="gamay text-right"
                      >Refer to Hospice Policies and Procedures for additional
                      instructions</i
                    >
                  </div>
                </div>
                <div class="border b-b">
                  <div class="pad-3">
                    <div class="flex">
                      <div class="flex-center-1 gap-5">
                        <div
                          class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                        >
                          21
                        </div>
                        <div class="f-bold c-green kagamay">
                          Fall Prevention Interventions:
                        </div>
                        <div class="c-green kagamay">
                          <b class="c-green kagamay">A</b>ssess/<b
                            class="c-green kagamay"
                            >P</b
                          >erform/<b class="c-green kagamay">I</b>nstruct Pt/Cg:
                        </div>
                      </div>
                    </div>
                    <div class="flex-end-1 gap-1">
                      <div class="f-bold c-green width-10">A</div>
                      <div class="f-bold c-green width-10">P</div>
                      <div class="f-bold c-green width-10">I</div>
                    </div>
                    <div class="flex">
                      <div class="w-90">
                        <div class="flex-center-1 gap-3 c-green kagamay">
                          <input type="checkbox" /> Fall Prevention
                        </div>
                        <div class="flex-center-1 gap-3 c-green kagamay">
                          <input type="checkbox" /> Other (specify):
                          <div class="border w-50 b-b">
                            <input type="text" class="w-100" />
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="flex gap-2">
                          <div class="flex-center-1">
                            <input type="checkbox" />
                          </div>
                          <div class="flex-center-1 visibility-hidden">
                            <input type="checkbox" />
                          </div>
                          <div class="flex-center-1 visibility-hidden">
                            <input type="checkbox" />
                          </div>
                        </div>
                        <div class="flex gap-2">
                          <div class="flex-center-1">
                            <input type="checkbox" />
                          </div>
                          <div class="flex-center-1 visibility-hidden">
                            <input type="checkbox" />
                          </div>
                          <div class="flex-center-1">
                            <input type="checkbox" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-purple flex">
                  Comments
                  <input type="text" class="w-100" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page">
        <div class="bg-violet br-10 pad-5 c-white">PAIN</div>
        <div>
          <div class="flex gap-5">
            <div class="w-45">
              <div class="flex gap-10 border b-b pad-3">
                <div>
                  <div
                    class="border br-3 flex-center-align f-bold c-violet bg-violet-1 width-30"
                  >
                    J0900
                  </div>
                </div>
                <div>
                  <b>A. Pain Screen:</b>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> 0. No
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> 1. Yes
                  </div>
                </div>
              </div>
              <div class="border b-b pad-3">
                <div class="flex">
                  <b>B. Date of first screening for pain:</b>
                  <div class="flex">
                    <div>
                      <input type="text" class="width-30 text-center" />/
                    </div>
                    <div>
                      <input type="text" class="width-30 text-center" />/
                    </div>
                    <div>
                      <input type="text" class="width-30 text-center" />
                    </div>
                  </div>
                  <div>
                    <i class="wala">(Month/Day/Year)</i>
                  </div>
                </div>
              </div>
              <div class="border b-b pad-3">
                <div class="flex-top gap-10">
                  <div><b>Patient's Pain Severity</b></div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> 0. None
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> 1. Mild
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> 2. Moderate
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> 3. Severe
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> 9. Pain no rated
                    </div>
                  </div>
                </div>
              </div>
              <div class="pad-3">
                <b>D. Type of standarlized pain screen tool used:</b>
                <div class="flex">
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> 1. Numeric
                    </div>
                    <div class="flex-top">
                      <input type="checkbox" /> 2. Verbal descriptor
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> 3. Patient Visual
                    </div>
                    <div class="flex-top">
                      <input type="checkbox" /> 4. Staff Observation
                    </div>
                  </div>
                  <div>
                    <div class="flex-top">
                      <input type="checkbox" /> 9. No standarlized used tool
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-30">
              <div class="w-100">
                <img
                  class="w-100"
                  src="data:image/png;base64,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"
                  alt=""
                />
              </div>
              <br /><br />
              <div>
                <b>Reference</b>
                <i
                  >McCaffery, M.,Beebe,A,.et al.(1989).
                  <u>Pain:Clinical manual for nursing practice</u>, Mosby St.
                  Louis, MO.</i
                >
              </div>
            </div>
            <div class="w-25">
              <div>
                <div class="w-100">
                  <div class="bg-purple border b-left b-right b-top">
                    <b>Comments:</b>
                  </div>
                  <div class="bg-purple border b-left b-right b-top">
                    <input type="text" class="w-100" />
                  </div>
                  <div class="bg-purple border b-left b-right b-top">
                    <input type="text" class="w-100" />
                  </div>
                  <div class="bg-purple border b-left b-right b-top">
                    <input type="text" class="w-100" />
                  </div>
                  <div class="bg-purple border b-left b-right b-top">
                    <input type="text" class="w-100" />
                  </div>
                  <div class="bg-purple border b-left b-right b-top">
                    <input type="text" class="w-100" />
                  </div>
                  <div class="bg-purple border b-left b-right b-top">
                    <input type="text" class="w-100" />
                  </div>
                  <div class="bg-purple border b-left b-right b-top">
                    <input type="text" class="w-100" />
                  </div>
                  <div class="bg-purple border b-left b-right b-top">
                    <input type="text" class="w-100" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="border b-right b-left">
            <div class="flex">
              <div class="pad-3 w-50">
                <div class="flex gap-10">
                  <div>
                    <div
                      class="border br-3 flex-center-align f-bold c-violet bg-violet-1 width-30"
                    >
                      J0905
                    </div>
                  </div>
                  <div>
                    <b>Is pain an active problem of the patient?</b>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> 0. No
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> 1. Yes
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-50">
                <div class="bg-purple flex pad-4">
                  Comments:
                  <input type="text" class="w-100" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="flex gap-5">
          <div class="w-50">
            <div class="border b-b pad-3">
              <div class="flex gap-10">
                <div>
                  <div
                    class="border br-3 flex-center-align f-bold c-violet bg-violet-1 width-30"
                  >
                    J0910
                  </div>
                </div>
                <div>
                  <b>A. Comprehensive Pain Assessment</b>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> 0. No
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> 1. Yes
                  </div>
                </div>
              </div>
            </div>
            <div class="border b-b pad-3">
              <div class="flex">
                <b>B. Date of comprehensive Pain Asessment:</b>
                <div class="flex">
                  <div><input type="text" class="width-30 text-center" />/</div>
                  <div><input type="text" class="width-30 text-center" />/</div>
                  <div>
                    <input type="text" class="width-30 text-center" />
                  </div>
                </div>
                <div>
                  <i class="wala">(Month/Day/Year)</i>
                </div>
              </div>
            </div>
            <div class="border b-b pad-3">
              <div class="flex">
                Pain history and treatment:
                <input type="text-1" class="w-65 border b-b flex-grow-1" />
              </div>
              <div>
                <div class="flex">
                  <div>Onset date:</div>
                  <div class="flex">
                    <div>
                      <input type="text" class="width-30 text-center" />/
                    </div>
                    <div>
                      <input type="text" class="width-30 text-center" />/
                    </div>
                    <div>
                      <input type="text" class="width-30 text-center" />
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="flex gap-10">
                  <div>Pain precipitated by:</div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Activities
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Care
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Treatment
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="pad-3">
              <b>C. Comprehensive Pain Assessment includes:</b>
              <div class="flex-center-1 gap-6">
                <input type="checkbox" /> 1. <b>Primary Location</b> and
                Radition:
                <div class="border b-b flex-grow-1">
                  <input type="text" class="w-100" />
                </div>
              </div>
              <div class="flex-center-1 gap-5">
                <input type="checkbox" /> 2. <b>Severity</b>
                <i>(See "Patient's Pain Severity" rating above)</i>
              </div>
              <div class="flex-center-1">
                &nbsp; &nbsp;&nbsp; &nbsp; <input type="checkbox" /> Other
                (specify):
                <div class="border b-b flex-grow-1">
                  <input type="text" class="w-100" />
                </div>
              </div>
              <div class="flex-top gap-3">
                <div>
                  <div class="flex-center-1 gap-5">
                    <input type="checkbox" /> 3. <b>Pain character:</b>
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Sharp
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Deep
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Dull
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Superficial
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Throbbing
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Aching
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Burning
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Other (specify):
                    <div class="border b-b flex-grow-1 w-20">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex-center-1 gap-5">
                <input type="checkbox" /> 4. <b>Pain duration:</b>
                <div class="border b-b flex-grow-1">
                  <input type="text" class="w-100" />
                </div>
              </div>
              <div class="flex gap-5">
                <div>
                  <div class="flex-center-1 gap-5">
                    <input type="checkbox" /> 5. <b>Pain frequency</b>
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Constant
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Intermittent
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Other (specify)
                    <div class="border b-b flex-grow-1 w-20">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex-center-1 gap-5">
                <input type="checkbox" /> 6. <b>Pain relieved by:</b>
                <div class="border b-b flex-grow-1">
                  <input type="text" class="w-100" />
                </div>
              </div>
              <div class="flex-center-1">
                &nbsp; &nbsp;&nbsp; &nbsp; <input type="checkbox" />
                <b>Pain worsen by:</b>
                <div class="border b-b flex-grow-1">
                  <input type="text" class="w-100" />
                </div>
              </div>
              <div>
                &nbsp; &nbsp;&nbsp; &nbsp; Additional symptoms associated with
                pain:
              </div>
              <div class="flex gap-5">
                <div>
                  <div class="flex-center-1">
                    &nbsp; &nbsp;&nbsp; &nbsp; <input type="checkbox" /> Nausea
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Vomitting
                  </div>
                </div>
                <div class="flex-grow-1">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Other (specify):
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex">
                &nbsp; &nbsp;&nbsp; &nbsp; Strategies/Factors that reduce pain:
                <div class="border b-b flex-grow-1">
                  <input type="text" class="w-auto" />
                </div>
              </div>
              <div class="flex gap-5">
                <div>
                  <div class="flex-center-1 gap-5">
                    <input type="checkbox" /> 7.
                    <b>Effect of Pain on quality of life:</b>
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Sleeping
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Appetite
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Mood
                  </div>
                </div>
              </div>
              <div class="flex">
                <div>
                  <div class="flex-center-1">
                    &nbsp; &nbsp;&nbsp; &nbsp; <input type="checkbox" />
                    <b>Functioning</b> (specify):
                    <div class="border b-b flex-grow-1 w-10">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Other (specify)
                    <div class="border b-b flex-grow-1 w-10">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex-center-1 gap-5">
                <input type="checkbox" /> 9. <b>None of the above</b>
              </div>
            </div>
          </div>
          <div class="w-50">
            <div class="flex">
              Patient/Family goal for pain management:
              <div class="border b-b w-auto flex-grow-1">
                <input type="text" class="w-100" />
              </div>
            </div>
            <div class="flex">
              Current pain management & effectiveness:
              <div class="border b-b w-auto flex-grow-1">
                <input type="text" class="w-100" />
              </div>
            </div>
            <div class="flex gap-10">
              <div>Is patient uncomfortable due to pain?</div>
              <div>
                <div class="flex-center-1"><input type="checkbox" /> Yes</div>
              </div>
              <div>
                <div class="flex-center-1"><input type="checkbox" /> No.</div>
              </div>
            </div>
            <div class="flex gap-20">
              <div class="flex-center-1">
                <input type="checkbox" /> Unable to self report
              </div>
              <div class="flex-center-1">
                <input type="checkbox" /> < age 18
              </div>
              <div class="flex-center-1">
                <input type="checkbox" /> Languange barrier
              </div>
            </div>
            <div class="bg-violet pad-3">
              <div class="flex-center-1 c-white">
                <input type="checkbox" /> See Pain Assessment/Documentation (per
                agency policy)
              </div>
              <div class="flex gap-5">
                <div class="c-white">Refer to:</div>
                <div class="bg-white flex-grow-1">
                  <input type="text" />
                </div>
              </div>
            </div>
            <div class="bg-purple flex pad-3">
              Comments:
              <input type="text" class="w-100" />
            </div>
            <div>
              <div class="pad-3 border b-b">
                <div class="flex">
                  <div class="flex-center-1 gap-5 w-90">
                    <div
                      class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                    >
                      21
                    </div>
                    <div class="f-bold c-green">
                      Pain management Intervention
                    </div>
                    <div class="c-green">
                      <b class="c-green">A</b>ssess/<b class="c-green">P</b
                      >erform/<b class="c-green">I</b>nstruct Pt/Cg:
                    </div>
                  </div>
                  <div class="flex-center-align gap-8">
                    <div class="f-bold c-green w-20">A</div>
                    <div class="f-bold c-green w-20">P</div>
                    <div class="f-bold c-green w-20">I</div>
                  </div>
                </div>
                <div class="flex">
                  <div class="w-90">
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Pain status
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Response to medications
                    </div>
                    <div class="flex-top c-green">
                      <input type="checkbox" /> Non-Pharmacological pain control
                      measures, e.g., relaxation, positioning, massage, etc:
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Other (specify):
                      <div class="border w-70 b-b">
                        <input type="text" class="w-100" />
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1 visibility-hidden">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1 visibility-hidden">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1 visibility-hidden">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1 visibility-hidden">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="pad-3 border b-b">
                <div class="flex">
                  <div class="flex-center-1 gap-5 w-90">
                    <div
                      class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                    >
                      21
                    </div>
                    <div class="f-bold c-green">General Inpatient Care</div>
                    <div class="c-green">
                      <b class="c-green">A</b>ssess/<b class="c-green">P</b
                      >erform/<b class="c-green">I</b>nstruct Pt/Cg:
                    </div>
                  </div>
                  <div class="flex-center-align gap-8">
                    <div class="f-bold c-green w-20">A</div>
                    <div class="f-bold c-green w-20">P</div>
                    <div class="f-bold c-green w-20">I</div>
                  </div>
                </div>
                <div class="flex">
                  <div class="w-90">
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Need for inpatient care for
                      pain/symptom control
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Patient/caregiver regarding
                      inpatient care
                    </div>
                    <div class="flex-top c-green">
                      <input type="checkbox" /> Arrange transfer to inpatient
                      facility per physician order
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Other (specify):
                      <div class="border w-70 b-b">
                        <input type="text" class="w-100" />
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1 visibility-hidden">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1 visibility-hidden">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1 visibility-hidden">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1 visibility-hidden">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-100">
                <div class="bg-purple border b-left b-right b-top">
                  <b>Comments:</b>
                </div>
                <div class="bg-purple border b-left b-right b-top">
                  <input type="text" class="w-100" />
                </div>
                <div class="bg-purple border b-left b-right b-top">
                  <input type="text" class="w-100" />
                </div>
                <div class="bg-purple border b-left b-right b-top">
                  <input type="text" class="w-100" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-violet pad-5 br-10 c-white">INTEGUMENTARY STATUS</div>
        <div class="border b-b">
          <div class="flex">
            <div class="w-75">
              <div class="flex">
                <div class="w-50">
                  <div class="flex gap-1">
                    <div>
                      <div>Skin Turgor:</div>
                      <div>Skin Color:</div>
                      <div>Skin:</div>
                    </div>
                    <div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Good
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Pink/WNL
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Dry
                      </div>
                    </div>
                    <div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Fair
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Pale
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Diaphroetic
                      </div>
                    </div>
                    <div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Poor
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Jaundice
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Warm
                      </div>
                    </div>
                    <div>
                      <div class="flex-center-1 visibility-hidden">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Cyanotic
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Cool
                      </div>
                    </div>
                  </div>
                </div>
                <div class="w-50">
                  <div class="flex-top gap-2">
                    <div class="width-30">Skin:</div>
                    <div class="width-50">
                      <div class="flex-center-1">
                        <input type="checkbox" /> Wounds
                      </div>
                    </div>
                    <div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Ulcers
                      </div>
                    </div>
                    <div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Incision
                      </div>
                    </div>
                    <div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Rashes
                      </div>
                    </div>
                  </div>
                  <div class="flex gap-2">
                    <div class="visibility-hidden width-30">Skin:</div>
                    <div class="width-50">
                      <div class="flex-center-1">
                        <input type="checkbox" /> Ostomy
                      </div>
                    </div>
                    <div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Other (specify)
                        <div class="border b-b flex-grow-1 w-10">
                          <input type="text" class="w-100" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="flex gap-2">
                    <div class="width-30">Nails:</div>
                    <div class="width-50">
                      <div class="flex-center-1">
                        <input type="checkbox" /> Normal
                      </div>
                    </div>
                    <div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Problems
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-25 bg-purple">
              <div class="pad-5">
                <b>Severity of Symptoms</b>
                <div class="flex">
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> <b>No Symptoms</b>
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> <b>Mild</b>
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> <b>Moderate</b>
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> <b>Severe (distressed)</b>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="flex">
            <div class="w-80">
              <div class="border b-b">
                <div class="flex gap-20">
                  <div class="w-50">
                    <div class="flex gap-10">
                      <div>Instructed on measures to control infections:</div>
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> Yes
                        </div>
                      </div>
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> No
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="w-50">
                    <div class="flex gap-10">
                      <div>Instructed on Standard Precautions</div>
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> Yes
                        </div>
                      </div>
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> No
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex">
                <div class="w-90 border b-top b-left b-btm">
                  <div class="flex">
                    <div class="border b-top b-left">
                      <div class="flex-top gap-3">
                        <div class="gamay">
                          <b class="gamay">KEY-TYPE</b>
                        </div>
                        <div class="">
                          <div class="gamay">1-Skin Lesson</div>
                          <div class="gamay">2-Pressure Ulcer</div>
                          <div class="gamay">3-Statis Ulcer</div>
                        </div>
                        <div class="gamay">
                          <div class="gamay">4-Surgical Wound</div>
                          <div class="gamay">
                            5-Other <i class="gamay">(specify)</i>
                          </div>
                        </div>
                      </div>
                      <div class="flex-top border b-right b-left b-btm gap-3">
                        <div class="gamay">
                          <b class="gamay">SIZE</b>
                        </div>
                        <div class="">
                          <div class="gamay">(LxWxD) cm</div>
                        </div>
                        <div class="gamay">
                          <div class="gamay">U-Undermining</div>
                          <div class="gamay">T-Tunneling</div>
                        </div>
                      </div>
                    </div>
                    <div class="gamay flex-grow-1">
                      <div class="flex border b-b">
                        <div class="gamay">
                          <b class="gamay">WOUND BED:</b>
                          <div class="flex gamay gap-2">
                            <div class="gamay">Color:</div>
                            <div class="gamay">
                              <div class="gamay">1-Red</div>
                              <div class="gamay">2-Pink</div>
                              <div class="gamay">3-White</div>
                            </div>
                            <div class="gamay">
                              <div class="gamay">4-Gray</div>
                              <div class="gamay">5-Black</div>
                              <div class="gamay">6-Tan</div>
                            </div>
                            <div class="gamay">
                              <div class="gamay">7-Other(specify)</div>
                            </div>
                          </div>
                        </div>
                        <div class="gamay">
                          <b class="gamay">Tissue: (list all that apply)</b>
                          <div class="flex gamay gap-2">
                            <div class="gamay">
                              <div class="gamay">1-Bloody</div>
                              <div class="gamay">2-Pale</div>
                              <div class="gamay">3-Sloughing</div>
                            </div>
                            <div class="gamay">
                              <div class="gamay">4-Necrotic</div>
                              <div class="gamay">5-Eschar</div>
                              <div class="gamay">6-Granular</div>
                            </div>
                            <div class="gamay">
                              <div class="gamay">7-Weeping</div>
                              <div class="gamay">8-Healthy</div>
                              <div class="gamay">9-Other(specify)</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="border b-b">
                        <div class="flex">
                          <div class="border b-left b-top b-btm gamay">
                            <b class="gamay">DRAINAGE:</b>
                            <div class="flex gap-2">
                              <div class="gamay">
                                <div class="gamay">1-Bloody</div>
                                <div class="gamay">2-Serosanguineous</div>
                                <div class="gamay">3-Serous</div>
                              </div>
                              <div class="gamay">
                                <div class="gamay">4-Purulent</div>
                                <div class="gamay">5-Other(specify)</div>
                              </div>
                            </div>
                          </div>
                          <div class="border b-left b-top b-btm">
                            <b class="gamay">AMOUNT:</b>
                            <div class="flex gap-2">
                              <div class="gamay">
                                <div class="gamay">1-None</div>
                                <div class="gamay">2-Scant</div>
                                <div class="gamay">3-Moderate</div>
                              </div>
                              <div class="gamay">
                                <div class="gamay">4-Copious</div>
                                <div class="gamay">5-Other(specify)</div>
                              </div>
                            </div>
                          </div>
                          <div>
                            <b class="gamay">ODOR:</b>
                            <div class="flex gap-2">
                              <div class="gamay">
                                <div class="gamay">1-Foul</div>
                                <div class="gamay">2-Sweet</div>
                                <div class="gamay">3-None</div>
                              </div>
                              <div class="gamay">
                                <div class="gamay">5-Other(specify)</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <table>
                    <tr class="b-top b-right b-left">
                      <td
                        class="gamay b-left b-top b-right text-center width-30"
                      >
                        <b class="gamay">Type</b>
                      </td>
                      <td class="gamay b-top b-right text-center width-40">
                        <b class="gamay">Location</b>
                      </td>
                      <td class="gamay b-top b-right text-center width-">
                        <b class="gamay">Size</b>
                      </td>
                      <td class="gamay b-top b-right text-center width-60">
                        <b class="gamay">Wound Bed</b>
                      </td>
                      <td class="gamay b-top b-right text-center width-45">
                        <b class="gamay">Drainage</b>
                      </td>
                      <td class="gamay b-top b-right text-center width-40">
                        <b class="gamay">Amount</b>
                      </td>
                      <td class="gamay b-top b-right text-center width-30">
                        <b class="gamay">Odor</b>
                      </td>
                      <td class="gamay b-top b-right text-center width-30">
                        <b class="gamay">Stage</b>
                      </td>
                      <td class="gamay b-top b-right text-center width-100">
                        <b class="gamay">Surrounding Skin</b>
                      </td>
                    </tr>
                    <tr class="b-top b-right b-left">
                      <td
                        class="gamay b-left b-top b-right text-center width-30"
                      >
                        <input type="text" class="w-100" />
                      </td>
                      <td class="gamay b-top b-right text-center width-40">
                        <input type="text" class="w-100" />
                      </td>
                      <td
                        class="gamay b-top b-right text-center v-align-middle width-"
                      >
                        <div class="flex">
                          <div class="pad-3">
                            <div class="flex gamay">
                              <div class="gamay">L</div>
                              <div class="border b-b width-15">
                                <input type="text" />
                              </div>
                              <div class="gamay">W</div>
                              <div class="border b-b width-15">
                                <input type="text" />
                              </div>
                              <div class="gamay">D</div>
                              <div class="border b-b width-15">
                                <input type="text" />
                              </div>
                              <div class="gamay">cm</div>
                            </div>
                          </div>
                          <div class="w-40 pad-3">
                            <div class="flex-between">
                              <div class="flex-center-1 gamay">
                                <input type="checkbox" /> U
                              </div>
                              <div class="flex-center-1 gamay">
                                <input type="checkbox" /> T
                              </div>
                            </div>
                            <div class="flex">
                              <div class="border b-b flex-grow-1"></div>
                              <div class="gamay">cm</div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="gamay b-top b-right text-center width-60">
                        <div class="flex pad-3">
                          <div class="gamay">Color:</div>
                          <div class="border b-b flex-grow-1 w-10">
                            <input type="text" class="w-100" />
                          </div>
                        </div>
                        <div class="flex pad-3">
                          <div class="gamay">Tissue:</div>
                          <div class="border b-b flex-grow-1 w-10">
                            <input type="text" class="w-100" />
                          </div>
                        </div>
                      </td>
                      <td class="gamay b-top b-right text-center width-45">
                        <input type="text" class="w-100" />
                      </td>
                      <td class="gamay b-top b-right text-center width-40">
                        <input type="text" class="w-100" />
                      </td>
                      <td class="gamay b-top b-right text-center width-40">
                        <input type="text" class="w-100" />
                      </td>
                      <td class="gamay b-top b-right text-center width-40">
                        <input type="text" class="w-100" />
                      </td>
                      <td class="gamay b-top b-right text-center width-100">
                        <input type="text" class="w-100" />
                      </td>
                    </tr>
                    <tr class="b-top b-right b-left">
                      <td
                        class="gamay b-left b-top b-right text-center width-30"
                      >
                        <input type="text" class="w-100" />
                      </td>
                      <td class="gamay b-top b-right text-center width-40">
                        <input type="text" class="w-100" />
                      </td>
                      <td
                        class="gamay b-top b-right text-center v-align-middle width-"
                      >
                        <div class="flex">
                          <div class="pad-3">
                            <div class="flex gamay">
                              <div class="gamay">L</div>
                              <div class="border b-b width-15">
                                <input type="text" />
                              </div>
                              <div class="gamay">W</div>
                              <div class="border b-b width-15">
                                <input type="text" />
                              </div>
                              <div class="gamay">D</div>
                              <div class="border b-b width-15">
                                <input type="text" />
                              </div>
                              <div class="gamay">cm</div>
                            </div>
                          </div>
                          <div class="w-40 pad-3">
                            <div class="flex-between">
                              <div class="flex-center-1 gamay">
                                <input type="checkbox" /> U
                              </div>
                              <div class="flex-center-1 gamay">
                                <input type="checkbox" /> T
                              </div>
                            </div>
                            <div class="flex">
                              <div class="border b-b flex-grow-1"></div>
                              <div class="gamay">cm</div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="gamay b-top b-right text-center width-60">
                        <div class="flex pad-3">
                          <div class="gamay">Color:</div>
                          <div class="border b-b flex-grow-1 w-10">
                            <input type="text" class="w-100" />
                          </div>
                        </div>
                        <div class="flex pad-3">
                          <div class="gamay">Tissue:</div>
                          <div class="border b-b flex-grow-1 w-10">
                            <input type="text" class="w-100" />
                          </div>
                        </div>
                      </td>
                      <td class="gamay b-top b-right text-center width-45">
                        <input type="text" class="w-100" />
                      </td>
                      <td class="gamay b-top b-right text-center width-40">
                        <input type="text" class="w-100" />
                      </td>
                      <td class="gamay b-top b-right text-center width-30">
                        <input type="text" class="w-100" />
                      </td>
                      <td class="gamay b-top b-right text-center width-30">
                        <input type="text" class="w-100" />
                      </td>
                      <td class="gamay b-top b-right text-center width-100">
                        <input type="text" class="w-100" />
                      </td>
                    </tr>
                    <tr class="b-top b-right b-left">
                      <td
                        class="gamay b-left b-top b-right text-center width-30"
                      >
                        <input type="text" class="w-100" />
                      </td>
                      <td class="gamay b-top b-right text-center width-40">
                        <input type="text" class="w-100" />
                      </td>
                      <td
                        class="gamay b-top b-right text-center v-align-middle width-"
                      >
                        <div class="flex">
                          <div class="pad-3">
                            <div class="flex gamay">
                              <div class="gamay">L</div>
                              <div class="border b-b width-15">
                                <input type="text" />
                              </div>
                              <div class="gamay">W</div>
                              <div class="border b-b width-15">
                                <input type="text" />
                              </div>
                              <div class="gamay">D</div>
                              <div class="border b-b width-15">
                                <input type="text" />
                              </div>
                              <div class="gamay">cm</div>
                            </div>
                          </div>
                          <div class="w-40 pad-3">
                            <div class="flex-between">
                              <div class="flex-center-1 gamay">
                                <input type="checkbox" /> U
                              </div>
                              <div class="flex-center-1 gamay">
                                <input type="checkbox" /> T
                              </div>
                            </div>
                            <div class="flex">
                              <div class="border b-b flex-grow-1"></div>
                              <div class="gamay">cm</div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td
                        class="gamay b-top b-right text-center width-60 pad-3"
                      >
                        <div class="flex">
                          <div class="gamay">Color:</div>
                          <div class="border b-b flex-grow-1 w-10">
                            <input type="text" class="w-100" />
                          </div>
                        </div>
                        <div class="flex">
                          <div class="gamay">Tissue:</div>
                          <div class="border b-b flex-grow-1 w-10">
                            <input type="text" class="w-100" />
                          </div>
                        </div>
                      </td>
                      <td class="gamay b-top b-right text-center width-45">
                        <input type="text" class="w-100" />
                      </td>
                      <td class="gamay b-top b-right text-center width-40">
                        <input type="text" class="w-100" />
                      </td>
                      <td class="gamay b-top b-right text-center width-30">
                        <input type="text" class="w-100" />
                      </td>
                      <td class="gamay b-top b-right text-center width-30">
                        <input type="text" class="w-100" />
                      </td>
                      <td class="gamay b-top b-right text-center width-100">
                        <input type="text" class="w-100" />
                      </td>
                    </tr>
                    <tr class="b-top b-right b-left">
                      <td
                        class="gamay b-left b-top b-right text-center width-30"
                      >
                        <input type="text" class="w-100" />
                      </td>
                      <td class="gamay b-top b-right text-center width-40">
                        <input type="text" class="w-100" />
                      </td>
                      <td
                        class="gamay b-top b-right text-center v-align-middle width-"
                      >
                        <div class="flex">
                          <div class="pad-3">
                            <div class="flex gamay">
                              <div class="gamay">L</div>
                              <div class="border b-b width-15">
                                <input type="text" />
                              </div>
                              <div class="gamay">W</div>
                              <div class="border b-b width-15">
                                <input type="text" />
                              </div>
                              <div class="gamay">D</div>
                              <div class="border b-b width-15">
                                <input type="text" />
                              </div>
                              <div class="gamay">cm</div>
                            </div>
                          </div>
                          <div class="w-40 pad-3">
                            <div class="flex-between">
                              <div class="flex-center-1 gamay">
                                <input type="checkbox" /> U
                              </div>
                              <div class="flex-center-1 gamay">
                                <input type="checkbox" /> T
                              </div>
                            </div>
                            <div class="flex">
                              <div class="border b-b flex-grow-1"></div>
                              <div class="gamay">cm</div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td
                        class="gamay b-top b-right text-center width-60 pad-3"
                      >
                        <div class="flex">
                          <div class="gamay">Color:</div>
                          <div class="border b-b flex-grow-1 w-10">
                            <input type="text" class="w-100" />
                          </div>
                        </div>
                        <div class="flex">
                          <div class="gamay">Tissue:</div>
                          <div class="border b-b flex-grow-1 w-10">
                            <input type="text" class="w-100" />
                          </div>
                        </div>
                      </td>
                      <td class="gamay b-top b-right text-center width-45">
                        <input type="text" class="w-100" />
                      </td>
                      <td class="gamay b-top b-right text-center width-40">
                        <input type="text" class="w-100" />
                      </td>
                      <td class="gamay b-top b-right text-center width-30">
                        <input type="text" class="w-100" />
                      </td>
                      <td class="gamay b-top b-right text-center width-30">
                        <input type="text" class="w-100" />
                      </td>
                      <td class="gamay b-top b-right text-center width-100">
                        <input type="text" class="w-100" />
                      </td>
                    </tr>
                  </table>
                </div>
                <div class="w-10 gamay">
                  <div class="border b-b gamay">
                    <b class="gamay">STAGE</b>
                    <div class="flex-center-align gap-10 gamay">
                      <div class="gamay">I</div>
                      <div class="gamay">II</div>
                      <div class="gamay">III</div>
                      <div class="gamay">IV</div>
                    </div>
                  </div>
                  <div class="gamay pad-3 flex-column gap-6">
                    <b class="gamay">SURROUNDING SKIN:</b>
                    <b class="gamay"
                      ><i class="gamay">(list all that apply)</i></b
                    >
                    <div class="gamay">1-Pink</div>
                    <div class="gamay">2-White</div>
                    <div class="gamay">3-Red</div>
                    <div class="gamay">4-Pale</div>
                    <div class="gamay">5-Warm</div>
                    <div class="gamay">6-Cool</div>
                    <div class="gamay">7-Blanched</div>
                    <div class="gamay">8-Shiny</div>
                    <div class="gamay">9-Edermatous</div>
                    <div class="gamay">10-Other (specify)</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-20 bg-purple pad-3">
              <img
                class="img"
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPoAAAD9CAIAAAAai/3SAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAP+lSURBVHhe5P2He2NHluYJ51+23/N8M/PN9u5Mz04/27Pz9fS0qTZlu5xUVVKVTMp7r5SUPpPee28Agt57AwIkQYAEQIKE9465v7gngARBppFKVa2ueQXdjBvmxIkTb5w4AXN55bUX33rx11ef+/nvfvXT517+zatXn3vt5edefeHXL/7u1y+Uvn773IvP/fp3v372t7959vnnf/Pii7+7+urLr7/12ltvv/7O26+//c4b7779xjtvvPLmKy++/uqLb7z20pu8SLzywusv/+7qKy+88sqLr1594ZVXX3rt9auvv/HKG2++/vZbr7/Di+ZvvPbWm6+98+E7n3z49sfy+uCtj95/88N33/zgndfff/u1995944P33vyQ9Gsvvf7Sb1/m9eLzL/G6+sLVt197+6N3Pvz0/U8+++DTzz/87NpH1z57/9P33vrog7c//vi9zz5695P3jbQ0f/s1JY3XW6++995bH370/seffvjZZx99zuuTDz799INPK29XVNyqqLxdWXWnitf9m/dvXLvxxadfXvvkC16ff3zt848///RDKl/71Hh99uEXRuJzEqWvLz65fu9GZfXd+srbNRW3arhW3am7df3Ozeu379y8e+9Oxf27lffvVd27W1Fxp7LqXnX1/Zraytr66oaaitqK2xX3b1VU3K6spOhuVe39mrqKpoaq5oaqlsZq9SJdV9nIq76qqbGmtb66iXRjTXNLQ2tbU3tXW/dAz+Bwv8k0YG5v7mhpaGltbGtvam9vbqe0uaGlsb65qaGlubG1uamtiWtDqyptam+pb21tUC/SXJvrmptqEateTbXNbY3tXa3dPe29fZ39A92DQ73DfR0DPa29vLpbejubutsbOnl1tvR2NPd0kdPS29bY1d7U3dnS3dHcyauzpYsrQno7lIThPpOp38zLPDBiQtt+k3nAbBm0jAyOkKB0qMc0aLyGesxDvWZuh3pN5A/0DPV1DahXZ/9g7/CIaXxkeMw8NGoatAwNjAz3j5j7R0cGxi0DE5ZB4zUwbuod7W8fHuoym3osV2ru1tz/7N5zP/rNP/zl99594Z0Pr37wwdX3337pnTdfeKv09dJzL0P6F37z4isvvPruG+9d+/jal59/+cUXX1y/fv3atWu3bt26e/cut58Y+PTTT7l+9NFHH3zwwZtvvvmugbfeeotbCj59/6Nr737I6/N3PvjivY8+ZM28/NrH73/w0Xvvc/30o48///iTz7h+9vn777//zjvv0OrDDz+k+auvvvrGG2+QCRD43nvvffjue++/8gZyvvzgYwRe/+jT91998+WXX37llVfefvttur569ar0Tpq2r7/+OkIACQSW4u233v7kzXc/el1dr72nNPz4rXffeuON1157TZoAWgkQhWKiHn29eB4vvfgS6/CT9z994+qbb76qPMJ7b77/7utvvf/m2x+/+/6n73/I9b033nrt6iuoR9d0gXoM5+233nrj6qtvvfIape++/iYJXi//9urrL7/x9mvv8HrzlbdY86+89MpLL71EK5qgDArIENAQOZgdMHwq/OpXv3r++efJpz64+uKLV1948bWXr77xyqtvv44GuJ5XP3jnXdIv/+4F8l958SVu33/7nTdffe2l3/7u+V/9+ne/ee4qA3r+xZeef5nX1d+9gjKvIuM3v7v6q+dff/7Ft1985d2rr7378mvvvqKUpAKjRsnnn/0tbHnxuZee/dmvfvPL50g/98zzXH/1819zqxzor37Hi2q/ffb5l5777dXfvvDqiy+/9tLVV1946dUXX3r96ivoxgslUe9NbI9bfOPdF3539de/+u1zv3nhV88+//Mf/fLn//yLX/7gmWd++Owvvv/Ln/7jz37yvX/hSiY5z/7oV1L05vPv/ORvfvbCT19+/6WPrmyv2lbHV2q+qv7sjU9HOsxT/ZNzptm5kfnZkbnS19z4/Nzk/PzUwurCmn1z53Df7Ts6CQaDgUDg+PjY7/eHw2HSJwZOT0+5+nw+ikhwPTLgNXDk9voOvb4D7/GB23fg8ew6XfY9n/fo2EORh+ux90jdHh9T2ePxkJC0ywA5h4eHJLh6Dz2HO/vHTvfpoffkwBM4Ojk+8Ozu7u7t7VHqdrudTqfRp5fbg4MDkQD2L8Dp2Pc4XJ49p3t3/9DucO843A6nc3/f4XAgUGSSBpJQvRsq7ezsSIUi9nb3DvYP9ned2xu2/R2nw77vsDl2rfY9m9216zjY23cibNu+s22jLdJoIgnVmX1n12qzb23bt6y2zS3bxubGyoZt075r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M39447X/evX137/29p/eev2pN157+sTFELDVy3959fVnz7z+zJlX/vLaG8+8efb5d9559u2Lr1648Mr5N59+882nz7z+0huvvfQ61ysvvvry86+88vyrZ54/8+qTr7zwuxfeeubNcy+++/Yzb731zBvvv/zOm0+/+uqfXrz42rl3nnv90mvn3n7xLIZ68/m3zzz/1otP/vWVp15768U3z736ztlX3n7tmZdfeeolrpeeevHFZ15Sal94lSbeePnMG389c+m1i3TjzFNvcL397Ftnn3vn3afPnn/uvQ9f/uCDly6df+79Sy9e+OD1C+ffOPfea2flIn3prQvvv/7umedf43rrxTfefOH1t15449xLqnuM4t0Xzp5/+X0G9eGZj1//05n3Xrxw6dXL7z7/3sWXP3jvlfPvvnnuwrmLF969ePG9Sx+8f/nCuUuX3vvgkw8+5X7+7AVyLp374P0z58++8u47L58999p7XCTeevHsW8+dffv5d9954dzZF9/jQtWFNy9q1wXul97+4PI7H77/1NkX/unpy8+f//rM50/c/ub29S9v3Pr6VsF3d8pvl9+7do+cm1/fvvHVrRtf3rz+xQ2ua9w/u3aD6/NrePcbX9648dWNG19fv/H1Va6b31y79R0u/8adK7fufH/n9rcFN7++xXXrm9ukr378w5WP2C6+Z9+4iapP2TS++/bSN99d/paEXN9e/vbbj777AeVf3+Ii8f0nV7758NuvPvj6q8vffPvx91c+/UHlfPTdt8h/coWXlH52/otPz3/62YXPPr/4+RcXPydN4sN3P/z68jdU/PLSV1ykv/nwu88ukH/50tuXLr518dJbF7lffvuDj9+5/PHZDz/Rrk/f/eiz9z759MLXH73/+eV3P/vw3Ocfvff5h+c+++T8559d+OLTC198dpHry88vffXJ+c8+PvfRh2cvf/Tuh5+8/8mn73/y2fuffvP+19+c/+br97/68tyX3L8+//VX7335zcVvvr34zZfvfcFFgiqX3r54+Z1LXB+8w0xc/ODtSx+8fZnr4/cYxRefc53/4vP3PuPCPt9+8M2X57/44v0vPrnw6cfnP/novY8/fO+jy+c+/ODdy+ffuPDuS2fZjT9+56NP3/3kgzOXLr5+4aO3P7h05sKF199nUB+cucD94puXzr32/nuvn3/vtfNnX373/dfPX3zzwgfvfHD57GUS77/x/vuvnXv/jffOQ9Mz57ku0KV3L39w9vInZz/+6O0PL7/5wQdnLqJc6X/tImvgg9cvcV16/dLHb318+a0Pzp85f/7M+5n7+zDsvTfPv/v6ubOvvfv2K2ffevntd19998LrF957+dy5v7576Y2LKOROt888c+bsC2fP/fW9t59/m8SbL7z1xotnkH/n1bPvv6m6oe7M0bkPL7/74aV3PuCik/D7zRff4nr7r+9wvfXS22++9NaZF99666/vvPPK2bOvvnv21XPvvs5wLp5/+5K6M9FnL18+99FHZy6//9K5j89c/vStj/5/7m+Hf6LQ700AAAAASUVORK5CYII="
                alt=""
              />
            </div>
          </div>
        </div>
        <div>
          <table>
            <tr>
              <td class="pad-3 bg-violet-1 w-60">
                <div><b>Patient Name</b> (First, MI, Last)</div>
                <div>
                  <input type="text" class="w-100" />
                </div>
              </td>
              <td class="pad-3 bg-violet-1">
                <div>
                  <b>ID No.</b>
                </div>
                <div>
                  <input type="text" class="w-100" />
                </div>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="page">
        <div class="bg-violet br-10 pad-5 c-white">
          INTEGUMENTARY STATUS <i class="c-white">(continued)</i>
        </div>
        <div class="flex gap-5">
          <div class="w-50">
            <div class="pad-3">
              <div class="flex">
                <div class="flex-center-1 gap-5 w-90">
                  <div
                    class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                  >
                    21
                  </div>
                  <div class="f-bold c-green">Spiritual Need Interventions</div>
                  <div class="c-green">
                    <b class="c-green">A</b>ssess/<b class="c-green">P</b
                    >erform/<b class="c-green">I</b>nstruct Pt/Cg:
                  </div>
                </div>
                <div class="flex-center-align gap-8">
                  <div class="f-bold c-green w-20">A</div>
                  <div class="f-bold c-green w-20">P</div>
                  <div class="f-bold c-green w-20">I</div>
                </div>
              </div>
              <div class="flex">
                <div class="w-90">
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Skin breakdown and prevention
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Wound care as follows:
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                  <div class="border b-b flex-grow-1">
                    <input type="text" class="w-100" />
                  </div>
                  <div class="border b-b flex-grow-1">
                    <input type="text" class="w-100" />
                  </div>
                  <div class="border b-b flex-grow-1">
                    <input type="text" class="w-100" />
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Stoma care as follows:
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                  <div class="border b-b flex-grow-1">
                    <input type="text" class="w-100" />
                  </div>
                </div>
                <div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1 visibility-hidden">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                  <br />
                  <br />
                  <br />
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-50">
            <div class="pad-3">
              <div class="flex">
                <div class="flex-center-1 gap-5 w-90 visibility-hidden">
                  <div
                    class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                  >
                    21
                  </div>
                  <div class="f-bold c-green">Spiritual Need Interventions</div>
                  <div class="c-green">
                    <b class="c-green">A</b>ssess/<b class="c-green">P</b
                    >erform/<b class="c-green">I</b>nstruct Pt/Cg:
                  </div>
                </div>
                <div class="flex-center-align gap-8">
                  <div class="f-bold c-green w-20">A</div>
                  <div class="f-bold c-green w-20">P</div>
                  <div class="f-bold c-green w-20">I</div>
                </div>
              </div>
              <div class="flex">
                <div class="w-90">
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Incisional care as follows:
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                  <div class="border b-b flex-grow-1">
                    <input type="text" class="w-100" />
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> S/S of complications infection to
                    include:
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Other (specify):
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Provide appropriate all matiress
                  </div>
                </div>
                <div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                  <div class="flex gap-2 visibility-hidden">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1 visibility-hidden">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="w-100">
                  <div class="bg-purple border b-left b-right b-top">
                    <b>Comments:</b>
                  </div>
                  <div class="bg-purple border b-left b-right b-top">
                    <input type="text" class="w-100" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-violet pad-5 br-10 c-white">RESPIRATORY STATUS</div>
        <div class="border b-b">
          <div class="flex gap-5">
            <div class="w-50 pad-3">
              <div class="flex gap-10 border b-b pad-3">
                <div
                  class="border br-3 flex-center-align f-bold c-violet bg-violet-1 width-30"
                >
                  J2030
                </div>
                <b>A. Shortness of Breath Screen</b>
                <div class="flex-center-1"><input type="checkbox" /> 0. No</div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 1. Yes
                </div>
              </div>
              <div class="border b-b flex pad-3">
                <b>B. Date of first screening for shortness of breath</b>
                <div class="flex">
                  <div><input type="text" class="width-20 text-center" />/</div>
                  <div><input type="text" class="width-20 text-center" />/</div>
                  <div>
                    <input type="text" class="width-30 text-center" />
                  </div>
                </div>
                <div>
                  <i class="wala">(Month/Day/Year)</i>
                </div>
              </div>
              <div class="flex-center-1 pad-3 gap-5">
                <b class="gamay"
                  >C. Did the screening indicate that patient had Shortness of
                  Breath?</b
                >
                <div class="flex-center-1"><input type="checkbox" /> 0. No</div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 1. Yes
                </div>
              </div>
            </div>
            <div class="w-50">
              <div class="bg-purple">
                <div class="flex-top gap-10 border b-b pad-3">
                  <div><b>Severity of Symptoms</b></div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> <b>No Symptoms</b>
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> <b>Moderate</b>
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> <b>Mild</b>
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> <b>Severe (distressed)</b>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bg-purple flex pad-3 border b-b">
                Comments
                <input type="text" class="w-100" />
              </div>
            </div>
          </div>
          <div class="flex pad-3">
            <div>When does the patient have shortness of breath?</div>
            <div class="flex-center-1">
              <input type="checkbox" /> With minimal exertion
            </div>
            <div class="flex-center-1"><input type="checkbox" /> At rest</div>
            <div class="flex-center-1">
              <input type="checkbox" /> Other (specify)
            </div>
            <div class="border b-b flex-grow-1">
              <input type="text" class="w-100" />
            </div>
          </div>
        </div>
        <div class="border b-b">
          <div class="flex gap-5">
            <div class="w-75 pad-3">
              <div class="flex gap-5">
                <div class="w-40">
                  <div class="flex gap-10">
                    <div><b>RESPIRATORY</b></div>
                    <div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> WNL
                      </div>
                    </div>
                  </div>
                  <div class="flex gap-3">
                    <div>
                      <div>Breathing</div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Shallow
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Apnea
                      </div>
                    </div>
                    <div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Unlabored
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Irregular
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> O2 at
                        <div class="border b-b width-30">
                          <input type="text" class="w-100" />
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Labored
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Chayne-Stokes
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> O2 Sat
                        <div class="border b-b width-30">
                          <input type="text" class="w-100" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="w-30">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Cough
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Smoke
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Sputum
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Orthopnea
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                  <div class="flex-top">
                    <input type="checkbox" /> Breath Sounds
                    <div class="border b-b flexgrowr-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
                <div class="w-30">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Hemoptysis
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Cyanosis
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                  <div class="flex-top">
                    <input type="checkbox" /> Tracheosomy (size:)
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                  <div class="flex">
                    <input type="checkbox" /> Other (specify):
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-25">
              <div>
                <div class="w-100">
                  <div class="bg-purple border b-left b-right b-top">
                    <b>Comments:</b>
                  </div>
                  <div class="bg-purple border b-left b-right b-top">
                    <input type="text" class="w-100" />
                  </div>
                  <div class="bg-purple border b-left b-right b-top">
                    <input type="text" class="w-100" />
                  </div>
                  <div class="bg-purple border b-left b-right b-top">
                    <input type="text" class="w-100" />
                  </div>
                  <div class="bg-purple border b-left b-right b-top">
                    <input type="text" class="w-100" />
                  </div>
                  <div class="bg-purple border b-left b-right b-top">
                    <input type="text" class="w-100" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="border b-b pad-3">
          <div class="flex gap-10">
            <div>
              <div
                class="border br-3 flex-center-align f-bold c-violet bg-violet-1 width-30"
              >
                J2030
              </div>
            </div>
            <div>
              <b>A. Was treatment for Shortness of Breath initiated?</b>
            </div>
            <div>
              <i>Select the most accurate response</i>
            </div>
            <div class="flex-center-1"><input type="checkbox" /> 0. No</div>
            <div class="flex-center-1">
              <input type="checkbox" /> 1. No, patient declined treatment
            </div>
            <div class="flex-center-1"><input type="checkbox" /> 2. Yes</div>
          </div>
        </div>
        <div class="border b-b pad-3">
          <div class="flex">
            <div>
              <b>B. Date treatment for Shortness of Breath initiated</b>
            </div>
            <div class="flex">
              <div class="flex">
                <div><input type="text" class="width-30 text-center" />/</div>
                <div><input type="text" class="width-30 text-center" />/</div>
                <div>
                  <input type="text" class="width-30 text-center" />
                </div>
              </div>
              <div>
                <i class="wala">(Month/Day/Year)</i>
              </div>
            </div>
          </div>
        </div>
        <div class="border b-b pad-3">
          <b>C. Type(s) of treatment for Shortness of Breath Iniiated</b>
          <i>(Per physician order, options 1,2, and 3)</i>
          <b><i>Check all that apply.</i></b>
          <div class="flex gap-5">
            <div class="flex-center-1">
              <input type="checkbox" /> 1. Opioids
            </div>
            <div class="flex-center-1">
              <input type="checkbox" /> 2. Other medication
            </div>
            <div class="border b-b flex-grow-1">
              <input type="text" class="w-100" />
            </div>
            <div class="flex-center-1"><input type="checkbox" /> 3. Oxygen</div>
            <div class="flex-center-1">
              <input type="checkbox" /> 4. Non-medication (specify):
            </div>
            <div class="border b-b flex-grow-1">
              <input type="text" class="w-100" />
            </div>
          </div>
        </div>
        <div class="flex gap-5">
          <div class="w-50">
            <div class="pad-3">
              <div class="flex">
                <div class="flex-center-1 gap-5 w-90">
                  <div
                    class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                  >
                    21
                  </div>
                  <div class="f-bold c-green">Respiratory Interventions</div>
                  <div class="c-green">
                    <b class="c-green">A</b>ssess/<b class="c-green">P</b
                    >erform/<b class="c-green">I</b>nstruct Pt/Cg:
                  </div>
                </div>
                <div class="flex-center-align gap-8">
                  <div class="f-bold c-green w-20">A</div>
                  <div class="f-bold c-green w-20">P</div>
                  <div class="f-bold c-green w-20">I</div>
                </div>
              </div>
              <div class="flex">
                <div class="w-90">
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Respiratory status
                  </div>
                  <div class="flex-top c-green">
                    <input type="checkbox" />
                    <div class="flex">
                      <div class="c-green">
                        Proper and safe use of 02 administration
                      </div>
                      <div class="border b-b w-20">
                        <input type="text" class="w-100" />
                      </div>
                      <div class="c-green">liters/min</div>
                    </div>
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" class="visibility-hidden" /> via
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                    Hours of use
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Response in medications and
                    treatment
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Nebulizer inhalation treatment
                    with:
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
                <div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1 visibility-hidden">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1 visibility-hidden">
                      <input type="checkbox" />
                    </div>
                  </div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                  <br />
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1 visibility-hidden">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-50">
            <div class="pad-3">
              <div class="flex">
                <div class="flex-center-1 gap-5 w-90 visibility-hidden">
                  <div
                    class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                  >
                    21
                  </div>
                  <div class="f-bold c-green">Spiritual Need Interventions</div>
                  <div class="c-green">
                    <b class="c-green">A</b>ssess/<b class="c-green">P</b
                    >erform/<b class="c-green">I</b>nstruct Pt/Cg:
                  </div>
                </div>
                <div class="flex-center-align gap-8">
                  <div class="f-bold c-green w-20">A</div>
                  <div class="f-bold c-green w-20">P</div>
                  <div class="f-bold c-green w-20">I</div>
                </div>
              </div>
              <div class="flex">
                <div class="w-90">
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Sunctioning technique
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Trach care
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Pulse Oximetry PRN for respiratory
                    assessment
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Other (specify):
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
                <div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-violet pad-5 br-10 c-white">CARDIOVASCULAR STATUS</div>
        <div class="flex gap-5">
          <div class="w-60">
            <div class="flex gap-30 pad-3">
              <div>
                <b>Cardiovascular:</b>
                <div class="flex-center-1">
                  <input type="checkbox" /> Palpitations
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> Chest pain
                </div>
              </div>
              <div class="flex-grow-1">
                <div class="flex-center-1 gap-5">
                  <div class="w-20 flex-center-1">
                    <input type="checkbox" class="w-30" /> WNL
                  </div>
                  <div
                    class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                  >
                    12
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Pacemaker:
                    <div class="flex">
                      <div>
                        <input type="text" class="width-30 text-center" />/
                      </div>
                      <div>
                        <input type="text" class="width-30 text-center" />/
                      </div>
                      <div>
                        <input type="text" class="width-30 text-center" />
                      </div>
                    </div>
                    <div>
                      <i class="wala c-green">(Date inserted)</i>
                    </div>
                  </div>
                </div>
                <div class="flex">
                  <div class="flex-center-1 w-50">
                    <input type="checkbox" /> Fatigues easily
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Poor capillary refill
                  </div>
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> Other (specify)
                  <div class="border b-b flex-grow-1">
                    <input type="text" class="w-100" />
                  </div>
                </div>
              </div>
            </div>
            <div class="flex border b-b gap-20 pad-3">
              <div class="w-50">
                <div class="flex gap-10">
                  <div><b>Heart rate:</b></div>
                  <div class="flex-center-1"><input type="checkbox" /> WNL</div>
                </div>
                <div class="flex gap-10">
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Regular
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Tachycardia
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Irregular
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Bradycardia
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-50">
                <div class="flex gap-5">
                  <div class="flex-center-1">
                    <input type="checkbox" /> <b>Edema:</b>
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Pedal R/L
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Dependent
                  </div>
                  <div class="border b-b flex-grow-1 w-10">
                    <input type="text" class="w-100" />
                  </div>
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> Pitting +1/+2/+3/+4 (site)
                  <div class="border b-b flex-grow-1 w-10">
                    <input type="text" class="w-100" />
                  </div>
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> Non-pitting (site)
                  <div class="border b-b flex-grow-1 w-10">
                    <input type="text" class="w-100" />
                  </div>
                </div>
              </div>
            </div>
            <div class="flex gap-2 bg-purple pad-1 border b-b">
              <div><b>Severity of Symptoms</b></div>
              <div>
                <div class="flex-center-1">
                  <input type="checkbox" /> <b>No Symptoms</b>
                </div>
              </div>
              <div>
                <div class="flex-center-1">
                  <input type="checkbox" /> <b>Mild</b>
                </div>
              </div>
              <div>
                <div class="flex-center-1">
                  <input type="checkbox" /> <b>Moderate</b>
                </div>
              </div>
              <div>
                <div class="flex-center-1">
                  <input type="checkbox" /> <b>Severe (distressed)</b>
                </div>
              </div>
            </div>
          </div>
          <div class="w-40">
            <div class="pad-3 border b-b">
              <div class="flex">
                <div class="flex-center-1 gap-5 w-90">
                  <div
                    class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                  >
                    21
                  </div>
                  <div class="f-bold c-green gamay">
                    Cardiovascular Interventions
                  </div>
                  <div class="c-green gamay">
                    <b class="c-green gamay">A</b>ssess/<b class="c-green gamay"
                      >P</b
                    >erform/<b class="c-green gamay">I</b>nstruct Pt/Cg:
                  </div>
                </div>
                <div class="flex-center-align gap-8">
                  <div class="f-bold c-green w-20">A</div>
                  <div class="f-bold c-green w-20">P</div>
                  <div class="f-bold c-green w-20">I</div>
                </div>
              </div>
              <div class="flex">
                <div class="w-90">
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Cardiovascular status
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Edema fluid retention and
                    dehydration
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> S/S of infection
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Other (specify):
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
                <div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="bg-purple flex pad-3 border b-b">
              Comments
              <input type="text" class="w-100" />
            </div>
            <div class="bg-purple flex pad-3">
              <input type="text" class="w-100" />
            </div>
          </div>
        </div>
        <div class="bg-violet br-10 pad-5 c-white">
          RENAL/GENITOURINARY STATUS
        </div>
        <div class="border b-b">
          <div class="flex gap-5">
            <div class="w-50 flex gap-10">
              <b>URINARY</b>
              <div class="flex-center-1"><input type="checkbox" /> WNL</div>
            </div>
            <div class="w-50">
              <div class="flex gap-2 bg-purple pad-1 border b-b">
                <b>Severity of Symptoms</b>
                <div class="flex-center-1">
                  <input type="checkbox" /> <b>No Symptoms</b>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> <b>Mild</b>
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> <b>Moderate</b>
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> <b>Severe (distressed)</b>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="flex gap-5">
            <div class="w-60">
              <div class="flex">
                <div>Urinary color</div>
                <div class="border b-b flex-grow-1">
                  <input type="text" class="w-100" />
                </div>
                <div>Amt.</div>
                <div class="border b-b flex-grow-1">
                  <input type="text" class="w-100" />
                </div>
                <div>Odor</div>
                <div class="border b-b flex-grow-1">
                  <input type="text" class="w-100" />
                </div>
              </div>
              <div class="flex gap-3">
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Hematuria
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Retention
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Oliguria
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Cramping
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Polyuria
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Dysuria
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Burning
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Sediment
                  </div>
                </div>
                <div>
                  <div class="flex-center-1 gamay">
                    <input type="checkbox" /> Foley Catheter
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Incontinence
                  </div>
                </div>
                <div class="w-35">
                  <div class="flex-center-1 gamay">
                    <input type="checkbox" /> Suprapubic Catheter
                  </div>
                  <div class="flex-center-1"><input type="checkbox" /> UTI</div>
                </div>
                <div>
                  <div class="flex-top gamay">
                    <input type="checkbox" /> Condom Catheter
                  </div>
                </div>
              </div>
            </div>
            <div class="w-40">
              <div class="bg-purple flex border b-b">
                Comments
                <input type="text" class="w-100" />
              </div>
              <div class="bg-purple flex border b-b">
                <input type="text" class="w-100" />
              </div>
              <div class="bg-purple">
                <input type="text" class="w-100" />
              </div>
            </div>
          </div>
        </div>
        <div class="flex gap-5">
          <div class="w-50">
            <div class="pad-3">
              <div class="flex">
                <div class="flex-center-1 gap-5 w-90">
                  <div
                    class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                  >
                    21
                  </div>
                  <div class="f-bold c-green">
                    Renal/Genitourarinary Interventions
                  </div>
                  <div class="c-green">
                    <b class="c-green">A</b>ssess/<b class="c-green">P</b
                    >erform/<b class="c-green">I</b>nstruct Pt/Cg:
                  </div>
                </div>
                <div class="flex-center-align gap-8">
                  <div class="f-bold c-green w-20">A</div>
                  <div class="f-bold c-green w-20">P</div>
                  <div class="f-bold c-green w-20">I</div>
                </div>
              </div>
              <div class="flex">
                <div class="w-90">
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Urinary status
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Skin breakdown and prevention
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Condom catheter application and
                    use
                  </div>
                  <div class="flex-top c-green">
                    <input type="checkbox" />
                    <div class="flex">
                      <div class="c-green">Foley catheter</div>
                      <div class="border b-b w-20">
                        <input type="text" class="w-100" />
                      </div>
                      <div class="c-green">Fr.</div>
                      <div class="border b-b w-20">
                        <input type="text" class="w-100" />
                      </div>
                      <div class="c-green">mL balloon</div>
                    </div>
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Foley irrigation
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
                <div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1 visibility-hidden">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1 visibility-hidden">
                      <input type="checkbox" />
                    </div>
                  </div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1 visibility-hidden">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-50">
            <div class="pad-3">
              <div class="flex">
                <div class="flex-center-1 gap-5 w-90 visibility-hidden">
                  <div
                    class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                  >
                    21
                  </div>
                  <div class="f-bold c-green">Spiritual Need Interventions</div>
                  <div class="c-green">
                    <b class="c-green">A</b>ssess/<b class="c-green">P</b
                    >erform/<b class="c-green">I</b>nstruct Pt/Cg:
                  </div>
                </div>
                <div class="flex-center-align gap-8">
                  <div class="f-bold c-green w-20">A</div>
                  <div class="f-bold c-green w-20">P</div>
                  <div class="f-bold c-green w-20">I</div>
                </div>
              </div>
              <div class="flex">
                <div class="w-90">
                  <div class="flex">
                    <div class="c-green">Solution</div>
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                    <div class="c-green">mL</div>
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                    <div class="c-green">Frequency</div>
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Suprapubic catheter care: size
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Catheter Care - frequency
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" />
                    <div class="c-green">Catheter change</div>
                    <div class="border b-b flex-grow-1 w-20">
                      <input type="text" class="w-100" />
                    </div>
                    <div class="c-green">with</div>
                    <div class="border b-b flex-grow-1 w-20">
                      <input type="text" class="w-100" />
                    </div>
                    <div class="c-green">Fr</div>
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Other (specify):
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
                <div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-violet br-10 pad-5 c-white">ENDOCRINE STATUS</div>
        <div class="flex gap-5">
          <div class="w-50">
            <b>Diabetes:</b>
            <div class="flex gap-5">
              <div class="w-50">
                <div class="flex-center-1">
                  <input type="checkbox" /> Blood sugar/glucometer use
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> Oral hypoglycemic agent
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> Insulin dependent - How long?
                  <div class="border b-b flex-grow-1 w-10">
                    <input type="text" class="w-100" />
                  </div>
                </div>
                <div class="flex-center-1 gap-5">
                  <input type="checkbox" /> Able to draw insulin
                  <input type="checkbox" /> Yes <input type="checkbox" /> No
                </div>
              </div>
              <div class="w-50">
                <div class="flex-center-1 gap-5">
                  <input type="checkbox" /> Able to administer
                  <input type="checkbox" /> Yes <input type="checkbox" /> No
                </div>
                <div class="flex-center-1">
                  <div class="flex-center-1 gap-5">
                    <input type="checkbox" class="visibility-hidden" /> Most
                    recent FBS results
                  </div>
                  <div class="border b-b flex-grow-1 w-10">
                    <input type="text" class="w-100" />
                  </div>
                </div>
                <div class="flex-center-1 gap-5">
                  <input type="checkbox" /> Neuroathy/Radiculopathy
                </div>
                <div class="flex">
                  Additional information
                  <div class="border b-b flex-grow-1 w-10">
                    <input type="text" class="w-100" />
                  </div>
                </div>
                <div class="border b-b flex-grow-1">
                  <input type="text" class="w-100" />
                </div>
              </div>
            </div>
            <div class="flex gap-2 bg-purple pad-1 border b-b">
              <div><b>Severity of Symptoms</b></div>
              <div>
                <div class="flex-center-1">
                  <input type="checkbox" /> <b>No Symptoms</b>
                </div>
              </div>
              <div>
                <div class="flex-center-1">
                  <input type="checkbox" /> <b>Mild</b>
                </div>
              </div>
              <div>
                <div class="flex-center-1">
                  <input type="checkbox" /> <b>Moderate</b>
                </div>
              </div>
              <div>
                <div class="flex-center-1">
                  <input type="checkbox" /> <b>Severe (distressed)</b>
                </div>
              </div>
            </div>
            <div class="flex bg-purple">
              Comments
              <input type="text" class="w-100" />
            </div>
          </div>
          <div class="w-50">
            <div class="pad-3">
              <div class="flex">
                <div class="flex-center-1 gap-5 w-90">
                  <div
                    class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                  >
                    21
                  </div>
                  <div class="f-bold c-green">Endocrine Interventions</div>
                  <div class="c-green">
                    <b class="c-green">A</b>ssess/<b class="c-green">P</b
                    >erform/<b class="c-green">I</b>nstruct Pt/Cg:
                  </div>
                </div>
                <div class="flex-center-align gap-8">
                  <div class="f-bold c-green w-20">A</div>
                  <div class="f-bold c-green w-20">P</div>
                  <div class="f-bold c-green w-20">I</div>
                </div>
              </div>
              <div class="flex">
                <div class="w-90">
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Diabetic care
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> S/S of Hypo/Hypergiycemia
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Glucometer testing
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Medications: administration, use,
                    side effects
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Methods to promoe oral intake
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> S/S of Neuropathy/Radiculopathy
                  </div>
                </div>
                <div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page">
        <div class="bg-violet br-10 pad-5 c-white">GASTROINTESTINAL STATUS</div>
        <div class="flex gap-5">
          <div class="w-50">
            <div class="flex gap-10">
              <div>
                <div class="flex-center-1">
                  <input type="checkbox" /> Nausea/Vomiting
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> Abdominal pain
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> Ascites
                </div>
                <div class="flex-top">
                  <input type="checkbox" /> Abnormal stool characteristics
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> Diarrhea/Constipation
                </div>
              </div>
              <div>
                <div class="flex-center-1">
                  <input type="checkbox" /> Use/Abuse of laxatives
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> Stool incontinence
                </div>
                <div class="flex-top">
                  <input type="checkbox" /> Absent or minimal bowel sounds
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> Abdominal masses
                </div>
                <div class="flex-top">
                  <input type="checkbox" /> Abdominal distention or tenderness
                </div>
              </div>
            </div>
            <div class="bg-purple flex pad-2">
              Comments
              <input type="text" class="w-100" />
            </div>
          </div>

          <div class="w-50">
            <div class="flex-center-1">
              <input type="checkbox" /> Enternal feedings
            </div>
            <div class="flex">
              <div>
                <div class="flex">
                  <div>Type/Tube:</div>
                  <div class="border b-b flex-grow-1">
                    <input type="text" class="w-100" />
                  </div>
                </div>
                <div class="flex">
                  <div>Changed:</div>
                  <div class="border b-b flex-grow-1">
                    <input type="text" class="w-100" />
                  </div>
                </div>
                <div class="flex">
                  <div>Amt.:</div>
                  <div class="border b-b flex-grow-1">
                    <input type="text" class="w-100" />
                  </div>
                </div>
              </div>
              <div>
                <div>
                  <div class="flex">
                    <div>Size</div>
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                  <div class="flex">
                    <div>Formula:</div>
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                  <div class="flex">
                    <div>Freq.:</div>
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="flex-center-1">
                  <div class="flex-center-1 width-125">
                    <input type="checkbox" /> Flow control device
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Bolus
                  </div>
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> Ostomy Location:
                  <div class="border b-b flex-grow-1 w-10">
                    <input type="text" class="w-100" />
                  </div>
                </div>
                <div class="flex-top">
                  <input type="checkbox" /> Problems associated with ostomy
                </div>
              </div>
            </div>
            <div class="flex gap-2 bg-purple pad-1">
              <div><b>Severity of Symptoms</b></div>
              <div>
                <div class="flex-center-1">
                  <input type="checkbox" /> <b>No Symptoms</b>
                </div>
              </div>
              <div>
                <div class="flex-center-1">
                  <input type="checkbox" /> <b>Mild</b>
                </div>
              </div>
              <div>
                <div class="flex-center-1">
                  <input type="checkbox" /> <b>Moderate</b>
                </div>
              </div>
              <div>
                <div class="flex-center-1">
                  <input type="checkbox" /> <b>Severe (distressed)</b>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <table>
            <tr>
              <td class="pad-3 bg-violet-1 w-60">
                <div><b>Patient Name</b> (First, MI, Last)</div>
                <div>
                  <input type="text" class="w-100" />
                </div>
              </td>
              <td class="pad-3 bg-violet-1">
                <div>
                  <b>ID No.</b>
                </div>
                <div>
                  <input type="text" class="w-100" />
                </div>
              </td>
            </tr>
          </table>
        </div>
        <br />
        <br />
        <br />
        <div class="bg-violet pad-5 br-10 c-white">
          GASTROINTESTINAL STATUS <i class="c-white">(continued)</i>
        </div>
        <div class="flex gap-10">
          <div><b>Bowel:</b></div>
          <div class="flex-center-1"><input type="checkbox" /> WNL</div>
          <div class="flex">
            Last BM:
            <div class="flex">
              <div><input type="text" class="width-30 text-center" />/</div>
              <div><input type="text" class="width-30 text-center" />/</div>
              <div>
                <input type="text" class="width-30 text-center" />
              </div>
            </div>
          </div>
          <div class="flex">
            Usual Frequency:
            <div class="border b-b"><input type="text" class="w-100" /></div>
          </div>
        </div>
        <div class="flex gap-9 border b-b">
          <div>
            <div class="flex-center-1">
              <input type="checkbox" /> Bowel Sounds:
            </div>
            <div class="flex-center-1">
              <input type="checkbox" /> Abnormal stools:
            </div>
          </div>
          <div>
            <div class="flex-center-1">
              <input type="checkbox" /> Hypoactive
            </div>
            <div class="flex-center-1"><input type="checkbox" /> Gray</div>
          </div>
          <div>
            <div class="flex-center-1">
              <input type="checkbox" /> Hyperactive
            </div>
            <div class="flex-center-1"><input type="checkbox" /> Tarry</div>
          </div>
          <div>
            <div class="flex-center-1"><input type="checkbox" /> Diarrhea</div>
            <div class="flex-center-1">
              <input type="checkbox" /> Fresh blood
            </div>
          </div>
          <div>
            <div class="flex-center-1">
              <input type="checkbox" /> Consipation:
            </div>
            <div class="flex-center-1">
              <input type="checkbox" /> Hemorrhoids:
            </div>
          </div>
          <div>
            <div class="flex-center-1"><input type="checkbox" /> Chronic</div>
            <div class="flex-center-1"><input type="checkbox" /> Internal</div>
          </div>
          <div>
            <div class="flex-center-1"><input type="checkbox" /> Acute</div>
            <div class="flex-center-1"><input type="checkbox" /> External</div>
          </div>
          <div>
            <div class="flex-center-1">
              <input type="checkbox" /> Occasional
            </div>
          </div>
          <div>
            <div class="flex-center-1">
              <input type="checkbox" /> Lax/enema use: type
              <div class="border b-b width-50">
                <input type="text" class="w-100" />
              </div>
            </div>
          </div>
        </div>
        <div class="flex">
          <div class="w-50 border b-top b-left b-btm">
            <div class="flex gap-5 pad-3">
              <div class="w-85">
                <div class="flex-center-1 gap-5">
                  <div
                    class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                  >
                    21
                  </div>
                  <div>
                    <b class="c-green">GL Interventions: </b>
                  </div>
                  <div class="c-green">
                    <u><b class="c-green">A</b></u
                    >ssess/<u><b class="c-green">P</b></u
                    >erform/<u><b class="c-green">I</b></u
                    >nstruct Pt/Cg:
                  </div>
                </div>
                <div class="flex-center-1 c-green">
                  <input type="checkbox" /> Nausea/Vomiting
                </div>
                <div class="flex-center-1 c-green">
                  <input type="checkbox" /> Medication administration, side
                  effects and response
                </div>
                <div class="flex-center-1 c-green">
                  <input type="checkbox" /> Nutritional changes and needs
                  related to terminal illness
                </div>
                <div class="flex-center-1 c-green">
                  <input type="checkbox" /> Risk of aspiration
                </div>
                <div class="flex-center-1 c-green">
                  <input type="checkbox" /> Parenteral Nutrition and the
                  care/use of equipment to include:
                </div>
                <div class="border b-b flex-grow-1">
                  <input type="text" class="w-100" />
                </div>
                <div class="border b-b flex-grow-1">
                  <input type="text" class="w-100" />
                </div>
                <div class="flex-center-1 c-green">
                  <input type="checkbox" /> Enteral Nutrition and the care/use
                  of equipment to include:
                </div>
                <div class="border b-b flex-grow-1">
                  <input type="text" class="w-100" />
                </div>
                <div class="border b-b flex-grow-1">
                  <input type="text" class="w-100" />
                </div>
                <div class="flex">
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Gastrostomy Tube (specify)
                  </div>
                  <div class="border b-b flex-grow-1">
                    <input type="text" class="w-100" />
                  </div>
                </div>
                <div class="flex">
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> NG Tube (specify)
                  </div>
                  <div class="border b-b flex-grow-1">
                    <input type="text" class="w-100" />
                  </div>
                </div>
                <div class="flex">
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> J Tube (specify)
                  </div>
                  <div class="border b-b flex-grow-1">
                    <input type="text" class="w-100" />
                  </div>
                </div>
                <div class="flex">
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Change feeding Tube (specify)
                  </div>
                  <div class="border b-b flex-grow-1">
                    <input type="text" class="w-100" />
                  </div>
                </div>
                <div class="flex">
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" class="visibility-hidden" /> using
                    size
                  </div>
                  <div class="border b-b flex-grow-1">
                    <input type="text" class="w-100" />
                  </div>
                  <div class="c-green">q</div>
                  <div class="border b-b flex-grow-1">
                    <input type="text" class="w-100" />
                  </div>
                </div>
                <div class="flex-center-1 c-green">
                  <input type="checkbox" /> Other(specify):
                  <div class="border b-top b-left b-right flex-grow-1">
                    <input type="text" class="w-100" />
                  </div>
                </div>
              </div>
              <div class="flex-column gap-1">
                <div class="flex-around gap-6">
                  <div class="c-green f-bold w-20">A</div>
                  <div class="c-green f-bold w-20">P</div>
                  <div class="c-green f-bold w-20">I</div>
                </div>
                <div class="flex gap-2">
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1 visibility-hidden">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1 visibility-hidden">
                    <input type="checkbox" />
                  </div>
                </div>
                <div class="flex gap-2">
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                </div>
                <div class="flex gap-2">
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1 visibility-hidden">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                </div>
                <div class="flex gap-2">
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1 visibility-hidden">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                </div>
                <div class="flex gap-2">
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                </div>
                <div class="flex gap-2 visibility-hidden">
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                </div>
                <div class="flex gap-2 visibility-hidden">
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                </div>
                <div class="flex gap-2">
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                </div>
                <div class="flex gap-2 visibility-hidden">
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                </div>
                <div class="flex gap-2 visibility-hidden">
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                </div>
                <div class="flex gap-2">
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                </div>
                <div class="flex gap-2">
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                </div>
                <div class="flex gap-2">
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                </div>
                <div class="flex gap-2">
                  <div class="flex-center-1 visibility-hidden">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-50">
            <div class="flex gap-5 pad-3">
              <div class="w-85">
                <div class="flex-center-1 gap-5">
                  <div
                    class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                  >
                    21
                  </div>
                  <div>
                    <b class="c-green"> Bowel Interventions </b>
                  </div>
                  <div class="c-green">
                    <u><b class="c-green">A</b></u
                    >ssess/<u><b class="c-green">P</b></u
                    >erform/<u><b class="c-green">I</b></u
                    >nstruct Pt/Cg:
                  </div>
                </div>
                <div class="flex-center-1 c-green">
                  <input type="checkbox" /> Bowel status
                </div>
                <div class="flex-center-1 c-green">
                  <input type="checkbox" /> Nutrition, hydration and activity
                </div>
                <div class="flex-center-1 c-green">
                  <input type="checkbox" /> Fecal impaction and disimpact PRN
                </div>
                <div class="flex-top c-green">
                  <input type="checkbox" /> Bowel regimen initiated or continued
                  per physician order and effectiveness
                </div>
                <div class="flex">
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Ostomy care to include:
                  </div>
                  <div class="border b-b flex-grow-1">
                    <input type="text" class="w-100" />
                  </div>
                </div>
                <div class="border b-b flex-grow-1">
                  <input type="text" class="w-100" />
                </div>
                <div class="border b-b flex-grow-1">
                  <input type="text" class="w-100" />
                </div>
                <div class="flex">
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> S/S enema PRN constipation
                  </div>
                </div>
                <div class="flex">
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> S/S Fleet enema PRN constipation
                  </div>
                </div>
                <div class="flex">
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Medication administration, side
                    effects and response
                  </div>
                </div>
                <div class="flex">
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Skin breakdown and prevention
                  </div>
                </div>
                <div class="flex-center-1 c-green">
                  <input type="checkbox" /> Other(specify):
                  <div class="border b-top b-left b-right flex-grow-1">
                    <input type="text" class="w-100" />
                  </div>
                </div>
              </div>
              <div class="flex-column gap-1">
                <div class="flex-around gap-6">
                  <div class="c-green f-bold w-20">A</div>
                  <div class="c-green f-bold w-20">P</div>
                  <div class="c-green f-bold w-20">I</div>
                </div>
                <div class="flex gap-2">
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1 visibility-hidden">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1 visibility-hidden">
                    <input type="checkbox" />
                  </div>
                </div>
                <div class="flex gap-2">
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                </div>
                <div class="flex gap-2">
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                </div>
                <div class="flex gap-2">
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                </div>
                <div class="flex gap-2 visibility-hidden">
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                </div>
                <div class="flex gap-2">
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                </div>
                <div class="flex gap-2 visibility-hidden">
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                </div>
                <div class="flex gap-2 visibility-hidden">
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                </div>
                <div class="flex gap-2">
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                </div>
                <div class="flex gap-2">
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                </div>
                <div class="flex gap-2">
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                </div>
                <div class="flex gap-2">
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="border b-left b-right pad-3">
          <div class="flex gap-10">
            <b>NUTRITION/HYDRATION</b>
            <div class="flex-center-1"><input type="checkbox" /> Diet:</div>
            <div class="border b-b flex-grow-1">
              <input type="text" class="w-100" />
            </div>
          </div>
          <div class="flex gap-5">
            <div class="w-50">
              <div class="flex">
                <div class="flex-center-1">
                  <input type="checkbox" /> Difficuly chewing/swallowing
                  (Reason):
                </div>
                <div class="border b-b flex-grow-1">
                  <input type="text" class="w-100" />
                </div>
              </div>
              <div class="flex gap-5">
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Dentures:
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Upper
                  </div>
                </div>
                <div class="">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Lower
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Cachexic
                  </div>
                </div>
              </div>
              <div class="flex-center-1">
                <input type="checkbox" /> Enteral/Parental nutrition
              </div>
              <div class="flex">
                <div class="flex-center-1">
                  <input type="checkbox" /> Recent weight gain or loss - Amt.:
                  <div class="border b-b flex-grow-1 w-10">
                    <input type="text" class="w-100" />
                  </div>
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> BMI:
                  <div class="border b-b flex-grow-1">
                    <input type="text" class="w-100" />
                  </div>
                </div>
              </div>
              <div class="flex-center-1">
                <input type="checkbox" /> Fluid intake:
                <div class="border b-b flex-grow-1">
                  <input type="text" class="w-100" />
                </div>
              </div>
              <div class="bg-purple flex">
                Comments:
                <input type="text" class="w-100" />
              </div>
              <div class="bg-purple flex border b-left b-right b-btm">
                <input type="text" class="w-100" />
              </div>
            </div>
            <div class="w-50">
              <div class="flex gap-1 bg-purple pad-1">
                <div><b>Severity of Symptoms</b></div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> <b>No Symptoms</b>
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> <b>Mild</b>
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> <b>Moderate</b>
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> <b>Severe (distressed)</b>
                  </div>
                </div>
              </div>
              <div class="flex gap-5">
                <div>
                  <div class="flex-center-1 gap-5">
                    <div
                      class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                    >
                      21
                    </div>
                    <div>
                      <b class="c-green">Impaired Swallowing Interventions </b>
                    </div>
                    <div class="c-green">
                      <u><b class="c-green">A</b></u
                      >ssess/<u><b class="c-green">P</b></u
                      >erform/<u><b class="c-green">I</b></u
                      >nstruct Pt/Cg:
                    </div>
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Patient's swallowing abiliy
                    methods
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Medication administration, side
                    effecs and response
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> After diet as patient's condition
                    deteroriates, per physician's order
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Other(specify):
                    <div class="border b-top b-left b-right flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
                <div class="flex-column gap-1">
                  <div class="flex-around gap-6">
                    <div class="c-green f-bold w-20">A</div>
                    <div class="c-green f-bold w-20">P</div>
                    <div class="c-green f-bold w-20">I</div>
                  </div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1 visibility-hidden">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1 visibility-hidden">
                      <input type="checkbox" />
                    </div>
                  </div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="flex gap-30">
            <div class="flex-center-1">
              <div
                class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
              >
                16
              </div>
              <b class="c-green">NUTRITIONAL REQUIREMENTS NEW OR CHANGED</b>
            </div>
            <div class="flex-center-1 flex-grow-1">
              <input type="checkbox" /> Patient Food Preferences:
              <div class="border b-b flex-grow-1">
                <input type="text" class="w-100" />
              </div>
            </div>
          </div>
          <div class="flex gap-5 pad-3">
            <div class="w-50">
              <div class="flex gap-5">
                <div class="flex-center-1">
                  <input type="checkbox" />
                </div>
                <div class="border b-b flex-grow-1 w-10">
                  <input type="text" class="w-100" />
                </div>
                <div class="c-green">Sodium Diet</div>
                <div class="flex-center-1">
                  <input type="checkbox" />
                </div>
                <div class="border b-b flex-grow-1 w-10">
                  <input type="text" class="w-100" />
                </div>
                <div class="c-green">Calorie ADA Diet</div>
                <div class="flex-center-1">
                  <input type="checkbox" />
                </div>
                <div class="c-green">Bland Diet</div>
              </div>
              <div class="flex gap-5">
                <div class="flex-center-1">
                  <input type="checkbox" />
                </div>
                <div class="border b-b flex-grow-1 w-10">
                  <input type="text" class="w-100" />
                </div>
                <div class="c-green">Protein High Diet</div>
                <div class="border b-b flex-grow-1 w-10">
                  <input type="text" class="w-100" />
                </div>
                <div class="c-green">/Low Diet</div>
                <div class="border b-b flex-grow-1 w-10"></div>
              </div>
              <div class="flex gap-5">
                <div class="flex-center-1">
                  <input type="checkbox" />
                </div>
                <div class="border b-b flex-grow-1 w-10">
                  <input type="text" class="w-100" />
                </div>
                <div class="c-green">Carbohydrate High Diet</div>
                <div class="border b-b flex-grow-1 w-10">
                  <input type="text" class="w-100" />
                </div>
                <div class="c-green">/Low Diet</div>
                <div class="border b-b flex-grow-1 w-10"></div>
              </div>
              <div class="flex gap-5">
                <div class="flex-center-1">
                  <input type="checkbox" />
                </div>
                <div class="c-green">Enteral Feeding</div>
                <div class="border b-b flex-grow-1 w-10">
                  <input type="text" class="w-100" />
                </div>
                <div class="c-green">Amount</div>
                <div class="border b-b flex-grow-1 w-10">
                  <input type="text" class="w-100" />
                </div>
                <div class="c-green">mL/day Pump Type:</div>
                <div class="border b-b flex-grow-1 w-10">
                  <input type="text" class="w-100" />
                </div>
              </div>
            </div>
            <div class="w-50">
              <div class="flex gap-20">
                <div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Mechanical (Soft, High-Fiber,
                    etc.)
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Regular
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Supplement
                  </div>
                </div>
                <div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> NG Tube
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Gastrostomy Tube
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> J Tube
                  </div>
                </div>
              </div>
              <div class="flex-center-1 c-green">
                <input type="checkbox" /> Other(specify):
                <div class="border b-top b-left b-right flex-grow-1">
                  <input type="text" class="w-100" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-violet pad-5 br-10 c-white">
          PSYCHOLOGICAL/MENTAL/EMOTIONAL/BEHAVIORAL STATUS
        </div>
        <div class="flex gap-5 pad-3">
          <div class="w-60 gap-5">
            <div class="flex">
              <div class="w-75">
                <div class="flex-center-1 gap-10">
                  <div
                    class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                  >
                    16
                  </div>
                  <b class="c-green">PSYCHOLOGICAL STATUS/BEHAVIOR</b>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> WNL
                  </div>
                </div>
                <div class="flex gap-5">
                  <div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Orientation
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Confused
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Depressed
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Tearful
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Anxiety
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Person
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Withdrawn
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Agitative
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Hostile
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Sleep Disorder
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Place
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Combative
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Restless
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Drowsy
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Emotional Distress
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Time
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Forgetful
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Disoriented
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-25 flex-column">
                <b class="c-green">Level of Consciousness</b>
                <div class="flex-center-1 c-green">
                  <input type="checkbox" /> Semi-Comatose
                </div>
                <div class="flex-center-1 c-green">
                  <input type="checkbox" /> Comatose
                </div>
                <div class="flex-center-1 c-green">
                  <input type="checkbox" /> Lethargic
                </div>
                <div class="flex-center-1 c-green">
                  <input type="checkbox" /> Other (specify):
                  <div class="border b-b flex-grow-1 w-10">
                    <input type="text" class="w-100" />
                  </div>
                </div>
                <div class="border b-b flex-grow-1 flex-grow-1">
                  <input type="text" class="w-100" />
                </div>
              </div>
            </div>
            <div class="flex-center-1">
              <input type="checkbox" /> Patient able to understand and
              participae in care
            </div>
          </div>
          <div class="w-40">
            <div class="bg-purple">
              <b>Severity of Symptoms:</b>
              <div class="flex gap-10">
                <div class="flex-center-1">
                  <input type="checkbox" /> <b>No Symptoms</b>
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> <b>Mild</b>
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> <b>Moderate</b>
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> <b>Severe (distressed)</b>
                </div>
              </div>
            </div>
            <div class="bg-purple flex border b-b">
              Comments
              <input type="text" />
            </div>
            <div class="bg-purple flex border b-b">
              <input type="text" />
            </div>
            <div class="bg-purple flex border b-b">
              <input type="text" />
            </div>
            <div class="bg-purple flex border b-b">
              <input type="text" />
            </div>
            <div class="bg-purple flex">
              <input type="text" />
            </div>
          </div>
        </div>
        <div class="border b-left b-right pad-3">
          <div class="flex">
            Patient knowledge and coping level regarding present
            diagnosis/prognosis:
            <div class="border b-b flex-grow-1">
              <input type="text" class="w-100" />
            </div>
          </div>
          <div class="border b-b flex-grow-1">
            <input type="text" class="w-100" />
          </div>
        </div>
        <div class="flex gap-5">
          <div class="w-50">
            <div class="pad-3">
              <div class="flex">
                <div class="flex-center-1 gap-5 w-90">
                  <div
                    class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                  >
                    21
                  </div>
                  <div class="f-bold c-green gamay">
                    Psychological/Mental/Emotional Interventions
                  </div>
                  <div class="c-green gamay">
                    <b class="c-green gamay">A</b>ssess/<b class="c-green gamay"
                      >P</b
                    >erform/<b class="c-green gamay">I</b>nstruct Pt/Cg:
                  </div>
                </div>
                <div class="flex-center-align gap-8">
                  <div class="f-bold c-green w-20">A</div>
                  <div class="f-bold c-green w-20">P</div>
                  <div class="f-bold c-green w-20">I</div>
                </div>
              </div>
              <div class="flex">
                <div class="w-90">
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Level of consciousness/orientation
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Response in medications and
                    treatment
                  </div>
                  <div class="flex-top c-green">
                    <input type="checkbox" /> Current medications/potential side
                    effects causing alteration in mental status
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Causes, e.g., infection, pain,
                    urinary retention, constipation, etc.
                  </div>
                </div>
                <div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1 visibility-hidden">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1 visibility-hidden">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1 visibility-hidden">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-50">
            <div class="pad-3">
              <div class="flex">
                <div class="flex-center-1 gap-5 w-90 visibility-hidden">
                  <div
                    class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                  >
                    21
                  </div>
                  <div class="f-bold c-green">Spiritual Need Interventions</div>
                  <div class="c-green">
                    <b class="c-green">A</b>ssess/<b class="c-green">P</b
                    >erform/<b class="c-green">I</b>nstruct Pt/Cg:
                  </div>
                </div>
                <div class="flex-center-align gap-8">
                  <div class="f-bold c-green w-20">A</div>
                  <div class="f-bold c-green w-20">P</div>
                  <div class="f-bold c-green w-20">I</div>
                </div>
              </div>
              <div class="flex">
                <div class="w-90">
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Counseling
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Grief management
                  </div>
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Other (specify):
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
                <div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="bg-purple flex pad-2">
                Comments
                <input type="text" class="w-100" />
              </div>
            </div>
          </div>
        </div>
        <div class="border b-left b-right">
          <div class="flex gap-5">
            <div class="w-50">
              <div class="pad-3">
                <div class="flex">
                  <div class="flex-center-1 gap-5 w-90">
                    <div
                      class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                    >
                      21
                    </div>
                    <div class="f-bold c-green">Sleep Interventions:</div>
                    <div class="c-green">
                      <b class="c-green">A</b>ssess/<b class="c-green">P</b
                      >erform/<b class="c-green">I</b>nstruct Pt/Cg:
                    </div>
                  </div>
                  <div class="flex-center-align gap-8">
                    <div class="f-bold c-green w-20">A</div>
                    <div class="f-bold c-green w-20">P</div>
                    <div class="f-bold c-green w-20">I</div>
                  </div>
                </div>
                <div class="flex">
                  <div class="w-90">
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Causes of interruptions in sleep
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Medication administration, side
                      effects and response
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Other (specify):
                      <div class="border b-b flex-grow-1">
                        <input type="text" class="w-100" />
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1 visibility-hidden">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-50">
              <div class="bg-purple flex border b-b">
                Comments
                <input type="text" />
              </div>
              <div class="bg-purple flex border b-b">
                <input type="text" />
              </div>
              <div class="bg-purple flex border b-b">
                <input type="text" />
              </div>
              <div class="bg-purple flex border b-b">
                <input type="text" />
              </div>
              <div class="bg-purple flex">
                <input type="text" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page">
        <div class="pad-3">
          <div class="bg-violet br-10 pad-5 c-white">MEDICATIONS</div>
          <div class="flex-center-1 gap-10">
            <div
              class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
            >
              21
            </div>
            <b>MEDICATIONS:</b> DOSE/FREQUENCY/ROUTE:
            <div class="flex-center-1">
              <input type="checkbox" /> See Medication Profile located
              <div class="border b-b w-10 flex-grow-1">
                <input type="text" class="w-100" />
              </div>
            </div>
            <div class="flex-center-1 flex-grow-1">
              <input type="checkbox" /> See Drug Regimen Review location
              <div class="border b-b w-10 flex-grow-1">
                <input type="text" class="w-100" />
              </div>
            </div>
          </div>
        </div>
        <div class="flex">
          <div class="border b-btm b-left w-45">
            <div class="border b-b">
              <div class="border b-b pad-3">
                <div class="flex gap-10">
                  <div
                    class="border br-3 flex-center-align f-bold c-violet bg-violet-1 width-30"
                  >
                    N0500
                  </div>
                  <b>Scheduled Opioid</b>
                </div>
                <b>A. Was a scheduled opioid intiated or continued</b>
                <i>(Per physician order)</i>
                <div class="flex gap-30">
                  <div class="flex-center-1">
                    <input type="checkbox" /> 0. No
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> 1. Yes
                  </div>
                </div>
              </div>
              <div class="pad-3">
                <div class="flex">
                  <b class="gamay"
                    >B. Date shceduled opioid initiated or continued:</b
                  >
                  <div class="flex">
                    <div>
                      <input type="text" class="width-30 text-center" />/
                    </div>
                    <div>
                      <input type="text" class="width-30 text-center" />/
                    </div>
                    <div>
                      <input type="text" class="width-30 text-center" />
                    </div>
                  </div>
                  <div>
                    <i class="wala">(Month/Day/Year)</i>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="">
                <div class="border b-b pad-3">
                  <div class="flex gap-10">
                    <div
                      class="border br-3 flex-center-align f-bold c-violet bg-violet-1 width-30"
                    >
                      N0510
                    </div>
                    <b>RN Opioid</b>
                  </div>
                  <b>A. Was a PRN opioid intiated or continued</b>
                  <i>(Per physician order)</i>
                  <div class="flex gap-30">
                    <div class="flex-center-1">
                      <input type="checkbox" /> 0. No
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> 1. Yes
                    </div>
                  </div>
                </div>
                <div class="pad-3">
                  <div class="flex">
                    <b class="gamay"
                      >B. Date PRN opioid initiated or continued:</b
                    >
                    <div class="flex">
                      <div>
                        <input type="text" class="width-30 text-center" />/
                      </div>
                      <div>
                        <input type="text" class="width-30 text-center" />/
                      </div>
                      <div>
                        <input type="text" class="width-30 text-center" />
                      </div>
                    </div>
                    <div>
                      <i class="wala">(Month/Day/Year)</i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="border b-left b-btm b-right w-55">
            <div class="border b-b pad-3">
              <div class="flex gap-10">
                <div
                  class="border br-3 flex-center-align f-bold c-violet bg-violet-1 width-30"
                >
                  N0510
                </div>
                <b>Bowel Regimen</b> -
                <i>Complete only if N0500A or N0510A = 1</i>
              </div>
              <div class="flex-center-1">
                <b>A. Was bowel regimen initiated or continued?</b>
                <i class="gamay"
                  >(Per physician order) Select most accurate response</i
                >
              </div>
              <div class="flex-top gap-">
                <div class="width-50">
                  <div class="flex-center-1">
                    <input type="checkbox" /> 0. No
                  </div>
                </div>
                <div class="flex-grow-1">
                  <div class="flex-center-1">
                    <input type="checkbox" /> 1. No, a bowel regimen was not
                    initiated or continued (specify)
                    <div class="border b-b flex-grow-1 w-10">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                  <div class="border b-b flex-grow-1">
                    <input type="text" class="w-100" />
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> 2. Yes
                  </div>
                </div>
              </div>
            </div>
            <div class="border b-b pad-3">
              <div class="flex gap-5">
                <b>Date bowel regimen initiated or continued</b>
                <div class="flex">
                  <div><input type="text" class="width-30 text-center" />/</div>
                  <div><input type="text" class="width-30 text-center" />/</div>
                  <div>
                    <input type="text" class="width-30 text-center" />
                  </div>
                </div>
                <div>
                  <i class="wala">(Month/Day/Year)</i>
                </div>
              </div>
            </div>
            <div class="pad-3">
              <div class="flex-top gap-20">
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> <b>IV Access Present:</b>
                  </div>
                </div>
                <div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Peripheral
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> PICC
                  </div>
                </div>
                <div class="flex-grow-1">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Central: Define
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                  <div class="flex">
                    Date Inserted:
                    <div class="flex">
                      <div>
                        <input type="text" class="width-30 text-center" />/
                      </div>
                      <div>
                        <input type="text" class="width-30 text-center" />/
                      </div>
                      <div>
                        <input type="text" class="width-30 text-center" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <table>
            <tr>
              <td class="pad-3 bg-violet-1 w-60">
                <div><b>Patient Name</b> (First, MI, Last)</div>
                <div>
                  <input type="text" class="w-100" />
                </div>
              </td>
              <td class="pad-3 bg-violet-1">
                <div>
                  <b>ID No.</b>
                </div>
                <div>
                  <input type="text" class="w-100" />
                </div>
              </td>
            </tr>
          </table>
        </div>
        <br />
        <br />
        <br />
        <div class="bg-violet br-10 pad-5 c-white">
          MEDICATIONS <i class="c-white">(continued)</i>
        </div>
        <div class="border b-b">
          <div class="flex gap-5">
            <div class="w-50">
              <div class="pad-3">
                <div class="flex">
                  <div class="flex-center-1 gap-5 w-90">
                    <div
                      class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                    >
                      21
                    </div>
                    <div class="f-bold c-green">Medications Interventions:</div>
                    <div class="c-green gamay">
                      <b class="c-green gamay">A</b>ssess/<b
                        class="c-green gamay"
                        >P</b
                      >erform/<b class="c-green gamay">I</b>nstruct Pt/Cg:
                    </div>
                  </div>
                  <div class="flex-center-align gap-8">
                    <div class="f-bold c-green w-20">A</div>
                    <div class="f-bold c-green w-20">P</div>
                    <div class="f-bold c-green w-20">I</div>
                  </div>
                </div>
                <div class="flex gap-5">
                  <div class="w-90">
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Patient's medications will be
                      reviewed
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Reorder of medications from
                      pharmacy wil be documented
                    </div>
                    <div class="flex-top c-green">
                      <input type="checkbox" /> Discontinued medications will be
                      discarded per policy
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Report to physician and IDG any
                      medication discrepancies
                    </div>
                  </div>
                  <div>
                    <div class="flex gap-2">
                      <div class="flex-center-1 visibility-hidden">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1 visibility-hidden">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="flex gap-2">
                      <div class="flex-center-1 visibility-hidden">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1 visibility-hidden">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1 visibility-hidden">
                        <input type="checkbox" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-50">
              <div class="pad-3">
                <div class="flex">
                  <div class="flex-center-1 gap-5 w-90 visibility-hidden">
                    <div
                      class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                    >
                      21
                    </div>
                    <div class="f-bold c-green">
                      Spiritual Need Interventions
                    </div>
                    <div class="c-green">
                      <b class="c-green">A</b>ssess/<b class="c-green">P</b
                      >erform/<b class="c-green">I</b>nstruct Pt/Cg:
                    </div>
                  </div>
                  <div class="flex-center-align gap-8">
                    <div class="f-bold c-green w-20">A</div>
                    <div class="f-bold c-green w-20">P</div>
                    <div class="f-bold c-green w-20">I</div>
                  </div>
                </div>
                <div class="flex gap-5">
                  <div class="w-90">
                    <div class="flex-center-1 c-green">
                      If misuse or diversion is suspected:
                    </div>
                    <div class="flex-center-1 c-green">
                      &emsp;<input type="checkbox" /> Maintain medication in a
                      lock box
                    </div>
                    <div class="flex-center-1 c-green">
                      &emsp;<input type="checkbox" /> Count medications every
                      nursing visit
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Other (specify):
                      <div class="border b-b flex-grow-1">
                        <input type="text" class="w-100" />
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="flex gap-2 visibility-hidden">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1 visibility-hidden">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1 visibility-hidden">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1 visibility-hidden">
                        <input type="checkbox" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="border b-b">
          <div class="flex gap-5">
            <div class="w-50">
              <div class="pad-3">
                <div class="flex">
                  <div class="flex-center-1 gap-5 w-90">
                    <div
                      class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                    >
                      21
                    </div>
                    <div class="f-bold c-green">
                      High Tech/Special Procedures:
                    </div>
                    <div class="c-green gamay">
                      <b class="c-green gamay">A</b>ssess/<b
                        class="c-green gamay"
                        >P</b
                      >erform/<b class="c-green gamay">I</b>nstruct Pt/Cg:
                    </div>
                  </div>
                  <div class="flex-center-align gap-8">
                    <div class="f-bold c-green w-20">A</div>
                    <div class="f-bold c-green w-20">P</div>
                    <div class="f-bold c-green w-20">I</div>
                  </div>
                </div>
                <div class="flex gap-5">
                  <div class="w-90">
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Administration of
                      <div class="border b-b flex-grow-1">
                        <input type="text" class="w-100" />
                      </div>
                      (IV medication) in
                      <div class="border b-b flex-grow-1 w-10">
                        <input type="text" class="w-100" />
                      </div>
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" class="visibility-hidden" />
                      (solution) to run at
                      <div class="border b-b flex-grow-1 w-10">
                        <input type="text" class="w-100" />
                      </div>
                      mL/hr via
                      <div class="border b-b flex-grow-1 w-10">
                        <input type="text" class="w-100" />
                      </div>
                      (
                      <div class="flex">
                        <div class="flex-center-1 c-green">
                          <input type="checkbox" /> Pump/
                        </div>
                        <div class="flex-center-1 c-green">
                          <input type="checkbox" /> Gravity
                        </div>
                      </div>
                      )
                    </div>
                    <div class="flex-center-1 c-green gamay">
                      <input type="checkbox" /> Flush IV/PICC/Midline with
                      5-10mL of NS before and after antibiotic infusion.
                    </div>
                    <div class="flex-top c-green">
                      <input type="checkbox" class="visibility-hidden" /> Follow
                      with 3-5mL Heparin
                      <div class="border b-b flex-grow-1 w-10">
                        <input type="text" class="w-100" />
                      </div>
                      units/mL flush
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Change
                      <div class="border b-b flex-grow-1">
                        <input type="text" class="w-100" />
                      </div>
                      dressing q
                      <div class="border b-b flex-grow-1 w-10">
                        <input type="text" class="w-100" />
                      </div>
                      and PRN using
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" class="visibility-hidden" />
                      sterile technique with alcohol/betadine
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Change injection cap q
                      <div class="border b-b flex-grow-1">
                        <input type="text" class="w-100" />
                      </div>
                      and PRN
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Flush
                      <div class="border b-b flex-grow-1">
                        <input type="text" class="w-100" />
                      </div>
                      catheter with
                      <div class="border b-b flex-grow-1 w-10">
                        <input type="text" class="w-100" />
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="flex gap-2 visibility-hidden">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="flex gap-2 visibility-hidden">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="flex gap-2 visibility-hidden">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="flex gap-2 visibility-hidden">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-50">
              <div class="pad-3">
                <div class="flex">
                  <div class="flex-center-1 gap-5 w-90 visibility-hidden">
                    <div
                      class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                    >
                      21
                    </div>
                    <div class="f-bold c-green">
                      Spiritual Need Interventions
                    </div>
                    <div class="c-green">
                      <b class="c-green">A</b>ssess/<b class="c-green">P</b
                      >erform/<b class="c-green">I</b>nstruct Pt/Cg:
                    </div>
                  </div>
                  <div class="flex-center-align gap-8">
                    <div class="f-bold c-green w-20">A</div>
                    <div class="f-bold c-green w-20">P</div>
                    <div class="f-bold c-green w-20">I</div>
                  </div>
                </div>
                <div class="flex gap-5">
                  <div class="w-90">
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Change Huber needle q
                      <div class="border b-b flex-grow-1 w-10">
                        <input type="text" class="w-100" />
                      </div>
                      and PRN using sterile technique
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Access port q
                      <div class="border b-b flex-grow-1 w-10">
                        <input type="text" class="w-100" />
                      </div>
                      and PRN to flush with
                      <div class="border b-b flex-grow-1 w-10">
                        <input type="text" class="w-100" />
                      </div>
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Pump/Equipment (specify):
                      <div class="border b-b flex-grow-1 w-10">
                        <input type="text" class="w-100" />
                      </div>
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Equipment use/Safety
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Start Peripheral IV and maintain
                      site, q
                      <div class="border b-b flex-grow-1 w-10">
                        <input type="text" class="w-100" />
                      </div>
                      or q
                      <div class="border b-b flex-grow-1 w-10">
                        <input type="text" class="w-100" />
                      </div>
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" class="visibility-hidden" /> days
                      and PRN for S/S of infiltration/infection
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> S/S of infiltration and
                      emergency procedures
                    </div>
                    <div class="flex-center-1 c-green">
                      <input type="checkbox" /> Other (specify):
                      <div class="border b-b flex-grow-1">
                        <input type="text" class="w-100" />
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="flex gap-2 visibility-hidden">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="flex gap-2 visibility-hidden">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                    </div>
                    <div class="flex gap-2">
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="flex bg-purple pad-3">
          Comments
          <input type="text" class="w-100" />
        </div>
        <div class="bg-violet c-white pad-5 br-10">ACTIVITIES</div>
        <div class="pad-3">
          <div class="flex-center-1 gap-3">
            <div
              class="border height-10 flex-center-align bg-green c-green pad-5"
            >
              188
            </div>
            <b class="c-green">ACTIVITIES PERMITTED:</b>
          </div>
          <div class="flex gap-20">
            <div>
              <div class="flex-center-1 c-green">
                <input type="checkbox" /> Complete bed rest
              </div>
              <div class="flex-center-1 c-green">
                <input type="checkbox" /> Bed rest with BRP
              </div>
            </div>
            <div>
              <div class="flex-center-1 c-green">
                <input type="checkbox" /> Up as tolerated
              </div>
              <div class="flex-center-1 c-green">
                <input type="checkbox" /> Transfer bed-chair
              </div>
            </div>
            <div>
              <div class="flex-center-1 c-green">
                <input type="checkbox" /> Independent at home
              </div>
              <div class="flex-center-1 c-green">
                <input type="checkbox" /> Partial weight-bearing
              </div>
            </div>
            <div>
              <div class="flex-center-1 c-green">
                <input type="checkbox" /> Cane
              </div>
              <div class="flex-center-1 c-green">
                <input type="checkbox" /> Crutches
              </div>
            </div>
            <div>
              <div class="flex-center-1 c-green">
                <input type="checkbox" /> Walker
              </div>
              <div class="flex-center-1 c-green">
                <input type="checkbox" /> Wheelchair
              </div>
            </div>
            <div class="flex-grow-1">
              <div class="flex-center-1 c-green visibility-hidden">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 c-green">
                <input type="checkbox" /> Other (specify)
                <div class="border b-b flex-grow-1">
                  <input type="text" class="w-100" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-violet pad-5 br-10 c-white">EQUIPMENT</div>
        <table>
          <tr class="b-top b-left b-right b-btm">
            <td class="b-top b-btm bg-green-1 b-left width-150">
              <div class="flex-center-1 gap-10">
                <div
                  class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                >
                  14
                </div>
                <b class="c-green">DME:</b>
              </div>
            </td>
            <td
              class="b-top b-btm bg-green-1 text-center f-bold c-green width-30"
            >
              Present
            </td>
            <td
              class="b-top b-btm bg-green-1 text-center f-bold c-green width-30"
            >
              Needs
            </td>
            <td
              class="b-top b-btm bg-green-1 text-center f-bold c-green width-30"
            >
              N/A
            </td>
            <td
              class="b-top b-btm bg-green-1 text-center f-bold c-green width-150"
            ></td>
            <td
              class="b-top b-btm bg-green-1 text-center f-bold c-green width-30"
            >
              Present
            </td>
            <td
              class="b-top b-btm bg-green-1 text-center f-bold c-green width-30"
            >
              Needs
            </td>
            <td
              class="b-top b-btm bg-green-1 text-center f-bold c-green width-30"
            >
              N/A
            </td>
            <td
              class="b-top b-btm bg-green-1 text-center f-bold c-green width-150"
            >
              DISPOSABLES
            </td>
            <td
              class="b-top b-btm bg-green-1 text-center f-bold c-green width-30"
            >
              Present
            </td>
            <td
              class="b-top b-btm bg-green-1 text-center f-bold c-green width-30"
            >
              Needs
            </td>
            <td
              class="b-top b-btm bg-green-1 text-center f-bold c-green b-right width-30"
            >
              N/A
            </td>
          </tr>
          <tr class="b-top b-btm b-left b-right">
            <td class="b-top b-btm b-left v-align-top pad-3">
              <div class="flex-center-1 height-16 c-green">
                <input type="checkbox" /> Hospital Bed
              </div>
              <div class="flex-center-1 height-16 c-green">
                <input type="checkbox" /> Trapeze Bed
              </div>
              <div class="flex-center-1 height-16 c-green">
                <input type="checkbox" /> Wheelchair
              </div>
              <div class="flex-center-1 height-16 c-green">
                <input type="checkbox" /> Pressure Relieving Device
              </div>
              <div class="flex-center-1 height-16 c-green">
                <input type="checkbox" /> Sunction Machine
              </div>
              <div class="flex-center-1 height-16 c-green">
                <input type="checkbox" /> Infusion Pump
              </div>
              <div class="flex-center-1 height-16 c-green">
                <input type="checkbox" /> Oxygen
              </div>
              <div class="flex-center-1 height-16 c-green">
                <input type="checkbox" /> Ambulation Aids
              </div>
              <div class="flex-center-1 height-16 c-green">
                &emsp;<input type="checkbox" /> Walker
              </div>
              <div class="flex-center-1 height-16 c-green">
                &emsp;<input type="checkbox" /> Cane
              </div>
              <div class="flex-center-1 height-16 c-green">
                &emsp;<input type="checkbox" /> Crutches
              </div>
              <div class="flex-center-1 height-16 c-green">
                <input type="checkbox" /> Transfer Equipment
              </div>
            </td>
            <td class="b-top b-btm v-align-top pad-3">
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
            </td>
            <td class="b-top b-btm v-align-top pad-3">
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
            </td>
            <td class="b-top b-btm v-align-top pad-3">
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-16 flex-center">
                <input type="checkbox" />
              </div>
            </td>
            <td class="b-top b-btm pad-3">
              <div class="flex-center-1 c-green">
                <input type="checkbox" /> Bathroom Safety Devices
              </div>
              <div class="flex-center-1 c-green">
                &emsp;<input type="checkbox" /> Grab Bars
              </div>
              <div class="flex-center-1 c-green">
                &emsp;<input type="checkbox" /> Tub Stool/Shower Bench
              </div>
              <div class="flex-center-1 c-green">
                &emsp;<input type="checkbox" /> Bedside Commode
              </div>
              <div class="flex-center-1 c-green">
                &emsp;<input type="checkbox" /> Toileting Aids/Seats
              </div>
              <div class="flex-center-1 c-green">
                <input type="checkbox" /> Ramps/Railings
              </div>
              <div class="flex-center-1 c-green">
                <input type="checkbox" /> Other (specify)
                <div class="border b-b width-50">
                  <input type="text" class="w-100" />
                </div>
              </div>
              <div class="flex-center-1">
                <input type="checkbox" /> Dressing Aids
              </div>
              <div class="flex-center-1">
                <input type="checkbox" /> Colostomy/Ileostom Bags
              </div>
              <div class="flex-center-1">
                <input type="checkbox" /> Catheter
              </div>
              <div class="flex-center-1">
                <input type="checkbox" /> Pacemaker
              </div>
              <div class="flex-center-1">
                <input type="checkbox" /> Prosthetic Device
              </div>
              <div class="flex-center-1">
                <input type="checkbox" /> Leg Brace
              </div>
              <div class="flex-center-1">
                <input type="checkbox" /> Other (specify)
                <div class="border b-b width-50">
                  <input type="text" class="w-100" />
                </div>
              </div>
            </td>
            <td class="b-top b-btm v-align-top">
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
            </td>
            <td class="b-top b-btm v-align-top">
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
            </td>
            <td class="b-top b-btm v-align-top">
              <div class="flex-center-1 width-33-12 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
            </td>
            <td class="b-top b-btm v-align-top pad-3">
              <div class="flex-center-1 c-green">
                <input type="checkbox" /> Diabetic Supplies
              </div>
              <div class="flex-center-1 c-green">
                <input type="checkbox" /> Dressing Supplies
              </div>
              <div class="flex-center-1 c-green">
                <input type="checkbox" /> IV Supplies
              </div>
              <div class="flex-center-1 c-green">
                <input type="checkbox" /> Catheter Supplies
              </div>
              <div class="flex-center-1 c-green">
                <input type="checkbox" /> Other (specify)
                <div class="border b-b flex-grow-1 w-10">
                  <input type="text" class="w-100" />
                </div>
              </div>
              <div class="border b-b flex-grow-1">
                <input type="text" class="w-100" />
              </div>
              <div class="border b-b flex-grow-1">
                <input type="text" class="w-100" />
              </div>
              <div class="border b-b flex-grow-1">
                <input type="text" class="w-100" />
              </div>
              <div class="border b-b flex-grow-1">
                <input type="text" class="w-100" />
              </div>
              <div class="border b-b flex-grow-1">
                <input type="text" class="w-100" />
              </div>
              <div class="border b-b flex-grow-1">
                <input type="text" class="w-100" />
              </div>
              <div class="flex-center-1 bg-purple">
                Comments
                <div class="border b-b flex-grow-1 w-10">
                  <input type="text" class="w-100" />
                </div>
              </div>
              <div class="border b-b flex-grow-1 bg-purple">
                <input type="text" class="w-100" />
              </div>
              <div class="border b-b flex-grow-1 bg-purple">
                <input type="text" class="w-100" />
              </div>
            </td>
            <td class="b-top b-btm v-align-top pad-3">
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div
                class="flex-center-1 height-14-29 flex-center visibility-hidden"
              >
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
            </td>
            <td class="b-top b-btm v-align-top pad-3">
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div
                class="flex-center-1 height-14-29 flex-center visibility-hidden"
              >
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
            </td>
            <td class="b-top b-btm b-right v-align-top pad-3">
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div
                class="flex-center-1 height-14-29 flex-center visibility-hidden"
              >
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
              <div class="flex-center-1 height-14-29 flex-center">
                <input type="checkbox" />
              </div>
            </td>
          </tr>
        </table>
        <div class="flex gap-5">
          <div class="w-50">
            <div class="pad-3">
              <div class="flex">
                <div class="flex-center-1 gap-5 w-90">
                  <div
                    class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                  >
                    21
                  </div>
                  <div class="f-bold c-green">Equipment Interventions:</div>
                  <div class="c-green gamay">
                    <b class="c-green gamay">A</b>ssess/<b class="c-green gamay"
                      >P</b
                    >erform/<b class="c-green gamay">I</b>nstruct Pt/Cg:
                  </div>
                </div>
                <div class="flex-center-align gap-8">
                  <div class="f-bold c-green w-20">A</div>
                  <div class="f-bold c-green w-20">P</div>
                  <div class="f-bold c-green w-20">I</div>
                </div>
              </div>
              <div class="flex gap-5">
                <div class="w-90">
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Use of equipment
                  </div>
                </div>
                <div>
                  <div class="flex gap-2">
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-50">
            <div class="pad-3">
              <div class="flex">
                <div class="flex-center-1 gap-5 w-90 visibility-hidden">
                  <div
                    class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
                  >
                    21
                  </div>
                  <div class="f-bold c-green">Spiritual Need Interventions</div>
                  <div class="c-green">
                    <b class="c-green">A</b>ssess/<b class="c-green">P</b
                    >erform/<b class="c-green">I</b>nstruct Pt/Cg:
                  </div>
                </div>
              </div>
              <div class="flex gap-5">
                <div class="w-90">
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Other (specify):
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="flex-center-1 gap-5">
          <div
            class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
          >
            21
          </div>
          <div class="bg-violet flex-grow-1 pad-5 br-10 c-white">
            ORDERS FOR DISCIPLINE AND TREATMENTS
          </div>
        </div>
        <div class="flex gap-5">
          <div class="w-50 pad-3">
            <div class="flex-center-1 c-green">
              <input type="checkbox" /> SN visit frequency
              <div class="border b-b flex-grow-1 w-10">
                <input type="text" class="w-100" />
              </div>
              and
              <div class="border b-b flex-grow-1 w-10">
                <input type="text" class="w-100" />
              </div>
              PRN for changes
            </div>
            <div class="flex-center-1 c-green">
              <input type="checkbox" class="visibility-hidden" /> in status
              within
              <div class="border b-b flex-grow-1">
                <input type="text" class="w-100" />
              </div>
              period of time
            </div>
            <div class="flex-top c-green text-justify">
              <input type="checkbox" /> Assess VS & all body systems, knowledge
              of disease process and its associated care and treatmet, med
              regimen knowledge, and S/S
            </div>
            <div class="flex-center-1 c-green">
              <input type="checkbox" /> Assess/manage pain and discomfort and
              provide symptom relief
            </div>
          </div>
          <div class="w-50 pad-3">
            <div class="flex-top c-green text-justify">
              <input type="checkbox" /> Implement and Instruct Medication
              Regimen, including dosage, side effects, name, route, frequency,
              desired action, adverse reactions, and medication compliance/med
              set-up
            </div>
            <div class="flex-center-1 c-green">
              <input type="checkbox" /> Patient/Caregiver may administer
              medications
            </div>
            <div class="flex-center-1 c-green">
              <input type="checkbox" /> RN may perform pronouncement of death
            </div>
            <div class="flex-center-1 c-green">
              <input type="checkbox" /> Other (specify):
              <div class="border b-b flex-grow-1">
                <input type="text" class="w-100" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page">
        <div class="flex-center-1 c-green pad-3">
          <input type="checkbox" /> Aide visit frequency
          <div class="border b-b flex-grow-1">
            <input type="text" class="w-100" />
          </div>
          to assist w/personal care/ADLs/light houseeeping as needed within
          <div class="border b-b flex-grow-1">
            <input type="text" class="w-100" />
          </div>
          period of time
        </div>
        <div class="flex gap-5">
          <div class="w-50 pad-3">
            <div class="flex-center-1 c-green">
              <input type="checkbox" /> PT visit frequency
              <div class="border b-b flex-grow-1 w-10">
                <input type="text" class="w-100" />
              </div>
              within
              <div class="border b-b flex-grow-1 w-10">
                <input type="text" class="w-100" />
              </div>
              period of time
            </div>
            <div class="flex-center-1 c-green">
              <input type="checkbox" /> PT to consult, evaluate and treat
            </div>
            <div class="flex-center-1 c-green">
              <input type="checkbox" /> OT visit frequency
              <div class="border b-b flex-grow-1 w-10">
                <input type="text" class="w-100" />
              </div>
              within
              <div class="border b-b flex-grow-1 w-10">
                <input type="text" class="w-100" />
              </div>
              period of time
            </div>
            <div class="flex-center-1 c-green">
              <input type="checkbox" /> OT to consult, evaluate and treat
            </div>
            <div class="flex-center-1 c-green">
              <input type="checkbox" /> ST visit frequency
              <div class="border b-b flex-grow-1 w-10">
                <input type="text" class="w-100" />
              </div>
              within
              <div class="border b-b flex-grow-1 w-10">
                <input type="text" class="w-100" />
              </div>
              period of time
            </div>
            <div class="flex-center-1 c-green">
              <input type="checkbox" /> ST to consult, evaluate and treat
            </div>
          </div>
          <div class="w-50 pad-3">
            <div class="flex-center-1 c-green">
              <input type="checkbox" /> SW to evaluate and assess for needs
              <div class="border b-b flex-grow-1 w-10">
                <input type="text" class="w-100" />
              </div>
              times per month and
            </div>
            <div class="flex-center-1 c-green">
              <input type="checkbox" class="visibility-hidden" /> PRN for
              counseling within
              <div class="border b-b flex-grow-1 w-10">
                <input type="text" class="w-100" />
              </div>
              period of time
            </div>
            <div class="flex-center-1 c-green">
              <input type="checkbox" /> Dietary counseling PRN within
              <div class="border b-b flex-grow-1 w-10">
                <input type="text" class="w-100" />
              </div>
              period of time
            </div>
            <div class="flex-center-1 c-green">
              <input type="checkbox" /> Voluneer for respite PRN within
              <div class="border b-b flex-grow-1 w-10">
                <input type="text" class="w-100" />
              </div>
              period of time
            </div>
            <div class="flex-center-1 c-green">
              <input type="checkbox" /> Spiritual Care Coordinator visit
              frequency
              <div class="border b-b flex-grow-1 w-10">
                <input type="text" class="w-100" />
              </div>
              and PRN for
            </div>
            <div class="flex-center-1 c-green">
              <input type="checkbox" class="visibility-hidden" /> spiritual
              support within
              <div class="border b-b flex-grow-1 w-10">
                <input type="text" class="w-100" />
              </div>
              period of time
            </div>
          </div>
        </div>
        <div class="flex c-green pad-3">
          Additional Orders (specify):
          <div class="border b-b flex-grow-1 w-10">
            <input type="text" class="w-100" />
          </div>
        </div>
        <div class="flex-center-1 gap-5">
          <div
            class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
          >
            22
          </div>
          <div class="bg-violet flex-grow-1 pad-5 br-10 c-white">
            GOALS/OUTCOMES
          </div>
        </div>
        <div class="container">
          <div class="content">
            <table>
              <tr class="b-right b-left">
                <td style="border-left: none; border-right: none" class="pad-3">
                  <b class="c-green">TERMINAL CARE/IMPENDING DEATH:</b>
                </td>
                <td
                  style="border-left: none; border-right: none"
                  class="b-none flex-center-1 v-align-middle pad-3 c-green"
                >
                  <input type="checkbox" /> Caregiver/Family will understand
                  signs and symptoms of dying process prior to patient's death
                </td>
              </tr>
              <tr class="b-right b-left">
                <td style="border-left: none; border-right: none" class="pad-3">
                  <b class="c-green">VOLUNTER SERVICES:</b>
                </td>
                <td
                  style="border-left: none; border-right: none"
                  class="pad-3 c-green"
                >
                  <div class="flex-center-1 c-green">
                    <input type="checkbox" /> Patient/Caregiver will receive
                    requested volunteer service within
                    <div class="border b-b flex-grow-1 w-10">
                      <input type="text" class="w-100" />
                    </div>
                    days of request
                  </div>
                </td>
              </tr>
              <tr class="b-right b-left">
                <td style="border-left: none; border-right: none" class="pad-3">
                  <b class="c-green">CAREGIVER RELIEF:</b>
                </td>
                <td style="border-left: none; border-right: none" class="pad-3">
                  <p class="flex c-green">
                    <input type="checkbox" /> Caregiver will receive sufficient
                    rest during patient's terminal illness
                  </p>
                </td>
              </tr>
              <tr class="b-right b-left">
                <td
                  style="border-left: none; border-right: none"
                  class="v-align-top pad-3"
                >
                  <p><b>NEUROLOGICAL</b></p>
                </td>
                <td style="border-left: none; border-right: none" class="pad-3">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Seizures will be controled
                    <input type="checkbox" /> during care
                    <input type="checkbox" /> within
                    <div class="border b-b flex-grow-1 w-10">
                      <input type="text" class="w-100" />
                    </div>
                    period of time
                  </div>
                  <p class="flex">
                    <input type="checkbox" /> Patient will remain safe from
                    injury during seizure activity
                  </p>
                </td>
              </tr>
              <tr class="b-right b-left">
                <td style="border-left: none; border-right: none" class="pad-3">
                  <p><b>MOBILITY</b></p>
                </td>
                <td style="border-left: none; border-right: none" class="pad-3">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Patient will maintain optimal
                    mobility <input type="checkbox" /> during care
                    <input type="checkbox" /> within
                    <div class="border b-b flex-grow-1 w-10">
                      <input type="text" class="w-100" />
                    </div>
                    period of time
                  </div>
                </td>
              </tr>
              <tr class="b-right b-left">
                <td style="border-left: none; border-right: none" class="pad-3">
                  <p><b>ADL:</b></p>
                </td>
                <td style="border-left: none; border-right: none" class="pad-3">
                  <p class="flex">
                    <input type="checkbox" /> Optimal hygiene will be maintained
                    during care
                  </p>
                </td>
              </tr>
              <tr class="b-right b-left">
                <td style="border-left: none; border-right: none" class="pad-3">
                  <p><b>FALL PREVENTION:</b></p>
                </td>
                <td style="border-left: none; border-right: none" class="pad-3">
                  <p class="flex">
                    <input type="checkbox" />Fall prevention will be maintained
                    during care
                  </p>
                </td>
              </tr>
              <tr class="b-right b-left">
                <td style="border-left: none; border-right: none" class="pad-3">
                  <p><b>PAIN:</b></p>
                </td>
                <td style="border-left: none; border-right: none" class="pad-3">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Patient's pain will remain
                    comfortable level <input type="checkbox" /> during care
                    <input type="checkbox" /> within
                    <div class="border b-b flex-grow-1 w-10">
                      <input type="text" class="w-100" />
                    </div>
                    period of time
                  </div>
                </td>
              </tr>
              <tr class="b-right b-left">
                <td style="border-left: none; border-right: none" class="pad-3">
                  <p><b>GENERAL INPATIENT CARE:</b></p>
                </td>
                <td style="border-left: none; border-right: none" class="pad-3">
                  <p class="flex">
                    <input type="checkbox" /> Patient will receive optimal level
                    of pain and/or symptom management on short-term basis
                  </p>
                </td>
              </tr>
              <tr class="b-right b-left">
                <td style="border-left: none; border-right: none" class="pad-3">
                  <p><b>INTEGUMENTARY</b></p>
                </td>
                <td style="border-left: none; border-right: none" class="pad-3">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Skin integreity will be maintained
                    <input type="checkbox" /> during care
                    <input type="checkbox" /> within
                    <div class="border b-b flex-grow-1 w-10">
                      <input type="text" class="w-100" />
                    </div>
                    period of time
                  </div>
                </td>
              </tr>
              <tr class="b-right b-left">
                <td
                  style="border-left: none; border-right: none"
                  class="v-align-top pad-3"
                >
                  <p><b>CARDIO/RESPIRATORY:</b></p>
                </td>
                <td style="border-left: none; border-right: none" class="pad-3">
                  <p class="flex">
                    <input type="checkbox" /> Patient/Caregiver will receive
                    optimal teaching and support as cardiac and pulmonary
                    functions change during care
                  </p>
                  <p class="flex">
                    <input type="checkbox" /> Patient/Caregiver will demonstrate
                    proper and safe use of oxygen and set-up
                  </p>
                  <div class="flex-center-1 gamay">
                    <input type="checkbox" /> Patient/Caregiver will verbalize
                    understanding of medicatins and treatments
                    <input type="checkbox" /> during care
                    <input type="checkbox" /> within
                    <div class="border b-b flex-grow-1 w-10">
                      <input type="text" class="w-100" />
                    </div>
                    period of time
                  </div>
                </td>
              </tr>
              <tr class="b-right b-left">
                <td
                  style="border-left: none; border-right: none"
                  class="v-align-top pad-3"
                >
                  <p><b>RENAL/GENITOURINARY:</b></p>
                </td>
                <td style="border-left: none; border-right: none" class="pad-3">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Skin will be maintained at optimal
                    level <input type="checkbox" /> during care
                    <input type="checkbox" /> within
                    <div class="border b-b flex-grow-1 w-10">
                      <input type="text" class="w-100" />
                    </div>
                    period of time
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Patient will be free of urinary
                    tract infection <input type="checkbox" /> during care
                    <input type="checkbox" /> within
                    <div class="border b-b flex-grow-1 w-10">
                      <input type="text" class="w-100" />
                    </div>
                    period of time
                  </div>
                </td>
              </tr>
              <tr class="b-right b-left">
                <td
                  style="border-left: none; border-right: none"
                  class="v-align-top pad-3"
                >
                  <p><b>ENDOCRINE:</b></p>
                </td>
                <td style="border-left: none; border-right: none" class="pad-3">
                  <div class="flex-center-1 gamay">
                    <input type="checkbox" /> Patient's blood sugar level will
                    be maintained at optimal level for patient's illness
                    <input type="checkbox" /> during care
                    <input type="checkbox" /> within
                    <div class="border b-b flex-grow-1 w-10">
                      <input type="text" class="w-100" />
                    </div>
                    period of time
                  </div>
                  <div class="flex-center-1 gamay">
                    <input type="checkbox" /> Patient's neuropathy/radiculopathy
                    will be managed with medications
                    <input type="checkbox" /> during care
                    <input type="checkbox" /> within
                    <div class="border b-b flex-grow-1 w-10">
                      <input type="text" class="w-100" />
                    </div>
                    period of time
                  </div>
                </td>
              </tr>
              <tr class="b-right b-left">
                <td
                  style="border-left: none; border-right: none"
                  class="v-align-top pad-3"
                >
                  <p><b>GASTROINTESTINAL:</b></p>
                </td>
                <td style="border-left: none; border-right: none" class="pad-3">
                  <div class="flex">
                    <input type="checkbox" /> Patient's nausea/vomiting will be
                    controlled within
                    <div class="border b-b flex-grow-1 w-10">
                      <input type="text" class="w-100" />
                    </div>
                    period of time
                  </div>
                  <div class="flex-center-1 gamay">
                    <input type="checkbox" class="" /> Optimal
                    Nutrition/hydration will be achieved based on patient
                    conditions and/or desires <input type="checkbox" /> during
                    care <input type="checkbox" /> within
                    <div class="border b-b flex-grow-1 w-10">
                      <input type="text" class="w-100" />
                    </div>
                    period of time
                  </div>
                  <div class="flex">
                    <input type="checkbox" /> Patient/Caregiver will demonstrate
                    ability to manage bowel routine within
                    <div class="border b-b flex-grow-1 w-10">
                      <input type="text" class="w-100" />
                    </div>
                    period of time
                  </div>
                  <div class="flex-center-1 gamay">
                    <input type="checkbox" /> Patient will maintain optimal
                    swallowig, and patient/caregiver understands risk
                    <input type="checkbox" /> during care
                    <input type="checkbox" /> within
                    <div class="border b-b flex-grow-1 w-10">
                      <input type="text" class="w-100" />
                    </div>
                    period of time
                  </div>
                </td>
              </tr>
              <tr class="b-right b-left">
                <td
                  style="border-left: none; border-right: none"
                  class="v-align-top pad-3"
                >
                  <p><b>PSYCHOLOGICAL/MENTAL/EMOTIONAL:</b></p>
                </td>
                <td style="border-left: none; border-right: none" class="pad-3">
                  <div class="flex">
                    <input type="checkbox" /> Care giver will demonstrate
                    ability to mange bowel routine within
                    <div class="border b-b flex-grow-1 w-10">
                      <input type="text" class="w-100" />
                    </div>
                    period of time
                  </div>
                  <div class="flex">
                    <input type="checkbox" /> Patient will be maintained in safe
                    environment <input type="checkbox" /> during care
                    <input type="checkbox" /> within
                    <div class="border b-b flex-grow-1 w-10">
                      <input type="text" class="w-100" />
                    </div>
                    period of time
                  </div>
                  <div class="flex">
                    <input type="checkbox" /> Patient's agitation will be
                    controlled to a manageable level within
                    <div class="border b-b flex-grow-1 w-10">
                      <input type="text" class="w-100" />
                    </div>
                    period of time
                  </div>
                  <div class="flex">
                    <input type="checkbox" /> Patient will demonstrate or report
                    a decrease in axiety level <input type="checkbox" /> during
                    care <input type="checkbox" /> within
                    <div class="border b-b flex-grow-1 w-10">
                      <input type="text" class="w-100" />
                    </div>
                    period of time
                  </div>
                </td>
              </tr>
              <tr class="b-right b-left">
                <td style="border-left: none; border-right: none" class="pad-3">
                  <p><b>BEREAVEMENT</b></p>
                </td>
                <td style="border-left: none; border-right: none" class="pad-3">
                  <div class="flex">
                    <input type="checkbox" /> Patient/Caregiver will achieve
                    optimal grief reaction prior to patient's death
                  </div>
                </td>
              </tr>
              <tr class="b-right b-left">
                <td style="border-left: none; border-right: none" class="pad-3">
                  <p><b>SPIRITUAL</b></p>
                </td>
                <td style="border-left: none; border-right: none" class="pad-3">
                  <div class="flex">
                    <input type="checkbox" />Spiritual needs will met as
                    determined by patiend/caregiver
                    <input type="checkbox" /> during care
                    <input type="checkbox" /> within
                    <div class="border b-b flex-grow-1 w-10">
                      <input type="text" class="w-100" />
                    </div>
                    period of time
                  </div>
                </td>
              </tr>
              <tr class="b-right b-left">
                <td
                  style="border-left: none; border-right: none"
                  class="v-align-top pad-3"
                >
                  <p><b>MEDICATIONS</b></p>
                </td>
                <td style="border-left: none; border-right: none" class="pad-3">
                  <div class="flex">
                    <input type="checkbox" /> Patient will receive prescribed
                    medications at correct times (see Medication Profile)
                  </div>
                  <div class="flex">
                    <input type="checkbox" /> Patient/Caregiver safely
                    administers drugs and biologicals during care
                  </div>
                </td>
              </tr>
              <tr class="b-right b-left">
                <td style="border-left: none; border-right: none" class="pad-3">
                  <p><b>EQUIPMENT</b></p>
                </td>
                <td
                  style="border-left: none; border-right: none"
                  class="flex b-none pad-3"
                >
                  <input type="checkbox" /> Patient's/Caregiver will receive
                  equipment and demonstrate use at time of equipment set-up
                </td>
              </tr>
              <tr class="b-right b-left">
                <td
                  style="border-left: none; border-right: none"
                  class="v-align-top pad-3"
                >
                  <p><b>OTHER:</b></p>
                </td>
                <td style="border-left: none; border-right: none" class="pad-3">
                  <div class="flex">
                    <input type="checkbox" />
                    Other(specify):
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                  <div class="flex b-none">
                    <input type="checkbox" />
                    Other(specify):
                    <div class="border b-b flex-grow-1">
                      <input type="text" class="w-100" />
                    </div>
                  </div>
                </td>
              </tr>
            </table>
          </div>
        </div>
        <div class="bg-purple">
          <b>SERVICES PROVIDED THIS VISIT AND PATIENT RESPONSE:</b>
        </div>
        <div class="border b-b"><input type="text" class="w-100" /></div>
        <div class="border b-b"><input type="text" class="w-100" /></div>
        <div class="border b-b"><input type="text" class="w-100" /></div>
        <div class="border b-b"><input type="text" class="w-100" /></div>
        <div class="border b-b"><input type="text" class="w-100" /></div>
        <div class="border b-b"><input type="text" class="w-100" /></div>
        <div class="border b-b"><input type="text" class="w-100" /></div>
        <div class="border b-b"><b>PROGNOSIS</b></div>
        <div class="border b-b">
          <div class="flex-center-1 gap-10">
            Does the patient know diagnosis?
            <input type="checkbox" /> Yes <input type="checkbox" /> No
          </div>
        </div>
        <div class="border b-b">
          <div class="flex gap-10">
            Extent of metastatic disease at firs Hospice contact:
            <div class="flex-center-1"><input type="checkbox" /> Local</div>
            <div class="flex-center-1"><input type="checkbox" /> Regional</div>
            <div class="flex-center-1">
              <input type="checkbox" /> Widespread
            </div>
            <div class="flex-center-1"><input type="checkbox" /> N/A</div>
          </div>
        </div>
        <div class="border b-b bg-purple">
          <b>Plan of Care established with (care coordination)</b>
        </div>
        <div class="flex">
          Medical Director
          <div class="border b-b flex-grow-1">
            <input type="text" class="w-100" />
          </div>
        </div>
        <div class="flex">
          Social Worker
          <div class="border b-b flex-grow-1">
            <input type="text" class="w-100" />
          </div>
        </div>
        <div class="flex">
          Attending MD:
          <div class="border b-b flex-grow-1">
            <input type="text" class="w-100" />
          </div>
        </div>
        <div>
          <table>
            <tr>
              <td class="pad-3 bg-violet-1">
                <div>
                  <b>Patient signature</b> (optional per Hospice policy &
                  procedure)
                </div>
                <div>
                  <input type="text" class="w-100" />
                </div>
              </td>
              <td class="pad-3 bg-violet-1 w-40">
                <div>
                  <b>Patient name</b>
                </div>
                <div>
                  <input type="text" class="w-100" />
                </div>
              </td>
              <td class="pad-3 bg-violet-1">
                <div>
                  <b>Record No.</b>
                </div>
                <div>
                  <input type="text" class="w-100" />
                </div>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="page">
        <div class="flex bg-green-1 pad-3">
          <div class="flex-center-1">
            <div
              class="border width-10 height-10 flex-center-align bg-green c-green pad-5"
            >
              23
            </div>
            <b class="c-green">Nursing Signature/Discipline and Date:</b>
          </div>
          <div class="flex-grow-1">
            <input type="text" class="w-100" />
          </div>
        </div>
        <div class="flex-grow-1 bg-green-1 pad-3">
          <input type="text" class="w-100" />
        </div>
        <div class="bg-violet c-white pad-5 br-10 text-center">
          HOSPICE PROVIDER USE ONLY
        </div>
        <div class="bg-purple">
          <b>HIS SECTION Z - RECORD ADMINISTRATION - </b>Filled Out Per Agency
          Policy by Person(s) completing the HIS record on the QIES ASAP Systemp
        </div>
        <div class="flex pad-3">
          <div
            class="border br-3 flex-center-align f-bold c-violet bg-violet-1 width-30"
          >
            Z0400
          </div>
          <b>Signature(s) of Person(s) Completing the Record</b>
        </div>
        <div class="pad-3 text-justify">
          I certify that the accompanying information accurately reflects
          patient information for this patient and that I collected or
          coordinated collection of this information on the dates specified. To
          the best of my knowledge, this information was collected in accordance
          with applicable Medicare and Medicaid requirements. I understand that
          reporting this information is used as a basis for payment from federal
          funds. I further understand that failure to report such information
          may lead to a 2 percentage point reduction in this Fiscal Year payment
          determination. I also certify that I am authorized to submit this
          information by this provider on its behalf.
        </div>
        <table>
          <tr class="b-left b-right">
            <td class="b-left text-center w-50"><b>Signature</b></td>
            <td class="text-center f-bold width-125">Title</td>
            <td class="text-center f-bold w-15">Sections</td>
            <td class="b-right text-center f-bold w-20">
              Date Section Completed
            </td>
          </tr>
          <tr class="b-left b-right">
            <td class="b-left">
              <div class="flex">
                <b>A.</b>
                <input type="text" class="w-100" />
              </div>
            </td>
            <td>
              <input type="text" class="w-100" />
            </td>
            <td>
              <input type="text" class="w-100" />
            </td>
            <td class="b-right">
              <input type="text" class="w-100" />
            </td>
          </tr>
          <tr class="b-left b-right">
            <td class="b-left">
              <div class="flex">
                <b>B.</b>
                <input type="text" class="w-100" />
              </div>
            </td>
            <td>
              <input type="text" class="w-100" />
            </td>
            <td>
              <input type="text" class="w-100" />
            </td>
            <td class="b-right">
              <input type="text" class="w-100" />
            </td>
          </tr>
          <tr class="b-left b-right">
            <td class="b-left">
              <div class="flex">
                <b>C.</b>
                <input type="text" class="w-100" />
              </div>
            </td>
            <td>
              <input type="text" class="w-100" />
            </td>
            <td>
              <input type="text" class="w-100" />
            </td>
            <td class="b-right">
              <input type="text" class="w-100" />
            </td>
          </tr>
          <tr class="b-left b-right">
            <td class="b-left">
              <div class="flex">
                <b>D.</b>
                <input type="text" class="w-100" />
              </div>
            </td>
            <td>
              <input type="text" class="w-100" />
            </td>
            <td>
              <input type="text" class="w-100" />
            </td>
            <td class="b-right">
              <input type="text" class="w-100" />
            </td>
          </tr>
          <tr class="b-left b-right">
            <td class="b-left">
              <div class="flex">
                <b>E.</b>
                <input type="text" class="w-100" />
              </div>
            </td>
            <td>
              <input type="text" class="w-100" />
            </td>
            <td>
              <input type="text" class="w-100" />
            </td>
            <td class="b-right">
              <input type="text" class="w-100" />
            </td>
          </tr>
          <tr class="b-left b-right">
            <td class="b-left">
              <div class="flex">
                <b>F.</b>
                <input type="text" class="w-100" />
              </div>
            </td>
            <td>
              <input type="text" class="w-100" />
            </td>
            <td>
              <input type="text" class="w-100" />
            </td>
            <td class="b-right">
              <input type="text" class="w-100" />
            </td>
          </tr>
          <tr class="b-left b-right">
            <td class="b-left">
              <div class="flex">
                <b>G.</b>
                <input type="text" class="w-100" />
              </div>
            </td>
            <td>
              <input type="text" class="w-100" />
            </td>
            <td>
              <input type="text" class="w-100" />
            </td>
            <td class="b-right">
              <input type="text" class="w-100" />
            </td>
          </tr>
          <tr class="b-left b-right">
            <td class="b-left">
              <div class="flex">
                <b>H.</b>
                <input type="text" class="w-100" />
              </div>
            </td>
            <td>
              <input type="text" class="w-100" />
            </td>
            <td>
              <input type="text" class="w-100" />
            </td>
            <td class="b-right">
              <input type="text" class="w-100" />
            </td>
          </tr>
          <tr class="b-left b-right">
            <td class="b-left">
              <div class="flex">
                <b>I.</b>
                <input type="text" class="w-100" />
              </div>
            </td>
            <td>
              <input type="text" class="w-100" />
            </td>
            <td>
              <input type="text" class="w-100" />
            </td>
            <td class="b-right">
              <input type="text" class="w-100" />
            </td>
          </tr>
          <tr class="b-left b-right">
            <td class="b-left">
              <div class="flex">
                <b>J.</b>
                <input type="text" class="w-100" />
              </div>
            </td>
            <td>
              <input type="text" class="w-100" />
            </td>
            <td>
              <input type="text" class="w-100" />
            </td>
            <td class="b-right">
              <input type="text" class="w-100" />
            </td>
          </tr>
          <tr class="b-left b-right">
            <td class="b-left">
              <div class="flex">
                <b>K.</b>
                <input type="text" class="w-100" />
              </div>
            </td>
            <td>
              <input type="text" class="w-100" />
            </td>
            <td>
              <input type="text" class="w-100" />
            </td>
            <td class="b-right">
              <input type="text" class="w-100" />
            </td>
          </tr>
          <tr class="b-left b-right">
            <td class="b-left">
              <div class="flex">
                <b>L.</b>
                <input type="text" class="w-100" />
              </div>
            </td>
            <td>
              <input type="text" class="w-100" />
            </td>
            <td>
              <input type="text" class="w-100" />
            </td>
            <td class="b-right">
              <input type="text" class="w-100" />
            </td>
          </tr>
        </table>
        <div class="border b-b">
          <div class="flex pad-3 gap-10">
            <div
              class="border br-3 flex-center-align f-bold c-violet bg-violet-1 width-30"
            >
              Z0500
            </div>
            <b>Signature of Person Verifying Record Completion</b>
          </div>
          <div class="flex gap-20 pad-3">
            <div class="w-70">
              <b>A. Signature:</b>
              <div class="border b-b"><input type="text" class="w-100" /></div>
            </div>
            <div class="w-30">
              <b>B. Date</b>
              <div class="flex">
                <div class="flex">
                  <div><input type="text" class="width-30 text-center" />/</div>
                  <div><input type="text" class="width-30 text-center" />/</div>
                  <div>
                    <input type="text" class="width-30 text-center" />
                  </div>
                </div>
                <div>
                  <i class="wala">(Month/Day/Year)</i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
