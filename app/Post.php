<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Post extends Model {

    protected $fillable = ['title','slug','content','online','category_id'];

    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function scopePublished($query){
        return $query->where('online',true)->whereRaw('created_at < NOW()');
    }
    public function scopeSearchByTitle($query,$q){
        return $query->where('slug',' LIKE', '%' .$q. '%');
    }
    public function setSlugAttribute($value){
        if(empty($value)){
            $this->attributes['slug']= Str::slug($this->title);
        }
    }
    public function getDates(){
        return ['created_at','published_at','updated_at'];
    }

}

