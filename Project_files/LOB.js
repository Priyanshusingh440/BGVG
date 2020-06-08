console.log('LOB.js working')

let data = {}

let countries
const countrySelect = document.querySelector('#country')

fetch('https://www.bgvhwd.xyz/Project_files/API/country.php')
  .then(response => response.json())
  .then(data => {
    countries = data
    countries.map(v => {
      countrySelect.innerHTML += `<option value="${v.id}" class="bg-secondary text-light" >${v.country_name}</option>`
    })
  });

let stateName

const fetchStates = (e) => {
  data['country_id'] = e.target.value

  fetch("https://www.bgvhwd.xyz/Project_files/API/state.php", {
      method: 'POST',
      // body: JSON.stringify({"country_id": '101'}),
      body: JSON.stringify({
        "country_id": data['country_id']
      }),
    })
    .then(response => response.json())
    .then(data => {
      stateName = data
      setStateName()
    })
    .catch((error) => {
      console.error('Error:', error);
    });

}

let cityName

const fetchCites = (e) => {
  console.log('fetch service name')
  data['service_type_id'] = e.target.value
  console.log(data['service_type_id'])

  fetch("https://www.bgvhwd.xyz/Project_files/API/cities.php", {
      method: 'POST',
      body: JSON.stringify({
        "service_type_id": data['service_type_id']
      })
    })
    .then(response => response.json())
    .then(data => {
      cityName = data
      console.log('service names', cityName)
      setServiceName()
    })
    .catch((error) => {
      console.error('Error:', error);
    });

}

const stateSelect = document.querySelector("#state"),
  citySelect = document.querySelector("#city")

const setStateName = () => {
  console.log('stateName', stateName)
  citySelect.innerHTML = `<option selected="" class="bg-secondary text-light">Choose...</option>`
  stateSelect.innerHTML = `<option selected="" class="bg-secondary text-light">Choose...</option>`
  stateName.map(v => {
    stateSelect.innerHTML += `<option value="${v.id}" class="bg-secondary text-light" >${v.service_type}</option>`
  })
}

const setServiceName = () => {
  citySelect.innerHTML = `<option selected="" class="bg-secondary text-light">Choose...</option>`
  cityName.map(v => {
    citySelect.innerHTML += `<option value="${v.id}"  class="bg-secondary text-light" >${v.service_name}</option>`
  })
}

countrySelect.onchange = (e) => fetchStates(e)

stateSelect.onchange = (e) => fetchCites(e)

console.log('LOB.js working 2')

// submit data

const lobSubmit = document.querySelector('#ajax button[type="submit"]'),
  inputFields = document.querySelectorAll('#ajax input:not([type="radio"] )'),
  inputFieldsArray = [...inputFields],
  select = document.querySelectorAll('#ajax select'),
  selectArray = [...select]


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

const submit = (url) => {
  return e => {
    e.preventDefault()
    let run = true
    inputFieldsArray ? inputFieldsArray.map((value) => {
      if (run === true) {
        if (value.value.trim().length == 0) {
          alert('all fields are required')
          run = false
        }
        data[value.name] = value.value
      }
    }) : false
    selectArray ? selectArray.map(value => {
      console.log(value.value)
      if(run === true) {
        if (value.value == 0) {
          alert('all fields are required')
          run = false
        } else {
          data[value.name] = value.value
        }
      } else {
      }
    }) : false
    if (run === true) {
      sendRequest(url)
    }
    data = {}
  }
}

lobSubmit && lobSubmit.addEventListener('click', submit('API/LOB.php'))

console.log('LOB.js working all')