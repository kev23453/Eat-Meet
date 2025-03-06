<?php

class cookies {
    // creacion de las cookies de usuario
    public function createUserCookies($usuario) {
        setcookie('id', $usuario , time() + 60*60*12, '/');
    }
}

?>