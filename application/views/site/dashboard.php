<!-- include header -->
<?php include 'header.php';?>

<style type="text/css">
    
.clock {
  margin-left:auto;
  margin-right:auto;
  width:800px;
}

#Date {
  font-family: Arial, Helvetica, sans-serif;
  font-size:1rem;
  text-align:right;
}


.clock ul {
  width:800px;
  margin:0 auto;
  padding:0px;
  list-style:none;
  text-align:right;
}

.clock ul li {
  display:inline;
  font-size:1em;
  text-align:right;
  font-family:Arial, Helvetica, sans-serif;

}

#point {
  position:relative;
  -moz-animation:mymove 1s ease infinite;
  -webkit-animation:mymove 1s ease infinite;
  padding-left:10px; padding-right:10px;
}
td{
    padding: 1rem;
}
</style>
<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        
    <?php $this->load->view('site/layouts/topnav') ?>
    <?php $this->load->view('site/layouts/sidenav') ?>
    <div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <div class="col-md-7 col-4 align-self-center">
            </div>
        </div>
        <?php $this->session->flashdata() ? $this->load->view('site/inc/alert_message') : ''; ?>
        <div class="row">
            <!-- CONTENT START -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-block">
                       <h3 style="text-align: center;"> Approved Schedule</h3>
                       <div class="tbl-card">
                            <table class="tbl-list">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                  <tbody class="list-schedule">
                                      <tr>
                                        <td>January 23, 199asd</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                                      </tr>
                                  </tbody>
                                  
                            </table>
                                <hr>
                            <center>
                                <a href="schedule">see more</a>
                            </center>
                       </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="div_calendar">
                    <?php $this->load->view('site/sub_schedule/calendar') ?> 
                </div>
            </div>
        
            <!-- CONTENT END -->
        </div>
    </div>

<script src="<?= base_url('assets/site/') ?>js/time.min.js"></script>

<!-- include footer -->
<?php include 'footer.php';?>



<script type="text/javascript">

     /*  ------------ initialize calendar ----------- */

    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
    /*  className colors
    
    className: default(transparent), important(red), chill(pink), success(green), info(blue)
                approved, pending, complete, cancel
 
    */      
    
      
    /* initialize the external events
    -----------------------------------------------------------------*/

    $('#external-events div.external-event').each(function() {
    
        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
            title: $.trim($(this).text()) // use the element's text as the event title
        };
        
        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject);
        
        // make the event draggable using jQuery UI
        $(this).draggable({
            zIndex: 999,
            revert: true,      // will cause the event to go back to its
            revertDuration: 0  //  original position after the drag
        });
        
    });


    /* initialize the calendar
    -----------------------------------------------------------------*/
    
    var calendar =  $('#calendar').fullCalendar({
        header: {
            left: 'title',
            center: 'agendaDay,agendaWeek,month',
            right: 'prev,next today'
        },
        editable: false,
        firstDay: 1, //  1(Monday) this can be changed to 0(Sunday) for the USA system
        selectable: true,
        defaultView: 'month',
        
        axisFormat: 'h:mm',
        columnFormat: {
            month: 'ddd',    // Mon 
            week: 'ddd d', // Mon 7
            day: 'dddd M/d',  // Monday 9/7
            agendaDay: 'dddd d'
        },
        titleFormat: {
            month: 'MMMM yyyy', // September 2009
            week: "MMMM yyyy", // September 2009
            day: 'MMMM yyyy'                  // Tuesday, Sep 8, 2009
        },
        allDaySlot: false,
        selectHelper: true, 
        droppable: true, // this allows things to be dropped onto the calendar !!!
        drop: function(date, allDay) { // this function is called when something is dropped
        
            // retrieve the dropped element's stored Event Object
            var originalEventObject = $(this).data('eventObject');
            
            // we need to copy it, so that multiple events don't have a reference to the same object
            var copiedEventObject = $.extend({}, originalEventObject);
            
            // assign it the date that was reported
            copiedEventObject.start = date;
            copiedEventObject.allDay = allDay;
            
            // render the event on the calendar
            // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
            $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
            
            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
                // if so, remove the element from the "Draggable Events" list
                $(this).remove();
            }
            
        },
        
        events: [
           <?php foreach ($calendar as $event): ?>
                     {  id: '<?= $event->schedule_id; ?>', 
                        title: '<?= $event->time; ?><?= $event->subject; ?>', 
                        start: '<?= $event->date_time; ?>', 
                        end:  '<?= $event->date_time; ?>', 
                        allDay: false,
                        className: '<?= $event->color; ?>', 
                     },
            <?php endforeach ?>      
            ],         
    }); 

</script>