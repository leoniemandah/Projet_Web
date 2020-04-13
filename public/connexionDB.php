      <?php
    // Déclaration d'une nouvelle classe
    class connexionDB {
      private $host    = 'localhost';  // nom de l'host  
      private $name    = 'airbnb';    // nom de la base de donnée
      private $user    = 'airbnb';       // utilisateur 
      private $pass    = 'sfe2kktlJ9s8lEP9';       // mot de passe (il faudra peut-être mettre '' sous Windows)
      private $connexion;
      
      function __construct($host = null, $name = null, $user = null, $pass = null){
        if($host != null){
          $this->host = $host;           
          $this->name = $name;           
          $this->user = $user;          
          $this->pass = $pass;
          
        }
        try{
          $this->connexion = new PDO('mysql:host=localhost' . $this->host . ';dbname=airbnb' . $this->name . ';username=airbnb' . $this->user . ';mdp=sfe2kktlJ9s8lEP9' . $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8', 
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        }catch (PDOException $e){
          echo 'Erreur : Impossible de se connecter  à la BDD !';
          die();
        }
      }
    
  
   public function query($sql, $data = array()){
        $req = $this->connexion->prepare($sql);
        $req->execute($data);
        return $req;
      }
      
      public function insert($sql, $data = array()){
        $req = $this->connexion->prepare($sql);
        $req->execute($data);
      }
    }
    
    // Faire une connexion à votre fonction
    $DB = new connexionDB();
  ?>