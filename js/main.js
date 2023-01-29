  // FUNCTION VALIDATION IF SET---------------------------------------------------------------------------------------------
  // debugger;
  function validateForm() {
    console.log("validateForm");
    var answer = document.getElementById("question1").value;
    if (answer == "") {
        document.getElementById("message").innerHTML = "Please fill in the answer";
        return false;
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


