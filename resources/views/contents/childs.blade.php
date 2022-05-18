@extends('layout')

@section('content')
<div class="systems">
		<div class="breadcrumbs mt-5 mb-5">Продукция</div>
    <h2>
        {{$system->name}}
    </h2>
    <div class="row d-flex justify-content-center">
        <div class="childs col-md-6 mt-2">
        	@foreach($system->childs as $sys)
        		<a href="{{route('childSystem', ['id' => $system->id, 'child_id' => $sys->id])}}" class="child_block card">
        			<div class="card-body">
        			{{$sys->name}}
        			</div>
        		</a>
        	@endforeach
        </div>
        <div class="col-md-6">
        	<div class="system-image">
        		<img class="card-img-top" src="{{ asset($system->image) }}" alt="Card image cap">
        	</div>
        </div>
    </div>
</div>
@endsection
