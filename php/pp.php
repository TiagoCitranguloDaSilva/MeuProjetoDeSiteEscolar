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
    <?php
        function mostrar($frase, $id){
            if(isset($_COOKIE[$id])){
                if($id == 'em'){
                    return "<a href='mailto: $_COOKIE[$id]'>$_COOKIE[$id]</a>";
                }else{
                    return "$frase: $_COOKIE[$id]";
                }
            }else{
                echo "<script>window.location.replace('../');</script>";
            }
        }
    ?>
    <header>
        <!--<img src="../img/logo.png" alt="Um grande C azul usado como logo" id="logo">-->
        <h1>CDE-Centro do Estudante</h1>
            <h2>Página Principal</h2>
        <nav>
            <ul>
                <li class="link"><a href="../html/mc.html" target="_self">Minha conta</a></li>
                <li class="link"><button onclick="window.location.replace('sair.php')">Sair</button></li>
                <li>
                    <?php

                            if(file_exists('../img/FotoUsuario.jpg')){
                                echo "<img src='../img/FotoUsuario.jpg' alt='Pequena foto do Usuario' width='40px' height='40px' id='img'>";
                            }else{
                                echo "<img src='../img/sem_perfil_p.png' alt='Pequena foto de perfil padrão' width='40px' height='40px' id='img'>";
                            }

                        ?>
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
                <div id="header">
                    <h2 class="divisao">Minha ficha</h2>
                </div>
                <div id="cont">
                    <div id="foto">
                        <?php

                            if(file_exists('../img/FotoUsuario.jpg')){
                                echo "<img src='../img/FotoUsuario.jpg' alt='Foto do Usuario' width='170px' height='249px'>";
                            }else{
                                echo "<img src='../img/sem_perfil_m.jpg' alt='Grande foto de perfil padrão' width='170px' height='249px'>";
                            }

                        ?>
                    </div>
                    <div id="info">
                        <ul>
                            <?php
                                echo "<li>". mostrar('Nome', 'nome') ."</li>";
                                echo "<li>". mostrar('Sobrenome', 'sobre') ."</li>";
                                echo "<li>" . mostrar('RA', 'ra') . "</li>";
                                echo "<li>Escola: Albertinado</li>";
                                echo "<li>" . mostrar('Sala', 'sala') . "</li>";
                            ?>
                        </ul>
                    </div>
                </div>
                <div id="rodape">
                    <div id="resto">
                        <hr>
                        <ul>
                            <li>Contato: </li>
                            <?php echo "<li>" . mostrar('', 'em') . "</li>"; ?>
                            <li><a href="tel:+55 19 3899<?php echo rand(100, 9999)?>">(19)3899-<?php echo rand(100, 9999)?></a></li>
                            <li><a href="tel:+55 19 9<?php echo rand(1000, 9999) . rand(100, 9999);?>">(19)9<?php echo rand(1000, 9999) . "-" . rand(100, 9999);?></a><p id="alert">*Os números mostrados acima são meramente ilustrativos!</p></li>
                        </ul>
                    </div>
                </div>
                </div>
        </section>
    </main>
    <footer>
        <p>&copy;TiagoCitrangulo | 2023<br><a href="mailto:tiagocitrangulo256@gmail.com">tiagocitrangulo256@gmail.com</a></p>
    </footer>
</body>
</html>