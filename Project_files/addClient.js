function sendJSON(){ 
	// Declaring variables 

 let Client_Name=document.querySelector('#Client_Name');	
 let Client_Code=document.querySelector('#Client_Code');	 
 let Client_SPOC=document.querySelector('##Client_Code');	 
 let Country=document.querySelector('#Country');
 let State=document.querySelector('#State');
 let City=document.querySelector('#City');
 let Zip_Code=document.querySelector('#Zip_Code');
 let Contact_Number=document.querySelector('#Client_Code');	 
 let Email=document.querySelector('#City'); 
 let App_Response_Time=document.querySelector('#App_Response_Time'); 

 
	// Create XHR object
	let xhr = new XMLHttpRequest(); 
	 

	
	xhr.open("POST",'API/addClient.php', true); 

	
	xhr.setRequestHeader("Content-Type", "application/json"); 
    
        xhr.onreadystatechange = function () { 
				if (xhr.readyState === 4 && xhr.status === 200) { 
               
					// Print received data from server 
					result.innerHTML = this.responseText; 

				} 
			}; 
 
var data = JSON.stringify({ "Client_Name": Client_Name.value, "Client_Code": Client_Code.value,
"Client_SPOC": Client_SPOC.value, "Country": Country.value,  "State": State.value, "City": City.value,  
"Zip_Code": Zip_Code.value,"Contact_Number": Contact_Number.value "Email": Email.value,  "App_Response_Time": App_Response_Time.value,

     }); 

//           console.log(data);

			// Sending data with the request 
			xhr.send(data); 
//			 console.log(data);

		} 

    