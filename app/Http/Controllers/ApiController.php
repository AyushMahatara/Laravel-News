<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        return News::get();
    }
}
