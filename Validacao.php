<?php


/** 
$validacao = Validacao::validar([
  'name' => 'required',
  'email' => ['required', 'email', 'confirmed'],
  'senha' => ['required', 'min:8', 'max:30', 'strong']
], $_POST);

if ($validacao->naoPassou()) {
  $_SESSION['validacoes'] = $validacao->validacoes;
  header('location:/signup');
  exit();
}

 $validacoes = [];
 $name = $_POST['name'];
 $email = $_POST['email'];
 $email_confirmed = $_POST['email_confirmed'];
 $senha = $_POST['senha'];


 if (strlen($name) == 0) {
   $validacoes[] = 'nome obrigatorio';
 }

 //Validacao de email 01
 if (strlen($email) == 0) {
   $validacoes[] = 'email obrigatorio';
 }

 // Validaçao de email
 if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
   $validacoes[] = 'O email é invalido.';
 }

 if ($email != $email_confirmed) {
   $validacoes[] = 'O email de confirmaçao está diferente.';
 }

 // validaçao de senha
 if (strlen($senha) < 6 || strlen($senha) > 8) {
   $validacoes[] = 'A senha precisa ter entre 6 e 8 caracters';
 }

 if (!str_contains($senha, '*')) {
   $validacoes[] = 'A senha precisa ter um * no nela.';
 }
 */

class Validacao
{

  public $validacoes = [];

  public static function validar($regras, $dados)
  {
    $validacao = new self;
    foreach ($regras as $campo => $regrasDoCampo) {
      foreach ($regrasDoCampo as $regra) {

        $valorDoCampo = $dados[$campo];

        if ($regra == 'confirmed') {
          $validacao->$regra($campo, $valorDoCampo, $dados["{$campo}_confirmed"]);
        } elseif (str_contains($regra, ':')) {
          $temp = explode(':', $regra);
          $regra = $temp[0];
          $regraAr = $temp[1];
          $validacao->$regra($regraAr, $campo, $valorDoCampo);
        } else {
          $validacao->$regra($campo, $valorDoCampo);
        }
      }
    }
    return $validacao;
  }
  private function required($campo, $valor)
  {
    if (strlen($valor) == 0) {
      $this->validacoes[] = "O $campo é obrigatorio.";
    }
  }
  private function email($campo, $valor)
  {
    if (! filter_var($valor, FILTER_VALIDATE_EMAIL)) {
      $this->validacoes[] = "O $campo é inválido.";
    }
  }
  private function confirmed($campo, $valor, $valorDeConfirmed)
  {

    if ($valor != $valorDeConfirmed) {
      $this->validacoes[] = "O $campo de confirmação esta diferente.";
    }
  }

  private function min($min, $campo, $valor)
  {
    if (strlen($valor) <= $min) {
      $this->validacoes[] = "O $campo precisa ter no mínimo de $min caracters.";
    }
  }
  private function max($max, $campo, $valor)
  {
    if (strlen($valor) > $max) {
      $this->validacoes[] = "O $campo precisa ter no maximo de $max caracters.";
    }
  }

  private function strong($campo, $valor)
  {
    if (!strpbrk($valor, '!@#$%^&*()-_=+[]{}|;:,.<>?')) {
      $this->validacoes[] = "O $campo precisa ter um caracter especial nela.";
    }
  }
  public function naoPassou()
  {

    flash()->push('validacoes', $this->validacoes);
    // $_SESSION['validacoes'] = $this->validacoes;
    return sizeof($this->validacoes) > 0;
  }
}
