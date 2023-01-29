  // FUNCTION VALIDATION IF SET---------------------------------------------------------------------------------------------
  // debugger;

function validateForm() {
    var isValid = true;
    var errorMessage = document.getElementById("errorMessage");
    var radioButtons = document.getElementsByName("question1");
    var selected = false;
    for (var i = 0; i < radioButtons.length; i++) {
      if (radioButtons[i].checked) {
        selected = true;
        break;
      }
    }
    if (!selected) {
      errorMessage.innerHTML = "<h3 class='animate__animated animate__lightSpeedInRight animate__slow'>So Smart, But No Answer Chosen? Come On: Chose You Smartypants!</h3>";
      isValid = false;
    } else {
      errorMessage.innerHTML = "";
    }
    return isValid;
  }


// FUNCTION DELETE ALL COOKIES ---------------------------------------------------------------------------------------------

function deleteAllCookies() {
    const cookies = document.cookie.split(";");
  
    for (let i = 0; i < cookies.length; i++) {
        const cookie = cookies[i];
        const eqPos = cookie.indexOf("=");
        const name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
    }
    window.location.href = "index.php";
  
  }


