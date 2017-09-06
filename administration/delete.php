
<?php
require 'dataBase.php';
if(!empty($_GET['id'])){
  $id = security($_GET['id']);
}
if(!empty($_POST)){
  $id = security($_POST['id']);
  $db = baseDedonnee::connexion();
  $statement = $db->prepare("DELETE FORM items WHERE id = ?");
  $statement->execute(array($id));
  baseDedonnee::deconnexion();
  header("location: admin.php");
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
         <h2><strong>supprimer ce produit</strong></h2><br>

         <!-- multipart/form-data ici c'est pour pouvoir upload une image -->
         <form class="form" role="form" action="delete.php" method="post">
           <input type="hidden" name="id" value="<?php echo $id ; ?>"/>
           <p class="alert alert-warning"> voulez-vous vraiment supprimer cette element ?</p>
           <div class="form-actions">
             <button type="submit"class="btn btn-warning" name="button"> oui</button>
             <a href="admin.php" class="btn btn-success">non</a>
           </div>
        </form>

     </div>
   </div>
  </body>
</html>
