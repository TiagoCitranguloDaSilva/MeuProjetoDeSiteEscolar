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
            <thead>
                <tr>
                    <th colspan="6">Boletim Escolar</th>
                </tr>
                <tr>
                    <th>
                        Matérias
                    </th>
                    <th>
                        1ºBim
                    </th>
                    <th>
                        2ºBim
                    </th>
                    <th>
                        3ºBim
                    </th>
                    <th>
                        4ºBim
                    </th>
                    <th>
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
                        echo "<tfoot><tr><td colspan='5'>Situação final</td><td>$sit</td></tr></tfoot>"
                       ?>
            </tbody>
        </table>
    </main>
    <footer>
        <p>&copy;TiagoCitrangulo | 2023<br><a href="mailto:tiagocitrangulo256@gmail.com">tiagocitrangulo256@gmail.com</a></p>
    </footer>
</body>
</html>