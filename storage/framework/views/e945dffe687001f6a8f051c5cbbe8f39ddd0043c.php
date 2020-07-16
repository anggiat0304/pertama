<?php $__env->startSection('title','Tambah properti'); ?>

<?php $__env->startSection('container'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10 w3-card">
            <h2>Masukkan Property kedalam classroom</h2>
                <form action="<?php echo e(url('classprops')); ?>" method="post" style="margin-bottom: 5px;">
                    <?php echo csrf_field(); ?>;
                    <div class="form-group">
                    Id classroom
                        <input type="text" value="<?php echo e($id); ?>" name="classroom" readonly >
                        <table>
                            <tr>
                                <td>Property</td>
                                <td>Id Property</td>
                                <td>Jumlah</td>
                            </tr>
                            <?php $__currentLoopData = $classprop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><input type="text" value="<?php echo e($prop->prop); ?>" name="prop" readonly></td>
                                <td><input type="text" value="<?php echo e($prop->id); ?>" name="id" readonly></td>
                                <td><input type="number" name="jlh"></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                    <input type="submit" class="btn btn-primary" name="save" value="simpan">
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hotel_saya\resources\views/classprops/index.blade.php ENDPATH**/ ?>