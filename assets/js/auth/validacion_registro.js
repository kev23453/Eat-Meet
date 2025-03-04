const $form = document.querySelector("form"),
    $inputs = document.querySelectorAll("input[required]");

const cancelarBoton = () => {
    const $btnSend = $form.querySelector("button");
    $btnSend.disabled = true;
}

const activarBoton = () => {
    const $btnSend = $form.querySelector("button");
    $btnSend.disabled = false;
}

$inputs.forEach(($input) => {
    const $span = document.createElement("span");
    $span.id = $input.name;
    $span.textContent = $input.title;
    // $span.classList.add("contact-form-error", "none"); // Descomentar cuando haya estilos.
    $input.insertAdjacentElement("afterend", $span);
});

$form.addEventListener("input", (e) => {
    const { name, value } = e.target;

    if (name === "username") {
        const pattern = /^[a-zA-Z0-9 _-]+$/;
        if (value === "" || pattern.test(value)) {
            console.log("Nombre de usuario válido.");
        } else {
            console.log(`Error: La cadena "${value}" es inválida.`);
        }
    }

    if (name === "email") {
        const pattern = /^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9\-]+(\.[a-z0-9\-]+)*(\.[a-z]{2,15})$/;
        if (value === "" || pattern.test(value)) {
            console.log("Email válido.");
        } else {
            console.log("Email inválido.");
        }
    }

    if (name === "password") {
        if (value.length > 18 || value.length <= 0) {
            console.log("ERROR: La contraseña debe tener entre 1 y 18 caracteres.");
        } else {
            console.log("Contraseña válida.");
        }
    }

    if (name === "confirm-password") {
        const passwordValue = $form.password.value;
        if (value !== passwordValue) {
            console.log("Error: Las contraseñas no coinciden.");
            cancelarBoton();
            
        } else {
            console.log("Las contraseñas coinciden.");
            activarBoton();
        }
    }
});
