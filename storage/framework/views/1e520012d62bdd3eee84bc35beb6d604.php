<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data Matkul</title>
</head>
<body>

<h1>Daftar Matkul</h1>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Kode</th>
            <th>Nama</th>
            <th>Jurusan</th>
        </tr>
    </thead>

    <tbody>
        <?php $__currentLoopData = $matkul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($m->kode); ?></td>
            <td><?php echo e($m->nama); ?></td>
            <td><?php echo e($m->jurusan); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

</body>
</html><?php /**PATH C:\laragon\www\kampus-app\resources\views/matkul/index.blade.php ENDPATH**/ ?>