@extends('pages.settings.ajaxwrapper')
@section('settings-page')
<!--settings-->
<form class="form">


    <!--welcome-->
    <div class="row">
        <div class="col-12">
            <div class="page-notification-imaged">
                <img src="{{ url('/') }}/public/images/email.png" alt="Application Settings" />
                <div class="message">
                    <h4>{{ cleanLang(__('lang.select_email_template_from_dropdown')) }}</h2>
                </div>
            </div>
        </div>
    </div>

    <!--select dropdown-->
    <div id="list-page-actions" class="hidden pull-right w-px-300 select-email-template-dropdown"
        id="fx-settings-emailtemplates-dropdown">
        <form id="fix-form-email-templates">
            <select class="select2-basic form-control form-control-sm text-left" data-url="" id="selectEmailTemplate"
                name="selectEmailTemplate">
                <option value="0">Select Template</option>
                <!--client templates-->
                <optgroup label="{{ cleanLang(__('lang.users')) }}">
                    @foreach($users as $template)
                    <option value="{{ url('settings/email/templates/'.$template->emailtemplate_id) }}">
                        {{ $template->emailtemplate_name }} {{ runtimeEmailTemplates($template->emailtemplate_type) }}
                    </option>
                    @endforeach
                </optgroup>
                <!--projects-->
                <optgroup label="{{ cleanLang(__('lang.projects')) }}">
                    @foreach($projects as $template)
                    <option value="{{ url('settings/email/templates/'.$template->emailtemplate_id) }}">
                        {{ $template->emailtemplate_name }} {{ runtimeEmailTemplates($template->emailtemplate_type) }}
                    </option>
                    @endforeach
                </optgroup>
                <!--leads-->
                <optgroup label="{{ cleanLang(__('lang.leads')) }}">
                    @foreach($leads as $template)
                    <option value="{{ url('settings/email/templates/'.$template->emailtemplate_id) }}">
                        {{ $template->emailtemplate_name }} {{ runtimeEmailTemplates($template->emailtemplate_type) }}
                    </option>
                    @endforeach
                </optgroup>
                <!--tasks-->
                <optgroup label="{{ cleanLang(__('lang.tasks')) }}">
                    @foreach($tasks as $template)
                    <option value="{{ url('settings/email/templates/'.$template->emailtemplate_id) }}">
                        {{ $template->emailtemplate_name }} {{ runtimeEmailTemplates($template->emailtemplate_type) }}
                    </option>
                    @endforeach
                </optgroup>
                <!--billing-->
                <optgroup label="{{ cleanLang(__('lang.billing')) }}">
                    @foreach($billing as $template)
                    <option value="{{ url('settings/email/templates/'.$template->emailtemplate_id) }}">
                        {{ $template->emailtemplate_name }} {{ runtimeEmailTemplates($template->emailtemplate_type) }}
                    </option>
                    @endforeach
                </optgroup>
                <!--estimates-->
                <optgroup label="{{ cleanLang(__('lang.estimates')) }}">
                    @foreach($estimates as $template)
                    <option value="{{ url('settings/email/templates/'.$template->emailtemplate_id) }}">
                        {{ $template->emailtemplate_name }} {{ runtimeEmailTemplates($template->emailtemplate_type) }}
                    </option>
                    @endforeach
                </optgroup>
                <!--subscriptions-->
                <optgroup label="{{ cleanLang(__('lang.subscriptions')) }}">
                    @foreach($subscriptions as $template)
                    <option value="{{ url('settings/email/templates/'.$template->emailtemplate_id) }}">
                        {{ $template->emailtemplate_name }} {{ runtimeEmailTemplates($template->emailtemplate_type) }}
                    </option>
                    @endforeach
                </optgroup>
                <!--tickets-->
                <optgroup label="{{ cleanLang(__('lang.tickets')) }}">
                    @foreach($tickets as $template)
                    <option value="{{ url('settings/email/templates/'.$template->emailtemplate_id) }}">
                        {{ $template->emailtemplate_name }} {{ runtimeEmailTemplates($template->emailtemplate_type) }}
                    </option>
                    @endforeach
                </optgroup>
                <!--system-->
                <optgroup label="{{ cleanLang(__('lang.system')) }}">
                    @foreach($system as $template)
                    <option value="{{ url('settings/email/templates/'.$template->emailtemplate_id) }}">
                        {{ $template->emailtemplate_name }} {{ runtimeEmailTemplates($template->emailtemplate_type) }}
                    </option>
                    @endforeach
                </optgroup>
                <!--other-->
                <optgroup label="{{ cleanLang(__('lang.other')) }}">
                    @foreach($other as $template)
                    <option value="{{ url('settings/email/templates/'.$template->emailtemplate_id) }}">
                        {{ $template->emailtemplate_name }} {{ runtimeEmailTemplates($template->emailtemplate_type) }}
                    </option>
                    @endforeach
                </optgroup>
            </select>
        </form>
    </div>
</form>
@endsection