// Get form and form fields
const form = document.getElementById('signup-form');
const fullNameField = document.getElementById('typeFullName');
const emailField = document.getElementById('typeEmail');
const passwordField = document.getElementById('typePassword');
const confirmPasswordField = document.getElementById('typeConfirmPassword');
const genderField = document.getElementById('genderSelect');
const ruralRadio = document.getElementById('ruralRadio');
const professionalRadio = document.getElementById('professionalRadio');
const countryField = document.getElementById('country');
const cityField = document.getElementById('city');
const pincodeField = document.getElementById('pincode');

// Validate form fields on submit
form.addEventListener('submit', (e) => {
  // Check if full name field is not empty
  if (fullNameField.value.trim() === '') {
    e.preventDefault();
    alert('Full name field is required');
  }

  // Check if email field is not empty and is a valid email address
  if (emailField.value.trim() === '') {
    e.preventDefault();
    alert('Email field is required');
  } else if (!isValidEmail(emailField.value.trim())) {
    e.preventDefault();
    alert('Invalid email address');
  }

  // Check if password field is not empty and has at least 8 characters
  if (passwordField.value.trim() === '') {
    e.preventDefault();
    alert('Password field is required');
  } else if (passwordField.value.trim().length < 8) {
    e.preventDefault();
    alert('Password must have at least 8 characters');
  }

  // Check if confirm password field matches password field
  if (confirmPasswordField.value.trim() !== passwordField.value.trim()) {
    e.preventDefault();
    alert('Passwords do not match');
  }

  // Check if gender field is selected
  if (genderField.value === '') {
    e.preventDefault();
    alert('Gender field is required');
  }

  // Check if user type radio button is selected
  if (!ruralRadio.checked && !professionalRadio.checked) {
    e.preventDefault();
    alert('User type field is required');
  }

  // Check if country field is not empty
  if (countryField.value.trim() === '') {
    e.preventDefault();
    alert('Country field is required');
  }

  // Check if city field is not empty
  if (cityField.value.trim() === '') {
    e.preventDefault();
    alert('City field is required');
  }

  // Check if pincode field is not empty
  if (pincodeField.value.trim() === '') {
    e.preventDefault();
    alert('Pincode field is required');
  }
});

// Helper function to validate email address
function isValidEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}
