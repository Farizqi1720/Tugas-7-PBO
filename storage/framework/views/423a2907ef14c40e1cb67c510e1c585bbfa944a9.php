

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <h2>Tambah Data Mahasiswa</h2>
        <div class="pull-right">
			<a class="btn btn-primary" href="<?php echo e(route('mahasiswa.index')); ?>">Kembali</a>
		</div>
	</div>
 </div>

<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <strong>Kesalahan!</strong> Data yang anda inputkan ada yang salah. <br><br>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>

<?php endif; ?>

<form action="<?php echo e(route('mahasiswa.store')); ?>" method="POST" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>NIM : </strong>
            <input type="text" name="nim" class="form-control" placeholder="NIM Anda">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama Mahasiswa : </strong>
            <input type="text" name="nama" class="form-control" placeholder="Nama Mahasiswa">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jenis Kelamin : </strong>
            <select id="jk" class="form-control form-select" name="jk">
                <option value="">Pilih</option>
                <option value="L">L</option>
                <option value="P">P</option>
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Alamat : </strong>
            <input type="text" name="alamat" class="form-control" placeholder="Alamat anda">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
	<div class="form-group">
            <strong>Kota : </strong>
            <input type="text" name="kota" class="form-control" placeholder="Kota anda">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email : </strong>
            <input type="text" name="email" class="form-control" placeholder="Email anda">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Gambar : </strong>
            <input type="file" name="gambar" class="form-control" placeholder="Gambar Anda">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('mahasiswa.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\XAMPP\htdocs\enyar\resources\views/mahasiswa/create.blade.php ENDPATH**/ ?>