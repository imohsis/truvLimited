<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Members', function (Blueprint $table) {
            $table->increments('id');
            $table->text('member_id')->nullable();
            $table->text('full_name');
            $table->text('phone');
            $table->text('email');
            $table->text('location');
            $table->date('date_of_birth');
            $table->text('gender');
            $table->text('teller_id')->nullable();
            $table->text('transaction_id')->nullable();
            $table->boolean('approved_status')->default(false);
            $table->boolean('reviewed_status')->default(false);
            $table->integer('user_id')->references('id')->on('users');
            $table->integer('refered_by')->default(0);//the id of the member that refered this particular member, left as 0 if nobody refered this member.
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
        Schema::dropIfExists('Members');
    }
}
