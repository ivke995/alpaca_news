

<section style="background-color: #041c32;">
    <div class="container py-5" style="margin-top:0px !important">
        <div class="row">
            <div class="col">
                
            </div>
        </div>


        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <?php if(!$user->is_female): ?>
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                 alt="avatar"
                                 class="rounded-circle img-fluid" style="width: 150px;">
                        <?php else: ?>
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                                 alt="avatar"
                                 class="rounded-circle img-fluid" style="width: 150px;">
                        <?php endif; ?>
                        <h5 class="my-3"><?php echo e($user->name); ?></h5>
                        <p class="text-muted mb-4"><?php echo e($user->city); ?> / <?php echo e($user->country->name); ?></p>
                        <div class="d-flex justify-content-center mb-2">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo e($user->name); ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo e($user->email); ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo e($user->phone); ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Mobile</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo e($user->mobile); ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Gender</p>
                                </div>
                                <?php if(!$user->is_female): ?>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">Male</p>
                                    </div>
                                <?php else: ?>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">Female</p>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo e($user->city); ?>, <?php echo e($user->country->name); ?>

                                        , <?php echo e($user->country->code); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="<?php echo e(route('profile-edit')); ?>" method="get" class="centar">
                    <button type="submit" class="logedIn"><i class="btn btn-primary btn-lg btn-block btnProfil">Edit Profile</i>
                    </button>
                </form>
                <?php if(Auth::check()): ?>
                    <form action="<?php echo e(route('logout')); ?>" method="post" class="centar">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="logedIn"><i class="btn btn-primary btn-lg btn-block btnProfil">Logout</i>
                        </button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Infomedia\Desktop\pero\alpaka-news\resources\views/profile.blade.php ENDPATH**/ ?>