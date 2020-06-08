console.log('working')

  let dropdown2 = document.getElementById('Client Name');
  dropdown2.length = 0;
  
  let defaultOption2 = document.createElement('option');
  defaultOption2.text = 'Select Name';
  defaultOption2.value='0';

  dropdown2.add(defaultOption2);
  dropdown2.selectedIndex = 0;
  
  const Client_Name = 'https://www.bgvhwd.xyz/Project_files/API/viewclient.php';
  
  fetch(Client_Name)  
    .then(  
      function(response) {
      console.log("hi");  
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
              option.text = data[i].Client_Name;
              option.value = data[i].Id;
              dropdown2.add(option);
          }    
        });  
      }  
    )  
    .catch(function(err) {  
      console.error('Fetch Error -', err);  
    });


  /* Get Country*/
  let dropdown = document.getElementById('locality-dropdown');
  dropdown.length = 0;
  
  let defaultOption = document.createElement('option');
  defaultOption.text = 'Select Country';
  defaultOption.value='0';

  dropdown.add(defaultOption);
  dropdown.selectedIndex = 0;
  
  const country = 'https://www.bgvhwd.xyz/Project_files/API/country.php';
  
  fetch(country)  
    .then(  
      function(response) {
      console.log("hi");  
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
              option.text = data[i].country_name;
              option.value = data[i].id;
              dropdown.add(option);
          }    
        });  
      }  
    )  
    .catch(function(err) {  
      console.error('Fetch Error -', err);  
    });
    

    let servicetype = document.getElementById('serviceType');
    servicetype.length = 0;
  
  let defaultservicetype = document.createElement('option');
  defaultservicetype.text = 'Select Service Type';
  defaultservicetype.value="0";
  
  servicetype.add(defaultservicetype);
  servicetype.selectedIndex = 0;

  service="https://www.bgvhwd.xyz/Project_files/API/servicetype.php";
  
  function getservice(x){
    console.log(x);
      const id={
          country_id:x,
      };
      fetch(service,{
          method:'post',
          body:JSON.stringify(id)
      }).then(function(response){
        console.log(response);
          return response.text();
      }).then(function(text){
      console.log(text);
          
          let stat=JSON.parse(text);
          var wrap = document.getElementById('serviceType')
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

  let servicename = document.getElementById('serviceName');
  servicename.length = 0;
  
  let defaultservicename = document.createElement('option');
  defaultservicename.text = 'Select Service Name';
  defaultservicename.value='0';
  
  servicename.add(defaultservicename);
  servicename.selectedIndex = 0;
  
  function getservicename(x){
      const id={
          service_type_id:x,
      };
      fetch('https://www.bgvhwd.xyz/Project_files/API/servicename.php',{
          method:'post',
          body:JSON.stringify(id)
      }).then(function(response){
          return response.text();
      }).then(function(text){
         // console.log(text);
          
          let stat=JSON.parse(text);
          var wrap = document.getElementById('serviceName')
          while(wrap.firstChild) wrap.removeChild(wrap.firstChild)
          let option;
      
          for (let i = 0; i < stat.length; i++) {
            option = document.createElement('option');
              option.text = stat[i].service_name;
              option.value = stat[i].id;
              servicename.add(option);
          }
             
      }).catch(function(error){
          console.error(error);
      })
      
  }