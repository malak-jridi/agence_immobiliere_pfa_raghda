<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{public $timestamps = false; 
       protected $primaryKey = 'id_ann';
    protected $fillable = [
        'id_ann','name_bien', 'caracterestique','Description','image','price','date-an','type_an','catégorie','visualisation','id_prop'
        ];
        protected $table = 'annonces';
      
        protected $dates = ['created_at','updated_at'];
    
      
    }

