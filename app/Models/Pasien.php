<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $fillable = [
        'kodepasien',
        'nama',
        'alamat',
        'lahir',
        'kelamin',
        'telepon'
    ];
    protected $guarded =['id'];

    protected $dates = ['lahir', 'created_at', 'updated_at', 'jadwal_kedatangan', 'jadwal_selesai'];

    public function rekam(){
        return $this->hasMany(Rekam::class, 'id');
    }
}
