function togglePassword(inputId, element) {
    const passwordInput = document.getElementById(inputId);

    const eyeIcon = element.querySelector('.eye-icon');
    const eyeOffIcon = element.querySelector('.eye-off-icon');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        eyeIcon.style.display = 'none';
        eyeOffIcon.style.display = 'block';
    } else {
        passwordInput.type = 'password';
        eyeIcon.style.display = 'block';
        eyeOffIcon.style.display = 'none';
    }
}