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

    <form class="mt-5" action="{{route('Student.store')}}" method="POST">
        @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <h1 style="font-size: 2em; color: #333; text-align: center; margin-bottom: 15px;"> Register students here </h1>
        <div class="form-group">
          <label for="exampleInputEmail1" style="font-weight: bold; display: block; margin-bottom: 5px;">First Name</label>
          <input type="text" class="form-control" name="first_name" placeholder="Input student's First Name">
        </div>
        <br>
        <div class="form-group">
          <label for="exampleInputPassword1" style="font-weight: bold; display: block; margin-bottom: 5px;" >Last Name</label>
          <input type="text" class="form-control" name="last_name" placeholder="Input student's Last Name">
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputEmail1" style="font-weight: bold; display: block; margin-bottom: 5px;">Contact number</label>
            <input type="number" class="form-control" name="contact_nu" placeholder="Input student's Contact Number">
          </div>
          <br>
          <div class="form-group">
            <label for="exampleInputEmail1" style="font-weight: bold; display: block; margin-bottom: 5px;">Address</label>
            <input type="text" class="form-control" name="address" placeholder="Input student's Address">
          </div>
          <br>
          <div class="form-group">
            <label for="exampleInputEmail1" style="font-weight: bold; display: block; margin-bottom: 5px;">Birth Day</label>
            <input type="text" class="form-control" name="dob" placeholder="Input student's Birth Day">
          </div>
          <br>
        <center><button type="submit" class="btn btn-primary">Submit</button>
      </form>

</body>
</html>
