<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';

        protected $fillable = [
        'nip',
        'name_dosen',
        'jk',
        'kode_matkul',
        ];
    
        public function matakuliah_dosen(){
            return $this->belongsTo(Matakuliah::class, 'kode_matkul', 'kode_matkul');
        }

        public function mahasiswa()
        {
            return $this->belongsToMany(Mahasiswa::class, 'mahasiswa_dosen', 'dosen_id', 'mahasiswa_id');
        }

        public function dosen()
        {
            return $this->belongsTo(Dosen::class);
        }

        // public function mahasiswa(){
        //     return $this->hasMany(Mahasiswa::class);
        // }

        public function nilai_dosen(){
            return $this->hasMany(Nilai::class);
        }
}
