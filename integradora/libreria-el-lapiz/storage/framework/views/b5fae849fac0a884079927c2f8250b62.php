
<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-7">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0">
                    Registrar nuevo libro
                </h2>
            </div>
            <div class="card-body">
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <strong>
                            Hay errores en el formulario:
                        </strong>
                        <ul class="mb-0 mt-2">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <?php echo e($error); ?>

                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <form
                    action="/libros/nuevo"
                    method="POST"
                >
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label
                            for="titulo"
                            class="form-label"
                        >
                            Título del libro
                        </label>
                        <input
                            type="text"
                            id="titulo"
                            name="titulo"
                            class="form-control"
                            value="<?php echo e(old('titulo')); ?>"
                        >
                    </div>
                    <div class="mb-3">
                        <label
                            for="precio"
                            class="form-label"
                        >
                            Precio en Bs
                        </label>
                        <input
                            type="number"
                            id="precio"
                            name="precio"
                            class="form-control"
                            value="<?php echo e(old('precio')); ?>"
                        >
                    </div>
                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Registrar libro
                    </button>
                    <a
                        href="/libros"
                        class="btn btn-secondary"
                    >
                        Volver al catálogo
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\backup_laragon\laragon\www\libreria-el-lapiz\resources\views/libros/nuevo.blade.php ENDPATH**/ ?>