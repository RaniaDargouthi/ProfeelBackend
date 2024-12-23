<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('firstname');
            $table->string('lastname');
            $table->enum('gender', ['male', 'female']);
            $table->date('birthdate')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('country')->nullable();
            $table->string('speciality')->nullable();
            $table->string('cin')->nullable();
            $table->string('cv')->nullable();

            $table->string('profil_picture')->nullable();
            $table->boolean('is_valid')->default(0);
            $table->enum('role', ['membre', 'formateur', 'organisme', 'admin']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'firstname',
                'lastname',
                'gender',
                'birthdate',
                'phone_number',
                'country',
                'speciality',
                'cin',
                'cv',

                'profil_picture',
                'is_valid',
                'role',
            ]);
        });
    }
};
