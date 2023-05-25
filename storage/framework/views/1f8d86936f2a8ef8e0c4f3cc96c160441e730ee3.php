<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alpaka news</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav">
            <?php if(auth()->guard()->guest()): ?>
            <?php else: ?>
            <?php endif; ?>
        </ul>

    </div>
</div>
<div class="container mt-5" style="margin-top:0px !important">
    <?php echo $__env->yieldContent('main_content'); ?>
    <div>
        <?php if(session()->has('success')): ?>
            <div class="alert alert-success" id="alert">
                <?php echo e(session()->get('success')); ?>


            </div>

        <?php endif; ?>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function ()
    {
        setTimeout(function ()
        {
            $("div.alert").remove();
        }, 3000)
    });
</script>
</body>
</html>
<?php /**PATH C:\Users\Infomedia\Desktop\pero\alpaka-news\resources\views/main.blade.php ENDPATH**/ ?>