<?php

// Composerでインストールしたライブラリを一括読み込み
require_once __DIR__ . '/vendor/autoload.php';

error_log("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa");

$inputString = file_get_contents('php://input');
error_log($inputString);

error_log("bbbbbbbbbbbbbbbbbbbbbbbbbbbbb");

?>
