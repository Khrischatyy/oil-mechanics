@extends('layout')

@section('content')
<div class="systems">
		<div class="breadcrumbs mt-5 mb-5"><a style="color: black; text-decoration: none;" href="http://musictechlab.site/#systems">Продукция</a></div>
    <h2>
        {{$system->name}}
    </h2>
    <div class="row d-flex justify-content-center mt-3">
        <div class="childs col-md-6 mt-2">
        	@foreach($system->childs as $sys)
        		<a href="{{route('childSystem', ['id' => $system->id, 'child_id' => $sys->id])}}" style="color: black; text-decoration: none;" class="child_block card mb-3">
        			<div class="card-body bg-green text-yellow">
        			{{$sys->name}}
        			</div>
        		</a>
        	@endforeach
        </div>
        <div class="col-md-6">
        	<div class="system-image  bg-system-image">
        		<img class="card-img-top" src="{{ asset($system->image) }}" alt="Card image cap">
        	</div>
        </div>
    </div>
</div>
@endsection
