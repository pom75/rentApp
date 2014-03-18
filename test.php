<?php
session_start();
mysql_select_db('locationfaabc', $db);

$username = stripslashes($_POST['mail']);
$password = stripslashes($_POST['mdp']);

//------------------------ Vérification User et Session User
if (isset($_POST['mail']) and isset($_POST['mdp'])) {
    $_SESSION['mail'] = $_POST['mail'];
    $_SESSION['mdp'] = $_POST['mdp'];
}


    //-------------------- Supression pour l'apartement 1
    if (isset($_POST['sup1'])) {
        $sql = "DELETE FROM AP1 WHERE id = '" . $_POST['sup1'] . "'";
        $req = mysql_query($sql) or die('Erreur SQL !<br>' . $sql . '<br>' . mysql_error());
        //-------------------- Modifiction d'un aparetmeent 1
    }if (isset($_POST['deb1']) and isset($_POST['fin1']) and isset($_POST['prix1']) and isset($_POST['bool1']) and isset($_POST['id1'])) {
        $sql = "UPDATE AP1 SET debut='" . $_POST['deb1'] . "' , fin = '" . $_POST['fin1'] . "' , prix = '" . $_POST['prix1'] . "' , test = '" . $_POST['bool1'] . "'  WHERE id = '" . $_POST['id1'] . "' ";
        $req = mysql_query($sql) or die('Erreur SQL !<br>' . $sql . '<br>' . mysql_error());
    }

    //-------------------- Ajout d'une semaine pour l'appartement 1
    else if (isset($_POST['deb1']) and isset($_POST['fin1']) and isset($_POST['prix1']) and isset($_POST['bool1'])) {

        $debut = $_POST['deb1'];
        $fin = $_POST['fin1'];
        $prix = $_POST['prix1'];
        $test = $_POST['bool1'];

        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

        $req = $bdd->prepare("INSERT INTO AP1(debut,fin,prix,test) VALUES( :debut, :fin , :prix, :test)");
        $req->execute(array(
            'debut' => $debut,
            'fin' => $fin,
            'prix' => $prix,
            'test' => $test
        ));
    }

    //-------------------- Supression pour l'apartement 1
    if (isset($_POST['sup2'])) {
        $sql = "DELETE FROM AP2 WHERE id = '" . $_POST['sup2'] . "'";
        $req = mysql_query($sql) or die('Erreur SQL !<br>' . $sql . '<br>' . mysql_error());
        //-------------------- Modifiction d'un aparetmeent 2
    }if (isset($_POST['deb2']) and isset($_POST['fin2']) and isset($_POST['prix2']) and isset($_POST['bool2']) and isset($_POST['id2'])) {
        $sql = "UPDATE AP2 SET debut='" . $_POST['deb2'] . "' , fin = '" . $_POST['fin2'] . "' , prix = '" . $_POST['prix2'] . "' , test = '" . $_POST['bool2'] . "'  WHERE id = '" . $_POST['id2'] . "' ";
        $req = mysql_query($sql) or die('Erreur SQL !<br>' . $sql . '<br>' . mysql_error());
    }

    //-------------------- Ajout d'une semaine pour l'appartement 2
    else if (isset($_POST['deb2']) and isset($_POST['fin2']) and isset($_POST['prix2']) and isset($_POST['bool2'])) {

        $debut = $_POST['deb2'];
        $fin = $_POST['fin2'];
        $prix = $_POST['prix2'];
        $test = $_POST['bool2'];

        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

        $req = $bdd->prepare("INSERT INTO AP2(debut,fin,prix,test) VALUES( :debut, :fin , :prix, :test)");
        $req->execute(array(
            'debut' => $debut,
            'fin' => $fin,
            'prix' => $prix,
            'test' => $test
        ));
    }
    
     //-------------------- Supression pour l'apartement 3
    if (isset($_POST['sup3'])) {
        $sql = "DELETE FROM AP3 WHERE id = '" . $_POST['sup3'] . "'";
        $req = mysql_query($sql) or die('Erreur SQL !<br>' . $sql . '<br>' . mysql_error());
        //-------------------- Modifiction d'un aparetmeent 3
    }if (isset($_POST['deb3']) and isset($_POST['fin3']) and isset($_POST['prix3']) and isset($_POST['bool3']) and isset($_POST['id3'])) {
        $sql = "UPDATE AP3 SET debut='" . $_POST['deb3'] . "' , fin = '" . $_POST['fin3'] . "' , prix = '" . $_POST['prix3'] . "' , test = '" . $_POST['bool3'] . "'  WHERE id = '" . $_POST['id3'] . "' ";
        $req = mysql_query($sql) or die('Erreur SQL !<br>' . $sql . '<br>' . mysql_error());
    }

    //-------------------- Ajout d'une semaine pour l'appartement 3
    else if (isset($_POST['deb3']) and isset($_POST['fin3']) and isset($_POST['prix3']) and isset($_POST['bool3'])) {

        $debut = $_POST['deb3'];
        $fin = $_POST['fin3'];
        $prix = $_POST['prix3'];
        $test = $_POST['bool3'];

        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

        $req = $bdd->prepare("INSERT INTO AP3(debut,fin,prix,test) VALUES( :debut, :fin , :prix, :test)");
        $req->execute(array(
            'debut' => $debut,
            'fin' => $fin,
            'prix' => $prix,
            'test' => $test
        ));
    }
    ?>
