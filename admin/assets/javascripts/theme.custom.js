/* Add here all your JS customizations */
$("#reloader").click(function () {
	window.location.reload();
})


$('#datatable-default').dataTable({
	"pageLength": -1,
	"lengthMenu": [
		[10, 25, 50, -1],
		[10, 25, 50, "All"]
	]
});

$('.btn_gen_code').on('click', function () {
	var voters_reg_id = $(this).attr('id');
	var code_gen = Math.random().toString(36).substring(7);
	$.ajax({
		type: 'post',
		url: 'ajax.php',
		dataType: 'JSON',
		data: {
			voters_reg_id: voters_reg_id,
			code_gen: code_gen,
			generate_code: ''
		},
		success: function (response) {
			if (response.done === true) {
				new PNotify({
					title: 'Success',
					text: 'Voter can now vote',
					type: 'success'
				});

				$('#code_holder').text(code_gen);

			} else {

				new PNotify({
					title: 'Error',
					text: 'User Is Already Registered',
					type: 'error'
				});

			}
		}
	});

})