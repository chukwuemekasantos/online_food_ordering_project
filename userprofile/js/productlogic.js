$(document).ready(function(){
		$("#pid").prop('disabled',true);
		$("#pname").prop('disabled',true);
		$("#pprice").prop('disabled',true);
		$("select").prop('disabled',true);
		$("#cancel").hide();
		
	});

	function edit(){
			$("#pname").prop('disabled',false);
			$("#pprice").prop('disabled',false);
			$("select").prop('disabled',false);
			$("#edit").hide(500);
			$("#cancel").show(500);

		}
	function cancel(){
		$("input").prop('disabled',true);
		$("select").prop('disabled',true);
		$("#cancel").hide();
		$("#edit").show(500);
		$("#pname").val($("#productname").val());
		$("#pprice").val($("#productprice").val());
		$("#pcategory").val($("#productcategory").val()).change();
		$("#pstatus").val($("#productstatus").val()).change();
	}