

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Liste des étudiants</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Téléphone</th>
                    <th>Email</th>
                    <th>Date de naissance</th>
                    <th>Ville</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $etudiants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $etudiant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($etudiants->id); ?></td>
                        <td><?php echo e($etudiant->nom); ?></td>
                        <td><?php echo e($etudiant->adresse); ?></td>
                        <td><?php echo e($etudiant->phone); ?></td>
                        <td><?php echo e($etudiant->email); ?></td>
                        <td><?php echo e($etudiant->date_de_naissance); ?></td>
                        <td><?php echo e($etudiant->ville->nom); ?></td>
                        <td>
                            <a href="<?php echo e(route('etudiants.edit', $etudiant->id)); ?>" class="btn btn-primary">Modifier</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dell\Desktop\maisonneuve-e2195862\resources\views/etudiants/index.blade.php ENDPATH**/ ?>