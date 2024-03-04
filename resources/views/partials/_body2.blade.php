<div id="loading">
    @include('partials._body_loader')
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper bg-h-full l-horizontal overflow-hidden">
    @include('partials._body_header_dashboard_2')
    <div class="content-page hospi-content">
        {{$slot}}
    </div>
</div>
<!-- Wrapper End-->
<div class="container-fluid">
    <div class="row">
        @include('partials._body_footer')
    </div>
</div>

@include('partials._scripts')
