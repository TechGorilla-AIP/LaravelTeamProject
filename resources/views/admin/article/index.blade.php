@extends('admin.app')

@section('content')
<div class="container">  
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Post Management System</div>

        <div class="panel-body">

        <table class="table table-striped">
          <tr class="row">
            <th class="col-lg-2">Title</th>
            <th class="col-lg-4">Category</th>
            <th class="col-lg-4">Preview</th>
            <th class="col-lg-1">Edit</th>
            <th class="col-lg-1">Remove</th>
          </tr>
          @foreach ($articles as $article)
            <tr class="row">
              <td class="col-lg-2">
                    {{ $article->title }}
              </td>
              <td class="col-lg-6">
                {{ App\Type::find($article->typeId)->name }}
              </td>
              <td class="col-lg-4">
                <a href="{{ URL('article/show/'.$article->id) }}" target="_blank">
                  {{ App\Article::find($article->id)->title }}
                </a>
              </td>
              <td class="col-lg-1">
                <a href="{{ URL('admin/articles/'.$article->id.'/edit') }}" class="btn btn-success">Edit</a>
              </td>
              <td class="col-lg-1">
                  <button onclick="deleteInfo({{$article->id}});"   class="btn btn-danger">Remove</button>
              </td>
            </tr>
          @endforeach
        </table>
            <a href="{{ URL('admin/articles/create') }}" class="btn btn-lg btn-primary">Add new post</a>

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
		var r=confirm('You are going to remove a post from users');
		if(r==true) {
			$.ajax({ 
				url: "{{ URL('admin/articles/delete/') }}", 
				type: "POST",
                // post id, token id and launch
				data:{id:id,_token:'{{csrf_token()}}'},
				success: function(data){
					if(data==1) {
		        		alert('Post removed');
		        		location.href= "{{ URL('admin/articles/')}}";
					} else {
						alert('Failed to remove');
					}
		     }});
		}
	}
}
</script>

@endsection


