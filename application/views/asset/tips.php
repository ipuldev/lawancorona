<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Snippet - BBBootstrap</title>
                                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
                                <style>

.card {
    background-color: #FFF;
    border-radius: 25px;
    /*box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);*/
    padding: 40px;
    z-index: 0
}
</style>

</head>
<body>
 <div class=" px-1  mx-auto">
    <div class="d-flex justify-content-center">
        <div class="col-xl-5 col-lg-6 col-md-7">
            <div class="card b-0">
                <h3 class="heading">Pencegahan COVID-19</h3>
                <p class="desc">lengkapi data hingga <span class="yellow-text">100%</span>
                <ul id="progressbar" class="text-center">
                    <li class="active step0" id="step1"></li>
                    <li class="step0" id="step2"></li>
                    <li class="step0" id="step3"></li>
                    <li class="step0" id="step4"></li>
                </ul>
                <fieldset class="show">
                    <div class="form-card">
                        <h5 class="sub-heading">Cuci Tangan</h5>
                        <div class="row]] px-1 radio-group">
                            <div class="card-block text-center radio ">
                                <div class="image-icon"> <img class="icon icon1" src="<?= base_url()?>asset/picture/hand.jpg"> </div>
                                <p class="sub-desc">Cuci Tangan</p>
                                <span>Cuci Tangan Dengan Air Mengalir dengan cara dan aturan yang tepat</span>
                            </div>
                        </div> <button id="next1" class="disabled btn-block btn-primary mt-3 mb-1 next">NEXT<span class="fa fa-long-arrow-right"></span></button>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="form-card">
                        <h5 class="sub-heading mb-4">Personal Details</h5> <label class="text-danger mb-3">* Required</label>
                        <div class="form-group"> <label class="form-control-label">First Name * :</label> <input type="text" id="fname" name="fname" placeholder="" class="form-control" onblur="validate1(1)"> </div>
                        <div class="form-group"> <label class="form-control-label">Last Name * :</label> <input type="text" id="lname" name="lname" placeholder="" class="form-control" onblur="validate1(2)"> </div>
                        <div class="form-group"> <label class="form-control-label">Email ID * :</label> <input type="text" id="email" name="email" placeholder="" class="form-control" onblur="validate1(3)"> </div>
                        <div class="form-group"> <label class="form-control-label">Contact No. * :</label> <input type="text" id="mob" name="mob" placeholder="" class="form-control" onblur="validate1(4)"> </div> <button id="next2" class="btn-block btn-primary mt-3 mb-1 next mt-4" onclick="validate1(0)">NEXT<span class="fa fa-long-arrow-right"></span></button> <button class="btn-block btn-secondary mt-3 mb-1 prev"><span class="fa fa-long-arrow-left"></span>PREVIOUS</button>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="form-card">
                        <h5 class="sub-heading mb-4">Company Details</h5> <label class="text-danger mb-3">* Required</label>
                        <div class="form-group"> <label class="form-control-label">Company Name * :</label> <input type="text" id="cname" name="cname" placeholder="" class="form-control" onblur="validate2(1)"> </div>
                        <div class="form-group"> <label class="form-control-label">Zip Code * :</label> <input type="text" id="zip" name="zip" placeholder="" class="form-control" onblur="validate2(2)"> </div>
                        <div class="form-group"> <label class="form-control-label">State * :</label> <input type="text" id="state" name="state" placeholder="" class="form-control" onblur="validate2(3)"> </div>
                        <div class="form-group"> <label class="form-control-label">City * :</label> <input type="text" id="city" name="city" placeholder="" class="form-control" onblur="validate2(4)"> </div>
                        <div class="form-group"> <label class="form-control-label">Shredding Job Size * :</label>
                            <div class="select mb-3"> <select name="shred-info" class="form-control">
                                    <option>NA</option>
                                    <option>1-20 boxes</option>
                                    <option>20-50 boxes</option>
                                    <option>50-100 boxes</option>
                                    <option>100+ boxes</option>
                                </select> </div>
                        </div> <button id="next3" class="btn-block btn-primary mt-3 mb-1 next mt-4" onclick="validate2(0)">SUBMIT REQUEST<span class="fa fa-long-arrow-right"></span></button> <button class="btn-block btn-secondary mt-3 mb-1 prev"><span class="fa fa-long-arrow-left"></span>PREVIOUS</button>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="form-card">
                        <h5 class="sub-heading mb-4">Success!</h5>
                        <p class="message">Thank You for choosing our website.<br>Quotation will be sent to your Email ID and Contact Number.</p>
                        <div class="check"> <img class="fit-image check-img" src="https://i.imgur.com/QH6Zd6Y.gif"> </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</div>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
                                <script type='text/javascript'>function validate1(val) {
v1 = document.getElementById("fname");
v2 = document.getElementById("lname");
v3 = document.getElementById("email");
v4 = document.getElementById("mob");

flag1 = true;
flag2 = true;
flag3 = true;
flag4 = true;

if(val>=1 || val==0) {
if(v1.value == "") {
v1.style.borderColor = "red";
flag1 = false;
}
else {
v1.style.borderColor = "green";
flag1 = true;
}
}

if(val>=2 || val==0) {
if(v2.value == "") {
v2.style.borderColor = "red";
flag2 = false;
}
else {
v2.style.borderColor = "green";
flag2 = true;
}
}

if(val>=3 || val==0) {
if(v3.value == "") {
v3.style.borderColor = "red";
flag3 = false;
}
else {
v3.style.borderColor = "green";
flag3 = true;
}
}

if(val>=4 || val==0) {
if(v4.value == "") {
v4.style.borderColor = "red";
flag4 = false;
}
else {
v4.style.borderColor = "green";
flag4 = true;
}
}

flag = flag1 && flag2 && flag3 && flag4;

return flag;
}

