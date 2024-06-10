<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container">
    <br>
    <a href="{{route('Student.create')}}" class="btn btn-primary mt-5">create</a>
    <br>
    <br>
    <table class="table table-striped mt-5" >
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Contact nu</th>
            <th scope="col">Address</th>
            <th scope="col">Date of Birth</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($students as $student )


          <tr>
            <th scope="row">{{$student->id}}</th>
            <td>{{$student->first_name}}</td>
            <td>{{$student->last_name}}</td>
            <td>{{$student->contact_nu}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->dob}}</td>
            <td><a href="{{route('Student.edit',$student->id)}}" class="btn btn-primary">Edit</a></td>
            <td><a href="{{route('Student.delete',$student->id)}}" class="btn btn-primary">Delete</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>
