@extends('layout')

@section('content')
<div class="systems">
		<div class="breadcrumbs">Продукция</div>
    <h2>
        {{$system->name}}
    </h2>
    <div class="row d-flex justify-content-center">
        <div class="childs col-md-6">
        	@foreach($system->childs as $sys)
        		<a href="{{route('childSystem', ['id' => $system->id, 'child_id' => $sys->id])}}" class="child_block">
        			{{$sys->name}}
        		</a>
        	@endforeach
        </div>
        <div class="col-md-6">
        	
        </div>
    </div>
</div>
@endsection
