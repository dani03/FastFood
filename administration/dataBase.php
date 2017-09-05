<?php
  class baseDedonnee {
    // nous declarons les variables
    private static $host = "localhost";
    private static $databaseName = "burger_king";
    private static $user = "phpmyadmin";
    private static $bdmdp = "root";
    private static $bd = null;

  // public static veut ici dire que la function appartient a la classe baseDedonnee
  // et non a l'instance sinon on devait ecrire (public function...)
    public static function connexion()
      {
        try {
          // on utilise "self::" car c'est une function static de la classe et non une instance
            self::$bd = new PDO("mysql:host=".self::$host.";dbname=".self::$databaseName,self::$user,self::$bdmdp);
        } catch (PDOException $e) {
          die($e->getMessage());
        }
        return self::$bd;
      }
  public static function deconnexion()
    {
      self::$bd = null;
    }
  }








 ?>
