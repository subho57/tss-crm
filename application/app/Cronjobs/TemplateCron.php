<?php

/** -------------------------------------------------------------------------------------------------
 * TEMPLATE
 * This cronjob is envoked by by the task scheduler which is in 'application/app/Console/Kernel.php'
 * @package    Grow CRM
 * @author     NextLoop
 *---------------------------------------------------------------------------------------------------*/

namespace App\Cronjobs;
use App\Repositories\InvoiceGeneratorRepository;
use Log;

class TemplateCron {

    public function __invoke(
        InvoiceGeneratorRepository $invoicegenerator
    ) {

        
        //log that its run
        //Log::info("Cronjob has started", ['process' => '[foo-cron]', config('app.debug_ref'), 'function' => __function__, 'file' => basename(__FILE__), 'line' => __line__, 'path' => __file__]);

        //and more
        $bar = $this->fooMethod();

        //reset existing account owner
        \App\Models\Settings::where('settings_id', 1)
            ->update([
                'settings_cronjob_has_run' => 'yes',
                'settings_cronjob_last_run' => now(),
            ]);

    }

    /**
     * This is what is
     *  @return array filename & filepath
     */
    public function fooMethod($foo) {

        return $foo;

    }
}