@extends('admin_master_def')

@section('title', '| Not Found 404')

@section('content')
<section class="content">
    <div class="error-page">
        <h2 class="headline text-yellow"> 404</h2>
        <div class="error-content" style="transform: translateY(38px)">
            <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>
            <p>
                We could not find the page you were looking for.
                Meanwhile, you may <a href="{{ url('admin') }}">return to dashboard</a>.
            </p>
        </div>
    </div>
</section>
@endsection
