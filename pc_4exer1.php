<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Exercício 1
        </title>
    </head>

    <body>
        <table>
            <tr>
                <td>
                    <b>
                        Membro
                    </b>
                </td>

                <td width="20">
                    &nbsp;
                </td>

                <td>
                    <b>
                        Email
                    </b>
                </td>

                <td width="20">
                    &nbsp;
                </td>
                <td>
                    <b>
                        Escola
                    </b>
                </td>

                <td width="20">
                    &nbsp;
                </td>

                <td>
                    <b>
                        Estado
                    </b>
                </td>

                <td width="20">
                    &nbsp;
                </td>

                <td>
                    <b>
                        Função
                    </b>
                </td>

                <td width="20">
                    &nbsp;
                </td>

                <td>
                    <b>
                        Nome da Equipe
                    </b>
                </td>
            </tr>
            <?php
                $host            = 'localhost';
                $user            = 'root';
                $password        = '';
                $name            = 'atv_prt_041_bd';
                $connection      = mysqli_connect($host, $user, $password, $name) or die("Unable connecting to MySQL Server!");
                $view            = "SELECT nome, email, escola, estado, funcao, nom_equipe FROM membros, escolas, equipes WHERE escolas.nome_escola = membros.escola AND membros.num_equipe = equipes.num_equipe";
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
                                        <?php echo($item["nome"]) ?>
                                    </td>

                                    <td width="20">
                                        &nbsp;
                                    </td>

                                    <td>
                                        <?php echo($item["email"]) ?>
                                    </td>

                                    <td width="20">
                                        &nbsp;
                                    </td>
                                    <td>
                                        <?php echo($item["escola"]) ?>
                                    </td>

                                    <td width="20">
                                        &nbsp;
                                    </td>

                                    <td>
                                        <?php echo($item["estado"]) ?>
                                    </td>

                                    <td width="20">
                                        &nbsp;
                                    </td>

                                    <td>
                                        <?php echo($item["funcao"]) ?>
                                    </td>

                                    <td width="20">
                                        &nbsp;
                                    </td>

                                    <td>
                                        <?php echo($item["nom_equipe"]) ?>
                                    </td>
                                </tr>

                                <?php
                            }
                        }
            ?>
        </table>
    </body>
</html>