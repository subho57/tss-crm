<div class="card count-{{ @count($contracts) }}" id="contracts-table-wrapper">
    <div class="card-body">
        <div class="table-responsive list-table-wrapper">
            @if (@count($contracts) > 0)
            <table id="contracts-list-table" class="table m-t-0 m-b-0 table-hover no-wrap contact-list" data-page-size="10">
                <thead>
                    <tr>
                        <th class="contracts_col_id">{{ cleanLang(__('lang.id')) }} #</th>
                        <th class="contracts_col_title">{{ cleanLang(__('lang.title')) }}</th>
                        <th class="contracts_col_client">{{ cleanLang(__('lang.client')) }}</th>
                        <th class="contracts_col_type">{{ cleanLang(__('lang.type')) }}</th>
                        <th class="contracts_col_value">{{ cleanLang(__('lang.value')) }}</th>
                        <th class="contracts_col_start">{{ cleanLang(__('lang.start')) }}</th>
                        <th class="contracts_col_end">{{ cleanLang(__('lang.end')) }}</th>
                        <th class="contracts_col_status">{{ cleanLang(__('lang.status')) }}</th>
                        <th class="contracts_col_action"><a href="javascript:void(0)">{{ cleanLang(__('lang.action')) }}</a></th>
                    </tr>
                </thead>
                <tbody id="contracts-td-container">
                    <!--ajax content here-->
                    @include('pages.contracts.components.table.ajax')
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
            @endif @if (@count($contracts) == 0)
            <!--nothing found-->
            @include('notifications.no-results-found')
            <!--nothing found-->
            @endif
        </div>
    </div>
</div>
