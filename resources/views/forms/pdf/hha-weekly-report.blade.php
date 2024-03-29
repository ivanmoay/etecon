<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HHA Weekly Report</title>

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
            /* background: radial-gradient(circle at 10% 20%, rgb(163, 175, 243) 0%, rgb(220, 182, 232) 100.2%); */
            padding: 10px 12px;
            border-radius: 18px;
        }

        .color-white { color: white }
        .bg-white { background: rgba(255, 255, 255, 0.726) }
        .bg-img-primary { background-image: linear-gradient(rgb(231, 235, 220), rgb(255, 255, 255)) }
        .bg-primary { background: rgba(87, 92, 59, 255)}
        .bg-secondary { background-color: rgba(212, 214, 201, 255)}
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

        .w-100 { width: 100% }
        .h-100 { height: 100vh }
        .h-80 { height: 80% }
        .h-3 { height: 3rem }

        .b-black { border: 1px solid black }
        .b-bot { border-bottom: 1px solid rgba(0, 0, 0, 0.349) }
        .b-right { border-right: 1px solid rgba(0, 0, 0, 0.349) }
        .b-left { border-left: 1px solid black }
        .pad-r { padding-right: 5px }
        .pad-l { padding-left: 5px}

        .padding-title { padding: 3px 0 }
        .pad-l-20 { padding-left: 20px }
        .pad-t { padding-top: 3px }
        .pad-t-20 { padding-top: 20px }
        .pad-b { padding-bottom: 5px }


        .text-primary { font-size: 18px }
        .text-secondary { font-size: 16px }

        .grid { display: grid }
        .grid-flow-col { grid-auto-flow: column }

        .place-center { place-items: center }
        .align-items-end { align-items: end }

        .layout-title { grid-template-columns: repeat(2, 1fr); background-color: white;}
        .layout-2 { grid-template-columns: 3fr 1fr }
        .layout-3 { grid-template-columns: 4fr 1fr 2fr }
        .layout-4 { grid-template-columns: 4fr 4fr 2fr 2fr }
        .layout-5 { grid-template-columns: 3fr 4fr 126px 1fr 3fr }

        input[type='text'], input[type='signs'], input[type='35-w'], input[type='text-cond'],input[type='input-uwu'] {
            background-color: transparent;
            margin-left: 2px;
            font-size: 14px;
            outline: 0;
            border: none;
            width: 100%;
            height: 1.5rem;
            border-bottom: 1px solid black;
        }

        input[type='signs'] { width: 90% }
        input[type='35-w'] { width: 35px }
        input[type='text-cond'] { height: auto; margin: 2px 10px; width: 94%; }
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

div.col2 {
    background-color: white;
}

.w-77 {
    width: 77px !important;
}


