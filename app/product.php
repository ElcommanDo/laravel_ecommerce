<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    
    protected $fillable = [
        'prod_name',
        'prod_price',
        'prod_quantity'

];

public function category()
{
    return $this->belongsTo('App\category');
}

}
