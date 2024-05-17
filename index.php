<?php

require 'src/Observador.php';
require 'src/Sujeito.php';
require 'src/SalaDeChat.php';
require 'src/Usuario.php';

$salaDeChat = new SalaDeChat();

$usuario1 = new Usuario("Alice");
$usuario2 = new Usuario("Bob");

$salaDeChat->anexar($usuario1);
$salaDeChat->anexar($usuario2);

$salaDeChat->novaMensagem("Olá, Mundo!");

