function validateForm(event) {
    event.preventDefault(); // Prevent form submission for validation
    let isValid = true;

    // Clear previous error messages
    document.querySelectorAll('.error').forEach(error => {
        error.textContent = '';
    });

    // Validate Name
    const name = document.getElementById('name').value.trim();
    if (!name) {
        document.getElementById('nameError').textContent = 'Name must not be empty.';
        isValid = false;
    }

    // Validate Email
    const email = document.getElementById('email').value.trim();
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!email.match(emailPattern)) {
        document.getElementById('emailError').textContent = 'Enter a valid email address.';
        isValid = false;
    }

    // Validate Phone Number
    const phone = document.getElementById('phone').value.trim();
    const phonePattern = /^[0-9]+$/;
    if (!phone.match(phonePattern)) {
        document.getElementById('phoneError').textContent = 'Phone number must contain only digits.';
        isValid = false;
    }

    if (isValid) {
        alert('Form submitted successfully!');
    }
}
