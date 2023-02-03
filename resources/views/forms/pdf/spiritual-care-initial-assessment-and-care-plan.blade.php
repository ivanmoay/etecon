<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCA Care Plan</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        @page {
            size: A4 portrait;
            margin: 1cm;
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

        .patient-info {
            border: 1px solid black;
            border-radius: 10px;
            padding: 1px 8px;
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
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            place-items: center;
            /* background-color: red; */
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

        .w-100 {
            width: 100%;
            /* background-color: red; */
        }


        .input {
            border: none;
            font-size: 12px;
            width: 100%;
            height: 2rem;
        }

        .time-input {
            font-size: 12px;
            width: 50px;
            border: none;
        }

        .care-input {
            width: 400px;
            font-size: 12px;
            border: none;
        }


        input:focus {
            outline: none;
        }

        input {
            border: 0;
        }

        p input.care-input.cus {
            width: 65%;
        }








        .con-1st {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            align-items: center;
        }

        .time_container {
            height: 100%;
        }

        .Ass-ob {
            display: grid;
            grid-auto-flow: column;
            height: 2rem;
            width: 90%;
            padding-top: 5px;
        }



        @media print {
            .form-container {
                height: 200%;
            }

            .signature-form {
                left: -6px;
            }

            .spiritual-issues_choices {
                padding-bottom: 1.8rem;
            }

            .time-format-time {
                /* background-color: yellowgreen !important;
                margin-right: 0;
                padding-left: 0;
                display: grid; */
                height: 100%;
                align-items: center;
                justify-content: start;
                row-gap: 23px;
                grid-template-columns: 2fr 1fr 1fr;
            }

            .assessment h2 {
                width: 100%;
            }

            .input-care-line {
                width: 60% !important;
            }

            .input-care-line-2 {
                width: 70% !important;
            }

            .cn {
                width: 110%;
            }

            .cn-cn {
                margin-left: 5px;
                width: 50%;
            }

            /* .freq {
                background-color: red;
            }

            .freq-input {
                background-color: blue;
            } */
/* 
            .freq-text {
                background-color: violet;
            }
/* 
            .supportive-assistance {
                width: 90%;
            } */
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
                    <input class="input" type="text" />
                </div>
                <p class="border_left">ID # <br>
                    <input class="input" type="text">
                </p>

                <div class="time_container border_left">
                    <div class="con-1st">
                        <div style="width: 100%;">
                            <p>Time In: </p>
                        </div>
                        <div style="min-width: 100%; color: #000; background-color: reed;" class="lines">
                            <input class="input" type="text" style="width: 100%; padding: 0; margin: 0; height: auto;">
                            <hr style="width: 35px;">
                        </div>
                        <div style="text-align: end;">
                            <p><input type="checkbox"> AM </p>
                            <p><input type="checkbox"> PM</p>
                        </div>
                    </div>
                    <div class="con-1st">
                        <div style="width: 100%;">
                            <p>Time Out:</p>
                        </div>
                        <div style="min-width: 100%; color: #000;" class="lines">
                            <input class="input" type="text" style="width: 100%; padding: 0; margin: 0; height: auto;">
                            <hr style="width: 35px;">
                        </div>
                        <div style="text-align: end;">
                            <p><input type="checkbox"> AM </p>
                            <p><input type="checkbox"> PM</p>
                        </div>
                    </div>
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
                            <div class="Ass-ob">
                                <div>
                                    <p><input type="checkbox"> Patient</p>
                                </div>
                                <div class="cn" style="display: flex;">
                                    <div class="cn-cn">
                                        <p><input type="checkbox"> Caregiver Name: </p>
                                    </div>
                                    <div>
                                        &nbsp;<input type="text" style="width: 90%;">
                                        &nbsp;
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="assessment">
                        <h2 class="heading-assessment">Assessment</h2>
                        <div style="display: flex;">
                            <p>Religious affiliation/denomination: &nbsp;</p>
                            <div style="width: 60%;">
                                <input class="care-input input-care-line" type="text" style="width: 100%;">
                                <hr>
                            </div>
                        </div>

                        <div style="display: flex;">
                            <p>Congregation name: &nbsp;</p>
                            <div style="width: 66%;">
                                <input class="care-input input-care-line" type="text" style="width: 100%;">
                                <hr>
                            </div>
                        </div>

                        <div class="Ass-ob">
                            <div style="display: flex;">
                                <p>Patient's Clergy: &nbsp;</p>
                                <div style="width: 66%;">
                                    <input class="care-input input-care-line" type="text" style="width: 100%;">
                                    <hr>
                                </div>
                            </div>
                            <div style="display: flex;">
                                <div>
                                    <p>Phone: </p>
                                </div>
                                <div>
                                    &nbsp;<input type="text" style="width: 90%;">
                                    &nbsp;
                                    <hr>
                                </div>
                            </div>
                        </div>

                        <p>Request patient's clergy to be notified: &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" /> Yes &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" /> No
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
                            <div style="display: flex;">
                                <p><input type="checkbox"> Others: &nbsp;</p>
                                <div style="width: 66%;">
                                    <input class="care-input input-care-line" type="text" style="width: 100%;">
                                    <hr>
                                </div>
                            </div>
                           
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
                        <div style="display: flex;">
                            <p><input type="checkbox"> Others: &nbsp;</p>
                            <div style="width: 66%;">
                                <input class="care-input input-care-line" type="text" style="width: 100%;">
                                <hr>
                            </div>
                        </div>
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
                                <div style="display: flex;">
                                    <p><input type="checkbox"> Others: &nbsp;</p>
                                    <div style="width: 66%;">
                                        <input class="care-input input-care-line" type="text" style="width: 100%;">
                                        <hr>
                                    </div>
                                </div>
                                <div style="display: flex;">
                                    <p><input type="checkbox"> Comments: &nbsp;</p>
                                    <div style="width: 66%;">
                                        <input class="care-input input-care-line" type="text" style="width: 100%;">
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="inter-container border_left">
                                <h2>Interventions: <span style="font-size: 13px; font-weight: 500;">(Check all that
                                        apply)</span></h2>
                                <p><input type="checkbox"> Estasblish contact by phone or visit</p>
                                <p><input type="checkbox"> Read/Pray with patient</p>
                                <p><input type="checkbox"> Explore spiritual resources for facing illness and death</p>
                                <p><input type="checkbox"> Discern spiritual gifts: Love, Hope, Peace, Acceptance,
                                    Courage,
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
                                        <div style="display: flex;">
                                            <p><input type="checkbox"> Others: &nbsp;</p>
                                            <div style="width: 66%;">
                                                <input class="care-input input-care-line" type="text" style="width: 100%;">
                                                <hr>
                                            </div>
                                        </div>
                                    </p>
                                </div>
                                </p>
                                <div style="display: flex;">
                                    <p><input type="checkbox"> Others: &nbsp;</p>
                                    <div style="width: 66%;">
                                        <input class="care-input input-care-line" type="text" style="width: 100%;">
                                        <hr>
                                    </div>
                                </div>
                                <div class="freq" style="display: flex;">
                                    <p class="freq-text"><input type="checkbox"> Frequency of Services: &nbsp;</p>
                                    <div class="freq-input" style="width: 66%;">
                                        <input class="care-input input-care-line" type="text" style="width: 100%;">
                                        <hr>
                                    </div>
                                </div>
                                <div style="display: flex;">
                                    <p><input type="checkbox"> Comments: &nbsp;</p>
                                    <div style="width: 66%;">
                                        <input class="care-input input-care-line" type="text" style="width: 100%;">
                                        <hr>
                                    </div>
                                </div>
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
                            <div style="display: flex;">
                                <p><input type="checkbox"> Others: &nbsp;</p>
                                <div style="width: 100%;">
                                    <input class="care-input input-care-line" type="text" style="width: 100%;">
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="summary-container">
                        <h2>Summary/Comments:
                        </h2>
                        <div style="min-width: 100%; color: #000;" class="lines">
                            <hr>
                            <input class="care-input" style="width: 100%;" type="text"
                                placeholder="_____________________________________________________________________________________________________________________________________">
                            <br>
                            <hr>
                            <input class="care-input" style="width: 100%;" type="text"
                                placeholder="_____________________________________________________________________________________________________________________________________">
                            <br>
                            <hr>
                            <input class="care-input" style="width: 100%;" type="text"
                                placeholder="_____________________________________________________________________________________________________________________________________">
                            <br>
                            <hr>
                            <input class="care-input" style="width: 100%;" type="text"
                                placeholder="_____________________________________________________________________________________________________________________________________">
                            <br>
                            <hr>
                        </div>
                        <div class="signature-form">
                            <div class="text-signature" style="border-bottom: 1px solid black; text-align: start;">
                                <span class="triangle">&#9654;</span>
                                <p class="title">Spiritual Coordinator Signature:
                                    <!-- <img style="width: 80px;"
                                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Arthur_Miller_signature.svg/1200px-Arthur_Miller_signature.svg.png"
                                        alt="signature"> -->
                                </p>
                            </div>

                            <div style="border-bottom: 1px solid black; padding-top: 5px;" class="border_left">
                                <div style="display: flex;">
                                    <div>Date: &nbsp;</div>
                                    <div>
                                        <input class="care-input input-care-line" type="text" style="width: 100%; background-color: transparent;">
                                        <hr>
                                    </div>
                                </div>
                            </div>

                            <div class="text-signature" style="border-bottom: 1px solid black;">
                                <span class="triangle">&#9654;</span>
                                <p class="title">Visit Verification Signature(per agency policy:
                                    <!-- <img style="width: 80px;"
                                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Arthur_Miller_signature.svg/1200px-Arthur_Miller_signature.svg.png"
                                        alt="signature"> -->
                            </div>

                            <div class="border_left">
                                <div style="display: flex; padding-top: 5px;">
                                    <div>Date: &nbsp;</div>
                                    <div>
                                        <input class="care-input input-care-line" type="text" style="width: 100%; background-color: transparent;">
                                        <hr>
                                    </div>
                                </div>
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