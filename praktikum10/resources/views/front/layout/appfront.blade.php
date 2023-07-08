@include('front.layout.home')
@include('front.layout.about')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            @yield('content')
        </div>
    </main>
</div>
</div>
@include('front.layout.bottom')