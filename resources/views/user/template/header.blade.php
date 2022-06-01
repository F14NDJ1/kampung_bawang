<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    @yield('route')
                </div>
            </div>
            <!-- Card stats -->
            <div class="row">
                @yield('card-body1')
                @yield('card-body2')
                @yield('card-body3')
                @yield('card-body')
            </div>
        </div>
    </div>
</div>
