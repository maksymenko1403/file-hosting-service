<?php


namespace App\Filters;


use Illuminate\Http\Request;

class FileFilters extends QueryFilter
{
    protected $request;

//    public function __construct(Request $request)
//    {
//        $this->request = $request;
//        parent::__construct($request);
//    }

    public function name($name)
    {
        return $this->builder->where('name', 'LIKE', "%$name%");
    }
    public function user($user)
    {
        return $this->builder->where('user_id',$user);
    }
}
