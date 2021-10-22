<?php

/** -------------------------------------------------------------------------------------------------
 * TEMPLATE
 * This cronjob is envoked by by the task scheduler which is in 'application/app/Console/Kernel.php'
 * @package    Grow CRM
 * @author     NextLoop
 *---------------------------------------------------------------------------------------------------*/

namespace App\Cronjobs;
use App\Repositories\ProjectRepository;
use Log;

class ProjectProgressCron {

    public function __invoke(
        ProjectRepository $projectrepo
    ) {

        //log that its run
        //Log::info("Cronjob has started", ['process' => '[cronjob][project-progress]', config('app.debug_ref'), 'function' => __function__, 'file' => basename(__FILE__), 'line' => __line__, 'path' => __file__]);

        //get all projects
        $data = [
            'limit' => 1000000,
        ];
        $projects = $projectrepo->search($data);

        //update eacj project
        foreach ($projects as $project) {
            $projectrepo->refreshProject($project);
        }
    }
}