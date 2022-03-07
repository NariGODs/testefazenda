<?php

private $numerocamera;
private $descricao;

public function getUser($numerocamera) {
  if($this->numerocamera == "1"):
    $descricao = "Câmera FB-2000";
  else if($this->numerocamera == "2")
    $descricao = "Câmera A900";
  endif;
  return $this->descricao;
}
