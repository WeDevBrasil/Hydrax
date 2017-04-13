<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FkTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function ($table){
            $table->foreign('company_id')->references('id')->on('companies');
        });
    
        Schema::table('providers', function ($table){
            $table->foreign('company_id')->references('id')->on('companies');
        });
    
        Schema::table('users', function ($table){
            $table->foreign('company_id')->references('id')->on('companies');
        });
        
        Schema::table('orders', function ($table){
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('company_id')->references('id')->on('companies');
        });
    
        Schema::table('product_provider', function ($table){
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('provider_id')->references('id')->on('providers');
        });
    
        Schema::table('order_product', function ($table){
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('product_id')->references('id')->on('products');
        
        });
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
