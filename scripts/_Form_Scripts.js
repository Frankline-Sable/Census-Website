// JavaScript Document



var formACount = 1, formCCount = 1;
formFCount = 1;


function _FormA(id) {
    var xHttp;
    var f = document.forms[id];
    var _hhID = document.getElementById("_hhUniqueId").innerHTML;
    formACount += 1;

    var _FName = f["_fullNames"].value;
    var _Dob = f['_dob'].value;
    var _Age = f['_age'].value;
    var _Rel = f['_rel'].value;
    var _Sex = f['_sex'].value;
    var _Tribe = f['_tribe'].value;
    var _rg = f['_rg'].value;
    var _marSt = f['_mar_status'].value;
    var _bp = f['_bp'].value;
    var _prRes = f['_prev_res'].value;
    var _crRes = f['_cur_res'].value;
    var _drRes = f['_dur_res'].value;
    var _orph = f['_orpHd'].value;
    var _dsb = f['_dsb'].value;
    var _tyDis = f['typ_dis'].value;
    var _otDis = f['_otherDis'].value;
    var _sch = f['_sch'].value;
    var _Hed = f['_EdReached'].value;
    var _hl = f['_EdComplt'].value;
    var _act7 = f['_Act7'].value;
    var _otAct = f['_otherAct'].value;
    var _emp = f['_employ'].value;
    var _hrW = f['_hrWork'].value;

    xHttp = new XMLHttpRequest();
    xHttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            alert(xHttp.responseText);
        }
    };
    xHttp.open("POST", "../Phps/_Forms_A.php", true);
    xHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xHttp.send("_HH_Code=" + _hhID + "&FullNames=" + _FName + "&DOB=" + _Dob + "&RelationShip=" + _Rel + "&Sex=" + _Sex + "&Tribe=" + _Tribe + "&Religion=" + _rg + "&Marital_St=" + _marSt + "&BithPlace=" + _bp + "&Prev_Res=" + _prRes + "&_Curr_Res=" + _crRes + "&Dur_Res=" + _drRes + "&OrphanHood=" + _orph + "&Disabilty=" + "0" + "&TypeDisability=" + _tyDis + "&MoreDisability=" + _otDis + "&School=" + _sch + "&Highest_Level=" + _Hed + "&LevelComp=" + _hl + "&ActivityLastWeek=" + _act7 + "&Employer=" + _emp + "&HoursWork=" + _hrW);

    var p = document.getElementById("tab1");
    p.innerHTML = p.innerHTML;
    var _count = document.getElementById('persCount');
    _count.innerHTML = "Person " + formACount;
}


function _FormB(id) {
    var xHttp;
    var f = document.forms[id];
    var _hhID = document.getElementById("_hhUniqueId").innerHTML;

    var _value_3 = f['Live_Births'].value;
    var _value_4 = f['Children_Alive'].value;
    var _value_5 = f['Children_HH'].value;
    var _value_6 = f['Children_ElseWhere'].value;
    var _value_7 = f['Dead_Child'].value;
    var _value_8 = f['Last_Born_Date'].value;
    var _value_9 = f['LB_Notified'].value;
    var _value_10 = f['LB_Sex'].value;
    var _value_11 = f['LB_Survival_Stats'].value;

    xHttp = new XMLHttpRequest();
    xHttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            alert(xHttp.responseText);
        }
    };
    xHttp.open("POST", "../Phps/_Forms_B(Females).php", true);
    xHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xHttp.send("_HH_Code=" + _hhID + "&Live_Births=" + _value_3 + "&Children_Alive=" + _value_4 + "&Children_HH=" + _value_5 + "&Children_ElseWhere=" + _value_6 + "&Dead_Child=" + _value_7 + "&Last_Born_Date=" + _value_8 + "&LB_Notified=" + _value_9 + "&LB_Sex=" + _value_10 + "&LB_Survival_Stats=" + _value_11);

    var f = document.getElementById("fem_Sub");
    f.classList.toggle("w3-amber");
    f.classList.toggle("w3-opacity");
    f.innerHTML = " Data Success <i class=\"fa fa-check w3-text-green\"></i>";

    f.disabled = true;
}

