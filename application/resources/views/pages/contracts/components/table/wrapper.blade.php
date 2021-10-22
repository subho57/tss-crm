<!--main table view-->
@include('pages.tasks.contracts.table.table')


<!--filter-->
@if(auth()->user()->is_team)
@include('pages.contracts.components.misc.filter-contracts')
@endif
<!--filter-->