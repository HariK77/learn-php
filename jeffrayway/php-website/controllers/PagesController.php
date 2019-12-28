<?php


class PagesController
{

    public function home()
    {
        // $tasks = $app['database']->selectAll('todos');
        // die('home');

        $users = App::get('database')->selectAll('users');

        return view('index', compact('users'));

    }

    public function about()
    {
        return view('about');

    }

    public function contact()
    {
        return view('conact');

    }

    public function aboutCulture()
    {
        
        return view('about-culture');

    }

}