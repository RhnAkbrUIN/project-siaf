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
}
