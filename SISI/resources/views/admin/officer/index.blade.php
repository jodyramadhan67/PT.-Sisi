@extends('layouts.admin')
@section('header', 'Officer')

@section('content')
<div class="row">
	<div class="card">
		<div class="card-header">
			<a href="{{ url('officers/create') }}" class="btn btn-sm btn-primary pull-right">Add New Officer</a>
		</div>
		 
		<div class="card-body">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th style="width: 50px">No</th>
						<th class="text-center">Name</th>
						<th class="text-center">Tittle</th>
						<th class="text-center">Year</th>
                        <th class="text-center">Annual leave</th>
						<th class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($officers as $key => $officer)
					<tr>
						<td>{{ $key+1 }}</td>
						<td>{{ $officer->name }}</td>
                        <td>{{ $officer->tittle }}</td>
                        <td>{{ $officer->year }}</td>
                        <td>{{ $officer->annual_leave }}</td>
						
						<td class="text-center">
							<a href="{{ url('officers/'.$officer->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>

							<form action="{{ url('officers', ['id' => $officer->id]) }}" method="post">
								<input class="btn btn-danger btn-sm" type="submit" value="delete" onclick="return confirm('Are you sure?')">
								@method('delete')
								@csrf
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>					
			</table>
		</div>

	<!-- <div class="card-footer clearfix">
			<ul class="pagination pagination-sm m-0 float-right">
				<li class="page-item"><a class="page-link" href="#">«</a></li>
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item"><a class="page-link" href="#">»</a></li>
			</ul>
		</div> -->
		</div>
	</div>
</div>
@endsection
