<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Product extends Model
{
    protected $table = 'sell';

    protected $fillable = [
        'id',
        'place',
        'genre',
        'creat',
        'gameName',
        'image',
        'price'
    ];

    public function toArray()
    {
        return [
            'id' => $this->id,
            'place' => URL::to('/') . '/' .$this->place,
            'genre' => $this->genre,
            'creat' => $this->creat,
            'gameName' => $this->gameName,
            'image' => URL::to('/') . '/' . $this->image,
            'price' => (double)$this->price
        ];
    }
}
