<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hospice RN Recertification</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
  font-size: 10px;
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
.text{
  width: 40px;
  height: 13px;
}
.text-1{
  width: 90px;
  height: 13px;
}
.input {
  border: none;
  outline: none;
  height: 25px;
  width: 200px;
}
input[type="radio"] {
  height: 8px;
}
input[type="checkbox"]{
  /* height: 10px; */
  width: 10px;
}
input[type="text1"]{
  outline: none;
  width: 100%;
  height: 30px;
}
input[type='text'] {
  outline: none;
}
.grid-container{
  display: grid;
  grid-template-columns: 500px;
  gap: 3px;
}
label{
  width: 500px;
  display: inline-block;
}
.oks{
  display: grid;
  grid-template-columns: 1fr .2fr .4fr;
}
.okss{
  display: grid;
  grid-template-columns: repeat(3, 1fr);
}
.grid{
  display: grid;
  grid-template-columns: 1fr .3fr;
}
.grid-item{
  border: 1px solid black; 
  
}
.grid-item-2{
  grid-column: 2;
  grid-row: 1 / span 2;
}

.flex .border{
  flex-grow: 1;
}
.items{
  width: 115px;
}
html{
  zoom: 175%;
}
.samok{
  margin-left: 32px;
}
.waoi{
  margin-left: 9px;
}
.wa{
  width: 199.06px;
}
.explain{
  width: 89%;
}
@media print{
  html{
    zoom: 100%;
  }
}
table{
  width: 100%;
  border-collapse: collapse;
}
tr,td {
  border: 1px solid black;
}
.grid-braden{
  display: grid;
  grid-template-columns: repeat(5, 130px);
  column-gap: 5px;
}
.img img {
  width: 300px;
  object-fit: contain;
}
.hidden{
  visibility: hidden;
}

