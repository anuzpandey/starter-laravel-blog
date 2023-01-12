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
					<tr>
						<td>1</td>
						<td>Category Name</td>
						<td><code>category-name</code></td>
						<td>
							<label class="label success-label rounded-full">
								Std Label
							</label>
						</td>
						<td>
							<div class="d-flex gap-3">
								<a href="javascript:void(0)" class="btn btn-primary"> Edit </a>
								<a href="javascript:void(0)" class="btn btn-danger"> Delete </a>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

@endsection
