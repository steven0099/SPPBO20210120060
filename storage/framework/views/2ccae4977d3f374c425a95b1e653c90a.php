
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <h1 class="mt-4">Data Barang</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Barang</li>
    </ol>
                        
<div class="card mb-4">
    <div class="card-header"><i class="fas fa-edit mr-1"></i>Update Data Barang</div>
    <div class="card-body">
   
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
   
<form action="<?php echo e(route('barang.update', $barang->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
  
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Nama Barang:</label>
                <input type="text" name="namabarang" class="form-control" placeholder="Nama Produk">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Jumlah Barang:</strong>
                <input type="text" class="form-control" name="jumlah" placeholder="Harga Produk"></input>
            </div>
        </div>
        <div class="form-group">
                <strong>Tanggal Masuk:</strong>
                <input type="date" class="form-control" name="tglmasuk"></input>
            </div>
        </div>
        
        <div class="col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-success">Submit</button> 
             <a class="btn btn-primary" href="<?php echo e(route('barang.index')); ?>"> Back</a>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BarangPTABC\resources\views/barang/edit.blade.php ENDPATH**/ ?>