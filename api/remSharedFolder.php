<?php
// Remover compartilhamento
// remSharedFolder.php?section=vagrant

require_once('util.php');

$section = $_GET['section'] ?? null;

$result = '';

if ($section) {
  remSharedFolder($section);
  $result = ['status' => 'compartilhamento removido com sucesso'];
} else {
  $result = ['status' => 'parametros invalidos'];
}

header('Content-type: application/json; charset=UTF-8');
echo json_encode($result);
?>
