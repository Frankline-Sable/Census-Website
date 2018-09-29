/*scrolling mouse script**/
jQuery(document).ready(function ($) {

    $('a.scroll-link').click(function (e) {
        e.preventDefault();
        $id = $(this).attr('href');
        $('body,html').animate({
            scrollTop: $($id).offset().top - 0
        }, 750);
    });

});

/*scrolling from bottom to top script**/
jQuery(document).ready(function ($) {

    $('a.scroll-down').click(function (e) {
        e.preventDefault();
        $id = $(this).attr('href');
        $('body,html').animate({
            scrollTop: $($id).offset().top - 0
        }, 750);
    });

});

//# sourceURL=pen.js

function openTopNav(ham) {
    ham.classList.toggle("changeHam");//
    document.getElementById("menu-topnav").classList.toggle("return-top-Nav");
}


/**fullscreen navigation******/

/* Open when someone clicks on the span element */
function openFullNav(ham) {
    ham.classList.toggle("changeHam");//
    document.getElementById("fullscreenNav").classList.toggle("fullNavWidth");
}


var infoX1 = document.getElementById("viewInfo1");
var infoX2 = document.getElementById("viewInfo2");

function infoPrevious() {
    infoX1.classList.toggle("w3-hide");

    infoX2.classList.toggle("w3-hide");

}

function infoNext() {
    infoX1.classList.toggle("w3-hide");
    infoX2.classList.toggle("w3-hide");
    infoX1.classList.toggle("infoViewRyt");
    infoX1.classList.toggle("infoViewRyt");
}

window.onscroll = function () {
    scrollFunction();

};
window.onload = function () {

    scrollFunction()
};

const logo = document.getElementById("logo");


const s1 = document.getElementById("sec-1");
const s2 = document.getElementById("sec-2");
const s3 = document.getElementById("sec-3");

const s4 = document.getElementById("sec-4");
const cA1 = document.getElementById("cardA1");
const cA2 = document.getElementById("cardA2");
const cA3 = document.getElementById("cardA3");

const s5 = document.getElementById("sec-5");
const t1 = document.getElementById("tableContainer1");
const t2 = document.getElementById("tableContainer2");

const s6 = document.getElementById("sec-6");

const s7 = document.getElementById("sec-7");

function scrollFunction() {
    if (document.documentElement.scrollTop > 50) {
        logo.className = logo.className.replace("showLogo", "hideLogo");
    } else {
        logo.className = logo.className.replace("hideLogo", "showLogo");
    }

    if (document.documentElement.scrollTop > (getCoords(s1) / 2))
        s1.className = s1.className.replace("sec-main", "slideUp");
    if (document.documentElement.scrollTop > (getCoords(s2) - 200))
        s2.className = s2.className.replace("sec-main", "slideUp");
    if (document.documentElement.scrollTop > (getCoords(s3) - 300)) {
        s3.className = s3.className.replace("sec-main", "slideUp");
    }
    if (document.documentElement.scrollTop > (getCoords(s4) - 300))
    {
        s4.className = s4.className.replace("sec-main", "slideUp");

        cA3.className = cA3.className.replace("defaultCss", "cardAnim3");
        cA1.className = cA1.className.replace("defaultCss", "cardAnim1");
        cA2.className = cA2.className.replace("defaultCss", "cardAnim2");


    }
    if (document.documentElement.scrollTop > (getCoords(s7) - 300)) {

        s7.className = s7.className.replace("sec-main", "slideUp");
    }
    if (document.documentElement.scrollTop > (getCoords(s5) - 300)) {
        t1.className = t1.className.replace("tableDefault", "tableAnim1");
        t2.className = t2.className.replace("tableDefault", "tableAnim2");
        s5.className = s5.className.replace("sec-main", "slideUp");
    }
    if (document.documentElement.scrollTop > (getCoords(s6) - 300))
        s6.className = s6.className.replace("sec-main", "slideUp");
}

function getCoords(elem) { // crossbrowser version
    var box = elem.getBoundingClientRect();

    var body = document.body;

    var docEl = document.documentElement;

    var scrollTop = window.pageYOffset || docEl.scrollTop || body.scrollTop;
    var scrollLeft = window.pageXOffset || docEl.scrollLeft || body.scrollLeft;

    var clientTop = docEl.clientTop || body.clientTop || 0;
    var clientLeft = docEl.clientLeft || body.clientLeft || 0;

    var top = box.top + scrollTop - clientTop;
    var left = box.left + scrollLeft - clientLeft;

    return Math.round(top);
}

var sideNav = document.getElementById("accountSideNav");

function openSideNav() {
    sideNav.classList.toggle("showSideNav");
}


var fg_error = document.getElementById("_resetError");

