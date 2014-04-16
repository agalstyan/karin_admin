<?php

namespace Karin;

class PageController extends \BaseController
{
    public function index()
    {
        return \View::make('page.index', ['pages' => Page::all()]);
    }
}
