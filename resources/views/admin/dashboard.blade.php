@extends('admin.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><img src="/favicon.ico" height="35" width="35" />TechGorilla Admin Dashboard</div>

                <div class="panel-body">
                    Administrator logged in successfully.
                    <br/><br/>
                    Current running on version:Public 1.0 with [Laravel 5.4] framework and [Kindeditor]. Front end is developed with Bootstrap.
                    <br/><br/>
                    This admin panel is able to manage posts, categories, subscribers(users) and announcements.
                    <br/><br/>
                    TechGorilla Team - <b>Fulun He, Qiaozhi Lu & Xiaohan Wang.</b>
                    <p>For TechGorilla authorized administrators only. All personal data will be stored encrypted in our database.</p>
                    <br/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
