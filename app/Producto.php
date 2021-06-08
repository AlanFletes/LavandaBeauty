<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
protected $fillable = [
'Nombre','Descripcion','Categoria','Precio','Imagen'];
}
