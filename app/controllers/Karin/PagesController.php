<?php

namespace Karin;

class PagesController extends \BaseController
{
    public function index()
    {
        return \View::make('pages.index', ['pages' => Page::all()]);
    }

    public function create()
    {


        return \View::make('pages.create');
    }

    public function store()
    {
        $page = new Page(\Input::all());
        $page->save();

        return \Response::json(['id' => $page->id], 200);
    }

    public function update()
    {
    }

    public function edit($id)
    {
        return \View::make('pages.edit', ['page' => Page::find($id)]);
    }

    public function destroy($id)
    {
        Page::destroy($id);

        return \Response::json([], 200);
    }
}
