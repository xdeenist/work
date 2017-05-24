<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $rimaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
    	'name',
    	'img',
    	'text'
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
