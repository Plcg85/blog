<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [ //para asignacion masiva, si no coinciden, no se hacen lo contrario es protected $guarded = ['id'];
        'title',
        'slug',
        'content',
        'category',
    ];



    protected $table = 'posts';

    protected function casts(): array //castear los valores de la base de datos
    {
        return [
            'published_at' => 'datetime',
            'is_active' => 'boolean',
        ];
    }


    //mutadores, controlan la que los valores sean correctos antes de guardarlos hay que importar ....Attribute;
    protected function title(): Attribute
    {
        return Attribute::make(                 //mutador
            set: function ($value) {
                return strtolower($value);
            },
            get: function ($value) {            //accesor
                return ucfirst($value);
            }
        );
    }

    public function getRouteKeyName(): string //para que busque por titulo en vez de por id
    {
        return 'slug';
    }
}
