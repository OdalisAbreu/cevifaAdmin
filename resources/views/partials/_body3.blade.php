<div id="loading">
@include('partials._body_loader')
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">
    <div class="container-fluid container-md hotel-container">
        @include('partials._body_header_dashboard_3')
        <div class="content-page">
            {{ $slot }}
        </div>
    </div>
</div>
<!-- Wrapper End-->
<div class="container">
    <div class="row">
        @include('partials._body_footer')
    </div>
</div>



@include('partials._scripts')
