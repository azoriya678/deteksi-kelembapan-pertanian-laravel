<body>
    <div class="sidebar">
        <img src="<?php echo e(asset('images/profile.png')); ?>" alt="Profile" class="profile-img">
        <h2>Susilo Adi Wibowo</h2>
        <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <ul class="menu">
            <li><a href="/dashboard">Dashboard</a></li>
            <li><a href="/history">History</a></li>
        </ul>
    </div>

    <div class="container">
        <h1>History Monitoring Kelembapan Tanah</h1>
        <div class="history-container">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal / Bulan</th>
                        <th>Waktu</th>
                        <th>Kelembapan (%)</th>
                        <th>Suhu (°C)</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e(date('d-m-Y', strtotime($history->tanggal))); ?></td>
                        <td><?php echo e(\Carbon\Carbon::parse($history->jam)->format('H:i')); ?> WITA</td>
                        <td><?php echo e($history->kelembapan); ?>%</td>
                        <td><?php echo e($history->suhu ? $history->suhu . '°C' : '-'); ?></td>
                        <td><?php echo e($history->status); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

<?php /**PATH C:\laragon\htdocs\laravel11\resources\views/history.blade.php ENDPATH**/ ?>