<?php

require_once __DIR__ . '/app/CharacterApi.php';
require_once __DIR__ . '/app/CharacterController.php';

// BACKEND_URL debe terminar en /api
$backendUrl = rtrim(getenv("API_BACKEND_URL") ?: "https://examen-render-rx4q.onrender.com/api", "/");

// La API de personajes vive en /api/characters
$apiBaseUrl = $backendUrl . "/characters";

$api = new CharacterApi($apiBaseUrl);
$controller = new CharacterController($api);
$controller->listCharactersGrid();
