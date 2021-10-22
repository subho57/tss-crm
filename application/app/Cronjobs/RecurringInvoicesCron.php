<?php

/** -------------------------------------------------------------------------------------------------
 * RECURRING INVOICES - DAILY CYCLE
 * Get invoices that are due to be renewed today:
 *         - get
 * This cronjob is envoked by by the task scheduler which is in 'application/app/Console/Kernel.php'
 * @package    Grow CRM
 * @author     NextLoop
 *---------------------------------------------------------------------------------------------------*/

namespace App\Cronjobs;
use App\Repositories\RecurringInvoiceRepository;
use Log;

class RecurringInvoicesCron {

    public function __invoke(
        RecurringInvoiceRepository $recurringrepo
    ) {

        //log that its run
        //Log::info("Cronjob has started", ['process' => '[recurring-invoices]', config('app.debug_ref'), 'function' => __function__, 'file' => basename(__FILE__), 'line' => __line__, 'path' => __file__]);

        $recurringrepo->processInvoices(1);

    }


}