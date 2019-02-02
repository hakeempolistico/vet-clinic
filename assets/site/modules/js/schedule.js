 
function loadDataTableListView(){

  $.ajax({
        url: "schedule/ajaxGetListView", 
        type: 'post',
        dataType: "json",
        data: {date: date},
        success: function(rs) {
          var ls = '';

          $('#tbl_viewSchedule').DataTable().clear().destroy();

          $.each(rs, function (key, val) {
            ls += '<tr>';
            ls += '    <td>'+val.full_date+'</td>';
            ls += '    <td>'+val.subject+'</td>';
            ls += '    <td>'+val.pet_name+'</td>';
            ls += '    <td>'+val.description+'</td>';
            ls += '    <td>'+val.status_name+'</td>';
            ls += '    <td class="text-center"><button type="button" class="btn btn-warning btn-sm btn-action-view" data-id="'+val.schedule_id+'" ><i class="mdi mdi-magnify"></i></button></td>';
            ls += '</tr>';
          });

          $('.tbl_body_viewSchedule').html(ls);
          $('#tbl_viewSchedule').DataTable();
        }
  });
}

function viewSchedulebyID(schedule_id){
   $.ajax({
        url: "schedule/ajaxViewSchedulebyID", 
        type: 'post',
        dataType: "json",
        data: {schedule_id: schedule_id},
        success: function(rs) {
          $.each(rs, function (key, val) {
            $('.lbl-description').text(val.description);
            $('.lbl-full_date').text(val.full_date);
            $('.lbl-pet_name').text(val.pet_name);
            $('.lbl-subject').text(val.subject);
            $('.lbl-status_name').text(val.status_name);
          });
        }
  });
}


 $(document).ready(function() {


   
    // Disabled past dates
    var date = new Date();
    date.setDate(date.getDate());

    $('#datepicker').datepicker({ 
        startDate: date
    });


    //Load data table 
     loadDataTableListView();

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
    $('#btn-cancel').attr('data-id', id);
    $('#btn-delete').attr('data-id', id);
    $('#schedule_view_modal').modal('show');   
    viewSchedulebyID(id);
  });

  
  $( ".tbl_body_viewSchedule" ).delegate( ".btn-action-view", "click", function() {
    var id = $(this).attr('data-id');
    $('#btn-cancel').attr('data-id', id);
    $('#btn-delete').attr('data-id', id);
    $('#schedule_view_modal').modal('show');  
    viewSchedulebyID(id); 
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

     loadDataTableListView();
  });

  //Request Schedule
  $(".btn_calendar").click(function(){
    $(".div_calendar").removeClass("hide").addClass("show");
    $(".div_ListView").removeClass("show").addClass("hide");
    $(".div_requestSchedule").removeClass("show").addClass("hide");
  }); 


  //Load Time 
$('#datepicker').on('change', function () {
  date = $('#datepicker').val();
  if (date) {
     $.ajax({
        url: "schedule/ajaxGetTimeAvailable", 
        type: 'post',
        dataType: "json",
        data: {date: date},
        success: function(rs) {
          console.log(rs);
          var ls = '';

          $.each(rs, function (key, val) {
            ls += '<option value = "'+val.value+'">'+val.name+'</option>';
          });

          $('#time').html(ls);

        }
      });
   }
  });

//Delete
 $("#btn-delete").click(function(){
     var schedule_id = $(this).attr('data-id');
      $.ajax({
          url: "schedule/ajaxDelete", 
          type: 'post',
          dataType: "json",
          data: {schedule_id: schedule_id},
          success: function(rs) {
            alert('Successfully Deleted')
          }
    });
  }); 

 //Delete
 $("#btn-cancel").click(function(){
     var schedule_id = $(this).attr('data-id');
     alert(schedule_id);
      $.ajax({
          url: "schedule/ajaxCancel", 
          type: 'post',
          dataType: "json",
          data: {schedule_id: schedule_id},
          success: function(rs) {
            alert('Successfully Cancel')
          }
    });
  }); 



});