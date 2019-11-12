

// funtions for posting Data

$(document).ready(function(){
	$("#message").hide();

	

});



//function getValues() {
	// let url = 'pdo.php';

	// fetch(url, {
	//   method: 'GET', // or 'PUT'
	//   //body: JSON.stringify(data), // data can be `string` or {object}!
	// 	}).then(res => res.json())
	// 	.then(response => alert('Success:', JSON.stringify(response)))
	// 	.catch(error => console.error('Error:', error));
   	
 //   	fetch('pdo.php?_page=home')
	// .then(response => response.json())
	// .then(data => {
	 // document.getElementById("message").innerHTML = data;
	//   console.log(data) // Prints result from `response.json()` in getRequest
	// })
	// .catch(error => console.error(error))
		

//}


function processform(){
	

	$( "#formforprofile" ).submit(function( event ) {

	let	data = $("#formforprofile").serializeArray();
    
   let ajaxReq = 

 	 $.ajax({
 	 	url: "./postapi.php?page=profile",
 	 	type: "post",
 	 	data : data

 	 });
    
    ajaxReq.done(function(res, statusText,callback){
    	console.log(`${res} and ${statusText}`);
    	$("#message").show();
        $("#formforprofile").slideUp(100);
    	$("#message").fadeOut(4000);
        $("#formforprofile").show(100);

    });

    ajaxReq.fail(function(){
    	console.log("sum tin went wrog")
    });
        event.preventDefault();
    });

}


function addfooditem(){
	

	$( "#addfooditem" ).submit(function( event ) {

	let	data = $("#addfooditem").serializeArray();
    
   let ajaxReq = 

 	 $.ajax({
 	 	url: "./postapi.php?page=addfooditem",
 	 	type: "post",
 	 	data : data

 	 });
    
    ajaxReq.done(function(res, statusText,callback){
    	//console.log(`${res} and ${statusText}`);
    	if (res == "exit") {
    		alert("hi")
    		return res;
    	}
    });

    ajaxReq.fail(function(){
    	console.log("sum tin went wrog")
    });
        event.preventDefault();
    });

}

function updatesnacksanddricks(){

	$( "#updatesandd" ).submit(function( event ) {

	let	data = $("#updatesandd").serializeArray();
    
   let ajaxReq = 

 	 $.ajax({
 	 	url: "./postapi.php?page=updatesnacksanddrinks",
 	 	type: "post",
 	 	data : data

 	 });
    
    console.log(data)

    ajaxReq.done(function(res, statusText,callback){
    	console.log(`${res} and ${statusText}`);
    });

    ajaxReq.fail(function(){
    	console.log("sum tin went wrog")
    });
        event.preventDefault();
    });

}



function userMessage(){

    $( "#usermessage" ).submit(function( event ) {

    let data = $("#usermessage").serializeArray();
    
   let ajaxReq = 

     $.ajax({
        url: "./admin/postapi.php?page=usermessage",
        type: "post",
        data : data

     });
    
    //console.log(data)

    ajaxReq.done(function(res, statusText,callback){
        console.log(`${res} and ${statusText}`);
            $("#usermessagesuccess").show();
             $("#usermessagesuccess").fadeOut(5000);
    });

    ajaxReq.fail(function(){
        console.log("sum tin went wrog")
    });
        event.preventDefault();
    });


}

// asynchronous javascript call (to get data from select class) 
    // function usersmessage() {
    //    fetch('./getapi.php?page=usersmessage')
    //     .then(response => response.json())
    //     .then(data => {
    //        //console.log(Object.values(data));
    //        let messageArray = Object.values(data);

    //        listItems = messageArray.reduce((result,item) => {

    //             result += `<td>${item}</td>`;

    //             return result;

    //        });

    //        console.log(listItems);

    //        // ulElement.forEach(ul => {
    //        //      messageArray.forEach(li => {
    //        //         let liValues = document.querySelectorAll("#td");
    //        //         liValues.innerHTML = li.users_name;
    //        //         //ul.appendChild(liValues);
    //        //      })
    //        // })
    //     })
    // }
    
    // usersmessage()

    function countregisterusers() 
    {
        fetch('./getapi.php?page=countregisterusers')
        .then(response => response.json())
        .then(data => {
            //console.log(`registered_users ${data}`);
            let count = Object.values(data);
            for (x in count) {
                console.log(count[x][0]);
                 document.getElementById("registered_users").innerHTML = count[x][0];
            }
           
        })
    }
    
    countregisterusers();

    function countusersmessage() {
       fetch('./getapi.php?page=countusersmessage')
        .then(response => response.json())
        .then(data => {
             let count = Object.values(data);
            for (x in count) {
                console.log(count[x][0]);
                 document.getElementById("users_message").innerHTML = count[x][0];
            }
        })
    }
   
    countusersmessage()



