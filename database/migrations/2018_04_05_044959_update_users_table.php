<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function(Blueprint $table){
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            
        });

        Schema::table('users', function(Blueprint $table){
            $table->timestamp('created_at')->nullable()->after('remember_token')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->nullable()->after('created_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
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
        Schema::table('users', function(Blueprint $table){
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
        
        Schema::table('users', function(Blueprint $table){
            $table->timestamps();
        });
    }
}
