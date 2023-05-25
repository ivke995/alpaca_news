<?php $__env->startSection('main_content'); ?>

<section class="vh-100">
    <div class="container h-100">
        <div class="row d-flex reg justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11 regTop">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                <form action="<?php echo e(route('register')); ?>" method="POST" class="mx-1 mx-md-4">
                                    <?php echo csrf_field(); ?>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input name="name" type="text" id="form3Example1c" class="form-control" />
                                            <label class="form-label" for="form3Example1c">Your Name</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input name="phone" type="number" id="form3Example3c" class="form-control" />
                                            <label class="form-label" for="form3Example3c">Your Phone</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input name="mobile_phone" type="number" id="form3Example3c" class="form-control" />
                                            <label class="form-label" for="form3Example3c">Your Mobile Phone</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input name="city" type="text" id="form3Example3c" class="form-control" />
                                            <label class="form-label" for="form3Example3c">Your City</label>
                                        </div>
                                    </div>

                                    <div id="dropdown">
                                        <label for="is_female">Your Gender</label><br>
                                        <select class="form-select" name="is_female"  aria-label="Default select example">
                                            <option value="">Select your gender</option>
                                                <option value="0">Male</option>
                                                <option value="1">Female</option>
                                        </select>
                                    </div>

                                    <div id="dropdown">
                                        <label for="country">Your Country</label><br>
                                        <select class="form-select" name="country"  aria-label="Default select example">
                                            <option value="">Select Country</option>
                                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                               <h1><?php echo e($country); ?></h1>
                                                <option value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?> / <?php echo e($country->code); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input name="email" type="email" id="form3Example3c" class="form-control" />
                                            <label class="form-label" for="form3Example3c">Your Email</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input name="password" type="password" id="form3Example4c" class="form-control" />
                                            <label class="form-label" for="form3Example4c">Password</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input name="password_confirmation" type="password" id="form3Example4cd" class="form-control" />
                                            <label class="form-label" for="form3Example4cd">Repeat your password</label>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                    </div>
                                    <div class="text-center">
                                        <p>Have an account? <button type="button" class="btn btn-outline-success"><a href="<?php echo e(route('login')); ?>" style="text-decoration: none; color: white">Login</a></button></p>
                                    </div>

                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                     class="img-fluid borderRadius" alt="Sample image">
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Infomedia\Desktop\pero\alpaka-news\resources\views/register.blade.php ENDPATH**/ ?>