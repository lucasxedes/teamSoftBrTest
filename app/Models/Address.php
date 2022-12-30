<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_address',
        'public_place',
        'number',
        'complement',
        'district',
        'city',
        'state',
        'zip_code',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
