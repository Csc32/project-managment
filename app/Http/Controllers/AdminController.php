<?php

namespace App\Http\Controllers;

use App\Charts\PeopleChart;
use App\Charts\ProjectsCharts;
use App\Models\Projects;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    use Authenticatable;
    public function index(PeopleChart $peopleChart, ProjectsCharts $projectsCharts)
    {
        //
        $lastProjects = Projects::with("teacher_id")->latest("created_at")->take(3)->get();
        return view("admin.home", ['chart' => $peopleChart->build(), 'projects' => $projectsCharts->build(), ["lastProjects" => $lastProjects]],);
    }

    public function showTeachers(Request $request)
    {
        return view("admin.teachers");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
