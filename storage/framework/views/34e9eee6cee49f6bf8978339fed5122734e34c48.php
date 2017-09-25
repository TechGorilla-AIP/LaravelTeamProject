<?php $__env->startSection('content'); ?>
<div class="container">  
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">POSTS Management</div>

        <div class="panel-body">

		<a href="<?php echo e(URL('admin/articles/create')); ?>" class="btn btn-lg btn-primary">NEW POST</a>
        <table class="table table-striped">
          <tr class="row">
            <th class="col-lg-2">Title</th>
            <th class="col-lg-4">category</th>
            <th class="col-lg-4">View</th>
            <th class="col-lg-1">Edit</th>
            <th class="col-lg-1">Remove</th>
          </tr>
          <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="row">
              <td class="col-lg-2">
                    <?php echo e($article->title); ?>

              </td>
              <td class="col-lg-6">
                <?php echo e(App\Type::find($article->typeId)->name); ?>

              </td>
              <td class="col-lg-4">
                <a href="<?php echo e(URL('articles/show/'.$article->id)); ?>" target="_blank">
                  <?php echo e(App\Article::find($article->id)->title); ?>

                </a>
              </td>
              <td class="col-lg-1">
                <a href="<?php echo e(URL('admin/articles/'.$article->id.'/edit')); ?>" class="btn btn-success">Edit</a>
              </td>
              <td class="col-lg-1">
                  <button onclick="deleteInfo(<?php echo e($article->id); ?>);"   class="btn btn-danger">Remove</button>
              </td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

<?php echo $articles->render(); ?>
        </div>
      </div>
    </div>
  </div>
</div>  

<script>
function deleteInfo(id)
{
	if(id) {
		var r=confirm('Are you sure');
		if(r==true) {
			$.ajax({ 
				url: "<?php echo e(URL('admin/articles/delete/')); ?>", 
				type: "POST",
				data:{id:id,_token:'<?php echo e(csrf_token()); ?>'},
				success: function(data){
					if(data==1) {
		        		alert('Removed successfully');
		        		location.href= "<?php echo e(URL('admin/articles/')); ?>";
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