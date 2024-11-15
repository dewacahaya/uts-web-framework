<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan2301010032 extends Model
{
    use HasFactory;

    protected $table = 'pelanggan2301010032';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    protected $fillable = [
        'kode',
        'nama',
        'alamat',
        'jenis_kelamin',
        'tanggal_lahir',
    ];
}
