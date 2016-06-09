<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Disney World</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
		<link href='https://fonts.googleapis.com/css?family=Raleway:200' rel='stylesheet' type='text/css'>	
        <link rel='stylesheet' href='{{url()}}/assets/js/fullcalendar-2.7.3/fullcalendar.css' />
        <link rel="stylesheet" href="{{url()}}/assets/css/bootstrap.min.css">
        <script src='{{url()}}/assets/js/fullcalendar-2.7.3/lib/jquery.min.js'></script>
        <script src='{{url()}}/assets/js/fullcalendar-2.7.3/lib/moment.min.js'></script>
        <script src='{{url()}}/assets/js/fullcalendar-2.7.3/fullcalendar.js'></script>
        <script src='{{url()}}/assets/js/fullcalendar-2.7.3/lang/es.js'></script>
        

        <!-- Script para manejo del calendario
        documentacion: http://fullcalendar.io/docs/ -->
        <script>
             $(document).ready(function() {
                $('#calendar').fullCalendar({
                    header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
			        },
                     events: [
                        {
                          title: 'event 1',
                          start: '2000-01-01',
                          end: '2000-01-01',
                          color: 'blue'
                        },
                      ]
                });
            });
        </script>   

    </head>
    <body>
        <h1 style="margin-bottom: 40px;">Calendario</h1>
        <div id='calendar'></div>
    </body>
</head>