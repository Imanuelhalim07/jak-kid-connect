<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController; // <--- Inilah base Laravel Controller yang sebenarnya

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
