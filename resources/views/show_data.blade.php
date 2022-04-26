<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>show page</title>
    <style>
      
      .laname{
      /*  background: green;*/
        color: green;
        font-size:30px;
      }

      .mail{
        color: green;
        font-size:30px;
      }
    </style>
  </head>
  <body>

    <div class="container">
     <a href="{{url('/add_data')}}" class="btn btn-primary my-3" >Add Data</a>
         @if(Session::has('smg'))
          <p class=" alert alert-success">{{Session::get('smg')}}</p>
          @endif

     <form action="" method="post">

      <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($showData as $key=>$data)
    <tr>
      <td>{{$key+1}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>
        <a href="{{url('/edit_data/'.$data->id)}}" class="btn btn-success">Edit</a>
        <a href="{{url('/delete_data/'.$data->id)}}" onclick="return confirm('Are you sure to delete data')" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$showData->links()}}
       
     </form>
    </div>
  </body>
</html>