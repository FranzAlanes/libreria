
<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2>Librería El Lápiz</h2>
    </div>
    <div>
        <a href="/libros/nuevo" class="btn btn-primary">
            Registrar nuevo libro
        </a>
    </div>
</div>
<p class="lead">
    Librería El Lápiz es una librería de barrio que ofrece libros
    para estudiantes, lectores y familias.
</p>
<div class="alert alert-info">
    Hay <?php echo e(count($libros)); ?> libros en el catálogo.
</div>
<div class="card">
    <div class="card-header">
        <strong>Catálogo de libros</strong>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped table-hover mb-0">
            <thead class="table-primary">
                <tr>
                    <th>Título</th>
                    <th>Precio en Bs</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $libros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $libro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td>
                            <?php echo e($libro->titulo); ?>

                        </td>
                        <td>
                            <?php echo e($libro->precio); ?> Bs
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="2" class="text-center py-4">
                            No hay libros registrados todavía.
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<div class="mt-4">
    <strong>
        Catálogo atendido por Franz Alanes Fuentes
    </strong>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\backup_laragon\laragon\www\libreria-el-lapiz\resources\views/libros/lista.blade.php ENDPATH**/ ?>