<div class="row">
    <div class="col-lg-12 p-t-30">

        <div class="form-group row">
            <label class="col-sm-12 col-lg-3 text-left control-label col-form-label required">{{ cleanLang(__('lang.title')) }}*</label>
            <div class="col-sm-12 col-lg-9">
                <input type="text" class="form-control form-control-sm" id="add_invoices_date" name="add_invoices_date"
                    placeholder="">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-12 col-lg-3 text-left control-label col-form-label required">{{ cleanLang(__('lang.start_date')) }}*</label>
            <div class="col-sm-12 col-lg-9">
                <input type="text" class="form-control  form-control-sm pickadate"  autocomplete="off"  name="add_invoices_date"
                    placeholder="">
                <input class="mysql-date" type="hidden" name="add_invoices_date" id="add_invoices_date" value="">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-lg-3 text-left control-label col-form-label">{{ cleanLang(__('lang.expiry_date')) }}</label>
            <div class="col-sm-12 col-lg-9">
                <input type="text" class="form-control  form-control-sm pickadate"  autocomplete="off"  name="add_invoices_due_date"
                    placeholder="">
                <input class="mysql-date" type="hidden" name="add_invoices_due_date" id="add_invoices_due_date" value="">
            </div>
        </div>

        <div class="form-group row">
            <label for="example-month-input" class="col-sm-12 col-lg-3 col-form-label text-left">{{ cleanLang(__('lang.category')) }}</label>
            <div class="col-sm-12 col-lg-9">
                <select class="select2-basic form-control form-control-sm" id="add_invoices_project_id" name="add_invoices_project_id">
                    <option vlaue="1">General</option>
                    <option value="2">Web Site Redesign</option>
                    <option value="3">Logo Design</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="example-month-input" class="col-sm-12 col-lg-3 col-form-label text-left">{{ cleanLang(__('lang.company_name')) }}</label>
            <div class="col-sm-12 col-lg-9">
                <!--select2 basic search-->
                <select name="add_contact_client_id" id="add_contact_client_id" class="form-control  form-control-sm js-select2-basic-search-modal select2-hidden-accessible"
                    data-ajax--url="{{ url('/') }}/feed"></select>
                <!--select2 basic search-->
            </div>
        </div>

        <!--spacer-->
        <div class="spacer row">
            <div class="col-sm-12 col-lg-8">
                <span class="title">{{ cleanLang(__('lang.additional_settings')) }}</span class="title">
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="switch  text-right">
                    <label>
                        <input type="checkbox" name="show_more_settings_contracts" id="show_more_settings_contracts" class="js-switch-toggle-hidden-content"
                            data-target="add_project_settings_section">
                        <span class="lever switch-col-light-blue"></span>
                    </label>
                </div>
            </div>
        </div>
        <!--spacer-->

        <div class="form-group row">
            <label for="example-month-input" class="col-sm-12 col-lg-3 col-form-label text-left">{{ cleanLang(__('lang.project')) }}</label>
            <div class="col-sm-12 col-lg-9">
                <!--select2 basic search-->
                <select name="add_contact_client_id" id="add_contact_client_id" class="form-control form-control-sm js-select2-basic-search-modal select2-hidden-accessible"
                    data-ajax--url="{{ url('/') }}/feed"></select>
                <!--select2 basic search-->
            </div>
        </div>
        <!--notes-->
        <div class="row">
            <div class="col-12">
                <div><small><strong>* {{ cleanLang(__('lang.required')) }}</strong></small></div>
            </div>
        </div>
    </div>
</div>

