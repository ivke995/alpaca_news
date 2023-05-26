
<div class='smallArticle forHorScroll shadow-lg' >
    <a href="<?php echo e(route('show', $article->slug)); ?>">
    <div class="smallArtTitle"><b><?php echo e($article->title); ?></b></div>
    <div class="smallArtSrc"><b><?php echo e($article->source->name); ?></b></div>
    <img src="<?php echo e($article->image_url); ?>" class="img-fluid widthHor"/></a>
</div>
<?php /**PATH C:\Users\Ivan\Desktop\alpakica_sa_gita\alpaca_news\resources\views/smallArticle.blade.php ENDPATH**/ ?>