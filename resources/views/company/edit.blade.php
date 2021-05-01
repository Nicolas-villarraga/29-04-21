<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Crear Compañia</title>
</head>

<body>
    <div class="container">
        <div class="rom">
            <div class="col-md-4 col-md-offset-4">
                <br><br>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Editar Compañia
                    </div>
                    <div class="panel-body">
                        <form action="{{url('company',$companies->id)}}" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-goup">
                                <label for="">Nombre</label>
                                <input type="text" class="form-control" name="name" id="id" value={{$companies->name}}>
                                <label for="">Descripcion</label>
                                <input type="text" class="form-control" name="description" id="" value={{$companies->description}}>
                                <label for="">Nit</label>
                                <input type="textNumber" class="form-control" name="nit" id="nit" value={{$companies->nit}}>
                                <label for="">Telefono</label>
                                <input type="textNumber" class="form-control" name="phone" id="crediCardNumber" value={{$companies->phone}}>
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

