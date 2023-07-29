<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    /**
     * The district's ID.
     *
     * @var string $primaryKey
     */
    protected $primaryKey = 'district_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'district_id',
        'district_name',
        'city_id',
        'city_name',
    ];
}
