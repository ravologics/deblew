<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Muhammad',
            'last_name' => 'Zeeshan',
            'username' => 'HZR',
            'email' => 'zeeshan1248rasheed@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'),
            'role' => 'owner',
            'phone_number' => '+923001234567',
            'website_url' => 'https://orbixo.co',
            'social_media_profile_facebook' => 'https://facebook.com/orbixo',
            'social_media_profile_twitter' => 'https://twitter.com/orbixo',
            'social_media_profile_instagram' => 'https://instagram.com/orbixo',
            'social_media_profile_linkedin' => 'https://linkedin.com/in/orbixo',
            'social_media_profile_medium' => 'https://medium.com/@orbixo',
            'social_media_profile_tiktok' => 'https://tiktok.com/@owner',
            'social_media_profile_github' => 'https://github.com/owner',
            'address' => '123 Owner Street',
            'suburb' => 'Tech Park',
            'city' => 'Tech City',
            'state' => 'Tech State',
            'zip_code' => '12345',
            'country' => 'Techland',
            'avatar' => 'default-avatar.png',
            'bio' => 'This is the main owner account with full administrative privileges.',
            'remember_token' => Str::random(10),
        ]);
    }
}
