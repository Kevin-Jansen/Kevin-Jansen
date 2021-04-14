<?php

namespace App\Http\Controllers;

use App\Repositories\ProjectRepository;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct(ProjectRepository $projectRepository)
    {
        $this->repository = $projectRepository;
    }

    public function index() {

    }
}
