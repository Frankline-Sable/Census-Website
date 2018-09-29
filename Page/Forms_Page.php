<?php
$genID="NOT VALID";
if(isset($_POST['_hhGenId'])){
	$genID=$_POST['_hhGenId'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript" src="../css/JQuery/jquery-3.3.1.min.js"></script>

    <link href="../css/W3Schools/w3.css" rel="stylesheet">
    <link href="../css/FontAwesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/anim.css" rel="stylesheet">

    <script href="../css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

    <script src="../scripts/_Form_Scripts.js"></script>

    <title>Census Form</title>

    <style>
        body {
            background: radial-gradient(50% 176%, #253854 80%, #061922 100%);
            background: rgba(51, 41, 43, 0.54);
            background-image: url("../images/grunge_B&W.jpg");
            background-blend-mode: soft-light;
            background-attachment: scroll;
            background-repeat: repeat-y;
            background-origin: border-box;
            background-position: center;
            background-size: cover;
            min-height: 100%;
        }

        @font-face {
            font-family: "Goth";
            src: url('../Fonts/Gotham Book.ttf');
        }

        body, html {
            font-family: goth;
        }

        .pagination a {
            text-decoration: none;
        }

        table {
            counter-reset: section;
            counter-set: initial;
        }

        tr > td:nth-child(1)::before {
            counter-increment: section;
            content: "" counter(section) ": ";
        }
    </style>
</head>
<body>
<nav class="" id="nav">

    <ul class="menu-topnav w3-navbar w3-large w3-text-white w3-hide-small"
        style="" id="menu-topnav">
        <li class=""><a href=""><span>WORK</span></a></li>
        <li class=""><a href=""><span>ABOUT</span></a></li>
        <li class=""><a href=""><span>PROCESS</span></a></li>
        <li class=""><a href=""><span>CONTACT</span></a></li>
        <li class=""><a href="" class=""><span>BLOG</span></a></li>
    </ul>
    <section style="position: fixed; z-index: 3; right: 96px; top: 24px;">
        <div class="hamburger w3-hide-small" onclick="openTopNav(this);"
             style="position: fixed; z-index: 3; right: 92px; top: 20px;">
            <div class="bar1 w3-white"></div>
            <div class="bar2 w3-white"></div>
            <div class="bar3 w3-white"></div>
        </div>


        <div class="hamburger  w3-hide-large w3-hide-medium" onclick="openFullNav(this);"
             style="position: fixed; z-index: 3; right: 92px; top: 20px;">
            <div class="bar1 w3-white"></div>
            <div class="bar2 w3-white"></div>
            <div class="bar3 w3-white"></div>
        </div>

        <div class="w3-text-white w3-padding w3-dropdown-hover w3-hide"
             style="position: fixed; z-index: 3; right: 24px; top: 13px;" id="log_state_ON">
            <form action="../Phps/logout.php" method="get">
                <a href="javascript:void(0);"><i
                        class="fa fa-user-circle-o fa-2x w3-border w3-border-red w3-circle"></i></a>

                <div class="w3-dropdown-content w3-border w3-card-8 w3-small w3-text-white"
                     style="background-color:rgba(92,102,128,0.67);padding: 4px 2px;">

                    <input type="submit" value="Log m' OUT" class="w3-btn w3-transparent w3-border-red w3-padding-0">

                </div>
            </form>
        </div>

        <div class="w3-text-white w3-padding w3-opacity-max w3-show"
             style="position: fixed; z-index: 3; right: 24px; top: 13px;" id="log_state_OFF">
            <a href="javascript:void(0);"><i class="fa fa-user-circle-o fa-2x"></i></a>
        </div>
    </section>

    <div class="w3-wide showLogo w3-xxlarge w3-padding w3-round  w3-text-white w3-text-shadow w3-margin-top"
         id="logo"
         style="font-weight: 700;z-index: 3; background-color: rgba(41, 171, 135,0);">
        <a href="../default.html" style="text-decoration: none;">
            Census <i class="fa fa-exclamation-circle"></i></a>
    </div>


    <!-- The overlay Fullscreen Navigation-->
    <div id="fullscreenNav" class="overlay w3-hide-mediufm w3-hideflarge">
        <!-- Overlay content -->
        <div class="overlay-content w3-text-white">
            <ul class="">
                <li class=""><a href="#">Home</a></li>
                <li class=""><a href="#">What’s On</a></li>
                <li class=""><a href="#">Our Venues</a></li>
                <li class=""><a href="#">Your Visit</a></li>
                <li class=""><a href="#">Hire</a></li>
                <li class=""><a href="#">About Us</a></li>
                <li class=""><a href="#">How to book</a></li>
                <li class=""><a href="#">Contact Us</a></li>
            </ul>
        </div>

    </div>
</nav>

<div class="w3-row-padding" style="margin: 32px 16px 24px 16px">
    <main class="w3-col l8 m12 s12 w3-margin-0 w3-padding-0">
        <header class="w3-blue-gray w3-margin-bottom w3-container">
            <h3 class="w3-margin-0">Diagnostic Form 1</h3>
            <p class="w3-margin-0">Lorem ipsum dolor sit amet.</p>

            <div class="w3-row">
                <a href="javascript:void(0)" onclick="openTab(event, 'tab1', this.id);" id="event_1">
                    <div class="w3-col l2 m2 s2 w3-bottombar w3-hover-light-gray w3-padding tablink w3-border-red">
                        <i class="fa fa-male"></i> <span class="w3-hide-small">Citizens</span>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="openTab(event, 'tab2', this.id);" id="event_2">
                    <div class="w3-col l2 m2 s2 w3-bottombar w3-hover-light-gray w3-padding tablink">
                        <i class="fa fa-plane"></i> <span class="w3-hide-small">Emigrants</span>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="openTab(event, 'tab3', this.id);" id="event_3">
                    <div class="w3-col l2 m2 s2 w3-bottombar w3-hover-light-gray w3-padding tablink">
                        <i class="fa fa-bar-chart"></i> <span class="w3-hide-small">Amenities</span>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="openTab(event, 'tab4', this.id);" id="event_4">
                    <div class="w3-col l2 m2 s2 w3-bottombar w3-hover-light-gray w3-padding tablink">
                        <i class="fa fa-exclamation-triangle"></i> <span class="w3-hide-small">Deaths</span>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="openTab(event, 'tab5', this.id);" id="event_5">
                    <div class="w3-col l2 m2 s2 w3-bottombar w3-hover-light-gray w3-padding tablink">
                        <i class="fa fa-home"></i> <span class="w3-hide-small">Household</span>
                    </div>
                </a>
                <a href="javascript:void(0)" onclick="openTab(event, 'tab6', this.id);_callDataFetcher();" id="event_6">
                    <div class="w3-col l2 m2 s2 w3-bottombar w3-hover-light-gray w3-padding tablink">
                        <i class="fa fa-google"></i> <span class="w3-hide-small">Complete</span>
                    </div>
                </a>

            </div>
        </header>

        <section class="tab" id="tab1">

            <div>
                <div onclick="document.getElementById('demo1').classList.toggle('w3-hide')"
                     class="w3-text-white w3-btn-block w3-left-align w3-padding w3-large w3-border-top w3-border-left w3-hover-blue w3-round-medium"
                     style="background: linear-gradient(to top, #ffffff00 0%, #53b7de 100%);" id="persCount">Person 1
                </div>

                <div id="demo1" class="w3-row ">
                    <div class="w3-col l12 m12 s12 w3-light-gray w3-animate-left" id="main_col1">
                        <form class="w3-form" method="post" action="javascript:_FormA('formA');" name="formA"
                              autocomplete="off">
                            <h5>Information Regarding All Persons</h5>
                            <p class="w3-small"><span class="w3-tag">NB:</span> Seeks information on all members of the
                                household
                            </p>

                            <label class="w3-label">Fullnames <span class="w3-text-red">*</span></label><br>
                            <input class="w3-input w3-border cw"
                                   type="text" name="_fullNames" required>
                            <br>

                            <div class="w3-row-padding w3-padding-0">
                                <div class="w3-col l9 m9 s9 w3-padding-0">
                                    <label class="w3-label">D.O.B <span class="w3-text-red">*</span></label><br>
                                    <input class="w3-input w3-border" type="date" name="_dob" required>
                                </div>
                                <div class="w3-col l3 m3 s3">
                                    <label class="w3-label">Age<span class="w3-text-red">*</span></label>
                                    <input class="w3-input w3-border" type="number" value="0" name="_age" required
                                           min="1">
                                </div>
                            </div>
                            <br>

                            <label for="_rel" class="w3-label">Relationship <span
                                    class="w3-text-red">*</span></label><br>
                            <select name="_rel" id="_rel" class="w3-select w3-border" required>
                                <option value="">Please Select Relationship</option>
                                <option value="Son/Daughter">Son/Daughter</option>
                                <option value="Grandchild">Grandchild</option>
                                <option value="Brother/Sister">Brother/Sister</option>
                                <option value="Father/Mother">Father/Mother</option>
                                <option value="In Law">In Law</option>
                                <option value="GrandParent">GrandParent</option>
                                <option value="Non Relative(Visitor/Friends)">Non Relative(Visitor/Friends)</option>

                            </select>
                            <br><br>

                            <label class="w3-label">Sex <span class="w3-text-red">*</span><br>
                                <input class="w3-radio" type="radio" name="_sex" value="Male" required
                                       onchange="openMaleBar(this);">
                            </label> Male
                            <label>
                                <input class="w3-radio" type="radio" name="_sex" value="Female" required
                                       onchange="openFemaleBar(this);">
                            </label> Female
                            <br><br>

                            <label class="w3-label">Tribe/Nationality <span class="w3-text-red">*</span></label><br>
                            <input class="w3-input w3-border" type="text" name="_tribe" required><br>


                            <label class="w3-label"> Religion <span class="w3-text-red">*</span><br>
                                <select class="w3-select w3-border" style="width: 70%" required name="_rg">
                                    <option value="">None Selected</option>
                                    <option value="Catholics">Catholics</option>
                                    <option value="Protestants">Protestants</option>
                                    <option value="Other Christians">Other Christians</option>
                                    <option value="Muslims">Muslims</option>
                                    <option value="Traditionalist">Traditionalist</option>
                                    <option value="Others">Others</option>
                                    <option value="No Religion">No Religion</option>
                                </select>
                            </label>
                            <br><br>

                            <label class="w3-label">Marital Status <span
                                    class="w3-text-red">*</span><br>
                                <select class="w3-border w3-select" style="width: 70%" name="_mar_status" required>
                                    <option value="">None Selected</option>
                                    <option value="Single">Single</option>
                                    <option value="Married(Monogous)">Married(Monogous)</option>
                                    <option value="Married(Polygomous)">Married(Polygomous)</option>
                                    <option value="Divorce">Divorced</option>
                                    <option value="Separated">Separated</option>
                                    <option value="Widow">Widow</option>
                                </select>
                            </label>
                            <br><br>

                            <label class="w3-label cw">Birthplace(Town)<span class="w3-text-red">*</span></label><br>
                            <input class="w3-input w3-border" type="text"
                                   placeholder="Area of Birth of Respondent" name="_bp" required>
                            <br>

                            <label class="w3-label">Previous Residence<span class="w3-text-red cw">*</span></label><br>
                            <input class="w3-input w3-border" type="text" name="_prev_res" required><br>

                            <label class="w3-label">Current Residence<span class="w3-text-red">*</span></label><br>
                            <input class="w3-input w3-border cw" type="text" name="_cur_res" required><br>

                            <label class="w3-label">Duration of Residence(Since)<span
                                    class="w3-text-red cw">*</span></label><br>
                            <input class="w3-input w3-border" type="date" name="_dur_res" required><br>

                            <label class="w3-label">Orphanhood<span class="w3-text-red">*</span><br>
                                <select class="w3-select w3-border" style="width: 70%" required name="_orpHd">
                                    <option value="Both">Both</option>
                                    <option value="Father only">Father only</option>
                                    <option value="Mother Only">Mother Only</option>
                                    <option value="None" selected>None</option>
                                </select>
                            </label>
                            <br><br>
                            <br>

                            <fieldset CLASS="w3-padding-32">
                                <legend class="w3-small fa fa-blind"><b>Information Regarding Disablity</b></legend>
                                <div class="w3-container w3-border-white w3-margin-left  w3-margin-right w3-padding-4"
                                     style="border-style: groove;">

                                    <label class="w3-label">Do you have any disability?<span
                                            class="w3-text-red">*</span>
                                        <input type="checkbox" class="w3-check" name="_dsb"
                                               onChange="document.getElementById('dis_tab').classList.toggle('w3-show');"><br>
                                    </label><br>

                                    <div class="w3-margin-left w3-border w3-padding w3-animate-top w3-hide"
                                         style="width: 80%" id="dis_tab">
                                        <label class="w3-label">Type of disability<span class="w3-text-teal">*</span>
                                            <select class="w3-select w3-border" required name="typ_dis">
                                                <option value="Visual impairment">Visual impairment</option>
                                                <option value="Hearing impairement">Hearing impairement</option>
                                                <option value="Physical Disability">Physical Disability</option>
                                                <option value="Mental Disability">Mental Disability</option>
                                                <option value="Self care difficulties">Self care difficulties</option>
                                                <option value="Speech impairment">Speech impairment</option>
                                                <option value="Other disabilities">Other disabilities(lbinism,
                                                    epilepsy, autism, or chronic)
                                                </option>
                                                <option value="0" selected>None</option>
                                            </select>
                                        </label>
                                        <br><br>

                                        <label class="w3-label">Specify Other(if any) disabilities
                                            <textarea class="w3-input w3-border" style="resize: none;"
                                                      name="_otherDis"
                                                      placeholder="Any other disability not mentioned above?"
                                                      value="0"></textarea>
                                        </label>
                                    </div>

                                </div>

                            </fieldset>
                            <br><br>

                            <fieldset>
                                <legend class="w3-small fa fa-book"><b>Information Regarding Education (Age >3
                                    Years)</b></legend>
                                <div class="w3-padding-large">
                                    <label class="w3-label"> School /Learning Institution Attendance <span
                                            class="w3-text-red">*</span>

                                        <select class="w3-select w3-border" name="_sch" required>

                                            <option value="Attending this year">Attending this year</option>
                                            <option value="Left School">Left School</option>
                                            <option value="Never schooled">Never schooled</option>
                                            <option value="Unknown" selected>Unknown</option>
                                        </select></label>
                                    <br><br>

                                    <label class="w3-label"> Highest Standard/Form/Level of Education Reached <span
                                            class="w3-text-red">*</span>
                                        <select class="w3-select w3-border" required name="_EdReached">
                                            <option value="0">Select Type of School/Learning Center</option>
                                            <option value="Early Childhood Development (ECD)">Early Childhood
                                                Development (ECD)
                                            </option>
                                            <option value="Primary">Primary</option>
                                            <option value="Secondary">Secondary</option>
                                            <option value="Non Formal Education (NFE)">Non Formal Education (NFE)
                                            </option>
                                            <option value="Non-Formal Schools">Non-Formal Schools</option>
                                            <option value="Youth Polytechnic">Youth Polytechnic</option>
                                            <option value="Tertiary Education (Middle Level Colleges">Tertiary Education
                                                (Middle Level Colleges)
                                            </option>
                                            <option value="University">University</option>
                                        </select>
                                    </label>
                                    <br> <br>

                                    <label class="w3-label" for="_EdComplt">Highest Standard/F
                                        orm/Level of Education Completed <span class="w3-text-red">*</span>
                                        <select class="w3-select w3-border" required name="_EdComplt" id="_EdComplt">
                                            <option value="0">Select Highest Level Completed</option>
                                            <option value="Early Childhood Development (ECD)">Early Childhood
                                                Development (ECD)
                                            </option>
                                            <option value="Primary">Primary</option>
                                            <option value="Secondary">Secondary</option>
                                            <option value="Non Formal Education (NFE)">Non Formal Education (NFE)
                                            </option>
                                            <option value="Non-Formal Schools">Non-Formal Schools</option>
                                            <option value="Youth Polytechnic">Youth Polytechnic</option>
                                            <option value="Tertiary Education (Middle Level Colleges">Tertiary Education
                                                (Middle Level Colleges)
                                            </option>
                                            <option value="University">University</option>
                                        </select>
                                    </label>
                                </div>
                            </fieldset>

                            <br><br>
                            <fieldset>
                                <legend class="w3-small fa fa-black-tie"><b>Information Regarding Work (Age >5
                                    Years)</b></legend>
                                <div class="w3-padding-large">
                                    <label class="w3-label"> Activity in the last 7 days<span
                                            class="w3-text-red">*</span>
                                        <select class="w3-select w3-border" required name="_Act7">
                                            <option value="0">No Activity Selected</option>
                                            <option value="Worked for Pay">Worked for Pay</option>
                                            <option value="On leave">On leave</option>
                                            <option value="Sick leave">Sick leav="Volunteer">Volunteer</option>
                                            <option value="Seeking Work (Action taken)">Seeking Work (Action taken)
                                            </option>
                                            <option value="Seeking Work (No action taken)">Seeking Work (No action
                                                taken)</optie></option>
                                            <option value="Worked on Own/Family Business">Worked on Own/Family
                                                Business
                                            </option>
                                            <option value="Worked on Own/Family Agricultural Holding">Worked on
                                                Own/Family Agricultural Holding
                                            </option>
                                            <option value="Apprentice/Intern">Apprentice/Intern</option>
                                            <option valueon>
                                            <option value="No Work Available">No Work Available</option>
                                            <option value="Retired">Retired</option>
                                            <option value="Homemaker">Homemaker</option>
                                            <option value="Full time Student">Full time Student</option>
                                            <option value="Incapacitated">Incapacitated</option>
                                            <option value="Other (Specify)">Other (Specify)</option>
                                        </select>
                                    </label><br>
                                    <br>

                                    <div class="w3-margin-left">
                                        <label class="w3-label">
                                            Specify other activity<span
                                                class="w3-text-teal">*</span>
                                            <textarea class="w3-input w3-border" name="_otherAct" def
                                                      placeholder="Any Other activity not mentioned in the list?"></textarea>
                                        </label><br>

                                        <label class="w3-label">
                                            Main employer sector<span class="w3-text-teal">*</span>
                                            <select class="w3-select w3-border" required name="_employ">
                                                <option value="0">Select Employment Sector</option>
                                                <option value="Public Sector">Public Sector</option>
                                                <option value="Private Sector">Private Sector</option>
                                                <option value="State Owned Enterprice(Semi-public)">State Owned
                                                    Enterprice(Semi-public)
                                                </option>
                                                <option value="Non Governmental Organization (NGO)">Non Governmental
                                                    Organization (NGO)
                                                </option>
                                                <option value="Faith‐Based Organization (FBO">Faith‐Based Organization
                                                    (FBO)
                                                </option>
                                                <option value="self employed modern sector"> Self Employed Modern
                                                    Sector
                                                </option>
                                                <option value="International NGOs"> International NGOs</option>
                                                <option value="Local NGO">Local NGO</option>
                                            </select>
                                        </label><br><br>

                                        <label class="w3-label">Hours of work<span
                                                class="w3-text-red">*</span></label><br>
                                        <input type="number" class="w3-input w3-border" name="_hrWork" value="0">
                                    </div>
                                </div>
                            </fieldset>
                            <br>

                            <div class="w3-rigjht-align">
                                <input type="submit" class="w3-round w3-btn w3-teal" value="Save/ (Add More)"
                                       name="Save">

                            </div>
                        </form>
                    </div>
                    <div class="w3-col l4 m4 s12 w3-animate-right w3-hide" id="main_col2"
                         style="background: linear-gradient(to left, rgba(64,64,64,0.77) 0%, rgba(0,51,0,0.45) 100%);">
                        <form class="w3-form w3-medium" autocomplete="off"
                              style="border-style: inset; border-right: 5px;" name="formB"
                              method="post" action="javascript:_FormB('formB');">
                            <div class="w3-text-yellow">
                                <h5 class="w3-text-amber">Information regarding Females</h5>
                                <p class="w3-small"><span class="w3-tag w3-pale-blue">NB:</span> The below details are
                                    only for <span
                                            class="w3-tag w3-text-amber">Females</span>
                                    aged 12 years and above in the household </p>
                            </div>
                            <br>

                            <label class="w3-label w3-text-light-gray">Live births Count <span
                                    class="w3-text-amber">*</span>
                                <input class="w3-input w3-border" type="number" value="0" min="0" max="50"
                                       name="Live_Births"
                                       required>
                            </label><br>

                            <label class="w3-label w3-text-light-gray">Children Born Alive <span
                                    class="w3-text-amber">*</span>
                                <input class="w3-input w3-border" type="number" value="0" min="0" max="50"
                                       name="Children_Alive"
                                       required>
                            </label><br>

                            <label class="w3-label w3-text-light-gray">Children living in the Household <span
                                    class="w3-text-amber">*</span>
                                <input class="w3-input w3-border" type="number" value="0" min="0" max="50"
                                       name="Children_HH"
                                       required>
                            </label><br>

                            <label class="w3-label w3-text-light-gray">Children Living Elsewhere <span
                                    class="w3-text-amber">*</span>
                                <input class="w3-input w3-border" type="number" value="0" min="0" max="50"
                                       name="Children_ElseWhere"
                                       required>
                            </label><br>

                            <label class="w3-label w3-text-light-gray">Dead Children <span
                                    class="w3-text-amber">*</span>
                                <input class="w3-input w3-border" type="number" value="0" min="0" max="50"
                                       name="Dead_Child"
                                       required>
                            </label><br>

                            <label class="w3-label w3-text-light-gray">Last Born Child <span
                                    class="w3-text-amber">*</span>
                                <input class="w3-input w3-border" type="date" required name="Last_Born_Date">
                            </label><br>

                            <label class="w3-label w3-text-light-gray">Birth Notification <span
                                    class="w3-text-amber">*</span></label><br>
                            <label>
                                <input class="w3-radio" type="radio" name="LB_Notified" value="yes" required>
                            </label> Yes
                            <label>
                                <input class="w3-radio" type="radio" name="LB_Notified" value="no" required>
                            </label> No

                            <br><br>
                            <label class="w3-label w3-text-light-gray">Sex of Child <span
                                    class="w3-text-amber">*</span></label><br>
                            <label>
                                <input class="w3-radio" type="radio" name="LB_Sex" value="Male" required>
                            </label> Male
                            <label>
                                <input class="w3-radio" type="radio" name="LB_Sex" value="Female" required>
                            </label> Female
                            <label>
                                <input class="w3-radio" type="radio" name="LB_Sex" value="None" checkeed>
                            </label> None
                            <br><br>
                            <label class="w3-label w3-text-light-gray">Survival Status <span
                                    class="w3-text-amber">*</span>
                                <select class="w3-select w3-border" name="LB_Survival_Stats">
                                    <option value="Alive">Alive</option>
                                    <option value="Dead">Dead</option>
                                    <option value="Twins 1 Alive">Twins 1 Alive</option>
                                    <option value="Twins Both Alive">Twins Both Alive</option>
                                    <option value="Multiple 1 Alive">Multiple 1 Alive</option>
                                    <option value="Multiple 2 Alive">Multiple 2 Alive</option>
                                    <option value="Multiple all alive">Multiple all alive</option>
                                    <option value="Multiple None alive">Multiple None alive</option>
                                    <option value="Unknown" selected>Unknown</option>
                                </select>
                            </label>
                            <br><br>
                            <button type="submit"
                                    class="w3-btn-block w3-border w3-border-amber w3-transparent w3-hover-blue "
                                    value="Save" required id="fem_Sub">
                                Submit Data <i class="fa fa-exclamation w3-text-amber"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>


            <div class="w3-light-gray w3-padding-4  pagination" style="position: absolute; left: 66.8%">
                <div class="w3-pagindation w3-row-padding w3-padding-medium">
                    <div class="w3-col l6 m6 s12" style="margin-bottom: 4px">
                        <button
                                class="w3-border-brown w3-hover-teal w3-medium  w3-border-right w3-hover-text-red w3-btn w3-transparent w3-border w3-round-medium w3-text-black"
                                disabled><i
                                class="fa fa-chevron-left"></i> Prev
                        </button>
                    </div>

                    <div class="w3-col l6 m6 s12">
                        <button onclick="openTab(event, 'tab2','event_2');"
                                class="w3-border-brown w3-hover-teal w3-medium  w3-hover-text-white w3-btn w3-transparent w3-border w3-round-medium w3-text-black">
                            Next <i class="fa fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>


        </section>

        <section class="tab" id="tab2" style="display: none;">

            <div onclick="document.getElementById('demo2').classList.toggle('w3-hide')"
                 class="w3-text-white w3-btn-block w3-left-align w3-padding w3-large w3-border-top w3-border-left w3-hover-blue w3-round-medium"
                 style="background: linear-gradient(to top, #ffffff00 0%, #de9d7c 100%);" type="button"
                 value="Emigrant 1" id="emgsCount">
                Emigrant 1
            </div>

            <div id="demo2" class="w3-animate-left">
                <div class="w3-light-gray w3-container">
                    <h5>Information on Emigrants</h5>
                    <p class="w3-small"><span class="w3-tag">NB:</span> Seeks information on any member of the household
                        who may have
                        migrated to another country since 1995</p>

                    <form class="w3-form" action="javascript:_FormC('formC');" name="formC" method="post"
                          autocomplete="off">
                        <fieldset class="w3-container w3-margin-left w3-padding-16 w3-margin-bottom">
                            <legend class="w3-small">For the respondent</legend>
                            <label class="w3-label">Fullnames <span class="w3-text-red">*</span></label><br>
                            <input class="w3-input" type="text" style="width: 70%" required title="Fullname"
                                   name="resPondent">
                        </fieldset>
                        <br>

                        <label class="w3-label">Fullnames <span class="w3-text-red">*</span></label><br>
                        <input class="w3-input cw w3-border" title="Fullnames"
                               type="text" required name="FullNames"><br>

                        <label class="w3-label">Sex <span class="w3-text-red">*</span></label><br>
                        <label>
                            <input class="w3-radio" type="radio" name="gender" value="Male" required>
                        </label> Male
                        <label>
                            <input class="w3-radio" type="radio" name="gender" value="Female" required>
                        </label> Female
                        <br><br>

                        <div class="w3-row-padding w3-padding-0" style="width: 83%">
                            <div class="w3-col l8 m8 s8 w3-padding-0">
                                <label class="w3-label">D.O.B <span class="w3-text-red">*</span></label><br>
                                <input class="w3-input w3-border" title="DOB" type="date" style="width: 100%" required
                                       name="dob">
                            </div>
                            <div class="w3-col l3 m3 s3">
                                <label class="w3-label">Age<span class="w3-text-red">*</span></label><br>
                                <input class="w3-input w3-border" title="age" type="number" value="0" required min="3"
                                       name="age">
                            </div>
                        </div>
                        <br>
                        <label class="w3-label"> Highest Education Level Reached <span
                                class="w3-text-red">*</span></label><br>
                        <select class="w3-select w3-border" title="Highest Education Level Reached" name="level"
                                required>
                            <option value="" selected>Please Select from the list</option>
                            <option value="Pre-primary">Pre-primary</option>
                            <option value="Primary">Primary</option>
                            <option value="Secondary">Secondary</option>
                            <option value="Middle level Colleges">Middle level Colleges</option>
                            <option value="University">University</option>
                        </select>

                        <br><br>
                        <label class="w3-label"> Professional Training of the emigrant</label><br>
                        <select class="w3-select w3-border" title="Professional Training of the emigrant"
                                name="training" required>
                            <option value="" selected>Please Select from the list</option>
                            <option value="Doctor">Doctor</option>
                            <option value="Teacher">Teacher</option>
                            <option value="Nurse">Nurse</option>
                            <option value="Artisan">Artisan</option>
                            <option value="Lecturer">Lecturer</option>
                            <option value="Engineer">Engineer</option>
                            <option value="Statistician">Statistician</option>
                            <option value="Others">Others</option>
                            <option value="None">None</option>
                        </select>
                        <br><br>

                        <label class="w3-label"> Destination</label><br>
                        <input type="text" class="w3-input w3-border" required title="Destination" name="dest">
                        <br>

                        <label class="w3-label">Current Residence(Country)</label><br>
                        <input type="text" class="w3-input w3-border" required title="Current Residence(Country)"
                               name="cur_res">
                        <br>

                        <label class="w3-label">Year of Departure( &lsaquo; 15Years)</label><br>
                        <input type="date" class="w3-input w3-border" required title="Year of Departure( < 15Years)"
                               name="year_Dept">
                        <br>

                        <label class="w3-label">Status/Reason for staying Abroad </label><br>
                        <select class="w3-select w3-border" title="Status/Reason for staying Abroad" name="res_abroad"
                                required>
                            <option value="" selected>Please a reason here</option>
                            <option value="">Employment</option>
                            <option value="">Education</option>
                            <option value="">Sports</option>
                            <option value="">Marriage</option>
                            <option value="">Link-up</option>
                            <option value="">Other reason</option>
                            <option value="">Don't Know</option>
                        </select>
                        <br><br>


                        <fieldset class="w3-margin-left w3-padding-16">
                            <legend class="w3-small">Remittances(to Any Family Member)</legend>
                            <label class="w3-label">Emigrant Sent Remittances?</label><br>
                            <select class="w3-select w3-border" style="width: 70%" title="Emigrant Sent Remittances?"
                                    name="Sent_Rem">
                                <option value="Not any sent">Not any sent</option>
                                <option value="Unknown">Unknown</option>
                                <option value="Sent & Received">Sent & Received</option>
                            </select>
                            <br><br>

                            <label class="w3-label">How much was remitted?</label><br>
                            <input class="w3-input w3-border" type="number" placeholder="Value in Kshs" value="0"
                                   style="width: 70%" required name="rem_amount">
                            <br>

                            <label class="w3-label">How were the remittances used ?</label><br>
                            <select class="w3-select w3-border" style="width: 70%"
                                    title="How were the remittances used ?" name="rem_use">
                                <option value="0">Select how it was used</option>
                                <option value="Investments">Investments</option>
                                <option value="Health Expenses">Health Expenses</option>
                                <option value="Education Expenses">Education Expenses</option>
                                <option value="Goods Expenses">Goods Expenses</option>
                                <option value="Other Expenses">Other Expenses</option>
                            </select>
                            <br>

                        </fieldset>
                        <br>
                        <div class="">
                            <input type="submit" class="w3-round w3-btn w3-teal" value="Save/ (Add More)"
                                   name="Save">
                        </div>
                    </form>
                </div>
            </div>

            <div class="w3-light-gray w3-padding-4  pagination" style="position: absolute; left: 66.8%">
                <div class="w3-pagindation w3-row-padding w3-padding-medium">
                    <div class="w3-col l6 m6 s12" style="margin-bottom: 4px">
                        <button onclick="openTab(event, 'tab1','event_1');"
                                class="w3-border-brown w3-hover-teal w3-medium  w3-border-right w3-hover-text-red w3-btn w3-transparent w3-border w3-round-medium w3-text-black">
                            <i
                                    class="fa fa-chevron-left"></i> Prev
                        </button>
                    </div>

                    <div class="w3-col l6 m6 s12">
                        <button onclick="openTab(event, 'tab3','event_3');"
                                class="w3-border-brown w3-hover-teal w3-medium  w3-hover-text-white w3-btn w3-transparent w3-border w3-round-medium w3-text-black">
                            Next <i class="fa fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>

        </section>

        <section class="tab" id="tab3" style="display: none;">
            <form class="w3-form w3-light-gray w3-animate-left" action="javascript:_FormE('formE');" name="formE"
                  method="post" autocomplete="off">
                <h5>Information regarding ICT</h5>
                <p class="w3-small"><span class="w3-tag">NB:</span> Answers to the ICT questions may be provided by the
                    head of the household or any other responsible member of the household. </p>

                <br>
                <label class="">Accessiblity(Mode of Access)<span class="w3-text-red">*</span></label><br>
                <label>
                    <input type="checkbox" class="w3-check _checkAccess" name="Access" value="Radio"> Radio
                </label>

                <label>
                    <input type="checkbox" class="w3-check _checkAccess" name="Access" value="Tvs"> Television
                </label>

                <label>
                    <input type="checkbox" class="w3-check _checkAccess" name="Access" value="Smartphones"> Smartphone
                </label>

                <label>
                    <input type="checkbox" class="w3-check _checkAccess" name="Access" value="Computer"> Computer
                </label>

                <label>
                    <input type="checkbox" class="w3-check _checkAccess" value="Others"> Others
                </label>

                <br> <br>
                <label class="">Internet Access Frequency <span class="w3-text-red">*</span></label><br>
                <select class="w3-select w3-border w3-transparent" style="width: 70%" name="Frequency" required>
                    <option value="">Select Frequency</option>
                    <option value="Daily">Daily</option>
                    <option value="Weekly">Weekly</option>
                    <option value="Monthly">Monthly</option>
                    <option value="Yearly">Yearly</option>
                </select>

                <br><br>
                <label class="">Place of Access<span class="w3-text-red">*</span></label><br>
                <input class="w3-input w3-border" type="text" required name="PlaceFAccess"
                       placeholder="eg. Cyber, @home, institution">
                <br>
                <div class="">
                    <input type="submit" class="w3-round w3-btn w3-teal" value="Save Details"
                           name="Save" id="_ictSaveBtn">
                </div>
            </form>
            <br>
            <form class="w3-form w3-light-gray w3-animate-right" action="javascript:_FormG('formG');" name="formG"
                  autocomplete="off"
                  method="post">
                <h5>Information regarding Livestock Owned</h5>

                <br>
                <label class="">Types of Livestock <span class="w3-text-brown w3-medium fa fa-paw "> ('Livestock Name'>Count,)</span></label><br>
                <textarea class="w3-input w3-border" style="width: 70%" name="lvStock" required
                          placeholder="e.g. Cows>3, Goat>2, e.t.c>?"></textarea>
                <br>

                <div class="">
                    <input type="submit" class="w3-round w3-btn w3-teal" value="Save Details"
                           name="Save" id="_lvSaveBtn">
                </div>
            </form>

            <div class="w3-light-gray w3-padding-4  pagination" style="position: absolute; left: 66.8%">
                <div class="w3-pagindation w3-row-padding w3-padding-medium">
                    <div class="w3-col l6 m6 s12" style="margin-bottom: 4px">
                        <button onclick="openTab(event, 'tab2','event_2');"
                                class="w3-border-brown w3-hover-teal w3-medium  w3-border-right w3-hover-text-red w3-btn w3-transparent w3-border w3-round-medium w3-text-black">
                            <i
                                    class="fa fa-chevron-left"></i> Prev
                        </button>
                    </div>

                    <div class="w3-col l6 m6 s12">
                        <button onclick="openTab(event, 'tab4','event_4');"
                                class="w3-border-brown w3-hover-teal w3-medium  w3-hover-text-white w3-btn w3-transparent w3-border w3-round-medium w3-text-black">
                            Next <i class="fa fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </section>

        <section class="tab" id="tab4" style="display: none;">

            <div onclick="document.getElementById('demo2').classList.toggle('w3-hide')"
                 class="w3-text-white w3-btn-block w3-left-align w3-padding w3-large w3-border-top w3-border-left w3-hover-blue w3-round-medium"
                 style="background: linear-gradient(to top, #ffffff00 0%, #de4059 100%);" type="button"
                 id="deathsCount">
                Death 1
            </div>

            <form class="w3-form w3-light-gray w3-animate-left" action="javascript:_FormF('formF');" name="formF"
                  autocomplete="off"
                  method="post">
                <h5>Recent Deaths in the Household</h5>
                <p class="w3-small"><span class="w3-tag">NB:</span> Duration being considered is in the last 12 months
                </p>

                <br>
                <label class="">Was the Death Notified?<span class="w3-text-red">*</span></label><br>
                <label>
                    <input class="w3-radio" type="radio" name="Death_Note" value="Yes" required>
                </label> Yes
                <label>
                    <input class="w3-radio" type="radio" name="Death_Note" value="No" required
                    >
                </label> No

                <br><br>
                <label for="_deathRel" class="">Relationship of the Deceased<span
                        class="w3-text-red">*</span></label><br>
                <select name="_deathRel" id="_deathRel" class="w3-select w3-border" required>
                    <option value="">Please Select Relationship</option>
                    <option value="Son/Daughter">Son/Daughter</option>
                    <option value="Grandchild">Grandchild</option>
                    <option value="Brother/Sister">Brother/Sister</option>
                    <option value="Father/Mother">Father/Mother</option>
                    <option value="In Law">In Law</option>
                    <option value="GrandParent">GrandParent</option>
                    <option value="Non Relative(Visitor/Friends)">Non Relative(Visitor/Friends)</option>

                </select>
                <br><br>

                <label class="">Age<span class="w3-text-red">*</span></label><br>
                <input class="w3-input w3-border" type="number" required name="Age" placeholder="Died at what age?"
                       value="0" min="3">
                <br>
                <label>Sex <span class="w3-text-red">*</span></label><br>
                <label>
                    <input class="w3-radio" type="radio" name="Sex" value="Male" required
                           onchange="document.getElementById('_femDeath').classList.toggle('w3-hide')">
                </label> Male
                <label>
                    <input class="w3-radio" type="radio" name="Sex" value="Female" required
                           onchange="document.getElementById('_femDeath').classList.toggle('w3-show')">
                </label> Female
                </select>
                <br><br>

                <fieldset class="w3-margin-left w3-animate-zoom w3-hide" id="_femDeath">
                    <legend>NB: For females only</legend>
                    <label class="w3-small w3-label">Cause of Death<span class="w3-text-red">*</span></label><br>
                    <select class="w3-border w3-select" style="width: 50%" name="Cause">
                        <option value="Unknown">None Selected</option>
                        <option>During preganancy</option>
                        <option>During Delivery</option>
                        <option>2 Months after delivery</option>
                        <option>Other</option>
                    </select>
                </fieldset>
                <br>

                <div class="">
                    <input type="submit" class="w3-round w3-btn w3-teal" value="Save/ (+ Add More)"
                           name="Save">
                </div>
            </form>

            <div class="w3-light-gray w3-padding-4  pagination" style="position: absolute; left: 66.8%">
                <div class="w3-pagindation w3-row-padding w3-padding-medium">
                    <div class="w3-col l6 m6 s12" style="margin-bottom: 4px">
                        <button onclick="openTab(event, 'tab3','event_3');"
                                class="w3-border-brown w3-hover-teal w3-medium  w3-border-right w3-hover-text-red w3-btn w3-transparent w3-border w3-round-medium w3-text-black">
                            <i
                                    class="fa fa-chevron-left"></i> Prev
                        </button>
                    </div>

                    <div class="w3-col l6 m6 s12">
                        <button onclick="openTab(event, 'tab5','event_5');"
                                class="w3-border-brown w3-hover-teal w3-medium  w3-hover-text-white w3-btn w3-transparent w3-border w3-round-medium w3-text-black">
                            Next <i class="fa fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </section>

        <section class="tab" id="tab5" style="display: none;">
            <form class="w3-form w3-light-gray w3-animate-left" action="javascript:_FormD('formD');" name="formD"
                  method="post" autocomplete="off">
                <h5>Housing Conditions & Amenities</h5>
                <p class="w3-small"><span class="w3-tag">NB:</span> The below details are only for the <span
                        class="w3-tag w3-pale-red w3-text-red">main</span>
                    building</p>

                <label class="w3-label">Dwelling Units <span class="w3-text-red">*</span></label><br>
                <input class="w3-input w3-border" type="number" required name="dwell_units" title="Dwelling Units"
                       value="0" min="1"><br>

                <label class="w3-label">Habitable Rooms <span class="w3-text-red">*</span></label><br>
                <input class="w3-input w3-border" type="number" name="hab_rooms" title="Habitable Rooms " value="0"
                       min="1" required><br>

                <label class="w3-label">Tenure status <span class="w3-text-red">*</span></label><br>
                <select class="w3-select w3-border " style="width: 70%" title="Tenure status"
                        name="ten_st">
                    <option value="">Rented</option>
                    <option value="">provided</option>
                    <option value="">donated</option>
                    <option value="">Owner(Purchased)</option>
                    <option value="">Owner(Constructed)</option>
                    <option value="">Owner(Inherited)</option>
                </select>
                <br><br>

                <label class="w3-label">Roof Construction Material<span class="w3-text-red">*</span></label><br>
                <input class="w3-input w3-border" type="text" list="roof_mat" required name="roof_mat"
                       title="Roof Construction Material">
                <datalist id="roof_mat">
                    <option value="Corrugated Iron Sheets">
                    <option value="Asbestos Sheets">
                    <option value="Tiles (Clay, Wooden, Fibre, Cement)">
                </datalist>
                <br>

                <label class="w3-label">Wall Construction Material<span class="w3-text-red">*</span></label><br>
                <input class="w3-input w3-border" type="text" list="wall_mat" title="Wall Construction Material"
                       name="wall_mat" required>
                <datalist id="wall_mat">
                    <option value="Mud/Wood">
                    <option value="Mud/dung">
                </datalist>
                <br>

                <label class="w3-label">Floor Construction Material<span class="w3-text-red">*</span></label><br>
                <input class="w3-input w3-border" type="text" list="floor_mat" name="floor_mat"
                       title="Floor Construction Material" required>
                <datalist id="floor_mat">
                    <option value="Cement">
                    <option value="Tiles">
                    <option value="Wood">
                    <option value="Earth">
                    <option value="Others">
                </datalist>
                <br>

                <label class="w3-label">Source of Water<span class="w3-text-red">*</span></label><br>
                <select class="w3-select w3-border" title="Source of Water" name="source_wt" required>
                    <option value="">Select Source</option>
                    <option value="Pond">Pond</option>
                    <option value="Dam">Dam</option>
                    <option value="Lake">Lake</option>
                    <option value="Stream/River">Stream/River</option>
                    <option value="Spring">Spring</option>
                    <option value="Well">Well</option>
                    <option value="Borehole">Borehole</option>
                    <option value="Piped">Piped</option>
                    <option value="Jabias/Tanks">Jabias/Tanks</option>
                    <option value="Vendor">Vendor</option>
                    <option value="Other">Other</option>
                </select><br><br>

                <label class="w3-label">Mode of Human Waste Disposal<span class="w3-text-red">*</span></label><br>
                <select class="w3-select w3-border" title="Mode of Human Waste Disposal" name="HumanWasteDisp" required>
                    <option value="">Select 1 Mode</option>
                    <option value="Main Sewer">Main Sewer</option>
                    <option value="Septic Tank">Septic Tank</option>
                    <option value="Bucket latrine">Bucket latrine</option>
                    <option value="Cess pool">Cess pool</option>
                </select><br><br>

                <label class="w3-label">Cooking Fuel<span class="w3-text-red">*</span></label><br>
                <input class="w3-input w3-border" type="text" list="cook_fuel" required name="cook_fuel"
                       title="Cooking Fuel">
                <datalist id="cook_fuel">
                    <option value="Electricity">
                    <option value="Paraffin">
                    <option value="Gas">
                    <option value="Firewood">
                </datalist>
                <br>

                <label class="w3-label">Lighting Fuel<span class="w3-text-red">*</span></label><br>
                <input class="w3-input w3-border" type="text" required name="lyt_fuel" title="Lighting Fuel">
                <br>
                <div class="">
                    <input type="submit" class="w3-round w3-btn w3-teal" value="Save Details"
                           name="Save" id="_dwSaveBtn">
                </div>
            </form>
            <div class="w3-light-gray w3-padding-4  pagination" style="position: absolute; left: 66.8%">
                <div class="w3-pagindation w3-row-padding w3-padding-medium">
                    <div class="w3-col l6 m6 s12" style="margin-bottom: 4px">
                        <button onclick="openTab(event, 'tab4','event_4');"
                                class="w3-border-brown w3-hover-teal w3-medium  w3-border-right w3-hover-text-red w3-btn w3-transparent w3-border w3-round-medium w3-text-black">
                            <i
                                    class="fa fa-chevron-left"></i> Prev
                        </button>
                    </div>

                    <div class="w3-col l6 m6 s12">
                        <button onclick="openTab(event, 'tab6','event_6');"
                                class="w3-border-brown w3-hover-teal w3-medium  w3-hover-text-white w3-btn w3-transparent w3-border w3-round-medium w3-text-black">
                            Finish <i class="fa fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </section>

        <section class="tab" id="tab6" style="display: none;">
            <div class="w3-container w3-light-gray">
                <h3 class="">Review the data you have entered</h3>
                <section>
                    <h5> Information Regarding All Persons</h5>

                    <div id="res-1" class="w3-responsive w3-center">
                        No HouseHold Data on This Topic <i class="fa fa-exclamation"> </i>
                    </div>
                </section>
                <br><br>
                <hr class="w3-text-gray w3-border-gray w3-gray">

                <section>
                    <h5> Information Regarding Females Aged 12 Years And Above</h5>

                    <div id="res-2" class="w3-responsive w3-center">
                        No HouseHold Data on This Topic <i class="fa fa-exclamation"> </i>

                    </div>
                </section>
                <br><br>
                <hr class="w3-text-gray w3-border-gray w3-gray">

                <section>
                    <h5> Information Regarding Disability</h5>
                    <div id="res-3" class="w3-responsive w3-center">
                        No HouseHold Data on This Topic <i class="fa fa-exclamation"> </i>

                    </div>
                </section>
                <br><br>
                <hr class="w3-text-gray w3-border-gray w3-gray">

                <section>
                    <h5> Education Status For Persons Aged 3 Years And Above</h5>
                    <div id="res-4" class="w3-responsive w3-center">
                        No HouseHold Data on This Topic <i class="fa fa-exclamation"> </i>

                    </div>
                </section>
                <br><br>
                <hr class="w3-text-gray w3-border-gray w3-gray">

                <section>
                    <h5> Labor Force Participation</h5>
                    <div id="res-5" class="w3-responsive w3-center">
                        No HouseHold Data on This Topic <i class="fa fa-exclamation"> </i>

                    </div>
                </section>
                <br><br>
                <hr class="w3-text-gray w3-border-gray w3-gray">

                <section >
                    <h5> Information Regarding Ict</h5>
                    <div id="res-6" class="w3-responsive w3-center">
                        No HouseHold Data on This Topic <i class="fa fa-exclamation"> </i>

                    </div>
                </section>
                <br><br>
                <hr class="w3-text-gray w3-border-gray w3-gray">

                <section>
                    <h5> Recent Deaths In The Household</h5>
                    <div id="res-7" class="w3-responsive w3-center">
                        No HouseHold Data on This Topic <i class="fa fa-exclamation"> </i>

                    </div>
                </section>
                <br><br>
                <hr class="w3-text-gray w3-border-gray w3-gray">

                <section>
                    <h5> Information Regarding Livestocks Owned</h5>
                    <div id="res-8" class="w3-responsive w3-center">
                        No HouseHold Data on This Topic <i class="fa fa-exclamation"> </i>

                    </div>
                </section>
                <br> <br>
                <hr class="w3-text-gray w3-border-gray w3-gray">
                <section>
                    <h5> Housing Conditions And Amenities</h5>
                    <div id="res-9" class="w3-responsive w3-center">
                        No HouseHold Data on This Topic <i class="fa fa-exclamation"> </i>

                    </div>
                </section>
                <br><br>
                <hr class="w3-text-gray w3-border-gray w3-gray">

                <section>
                    <h5> Information On Emigrants</h5>
                    <div id="res-10" class="w3-responsive w3-center">
                        No HouseHold Data on This Topic <i class="fa fa-exclamation"> </i>

                    </div>
                </section>
                <br> <br>
				
				<a href="../default.html" class="w3-btn-block w3-blue-gray w3-padding-8 w3-large w3-round-medium w3-hover-amber">Finish <b>Up!</b></a>
				<br><br>
            </div>
        </section>

        <br><br><br>

    </main>
    <aside class="w3-col l4 m12 s12 w3-padding-medium">
        <section class=" w3-container w3-margin-bottom w3-row w3-padding" style="background-color: rgba(255,255,255,0.8)">
            <div class="w3-quarter" style="margin-top: 32px">
                <i class="fa fa-user-circle-o fa-4x w3-text-gray"></i>
            </div>
            <div class="w3-threequarter" id="sideData">
                <h3>Co-Worker's Name</h3>
                <p class="">ID: 32436932</p>
                
				
				 <form action="../Phps/logout.php" method="get">
                <button class="w3-btn w3-black" "submit">Logout</button>
            </form>
            </div>
        </section>

        <section class="w3-container w3-margin-bottom" style="background-color: rgba(255,255,255,0.8)">
            <h4>Other Services</h4>
            <ul class="w3-ul">
                <li class="w3-hover-pale-red"><a href="Inquiry_Page.html"><i class="fa fa-question-circle-o fa-1x"></i>
                    Inquiry Desk</a></li>
                <li>Lorem ipsum dolor.</li>
                <li>Lorem ipsum dolor.</li>
                <li>Lorem ipsum dolor.</li>
            </ul>
        </section>

        <section class="w3-container w3-margin-bottom" style="background-color: rgba(255,255,255,0.8)">
            <p style="text-transform: capitalize">REMEMBER THE SUCCESS OF THIS EXERCISE
                DEPENDS ENTIRELY ON YOUR COOPERATION,
                HARD WORK AND COMMITMENT. MAKE THIS CENSUS THE BEST CENSUS TO BE CARRIED
                OUT IN OUR COUNTRY!!! </p>
        </section>
    </aside>
</div>
<footer class="w3-padding-xlarge w3-text-white w3-center w3-large"
        style="background: linear-gradient(to bottom, #ffffff33 0%, #607d8b 100%);">
    &copy; <a href="../default.html">Census</a> 2018
</footer>
</body>
<script type="text/javascript" src="../scripts/main.js"></script>
</html>

<script>
    function openTab(evt, tabName, ixd) {
        var i, x, tablinks;

        x = document.getElementsByClassName("tab");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
        }
        document.getElementById(tabName).style.display = "block";
        //evt.currentTarget.firstElementChild.className += " w3-border-red";
        document.getElementById(ixd).firstElementChild.className += " w3-border-red";
		
		/*if(tabName==="tab6"){
			alert("h");
			_callDataFetcher();
		}*/
    }

    function openFemaleBar(radio) {
        var y = document.getElementById("main_col1");
        var z = document.getElementById("main_col2");

        if (radio.checked) {
            y.className = y.className.replace("l12 m12", "l8 m8");
            z.className = z.className.replace("w3-hide", "w3-show");
        }
    }

    function openMaleBar(radio) {
        var y = document.getElementById("main_col1");
        var z = document.getElementById("main_col2");

        if (radio.checked) {
            y.className = y.className.replace("l8 m8", "l12 m12");
            z.className = z.className.replace("w3-show", "w3-hide");
        }
    }


    checkSession();

    function checkSession() {
        var xhttp;

        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText > 0) {
                    formatDis(true);
                } else {
                    formatDis(false);
                }
            }
        };
        xhttp.open("GET", "../Phps/check_session.php", true);
        xhttp.send();
    }


    function formatDis(arg) {
        var y, z;
        y = document.getElementById("log_state_ON");
        z = document.getElementById("log_state_OFF");
        ;

        if (arg) {
            y.className = y.className.replace("w3-hide", "w3-show");
            z.className = z.className.replace("w3-show", "w3-hide");
            prepStaffData();
        }
        else {

            y.className = y.className.replace("w3-show", "w3-hide");
            z.className = z.className.replace("w3-hide", "w3-show");
            window.location.replace("../default.html");
        }
    }


    function prepStaffData() {
        var xhttp;

        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                fmtStaffData(this.responseText);
            }
        };
        xhttp.open("GET", "../Phps/get_Session.php", true);
        xhttp.send();

    }

    function fmtStaffData(data) {
        var arr = (JSON.parse(data)).staffData;

        out = ' <h3><span class="w3-large">Name:</span> ' + arr[0].nameCk + '</h3>\n' +
            '<p>Work ID: <span class="w3-large" style="font-weight: 900;">' + arr[0].workCk + '</span></p>\n' +
            '<p>H<i class="fa fa-home w3-xlarge w3-text-brown"></i>H ID: <span class="w3-medium w3-text-red" style="font-weight: 900;text-decoration: underline;" id="_hhUniqueId"><?php echo($genID);?></span></p>\n' +
            '<form action="../Phps/logout.php" method="get">'+
                '<button class="w3-btn w3-blue-gray w3-round-xxlarge" "submit">Logout</button>'+
            '</form>';

        document.getElementById("sideData").innerHTML = out;

    }

</script>