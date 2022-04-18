document.addEventListener("DOMContentLoaded", function () {
  var calendarEl = document.getElementById("calendar");

  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    locale: 'fr',
    weekNumbers: true,
    headerToolbar: {
      left: "prev,next today",
      center: "title",
      right: "dayGridMonth,timeGridWeek,list",
    },
    buttonText: {
      today: 'Aujourd\'hui',
      month: 'Mois',
      week: 'Semaine',
      list: 'Liste',
  },
    initialDate: "2022-07-01",
    navLinks: true, // can click day/week names to navigate views
    businessHours: true, // display business hours
    events: [
      {
        title: "Business Lunch",
        start: "2020-09-03T13:00:00",
        constraint: "businessHours",
      },
      {
        title: "Meeting",
        start: "2020-09-13T11:00:00",
        constraint: "availableForMeeting", // defined below
        color: "#257e4a",
      },
      {
        title: "Conference",
        start: "2020-09-18",
        end: "2020-09-20",
      },
      {
        title: "Party",
        start: "2020-09-29T20:00:00",
      },

      // areas where "Meeting" must be dropped
      {
        groupId: "availableForMeeting",
        start: "2020-09-11T10:00:00",
        end: "2020-09-11T16:00:00",
        display: "background",
      },
      {
        groupId: "availableForMeeting",
        start: "2020-09-13T10:00:00",
        end: "2020-09-13T16:00:00",
        display: "background",
      },

      // red areas where no events can be dropped
      {
        start: "2020-09-24",
        end: "2020-09-28",
        overlap: false,
        display: "background",
        color: "#ff9f89",
      },
      {
        start: "2020-09-06",
        end: "2020-09-08",
        overlap: false,
        display: "background",
        color: "#ff9f89",
      },
    ],
  });

  calendar.render();
});
