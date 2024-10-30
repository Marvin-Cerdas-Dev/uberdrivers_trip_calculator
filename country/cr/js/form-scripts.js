$(document).ready(function () {
    $("[name='service']").on("change", function (e) {
        if ($("input:radio[name=service]:checked").val() === "X") {
            $("#servicePlanet").removeClass("radioActive");
            $("#servicePlanet").addClass("radioInactive");
            $("#serviceFlash").removeClass("radioActive");
            $("#serviceFlash").addClass("radioInactive");            
            $("#serviceComfort").removeClass("radioActive");
            $("#serviceComfort").addClass("radioInactive"); 
            $("#serviceXL").removeClass("radioActive");
            $("#serviceXL").addClass("radioInactive"); 
            $("#serviceX").removeClass("radioInactive");
            $("#serviceX").addClass("radioActive");
        }
        if ($("input:radio[name=service]:checked").val() === "Planet") {
            $("#serviceX").removeClass("radioActive");
            $("#serviceX").addClass("radioInactive");
            $("#serviceFlash").removeClass("radioActive");
            $("#serviceFlash").addClass("radioInactive");            
            $("#serviceComfort").removeClass("radioActive");
            $("#serviceComfort").addClass("radioInactive"); 
            $("#serviceXL").removeClass("radioActive");
            $("#serviceXL").addClass("radioInactive"); 
            $("#servicePlanet").removeClass("radioInactive");
            $("#servicePlanet").addClass("radioActive");
        }
        if ($("input:radio[name=service]:checked").val() === "Flash") {
            $("#serviceX").removeClass("radioActive");
            $("#serviceX").addClass("radioInactive");
            $("#servicePlanet").removeClass("radioActive");
            $("#servicePlanet").addClass("radioInactive");            
            $("#serviceComfort").removeClass("radioActive");
            $("#serviceComfort").addClass("radioInactive"); 
            $("#serviceXL").removeClass("radioActive");
            $("#serviceXL").addClass("radioInactive"); 
            $("#serviceFlash").removeClass("radioInactive");
            $("#serviceFlash").addClass("radioActive");
        }
        if ($("input:radio[name=service]:checked").val() === "Comfort") {
            $("#serviceX").removeClass("radioActive");
            $("#serviceX").addClass("radioInactive");
            $("#servicePlanet").removeClass("radioActive");
            $("#servicePlanet").addClass("radioInactive");            
            $("#serviceFlash").removeClass("radioActive");
            $("#serviceFlash").addClass("radioInactive"); 
            $("#serviceXL").removeClass("radioActive");
            $("#serviceXL").addClass("radioInactive"); 
            $("#serviceComfort").removeClass("radioInactive");
            $("#serviceComfort").addClass("radioActive");
        } 
        if ($("input:radio[name=service]:checked").val() === "XL") {
            $("#serviceX").removeClass("radioActive");
            $("#serviceX").addClass("radioInactive");
            $("#servicePlanet").removeClass("radioActive");
            $("#servicePlanet").addClass("radioInactive");            
            $("#serviceFlash").removeClass("radioActive");
            $("#serviceFlash").addClass("radioInactive"); 
            $("#serviceComfort").removeClass("radioActive");
            $("#serviceComfort").addClass("radioInactive"); 
            $("#serviceXL").removeClass("radioInactive");
            $("#serviceXL").addClass("radioActive");
        }
    });

    // Pendinamount change class
    $("[name='payment']").on("change", function (e) {
        if ($("input:radio[name=payment]:checked").val() === "Tarjeta") {
            $("#Cash").removeClass("radioActive");
            $("#Cash").addClass("radioInactive");
            $("#Creditcard").removeClass("radioInactive");
            $("#Creditcard").addClass("radioActive");
        }
        if ($("input:radio[name=payment]:checked").val() === "Efectivo") {
            $("#Creditcard").removeClass("radioActive");
            $("#Creditcard").addClass("radioInactive");
            $("#Cash").removeClass("radioInactive");
            $("#Cash").addClass("radioActive");
        }
    });



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

    // Validate the details form
    $('#form_details_calc').submit(function () {
        var validate = true;
        $('#val_earnings').attr("hidden", true);
        $('#val_totalTripPrice').attr("hidden", true);
        $('#val_kilometers').attr("hidden", true);
        $('#val_time').attr("hidden", true);
        if ($('#calculating').val() === "") {
            $('#calculating').val("Details");
        }
        if ($('#earnings').val() === "") {
            $('#val_earnings').text("Debe ingresar un valor para las ganancias recibidas.");
            $('#val_earnings').attr("hidden", false);
            validate = false;
        }
        if ($('#totalTripPrice').val() === "") {
            $('#val_totalTripPrice').text("Debe ingresar un valor para el monto total del viaje. (Pago total del usuario)");
            $('#val_totalTripPrice').attr("hidden", false);
            validate = false;
        }
        if ($('#kilometers').val() === "") {
            $('#val_kilometers').text("Debe ingresar un valor de los kilómetros recorridos.");
            $('#val_kilometers').attr("hidden", false);
            validate = false;
        }
        if ($('#hours').val() === "") {
            $('#val_time').text("El valor de las horas no puede estar vacio.");
            $('#val_time').attr("hidden", false);
            validate = false;
        } else {
            if ($('#hours').val() < 0) {
                $('#val_time').text("El valor de las horas no puede ser menor a cero.");
                $('#val_time').attr("hidden", false);
                validate = false;
            }
            if ($('#hours').val() >= 25) {
                $('#val_time').text("El valor de las horas no puede ser mayor a 24.");
                $('#val_time').attr("hidden", false);
                validate = false;
            }
        }
        if ($('#minutes').val() === "") {
            $('#val_time').text("El valor de los minutos no puede estar vacio.");
            $('#val_time').attr("hidden", false);
            validate = false;
        } else {
            if ($('#minutes').val() == 0) {
                $('#val_time').text("El valor de los minutos no puede ser cero.");
                $('#val_time').attr("hidden", false);
                validate = false;
            }
            if ($('#minutes').val() < 0) {
                $('#val_time').text("El valor de los minutos no puede ser menor que cero.");
                $('#val_time').attr("hidden", false);
                validate = false;
            }
            if ($('#minutes').val() >= 60) {
                $('#val_time').text("El valor de los minutos no puede ser mayor a 59.");
                $('#val_time').attr("hidden", false);
                validate = false;
            }
        }
        if ($('#seconds').val() === "") {
            $('#val_time').text("El valor de los segundos no puede estar vacio.");
            $('#val_time').attr("hidden", false);
            validate = false;
        } else {
            if ($('#seconds').val() < 0) {
                $('#val_time').text("El valor de los segundos no puede ser negativo.");
                $('#val_time').attr("hidden", false);
                validate = false;
            }
            if ($('#seconds').val() >= 60) {
                $('#val_time').text("El valor de los segundos no puede ser mayor a 59.");
                $('#val_time').attr("hidden", false);
                validate = false;
            }
        }
        if ($('#hours').val() === "" && $('#minutes').val() === "" && $('#seconds').val() === "") {
            $('#val_time').text("Debe ingresar un valor para el tiempo de duración del viaje.");
            $('#val_time').attr("hidden", false);
            validate = false;
        }
        return validate;
    });

// Validate the simple form
    $('#form_simpl_calc').submit(function () {
        var validate = true;
        $('#val_kilometers').attr("hidden", true);
        $('#val_time').attr("hidden", true);
        if ($('#calculating').val() === "") {
            $('#calculating').val("Simple");
        }
        if ($('#kilometers').val() === "") {
            $('#val_kilometers').text("Debe ingresar un valor de los kilómetros recorridos");
            $('#val_kilometers').attr("hidden", false);
            validate = false;
        }
        if ($('#hours').val() === "" && $('#minutes').val() === "" && $('#seconds').val()) {
            $('#val_time').text("Debe ingresar un valor para el tiempo de duración del viaje");
            $('#val_time').attr("hidden", false);
            validate = false;
        } else {
            if ($('#hours').val() === "") {
                $('#val_hours').text("Debe indicar un valor para las horas.");
                $('#val_hours').attr("hidden", false);
                validate = false;
            }
            if ($('#minutes').val() === "") {
                $('#val_hours').text("Debe indicar un valor para las minutos.");
                $('#val_hours').attr("hidden", false);
                validate = false;
            }
            if ($('#seconds').val() === "") {
                $('#val_hours').text("Debe indicar un valor para las segundos.");
                $('#val_hours').attr("hidden", false);
                validate = false;
            }
        }
        return validate;
    });

// Add the modal checked in the modal
    var selectedTollsArray = [];
    $('#tollsFares').click(function () {
        selectedTollsArray.length = 0;
        $("input:checkbox:checked").each(function () {
            selectedTollsArray.push($(this).val());
        });
        selectedTollsArray.forEach(function (element, index) {
            if (index === 0) {
                $('#selected_tolls').val(element);
            } else {
                var value = $('#selected_tolls').val();
                $('#selected_tolls').val("");
                $('#selected_tolls').val(value + " + " + element);
            }
        });
        $('#tollsModal').modal('hide');
    });

// Modal check what checkbox is checked
    $('input[type="checkbox"]').click(function () {
// Atenas
        if ($('#Atenas').is(":checked")) {
            $('#AtenasLabel').addClass("btn-secondary");
        } else if ($('#Atenas').is(":not(:checked)")) {
            $('#AtenasLabel').removeClass("btn-secondary");
        }
// Braulio Carrillo
        if ($('#BraulioCarrillo').is(":checked")) {
            $('#BraulioCarrilloLabel').addClass("btn-secondary");
        } else if ($('#BraulioCarrillo').is(":not(:checked)")) {
            $('#BraulioCarrilloLabel').removeClass("btn-secondary");
        }
// Bernardo Soto
        if ($('#BernardoSoto').is(":checked")) {
            $('#BernardoSotoLabel').addClass("btn-secondary");
        } else if ($('#BernardoSoto').is(":not(:checked)")) {
            $('#BernardoSotoLabel').removeClass("btn-secondary");
        }
// Cuidad Colón
        if ($('#CuidadColon').is(":checked")) {
            $('#CuidadColonLabel').addClass("btn-secondary");
        } else if ($('#CuidadColon').is(":not(:checked)")) {
            $('#CuidadColonLabel').removeClass("btn-secondary");
        }
// Escazú
        if ($('#Escazu').is(":checked")) {
            $('#EscazuLabel').addClass("btn-secondary");
        } else if ($('#Escazu').is(":not(:checked)")) {
            $('#EscazuLabel').removeClass("btn-secondary");
        }
// Florencio del Castillo
        if ($('#FlorencioDelCastillo').is(":checked")) {
            $('#FlorencioDelCastilloLabel').addClass("btn-secondary");
        } else if ($('#FlorencioDelCastillo').is(":not(:checked)")) {
            $('#FlorencioDelCastilloLabel').removeClass("btn-secondary");
        }
// General Cañas
        if ($('#GeneralCanas').is(":checked")) {
            $('#GeneralCanasLabel').addClass("btn-secondary");
        } else if ($('#GeneralCanas').is(":not(:checked)")) {
            $('#GeneralCanasLabel').removeClass("btn-secondary");
        }
// Guacima
        if ($('#Guacima').is(":checked")) {
            $('#GuacimaLabel').addClass("btn-secondary");
        } else if ($('#Guacima').is(":not(:checked)")) {
            $('#GuacimaLabel').removeClass("btn-secondary");
        }
// Pozón
        if ($('#Pozon').is(":checked")) {
            $('#PozonLabel').addClass("btn-secondary");
        } else if ($('#Pozon').is(":not(:checked)")) {
            $('#PozonLabel').removeClass("btn-secondary");
        }
// Rampa Atenas
        if ($('#RampaAtenas').is(":checked")) {
            $('#RampaAtenasLabel').addClass("btn-secondary");
        } else if ($('#Atenas').is(":not(:checked)")) {
            $('#RampaAtenasLabel').removeClass("btn-secondary");
        }
// Rampa Pozón
        if ($('#RampaPozon').is(":checked")) {
            $('#RampaPozonLabel').addClass("btn-secondary");
        } else if ($('#RampaPozon').is(":not(:checked)")) {
            $('#RampaPozonLabel').removeClass("btn-secondary");
        }
// San Rafael
        if ($('#SanRafael').is(":checked")) {
            $('#SanRafaelLabel').addClass("btn-secondary");
        } else if ($('#SanRafael').is(":not(:checked)")) {
            $('#SanRafaelLabel').removeClass("btn-secondary");
        }
// Siquiares
        if ($('#Siquiares').is(":checked")) {
            $('#SiquiaresLabel').addClass("btn-secondary");
        } else if ($('#Siquiares').is(":not(:checked)")) {
            $('#SiquiaresLabel').removeClass("btn-secondary");
        }

    });
}
);
