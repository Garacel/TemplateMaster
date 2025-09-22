<?php

require __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config/config.php';

session_start();

// ✅ 1️⃣ Validar contra 'user_context' (el objeto real)
if (
    empty($_SESSION['user_context']) ||
    !($_SESSION['user_context'] instanceof \App\Model\UserContext)
) {
    require __DIR__ . '/loginConverse.php';
    exit;
}

// ✅ 2️⃣ Si hay sesión válida, cargar HTML base
require __DIR__ . '/views/htmlBase.php';
exit;
