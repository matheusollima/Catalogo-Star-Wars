<?php

class filme{
   public $titulo;
   public $episodio_id;
   public $sinopse;
   public $data_lançamento;
   public $diretor;
   public $produtor;
   public $personagens;


   public function __construct($titulo, $episodio_id, $sinopse, $data_lançamento, $diretor, $produtor, $personagens){
    $this->setTitulo($titulo);
    $this->setEpisodio_id($episodio_id);
    $this->setSinopse($sinopse);
    $this->setData_lançamento($data_lançamento);
    $this->setDiretor($diretor);
    $this->setProdutor($produtor);
    $this->setPersonagens($personagens);
   }


 public function getTitulo(){
    return $this->titulo;
 }
 public function getEpisodio_Id(){
   return $this->episodio_id;
}
public function getSinopse(){
   return $this->sinopse;
}
public function getData_lançamento(){
   return $this->data_lançamento;
}
public function getDiretor(){
   return $this->diretor;
}
public function getProdutor(){
   return $this->produtor;
}

public function getPersonagens(){
   return $this->personagens;
}



 public function setTitulo($titulo){
    $this->titulo = $titulo;
 }
 public function setEpisodio_id($episodio_id){
   $this->episodio_id = $episodio_id;
}
 public function setSinopse($sinopse){
   $this->sinopse = $sinopse;
}
 public function setData_lançamento($data_lançamento){
   $this->data_lançamento = $data_lançamento;
}
 public function setDiretor($diretor){
   $this->diretor = $diretor;
}
 public function setProdutor($produtor){
   $this->produtor = $produtor;
}
public function setPersonagens($personagens){
   $this->personagens = $personagens;
}

public function listarPersonagens($p){
  $personagensUrl = $p;
  $personagensLista = array();
  forEach($personagensUrl as $f){
   $url = $f;
   $ch = curl_init($url);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
   $personagens = json_decode(curl_exec($ch), true);
   $personagensLista[] = $personagens;
 }
  return $personagensLista;
}


}
?>