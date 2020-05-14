<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Post;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
    //unauthenticated routes *** this is for displaying project information.

    public function get(Request $request){
        //get a project by name. this would be called when work.vue asks for a project
    }

    public function list(Request $request){
        // return a list of projects. this would be called when App.vue mounts

        return response()->json(['msg' => 'hello sexy world!!!']);
    }


    //strictly auth routes... these must require a logged in user!


    public function make(Request $request){
        //make a new project. this would be called from the admin panel
    }

    public function delete(Request $request){
        // delete a project. this would be called from the admin panel
    }

    public function update(Request $request){
        //update a project. again called from the admin panel.
    }
}
