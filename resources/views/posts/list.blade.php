@extends('base.base')
@section('title', 'Post List')

@section('content')
	<h1>Lista de posts</h1>
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<td>ID</td>
					<td>Título</td>
					<td>Autor</td>
				</tr>
			</thead>
			<tbody>
				@foreach($posts as $post)
					<tr>
						<td>{{$post['id']}}</td>
						<td>{{$post['title']}}</td>
						<td>{{$post['author']}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection
