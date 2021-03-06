<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   
    // funcion para retirnar el campo slug
    public function getRouteKeyName()
    {
        return 'slug';
    }

    use HasFactory;

    //asignacion masica para los que no quieres que se guarden en la DB, y si se utiliza fillable
    // es para guardar los que quieres que se envien a la DB
    protected $guarded = ['id', 'create_at', 'update_at'];

    //Relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    //Relacion muchos a muchos
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //Relacion uno a uno poliformica
    public function image(){
       return $this->morphOne(Image::class, 'imageable');
    }
}
