<!-- action buttons -->
@include('pages.contracts.components.misc.list-page-actions')
<!-- action buttons -->

<!--stats panel-->
@if(auth()->user()->is_team)
<div class="stats-wrapper" id="contracts-stats-wrapper">
@if (@count($contracts) > 0) @include('misc.list-pages-stats') @endif
</div>
@endif
<!--stats panel-->

<!--contracts table-->
<div class="card-embed-fix">
@include('pages.contracts.components.table.wrapper')
</div>
<!--contracts table-->