<?php
require 'dataBase.php';
$nameError = $descriptionError = $priceError = $categoryError = $imageError = $name = $description = $price = $category = $image = "";

if(!empty($_POST)){
    $name = security($_POST['name']);
    $description = security($_POST['description']);
    $price = security($_POST['price']);
    $category = security($_POST['category']);
    $image = security($_FILES['image']['name']);
    // ici on recupere le chemin de l'image
    $imagePath = '../images/images/'.basename($image);
    $imageExtension = pathinfo($imagePath, PATHINFO_EXTENSION);
    $isSuccess = true;
    $isUploadSuccess = false;


        if(empty($name)){
          $nameError = 'ce champ est vide!';
          $isSuccess = false;
        }
        if(empty($description)){
          $descriptionError = 'ce champ est vide!';
          $isSuccess = false;
        }
        if(empty($price)){
          $priceError = 'ce champ est vide!';
          $isSuccess = false;
        }
          if(empty($image)){
            $imageError = 'ce champ image vide!';
            $isSuccess = false;
          }
          else
           {
             //  ici on va verifier si l'upload d'image est bon si le format convient etc;
              $isUploadSuccess =true;
              if($imageExtension != "jpg" && $imageExtension != "png" && $imageExtension != "jpeg" && $imageExtension != "gif"){
                $imageError = "les extentions d'images autorisées sont jpg jpeg et gif";
                  $isUploadSuccess = false;
              }
             //  ici on verifie si l'image n'est pas la meme
             if(file_exists($imagePath)){
               $imageError ="cette image existe deja";
                 $isUploadSuccess = false;
             }
             // ici on verifie la taille de l'image
             if($_FILES['image']['size'] > 500000)
             {
               $imageError = "le fichier est trop lourd la limite est de 500KB";
                 $isUploadSuccess = false ;
             }

             if($isUploadSuccess)
             {
               // ici la function move_uploaded_file va prendre notre image et va nous la mettre dans notre chemin "$imagePath"
               if(!move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath))
               {
                     $imageError = "il y'a une erreur avec le telechargement d'image";
                       $isUploadSuccess = false;
               }
             }

           }
      //  et si tout est bon alors on se connecte à la base de donnee et on envoi les informations
       if($isSuccess && $isUploadSuccess)
       {
         $db = baseDedonnee::connexion();
         $statement = $db->prepare("INSERT INTO items(name, description, price, category, image)
         VALUES(:name, :description, :price, :category, :image)");
         $statement->execute(array(
           'name'=> $name,
           'description'=> $description,
           'price' => $price,
           'category' => $category,
           'image' => $image
         ));
         baseDedonee::deconnexion();
         header("location: admin.php");
       }

}




function security($var){

   $var = trim($var);
   $var = htmlspecialchars($var);
   stripslashes($var);
}
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
    <title>admin</title>
  </head>
  <body>
   <div class="container Monsite">
     <h1 class="logo"><span class="glyphicon glyphicon-cutlery"></span> Mangez plus grand<span class="glyphicon glyphicon-cutlery"></span></h1>
   </div>
   <div class="container admin">
     <div class="row">
         <h2><strong>ajouter un produit</strong></h2><br>
         <!-- multipart/form-data ici c'est pour pouvoir upload une image -->
         <form class="form" role="form" action="create.php" method="post" enctype="multipart/form-data">
             <div class="form-group">
               <label for="name">nom:</label>
               <input type="text" class="form-control"  id="name" name="name" placeholder="nom du produit" value="<?php echo $name ;?>">
                <span class="erreur"><?php echo $nameError; ?></span>
             </div>

             <div class="form-group">
               <label for="description">description:</label>
               <input type="text" class="form-control"  id="description" name="description" placeholder="description" value="<?php echo $description ; ?>" >
                <span class="erreur"><?php echo $descriptionError; ?></span>
             </div>

             <div class="form-group">
               <label for="price">prix (€):</label>
               <!-- step ici c'est pour dire de combien sa augmente -->
               <input type="number" step="0.10" class="form-control"  id="price" name="price" placeholder="prix" value="<?php echo $price ; ?>" >
                <span class="erreur"><?php echo $priceError; ?></span>
             </div>
             <div class="form-group">
               <label for="category">categories:</label>
              <select class="form-control" name="category" id="category">
                <?php
                    $db = baseDedonnee::connexion();
                  foreach($db->query('SELECT * FROM categories') as $row) {
                    echo '<option value="'.$row['id']. '">' . $row['name']. '</option>';
                  }
                   baseDedonnee::deconnexion();
                 ?>
              </select>
                <span class="erreur"><?php echo $categoryError; ?></span>
             </div>
             <div class="form-group">
               <label for="image">Télécharger une image:</label>
               <input type="file"  id="image" name="image">
               <span class="erreur"><?php echo $imageError ; ?></span>
             </div>
             <div class="form-actions">
               <button type="submit" class="btn btn-success" name="button"><span class="glyphicon glyphicon-plus"></span> ajouter</button>
               <a href="admin.php" class="btn btn-primary"><span class='glyphicon glyphicon-arrow-left'></span> retour</a>
             </div>
        </form>
     </div>
   </div>
  </body>
</html>
