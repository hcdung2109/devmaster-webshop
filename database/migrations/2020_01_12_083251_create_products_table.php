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
            $table->string('image',255)->collation('utf8_unicode_ci')->nullable(); // anh
            $table->text('summary')->collation('utf8_unicode_ci')->nullable(); // tom tat
            $table->text('description')->collation('utf8_unicode_ci')->nullable(); // mo ta
            $table->integer('price')->default(0); // gia doc
            $table->integer('sale')->default(0); // gia khuyen mai
            $table->integer('position')->default(0); // vi tri
            $table->integer('is_active')->default(1); // trang thai
            $table->integer('is_hot')->default(0); // san pham hot
            $table->integer('views')->default(0); // luot xem
            $table->integer('category_id')->default(0); // chon danh muc
            $table->integer('user_id')->default(0); // luu nguoi tao
            $table->string('keyword_seo',255)->collation('utf8_unicode_ci')->nullable(); // seo từ khóa google
            $table->string('description_seo',255)->collation('utf8_unicode_ci')->nullable(); //
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
