<?php 
class Usuarios{
  private $id;
  private $email;
  private $senha;
  private $permissoes;

  public function __construct($id, $email , $senha, $permissoes){
    $this->id = $id;
    $this->email = $email;
    $this->senha = $senha;
    $this->permissoes = $permissoes;
  }
}
?>