<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataPengunjung extends Model
{
    use HasFactory;
    protected $table = "biodata_pengunjung";
    // protected $fillable = ['']
    protected $guarded = [];
}
