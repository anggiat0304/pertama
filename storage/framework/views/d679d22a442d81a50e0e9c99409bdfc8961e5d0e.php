<?php $__env->startSection('title','Tambah properti'); ?>

<?php $__env->startSection('container'); ?>
	<div class="container">
       <div class="row">
			<div class="col-md-6 w3-card" style="padding:5px;">
			<h3>Jenis Inventory Hotel</h3>
				<table class="table table-striped">
					<?php $i=1;	?>
					<tr>
						<td>No</td>
						<td>Jenis</td>
					</tr>
					<?php $__currentLoopData = $property; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo ($i++); ?></td>
						<td><?php echo e($property->prop); ?></td>	
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</table>
	   			</div>
	   		<div class="col-md-6"> 
				<form method="post" class="w3-card" action="/properties" style="padding:10px;"> 
    			<?php echo csrf_field(); ?>
				<div class="form-group">
    			<label>Nama item properti</label>
    			<input type="text"  name="name"  class="form-control">
    			<input type="submit" class="btn btn-primary" value="tambah" style="margin-top:10px;">
				</form>
	   			</div>
	   		</div>  
		</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hotel_saya\resources\views/properties/index.blade.php ENDPATH**/ ?>