<!doctype html>
   <html lang="fr">
        <head>
            <link href="http://fonts.googleapis.com/css?family=Arvo|Open+Sans:400,300,700" rel="stylesheet" type="text/css" />
            <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
        </head>
        <body>
            <div id="wrapper">
                <!-- end #header -->
                <div id="page">
                    <div id="page-bgtop">
                        <div id="page-bgbtm">
                            <div id="content2">
                                <div class="post" id="A1">
                                    <h2 class="title">Appartement N53</a></h2>

                                    <div style="clear: both;">&nbsp;</div>
                                    <table cellpadding="0" cellspacing="0" class="prix_table" summary="Disponibilités :" width="100%">
                                        <thead>
                                            <tr>
                                                <th class="prix_table_colonne0_w">ID</th>
                                                <th class="prix_table_colonne1_w">Debut</th>
                                                <th class="prix_table_colonne2_w">Fin</th>
                                                <th class="prix_table_colonne3_w">Prix</th>
                                                <th class="prix_table_colonne4_w">Duree minimum du sejour</th>
                                                <th class="prix_table_colonne5_w">Etat</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $sql = "SELECT * FROM AP1 ORDER BY debut";
                                            $req = mysql_query($sql) or die('Erreur SQL !<br>' . $sql . '<br>' . mysql_error());

                                            while ($dn = mysql_fetch_assoc($req)) {

                                                global $i;
                                                $i = 0;
                                                $string = "";

                                                if ($dn[test] == 0) {

                                                    $string = "<tr class = \"booked\">" . $string;
                                                } else {

                                                    $string = "<tr>" . $string;
                                                }


                                                foreach ($dn as $key => $value) {


                                                    if ($i == 0) {
                                                        $string = $string . "<td>" . $value . "</td>";
                                                    } else if ($i == 1) {
                                                        $string = $string . "<td>" . $value . "</td>";
                                                    } else if ($i == 2) {
                                                        $string = $string . "<td>" . $value . "</td>";
                                                    } else if ($i == 3) {
                                                        $string = $string . "<td>" . $value . "/semaine</td><td>A la semaine</td>";
                                                    } else if ($i == 4) {
                                                        if ($value == 0) {
                                                            $string = $string . "<td>Ocupé</td>";

                                                            $string = $string . "</tr>";
                                                        } else {
                                                            $string = $string . "<td>Libre</td>";

                                                            $string = $string . "</tr>";
                                                        }
                                                    }


                                                    $i = $i + 1;
                                                }
                                                echo $string;
                                            }
                                            ?>



                                        </tbody>
                                    </table>
                                    <div style="clear: both;">&nbsp;</div>
                                    <h3>Ajout d'une semaine</h3>
                                    <div style="clear: both;">&nbsp;</div>
                                    <form action="test.php" method="post" name="page1" >
                                        <table cellspacing="2" cellpadding="2" border="0">

                                            <tr>
                                                <td> Date de debut (exemple :"2013-02-22") :</td>
                                                <td><input type="date" name="deb1" ></td>
                                            </tr>

                                            <tr>
                                                <td> Date de fin (exemple :"2013-02-22") :</td>
                                                <td><input type="date" name="fin1" ></td>
                                            </tr>

                                            <tr>
                                                <td> Prix (exemple :"400") :</td>
                                                <td><input type="text" name="prix1" ></td>
                                            </tr>


                                            <tr>
                                                <td> Occuper("0") / Libre("1")  :</td>
                                                <td><input type="text" name="bool1"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><input type="submit" name="Ajout semaine app1"></td>
                                            </tr>
                                        </table>
                                    </form><div style="clear: both;">&nbsp;</div>
                                    <h3>Modification d'une semaine</h3>
                                    <div style="clear: both;">&nbsp;</div>
                                    <p>Re remplir tous les champs.</p>
                                    <form action="test.php" method="post" name="page1" >
                                        <table cellspacing="2" cellpadding="2" border="0">

                                            <tr>
                                                <td> ID de la semaine a suprimer (exemple :"1") :</td>
                                                <td><input type="text" name="id1" ></td>
                                            </tr>
                                            <tr>
                                                <td> Date de debut (exemple :"2013-02-22") :</td>
                                                <td><input type="date" name="deb1" ></td>
                                            </tr>

                                            <tr>
                                                <td> Date de fin (exemple :"2013-02-22") :</td>
                                                <td><input type="date" name="fin1" ></td>
                                            </tr>

                                            <tr>
                                                <td> Prix (exemple :"400") :</td>
                                                <td><input type="text" name="prix1" ></td>
                                            </tr>


                                            <tr>
                                                <td> Occuper("0") / Libre("1")  :</td>
                                                <td><input type="text" name="bool1"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><input type="submit" name="Modifier semaine app1"></td>
                                            </tr>
                                        </table>
                                    </form>
                                    <div style="clear: both;">&nbsp;</div>
                                    <h3>Supression d'une semaine</h3>
                                    <div style="clear: both;">&nbsp;</div>
                                    <form action="test.php" method="post" name="page1" >
                                        <table cellspacing="2" cellpadding="2" border="0">

                                            <tr>
                                                <td> ID de la semaine a suprimer (exemple :"1") :</td>
                                                <td><input type="text" name="sup1" ></td>
                                            </tr>


                                            <td></td>
                                            <td><input type="submit" name="Supp semaine app1"></td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                                <div class="post" id="A2">
                                    <h2 class="title">Appartement N4</a></h2>

                                    <div style="clear: both;">&nbsp;</div>
                                    <table cellpadding="0" cellspacing="0" class="prix_table" summary="Disponibilités :" width="100%">
                                        <thead>
                                            <tr>
                                                <th class="prix_table_colonne0_w">ID</th>
                                                <th class="prix_table_colonne1_w">Debut</th>
                                                <th class="prix_table_colonne2_w">Fin</th>
                                                <th class="prix_table_colonne3_w">Prix</th>
                                                <th class="prix_table_colonne4_w">Duree minimum du sejour</th>
                                                <th class="prix_table_colonne5_w">Etat</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $sql = "SELECT * FROM AP2 ORDER BY debut";
                                            $req = mysql_query($sql) or die('Erreur SQL !<br>' . $sql . '<br>' . mysql_error());

                                            while ($dn = mysql_fetch_assoc($req)) {

                                                global $i;
                                                $i = 0;
                                                $string = "";

                                                if ($dn[test] == 0) {

                                                    $string = "<tr class = \"booked\">" . $string;
                                                } else {

                                                    $string = "<tr>" . $string;
                                                }


                                                foreach ($dn as $key => $value) {


                                                    if ($i == 0) {
                                                        $string = $string . "<td>" . $value . "</td>";
                                                    } else if ($i == 1) {
                                                        $string = $string . "<td>" . $value . "</td>";
                                                    } else if ($i == 2) {
                                                        $string = $string . "<td>" . $value . "</td>";
                                                    } else if ($i == 3) {
                                                        $string = $string . "<td>" . $value . "/semaine</td><td>A la semaine</td>";
                                                    } else if ($i == 4) {
                                                        if ($value == 0) {
                                                            $string = $string . "<td>Ocupé</td>";

                                                            $string = $string . "</tr>";
                                                        } else {
                                                            $string = $string . "<td>Libre</td>";

                                                            $string = $string . "</tr>";
                                                        }
                                                    }


                                                    $i = $i + 1;
                                                }
                                                echo $string;
                                            }
                                            ?>



                                        </tbody>
                                    </table>
                                    <div style="clear: both;">&nbsp;</div>
                                    <h3>Ajout d'une semaine</h3>
                                    <div style="clear: both;">&nbsp;</div>
                                    <form action="test.php" method="post" name="page1" >
                                        <table cellspacing="2" cellpadding="2" border="0">

                                            <tr>
                                                <td> Date de debut (exemple :"2013-02-22") :</td>
                                                <td><input type="date" name="deb2" ></td>
                                            </tr>

                                            <tr>
                                                <td> Date de fin (exemple :"2013-02-22") :</td>
                                                <td><input type="date" name="fin2" ></td>
                                            </tr>

                                            <tr>
                                                <td> Prix (exemple :"400") :</td>
                                                <td><input type="text" name="prix2" ></td>
                                            </tr>


                                            <tr>
                                                <td> Occuper("0") / Libre("1")  :</td>
                                                <td><input type="text" name="bool2"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><input type="submit" name="Ajout semaine app2"></td>
                                            </tr>
                                        </table>
                                    </form><div style="clear: both;">&nbsp;</div>
                                    <h3>Modification d'une semaine</h3>
                                    <div style="clear: both;">&nbsp;</div>
                                    <p>Re remplir tous les champs.</p>
                                    <form action="test.php" method="post" name="page1" >
                                        <table cellspacing="2" cellpadding="2" border="0">

                                            <tr>
                                                <td> ID de la semaine a suprimer (exemple :"1") :</td>
                                                <td><input type="text" name="id2" ></td>
                                            </tr>
                                            <tr>
                                                <td> Date de debut (exemple :"2013-02-22") :</td>
                                                <td><input type="date" name="deb2" ></td>
                                            </tr>

                                            <tr>
                                                <td> Date de fin (exemple :"2013-02-22") :</td>
                                                <td><input type="date" name="fin2" ></td>
                                            </tr>

                                            <tr>
                                                <td> Prix (exemple :"400") :</td>
                                                <td><input type="text" name="prix2" ></td>
                                            </tr>


                                            <tr>
                                                <td> Occuper("0") / Libre("1")  :</td>
                                                <td><input type="text" name="bool2"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><input type="submit" name="Modifier semaine app2"></td>
                                            </tr>
                                        </table>
                                    </form>
                                    <div style="clear: both;">&nbsp;</div>
                                    <h3>Supression d'une semaine</h3>
                                    <div style="clear: both;">&nbsp;</div>
                                    <form action="test.php" method="post" name="page1" >
                                        <table cellspacing="2" cellpadding="2" border="0">

                                            <tr>
                                                <td> ID de la semaine a suprimer (exemple :"1") :</td>
                                                <td><input type="text" name="sup2" ></td>
                                            </tr>


                                            <td></td>
                                            <td><input type="submit" name="Supp semaine app2"></td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                                <div class="post" id="A3">
                                    <h2 class="title">Appartement N14</a></h2>

                                    <div style="clear: both;">&nbsp;</div>
                                    <table cellpadding="0" cellspacing="0" class="prix_table" summary="Disponibilités :" width="100%">
                                        <thead>
                                            <tr>
                                                <th class="prix_table_colonne0_w">ID</th>
                                                <th class="prix_table_colonne1_w">Debut</th>
                                                <th class="prix_table_colonne2_w">Fin</th>
                                                <th class="prix_table_colonne3_w">Prix</th>
                                                <th class="prix_table_colonne4_w">Duree minimum du sejour</th>
                                                <th class="prix_table_colonne5_w">Etat</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $sql = "SELECT * FROM AP3 ORDER BY debut";
                                            $req = mysql_query($sql) or die('Erreur SQL !<br>' . $sql . '<br>' . mysql_error());

                                            while ($dn = mysql_fetch_assoc($req)) {

                                                global $i;
                                                $i = 0;
                                                $string = "";

                                                if ($dn[test] == 0) {

                                                    $string = "<tr class = \"booked\">" . $string;
                                                } else {

                                                    $string = "<tr>" . $string;
                                                }


                                                foreach ($dn as $key => $value) {


                                                    if ($i == 0) {
                                                        $string = $string . "<td>" . $value . "</td>";
                                                    } else if ($i == 1) {
                                                        $string = $string . "<td>" . $value . "</td>";
                                                    } else if ($i == 2) {
                                                        $string = $string . "<td>" . $value . "</td>";
                                                    } else if ($i == 3) {
                                                        $string = $string . "<td>" . $value . "/semaine</td><td>A la semaine</td>";
                                                    } else if ($i == 4) {
                                                        if ($value == 0) {
                                                            $string = $string . "<td>Ocupé</td>";

                                                            $string = $string . "</tr>";
                                                        } else {
                                                            $string = $string . "<td>Libre</td>";

                                                            $string = $string . "</tr>";
                                                        }
                                                    }


                                                    $i = $i + 1;
                                                }
                                                echo $string;
                                            }
                                            ?>



                                        </tbody>
                                    </table>
                                    <div style="clear: both;">&nbsp;</div>
                                    <h3>Ajout d'une semaine</h3>
                                    <div style="clear: both;">&nbsp;</div>
                                    <form action="test.php" method="post" name="page1" >
                                        <table cellspacing="2" cellpadding="2" border="0">

                                            <tr>
                                                <td> Date de debut (exemple :"2013-02-22") :</td>
                                                <td><input type="date" name="deb3" ></td>
                                            </tr>

                                            <tr>
                                                <td> Date de fin (exemple :"2013-02-22") :</td>
                                                <td><input type="date" name="fin3" ></td>
                                            </tr>

                                            <tr>
                                                <td> Prix (exemple :"400") :</td>
                                                <td><input type="text" name="prix3" ></td>
                                            </tr>


                                            <tr>
                                                <td> Occuper("0") / Libre("1")  :</td>
                                                <td><input type="text" name="bool3"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><input type="submit" name="Ajout semaine app3"></td>
                                            </tr>
                                        </table>
                                    </form><div style="clear: both;">&nbsp;</div>
                                    <h3>Modification d'une semaine</h3>
                                    <div style="clear: both;">&nbsp;</div>
                                    <p>Re remplir tous les champs.</p>
                                    <form action="test.php" method="post" name="page1" >
                                        <table cellspacing="2" cellpadding="2" border="0">

                                            <tr>
                                                <td> ID de la semaine a suprimer (exemple :"1") :</td>
                                                <td><input type="text" name="id3" ></td>
                                            </tr>
                                            <tr>
                                                <td> Date de debut (exemple :"2013-02-22") :</td>
                                                <td><input type="date" name="deb3" ></td>
                                            </tr>

                                            <tr>
                                                <td> Date de fin (exemple :"2013-02-22") :</td>
                                                <td><input type="date" name="fin3" ></td>
                                            </tr>

                                            <tr>
                                                <td> Prix (exemple :"400") :</td>
                                                <td><input type="text" name="prix3" ></td>
                                            </tr>


                                            <tr>
                                                <td> Occuper("0") / Libre("1")  :</td>
                                                <td><input type="text" name="bool3"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><input type="submit" name="Modifier semaine app3"></td>
                                            </tr>
                                        </table>
                                    </form>
                                    <div style="clear: both;">&nbsp;</div>
                                    <h3>Supression d'une semaine</h3>
                                    <div style="clear: both;">&nbsp;</div>
                                    <form action="test.php" method="post" name="page1" >
                                        <table cellspacing="2" cellpadding="2" border="0">

                                            <tr>
                                                <td> ID de la semaine a suprimer (exemple :"1") :</td>
                                                <td><input type="text" name="sup3" ></td>
                                            </tr>


                                            <td></td>
                                            <td><input type="submit" name="Supp semaine app3"></td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div></div></div></div></div>
        </body>
    </html>
    <?php
} else {

    header('Location : connect.php');
}
?>