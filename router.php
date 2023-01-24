<?php
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];




// if ($uri === "/") {
//     require "controller/index.php";
// } else if ($uri === "/about") {
//     require "controller/about.php";
// } else if ($uri === "/contact") {
//     require "controller/contact.php";
// }

$routs = [
    "/" => "controller/index.php",
    "/about" => "controller/about.php",
    "/contact" => "controller/contact.php"
];

function routController($uri, $routs) {
    if (array_key_exists($uri, $routs)) {
        require $routs[$uri];
    } else {
        abort();
    }
}

function abort($code = 404) {
    http_response_code($code);
    require "views/{$code}.php";
    die();
}

routController($uri, $routs);