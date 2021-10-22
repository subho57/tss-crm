<ul class="nav nav-tabs" role="tablist">
        <!--home-->
        <li class="nav-item"> <a class="nav-link active ajax-request" data-toggle="tab" href="javascript:void(0);"
                        role="tab" data-url="{{ url('tasks/content/'.$task->task_id.'/show-main?show=tab') }}"
                        data-loading-class="loading-before-centre" data-loading-target="card-tasks-left-panel"><span
                                class="hidden-sm-up"><i class="ti-home"></i></span> <span
                                class="hidden-xs-down">@lang('lang.task')</span></a> </li>

        <!--customfields-->
        <li class="nav-item"> <a class="nav-link ajax-request" data-toggle="tab" href="javascript:void(0);" role="tab"
                        data-url="{{ url('tasks/content/'.$task->task_id.'/show-customfields') }}"
                        data-loading-class="loading-before-centre" data-loading-target="card-tasks-left-panel">
                        <span class="hidden-sm-up"><i class="ti-menu"></i></span>
                        <span class="hidden-xs-down">@lang('lang.information')</span></a>
        </li>


        <!--my notes (do not show for templates)-->
        @if($task->project_type == 'project')
        <li class="nav-item"> <a class="nav-link ajax-request" data-toggle="tab" href="javascript:void(0);" role="tab"
                        data-url="{{ url('tasks/content/'.$task->task_id.'/show-mynotes') }}"
                        data-loading-class="loading-before-centre" data-loading-target="card-tasks-left-panel">
                        <span class="hidden-sm-up"><i class="ti-notepad"></i></span>
                <span
                                class="hidden-xs-down">@lang('lang.my_notes')</span></a>
        </li>
        @endif
</ul>