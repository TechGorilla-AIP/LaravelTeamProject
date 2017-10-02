@extends('admin.app')

@section('content')
<div class="container">  
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Category Management</div>

        <div class="panel-body">
		<a href="{{ URL('admin/types/create') }}" class="btn btn-lg btn-primary">Add a new category</a>
        <br/><br/>
            <table class="table table-striped">
          <tr class="row">
            <th class="col-lg-6">Name</th>
            <th class="col-lg-3">Edit</th>
            <th class="col-lg-3">Remove</th>
          </tr>
          @foreach ($types as $type)
            <tr class="row">
              <td class="col-lg-6">
                    {{ $type->name }}
              </td>
              <td class="col-lg-3">
                <a href="{{ URL('admin/types/'.$type->id.'/edit') }}" class="btn btn-success">Edit</a>
              </td>
              <td class="col-lg-3">
                  <button onclick="deleteInfo({{$type->id}});"   class="btn btn-danger">Remove</button>
              </td>
            </tr>
          @endforeach
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
		var r=confirm('You are going to remove a category');
		if(r==true) {
			$.ajax({ 
				url: "{{ URL('admin/types/delete/') }}", 
				type: "POST",
				data:{id:id,_token:'{{csrf_token()}}'},
				success: function(data){
					if(data==1) {
		        		alert('Category removed');
		        		location.href= "{{ URL('admin/types/')}}";
					} else {
						alert('Failed to remove');
					}
		     }});
		}
	}
}
</script>

@endsection


