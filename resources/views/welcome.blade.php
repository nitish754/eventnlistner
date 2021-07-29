<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Form Request</title>
</head>
<body>
    <div class="container">
        @foreach ($errors->all() as $error)
             <div class="alert alert-danger">{{ $error }}</div>
         @endforeach
        <div class="row jsutify-content-center">
     
         

            <form action="{{route('store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-info" type="submit">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>