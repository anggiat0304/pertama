<?php $__env->startSection('title','Beranda'); ?>

<?php $__env->startSection('container'); ?>
	<div class="container">
		<h2 class="text-center">Selamat Datang</h2>
        <ul class="list-group list-group-flush" style="margin-right=120px;">
      <?php $__currentLoopData = $room; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="card" style="width:400px">
  <img class="card-img-top" src="img_avatar1.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title"><?php echo e($room->nama); ?></h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    <a href="rooms/create" style="margin-top:20px;"><button class="btn btn-primary">Tambah</button></a>
</ul>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hotel_saya\resources\views/rooms/index.blade.php ENDPATH**/ ?>