<?php
// Adicionar compartilhamento
// addSharedFolder.php?section=vagrant&usuario=convidado&path=/home/vagrant&validUsers=vagrant&comment=testando

require_once('util.php');

$section = $_GET['section'] ?? null;
$usuario = $_GET['usuario'] ?? null;
$path = $_GET['path'] ?? null;
$validUsers = $_GET['validUsers'] ?? null;
$comment = $_GET['comment'] ?? null;

$result = '';

if ($section && $usuario && $path && $validUsers && $comment) {
  addSharedFolder($section, $comment, $path, $validUsers);
  $result = ['status' => 'compartilhamento criado com sucesso'];
} else {
  $result = ['status' => 'parametros invalidos'];
}

header('Content-type: application/json; charset=UTF-8');
echo json_encode($result);
?>
