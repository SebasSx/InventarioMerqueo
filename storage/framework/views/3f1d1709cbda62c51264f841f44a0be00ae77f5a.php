<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Productos</title>
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
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


                            <table class="table responsive">
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Referencia</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Costo</th>
                                    <th scope="col">Unidades</th>
                                    <th scope="col">Estado</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($product->id); ?></td>
                                    <td><?php echo e($product->nombre); ?></td>
                                    <td><?php echo e($product->referencia); ?></td>
                                    <td><?php echo e($product->precio); ?></td>
                                    <td><?php echo e($product->costo); ?></td>
                                    <td><?php echo e($product->unidades); ?></td>

                                    <?php if($product->estado == 1): ?>
                                        <td>Activo</td>
                                    <?php else: ?>
                                        <td>Inactivo</td>
                                    <?php endif; ?>

                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <a href="<?php echo e(route('add')); ?>"><span class="btn btn-success">Agregar</span> </a>




                        </div>

                        <div class="panel-footer">

                            <form method="POST" action="<?php echo e(route('charge')); ?>" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>



                                <div class="form-group row">
                                    <div class="col-lg-9">
                                        <input class="form-control" type="file" name="file" id="file" required>
                                    </div>

                                    <div class="col-lg-3">
                                        <input type="submit" class="btn btn-primary" value="Cargar CVS">
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





