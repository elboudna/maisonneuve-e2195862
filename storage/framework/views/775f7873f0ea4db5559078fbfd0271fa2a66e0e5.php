

<?php $__env->startSection('content'); ?>
<a href="<?php echo e(route('nouvelEtudiant')); ?>" class="btn btn-primary mb-3">Ajouter un étudiant</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Adresse</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Modifier</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $etudiants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $etudiant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($etudiant->nom); ?></td>
                <td><?php echo e($etudiant->adresse); ?></td>
                <td><?php echo e($etudiant->phone); ?></td>
                <td><?php echo e($etudiant->email); ?></td>
                <td><a href="<?php echo e(route('etudiant.show', $etudiant->id)); ?>">Modifier</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dell\Desktop\maisonneuve-e2195862\resources\views/etudiant.blade.php ENDPATH**/ ?>