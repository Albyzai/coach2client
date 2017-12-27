<div class="container-fluid cover-no-search">

    <div class="container cover-container">
        <!-- <div class="cover-title-wrapper">
            <h1 class="cover-heading heading white-text">@yield('title')</h1>
        </div> -->

<div style="width:100%; height:100%; position:relative;">
    @if(Auth::check() && \Route::current()->getName() == 'profile')
            @yield('edit-cover')
        @endif
</div>
    </div>

</div>