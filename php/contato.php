<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../fav/fav_cde.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/contato.css">
    <title>Contato</title>
</head>
<body>
    <?php

        function mostrar($id){
            if(isset($_COOKIE[$id])){
                return $_COOKIE[$id];
            }else{
                echo "<script>window.location.replace('../');</script>";
            }
        }

    ?>
    <header>
        <button onclick="window.location.replace('pp.php')" id="vol">&larr;</button>
        <h1>CDE-Centro do Estudante</h1>
            <h2>Entrar em Contato</h2>
    </header>
    <section>
        <div>
            <form action="../php/contatof.php" method="post" autocomplete="off">
                <h2 id="dif">Dados: </h2>
                <fieldset>
                    <table>
                    <?php
                        echo "<tr>
                            <td class='la'><label for='nome'>Digite seu nome: </label></td>
                            <td><input type='text' name='nome' id='nome' required placeholder='Primeiro nome...' maxlength='20' value='".mostrar('nome')."'></td>
                        </tr>
                        <tr>
                            <td class='la'>
                                <label for='sob'>Sobrenome: </label>
                            </td>
                            <td>
                                <input type='text' name='sob' id ='sob' placeholder='Segundo nome...' maxlength='100' required value='".mostrar('sobre')."'>
                            </td>
                        </tr>
                        <tr>
                            <td class='la'>
                                <label for='em'>Email para contato: </label>
                            </td>
                            <td>
                                <input type='email' name='em' id='em' required placeholder='Email para contato...' maxlength='100' value='".mostrar('em')."'>
                            </td>
                        </tr>";
                        ?>
                        <tr>
                            <td class="la"><label for="tc">Telefone para contato: </label></td>
                            <td><input type="tel" name="tc" id="tc" required placeholder="Telefone para contato..." maxlength="15"></td>
                        </tr>
                        <tr>
                            <td class="la"><label for="ex">Motivo para contato: </label></td>
                            <td><textarea name="ex" id="ex" cols="30" rows="5" required placeholder="Motivo..."></textarea></td>
                        </tr>
                        
                    </table>
                    <input type="submit" value="Enviar" id="btn">
                </fieldset>
            </form>
        </div>
    </section>
    <footer>
        <p>&copy;TiagoCitrangulo | 2023<br><a href="mailto:tiagocitrangulo256@gmail.com">tiagocitrangulo256@gmail.com</a></p>
    </footer>
</body>
</html>