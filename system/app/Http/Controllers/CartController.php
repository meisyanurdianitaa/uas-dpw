<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Faker;


class CartController extends Controller
{
	function index(){
		$id_user = request()->user()->id;
		$data['list_produk']= $user->product;
		return view('produk.index', $data);
	}
}