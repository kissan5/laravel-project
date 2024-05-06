<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register crud</title>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="color:rgb(167, 167, 95);">
    <div class="container">
        <h1 style="text-align: center; color:lightcoral;"> Student data from database </h1>
        <table style="border-radius:40px;" class="table table-bordered shadow text-center table-striped">
            <tr style="background-color: rgb(192, 192, 238); text-style:bold; ">
           <th>ID</th>
           <th>Reg</th>
           <th>Fullname</th>
           <th>Seater</th>
           <th>Room No</th>
           <th>Email</th>
           <th>Date of Birth*</th>
           <th>Number</th>
           <th>Gnumber</th>
           <th>Address</th>
           <th>Gaddress</th>
           <th colspan="2">Operation</th>
            </tr>
          @foreach ($posts as $post )
              <tr style="border-radius:40px;">
                <td>{{ $post->id }}</td>
                <td>{{ $post->reg }}</td>
                <td>{{ $post->fulname }}</td>
                <td>{{ $post->seater }}</td>
                <td>{{ $post->Roomno }}</td>
                <td>{{ $post->email }}</td>
                <td>{{ $post->date }}</td>
                <td>{{ $post->number }}</td>
                <td>{{ $post->gnumber }}</td>
                <td>{{ $post->addrss }}</td>
                <td>{{ $post->gaddrss }}</td>
                <td><a href="/delete/{{$post->id}}" class="btn btn-danger">Delete</a></td>
                <td><a href="/edit/{{$post->id}}" class="btn btn-success">Edit</a></td>
              </tr>
          @endforeach
              </table>
    </div>
</body>
</html>