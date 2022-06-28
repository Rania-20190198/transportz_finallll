const password1El = document.getElementById('password1');
const password2El = document.getElementById('password2');
let errorMsg1 = document.getElementById("error-msg1");
let icon1 = document.getElementById("icon1");
let passwordsMatch = false;

// Check to see if passwords match
function check(){
if (password1El.value === password2El.value) {
  passwordsMatch = true;
  icon1.innerHTML = '<i class="fas fa-check-circle"></i>';
  icon1.style.color = '#2ecc71';
  errorMsg1.style.display = 'none';
  password1El.style.borderColor = 'green';
  password2El.style.borderColor = 'green';
  return true;
} 
else {
  passwordsMatch = false;
  password1El.style.borderColor = 'red';
  password2El.style.borderColor = 'red';
  icon1.innerHTML = '<i class="fas fa-exclamation-circle"></i>';
  icon1.style.color = '#ff2851';
  errorMsg1.style.display = 'block';
  return false;
}
}