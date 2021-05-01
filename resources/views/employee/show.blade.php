<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Detalle del empleado</title>
</head>

<body>
    <div class="container">
        <div class="rom">
            <div class="col-md-4 col-md-offset-4">
                <br>
                <table class="table table-striped table-bordered">
                    <tr>
                        <td class="text-center" colspan="2"><strong></strong> Detalle</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Nombre</strong></td>
                        <td>{{$employees->name}}</td>
                    </tr>
                    <tr>
                        <td><strong>Apellidos</strong> </td>
                        <td>{{$employees->lastname}}</td>
                    </tr>
                    <tr>
                        <td><strong>email</strong></td>
                        <td>{{$employees->email}}</td>
                    </tr>
                    <tr>
                        <td><strong>Documento</strong></td>
                        <td>{{$employees->document}}</td>
                    </tr>
                    <tr>
                        <td><strong>genero</strong></td>
                        <td>{{$employees->gender}}</td>
                    </tr>
                </table>
                <a href="{{url('employees')}}">Cancelar</a>
            </div>
        </div>
    </div>
    </div>
</body>

</html>