<?php
// recieve request return response
// fat model skinny controller - bad idea just don't bloat controller nor do you want to bloat model
// model is a layer
// model is the knowledge of the domain
// is it user classes responsibilty to create user - no
// Elquent ORM -object relational mapper
// tool to query data in database
//

class PagesController extends BaseController
{

    public  function home()
    {
        $name = 'John';

        return View::make('hello')->with('name',$name);
    }

    public function about()
    {

        return View::make('about');

    }

}