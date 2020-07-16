<?php $__env->startSection('title','Tambah properti'); ?>

<?php $__env->startSection('container'); ?>
	<div class="container">
        <h2>Tambah jenis properti</h2>
        <div class="w3-card" style="padding:20px;">
<form method="post" action="/properties" style="padding:10px;"> 
    <?php echo csrf_field(); ?>
<div class="form-group">
    <label>Nama item properti</label>
    <input type="text"  name="name"  class="form-control col-md-4  ">
    
    <input type="submit" class="btn btn-primary" value="tambah" style="margin-top:10px;">
</div>
</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hotel_saya\resources\views/properties/create.blade.php ENDPATH**/ ?>