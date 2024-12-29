<?php 
class Stagire 
{
  private   $id;
  private $nom;
  private $prenom;	
  private $age;
  private $login;	
  private $password;

  
  public function getId(){
    $this->id;
  }
  public function getNom(){
    $this->nom;
  }
  public function getPrenom(){
    $this->prenom;
  }
  public function getAge(){
    $this->age;
  }
  public function getLogin(){
    $this->login;
  }
  public function getPassword(){
    $this->password;
  }

  public function setNom($nooom){
    $this->nom=$nooom;
  }
  public function setPrenom($prenom){
    $this->prenom=$prenom;
  }
  public function setAge($age){
    $this->age=$age;
  }
  public function setLogin($login){
    $this->login=$login;
  }
  public function setPassword($password){
    $this->password=$password;
  }

  public function creat()
{
  $sqlStart=$this->database()-> prepare(" INSERT into stagiaire VALUES(NULL,?,?,?,?,?)");
  return $sqlStart->execute([
    $this->nom,
    $this->prenom,
    $this->age,
    $this->login,
    $this->password
  ]) ;                                 
 
}
   


 

  public function database()
  {
    return new PDO('mysql:host=localhost;dbname=offpt', "root", "");

  }


  

}