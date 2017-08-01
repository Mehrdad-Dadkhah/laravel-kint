<?php
$basePath = explode('vendor', __DIR__)[0];
$lines    = file($basePath . '/public/index.php', FILE_IGNORE_NEW_LINES);

foreach ($lines as $key => $text) {
    if ($text == "require __DIR__.'/../bootstrap/autoload.php';") {
        $lines[$key] = "\ndefine('KINT_DIR', '" . __DIR__ . "');\n" . $text;

        break;
    }
}

file_put_contents($basePath . '/public/index.php', implode("\n", $lines));
