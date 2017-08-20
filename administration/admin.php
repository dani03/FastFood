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
  <title>administration</title>
</head>
  <body>
    <h1 class="logo"><span class="glyphicon glyphicon-cutlery"></span> Mangez plus grand<span class="glyphicon glyphicon-cutlery"></span></h1>
    <div class="container admin">
      <div class="row">
        <h3><strong>listes des items</strong>
        <a href="create.php" class="btn btn-success "><span class="glyphicon glyphicon-plus"></span> ajouter</a></h3>
       <table class="table table-striped table-bordered">
         <thead>
           <tr>
             <th>nom</th>
             <th>description</th>
             <th>prix</th>
             <th>categories</th>
             <th>action</th>
           </tr>
         </thead>
         <tbody>
           <!-- ici on se connecte a la base de donnee -->
           <?php
              require 'dataBase.php';
              $req = baseDedonnee::connexion();
              $statement = $req->query('SELECT items.id, items.name, items.description, items.price, categories.name AS category FROM items INNER JOIN categories ON items.category = categories.id order by items.id DESC');
            // ici la condition pour relier les deux tables est items.category = categories.id
              while($item = $statement->fetch())
              {
              echo "<tr>";
               echo "<td>".$item['name']."</td>";
               echo "<td>".$item['description']."</td>";
               echo "<td>".number_format((float)$item['price'],2).' €'."</td>";
               echo "<td>".$item['category']."</td>";
                echo  "<td width='350px'>";
                echo  '<a href="read.php?id='.$item['id'].'" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"><span>voir</a>';
                echo ' ';
                echo  '<a href="update.php?id='.$item['id'].'"class="btn btn-primary"><span class="glyphicon glyphicon-pencil"><span>modifier</a>';
                echo ' ';
                echo  '<a href="delete.php?id='.$item['id'].'" class="btn btn-danger"><span class="glyphicon glyphicon-remove"><span>supprimer</a>';
                echo  '</td>';
                echo '</tr>';
              }
                baseDedonnee::deconnexion();
           ?>

         </tbody>
       </table>

      </div>

    </div>
  </body>
</html>
