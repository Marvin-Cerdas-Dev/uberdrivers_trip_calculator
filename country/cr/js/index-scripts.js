$(document).ready(function () {
    // Show page loader
    var counter = 0;
    var b = setInterval(function () {
        counter++;
        if (counter == 101) {
            clearInterval(b);
            $('#loading').css("display", "none");
            $('.page-container').css("display", "block");
        }
    }, 0);
    
    // Show the cookies modal
    var cookie_policy = $.cookie('Ubercalc_cookies');
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
        $.cookie('Ubercalc_cookies', 'acepted', {expires: 365, path: '/'});
    });

    $('#calc_details').click(function () {
        window.location.href = 'details.php';
    });

    $('#calc_simple').click(function () {
        window.location.href = 'simple.php';
    });

});



