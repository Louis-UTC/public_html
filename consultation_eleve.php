<?php require('connexion.php')?>

<html>
    <body>
    <h1><span>CONSULTER LES DONNEES D'UN ELEVE</span></h1>
    <br><br>
    <form action="consulter_eleve.php" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-20">
                    <label>Consulter l'élève</label>
                </div>
                <div class="col-50">
                    
                    <?php 
                        $result=mysqli_query($connect, "SELECT * FROM eleves");
                        echo "<select name='elevechoisi' required>";
                        while ($row=mysqli_fetch_array($result, MYSQLI_NUM)) {
                            echo "<option value='$row[0]'>$row[2] $row[1] ($row[3])</option>";
                        }
                        echo "</select>";
                        mysqli_close($connect);
                        ?>

                </div>
            </div>
            <div class="row">
                <input type="submit" value="Terminé"><br>
            </div>
        </div>
    </form>
    <A HREF=accueil.html class="button" TARGET=accueil><button>Retour à l'accueil</button></A>
</body>
</html>

