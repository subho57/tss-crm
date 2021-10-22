@foreach($foos as $foo)
<!--each row-->
<tr id="foos_{{ $foos->foo_id }}">
    <td class="foos_col_id">{{ config('system.settings_invoices_prefix') }}{{ $foos->foo_id }}</td>
    <td class="foos_col_company">
        {{ str_limit($foos->foo_foo ?? '---', 12) }}
    </td>
    <td class="foos_col_project">
        {{ str_limit($foos->foo_foo ?? '---', 25) }}
    </td>
    <td class="foos_col_date">
        24-12-2018
    </td>
    <td class="foos_col_amount">$10,000</td>
    <td class="foos_col_foos">$4,000</td>
    <td class="foos_col_balance">
        $3,000
    </td>
    <td class="foos_col_status">
        <span class="label label-warning">New</span>
    </td>
    <td class="foos_col_action actions_column">
        <!--action button-->
        <span class="list-table-action dropdown font-size-inherit">
            <!--delete-->
            <button type="button" title="{{ cleanLang(__('lang.delete')) }}"
                class="data-toggle-action-tooltip btn btn-outline-danger btn-circle btn-sm confirm-action-danger"
                data-confirm-title="{{ cleanLang(__('lang.delete_item')) }}" data-confirm-text="{{ cleanLang(__('lang.are_you_sure')) }}"
                data-ajax-type="DELETE" data-url="{{ url('/') }}/foos/{{ $foos->foo_id }}">
                <i class="sl-icon-trash"></i>
            </button>
            <!--edit-->
            <button type="button" title="{{ cleanLang(__('lang.edit')) }}"
                class="data-toggle-action-tooltip btn btn-outline-success btn-circle btn-sm edit-add-modal-button js-ajax-ux-request reset-target-modal-form"
                data-toggle="modal" data-target="#commonModal"
                data-url="{{ urlResource('/foos/'.$foo->foo_id.'/edit') }}" data-loading-target="commonModalBody"
                data-modal-title="{{ cleanLang(__('lang.edit_item')) }}" data-action-url="{{ urlResource('/foos/'.$foo->foo_id) }}"
                data-action-method="PUT" data-action-ajax-class="js-ajax-ux-request"
                data-action-ajax-loading-target="foos-td-container">
                <i class="sl-icon-note"></i>
            </button>
            <!--view-->
            <a href="/foo/{{ $foos->foo_id }}" title="{{ cleanLang(__('lang.view')) }}"
                class="data-toggle-action-tooltip btn btn-outline-info btn-circle btn-sm">
                <i class="ti-new-window"></i>
            </a>
        </span>
        <!--action button-->
        <!--more button (hidden)-->
        <span class="list-table-action dropdown hidden font-size-inherit">
            <button type="button" id="listTableAction" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                class="btn btn-outline-default-light btn-circle btn-sm">
                <i class="ti-more"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="listTableAction">
                <a class="dropdown-item" href="javascript:void(0)">
                    <i class="ti-new-window"></i> {{ cleanLang(__('lang.view_details')) }}</a>
            </div>
        </span>
        <!--more button-->
    </td>
</tr>
@endforeach
<!--each row-->