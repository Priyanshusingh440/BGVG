
let data = {}

let clients
const clientName = document.querySelector('#ClintName')

fetch('https://www.bgvhwd.xyz/Project_files/API/viewclient.php')
.then(response => response.json())
.then(data => {
  clients = data
  // console.log('clients', clients)
    clients.map(v => {
      // code change
      clientName.innerHTML += `<option value="${v.id}" class="bg-secondary text-light" >${v.Client_Name}</option>`
    })
  });

// clientName.onchange = (e) => fetchService(e)


let countries
const countrySelect = document.querySelector('#localitydropdown')

fetch('https://www.bgvhwd.xyz/Project_files/API/country.php')
  .then(response => response.json())
  .then(data => {
    countries = data
    countries.mp(v => {
      countrySelect.innerHTML += `<option value="${v.id}" class="bg-secondary text-light" >${v.country_name}</option>`
    })
  });

let serviceType

const fetchService = (e) => {
  data['country_id'] = e.target.value

  fetch("https://www.bgvhwd.xyz/Project_files/API/servicetype.php", {
      method: 'POST',
      // body: JSON.stringify({"country_id": '101'}),
      body: JSON.stringify({
        "countryid": data['countryid']
      }),
    })
    .then(response => response.json())
    .then(data => {
      servicetype = data
      setServiceType()
    })
    .catch((error) => {
      console.error('Error:', error);
    });

}

let serviceName

const fetchServiceName = (e) => {
  console.log('fetch service name')
  data['service_type_id'] = e.target.value
  console.log(data['service_type_id'])

  fetch("https://www.bgvhwd.xyz/Project_files/API/servicename.php", {
      method: 'POST',
      body: JSON.stringify({
        "service_type_id": data['service_type_id']
      })
    })
    .then(response => response.json())
    .then(data => {
      serviceName = data
      console.log('service names', serviceName)
      setServiceName()
    })
    .catch((error) => {
      console.error('Error:', error);
    });

}

const serviceTypeSelect = document.querySelector("#select_service_type"),
  serviceNameSelect = document.querySelector("#select_service_name")

const setServiceType = () => {
  console.log('serviceType', serviceType)
  serviceNameSelect.innerHTML = `<option selected="" class="bg-secondary text-light">Choose...</option>`
  serviceTypeSelect.innerHTML = `<option selected="" class="bg-secondary text-light">Choose...</option>`
  serviceType.map(v => {
    serviceTypeSelect.innerHTML += `<option value="${v.id}" class="bg-secondary text-light" >${}</option>`
  })
}

const setServiceName = () => {
  serviceNameSelect.innerHTML = `<option selected="" class="bg-secondary text-light">Choose...</option>`
  serviceName.map(v => {
    serviceNameSelect.innerHTML += 
  })
}

countrySelect.onchange = (e) => fetchService(e)


serviceTypeSelect.onchange = (e) => fetchServiceName(e)


const assignSubmit = document.querySelector('#ajax button#assignSubmit'),
  inputFields = document.querySelectorAll('#ajax input:not([type="radio"] )'),
  inputFieldsArray = [...inputFields],

  select = document.querySelectorAll('#ajax select'),
  selectArray = [...select],
  inputCurrency = document.querySelector('#ajax select[name="currency"]')

let jsonData = {}

const sendRequest = (url) => {
  fetch(url, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(jsonData),
    })
    .then(response => response.json())
    .then(data => {
      console.log('Success:', data);
    })
    .catch((error) => {
      console.error('Error:', error);
    });
}

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
        jsonData[value.name] = value.value
      }
    }) : false
    inputRadiosArray ? inputRadiosArray.map((value) => {
      let checked = 0

      if (value.checked === true) {
        checked = 1
      }
      jsonData[value.name] = checked
    }) : false
    inputCheckboxArray ? inputCheckboxArray.map((value) => {
      let checked = 0

      if (value.checked = true) {
        checked = 1
      }
      jsonData[value.name] = checked
    }) : false
    selectArray ? selectArray.map(value => {
      jsonData[value.name] = value.value
    }) : false
    inputCurrency ? data["currency"] = inputCurrency.value : false
    if (run = true) {
      console.log(jsonData)
      sendRequest(url)
    }
    jsonData = {}
  }
}

assignSubmit && assignSubmit.addEventListener('click', submit('API/assignService.php'))

console.log('working all')