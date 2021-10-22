@extends('pages.settings.ajaxwrapper')
@section('settings-page')
<!--settings-->
<form class="form" id="settingsFormEmailSMTP">

    <!--smtp host-->
    <div class="form-group row">
        <label class="col-12 control-label col-form-label">{{ cleanLang(__('lang.smtp_host')) }}</label>
        <div class="col-12">
            <input type="text" class="form-control form-control-sm" id="settings_email_smtp_host"
                name="settings_email_smtp_host" value="{{ $settings->settings_email_smtp_host ?? '' }}">
        </div>
    </div>

    <!--port-->
    <div class="form-group row">
        <label class="col-12 control-label col-form-label">{{ cleanLang(__('lang.smtp_port')) }}</label>
        <div class="col-12">
            <input type="text" class="form-control form-control-sm" id="settings_email_smtp_port"
                name="settings_email_smtp_port" value="{{ $settings->settings_email_smtp_port ?? '' }}">
        </div>
    </div>

    <!--usrname-->
    <div class="form-group row">
        <label class="col-12 control-label col-form-label">{{ cleanLang(__('lang.username')) }}</label>
        <div class="col-12">
            <input type="text" class="form-control form-control-sm" id="settings_email_smtp_username"
                name="settings_email_smtp_username" value="{{ $settings->settings_email_smtp_username ?? '' }}">
        </div>
    </div>

    <!--password-->
    <div class="form-group row">
        <label class="col-12 control-label col-form-label">{{ cleanLang(__('lang.password')) }}</label>
        <div class="col-12">
            <input type="text" class="form-control form-control-sm" id="settings_email_smtp_password"
                name="settings_email_smtp_password" value="{{ $settings->settings_email_smtp_password ?? '' }}">
        </div>
    </div>

    <!--ensryption-->
    <div class="form-group row">
        <label for="example-month-input"
            class="col-12 col-form-label text-left">{{ cleanLang(__('lang.encryption')) }}</label>
        <div class="col-12">
            <select class="select2-basic form-control form-control-sm" id="settings_email_smtp_encryption"
                name="settings_email_smtp_encryption">
                <option value="none">None</option>
                <option value="tls" {{ runtimePreselected('tls', $settings->settings_email_smtp_encryption ?? '') }}>
                    TLS</option>
                <option value="starttls"
                    {{ runtimePreselected('starttls', $settings->settings_email_smtp_encryption ?? '') }}>
                    STARTTLS</option>
                <option value="ssl" {{ runtimePreselected('ssl', $settings->settings_email_smtp_encryption ?? '') }}>
                    SSL</option>
            </select>
        </div>
    </div>

    <!--show error if cronjob has not run before-->
    @if($settings->settings_cronjob_has_run != 'yes')
    <div class="splash-text">
        <div class="alert alert-danger">{{ cleanLang(__('lang.cronjob_and_emails')) }}. <a
                href="https://growcrm.io/documentation/cron-job-settings/"
                target="_blank">@lang('lang.more_information')</a></div>
    </div>
    @endif

    <div>
        <!--settings documentation help-->
        <a href="https://growcrm.io/documentation/email-settings/" target="_blank"
            class="btn btn-sm btn-info  help-documentation"><i class="ti-info-alt"></i>
            {{ cleanLang(__('lang.help_documentation')) }}</a>
    </div>


    <!--buttons-->
    <div class="text-right">
        <!--send a test email-->
        <button type="button" class="btn btn-info edit-add-modal-button js-ajax-ux-request reset-target-modal-form"
            data-toggle="modal" data-target="#commonModal" data-url="{{ url('settings/email/testemail') }}"
            data-loading-target="commonModalBody" data-modal-title="Send A Test Email"
            data-action-url="{{ url('settings/email/testemail') }}" data-action-method="POST" data-action-ajax-class=""
            data-action-type='form' data-action-form-id="test-email-form""
                data-modal-size=" modal-lg" data-header-close-icon="hidden" data-header-extra-close-icon="visible"
            data-action-ajax-loading-target="commonModalBody">{{ cleanLang(__('lang.send_test_email')) }}
        </button>
        <button type="submit" id="commonModalSubmitButton" class="btn btn-rounded-x btn-danger waves-effect text-left"
            data-url="/settings/email/smtp" data-loading-target="" data-ajax-type="PUT" data-type="form"
            data-on-start-submit-button="disable">{{ cleanLang(__('lang.save_changes')) }}</button>
    </div>
</form>
@endsection