<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospice Patient Emergency Preparedness Plan Form</title>
    <style>
        *{margin:0;padding:0;box-sizing:border-box}body,html{width:100%;height:100%}body{font-family:sans-serif;font-size:14px;padding:10px;letter-spacing:normal;background-color:rgba(201,195,195,.473)}.signature{background-color:rgba(201,195,195,.473);padding:1rem 1.2rem;border-top:1px solid #000;border-bottom:2px solid #000}input.bb{border-bottom:1px solid #000!important}input[type=text],p.text-normal{font-size:14px!important;color:#00f}.bg-white{background-color:#fff!important}.title{display:grid;place-items:center;background-color:#0a0796;color:#fff;padding:2px 0;border-radius:15px}.container{padding:2px 0}@page{size:A4 portrait}.patient-information{background-color:rgba(255,255,255,.952);display:grid;grid-template-columns:2fr 1fr}.address-information{display:grid;grid-template-columns:3fr 1fr 1fr 1fr}.patient-reps{display:grid;grid-template-columns:1.5fr .5fr 1fr}.bt{border-top:1px solid #000}.head{display:grid;height:100%;align-items:center;grid-template-columns:1.5fr 2fr}.header{margin:auto}h1.heading{font-size:16px;font-weight:700;text-align:right;color:#fffdfd!important}.main{height:auto;border-radius:18px}.bl{border-left:1px solid #000}.pl{padding-left:3px}.pt{padding-top:5px}.pb{padding-bottom:5px}.right-cont{width:100%}.contact-phone{background-color:rgba(236,99,99,.651)!important;display:grid;grid-template-columns:2fr 1fr}.contact-phone>p{color:red!important}.choice-box{display:grid;grid-template-columns:repeat(3,1fr)}.diix{background-color:rgba(0,0,255,.151)!important}.core-div{background-color:#fff;display:grid;grid-template-columns:1fr 25px}div.right-cont{writing-mode:tb-rl;transform:rotate(-180deg);margin:auto;background-color:red;width:100%;height:100%;display:grid;place-items:center}div.form{background-color:#0165fc;border-radius:18px;padding:10px}.fieldsss{background-color:pink!important}.grid-col-2{background-color:#fff!important;display:grid;grid-template-columns:2fr 1fr!important}input[type=comment],input[type=days],input[type=input-days],input[type=input-uwu],input[type=period],input[type=signature],input[type=text],input[type=time-input]{background-color:transparent;margin-top:2px;font-size:14px;outline:0;border:none;width:100%;color:#000}input[type=days],input[type=period],input[type=signature]{border-bottom:1px solid #000;width:45%}.soc{background-color:#fff9f9;margin:5px}.soc>p{color:#0165fcb0}.grid-2{grid-template-columns:1fr 2.1fr;background-color:red}input[type=days]{width:50px;margin-top:0;height:auto}input[type=signature]{width:100%;margin-top:0;height:auto;padding-left:25px}
    </style>
</head>

<body>
    <div class="main">
        <div class="brand-container">
            @if (!empty(Auth::user()->company_id))
                <img src="{{ asset('/company_images/'.@Auth::user()->company->company_logo) }}" width="200" alt="final" border="0">
            @endif
        </div>
        <div class="form">
            <div class="patient-information grid-2">
                <div class="soc">
                    <p class="text-normal"><strong>S.O.C Date:</strong></p>
                    <input type="text">
                </div>
                <div class="header">
                    <h1 class="heading">INDIVIDUAL PATIENT EMERGENCY PREPAREDNESS PLAN</h1>
                </div>
            </div>


            <div class="core-div">
                <div class="left-cont">
                    <div class="title">
                        <p class="heading"><strong>IDENTIFYING INFORMATION</strong></p>
                    </div>


                    <div class="patient-information bg-white br">
                        <div class="pl pt">
                            <p class="text-normal">Patient Name:(First, Middle, Last, Suffix)</p>
                            <input type="text">
                        </div>
                        <div class="bl pt pl">
                            <p class="text-normal">Patient Phone #:</p>
                            <input type="text">
                        </div>
                    </div>

                    <div class="address-information bg-white bt">
                        <div class="pl pt">
                            <p class="text-normal">Patient Address:</p>
                            <input type="text">
                        </div>
                        <div class="bl pt pl">
                            <p class="text-normal">City:</p>
                            <input type="text">
                        </div>
                        <div class="bl pt pl">
                            <p class="text-normal">State:</p>
                            <input type="text">
                        </div>
                        <div class="bl pt pl">
                            <p class="text-normal">Zip:</p>
                            <input type="text">
                        </div>
                    </div>

                    <div class="patient-reps bg-white bt">
                        <div class="pl pt">
                            <p class="text-normal">Patient Representative:</p>
                            <input type="text">
                        </div>
                        <div class="bl pt pl">
                            <p class="text-normal">Relationship:</p>
                            <input type="text">
                        </div>
                        <div class="bl pt pl">
                            <p class="text-normal">Representative Phone #:</p>
                            <input type="text">
                        </div>
                    </div>

                    <div class="address-information bg-white bt">
                        <div class="pl pt">
                            <p class="text-normal">Representative Address:</p>
                            <input type="text">
                        </div>
                        <div class="bl pt pl">
                            <p class="text-normal">City:</p>
                            <input type="text">
                        </div>
                        <div class="bl pt pl">
                            <p class="text-normal">State:</p>
                            <input type="text">
                        </div>
                        <div class="bl pt pl">
                            <p class="text-normal">Zip:</p>
                            <input type="text">
                        </div>
                    </div>

                    <div class="patient-information bg-white bt">
                        <div class="pl pt">
                            <p class="text-normal">Physician Name:</p>
                            <input type="text">
                        </div>
                        <div class="bl pt pl">
                            <p class="text-normal">Physician Phone #:</p>
                            <input type="text">
                        </div>
                    </div>

                    <div class="title">
                        <p class="text-heading"><strong>RELEVANT HEALTHCARE INFORMATION</strong></p>
                    </div>
                    <div class="diix">
                        <div class="pl pt">
                            <p class="text-normal"><strong>Primary Dx:</strong></p>
                            <input type="text">
                        </div>
                        <div class="pl pt bt">
                            <p class="text-normal"><strong>Secondary Dx:</strong></p>
                            <input type="text">
                        </div>
                        <div class="pl pt bt">
                            <p class="text-normal"><strong>Daily or more frequent Agency
                                    Services:</strong>&nbsp;&nbsp;&nbsp;<input type="checkbox"> No &nbsp;&nbsp; <input
                                    type="checkbox"> Yes</p>
                            <p class="text-normal">&nbsp; If Yes, Describe: <input type="text" class="bb"
                                    style="width: 83%;"></p>
                            <p class="text-normal">&nbsp;&nbsp;<input type="text" class="bb" style="width: 98%;"></p>
                        </div>
                        <div class="pl pt pb">
                            <p class="text-normal"><strong>Oxygen Dependent:</strong>&nbsp;&nbsp;<input type="checkbox">
                                No &nbsp;<input type="checkbox"> Yes Flow Rate: <input type="text" class="bb"
                                    style="width: 33px;"> Hours of Use: <input type="text" class="bb"
                                    style="width: 33px;"> Delivery Device: <input type="text" class="bb"
                                    style="width: 100px;"></p>
                        </div>
                        <div class="pl pt pb bt">
                            <p class="text-normal"><strong>Life-Sustaining Infusion:</strong>&nbsp;&nbsp;&nbsp;<input
                                    type="checkbox"> No &nbsp;&nbsp; <input type="checkbox"> Yes</p>
                            <p class="text-normal">&nbsp; If Yes, Describe: <input type="text" class="bb"
                                    style="width: 83%;"></p>
                            <p class="text-normal">&nbsp;&nbsp;<input type="text" class="bb" style="width: 98%;"></p>
                        </div>
                        <div class="pl pt pb bt">
                            <p class="text-normal"><strong>Other IV Therapy:</strong>&nbsp;&nbsp;&nbsp;<input
                                    type="checkbox"> No &nbsp;&nbsp; <input type="checkbox"> Yes</p>
                            <p class="text-normal">&nbsp; If Yes, Describe: <input type="text" class="bb"
                                    style="width: 83%;"></p>
                            <p class="text-normal">&nbsp;&nbsp;<input type="text" class="bb" style="width: 98%;"></p>
                        </div>
                        <div class="pl pt bt">
                            <p class="text-normal"><strong>Patient Independent:</strong>&nbsp;&nbsp;&nbsp;<input
                                    type="checkbox"> No &nbsp;&nbsp; <input type="checkbox"> Yes
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Caregiver
                                    Independent:</strong>&nbsp;&nbsp;&nbsp;<input type="checkbox"> No &nbsp;&nbsp;
                                <input type="checkbox"> Yes</p>
                        </div>
                        <div class="pl pt bt">
                            <p class="text-normal"><strong>Ventilator Dependent:</strong>&nbsp;&nbsp;&nbsp;<input
                                    type="checkbox"> No &nbsp;&nbsp; <input type="checkbox"> Yes</p>
                        </div>
                        <div class="pl pt pb bt">
                            <p class="text-normal"><strong>Dialysis:</strong>&nbsp;&nbsp;&nbsp;<input type="checkbox">
                                No &nbsp;&nbsp; <input type="checkbox"> Yes</p>
                            <p class="text-normal">&nbsp; If Yes, Describe: <input type="text" class="bb"
                                    style="width: 83%;"></p>
                            <p class="text-normal">&nbsp;&nbsp;<input type="text" class="bb" style="width: 98%;"></p>
                        </div>
                        <div class="pl pt pb bt">
                            <p class="text-normal"><strong>Tube Feeding:</strong>&nbsp;&nbsp;&nbsp;<input
                                    type="checkbox"> No &nbsp;&nbsp; <input type="checkbox"> Yes</p>
                            <p class="text-normal">&nbsp; If Yes, Describe: <input type="text" class="bb"
                                    style="width: 83%;"></p>
                            <p class="text-normal">&nbsp;&nbsp;<input type="text" class="bb" style="width: 98%;"></p>
                        </div>
                        <div class="pl pt bt">
                            <p class="text-normal"><strong>Independent with Self-Administered
                                    Medications:</strong>&nbsp;<strong>Patient </strong><input type="checkbox"> No
                                &nbsp;<input type="checkbox"> Yes &nbsp;&nbsp;&nbsp;<strong>Caregiver:</strong> <input
                                    type="checkbox"> No &nbsp;<input type="checkbox"> Yes</p>
                        </div>
                        <div class="pl pt bt">
                            <p class="text-normal"><strong>Functional Disabilities</strong>(check all that apply):</p>
                            <div class="choice-box">
                                <p class="text-normal"><input type="checkbox"> Walker/Crane</p>
                                <p class="text-normal"><input type="checkbox"> Wheelchair</p>
                                <p class="text-normal"><input type="checkbox"> Bedbound</p>
                                <p class="text-normal"><input type="checkbox"> Hearing Impairment</p>
                                <p class="text-normal"><input type="checkbox"> Visual Impairment</p>
                                <p class="text-normal"><input type="checkbox"> Mental/Cognitive Impairment</p>
                            </div>
                        </div>
                        <div class="pl pt pb bt">
                            <p class="text-normal"><strong>Life Saving Equipment:</strong>&nbsp;<strong>Patient
                                </strong><input type="checkbox"> No &nbsp;<input type="checkbox"> Yes
                                &nbsp;&nbsp;&nbsp;<strong>Can equipment be transported?:</strong> <input
                                    type="checkbox"> No &nbsp;<input type="checkbox"> Yes</p>
                        </div>
                        <div class="pl pt bt">
                            <p class="text-normal"><strong style="letter-spacing: normal;">Is patient under
                                    investigation, has a suspected exposure to or a friend confirmed case for any
                                    communicable disease:</strong>&nbsp;&nbsp;<input type="checkbox"> No &nbsp;<input
                                    type="checkbox"> Yes</p>
                        </div>
                    </div>
                    <div class="title">
                        <p class="text-heading"><strong>EMERGENCY PLAN</strong></p>
                    </div>
                    <div class="contact-plan-container">
                        <div class="contact-phone pl pt pb bt">
                            <p class="text-normal"><strong>Emergency Contact Name:</strong> <input type="text"
                                    class="bb" style="width: 58%;"></p>
                            <p class="text-normal"><strong>Phone #:</strong> <input type="text" class="bb"
                                    style="width: 70%;"></p>
                        </div>
                        <div class="bt bg-white">
                            <p class="text-normal"><strong>If necessary, patient will evacuate to:</strong></p>
                            <div class="fieldsss">
                                <div class="grid-col-2">
                                    <p class="text-normal">&nbsp; <input type="checkbox"> Relative/Friend Name: <input
                                            type="text" class="bb" style="width: 60%;"></p>
                                    <p class="text-normal">Phone #: <input type="text" class="bb" style="width: 70%;">
                                    </p>
                                    <p class="text-normal">&nbsp; <input type="checkbox"> Hotel Name: <input type="text"
                                            class="bb" style="width: 74%;"></p>
                                    <p class="text-normal">Phone #: <input type="text" class="bb" style="width: 70%;">
                                    </p>
                                    <p class="text-normal">&nbsp; <input type="checkbox"> Shelter Location: <input
                                            type="text" class="bb" style="width: 68%;"></p>
                                    <p class="text-normal">&nbsp;</p>
                                    <p class="text-normal">&nbsp; Is patient registered for special needs shelter?:
                                        <input type="checkbox"> No &nbsp;<input type="checkbox"> Yes</p>
                                    <p class="text-normal">&nbsp;</p>
                                    <p class="text-normal">&nbsp;<input type="checkbox"> Other (describe): <input
                                            type="text" class="bb" style="width: 69%"></p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="bt bg-white">
                            <p class="text-normal"><strong>Patient Emergency Plan was reviewed with (check all that
                                    apply):</strong></p>
                            <div class="fieldsss">
                                <div class="grid-col-2">
                                    <p class="text-normal pt">&nbsp; <input type="checkbox"> Patient
                                        &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"> Patient Representative
                                        &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox"> Caregiver</p>
                                    <p class="text-normal">&nbsp;</p>
                                    <p class="text-normal">&nbsp; <input type="checkbox"> Other (print names): <input
                                            type="text" class="bb" style="width: 64%;"></p>
                                    <p class="text-normal"><input type="text" class="bb" style="width: 95%;"></p>
                                    <p class="text-normal">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="bb" style="width: 64%;"></p>
                                    <p class="text-normal"><input type="text" class="bb" style="width: 95%;"></p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="contact-phone pl pt pb bt">
                            <p class="text-normal"><strong>Priority/Aculty Level:</strong> <input type="text" class="bb"
                                    style="width: 30%;"></p>
                        </div>


                    </div>
                    <div class="contact-phone bt">
                       <div class="pl">
                        <p class="text-normal">Clinician Signature:</p>
                        <input type="text"
                        style="width: 58%;">
                       </div>

                       <div class="pl bl">
                        <p class="text-normal">Date:</p>
                        <input type="text"
                        style="width: 58%;">
                       </div>
                    </div>
                </div>
                <div class="right-cont">
                    <h1 class="heading">INDIVIDUAL PATIENT EMERGENCY PREPAREDNESS PLAN</h1>
                </div>
            </div>
        </div>
    </div>
</body>

</html>