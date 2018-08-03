

<ul>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($user->name); ?></li>
        <li><?php echo e($user->email); ?></li>
        <li><a href="<?php echo e(route('profil-user', ['$id' => $user->id])); ?>">voir le profil ID</a></li>
        <li><a href="<?php echo e(route('profil-email', ['$email' => $user->email])); ?>">voir le profil EMAIL</a></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>

