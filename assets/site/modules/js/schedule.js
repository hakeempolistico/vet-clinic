 $(document).ready(function() {

    /*  ------------ initialize Date picker ----------- */

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })


    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })


  $('#calendar').on( 'click', '.fc-event', function() {
    var id = $(this).attr('data-id');
    $('#btn-update').attr('data-id', id);
    $('#btn-delete').attr('data-id', id);
     alert(id);
     $('#schedule_view_modal').modal('show');   
  });

  $('#schedule_view_modal').on( 'click', '#btn-update', function() {
    
  });

  $('#schedule_view_modal').on( 'click', '#btn-delete', function() {
    
  });

  // hide div
  $(".div_calendar").removeClass("show").addClass("hide");
  $(".div_requestSchedule").removeClass("show").addClass("hide");

  //View Calendar $("p").removeClass("hide").addClass("show");
  $(".btn_requestschedule").click(function(){
    $(".div_requestSchedule").removeClass("hide").addClass("show ");
    $(".div_ListView").removeClass("show").addClass("hide");
    $(".div_calendar").removeClass("show").addClass("hide");
  });

  //View List 
  $(".btn_listview").click(function(){
    $(".div_ListView").removeClass("hide").addClass("show");
    $(".div_requestSchedule").removeClass("show").addClass("hide");
    $(".div_calendar").removeClass("show").addClass("hide");
  });

  //Request Schedule
  $(".btn_calendar").click(function(){
    $(".div_calendar").removeClass("hide").addClass("show");
    $(".div_ListView").removeClass("show").addClass("hide");
    $(".div_requestSchedule").removeClass("show").addClass("hide");
  });




});