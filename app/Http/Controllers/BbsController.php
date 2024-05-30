<?php

namespace App\Http\Controllers;

use App\Models\Bb;
class BbsController extends Controller
{
	public function detail(Bb $bb){
	return view('detail', ['bb'=>$bb]);
	}
   public function index(){
	   $context = ['bbs' => Bb::latest() ->get()];
	   return view('index', $context);
   
   }}

