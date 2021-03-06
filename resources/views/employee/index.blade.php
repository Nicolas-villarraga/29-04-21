<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Empleados</title>
</head>

<body>
    <div class="container">
        <row>
            <div class="col-mg-12">
            <br>
            <a href="{{url('employees/create')}}" class="btn btn-primary ">Crear Nuevo Empleado</a>
            @if(session('status-1'))
                <div class="alert alert-success" type="create">
                {{session('status-1')}}
                </div>
                @endif
                @if(session('status-2'))
                <div class="alert alert-danger" type="delete">
                {{session('status-2')}}
                </div>
                @endif
                @if(session('status-3'))
                <div class="alert alert-seccess"type="update">
                    {{session('status-3')}}
                </div>
                @endif
                <br><br>    
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $employee)
                        <tr>
                            <td>{{$employee->id}}</td>
                            <td>{{$employee->name}}</td>
                            <td>
                                <form action="{{url('employees', $employee->id)}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <a href="{{url('employees', $employee->id )}}" class="btn btn-info btn-sm">detalles</a>
                                    <a href="{{url('employees/edit',$employee->id)}}" class="btn btn-warning btn-sm">editar</a>
                                    <button type="submit" class="btn btn-danger btn-sm">eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </row>
    </div>
</body>

</html>