function CopyToClipboard(containerid) {
    if (document.selection) {
        var range = document.body.createTextRange();
        range.moveToElementText(document.getElementById(containerid));
        range.select().createTextRange();
        document.execCommand("copy");
        $('#supportMessageModal').modal('hide');
    } else if (window.getSelection) {
        var range = document.createRange();
        range.selectNode(document.getElementById(containerid));
        window.getSelection().addRange(range);
        document.execCommand("copy");
        $('#supportMessageModal').modal('hide');
    }
}

$(document).ready(function () {

    // Show the cookies modal
    var cookie_policy = $.cookie('Didicalc_cookies');
    if (cookie_policy === undefined) {
        $('#cookieModal').modal('show');
    } else {
        if (cookie_policy === "acepted") {
            $('#cookieModal').modal('hide');
        } else {
            $('#cookieModal').modal('show');
        }
    }

    // Cookies link Leer mas
    $('#learMore').click(function () {
        window.location.href = 'privacypolicy.php';
    });

    // Cookie acept cookies use
    $('#acept').click(function () {
        $.cookie('Didicalc_cookies', 'acepted', {expires: 365, path: '/'});
    });

    // Change the class type
    // The var difference is undefine because it is difine in run time.
    if (difference < 0) {
        $('#contCalcViaje').addClass('alert-danger');
    } else {
        $('#contCalcViaje').addClass('alert-success');
    }

});

