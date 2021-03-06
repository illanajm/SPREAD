$(document).ready(function(){
    
	
	var dataTable = $('#user_data').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"admin_fetch.php",
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
		var department = $('#department').val();
		var firstname = $('#firstname').val();
		var lastname = $('#lastname').val();
		var address = $('#address').val();
		var username = $('#username').val();
	
		
		 if(department != '' && firstname != '' && lastname != '' && address != '' && username != '')
		{
			$.ajax({
				url:"admin_insert.php",
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
			url:"admin_update.php",
			method:"POST",
			data:{user_id:user_id},
			dataType:"json",
			success:function(data)
			{
				$('#userModal').modal('show');
				$('#department').val(data.department);
				$('#firstname').val(data.firstname);
				$('#lastname').val(data.lastname);
				$('#address').val(data.address);
				$('#username').val(data.username);
				$('.modal-title').text("Instructor's Info");
                $('#user_id').val(user_id);
				
				$('#action').val("Edit");
				$('#operation').val("Edit");
              
			}
		})
	})
	
	$(document).on('click', '.delete', function(){
		var user_id = $(this).attr("id");
		if(confirm("Are you sure you want to delete this?"))
		{
			$.ajax({
				url:"admin_delete.php",
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