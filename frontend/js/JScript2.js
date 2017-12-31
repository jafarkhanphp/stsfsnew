function disableBtn(btnID, newText) {

    Page_IsValid = null;

    if (typeof (Page_ClientValidate) == 'function') {
        Page_ClientValidate();
    }

    var btn = document.getElementById(btnID);
    var isValidationOk = Page_IsValid;

    if (isValidationOk !== null) {

        if (isValidationOk) {
            btn.disabled = true;
            btn.value = newText;
            btn.style.background = "url(Img/loading.gif)";

        }
        else {
            btn.disabled = false;
        }
    }
    else {
        setTimeout("setImage('"+btnID+"')", 10);
        btn.disabled = true;
        btn.value = newText;
        
    }
}

function setImage(btnID) {
    var btn = document.getElementById(btnID);
    btn.style.background = 'url(Img/loading.gif)';
}