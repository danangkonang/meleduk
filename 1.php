<?php

function biodata()
{
    $data = [
        'nama' => 'danang',
        'age' => 25,
        'alamat' => 'klaten',
        'hobi' => [
            'game',
            'renang'
            ],
        'is_marrid' => 'belum',
        'scholl' => 'smk',
        'skill' => [
            "php",
            "css"
            ]
    ];

    
	echo json_encode($data);
}
biodata();
