console.log('mandatoryDocuments.php working')

const inputFields = document.querySelectorAll('#ajax input:not([type="radio"] )'),
  inputFieldsArray = [...inputFields],
  mandatoryDocumentSubmit = document.querySelector("#ajax button[type='submit']")

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
    if (run === true) {
      sendRequest(url)
    }
    data = {}
  }
}

mandatoryDocumentSubmit && mandatoryDocumentSubmit.addEventListener('click', submit('API/mandatoryDocuments.php'))


console.log('mandatoryDocuments.php working all')