function _FormC(id) {
    var xHttp;
    var f = document.forms[id];
    var _hhID = document.getElementById("_hhUniqueId").innerHTML;
    formCCount += 1;

    var value_1 = f['resPondent'].value;
    var value_3 = f['FullNames'].value;
    var value_4 = f['gender'].value;
    var value_5 = f['dob'].value;
    var value_6 = f['level'].value;
    var value_7 = f['dest'].value;
    var value_8 = f['cur_res'].value;
    var value_9 = f['year_Dept'].value;
    var value_10 = f['res_abroad'].value;
    var value_11 = f['Sent_Rem'].value;
    var value_12 = f['rem_amount'].value;
    var value_13 = f['rem_use'].value;

    xHttp = new XMLHttpRequest();
    xHttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            alert(xHttp.responseText);
        }
    };
    xHttp.open("POST", "../Phps/_Forms_C(Emigrants).php", true);
    xHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xHttp.send("_HH_Code=" + _hhID + "&_Respondent=" + value_1 + "&FullNames=" + value_3 + "&Sex=" + value_4 + "&Dob=" + value_5 + "&HighestEdu=" + value_6 + "&Destination=" + value_7 + "&Curr_Res=" + value_8 + "&Dept_Year=" + value_9 + "&Status=" + value_10 + "&Sent_Rem=" + value_11 + "&Amount_Rem=" + value_12 + "&How_Rem=" + value_13);

    var p = document.getElementById("tab2");
    p.innerHTML = p.innerHTML;
    var _count = document.getElementById('emgsCount');
    _count.innerHTML = "Emigrant Number " + formCCount;
}


function _FormD(id) {
    var xHttp;
    var f = document.forms[id];
    var _hhID = document.getElementById("_hhUniqueId").innerHTML;

    var value_3 = f['dwell_units'].value;
    var value_4 = f['hab_rooms'].value;
    var value_5 = f['ten_st'].value;
    var value_6 = f['roof_mat'].value;
    var value_7 = f['wall_mat'].value;
    var value_8 = f['floor_mat'].value;
    var value_9 = f['source_wt'].value;
    var value_10 = f['cook_fuel'].value;
    var value_11 = f['lyt_fuel'].value;
    var value_12 = f['HumanWasteDisp'].value;

    xHttp = new XMLHttpRequest();
    xHttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            alert(xHttp.responseText);
        }
    };
    xHttp.open("POST", "../Phps/_Forms_D(Dwellings).php", true);
    xHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xHttp.send("_HH_Code=" + _hhID + "&DwellingUnits=" + value_3 + "&HabitableRooms=" + value_4 + "&Tenurestatus=" + value_5 + "&RoofMaterial=" + value_6 + "&WallMaterial=" + value_7 + "&FloorMaterial=" + value_8 + "&WaterSource=" + value_9 + "&CookFuel=" + value_10 + "&LightFuel=" + value_11 + "&HumanWasteDisp=" + value_12);

    var saveBtn = document.getElementById('_dwSaveBtn');
    saveBtn.disabled = true;
}

function _FormE(id) {
    var xHttp;
    var f = document.forms[id];
    var _hhID = document.getElementById("_hhUniqueId").innerHTML;


    var _checkAccess = document.getElementsByClassName("_checkAccess");
    var ct, data = " ";
    for (ct = 0; ct < _checkAccess.length; ct++) {
        if (_checkAccess[ct].checked) {
            data += _checkAccess[ct].value + ", ";
        }
    }
    var value_4 = f['Frequency'].value;
    var value_5 = f['PlaceFAccess'].value;

    xHttp = new XMLHttpRequest();
    xHttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            alert(xHttp.responseText);
        }
    };
    xHttp.open("POST", "../Phps/_Forms_E(ICT).php", true);
    xHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xHttp.send("_HH_Code=" + _hhID + "&accessibility=" + data + "&Frequency=" + value_4 + "&PlaceFAccess=" + value_5);

    var saveBtn = document.getElementById('_ictSaveBtn');
    saveBtn.disabled = true;
}

