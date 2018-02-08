<?php

use Illuminate\Database\Seeder;

use Illuminate\Foundation\Auth\User;

class UsersTableSeeder extends Seeder{
	public function run(){
		User::truncate();
		User::create([
			'username'=>'shreya',
			'email'=>'shreya.deo@gmail.com',
			'password'=> Hash::make('1234')
			]);

		User::create([
			'username'=>'Sunil',
			'email'=>'sunil.deo@gmail.com',
			'password'=> Hash::make('1234')
			]);

		User::create([
			'username'=>'Supriya',
			'email'=>'supriya.deo@gmail.com',
			'password'=> Hash::make('1234')
			]);
	}
}