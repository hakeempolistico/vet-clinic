function getCalendarSchedule(status = '0'){
   $.ajax({
        url: "getCalendarSchedule", 
        type: 'post',
        dataType: "json",
        data: {status: status},
        success: function(rs) {       

          //console.log(aData);
          var date = new Date();
          var d = date.getDate();
          var m = date.getMonth();
          var y = date.getFullYear();

          /*  className colors

          className: default(transparent), important(red), chill(pink), success(green), info(blue)

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

          //destroy calendar
          $('#allCalendar').fullCalendar('destroy');

          //initialize calendar
          var calendar =  $('#allCalendar').fullCalendar({
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
            $('#allCalendar').fullCalendar('renderEvent', copiedEventObject, true);
            
            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
              // if so, remove the element from the "Draggable Events" list
              $(this).remove();
            }
            
          },

          
          events: rs,      
          });


        }
  });
}



$(document).ready(function() {

  //Initialize Function
  getCalendarSchedule();

  $("#filter-all").click(function(){
    getCalendarSchedule(0);
  });

  $("#filter-approved").click(function(){
    getCalendarSchedule(1);
  });

  $("#filter-pending").click(function(){
    getCalendarSchedule(2);
  });

 


  $('#allCalendar').on( 'click', '.fc-event', function() {
    var id = $(this).attr('data-id');
    $('#modal-schedule-details').modal('show');  
    viewSchedulebyID(id);
  });

  $( "#modal-schedule-details" ).delegate( "#btn-app", "click", function() {
    var id = $(this).attr('data-id');
    updateSchedule(id,2);
  });

  $( "#modal-schedule-details" ).delegate( "#btn-dapp", "click", function() {
    var id = $(this).attr('data-id');
    updateSchedule(id,3);
  });


});

function updateSchedule(schedule_id,status){
    $.ajax({
        url: "updateSchedule", 
        type: 'post',
        dataType: "json",
        data: {schedule_id: schedule_id,status: status},
        success: function(rs) {
          if (rs == true) {
             alert('Schedule successfuly updated');
             $('#modal-schedule-details').modal('hide');
             getCalendarSchedule(0);
          } 
        }
    });
}

function viewSchedulebyID(schedule_id){
   $.ajax({
        url: "ajaxViewSchedulebyID", 
        type: 'post',
        dataType: "json",
        data: {schedule_id: schedule_id},
        success: function(rs) {
          
          $.each(rs, function (key, val) {

            switch (val.status) {
            case '2':
                $('#btn-app').addClass('hide').removeClass('show');
                $('#btn-dapp').addClass('hide').removeClass('show');
              break;
            case '3':
                $('#btn-app').addClass('hide').removeClass('show');
                $('#btn-dapp').addClass('hide').removeClass('show');
              break;
            default:
                $('#btn-dapp').addClass('show').removeClass('hide');
                $('#btn-app').addClass('show').removeClass('hide');
              break;
            }


            $('.lbl-description').text(val.description);
            $('.lbl-full_date').text(val.full_date);
            $('.lbl-pet_name').text(val.pet_name);
            $('.lbl-subject').text(val.subject);
            $('.lbl-status_name').text(val.status_name);

            $('#btn-dapp').attr('data-id', val.schedule_id );
            $('#btn-app').attr('data-id', val.schedule_id);

          });
        }
  });
}



