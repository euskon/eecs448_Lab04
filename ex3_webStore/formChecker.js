// formChecker.js
// Validates the input from the customer before submitting
// - Quantities >= 0, cannot be blank
// - User name must be in the form of an email address (name@domain.com)
// - password field cannot be blank
// - must pick a shipping option
// We do not have a database to check against, the password can by anything
function validateCheckout(){
  if(validatePwLength() && validateRadios())
  {
    return true;
  }
  return false;
}
function validatePwLength(){
  let pwInput = document.getElementById("pw").value;
  if(pwInput.length < 1){
    alert('password empty');
    return false;
  }
  return true;
}
function validateRadios(){
  let shipRadios = document.getElementsByName('shippingInput');
  let boolRadioChecked = false;
  for(let i of shipRadios){
    if(i.checked){
      boolRadioChecked = true;
    }
  }
  return boolRadioChecked;
}
