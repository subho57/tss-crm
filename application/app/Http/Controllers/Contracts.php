<?php

/** --------------------------------------------------------------------------------
 * This controller manages all the business logic for contracts
 *
 * @package    Grow CRM
 * @author     NextLoop
 *----------------------------------------------------------------------------------*/

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Contracts extends Controller {

    public function __construct() {

        //parent
        parent::__construct();

        //authenticated
        $this->middleware('auth');
    }

    /**
     * Display a listing of contracts
     * @return \Illuminate\Http\Response
     */
    public function index() {

        //basic page settings
        $page = $this->pageSettings('contracts');
        $source = request('source');

        $action = request('action');

        $contracts = [
            [
                'contract_id' => random_int(1, 999),
            ],
            [
                'contract_id' => random_int(1, 999),
            ],
        ];

        $stats = $this->statsWidget($contracts);

        //has this call been made from an embedded page/ajax or directly on contracts page
        if ($source == 'ext' || $action == 'search' || request()->ajax()) {

            //page setting for embedded view
            if ($source == 'ext') {
                $page = $this->pageSettings('ext');
            }

            //template and dom - for additional ajax loading
            switch ($action) {

            case 'load':
                $template = 'pages/contracts/components/table/ajax';
                $dom_container = '#contracts-td-container';
                $dom_action = 'append';
                break;

            case 'search':
                $template = 'pages/contracts/components/table/wrapper';
                $dom_container = '#contracts-table-wrapper';
                $dom_action = 'replace';
                break;

            default:
                //template and dom - for ajax initial loading
                $template = 'pages/contracts/tabswrapper';
                $dom_container = '#embed-content-container';
                $dom_action = 'replace';
                break;
            }

            //render the view and save to json
            $html = view($template, compact('page', 'stats', 'contracts'))->render();
            $jsondata['dom_html'][] = array(
                'selector' => $dom_container,
                'action' => $dom_action,
                'value' => $html);

            //reset stats
            $stats_html = view('misc/list-pages-stats', compact('stats'))->render();
            $jsondata['dom_html'][] = array(
                'selector' => '#contracts-stats-wrapper',
                'action' => 'replace',
                'value' => $stats_html);

            //ajax response
            return response()->json($jsondata);

        } else {
            //standard view
            $view = view('pages/contracts/wrapper', compact('page', 'stats', 'contracts'))->render();
            return $view;
        }
    }

    /**
     * Remove the specified contract from storage.
     * @param int $id contract id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        //hide table row
        $jsondata['dom_visibility'][] = array('selector' => "#contracts_$id", 'action' => 'slideup');

        //ajax response
        return response()->json($jsondata);
    }

    /** -------------------------------------------------------------------------
     * basic page setting for this section of the app
     * @param string $section page section (optional)
     * @param array $data any other data (optional)
     * @return array
     * -------------------------------------------------------------------------*/
    private function pageSettings($section = '', $data = []) {

        //common settings
        $page = [
            'crumbs' => [
                __('lang.sales'),
                __('lang.contracts'),
            ],
            'crumbs_special_class' => 'list-pages-crumbs',
            'page' => 'contracts',
            'no_results_message' => __('lang.no_results_found'),
            'mainmenu_sales' => 'active',
            'sidepanel_id' => 'sidepanel-filter-contracts',
            'dynamic_search_url' => url('contracts/search?action=search&contractresource_id=' . request('contractresource_id') . '&contractresource_type=' . request('contractresource_type')),
            'add_button_classes' => '',
            'load_more_button_route' => 'contracts',
            'source' => 'list',
        ];

        config([
            //visibility - add project buttton
            'visibility.list_page_actions_add_button' => true,
            //visibility - filter button
            'visibility.list_page_actions_filter_button' => true,
            //visibility - search field
            'visibility.list_page_actions_search' => true,
            'visibility.left_menu_toggle_button' => true,

        ]);

        //default modal settings (modify for sepecif sections)
        $page += [
            'add_modal_title' => __('lang.add_contract'),
            'add_modal_create_url' => url('contracts/create?contractresource_id=' . request('contractresource_id') . '&contractresource_type=' . request('contractresource_type')),
            'add_modal_action_url' => url('contracts?contractresource_id=' . request('contractresource_id') . '&contractresource_type=' . request('contractresource_type')),
            'add_modal_action_ajax_class' => 'js-ajax-ux-request',
            'add_modal_action_ajax_loading_target' => 'commonModalBody',
            'add_modal_action_method' => 'POST',
        ];

        //contracts list page
        if ($section == 'contracts') {
            $page += [
                'meta_title' => __('lang.contracts'),
                'heading' => __('lang.contracts'),
                'mainmenu_sales' => 'active',

            ];
            return $page;
        }

        //estimate page
        if ($section == 'contract') {
            $page += [
                'page' => 'contract',

            ];
            return $page;
        }

        //ext page settings
        if ($section == 'ext') {

            $page += [
                'list_page_actions_size' => 'col-lg-12',
                'source' => 'list',
            ];

            return $page;
        }

        //return
        return $page;
    }

    /**
     * data for the stats widget
     * @return array
     */
    private function statsWidget($data = array()) {

        //default values
        $stats = [
            [
                'value' => '0',
                'title' => __('lang.active'),
                'percentage' => '0%',
                'color' => 'bg-info',
            ],
            [
                'value' => '0',
                'title' => __('lang.pending'),
                'percentage' => '0%',
                'color' => 'bg-success',
            ],
            [
                'value' => '0',
                'title' => __('lang.draft'),
                'percentage' => '0%',
                'color' => 'bg-warning',
            ],
            [
                'value' => '0',
                'title' => __('lang.expired'),
                'percentage' => '0%',
                'color' => 'bg-danger',
            ],
        ];

        //calculations - set real values
        if (!empty($data)) {
            $stats[0]['value'] = '1';
            $stats[0]['percentage'] = '10%';
            $stats[1]['value'] = '2';
            $stats[1]['percentage'] = '20%';
            $stats[2]['value'] = '3';
            $stats[2]['percentage'] = '30%';
            $stats[3]['value'] = '4';
            $stats[3]['percentage'] = '40%';
        }
        //return
        return $stats;
    }
}