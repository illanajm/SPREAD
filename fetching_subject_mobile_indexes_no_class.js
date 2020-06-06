$(document).ready(function(){
    
	
	var dataTable = $('#user_data').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"fetch_subject_no_class.php",
			type:"POST"
		},
		"columnDefs":[
			{
				"targets":[0, 3, 4],
				"orderable":false,
			},
		],

	});

		$(document).on('submit', '#user_form', function(event){
		event.preventDefault();
		var mobile = $('#mobile').val();
		var subject_code = $('#subject_code').val();
		
		 if(mobile != '' && subject_code != '')
		{
			$.ajax({
				url:"fetch_text_no_class.php",
				method:'POST',
				data:new FormData(this),
				contentType:false,
				processData:false,
				success:function(data)
				{
					alert(data);
					$('#user_form')[0].reset();
					$('#userModal').modal('hide');
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			alert("Both Fields are Required");
		}
	});
$(document).on('click', '.update', function(){
		var user_id = $(this).attr("id");
		$.ajax({
			url:"fetch_update_subject.php",
			method:"POST",
			data:{user_id:user_id},
			dataType:"json",
			success:function(data)
			{
				$('#userModal').modal('show');
				$('#mobile').val(data.mobile);
				$('#subject_code').val(data.subject_code);
				$('.modal-title').text("Subject");
                $('#user_id').val(user_id);
				
				$('#action').val("SEND");
				$('#operation').val("Edit");
              
			}
		})
	})
	
	$(document).on('click', '.delete', function(){
		var user_id = $(this).attr("id");
		if(confirm("Are you sure you want to delete this?"))
		{
			$.ajax({
				url:"fetch_delete.php",
				method:"POST",
				data:{user_id:user_id},
				success:function(data)
				{
					alert(data);
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			return false;	
		}
	});
	
	
	
});