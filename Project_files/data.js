console.log('working')

const addClientSubmit = document.querySelector('#ajax button#add-client'),
  inputFields = document.querySelectorAll('#ajax input:not([type="radio"] )'),
  inputFieldsArray = [...inputFields],
  inputRadios = document.querySelectorAll('#ajax input[type="radio"]'),
  inputRadiosArray = [...inputRadios],
  inputCheckbox = document.querySelectorAll('#ajax input[type="checkbox"]'),
  inputCheckboxArray = [...inputCheckbox],
  select = document.querySelectorAll('#ajax select'),
  selectArray = [...select],
  inputCurrency = document.querySelector('#ajax select[name="currency"]')

  /* Get Country*/
  let dropdown = document.getElementById('locality-dropdown');
  dropdown.length = 0;
  
  let defaultOption = document.createElement('option');
  defaultOption.text = 'Select Country';
  defaultOption.value='0';

  dropdown.add(defaultOption);
  dropdown.selectedIndex = 0;
  
  const country = 'API/country.php';
  
  fetch(country)  
    .then(  
      function(response) {  
        if (response.status !== 200) {  
          console.warn('Looks like there was a problem. Status Code: ' + 
            response.status);  
          return;  
        }
  
        // Examine the text in the response  
        response.json().then(function(data) {  
          let option;
      
          for (let i = 0; i < data.length; i++) {
            option = document.createElement('option');
              option.text = daa[i].country_name;
              option.value = data[i].id;
              dropdown.add(option);
          }    
        });  
      }  
    )  
    .catch(function(err) {  
      console.error('Fetch Error -', err);  
    });
  
    let servicetype = document.getElementById('selectstate');
    servicetype.length = 0;
  
  let defaultservicetype = document.createElement('option');
  defaultservicetype.text = 'Select State';
  defaultservicetype.value="0";
  
  servicetype.add(defaultservicetype);
  servicetype.selectedIndex = 0;
  
  function getservice(x){
      const id={
          country_id:x,
      };
      fetch('',{
          method:'post',
          body:JSON.stringify(id),
          headers:{
              'Content-type':'application/json'
          }
      }).then(function(response){
          return response.text();
      }).then(function(text){
      //	console.log(text);
          
          let stat=JSON.parse(text);
          var wrap = document.getElementById('select_state')
          while(wrap.firstChild) wrap.removeChild(wrap.firstChild)
          let option;
      
          for (let i = 0; i < stat.length; i++) {
            option = document.createElement('option');
              option.text = stat[i].service_type;
              option.value = stat[i].id;
              servicetype.add(option);
          }
             
      }).catch(function(error){
          console.error(error);
      })
      
  }
  
  let serviame = document.getElementById('select_city');
  servicename.length = 1;
  
  let defaultservicename = document.createElement('option');
  defaultservicename.text = 'Select City';
  defaultservicename.value='0';
  
  servicename.add(defaultservicename);
  servicename.selectedIndex = 1;
  
  function getservicename(x){
      const id={
          service_type_id:x,
      };
      fetch('./API/cities.php',{
          method:'post',
          body:JSON.stringify(id),
          headers:{
              'Content-type':'application/json'
          }
      }).then(function(){
         
      }).then(function(text){
         // console.log(text);
          
          let stat=JSON.parse(text);
          var wrap = document.getElementById('select_city')
          while(wrap.firstChild) wrap.removeChild(wrap.firstChild)
          let option;
      
          for (let i = 1; i < 100; i++) {
            option = document.createElement('option');
              option.text = stat[i].service_name;
              option.value = stat[i].id;
              servicename.add(option);
          }
             
      }).catch(function(error){
          console.error(error);
      })
      
  }
  
let data = {}

const sendRequest = (url) => { 
  fetch(url, {
    method: 'POST',
    body: JSON.stringify(data),
  })
  .then(response => response.text())
  .then(data => {
    if (url === "https://www.bgvhwd.xyz/Project_files/API/addClient.php" && data.trim() == 'sucess') {
      alert('data submitted successfully')
      window.location.href = "modifyClient.php"
    }

    console.log('Success:', data);
  })
  .catch((error) => {
    console.error('Error:', error);
  });
}


// sendRequest("./API/addClient.php")
// sendRequest("https://www.bgvhwd.xyz/Project_files/API/addClient.php")
// sendRequest2("https://www.bgvhwd.xyz/Project_files/API/servicename.php")

const submit = (url) => {
  return e => {
    e.preventDefault()
    let run = true
    inputFieldsArray ? inputFieldsArray.map((value) => {
      if (run === true) {
        if (value.value.trim().length == 0) {
          console.log(value)
          alert('all fields are required')
          run = false
        }
        data[value.name] = value.value
      }
    }) : false
    inputRadiosArray ? inputRadiosArray.map((value) => {
      let checked = 0

      if (value.checked === true) {
        checked = 1
      }
      data[value.name] = checked
    }) : false
    inputCheckboxArray ? inputCheckboxArray.map((value) => {
      let checked = 0

      if (value.checked === true) {
        checked = 1
      }
      data[value.name] = checked
    }) : false
    selectArray ? selectArray.map(value => {
      data[value.name] = value.value
    }) : false
    inputCurrency ? data["currency"] = inputCurrency.value : false
    if (run === true) {
      sendRequest(url)
    }
    data = {}
  }
}


// addClientSubmit && addClientSubmit.addEventListener('click', submit('API/addClient.php'))
addClientSubmit && addClientSubmit.addEventListener('click', submit('https://www.bgvhwd.xyz/Project_files/API/addClient.php'))
console.log('working 2');



console.log('working 3');

// when add user go to addClient through edit
if (window.location.pathname === "/task/views/addClient.html") {
  var url = new URL(window.location.href);
  let id = url.searchParams.get('id')
  if (id) {
    clientEditInfo = JSON.parse(localStorage.getItem("data"))
    
    // automatic fill up input fields
    inputFieldsArray.map((inputField) => {
      inputField.value = clientEditInfo[inputField.name]
    })
    inputRadiosArray.map((inputRadio) => {
      inputRadio.checked = (clientEditInfo[inputRadio.name] == 1) ? true : false
    })
    inputCurrency.value = clientEditInfo[inputCurrency.name]
    addClientSubmit.innerHTML = "Update"
    data[id] = id
  }
}


const addBankDetails = document.querySelector('#ajax button#add-bank-details')
addBankDetails && addBankDetails.addEventListener('click', submit("API/addBankDetails.php"))

console.log("working 4");

console.log('working all');


  // const submitBankDetails = (e) => {
  //   e.preventDefault()
  
  //   let run = true
  //   inputFieldsArray.map((value) => {
  //     if (run === true) {
  //       if (value.value.trim().length == 0) {
  //         alert('all fields are required')
  //         run = false
  //       }
  //       // data.push({
  //       //   [value.name]: value.value
  //       // })
  //       data[value.name] = value.value
  //     }
  //   })
  //   if (run === true) {
  //     sendRequest('APi/addBankDetails.php')
  //   }
  
  //   data = {}
  // }