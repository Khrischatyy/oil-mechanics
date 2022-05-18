@extends('layout')

@section('content')
<div class="systems">
		<div class="breadcrumbs mt-5 mb-5">Продукция @if($system->parent)- {{ $system->parent->name}}@endif</div>
    <h2>
        {{$system->name}}
    </h2>
    <div class="row d-flex justify-content-center">
        <div class="system_description col-md-6 mt-2">
        	<p>{{$system->description}}</p>
        </div>
        <div class="col-md-6">
        	<div class="system-image">
        		<img class="card-img-top" src="{{ asset($system->image) }}" alt="Card image cap">
        	</div>
        </div>
    </div>
    @if($system->table)
    <h3>Технические характеристики</h3>
    <div class="row d-flex justify-content-center table-responsive">
			<table class="table">
			  <tbody>
			  	@foreach($system->table->table->rows as $row)
				    <tr>
				    		@foreach($row->columns as $column)
				      		<td>{!!$column->text!!}</td>
				      	@endforeach
				    </tr>
			    @endforeach
			  </tbody>
			</table>
    </div>
    @endif
</div>
@endsection
