<?php $__env->startSection("content"); ?>
<?php if(session()->has("message")): ?>
<div class="alert alert-success mt-2">
    <button class="btn-close float-end" data-bs-dismiss="alert"></button>
    <p><?php echo e(session()->get("message")); ?></p>
</div>    
<?php endif; ?>
<div class="row m-0 justify-content-center">
    <div class="card col-10 col-md-8">
        <div class="card-body text-center">
            <h3>Students Personal Details</h3>           
            <table class="table-responsive table m-4">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>NAME</td>
                        <td>PHONE</td>
                        <td>YEAR</td>
                        <td>DEPARTMENT</td>
                        <td>ACTION</td>
                    </tr>
                </thead>
                <tbody>
                 <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$Student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($key+1); ?></td>
                        <td><?php echo e($Student->name); ?></td>
                        <td><?php echo e($Student->phone); ?></td>
                        <td><?php echo e($Student->year); ?></td>
                        <td><?php echo e($Student->dept); ?></td>
                        <td class="d-flex">
                            <div>
                                <a href="<?php echo e(route("students.show",$Student->id)); ?>" class="btn-success btn m-2">Show</a>
                                <a href="<?php echo e(route("students.edit",$Student->id)); ?>" class="btn btn-warning m-2">Edit</a>
                            </div>  
                            <form action="<?php echo e(route("students.delete",$Student->id)); ?>" method="POST">
                                   <?php echo method_field("delete"); ?>
                                   <?php echo csrf_field(); ?>
                                   <button class="btn btn-danger m-2">Delete</button>
                             </form> 
                         </td>
                    </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

            <a href="<?php echo e(route("students.create")); ?>" class="btn btn-primary m-2 rounded-pill">Add Student Details</a>
            <div class="float-end">
                <?php echo e($students->links()); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vinayka/college.app/resources/views/index.blade.php ENDPATH**/ ?>