<?php $__env->startSection('main_content'); ?>

    <form action="<?php echo e(route('login')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <!-- Email input -->
        <div class="form-outline mb-4">
            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign in</p>
            <input name="email" type="email" id="email" class="form-control"/>
            <label class="form-label" for="email">Email address</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input name="password" type="password" id="password" class="form-control"/>
            <label class="form-label" for="password">Password</label>
        </div>

        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
            <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check text-center">

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-lg btn-block mb-4">Sign in</button>

                    <!-- Register buttons -->
                    <div class="text-center">
                        <p>Not a member <button type="button" class="btn btn-outline-success"><a href="<?php echo e(route('register')); ?>" style="text-decoration: none;  color: white">Register</a></button>
                            </p>
                    </div>

                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                             class="img-fluid borderRadius" alt="Sample image">
                    </div>
                </div>
            </div>
        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Infomedia\Desktop\pero\alpaka-news\resources\views/login.blade.php ENDPATH**/ ?>