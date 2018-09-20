<?php

$renderer_source = file_get_contents('node_modules/vue-server-renderer/basic.js');
$app_source = file_get_contents('public/js/server.js');

$url = parse_url($_SERVER['REQUEST_URI']);
$path = $url['path'];

$v8 = new \V8Js();
ob_start();

$js =
<<<EOT
var process = { env: { VUE_ENV: "server", NODE_ENV: "production" } };
this.global = { process: process };
var url = "$path";
EOT;

$v8->executeString($js);
$v8->executeString($renderer_source);
$v8->executeString($app_source);

echo ob_get_clean();
?>

<script src='public/js/client.js'></script>
