<?php

namespace App\Models;

use App\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mehradsadeghi\FilterQueryString\FilterQueryString;

class File extends Model
{
    use HasFactory,Filterable;

    protected $fillable = [
        'name',
        'description',
        'file_path',
        'user_id',
        'is_private'
    ];

//    public function scopeSearch($query,$search){
//        return $query->when(isset($search),function ($query) use ($search) {
//           return $query->where("name", "LIKE","%{$search}%" );
//        });
//    }

    public function scopePublic($query){
        return $query->where('is_private',0);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