function _FormF(id) {
    var xHttp;
    var f = document.forms[id];
    var _hhID = document.getElementById("_hhUniqueId").innerHTML;

    formFCount += 1;

    var value_3 = f['_deathRel'].value;
    var value_4 = f['Age'].value;
    var value_5 = f['Sex'].value;
    var value_6 = f['Cause'].value;
    var value_7 = f['Death_Note'].value;

    xHttp = new XMLHttpRequest();

    xHttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            alert(xHttp.responseText);
        }
    };
    xHttp.open("POST", "../Phps/_Forms_F(Deaths).php", true);
    xHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xHttp.send("_HH_Code=" + _hhID + "&Dec_Relation=" + value_3 + "&Age=" + value_4 + "&Sex=" + value_5 + "&Cause=" + value_6 + "&Death_Note=" + value_7);

    var p = document.getElementById("tab4");
    p.innerHTML = p.innerHTML;
    var _count = document.getElementById('deathsCount');
    _count.innerHTML = "Death Number " + formFCount;
}

function _FormG(id) {
    var xHttp;
    var f = document.forms[id];
    var _hhID = document.getElementById("_hhUniqueId").innerHTML;

    var value_3 = f['lvStock'].value;

    xHttp = new XMLHttpRequest();

    xHttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            alert(xHttp.responseText);
        }
    };
    xHttp.open("POST", "../Phps/_Forms_G(Livestock).php", true);
    xHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xHttp.send("_HH_Code=" + _hhID + "&LVStock=" + value_3);

    var saveBtn = document.getElementById('_lvSaveBtn');
    saveBtn.disabled = true;
}

function _callDataFetcher() {
    _init_DataFetch("../Phps/_Get_Citizens.php", _data_Fetch_1);
    _init_DataFetch("../Phps/_Get_Emigrants.php", _data_Fetch_2);
    _init_DataFetch("../Phps/_Get_ict.php", _data_Fetch_3);
    _init_DataFetch("../Phps/_Get_Livestock.php", _data_Fetch_4);
    _init_DataFetch("../Phps/_Get_Deaths.php", _data_Fetch_5);
    _init_DataFetch("../Phps/_Get_Dwellings.php", _data_Fetch_6);
    _init_DataFetch("../Phps/_Get_Females.php", _data_Fetch_7);
    _init_DataFetch("../Phps/_Get_Citizens.php", _data_Fetch_8);
    _init_DataFetch("../Phps/_Get_Citizens.php", _data_Fetch_9);
    _init_DataFetch("../Phps/_Get_Citizens.php", _data_Fetch_10);
}

function _init_DataFetch(_url, _funcX) {

    let xHttp;
    var _hhID = document.getElementById("_hhUniqueId").innerHTML;

    xHttp = new XMLHttpRequest();
    xHttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            _funcX(this.responseText);
        }
    };

    xHttp.open("POST", _url, true);
    xHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xHttp.send("workId=" +_hhID);
}

function _data_Fetch_1(dat) {
    var arr = (JSON.parse(dat))._dcitizens;
    var i, out = "", x;
    x = document.getElementById("res-1");

    out = '<div class="w3-padding-4 w3-text-red w3-left-align">There are ' + arr.length + ' People in the Household</div>' +
        '<table class="w3-table w3-bordered">\n' +
        '<tr class="w3-blue">' +
        '<th>No:</th>' +
        '<th>FullNames</th> ' +
        '<th>DOB</th> ' +
        '<th>Relation..</th> ' +
        '<th>Gender</th> ' +
        '<th>Tribe</th> ' +
        '<th>Religion</th> ' +
        '<th>Mar..Status</th>' +
        ' <th>BirthPlace</th> ' +
        '<th>Prev..Res</th> ' +
        '<th>Cur..Res</th> ' +
        '<th>Dur.. Res</th> ' +
        '<th>OrphanHood</th> ' +
        '</tr>\n';

    for (i = 0; i < arr.length; i++) {
        out +=
            '<tr class="w3-pale-blue">' +
            '<td class=""></td>' +
            '<td>' + arr[i].FullNames + '</td>' +
            '<td>' + arr[i].DOB + '</td>' +
            '<td>' + arr[i].RelationShip + '</td>' +
            '<td>' + arr[i].Sex + '</td>' +
            '<td>' + arr[i].Tribe + '</td>' +
            '<td>' + arr[i].Religion + '</td>' +
            '<td>' + arr[i].Marital_St + '</td>' +
            '<td>' + arr[i].BithPlace + '</td>' +
            '<td>' + arr[i].Prev_Res + '</td>' +
            '<td>' + arr[i].Curr_Res + '</td>' +
            '<td>' + arr[i].Dur_Res + '</td>' +
            '<td>' + arr[i].OrphanHood + '</td>' +
            '</tr>';
    }
    out += '</table>';
    x.innerHTML = out;
}

