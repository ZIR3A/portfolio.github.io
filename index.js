function validateForm() {
  var name = document.forms["myForm"]["fname"].value;
  var email = document.forms["myForm"]["femail"].value;
  var message = document.forms["myForm"]["fmessage"].value;
  if (name == "") {
    document.getElementById("error-name").innerHTML = "Name is empty *";
    return false;
  }
  if (email == "") {
    document.getElementById("error-email").innerHTML = "Email is empty *";
    return false;
  }
  if (message == "") {
    document.getElementById("error-message").innerHTML = "Message is empty *";
    return false;
  }
}
