$(document).ready(function(){
	$('#button').on("click",function(){
		var username = $('#username').val();
		var password = $('#password').val();

		if(username == "" || password == ""){
			alert("Invalid! Empty Field");
		}else{
			$.ajax({
				type:"POST",
				url:"admin_index_fetch_login.php",
				data:{
					fetch:true,
					username:username,
					password,password
				},

				success:function(data){
					if(data){
					
					}
				}
			});
		}
	});
});