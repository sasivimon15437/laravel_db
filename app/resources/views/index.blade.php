@extends('books.layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
            <h2>Menu</h2>
            <h3><a href="{{ route('books.index') }}">Books</a><h3>
            <h3>Plublisher</h3>
    		</div>
	</div>
</div>
@endsection
