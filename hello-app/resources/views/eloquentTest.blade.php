<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>eloquentTest</title>
</head>
<body>
    @include('includes.header')
    
    @section('content')
    @if($errors->any())
    <div class="alert alert-danger">
        <p><strong>Opps Something went wrong</strong></p>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif
    @if (('success'))
    <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
            Card added successfully
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
    </div>
    @endif
    <form method="POST" action="" class="align-center">
        @csrf
        <div class="form-group">
            <label for="name">Name: </label>
            <input class="form-control" type="text" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="cardtype">Cardtype: </label>
            <input class="form-control" type="text" name="cardtype" id="cardtype">
        </div>
        <div class="form-group">
            <label for="rarity">Rarity: </label>
            <input class="form-control" type="text" name="rarity" id="rarity">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" id="submit">
    </form>
    @show

    @include('includes.footer')
</body>
</html>