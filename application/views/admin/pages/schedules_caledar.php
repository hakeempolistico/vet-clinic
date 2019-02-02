
<style type="text/css">
    .fc-event-title{
      padding: 100% 10% !important;
      color: white;
    }  
</style>

<!-- full calendar -->
<link href="<?= base_url('assets/site/') ?>plugins/full-calendar/fullcalendar.css " rel="stylesheet">

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Filter By</h3>  
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <a class="btn btn-app" id="filter-all">
            <i class="fa fa-calendar text-info"></i> All
          </a>
          <a class="btn btn-app" id="filter-approved">
            <i class="fa fa-check-circle-o text-success"></i> Approved
          </a>
          <a class="btn btn-app" id="filter-pending">
            <i class="fa fa-spinner text-warning"></i> Pending
          </a>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Calendar</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

            <div class="allCalendar">
              <div id='allCalendar'></div>

              <div style='clear:both'></div>
            </div>

            <div class="approvedCalendar">
              <div id='approvedCalendar'></div>

              <div style='clear:both'></div>
            </div>

            <div class="pendingCalendar">
              <div id='pendingCalendar'></div>

              <div style='clear:both'></div>
            </div>

        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
<!-- /.content -->

<!-- Modals -->
<?php $this->load->view('admin/modals/schedule_details') ?>


<!-- Scripts -->

<!-- Full Calendar -->
<script src='<?= base_url('assets/site/') ?>plugins/full-calendar/fullcalendar.js'></script>
<script src='<?= base_url('assets/site/') ?>plugins/full-calendar/jquery-ui.custom.min.js'></script>

<script src="<?= base_url('assets/custom_js/admin.schedule.calendar.js') ?>"></script>
