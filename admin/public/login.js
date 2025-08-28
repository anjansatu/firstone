const form = document.getElementById('login-form');
if (form) {
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    window.location.href = '/dashboard';
  });
}
