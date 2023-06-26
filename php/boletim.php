<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../fav/fav_cde.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/boletim.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Boletim</title>
</head>
<body>
    <header>
        <h1>CDE-Centro do Estudante</h1>
                <h2>Boletim Escolar</h2>
        <button onclick="window.location.replace('pp.php')" id="vol">&larr;</button>
    </header>
    <main>
        <table style="text-align: center;">
            <caption>Boletim Escolar</caption>
            <thead>
                <tr>
                    <th scope='col'>
                        Matérias
                    </th>
                    <th scope='col'>
                        1ºBim
                    </th>
                    <th scope='col'>
                        2ºBim
                    </th>
                    <th scope='col'>
                        3ºBim
                    </th>
                    <th scope='col'>
                        4ºBim
                    </th>
                    <th scope='col'>
                        MF
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $m = ["Matemática", "Português", "História", "Geografia", "Biologia", "Química", "Física", "Inglês", "Artes", "Filosofia", "Sociologia", "Ed. Física"];
        
                    for ($c = 0; $c < sizeof($m); $c++){
                        $tot = 0;
                        echo "<tr> <td>" . $m[$c]. "</td>";
                        for($d = 0; $d < 4; $d++){
                            $n = rand(4, 10);
                            echo "<td>" . $n . "</td>";
                            $tot += $n;
                        }
                        $a[] = $tot / 4;
                        echo "<td>" . $a[$c] . "</td></tr>";
                    }
                        $cont = 0;
                        foreach($a as $v){
                            if ($v < 5){
                                $cont += 1;
                            }
                        }
                        if ($cont >= 1 && $cont < 3){
                            $sit = "Recuperação";
                        }elseif($cont >= 3){
                            $sit = "Reprovado";
                        }else{
                            $sit = "Aprovado";
                        }
                        echo "</tbody><tfoot><tr><td colspan='5' scope='row'>Situação final</td><td>$sit</td></tr></tfoot>"
                       ?>  
        </table>
    </main>
    <footer>
        <p>&copy;TiagoCitrangulo | 2023<br><a href="mailto:tiagocitrangulo256@gmail.com">tiagocitrangulo256@gmail.com</a></p>
    </footer>
</body>
</html>