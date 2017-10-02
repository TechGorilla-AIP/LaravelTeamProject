@extends('admin.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><img src="/favicon.ico" height="35" width="35" />TechGorilla Admin Dashboard</div>

                <div class="panel-body">
                    Admin logged in successfully.
                    <br/><br/>
                    Current running on Alpha v0.2 with [Laravel 5.4] framework. No front-end UI has been implemented yet.
                    <br/><br/>
                    This admin panel is able to manage posts, categories, subscribers(users), and admins for TechGorilla authorized managers only. All sensitive data will be stored encrypted.
                    <br/><br/>
                    TechGorilla Team - <b>Fulun He, Qiaozhi Lu & Xiaohan Wang.</b>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
