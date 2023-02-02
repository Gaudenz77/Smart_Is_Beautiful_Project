  // FUNCTION VALIDATION IF SET---------------------------------------------------------------------------------------------
 
function validateForm() {
   // debugger;
    var isValid = true;
    var errorMessage = document.getElementById("errorMessage");
    var radioButtons = document.getElementsByName("$answerColumnName");
    var selected = false;
    for (var i = 0; i < radioButtons.length; i++) {
      if (radioButtons[i].checked) {
        selected = true;
        break;
      }
    }
    if (!selected) {
      errorMessage.innerHTML = "<p class='animate__animated animate__lightSpeedInRight animate__slow'>So Smart, But No Answer Chosen? Come On: Chose You Smartypants!</p>";
      isValid = false;
    } else {
      errorMessage.innerHTML = "";
    }
    return isValid;
  }

// FUNCTION SEARCHBAR QUERY ON NEW PAGE RESULT ---------------------------------------------------------------------------------------------

function submitForm() {
  const searchInput = document.querySelector("#search-input").value;
  const searchSelect = document.querySelector("#search-select").value;
  let searchURL = "";
  
  if (searchSelect === "google") {
    searchURL = `https://www.google.com/search?q=${searchInput}`;
  } else if (searchSelect === "wikipedia") {
    searchURL = `https://en.wikipedia.org/wiki/${searchInput}`;
  }
  
  window.open(searchURL, "_blank");
}

// FUNCTION SEARCHBAR QUERY ONCLICK HELPER ---------------------------------------------------------------------------------------------

function helpNeededQuestionmark() {
  // debugger;

  let btn = document.getElementById("toggleBtn");
  let text = document.getElementById("text");
  if (text.style.display === "none") {
    text.style.display = "block";
    btn.style.display = "none";
  } else {
    text.style.display = "none";
    btn.style.display = "block";
  }
}

// FUNCTION DELETE ALL COOKIES ---------------------------------------------------------------------------------------------

/* function deleteAllCookies() {
    const cookies = document.cookie.split(";");
  
    for (let i = 0; i < cookies.length; i++) {
        const cookie = cookies[i];
        const eqPos = cookie.indexOf("=");
        const name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
    }
    window.location.href = "index.php";
  
  } */