function validate2(val) {
v1 = document.getElementById("cname");
v2 = document.getElementById("zip");
v3 = document.getElementById("state");
v4 = document.getElementById("city");

flag1 = true;
flag2 = true;
flag3 = true;
flag4 = true;

if(val>=1 || val==0) {
if(v1.value == "") {
v1.style.borderColor = "red";
flag1 = false;
}
else {
v1.style.borderColor = "green";
flag1 = true;
}
}

if(val>=2 || val==0) {
if(v2.value == "") {
v2.style.borderColor = "red";
flag2 = false;
}
else {
v2.style.borderColor = "green";
flag2 = true;
}
}

if(val>=3 || val==0) {
if(v3.value == "") {
v3.style.borderColor = "red";
flag3 = false;
}
else {
v3.style.borderColor = "green";
flag3 = true;
}
}

if(val>=4 || val==0) {
if(v4.value == "") {
v4.style.borderColor = "red";
flag4 = false;
}
else {
v4.style.borderColor = "green";
flag4 = true;
}
}

flag = flag1 && flag2 && flag3 && flag4;

return flag;
}

$(document).ready(function(){

var current_fs, next_fs, previous_fs;

$(".next").click(function(){

str1 = "next1";
str2 = "next2";
str3 = "next3";

if(!str2.localeCompare($(this).attr('id')) && validate1(0) == true) {
val2 = true;
}
else {
val2 = false;
}

if(!str3.localeCompare($(this).attr('id')) && validate2(0) == true) {
val3 = true;
}
else {
val3 = false;
}

if(!str1.localeCompare($(this).attr('id')) || (!str2.localeCompare($(this).attr('id')) && val2 == true) || (!str3.localeCompare($(this).attr('id')) && val3 == true)) {
current_fs = $(this).parent().parent();
next_fs = $(this).parent().parent().next();

$(current_fs).removeClass("show");
$(next_fs).addClass("show");

$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

current_fs.animate({}, {
step: function() {

current_fs.css({
'display': 'none',
'position': 'relative'
});

next_fs.css({
'display': 'block'
});
}
});
}
});

$(".prev").click(function(){

current_fs = $(this).parent().parent();
previous_fs = $(this).parent().parent().prev();

$(current_fs).removeClass("show");
$(previous_fs).addClass("show");

$("#progressbar li").eq($("fieldset").index(next_fs)).removeClass("active");

current_fs.animate({}, {
step: function() {

current_fs.css({
'display': 'none',
'position': 'relative'
});

previous_fs.css({
'display': 'block'
});
}
});
});

$('.radio-group .radio').click(function(){
$(this).toggleClass('selected');
});

});</script>
                            </body>
                        </html>