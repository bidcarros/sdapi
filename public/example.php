<?php

// incluse API class
include '../src/smart/api.php';

// auth settings
$sdl = 'http://api.smartdealer.com.br';
$usr = 'teste';
$pwd = '56e893aebac5c5e549997b9a61ccf3f76bfe2580';

# OR

$sdl = 'instancia';
$usr = 'teste';
$pwd = '56e893aebac5c5e549997b9a61ccf3f76bfe2580';

$sdl = 'http://localhost/sdsweb/webservice/rest/';
$usr = 'brsocial';
$pwd = '87d2ad4299ebba438f727917e2744fa06e5008c0';
$sdl = 'api';

// instace SD Api
$api = new Smart\Api($sdl, $usr, $pwd, array('debug' => false, 'output_format' => 1));

// call Restful route
$response = $api->get('/config/affiliates/');

// collect erros
$sts = $api->getError();

// if error, show and stop
if ($sts) {
    var_dump($sts);
    die;
}

// debug response
echo "<pre>";
var_dump($response);
