<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'CNPJ',
        'corporate_name',
        'contact_name',
        'telephone',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function address(){
        return $this->hasOne(Address::class);
    }
}
