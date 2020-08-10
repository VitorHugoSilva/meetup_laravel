<!doctype html>
<html lang="pt-br">
@include('template.site.partials.head')
<body>
<div class="container">
    <header>
        <div class="row">
            <div class="col-12 my-5">
                <h1>Blog Prodap</h1>
            </div>
        </div>
        @include('template.site.partials.navbar')
    </header>
    <section>
        @yield('content')
    </section>
@include('template.site.partials.footer')


</div>
@include('template.site.partials.scripts')
</body>
</html>
