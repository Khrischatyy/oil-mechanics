@extends('layout')

@section('content')
<div class="systems">
		<div class="breadcrumbs mt-5 mb-5"><a style="color: black; text-decoration: none;" href="http://musictechlab.site/#systems">Продукция</a> @if($system->parent)- <a style="color: black; text-decoration: none;" href="{{route('childs', ['id' => $system->parent->id])}}">{{ $system->parent->name}}</a>@endif</div>
    <h2>
        {{$system->name}}
    </h2>
    <div class="row d-flex justify-content-center">
        <div style="line-height: 38px;" class="system_description col-md-6 mt-2">
        	<p>{{$system->description}}</p>
        </div>
        <div class="col-md-6">
        	<div class="system-image bg-system-image">
        		<img class="card-img-top" src="{{ asset($system->image) }}" alt="Card image cap" style="width: 736px; position: relative; right: 100px">
        	</div>
        </div>
    </div>
    @if(isset($system->table->table))
        <div class="" style="position: relative; top: -60px;">
    <h3 style="margin-top: 6%;">Технические характеристики</h3>
            <div class="row d-flex justify-content-center table-responsive">
                <table class="table table-bordered table-hover mb-5" style="font-size: 20px">
                    <tbody>
                    @foreach($system->table->table->rows as $row)
                        <tr>
                            @foreach($row->columns as $column)
                                <td>{!!$column->text ?? ''!!}</td>
                            @endforeach
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
    @if(isset($system->table->valuesBlock))
    @php
    	$valuesBlock = $system->table->valuesBlock;
    @endphp
    <div style="margin-bottom: 150px; position: relative; top: -32px; font-size: 20px;">
        <h3 class="mt-4 mb-4">{{$valuesBlock->name}}</h3>
        <div class="d-flex justify-content-between">
            @foreach($valuesBlock->blocks as $block)
                <div class="values_block">
                    <div class="values-header">
                        {{$block->header}}
                    </div>
                    <div class="values-body">
                        {{$block->body}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @endif
</div>
@endsection
