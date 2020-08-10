<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Manager;
use App\ManagerProject;
class ProjectUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = Project::join('manager_projects','manager_projects.project_id','projects.id')
                        ->join('staff_projects','staff_projects.project_id','projects.id')
                        ->groupBy('projects.id')
                        ->get();
        return view('owner.index', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function tambahManager($id)
    {
        $project = Project::find($id);
        $managers = Manager::all();
        return view('owner.add-manager', compact('managers','project'));
    }

    public function tambahManagerProses($project_id, Request $request)
    {
        ManagerProject::create([
            'manager_id' => $request->manager_id,
            'project_id' => $project_id,
        ]);
        return back();
    }

    public function tambahStaff($id)
    {
        $project = Project::find($id);
        $managers = Staff::all();
        return view('owner.add-manager', compact('managers','project'));
    }

    public function tambahStaffProses($project_id, Request $request)
    {
        StaffProject::create([
            'staff_id' => $request->staff_id,
            'project_id' => $project_id,
        ]);
        return back();
    }
}
