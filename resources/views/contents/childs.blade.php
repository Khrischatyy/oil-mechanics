@extends('layout')

@section('content')
<div class="systems" style="margin-top: 170px;">
{{--		<div class="breadcrumbs mt-5 mb-5"><a style="color: black; text-decoration: none;" href="http://musictechlab.site/#systems">Продукция</a></div>--}}
    <h2 class="mt-5" style="font-size: 45px">
        {{$system->name}}
    </h2>
    <div class="row d-flex justify-content-center mt-3">
        <div class="childs col-md-4 mt-2">
        	@foreach($system->childs as $sys)
        		<a href="{{route('childSystem', ['id' => $system->id, 'child_id' => $sys->id])}}" style="border-radius: 10px; color: black; text-decoration: none;" class="child_block card mb-3">
        			<div class="card-body text-black" style="font-size: 24px">
        			{{$sys->name}}
        			</div>
        		</a>
        	@endforeach
        </div>
        <div class="col-md-8">
        	<div class="system-image  bg-system-image">
        		<img style="position: relative; top: -100px; width: 900px;" class="card-img-top" src="{{ asset($system->image) }}" alt="Card image cap">
        	</div>
        </div>
    </div>
</div>
@endsection
