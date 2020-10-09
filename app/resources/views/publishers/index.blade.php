@extends('publishers.layout')
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
        <table class='table table-bordered'>
            <tr>
                <td>PID</td>
                <td>Name</td>
            </tr>
            @foreach($publishers as $publisher)
            <tr>
                <td>{{ $publisher->PID }}</td>
                <td>{{ $publisher->Name }}</td>
            </tr>
            @endforeach
	    </table>
    </div>
</div>
@endsection
