<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {

        $results = Project::with('type', 'technology')->paginate(6);
        return response()->json([
            'results' => $results
        ]);
    }
}
