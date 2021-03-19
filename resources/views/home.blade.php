@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <table class="table table-responsive">
                    <tr><th>Username</th><th><td>{{ $User->username }}</td></tr>
                    <tr><th>Name</th><th><td>{{ $User->Name }}</td></tr>
                    <tr><th>Email</th><th><td>{{ $User->Email }}</td></tr>
                    <tr><th>Created At</th><th><td>{{ $User->Created At }}</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
