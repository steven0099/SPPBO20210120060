
<?php $__env->startSection('content'); ?>

<div class="card mb-4">
<div class="card-header"><i class="fas fa-table mr-1"></i>Data Barang</div>
<div class="card-body">
<div class="table-responsive">
        <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
<a class="btn btn-success" href="<?php echo e(route('barang.create')); ?>">Tambah Data Barang</a><p></p>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
    <tr align="center">
        <th>No</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Tanggal Masuk</th>
            <th width="14%">Action</th>
    </tr>
</thead>

<tfoot>
    <tr>
        <th>No</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Tanggal Masuk</th>
            <th>Action</th>
    </tr>
</tfoot>
        <tbody>
            <?php $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($barang->namabarang); ?></td>
            <td><?php echo e($barang->jumlah); ?></td>
            <td><?php echo e($barang->tglmasuk); ?></td>
            <td>
            <form action="<?php echo e(route('barang.destroy',$barang->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
            <a class="btn btn-warning" href="<?php echo e(route('barang.edit',$barang->id)); ?>">Ubah</a>
            <button type="submit" class="btn btn-danger" onclick="javascript: return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
            </form>
            </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
</table>
</div>
</div>
</div>
      
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\BarangPTABC\resources\views/barang/index.blade.php ENDPATH**/ ?>