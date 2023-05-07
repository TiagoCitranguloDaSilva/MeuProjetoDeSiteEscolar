<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../fav/fav_cde.png" type="image/x-icon">
    <title>Minha conta</title>
    <script src="../js/script.js"></script>
</head>
<body>
    <button onclick="voltar()" id='vol'>&larr;</button>
    <header>
        <h1>CDE-Centro do Estudante</h1>
                <h2>Minha Conta</h2>
            
    </header>

    <section>
        <div id="hid">
            <form action="index.php" method="post" autocomplete="off">
                <table>
                    <tr>
                        <td>
                            <label for="nome">Diga seu nome: </label>
                        </td>
                        <td>
                            <input type="text" name="nome" id="nome" required placeholder="Primeiro nome..." maxlength="20">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="sob">Diga seu sobrenome: </label>
                        </td>
                        <td>
                            <input type="text" name="sob" id="sob" required placeholder="Segundo nome..." maxlength="100">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="ra">RA: </label>
                        </td>
                        <td>
                            <input type="text" name="ra" id="ra" required placeholder="Registro do aluno..." maxlength="20">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Forneça seu email: </label>
                        </td>
                        <td>
                            <input type="text" name="email" id="email" required placeholder="Email para contato..." maxlenth="20">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="class">Sala:</label></td>
                        <td class="sala">
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
            <p><input type="submit" value="Mudar" id="env"></p>
            <button onclick="div()" id="canc">Cancelar</button>
        </form>
        
        </div>
        <div id="exp">
            <p>Este é o lugar para mudar suas informações caso estejam inconsistentes, se isso acontecer, clique no botão a seguir: </p>
            <button onclick="div()" id="btn">Alterar informações</button>
        </div>
    </section>
    <footer>
        <p>&copy;TiagoCitrangulo | 2023<br><a href="mailto:tiagocitrangulo256@gmail.com">tiagocitrangulo256@gmail.com</a></p>
    </footer>
</body>
</html>