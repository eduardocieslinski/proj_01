<?php

class PopupLogin {
    public function exibirPopup($mensagem) {
        echo "<script>alert('$mensagem');</script>";
    }

    public function verificarCredenciais($usuario, $senha) {
        if ($usuario !== 'usuario_correto' || $senha !== 'senha_correta') {
            $this->exibirPopup('Usuário ou senha incorretos. Tente novamente.');
        }
    }

    public function exibirFormulario() {
        echo '
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Popup de Usuário ou Senha Incorreto</title>
        </head>
        <body>
            <!-- Formulário de login -->
            <form action="" method="post">
                <label for="usuario">Usuário:</label>
                <input type="text" id="usuario" name="usuario" required><br><br>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required><br><br>
                <input type="submit" value="Entrar">
            </form>
        </body>
        </html>
        ';
    }
}

// Uso da classe
$popup = new PopupLogin();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $popup->verificarCredenciais($usuario, $senha);
} else {
    $popup->exibirFormulario();
}

?>