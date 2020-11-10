<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagescontroller extends Controller
{
    public function getHome(){

        return view('index');
    }

    public function getCompany(){

        return view('company');
    }

    public function getContact(){

        return view('contact');
    }

    public function getServices(){

        return view('services');
    }

    public function getProjects(){

        return view('projects');
    }

    public function getCareer(){

        return view('career');
    }
}
