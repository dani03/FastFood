<?php
require 'dataBase.php';

if(!empty($_GET['id'])){
  $id = security($_GET['id']);
}
$nameError = $descriptionError = $priceError = $imageError = $name = $description = $price = $image = "";

if(!empty($_POST)){
    $name = security($_POST['name']);
    $description = security($_POST['description']);
    $price = security($_POST['price']);
    $category = security($_POST['category']);
    $image = security($_FILES['image']['name']);
    // ici on recupere le chemin de l'image
    $imagePath = '../images/images/'. basename($image);
    $imageExtension = pathinfo($imagePath, PATHINFO_EXTENSION);
    $isSuccess = true;


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
            $updateImage = false;
          }
          else
           {
             $updateImage = true;
             //  ici on va verifier si l'upload d'image est bon si le format convient etc
              $isUploadSuccess =true;
              if($imageExtension !="jpg" && $imageExtension !="png" && $imageExtension !="jpeg" && $imageExtension !="gif"){
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
               $imageError = "le fichier est trop lourd";
                 $isUploadSuccess = false ;
             }

             if($isUploadSuccess)
             {
               // ici la function move_uploaded_file va prendre notre image et va ,ous la mettre dans notre chemin "$imagePath"
               if(!move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath))
               {
                     $imageError = "il y'a une erreur avec le telechargement d'image";
                       $isUploadSuccess = false;
               }
             }

           }
      //  et si tout est bon alors on se connecte à la base de donnee et on envoi les informations
       if(($isSuccess && $isUploadSuccess && $updateImage) || (!$updateImage && $isSuccess))
       {
         $db = baseDedonnee::connexion();
         if($updateImage){
          //  dans le cas ou l'image a bien ete update
           $statement = $db->prepare("UPDATE items set name = :nv_name, description = :nv_description, price = :nv_price, category = :nv_category, image = :nv_image WHERE id = :id");
           $statement->execute(array(
             'nv_name' => $name,
             'nv_description' => $description,
             'nv_price' => $price,
             'nv_category' => $category,
             'nv_image' => $image,
             'id' => $id
           ));
         }
         else {
           $statement = $db->prepare("UPDATE  items set name = ?, description = ?, price = ?, category = ? WHERE id= ?");
           $statement->execute(array($name,$description,$price,$category,$id));
         }

         baseDedonee::deconnexion();
         header("location: admin.php");
       }
       elseif ($updateImage && !$isUploadSuccess) {
         $db = baseDedonnee::connexion();
        //  ici on veut recuperer les informations sur les items
           $statement = $db->prepare("SELECT image FROM items WHERE id = ?");
           $statement->execute(array($id));
           $item = $statement->fetch();
           $image = $item['image'];
       }

}
else{
   $db = baseDedonnee::connexion();
  //  ici on veut recuperer les informations sur les items
     $statement = $db->prepare("SELECT * FROM items WHERE id = ?");
     $statement->execute(array('id' => $id));
     $item = $statement->fetch();
     $name = $item['name'];
     $description = $item['description'];
     $price = $item['price'];
     $category = $item['category'];
     $image = $item['image'];
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
       <div class="col-sm-6">
         <h2><strong>modifier un produit</strong></h2><br>

         <!-- multipart/form-data ici c'est pour pouvoir upload une image -->
         <form class="form" role="form" action="<?php echo 'update.php?id='. $id ; ?>" method="post" enctype="multipart/form-data">
           <div class="form-group">
             <label for="name">nom:</label>
             <input type="text" class="form-control"  id="name" name="name" placeholder="nom du produit" value="<?php echo $name  ?>">
              <span class="erreur"><?php echo $nameError; ?></span>
           </div>

           <div class="form-group">
             <label for="description">description:</label>
             <input type="text" class="form-control"  id="description" name="description" placeholder="description" value= "<?php echo $description; ?>" >
              <span class="erreur"><?php echo $descriptionError; ?></span>
           </div>

           <div class="form-group">
             <label for="price">prix (en €):</label>
             <!-- step ici c'est pour dire de combien sa augmente -->
             <input type="number" step="0.01" class="form-control"  id="price" name="price" placeholder="prix" value="<?php echo $price ;?>">
              <span class="erreur"><?php echo $priceError; ?></span>
           </div>
           <div class="form-group">
             <label for="name">categories:</label>
            <select class="form-control" name="category" id="category">
              <?php
                  $db = baseDedonnee::connexion();
                foreach($db->query('SELECT * FROM categories') as $row) {
                  if($row['id'] == $category)
                    // ici on lui dit de prendre la categorie de base qui avait été selectionnée
                    echo '<option selected="selected" value="'.$row['id']. '">' .$row['name']. '</option>';
                  else
                    echo '<option value="'.$row['id']. '">' .$row['name']. '</option>';

                }

              baseDedonnee::deconnexion();
               ?>
            </select>
              <span class="erreur"><?php echo $categoryError; ?></span>
           </div>
           <div class="form-group">
             <label for="">image :</label>
             <p><?php echo $image ; ?></p>
             <label for="image">Télécharger une image:</label>
             <input type="file"  id="image" name="image">
             <span class="erreur"><?php echo $imageError ; ?></span>
           </div>
           <div class="form-actions">
             <button type="submit"class="btn btn-success" name="button"><span class="glyphicon glyphicon-pencil"></span> modifier</button>
             <a href="admin.php" class="btn btn-primary"><span class='glyphicon glyphicon-arrow-left'></span> retour</a>
           </div>
        </form>
       </div>
       <div class="col-sm-6">
           <div class="thumbnail ">
             <img src="<?php echo '../images/images/'. $image ;?>">
             <div class="prix"><?php echo number_format((float)$price,2).' €';?></div>
             <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
             <div class="caption">
               <h4><?php echo $name;?></h4>
               <p></label><?php echo $description;?></p>
               <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
             </div>
           </div>
       </div>
     </div>
   </div>
  </body>
</html>
