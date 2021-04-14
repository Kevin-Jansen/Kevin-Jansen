<?php

namespace App\Http\Controllers;

use App\Repositories\ProjectRepository;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller
{
    public function __construct(ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    public function home() {
        return Inertia::render('Home');
    }
}
