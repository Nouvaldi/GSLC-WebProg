<?php $__env->startSection('title', 'Champions - League of Legends'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container" style="padding: 100px 0">
        <div class="row row-cols-5">

            <?php $__currentLoopData = $champions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $champion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col gy-4 gx-4">
                    <a href="/champions/<?php echo e($champion->name); ?>" class="text-decoration-none">
                        <div class="card shadow" style="border: 0;">
                            <img src=<?php echo e($champion->image_url); ?> class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title text-dark text-uppercase"><?php echo e($champion->name); ?></h5>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Projects\gslc\resources\views/champions.blade.php ENDPATH**/ ?>