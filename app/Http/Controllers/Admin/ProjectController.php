<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Functions\Helper;
use App\Http\Requests\ProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $method = 'POST';
        $route = route('admin.projects.store');
        $project = null;
        // stampo il form di creazione nuovo fumetto
        return view('admin.projects.create-edit', compact('method', 'route', 'project'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // prima di inserire un nuovo progetto verifico che non ci sia già
        // SE esiste ritorno alla index con un messaggio di errore
        // SE non esiste lo salvo e ritorno alla index con un messaggio di success

    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $method = 'PUT';
        $route = route('admin.projects.update', $project);
        return view('admin.projects.create-edit', compact('method', 'route', 'project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectRequest $request, Project $project)
    {
        $form_data = $request->all();

        if ($form_data['title'] === $project->title) {
            $form_data['slug'] = $project->slug;
        } else {
            $form_data['slug'] = Helper::generateSlug($form_data['title'], new Project());
        }

        // effettua il fill dei dati e li salva aggiornando il db
        $project->update($form_data);

        return redirect()->route('admin.projects.show', $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.projects.index')->with('deleted', 'Il progetto ' . $project->title . ' è stato eliminato correttamente.');
    }
}
