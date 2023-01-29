<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCA Care Plan</title>

    <style>
        /*   Config styles  */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            margin: 2rem 3rem;
            font-family: 'Roboto', sans-serif;
            color: #000000;
        }

        h1 {
            font-size: 1.5rem;
            font-weight: bold;
        }

        h2 {
            font-size: 1rem;
        }

        p {
            font-size: 12px;
        }

        .heading {
            text-align: end;
        }

        .form-container {
            width: 100%;
            max-height: 72rem;
            margin-top: 8px;
            padding: 1rem;
            background-color: #ccc8c8;
            border-radius: 15px;

            display: flex;
            flex-direction: column;
            gap: 10px;
        }
/*  */

        .patient-info {
            border: 1px solid black;
            border-radius: 10px;
            padding: 5px 8px;
            height: 12vh;
            background-color: white;

            display: grid;
            grid-template-columns: 3fr repeat(2, 1fr);
            grid-template-rows: 1fr;
        }

        .border_left {
            border-left: 1px solid black;
            height: 100%;
            padding: 0 5px;
            margin: 0;
        }

        .time_layout {
            display: flex;
            justify-content: space-between;
            width: 95%;
            padding-left: 0;
        }

        .time-container {
            display: flex;
            gap: 3px;
            flex-direction: column;
            justify-content: space-between;
        }

        .in,
        .out {
            text-align: end;
            align-items: flex-end;
        }

        .format {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 0;
            grid-auto-flow: row;
            width: auto;
            text-align: center;
            font-size: 10px;
        }

        input {
            width: 12px;
        }

        input.checkbox {
            width: 25px;
            margin-top: 5px;

        }

        .patient-assessment {
            border: 1px solid black;
            border-radius: 10px;
            padding: 5px 8px;
            background-color: white;
            height: 180vh;

            display: grid;
            grid-template-columns: 1fr;
            grid-template-columns: 1fr;
            /* grid-template-rows: repeat(2, 1fr); */
        }

        .assessment-obtained {
            height: auto;
            width: 100%;
            text-align: start;
            display: flex;
            justify-content: space-between;
            flex-direction: flex-start;
        }

        .assessment {
            text-align: left;
            height: auto;
        }

        .heading-assessment,
        .heading-goals {
            background-color: rgba(0, 0, 0, 0.867);
            color: white;
            text-align: center;
            height: auto;
            width: 100%;
            padding: 5px 0;
            margin-bottom: 3px;
            text-transform: uppercase;
            letter-spacing: .50px;
        }

        .vertical-line {
            background-color: black;
            width: 1px;
            height: 50px;
        }

        .obtained-from {
            width: 60%;
            height: 50px;
            display: block;
        }

        .obtained-by {
            width: 220px;
            display: inline-block;
        }

        .underline {
            border-top: 2px solid black;
            height: 1rem;
        }

        .supportive-assistance,
        .spiritual-strengths,
        .spiritual-issue_container,
        .goals-container,
        .summary-container {
            border-top: 2px solid black;
            border-bottom: 2px solid black;
            display: flex;
            padding: 5px 0;
            height: auto;
            flex-direction: column;
        }

        .spiritual-strengths {
            border-top: 0 !important;
        }

        .summary-container {
            border-bottom: 0 !important;
        }

        .goals-container {
            border-top: 0 !important;
            height: 8rem;
        }

        .checkbox-choices {
            display: flex;
            width: 90%;
            justify-content: space-between;
            align-items: flex-start;
            text-align: start;
        }




        .spiritual {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-column-gap: 0px;
            grid-row-gap: 0px;
        }

        .spiritual-issues_choices {
            height: auto;
            /* padding: 1rem 0; */
            display: grid;
            grid-auto-flow: column;

            grid-template-columns: repeat(2, 1fr);
        }

        .spiritual-issue_container {
            border-top: 0 !important;
        }

        .sub-checkbox {
            margin-left: 3rem;
        }

        .signature-form {
            display: grid;
            /* padding: 3px 0; */
            background-color: #ccc8c84a;
            height: auto;
            width: 100%;
            margin-top: 1rem;
            border: 1px solid black;
            grid-template-columns: 3fr 1fr;
            grid-template-rows: repeat(2, 1fr);

            position: relative;
            left: -9px;
            width: 101.5% !important;
        }

        .text-signature {
            display: flex;
            height: auto;
        }

        .title {
            margin-top: 8px;
            height: 15px;
            font-size: 16px;
        }

        .block {
            gap: 3rem;
            text-align: start;
            display: flex
        }

        .horizontal-line {
            background-color: black;
            width: 100%;
            height: 1px;
        }

        .triangle {
            font-size: 2rem;
        }

        .goals-outcomes {
            height: auto;
        }


        
