console.log('working')
const clientCode = document.querySelector('#ClientCode'),
  inputState = document.querySelector('#inputState')

let modifyClientData

// live search
const getModifyClientData = (d) => {
  // debouncing
  let timer
  return e => {
    clearTimeout(timer)
    timer = setTimeout(() => {
      let lowerCaseClientCode = clientCode.value.toLowerCase()
      let lowerCaseClientName = inputState.value.toLowerCase()
      let newData
      newData = modifyClientData.filter(v => {
        let clientCodeMatch = v['ClientCode'].toLowerCase().search(lowerCaseClientCode) == 0 
        let clientNameMatch = v['ClientName'].toLowerCase().search(lowerCaseClientName) == 0
        return clientCodeMatch && clientNameMatch
      })

      updateModifyClientData(newData)
    }, d)
  }
}

fetch('https://www.bgvhwd.xyz/Project_files/API/viewcliet.php')
  .then(response => response.json())
  .then(data => {
    modifyClientData = data
    updateModifyClientData(modifyClientData)
  })
  .catch((error) => {
    console.error('Error:', error);
  });

// getModifyClientData(0)
clientCode && clientCode.addEventListener('keyup', getModifyClientData(0))
inputState && inputState.addEventListener('keyup', getModifyClientData(0))

const tbody = document.querySelector('#table')

const updateModifyClientData = (d) => {
  tbody ? tbody.innerHTML = '' : false
  d.map((value, i) => {
    tbody ? tbody.innerHTML += `<tr>
    <td>
      ${i + 1}
    </td>
    <td>
      ${value["Client_Name"]}
    </td>
    <td>
      ${value["Client_Code"]}
    </td>
    <td>
      ${value["Client_SPOC"]}
    </td>
    <td>
      ${value["Live_DateDate"]}
    </td>
    <td class="text-primary">
      <ul style="list-style: none;">
        <li class="nav-item dropdown">
          <a
            class="nav-link"
            href="javascript:;"
            id="navbarDropdownProfile"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            <i class="material-icons">person</i>
            <p class="d-lg-none d-md-block">
              Account
            </p>
            <div class="ripple-container"></div
          ></a>
          <div
            class="dropdown-menu dropdown-menu-left"
            aria-labelledby="navbarDropdownProfile"
          >
            <a class="dropdown-item" href="#">View</a>
            <a class="dropdown-item block" href="#" id="${value.Id}">Block</a>
            <!-- <div class="dropdown-divider"></div> -->
            <a
              id="${value.Id}"
              data-internal-reference-id="${value.Internal_Reference_ID}"
              class="dropdown-item add-bank-details"
              href="./bankDetails.html"
              >Add bank details</a
            >
            <div class="dropdown-divider"></div>
            <a
              id="${value.Id}"
              class="dropdown-item edit"
              href="./addClient.html"
              >Edit</a
            >
            <a class="dropdown-item delete" href="#" id="${value.Id}">Delete</a>
          </div>
        </li>
      </ul>
    </td>
  </tr>` : false
  })
}
// updateModifyClientData()

console.log('working 2')

// do things when clicked on action menu
// const tbody = document.querySelector('#table-body')

let clientEditInfo

let data = {}

const sendRequest = (url) => { 
  fetch(url, {
    method: 'POST',
    body: JSON.stringify(data),
  }
    }

    console.log('Success:', data);
  })
  .catch((error) => {
    console.error('Error:', error);
  });
}

tbody ? tbody.onclick = (e) => {
  if (e.target.classList.contains('add-bank-details')) {
    e.preventDefault()
    clientEditInfo = modifyClientData.find(client => client.Id == e.target.id)
    localStorage.setItem("data", JSON.stringify(clientEditInfo))
    internalReferenceId = e.target.getAttribute("data-internal-reference-id")
    window.location.href = `bankDetails.html?id=${e.target.id}&internal-reference-id=${internalReferenceId}  }
  if (e.target.classList.contains('delete')) {
    e.preventDefault()
    data["Id"] = e.target.id
    data["action"] = "delete"
    sendRequest("API/modifyClient.php")

  }
  if (e.target..contains("block")) {
    e.preventDefault()

    data["Id"] = e.target.id 

    if (e.target.innerHTML === "Unblock") {
      e.target.innerHTML = "Block"
      data['block'] = 0
      // data[0].block = 0
    } else {
      e.target.innerHTML = "Unblock"
      data['block'] = 1

      // data[0].block = 1
    }
    sendRequest("API/modifyClient.php")
  }
  if (e.target.classList.contains('edit')) {
    e.preventDefault()    
    clientEditInfo = modifyClientData.find(client => client.Id == e.target.id)
    localStorage.setItem("data", JSON.stringify(clientEditInfo))
    window.location.href = `addClient.html?id=${\}`
  }
} : alse


console.log('working all')