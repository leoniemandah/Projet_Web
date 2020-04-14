<?php
class connexionDB
{
  private $host    = 'localhost';  // nom de l'host  
  private $name    = 'airbnb';    // nom de la base de donnée
  private $user    = 'airbnb';       // utilisateur 
  private $pass    = 'sfe2kktlJ9s8lEP9';       // mot de passe (il faudra peut-être mettre '' sous Windows)
  private $connexion;

  public function __construct($host = null, $name = null, $user = null, $pass = null)
  {
    $this->host = $host;
    $this->name = $name;
    $this->user = $user;
    $this->pass = $pass;
    try {
      // Comme on a vu en cours :
      // DSN, USER, PASSWORD
      $this->connexion = new PDO(
        'mysql:host=' . $this->host . ';dbname=' . $this->name,
        $this->user,
        $this->pass
      );
    } catch (PDOException $e) {
      echo 'Erreur : Impossible de se connecter  à la BDD !';
      die();
    }
  }

  /**
   * Get the value of connexion
   */
  public function getConnexion()
  {
    return $this->connexion;
  }

  /**
   * Set the value of connexion
   *
   * @return  self
   */
  public function setConnexion($connexion)
  {
    $this->connexion = $connexion;

    return $this;
  }
}
