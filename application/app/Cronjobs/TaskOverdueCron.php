<?php

/** -------------------------------------------------------------------------------------------------
 * TEMPLATE
 * This cronjob is envoked by by the task scheduler which is in 'application/app/Console/Kernel.php'
 * @package    Grow CRM
 * @author     NextLoop
 *---------------------------------------------------------------------------------------------------*/

namespace App\Cronjobs;
use Log;

class TaskOverdueCron {

    public function __invoke(

    ) {

        //log that its run
        //Log::info("Cronjob has started", ['process' => '[task-overdue-cron]', config('app.debug_ref'), 'function' => __function__, 'file' => basename(__FILE__), 'line' => __line__, 'path' => __file__]);

        //process 5 tasks a time
        $today = \Carbon\Carbon::now()->format('Y-m-d');
        $tasks = \App\Models\Task::Where('task_date_due', '<', $today)
            ->where('task_overdue_notification_sent', 'no')
            ->whereIn('task_status', ['new', 'in_progress', 'testing'])
            ->take(5)->get();

        //process each task
        foreach ($tasks as $task) {

            //all signed users
            $assigned = $task->assigned;

            //queue email
            foreach ($assigned as $user) {
                $mail = new \App\Mail\OverdueTask($user, [], $task);
                $mail->build();
            }

            //update task
            $task->task_overdue_notification_sent = 'yes';
            $task->save();

        }

        //reset existing account owner
        \App\Models\Settings::where('settings_id', 1)
            ->update([
                'settings_cronjob_has_run' => 'yes',
                'settings_cronjob_last_run' => now(),
            ]);

    }

}