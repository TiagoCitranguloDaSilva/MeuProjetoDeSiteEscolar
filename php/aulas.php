<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../fav/fav_cde.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/aula.css">
    <title>Aulas</title>
</head>
<body> 
    <header>
        <button onclick="window.location.replace('pp.php')" id="vol">&larr;</button>
        <h1>CDE-Centro do Estudante</h1>
            <h2>Grade de Aulas</h2>
    </header>
    <section>
        <table>
            <?php
                $duplas = ['Matemática', 'Português', 'Filosofia', 'História', 'Geografia', 'Química', 'Biologia', 'Física', 'Sociologia', 'Inglês', 'Artes', 'Ed. física'];
                $unicas = ['Matemática', 'Matemática', 'Português', 'Português'];
                $extra = 'Extra';
                $dias = ['Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta'];
                echo "<thead>";
                echo "<tr>";
                for ($c = 0; $c < 8; $c++){
                    if($c == 0){
                        $a = "Dia";
                    }else{
                        $a = $c."ªaula";
                    }
                    echo "<th>$a</th>";
                }
                echo "</tr>";
                echo "</thead>";
                $n = rand(0, 4);
                echo "<tbody>";
                for ($e = 0; $e < 5; $e++){
                    echo "<tr>";
                    $numale = rand(1,7);
                    $numale = ($numale % 2 == 1) ? $numale : ++$numale;
                    $z = 0;
                    for($d = 0; $d < 8; $d++){
                        if($d == 0){
                            echo "<td>";
                            echo $dias[$e];
                            echo "</td>";
                        }else{
                            if ($n == $e){
                                echo "<td>";
                                echo "Extra";
                                echo "</td>";
                            }else{
                                if($numale == $d){
                                    echo "<td>";
                                    $dia = array_rand($unicas);
                                    echo $unicas[$dia];
                                    unset($unicas[$dia]);
                                    echo "</td>";
                                    continue;
                                }else{
                                    if($z == 0){
                                        $valale = array_rand($duplas);
                                        $bora = $duplas[$valale];
                                        unset($duplas[$valale]); 
                                        $z = 1;
                                    }else{
                                        echo "<td>";
                                        echo "$bora";
                                        echo "</td>";
                                        echo "<td>";
                                        echo "$bora";
                                        echo "</td>";
                                        $z = 0;
                                    }
                                    
                                }
                            }
                        }
                    }
                    echo "</tr>";
                }
                echo "</tbody>";
            ?>
        </table>
    </section>
    <footer>
        <p>&copy;TiagoCitrangulo | 2023<br><a href="mailto:tiagocitrangulo256@gmail.com">tiagocitrangulo256@gmail.com</a></p>
    </footer>
</body>
</html>