function userForgotPass(id) {
    var xhttp;

    var x = document.forms[id];
    var usrn = x['userName'].value;

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText > 0) {
                fg_error.classList.toggle("w3-hide");
                setTimeout(resumeForgot, 5000);
            }
            else {
                var ep = document.getElementById('passFl');
                var el = document.getElementById('passHolder');
                ep.classList.toggle("w3-hide");
                el.innerHTML = this.responseText;
            }
        }
    };
    xhttp.open("POST", "Phps/_getPassword.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("usernm=" + usrn);
}

function resumeForgot() {
    fg_error.classList.toggle("w3-hide");
}

var lg_error = document.getElementById("_loginError");

function userLogin(id) {
    var xhttp;
    var y, z, i;

    var x = document.forms[id];
    var usrn = x['userName'].value;
    var pass = x['psw'].value;

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText > 0) {
                lg_error.classList.toggle("w3-hide");
                setTimeout(resumeLogin, 5000);
            }
            else {
                var sd = document.getElementById("sideNav1");
                var sd2 = document.getElementById("sideNav2");
                var _btnSide = document.getElementsByClassName("signBtn");
                y = document.getElementById("log_state_ON");
                z = document.getElementById("log_state_OFF");

                sd.className = sd.className.replace("w3-show", "w3-hide");
                sd2.className = sd2.className.replace("w3-hide", "w3-show");
                y.className = y.className.replace("w3-hide", "w3-show");
                z.className = z.className.replace("w3-show", "w3-hide");
                sd.className = sd.className.replace("w3-show", "w3-hide");
                sd2.className = sd2.className.replace("w3-hide", "w3-show");

                for (i = 0; i < _btnSide.length; i++) {
                    _btnSide[i].className = _btnSide[i].className.replace("fa fa-sign-in", "fa fa-connectdevelop");
                }
                userProfiles(this.responseText);
            }
        }
    };
    xhttp.open("POST", "Phps/signIn.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("usernm=" + usrn + "&pass=" + pass);
}

function resumeLogin() {
    lg_error.classList.toggle("w3-hide");
}

function passReset() {
    document.getElementById('sideNavRsPasw').classList.toggle('w3-hide');
    var l = document.getElementById('sideNav1');
    l.className = l.className.replace("w3-show", "w3-hide");
}

function passReset2() {
    document.getElementById('sideNavRsPasw').classList.toggle('w3-hide');
    var l = document.getElementById('sideNav1');
    l.className = l.className.replace("w3-hide", "w3-show");
}

function userProfiles(userDat) {
    var arr = (JSON.parse(userDat)).staffData;
    var datArr = [
        arr[0]._Work_Id,
        arr[0]._National_Id,
        arr[0]._Full_Names,
        arr[0]._Email,
        arr[0]._Gender,
        arr[0]._Age,
        arr[0]._AOP,
        arr[0]._Date_Started];

    var out = "", i;

    for (i = 0; i < 8; i++) {
        document.getElementById('userData[' + i + ']').innerHTML = datArr[i];
    }

    var x = document.getElementById("_hhIDGenerator");
    x.value = new Date().getTime();
}

checkSession();

function checkSession() {
    var xhttp;

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            //alert(this.responseText);
            if (this.responseText == '') {
                //alert("f");
                formatDis(false, this.responseText);
            } else {
                //alert('t');
                formatDis(true, this.responseText);

            }
        }
    };
    xhttp.open("GET", "Phps/get_Session.php", true);
    xhttp.send();
}


function formatDis(arg, res) {
    var y, z, i;
    y = document.getElementById("log_state_ON");
    z = document.getElementById("log_state_OFF");
    var _btnSide = document.getElementsByClassName("signBtn");
    var sd = document.getElementById("sideNav1");
    var sd2 = document.getElementById("sideNav2");


    if (arg) {
        y.className = y.className.replace("w3-hide", "w3-show");
        z.className = z.className.replace("w3-show", "w3-hide");
        sd.className = sd.className.replace("w3-show", "w3-hide");
        sd2.className = sd2.className.replace("w3-hide", "w3-show");

        for (i = 0; i < _btnSide.length; i++) {
            _btnSide[i].className = _btnSide[i].className.replace("fa fa-sign-in", "fa fa-connectdevelop");
        }
        _prepFinalData(res);
    }
    else {
        y.className = y.className.replace("w3-show", "w3-hide");
        z.className = z.className.replace("w3-hide", "w3-show");
        sd.className = sd.className.replace("w3-hide", "w3-show");
        sd2.className = sd2.className.replace("w3-show", "w3-hide");

        for (i = 0; i < _btnSide.length; i++) {
            _btnSide[i].className = _btnSide[i].className.replace("fa fa-connectdevelop", "fa fa-sign-in");
        }
    }
}

function _prepFinalData(data) {
    var arr = (JSON.parse(data)).staffData;
    var xhttp;

    var usrn = arr[0].userCk;
    var pass = arr[0].workCk;

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (!this.responseText) {
                alert("false");
            }
            else {
                userProfiles(this.responseText);
            }
        }
    };
    xhttp.open("POST", "Phps/signIn.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("usernm=" + usrn + "&pass=" + pass);
}




