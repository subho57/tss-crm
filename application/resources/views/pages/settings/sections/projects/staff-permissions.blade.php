@extends('pages.settings.ajaxwrapper')
@section('settings-page')
<!--settings-->
<form>
    <div class="form-group form-group-checkbox row">
        <label class="col-4 col-form-label text-left">{{ cleanLang(__('lang.tasks_collaboration')) }}</label>
        <div class="col-8 text-left p-t-5">
            <input type="checkbox" id="settings_projects_assignedperm_tasks_collaborate"
                name="settings_projects_assignedperm_tasks_collaborate" class="filled-in chk-col-light-blue"
                {{ runtimePrechecked($settings['settings_projects_assignedperm_tasks_collaborate'] ?? '') }}>
            <label for="settings_projects_assignedperm_tasks_collaborate"></label>
        </div>
    </div>
    <div>
        <!--settings documentation help-->
        <a href="https://growcrm.io/documentation/project-settings/"  target="_blank" class="btn btn-sm btn-info help-documentation"><i class="ti-info-alt"></i> {{ cleanLang(__('lang.help_documentation')) }}</a>
    </div>
    <div class="text-right">
        <button type="submit" id="commonModalSubmitButton" class="btn btn-rounded-x btn-danger waves-effect text-left js-ajax-ux-request"
            data-url="/settings/projects/staff" data-loading-target="" data-ajax-type="PUT" data-type="form"
            data-on-start-submit-button="disable">{{ cleanLang(__('lang.save_changes')) }}</button>
    </div>
</form>
@endsection