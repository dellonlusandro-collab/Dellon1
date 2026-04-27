<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <a href=<?php echo e(route('mahasiswa.add')); ?>>
        <input type="button" value="Create">
    </a>
    <table class="table table-striped">
        <thead>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>NIM</th>
            <th>NISN</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Tanggal Dibuat</th>
            <th>Aksi</th>
        </thead>
        <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($m->id); ?></td>
            <td><?php echo e($m->Fullname); ?></td>
            <td><?php echo e($m->NIM); ?></td>
            <td><?php echo e($m->NIDN); ?></td>
            <td><?php echo e($m->Tempat_Lahir); ?></td>
            <td><?php echo e($m->Tanggal_Lahir); ?></td>
            <td><?php echo e($m->Alamat); ?></td>
            <td><?php echo e($m->created_at); ?></td>
            <td>
                <a href=<?php echo e(route('mahasiswa.edit', $m->id)); ?>>
                    <input type="button" value="Edit">
                </a>
                <form action="<?php echo e(route('mahasiswa.delete', $m->id)); ?>"  method="post">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo e($m->id); ?>">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH D:\XAMPP\htdocs\Latihan\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>