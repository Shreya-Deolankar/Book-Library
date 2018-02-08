@extends('layout.main')

@section('books')
	@foreach ($books as $book)
		<li>{{ $book->title }}</li>
	@endforeach

@stop