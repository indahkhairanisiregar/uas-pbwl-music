
 

<?php $__env->startSection('content'); ?> 
<div class="container">

    <h3>ARTIST
    <a href="<?php echo e(url('/artist/create')); ?>" class="btn btn-primary btn-sm float-right">Tambah Data</a>
    </h3>
    
    <table class="table table-bordered" >
        <tr>
            <th>Artist ID</th>
            <th>Nama Artist</th>
            <th>EDIT</th>
            <th>DELETE</th>

        </tr>
            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($row->artist_id); ?></td>
            <td><?php echo e($row->artist_nama); ?></td>
            <td><a href="<?php echo e(url('artist/' . $row->artist_id . '/edit')); ?>"class="btn btn-primary btn-sm">Edit</a></td>
            
        <td><form action="<?php echo e(url('/artist/' . $row->artist_id)); ?>" method="POST">
            <input name="_method" type="hidden" value="DELETE">
            <?php echo csrf_field(); ?>
            <button class="btn btn-danger btn-sm">Delete</button>
        </form>
        </td>
        </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
 </div> 
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-uaspbwlindah\resources\views/artist/index.blade.php ENDPATH**/ ?>