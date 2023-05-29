<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username')->unique(); //unique
            $table->string('email')->unique();
            $table->string('nama')->nullable();
            $table->string('alamat')->nullable();
            $table->char('phone',13)->nullable();
            $table->date('joined');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('gambar')->nullable();
            $table->string('level', 1);
            $table->string('status', 1);
            $table->integer('jmlh_kolom');
            $table->text('token_device')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}