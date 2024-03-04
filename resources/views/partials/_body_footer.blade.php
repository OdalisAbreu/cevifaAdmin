<footer class="iq-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="{{ route('app.userdetail.privacysetting') }}">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="{{ route('app.userdetail.termsofservice') }}">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-lg-6 text-right">
                <span class="mr-1">
                    Copyright {{ date('Y') }}© <a href="#" class="">{{ env('APP_NAME') }}</a>
                    All Rights Reserved.
                </span>
            </div>
        </div>
    </div>
</footer>