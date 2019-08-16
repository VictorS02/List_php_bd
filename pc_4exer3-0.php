<?php 
    $host            = 'localhost';
    $user            = 'root';
    $password        = '';
    $name            = 'atv_prt_043_bd';
    $connection      = mysqli_connect($host, $user, $password, $name) or die("Unable connecting to MySQL Server!");
    $fabricante      = $_POST['fabricante']; // fabricante
    $ano_fabricacao  = $_POST['ano_fabricacao']; // ano de fabricação
    $quilometragem   = $_POST['quilometragem']; // kilometragem
    $insert          = "INSERT INTO autos(fabricante, ano_fabricacao, quilometragem) VALUES ('$fabricante', '$ano_fabricacao', '$quilometragem')";
    $commit          = mysqli_query($connection, $insert) or die("Error commiting!");
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Exercício 3-0
        </title>
    </head>

    <body>
        <table>
            <tr>
                <td>
                    <b>
                        Código de Cadastro
                    </b>
                </td>

                <td width="20">
                    &nbsp;
                </td>

                <td>
                    <b>
                        Fabricante
                    </b>
                </td>

                <td width="20">
                    &nbsp;
                </td>
                <td>
                    <b>
                        Ano de Fabricação
                    </b>
                </td>

                <td width="20">
                    &nbsp;
                </td>

                <td>
                    <b>
                        Kilometragem
                    </b>
                </td>
            </tr>
            <?php
                $host            = 'localhost';
                $user            = 'root';
                $password        = '';
                $name            = 'atv_prt_043_bd';
                $connection      = mysqli_connect($host, $user, $password, $name) or die("Unable connecting to MySQL Server!");
                $view            = "SELECT auto_id, fabricante, ano_fabricacao, quilometragem FROM autos ORDER BY auto_id ASC";
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
                                        <?php echo($item["auto_id"]) ?>
                                    </td>

                                    <td width="20">
                                        &nbsp;
                                    </td>

                                    <td>
                                        <?php echo($item["fabricante"]) ?>
                                    </td>

                                    <td width="20">
                                        &nbsp;
                                    </td>
                                    <td>
                                        <?php echo($item["ano_fabricacao"]) ?>
                                    </td>

                                    <td width="20">
                                        &nbsp;
                                    </td>

                                    <td>
                                        <?php echo($item["quilometragem"]) ?>
                                    </td>
                                </tr>

                                <?php
                            }
                        }
            ?>
        </table>
    </body>
</html>