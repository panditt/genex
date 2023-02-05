function vali() {
  let x = document.forms["reg"]["fpas"].value;
  let y = document.forms["reg"]["cpas"].value;
  if (x != y) {
    alert("Password did not match with confirm password");
    return false;
  }
  else
	  return true;
}