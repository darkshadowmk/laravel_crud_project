<?php $__env->startSection('content'); ?>
  <div class="row justify-content-center">
    <div class="card col-8 col-md-5">
      <div class="card-body">
          <form action="<?php echo e(route("students.store")); ?>" method="post" class="was-validated" novalidate>
              <?php echo csrf_field(); ?>
              <h3 class="text-center">Student Details</h3>
              <label for="name">Name:</label><br>
              <input type="text" name="name" placeholder='enter student name' class="form-control is-invalid my-1 mb-2" value="<?php echo e(old('name')); ?>" required >
              <?php if($errors->has("name")): ?>
                <p class="invalid-feedback">
                    <?php echo e($errors->first('name')); ?>

                </p>   
              <?php endif; ?>
              <label for="gender" class="my-2">Gender:</label><br>
              <input type="radio" name="gender" value="male" class="form-check-input  mx-2" <?php echo e(old('gender') == "male"?"checked":""); ?> required>Male
              <input type="radio" name="gender" value="female" class="form-check-input mx-2" <?php echo e(old('gender') == "female"?"checked":""); ?> required>Female<br>
              <?php if($errors->has("gender")): ?>
                <p class="invalid-feedback">
                    <?php echo e($errors->first("gender")); ?>

                </p>   
              <?php endif; ?>
              <label for="email" class="mt-2 mb-1">Email:</label><br>            
              <input type="email" name="email" placeholder='enter email address' class="form-control is-invalid" value="<?php echo e(old('email')); ?>" required><br>
              <?php if($errors->has("email")): ?>
                <p class="invalid-feedback">
                    <?php echo e($errors->first("email")); ?>

                </p>   
              <?php endif; ?>
              <label for="phone" class="mb-1">Phone:</label><br>
              <input type="text" name="phone" placeholder='enter phone number' class="form-control is-invalid" value="<?php echo e(old('phone')); ?>" required><br>
              <?php if($errors->has("phone")): ?>
                <p class="invalid-feedback">
                    <?php echo e($errors->first("phone")); ?>

                </p>   
              <?php endif; ?>
              <label for="year">Year:</label><br>
              <select name="year" id="" class="form-control is-invalid mt-1" required>
                  <option value="1styear" name="1styear" <?php echo e(old('year') == "1styear"?"selected":""); ?>>1st year</option>
                  <option value="2ndyear" name="2ndyear" <?php echo e(old('year') == "2ndyear"?"selected":""); ?> >2nd year</option>
                  <option value="3rdyear" name="3rdyear" <?php echo e(old('year') == "3rdyear"?"selected":""); ?>>3rd year</option>
              </select>
              <?php if($errors->has("year")): ?>
                <p class="invalid-feedback">
                    <?php echo e($errors->first("year")); ?>

                </p>   
              <?php endif; ?><br>
              <label for="dept">Department:</label><br>
              <select name="dept" id="" class="form-control mt-1">
                  <option value="BA.Tamil" name='BA.Tamil' <?php echo e(old('dept') == "BA.Tamil"?"selected":""); ?>>BA.Tamil</option>
                  <option value="BA.English" name='BA.English' <?php echo e(old('dept') == "BA.English"?"selected":""); ?> >BA.English</option>
                  <option value="Bsc.Maths" name="Bsc.Maths" <?php echo e(old('dept') == "Bsc.Maths"?"selected":""); ?> >Bsc.Maths</option>
                  <option value="Bsc.Physics" name="Bsc.Physics" <?php echo e(old('dept') == "Bsc.Physics"?"selected":""); ?> >Bsc.Physics</option>
                  <option value="Bsc.Chemistry" name="Bsc.Chemistry" <?php echo e(old('dept') == "Bsc.Chemistry"?"selected":""); ?> >Bsc.Chemistry</option>
                  <option value="Bsc.IT" name="Bsc.IT" <?php echo e(old('dept') == "Bsc.IT"?"selected":""); ?>>Bsc.IT</option>
              </select>
              <?php if($errors->has("dept")): ?>
                <p class="invalid-feedback">
                    <?php echo e($errors->first("dept")); ?>

                </p>   
              <?php endif; ?><br>
              <label for="certificate">Certificate:</label><br>
               <input type="checkbox" class="form-check-input m-1 " name="certificate" value="HSC"  <?php echo e(old('certificate') == "HSC"?"checked":""); ?> required>HSC<br>
               
               <?php if($errors->has("certificate")): ?>
                <p class="invalid-feedback">
                    <?php echo e($errors->first("certificate")); ?>

                </p>   
              <?php endif; ?>
              <label for="address" class="mt-2 mb-1">Address:</label><br>
              <input type="text" name="address" class="form-control" value="<?php echo e(old('address')); ?>" required><br>
              <?php if($errors->has("address")): ?>
                <p class="invalid-feedback">
                    <?php echo e($errors->first("address")); ?>

                </p>   
              <?php endif; ?>
              <div class="text-center">
                <button class="btn btn-primary rounded-pill me-4">Add Details</button>
                <a href="<?php echo e(route("students.view")); ?>" class="btn btn-primary rounded-pill">Back</a>
              </div>     
        </form>
      </div>
     </div> 
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vinayka/college.app/resources/views/create.blade.php ENDPATH**/ ?>