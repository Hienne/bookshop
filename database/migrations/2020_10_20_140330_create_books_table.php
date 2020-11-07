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
            $table->increments('id');
            $table->string('book_name', 255);
            $table->text('description')->nullable();
            $table->date('publish_date')->nullable();
            $table->integer('author_id')->nullable()->unsigned();
            $table->integer('company_id')->nullable()->unsigned();
            $table->integer('category_id')->nullable()->unsigned();
            $table->string('publishing_house')->nullable();
            $table->integer('number_of_pages')->nullable();
            $table->bigInteger('price')->nullable();
            $table->bigInteger('cover_price')->nullable();
            $table->string('book_image')->nullable();
            $table->double('rate')->nullable();
            
            $table->foreign('author_id')->references('id')->on('authors');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamps();
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
