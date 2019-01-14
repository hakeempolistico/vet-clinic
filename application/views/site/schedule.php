<!-- include header -->
<?php $this->load->view('site/header') ?>
 <!-- Bootstrap 3.3.7 -->
<!-- <link rel="stylesheet" href="<?= base_url('assets/adminlte/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css">  -->
<!-- 
<style type="text/css">
    form{
        padding: 2.5rem;
    }
    body{
            color: #99abb4;
    }
</style> -->

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

<div class="row" style="padding: 2em;">

    <div class="col-lg-4 col-xlg-4 col-md-4">
        <div class="card">
            <div class="card-block">
                <?php echo form_open(site_url('site/schedule')); ?>
                    <div class="form-horizontal form-material">
                       <div class="form-group">
                            <label>Date:</label>
                            <div class="input-group date">
                              <input type="text" name="date" class="form-control pull-right" id="datepicker" required="">
                            </div>
                             <?php if(form_error('date')): ?>
                                    <label class="text-danger"><?= form_error('date'); ?></label>
                             <?php endif ?>
                        </div>

                        <div class="form-group">
                            <label for="subject" class="col-md-12">Subject: </label>
                            <div class="col-md-12">
                                <input type="text" name="subject" class="form-control"  required="">
                            </div>
                            <?php if(form_error('subject')): ?>
                                    <label class="text-danger"><?= form_error('subject'); ?></label>
                             <?php endif ?>
                        </div>



                        <div class="bootstrap-timepicker">
                            <div class="form-group">
                              <label>Time picker:</label>
                              <div class="input-group">
                                <input type="text" name="time" class="form-control timepicker"  required="">
                              </div>
                              <?php if(form_error('time')): ?>
                                    <label class="text-danger"><?= form_error('time'); ?></label>
                             <?php endif ?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="pet_id" class="col-md-12">Pet: </label>
                            <div class="col-md-12">
                                <select class="form-control form-control-line"  id="pet_id" name="pet_id"  required="">
                                    <option></option>
                                    <?php foreach ($pet as $pet): ?>
                                    <option value="<?= $pet->pet_id; ?>"><?= $pet->pet_name; ?></option>
                                    <?php endforeach ?>          
                                </select>
                            </div>
                            <?php if(form_error('pet_id')): ?>
                                    <label class="text-danger"><?= form_error('pet_id'); ?></label>
                             <?php endif ?>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Description:</label>
                            <div class="col-md-12">
                                <textarea rows="5" class="form-control form-control-line" name="description"></textarea>
                            </div>
                            <?php if(form_error('description')): ?>
                                    <label class="text-danger"><?= form_error('description'); ?></label>
                             <?php endif ?>
                        </div>

                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Status: <span>Pending</span> </label>
                        </div>
                        
                        <div class="form-group text-center">
                            <div class="col-sm-12">
                                <button name="form_type" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <div class="col-lg-8 col-xlg-8 col-md-8">
        <div class="card">
            <div class="card-block">

                <div id='wrap'>

                <div id='calendar'></div>

                <div style='clear:both'></div>
                </div>

            </div>
        </div>
    </div>

</div>


<?php $this->load->view('site/modals/view_schedule_modal') ?>

<!-- include footer -->
<?php $this->load->view('site/footer') ?>


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
                        title: '<?= $event->subject; ?>', 
                        start: '<?= $event->date_time; ?>', 
                        end:  '<?= $event->date_time; ?>', 
                        allDay: false,
                        className: 'pending'
                     },
            <?php endforeach ?>      
            ],         
    }); 

</script>