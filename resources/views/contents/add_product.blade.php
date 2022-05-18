@extends('layout')

@section('content')
<div class="systems">
    <h2>
        Добавить систему
    </h2>
    <div class="row d-flex justify-content-center">
        <form method="post" action="{{ route('addProduct') }}">
            @csrf
            <div class="form-group">
                <label for="form_name">Имя</label>
                <input required type="name" name="name" class="form-control" id="form_name" placeholder="Имя">
            </div>
            <div class="form-group">
                <label for="form_image">Изображение</label>
                <input required type="text" name="image" class="form-control" id="form_image" placeholder="Ссылка на фото">
            </div>
            <div class="form-group">
                <label for="form_description">Описание</label>
                <textarea class="form-control" name="description" id="form_description" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="form_table">JSON таблицы</label>
                <textarea class="form-control" name="table" id="form_table" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="form_parent_id">Родительский объект</label>
                <select class="form-control" name="parent_id" id="form_parent_id">
                    <option value="0">Нет родителя</option>
                    @foreach($systems as $system)
                    <option value="{{$system->id}}">{{$system->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary mb-2">Добавить</button>
            </div>
        </form>
    </div>
</div>
@endsection
