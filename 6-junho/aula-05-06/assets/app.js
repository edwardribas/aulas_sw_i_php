(() => {

    const inputPassword = document.querySelector('#password'),
          passwordBox = document.querySelector('main form span'),
          submitBtn = document.querySelector('input[type=submit]'),
          eyeIcon = document.querySelector('fieldset i')
    ;

    let seePassword = false;

    const toggleElements = () => {
        eyeIcon.classList = seePassword == true ? 'fa-solid fa-eye' : 'fa-solid fa-eye-slash';
        passwordBox.classList.toggle('active', seePassword);
        submitBtn.style.transform = seePassword ? "translateY(0)" : "translateY(-10px)";
        eyeIcon.style.color = seePassword ? '#7e99ff' : '#bebebe';
    }

    const toggleVisibility = () => {
        seePassword = !seePassword;
        toggleElements()
        setTimeout(() => {
            passwordBox.textContent = seePassword ? inputPassword.value : "";
        }, 70)
    }
    
    eyeIcon.onclick = () => {
        inputPassword.focus();
        if (inputPassword.value.length == 0) return;
        toggleVisibility()
    };

    inputPassword.oninput = () => {
        if (inputPassword.value.length === 0 && seePassword) {
            toggleVisibility()
        }
        if (seePassword) passwordBox.textContent = inputPassword.value;
    }



})()