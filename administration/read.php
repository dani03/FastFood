<?php
require 'dataBase.php';
if(!empty($_GET['id'])){
   $id = security($_GET['id']);
}
  $db = baseDedonnee::connexion();
  $statement = $db->prepare('SELECT items.id, items.name, items.description, items.price, items.image, categories.name AS category FROM items LEFT JOIN categories ON items.category = categories.id WHERE items.id= ?');
  $statement->execute(array($id));
  $item = $statement->fetch();
  baseDedonnee::deconnexion();


function security($var){
$var= htmlspecialchars($var);
$var= trim($var);
$var= stripslashes($var);
  return $var;
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
     <title>Burger king</title>
   </head>
   <body>
    <div class="container Monsite">
      <h1 class="logo"><span class="glyphicon glyphicon-cutlery"></span> Mangez plus grand<span class="glyphicon glyphicon-cutlery"></span></h1>
    </div>
    <div class="container admin">
      <div class="row">
        <div class="col-sm-6">
          <h2><strong>voir le produit</strong></h2><br>
          <form class="form-group">
            <label for="">Produit:</label><?php echo ' '.$item['name'];?>
          </form>
          <form class="form-group">
            <label for="">description:</label><?php echo ' '.$item['description'];?>
          </form>
          <form class="form-group">
            <!-- number_format float permet de mettre les chiffres apres la virgule(2) -->
            <label for="">prix:</label><?php echo ' '.number_format((float)$item['price'],2).' €';?>
          </form>
          <form class="form-group">
            <label for="">category:</label><?php echo ' '.$item['category'];?>
          </form>
          <form class="form-group">
            <label for="">image:</label><?php echo ' '.$item['image'];?>
          </form>
           <div class="form-actions">
             <a href="admin.php" class="btn btn-primary"><span class='glyphicon glyphicon-arrow-left'></span> retour</a>
           </div>
        </div>
        <div class="col-sm-6">
            <div class="thumbnail ">
              <img src="<?php echo '../images/images/' .$item['image'];?>">
              <div class="prix"><?php echo number_format((float)$item['price'],2).' €';?></div>
              <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
              <div class="caption">
                <h4><?php echo ' '.$item['name'];?></h4>
                <p></label><?php echo $item['description'];?></p>
                <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
              </div>
            </div>
        </div>
      </div>


    </div>
   </body>
 </html>
