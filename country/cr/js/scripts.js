$(document).ready(function () {
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
    $('#form_simpl_calc').submit(function () {
        var validate = true;
        $('#val_kilometers').addClass('hidden');
        $('#val_time').addClass('hidden');
        if ($('#calculating').val() === "") {
            $('#calculating').val("Simple");
        }
        if ($('#kilometers').val() === "") {
            $('#val_kilometers').text("Debe ingresar un valor para los kilómetros");
            $('#val_kilometers').removeClass('hidden');
            validate = false;
        }
        if ($('#time').val() === "") {
            $('#val_time').text("Debe ingresar un valor para el tiempo");
            $('#val_time').removeClass('hidden');
            validate = false;
        }
        return validate;
    });
    $('#form_details_calc').submit(function () {
        var validate = true;
        $('#val_earnings').addClass('hidden');
        $('#val_totalTripPrice').addClass('hidden');
        $('#val_kilometers').addClass('hidden');
        $('#val_time').addClass('hidden');
        if ($('#calculating').val() === "") {
            $('#calculating').val("Details");
        }
        if ($('#earnings').val() === "") {
            $('#val_earnings').text("Debe ingresar un valor para las ganancias");
            $('#val_earnings').removeClass('hidden');
            validate = false;
        }
        if ($('#totalTripPrice').val() === "") {
            $('#val_totalTripPrice').text("Debe ingresar un valor para el monto total del viaje");
            $('#val_totalTripPrice').removeClass('hidden');
            validate = false;
        }
        if ($('#kilometers').val() === "") {
            $('#val_kilometers').text("Debe ingresar un valor para los kilómetros");
            $('#val_kilometers').removeClass('hidden');
            validate = false;
        }
        if ($('#time').val() === "") {
            $('#val_time').text("Debe ingresar un valor para el tiempo");
            $('#val_time').removeClass('hidden');
            validate = false;
        }
        return validate;
    });
    function classColor(difference) {
        if (difference < 0) {
            $('#contCalcViaje').addClass('alert-danger');
        } else {
            $('#contCalcViaje').addClass('alert-success');
        }
    }
});

function copyToClipboard(element) {
    var aux = document.createElement("input");
    aux.setAttribute("value", document.getElementById(element).innerHTML);
    document.body.appendChild(aux);
    aux.select();
    document.execCommand("copy");
    document.body.removeChild(aux);
    $('#supportMessageModal').modal('hide');
}

function CopyToClipboard(containerid) {
    if (document.selection) {
        var range = document.body.createTextRange();
        range.moveToElementText(document.getElementById(containerid));
        range.select().createTextRange();
        document.execCommand("copy");
    } else if (window.getSelection) {
        var range = document.createRange();
        range.selectNode(document.getElementById(containerid));
        window.getSelection().addRange(range);
        document.execCommand("copy");
        alert("text copied, copy in the text-area");
    }
}