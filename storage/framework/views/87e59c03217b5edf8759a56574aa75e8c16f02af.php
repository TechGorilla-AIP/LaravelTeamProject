		
<?php $__env->startSection('content'); ?>
<div class="container">  
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Add new announcement</div>

        <div class="panel-body">

          <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            </div>
          <?php endif; ?>

          <form action="<?php echo e(URL('admin/announcements')); ?>" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            Title:<input type="text" name="title" class="form-control" required="required">
            <br>
            <br>
           Contents: <textarea name="body" rows="10" class="form-control"></textarea>
            <br>
            <button class="btn btn-lg btn-info">Add!</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>  
<?php $__env->stopSection(); ?>

<script charset="utf-8" src="/kindeditor/kindeditor-all-min.js"></script>
<script charset="utf-8" src="/kindeditor/lang/en.js"></script>
<script>
var editor;
KindEditor.ready(function(K) {
	editor = K.create('textarea[name="body"]', {
		allowFileManager : true
	});
});
</script>
<?php echo $__env->make('admin.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>