<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccineRecord extends Model
{
    use HasFactory;
    protected $table = 'vaccinerecord';
    protected $fillable = [
        'std_id',
        'vac_id',
        'vaccined_date'
    ];
}
