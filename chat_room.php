<?php
namespace Chat;
require_once 'vendor/autoload.php';

use Chat\Usuario;

$salaDeChat = new SalaDeChat();

$usuario1 = new Usuario("Alice");
$usuario2 = new Usuario("Bob");

$salaDeChat->anexar($usuario1);
$salaDeChat->anexar($usuario2);

echo "Sala de chat iniciada. Digite mensagens para notificar os usuários.\n";

while (true) {
    $mensagem = readline("Mensagem: ");
    $salaDeChat->novaMensagem($mensagem);
}
