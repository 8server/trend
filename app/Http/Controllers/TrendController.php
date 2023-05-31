<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trend;

class TrendController extends Controller
{
    public function index(Trend $trend)
  {
    return $trend->get();
  }
}