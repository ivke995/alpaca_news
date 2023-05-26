
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">


    <img src="<?php echo e($article->image_url); ?>" class="img-fluid"/>



    <style>

        div#social-links ul li {
            display: inline-block;
        }
        div#social-links ul li a {
            border: 1px solid #ccc;
            margin: 1px;
            font-size: 25px;
            color: #222;
            background-color: #ccc;
        }
    </style>
    <div class="newsContent">
        <h2><?php echo e($article->title); ?></h2>
        <div class="newsInfo">
            <div><?php echo e($article->source->name); ?></div>
            <div class="visit"><p><?php echo e($article->visits); ?></p><i class="bi bi-eye"></i>
                <div class="social_icons">
                    <div class="social_icon">
                        <a id="shareWithFb"><i class="fab fa-facebook icons"></i></a>
                        <a id="shareWithTwitter"><i class="fab fa-twitter icons"></i></a>
                        <a id="shareWithWhatsapp"><i class="fab fa-whatsapp icons"></i></a>
                        <a id="shareWithMail"><i class="fas fa-envelope icons"></i></a>
                        <a id="shareWithViber"><i class="fab fa-viber"></i></a>

                    </div>
                </div>
            </div>
        </div>
        <div><b><?php echo e($article->firstParagraph); ?></b></div>
        <div class="newsText"><?php echo e($article->restOfText); ?></div>
        <hr/>
    </div>

    <div class="scrolling-wrapper1">
        <?php if(str_contains(url()->previous(), 'source')): ?>
            <?php $__currentLoopData = $source_small_articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $smallArticle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('smallArticle', ["article"=>$smallArticle] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php elseif(App\Models\Article::where('slug', App\Models\Article::checkSlugExists())->first()): ?>
            <?php $__currentLoopData = $source_small_articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $smallArticleValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('smallArticle', ["article"=>$smallArticleValue] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php else: ?>
            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $smallArticle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('smallArticle', ["article"=>$smallArticle] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        let copiedLink = window.location.href;
        let user = 'ivanpraksainfo@gmail.com';
        $(document).ready(function() {
            $('#shareWithTwitter').click(function () {
                window.open("https://twitter.com/intent/tweet?url=" + copiedLink);
            });

            $('#shareWithFb').click(function () {
                window.open("https://www.facebook.com/sharer/sharer.php?u=" + copiedLink, 'facebook-share-dialog', "width=626, height=436");
            });
            $('#shareWithMail').click(function () {
                let formattedBody = (copiedLink);
                let mailToLink = "mailto:?subject= " + user + " wants you to donate to this noble cause&body=" + encodeURIComponent(formattedBody);
                window.location.href = mailToLink;
            });
            $('#shareWithWhatsapp').click(function () {
                let win = window.open('https://api.whatsapp.com/send?text=' + copiedLink, '_blank');
                win.focus();
            });
            $('#shareWithViber').click(function () {
                let win = window.open('viber://forward?text=' + encodeURIComponent(copiedLink));
                win.focus();
            });
            });

    </script>
    <?php $__env->stopPush(); ?>






<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ivan\Desktop\alpakica_sa_gita\alpaca_news\resources\views/show.blade.php ENDPATH**/ ?>