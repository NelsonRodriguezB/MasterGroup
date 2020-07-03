<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class Message extends Model
{
    //
    public function up()
    {
    	Schema::create('message', function (Blueprint $table){
    		$table->increments('id');
    		$table->timestamps();
    	});
    }

    public function down()
    {
        Schema::dropIfExists('message');
    }
}
