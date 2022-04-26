<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>Edit page</title>
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
     <a href="{{url('/')}}" class="btn btn-primary my-3" >Show Data</a>

        <!--    @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif -->
      
     <form action="{{url('/update_data/'.$editData->id)}}" method="post">
      @csrf
       <div class="form-group">
         <label for="" class="laname">Name:</label>
         <input type="text" class="form-control" value="{{$editData->name}}" name="name" align="" placeholder="Enter Your Name">

         @error('name')
         <span class="text-danger">{{$message}}</span>
         @enderror

       </div>

       <div class="form-group">
         <label for="" class="mail">Email:</label>
         <input type="text" class="form-control" value="{{$editData->email}}"  name="email" align="" placeholder="Enter Your Email">

         @error('email')
         <span class="text-danger">{{$message}}</span>
         @enderror 

       </div>
       <input type="submit" class="btn btn-success" value="SUBMIT">
     </form>
    </div>
  </body>
</html>