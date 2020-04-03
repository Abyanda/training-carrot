<?php

return [
    'process_definition_key' => 'penerimaan_pegawai',

    'label' => 'Penerimaan Pegawai',

    'whitelist' => [
        [
            'task' => 'pendaftaran',
            'attributes' => [
                'active' => false,
            ],
        ],
        [
            'task' => 'verifikasi_berkas',
            'attributes' => [
                'active' => false,
            ],
        ],
        [
            'task' => 'input_jawaban',
            'attributes' => [
                'active' => false,
            ],
        ],
        [
            'task' => 'verifikasi_teknis',
            'attributes' => [
                'active' => false,
            ],
        ],
        [
            'task' => 'input_data_pegawai',
            'attributes' => [
                'active' => false,
            ],
        ],
    ],
];
