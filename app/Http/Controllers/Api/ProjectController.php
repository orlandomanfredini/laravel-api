<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //

    public function index(){
        $results= Project::with('type', 'tecnologies')->paginate(12);

        return response()->json([
            'projects'=>$results,
        ]);
    }
}
