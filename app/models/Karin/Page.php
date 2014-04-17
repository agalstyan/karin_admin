<?php

namespace Karin;

class Page 
{
    public function create(array $pageData)
    {

        // perenesti v orm

        $validator = \Validator::make(
            [
                'url' => 'required',
                'title' => 'required',
                'text' => 'required',
            ],
            $pageData
        );

        if ($validator->fails()) {
            return $validator->messages();
        }

        return new Page($pageData);
    }
}