function _data_Fetch_2(dat) {

    var arr = (JSON.parse(dat))._demigrants;
    var i, out = "", x;
    x = document.getElementById("res-10");

    out = '<div class="w3-padding-4 w3-small w3-left-align">Seeks  information  on  any  member  of  the  household  who  may  have  \n' +
        'migrated   to   another   country   since   1995' +
        '</div>' +
        '<div class="w3-left-align w3-text-red">There are ' + arr.length + ' Emigrants in the Household</div>' +
        '<table class="w3-table-all">\n' +
        '<tr class="w3-red">' +
        '<th>No:</th> ' +
        '<th>Respondent</th> ' +
        '<th>FullNames</th> ' +
        '<th>Sex</th> ' +
        '<th>Dob</th> ' +
        '<th>High..Edu.</th> ' +
        '<th>Destination</th> ' +
        '<th>Cur...Res</th> ' +
        '<th>Dept...Year</th> ' +
        '<th>Status</th> ' +
        '<th>Sen...Remi</th> ' +
        '<th>Amount..Remi</th> ' +
        '<th>Remi...Use</th>' +
        '</tr>\n';

    for (i = 0; i < arr.length; i++) {

        out +=
            '<tr class="w3-pale-red">' +
            '<td class=""></td>' +
            '<td>' + arr[i].Respondent + '</td>' +
            '<td>' + arr[i].FullNames + '</td>' +
            '<td>' + arr[i].Sex + '</td>' +
            '<td>' + arr[i].Dob + '</td>' +
            '<td>' + arr[i].Highest_Education_Lv + '</td>' +
            '<td>' + arr[i].Destination + '</td>' +
            '<td>' + arr[i].Curr_Res + '</td>' +
            '<td>' + arr[i].Dept_Year + '</td>' +
            '<td>' + arr[i].Status + '</td>' +
            '<td>' + arr[i].Sent_Rem + '</td>' +
            '<td>' + arr[i].Amount_Rem + '</td>' +
            '<td>' + arr[i].How_Rem + '</td>' +
            '</tr>';
    }
    out += '</table>';
    x.innerHTML = out;
}

function _data_Fetch_3(dat) {

    var arr = (JSON.parse(dat))._dict;
    var i, out = "", x;

    x = document.getElementById("res-6");

    out = '<div  class="w3-padding-4 w3-small w3-left-align">This will assist in compiling indicators \n' +
        'on  universal  access  to\n' +
        'and  use  of  basic  ICT  infrastructure  in  the  country</div>' +
        '<table class="w3-table-all">' +
        '<tr class="w3-green">' +
        '<th>No:</th> ' +
        '<th>accessibility</th> ' +
        '<th>Frequency</th> ' +
        '<th>Place of Access</th>' +
        '</tr>';

    for (i = 0; i < arr.length; i++) {
        out +=
            '<tr class="w3-pale-green">' +
            '<td class=""></td>' +
            '<td> ' + arr[i].Accessibility + '</td>' +
            '<td> ' + arr[i].Frequency + '</td>' +
            '<td> ' + arr[i].PlaceFAccess + '</td>' +
            '</tr>';
    }
    out += '</table>';
    x.innerHTML = out;
}

function _data_Fetch_4(dat) {

    var arr = (JSON.parse(dat))._dlvs;
    var i, out = "", x;
    x = document.getElementById("res-8");

    out = '<div class="w3-small w3-padding-4 w3-left-align"> Refers to the type  and  number  of  each  ty\n' +
        'pe  of  livestock  kept  or  managed  by  any  \n' +
        'member  of  the  household.</div>' +
        '<table class="w3-table-all">' +
        '<tr>' +
        '<th>No:</th> ' +
        '<th>Livestock Owned</th> ' +
        '</tr>';

    for (i = 0; i < arr.length; i++) {
        out +=
            '<tr>' +
            '<td class=""></td>' +
            '<td> ' + arr[i].Livestock + '</td>' +
            '</tr>';
    }
    out += '</table>';
    x.innerHTML = out;
}

