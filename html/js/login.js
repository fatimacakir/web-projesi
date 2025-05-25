function validateLoginForm() {
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (!email || !password) {
    alert('Kullanıcı adı ve şifre boş geçilemez.');
    return false;
  }

  if (!emailRegex.test(email)) {
    alert('Geçerli bir e-posta adresi giriniz.');
    return false;
  }

  return true;
}
