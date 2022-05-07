(function (win, doc) {
    'use strict';
let calendarEl = doc.querySelector('.calenderUser');
    let calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar: {
            start: 'prev, dayGridMonth',
            center: 'title',
            end: 'next, timeGridWeek'
        },
        locale: 'pt-br',
        buttonText: {
            today: 'Hoje',
            month: 'Mês',
            week: 'Semana',
            day: 'Dia',
        },
        dateClick: function (info) {
            win.location.href=`/view/editar?id=${info.event.id}`;
        },
        events: `/controller/ControllerValidaLogin.php`,
        eventClick: function(info) {
            win.location.href=`/view/editar.php?id=${info.event.id}`;
            
        }
    });
    calendar.render();
})(window, document);
