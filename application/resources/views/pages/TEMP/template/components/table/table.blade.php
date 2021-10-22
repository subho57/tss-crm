<div class="card count-{{ @count($foos) }}" id="foo-table-wrapper">
    <div class="card-body">
        <div class="table-responsive">
            @if (@count($foos) > 0)
            <table id="foo-foo-addrow" class="table m-t-0 m-b-0 table-hover no-wrap contact-list" data-page-size="10">
                <thead>
                    <tr>
                        <th class="foos_col_id">{{ cleanLang(__('lang.id')) }} #</th>
                        <th class="foos_col_company">{{ cleanLang(__('lang.client_name')) }}</th>
                        <th class="foos_col_project">{{ cleanLang(__('lang.project')) }}</th>
                        <th class="foos_col_date">{{ cleanLang(__('lang.date')) }}</th>
                        <th class="foos_col_amount">{{ cleanLang(__('lang.amount')) }}</th>
                        <th class="foos_col_payments">{{ cleanLang(__('lang.payments')) }}</th>
                        <th class="foos_col_balance">{{ cleanLang(__('lang.balance')) }}</th>
                        <th class="foos_col_status">{{ cleanLang(__('lang.status')) }}</th>
                        <th class="foos_col_action"><a href="javascript:void(0)">{{ cleanLang(__('lang.action')) }}</a></th>
                    </tr>
                </thead>
                <tbody id="foo-td-container">
                    <!--ajax content here-->
                    @include('pages.foos.components.table.ajax')
                    <!--ajax content here-->
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="20">
                            <!--load more button-->
                            @include('misc.load-more-button')
                            <!--load more button-->
                        </td>
                    </tr>
                </tfoot>
            </table>
            @endif @if (@count($foos) == 0)
            <!--nothing found-->
            @include('notifications.no-results-found')
            <!--nothing found-->
            @endif
        </div>
    </div>
</div>