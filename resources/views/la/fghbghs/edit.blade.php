@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/fghbghs') }}">Fghbgh</a> :
@endsection
@section("contentheader_description", $fghbgh->$view_col)
@section("section", "Fghbghs")
@section("section_url", url(config('laraadmin.adminRoute') . '/fghbghs'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Fghbghs Edit : ".$fghbgh->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($fghbgh, ['route' => [config('laraadmin.adminRoute') . '.fghbghs.update', $fghbgh->id ], 'method'=>'PUT', 'id' => 'fghbgh-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'address')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/fghbghs') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#fghbgh-edit-form").validate({
		
	});
});
</script>
@endpush