function _data_Fetch_5(dat) {
    var arr = (JSON.parse(dat))._ddeaths;
    var i, out = "", x;
    x = document.getElementById("res-7");

    out = '<div class="w3-small w3-padding-4 w3-left-align"> The  information  collected  will  be  crucial  in  the  direct  determination  \n' +
        'of  current  mortality  levels  in  the  count\n' +
        'ry</div> ' +
        '<table class="w3-table-all">' +
        '<tr class="w3-brown">' +
        '<th>No:</th> ' +
        '<th>Dec_Relation</th> ' +
        '<th>Death_Note</th> ' +
        '<th>Age</th> ' +
        '<th>Sex</th> ' +
        '<th>Cause</th> ' +
        '</tr>';
    for (i = 0; i < arr.length; i++) {
        out +=
            '<tr style="background-color: rgba(121,85,72,0.49)"> '+
            '<td class=""></td>' +
            '<td> ' + arr[i].Dec_Relation + '</td>' +
            '<td> ' + arr[i].Death_Note + '</td>' +
            '<td> ' + arr[i].Age + '</td>' +
            '<td> ' + arr[i].Sex + '</td>' +
            '<td> ' + arr[i].Cause + '</td>' +
            '</tr>';
    }
    out += '</table>';
    x.innerHTML = out;
}

function _data_Fetch_6(dat) {
    var arr = (JSON.parse(dat))._ddw;
    var i, out = "", x;
    x = document.getElementById("res-9");

    out = '<div class=""></div> ' +
        '<table class="w3-table-all">\n' +
        '<tr class="w3-amber w3-text-white">' +
        '<th>No</th> ' +
        '<th>Dwelling Units</th> ' +
        '<th>Habitable Rooms</th> ' +
        '<th>Tenure status</th> ' +
        '<th>Roof Material</th> ' +
        '<th>Wall Material</th> ' +
        '<th>Floor Material</th> ' +
        '<th>Water Source</th> ' +
        '<th>Cook Fuel</th> ' +
        '<th>Light Fuel</th> ' +
        '<th>HumanWasteDisp<th>' +
        '</tr>';

    for (i = 0; i < arr.length; i++) {
        out +=
            '<tr class="w3-pale-yellow">' +
            '<td class=""></td>' +
            '<td> ' + arr[i].DwellingUnits + '</td>' +
            '<td> ' + arr[i].HabitableRooms + '</td>' +
            '<td> ' + arr[i].Tenurestatus + '</td>' +
            '<td> ' + arr[i].RoofMaterial + '</td>' +
            '<td> ' + arr[i].WallMaterial + '</td>' +
            '<td> ' + arr[i].FloorMaterial + '</td>' +
            '<td> ' + arr[i].WaterSource + '</td>' +
            '<td> ' + arr[i].CookFuel + '</td>' +
            '<td> ' + arr[i].LightFuel + '</td>' +
            '<td> ' + arr[i].HumanWasteDisp + '\n</td>' +
            '</tr>';
    }
    out += '</table>';
    x.innerHTML = out;
}

function _data_Fetch_7(dat) {
    var arr = (JSON.parse(dat))._dfem;
    var i, out = "", x;
    x = document.getElementById("res-2");

    out = '<div class=""></div> ' +
        '<table class="w3-table-all">\n' +
        '<tr class="w3-black">' +
        '<th>No</th> ' +
        '<th>Live..Births</th> ' +
        '<th>Children..Alive</th> ' +
        '<th>Children..HH</th> ' +
        '<th>Children..Else..</th> ' +
        '<th>Dead..Child</th> ' +
        '<th>Last..Born_Date</th> ' +
        '<th>Birth..Notified</th> ' +
        '<th>His/Her..Sex</th> ' +
        '<th>Its..Survival_Stats</th> ' +
        '</tr>';

    for (i = 0; i < arr.length; i++) {
        out +=
            '<tr class="w3-dark-gray">' +
            '<td class=""></td>' +
            '<td> ' + arr[i].Live_Births + '</td>' +
            '<td> ' + arr[i].Children_Alive + '</td>' +
            '<td> ' + arr[i].Children_HH + '</td>' +
            '<td> ' + arr[i].Children_ElseWhere + '</td>' +
            '<td> ' + arr[i].Dead_Child + '</td>' +
            '<td> ' + arr[i].Last_Born_Date + '</td>' +
            '<td> ' + arr[i].LB_Notified + '</td>' +
            '<td> ' + arr[i].LB_Sex + '</td>' +
            '<td> ' + arr[i].LB_Survival_Stats + '\n</td>' +
            '</tr>';
    }
    out += '</table>';
    x.innerHTML = out;
}









