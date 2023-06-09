<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./fav/fav_cde.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Entrar</title>
    <?php

        $a = 1;
        function teste($nome){
            global $a;
            if(!isset($_COOKIE[$nome])){
                $a = 0;
            }
        }
        teste('nome');
        teste('sobre');
        teste('ra');
        teste('sala');
        teste('em');

        if($a == 1){
            header('Location: php/pp.php');
        }

    ?>
</head>
<body>
    <header>
        <h1>CDE-Centro do Estudante</h1>
            <h2>Entrar</h2>
    </header>
    <main>
        <form action="./php/cookie.php" method="post" autocomplete="off">
            <table>
                <tr>
                    <th colspan="2" class="esquerda">Dados</th>
                </tr>
                <tr>
                    <td>
                        <label for="nome" class="esquerda">Nome:</label>
                    </td>
                    <td>
                        <input type="text" name="nome" id="nome" required placeholder="Primeiro nome..." maxlength="20">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="sob" class="esquerda">Sobrenome:</label>
                    </td>
                    <td>
                        <input type="text" name="sob" id="sob" required placeholder="Segundo nome..." maxlength="100">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="ra" class="esquerda">RA:</label>
                    </td>
                    <td>
                        <input type="text" name="ra" id="ra" required placeholder="Registro do aluno..." maxlength="20">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pass" class="esquerda">Senha:</label>
                    </td>
                    <td>
                        <input type="text" name="pass" id="pass" required placeholder="Senha...">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email" class="esquerda">Email: </label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" required placeholder="Email para contato..." maxlength="100">
                    </td>
                </tr>
                <tr>
                    <td>
                            <label for="class" class="esquerda">Sala:</label>
                    </td>
                    <td>
                        <select name="class" id="class">
                            <optgroup label="1º Ano">
                                <option value="1º Ano A">1º Ano A</option>
                                <option value="1º Ano B">1º Ano B</option>
                                <option value="1º Ano C">1º Ano C</option>
                            </optgroup>
                            <optgroup label="2º Ano">
                                <option value="2º Ano A">2º Ano A</option>
                                <option value="2º Ano B">2º Ano B</option>
                                <option value="2º Ano C">2º Ano C</option>
                            </optgroup>
                            <optgroup label="3º Ano">
                                <option value="3º Ano A">3º Ano A</option>
                                <option value="3º Ano B">3º Ano B</option>
                                <option value="3º Ano C">3º Ano C</option>
                            </optgroup>
                        </select>
                    </td>
                </tr>
            </table>
            <section><input type="submit" value="Entrar" id="btn"><section>
        </form>
    </main>
    <footer>
        <p>&copy;TiagoCitrangulo | 2023<br><a href="mailto:tiagocitrangulo256@gmail.com">tiagocitrangulo256@gmail.com</a></p>
    </footer>
</body>
</html>