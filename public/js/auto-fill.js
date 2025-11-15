document.addEventListener('DOMContentLoaded', () => {
    const email = 'test@example.com';
    const password = 'test@password';
    const fillButton = document.getElementById('fill-demo-btn');

    const emailInput = document.querySelector('input[name="email"]');
    const passwordInput = document.querySelector('input[name="password"]');

    fillButton.addEventListener('click', () => {
        emailInput.value = email
        passwordInput.value = password

    })
});