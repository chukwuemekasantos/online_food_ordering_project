

// funtions for posting Data

$(document).ready(function(){
	$("#message").hide();

	

});



// function getValues() {
// 	let url = 'pdo.php';

// 	fetch(url, {
// 	  method: 'GET', // or 'PUT'
// 	  //body: JSON.stringify(data), // data can be `string` or {object}!
// 		}).then(res => res.json())
// 		.then(response => alert('Success:', JSON.stringify(response)))
// 		.catch(error => console.error('Error:', error));
   	
//    	fetch('pdo.php?_page=home')
// 	.then(response => response.json())
// 	.then(data => {
// 	 document.getElementById("message").innerHTML = data;
// 	  console.log(data) // Prints result from `response.json()` in getRequest
// 	})
// 	.catch(error => console.error(error))
		

// }


function updateUserData(){
	

	$( "#userDataUpdate" ).submit(function( event ) {

	let	data = $("#userDataUpdate").serializeArray();

   let ajaxReq = 

 	 $.ajax({
 	 	url: "./postapi.php?page=updateUsers",
 	 	type: "post",
 	 	data : data

 	 });
    
    ajaxReq.done(function(res, statusText,callback){
    	//console.log(`${res} and ${statusText}`);
    	$("#message").show();
        $("#message").fadeOut(5000);
    });

    ajaxReq.fail(function(){
    	console.log("sum tin went wrog")
    });
        event.preventDefault();
    });

}







// funtions for geting Data



