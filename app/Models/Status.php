<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Status extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['name', 'for'];
    protected $translatable = ['name'];


    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
