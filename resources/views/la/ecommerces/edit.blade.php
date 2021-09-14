@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/ecommerces') }}">Ecommerce</a> :
@endsection
@section("contentheader_description", $ecommerce->$view_col)
@section("section", "Ecommerces")
@section("section_url", url(config('laraadmin.adminRoute') . '/ecommerces'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Ecommerces Edit : ".$ecommerce->$view_col)

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
				{!! Form::model($ecommerce, ['route' => [config('laraadmin.adminRoute') . '.ecommerces.update', $ecommerce->id ], 'method'=>'PUT', 'id' => 'ecommerce-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'Product_name')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/ecommerces') }}">Cancel</a></button>
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
	$("#ecommerce-edit-form").validate({
		
	});
});
</script>
@endpush
