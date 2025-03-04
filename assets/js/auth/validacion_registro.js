const $form = document.querySelector("form"),
    $inputs = document.querySelectorAll("input[required]");

const cancelarBoton = () => {
    const $btnSend = $form.querySelector("button");
    $btnSend.disabled = true;
    console.log($btnSend);
}

const activarBoton = () => {
    const $btnSend = $form.querySelector("button");
    $btnSend.disabled = false;
    console.log($btnSend);
}

const removeErrorMenssage = (name) => {
    const $errorSpan = document.querySelector(`span#${name}`);

    if ($errorSpan.classList.contains("contact-form-error")) {
        $errorSpan.classList.remove("show-error");

        // Después de la animación de salida, ocultamos el mensaje
        setTimeout(() => {
            $errorSpan.classList.remove("contact-form-error");
            $errorSpan.classList.add("none");
        }, 300);
    }

}
const addErrorMenssage = (name) => {
    const $errorSpan = document.querySelector(`span#${name}`);

    $errorSpan.classList.remove("none");

    // La animación de entrada con "show-error"
    setTimeout(() => {
        $errorSpan.classList.add("contact-form-error", "show-error");
    }, 100);
}

$inputs.forEach(($input) => {
    const $span = document.createElement("span");
    $span.id = $input.name;
    $span.textContent = $input.title;
    $span.classList.add("contact-form-error", "none");

    $input.insertAdjacentElement("afterend", $span);
});

$form.addEventListener("input", (e) => {
    const { name, value } = e.target;

    if (name === "username") {
        const pattern = /^[a-zA-Z0-9 _-]+$/;
        if (value === "" || pattern.test(value)) {
            removeErrorMenssage(name);
        } else {
            addErrorMenssage(name);
        }
    }

    if (name === "email") {
        const pattern = /^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9\-]+(\.[a-z0-9\-]+)*(\.[a-z]{2,15})$/;
        if (value === "" || pattern.test(value)) {
            removeErrorMenssage(name);
        } else {
            addErrorMenssage(name);
        }
    }

    if (name === "password") {
        if (value.length > 18 || value.length <= 0) {
            addErrorMenssage(name);
        } else {
            console.log("Contraseña válida.");
            removeErrorMenssage(name);
        }
    }

    if (name === "confirm-password") {
        const passwordValue = $form.password.value;
        if (value !== passwordValue) {
            addErrorMenssage(name)
            cancelarBoton();
            
        } else {
            removeErrorMenssage(name);
            activarBoton();
        }
    }
});