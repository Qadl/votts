<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Keyvs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { { {
                Schema::create('keyvs', function (Blueprint $table) {
                    $table->id();
                    $table->string('fName');
                    $table->string('lName');
                    $table->string('secretv');
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
