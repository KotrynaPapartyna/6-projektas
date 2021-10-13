<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');

            // rysio stulpelis- t.y. su kuo jungiasi
            //rysiui sudaryti reikia unsignedBigINteger
            $table->unsignedBigInteger('author_id'); // sitas turi suttapti su books ID (pvz)

            // sudaromas rysys tam migration file, kuriame yra rysio stulpelis- sitame (pvz)
            // autoriaus ID susijes      su ID              is lenteles Autoriai
            $table->foreign('author_id')->references('id')->on('authors');
            $table->timestamps();

            //RYSINIS STULPELIS- JO FILE- TURI BUTI PATS PASKUTINIS (GALIMA KEISTI SKAICIUKUS)
            // t.y. migrations failiukas tb veliausias

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
