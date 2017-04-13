$(function(){

	//**$("#save_draft").change(function(){
	//**	var text = '';
	//**	if($(this).is(":checked")){
	//**		text = 'Guardar';
	//**	}else{
	//**		text = 'Publicar';
	//**	}
	//**	$("#save_article_btn").attr("value",text);
	//**});


	$("#new_user").click(function(){
		setTimeout(function(){
			$("#txtUsua").focus();
		},500);
	});


});

function sendEmail(){
	$.ajax({
		url:"email.php",
		method:"POST",
		dataType:"json",
		data:{
			name:$("#txtNombre").val(),
			email:$("#txtEmail").val(),
			phone:$("#txtNum").val(),
			message:$("#txtMens").val()
		},
		success:function(resp){

			$.each(fields,function(idx,f_id){
				$("#"+f_id).val("");
			});

			alert(resp.message);
		}

	});


	var fields = ["txtNombre","txtEmail","txtNum","txtMens"];
	$("#cancel_contact").click(function(){	
		$.each(fields,function(idx,f_id){
			$("#"+f_id).val("");
		});
	});

}

function clearForm(){
	var fields = ["txtNombre", "txtApellido", ,"txtNom", "txtCel", "txtTel", "txtCorreo", "txtHor", "txtEsp", "txtUsua", "txtCont", "txtConCon", "txtEmail","txtNum","txtMens"];
	$("#cancel_contact").click(function(){	
		$.each(fields,function(idx,f_id){
			$("#"+f_id).val("");
		});
	});
}



function confirmDelete(id) {
        if (confirm("Estás seguro de deseas eliminar permanentemente este articulo?")) {
            location.href = "app/delete_proyecto.php?id="+id
        }
    }


function confirmArchived(id) {
        if (confirm("Estás seguro de deseas archivar este articulo?")) {
            location.href = "app/archived_proyecto.php?id="+id
        }
    }


function confirmUnarchived(id) {
        if (confirm("Estás seguro de deseas desarchivar este articulo?")) {
            location.href = "app/unarchived_proyecto.php?id="+id
        }
    }


function confirmPublic(id) {
        if (confirm("Estás seguro de deseas publicar este articulo?")) {
            location.href = "app/public_proyecto.php?id="+id
        }
    }

    function buscarPorPalabras(){
    	var str = $("#super_search_input").val();
    	$("#super_filter_val").val(str);
    	$("#super_filter_form").submit();
    }