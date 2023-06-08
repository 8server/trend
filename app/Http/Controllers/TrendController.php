<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use XFran\GTrends\GTrends;

class TrendController extends Controller
{
    public function index()
{
    
    $options = [
    'hl' => 'ja-JP',
    'tz' => -540,
    'geo' => 'JP',
    ];
    $gt = new GTrends($options);
    
    $keyWordList = ['Java'];
    $category = 0;
    $time = 'today 12-m';
    $property = '';
    
    $result = $gt->explore($keyWordList, $category, $time, $property);
        
    dd($result);
        
    return view('trends/index')->with(['trends' => $result]);
  }
}