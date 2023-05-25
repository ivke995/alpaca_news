
<!--Section: News of the day-->


<div class='smallArticle forHorScroll shadow-lg'>
    <a href="<?php echo e(route('show', $article->slug)); ?>">
    <div class="smallArtTitle"><b><?php echo e($article->title); ?></b></div>
    <div class="smallArtSrc"><b><?php echo e($article->source->name); ?></b></div>
    <img src="<?php echo e($article->image_url); ?>" class="img-fluid widthHor"/></a>
</div>


<?php /**PATH C:\Users\Infomedia\Desktop\pero\alpaka-news\resources\views/article.blade.php ENDPATH**/ ?>