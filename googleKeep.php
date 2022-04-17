<?php 
session_start();
if (!isset($_SESSION['notes'])){
    $_SESSION['notes'] = [];
}
if (isset($_POST['titre']) && isset($_POST['note'])){
    $_SESSION['notes'][] = ['titre' => $_POST['titre'], 'note' => $_POST['note']];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Keep</title>
    
</head>
<body>
    <div class="container text-center">
        
            <div style="background-color:beige;">
                <h1 style="color:brown">Notes</h1>
                <?php
                    foreach ($_SESSION['notes'] as $note):
                ?>
                    <div class="container card bg-light mb-3" style="max-width: 22rem;"  >
                        
                        <h5><?= $note['titre'] ?></h5>
                        <div><?= $note['note'] ?></div>
                    </div>
                <?php
                    endforeach;
                ?>
            </div>

            <form action="" method="POST">
                <input type="text" class="form-control" name="titre" placeholder="Titre" required>
                <br>
                <textarea name="note" class="form-control" rows="2" placeholder="Note" required></textarea>
                <br>
                <button type="submit" class="btn btn-danger">Ajouter</button>
            </form>
        
    </div>
    
   
</body>
</html>