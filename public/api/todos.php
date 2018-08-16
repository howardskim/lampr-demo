<?php

//this is a great way to print out arrays in php
// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';


$output = [
    'success' => false  
];
require_once('db_connect.php');

$method = $_SERVER['REQUEST_METHOD'];
$action = $_GET['action'];

switch($method){
    case 'GET':
    require_once('get/'.$action.'.php');
    break;
    case 'POST':
    $output['message'] = 'POST request made';
    break;
    case 'PUT':
    $output['message'] = 'PUT request made';
    break;
    case 'PATCH':
    $output['message'] = 'PATCH request made';
    break;
    case 'DELETE':
    $output['message'] = 'DELETE request made';
    break;
    default:
    $output['Error'] = 'Unknown request made';

};
$output = json_encode($output);
print $output;