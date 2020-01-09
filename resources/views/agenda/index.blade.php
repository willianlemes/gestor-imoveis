<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
{{-- <link href='../packages/core/main.css' rel='stylesheet' />
<link href='../packages/daygrid/main.css' rel='stylesheet' />
<link href='../packages/timegrid/main.css' rel='stylesheet' />
<link href='../packages/list/main.css' rel='stylesheet' />
<script src='../packages/core/main.js'></script>
<script src='../packages/interaction/main.js'></script>
<script src='../packages/daygrid/main.js'></script>
<script src='../packages/timegrid/main.js'></script>
<script src='../packages/list/main.js'></script> --}}

<link rel="stylesheet" href="{{ url(mix('site/css/fullcalendar.css')) }}">
<link rel="stylesheet" href="{{ url(mix('site/css/style.css')) }}">
<script src="{{ url(mix('site/js/fullcalendar.js')) }}"></script>
<script src="{{ url(mix('site/js/script.js')) }}"></script>

<style>

  html, body {
    overflow: hidden; /* don't do scrollbars */
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #calendar-container {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
  }

  .fc-header-toolbar {
    /*
    the calendar will be butting up against the edges,
    but let's scoot in the header's buttons
    */
    padding-top: 1em;
    padding-left: 1em;
    padding-right: 1em;
  }

</style>
</head>
<body>
  @include('agenda.form-modal')

  <div id='calendar-container'>
    <div id='calendar' data-route="{{ route('routeLoadEvents') }}">
    </div>
  </div>

  <script>

    function routeEvents(){
      return document.getElementById('calendar').dataset.route;
    }

    $(document).ready(function(){
      $('.date-time').mask('00/00/0000 00:00:00');
      $('.modal').modal();
    });

     $(document).ready(function(){
      var calendarEl = document.getElementById('calendar');

      var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
        height: 'parent',
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        },
        defaultView: 'dayGridMonth',
        defaultDate: new Date(),
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: routeEvents(),
        eventClick: function(elemet){
          let id = elemet.event.id;
          $("#modalCalendar input[name='id']").val(id);

          let title = elemet.event.title;
          $("#modalCalendar input[name='title']").val(title);

          let start = moment(elemet.event.start).format('DD/MM/YYYY HH:mm:ss');
          $("#modalCalendar input[name='start']").val(start);

          if (elemet.event.end != null) {
            let end = moment(elemet.event.end).format('DD/MM/YYYY HH:mm:ss');
            $("#modalCalendar input[name='end']").val(end);
          }

          $("#modalCalendar").modal('open');
        }
      });

      calendar.render();
    });

  </script>

</body>
</html>
