<?php

// $output['listItems'] = [
//     [
//         'title' => 'Go to store',
//         'details' => 'get groceries',
//         'id' => '001'
//     ],
//     [
//         'title' => 'study',
//         'details' => 'react',
//         'id' => '002'
//     ]

// ];

$query = 'SELECT * FROM `items`';
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $row['complete'] = (BOOL) $row['complete'];;
        $output['listItems'][] = $row;
    }
    $output['success'] = true;
} else {
    $output['message'] = 'No To Do Items';
}



$output['success'] = true;