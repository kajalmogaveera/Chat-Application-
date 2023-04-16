const form = document.querySelector('#registration-form');
const firstNameInput = document.querySelector('#firstName');
const unameInput = document.querySelector('#uname');
const passwordInput = document.querySelector('#password');
const firstNameError = document.querySelector('#firstName-error');
const unameError = document.querySelector('#uname-error');
const passwordError = document.querySelector('#password-error');

form.addEventListener('submit', function(event) {
  // prevent form submission
  event.preventDefault();
  
  // reset error messages
  firstNameError.textContent = '';
  unameError.textContent = '';
  passwordError.textContent = '';
  
   // validate fullname
  if (!firstNameInput.value.trim()) {
    firstNameError.textContent = 'Fullname is required';
    firstNameInput.focus();
    return;
  }

  // validate username
  if (!unameInput.value.trim()) {
    unameError.textContent = 'Username is required';
    unameInput.focus();
    return;
  }
  
  // validate password
  if (!passwordInput.value.trim()) {
    passwordError.textContent = 'Password is required';
    passwordInput.focus();
    return;
  }
 }
  
  // registration successful
  alert('Registration successful!');
  
  // clear form inputs
  form.reset();
});