.demo {
    border:1px solid #000000;
    border-collapse:collapse;
    padding:3px;
    width: 100%;
    height: 100%;
    background-color: white;
}
.demo th {
    border:1px solid #000000;
    padding:3px;
}
.demo td {
    border:1px solid #000000;
    padding-left: 3px;
    padding:3px;
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

div.test div.col1 {
    display: grid;
    grid-template-columns: 1fr 2fr;
}

table.demo thead.br-none tr.br-none th.br-none {
    border-right: 0 none !important;
    border: 0 !important;
}

table.demo thead.bl-none tr.bl-none th.bl-none {
    border-left: 10px solid red;
    border-left: 0 none !important;
    border: 0 !important;
}

.bl-none {
    border-left: 0 none !important;
}
.br-none {
    border-right: 0 none !important;
}
    </style>
</head>

<body>
    <div class="A4">
        <div style="display: flex; flex-direction: row; align-items: flex-start; margin-bottom: 1rem;">
            <div style="display: flex; align-items: center">
                @if (!empty(Auth::user()->company_id))
                    <img src="{{ asset('/company_images/'.@Auth::user()->company->company_logo) }}" height="60" alt="final" border="0">&nbsp;
                    <h3>{{@Auth::user()->company->company_name}}</h3>
                @endif
            </div>
        </div>  
        <div class="header b-bot">
            <div class="input-text">
                <div class="input-with-text text-primary">
                    <input type="checkbox"><strong> Hospice Aide</strong>
                </div>
                <div class="input-with-text text-primary">
                    <input type="checkbox"><strong> Home Health Aide</strong>
                </div>
                <div class="input-with-text text-primary">
                    <input type="checkbox"><strong> Homemaker</strong>
                </div>
            </div>
            <div class="w-100">
                <h1>AIDE PROGRESS NOTES - Weekly</h1>
            </div>
        </div>
        <div class="patient-info w-100">
            <div class="border">
                <div class="grid layout-3 h-3 bg-img-primary b-bot">
                    <div class="text-secondary pad-l pad-t">
                        Patient Name <br>
                        <input type="text">
                    </div>
                    <div class="text-secondary pad-l b-left pad-t">
                        ID#
                        <input type="text">
                    </div>
                    <div class="text-secondary pad-l b-left pad-t">
                        Supervisor
                        <input type="text">
                    </div>
                </div>
                <div class="test">
                    <div class="col1">
                        <div>
                            <table class="demo br-none">
                                <thead>
                                    <tr>
                                        <th class="text-last">Date <span class="triangle">&#9658;</span></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div>
                            <table class="demo bl-none" >
                                <tbody>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <table class="demo br-none">
                                <thead>
                                    <tr>
                                        <th class="text-last">Time In / Time <span class="triangle">&#9658;</span></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div>
                            <table class="demo bl-none" >
                                <tbody>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>







                        <div>
                            <table class="demo">
                                <thead>
                                    <tr>
                                        <th class="bg-baloyit-heading"><strong>VITAL SIGNS</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Temprature</td>
                                </tr>
                                <tr>
                                    <td>BP</td>
                                </tr>
                                <tr>
                                    <td>Pulse</td>
                                </tr>
                                <tr>
                                    <td>Respiration</td>
                                </tr>
                                <tbody>
                            </table>
                        </div>
                        <div>
                            <table class="demo">
                                <thead>
                                <tr>
                                    <th class="bg-baloyit-heading w-77"><strong>MON</strong></th>
                                    <th class="bg-baloyit-heading w-77"><strong>TUE</strong></th>
                                    <th class="bg-baloyit-heading w-77"><strong>WED</strong></th>
                                    <th class="bg-baloyit-heading w-77"><strong>THU</strong></th>
                                    <th class="bg-baloyit-heading w-77"><strong>FRI</strong></th>
                                    <th class="bg-baloyit-heading w-77"><strong>SAT</strong></th>
                                    <th class="bg-baloyit-heading w-77"><strong>SUN</strong></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div>
                            <table class="demo br-none">
                                <thead>
                                    <tr>
                                        <th class="bg-baloyit-heading br-none"><strong>BATH</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="checkbox"> Tub &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox"> Shower</td>
                                </tr>
                                <tr>
                                    <td>Bed     &nbsp;&nbsp;&nbsp;<input type="checkbox"> Partial    &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox"> Complete</td>
                                </tr>
                                <tr>
                                    <td>Assist Bath-Chair</td>
                                </tr>
                                <tr>
                                    <td>Shampoo Hair</td>
                                </tr>
                                <tr>
                                    <td>Comb Hair</td>
                                </tr>
                                <tr>
                                    <td>Mouth Care</td>
                                </tr>
                                <tr>
                                    <td>Shave     &nbsp;&nbsp;&nbsp;<input type="checkbox"> Electric    &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox"> Straight</td>
                                </tr>
                                <tr>
                                    <td>Assist with Dressing</td>
                                </tr>
                                <tbody>
                            </table>
                        </div>
                        <div>
                            <table class="demo bl-none">
                                <thead>
                                <tr>
                                    <th class="bg-baloyit-heading bl-none" colspan="7">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                
                                </tbody>
                            </table>
                        </div>
                        
                        <div>
                            <table class="demo br-none">
                                <thead>
                                    <tr>
                                        <th class="br-none bg-baloyit-heading"><strong>HAND / FOOT CARE</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="checkbox"> Clean &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox"> File Nails</td>
                                </tr>
                                <tr>
                                    <td>Soak Feet</td>
                                </tr>
                                <tbody>
                            </table>
                        </div>
                        <div>
                            <table class="demo bl-none" >
                                <thead>
                                <tr>
                                    <th class="bl-none bg-baloyit-heading" colspan="7">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div>
                            <table class="demo br-none">
                                <thead>
                                    <tr>
                                        <th class="br-none bg-baloyit-heading"><strong>ELIMINATION</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Perineal Care</td>
                                </tr>
                                <tr>
                                    <td>External Cath Care</td>
                                </tr>
                                <tr>
                                    <td>Measure Cath Output</td>
                                </tr>
                                <tr>
                                    <td>Empty Drainage Bag</td>
                                </tr>
                                <tbody>
                            </table>
                        </div>
                        <div>
                            <table class="demo bl-none" >
                                <thead>
                                <tr>
                                    <th class="bl-none bg-baloyit-heading" colspan="7">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                
                                </tbody>
                            </table>
                        </div>


                        <div>
                            <table class="demo br-none">
                                <thead>
                                    <tr>
                                        <th class="br-none bg-baloyit-heading"><strong>SKIN CARE</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Apply Lotion</td>
                                </tr>
                                <tbody>
                            </table>
                        </div>
                        <div>
                            <table class="demo bl-none" >
                                <thead>
                                <tr>
                                    <th class="bl-none bg-baloyit-heading" colspan="7">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div>
                            <table class="demo br-none">
                                <thead>
                                    <tr>
                                        <th class="br-none bg-baloyit-heading"><strong>ACTIVITY</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="checkbox"> Ambulation &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox"> Mobility</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"> Walker  &nbsp;&nbsp; <input type="checkbox"> Wheelchair &nbsp;&nbsp; <input type="checkbox"> Cane</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"> Chair &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox"> Bed</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"> Dangle &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox"> Commode</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"> Walker  &nbsp;&nbsp; <input type="checkbox"> Wheelchair &nbsp;&nbsp; <input type="checkbox"> Cane</td>
                                </tr>
                                <tr>
                                    <td>Exercise-per&nbsp;&nbsp;&nbsp;<input type="checkbox"> PT&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox"> OT&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox"> SLP</td>
                                </tr>
                                <tr>
                                    <td>Reposition Patient</td>
                                </tr>
                                <tr>
                                    <td>Other: <input type="input-uwu" style="width: 83% !important;"></td>
                                </tr>
                                <tbody>
                            </table>
                        </div>
                        <div>
                            <table class="demo bl-none" >
                                <thead>
                                <tr>
                                    <th class="bl-none bg-baloyit-heading" colspan="7">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                
                                </tbody>
                            </table>
                        </div>

                        <div>
                            <table class="demo br-none">
                                <thead>
                                    <tr>
                                        <th class="br-none bg-baloyit-heading"><strong>MEALS</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Prepare</td>
                                </tr>
                                <tr>
                                    <td>Feed</td>
                                </tr>
                                <tr>
                                    <td>Setup</td>
                                </tr>
                                <tr>
                                    <td>Offer Oral Supplement</td>
                                </tr>
                                <tbody>
                            </table>
                        </div>
                        <div>
                            <table class="demo bl-none" >
                                <thead>
                                <tr>
                                    <th class="bl-none bg-baloyit-heading" colspan="7">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div>
                            <table class="demo br-none">
                                <thead>
                                    <tr>
                                        <th class="br-none bg-baloyit-heading"><strong>HOUSEKEEPING</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Changed Bed Linens</td>
                                </tr>
                                <tr>
                                    <td>Make Bed</td>
                                </tr>
                                <tr>
                                    <td>Straighten Room</td>
                                </tr>
                                <tr>
                                    <td>Laundry</td>
                                </tr>
                                <tr>
                                    <td>Shopping</td>
                                </tr>
                                <tbody>
                            </table>
                        </div>
                        <div>
                            <table class="demo bl-none" >
                                <thead>
                                <tr>
                                    <th class="bl-none bg-baloyit-heading" colspan="7">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div>
                            <table class="demo br-none">
                                <thead>
                                    <tr>
                                        <th class="br-none bg-baloyit-heading"><strong>OTHER</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Fall Precautions Maintained</td>
                                </tr>
                                <tr>
                                    <td>Feed</td>
                                </tr>
                                <tbody>
                            </table>
                        </div>
                        <div>
                            <table class="demo bl-none" >
                                <thead>
                                <tr>
                                    <th class="bl-none bg-baloyit-heading" colspan="7">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                <tr>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                    <td><input type="input-uwu"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col2 text-secondary">
                        <div class="text-secondary b-bot pad-l">Changes in Condition / Comments:</div>
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">
                        <input type="text-cond">

                    </div>
                </div>
            </div>
            
            <div class="layout-title padding-title pad-t">
                <div class="text-secondary pad-l">
                    <div class="text-secondary">Equipment Cleaned: <input type="text" style="width: 87%;"></div>
                    <div class="text-secondary"><strong>Changes in Conditions/Comments: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"> Other (specify): <input type="text" style="width: 23%;"></strong></div>
                    <div class="text-secondary"><input type="checkbox"> New Skin or Wound Breakdown &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"> Patient exhibiting signs of pain such                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="width: 34%;"></div>
                    <div class="text-secondary"><input type="checkbox"> No BM in 3 days &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; as grimacing, moaning and guarding</div>
                    <div class="text-secondary"><input type="checkbox"> Change in ability to rate pain</div>
                </div>
            </div>
            <div class="aide-info w-100 bg-white">
                <div class="text-secondary pad-l">
                    <strong>Reported To:</strong>
                </div>
                <div class="grid align-items-end layout-4 h-3 b-bot pad-b w-100">
                    <div class="text-secondary pad-l pad-b">
                        Name: <input type="text">
                    </div>
                    <div class="text-secondary pad-l pad-b">
                        Dicipline: <input type="text">
                    </div>
                    <div class="text-secondary pad-l pad-b">
                        Date: <input type="35-w">/<input type="35-w">/<input type="35-w">
                    </div>
                    <div class="align-items-end text-secondary pad-l pad-t grid grid-flow-col">
                        Time: <input type="signs">
                        <div class="format text-secondary">
                            <div><input type="checkbox"> am</div>
                            <div><input type="checkbox"> pm</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-flow-col h-3 bg-white pad-t">
                <div class="text-secondary pad-l">Aide Name Printed <input type="text"></div>
                <div class="text-secondary b-left pad-l">Aide Signature <input type="text"></div>
            </div>

            <div class="grid grid-flow-col layout-2 h-3 bg-img-primary pad-t b-black">
                <div class="text-primary pad-l">Patient Signature <input type="text"></div>
                <div class="text-primary b-left pad-l">Date <input type="text"></div>
            </div>
        </div>
    </div>
</body>
</html>