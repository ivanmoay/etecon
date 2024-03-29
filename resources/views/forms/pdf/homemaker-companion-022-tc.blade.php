<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homemaker Companion</title>

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
            font-size: 14px;
        }

        .A4 {
            width: 1240px;
            height: auto;
            margin: 2rem 0;
            margin-right: auto;
            margin-left: auto;
            background-color: #41FDFE;
            padding: 10px 12px;
            border-radius: 18px;
        }

        .color-white {
            color: white
        }

        .bg-white {
            background: rgba(255, 255, 255, 0.726)
        }

        .bg-img-primary {
            background-image: linear-gradient(rgb(231, 235, 220), rgb(255, 255, 255))
        }

        .bg-primary {
            background: rgba(87, 92, 59, 255)
        }

        .bg-secondary {
            background-color: rgba(212, 214, 201, 255)
        }

        .bg-gradient {
            background: rgb(0, 0, 0);
            background: linear-gradient(90deg, rgba(0, 0, 0, 1) 33%, rgb(255, 255, 255) 75%, rgba(255, 255, 255, 1) 100%);
        }

        .header {
            text-align: end;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }

        .input-text {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .w-100 {
            width: 100%
        }

        .h-100 {
            height: 100vh
        }

        .h-80 {
            height: 80%
        }

        .h-3 {
            height: 3rem
        }

        .b-black {
            border: 1px solid black
        }

        .b-bot {
            border-bottom: 1px solid rgba(0, 0, 0, 0.349)
        }

        .b-right {
            border-right: 1px solid rgba(0, 0, 0, 0.349)
        }

        .b-left {
            border-left: 1px solid black
        }

        .pad-r {
            padding-right: 5px
        }

        .pad-l {
            padding-left: 5px
        }

        .padding-title {
            padding: 3px 0
        }

        .pad-l-20 {
            padding-left: 20px
        }

        .pad-t {
            padding-top: 3px
        }

        .pad-t-20 {
            padding-top: 20px
        }

        .pad-b {
            padding-bottom: 5px
        }


        .text-primary {
            font-size: 18px
        }

        .text-secondary {
            font-size: 16px
        }

        .grid {
            display: grid
        }

        .grid-flow-col {
            grid-auto-flow: column
        }

        .place-center {
            place-items: center
        }

        .align-items-end {
            align-items: end
        }

        .layout-title {
            grid-template-columns: repeat(2, 1fr);
            background-color: white;
        }

        .layout-2 {
            grid-template-columns: 3fr 1fr
        }

        .layout-3 {
            grid-template-columns: 4fr 1fr 2fr
        }

        .layout-4 {
            grid-template-columns: 4fr 4fr 2fr 2fr
        }

        .layout-5 {
            grid-template-columns: 3fr 4fr 126px 1fr 3fr
        }

        input[type='text'],
        input[type='signs'],
        input[type='35-w'],
        input[type='text-cond'],
        input[type='input-uwu'],
        input[type='comment'],
        input[type='input-days'],
        input[type='time-input'] {
            background-color: transparent;
            margin-left: 2px;
            font-size: 1rem;
            outline: 0;
            border: none;
            width: 100%;
            height: 1.5rem;
        }

        input[type='signs'] {
            width: 90%
        }

        input[type='35-w'] {
            width: 35px;
            border-bottom: 1px solid black;
        }

        input[type='text-cond'] {
            height: auto;
            margin: 2px 10px;
            width: 94%;
        }

        input[type='input-uwu'] {
            margin-left: 0 !important;
            width: 97% !important;
            height: auto !important;
            border-bottom: 0 !important;
        }

        .bg-baloyit-heading {
            background: radial-gradient(circle at 10% 20%, rgb(163, 175, 243) 0%, rgb(220, 182, 232) 100.2%);
            color: white;
        }

        .text-last {
            text-align: right !important;
        }

        .w-77 {
            width: 77px !important;
        }

        div.border {
            border: 1px solid black !important;
        }

        div.test {
            border-top: 1px solid black;
            margin-top: 5px;
            display: grid;
            grid-template-columns: 2fr 1fr;
        }

        .bl-none {
            border-left: 0 none !important;
        }

        .br-none {
            border-right: 0 none !important;
        }

        .flex {
            display: flex;
        }

        .brand-container {
            /* background-color: antiquewhite; */
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .title {
            display: grid;
            place-items: center;
        }

        .no-bor-bot {
            border-bottom: 0 !important;
        }

        .info {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            border: 1px solid black !important;
        }

        div.week {
            background-color: white;
            display: grid;
            place-items: center;
        }

        div.table .dates,
        div.hours {
            background-color: white;
            margin: 5px 0;
            text-align: center;
            border: 1px solid black;
            display: grid;
            grid-template-columns: repeat(8, 1fr);
        }

        div.hours {
            text-align: right;
            margin-bottom: 0 !important;
            border-bottom: 0 !important;
        }

        div.table .times {
            background-color: white;
            border: 1px solid black;
            display: grid;
            grid-template-columns: repeat(8, 1fr);
        }

        div.table>div {
            padding-left: 3px;
            font-size: 1rem;
        }

        .subtitle {
            font-size: 12px !important;
        }

        div.format-uwu {
            display: grid;
            grid-auto-flow: column;
            place-items: end;
        }

        div.format-uwu p {
            font-size: 12px;
        }

        .text-uwu {
            text-align: center;
            border: 1px solid black;
            border-top: 0;
            background-color: white;
            padding: 5px 8px;
            font-weight: bold;
        }

        /* .test {
    text-align: right;
    background-color: rebeccapurple;
    display: flex;
    height: 10rem;
    justify-content: space-around;
} */

        div.week p.text-primary {
            font-size: 1.2rem !important;
        }

        .comments {
            background-color: white;
            border: 1px solid black;
            display: grid;
            grid-template-columns: 3fr 1fr;
        }

        input[type='comment'] {
            width: 88.5% !important;
            font-size: 1rem;
            border-bottom: 1px solid black !important;
        }

        .signature-date,
        .note {
            background-color: white;
            border: 1px solid black;
            border-top: 0;
            display: grid;
            grid-template-columns: 2fr 1fr 2fr 1fr;
        }

        .note {
            grid-template-columns: 3fr 1fr;
            padding: 20px 0;
            border: 0;
        }

        .note .adsig {
            border: 1px solid black;
            text-align: center;
            margin-right: 1rem;
            display: grid;
            grid-template-columns: 2fr 3fr;
        }

        p.sig {
            padding: 3px 0;
        }

        input[type='input-days'] {
            font-size: 1.2rem !important;
            height: 3rem !important;
            width: 90% !important;
            margin: auto !important;
        }

        input[type='time-input'] {
            width: 75% !important;
        }
    </style>
</head>

<body>
    <div class="A4">
        {{-- <div class="brand-container">
            <img src="https://i.ibb.co/kSr11h4/final.png" width="200" alt="final" border="0">
            <div style="text-align: end;">
                <h1>HOMEMAKER</h1>
                <h2>NOTE</h2>
            </div>
        </div> --}}
        <div style="display: flex; flex-direction: row; align-items: flex-start; margin-top: 1rem; margin-bottom: 1rem;">
            <div style="display: flex; align-items: center">
                @if (!empty(Auth::user()->company_id))
                    <img src="{{ asset('/company_images/'.@Auth::user()->company->company_logo) }}" height="60" alt="final" border="0">&nbsp;
                    <h3>{{@Auth::user()->company->company_name}}</h3>
                @endif
            </div>
            <div class="heading" style="margin-left: auto">
                <h1>HOMEMAKER</h1>
                <h2>NOTE</h2>
            </div>
        </div>
        <div class="title b-bot">
            <h1>HOMEMAKER/COMPANION TIMESHEET</h1>
        </div>
        <div class="patient-info w-100">
            <div class="info bg-img-primary b-bot h-3">
                <div>
                    <p class="text-secondary pad-l">CLIENT NAME (First, MI, Last)</p>
                    <input type="text">
                </div>
                <div class="b-left">
                    <p class="text-secondary pad-l">HOMEMAKER (First, MI, Last)</p>
                    <input type="text">
                </div>
            </div>

            <div class="week h-3">
                <div class="content">
                    <p class="text-primary">
                        For the week of:
                        <strong>Sunday</strong>
                        <input type="35-w">/<input type="35-w">/<input type="35-w"> thru &nbsp;&nbsp;&nbsp;&nbsp;
                        <strong>Saturday</strong>
                        <input type="35-w">/<input type="35-w">/<input type="35-w">
                    </p>
                    <div class="format-uwu">
                        <p class="text-secondary text-last" style="width: 180px;">MM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DD
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; YY&nbsp;&nbsp;&nbsp;&nbsp;</p>
                        <p class="text-secondary" style="width: 120px;">&nbsp;&nbsp;MM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DD
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; YY</p>
                    </div>
                </div>
            </div>

            <div class="table">
                <div class="dates" style="margin-top: 0;">
                    <div>
                        <h2>DATES OF SERVICE</h2>
                        <p>(MM/DD)</p>
                    </div>
                    <div class="b-left">
                        <h2>Sunday</h2>
                        <input type="input-days">
                    </div>
                    <div class="b-left">
                        <h2>Monday</h2>
                        <input type="input-days">
                    </div>
                    <div class="b-left">
                        <h2>Tuesday</h2>
                        <input type="input-days">
                    </div>
                    <div class="b-left">
                        <h2>Wednesday</h2>
                        <input type="input-days">
                    </div>
                    <div class="b-left">
                        <h2>Thursday</h2>
                        <input type="input-days">
                    </div>
                    <div class="b-left">
                        <h2>Friday</h2>
                        <input type="input-days">
                    </div>
                    <div class="b-left">
                        <h2>Saturday</h2>
                        <input type="input-days">
                    </div>
                </div>
                <div class="times b-bot no-bor-bot">
                    <div style="padding: 5px 0;">
                        <p class="text-secondary pad-l">TIME IN</p>
                        <p class="text-secondary pad-l subtitle">(circle AM/PM)</p>
                    </div>
                    <div class="b-left text-last">
                        <p class="text-secondary pad-r"><input type="time-input">&nbsp;AM</p>
                        <hr>
                        <p class="text-secondary pad-r"><input type="time-input">&nbsp;PM</p>
                    </div>
                    <div class="b-left text-last">
                        <p class="text-secondary pad-r"><input type="time-input">&nbsp;AM</p>
                        <hr>
                        <p class="text-secondary pad-r"><input type="time-input">&nbsp;PM</p>
                    </div>
                    <div class="b-left text-last">
                        <p class="text-secondary pad-r"><input type="time-input">&nbsp;AM</p>
                        <hr>
                        <p class="text-secondary pad-r"><input type="time-input">&nbsp;PM</p>
                    </div>
                    <div class="b-left text-last">
                        <p class="text-secondary pad-r"><input type="time-input">&nbsp;AM</p>
                        <hr>
                        <p class="text-secondary pad-r"><input type="time-input">&nbsp;PM</p>
                    </div>
                    <div class="b-left text-last">
                        <p class="text-secondary pad-r"><input type="time-input">&nbsp;AM</p>
                        <hr>
                        <p class="text-secondary pad-r"><input type="time-input">&nbsp;PM</p>
                    </div>
                    <div class="b-left text-last">
                        <p class="text-secondary pad-r"><input type="time-input">&nbsp;AM</p>
                        <hr>
                        <p class="text-secondary pad-r"><input type="time-input">&nbsp;PM</p>
                    </div>
                    <div class="b-left text-last">
                        <p class="text-secondary pad-r"><input type="time-input">&nbsp;AM</p>
                        <hr>
                        <p class="text-secondary pad-r"><input type="time-input">&nbsp;PM</p>
                    </div>
                </div>
                <div class="times">
                    <div>
                        <p class="text-secondary pad-l">TIME OUT</p>
                        <p class="text-secondary pad-l subtitle">(circle AM/PM)</p>
                    </div>
                    <div class="b-left text-last">
                        <p class="text-secondary pad-r"><input type="time-input">&nbsp;AM</p>
                        <hr>
                        <p class="text-secondary pad-r"><input type="time-input">&nbsp;PM</p>
                    </div>
                    <div class="b-left text-last">
                        <p class="text-secondary pad-r"><input type="time-input">&nbsp;AM</p>
                        <hr>
                        <p class="text-secondary pad-r"><input type="time-input">&nbsp;PM</p>
                    </div>
                    <div class="b-left text-last">
                        <p class="text-secondary pad-r"><input type="time-input">&nbsp;AM</p>
                        <hr>
                        <p class="text-secondary pad-r"><input type="time-input">&nbsp;PM</p>
                    </div>
                    <div class="b-left text-last">
                        <p class="text-secondary pad-r"><input type="time-input">&nbsp;AM</p>
                        <hr>
                        <p class="text-secondary pad-r"><input type="time-input">&nbsp;PM</p>
                    </div>
                    <div class="b-left text-last">
                        <p class="text-secondary pad-r"><input type="time-input">&nbsp;AM</p>
                        <hr>
                        <p class="text-secondary pad-r"><input type="time-input">&nbsp;PM</p>
                    </div>
                    <div class="b-left text-last">
                        <p class="text-secondary pad-r"><input type="time-input">&nbsp;AM</p>
                        <hr>
                        <p class="text-secondary pad-r"><input type="time-input">&nbsp;PM</p>
                    </div>
                    <div class="b-left text-last">
                        <p class="text-secondary pad-r"><input type="time-input">&nbsp;AM</p>
                        <hr>
                        <p class="text-secondary pad-r"><input type="time-input">&nbsp;PM</p>
                    </div>
                </div>
                <div class="text-uwu">
                    <p class="text-secondary">Complete the activities listed below according to the Homemaker Assignment
                        Sheet. For additions, changes, or deletions, contact the</p>
                    <p class="text-secondary">supervisor. To ensure payment you MUST write your INITIALS next to all the
                        activities you provided for each date you provided care.</p>
                </div>
            </div>
            <div class="table">
                <div class="times">
                    <div>Socialization</div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                </div>
                <div class="times">
                    <div>Meal Preparation</div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                </div>
                <div class="times">
                    <div>Kitchen:</div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                </div>
                <div class="times">
                    <div>&nbsp; Wash Dishes</div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                </div>
                <div class="times">
                    <div>&nbsp; Clean Stove/Oven</div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                </div>
                <div class="times">
                    <div>&nbsp; Clean Refrigerator</div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                </div>
                <div class="times">
                    <div>&nbsp; Empty Garbage</div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                </div>
                <div class="times">
                    <div>&nbsp; Sweep/Mop Floor</div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                </div>
                <div class="times">
                    <div>Laundry:</div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                </div>
                <div class="times">
                    <div>&nbsp; Load Washer</div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                </div>
                <div class="times">
                    <div>&nbsp; Load Dryer</div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                </div>
                <div class="times">
                    <div>&nbsp; Fold Clothes</div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                </div>
                <div class="times">
                    <div>&nbsp; Put Away Clothes</div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                </div>
                <div class="times">
                    <div>Living Room:</div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                </div>
                <div class="times">
                    <div>&nbsp; Dust</div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                </div>
                <div class="times">
                    <div>&nbsp; Vacuum</div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                </div>
                <div class="times">
                    <div>Bathroom:</div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                </div>
                <div class="times">
                    <div>&nbsp; Clean Toilet/Sink</div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                </div>
                <div class="times">
                    <div>&nbsp; Sweep/Mop Floor</div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                </div>
                <div class="times">
                    <div>&nbsp; Clean Shower/Tub</div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                </div>
                <div class="times">
                    <div>&nbsp; Empty Garbage</div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                </div>
                <div class="times">
                    <div>Bedroom:</div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                </div>
                <div class="times">
                    <div>&nbsp; Change Bed Linen</div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                </div>
                <div class="times">
                    <div>&nbsp; Dust</div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                </div>
                <div class="times">
                    <div>&nbsp; Vacuum</div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                </div>
                <div class="times">
                    <div>&nbsp; Empty Garbage</div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                </div>
                <div class="times">
                    <div>Groceries:</div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                </div>
                <div class="times">
                    <div>Other:</div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                    <div class="b-left"><input type="text"></div>
                </div>
                <div class="hours">
                    <div class="pad-r">
                        <strong>
                            <p>DAILY TOTAL</p>
                            <p>HOURS</p>
                        </strong>
                    </div>
                    <div class="b-left"><input type="input-days"></div>
                    <div class="b-left"><input type="input-days"></div>
                    <div class="b-left"><input type="input-days"></div>
                    <div class="b-left"><input type="input-days"></div>
                    <div class="b-left"><input type="input-days"></div>
                    <div class="b-left"><input type="input-days"></div>
                    <div class="b-left"><input type="input-days"></div>
                </div>
                <div class="comments">
                    <div>
                        <p class="text-primary">Comments: <input type="comment"></p>
                        <input type="text" style="border-bottom: 1px solid black; width: 99%;">
                        <input type="text" style="border-bottom: 1px solid black; width: 99%;">
                        <input type="text" style="width: 99%;">
                    </div>
                    <div class="b-left pad-l pad-t">
                        <strong>
                            <p>TOTAL HOURS FOR WEEK:</p>
                            <input type="text" style="font-size: 1.5rem; margin-top: 5px; height: 3rem;">
                        </strong>
                    </div>
                </div>
                <div class="signature-date">
                    <div>
                        <p class="text-primary">CLIENT/RESPONSIBLE PARTY SIGNATURE</p>
                        <input type="text">
                    </div>
                    <div class="b-left">
                        <p class="text-primary pad-l">DATE</p>
                        <input type="text">
                    </div>
                    <div class="b-left">
                        <p class="text-primary pad-l">HOMEMAKER SIGNATURE</p>
                        <input type="text">
                    </div>
                    <div class="b-left">
                        <p class="text-primary pad-l">DATE</p>
                        <input type="text">
                    </div>
                </div>
            </div>

            <div class="note">
                <div class="pad-l">
                    <p class="text-secondary"><strong>NOTE:</strong> ALL TIMESHEETS MUST BE RECEIVED EVERY MONDAY BY
                        10:00AM FOLLOWING THE WEEK WORKED</p>
                    <p class="text-secondary">PLEASE CALL AFTER YOU SEND YOUR TIMESHEETS TO MAKE SURE THEY WERE
                        RECEIVED.</p>
                    <p class="text-secondary">BLANK TIMESHEETS CAN BE FOUND AT WWW.ETECON.APP - USERS MUST REGISTER
                        FIRST</p>
                </div>
                <div class="adsig">
                    <div>
                        <p class="sig b-bot">ADMIN (Initial)</p>
                        <input type="text">
                    </div>
                    <div class="b-left">
                        <p class="sig b-bot">Sup (Initial & Date)</p>
                        <input type="text">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>