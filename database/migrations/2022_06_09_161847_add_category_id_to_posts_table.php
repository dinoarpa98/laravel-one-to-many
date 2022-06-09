<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryIdToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
           
            //colonna nuova a posts
            $table->unsignedBigInteger('category_id')->nullable()->after('id');

            // relazione
            $table->foreign('category_id')
            ->references('id')
            ->on('categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {

            //eliminare relazione colonna
            $table->dropForeign('posts_category_id_foreign');
            
            //Droppare colonna
            $table->dropColumn('category_id');
        });
    }
}
