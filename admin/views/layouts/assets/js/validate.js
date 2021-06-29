var FormModalIsValid = false;
function ValidateRequireControl(el, errorMes) {
    $(el).removeClass('is-invalid');
    $(el).removeClass('errorControl');
    $(el).nextAll(".spanError").remove();
    var valuectl = $(el).val();
    if (valuectl == null || valuectl == '') {
        $(el).addClass('is-invalid');
        $(el).addClass('errorControl');
        $(el).after("<span class='text-danger spanError'>" + errorMes + "</span>" );
        FormModalIsValid = false;
        return false;
    }
    return true;
}
function CreateValidate(el, errorMes) {
    $(el).removeClass('errorControl');
    $(el).nextAll(".spanError").remove();

    $(el).addClass('errorControl');
    $(el).after("<span class='text-danger spanError'>" + errorMes + "</span>");

}

function ValidateRequireControlMaxLength(el, errorMes, length) {
    if (FormModalIsValid) {
        var valuectl = $(el).val();
        if (valuectl != null && valuectl != '') {
            $(el).removeClass('errorControl');
            $(el).nextAll(".spanError").remove();
            if (valuectl.length > length) {
                $(el).addClass('errorControl');
                $(el).after("<span class='text-danger spanError'>" + errorMes + "</span>");
                FormModalIsValid = false;
            }
        }
    }
}
function ValidateRequireControlMinLength(el, errorMes, length) {
    if (FormModalIsValid) {
        var valuectl = $(el).val();
        if (valuectl != null && valuectl != '') {
            $(el).removeClass('errorControl');
            $(el).nextAll(".spanError").remove();
            if (valuectl.length < length) {
                $(el).addClass('errorControl');
                $(el).after("<span class='text-danger spanError'>" + errorMes + "</span>");
                FormModalIsValid = false;
            }
        }
    }
}

function ValidateRequireControlPass(el1, el2, errorMes) {
    var valuectl1 = $(el1).val();
    var valuectl2 = $(el2).val();
    if (valuectl1 != null && valuectl1 != '' && valuectl2 != null && valuectl2 != '') {
        $(el2).removeClass('errorControl');
        $(el2).nextAll(".spanError").remove();
        if (valuectl1 != valuectl2) {
            $(el2).addClass('errorControl');
            $(el2).after("<span class='text-danger spanError'>" + errorMes + "</span>");
            FormModalIsValid = false;
        }
    }
}

function ValidateRequireControlEmail(el, errorMes) {
    var valuectl = $(el).val();
    if (FormModalIsValid) {
        $(el).removeClass('errorControl');
        $(el).nextAll(".spanError").remove();
        if (ValidateEmail(valuectl) == false) {
            $(el).addClass('errorControl');
            $(el).after("<span class='text-danger spanError'>" + errorMes + "</span>");
            FormModalIsValid = false;
        }
    }
}
function ValidateEmail(mail) {
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)) {
        return (true)
    }
    return (false)
}
