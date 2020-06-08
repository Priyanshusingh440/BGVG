const addModifyUserSubmit = document.querySelector('#ajax button[type="submit"]'),
  inputFields = document.querySelectorAll('#ajax input:not([type="radio"] )'),
  inputFieldsArray = [...inputFields],
  select = document.querySelectorAll('#ajax select'),
  selectArray = [...select]


let data = {}

const sendRequest = (url) => {
  fetch(url, {
    method: 'POST',
    body: JSON.stringify(data),
  })
  .then(response => response.text())
  .then(data => {
  })
  .catch((error) => {
    console.error('Error:', error);
  });
}

function validateEmail(email) {
  const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase()) 
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
      if(run === true) {
        if (value.value == 0) {
          alert('all fields are required')
          run = false
        } else {
          data[value.name] = value.value
        }
      }
    }) : false

    if (run === true) {
      let passwordEmail = document.querySelector("#passwordMailTo").value
      if(!validateEmail(passwordEmail)) {
        alert("Please enter a valid email")
        run = false
      }
    }

    if (run === true) {
      sendRequest(url)
    }
    data = {}
  }
}

addModifyUserSubmit && addModifyUserSubmit.addEventListener('click', submit('API/addUser.php'))


console.log('add modify user working all')