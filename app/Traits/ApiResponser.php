<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

trait ApiResponser
{
    public function successResponse($data = '', $code = 200)
    {
        return response()->json($data, $code);
    }

    public function errorResponse($message = null, $code = 500)
    {
        return response()->json(['error' => $message, 'code'  => $code], $code);
    }

    public function getAll(Collection $collection, $code = 200)
    {
        return $this->successResponse($collection, $code);
    }

    public function getOne(Model $instance = null, $code = 200)
    {
        return $this->successResponse($instance, $code);
    }
}
