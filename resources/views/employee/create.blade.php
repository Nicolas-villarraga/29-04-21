!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Añadir Empleado</title>
</head>

<body>
    <div class="container">
        <div class="rom">
            <div class="col-md-4 col-md-offset-4">
                <br><br>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Crear Empleado
                    </div>
                    <div class="panel-body">
                        <form action="{{url('employees')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" class="form-control" name="name" id="name">
                                <label for="">lastname</label>
                                <input type="text" class="form-control" name="lastname" id="lastname">
                                <label for="">email</label>
                                <input type="text" class="form-control" name="email" id="email">
                                <label for="">documento</label>
                                <input type="number" class="form-control" name="document" id="isbn10">
                                <label for="">genero</label>
                                <input type="text" class="form-control" name="gender" id="creditCardNumber">
                            </div>
                            <hr>
                            <button class="btn btn-primary" type="submit">Guardar</button>
                            <a href="{{url('employees')}}">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>