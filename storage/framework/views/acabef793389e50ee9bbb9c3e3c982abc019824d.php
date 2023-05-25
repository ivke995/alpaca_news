
<?php $__env->startSection('content'); ?>


<div class="container">
    <div class="row forLastChild">
        <?php $__currentLoopData = $sources; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $source): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12 col-md-6 my-4 margin0">
                <div class="card text-center mt-4 ">
                    <a style="text-decoration: none; color: white" href="<?php echo e(route('source', $source->id)); ?>"><h5 class="card-header"><img src="<?php echo e($source->link_logo); ?>" alt="<?php echo e($source->name); ?>" style="height: 20px" /> <?php echo e($source->name); ?></h5></a>

                    <div class="card-body scrolling-wrapper" >
                        <?php if(isset($category) && $category): ?>
                            <?php $__currentLoopData = $source->articles()->where('category_id', $category->id)->orderBy('created_at', 'desc')->limit(40)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(!($index % 5) && $index): ?>
                                    <?php echo $__env->make('article-advertise', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endif; ?>
                                <?php echo $__env->make('article', ['article' => $article], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <?php $__currentLoopData = $source->articles()->orderBy('created_at', 'desc')->limit(40)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(!($index % 5) && $index): ?>
                                    <?php echo $__env->make('article-advertise', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endif; ?>
                                <?php echo $__env->make('article', ['article' => $article], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Infomedia\Desktop\pero\alpaka-news\resources\views/index.blade.php ENDPATH**/ ?>