function _data_Fetch_8(dat) {
    var arr = (JSON.parse(dat))._dcitizens;
    var i, out = "", x;
    x = document.getElementById("res-3");
    out = '<div class="w3-padding-4 w3-small w3-left-align">We  will  classify  one  as  having  a  \n' +
        'disability  if  they  have  any  of  the  follow\n' +
        'ing:  visual,  hearing  and  speech  impairment;  \n' +
        'physical, mental and othe\n' +
        'r disabilities, and self\n' +
        '‐\n' +
        'care difficulties. </div>' +
        '<table class="w3-table-all w3-bordered">\n' +
        '<tr class="w3-teal">' +
        '<th>No:</th>' +
        '<th>Disability</th> ' +
        '<th>Type..of..Disability</th>' +
        '<th>More..on..Disabilit.</th>' +
        '</tr>\n';

    for (i = 0; i < arr.length; i++) {
        out +=
            '<tr style="background-color: rgba(0, 150, 136, 0.4);">' +
            '<td class=""></td>' +
            '<td>' + arr[i].Disabilty + '</td>' +
            '<td>' + arr[i].TypeDisability + '</td>' +
            '<td>' + arr[i].MoreDisability + '</td>' +
            '</tr>';
    }
    out += '</table>';
    x.innerHTML = out;
}

function _data_Fetch_9(dat) {
    var arr = (JSON.parse(dat))._dcitizens;
    var i, out = "", x;
    x = document.getElementById("res-4");

    out = '<div class="w3-padding-4 w3-small w3-left-align">Questions on education are applicable to persons aged 3 years and above and refer to  formal,  non  formal  and  other  education.' +
        ' </div>' +
        '<table class="w3-table-all w3-bordered">\n' +
        '<tr>' +
        '<th>No:</th>' +
        '<th>School</th> ' +
        '<th>Highest..Level</th> ' +
        '<th>Level..Completed</th> ' +
        '</tr>\n';

    for (i = 0; i < arr.length; i++) {
        out +=
            '<tr style="background-color: rgba(255,255,255, 0.4);">' +
            '<td class=""></td>' +
            '<td>' + arr[i].School + '</td>' +
            '<td>' + arr[i].Highest_Level + '</td>' +
            '<td>' + arr[i].LevelComp + '</td>' +
            '</tr>';
    }
    out += '</table>';
    x.innerHTML = out;
}

function _data_Fetch_10(dat) {
    var arr = (JSON.parse(dat))._dcitizens;
    var i, out = "", x;
    x = document.getElementById("res-5");

    out = '<div class="w3-padding-4 w3-small w3-left-align">Collection  of  labour  statistics,  mainly  used  for  employment  \n' +
        'policies  and  programmes  and  for  projecting future  labour  force.</div>' +
        '<table class="w3-table-all w3-bordered">\n' +
        '<tr class="w3-yellow">' +
        '<th>No:</th>' +
        '<th>Act..LastWk</th> ' +
        '<th>Employer</th> ' +
        '<th>Hours..Work<th>' +
        '</tr>\n';

    for (i = 0; i < arr.length; i++) {
        out +=
            '<tr class="w3-pale-yellow">' +
            '<td class=""></td>' +
            '<td>' + arr[i].ActivityLastWeek + '</td>' +
            '<td>' + arr[i].Employer + '</td>' +
            '<td>' + arr[i].HoursWork + '</td>' +
            '</tr>';
    }
    out += '</table>';
    x.innerHTML = out;
}





