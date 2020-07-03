<?php
// Secure Funksiyalari ucun
require_once 's-main-scripts/security/main_secure.php';
//Lang fayllari ucun
if (!isset($_COOKIE['lang'])) {
    require_once 's-lang/lang_az.php';
    s_setcookie('lang', 'az');
} elseif (s_getcookie('lang') === 'az' || s_getcookie('lang') === 'en') {
    if (s_getcookie('lang') === 'az') {
        require_once 's-lang/lang_az.php';
    } elseif (s_getcookie('lang') === 'en') {
        require_once 's-lang/lang_en.php';
    }
} else {
    header('Location:s-lang/lang-config.php?lang=az');
    exit();
} ?>