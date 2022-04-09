<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Imageadd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { { {
                Schema::create('Imageadds', function (Blueprint $table) {
                    $table->id();
                    $table->string('image');

                    $table->integer('user_id');
                    $table->timestamps();
                });
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
