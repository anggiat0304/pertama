<?php $__env->startSection('title','tambah'); ?>

<?php $__env->startSection('container'); ?>
	<div class="container">
    <a href="/rooms"><input type="button" class="btn btn-danger" value="kembali"></a>
    <form>
    <?php echo csrf_field(); ?>
  <div class="form-group">
    <label>No Room</label>
    <input type="number" class="form-control col-md-1" name="noroom" >
  </div>
  <input type="submit" name="submit" class="btn btn-primary" value="tambah">
</form>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hotel_saya\resources\views/rooms/create.blade.php ENDPATH**/ ?>