<div id="category">
   
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php $__currentLoopData = App\Models\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="nav-item">
          <div class="listEl"><a class="nav-link active" aria-current="page" href="<?php echo e(route('category', $category->id)); ?>"><?php echo e($category->name); ?></a></div>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
</div><?php /**PATH C:\Users\Infomedia\Desktop\pero\alpaka-news\resources\views/categories.blade.php ENDPATH**/ ?>