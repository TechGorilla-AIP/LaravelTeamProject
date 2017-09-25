<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">TechGorilla Admin Dashboard</div>

                <div class="panel-body">
                    Admin logged in successfully.
                    <br/><br/>
                    Current running on Alpha v0.2 with [Laravel 5.4] framework. No front-end UI has been implemented yet.
                    <br/><br/>
                    This admin panel is able to manage posts, categories, subscribers(users), and admins for TechGorilla authorized managers only. All sensitive data will be stored encrypted.
                    <br/><br/>
                    Note: The following functions are unavailable at this moment: <br/>Manage posts<br/>ManageCategories<br/>Manage subscribers<br/>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>