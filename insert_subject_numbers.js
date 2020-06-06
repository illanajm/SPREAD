
$(document).ready(function(){
	$('#boton').on("click",function(){
		var subject_code = $('#subject_code').val();
		var subject_name = $('#subject_name').val();
		var mobile = $('#mobile').val();

		if(subject_code == "" || subject_name == "" || mobile == ""){
			alert("Empty Set");
		}else{
			$.ajax({
				type:"POST",
				url:"insert_subject_number.php",
				data:{
					inside:true,
					subject_code:subject_code,
					subject_name:subject_name,
					mobile:mobile
				},
				success:function(data){
					if(data){
						alert("success");
					}
				}
			});
		}
	});
});