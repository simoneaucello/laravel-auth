<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // TODO: creare in config projects.php

        // $projects = config('projects');

        // foreach ($projects as $project){
        //     $new_project = new Project;

        //     $new_project->title = $project['title'];
        //     $new_project->description = $project['description'];
        //     $new_project->image = $project['image'];
        //     $new_project->prog_lang = implode(' | ', $project['prog_lang']);

        //     $new_project->save();
        // }
    }
}
