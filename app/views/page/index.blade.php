@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1>Статические страницы</h1>
        </div>
    </div>
</div>

<div class="panel panel-default" style="width: 350px">
    <div class="panel-heading">
        <h3 class="panel-title">Список</h3>
    </div>
    <table class="table" style="border-top: 0px">
        <?php if (empty($pages)): ?>
            <tr>
                <td>Записей нет</td>
            </tr>
        <?php else: ?>
            <tr>
                <th style="width: 80%">Заголовок</th>
                <th></th>
            </tr>
            <?php foreach ($pages as $page): ?>
                <tr>
                    <td>
                        <a href="#" title="Редактировать">
                            <?=htmlentities($page->title)?>
                        </a>
                    </td>
                    <td>
                        <a data-url="#" href="#"
                           class="btn btn-xs btn-danger delete-page" title="Удалить">X</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        <tr>
            <td colspan="2">
                <a href="#" class="btn btn-xs btn-success" title="Добавить">+</a>
            </td>
        </tr>
    </table>
</div>

<script src="{{ URL::asset('assets/js/admin/pages/index.js') }}"></script>
@stop
