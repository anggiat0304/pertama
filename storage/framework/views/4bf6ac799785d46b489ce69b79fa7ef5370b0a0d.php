<?php $__env->startSection('title','classrooms'); ?>
<?php $__env->startSection('container'); ?>
<div class="container">
    <div class="row">    
        <div class="col-md-12">
            <div class="row">
            <div class="col-md-6">
            </div>
            </div>
        </div>
        <div class="col-md-6 w3-card" style="padding: 20px;">
            <table class="table table-striped"> 
                <tr>
                    <td>Kelas</td>
                    <td><?php echo e($classroom->classroom); ?></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><?php echo e($classroom->price); ?></td>    
                </tr>
            </table>            
            <form action="<?php echo e(url('upload')); ?>" method="POST" enctype="multipart/form-data" style="padding: 10px;">
                <?php echo e(csrf_field()); ?>

                <input type="file" name="image">
                Id:
                <input type="text" name="id_classroom" class="col-md-2" value="<?php echo e($classroom->id); ?>" readonly>
                <button type="submit" class="btn btn-success" style="margin-top:10px;">Upload File</button>
            </form>
            <a href="/classprops/<?php echo e($classroom->id); ?>">
                             <input type="button" class="btn btn-info" value="Lihat Property">
            </a>        
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hotel_saya\resources\views/classrooms/detail.blade.php ENDPATH**/ ?>