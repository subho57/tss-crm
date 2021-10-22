@for ($i = 0; $i
< @count($contracts); $i++) <!--each row-->
    <tr id="contracts_{{ $contracts[$i]['contract_id'] ?? '' }}">
        <td class="contracts_col_id">{{ $contracts[$i]['contract_id'] ?? '' }}</td>
        <td class="contracts_col_title">
            <a
                href="/contracts/{{ $contracts[$i]['contract_id'] ?? '' }}">{{ str_limit('New Laravel Based Website Project This Is Great', 30) }}</a>
        </td>
        <td class="contracts_col_contract">
            <a
                href="/contracts/{{ $contracts[$i]['contract_id'] ?? '' }}">{{ str_limit('Microsoft Private Limited Company', 20) }}</a>
        </td>
        <td class="contracts_col_type">
            Design Contracts
        </td>
        <td class="contracts_col_value">$10,000</td>
        <td class="contracts_col_start">01-12-2018</td>
        <td class="contracts_col_end">
            07-12-2019
        </td>
        <td class="contracts_col_status">
            <span class="label label-warning">New</span>
        </td>
        <td class="contracts_col_action actions_column">
            <!--action button-->
            <span class="list-table-action dropdown font-size-inherit">
                <!--delete-->
                @if(config('visibility.action_buttons_delete'))
                <button type="button" title="{{ cleanLang(__('lang.delete')) }}"
                    class="data-toggle-action-tooltip btn btn-outline-danger btn-circle btn-sm confirm-action-danger"
                    data-confirm-title="{{ cleanLang(__('lang.delete_item')) }}" data-confirm-text="{{ cleanLang(__('lang.are_you_sure')) }}"
                    data-ajax-type="DELETE" data-url="{{ url('/contracts/'.$contract->contract_id) }}">
                    <i class="sl-icon-trash"></i>
                </button>
                @endif
                <!--edit-->
                @if(config('visibility.action_buttons_edit'))
                <button type="button" title="{{ cleanLang(__('lang.edit')) }}"
                    class="data-toggle-action-tooltip btn btn-outline-success btn-circle btn-sm edit-add-modal-button js-ajax-ux-request reset-target-modal-form"
                    data-toggle="modal" data-target="#commonModal"
                    data-url="{{ urlResource('/contracts/'.$contract->contract_id.'/edit') }}"
                    data-loading-target="commonModalBody" data-modal-title={{ cleanLang(__('lang.edit')) }}" - ".{{ cleanLang(__('lang.contract')) }}
                    data-action-url="{{ urlResource('/contracts/'.$contract->contract_id.'?ref=list') }}"
                    data-action-method="PUT" data-action-ajax-class="js-ajax-ux-request"
                    data-action-ajax-loading-target="contracts-td-container">
                    <i class="sl-icon-note"></i>
                </button>
                @endif
                <a href="/contracts/{{ $contract->contract_id ?? '' }}" title="{{ cleanLang(__('lang.view')) }}" class="data-toggle-action-tooltip btn btn-outline-info btn-circle btn-sm">
                    <i class="ti-new-window"></i>
                </a>
            </span>
            <!--action button-->
        </td>
    </tr>
    @endfor
    <!--each row-->