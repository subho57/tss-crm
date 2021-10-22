<?php

/** --------------------------------------------------------------------------------
 * This repository class manages all the data absctration for contracts
 *
 * @package    Grow CRM
 * @author     NextLoop
 *----------------------------------------------------------------------------------*/

namespace App\Repositories;

use App\Models\Contract;
use Illuminate\Http\Request;

//use DB;
//use Illuminate\Support\Facades\Schema;

class ContractRepository {

    /**
     * The contracts repository instance.
     */
    protected $contracts;

    /**
     * Inject dependecies
     */
    public function __construct(Contract $contracts) {
        $this->contracts = $contracts;
    }

    /**
     * Search model
     * @param int $id optional for getting a single, specified record
     * @return object contract collection
     */
    public function search($id = '') {

        $contracts = $this->contracts->newQuery();

        // all client fields
        $contracts->selectRaw('*');

        //filters: id
        if (request()->filled('filter_contract_id')) {
            $contracts->where('contract_id', request('filter_contract_id'));
        }
        if (is_numeric($id)) {
            $contracts->where('contract_id', $id);
        }

        //filter clients
        if (request()->filled('filter_contract_clientid')) {
            $invoices->where('contract_clientid', request('filter_contract_clientid'));
        }

        //sorting
        if (in_array(request('sortorder'), array('desc', 'asc')) && request('orderby') != '') {
            //direct column name
            if (Schema::hasColumn('contracts', request('orderby'))) {
                $contracts->orderBy(request('orderby'), request('sortorder'));
            }
            //others
            switch (request('orderby')) {

            }
        } else {
            //default sorting
            $contracts->orderBy('contract_id', 'desc');
        }

        // Get the results and return them.
        return $contracts->paginate(config('system.settings_system_pagination_limits'));
    }
}