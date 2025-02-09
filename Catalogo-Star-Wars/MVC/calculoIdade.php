<?php
 
  function calcularIdade($dataLancamento) {
    $hoje = new DateTime();
    $lancamento = new DateTime($dataLancamento);

    $intervalo = $hoje->diff($lancamento);

    return [
        'anos' => $intervalo->y,
        'meses' => $intervalo->m,
        'dias' => $intervalo->d
    ];




  }





?>