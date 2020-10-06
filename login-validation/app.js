var $form = document.querySelector('.form');
var $error = document.querySelector('.error');
var $inputFields = document.querySelectorAll('input-field');
var $email = document.getElementById('email');
var $password = document.getElementById('password');

function addError(message) {
	$error.innerHTML = message;
	$error.style.display = 'block';
}

function removeError() {
	$error.innerHTML = '';
	$error.style.display = 'hidden';
}

function validate(event) {
	// evet.preventDefault() untuk tidak menjalankan fungsi form apabila di submit, yaitu mengirim data ke 'action'.
	event.preventDefault()
	$error.style.display = 'none';

	if ($email.value !== 'admin@vsga.com' || $password.value !== 'password') {
			addError('Email atau Password Salah');
	} else {
		removeError();
		alert('Anda berhasil login!');

	}
}

$form.addEventListener('submit', validate);