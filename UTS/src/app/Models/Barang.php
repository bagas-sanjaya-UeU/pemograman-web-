<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Barang extends Model
{
    use SoftDeletes, HasFactory;
    protected $table = 'barangs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'barangName',
        'barangCode',
        'barangStock',
        'barangPrice',
    ];
}
