// Homeview.js : javascript used only in the home page
// Author: XCL (refactoring only)
// Jan 2020

function startCamera()
{
    $('#camera_wrap').camera({fx: 'scrollLeft', time: 2000, loader: 'none', playPause: false, navigation: true, height: '35%', pagination: true});
}

$(document).ready( function() {
    startCamera()
});


var modal = document.getElementById('id01');


var password = document.getElementById("idpassword")
    , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
    if(password.value !== confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
    } else {
        confirm_password.setCustomValidity('');
    }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

