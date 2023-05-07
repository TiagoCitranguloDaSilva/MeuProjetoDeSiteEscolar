<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../fav/fav_cde.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/pp.css">
    <title>Home</title>
</head>
<body>
    <header>
        <!--<img src="../img/logo.png" alt="Um grande C azul usado como logo" id="logo">-->
        <?php
            $nome = isset($_POST['nome']) ? $_POST['nome'] : "Não Fornecido";
            $sobre = isset($_POST['sob']) ? $_POST['sob'] : "Não Fornecido";
            $ra = isset($_POST['ra']) ? $_POST['ra'] : "Não Encontrado";
            $sala = isset($_POST['class']) ? $_POST['class'] : "Não Fornecido";
            $em = isset($_POST['email']) ? $_POST['email'] : "Não Fornecido";
            $arq = fopen("../arquivos/dados.txt", 'w+');
            fwrite($arq, "$nome\n$sobre\n$ra\nClodovaldo\n$sala\n$em");
            fclose($arq);
        ?>
        <h1>CDE-Centro do Estudante</h1>
            <h2>Página Principal</h2>
        <nav>
            <ul>
                <li class="link"><a href="../html/mc.html" target="_self">Minha conta</a></li>
                <li class="link"><a href="../index.html">Sair</a></li>
                <li>
                    <img src="../img/sem_perfil_p.png" alt="Pequena foto de perfil padrão" id="img">
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <aside id="border">
                <h2 class="divisao">Outras opções</h2>
                <ul>
                    <li><a href="boletim.php">BOLETIM</a></li>
                    <li><a href="aulas.php">AULAS</a></li>
                    <li><a href="../html/ajuda.html">AJUDA</a></li>
                    <li><a href="../html/mr.html">MUDANÇAS RECENTES</a></li>
                    <li><a href="contato.php">FALE CONOSCO</a></li>
                </ul>
            </aside>
            <div id="dados">
                <h2 class="divisao">Minha ficha</h2>
                    <div id="foto"><img src="../img/sem_perfil_m.jpg" alt="Grande foto de perfil padrão"></div>
                    <div id="info">
                        <ul>
                            <?php
                                $a = file('../arquivos/dados.txt');
                                echo "<li>Nome: $a[0]</li>";
                                echo "<li>Sobrenome: $a[1]</li>";
                                echo "<li>RA: $a[2]</li>";
                                echo "<li>Escola: $a[3]</li>";
                                echo "<li>Sala: $a[4]</li>";
                                echo "<li>Email de contato: <a href='mailto: $a[5]'>$a[5]</a></li>";
                            ?>
                        </ul>
                    </div>
                    <div id="resto">
                        <hr>
                        <ul>
                            <li>Telefones para contato: </li>
                            <li><a href="tel:+55 19 3899<?php echo rand(100, 9999)?>">(19)3899-<?php echo rand(100, 9999)?></a></li>
                            <li><a href="tel:+55 19 9<?php echo rand(1000, 9999) . rand(100, 9999);?>">(19)9<?php echo rand(1000, 9999) . "-" . rand(100, 9999);?></a><p id="alert">*Os números mostrados acima são meramente ilustrativos!</p></li>
                        </ul>
                    </div>
                </div>
        </section>
    </main>
    <footer>
        <p>&copy;TiagoCitrangulo | 2023<br><a href="mailto:tiagocitrangulo256@gmail.com">tiagocitrangulo256@gmail.com</a></p>
    </footer>
</body>
</html>