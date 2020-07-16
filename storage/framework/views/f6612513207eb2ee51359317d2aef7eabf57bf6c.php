<?php $__env->startSection('title','classrooms'); ?>

<?php $__env->startSection('container'); ?>
	<div class="container">
        <div class="row">
            <div class="col-md-8">
                    <div class="row">
                    <?php $__currentLoopData = $classroom; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4" style="margin-bottom:10px;">
                        <div class="w3-card" style="padding: 10px;">
                            <h2><?php echo e($cr->classroom); ?></h2>
                             <p>Rp.<?php echo e($cr->price); ?> / malam</p>
                             <a href="/classrooms/<?php echo e($cr->id); ?>">
                             <input type="button" class="btn btn-info" value="detail">
                             </a>
                             </p>
                        </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
               
            </div>
            <div class="col-md-4">
                <div class="w3-card" style="padding:20px;">
                    <form method="post" action="/classrooms/store"> 
                    <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label>Nama Classrooms</label>
                            <input type="text" class="form-control" name="name" >
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="number" class="form-control" name="harga" >
                        </div>
                            <input type="submit" name="submit" class="btn btn-primary" value="tambah">
                    </form>
                </div>
            </div>
        </div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hotel_saya\resources\views/classrooms/index.blade.php ENDPATH**/ ?>