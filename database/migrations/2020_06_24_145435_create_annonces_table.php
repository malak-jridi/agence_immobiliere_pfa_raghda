<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::table('annonces', function (Blueprint $table) {
                $table->increments('id_ann');
                $table->string('name_bien');
                $table->string('caracterestique');
                $table->string('Description');
                $table->integer('image')->nullable();
                $table->integer('price')->nullable();
                $table->string('date_an')->nullable();
                $table->string('type_an');
                $table->string('catégorie');
                $table->Integer('id_prop');
                $table->boolean('visualisation')->nullable();
                $table->timestamps();

            });
        }            }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     function down()
    {
        Schema::dropIfExists('annonces');
            //
    }

