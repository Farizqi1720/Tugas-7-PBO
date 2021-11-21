

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12 margin-tb">
            <h2>Tampilan Data Mahasiswa <?php echo e($mahasiswa->nama); ?></h2>
			<div class="pull-right">
            <a class="btn btn-primary" href="<?php echo e(route('mahasiswa.index')); ?>">Kembali</a>
			</div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>NIM : </strong>
            <?php echo e($mahasiswa->nim); ?>

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama Mahasiswa : </strong>
            <?php echo e($mahasiswa->nama); ?>

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jenis Kelamin : </strong>
            <?php echo e($mahasiswa->jk); ?>

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Alamat : </strong>
            <?php echo e($mahasiswa->alamat); ?>

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Kota : </strong>
            <?php echo e($mahasiswa->kota); ?>

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email : </strong>
            <?php echo e($mahasiswa->email); ?>

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Gambar : </strong>
            <img src="/image/<?php echo e($mahasiswa->gambar); ?>" width="500px">
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('mahasiswa.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\XAMPP\htdocs\enyar\resources\views/mahasiswa/show.blade.php ENDPATH**/ ?>