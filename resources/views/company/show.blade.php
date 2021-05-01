<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Detalle de compañia</title>
</head>

<body>
    <div class="container">
        <div class="rom">
            <div class="col-md-4 col-md-offset-4">
                <br>
                <table class="table table-striped table-bordered">
                    <tr>
                        <td class="text-center" colspan="2"><strong></strong> Descripcion</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Nombre</strong></td>
                        <td>{{$companies->name}}</td>
                    </tr>
                    <tr>
                        <td><strong>Descripcion</strong> </td>
                        <td>{{$companies->description}}</td>
                    </tr>
                    <tr>
                        <td><strong>nit</strong></td>
                        <td>{{$companies->nit}}</td>
                    </tr>
                    <tr>
                        <td><strong>Telefono</strong></td>
                        <td>{{$companies->phone}}</td>
                    </tr>
                </table>
                <a href="{{url('companies')}}">Cancelar</a>
            </div>
        </div>
    </div>
    </div>
</body>

</html>