@extends('master')

@section('title', 'Movies')

@section ('content')
<div class="container">
	<div class="row">
	
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Movies <br/><br/><br/>
				</div>
				<div class="panel-body">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						 <tr class="bg-info">
							 <th>Naziv</th>
							 <th>Godina</th>
							 <th>Trajanje</th>
							 
							
						 </tr>
						 </thead>
				<tbody>
		@if (count($movies) >0)
		<div class="panel-body">
			<table class="table table-striped task-table">
				<thead>
					<th>Name</th>
					<th>&nbsp;</th>
				</thead>
				
				<tbody>
					@foreach ($movies as $movie)
						<tr>
							<td class="table-text">
								<div>{{ $movie->naziv }}</div>
							</td>
							<td class="table-text">
								<div>{{ $movie->godina }}</div>
							</td>
							<td class="table-text">
								<div>{{ $movie->trajanje }}</div>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
	@endif
				</tbody>
				</table>
					
				
				</ul>
				
				</div>
			</div>
		</div>
	</div>
</div>
@endsection