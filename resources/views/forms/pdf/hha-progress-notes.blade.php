<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HHA Progress Notes</title>

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

        .layout-title { grid-template-columns: repeat(2, 1fr) }
        .layout-2 { grid-template-columns: 3fr 1fr }
        .layout-3 { grid-template-columns: 4fr 1fr 2fr }
        .layout-4 { grid-template-columns: 4fr 4fr 2fr 2fr }
        .layout-5 { grid-template-columns: 3fr 4fr 126px 1fr 3fr }

        input[type='text'], input[type='signs'], input[type='35-w'] {
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
    </style>
</head>

<body>
    <div class="A4">
        {{-- <div class="brand-container">
            <img src="https://i.ibb.co/kSr11h4/final.png" width="200" alt="final" border="0">
        </div> --}}
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
                    <input type="checkbox"><strong>Hospice Aide</strong>
                </div>
                <div class="input-with-text text-primary">
                    <input type="checkbox"><strong>Home Health Aide</strong>
                </div>
                <div class="input-with-text text-primary">
                    <input type="checkbox"><strong>Homemaker</strong>
                </div>
            </div>
            <div class="w-100">
                <h1>PROGRESS NOTES</h1>
            </div>
        </div>
        <div class="patient-info w-100">
            <div class="grid layout-3 h-3 bg-img-primary b-bot">
                <div class="text-secondary pad-l pad-t">
                    Patient Name <br>
                    <input type="text">
                </div>
                <div class="text-secondary pad-l b-left pad-t">
                    Patient #/CR #
                    <input type="text">
                </div>
                <div class="text-secondary pad-l b-left pad-t">
                    Supervisor
                    <input type="text">
                </div>
            </div>
            <div class="grid layout-5 b-bot h-3 bg-img-primary b-bot">
                <div class="text-secondary pad-l pad-t">Date <br> <input type="text"></div>
                <div class="text-secondary pad-l pad-t b-left">Day of Week <input type="text"></div>
                <div class="text-secondary pad-l pad-t b-left">Time In <input type="text"></div>
                <div class="text-secondary pad-l pad-t b-left">Time Out <input type="text"></div>
                <div class="text-secondary pad-l pad-t b-left">Service Code <i>(Optinal per agency policy) <input type="text"></i></div>
            </div>

            <div class="tables w-auto bg-white grid grid-flow-col layout-title text-primary">
                <div class="w-100 b-black h-auto h-80">
                    <div class="grid grid-flow-col place-center text-primary padding-title bg-gradient b-bot">
                        <div class="color-white"><strong>VITAL SIGNS</strong></div>
                        <div><strong>NOTES</strong></div>
                    </div>
                    <div class="grid grid-flow-col layout-title text-secondary padding-title pad-l-20 b-bot">
                        <div>Temparature</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title text-secondary padding-title pad-l-20 b-bot">
                        <div>BP</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title text-secondary padding-title pad-l-20 b-bot">
                        <div>Pulse</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title text-secondary padding-title pad-l-20 b-bot">
                        <div>Respiration</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col place-center text-primary padding-title bg-gradient b-bot">
                        <div class="color-white"><strong>BATH</strong></div>
                        <div><strong>NOTES</strong></div>
                    </div>
                    <div class="grid grid-flow-col layout-title text-secondary padding-title pad-l-20 b-bot">
                        <div>
                            <input type="checkbox">Tub
                            &nbsp;&nbsp;&nbsp;
                            <input type="checkbox">Shower
                        </div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title padding-title pad-l-20 b-bot">
                            <div class="text-secondary">Bed:<input type="checkbox">Partial &nbsp;&nbsp;&nbsp; <input type="checkbox">Complete</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title text-secondary padding-title pad-l-20 b-bot">
                        <div>Assist bath-Chair</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title padding-title pad-l-20 b-bot">
                        <div class="text-secondary">Shampoo Hair</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title padding-title pad-l-20 b-bot">
                        <div class="text-secondary">Comb Hair</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title padding-title pad-l-20 b-bot">
                        <div class="text-secondary">Mouth Care</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title padding-title pad-l-20 b-bot">
                        <div class="text-secondary">Shave
                            <input type="checkbox"><i>Electric</i>
                            &nbsp;&nbsp;&nbsp;
                            <input type="checkbox"><i>Straight</i>
                        </div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title padding-title pad-l-20 b-bot">
                        <div class="text-secondary">Assist with Dressing</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col place-center text-primary padding-title bg-gradient b-bot">
                        <div class="color-white"><strong>HAND / FOOT CARE</strong></div>
                        <div><strong>NOTES</strong></div>
                    </div>
                    <div class="grid grid-flow-col layout-title text-secondary padding-title pad-l-20 b-bot">
                        <div>
                            <input type="checkbox">Clean
                            &nbsp;&nbsp;&nbsp;
                            <input type="checkbox">File nails
                        </div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title padding-title pad-l-20 b-bot">
                        <div class="text-secondary">Soak Feet</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col place-center text-primary padding-title bg-gradient b-bot">
                        <div class="color-white"><strong>ELIMINATION</strong></div>
                        <div><strong>NOTES</strong></div>
                    </div>
                    <div class="grid grid-flow-col layout-title padding-title pad-l-20 b-bot">
                        <div class="text-secondary">Perineal Care</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title padding-title pad-l-20 b-bot">
                        <div class="text-secondary">External Cath Care</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title padding-title pad-l-20 b-bot">
                        <div class="text-secondary">Measure Cath Output</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title padding-title pad-l-20 b-bot">
                        <div class="text-secondary">Empty Drainage Bag</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title padding-title pad-l-20 b-bot">
                        &nbsp;
                    </div>
                    
                    <div class="layout-title padding-title pad-t-20">
                        <div class="text-secondary">
                            <div class="text-secondary">Equipment Cleaned: <input type="text"></div>
                            <div class="text-secondary"><strong>Changes in Conditions/Comments:</strong></div>
                            <div class="text-secondary"><input type="checkbox"> New Skin or Wound Breakdown</div>
                            <div class="text-secondary"><input type="checkbox"> No BM in 3 days</div>
                            <div class="text-secondary"><input type="checkbox"> Change in ability to rate pain</div>
                            <div class="text-secondary"><input type="checkbox"> Patient exhibiting signs of pain such as grimacing, moaning and guarding</div>
                            <div class="text-secondary"><input type="checkbox"> Other (specify): <input type="signs" style="width: 75%;"></div>
                        </div>
                    </div>
                </div>
                

            
                <div class="w-100  b-black" style="margin-bottom: 5.5rem;">
                    <div class="grid grid-flow-col place-center text-primary padding-title bg-gradient b-bot">
                        <div class="color-white"><strong>SKIN CARE</strong></div>
                        <div><strong>NOTES</strong></div>
                    </div>
                    <div class="grid grid-flow-col layout-title text-secondary padding-title pad-l-20 b-bot">
                        <div>Apply Lotion</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col place-center text-primary padding-title bg-gradient b-bot">
                        <div class="color-white"><strong>ACTIVITY</strong></div>
                        <div><strong>NOTES</strong></div>
                    </div>
                    <div class="grid grid-flow-col layout-title text-secondary padding-title pad-l-20 b-bot">
                        <div>
                            <input type="checkbox">Ambulation
                            &nbsp;&nbsp;&nbsp;
                            <input type="checkbox">Mobility
                        </div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title text-secondary padding-title pad-l-20 b-bot">
                        <div>
                            <input type="checkbox">Walker
                            &nbsp;&nbsp;&nbsp;
                            <input type="checkbox">Wheelchair
                            &nbsp;&nbsp;&nbsp;
                            <input type="checkbox">Cane
                        </div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title text-secondary padding-title pad-l-20 b-bot">
                        <div>
                            <input type="checkbox">Chair
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox">Bed
                        </div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title text-secondary padding-title pad-l-20 b-bot">
                        <div>
                            <input type="checkbox">Dangle
                            &nbsp;&nbsp;&nbsp;
                            <input type="checkbox">Commode
                        </div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title padding-title pad-l-20 b-bot">
                            <div class="text-secondary">Exercise-per:<input type="checkbox">PT &nbsp;&nbsp;&nbsp; <input type="checkbox">OT &nbsp;&nbsp;&nbsp; <input type="checkbox">SLP</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title padding-title pad-l-20 b-bot">
                        <div class="text-secondary">Reposition Patient</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title text-secondary padding-title pad-l-20 b-bot">
                        <div>Other</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    
                    <div class="grid grid-flow-col place-center text-primary padding-title bg-gradient b-bot">
                        <div class="color-white"><strong>MEALS</strong></div>
                        <div><strong>NOTES</strong></div>
                    </div>
                    <div class="grid grid-flow-col layout-title padding-title pad-l-20 b-bot">
                        <div class="text-secondary">Prepare</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title padding-title pad-l-20 b-bot">
                        <div class="text-secondary">Feed</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title padding-title pad-l-20 b-bot">
                        <div class="text-secondary">Setup</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title padding-title pad-l-20 b-bot">
                        <div class="text-secondary">Offer Oral Supplement</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>


                    <div class="grid grid-flow-col place-center text-primary padding-title bg-gradient b-bot">
                        <div class="color-white"><strong>HOUSEKEEPING</strong></div>
                        <div><strong>NOTES</strong></div>
                    </div>
                    <div class="grid grid-flow-col layout-title padding-title pad-l-20 b-bot">
                        <div class="text-secondary">Change Bed Linens</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title padding-title pad-l-20 b-bot">
                        <div class="text-secondary">Make Bed</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title padding-title pad-l-20 b-bot">
                        <div class="text-secondary">Straighten Room</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title padding-title pad-l-20 b-bot">
                        <div class="text-secondary">Laundry</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title padding-title pad-l-20 b-bot">
                        <div class="text-secondary">Shopping</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>

                    <div class="grid grid-flow-col place-center text-primary padding-title bg-gradient b-bot">
                        <div class="color-white"><strong>OTHER</strong></div>
                        <div><strong>NOTES</strong></div>
                    </div>
                    <div class="grid grid-flow-col layout-title padding-title pad-l-20 b-bot">
                        <div class="text-secondary">Fall Precautions Maintained</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title padding-title pad-l-20 b-bot">
                        <div class="text-secondary">&nbsp;</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title padding-title pad-l-20 b-bot">
                        <div class="text-secondary">&nbsp;</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                    <div class="grid grid-flow-col layout-title padding-title pad-l-20 b-bot">
                        <div class="text-secondary">&nbsp;</div>
                        <div><input type="checkbox"><input type="signs"></div>
                    </div>
                </div>
            </div>
            <div class="bg-white lines w-100" style="color: #000;">
                <input type="text">
                <br>
                <input type="text">
                <br>
                <input type="text">
                <br>
                <input type="text">
                <br>
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
                            <div><input type="checkbox">am</div>
                            <div><input type="checkbox">pm</div>
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