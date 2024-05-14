<?php

$url = $_SERVER["SCRIPT_NAME"];
$root = $_SERVER["DOCUMENT_ROOT"];

$tables = ["/index.php"];
foreach ($tables as $table) {
    $verif = preg_match("#" . $table . "#", $url);
    if ($verif) {
        $var = $table;
    }
}

$url = explode($var, $url);

//-----constant URL
define("URL", $url[0]);
//-----constant ROOT
define("ROOT", $root . URL);

//-----constant PUBLIQUE
define("PUBLIQUE", $url[0] . "/public");
//-----constant MODEL
define("MODEL", ROOT . "/app/model");
//-----constant VIEW
define("VIEW", ROOT . "/app/view");
//-----constant VIEW
define("CONTROL", ROOT . "/app/controller");
