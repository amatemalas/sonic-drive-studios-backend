import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid';
import listPlugin from '@fullcalendar/list';
import itLocale from '@fullcalendar/core/locales/es'; //italian language and config

$(document).ready(function () {
    const calendarEl = document.getElementById("calendar");

    if (calendarEl) {
        window.calendar = new Calendar(calendarEl, {
            locale: itLocale,
            plugins: [ dayGridPlugin, timeGridPlugin, listPlugin ],
            initialView: 'dayGridMonth',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,listWeek'
            },
            // go ahead with other parameters
        });

        calendar.render();
    }
});
