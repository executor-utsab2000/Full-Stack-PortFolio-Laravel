<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationRequest;
use Illuminate\Http\Request;

class UserDataInsertController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ValidationRequest $request)
    {
        return $request;
    }
}
