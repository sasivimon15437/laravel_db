@extends('books.layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Show Data from Books</h2>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">

        <div class="card-header">
            <!-- &nbsp;&nbsp;<a class="btn btn-primary" href="{{ route('books.create') }}" Insert> -->
            <a class="btn btn-primary" href="{{ route('books.create') }}" >Insert</a>
        </div>

        <table class='table table-bordered'>
            <tr>
                <td>Book_ID</td>
                <td>Title</td>
                <td>PID</td>
                <td>Price</td>
            </tr>
            @foreach($books as $book)
            <tr>
                <td>{{ $book->Book_ID }}</td>
                <td>{{ $book->Title }}</td>
                <td>{{ $book->PID }}</td>
                <td>{{ $book->Price }}</td>
            </tr>
            @endforeach
	    </table>
    </div>
</div>
@endsection
