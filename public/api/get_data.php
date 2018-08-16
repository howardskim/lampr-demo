<?php

$data = [
    [
        'title' => 'Do stuff',
        'details' => 'Do all the things'
    ],
    [
        'title' => 'Do homework',
        'details' => 'study react'
    ],
    [
        'title' => 'Go to gym',
        'details' => 'work out'
    ]
];

$output = json_encode($data);
print($output);