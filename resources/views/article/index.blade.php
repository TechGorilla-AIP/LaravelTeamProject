@extends('layouts.app')

@section('content')
<div class="container">  
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">mamange articles</div>

        <div class="panel-body">
		<a href="{{ URL('home/create') }}" class="btn btn-lg btn-primary">post</a>
        <table class="table table-striped">
          <tr class="row">
            <th class="col-lg-2">title</th>
            <th class="col-lg-4">type</th>
            <th class="col-lg-4">view</th>
            <th class="col-lg-1">edit</th>
            <th class="col-lg-1">delete</th>
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
                <a href="{{ URL('home/'.$article->id.'/edit') }}" class="btn btn-success">edit</a>
              </td>
              <td class="col-lg-1">
                  <button onclick="deleteInfo({{$article->id}});"   class="btn btn-danger">delete</button>
              </td>
            </tr>
          @endforeach
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
		var r=confirm('confirm delete');
		if(r==true) {
			$.ajax({ 
				url: "{{ URL('home/delete/') }}", 
				type: "POST",
				data:{id:id,_token:'{{csrf_token()}}'},
				success: function(data){
					if(data==1) {
		        		alert('delete success');
		        		location.href= "{{ URL('/home')}}";
					} else {
						alert('delete fail');
					}
		     }});
		}
	}
}
</script>

@endsection


