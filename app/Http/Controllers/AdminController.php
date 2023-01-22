<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;


class AdminController extends Controller
{
 public function view_category(){
    return view('admin.category');
 }
 
 public function add_category(Request $request){
   $data = new category;
   $data -> category_name =  $request ->category;
   $data -> save();
   return redirect()-> black()->with('message', 'Category added Successfully');

 }
}