<?php

namespace NamLee\Controllers;

use NamLee\Models\Project;

class ProjectController extends CoreController
{
    /**
     * Display a list of projects
     *
     * @param array $routeArguments
     */
    public function list()
    {
        $projectsList = Project::findAll();

        $this->show('project/list', [
            'projectsList' => $projectsList,
        ]);
    }

    /**
     * Dispaly 1 project by the id
     *
     * @param array $routeArguments
     */
    public function single($projectId)
    {
        $project = Project::find($projectId);

        $this->show('project/single', [
            'project' => $project,
        ]);
    }
}
