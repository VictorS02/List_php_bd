<?php 
    $host            = 'localhost';
    $user            = 'root';
    $password        = '';
    $name            = 'atv_prt_042_bd';
    $connection      = mysqli_connect($host, $user, $password, $name) or die("Unable connecting to MySQL Server!");
    $nome            = $_POST['nome']; 
    $idade           = $_POST['idade']; 
    $insert          = "INSERT INTO teste1(nome, idade) VALUES ('$nome', '$idade')";
    $commit          = mysqli_query($connection, $insert) or die("Error commiting!");
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Exercício 2-0
        </title>
    </head>

    <body>
        <table>
            <tr>
                <td>
                    <b>
                        TestID
                    </b>
                </td>

                <td width="20">
                    &nbsp;
                </td>

                <td>
                    <b>
                        Nome
                    </b>
                </td>

                <td width="20">
                    &nbsp;
                </td>
                <td>
                    <b>
                        Idade
                    </b>
                </td>
            </tr>
            <?php
                $host            = 'localhost';
                $user            = 'root';
                $password        = '';
                $name            = 'atv_prt_042_bd';
                $connection      = mysqli_connect($host, $user, $password, $name) or die("Unable connecting to MySQL Server!");
                $view            = "SELECT testID, nome, idade FROM teste1 ORDER BY testID ASC";
                $commit          = mysqli_query($connection, $view) or die('Error in the commit processing.');

                while ($rows = mysqli_fetch_assoc($commit))
                    {
                        $databaseItems[] = $rows;
                    }
                        if ($databaseItems) {
                            foreach ($databaseItems as $item) {
                                ?>

                                <tr>
                                    <td>
                                        <?php echo($item["testID"]) ?>
                                    </td>

                                    <td width="20">
                                        &nbsp;
                                    </td>

                                    <td>
                                        <?php echo($item["nome"]) ?>
                                    </td>

                                    <td width="20">
                                        &nbsp;
                                    </td>
                                    <td>
                                        <?php echo($item["idade"]) ?>
                                    </td>
                                </tr>

                                <?php
                            }
                        }
            ?>
        </table>
    </body>
</html>
