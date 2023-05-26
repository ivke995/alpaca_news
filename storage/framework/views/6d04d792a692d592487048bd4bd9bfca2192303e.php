<div class="mobileNav nav-menu">
    <i>
        <div class="categoriesBtn">
            <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
            <label for="openSidebarMenu" class="sidebarIconToggle">
                <div class="spinner diagonal part-1"></div>
                <div class="spinner horizontal"></div>
                <div class="spinner diagonal part-2"></div>
            </label>
        </div>
    </i>

    <a href="<?php echo e(route('index')); ?>" class="blek"><i class="bi bi-house"></i></a>
    <form class="searchPos" id="panel" role="search" method="get" action="<?php echo e(route('search')); ?>">
        <input class="form-control me-2 searchPolje" id="search"name="query" type="search" placeholder="Pretraga" aria-label="Search">
        <button class="btn btn-outline-success btnSearch" type="submit"><i class="bi bi-search"></i></button>
    </form>
    <i class="bi bi-search searchBtn"></i>
    <?php if(Auth::guest()): ?>
        <a href="<?php echo e(route('login')); ?>" class="blek"><i class="bi bi-person"></i></a>
    <?php endif; ?>
    <?php if(Auth::check()): ?>

                <form action="<?php echo e(route('profile')); ?>" method="get">
        <?php echo csrf_field(); ?>
            
            <button type="submit" class="logedIn"><i class="bi bi-person-circle"></i></button>
        </form>
    <?php endif; ?>

</div>

<?php /**PATH C:\Users\Ivan\Desktop\alpakica_sa_gita\alpaca_news\resources\views/mobileNav.blade.php ENDPATH**/ ?>