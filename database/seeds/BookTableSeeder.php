<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Book;


class BookTableSeeder extends Seeder{
	public function run(){

		Book::truncate();
		Book::create([
			'title'=>'Harry Potter',
			'writer'=>'J.K Rowling',
			'user_id'=> 1
			]);

		Book::create([
			'title'=>'DaVinci Code',
			'writer'=>'Dan Brown',
			'user_id'=> 2
			]);

		Book::create([
			'title'=>'Midnights Children',
			'writer'=>'Salman Rushdie',
			'user_id'=> 3
			]);
	}
}
