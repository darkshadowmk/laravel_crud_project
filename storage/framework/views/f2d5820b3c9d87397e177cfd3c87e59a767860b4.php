<?php $__env->startSection('content'); ?>
  <div class="row justify-content-center">
    <div class="card col-8 col-md-5">
      <div class="card-body">
          <h4 class="text-center my-3">Student Details</h4>
          <p>Name : <?php echo e($student->name); ?></p>
          <p>Gender : <?php echo e($student->gender); ?></p>
          <p>Email : <?php echo e($student->email); ?></p>
          <p>Phone : <?php echo e($student->phone); ?></p> 
          <p>Year : <?php echo e($student->year); ?></p>
          <p>Department : <?php echo e($student->dept); ?></p>
          <p>Certificate: <?php echo e($student->certificate); ?></p>
          <p>Address : <?php echo e($student->address); ?></p>
          <a href="<?php echo e(route("students.view")); ?>" class="btn btn-primary">Back</a>
      </div>
     </div> 
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vinayka/college.app/resources/views/show.blade.php ENDPATH**/ ?>