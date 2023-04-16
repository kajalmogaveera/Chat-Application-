// get the login form element
const loginForm = document.querySelector('form');

// add event listener to the login form submit button
loginForm.addEventListener('submit', (event) => {
  event.preventDefault(); // prevent the form from submitting

  // get the input fields from the login form
  const usernameInput = loginForm.querySelector('#uname');
  const passwordInput = loginForm.querySelector('#password');

  // validate the input fields
  if (usernameInput.value.trim() === '') {
    alert('Please enter your Username');
    usernameInput.focus();
    return;
  }

  if (passwordInput.value.trim() === '') {
    alert('Please enter your Password');
    passwordInput.focus();
    return;
  }

  // if the input fields are valid, log in the user
  login(usernameInput.value, passwordInput.value);
});

// function to log in the user
function login(username, password) {
  // make an API call to validate the user's credentials
  fetch('/api/login', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({
      username: username,
      password: password
    })
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {
      // if the user is authenticated, redirect to the chat page
      window.location.href = '/chat';
    } else {
      alert('Invalid username or password');
    }
  })
  .catch(error => {
    console.error(error);
    alert('An error occurred while logging in. Please try again later.');
  });
}