@media print {
   .form-container {
         height: 200%;
   }

   .signature-form {
    background-color: red;
    left: -6px;
   }
}

    </style>
</head>

<body>
    <div class="main">
        <div class="heading">
            <h1>SPIRITUAL CARE ASSESSMENT/CARE PLAN</h1>
            <h2>(ADDENDUM TO COMPREHENSIVE ASSESSMENT)</h2>
        </div>

        <!--!   Patient Information Form  -->
        <div class="form-container">
            <div class="patient-info">
               <div class="name">
                <p>Patient Name</p>
                <br>
                <p style="font-size: 1rem; letter-spacing: .7px;">{{ ucwords($data->patient_name)}}</p>
               </div>
                    <p class="border_left">ID # <br><br> <span style="font-size: 1rem; letter-spacing: .7px;">{{$data->id_number}}</span></p>
                <div class="time-container border_left">
                    <p class="time">
                    <div class="in time_layout">
                        <p>Time In:&nbsp;&nbsp;&nbsp;&nbsp;{{$data->time_in}}</p>
                        <div class="format">
                            <input type="checkbox">AM
                            <input type="checkbox">PM
                        </div>
                    </div>
                    <div class="out time_layout">
                        <p>Time Out:&nbsp;  {{$data->time_out}}</p>
                        <div class="format">
                            <input type="checkbox">AM
                            <input type="checkbox">PM
                        </div>
                    </div>
                    </p>
                </div>
            </div>




            <!--!   Assessment Obtained Form  -->
            <div class="patient-assessment">
                <div core-container>
                    <div class="assessment-obtained">
                        <div class="assessment-container">
                            <h2>Assessment Obtained By:</h2>
                            <div class="obtained-by">
                                <div class="format">
                                    <p class="test-p"><input class="checkbox" type="checkbox">Phone</p>
                                    <p><input class="checkbox" type="checkbox">Visit</p>
                                </div>
                            </div>
                        </div>
                        <div class="obtained-from border_left">
                            <h2>Assessment Obtained From:</h2>
                            <div class="in time_layout">
                                <div class="block">
                                    <p><input class="checkbox" type="checkbox">Patient</p>
                                    <p><input class="checkbox" type="checkbox">Caregiver Name: <span style="font-size: 1rem; letter-spacing: .7px">{{ucwords($data->obtained_from_name)}}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="assessment">
                        <h2 class="heading-assessment">Assessment</h2>
                        <p>Religious
                            affiliation/denomination: <span style="font-size: 1rem; letter-spacing: .7px">{{ucwords($data->religious_affiliation)}}</span>
                        <p>Congregation name:
                            <span style="font-size: 1rem; letter-spacing: .7px">{{ucwords($data->congregation_name)}}</span>
                        </p>
                        <p>Patient's Clergy: <span style="font-size: 1rem; letter-spacing: .7px">{{ucwords($data->patients_clergy)}}</span>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone:
                            <span style="font-size: 1rem; letter-spacing: .7px">{{$data->phone}}</span></p>
                        <p>Request patient's clergy to be notified: &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox"/> Yes &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox"/> No
                        </p>
                    </div>
                
                    <div class="assistance">
                        <div class="supportive-assistance">
                            <h2>Supportive Assistance:</h2>
                            <div class="checkbox-choices">
                                <p><input type="checkbox"> Family</p>
                                <p><input type="checkbox"> Friends</p>
                                <p><input type="checkbox"> Community Organizations</p>
                                <p><input type="checkbox"> Religious Organizations</p>
                            </div>
                            <p><input type="checkbox"> Others:
                                <span style="font-size: 1rem; letter-spacing: .7px">{{$data->guardian}}</span>
                            </p>
                        </div>
                    </div>
                    <div class="spiritual-strengths">
                        <h2>Spiritual Strengths:</h2>
                        <div class="checkbox-choices">
                            <p><input type="checkbox"> Involvement in religious groups</p>
                            <p><input type="checkbox"> Acceptance of prognosis</p>
                            <p><input type="checkbox"> Personal faith experience</p>
                        </div>
                        <div class="checkbox-choices">
                            <p><input type="checkbox"> Sense of purpose in life</p>
                            <p><input type="checkbox"> Belief in rituals &nbsp;&nbsp;&nbsp;</p>
                            <p><input type="checkbox"> Available spiritual support</p>
                        </div>
                        <p><input type="checkbox"> Belief in life after death</p>
                        <p><input type="checkbox"> Comments:
                            <span style="font-size: 1rem; letter-spacing: .7px">{{$data->comments}}</span>
                        </p>
                    </div>
    
                    <div class="spiritual-issue_container">
                        <div class="spiritual-issues_choices">
                            <div class="si-container">
                                <h2>Spiritual Issues: <span style="font-size: 13px; font-weight: 500;">(Check all that
                                        apply)</span></h2>
                                <p><input type="checkbox"> Recent loss/grief issues</p>
                                <p><input type="checkbox"> Concern with death and dying</p>
                                <p><input type="checkbox"> Spiritual questioning</p>
                                <p><input type="checkbox"> Perception of illness as punishment</p>
                                <p><input type="checkbox"> Anxious about future</p>
                                <p><input type="checkbox"> Quality of life issues</p>
                                <p><input type="checkbox"> Feeling of abandonment</p>
                                <p><input type="checkbox"> Isolation/withdrawal</p>
                                <p><input type="checkbox"> Guilt</p>
                                <p><input type="checkbox"> Shame</p>
                                <p><input type="checkbox"> Unfinished business</p>
                                <p><input type="checkbox"> Depression</p>
                                <p><input type="checkbox"> Anger</p>
                                <p><input type="checkbox"> Suicidal</p>
                                <p><input type="checkbox"> Other:
                                    <span style="font-size: 1rem; letter-spacing: .7px">{{$data->si_other}}</span>
                                </p>
                                <p>Comments: <span style="font-size: 1rem; letter-spacing: .7px">{{$data->si_comments}}</span>
                                </p>
                            </div>
                            <div class="inter-container border_left">
                                <!-- <p>: (Check all that apply)</p> -->
                                <h2>Interventions: <span style="font-size: 13px; font-weight: 500;">(Check all that
                                        apply)</span></h2>
                                <p><input type="checkbox"> Estasblish contact by phone or visit</p>
                                <p><input type="checkbox"> Read/Pray with patient</p>
                                <p><input type="checkbox"> Explore spiritual resources for facing illness and death</p>
                                <p><input type="checkbox"> Discern spiritual gifts: Love, Hope, Peace, Acceptance, Courage,
                                    Faith</p>
                                <p><input type="checkbox"> Build a relationship of trust and support</p>
                                <p><input type="checkbox"> Enable life review</p>
                                <p><input type="checkbox"> Assess spiritual need and visitation</p>
                                <p><input type="checkbox"> Provide ritual service</p>
                                <p><input type="checkbox"> Funeral arrangements</p>
                                <p><input type="checkbox"> Explore conflict issues:
                                    <br>
                                <div class="sub-checkbox">
                                    <p><input type="checkbox"> Guilt
                                        <input type="checkbox"> Fear
                                        <input type="checkbox"> Grief
                                        <input type="checkbox"> Anger
                                        <input type="checkbox"> Reconciliation
                                        <br>
                                        <input type="checkbox"> Other:
                                        <span style="font-size: 1rem; letter-spacing: .7px">{{$data->interventions_other_conflict}}</span>
                                    </p>
                                </div>
                                </p>
                                <p><input type="checkbox"> Other:
                                    <span style="font-size: 1rem; letter-spacing: .7px">{{$data->interventions_other}}</span></p>
                                <p><input type="checkbox"> Frequency of Services:
                                    <span style="font-size: 1rem; letter-spacing: .7px">{{$data->interventions_frequency}}</span></p>
                                <p><input type="checkbox"> Comments:
                                    <span style="font-size: 1rem; letter-spacing: .7px">{{$data->interventions_comments}}</span></p>
                            </div>
                        </div>
                </div>




                    <!--!   GOALS/OUTCOMES FORM -->
                    <div class="goals-outcomes">
                        <div class="goals-container">
                            <h2 class="heading-goals">GOALS/OUTCOMES</h2>
                            <p><input type="checkbox"> Patient/Caregiver will feel more connected to religious/spiritual
                                community</p>
                            <p><input type="checkbox"> Patient/Caregiver will express feelings and questions openly</p>
                            <p><input type="checkbox"> Patient/Caregiver will express feeling of increased peace of
                                mind/acceptance</p>
                            <p><input type="checkbox"> Patient/Caregiver will experience meaningful rituals</p>
                            <p><input type="checkbox">
                                Other: <span style="font-size: 1rem; letter-spacing: .7px">{{$data->goals_other}}</span>
                            </p>
                        </div>
                    </div>

                    <div class="summary-container">
                        <h2>Summary/Comments:
                        </h2>
                        <div style="min-width: 100%; color: #000;" class="lines">                             
                            @php
                                $collection = explode("\n", $data->summary);
                            @endphp                           
                            @foreach ($collection as $item)
                                <hr>
                                <span style="font-size: 1rem; letter-spacing: .7px">{{$item}}</span>
                                <br>                                
                            @endforeach
                            {{-- <p style="font-size: 1.2rem; letter-spacing: .7px">
                                {{$data->summary}}
                            </p> --}}
                            {{-- <hr>
                            <span style="font-size: 1.2rem; letter-spacing: .7px">It amet consectetur adipisicing elit. Quibusdam rem voluptate eaque!</span>
                            <br>
                            <hr>
                            <span style="font-size: 1.2rem; letter-spacing: .7px">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam rem voluptate eaque!</span>
                            <br>
                            <hr>
                            <span style="font-size: 1.2rem; letter-spacing: .7px"> Mollitia repellat. Nihil, a? Aliquid, quos voluptate!</span>
                            <br>
                            <hr>
                            <span style="font-size: 1.2rem; letter-spacing: .7px">Lorem uibusdam rem voluptate eaque amet consectetur adipisicing elit.</span>
                            <br>
                            <hr> --}}
                        </div>
                        <div class="signature-form">
                            <div class="text-signature" style="border-bottom: 1px solid black; text-align: start;">
                                <span class="triangle">&#9654;</span>
                                <p class="title">Spiritual Coordinator Signature:
                                    {{-- <img style="width: 80px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Arthur_Miller_signature.svg/1200px-Arthur_Miller_signature.svg.png" alt="signature"> --}}
                                </p>
                            </div>

                            <div style="border-bottom: 1px solid black" class="border_left">
                                <span>Date : {{$data->date_coordinator}}</span>
                            </div>

                            <div class="text-signature" style="border-bottom: 1px solid black">
                                <span class="triangle">&#9654;</span>
                                <p class="title">Visit Verification Signature(per agency policy:  
                                    {{-- <img style="width: 80px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Arthur_Miller_signature.svg/1200px-Arthur_Miller_signature.svg.png" alt="signature"> --}}
                                </div>

                            <div class="border_left">
                                <span>Date : {{$data->date_verified}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>