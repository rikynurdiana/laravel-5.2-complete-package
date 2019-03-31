@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                    @can('admin')
                        <a href="#">Show if login as admin</a>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
