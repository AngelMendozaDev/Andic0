mobiscroll.setOptions({
    locale: mobiscroll.localeEs,
    theme: 'ios',
    themeVariant: 'light',
    clickToCreate: true,
    dragToCreate: false,
    dragToMove: false,
    dragToResize: false,
    eventDelete: false
});

function registro(){
    swal("Por el momento estamos trabajando en ello","Andic A.C.", "info")
}

function getEvent(id) {
    $('#my-col').toggle(1500);
    $('#registro').hide();
    $('#frase').hide();
    $.ajax({
        url: MyBaseURL + "controllers/getInfo.php",
        type: 'POST',
        data: { tipo: 'getEvent', evento: id },
        success: function (response) {
            //console.log(response);
            data = JSON.parse(response)
            //console.log(data);
            $('#title-event').html(data.titulo);
            $('#inicio').html(data.fecha_inicio);
            $('#fin').html(data.fecha_final);
            $('#horario').html(data.horario);
            $('#descript').html(data.descript);
            if (data.registro == 1)
                $('#registro').show();
            else
                $('#frase').show();
            $('#descript').focus();
        }
    });
}

$(function () {
    $('#my-col').hide();

    $('#img-event').attr('src', MyBaseURL + 'static/media/events/1.png')
    var inst = $('#demo-desktop-month-view').mobiscroll().eventcalendar({
        view: {
            calendar: {
                labels: true
            }
        },
        onEventClick: function (event, inst) {
            getEvent(event.event.id);
            // mobiscroll.toast({
            //     message: event.event.title
            // });
        }
    }).mobiscroll('getInst');

    $.getJSON(MyBaseURL + 'controllers/getInfo.php', {
        tipo: 'getEvents'
    }, function (events) {
        inst.setEvents(events);
        //console.log(events);
    }, 'jsonp');

});