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



});