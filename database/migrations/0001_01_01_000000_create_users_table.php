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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // Personal Information
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            // Role
            $table->enum('role', ['user', 'admin', 'editor', 'author', 'manager', 'owner'])->default('owner');
            // Contact information
            $table->string('phone_number');
            $table->string('website_url');
            // Social media profiles
            $table->string('social_media_profile_facebook');
            $table->string('social_media_profile_twitter');
            $table->string('social_media_profile_instagram');
            $table->string('social_media_profile_linkedin');
            $table->string('social_media_profile_medium');
            $table->string('social_media_profile_tiktok');
            $table->string('social_media_profile_github');
            // Address information
            $table->string('address');
            $table->string('suburb');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('country');
            // Profile information
            $table->string('avatar');
            $table->text('bio');
            // Timestamps
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
