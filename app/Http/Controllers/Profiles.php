<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Profiles extends Controller
{
  public function index()
{
   return Http::get('https://jsonplaceholder.typicode.com/posts')->json();

}
}

//   function list()
//{
//   return Http::get('https://jsonplaceholder.typicode.com/posts')->body();
//
//}