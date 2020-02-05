<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->collation('utf8_unicode_ci');
            $table->string('slug')->index()->collation('utf8_unicode_ci');
            $table->string('image',255)->collation('utf8_unicode_ci')->nullable();
            $table->text('summary')->collation('utf8_unicode_ci')->nullable();
            $table->text('description')->collation('utf8_unicode_ci')->nullable();
            $table->integer('price')->default(0);
            $table->integer('sale')->default(0);
            $table->integer('position')->default(0);
            $table->integer('is_active')->default(0);
            $table->integer('is_hot')->default(0);
            $table->integer('views')->default(0);
            $table->integer('category_id')->default(0);
            $table->integer('user_id')->default(0);
            $table->string('keyword_seo',255)->collation('utf8_unicode_ci')->nullable();
            $table->string('description_seo',255)->collation('utf8_unicode_ci')->nullable();
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
        Schema::dropIfExists('products');
    }
}
