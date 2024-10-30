<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model {
    public static $data = [
        [
            'id' => 1,
            'nama' => 'Rio',
            'alamat' => 'Tasikmalaya',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'umur' => 17,
        ],
        [
            'id' => 2,
            'nama' => 'Nida',
            'alamat' => 'Tasikmalaya',
            'jenis_kelamin' => 'Perempuan',
            'agama' => 'Islam',
            'umur' => 16,
        ]

    ];
};
