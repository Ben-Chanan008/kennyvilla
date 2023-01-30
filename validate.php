<?php
$name = $email = $passcode = '';

?>

<script>
    const name = document.querySelector('#name');
    const password = document.querySelector('#password');
    const email = document.querySelector('#email');
    const rePassword = document.querySelector('#confirm_password');
    const msg = document.querySelector('.msg');
    const msg2 = document.querySelector('.msg2');
    const msg3 = document.querySelector('.msg3');
    const formGroup = document.querySelector('.my-form');
    formGroup.addEventListener('submit', validate)
    function validate(){
        if(name.value === '') {
            msg.innerHTML = 'Please fill in field';
        } else{
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS)
        }
        if(email.value === '') {
            msg.innerHTML = 'Please fill in field';
        } else{
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS)
        }
        if(rePassword.value !== password.value) {
            msg.innerHTML = 'Passwords do not match';
        } else {
            rePassword.style.backgroundColor = 'green';
            rePassword.style.color = '#fff';
        }
    }
</script>