/* pad */
.pad-3{
  padding: 3px;
}
.pad-5 {
  padding: 5px;
}
.gap-5{
  gap: 5px;
}
.m-top-3{
  margin-top: 3px;
}
.bg-grey {
  background: #e5dfeb
}
.bg-grey-1{
  background-color: #f5f6f6;
}
.bg-blue {
  background: #cac9f1;
}
.bg-green {
  background: #a1c571;
}
.bg-violet {
  background: #cdbee6;
}
.inline-block {
  display: inline-block;
}
.f-bold {
  font-weight: bold;
}
.outline-none{
  outline: none;
}
/* flex */
.flex {
  display: flex;
}
.flex-between {
  display: flex;
  justify-content: space-between;
}
.flex-around{
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
.flex-center-1 {
  display: flex;
  align-items: center;
}
.flex-center-align {
  display: flex;
  justify-content: center;
  align-items: center;
}
.flex-top{
  display: flex;
  align-items: flex-start;
}
.flex-grow-1{
  flex-grow: 1;
}
.inline-block {
  display: inline-block;
}
.inline{
  display: inline;
}
.flex-end {
  display: flex;
  align-items: flex-end;
}
/*border*/
.border {
  border: 1px solid black;
}
/* width */
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
.w-55{
  width: 55%;
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
.width-5 {
  width: 5px;
}
.width-10 {
  width: 10px;
}
.width-15{
  width: 15px;
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
.h-10 {
  height: 10%;
}
.h-20 {
  height: 20%;
}
.h-30 {
  height: 30%;
}
.h-40 {
  height: 40%;
}
.h-50 {
  height: 50%;
}
.h-55{
  height: 55%;
}
.h-60 {
  height: 60%;
}
.h-70 {
  height: 70%;
}
.h-80 {
  height: 80%;
}
.h-90 {
  height: 90%;
}
.h-100 {
  height: 100%;
}
.height-inherit{
  height: inherit;
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
.bg-white{
  background: #fff;
}
.bg-none{
  border: none;
}
.none-1{
  border: 0;
}
.text-center{
  text-align: center;
}
.text-justify{
  text-align: justify;
}
.text-right{
  text-align: right;
}
.text-left{
  text-align: left;
}
.text-justify{
  text-align: justify;
}
.align-top{
  align-items: start;
}

    </style>
  </head>
  <body>
    <div class="container">
      <div class="page">
        <div class="bg-grey">
          <div class="flex-between flex-center-1 pad-5">
            <p class="f-bold" style="font-size: 15px">RN Recertification</p>
            <div class="">
              <p class="f-bold inline-block">Clinician:</p>
              <input type="text" class="input" />
            </div>
          </div>
        </div>
        <div class="grid-container m-top-3">
          <div class="grid-item grid-item-1">
            <div class="oks">
              <div class="grid-item item-1 b-top b-left b-btm f-bold">
                Patient Name (Last Name, First Name) & MRN:
                <input type="text" class="w-100 bg-none" />
              </div>
              <div class="griditem item-2 b-top b-left b-btm f-bold">
                Mileage:
                <input type="text" class="w-100 bg-none" />
              </div>
              <div class="grid-item item-3 b-top b-btm b-right f-bold">
                Gender
                <div class="flex-around">
                  <div class="flex"><input type="checkbox" />M</div>
                  <div class="flex"><input type="checkbox" />F</div>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-item grid-item-2 f-bold">
            Agency Name/Branch <input type="text" class="w-100 bg-none" /><input
              type="text"
              class="w-100 bg-none"
            /><input type="text" class="w-100 bg-none" />
          </div>
          <div class="grid-item grid-item-3">
            <div class="okss">
              <div
                class="grid-item b-top b-right b-btm b-left flex-center-1 f-bold"
              >
                <p>Date:</p>
                <br /><input type="text" class="w-20 bg-none text-center" />/
                <input type="text" class="w-20 bg-none text-center" />/
                <input type="text" class="w-20 bg-none text-center" />
              </div>
              <div class="grid-item b-top b-right b-btm f-bold">
                <p class="inline-block">Time In</p>
                &emsp; &emsp; &emsp; &emsp;
                <p class="inline-block">Time Out</p>
                <div class="flex">
                  <div><input type="text" class="w-100 bg-none" /></div>
                  <div><input type="text" class="w-100 bg-none" /></div>
                </div>
              </div>
              <div
                class="grid-item b-top b-right b-btm f-bold flex-center-1 f-bold"
              >
                <p>DOB:</p>
                <br />
                <input type="text" class="w-20 bg-none text-center" />/
                <input type="text" class="w-20 bg-none text-center" />/
                <input type="text" class="w-20 bg-none text-center" />
              </div>
            </div>
          </div>
        </div>
        <div class="border m-top-3">
          <div class="bg-blue f-bold pad-3">HCPS</div>
          <div class="flex">
            <label for=""
              >Select the hospice service type that reflects the primary reason
              for this visit:</label
            >
            Select The location where hospice services were provided:
          </div>
          <div class="flex">
            <div class="flex-center-align">
              <input type="checkbox" />
              <label for=""
                >(G0154) Direct skilled services of a licensed nurse</label
              >
            </div>
            <div class="flex-center-align">
              <input type="checkbox" /> (Q5001) Home
            </div>
          </div>
          <div class="flex">
            <div class="flex-center-align">
              <input type="checkbox" />
              <label for=""
                >(G0162) Management and evaluation of the plan of care</label
              >
            </div>
            <div class="flex-center-align">
              <input type="checkbox" /> (Q5002) Asisted Living Facility
            </div>
          </div>
          <div class="flex">
            <div class="flex-center-align">
              <input type="checkbox" />
              <label for=""
                >(G0163) (Retired 1/1/17) Observation and assessment of the
                patients condition</label
              >
            </div>
            <div class="flex-center-align">
              <input type="checkbox" /> (Q5003) LTC or non-skilled NF
            </div>
          </div>
          <div class="flex">
            <div class="flex-center-align">
              <input type="checkbox" />
              <label for=""
                >(G0164) (Retired 1/1/17) Training and/or education of a patient
                or family member</label
              >
            </div>
            <div class="flex-center-align">
              <input type="checkbox" /> (Q5004) Skilled Nursing Facility
            </div>
          </div>
          <div class="flex">
            <div class="flex-center-align">
              <input type="checkbox" />
              <label for=""
                >(G0299) Direct skilled nursing servicesof an RN</label
              >
            </div>
            <div class="flex-center-align">
              <input type="checkbox" /> (Q5005) Inpatient Hospital
            </div>
          </div>
          <div class="flex">
            <div class="flex-center-align">
              <input type="checkbox" />
              <label for=""
                >(G0300) Direct skilled nursing services of an LPN</label
              >
            </div>
            <div class="flex-center-align">
              <input type="checkbox" /> (Q5006) Inpatient Hospice Facility
            </div>
          </div>
          <div class="flex">
            <div class="flex-center-align">
              <input type="checkbox" />
              <label for=""
                >(G0493) (RN) - Observation and assessment of the patient's
                condition</label
              >
            </div>
            <div class="flex-center-align">
              <input type="checkbox" /> (Q5007) Long Term Care Hospital
            </div>
          </div>
          <div class="flex">
            <div class="flex-center-align">
              <input type="checkbox" />
              <label for=""
                >(G0494) (LPN) - Observation and assessment of the patient's
                condition</label
              >
            </div>
            <div class="flex-center-align">
              <input type="checkbox" /> (Q5008) Inpatient Psychiatric Facility
            </div>
          </div>
          <div class="flex">
            <div class="flex-center-align">
              <input type="checkbox" />
              <label for=""
                >(G0495) Skilled services of a (RN), in the training and/or
                education of a patient or family member</label
              >
            </div>
            <div class="flex-center-align">
              <input type="checkbox" /> (Q5009) Place Not Otherwise Specified
            </div>
          </div>
          <div class="flex">
            <div class="flex-center-align">
              <input type="checkbox" />
              <label for=""
                >(G0496) Skilled services of a (LPN), in the training and/or
                education of a patient or family member</label
              >
            </div>
            <div class="flex-center-align">
              <input type="checkbox" /> (Q5010) Hospice Facility
            </div>
          </div>
        </div>
        <p class="f-bold" style="font-size: 13px">Vital Signs/Diagnosis</p>
        <div class="border">
          <div class="bg-blue f-bold pad-3">Vital Signs</div>
          <div class="flex">
            <div class="border b-left b-top b-btm width-40">
              <div class="f-bold">BP:</div>
              During
              <input type="text" class="text text-center" /> /
              <input type="text" class="text text-center" />
            </div>
            <div class="border b-top b-left b-btm">
              <div class="f-bold">Respirations:</div>
              During <input type="text" class="text-1 bg-none" />
            </div>
            <div class="border b-top b-left b-btm width-30">
              <div class="f-bold">Heart Rate:</div>
              During <input type="text" class="text-1 bg-none" />
            </div>
            <div class="border b-top b-left b-right b-btm">
              <br />
              <div class="flex-around flex-end">
                <div><input type="text" class="text" /></div>
                <div><input type="text" class="text" /></div>
              </div>
            </div>
          </div>
          <div class="grid">
            <div class="grid-item b-btm b-right b-left flex pad-3">
              <div class="f-bold">
                <div class="">
                  O2 Sat: <br />
                  During <input type="text" class="text" />
                </div>
              </div>
              <div class="inline-block items">
                <div class="flex-center-1">
                  <input type="checkbox" /> Room Air
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 02 @ 0.5 lpm
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 02 @ 1.0 lpm
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 02 @ 1.5 lpm
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 02 @ 2.0 lpm
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 02 @ 2.5 lpm
                </div>
              </div>
              <div class="inline-block items">
                <div class="flex-center-1">
                  <input type="checkbox" /> 02 @ 3.0 lpm
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 02 @ 3.5 lpm
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 02 @ 4.0 lpm
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 02 @ 4.5 lpm
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 02 @ 5.0 lpm
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 02 @ 6.0 lpm
                </div>
              </div>
              <div class="inline-block items">
                <div class="flex-center-1">
                  <input type="checkbox" /> 02 @ 7.0 lpm
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 02 @ 8.0 lpm
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 02 @ 9.0 lpm
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 02 @ 10.5 lpm
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 02 @ 11.0 lpm
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 02 @ 12.0 lpm
                </div>
              </div>
              <div class="inline-block items">
                <div class="flex-center-1">
                  <input type="checkbox" /> 02 @ 13.0 lpm
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 02 @ 14.0 lpm
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 02 @ 15.0 lpm
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> Other: see <br />
                  Comments
                </div>
              </div>
            </div>
            <div class="grid-item b-btm b-right pad-3">
              <b>Route:</b>
              <div class="flex-center-1">via <input type="checkbox" /> NC</div>
              <div class="flex-center-1">
                via <input type="checkbox" /> Mask
              </div>
              <div class="flex-center-1">
                via <input type="checkbox" /> Trach
              </div>
              <div class="flex-center-1">
                via <input type="checkbox" /> Other: see <br />
                comments
              </div>
            </div>
          </div>
          <div class="border b-left b-right b-btm pad-3">
            <b>Temperature:</b>
            <div class="flex">
              <input type="text" class="text" /> Taken &emsp;
              <div class="flex-center-align width-100">
                <input type="checkbox" /> Oral
              </div>
              <div class="flex flex-center-align width-100">
                <input type="checkbox" /> Axillary
              </div>
              <div class="flex-center-align width-100">
                <input type="checkbox" /> Rectal
              </div>
              <div class="flex-center-align width-100">
                <input type="checkbox" /> Temporal
              </div>
              <div class="flex-center-align width-100">
                <input type="checkbox" /> Otic
              </div>
            </div>
          </div>
          <div class="border b-left b-right b-btm bg-grey pad-3">
            Comments: <br />
            <input type="text1" />
          </div>
          <div class="border b-left b-right b-btm">
            <div class="bg-blue pad-3">
              <b>Height and Weight</b>
            </div>
            <div class="pad-3">
              <div class="flex">
                <div>
                  <div>
                    <div class="inline-block width-150">
                      Height (feet & inches)
                    </div>
                    <div class="inline-block width-150">
                      <input type="text" />
                    </div>
                  </div>
                  <div>
                    <div class="inline-block width-150">
                      Mid-am Circumference (MAC ) in cm
                    </div>
                    <div class="inline-block width-150">
                      <input type="text" />
                    </div>
                  </div>
                </div>
                <div>
                  <div>
                    <div class="inline-block">
                      Is the patient able to be weighted?
                    </div>
                    <div class="flex inline-block">
                      <input type="radio" /> Yes
                    </div>
                    <div class="flex inline-block">
                      <input type="radio" /> No
                    </div>
                    <div>
                      <div class="inline-block width-150">Weight (lbs)</div>
                      <div class="inline-block width-150">
                        <input type="text" />
                      </div>
                    </div>
                    <div>
                      <div class="inline-block width-150">
                        Body Mass Index (BMI)
                      </div>
                      <div class="inline-block width-150">
                        <input type="text" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="border pad-3 b-top">
          <div class="flex">
            <div>
              <div class="flex gap-5 flex-center-align">
                Reported Weight Changes
                <div class=""><input type="radio" /> Gain</div>
                <div class=""><input type="radio" /> Loss</div>
                <div class="inline-block">
                  <input type="text" class="text" />
                </div>
                <div class=""><input type="radio" /> Pound</div>
                <div class=""><input type="radio" /> Ounce</div>
                <div class="flex gap-5">
                  &emsp; in the past <input type="text" class="text" />
                </div>
              </div>
            </div>
            <div>
              <div>
                <div class="inline-block width-70">
                  <input type="radio" /> Days(s)
                </div>
                <div class="inline-block"><input type="radio" /> Weeks(s)</div>
              </div>
              <div>
                <div class="inline-block width-70">
                  <input type="radio" /> Months(s)
                </div>
                <div class="inline-block"><input type="radio" /> Years(s)</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page">
        <div class="bg-grey flex-between flex-center-1">
          <div class="f-bold">RN Recertification - Vital Signs/Diagnosis</div>
          <div>
            <table class="f-bold pad-5 bg-white">
              <tr>
                <td>
                  Patient Name (Last Name, First Name) & <br />
                  MRN: <input type="text" class="w-80 bg-none" />
                </td>
                <td class="width-150">
                  Date: <br />
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />
                </td>
              </tr>
            </table>
          </div>
        </div>
        <br />
        <table>
          <tr>
            <td class="bg-blue f-bold pad-3">
              Diagnosis Information at Admission (ICD-10)
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block width-100">Terminal Diagnosis</div>
              <div class="inline-block w-40">
                <input type="text" class="w-70" />
              </div>
              <div class="f-bold inline-block">
                Is this diagnosis related to terminal diagnosis
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block width-100">Comorbidity 1</div>
              <div class="inline-block w-55">
                <input type="text" class="wa" />
              </div>
              <div class="f-bold inline-block flex">
                <input type="checkbox" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block width-100">Comorbidity 2</div>
              <div class="inline-block w-55">
                <input type="text" class="wa" />
              </div>
              <div class="f-bold inline-block"><input type="checkbox" /></div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block width-100">Comorbidity 3</div>
              <div class="inline-block w-55">
                <input type="text" class="wa" />
              </div>
              <div class="f-bold inline-block"><input type="checkbox" /></div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block width-100">Comorbidity 4</div>
              <div class="inline-block w-55">
                <input type="text" class="wa" />
              </div>
              <div class="f-bold inline-block"><input type="checkbox" /></div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block width-100">Comorbidity 5</div>
              <div class="inline-block w-55">
                <input type="text" class="wa" />
              </div>
              <div class="f-bold inline-block"><input type="checkbox" /></div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block width-100">Comorbidity 6</div>
              <div class="inline-block w-55">
                <input type="text" class="wa" />
              </div>
              <div class="f-bold inline-block"><input type="checkbox" /></div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block width-100">Comorbidity 7</div>
              <div class="inline-block w-55">
                <input type="text" class="wa" />
              </div>
              <div class="f-bold inline-block"><input type="checkbox" /></div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block width-100">Comorbidity 8</div>
              <div class="inline-block w-55">
                <input type="text" class="wa" />
              </div>
              <div class="f-bold inline-block"><input type="checkbox" /></div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block width-100">Comorbidity 9</div>
              <div class="inline-block w-55">
                <input type="text" class="wa" />
              </div>
              <div class="f-bold inline-block"><input type="checkbox" /></div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block width-100">Comorbidity 10</div>
              <div class="inline-block w-55">
                <input type="text" class="wa" />
              </div>
              <div class="f-bold inline-block"><input type="checkbox" /></div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block width-100">Comorbidity 11</div>
              <div class="inline-block w-55">
                <input type="text" class="wa" />
              </div>
              <div class="f-bold inline-block"><input type="checkbox" /></div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block width-100">Comorbidity 12</div>
              <div class="inline-block w-55">
                <input type="text" class="wa" />
              </div>
              <div class="f-bold inline-block"><input type="checkbox" /></div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block width-100">Comorbidity 13</div>
              <div class="inline-block w-55">
                <input type="text" class="wa" />
              </div>
              <div class="f-bold inline-block"><input type="checkbox" /></div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block width-100">Comorbidity 14</div>
              <div class="inline-block w-55">
                <input type="text" class="wa" />
              </div>
              <div class="f-bold inline-block"><input type="checkbox" /></div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block width-100">Comorbidity 15</div>
              <div class="inline-block w-55">
                <input type="text" class="wa" />
              </div>
              <div class="f-bold inline-block"><input type="checkbox" /></div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block width-100">Comorbidity 16</div>
              <div class="inline-block w-55">
                <input type="text" class="wa" />
              </div>
              <div class="f-bold inline-block"><input type="checkbox" /></div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block width-100">Comorbidity 17</div>
              <div class="inline-block w-55">
                <input type="text" class="wa" />
              </div>
              <div class="f-bold inline-block"><input type="checkbox" /></div>
            </td>
          </tr>
        </table>
        <br />
        <div class="border">
          <div class="bg-blue f-bold pad-3">
            Local Coverage Determination (LCD) Guidelines
          </div>
          <div class="flex-between pad-3">
            <div>
              <div class="f-bold">Decline</div>
              <div class="flex-center-1">
                <input type="checkbox" /> Non-disease specific decline in
                clinical status guidelines
              </div>
            </div>
            <div>
              <div class="f-bold">Other Disease Guidelines</div>
              <div class="flex-center-1">
                <input type="checkbox" /> Cancer Diagnoses
              </div>
              <div class="flex-center-1">
                <input type="checkbox" /> Amyotrophic Lateral Sclerosis (ALS)
              </div>
              <div class="flex-center-1">
                <input type="checkbox" /> Heart Disease
              </div>
              <div class="flex-center-1">
                <input type="checkbox" /> HIV Disease
              </div>
              <div class="flex-center-1">
                <input type="checkbox" /> Liver Disease
              </div>
            </div>
            <div>
              <br />
              <div class="flex-center-1">
                <input type="checkbox" /> Cancer Diagnoses
              </div>
              <div class="flex-center-1">
                <input type="checkbox" /> Acute Rental Failure
              </div>
              <div class="flex-center-1">
                <input type="checkbox" /> Chronic Renal Failure
              </div>
              <div class="flex-center-1"><input type="checkbox" /> Stroke</div>
              <div class="flex-center-1"><input type="checkbox" /> Coma</div>
            </div>
          </div>
        </div>
      </div>
      <div class="page">
        <div class="bg-grey flex-between flex-center-1">
          <div class="f-bold">RN Recertification - Vital Signs/Diagnosis</div>
          <div>
            <table class="f-bold pad-5 bg-white">
              <tr>
                <td>
                  Patient Name (Last Name, First Name) & <br />
                  MRN: <input type="text" class="w-80 bg-none" />
                </td>
                <td class="width-150">
                  Date: <br />
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />
                </td>
              </tr>
            </table>
          </div>
        </div>
        <br />
        <table>
          <tr>
            <td class="bg-blue f-bold pad-3">
              Edmonton Symptom Assessment System
            </td>
          </tr>
          <tr>
            <td class="f-bold pad-3">
              Please Select the number that describes how the patient feels NOW.
              This data will be used to trend patient condition and decline.
            </td>
          </tr>
          <tr>
            <td class="f-bold pad-3">
              <div class="flex">
                <div class="inline-block f-bold text-center w-40 waoi">
                  Unable to Assess
                </div>
                <div class="samok">
                  <div class="inline-block width-15">0</div>
                  <div class="inline-block width-15">1</div>
                  <div class="inline-block width-15">2</div>
                  <div class="inline-block width-15">3</div>
                  <div class="inline-block width-15">4</div>
                  <div class="inline-block width-15">5</div>
                  <div class="inline-block width-15">6</div>
                  <div class="inline-block width-15">7</div>
                  <div class="inline-block width-15">8</div>
                  <div class="inline-block width-15">9</div>
                  <div class="inline-block width-15">10</div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block f-bold w-20">Pain</div>
              <div class="inline-block w-10"><input type="radio" /></div>
              <div class="inline-block text-right width-100">No Pain</div>
              <div class="inline-block">
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
              </div>
              <div class="inline-block">Worst Possible Pain</div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block f-bold w-20">Tiredness</div>
              <div class="inline-block w-10"><input type="radio" /></div>
              <div class="inline-block text-right width-100">No Tiredness</div>
              <div class="inline-block">
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
              </div>
              <div class="inline-block">Worst Possible Tiredness</div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block f-bold w-20">Drowsiness</div>
              <div class="inline-block w-10"><input type="radio" /></div>
              <div class="inline-block text-right width-100">No Drowsiness</div>
              <div class="inline-block">
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
              </div>
              <div class="inline-block">Worst Possible Drowsiness</div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block f-bold w-20">Nausea</div>
              <div class="inline-block w-10"><input type="radio" /></div>
              <div class="inline-block text-right width-100">No Nausea</div>
              <div class="inline-block">
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
              </div>
              <div class="inline-block">Worst Possible Nausea</div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block f-bold w-20">Lack of Appetite</div>
              <div class="inline-block w-10"><input type="radio" /></div>
              <div class="inline-block text-right width-100">
                No Lack of Appetite
              </div>
              <div class="inline-block">
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
              </div>
              <div class="inline-block">Worst Possible Lack of Appetite</div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block f-bold w-20">Shortness of Breath</div>
              <div class="inline-block w-10"><input type="radio" /></div>
              <div class="inline-block text-right width-100">
                No Shortness of Breath
              </div>
              <div class="inline-block">
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
              </div>
              <div class="inline-block">Worst Possible Shortness of Breath</div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block f-bold w-20">Depression</div>
              <div class="inline-block w-10"><input type="radio" /></div>
              <div class="inline-block text-right width-100">No Depression</div>
              <div class="inline-block">
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
              </div>
              <div class="inline-block">Worst Possible Depression</div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block f-bold w-20">Anxiety</div>
              <div class="inline-block w-10"><input type="radio" /></div>
              <div class="inline-block text-right width-100">No Anxiety</div>
              <div class="inline-block">
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
              </div>
              <div class="inline-block">Worst Possible Anxiety</div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block f-bold w-20">Wellbeing</div>
              <div class="inline-block w-10"><input type="radio" /></div>
              <div class="inline-block text-right width-100">No Wellbeing</div>
              <div class="inline-block">
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
                <input type="radio" class="inline-block width-15" />
              </div>
              <div class="inline-block">Worst Possible Wellbeing</div>
            </td>
          </tr>
        </table>
        <br />
        <div class="border">
          <div class="bg-blue f-bold pad-3">HIS Measure</div>
          <div class="f-bold pad-3">Admission</div>
          <div class="border b-right b-left pad-3">
            <div class="flex">
              <div class="inline-block w-20">(A1802) Admitted Form:</div>
              <div class="inline-block w-40">
                <div class="flex-center-1">
                  <input type="checkbox" /> 01. Community residential setting
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 02. Long-term care facility
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 03. Skilled Nursing Facility (SNF)
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 04. Hospital emergency department
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 05. Short-stay acute hospital (IPPS)
                </div>
              </div>
              <div class="inline-block">
                <div class="flex-center-1">
                  <input type="checkbox" /> 06. Long-term care hospital (LTCH)
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 07. Inpatient rehabilitation
                  hospital or unit (IRF)
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 08. Psychiatric hospital or unit
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 09. ID/DD Facility
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 10. Hospice
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 99. None of the above
                </div>
              </div>
            </div>
          </div>
          <div class="border b-top b-right b-left pad-3">
            <div class="flex">
              <div class="inline-block w-20">(10010) Principal Diagnosis:</div>
              <div class="inline-block w-40">
                <div class="flex">
                  <div class="flex-center-1">
                    <input type="checkbox" /> 01. Cancer
                  </div>
                  <div class="flex-center-1 samok">
                    <input type="checkbox" /> 02. Dementia/Aizheimer's
                  </div>
                </div>
              </div>
              <div class="inline-block">
                <div class="flex-center-1">
                  <input type="checkbox" /> 99. None of the above
                </div>
              </div>
            </div>
          </div>
          <div class="pad-3">
            Preferences: NQF#1641 Treatment Preferences <br />
            (F2000A) Was the patient/responsible party asked about preference
            regarding the use of cardiopulmonary resuscitation (CPR)? <br />
            <input type="radio" /> 0. No> Skip to F2100, Other Life-Sustaining
            Treatment Preferences <br />
            <input type="radio" /> 1. Yes, and discussion occurred <br />
            <input type="radio" /> 2. Yes, but the patient/responsible party
            refused to discuss <br />
            <div class="flex">
              Please explain: <input type="text" class="height-40 explain" />
            </div>
            <br />
            <div class="flex">
              <div class="inline-block w-100">
                (F2000B) Date the patient/responsible party was first asked
                about preference regarding the use of CPR
              </div>
              <div>
                <div class="w-40 height-20 border flex-end">
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />
                </div>
              </div>
            </div>

            (F2100A) Was the patient/responsible party asked about the
            preference regarding life-sustaining treatment other than CPR?
            <br />
            <input type="radio" /> 0. No> Skip to F2200, Hospitalization
            Preferences <br />
            <input type="radio" /> 1. Yes, and discussion occurred <br />
            <input type="radio" /> 2. Yes, but the patient/responsible party
            refused to discuss <br />
            <div class="flex">
              Please explain: <input type="text" class="explain height-40" />
            </div>
            <br />
            <div class="flex">
              <div class="inline-block w-100">
                (F2100B) Date the patient/responsible party was first asked
                about preference regarding life-sustaining treatments other than
                CPR:
              </div>
              <div>
                <div class="w-40 height-20 border flex-end">
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />
                </div>
              </div>
            </div>
            (F2200A) Was the patient/responsible party asked about preference
            regarding hospitalization? <br />
            <input type="radio" /> 0. No> Skip to F3000, Spiritual/Existential
            Concerns<br />
            <input type="radio" /> 1. Yes, and discussion occurred <br />
            <input type="radio" /> 2. Yes, but the patient/responsible party
            refused to discuss
          </div>
        </div>
      </div>
      <div class="page">
        <div class="bg-grey flex-between flex-center-1">
          <div class="f-bold">RN Recertification - Vital Signs/Diagnosis</div>
          <div>
            <table class="f-bold pad-5 bg-white">
              <tr>
                <td>
                  Patient Name (Last Name, First Name) & <br />
                  MRN: <input type="text" class="w-80 bg-none" />
                </td>
                <td class="width-150">
                  Date: <br />
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />
                </td>
              </tr>
            </table>
          </div>
        </div>
        <br />
        <br />
        <div class="border">
          <div class="bg-blue f-bold pad-3">HIS Measure</div>
          <div class="pad-3">
            <div class="flex">
              Please explain: <input type="text" class="explain height-40" />
            </div>
            <br />
            <div class="flex">
              <div class="inline-block w-100">
                (F2200B) Date the patient/responsible party was first asked
                about preference rearding hospitalization:
              </div>
              <div>
                <div class="w-40 height-20 border flex-end">
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <br />
        <div class="border bg-grey">
          <div class="pad-3 f-bold">
            Additional Comments
            <div class="border bg-white height-60">
              <input type="text" class="w-100 bg-none" />
              <input type="text" class="w-100 bg-none" />
              <input type="text" class="w-100 bg-none" />
            </div>
          </div>
        </div>
        <br />
        <div class="f-bold">Pain</div>
        <div class="border">
          <div class="bg-blue pad-3 f-bold">Pain Assessment</div>
          <div class="flex">
            <div class="f-bold border b-top b-left w-10">
              Non-verbal Pain Indicator
            </div>
            <div class="border b-left b-right b-top w-80">
              <input type="text" class="w-100 bg-none" /><input
                type="text"
                class="w-100 bg-none"
              />
            </div>
          </div>
          <div class="flex pad-3">
            <div class="inline-block w-50">
              <div class="flex-top">
                <input type="checkbox" /> Vocal (sighs, moans, groans, cries)
              </div>
            </div>
            <div class="inline-block w-50">
              <div class="flex-top">
                <input type="checkbox" />Facial Grimaces / Winces (furrowed
                brow, narrowed eyess, clenched teeth, distorted expressions)
              </div>
            </div>
            <div class="inline-block w-50">
              <div class="flex-top">
                <input type="checkbox" /> Bracing (clutching or holding onto
                furniture, equipment, or affected area during movement)
              </div>
            </div>
          </div>
          <div class="flex pad-3">
            <div class="inline-block w-50">
              <div class="flex-top">
                <input type="checkbox" /> Restlessness (constant or inermittent
                shifting of position, rocking, inability to keep still)
              </div>
            </div>
            <div class="inline-block w-50">
              <div class="flex-top">
                <input type="checkbox" />Rubbing (massaging affected area)
              </div>
            </div>
            <div class="inline-block w-50">
              <div class="flex-top">
                <input type="checkbox" /> Change in Vital Signs
              </div>
            </div>
          </div>
          <div class="flex pad-3">
            <div class="inline-block w-50">
              <div class="flex-top"><input type="checkbox" /> None</div>
            </div>
            <div class="inline-block w-50">
              <div class="flex-top">
                <input type="checkbox" />Other
                <input type="text" class="width-150 height-2 0" />
              </div>
            </div>
            <div class="inline-block w-50">
              <div class="f-bold inline-block">Verbally Expressed Pain</div>
              <div class="flex-top inline-block">
                <input type="checkbox" /> No Pain Reported
              </div>
            </div>
          </div>
        </div> <br>
        <table>
          <tr>
            <td class="bg-blue f-bold pad-3">PAINDAD Scoring</td>
          </tr>
          <tr>
            <td class="pad-3"> 
              <div class="flex">
                <div class="inline-block w-20">Breathing: </div>
                <div class="inline-block w-30">
                  <div class="flex-center-1">
                    <input type="checkbox"> 0 - Normal
                  </div>
                </div>
                <div class="inline-block w-40">
                  <div class="flex-center-1">
                    <input type="checkbox"> 1 - Occasional Labored/Short Hyperventilation
                  </div>
                </div>
                <div class="inline-block w-30">
                  <div class="flex-center-1">
                    <input type="checkbox"> 2 - Noisy
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3"> 
              <div class="flex">
                <div class="inline-block w-20">Negative Vocalization: </div>
                <div class="inline-block w-30">
                  <div class="flex-center-1">
                    <input type="checkbox"> 0 - None
                  </div>
                </div>
                <div class="inline-block w-40">
                  <div class="flex-center-1">
                    <input type="checkbox"> 1 - Occasional Moan/Groan
                  </div>
                </div>
                <div class="inline-block w-30">
                  <div class="flex-center-1">
                    <input type="checkbox"> 2 - Loud Moaning/Groaning
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3"> 
              <div class="flex">
                <div class="inline-block w-20">Facial Expression:  </div>
                <div class="inline-block w-30">
                  <div class="flex-center-1">
                    <input type="checkbox"> 0 - Smiling
                  </div>
                </div>
                <div class="inline-block w-40">
                  <div class="flex-center-1">
                    <input type="checkbox"> 1 - Sad
                  </div>
                </div>
                <div class="inline-block w-30">
                  <div class="flex-center-1">
                    <input type="checkbox"> 2 - Grimacing
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3"> 
              <div class="flex">
                <div class="inline-block w-20">Body Language: </div>
                <div class="inline-block w-30">
                  <div class="flex-center-1">
                    <input type="checkbox"> 0 - Relaxed
                  </div>
                </div>
                <div class="inline-block w-40">
                  <div class="flex-center-1">
                    <input type="checkbox"> 1 - Tense
                  </div>
                </div>
                <div class="inline-block w-30">
                  <div class="flex-center-1">
                    <input type="checkbox"> 2 - Rigid
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3"> 
              <div class="flex">
                <div class="inline-block w-20">Consolability: </div>
                <div class="inline-block w-30">
                  <div class="flex-center-1">
                    <input type="checkbox"> 0 - No Need to Console Voice
                  </div>
                </div>
                <div class="inline-block w-40">
                  <div class="flex-center-1">
                    <input type="checkbox"> 1 - Unable to Console
                  </div>
                </div>
                <div class="inline-block w-30">
                  <div class="flex-center-1">
                    <input type="checkbox"> 2 - Distracted/Reassured by
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="f-bold pad-3">Total: <input type="text" class="w-50"></div>
            </td>
          </tr>
        </table>
      </div>
      <div class="page">
        <div class="bg-grey flex-between flex-center-1">
          <div class="f-bold">RN Recertification - Vital Signs/Diagnosis</div>
          <div>
            <table class="f-bold pad-5 bg-white">
              <tr>
                <td>
                  Patient Name (Last Name, First Name) & <br />
                  MRN: <input type="text" class="w-80 bg-none" />
                </td>
                <td class="width-150">
                  Date: <br />
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />
                </td>
              </tr>
            </table>
          </div>
        </div> <br>
        <div class="border">
          <div class="bg-blue f-bold pad-3">Palliative Performance Scale</div>
          <div class="flex bg-grey f-bold pad-3">
            <div class="inline-block width-80 text-center">PPS Level</div>
            <div class="inline-block width-100 text-center">Ambulation</div>
            <div class="inline-block width-200 text-center">Activity and Evidence of Disease</div>
            <div class="inline-block width-90 text-center">Self-Care</div>
            <div class="inline-block width-90 text-center">Intake</div>
            <div class="inline-block width-125 text-center">Consciousness Level</div>
          </div>
          <div class="flex-center-1 pad-3">
            <div class="inline-block width-80  text-center">100%</div>
            <div class="inline-block width-100 text-center">Full</div>
            <div class="inline-block width-200 text-center">Normal activity and work; no evidence of disease </div>
            <div class="inline-block width-90 text-center">Full</div>
            <div class="inline-block width-90 text-center">Normal</div>
            <div class="inline-block width-125 text-center">Full</div>
          </div>
          <div class="bg-grey flex-center-1 pad-3">
            <div class="inline-block width-80  text-center">90%</div>
            <div class="inline-block width-100 text-center">Full</div>
            <div class="inline-block width-200 text-center">Normal activity and work and some evidence of disease </div>
            <div class="inline-block width-90 text-center">Full</div>
            <div class="inline-block width-90 text-center">Normal</div>
            <div class="inline-block width-125 text-center">Full</div>
          </div>
          <div class="flex-center-1 pad-3">
            <div class="inline-block width-80  text-center">80%</div>
            <div class="inline-block width-100 text-center">Full</div>
            <div class="inline-block width-200 text-center">Normal activity with effort and some evidence of disease </div>
            <div class="inline-block width-90 text-center">Full</div>
            <div class="inline-block width-90 text-center">Normal</div>
            <div class="inline-block width-125 text-center">Full</div>
          </div>
          <div class="bg-grey flex-center-1 pad-3">
            <div class="inline-block width-80  text-center">70%</div>
            <div class="inline-block width-100 text-center">Reduced</div>
            <div class="inline-block width-200 text-center">Unable to perform normal job/work significant disease </div>
            <div class="inline-block width-90 text-center">Full</div>
            <div class="inline-block width-90 text-center">Normal </div>
            <div class="inline-block width-125 text-center">Full </div>
          </div>
          <div class="flex-center-1 pad-3">
            <div class="inline-block width-80  text-center">60%</div>
            <div class="inline-block width-100 text-center">Reduced</div>
            <div class="inline-block width-200 text-center">Unable to perform hobby/housework significant disease </div>
            <div class="inline-block width-90 text-center">Occasional assistance necessary</div>
            <div class="inline-block width-90 text-center">Normal or reduced</div>
            <div class="inline-block width-125 text-center">Full or confused</div>
          </div>
          <div class="bg-grey flex-center-1 pad-3">
            <div class="inline-block width-80  text-center">50%</div>
            <div class="inline-block width-100 text-center">Mainly Sit/Lie</div>
            <div class="inline-block width-200 text-center">Unable to do any work/extensive disease </div>
            <div class="inline-block width-90 text-center">Considerable assistance required</div>
            <div class="inline-block width-90 text-center">Normal or reduced</div>
            <div class="inline-block width-125 text-center">Full or confused</div>
          </div>
          <div class="flex-center-1 pad-3">
            <div class="inline-block width-80  text-center">40%</div>
            <div class="inline-block width-100 text-center">Mainly Sit/Lie</div>
            <div class="inline-block width-200 text-center">Unable to do most activity/extensive disease  </div>
            <div class="inline-block width-90 text-center">Mainly needs assistance</div>
            <div class="inline-block width-90 text-center">Normal or reduced</div>
            <div class="inline-block width-125 text-center">Full or drowsy/confused</div>
          </div>
          <div class="bg-grey flex-center-1 pad-3">
            <div class="inline-block width-80  text-center">30%</div>
            <div class="inline-block width-100 text-center">Totally Bed Bound</div>
            <div class="inline-block width-200 text-center">Unable to do any activiy/extensive disease </div>
            <div class="inline-block width-90 text-center">Total care</div>
            <div class="inline-block width-90 text-center">Normal or reduced</div>
            <div class="inline-block width-125 text-center">Full or drowsy/confused</div>
          </div>
          <div class="flex-center-1 pad-3">
            <div class="inline-block width-80  text-center">20%</div>
            <div class="inline-block width-100 text-center">Totally Bed Bound</div>
            <div class="inline-block width-200 text-center">Unable to do any activiy/extensive disease </div>
            <div class="inline-block width-90 text-center">Total care</div>
            <div class="inline-block width-90 text-center">Minimal to sips</div>
            <div class="inline-block width-125 text-center">Full or drowsy/confused</div>
          </div>
          <div class="bg-grey flex-center-1 pad-3">
            <div class="inline-block width-80  text-center">10%</div>
            <div class="inline-block width-100 text-center">Totally Bed Bound</div>
            <div class="inline-block width-200 text-center"> </div>
            <div class="inline-block width-90 text-center">Total care</div>
            <div class="inline-block width-90 text-center">Mouth Care only</div>
            <div class="inline-block width-125 text-center">Drowsy or coma/confusion</div>
          </div>
        </div> <br>
        <table>
          <tr>
            <td class="bg-blue f-bold pad-3">Primary Pain</td>
          </tr>
          <tr>
            <td>
              <div class="flex">
                <div class="border b-top b-left b-btm w-10 pad-3">
                  <div class="f-bold w-100 text-center">Location</div>
                  <div class="inline-block width-90">Primary Site:</div> <input type="text" class="width-150">
                  <div class="inline-block width-90">Increased by:</div> <input type="text" class="width-150">
                  <div class="inline-block width-90">Relieved by:</div> <input type="text" class="width-150">
                  <div class="inline-block width-90">Interferes With:</div> <input type="text" class="width-150">
                  <div class="inline-block width-90">Origin:</div> <input type="text" class="width-150">
                </div>
                <div class="border bg-none w-40 pad-3">
                  <div class="f-bold">Intensity</div>
                  <div>
                    <div class="inline-block width-100"><div class="flex-center-1"><input type="checkbox"> 0 None</div></div>
                    <div class="inline-block width-100"><div class="flex-center-1"><input type="checkbox"> 3</div></div>
                    <div class="inline-block width-100"><div class="flex-center-1"><input type="checkbox"> 6</div></div>
                    <div class="inline-block width-100"><div class="flex-center-1"><input type="checkbox"> 9</div></div>
                  </div>
                  <div>
                    <div class="inline-block width-100"><div class="flex-center-1"><input type="checkbox"> 1</div></div>
                    <div class="inline-block width-100"><div class="flex-center-1"><input type="checkbox"> 4</div></div>
                    <div class="inline-block width-100"><div class="flex-center-1"><input type="checkbox"> 7</div></div>
                    <div class="inline-block width-100"><div class="flex-center-1"><input type="checkbox"> 10 High</div></div>
                  </div>
                  <div>
                    <div class="inline-block width-100"><div class="flex-center-1"><input type="checkbox"> 2</div></div>
                    <div class="inline-block width-100"><div class="flex-center-1"><input type="checkbox"> 5 Medium</div></div>
                    <div class="inline-block width-100"><div class="flex-center-1"><input type="checkbox"> 8</div></div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="f-bold">Description</div>
              <div class="inline-block width-125">
                <div><div class="flex-center-1"><input type="checkbox"> Ache/Dull</div></div>
                <div><div class="flex-center-1"><input type="checkbox"> Radiating</div></div>
              </div>
              <div class="inline-block width-125">
                <div><div class="flex-center-1"><input type="checkbox"> Nagging</div></div>
                <div><div class="flex-center-1"><input type="checkbox"> Burning</div></div>
              </div>
              <div class="inline-block width-125">
                <div><div class="flex-center-1"><input type="checkbox"> Heavy/Crushing</div></div>
                <div><div class="flex-center-1"><input type="checkbox"> Tingling</div></div>
              </div>
              <div class="inline-block width-125">
                <div><div class="flex-center-1"><input type="checkbox"> Sharp/Stabbing</div></div>
                <div><div class="flex-center-1"><input type="checkbox"> Cramping</div></div>
              </div>
              <div class="inline-block width-125">
                <div><div class="flex-center-1"><input type="checkbox"> Throbbing</div></div>
                <div><div class="flex-center-1"><input type="checkbox"> Other: <input type="text"></div></div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="f-bold">Duration</div>
              <div class="inline-block width-125">
                <div><div class="flex-center-1"><input type="checkbox"> Continuous</div></div>
              </div>
              <div class="inline-block width-125">
                <div><div class="flex-center-1"><input type="checkbox"> Intermitted</div></div>
              </div>
              <div class="inline-block width-125">
                <div><div class="flex-center-1"><input type="checkbox"> Occasional</div></div>
              </div>
              <div class="inline-block width-125">
                <div><div class="flex-center-1"><input type="checkbox"> Frequent</div></div>
              </div>
              <div class="inline-block width-125">
                <div><div class="flex-center-1"><input type="checkbox"> Other: <input type="text"></div></div>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="page">
        <div class="bg-grey flex-between flex-center-1">
          <div class="f-bold">RN Recertification - Vital Signs/Diagnosis</div>
          <div>
            <table class="f-bold pad-5 bg-white">
              <tr>
                <td>
                  Patient Name (Last Name, First Name) & <br />
                  MRN: <input type="text" class="w-80 bg-none" />
                </td>
                <td class="width-150">
                  Date: <br />
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />
                </td>
              </tr>
            </table>
          </div>
        </div> <br>
        <table>
          <tr>
            <td class="">
              <div class="bg-blue f-bold pad-3">Primary Pain</div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="f-bold">Pain side effects</div>
              <div class="flex-top">
                <div class="inline-block width-125">
                  <div class="flex-center-1"><input type="checkbox"> Nausea</div>
                  <div class="flex-center-1"><input type="checkbox"> Vomiting</div>
                  <div class="flex-center-1"><input type="checkbox"> Sleepiness</div>
                </div>
                <div class="inline-block width-125">
                  <div class="flex-center-1"><input type="checkbox"> Confusion</div>
                  <div class="flex-center-1"><input type="checkbox"> Consitipation</div>
                  <div class="flex-center-1"><input type="checkbox"> Urinary Retention</div>
                </div>
                <div class="inline-block width-125">
                  <div class="flex-center-1"><input type="checkbox"> Headache</div>
                  <div class="flex-center-1"><input type="checkbox"> Itching/Rash</div>
                  <div class="flex-center-1"><input type="checkbox"> Pain Increases</div>
                </div>
                <div class="inline-block width-125">
                  <div class="flex-center-1"><input type="checkbox"> None</div>
                  <div class="flex-center-1"><input type="checkbox"> Motor Sensory deficit</div>
                  <div class="flex-center-1"><input type="checkbox"> Respiratory Depression</div>
                </div>
                <div class="inline-block width-125">
                  <div class="flex-center-1"><input type="checkbox"> Other: <input type="text"></div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="f-bold">Management</div>
              <div class="flex-top">
                <div class="inline-block w-40">
                  <div>Current medications(s)</div>
                  <div>Medication change required:</div>
                </div>
                <div class="inline-block">
                  <div><input type="text"></div>
                  <div><input type="radio"> Yes <input type="radio"> No</div>
                </div>
              </div>
              
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex-top">
                <div class="inline-block w-40">Target Pain goal:</div>
                <div class="inline-block width-100">
                  <div class="flex-center-1"><input type="checkbox"> 0 None</div>
                  <div class="flex-center-1"><input type="checkbox"> 1</div>
                  <div class="flex-center-1"><input type="checkbox"> 2</div>
                </div>
                <div class="inline-block width-100">
                  <div class="flex-center-1"><input type="checkbox"> 3</div>
                  <div class="flex-center-1"><input type="checkbox"> 4</div>
                  <div class="flex-center-1"><input type="checkbox"> 5 Medium</div>
                </div>
                <div class="inline-block width-100">
                  <div class="flex-center-1"><input type="checkbox"> 6</div>
                  <div class="flex-center-1"><input type="checkbox"> 7</div>
                  <div class="flex-center-1"><input type="checkbox"> 8</div>
                </div>
                <div class="inline-block width-100">
                  <div class="flex-center-1"><input type="checkbox"> 9</div>
                  <div class="flex-center-1"><input type="checkbox"> 10 High</div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex-top">
                <div class="inline-block w-40">What pain level warrants further attention?</div>
                <div class="inline-block width-100">
                  <div class="flex-center-1"><input type="checkbox"> 0 None</div>
                  <div class="flex-center-1"><input type="checkbox"> 1</div>
                  <div class="flex-center-1"><input type="checkbox"> 2</div>
                </div>
                <div class="inline-block width-100">
                  <div class="flex-center-1"><input type="checkbox"> 3</div>
                  <div class="flex-center-1"><input type="checkbox"> 4</div>
                  <div class="flex-center-1"><input type="checkbox"> 5 Medium</div>
                </div>
                <div class="inline-block width-100">
                  <div class="flex-center-1"><input type="checkbox"> 6</div>
                  <div class="flex-center-1"><input type="checkbox"> 7</div>
                  <div class="flex-center-1"><input type="checkbox"> 8</div>
                </div>
                <div class="inline-block width-100">
                  <div class="flex-center-1"><input type="checkbox"> 9</div>
                  <div class="flex-center-1"><input type="checkbox"> 10 High</div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex-top">
                <div class="inline-block w-40">Number of breakthrough medications in last 24 hours:</div>
                <div class="inline-block"><input type="text"></div>
              </div>
            </td>
          </tr>
        </table> <br>
        <table>
          <tr>
            <td><div class="bg-blue f-bold pad-3">Secondary Pain</div></td>
          </tr>
          <tr>
            <td>
              <div class="inline-block f-bold w-40 text-center">Location</div>
              <div class="inline-block f-bold">Intensity:</div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex-top">
                <div class="inline-block w-40">
                  <div>Primary Site:</div>
                  <div>Increased by:</div>
                  <div>Relieved by:</div>
                  <div>Interfeces With:</div>
                  <div>Origin:</div>
                  <div class="f-bold">Description</div>
                </div>
                <div class="inline-block">
                  <div class="flex-top">
                    <div class="inline-block width-100">
                      <div class="flex-center-1"><input type="checkbox"> 0 None</div>
                      <div class="flex-center-1"><input type="checkbox"> 1</div>
                      <div class="flex-center-1"><input type="checkbox"> 2</div>
                    </div>
                    <div class="inline-block width-100">
                      <div class="flex-center-1"><input type="checkbox"> 3</div>
                      <div class="flex-center-1"><input type="checkbox"> 4</div>
                      <div class="flex-center-1"><input type="checkbox"> 5 Medium</div>
                    </div>
                    <div class="inline-block width-100">
                      <div class="flex-center-1"><input type="checkbox"> 6</div>
                      <div class="flex-center-1"><input type="checkbox"> 7</div>
                      <div class="flex-center-1"><input type="checkbox"> 8</div>
                    </div>
                    <div class="inline-block width-100">
                      <div class="flex-center-1"><input type="checkbox"> 9</div>
                      <div class="flex-center-1"><input type="checkbox"> 10 High</div>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div>
                <div class="inline-block width-125">
                  <div class="flex-center-1">
                    <input type="checkbox"> Ache/Dull
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox"> Radiating
                  </div>
                </div>
                <div class="inline-block width-125">
                  <div class="flex-center-1">
                    <input type="checkbox"> Nagging
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox"> Burning
                  </div>
                </div>
                <div class="inline-block width-125">
                  <div class="flex-center-1">
                    <input type="checkbox"> Heavy Crushing
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox"> Tingling
                  </div>
                </div>
                <div class="inline-block width-125">
                  <div class="flex-center-1">
                    <input type="checkbox"> Sharp/Stabbing
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox"> Cramping
                  </div>
                </div>
                <div class="inline-block width-125">
                  <div class="flex-center-1">
                    <input type="checkbox"> Throbbing
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox"> Other
                  </div>
                </div>
              </div> <br>
              <div class="f-bold">Duration</div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div>
                <div class="inline-block width-125">
                  <div class="flex-center-1">
                    <input type="checkbox"> Continuous
                  </div>
                </div>
                <div class="inline-block width-125">
                  <div class="flex-center-1">
                    <input type="checkbox"> Internmittent
                  </div>
                </div>
                <div class="inline-block width-125">
                  <div class="flex-center-1">
                    <input type="checkbox"> Occasional
                  </div>
                </div>
                <div class="inline-block width-125">
                  <div class="flex-center-1">
                    <input type="checkbox"> Frequent
                  </div>
                </div>
                <div class="inline-block width-125">
                  <div class="flex-center-1">
                    <input type="checkbox"> Other
                  </div>
                </div>
              </div> <br>
              <div class="f-bold">Side effects</div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block width-125">
                <div class="flex-center-1">
                  <input type="checkbox"> Nausea
                </div>
                <div class="flex-center-1">
                  <input type="checkbox"> Vomiting
                </div>
              </div>
              <div class="inline-block width-125">
                <div class="flex-center-1">
                  <input type="checkbox"> Confusion
                </div>
                <div class="flex-center-1">
                  <input type="checkbox"> Constipation
                </div>
              </div>
              <div class="inline-block width-125">
                <div class="flex-center-1">
                  <input type="checkbox"> Headache
                </div>
                <div class="flex-center-1">
                  <input type="checkbox"> Itching/Rash
                </div>
              </div>
              <div class="inline-block width-125">
                <div class="flex-center-1">
                  <input type="checkbox"> None
                </div>
                <div class="flex-center-1">
                  <input type="checkbox"> Motor Sensory deficit
                </div>
              </div>
              <div class="inline-block">
                <div class="flex-center-1">
                  <input type="checkbox"> Other
                </div>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="page">
        <div class="bg-grey flex-between flex-center-1">
          <div class="f-bold">RN Recertification - Vital Signs/Diagnosis</div>
          <div>
            <table class="f-bold pad-5 bg-white">
              <tr>
                <td>
                  Patient Name (Last Name, First Name) & <br />
                  MRN: <input type="text" class="w-80 bg-none" />
                </td>
                <td class="width-150">
                  Date: <br />
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />
                </td>
              </tr>
            </table>
          </div>
        </div> <br>
        <table>
          <tr>
            <td>
              <div class="bg-blue f-bold pad-3">Secondary Pain</div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block width-125">
                <div class="flex-center-1">
                  <input type="checkbox"> Sleepiness
                </div>
              </div>
              <div class="inline-block width-125">
                <div class="flex-center-1">
                  <input type="checkbox"> Urinary Retention
                </div>
              </div>
              <div class="inline-block width-125">
                <div class="flex-center-1">
                  <input type="checkbox"> Pain Increases
                </div>
              </div>
              <div class="inline-block width-125">
                <div class="flex-center-1">
                  <input type="checkbox"> Respiratory Depression
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="f-bold">Management</div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div>Current medication(s):</div>
              <div class="flex-top">
                <div class="inline-block w-40">
                  <div>Medication change required:</div>
                  <div>Target Pain goal:</div>
                </div>
                <div class="inline-block">
                  <div>
                    <input type="radio"> Yes
                    <input type="radio"> No
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox"> 0 None
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox"> 1
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox"> 2
                    </div>
                  </div>
                  </div>
                </div> <br>
                <div class="flex-top">
                  <div class="inline-block w-40">What pain level warrants further attention? # of breakthrough medications in last 24 hours:</div>
                  <div class="inline-block">
                    <div>
                      <div class="flex-center-1">
                        <input type="checkbox"> 0 None
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        </table> <br>
        <table>
          <tr>
            <td>
              <div class="bg-blue f-bold pad-3">HIS Measure</div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="f-bold">
                Treatment Preferences: NQF #1634 and NQF #1637
              </div>
              <div>(J0900A) Was the patient screened for pain?</div>
              <div>
                <div class="inline-block w-50">
                  <input type="radio"> 0. No> Skip to J2030, Screening for Shortness of Breath
                </div>
                <div class="inline-block">
                  <input type="radio"> 1. Yes
                </div>
              </div>
              <div>
                <div class="flex">
                  Please explain: <input type="text" class="explain height-40" />
                </div>
              </div> <br>
              <div>
                <div class="inline-block w-40">(J0900B) Date of first screening for pain:</div>
                <div class="inline-block">
                  <div class="w-40 height-20 border flex-end">
                    <input type="text" class="w-30 bg-none text-center" />/
                    <input type="text" class="w-30 bg-none text-center" />/
                    <input type="text" class="w-30 bg-none text-center" />
                  </div>
                </div>
              </div> <br>
              <div class="flex">
                <div class="inline-block w-40">(J0900C) The patient's pain severity was: </div>
                <div class="inline-block width-150">
                  <div class="flex-center-1">
                    <input type="checkbox"> 0. None > Skip to J2030
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox"> 3. Severe
                  </div>
                </div>
                <div class="inline-block width-150">
                  <div class="flex-center-1">
                    <input type="checkbox"> 1. Mid
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox"> 9. Pain not related
                  </div>
                </div>
                <div class="inline-block width-150">
                  <div class="flex-center-1">
                    <input type="checkbox"> 2. Moderate
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex">
                <div class="inline-block w-40">(J0900D) Type of Standardized pain tool used: </div>
                <div class="inline-block width-150">
                  <div class="flex-center-1">
                    <input type="checkbox"> 1. Numeric
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox"> 4. Staff Observation
                  </div>
                </div>
                <div class="inline-block width-150">
                  <div class="flex-center-1">
                    <input type="checkbox"> 2. Verbal Descriptor
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox"> 9. Pain not related
                  </div>
                </div>
                <div class="inline-block width-150">
                  <div class="flex-center-1">
                    <input type="checkbox"> 3. Patient visual
                  </div>
                </div>
              </div> <br>
              <div>(J0910A) Was a comprehensive pain assessment done?</div>
              <div>
                <div class="inline-block w-50">
                  <input type="radio"> 0. No> Skip to J2030, Screening for Shortness of Breath
                </div>
                <div class="inline-block">
                  <input type="radio"> 1. Yes
                </div>
              </div>
              <div>
                <div class="flex">
                  Please explain: <input type="text" class="explain height-40" />
                </div>
              </div> <br>
              <div>
                <div class="inline-block w-40">(J0910B) Date of comprehensive pain assessment:</div>
                <div class="inline-block">
                  <div class="w-40 height-20 border flex-end">
                    <input type="text" class="w-30 bg-none text-center" />/
                    <input type="text" class="w-30 bg-none text-center" />/
                    <input type="text" class="w-30 bg-none text-center" />
                  </div>
                </div>
              </div>
              <div>(J0910C) Comprehensive Pain Assessment Included (check all that apply):</div>
              <div class="flex">
                <div class="inline-block width-125">
                  <div class="flex-center-1"><input type="checkbox"> 1. Location</div>
                </div>
                <div class="inline-block width-125">
                  <div class="flex-center-1"><input type="checkbox"> 3. Chracter</div>
                </div>
                <div class="inline-block w-30">
                  <div class="flex-center-1"><input type="checkbox"> 5. Frequency</div>
                </div>
                <div class="inline-block width-200">
                  <div class="flex-center-1"><input type="checkbox"> 7. Effect on function of quality of life</div>
                </div>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="page">
        <div class="bg-grey flex-between flex-center-1">
          <div class="f-bold">RN Recertification - ADLs (Activities of Daily Life)</div>
          <div>
            <table class="f-bold pad-5 bg-white">
              <tr>
                <td>
                  Patient Name (Last Name, First Name) & <br />
                  MRN: <input type="text" class="w-80 bg-none" />
                </td>
                <td class="width-150">
                  Date: <br />
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />
                </td>
              </tr>
            </table>
          </div>
        </div>
        <br />
        <br />
        <div class="border">
          <div class="bg-blue f-bold pad-3">HIS Measure</div>
          <div class="flex pad-3">
            <div class="inline-block width-125">
              <div class="flex-center-1">
                <input type="checkbox" /> 2. Severity
              </div>
            </div>
            <div class="inline-block width-125">
              <div class="flex-center-1">
                <input type="checkbox" /> 4. Duration
              </div>
            </div>
            <div class="inline-block w-30">
              <div class="flex-center-1">
                <input type="checkbox" /> 6. What relieves/worsens pain
              </div>
            </div>
            <div class="inline-block width-200">
              <div class="flex-center-1">
                <input type="checkbox" /> 9. None of the above
              </div>
            </div>
          </div>
          <br />
          <div>(J2030A) Was the patient screened for shortness of breath?</div>
          <div>
            <div class="inline-block w-50">
              <input type="radio" /> 0. No> Skip to N0500, Scheduled Opiod
            </div>
            <div class="inline-block"><input type="radio" /> 1. Yes</div>
            <div>
              <div class="flex">
                Please explain: <input type="text" class="explain height-40" />
              </div>
            </div>
            <div>
              (J2030B) Date the first screening for shortness of breath: <br />
              (J2030C) Did the screening indicate the patient had shortness of
              breath?
            </div>
            <div>
              <input type="radio" /> Code 0, No: Select code 0 if the screening
              indicated that the patient did not have shortness of breath. Skip
              to Item N0500, Scheduled Opioid. <input type="radio" /> Code 1,
              Yes: Select code 1 if the screening indicated that the patient had
              shortness of breath.
              <div>
                (J2040A) Was treatment for shortness of breath initiated?
              </div>
              <input type="radio" /> 0. No > Skip to N0500, Scheduled Opiod
              <input type="radio" /> 1. No, patient declined treatment > Skip to
              N0500, Scheduled Opiod <input type="radio" /> 2. Yes
              <div>
                <div class="flex">
                  Please explain:
                  <input type="text" class="explain height-40" />
                </div>
              </div>
              <div>
                (J2040B) Date treatment for shortness of breath initiated:
              </div>
              <div>
                (J2040C) Type(s) of treatment for shortness of breath initiated
                (check all that apply):
              </div>
              <div>
                <div class="flex">
                  <div class="flex-center-1 width-100">
                    <input type="checkbox" />1. Opiods
                  </div>
                  <div class="flex-center-1 width-100">2. Other Medication</div>
                  <div class="flex-center-1 width-100">3. Oxygen</div>
                  <div class="flex-center-1 width-100">4. Non-Medication</div>
                </div>
              </div>
              <div class="pad-3">
                <div class="border bg-grey">
                  <div class="pad-3 f-bold">
                    Additional Comments
                    <div class="border bg-white height-60">
                      <input type="text" class="w-100 bg-none" />
                      <input type="text" class="w-100 bg-none" />
                      <input type="text" class="w-100 bg-none" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br />
        <br />
        <div class="f-bold">ADLs (Activities of Daily Life)</div>
        <br />
        <div class="border">
          <div class="bg-blue f-bold pad-3">
            Karnofsky Performance Status Scale
          </div>
          <div class="bg-grey">
            <div class="inline-block width-40"><input type="radio" />100%</div>
            <div class="inline-block">
              - Normal no complaints; no evidence of disease
            </div>
          </div>
          <div>
            <div class="inline-block width-40"><input type="radio" />90%</div>
            <div class="inline-block">
              - Able to carry on normal activity; minor signs or symptoms of
              disease
            </div>
          </div>
          <div class="bg-grey">
            <div class="inline-block width-40"><input type="radio" />80%</div>
            <div class="inline-block">
              - Normal activity with efforts; some signs or symptoms of disease
            </div>
          </div>
          <div>
            <div class="inline-block width-40"><input type="radio" />70%</div>
            <div class="inline-block">
              - Cares for self; unable to carry on normal activity or to do
              active work
            </div>
          </div>
          <div class="bg-grey">
            <div class="inline-block width-40"><input type="radio" />60%</div>
            <div class="inline-block">
              - Requires occasional assistance, but is able to care for most of
              his/her personal needs
            </div>
          </div>
          <div>
            <div class="inline-block width-40"><input type="radio" />50%</div>
            <div class="inline-block">
              - Requires considerable assistance and frequent medical care
            </div>
          </div>
          <div class="bg-grey">
            <div class="inline-block width-40"><input type="radio" />40%</div>
            <div class="inline-block">
              - Disabled; requires special care and assistance
            </div>
          </div>
          <div>
            <div class="inline-block width-40"><input type="radio" />30%</div>
            <div class="inline-block">
              - Severely disabled; hospital admission is indicated although
              death not imminent
            </div>
          </div>
          <div class="bg-grey">
            <div class="inline-block width-40"><input type="radio" />20%</div>
            <div class="inline-block">
              - Very sick; hospital admission necessary; active supportive
              treatment necessary
            </div>
          </div>
          <div>
            <div class="inline-block width-40"><input type="radio" />10%</div>
            <div class="inline-block">
              - Moribund; fatal processes progressing rapidly
            </div>
          </div>
          <div class="bg-grey">
            <div class="inline-block width-40"><input type="radio" />0%</div>
            <div class="inline-block">- Dead</div>
          </div>
        </div>
      </div>
      <div class="page">
        <div class="bg-grey flex-between flex-center-1">
          <div class="f-bold">RN Recertification - ADLs (Activities of Daily Life)</div>
          <div>
            <table class="f-bold pad-5 bg-white">
              <tr>
                <td>
                  Patient Name (Last Name, First Name) & <br />
                  MRN: <input type="text" class="w-80 bg-none" />
                </td>
                <td class="width-150">
                  Date: <br />
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />
                </td>
              </tr>
            </table>
          </div>
        </div>
        <br />
        <div class="border">
          <div class="bg-blue f-bold pad-3">
            Functional Assessment Staging (FAST) (only required for dementia
            patients)
          </div>
          <div class="flex">
            <div class="inline-block width-40"><input type="radio" />1</div>
            <div class="inline-block">
              No difficulty either subjectively or objectively.
            </div>
          </div>
          <div class="flex bg-grey">
            <div class="inline-block width-40"><input type="radio" />2</div>
            <div class="inline-block">
              Complains of forgetting location of objects. Subjective work
              difficulties.
            </div>
          </div>
          <div class="flex">
            <div class="inline-block width-40"><input type="radio" />3</div>
            <div class="inline-block">
              Decreased job functioning evident to co-workers. Difficulty in
              traveling to new locations. Decreased organizational capacity.
            </div>
          </div>
          <div class="flex-center-1 bg-grey">
            <div class="inline-block width-40"><input type="radio" />4</div>
            <div class="inline-block w-90">
              Decreased ability to perform complex task (e.g. planning dinner
              for guests, handling personal finances, such as forgetting to pay
              bills, difficulty marketing, etc.)
            </div>
          </div>
          <div class="flex-center-1">
            <div class="inline-block width-40"><input type="radio" />5</div>
            <div class="inline-block w-90">
              Requires assistance in choosing proper clothing to wear for the
              day, season or occasion (e.g. patient may wear the same clothing
              repeatedly, unless supervised.)
            </div>
          </div>
          <div class="flex-center-1 bg-grey">
            <div class="inline-block width-40"><input type="radio" />6A</div>
            <div class="inline-block w-90">
              Improperly putting on clothes without assistance or cueing (e.g.
              may put street clothes on over night clothes, or put shoes on
              wrong feet, or have difficulty buttoning clothing) *Occasionally
              or more frequently over the past weeks.
            </div>
          </div>
          <div class="flex">
            <div class="inline-block width-40"><input type="radio" />6B</div>
            <div class="inline-block">
              Unable to bathe properly (e.g. difficulty adjusting bath-water
              temperature) *occasionally or more frequently over the past weeks
            </div>
          </div>
          <div class="flex-center-1 bg-grey">
            <div class="inline-block width-40"><input type="radio" />6C</div>
            <div class="inline-block w-90">
              Inability to handle mechanics of toileting (e.g. forget to flush
              the toilet, does not wipe properly or properly dispose of toilet
              tissue) *Occasionally or more frequently over the past weeks.
            </div>
          </div>
          <div class="flex">
            <div class="inline-block width-40"><input type="radio" />6D</div>
            <div class="inline-block">
              Urinary incontinence *Occasionally or more frequently over the
              past weeks.
            </div>
          </div>
          <div class="flex bg-grey">
            <div class="inline-block width-40"><input type="radio" />6E</div>
            <div class="inline-block">
              Fecal incontinence *Occasionally or more frequently over the past
              weeks.
            </div>
          </div>
          <div class="flex-center-1">
            <div class="inline-block width-40"><input type="radio" />7A</div>
            <div class="inline-block w-90">
              Ability to speak limited to approximately a half a dozen
              intelligible different words or fewer, in the course of an average
              day or in the course of an intensive interview.
            </div>
          </div>
          <div class="flex-center-1 bg-grey">
            <div class="inline-block width-40"><input type="radio" />7B</div>
            <div class="inline-block w-90">
              Speech ability is limited to the use of a single intelligible word
              in an average day or in the course of an intensive interview (the
              person may repeat the word over and over.)
            </div>
          </div>
          <div class="flex">
            <div class="inline-block width-40"><input type="radio" />7C</div>
            <div class="inline-block">
              Ambulatory ability is lost (cannot walk without personal
              assistance.)
            </div>
          </div>
          <div class="flex bg-grey">
            <div class="inline-block width-40"><input type="radio" />7D</div>
            <div class="inline-block">
              Cannot sit up without assistance (e.g. the individual will fall
              over if there are not lateral rest arms on the chair.)
            </div>
          </div>
          <div class="flex">
            <div class="inline-block width-40"><input type="radio" />7E</div>
            <div class="inline-block">Loss of ability to smile.</div>
          </div>
          <div class="flex bg-grey">
            <div class="inline-block width-40"><input type="radio" />7F</div>
            <div class="inline-block">
              Loss of ability to hold up head independently.
            </div>
          </div>
          <div>
            <div class="inline-block">
              * Scored primarily on the basis of information obtained from
              knowledgeable informant and/or category.
            </div>
          </div>
        </div>
        <br />
        <table>
          <tr>
            <td class="bg-blue f-bold pad-3">Supportive Assistance</td>
          </tr>
          <tr class="b-btm">
            <td class="pad-3 b-btm">
              <div class="flex">
                <div class="inline-block w-50">
                  <div>
                    <div class="flex">
                      <div class="f-bold inline-block w-60">
                        Does a Primary Caregiver exist? *
                      </div>
                      <div class="inline-block">
                        <div class="inline-block width-60">
                          <input type="radio" /> Yes
                        </div>
                        <div class="inline-block">
                          <input type="radio" /> No
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="flex">
                      <div class="inline-block w-60">
                        Primary Caregiver First Name
                      </div>
                      <div><input type="text" /></div>
                    </div>
                  </div>
                </div>
                <div class="inline-block w-50">
                  <div class="f-bold">Type of Primary Caregiver Assistance</div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" />ADL (bathing, dressing,
                      toileting, bowel/bladder, eating/feeding)
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="page">
        <div class="bg-grey flex-between flex-center-1">
          <div class="f-bold">RN Recertification - ADLs (Activities of Daily Life)</div>
          <div>
            <table class="f-bold pad-5 bg-white">
              <tr>
                <td>
                  Patient Name (Last Name, First Name) & <br />
                  MRN: <input type="text" class="w-80 bg-none" />
                </td>
                <td class="width-150">
                  Date: <br />
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />
                </td>
              </tr>
            </table>
          </div>
        </div>
        <br />
        <table>
          <tr>
            <td class="bg-blue f-bold pad-3">Supportive Assistance</td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex">
                <div class="inline-block w-50">
                  <div>
                    <div class="flex">
                      <div class="inline-block w-60">
                        Primary Caregiver Last Name
                      </div>
                      <div><input type="text" /></div>
                    </div>
                  </div>
                  <div>
                    <div class="flex">
                      <div class="inline-block w-60">
                        Primary Caregiver Phone
                      </div>
                      <div><input type="text" /></div>
                    </div>
                  </div>
                </div>
                <div class="inline-block w-50">
                  <div>
                    <div class="flex-top">
                      <input type="checkbox" />ADL (meds, meals, housekeeping,
                      laundry, telephone, shopping, finances)
                    </div>
                  </div>
                  <div>
                    <div class="flex-top">
                      <input type="checkbox" />Environmental support
                      (socialization, companionship, recreation)
                    </div>
                  </div>
                  <div>
                    <div class="flex-top">
                      <input type="checkbox" />Psychosocial support
                      (socialization, companionship, recreation)
                    </div>
                  </div>
                  <div>
                    <div class="flex-top">
                      <input type="checkbox" />Assistance w/medical appts,
                      delivery of medications
                    </div>
                  </div>
                  <div>
                    <div class="flex-top">
                      <input type="checkbox" />Financial agent, power of atty,
                      or conservator of finance
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex">
                <div class="inline-block w-50">
                  <div>
                    <div class="flex">
                      <div class="f-bold inline-block w-60">Relationship</div>
                    </div>
                  </div>
                  <br />
                  <div>
                    <div class="flex">
                      <div class="inline-block w-60">
                        <input type="radio" /> Spouse or Significant Other
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="flex">
                      <div class="inline-block w-60">
                        <input type="radio" /> Daughter or Son
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="flex">
                      <div class="inline-block w-60">
                        <input type="radio" /> Other Family Member
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="flex">
                      <div class="inline-block">
                        <input type="radio" /> Friend / Neighbor / Community /
                        Church Member
                      </div>
                    </div>
                  </div>
                </div>
                <div class="inline-block w-50">
                  <div class="f-bold">
                    How often does the patient receive assistance from the
                    Primary Caregiver?
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="radio" />Several Times during the day and
                      night
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="radio" />Several times during the day
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="radio" />Once Daily
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="radio" />Three or more times per week
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="flex">
                <div class="inline-block w-50">
                  <div>
                    <div class="flex">
                      <div class="inline-block w-60">
                        <input type="radio" /> Paid Help
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="flex">
                      <div class="inline-block w-60">
                        <input type="radio" /> Unknown
                      </div>
                    </div>
                  </div>
                </div>
                <div class="inline-block w-50">
                  <div>
                    <div class="flex-center-1">
                      <input type="radio" />One to two times per week
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="radio" />Less often than weekly
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="radio" />Unknown
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="">
              <div class="flex">
                <div class="border w-50 pad-3 b-btm b-left b-top">
                  <div class="f-bold">Evidence of Primary Caregiver abuse</div>
                  <div class="inline-block w-40">
                    <div class="flex-center-1">
                      <input type="checkbox" />None
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />Potential
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />Advanced
                    </div>
                  </div>
                  <div class="inline-block">
                    <div class="flex-center-1">
                      <input type="checkbox" />Verbal / emotional
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />Physical
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" />Financial
                    </div>
                  </div>
                </div>
                <div class="w-50">
                  <div class="flex-column">
                    <div class="border b-left b-right b-top pad-3">
                      <div class="f-bold">
                        Verbalizes understanding / knowledge of the disease
                        process
                      </div>
                      <div class="inline-block w-30">
                        <div class="flex-center-1">
                          <input type="checkbox" /> Patient
                        </div>
                      </div>
                      <div class="inline-block">
                        <div class="flex-center-1">
                          <input type="checkbox" /> Primary Caregiver
                        </div>
                      </div>
                    </div>
                    <div class="border b-left b-right b-top pad-3">
                      <div class="f-bold">
                        Verbalizes understanding / knowledge of the prognosis
                      </div>
                      <div class="inline-block w-30">
                        <div class="flex-center-1">
                          <input type="checkbox" /> Patient
                        </div>
                      </div>
                      <div class="inline-block">
                        <div class="flex-center-1">
                          <input type="checkbox" /> Primary Caregiver
                        </div>
                      </div>
                    </div>
                    <div class="border b-left b-right b-top b-btm pad-3">
                      <div class="inline-block">Is Hospice Aide needed?</div>
                      <div class="inline-block w-20">
                        <input type="radio" /> Yes
                      </div>
                      <div class="inline-block"><input type="radio" /> No</div>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="b-none bg-grey">
                <div class="pad-3 f-bold">
                  Additional Comments
                  <div class="border bg-white height-60">
                    <input type="text" class="w-100 bg-none" />
                    <input type="text" class="w-100 bg-none" />
                    <input type="text" class="w-100 bg-none" />
                  </div>
                </div>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="page">
        <div class="bg-grey flex-between flex-center-1">
          <div class="f-bold">RN Recertification - ADLs (Activities of Daily Life)</div>
          <div>
            <table class="f-bold pad-5 bg-white">
              <tr>
                <td>
                  Patient Name (Last Name, First Name) & <br />
                  MRN: <input type="text" class="w-80 bg-none" />
                </td>
                <td class="width-150">
                  Date: <br />
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />
                </td>
              </tr>
            </table>
          </div>
        </div>
        <br />
        <br />
        <div class="f-bold">Psychological/Neurological</div>
        <table>
          <tr>
            <td class="bg-blue f-bold pad-3">Psychological Status</td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex-top">
                <div class="inline-block w-20">
                  <div class="f-bold">Overall Mental Status</div>
                  <div class="flex"><input type="checkbox" /> Alert</div>
                  <div class="flex"><input type="checkbox" /> Forgetful</div>
                  <div class="flex"><input type="checkbox" /> Confused</div>
                  <div class="flex"><input type="checkbox" /> Lethargic</div>
                  <div class="flex"><input type="checkbox" /> Agitated</div>
                  <div class="flex"><input type="checkbox" /> Combative</div>
                  <div class="flex">
                    <input type="checkbox" /> Other
                    <input type="text" class="w-40" />
                  </div>
                </div>
                <div class="inline-block w-10">
                  <div class="f-bold">Alerted To</div>
                  <div class="flex"><input type="checkbox" /> Person</div>
                  <div class="flex"><input type="checkbox" /> Place</div>
                  <div class="flex"><input type="checkbox" /> Time</div>
                </div>
                <div class="inline-block w-20">
                  <div class="f-bold">Responsiveness</div>
                  <div class="flex">
                    <input type="checkbox" /> Non-responsive
                  </div>
                  <div class="flex">
                    <input type="checkbox" /> Minimally-responsive
                  </div>
                  <div class="flex">
                    <input type="checkbox" /> Semi-responsive
                  </div>
                  <div class="flex">
                    <input type="checkbox" /> Fully-responsive
                  </div>
                </div>
                <div class="inline-block w-20">
                  <div class="f-bold">Responds To</div>
                  <div class="flex">
                    <input type="checkbox" /> Verbal Stimuli
                  </div>
                  <div class="flex">
                    <input type="checkbox" /> Tactile Stimuli
                  </div>
                  <div class="flex">
                    <input type="checkbox" /> Painful Stimuli
                  </div>
                </div>
                <div class="inline-block">
                  <div class="f-bold">When Confused (Reported or Observed)</div>
                  <div class="flex">
                    <input type="checkbox" /> In new or complex situations only
                  </div>
                  <div class="flex">
                    <input type="checkbox" /> On awakening or at night only
                  </div>
                  <div class="flex">
                    <input type="checkbox" /> During the day and evening, but
                    not constantly
                  </div>
                  <div class="flex"><input type="checkbox" /> Constantly</div>
                  <div class="flex"><input type="checkbox" /> Never</div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="flex">
                <div class="border b-btm b-top b-left pad-3">
                  <div class="f-bold">Depressed</div>
                  <div class="flex">
                    <input type="checkbox" /> 10 - Most Depressed
                  </div>
                  <div class="flex"><input type="checkbox" /> 9</div>
                  <div class="flex"><input type="checkbox" /> 8</div>
                  <div class="flex"><input type="checkbox" /> 7</div>
                  <div class="flex"><input type="checkbox" /> 6</div>
                  <div class="flex"><input type="checkbox" /> 5</div>
                  <div class="flex"><input type="checkbox" /> 4</div>
                  <div class="flex"><input type="checkbox" /> 3</div>
                  <div class="flex"><input type="checkbox" /> 2</div>
                  <div class="flex"><input type="checkbox" /> 1</div>
                  <div class="flex">
                    <input type="checkbox" /> 0 - Not Depressed
                  </div>
                </div>
                <div class="border b-btm b-top b-left pad-3">
                  <div class="f-bold">Anxious</div>
                  <div class="flex">
                    <input type="checkbox" /> 10 - Most Anxious
                  </div>
                  <div class="flex"><input type="checkbox" /> 9</div>
                  <div class="flex"><input type="checkbox" /> 8</div>
                  <div class="flex"><input type="checkbox" /> 7</div>
                  <div class="flex"><input type="checkbox" /> 6</div>
                  <div class="flex"><input type="checkbox" /> 5</div>
                  <div class="flex"><input type="checkbox" /> 4</div>
                  <div class="flex"><input type="checkbox" /> 3</div>
                  <div class="flex"><input type="checkbox" /> 2</div>
                  <div class="flex"><input type="checkbox" /> 1</div>
                  <div class="flex">
                    <input type="checkbox" /> 0 - Not Anxious
                  </div>
                </div>
                <div class="border b-btm b-top b-left pad-3">
                  <div class="f-bold">Tiredness</div>
                  <div class="flex">
                    <input type="checkbox" /> 10 - Most Tired
                  </div>
                  <div class="flex"><input type="checkbox" /> 9</div>
                  <div class="flex"><input type="checkbox" /> 8</div>
                  <div class="flex"><input type="checkbox" /> 7</div>
                  <div class="flex"><input type="checkbox" /> 6</div>
                  <div class="flex"><input type="checkbox" /> 5</div>
                  <div class="flex"><input type="checkbox" /> 4</div>
                  <div class="flex"><input type="checkbox" /> 3</div>
                  <div class="flex"><input type="checkbox" /> 2</div>
                  <div class="flex"><input type="checkbox" /> 1</div>
                  <div class="flex">
                    <input type="checkbox" /> 0 - Not Tired
                  </div>
                </div>
                <div class="border b-btm b-top b-left b-right pad-3">
                  <div class="f-bold">Well-Being</div>
                  <div class="flex">
                    <input type="checkbox" /> 10 - Worst possible feeling of
                    well-being
                  </div>
                  <div class="flex"><input type="checkbox" /> 9</div>
                  <div class="flex"><input type="checkbox" /> 8</div>
                  <div class="flex"><input type="checkbox" /> 7</div>
                  <div class="flex"><input type="checkbox" /> 6</div>
                  <div class="flex"><input type="checkbox" /> 5</div>
                  <div class="flex"><input type="checkbox" /> 4</div>
                  <div class="flex"><input type="checkbox" /> 3</div>
                  <div class="flex"><input type="checkbox" /> 2</div>
                  <div class="flex"><input type="checkbox" /> 1</div>
                  <div class="flex">
                    <input type="checkbox" /> 0 - Best feeling of well-being
                  </div>
                </div>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="page">
        <div class="bg-grey flex-between flex-center-1">
          <div class="f-bold">RN Recertification - ADLs (Activities of Daily Life)</div>
          <div>
            <table class="f-bold pad-5 bg-white">
              <tr>
                <td>
                  Patient Name (Last Name, First Name) & <br />
                  MRN: <input type="text" class="w-80 bg-none" />
                </td>
                <td class="width-150">
                  Date: <br />
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />
                </td>
              </tr>
            </table>
          </div>
        </div>
        <br />
        <br />
        <table>
          <tr>
            <td class="f-bold bg-blue pad-3">Neurological Status</td>
          </tr>
          <tr>
            <td>
              <div class="flex">
                <div class="border b-top b-left b-btm pad-3">
                  <div class="f-bold">Overall Neurological Status</div>
                  <div class="inline-block width-150">
                    <div class="flex-center-1">
                      <input type="checkbox" /> Sedated
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Non-verbal
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Speech - clear
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Speech - garbled
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Aphasia - receptive
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Aphasia - expressive
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Nuchal rigidity
                    </div>
                  </div>
                  <div class="inline-block">
                    <div class="flex-center-1">
                      <input type="checkbox" /> Grips - equal
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Grips - strong
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Grips - unequal
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Grips - weak
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Tremors
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Seizures
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Numbness / tingling
                    </div>
                  </div>
                </div>
                <div class="border b-top b-left b-btm b-right pad-3">
                  <div class="f-bold">Overall Emotional Status</div>
                  <div class="flex-top">
                    <div class="inline-block width-150">
                      <div class="flex-center-1">
                        <input type="checkbox" /> Disoriented
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Flat Affect
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Agitated
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Angry
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Discourage
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Withdrawn
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Difficulty coping
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Disorganized
                      </div>
                    </div>
                    <div class="inline-block">
                      <div class="flex-center-1">
                        <input type="checkbox" /> No meaningful verbal
                        communication
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Lack of motivation
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Inability to recognize
                        problems
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Unrealistic expectations
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Denial of problems
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Disengaged
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> None of the Above
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="f-bold">Paralysis</div>
              <div class="inline-block w-20">
                <div class="flex-center-1"><input type="checkbox">Left Upper Extremity</div>
              </div>
              <div class="inline-block w-20">
                <div class="flex-center-1"><input type="checkbox">Left Lower Extremity</div>
              </div>
              <div class="inline-block w-20">
                <div class="flex-center-1"><input type="checkbox">Right Upper Extremity</div>
              </div>
              <div class="inline-block w-20">
                <div class="flex-center-1"><input type="checkbox">Right Lower Extremity</div>
              </div>
            </td>
          </tr>
        </table> <br> <br>
        <div class="border">
          <div class="bg-blue f-bold pad-3">Sleep / Rest</div>
          <div class="inline-block pad-3 w-30">
            <div class="f-bold">Patient Usually Sleeps</div>
            <div class="flex-center-1"><input type="checkbox"> Less Than 4 hours per day</div>
            <div class="flex-center-1"><input type="checkbox"> 4-6 hours per day</div>
            <div class="flex-center-1"><input type="checkbox"> 6-8 hours per day</div>
            <div class="flex-center-1"><input type="checkbox"> 8-12 hours per day</div>
            <div class="flex-center-1"><input type="checkbox"> Other: <input type="text"></div>
          </div>
          <div class="inline-block w-30">
            <div class="f-bold">Quality of Sleep</div>
            <div class="flex-center-1"><input type="checkbox"> Quit / Restful</div>
            <div class="flex-center-1"><input type="checkbox"> Restless / Noisy</div>
            <div class="flex-center-1"><input type="checkbox"> Soundly</div>
            <div class="flex-center-1"><input type="checkbox"> Frequently interrupted</div>
            <div class="flex-center-1"><input type="checkbox"> Frequent dreams / nightmares</div>
          </div>
          <div class="inline-block w-30">
            <div class="f-bold">Use of Sleep Aids</div>
            <div class="flex-center-1"><input type="checkbox"> Never</div>
            <div class="flex-center-1"><input type="checkbox"> 1-3 times / week</div>
            <div class="flex-center-1"><input type="checkbox"> 4-6 times / week</div>
            <div class="flex-center-1"><input type="checkbox"> Nightly</div>
            <div class="flex-center-1"><input type="checkbox"> Other: <input type="text"></div>
          </div>
        </div> <br> <br>
        <div class="border">
          <div class="bg-blue f-bold pad-3">Spiritual / Religion</div>
          <div class="flex-top pad-3">
            <div class="inline-block w-20">Primary Religion:</div>
            <div class="inline-block width-125">
              <div class="flex-center-1">
                <input type="checkbox"> Not Available
              </div>
              <div class="flex-center-1">
                <input type="checkbox"> Assembly of God
              </div>
              <div class="flex-center-1">
                <input type="checkbox"> Church of Christ
              </div>
              <div class="flex-center-1">
                <input type="checkbox"> Hindu
              </div>
              <div class="flex-center-1">
                <input type="checkbox"> Methodist
              </div>
              <div class="flex-center-1">
                <input type="checkbox"> Protestant
              </div>
              <div class="flex-center-1">
                <input type="checkbox"> Seventh-Day Adventist
              </div>
            </div>
            <div class="inline-block width-125">
              <div class="flex-center-1">
                <input type="checkbox"> Agnostic
              </div>
              <div class="flex-center-1">
                <input type="checkbox"> Baptist
              </div>
              <div class="flex-center-1">
                <input type="checkbox"> Community of Christ
              </div>
              <div class="flex-center-1">
                <input type="checkbox"> Islam
              </div>
              <div class="flex-center-1">
                <input type="checkbox"> Mormon (LDS)
              </div>
              <div class="flex-center-1">
                <input type="checkbox"> Scientology
              </div>
            </div>
            <div class="inline-block width-125">
              <div class="flex-center-1">
                <input type="checkbox"> American Indian
              </div>
              <div class="flex-center-1">
                <input type="checkbox"> Buddhism
              </div>
              <div class="flex-center-1">
                <input type="checkbox"> Episcopal
              </div>
              <div class="flex-center-1">
                <input type="checkbox"> Jehovah Witness
              </div>
              <div class="flex-center-1">
                <input type="checkbox"> Other
              </div>
              <div class="flex-center-1">
                <input type="checkbox"> Unaffiliated
              </div>
            </div>
            <div class="inline-block width-125">
              <div class="flex-center-1">
                <input type="checkbox"> Amish
              </div>
              <div class="flex-center-1">
                <input type="checkbox"> Catholic
              </div>
              <div class="flex-center-1">
                <input type="checkbox"> Glorious Church
              </div>
              <div class="flex-center-1">
                <input type="checkbox"> Judaism
              </div>
              <div class="flex-center-1">
                <input type="checkbox"> Pentecostal
              </div>
              <div class="flex-center-1">
                <input type="checkbox"> Unity Church
              </div>
            </div>
            <div class="inline-block width-125">
              <div class="flex-center-1">
                <input type="checkbox"> Apolstic
              </div>
              <div class="flex-center-1">
                <input type="checkbox"> Christian
              </div>
              <div class="flex-center-1">
                <input type="checkbox"> Greek Orthodox
              </div>
              <div class="flex-center-1">
                <input type="checkbox"> Lutheran
              </div>
              <div class="flex-center-1">
                <input type="checkbox"> Presbyterian
              </div>
              <div class="flex-center-1">
                <input type="checkbox"> Unknown
              </div>
            </div>
          </div>
          <div class="flex-top pad-3">
            <div class="inlnie-block w-20">Level of Religious Affiliation</div>
            <div class="inlnie-block width-125">
              <div class="flex-center-1">
                <input type="checkbox"> Very Religious
              </div>
            </div>
            <div class="inlnie-block width-125">
              <div class="flex-center-1">
                <input type="checkbox"> Fairly Religious
              </div>
            </div>
            <div class="inlnie-block width-125">
              <div class="flex-center-1">
                <input type="checkbox"> Slightly Religious
              </div>
            </div>
            <div class="inlnie-block width-125">
              <div class="flex-center-1">
                <input type="checkbox"> Not Religious
              </div>
            </div>
            <div class="inlnie-block width-125">
              <div class="flex-center-1">
                <input type="checkbox"> Against Religious
              </div>
            </div>
          </div>
          <div class="flex-top">
            <div class="inline-block pad-3">
              <div class="inline-block">
                <div class="flex-column gap-5">
                  <div class="f-bold">Yes</div>
                  <input type="radio">
                  <input type="radio">
                </div>
              </div>
              <div class="inline-block">
                <div class="flex-column gap-5">
                  <div class="f-bold">No</div>
                  <input type="radio">
                  <input type="radio">
                </div>
              </div> 
            </div> 
            <div class="inline-block pad-3">
             <div> <br> Is the patient part of a religious or spiritual community?</div>
             <div>Are the patient's beliefs disrupted by the disease process?</div>
            </div>
          </div>
          
        </div>
      </div>
      <div class="page">
        <div class="bg-grey flex-between flex-center-1">
          <div class="f-bold">RN Recertification - ADLs (Activities of Daily Life)</div>
          <div>
            <table class="f-bold pad-5 bg-white">
              <tr>
                <td>
                  Patient Name (Last Name, First Name) & <br />
                  MRN: <input type="text" class="w-80 bg-none" />
                </td>
                <td class="width-150">
                  Date: <br />
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />
                </td>
              </tr>
            </table>
          </div>
        </div>
        <br />
        <br />
        <br />
        <div class="border">
          <div class="bg-blue f-bold pad-3">HIS Measure</div>
          <div class="">
            <div class="f-bold pad-3">
              Preferences: NQF #1647 Beliefs/Values Addressed
            </div>
            <div class="pad-3">
              (F3000A) Patient and/or caregiver was asked about
              spiritual/existential concerns:
            </div>
            <div class="pad-3">
              <input type="radio" />0. No> Skip to I0010, Principal Diagnosis
            </div>
            <div class="pad-3">
              <input type="radio" />1. Yes, and discussion occurred
            </div>
            <div class="pad-3">
              <input type="radio" />2. but the patient/responsible party refused
              to discuss
            </div>
            <div>
              <div class="flex">
                Please explain: <input type="text" class="height-40 explain" />
              </div>
              <br />
              <div>
                <div class="inline-block w-40">
                  (F3000B) Date the patient and/or caregiver was first asked
                  about spiritual/existential concerns:
                </div>
                <div class="inline-block">
                  <div class="w-40 height-20 border flex-end">
                    <input type="text" class="w-30 bg-none text-center" />/
                    <input type="text" class="w-30 bg-none text-center" />/
                    <input type="text" class="w-30 bg-none text-center" />
                  </div>
                </div>
                <div class="bg-grey">
                  <div class="pad-3 f-bold">
                    Additional Comments
                    <div class="border bg-white height-60">
                      <input type="text" class="w-100 bg-none" />
                      <input type="text" class="w-100 bg-none" />
                      <input type="text" class="w-100 bg-none" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page">
        <div class="bg-grey flex-between flex-center-1">
          <div class="f-bold">RN Recertification - ADLs (Activities of Daily Life)</div>
          <div>
            <table class="f-bold pad-5 bg-white">
              <tr>
                <td>
                  Patient Name (Last Name, First Name) & <br />
                  MRN: <input type="text" class="w-80 bg-none" />
                </td>
                <td class="width-150">
                  Date: <br />
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />
                </td>
              </tr>
            </table>
          </div>
        </div>
        <br />
        <br />
        <br />
        <div class="f-bold">Interaugmentary Wound Care</div>
        <br />
        <table>
          <tr>
            <td class="bg-blue f-bold pad-3">
              Braden Scale for Predicting Pressure Sore Risk
            </td>
          </tr>
          <tr>
            <td>
              <div class="flex">
                <div class="grid-braden pad-5">
                  <div class="border">
                    <div>
                      <div class="bg-grey text-center pad-3 f-bold">
                        SENSORY PERCEPTION
                      </div>
                      <div class="text-justify pad-3">
                        ability to respond meaningfully to pressure related
                        discomfort
                      </div>
                    </div>
                  </div>
                  <div class="border">
                    <div>
                      <div class="bg-grey text-center pad-3 f-bold">
                        1. Completely Limited
                      </div>
                      <div class="text-justify pad-3">
                        <div>
                          Unresponsive (does not moan, flinch, or grasp) to
                          painful stimuli, due to diminished level of
                          consciousness or sedation
                        </div>
                        <div class="text-center">OR</div>
                        <div>
                          limited ability to feel pain over most of body.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border">
                    <div>
                      <div class="bg-grey text-center pad-3 f-bold">
                        2. Very Limited
                      </div>
                      <div class="text-justify pad-3">
                        <div>
                          Responds only to painful stimuli. Cannot communicate
                          discomfort except by moaning or restlessness
                        </div>
                        <div class="text-center">OR</div>
                        <div>
                          has a sensory impairment which limits the ability to
                          feel pain or discomfort over 1/2 of body.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border">
                    <div>
                      <div class="bg-grey text-center pad-3 f-bold">
                        3. Slightly Limited
                      </div>
                      <div class="text-justify pad-3">
                        <div>
                          Responds to verbal commands, but cannot always
                          communicate discomfort or the need to be turned
                        </div>
                        <div class="text-center">OR</div>
                        <div>
                          has some sensory impairment which limits ability to
                          feel pain or discomfort in 1 or 2 extremities.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border">
                    <div>
                      <div class="bg-grey text-center pad-3 f-bold">
                        4. No Impairment
                      </div>
                      <div class="text-justify pad-3">
                        Responds to verbal commands. Has no sensory deficit
                        which would limit ability to feel or voice pain or
                        discomfort.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pad-5">
                  <div>
                    <div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> 1
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> 2
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> 3
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> 4
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="flex">
                <div class="grid-braden pad-5">
                  <div class="border">
                    <div>
                      <div class="bg-grey text-center pad-3 f-bold">
                        MOISTURE
                      </div>
                      <div class="text-justify pad-3">
                        degree to which skin is exposed to moisture
                      </div>
                    </div>
                  </div>
                  <div class="border">
                    <div>
                      <div class="bg-grey text-center pad-3 f-bold">
                        1. Constantly Moist
                      </div>
                      <div class="text-justify pad-3">
                        <div>
                          Skin is kept moist almost constantly by perspiration,
                          urine, etc. Dampness is detected every time patient is
                          moved or turned.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border">
                    <div>
                      <div class="bg-grey text-center pad-3 f-bold">
                        2. Often Moist
                      </div>
                      <div class="text-justify pad-3">
                        <div>
                          Responds only to painful stimuli. Cannot communicate
                          discomfort except by moaning or restlessness
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border">
                    <div>
                      <div class="bg-grey text-center pad-3 f-bold">
                        3. Occasionally Moist
                      </div>
                      <div class="text-justify pad-3">
                        <div>
                          Skin is occasionally moist, requiring an extra liner
                          change approximately once a day.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border">
                    <div>
                      <div class="bg-grey text-center pad-3 f-bold">
                        4. Rarely Moist
                      </div>
                      <div class="text-justify pad-3">
                        Skin is usually dry; Linen only requires changing at
                        routine intervals.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pad-5">
                  <div>
                    <div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> 1
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> 2
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> 3
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> 4
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="flex">
                <div class="grid-braden pad-5">
                  <div class="border">
                    <div>
                      <div class="bg-grey text-center pad-3 f-bold">
                        ACTIVITY
                      </div>
                      <div class="text-justify pad-3">
                        degree of physical activity
                      </div>
                    </div>
                  </div>
                  <div class="border">
                    <div>
                      <div class="bg-grey text-center pad-3 f-bold">
                        1. Bedfast
                      </div>
                      <div class="text-justify pad-3">
                        <div>Confined to bed.</div>
                      </div>
                    </div>
                  </div>
                  <div class="border">
                    <div>
                      <div class="bg-grey text-center pad-3 f-bold">
                        2. Chairfast
                      </div>
                      <div class="text-justify pad-3">
                        <div>
                          Ability to walk severely limited or non-existent.
                          Cannot bear own weight and/or must be assisted into
                          chair or wheelchair.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border">
                    <div>
                      <div class="bg-grey text-center pad-3 f-bold">
                        3. Walks Occasionally
                      </div>
                      <div class="text-justify pad-3">
                        <div>
                          Walks occasionally during day, but for very short
                          distances, with or without assistance. Spends majority
                          of day in bed or chair.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border">
                    <div>
                      <div class="bg-grey text-center pad-3 f-bold">
                        4. Walks Frequently
                      </div>
                      <div class="text-justify pad-3">
                        Walks outside bedroom twice a day and inside room at
                        least once every two hours during waking hours.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pad-5">
                  <div>
                    <div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> 1
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> 2
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> 3
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> 4
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="flex">
                <div class="grid-braden pad-5">
                  <div class="border">
                    <div>
                      <div class="bg-grey text-center pad-3 f-bold">
                        MOBILITY
                      </div>
                      <div class="text-justify pad-3">
                        ability to change and control body position
                      </div>
                    </div>
                  </div>
                  <div class="border">
                    <div>
                      <div class="bg-grey text-center pad-3 f-bold">
                        1. Completely Immobile
                      </div>
                      <div class="text-justify pad-3">
                        <div>
                          Does not make even slight changes in body or extremity
                          position without assistance.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border">
                    <div>
                      <div class="bg-grey text-center pad-3 f-bold">
                        2. Very Limited
                      </div>
                      <div class="text-justify pad-3">
                        <div>
                          Makes occasional slight changes in body or extremity
                          position but unable to make frequent or significant
                          changes independently.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border">
                    <div>
                      <div class="bg-grey text-center pad-3 f-bold">
                        3. Slightly Limited
                      </div>
                      <div class="text-justify pad-3">
                        <div>
                          Makes frequent though slight changes in body or
                          extremity position independently.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border">
                    <div>
                      <div class="bg-grey text-center pad-3 f-bold">
                        4. No Limitation
                      </div>
                      <div class="text-justify pad-3">
                        Makes major and frequent changes in position without
                        assistance.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pad-5">
                  <div>
                    <div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> 1
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> 2
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> 3
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> 4
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="page">
        <div class="bg-grey flex-between flex-center-1">
          <div class="f-bold">RN Recertification - ADLs (Activities of Daily Life)</div>
          <div>
            <table class="f-bold pad-5 bg-white">
              <tr>
                <td>
                  Patient Name (Last Name, First Name) & <br />
                  MRN: <input type="text" class="w-80 bg-none" />
                </td>
                <td class="width-150">
                  Date: <br />
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />
                </td>
              </tr>
            </table>
          </div>
        </div>
        <br />
        <br />
        <table>
          <tr>
            <td class="bg-blue f-bold pad-3">
              Braden Scale for Predicting Pressure Sore Risk
            </td>
          </tr>
          <tr>
            <td>
              <div class="flex">
                <div class="grid-braden pad-5">
                  <div class="border">
                    <div>
                      <div class="bg-grey text-center pad-3 f-bold">
                        NUTRITION
                      </div>
                      <div class="text-justify pad-3">
                        <div>usual food intake pattern</div>
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <div class="f-bold">FRICTION & SHEAR</div>
                      </div>
                    </div>
                  </div>
                  <div class="border">
                    <div>
                      <div class="bg-grey text-center pad-3 f-bold">
                        1. Very Poor
                      </div>
                      <div class="text-justify pad-3">
                        <div>
                          Never eats a complete meal. Rarely eats more than 1/3
                          of any food offered. Eats 2 servings or less of
                          protein (meat or dairy products) per day. Takes fluids
                          poorly. Does not take a liquid dietary supplement
                        </div>
                        <div class="text-center">OR</div>
                        <div>
                          is NPO and/or maintained on clear liquids or IVs for
                          more than 5 days.
                        </div>
                        <br />
                        <div class="f-bold">1. Problem</div>
                        <div>
                          <br />
                          Requires moderate to maximum assistance in moving.
                          Complete lifting without sliding against sheets is
                          impossible. Frequently slides down in bed or chair,
                          requiring frequent repositioning with maximum
                          assistance. Spasticity, contractures or agitation
                          leads to almost constant friction.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border">
                    <div>
                      <div class="bg-grey text-center pad-3 f-bold">
                        3. Adequate
                      </div>
                      <div class="text-justify pad-3">
                        <div>
                          Rarely eats a complete meal and generally eats only
                          about 1/2 of any food offered. Protein intake includes
                          only 3 servings of meat or dairy products per day.
                          Occasionally will take a dietary supplement
                        </div>
                        <div class="text-center">OR</div>
                        <div>
                          receives less than optimum amount of liquid diet or
                          tube feeding.
                        </div>
                        <br />
                        <div class="f-bold">2. Potential Problem</div>
                        <div>
                          <br />
                          Moves feebly or requires minimum assistance. During a
                          move skin probably slides to some extent against
                          sheets, chair, restraints or other devices. Maintains
                          relatively good position in chair or bed most of the
                          time but occasionally slides down.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border">
                    <div>
                      <div class="bg-grey text-center pad-3 f-bold">
                        3. Slightly Limited
                      </div>
                      <div class="text-justify pad-3">
                        <div>
                          Eats over half of most meals. Eats a total of 4
                          servings of protein (meat, dairy products) per day.
                          Occasionally will refuse a meal, but will usually take
                          a supplement when offered
                        </div>
                        <div class="text-center">OR</div>
                        <div>
                          is on a tube feeding or TPN regimen which probably
                          meets most of nutritional needs.
                        </div>
                        <br />
                        <div class="f-bold">3. No Apparent Problem</div>
                        <div>
                          <br />
                          Moves in bed and in chair independently and has
                          sufficient muscle strength to lift up completely
                          during move. Maintains good position in bed or chair
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="border">
                    <div>
                      <div class="bg-grey text-center pad-3 f-bold">
                        4. Excellent
                      </div>
                      <div class="text-justify pad-3">
                        Eats most of every meal. Never refuses a meal. Usually
                        eats a total of 4 or more servings of meat and dairy
                        products. Occasionally eats between meals. Does not
                        require supplementation.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pad-5">
                  <div>
                    <div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> 1
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> 2
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> 3
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> 4
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        </table>
        <br />
        <table>
          <tr>
            <td class="bg-blue f-bold pad-3">Integumentary Status</td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex">
                <div class="inline-block w-20">Skin Turgor:</div>
                <div class="inline-block w-20">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Good
                  </div>
                </div>
                <div class="inline-block w-20">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Fair
                  </div>
                </div>
                <div class="inline-block">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Poor
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex">
                <div class="inline-block w-20">Skin Color:</div>
                <div class="inline-block w-20">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Pink/WNL
                  </div>
                </div>
                <div class="inline-block w-20">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Pale
                  </div>
                </div>
                <div class="inline-block w-20">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Jaundice
                  </div>
                </div>
                <div class="inline-block">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Cyanotic
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex-top">
                <div class="inline-block w-20">Skin:</div>
                <div class="inline-block w-20">
                  <div class="flex-center-1"><input type="checkbox" /> Dry</div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Wound
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Ostomy
                  </div>
                </div>
                <div class="inline-block w-20">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Diaphoretic
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Ulcer
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Other
                  </div>
                </div>
                <div class="inline-block w-20">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Warm
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Incision
                  </div>
                </div>
                <div class="inline-block">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Cool
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Rash
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex">
                <div class="inline-block w-40">
                  <div>Instructed on measures to control infections?</div>
                </div>
                <div class="inline-block w-10">
                  <div class="flex-center-1"><input type="checkbox" /> Yes</div>
                </div>
                <div class="inline-block">
                  <div class="flex-center-1"><input type="checkbox" /> No</div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex">
                <div class="inline-block w-20">Nails:</div>
                <div class="inline-block w-20">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Good
                  </div>
                </div>
                <div class="inline-block">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Problems
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex">
                <div class="inline-block w-40">
                  <div>Is the patient using pressure-relieving device(s)?</div>
                </div>
                <div class="inline-block w-10">
                  <div class="flex-center-1"><input type="checkbox" /> Yes</div>
                </div>
                <div class="inline-block">
                  <div class="flex-center-1"><input type="checkbox" /> No</div>
                </div>
              </div>
              <div>Type:<input type="text" class="w-90" /></div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="bg-blue f-bold pad-3">Additional Comments</div>
              <br />
              <div>
                <div>
                  <div class="pad-3">User Template: <input type="text" /></div>
                  <br />
                  <div class="pad-3">
                    <div class="border bg-white height-60">
                      <input type="text" class="w-100 bg-none" />
                      <input type="text" class="w-100 bg-none" />
                      <input type="text" class="w-100 bg-none" />
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="page">
        <div class="bg-grey flex-between flex-center-1">
          <div class="f-bold">RN Recertification - ADLs (Activities of Daily Life)</div>
          <div>
            <table class="f-bold pad-5 bg-white">
              <tr>
                <td>
                  Patient Name (Last Name, First Name) & <br />
                  MRN: <input type="text" class="w-80 bg-none" />
                </td>
                <td class="width-150">
                  Date: <br />
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />
                </td>
              </tr>
            </table>
          </div>
        </div>
        <br />
        <br />
        <table>
          <tr>
            <td class="bg-blue f-bold pad-3">Wound Care Worksheet</td>
          </tr>
          <tr>
            <td>
              <div class="img flex-center-align">
                <img
                  src="data:image/png;base64,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"
                  alt=""
                />
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex">
                <div class="inline-block width-100 hidden">asdf</div>
                <div class="inlint-block f-bold width-125">Wound One</div>
                <div class="inlint-block f-bold width-125">Wound Two</div>
                <div class="inlint-block f-bold width-125">Wound Three</div>
                <div class="inlint-block f-bold width-125">Wound Four</div>
                <div class="inlint-block f-bold">Wound Five</div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex">
                <div class="inline-block width-100">Location:</div>
                <div class="inline-block width-125">
                  <input type="text" class="width-100" />
                </div>
                <div class="inline-block width-125">
                  <input type="text" class="width-100" />
                </div>
                <div class="inline-block width-125">
                  <input type="text" class="width-100" />
                </div>
                <div class="inline-block width-125">
                  <input type="text" class="width-100" />
                </div>
                <div class="inline-block">
                  <input type="text" class="width-100" />
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex">
                <div class="inline-block width-100">Onset Date:</div>
                <div class="inline-block width-125">
                  <input type="text" class="width-100" />
                </div>
                <div class="inline-block width-125">
                  <input type="text" class="width-100" />
                </div>
                <div class="inline-block width-125">
                  <input type="text" class="width-100" />
                </div>
                <div class="inline-block width-125">
                  <input type="text" class="width-100" />
                </div>
                <div class="inline-block">
                  <input type="text" class="width-100" />
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex">
                <div class="inline-block width-100">Size:</div>
                <div class="inline-block width-125">
                  <input type="text" class="width-100" />
                </div>
                <div class="inline-block width-125">
                  <input type="text" class="width-100" />
                </div>
                <div class="inline-block width-125">
                  <input type="text" class="width-100" />
                </div>
                <div class="inline-block width-125">
                  <input type="text" class="width-100" />
                </div>
                <div class="inline-block">
                  <input type="text" class="width-100" />
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex">
                <div class="inline-block width-100">Drainage:</div>
                <div class="inline-block width-125">
                  <input type="text" class="width-100" />
                </div>
                <div class="inline-block width-125">
                  <input type="text" class="width-100" />
                </div>
                <div class="inline-block width-125">
                  <input type="text" class="width-100" />
                </div>
                <div class="inline-block width-125">
                  <input type="text" class="width-100" />
                </div>
                <div class="inline-block">
                  <input type="text" class="width-100" />
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex">
                <div class="inline-block width-100">Odor:</div>
                <div class="inline-block width-125">
                  <input type="text" class="width-100" />
                </div>
                <div class="inline-block width-125">
                  <input type="text" class="width-100" />
                </div>
                <div class="inline-block width-125">
                  <input type="text" class="width-100" />
                </div>
                <div class="inline-block width-125">
                  <input type="text" class="width-100" />
                </div>
                <div class="inline-block">
                  <input type="text" class="width-100" />
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex-top">
                <div class="inline-block width-100">Ediology:</div>
                <div class="inline-block width-125">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Burn
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Infection
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Pressure
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Surgical
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Traumatic
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Diabetic
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Venous Stasis
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Arterial
                  </div>
                </div>
                <div class="inline-block width-125">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Burn
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Infection
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Pressure
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Surgical
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Traumatic
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Diabetic
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Venous Stasis
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Arterial
                  </div>
                </div>
                <div class="inline-block width-125">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Burn
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Infection
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Pressure
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Surgical
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Traumatic
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Diabetic
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Venous Stasis
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Arterial
                  </div>
                </div>
                <div class="inline-block width-125">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Burn
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Infection
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Pressure
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Surgical
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Traumatic
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Diabetic
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Venous Stasis
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Arterial
                  </div>
                </div>
                <div class="inline-block">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Burn
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Infection
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Pressure
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Surgical
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Traumatic
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Diabetic
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Venous Stasis
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Arterial
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex-top">
                <div class="inline-block width-100">Stage:</div>
                <div class="inline-block width-125">
                  <div class="flex-center-1"><input type="checkbox" /> 1</div>
                  <div class="flex-center-1"><input type="checkbox" /> 2</div>
                  <div class="flex-center-1"><input type="checkbox" /> 3</div>
                  <div class="flex-center-1"><input type="checkbox" /> 4</div>
                </div>
                <div class="inline-block width-125">
                  <div class="flex-center-1"><input type="checkbox" /> 1</div>
                  <div class="flex-center-1"><input type="checkbox" /> 2</div>
                  <div class="flex-center-1"><input type="checkbox" /> 3</div>
                  <div class="flex-center-1"><input type="checkbox" /> 4</div>
                </div>
                <div class="inline-block width-125">
                  <div class="flex-center-1"><input type="checkbox" /> 1</div>
                  <div class="flex-center-1"><input type="checkbox" /> 2</div>
                  <div class="flex-center-1"><input type="checkbox" /> 3</div>
                  <div class="flex-center-1"><input type="checkbox" /> 4</div>
                </div>
                <div class="inline-block width-125">
                  <div class="flex-center-1"><input type="checkbox" /> 1</div>
                  <div class="flex-center-1"><input type="checkbox" /> 2</div>
                  <div class="flex-center-1"><input type="checkbox" /> 3</div>
                  <div class="flex-center-1"><input type="checkbox" /> 4</div>
                </div>
                <div class="inline-block">
                  <div class="flex-center-1"><input type="checkbox" /> 1</div>
                  <div class="flex-center-1"><input type="checkbox" /> 2</div>
                  <div class="flex-center-1"><input type="checkbox" /> 3</div>
                  <div class="flex-center-1"><input type="checkbox" /> 4</div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex">
                <div class="inline-block width-100">Undermining:</div>
                <div class="inline-block width-125">
                  <input type="text" class="width-100" />
                </div>
                <div class="inline-block width-125">
                  <input type="text" class="width-100" />
                </div>
                <div class="inline-block width-125">
                  <input type="text" class="width-100" />
                </div>
                <div class="inline-block width-125">
                  <input type="text" class="width-100" />
                </div>
                <div class="inline-block">
                  <input type="text" class="width-100" />
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex">
                <div class="inline-block width-100">Inflammation:</div>
                <div class="inline-block width-125">
                  <input type="text" class="width-100" />
                </div>
                <div class="inline-block width-125">
                  <input type="text" class="width-100" />
                </div>
                <div class="inline-block width-125">
                  <input type="text" class="width-100" />
                </div>
                <div class="inline-block width-125">
                  <input type="text" class="width-100" />
                </div>
                <div class="inline-block">
                  <input type="text" class="width-100" />
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="inline-block pad-3">Comments:</div>
              <div class="inline-block pad-3">
                User Template: <input type="text" />
              </div>
              <div class="border bg-white height-70">
                <input type="text" class="w-100 bg-none" />
                <input type="text" class="w-100 bg-none" />
                <input type="text" class="w-100 bg-none" />
                <input type="text" class="w-100 bg-none" />
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="page">
        <div class="bg-grey flex-between flex-center-1">
          <div class="f-bold">RN Recertification - Respiratory/Cardiovascular</div>
          <div>
            <table class="f-bold pad-5 bg-white">
              <tr>
                <td>
                  Patient Name (Last Name, First Name) & <br />
                  MRN: <input type="text" class="w-80 bg-none" />
                </td>
                <td class="width-150">
                  Date: <br />
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />
                </td>
              </tr>
            </table>
          </div>
        </div>
        <br />
        <br />
        <div class="f-bold">Respiratory/Cardiovascular</div>
        <br />
        <table>
          <tr>
            <td class="bg-blue pad-3 f-bold">Respiratory / Pulmonary</td>
          </tr>
          <tr>
            <td class="pad-3 f-bold">
              When is the patient dyspneic or noticeably Short of Breath?
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div><input type="radio" />At rest (during day or night)</div>
              <div>
                <input type="radio" />With minimal exertion (e.g. while eating,
                talking, or performing other ADLs) or with agitation
              </div>
              <div>
                <input type="radio" />With moderate exertion (e.g. while
                dressing, using commode or bedpan, walking distances less than
                20 feet)
              </div>
              <div>
                <input type="radio" />When walking more than 20 feet; climbing
                stairs
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="f-bold">
                Does the patient exhibit any of the following?
              </div>
              <div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 1. Disabling dyspnea at rest
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 2. Poorly or unresponsive to
                  bronchodilators
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 3a. Hypoxemia at rest on room air as
                  evidenced by pO2 <= 55 mmHg
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 3b. Hypoxemia as evidenced by oxygen
                  saturation <= 88%, determined by arterial blood gases or
                  oxygen saturation monitors
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 4. Hypercapria as evidenced by pCO2
                  >= 50 mmHg
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> 5. Right Heart Failure (RHF)
                  secondary to pulmonary disease
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="f-bold inline-block">
                Does the patient exhibit an intractable cough?
              </div>
              <div class="inline-block">
                <input type="radio" /> Yes <input type="radio" /> No
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex">
                <div class="flex-grow-1">
                  <div class="f-bold">Lung Sounds:</div>
                  <div class="flex">
                    <div class="inline-block width-100">
                      <div class="flex">
                        <input type="checkbox" class="inline" /> CTA
                      </div>
                    </div>
                    <div class="inline-block"><input type="text" /></div>
                  </div>
                  <div class="flex">
                    <div class="inline-block width-100">
                      <div class="flex">
                        <input type="checkbox" class="inline" /> Rales
                      </div>
                    </div>
                    <div class="inline-block"><input type="text" /></div>
                  </div>
                  <div class="flex">
                    <div class="inline-block width-100">
                      <div class="flex">
                        <input type="checkbox" class="inline" /> Rhonchi
                      </div>
                    </div>
                    <div class="inline-block"><input type="text" /></div>
                  </div>
                  <div class="flex">
                    <div class="inline-block width-100">
                      <div class="flex">
                        <input type="checkbox" class="inline" /> Wheezes
                      </div>
                    </div>
                    <div class="inline-block"><input type="text" /></div>
                  </div>
                  <div class="flex">
                    <div class="inline-block width-100">
                      <div class="flex">
                        <input type="checkbox" class="inline" /> Crackles
                      </div>
                    </div>
                    <div class="inline-block"><input type="text" /></div>
                  </div>
                  <div class="flex">
                    <div class="inline-block width-100">
                      <div class="flex">
                        <input type="checkbox" class="inline" /> Diminished
                      </div>
                    </div>
                    <div class="inline-block"><input type="text" /></div>
                  </div>
                  <div class="flex">
                    <div class="inline-block width-100">
                      <div class="flex">
                        <input type="checkbox" class="inline" /> Absent
                      </div>
                    </div>
                    <div class="inline-block"><input type="text" /></div>
                  </div>
                  <div class="flex">
                    <div class="inline-block width-100">
                      <div class="flex">
                        <input type="checkbox" class="inline" /> Stridor
                      </div>
                    </div>
                    <div class="inline-block"><input type="text" /></div>
                  </div>
                </div>
                <div>
                  <div class="f-bold">Sputum:</div>
                  <div>
                    <div class="flex">
                      <div class="inline-block width-125">Enter amount:</div>
                      <div class="inline-block"><input type="text" /></div>
                    </div>
                    <div class="flex">
                      <div class="inline-block width-125">
                        Describe color, consistency, and odor:
                      </div>
                      <div class="inline-block"><input type="text" /></div>
                    </div>
                  </div>
                  <div class="f-bold">Oxygen:</div>
                  <div class="">
                    <div class="flex">
                      <div class="inline-block width-125">
                        O<sub>2</sub> At:
                      </div>
                      <div class="inline-block"><input type="text" /></div>
                    </div>
                    <div class="flex">
                      <div class="inline-block width-125">LPM via:</div>
                      <div class="inline-block"><input type="text" /></div>
                    </div>
                    <div class="flex-center-1">
                      <div class="inline-block width-125">
                        O<sub>2</sub> Sat:
                      </div>
                      <div class="inline-block"><input type="text" /></div>
                      <div class="inline-block">
                        <div class="inline-block">
                          <div class="flex-center-1">
                            <input type="checkbox" /> Room Air
                          </div>
                        </div>
                        <div class="inline-block">
                          <div class="flex-center-1">
                            <input type="checkbox" /> O<sub>2</sub>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex">
                <div class="border b-top b-left b-btm pad-3 flex">
                  <div class="f-bold inline-block width-50">Cough:</div>
                  <div class="inline-block width-100">
                    <div class="flex-center-1">
                      <input type="checkbox" /> Productive
                    </div>
                  </div>
                  <div class="inline-block">
                    <div class="flex-center-1">
                      <input type="checkbox" /> Nonproductive
                    </div>
                  </div>
                </div>
                <div class="border b-top b-left b-btm b-right pad-3">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Nebulizer:
                    <input type="text" />
                  </div>
                </div>
              </div>
            </td>
          </tr>
        </table>
        <br />
        <div class="border">
          <div class="bg-blue f-bold pad-3">Cardiovascular</div>
          <div class="pad-3">
            <b>New York Heart Association (NYHA) Functional Classification</b>
            (only required for patients with heart disease)
          </div>
          <div class="pad-3">
            <div>
              <input type="radio" /> Cardiac disease, but no symptoms and no
              limitation in ordinary physical activity
            </div>
            <div>
              <input type="radio" /> Mild symptoms (mild shortness of breath and
              / or angina) and slight limitation during ordinary activity
            </div>
            <div>
              <input type="radio" /> Marked limitation in activity due to
              symptoms, even during less-than-ordinary activity (e.g. walking
              short distances). Comfortable only at rest.
            </div>
            <div>
              <input type="radio" /> Severe limitations. Experiences symptoms
              even while at rest. Mostly bedbound patients.
            </div>
          </div>
        </div>
      </div>
      <div class="page">
        <div class="bg-grey flex-between flex-center-1">
          <div class="f-bold">RN Recertification -</div>
          <div>
            <table class="f-bold pad-5 bg-white">
              <tr>
                <td>
                  Patient Name (Last Name, First Name) & <br />
                  MRN: <input type="text" class="w-80 bg-none" />
                </td>
                <td class="width-150">
                  Date: <br />
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />
                </td>
              </tr>
            </table>
          </div>
        </div>
        <br />
        <br />
        <table>
          <tr>
            <td class="bg-blue pad-3 f-bold">Cardiovascular</td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex">
                <div>
                  <div class="flex">
                    <div class="inline-block width-200">
                      <div class="flex-center-1">
                        <input type="checkbox" class="inline-block" /> WNL
                        (Within Normal Limits)
                      </div>
                    </div>
                    <div class="inline-block width-80">
                      <div class="flex-center-1">
                        <input type="checkbox" class="inline-block" />
                      </div>
                    </div>
                    <div class="inline-block width-150">
                      <input type="text" />
                    </div>
                  </div>
                  <br />
                  <div class="flex-top">
                    <div class="inline-block width-100">
                      <div class="flex-center-1">
                        <input type="checkbox" /> Edema:
                      </div>
                    </div>
                    <div>
                      <div>
                        <div class="flex">
                          <input type="text" />
                          <input type="text" class="width-40" />
                        </div>
                      </div>
                      <div>
                        <div class="flex">
                          <input type="text" />
                          <input type="text" class="width-40" />
                        </div>
                      </div>
                      <div>
                        <div class="flex">
                          <input type="text" />
                          <input type="text" class="width-40" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div>
                    <div class="inline-block">
                      <div class="flex-center-1">
                        <input type="checkbox" /> Chest Pain:
                      </div>
                    </div>
                    <div class="inline-block">
                      <input type="text" />
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Dependent Edema:
                    </div>
                  </div>
                  <div>
                    <input type="radio" /> Pitting
                    <input type="radio" /> Nonpitting
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="">
              <div class="flex">
                <div class="pad-3">
                  <div class="f-bold">Heart Sounds:</div>
                  <div class="inline-block width-150">
                    <div class="flex-center-1">
                      <input type="checkbox" /> Regular
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Murmur
                    </div>
                  </div>
                  <div class="inline-block width-200">
                    <div class="flex-center-1">
                      <input type="checkbox" /> Click
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Irregular
                    </div>
                  </div>
                </div>
                <div class="border b-top b-btm b-right pad-3">
                  <div class="inline-block">
                    <div class="flex-center-1">
                      <input type="checkbox" /> Peripheral Pulses
                    </div>
                  </div>
                  <div class="inline-block">
                    <input type="text" />
                  </div>
                  <div>
                    <div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Cap Refill:
                      </div>
                    </div>
                    <div>
                      <input type="radio" /> <3 sec <input type="radio" /> >3sec
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex">
                <div class="w-100">
                  Peacemaker:
                  <input type="text" />
                  (Insertion Date)
                </div>
                <div class="w-100">
                  Peacemaker:
                  <input type="text" />
                  (Insertion Date)
                </div>
              </div>
            </td>
          </tr>
        </table>
        <br />
        <br />
        <br />
        <table>
          <tr>
            <td class="bg-blue pad-3 f-bold">Problems</td>
          </tr>
          <tr>
            <td>
              <div class="flex">
                <div class="border pad-3 b-top b-left">
                  <div>
                    <div class="inline-block">Problem:</div>
                    <div class="inline-block w-80">
                      <input type="text" class="w-100 bg-none" />
                    </div>
                  </div>
                  <div>
                    <div class="inline-block">Identified Date:</div>
                    <div class="inline-block w-70">
                      <input type="text" class="w-100 bg-none" />
                    </div>
                  </div>
                  <div>
                    <div class="inline-block">Intervention:</div>
                    <div class="inline-block w-70">
                      <input type="text" class="w-100 bg-none" />
                    </div>
                  </div>
                  <div>
                    <div class="inline-block">Description:</div>
                    <div class="inline-block w-70">
                      <input type="text" class="w-100 bg-none" />
                    </div>
                  </div>
                  <div>
                    <div class="inline-block">Goal and Management</div>
                    <div>
                      Regimen:<input type="text" class="w-80 bg-none" />
                    </div>
                    <!-- <div class="inline-block w-50"><input type="text" class="w-100"></div> -->
                  </div>
                </div>
                <div class="border b-left b-top b-right pad-3">
                  <div>
                    <div class="inline-block">Problem:</div>
                    <div class="inline-block w-80">
                      <input type="text" class="w-100 bg-none" />
                    </div>
                  </div>
                  <div>
                    <div class="inline-block">Identified Date:</div>
                    <div class="inline-block w-70">
                      <input type="text" class="w-100 bg-none" />
                    </div>
                  </div>
                  <div>
                    <div class="inline-block">Intervention:</div>
                    <div class="inline-block w-70">
                      <input type="text" class="w-100 bg-none" />
                    </div>
                  </div>
                  <div>
                    <div class="inline-block">Description:</div>
                    <div class="inline-block w-70">
                      <input type="text" class="w-100 bg-none" />
                    </div>
                  </div>
                  <div>
                    <div class="inline-block">Goal and Management</div>
                    <div>
                      Regimen:<input type="text" class="w-80 bg-none" />
                    </div>
                    <!-- <div class="inline-block w-50"><input type="text" class="w-100"></div> -->
                  </div>
                </div>
              </div>
              <div class="flex">
                <div class="border pad-3 b-top b-left b-btm">
                  <div>
                    <div class="inline-block">Problem:</div>
                    <div class="inline-block w-80">
                      <input type="text" class="w-100 bg-none" />
                    </div>
                  </div>
                  <div>
                    <div class="inline-block">Identified Date:</div>
                    <div class="inline-block w-70">
                      <input type="text" class="w-100 bg-none" />
                    </div>
                  </div>
                  <div>
                    <div class="inline-block">Intervention:</div>
                    <div class="inline-block w-70">
                      <input type="text" class="w-100 bg-none" />
                    </div>
                  </div>
                  <div>
                    <div class="inline-block">Description:</div>
                    <div class="inline-block w-70">
                      <input type="text" class="w-100 bg-none" />
                    </div>
                  </div>
                  <div>
                    <div class="inline-block">Goal and Management</div>
                    <div>
                      Regimen:<input type="text" class="w-80 bg-none" />
                    </div>
                  </div>
                </div>
                <div class="border bg-none pad-3">
                  <div>
                    <div class="inline-block">Problem:</div>
                    <div class="inline-block w-80">
                      <input type="text" class="w-100 bg-none" />
                    </div>
                  </div>
                  <div>
                    <div class="inline-block">Identified Date:</div>
                    <div class="inline-block w-70">
                      <input type="text" class="w-100 bg-none" />
                    </div>
                  </div>
                  <div>
                    <div class="inline-block">Intervention:</div>
                    <div class="inline-block w-70">
                      <input type="text" class="w-100 bg-none" />
                    </div>
                  </div>
                  <div>
                    <div class="inline-block">Description:</div>
                    <div class="inline-block w-70">
                      <input type="text" class="w-100 bg-none" />
                    </div>
                  </div>
                  <div>
                    <div class="inline-block">Goal and Management</div>
                    <div>
                      Regimen:<input type="text" class="w-80 bg-none" />
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="page">
        <div class="bg-grey flex-between flex-center-1">
          <div class="f-bold">RN Recertification - Gastrointestinal/Nutrition</div>
          <div>
            <table class="f-bold pad-5 bg-white">
              <tr>
                <td>
                  Patient Name (Last Name, First Name) & <br />
                  MRN: <input type="text" class="w-80 bg-none" />
                </td>
                <td class="width-150">
                  Date: <br />
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />
                </td>
              </tr>
            </table>
          </div>
        </div>
        <br />
        <br />
        <br />
        <div class="f-bold">Gastrointestinal/Nutrition</div>
        <table>
          <tr>
            <td class="pad-3 bg-blue f-bold">Digestive</td>
          </tr>
          <tr>
            <td>
              <div class="flex">
                <div class="inline-block pad-3 flex-grow-1">
                  <div class="f-bold">Appetite</div>
                  <div class="flex-top">
                    <div class="inline-block width-100">
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> Poor
                        </div>
                      </div>
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> Fair
                        </div>
                      </div>
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> Good
                        </div>
                      </div>
                    </div>
                    <div class="inline-block">
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> Today's
                        </div>
                      </div>
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> This week's
                        </div>
                      </div>
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> This month's
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="inline-block flex-grow-1 pad-3">
                  <div class="f-bold">food consumption was</div>
                  <div class="flex-top">
                    <div class="inline-block width-100">
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> less than
                        </div>
                      </div>
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> equal to
                        </div>
                      </div>
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> greater than
                        </div>
                      </div>
                    </div>
                    <div class="inline-block">
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> yesterday's
                        </div>
                      </div>
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> last week's
                        </div>
                      </div>
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> last month's
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="inline-block flex-grow-1 pad-3">
                  <div class="f-bold">food consumption by</div>
                  <div class="flex-top">
                    <div class="inline-block width-50">
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> 10%
                        </div>
                      </div>
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> 20%
                        </div>
                      </div>
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> 30%
                        </div>
                      </div>
                    </div>
                    <div class="inline-block width-50">
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> 40%
                        </div>
                      </div>
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> 50%
                        </div>
                      </div>
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> 60%
                        </div>
                      </div>
                    </div>
                    <div class="inline-block width-50">
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> 70%
                        </div>
                      </div>
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> 80%
                        </div>
                      </div>
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> 90%
                        </div>
                      </div>
                    </div>
                    <div class="inline-block width-50">
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> 40%
                        </div>
                      </div>
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> 50%
                        </div>
                      </div>
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> 60%
                        </div>
                      </div>
                    </div>
                    <div class="inline-block">
                      <div>
                        <div class="flex-center-1">
                          <input type="checkbox" /> 100%
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex-top">
                <div class="inline-block w-50">
                  <div class="f-bold">Dysphagia Score</div>
                  <div>
                    <div>
                      <input type="radio" /> 4 - Unable to swallow anything /
                      total dysphagia
                    </div>
                    <div>
                      <input type="radio" /> 3 - Able to swallow liquids only
                    </div>
                    <div>
                      <input type="radio" /> 2 - Able to swallow only semi-solid
                      foods
                    </div>
                    <div>
                      <input type="radio" /> 1 - Able to swallow some solid
                      foods
                      <div>
                        <input type="radio" /> 0 - Able to eat normal diet / no
                        dysphagia
                      </div>
                    </div>
                  </div>
                </div>
                <div class="inline-block">
                  <div class="f-bold">Digestion</div>
                  <div>
                    <div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Anorexia
                      </div>
                    </div>
                    <div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Hematemesis
                      </div>
                    </div>
                    <div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Heartburn / Reflux
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="f-bold">Elimination Status</div>
              <div class="flex">
                <div class="inline-block w-50">
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> WNL
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Nausea / Vomiting
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> NPO
                    </div>
                  </div>
                </div>
                <div class="inline-block w-50">
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Last BM:
                      <div class="w-30">
                        <div class="w-100 height-20 border flex-end">
                          <input
                            type="text"
                            class="w-30 bg-none text-center"
                          />/
                          <input
                            type="text"
                            class="w-30 bg-none text-center"
                          />/
                          <input type="text" class="w-30 bg-none text-center" />
                        </div>
                      </div>
                    </div>
                    <div>
                      <div>
                        As Per:
                        <input type="radio" /> Clinician Assessment
                        <input type="radio" /> Pt/CG Report
                      </div>
                    </div>
                    <div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> WNL
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex">
                <div class="w-50">
                  <div class="inline-block">
                    <div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Reflux / Indigestion
                      </div>
                    </div>
                    <div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Diarrhea
                      </div>
                    </div>
                    <div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Constipation
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Bowel Incontinence
                    </div>
                  </div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Bowel Sounds:
                    </div>
                  </div>
                  <div><input type="radio" /> Hyperactive</div>
                  <div><input type="radio" /> Hypoactive</div>
                  <div><input type="radio" /> Normal</div>
                  <div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Abd Grith: <input type="text" />
                    </div>
                  </div>
                </div>
                <div class="inline-block w-50">
                  <div class="flex">
                    <div class="flex-center-1">
                      <input type="checkbox" /> Abnormal Stool:
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Gray
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Tarry
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Fresh Blood
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Black
                    </div>
                  </div>
                  <div class="flex">
                    <div class="flex-center-1">
                      <input type="checkbox" /> Consipation
                    </div>
                    <div><input type="radio" /> Chronic</div>
                    <div><input type="radio" /> Acute</div>
                    <div><input type="radio" /> Occasional</div>
                  </div>
                  <div class="flex">
                    <div class="flex-center-1 width-125">
                      <input type="checkbox" /> Lax / Enema Use:
                    </div>
                    <div>
                      <input type="text" />
                    </div>
                  </div>
                  <div class="flex">
                    <div class="flex-center-1">
                      <input type="checkbox" /> Hemorrhoids:
                    </div>
                    <div><input type="radio" /> Internal</div>
                    <div><input type="radio" /> External</div>
                  </div>
                  <div class="flex">
                    <div class="flex-center-1">
                      <input type="checkbox" /> Ostomy:
                    </div>
                  </div>
                  <div class="flex">
                    <div class="flex-center-1 width-125">Ostomy Type(s):</div>
                    <div>
                      <input type="text" />
                    </div>
                  </div>
                  <div class="flex">
                    <div class="flex-center-1 width-125">
                      <input type="checkbox" /> Stoma Appearance
                    </div>
                    <div>
                      <input type="text" />
                    </div>
                  </div>
                  <div class="flex">
                    <div class="flex-center-1 width-125">
                      <input type="checkbox" /> Stool Appearance:
                    </div>
                    <div>
                      <input type="text" />
                    </div>
                  </div>
                  <div class="flex">
                    <div class="flex-center-1 width-125">
                      <input type="checkbox" /> Surrounding Skin:
                    </div>
                    <div class="width-150">
                      <input type="text" />
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Intact
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="page">
        <div class="bg-grey flex-between flex-center-1">
          <div class="f-bold">RN Recertification - Gastrointestinal/Nutrition</div>
          <div>
            <table class="f-bold pad-5 bg-white">
              <tr>
                <td>
                  Patient Name (Last Name, First Name) & <br />
                  MRN: <input type="text" class="w-80 bg-none" />
                </td>
                <td class="width-150">
                  Date: <br />
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />
                </td>
              </tr>
            </table>
          </div>
        </div>
        <br />
        <br />
        <br />
        <div class="border">
          <div class="bg-blue f-bold pad-3">
            Nutrition Fluid and Intake Screening
          </div>
          <div class="flex bg-grey pad-3">
            <div class="flex-center-1 w-50">
              <input type="checkbox" /> Difficulty swallowing food
            </div>
            <div class="flex-center-1 w-50">
              <input type="checkbox" /> Difficulty with constipation
            </div>
          </div>
          <div class="flex pad-3">
            <div class="flex-center-1 w-50">
              <input type="checkbox" /> Difficulty swallowing fluids
            </div>
            <div class="flex-center-1 w-50">
              <input type="checkbox" /> Difficulty with diarrhea
            </div>
          </div>
          <div class="flex bg-grey pad-3">
            <div class="flex-center-1 w-50">
              <input type="checkbox" /> Difficulty chewing
            </div>
            <div class="flex-center-1 w-50">
              <input type="checkbox" /> Weight loss anticipated
            </div>
          </div>
          <div class="flex pad-3">
            <div class="flex-center-1 w-50">
              <input type="checkbox" /> Taste of food changing
            </div>
            <div class="flex-center-1 w-50">
              <input type="checkbox" /> Weight gain anticipated
            </div>
          </div>
          <div class="flex bg-grey pad-3">
            <div class="flex-center-1 w-50">
              <input type="checkbox" /> Nausea impacts food and / or fluid
              intake
            </div>
            <div class="flex-center-1 w-50">
              <input type="checkbox" /> Tube feeding
            </div>
          </div>
          <div class="flex pad-3">
            <div class="flex-center-1 w-50">
              <input type="checkbox" /> Vomiting impacts food and / or fluid
              intake
            </div>
            <div class="flex-center-1 w-50">
              <input type="checkbox" /> Disruption in skin
            </div>
          </div>
          <div class="flex bg-grey pad-3">
            <div class="flex-center-1 w-50">
              <input type="checkbox" /> Medications causing decreased appetite
            </div>
            <div class="flex-center-1 w-50">
              <input type="checkbox" /> Eats alone most of the time
            </div>
          </div>
          <div class="flex pad-3">
            <div class="flex-center-1 w-50">
              <input type="checkbox" /> Patient feels not eating and / or
              drinking enough
            </div>
            <div class="flex-top w-50">
              <input type="checkbox" /> Does not always have enough money to buy
              the food, fluid and / or supplement needed
            </div>
          </div>
          <div class="flex bg-grey pad-3">
            <div class="flex-center-1 w-50">
              <input type="checkbox" /> Family / caregiver feels not eating and
              / or drinking enough
            </div>
            <div class="flex-center-1 w-50">
              <input type="checkbox" /> Not always physically able to shop, cook
              and / or feed self
            </div>
          </div>
          <div class="flex pad-3">
            <div class="flex-center-1 w-50">
              <input type="checkbox" /> Pain interfering with food and / or
              fluid intake
            </div>
            <div class="flex-center-1 w-50">
              <input type="checkbox" /> Failure to thrive
            </div>
          </div>
          <div class="flex bg-grey pad-3">
            <div class="flex-center-1 w-50">
              <input type="checkbox" /> Drowsiness and / or sleep pattern
              disrupting food intake
            </div>
            <div class="flex-center-1 w-50">
              <input type="checkbox" /> Other:
              <input type="text" class="w-100" />
            </div>
          </div>
          <div class="bg-blue pad-3">
            <div class="flex-center-1">
              <div class="w-30">Total <input type="text" /> Risk:</div>
              <div class="width-100">
                <div class="flex-center-1">
                  <input type="checkbox" /> Score 0 - 03
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> Low-no Risk
                </div>
              </div>
              <div class="width-100">
                <div class="flex-center-1">
                  <input type="checkbox" /> Score 04-06
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> Moderate Risk
                </div>
              </div>
              <div>
                <div class="flex-center-1">
                  <input type="checkbox" /> Score 07+
                </div>
                <div class="flex-center-1">
                  <input type="checkbox" /> High Risk
                </div>
              </div>
            </div>
          </div>
        </div>
        <br />
        <br />
        <div class="border pad-3">
          <div class="f-bold">Interpretation</div>
          <div>
            <li class="text-justify">
              Low-no Risk (0-3): Patient, family / caregiver are accepting of
              nutrition status findings. Findings are not posing implications
              for education and / or intervention.
            </li>
            <li class="text-justify">
              Moderate Risk (4-6): Implications for comfort and / or patient,
              family / caregiver have difficulty with nutrition status
              finding(s). Educate, monitor and reevaluate based on specific
              area(s) and organization policy.
            </li>
            <li class="text-justify">
              High Risk (7 or greater): Multiple factors are impacting on
              nutrition and fluid intake with implications for comfort and
              coping. Coordinate with IDG about how to best address individual /
              family needs. Reassess nutritional status and educate based on
              Plan of Care.
            </li>
          </div>
        </div>
        <br />
        <br />
        <table>
          <tr>
            <td class="bg-blue pad-3 f-bold">GU (Genito-urinary)</td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex">
                <div class="w-50">
                  <div class="flex-center-1">
                    <input type="checkbox" /> WNL (Within Normal Limits)
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Incontinence
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Bladder Distention
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Burning
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Frequency
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Dysuria
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Nocturia
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Retention
                  </div>
                </div>
                <div class="w-50">
                  <div class="f-bold">Urine</div>
                  <div class="flex">
                    <div class="w-50">
                      <div class="flex-center-1">
                        <input type="checkbox" /> Cloudy
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Odorous
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Sediment
                      </div>
                    </div>
                    <div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Hematuria
                      </div>
                      <div class="flex-center-1">
                        <input type="checkbox" /> Other: <input type="text" />
                      </div>
                    </div>
                  </div>
                  <br />
                  <div class="f-bold">External Genitalia</div>
                  <div><input type="radio" /> Normal</div>
                  <div><input type="radio" /> Abnormal</div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div class="flex">
                <div class="w-50">
                  <div class="flex-center-1">
                    <input type="checkbox" /> Urgency
                  </div>
                  <div class="flex-center-1">
                    <input type="checkbox" /> Urostomy
                  </div>
                  <div class="flex">
                    <div class="flex-center-1 w-20">
                      <input type="checkbox" /> Catheter:
                    </div>
                    <div class="flex-center-1 w-20">
                      <input type="checkbox" /> Foley
                    </div>
                    <div class="flex-center-1">
                      <input type="checkbox" /> Suprapubic
                    </div>
                  </div>
                  <div class="flex">
                    <div>Last changed:</div>
                    <div class="w-30">
                      <div class="w-100 height-20 border flex-end">
                        <input type="text" class="w-30 bg-none text-center" />/
                        <input type="text" class="w-30 bg-none text-center" />/
                        <input type="text" class="w-30 bg-none text-center" />
                      </div>
                    </div>
                  </div>
                  <br />
                  <div class="flex">
                    <div class="w-40"><input type="text" /> Fr</div>
                    <div><input type="text" /> Cc</div>
                  </div>
                </div>
                <div class="w-50">
                  <div>As per:</div>
                  <div><input type="radio" /> Clinician Assessment</div>
                  <div><input type="radio" /> Pt/CG Report</div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="pad-3">
              <div>
                <b
                  >Has the patient had any recurrent Upper Urinary Tract
                  Infections?</b
                ><input type="radio" />Yes <input type="radio" />No
              </div>
              <div class="flex">
                <div class="w-50">
                  <div class="flex-center-1">
                    <div class="w-40">Urinary Tract Infection #1</div>
                    <div class="w-30">
                      <div class="w-100 height-20 border flex-end">
                        <input type="text" class="w-30 bg-none text-center" />/
                        <input type="text" class="w-30 bg-none text-center" />/
                        <input type="text" class="w-30 bg-none text-center" />
                      </div>
                    </div>
                  </div>
                  <div class="flex-center-1">
                    <div class="w-40">Urinary Tract Infection #2</div>
                    <div class="w-30">
                      <div class="w-100 height-20 border flex-end">
                        <input type="text" class="w-30 bg-none text-center" />/
                        <input type="text" class="w-30 bg-none text-center" />/
                        <input type="text" class="w-30 bg-none text-center" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="w-50">
                  <div class="flex-center-1">
                    <div class="w-40">Urinary Tract Infection #3</div>
                    <div class="w-30">
                      <div class="w-100 height-20 border flex-end">
                        <input type="text" class="w-30 bg-none text-center" />/
                        <input type="text" class="w-30 bg-none text-center" />/
                        <input type="text" class="w-30 bg-none text-center" />
                      </div>
                    </div>
                  </div>
                  <div class="flex-center-1">
                    <div class="w-40">Urinary Tract Infection #4</div>
                    <div class="w-30">
                      <div class="w-100 height-20 border flex-end">
                        <input type="text" class="w-30 bg-none text-center" />/
                        <input type="text" class="w-30 bg-none text-center" />/
                        <input type="text" class="w-30 bg-none text-center" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="page">
        <div class="bg-grey flex-between flex-center-1">
          <div class="f-bold">RN Recertification - Gastrointestinal/Nutrition</div>
          <div>
            <table class="f-bold pad-5 bg-white">
              <tr>
                <td>
                  Patient Name (Last Name, First Name) & <br />
                  MRN: <input type="text" class="w-80 bg-none" />
                </td>
                <td class="width-150">
                  Date: <br />
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />
                </td>
              </tr>
            </table>
          </div>
        </div>
        <br />
        <br />
        <br />
        <div class="border">
          <div class="bg-blue f-bold pad-3">HIS Measure</div>
          <div class="pad-3">
            <div class="f-bold">Medications: NQF #1617</div>
            <div>(N0500A) Was scheduled opioid initiated or continued?</div>
            <div class="flex">
              <div class="w-50">
                <input type="radio" /> 0. No > Skip to N0510, PRN Opioid
              </div>
              <div><input type="radio" /> 1. Yes</div>
            </div>
            <div class="flex">
              Please explain: <input type="text" class="height-40 explain" />
            </div>
            <br />
            <div class="flex">
              <div class="w-50">
                (N0500B) Date scheduled opiod initiated or continued:
              </div>
              <div>
                <div class="w-30">
                  <div class="w-100 height-20 border flex-end">
                    <input type="text" class="w-30 bg-none text-center" />/
                    <input type="text" class="w-30 bg-none text-center" />/
                    <input type="text" class="w-30 bg-none text-center" />
                  </div>
                </div>
              </div>
            </div>
            <div>(N0510A) Was a PRN opioid initiated or continued?</div>
            <div class="flex">
              <div class="w-50">
                <input type="radio" /> 0. No > Skip to N0520, Bowel Regimen
              </div>
              <div><input type="radio" /> 1. Yes</div>
            </div>
            <div class="flex">
              Please explain: <input type="text" class="height-40 explain" />
            </div>
            <br />
            <div class="flex">
              <div class="w-50">
                (N0510B) Date PRN opioid initiated or continued:
              </div>
              <div>
                <div class="w-30">
                  <div class="w-100 height-20 border flex-end">
                    <input type="text" class="w-30 bg-none text-center" />/
                    <input type="text" class="w-30 bg-none text-center" />/
                    <input type="text" class="w-30 bg-none text-center" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br />
        <div class="border pad-3">
          <div>(N0520A) Was a bowel regimen initiated or continued?</div>
          <div>
            <input type="radio" /> 0. No > Skip to Z0400, Signature(s) of
            Person(s) Completing the Record
          </div>
          <div>
            <input type="radio" /> 1. No, but there is documentation of why a
            bowel regimen was not initiated or continued> Skip to Z0400,
            Signature(s) of Person(s) Completing Record
          </div>
          <div><input type="radio" /> 2. Yes</div>
          <div class="flex">
            Please explain: <input type="text" class="height-40 explain" />
          </div>
          <br />
          <div class="flex">
            <div class="w-50">
              (N0520B) Date bowel regimen initiated or continued:
            </div>
            <div>
              <div class="w-30">
                <div class="w-100 height-20 border flex-end">
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="border b-top">
          <div class="pad-3 f-bold bg-grey">
            Additional Comments
            <div class="border bg-white height-60">
              <input type="text" class="w-100 bg-none" />
              <input type="text" class="w-100 bg-none" />
              <input type="text" class="w-100 bg-none" />
            </div>
          </div>
        </div>
      </div>
      <div class="page">
        <div class="bg-grey flex-between flex-center-1">
          <div class="f-bold">RN Recertification - Fall Assessment</div>
          <div>
            <table class="f-bold pad-5 bg-white">
              <tr>
                <td>
                  Patient Name (Last Name, First Name) & <br />
                  MRN: <input type="text" class="w-80 bg-none" />
                </td>
                <td class="width-150">
                  Date: <br />
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />
                </td>
              </tr>
            </table>
          </div>
        </div>
        <br />
        <br />
        <br />
        <div class="f-bold">Fall Assessment</div>
        <div class="border">
          <div class="bg-blue f-bold pad-3">Fall Assessment</div>
          <div class="bg-grey flex pad-3">
            <div class="f-bold w-90">
              One point is assessed for each "Yes" selection
            </div>
            <div class="flex f-bold">
              <div class="width-40 text-center">Yes</div>
              <div class="width-40 text-center">No</div>
            </div>
          </div>
          <div class="bg-grey flex pad-3">
            <div class="w-90">Age 65+</div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="flex pad-3">
            <div class="w-90">
              <div class="f-bold">Diagnosis (3 or more co-existing)</div>
              <div>Assess for hypotension</div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="bg-grey flex pad-3">
            <div class="w-90">
              <div class="f-bold">Prior history of falls within 3 months</div>
              <div>
                Fall definition: "An unintentional change in position resulting
                in coming to rest on the ground or at a lower level."
              </div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="flex pad-3">
            <div class="w-90">
              <div class="f-bold">Incontinence</div>
              <div>
                Inability to make it to the bathroom or commode in timely
                manner. Includes frequency, urgency, and/or nocturia.
              </div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="bg-grey flex pad-3">
            <div class="w-90">
              <div class="f-bold">Visual impairment</div>
              <div class="text-justify">
                Includes macular degeneration, diabetic retinopathies, visual
                field loss, age related changes, decline in visual acuity,
                accommodation, glare tolerance, depth perception, and night
                vision or not wearing prescribed glasses or having the correct
                prescription.
              </div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="flex pad-3">
            <div class="w-90">
              <div class="f-bold">Impaired functional mobility</div>
              <div class="text-justify">
                May include patients who need help with IADLs or ADLs or have
                gait or transfer problems, arthritis, pain, fear of falling,
                foot problems, impaired sensation, impaired coordination or
                improper use of assistive devices.
              </div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="bg-grey flex pad-3">
            <div class="w-90">
              <div class="f-bold">Environmental hazards</div>
              <div class="text-justify">
                May include poor illumination, equipment tubing, inappropriate
                footwear, pets, hard to reach items, floor surfaces that are
                uneven or cluttered, or outdoor entry and exits.
              </div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="flex pad-3">
            <div class="w-90">
              <div class="f-bold">Poly Pharmacy (4 or more prescriptions)</div>
              <div class="text-justify">
                Drugs highly associated with fall risk include but are not
                limited to, sedatives, anti-depressants, tranquilizers,
                narcotics, antihypertensive, cardiac meds, corticosteroids,
                anti-anxiety drugs, anticholinergic drugs, and hypoglycemic
                drugs.
              </div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="bg-grey flex pad-3">
            <div class="w-90">
              <div class="f-bold">Pain affecting level of function</div>
              <div class="text-justify">
                Pain often affects an individual's desire or ability to move or
                pain can be a factor in depression or compliance with safety
                recommendations.
              </div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="flex pad-3">
            <div class="w-90">
              <div class="f-bold">Cognitive impairment</div>
              <div class="text-justify">
                Could include patients with dementia, Alzheimer's or stroke
                patients or patients who are confused, use poor judgment, have
                decreased comprehension, impulsivity, memory deficits. Consider
                patient's ability to adhere to the plan of care.
              </div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="bg-grey flex pad-3">
            <div class="w-90">
              <div class="f-bold">Total:</div>
              <div>
                A score of 4 or greater is considered at risk for falling
              </div>
            </div>
          </div>
        </div>
        <div class="border b-top">
          <div class="bg-grey">
            <div class="pad-3 f-bold">
              Additional Comments
              <div class="border bg-white height-60">
                <input type="text" class="w-100 bg-none" />
                <input type="text" class="w-100 bg-none" />
                <input type="text" class="w-100 bg-none" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page">
        <div class="bg-grey flex-between flex-center-1">
          <div class="f-bold">RN Recertification - DME</div>
          <div>
            <table class="f-bold pad-5 bg-white">
              <tr>
                <td>
                  Patient Name (Last Name, First Name) & <br />
                  MRN: <input type="text" class="w-80 bg-none" />
                </td>
                <td class="width-150">
                  Date: <br />
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />
                </td>
              </tr>
            </table>
          </div>
        </div>
        <br />
        <br />
        <br />
        <div class="f-bold">DME</div>
        <div class="border">
          <div class="bg-blue f-bold pad-3">Fall Assessment</div>
          <div class="bg-grey flex pad-3">
            <div class="f-bold w-90">Items</div>
            <div class="flex f-bold">
              <div class="width-40 text-center">Has</div>
              <div class="width-40 text-center">Needs</div>
            </div>
          </div>
          <div class="bg-grey-1 flex pad-3">
            <div class="w-90">
              <div class="f-bold">Bath tub / Shower Bench</div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="flex pad-3">
            <div class="w-90">
              <div class="f-bold">Cane</div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="bg-grey-1 flex pad-3">
            <div class="w-90">
              <div class="f-bold">Chair / Bed Alarm</div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="flex pad-3">
            <div class="w-90">
              <div class="f-bold">Chair lift</div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="bg-grey-1 flex pad-3">
            <div class="w-90">
              <div class="f-bold">Commode</div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="flex pad-3">
            <div class="w-90">
              <div class="f-bold">APAP / BIPAP</div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="bg-grey-1 flex pad-3">
            <div class="w-90">
              <div class="f-bold">Crutches</div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="flex pad-3">
            <div class="w-90">
              <div class="f-bold">Geri Chair</div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="bg-grey-1 flex pad-3">
            <div class="w-90">
              <div class="f-bold">Grab bars (tub / shower / toilet)</div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="flex pad-3">
            <div class="w-90">
              <div class="f-bold">Hospital bed</div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="bg-grey-1 flex pad-3">
            <div class="w-90">
              <div class="f-bold">IV / Enteral Pump / IV Pole</div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="flex pad-3">
            <div class="w-90">
              <div class="f-bold">Nebulizer Suction Machine</div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="bg-grey-1 flex pad-3">
            <div class="w-90">
              <div class="f-bold">Overbed Table</div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="flex pad-3">
            <div class="w-90">
              <div class="f-bold">Oxygen Concentrator</div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="bg-grey-1 flex pad-3">
            <div class="w-90">
              <div class="f-bold">Oxygen Portable Tank</div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="flex pad-3">
            <div class="w-90">
              <div class="f-bold">Raised Toilet Seat</div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="bg-grey-1 flex pad-3">
            <div class="w-90">
              <div class="f-bold">Special Mattress / Overlay</div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="flex pad-3">
            <div class="w-90">
              <div class="f-bold">Transfer Board</div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="bg-grey-1 flex pad-3">
            <div class="w-90">
              <div class="f-bold">Trapeze</div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="flex pad-3">
            <div class="w-90">
              <div class="f-bold">Walker</div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="bg-grey-1 flex pad-3">
            <div class="w-90">
              <div class="f-bold">Wheelchair</div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="flex pad-3">
            <div class="w-90">
              <div class="f-bold">Wheelchair Cushion</div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
          <div class="bg-grey-1 flex pad-3">
            <div class="flex w-90">
              <div class="f-bold">Other</div>
              <div class="w-90"><input type="text" class="w-100" /></div>
            </div>
            <div class="flex-center-1 f-bold">
              <div class="width-40 text-center"><input type="radio" /></div>
              <div class="width-40 text-center"><input type="radio" /></div>
            </div>
          </div>
        </div>
        <div class="border b-top bg-grey">
          <div class="pad-3 f-bold">
            Additional Comments
            <div class="border bg-white height-60">
              <input type="text" class="w-100 bg-none" />
              <input type="text" class="w-100 bg-none" />
              <input type="text" class="w-100 bg-none" />
            </div>
          </div>
        </div>
      </div>
      <div class="page">
        <div class="bg-grey flex-between flex-center-1">
          <div class="f-bold">RN Recertification - Supplies Worksheet</div>
          <div>
            <table class="f-bold pad-5 bg-white">
              <tr>
                <td>
                  Patient Name (Last Name, First Name) & <br />
                  MRN: <input type="text" class="w-80 bg-none" />
                </td>
                <td class="width-150">
                  Date: <br />
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />
                </td>
              </tr>
            </table>
          </div>
        </div>
        <br />
        <br />
        <br />
        <div class="f-bold">Supplies Worksheet</div>
        <br />
        <table>
          <tr>
            <td class="pad-3 bg-grey">&nbsp;</td>
            <td class="pad-3 bg-grey">
              <div class="flex">
                <div class="f-bold w-70">Supply</div>
                <div class="f-bold">HCPCS</div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="bg-grey pad-3 f-bold text-center width-50">1.</td>
            <td class="bg-grey">
              <input type="text" class="w-100 bg-none bg-grey" />
            </td>
          </tr>
          <tr>
            <td class="pad-3 f-bold text-center width-50">2.</td>
            <td><input type="text" class="w-100 bg-none" /></td>
          </tr>
          <tr>
            <td class="bg-grey pad-3 f-bold text-center width-50">3.</td>
            <td class="bg-grey">
              <input type="text" class="w-100 bg-none bg-grey" />
            </td>
          </tr>
          <tr>
            <td class="pad-3 f-bold text-center width-50">4.</td>
            <td><input type="text" class="w-100 bg-none" /></td>
          </tr>
          <tr>
            <td class="bg-grey pad-3 f-bold text-center width-50">5.</td>
            <td class="bg-grey">
              <input type="text" class="w-100 bg-none bg-grey" />
            </td>
          </tr>
          <tr>
            <td class="pad-3 f-bold text-center width-50">6.</td>
            <td><input type="text" class="w-100 bg-none" /></td>
          </tr>
          <tr>
            <td class="bg-grey pad-3 f-bold text-center width-50">7.</td>
            <td class="bg-grey">
              <input type="text" class="w-100 bg-none bg-grey" />
            </td>
          </tr>
          <tr>
            <td class="pad-3 f-bold text-center width-50">8.</td>
            <td><input type="text" class="w-100 bg-none" /></td>
          </tr>
          <tr>
            <td class="bg-grey pad-3 f-bold text-center width-50">9.</td>
            <td class="bg-grey">
              <input type="text" class="w-100 bg-none bg-grey" />
            </td>
          </tr>
          <tr>
            <td class="pad-3 f-bold text-center width-50">10.</td>
            <td><input type="text" class="w-100 bg-none" /></td>
          </tr>
        </table>
        <br />
        <br />
        <div class="f-bold">Medication</div>
        <br />
        <table>
          <tr>
            <td class="pad-3 bg-grey">
              <input type="text" class="w-100 bg-grey bg-none" />
            </td>
          </tr>
          <tr>
            <td class="pad-3"><input type="text" class="w-100 bg-none" /></td>
          </tr>
          <tr>
            <td class="pad-3 bg-grey">
              <input type="text" class="w-100 bg-grey bg-none" />
            </td>
          </tr>
          <tr>
            <td class="pad-3"><input type="text" class="w-100 bg-none" /></td>
          </tr>
          <tr>
            <td class="pad-3 bg-grey">
              <input type="text" class="w-100 bg-grey bg-none" />
            </td>
          </tr>
          <tr>
            <td class="pad-3"><input type="text" class="w-100 bg-none" /></td>
          </tr>
          <tr>
            <td class="pad-3 bg-grey">
              <input type="text" class="w-100 bg-grey bg-none" />
            </td>
          </tr>
          <tr>
            <td class="pad-3"><input type="text" class="w-100 bg-none" /></td>
          </tr>
          <tr>
            <td class="pad-3 bg-grey">
              <input type="text" class="w-100 bg-grey bg-none" />
            </td>
          </tr>
          <tr>
            <td class="pad-3"><input type="text" class="w-100 bg-none" /></td>
          </tr>
          <tr>
            <td class="pad-3 bg-grey">
              <input type="text" class="w-100 bg-grey bg-none" />
            </td>
          </tr>
          <tr>
            <td class="pad-3"><input type="text" class="w-100 bg-none" /></td>
          </tr>
          <tr>
            <td class="pad-3 bg-grey">
              <input type="text" class="w-100 bg-grey bg-none" />
            </td>
          </tr>
          <tr>
            <td class="pad-3"><input type="text" class="w-100 bg-none" /></td>
          </tr>
          <tr>
            <td class="pad-3 bg-grey">
              <input type="text" class="w-100 bg-grey bg-none" />
            </td>
          </tr>
          <tr>
            <td class="pad-3"><input type="text" class="w-100 bg-none" /></td>
          </tr>
          <tr>
            <td class="pad-3 bg-grey">
              <input type="text" class="w-100 bg-grey bg-none" />
            </td>
          </tr>
          <tr>
            <td class="pad-3"><input type="text" class="w-100 bg-none" /></td>
          </tr>
          <tr>
            <td class="pad-3 bg-grey">
              <input type="text" class="w-100 bg-grey bg-none" />
            </td>
          </tr>
          <tr>
            <td class="pad-3"><input type="text" class="w-100 bg-none" /></td>
          </tr>
          <tr>
            <td class="pad-3 bg-grey">
              <input type="text" class="w-100 bg-grey bg-none" />
            </td>
          </tr>
          <tr>
            <td class="pad-3"><input type="text" class="w-100 bg-none" /></td>
          </tr>
          <tr>
            <td class="pad-3 bg-grey">
              <input type="text" class="w-100 bg-grey bg-none" />
            </td>
          </tr>
          <tr>
            <td class="pad-3"><input type="text" class="w-100 bg-none" /></td>
          </tr>
          <tr>
            <td class="pad-3 bg-grey">
              <input type="text" class="w-100 bg-grey bg-none" />
            </td>
          </tr>
          <tr>
            <td class="pad-3"><input type="text" class="w-100 bg-none" /></td>
          </tr>
          <tr>
            <td class="pad-3 bg-grey">
              <input type="text" class="w-100 bg-grey bg-none" />
            </td>
          </tr>
          <tr>
            <td class="pad-3"><input type="text" class="w-100 bg-none" /></td>
          </tr>
        </table>
      </div>
      <div class="page">
        <div class="bg-grey flex-between flex-center-1">
          <div class="f-bold">RN Recertification</div>
          <div>
            <table class="f-bold pad-5 bg-white">
              <tr>
                <td>
                  Patient Name (Last Name, First Name) & <br />
                  MRN: <input type="text" class="w-80 bg-none" />
                </td>
                <td class="width-150">
                  Date: <br />
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />
                </td>
              </tr>
            </table>
          </div>
        </div>
        <br />
        <br />
        <br />
        <table>
          <tr>
            <td class="pad-3 bg-grey">
              <input type="text" class="w-100 bg-grey bg-none" />
            </td>
          </tr>
          <tr>
            <td class="pad-3"><input type="text" class="w-100 bg-none" /></td>
          </tr>
          <tr>
            <td class="pad-3 bg-grey">
              <input type="text" class="w-100 bg-grey bg-none" />
            </td>
          </tr>
          <tr>
            <td class="pad-3"><input type="text" class="w-100 bg-none" /></td>
          </tr>
          <tr>
            <td class="pad-3 bg-grey">
              <input type="text" class="w-100 bg-grey bg-none" />
            </td>
          </tr>
          <tr>
            <td class="pad-3"><input type="text" class="w-100 bg-none" /></td>
          </tr>
          <tr>
            <td class="pad-3 bg-grey">
              <input type="text" class="w-100 bg-grey bg-none" />
            </td>
          </tr>
          <tr>
            <td class="pad-3"><input type="text" class="w-100 bg-none" /></td>
          </tr>
          <tr>
            <td class="pad-3 bg-grey">
              <input type="text" class="w-100 bg-grey bg-none" />
            </td>
          </tr>
          <tr>
            <td class="pad-3"><input type="text" class="w-100 bg-none" /></td>
          </tr>
          <tr>
            <td class="pad-3 bg-grey">
              <input type="text" class="w-100 bg-grey bg-none" />
            </td>
          </tr>
          <tr>
            <td class="pad-3"><input type="text" class="w-100 bg-none" /></td>
          </tr>
          <tr>
            <td class="pad-3 bg-grey">
              <input type="text" class="w-100 bg-grey bg-none" />
            </td>
          </tr>
          <tr>
            <td class="pad-3"><input type="text" class="w-100 bg-none" /></td>
          </tr>
          <tr>
            <td class="pad-3 bg-grey">
              <input type="text" class="w-100 bg-grey bg-none" />
            </td>
          </tr>
          <tr>
            <td class="pad-3"><input type="text" class="w-100 bg-none" /></td>
          </tr>
          <tr>
            <td class="pad-3 bg-grey">
              <input type="text" class="w-100 bg-grey bg-none" />
            </td>
          </tr>
          <tr>
            <td class="pad-3"><input type="text" class="w-100 bg-none" /></td>
          </tr>
          <tr>
            <td class="pad-3 bg-grey">
              <input type="text" class="w-100 bg-grey bg-none" />
            </td>
          </tr>
          <tr>
            <td class="pad-3"><input type="text" class="w-100 bg-none" /></td>
          </tr>
          <tr>
            <td class="pad-3 bg-grey">
              <input type="text" class="w-100 bg-grey bg-none" />
            </td>
          </tr>
        </table>
        <br />
        <br />
        <div class="border">
          <div class="bg-blue f-bold pad-3">IV</div>

          <div class="flex">
            <div class="w-30">Does the patient have IV access?</div>
            <div class="w-10">
              <div class="flex-center-1"><input type="checkbox" /> Yes</div>
            </div>
            <div>
              <div class="flex-center-1"><input type="checkbox" /> No</div>
            </div>
          </div>
          <div class="flex">
            <div>Type:</div>
            <div><input type="text" /></div>
          </div>

          <div class="flex">
            <div class="w-30">Does the patient have subcutaneous access?</div>
            <div class="w-10">
              <div class="flex-center-1"><input type="checkbox" /> Yes</div>
            </div>
            <div>
              <div class="flex-center-1"><input type="checkbox" /> No</div>
            </div>
          </div>
          <div class="flex">
            <div class="width-150">Date of Insertion:</div>
            <div><input type="text" /></div>
          </div>
          <div class="flex">
            <div class="width-150">Date of last dressing change:</div>
            <div><input type="text" /></div>
          </div>
          <div class="flex">
            <div class="width-150">IV-administered medication:</div>
            <div><input type="text" /></div>
          </div>
          <div class="flex">
            <div class="w-30">IV site accessed</div>
            <div class="w-10">
              <div class="flex-center-1"><input type="checkbox" /> Yes</div>
            </div>
            <div>
              <div class="flex-center-1"><input type="checkbox" /> No</div>
            </div>
          </div>
          <div>
            <br /><br /><br />
            <div class="pad-3">
              <div>Summary/Comments:</div>
              <div class="border bg-white height-70">
                <input type="text" class="w-100 bg-none" />
                <input type="text" class="w-100 bg-none" />
                <input type="text" class="w-100 bg-none" />
                <input type="text" class="w-100 bg-none" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page">
        <div class="bg-grey flex-between flex-center-1">
          <div class="f-bold">RN Recertification - Summary/Comments</div>
          <div>
            <table class="f-bold pad-5 bg-white">
              <tr>
                <td>
                  Patient Name (Last Name, First Name) & <br />
                  MRN: <input type="text" class="w-80 bg-none" />
                </td>
                <td class="width-150">
                  Date: <br />
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />/
                  <input type="text" class="w-30 bg-none text-center" />
                </td>
              </tr>
            </table>
          </div>
        </div>
        <br />
        <br />
        <br />
        <div class="f-bold">Summary/Comments</div>
        <div class="border bg-white h-70">
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
          <input type="text" class="w-100 bg-none" />
        </div>
        <br />
        <div class="border bg-grey">
          <div class="flex-center-align">
            <div class="w-100">
              <div class="f-bold">Signature and Title:</div>
              <input type="text" class="w-100 bg-grey bg-none" />
            </div>
            <div class="flex-center-align">
              <div class="f-bold">Date:</div>
              <input type="text" class="w-10 bg-none text-center bg-grey" />/
              <input type="text" class="w-10 bg-none text-center bg-grey" />/
              <input type="text" class="w-10 bg-none text-center bg-grey" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
