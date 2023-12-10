<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

        protected $table = 'nilai';

        protected $fillable = [
        'kode_matkul',
        'mahasiswa_id',
        'dosen_id',
        'nilai_uts',
        'nilai_uas',
        'nilai_tugas',
        'nilai_akhir',
        ];

        public function mahasiswa_nilai(){
            return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id');
        }

        public function matakuliah_nilai(){
            return $this->belongsTo(Matakuliah::class, 'kode_matkul', 'kode_matkul');
        }

        public function dosen_nilai(){
            return $this->belongsTo(Dosen::class, 'dosen_id');
        }
}
