@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1 id="forms">Добавление статической страницы</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-10">
        <div class="well">
            <form id="page-form" class="form-horizontal" method="POST" action="{{ URL::route('pages.store') }}" data-success-url="{{ URL::route('pages.index') }}">
                <fieldset>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Заголовок</label>
                        <div class="col-lg-5">
                            <input type="text" name="title" class="form-control" id="title" placeholder="Заголовок">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="url" class="col-lg-2 control-label">Url</label>
                        <div class="col-lg-5">
                            <input type="text" name="url" class="form-control" id="url" placeholder="Url">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text" class="col-lg-2 control-label">Текст</label>
                        <div class="col-lg-10">
                            <textarea name="text" class="form-control" rows="20" id="text"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10">
                            <button type="button" data-text-tmp="Подождите..." data-text-default="Добавить" class="btn btn-success">Добавить</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-1">
        <a href="{{ URL::route('pages.index') }}" class="btn btn-info btn-xs">Назад</a>
    </div>
</div>

<script src="{{ URL::asset('assets/js/ckeditor/ckeditor.js') }}"></script>
<script src="{{ URL::asset('assets/js/ckeditor/adapters/jquery.js') }}"></script>
<script src="{{ URL::asset('assets/js/admin/pages/add.js') }}"></script>

@stop
