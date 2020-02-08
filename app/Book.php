<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  /* Books contain only titles and authors. It's possible
  to edit these attributes through the app or terminal.*/
  protected $fillable = [
        'title',
        'author',
    ];
}
