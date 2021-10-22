@extends('pages.settings.ajaxwrapper')
@section('settings-page')
<!--settings-->
<form class="form" id="settingsFormProjects">
    <!--form text tem-->
    <div class="form-group row">
        <label class="col-3 control-label col-form-label">{{ cleanLang(__('lang.default_hourly_rate')) }}</label>
        <div class="col-3">
            <input type="number" class="form-control form-control-sm" id="settings_projects_default_hourly_rate"
                name="settings_projects_default_hourly_rate" value="{{ $settings->settings_projects_default_hourly_rate ?? '' }}">
        </div>
    </div>
    <div class="text-right">
        <button type="submit" id="commonModalSubmitButton"
            class="btn btn-rounded-x btn-danger waves-effect text-left"
            data-url="/settings/projects/general" data-loading-target="" data-ajax-type="PUT" data-type="form"
            data-on-start-submit-button="disable">{{ cleanLang(__('lang.save_changes')) }}</button>
    </div>

    
    <div>
        <!--settings documentation help-->
        <a href="https://growcrm.io/documentation/project-settings/"  target="_blank" class="btn btn-sm btn-info help-documentation"><i class="ti-info-alt"></i> {{ cleanLang(__('lang.help_documentation')) }}</a>
    </div>

</form>
@endsection