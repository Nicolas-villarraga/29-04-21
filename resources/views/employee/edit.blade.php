<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>editar</title>
</head>

<body>
    <div class="container">
        <div class="rom">
            <div class="col-md-4 col-md-offset-4">
                <br><br>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Editar empleado
                    </div>
                    <div class="panel-body">
                        <form action="{{url('employee',$employees->id)}}" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-goup">
                                <label for="">Nombre</label>
                                <input type="text" class="form-control" name="name" id="name" value={{$employees->name}}>
                                <label for="">Apellidos</label>
                                <input type="text" class="form-control" name="lastname" id="lastname" value={{$employees->lastname}}>
                                <label for="">email</label>
                                <input type="textNumber" class="form-control" name="email" id="" value={{$employees->email}}>
                                <label for="">Documento</label>
                                <input type="text" class="form-control" name="document" id="" value={{$employees->isbn10}}>
                                <label for="">genero</label>
                                <input type="text" class="form-control" name="gender" id="" value={{$employees->creadiCardNumber}}>
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