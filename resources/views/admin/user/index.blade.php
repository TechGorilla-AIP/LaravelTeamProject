@extends('admin.app')

@section('content')
<div class="container">  
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Subscribers Management</div>

        <div class="panel-body">

        <table class="table table-striped">
          <tr class="row">
            <th class="col-lg-4">User Name</th>
            <th class="col-lg-4">Email Address</th>
            <th class="col-lg-1">Edit</th>
            <th class="col-lg-1">Remove</th>
          </tr>
          @foreach ($users as $user)
            <tr class="row">
              <td class="col-lg-4">
                    {{ $user->name }}
              </td>
               <td class="col-lg-4">
                    {{ $user->email }}
              </td>
              <td class="col-lg-1">
                <a href="{{ URL('admin/users/'.$user->id.'/edit') }}" class="btn btn-success">Edit</a>
              </td>
              <td class="col-lg-1">
                  <button onclick="deleteInfo({{$user->id}});"   class="btn btn-danger">Remove</button>
              </td>
            </tr>
          @endforeach
        </table>
            <br/>As administrator you can register users to the system directly. <br/>
            <a href="{{ URL('admin/users/create') }}" class="btn btn-lg btn-primary">Add</a>

<?php echo $users->render(); ?>
        </div>
      </div>
    </div>
  </div>
</div>  

<script>
function deleteInfo(id)
{
	if(id) {
		var r=confirm('You are going to close an user account. IMPORTANT: This is irreversible.');
		if(r==true) {
			$.ajax({ 
				url: "{{ URL('admin/users/delete/') }}", 
				type: "POST",
				data:{id:id,_token:'{{csrf_token()}}'},
				success: function(data){
					if(data==1) {
		        		alert('Account has been written off');
		        		location.href= "{{ URL('admin/users/')}}";
					} else {
						alert('Ops, failed to remove.');
					}
		     }});
		}
	}
}
</script>

@endsection


