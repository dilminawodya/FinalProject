// JavaScript for switching between login and register forms
const loginForm = document.querySelector('.form-box.login');
const registerForm = document.querySelector('.form-box.register');
const registerLink = document.querySelector('.register-link');
const loginLink = document.querySelector('.login-link');

// Display login form first
loginForm.style.display = 'block';
registerForm.style.display = 'none';

// Switch to register form when "Register" link is clicked
registerLink.addEventListener('click', () => {
    loginForm.style.display = 'none';
    registerForm.style.display = 'block';
});

// Switch back to login form when "Login" link is clicked
loginLink.addEventListener('click', () => {
    loginForm.style.display = 'block';
    registerForm.style.display = 'none';
});
