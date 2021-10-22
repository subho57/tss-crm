<!-- right-sidebar -->
<div class="right-sidebar" id="sidepanel-filter-contracts">
    <form>
        <div class="slimscrollright">
            <!--title-->
            <div class="rpanel-title">
                <i class="icon-Filter-2"></i>{{ cleanLang(__('lang.filter_contracts')) }}
                <span>
                    <i class="ti-close js-close-side-panels" data-target="sidepanel-filter-contracts"></i>
                </span>
            </div>
            <!--title-->
            <!--body-->
            <div class="r-panel-body">

                <!--single filter item-->
                <div class="filter-block">
                    <div class="title">
                        {{ cleanLang(__('lang.client_name')) }}
                    </div>
                    <div class="fields">
                        <div class="row">
                            <div class="col-md-12">
                                <!--select2 basic search-->
                                <select name="f_contracts_client_id" id="f_contracts_client_id"
                                    class="form-control form-control-sm js-select2-basic-search select2-hidden-accessible"
                                    data-ajax--url="{{ url('/') }}/feed"></select>
                                <!--select2 basic search-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--single filter item-->

                <!--filter item-->
                <div class="filter-block">
                    <div class="title">
                        {{ cleanLang(__('lang.contract_value')) }}
                    </div>
                    <div class="fields">
                        <div class="row">
                            <div class="col-md-6 input-group input-group-sm">
                                <span class="input-group-addon">{{ config('system.settings_system_currency_symbol') }}</span>
                                <input type="number" name="f_contracts_value_min" id="f_contracts_value_min"
                                    class="form-control form-control-sm" placeholder="{{ cleanLang(__('lang.minimum')) }}">
                            </div>
                            <div class="col-md-6 input-group input-group-sm">
                                <span class="input-group-addon">{{ config('system.settings_system_currency_symbol') }}</span>
                                <input type="number" name="f_contracts_value_max" id="f_contracts_value_max"
                                    class="form-control form-control-sm" placeholder="{{ cleanLang(__('lang.maximum')) }}">
                            </div>
                        </div>
                    </div>
                </div>
                <!--filter item-->

                <!--filter item-->
                <div class="filter-block">
                    <div class="title">
                        {{ cleanLang(__('lang.start_date')) }}
                    </div>
                    <div class="fields">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="f_contracts_start_date_start" 
                                    class="form-control form-control-sm pickadate" autocomplete="off"
                                    placeholder="Start">
                                <input class="mysql-date" type="hidden" name="f_contracts_start_date_start" id="f_contracts_start_date_start" value="">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="f_contracts_start_date_end" 
                                    class="form-control form-control-sm pickadate" autocomplete="off" placeholder="End">
                                <input class="mysql-date" type="hidden" name="f_contracts_start_date_end" id="f_contracts_start_date_end" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <!--filter item-->

                <!--filter item-->
                <div class="filter-block">
                    <div class="title">
                        {{ cleanLang(__('lang.expiry_date')) }}
                    </div>
                    <div class="fields">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="f_contracts_expiry_date_start"
                                     class="form-control form-control-sm pickadate"
                                    placeholder="Start">
                                <input class="mysql-date" type="hidden" name="f_contracts_expiry_date_start" id="f_contracts_expiry_date_start" value="">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="f_contracts_expiry_date_end" 
                                    class="form-control form-control-sm pickadate" autocomplete="off" placeholder="End">
                                <input class="mysql-date" type="hidden" name="f_contracts_expiry_date_end" id="f_contracts_expiry_date_end" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <!--filter item-->

                <div class="filter-block">
                    <div class="title">
                        {{ cleanLang(__('lang.status')) }}
                    </div>
                    <div class="fields">
                        <div class="row">
                            <div class="col-md-12">
                                <select name="f_clients_clients_groups" id="f_clients_clients_groups"
                                    class="form-control form-control-sm select2-basic select2-multiple select2-hidden-accessible"
                                    multiple="multiple" tabindex="-1" aria-hidden="true">
                                    <option value="draft">{{ cleanLang(__('lang.draft')) }}</option>
                                    <option value="accepted">{{ cleanLang(__('lang.active')) }}</option>
                                    <option value="pending">{{ cleanLang(__('lang.pending')) }}</option>
                                    <option value="expired">{{ cleanLang(__('lang.expired')) }}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!--buttons-->
                <!--buttons-->
                <div class="buttons-block">
                    <button type="button" name="foo1"
                        class="btn btn-rounded-x btn-secondary js-reset-filter-side-panel">{{ cleanLang(__('lang.reset')) }}</button>
                    <input type="hidden" name="action" value="search">
                    <input type="hidden" name="source" value="{{ $page['source_for_filter_panels'] ?? '' }}">
                    <button type="button" class="btn btn-rounded-x btn-danger js-ajax-ux-request apply-filter-button"
                        data-url="{{ urlResource('/contracts/search') }}"
                        data-type="form" data-ajax-type="GET">{{ cleanLang(__('lang.apply_filter')) }}</button>
                </div>
            </div>
            <!--body-->
        </div>
    </form>
</div>
<!--sidebar-->