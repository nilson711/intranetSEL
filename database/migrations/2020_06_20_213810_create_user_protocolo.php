<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProtocolo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersProtocolo', function (Blueprint $table) {
            $table->increments('idUserProtocolo');
            $table->string('nomeUserProtocolo');
            $table->string('rgUserProtocolo');
            $table->string('cpfUserProtocolo');
            $table->string('celularUserProtocolo');
            $table->string('emailUserProtocolo');
            $table->string('passUserProtocolo');
            $table->string('plainUserProtocolo');
            $table->string('levelUserProtocolo');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usersProtocolo');
    }
}
