<?php $__env->startSection('title','Beranda'); ?>

<?php $__env->startSection('container'); ?>
	<div class="container">
		<h2 class="text-center">Selamat Datang</h2>
        <div class="jumbotron">
         <h1>Aplikasi Sistem Informasi Kamar Hotel</h1>
        <p>Aplikasi ini hanya menyediakan informasi mengenai kamar hotel, seperti 
            kelas-kelas kamar, property yang ada pada setiap kamar, harga kamar menurut kelas kamar.
        </p>
    </div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Hotel_saya\resources\views/index.blade.php ENDPATH**/ ?>