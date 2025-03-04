const btnShowPassword = document.querySelectorAll('.showPassword');
const inputPassword = document.querySelector('.inputPassword');
const inputPasswordConfirm = document.querySelector('.inputPasswordConfirm');

const cambiarIcono = (icon) => {
    switch(icon.className) {
        case "fas fa-eye showPassword":
            icon.className = "fas fa-eye-slash showPassword";
        break;
        case "fas fa-eye-slash showPassword":
            icon.className = "fas fa-eye showPassword";
        break;
    }
}

const cambiarTipoInput = (input) => {
    if(input.type === "password") { input.type = "text"; }else{ input.type = "password";}
}

btnShowPassword.forEach((element) => {
    element.addEventListener("click", ()=> {
        cambiarIcono(element);
        let atributeIcon = element.getAttribute("data-inputContraseña");
        if(atributeIcon == "password") {
            cambiarTipoInput(inputPassword);
        }else{
            cambiarTipoInput(inputPasswordConfirm);
        }
    })
})
