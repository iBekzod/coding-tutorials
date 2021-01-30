<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function children(){
        return $this->hasMany( 'App\Models\Category', 'parent_id', 'id' );
      }
      
      public function parent(){
        return $this->hasOne( 'App\Models\Category', 'id', 'parent_id' );
      }
}
   