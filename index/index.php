
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
       <nav>
         <ul class="nav nav-pills">
           <li role="presentation" class="active"><a href="#1" data-toggle="tab"> Menus</a></li>
           <li role="presentation" class=""><a href="#2" data-toggle="tab"> Burger</a></li>
           <li role="presentation" class=""><a href="#3" data-toggle="tab"> Salade</a></li>
           <li role="presentation" class=""><a href="#4" data-toggle="tab"> Boissons</a></li>
           <li role="presentation" class=""><a href="#5" data-toggle="tab">Desserts</a></li>
         </ul>
       </nav>
       <div class="tab-content">
         <!-- la classe tabe pane permet de changer d'onglet au clic -->
         <div class="tab-pane active" id="1">
           <div class="row">
             <div class="col-sm-6 col-md-4">
               <div class="thumbnail ">
                 <img src="../images/images/menuSimple.png" alt="">
                 <div class="prix"> 9.10 € </div>
                 <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                 <div class="caption">
                   <h4> Menu classique</h4>
                   <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                   <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                 </div>
               </div>
             </div>
             <!-- ******************************menu 2 ***************************** -->
             <div class="col-sm-6 col-md-4">
               <div class="thumbnail ">
                 <img src="../images/images/menu2.png" alt="">
                 <div class="prix"> 8.70 € </div>
                 <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                 <div class="caption">
                   <h4> Menu Bacon</h4>
                   <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                   <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                 </div>
               </div>
             </div>

             <div class="col-sm-6 col-md-4">
               <div class="thumbnail ">
                 <img src="../images/images/menu3.png" alt="">
                 <div class="prix"> 9,90 € </div>
                 <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                 <div class="caption">
                   <h4> Menu Double Steaks</h4>
                   <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                   <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                 </div>
               </div>
             </div>

             <div class="col-sm-6 col-md-4">
               <div class="thumbnail ">
                 <img src="../images/images/menu4.png" alt="">
                 <div class="prix"> 7.10 € </div>
                 <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                 <div class="caption">
                   <h4> Menu Poulet</h4>
                   <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                   <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                 </div>
               </div>
             </div>

             <div class="col-sm-6 col-md-4">
               <div class="thumbnail ">
                 <img src="../images/images/menu5.png" alt="">
                 <div class="prix"> 7.50 € </div>
                 <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                 <div class="caption">
                   <h4> Menu Fish</h4>
                   <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                   <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                 </div>
               </div>
             </div>

             <div class="col-sm-6 col-md-4">
               <div class="thumbnail ">
                 <img src="../images/images/menu6.png" alt="">
                 <div class="prix"> 9.30 € </div>
                 <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                 <div class="caption">
                   <h4> Menu Triple Steaks</h4>
                   <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                   <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <!-- ****************************onglet des burgers******************* -->
         <div class="tab-pane" id="2">
           <div class="row">
             <div class="col-sm-6 col-md-4">
               <div class="thumbnail ">
                 <img src="../images/images/maxiburger.png" alt="">
                 <div class="prix"> 9.50 € </div>
                 <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                 <div class="caption">
                   <h4> 2 Steaks Frommage</h4>
                   <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                   <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                 </div>
               </div>
             </div>
             <!-- ******************************burger 2 ***************************** -->
             <div class="col-sm-6 col-md-4">
               <div class="thumbnail ">
                 <img src="../images/images/tripleburger.png" alt="">
                 <div class="prix"> 8.50 € </div>
                 <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                 <div class="caption">
                   <h4> Double Steaks Bacon</h4>
                   <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                   <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                 </div>
               </div>
             </div>

             <div class="col-sm-6 col-md-4">
               <div class="thumbnail ">
                 <img src="../images/images/b5.png" alt="">
                 <div class="prix"> 6.10 € </div>
                 <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                 <div class="caption">
                   <h4> Burger Fish</h4>
                   <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                   <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                 </div>
               </div>
             </div>

             <div class="col-sm-6 col-md-4">
               <div class="thumbnail ">
                 <img src="../images/images/b4.png" alt="">
                 <div class="prix"> 8.10 € </div>
                 <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                 <div class="caption">
                   <h4>Burger Poulet Pané</h4>
                   <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                   <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                 </div>
               </div>
             </div>

             <div class="col-sm-6 col-md-4">
               <div class="thumbnail ">
                 <img src="../images/images/cheeseBurger.png" alt="">
                 <div class="prix"> 5.00€ </div>
                 <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                 <div class="caption">
                   <h4> Double Steaks </h4>
                   <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                   <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                 </div>
               </div>
             </div>

             <div class="col-sm-6 col-md-4">
               <div class="thumbnail ">
                 <img src="../images/images/bigMac.png" alt="">
                 <div class="prix"> 9.10 € </div>
                 <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                 <div class="caption">
                   <h4> burger Normal</h4>
                   <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                   <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                 </div>
               </div>
             </div>
           </div>
         </div>
  <!--********************************** onglets des salades*************************** -->
          <div class="tab-pane" id="3">
            <div class="row">
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail ">
                  <img src="../images/images/salade1.png" alt="">
                  <div class="prix"> 9.10 € </div>
                  <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                  <div class="caption">
                    <h4> salade a</h4>
                    <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                    <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4">
                <div class="thumbnail ">
                  <img src="../images/images/salade2.png" alt="">
                  <div class="prix"> 9.10 € </div>
                  <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                  <div class="caption">
                    <h4> salade b</h4>
                    <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                    <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4">
                <div class="thumbnail ">
                  <img src="../images/images/salade3.png" alt="">
                  <div class="prix"> 9.10 € </div>
                  <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                  <div class="caption">
                    <h4>salade C</h4>
                    <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                    <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4">
                <div class="thumbnail ">
                  <img src="../images/images/salade4.png" alt="">
                  <div class="prix"> 9.10 € </div>
                  <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                  <div class="caption">
                    <h4> salade D</h4>
                    <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                    <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4">
                <div class="thumbnail ">
                  <img src="../images/images/salade5.png" alt="">
                  <div class="prix"> 9.10 € </div>
                  <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                  <div class="caption">
                    <h4>salade E</h4>
                    <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                    <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--************************** onglets des boissons *********************** -->
          <div class="tab-pane" id="4">
            <div class="row">
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail ">
                  <img src="../images/images/cocacola.png" alt="">
                  <div class="prix"> 9.10 € </div>
                  <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                  <div class="caption">
                    <h4>cocacola</h4>
                    <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                    <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4">
                <div class="thumbnail ">
                  <img src="../images/images/cocazero.png" alt="">
                  <div class="prix"> 9.10 € </div>
                  <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                  <div class="caption">
                    <h4>coca zero</h4>
                    <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                    <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4">
                <div class="thumbnail ">
                  <img src="../images/images/fanta.png" alt="">
                  <div class="prix"> 9.10 € </div>
                  <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                  <div class="caption">
                    <h4>fanta</h4>
                    <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                    <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4">
                <div class="thumbnail ">
                  <img src="../images/images/light.png" alt="">
                  <div class="prix"> 9.10 € </div>
                  <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                  <div class="caption">
                    <h4>coca light</h4>
                    <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                    <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4">
                <div class="thumbnail ">
                  <img src="../images/images/nesta.png" alt="">
                  <div class="prix"> 9.10 € </div>
                  <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                  <div class="caption">
                    <h4>nestea</h4>
                    <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                    <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ****************************** onglets desserts ************************** -->
          <div class="tab-pane" id="5">
            <div class="row">
              <div class="col-sm-6 col-md-4">
                <div class="thumbnail ">
                  <img src="../images/images/suplementFrite.png" alt="">
                  <div class="prix"> 9.10 € </div>
                  <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                  <div class="caption">
                    <h4> frites moyennes</h4>
                    <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                    <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4">
                <div class="thumbnail ">
                  <img src="../images/images/poulet.png" alt="">
                  <div class="prix"> 9.10 € </div>
                  <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                  <div class="caption">
                    <h4> poulets</h4>
                    <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                    <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4">
                <div class="thumbnail ">
                  <img src="../images/images/nugets.png" alt="">
                  <div class="prix"> 9.10 € </div>
                  <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                  <div class="caption">
                    <h4>nuggets</h4>
                    <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                    <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4">
                <div class="thumbnail ">
                  <img src="../images/images/nugettes2.png" alt="">
                  <div class="prix"> 9.10 € </div>
                  <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                  <div class="caption">
                    <h4>fondant frommage</h4>
                    <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                    <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4">
                <div class="thumbnail ">
                  <img src="../images/images/donuts.png" alt="">
                  <div class="prix"> 9.10 € </div>
                  <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                  <div class="caption">
                    <h4>donuts</h4>
                    <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                    <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4">
                <div class="thumbnail ">
                  <img src="../images/images/rondelle.png" alt="">
                  <div class="prix"> 9.10 € </div>
                  <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                  <div class="caption">
                    <h4> cerles</h4>
                    <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                    <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4">
                <div class="thumbnail ">
                  <img src="../images/images/d2.png" alt="">
                  <div class="prix"> 9.10 € </div>
                  <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                  <div class="caption">
                    <h4>bronies</h4>
                    <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                    <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4">
                <div class="thumbnail ">
                  <img src="../images/images/d4.png" alt="">
                  <div class="prix"> 9.10 € </div>
                  <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                  <div class="caption">
                    <h4> milkshake</h4>
                    <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                    <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4">
                <div class="thumbnail ">
                  <img src="../images/images/d5.png" alt="">
                  <div class="prix"> 9.10 € </div>
                  <!-- caption ici c'est pour mettre tous les elements en dessous de l'images -->
                  <div class="caption">
                    <h4>sunday 2</h4>
                    <p> sandwich : burger, salade, tomate, oignon + frites + boisson</p>
                    <a href="#" class="btn btn-info" role='button'><span class="glyphicon glyphicon-shopping-cart"> ajouter à la commande</span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
       </div>
   </div>
  </body>
</html>
