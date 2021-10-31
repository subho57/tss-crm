<div class="row">

    {{-- <!--TIMELINE-->
    @include('pages.home.admin.widgets.third-row.events')

    <!--PROJECTS-->
    @include('pages.home.admin.widgets.third-row.projects') --}}

    <!--PROJECTS PENDING-->
    @include('pages.home.team.widgets.first-row.projects-pending')

    <!--PROJECTS COMPLETED-->
    @include('pages.home.team.widgets.first-row.tasks-new')

    <!--INVOICES DUE-->
    @include('pages.home.team.widgets.first-row.tasks-inprogress')

    <!--INVOICES OVERDUE-->
    @include('pages.home.team.widgets.first-row.tasks-feedback')
</div>