<?php $__env->startSection('content'); ?>


    <div class="list-group">
        <div class="col-md-6">
                <?php $__currentLoopData = App\Models\Article::where('source_id', $source->id)->orderBy('created_at', 'desc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make('article', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Infomedia\Desktop\pero\alpaka-news\resources\views/source.blade.php ENDPATH**/ ?>