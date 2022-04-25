@extends("layouts.dashboard")


@section("content")
<div class="container-fluid">
    <div>
        <p class="text-muted">Welcome back, {{auth()->user()->first_name}}</p>
        <h6 class="fs-11">Dashboard</h6>
    </div>
</div>
@endsection