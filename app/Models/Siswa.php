<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas';
    protected $fillable = [
        'nisn',
        'nama_siswa',
        'kota',
        'jk',
        'agama',
        'jurusan',
        'kelas',
        'username'
    ];

    public function jurusann()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan', 'id');
    }

    public function kelass()
    {
        return $this->belongsTo(Kelas::class, 'kelas', 'id');
    }
}
