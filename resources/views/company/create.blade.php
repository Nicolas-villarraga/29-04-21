<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Añadir Compañia</title>
</head>

<body>
    <div class="container">
        <div class="rom">
            <div class="col-md-4 col-md-offset-4">
                <br><br>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Crear Nueva Compañia
                    </div>
                    <div class="panel-body">
                        <form action="{{url('companies')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" class="form-control" name="name" id="name">
                                <label for="">descripcion</label>
                                <input type="text" class="form-control" name="description" id="catchPhrase">
                                <label for="">Nit</label>
                                <input type="Number" class="form-control" name="nit" id="crediCardNumber">
                                <label for="">Telefono</label>
                                <input type="Number" class="form-control" name="phone" id="PhoneNumber">
                            </div>
                            <hr>
                            <button class="btn btn-primary" type="submit">Guardar</button>
                            <a href="{{url('companies')}}">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


