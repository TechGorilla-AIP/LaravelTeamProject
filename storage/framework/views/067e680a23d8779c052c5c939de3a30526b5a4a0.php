<?php $__env->startSection('content'); ?>
<div class="container">  
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">ADMIN</div>

        <div class="panel-body">
		<a href="<?php echo e(URL('admin/admins/create')); ?>" class="btn btn-lg btn-primary">新增</a>
        <table class="table table-striped">
          <tr class="row">
            <th class="col-lg-4">user name</th>
            <th class="col-lg-4">Email address</th>
            <th class="col-lg-1">edit</th>
            <th class="col-lg-1">remove</th>
          </tr>
          <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="row">
              <td class="col-lg-4">
                    <?php echo e($admin->name); ?>

              </td>
               <td class="col-lg-4">
                    <?php echo e($admin->email); ?>

              </td>
              <td class="col-lg-1">
                <a href="<?php echo e(URL('admin/admins/'.$admin->id.'/edit')); ?>" class="btn btn-success">edit</a>
              </td>
              <td class="col-lg-1">
                  <button onclick="deleteInfo(<?php echo e($admin->id); ?>);"   class="btn btn-danger">remove</button>
              </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

<?php echo $admins->render(); ?>
        </div>
      </div>
    </div>
  </div>
</div>  

<script>
function deleteInfo(id)
{
	if(id) {
		var r=confirm('Are you sre?');
		if(r==true) {
			$.ajax({ 
				url: "<?php echo e(URL('admin/admins/delete/')); ?>", 
				type: "POST",
				data:{id:id,_token:'<?php echo e(csrf_token()); ?>'},
				success: function(data){
					if(data==1) {
		        		alert('Removed successfully');
		        		location.href= "<?php echo e(URL('admin/admins/')); ?>";
					} else {
						alert('Failed to remove');
					}
		     }});
		}
	}
}
</script>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>