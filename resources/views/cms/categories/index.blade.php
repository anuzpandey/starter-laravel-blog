@extends('cms.layouts.cms-master')

@section('content')
	
	<div class="row my-2">
		<div class="col-lg-12">
			<h1 class="text-center">All Categories</h1>
		</div>
	</div>
	
	
	<div class="row my-4">
		<div class="col-lg-12">
			
			<table class="table">
				<thead class="thead-light">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Name</th>
						<th scope="col">Slug</th>
						<th scope="col">Status</th>
						<th scope="col">Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($categories as $category)
						<tr>
							<!-- foreach in laravel gives a loop variable with many values like: index, even, odd, etc -->
							<!-- So we can use $loop->index to generate ids (index starts with 0 so +1 is added -->
							<td>{{ $loop->index + 1 }}</td>
							<td>{{ $category->title }}</td>
							<td><code>{{ $category->slug }}</code></td>
							<td>
								@if($category->status === TRUE)
									<label class="label bg-primary text-white rounded-full">
										Active
									</label>
								@else
									<label class="label bg-danger text-white rounded-full">
										Inactive
									</label>
								@endif
							</td>
							<td>
								<div class="d-flex gap-3">
									<a href="{{ route('cms.category.edit', $category) }}" class="btn btn-primary"> Edit </a>
									<a href="{{ route('cms.category.destroy', $category) }}" class="btn btn-danger"> Delete </a>
								</div>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

@endsection
