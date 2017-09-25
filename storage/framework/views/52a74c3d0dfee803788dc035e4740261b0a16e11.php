<?php $__env->startSection('content'); ?>
<div class="container">  
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">管理分类</div>

        <div class="panel-body">
		<a href="<?php echo e(URL('admin/types/create')); ?>" class="btn btn-lg btn-primary">新增</a>
        <table class="table table-striped">
          <tr class="row">
            <th class="col-lg-6">标题</th>
            <th class="col-lg-3">编辑</th>
            <th class="col-lg-3">删除</th>
          </tr>
          <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="row">
              <td class="col-lg-6">
                    <?php echo e($type->name); ?>

              </td>
              <td class="col-lg-3">
                <a href="<?php echo e(URL('admin/types/'.$type->id.'/edit')); ?>" class="btn btn-success">编辑</a>
              </td>
              <td class="col-lg-3">
                  <button onclick="deleteInfo(<?php echo e($type->id); ?>);"   class="btn btn-danger">删除</button>
              </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

<?php echo $types->render(); ?>
        </div>
      </div>
    </div>
  </div>
</div>  

<script>
function deleteInfo(id)
{
	if(id) {
		var r=confirm('确定要删除吗');
		if(r==true) {
			$.ajax({ 
				url: "<?php echo e(URL('admin/types/delete/')); ?>", 
				type: "POST",
				data:{id:id,_token:'<?php echo e(csrf_token()); ?>'},
				success: function(data){
					if(data==1) {
		        		alert('删除成功');
		        		location.href= "<?php echo e(URL('admin/types/')); ?>";
					} else {
						alert('删除失败');
					}
		     }});
		}
	}
}
</script>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>