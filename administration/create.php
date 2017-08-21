<?php
require 'dataBase.php';


 ?>





<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 ">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <link rel="stylesheet" type='text/css' href="../css/style.css">
    <title>Burger king</title>
  </head>
  <body>
   <div class="container Monsite">
     <h1 class="logo"><span class="glyphicon glyphicon-cutlery"></span> Mangez plus grand<span class="glyphicon glyphicon-cutlery"></span></h1>
   </div>
   <div class="container admin">
     <div class="row">
         <h2><strong>ajouter un produit</strong></h2><br>
         <div class="form-actions">
           <button type="submit"class="btn btn-success" name="button"><span class="glyphicon glyphicon-plus"></span> ajouter</button>
           <a href="admin.php" class="btn btn-primary"><span class='glyphicon glyphicon-arrow-left'></span> retour</a>
         </div>
         <!-- multipart/form-data ici c'est pour pouvoir upload une image -->
         <form class="form" role="form" action="create.php" method="post" enctype="multipart/form-data">
           <div class="form-group">
             <label for="name">nom:</label>
             <input type="text" class="form-control"  id="name" name="name" placeholder="nom du produit" value="<?php echo $name ?>">
              <span class="erreur"><?php $nameError; ?></span>
           </div>
           <div class="form-group">
             <label for="name">Télécharger une image:</label>
             <input type="file"  id="image" name="image">
             <span class="erreur"><?php echo $imageError ; ?></span>
           </div>
           <div class="form-group">
             <label for="name">description:</label>
             <input type="text" class="form-control"  id="description" name="description" placeholder="description" value="<?php echo $description ?>">
              <span class="erreur"><?php $descriptionError; ?></span>
           </div>

           <div class="form-group">
             <label for="price">prix (en €):</label>
             <!-- step ici c'est pour dire de combien sa augmente -->
             <input type="number" step="0.10" class="form-control"  id="price" name="name" placeholder="prix" value="<?php echo $price ?>">
              <span class="erreur"><?php $priceError; ?></span>
           </div>
           <div class="form-group">
             <label for="name">categories:</label>
            <select class="form-control" name="category" id="category">
              <?php
                  $db = baseDedonnee::connexion();
                foreach ($db->query('SELECT * FROM categories') as $row) {
                   echo "<option value='".$row['id'].'">'.$row['name'].'</option>';
                }

              baseDedonnee::deconnexion();
               ?>
            </select>
              <span class="erreur"><?php echo $categoryError; ?></span>
           </div>

        </form>
        <br>

     </div>
   </div>
  </body>
</html>
