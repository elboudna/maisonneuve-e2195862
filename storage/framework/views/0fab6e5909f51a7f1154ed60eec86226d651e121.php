

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h1 class="mb-4">Information sur l'étudiant</h1>
    <div>
        <div>
            <label for="nom">Nom</label>
            <p><?php echo e($etudiant->nom); ?></p>
        </div>

        <div>
            <label for="email">Email</label>
            <p><?php echo e($etudiant->email); ?></p>
        </div>

        <div>
            <label for="phone">Phone</label>
            <p><?php echo e($etudiant->phone); ?></p>
        </div>

        <div>
            <label for="adresse">Adresse</label>
            <p><?php echo e($etudiant->adresse); ?></p>
        </div>

        <div>
            <label for="ville">Ville</label>
            <p><?php echo e($etudiant->ville->nom); ?></p>
        </div>

        <a href="<?php echo e(route('etudiant.edit', $etudiant->id)); ?>">Modifier</a>
    </div>
    <form class="form-delete" method="POST" action="<?php echo e(route('etudiant.destroy', $etudiant->id)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dell\Desktop\maisonneuve-e2195862\resources\views/unEtudiant.blade.php ENDPATH**/ ?>