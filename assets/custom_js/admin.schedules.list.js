
	$('#filter-approved').on('click', function(){
		table.columns().search( '' ).columns(4).search("approved", true, false, true).draw()
	})
	
	$('#filter-pending').on('click', function(){
		table.columns().search( '' ).columns(4).search("pending", true, false, true).draw()
	})
	
	$('#filter-today').on('click', function(){
		let today = new Date().toLocaleDateString()
		console.log(today)
		table.columns().search( '' ).columns(3).search('1/20/2019', true, false, true).draw()
	})
	
	$('#filter-all').on('click', function(){
		table.columns().search( '' ).draw()
	})

	$(document).on('click', '.btn-approve', function(){
		$('input[name="schedule_id"]').val($(this).data('schedid'))
		$('input[name="status_name"]').val('Approved')
	})

	$(document).on('click', '.btn-reject', function(){
		$('input[name="schedule_id"]').val($(this).data('schedid'))
		$('input[name="status_name"]').val('Rejected')
	})


