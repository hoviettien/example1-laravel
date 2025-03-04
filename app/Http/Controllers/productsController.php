<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class productsController extends Controller
{
    public function index(){
        if(!Schema::hasTable('products2')){
            Schema::create('products2', function ( $table){
                $table -> increments('id');
                $table -> string('name');
                $table -> Decimal('price', 10,2);
                $table -> mediumText('content');
                $table -> boolean('active');
                $table -> timestamps();
            });
        }
        return 'Done';
        
    }
}
