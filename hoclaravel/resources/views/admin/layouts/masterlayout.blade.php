<x-admin.header />
<x-admin.sidebar />
<x-admin.navbar />
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@yield('title', 'Admin')</h1>
                </div>
            </div>
        </div>
</section>
@yield('content')
</div>
<x-admin.footer />
@stack('scripts')
@stack('scripts')

