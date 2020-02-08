<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  /* Books contain only titles and authors, which must
  be strings*/
  protected $fillable = [
        'title',
        'author',
    ];
}
