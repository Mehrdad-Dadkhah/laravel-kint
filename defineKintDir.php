<?php
$basePath   = explode('vendor', __DIR__)[0];
$lines      = file($basePath . '/public/index.php', FILE_IGNORE_NEW_LINES);
$update     = true;
$changeLine = null;

foreach ($lines as $key => $text) {
    if (trim($text) == "require __DIR__.'/../bootstrap/autoload.php';") {
        $changeLine = $key;
    }

    if (trim($text) == "require '" . __DIR__ . "/init_helpers.php';") {
        $update = false;
    }
}

if ($update) {
    $lines[$changeLine] = "\nrequire '" . __DIR__ . "/init_helpers.php';\n" . $lines[$changeLine];
    file_put_contents($basePath . '/public/index.php', implode("\n", $lines));
}
