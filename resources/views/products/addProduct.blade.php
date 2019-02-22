<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Productos</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">Productos</div>

                        <div class="panel-body">

                            <form class="form" role="form" autocomplete="off" action="{{route('store')}}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Nombre</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="" name="nombre" id="nombre" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Referencia</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="" name="referencia" id="referencia" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Precio</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="number" value="" name="precio" id="precio" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Costo</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="number" value="" name="costo" id="costo" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Unidades</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="number" value="" name="unidades" id="unidades" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Estado</label>
                                    <div class="col-lg-9">
                                        <select id="estado" name="estado" class="form-control" size="0" required>
                                            <option value="">Seleccione estado</option>
                                                <option value="1">Activo</option>
                                                <option value="0">Inactivo</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-lg-9">
                                        <input type="submit" class="btn btn-primary" value="Agregar">
                                        <a href="{{route('products')}}"><span class="btn btn-danger">Cancelar</span> </a>

                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </nav>


</div>
</body>
</html>





