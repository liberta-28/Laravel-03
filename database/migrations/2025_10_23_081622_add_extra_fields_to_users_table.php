<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nim')->nullable()->after('email');
            $table->string('tempat_lahir')->nullable()->after('nim');
            $table->date('tanggal_lahir')->nullable()->after('tempat_lahir');
            $table->string('foto_profil')->nullable()->after('tanggal_lahir');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['nim', 'tempat_lahir', 'tanggal_lahir', 'foto_profil']);
        });
    }
};