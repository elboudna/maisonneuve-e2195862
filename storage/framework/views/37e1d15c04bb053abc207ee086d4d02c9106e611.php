

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h1 class="mb-4">Information sur l'étudiant</h1>

    <form method="POST" action="<?php echo e(route('etudiant.update', $etudiant->id)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control" value="<?php echo e($etudiant->nom); ?>">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="<?php echo e($etudiant->email); ?>">
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="<?php echo e($etudiant->phone); ?>">
        </div>

        <div class="form-group">
            <label for="adresse">Adresse</label>
            <textarea name="adresse" id="adresse" class="form-control"><?php echo e($etudiant->adresse); ?></textarea>
        </div>

        <div class="form-group">
            <label for="ville_id">Ville</label>
            <select name="ville_id" id="ville_id" class="form-control">
                <?php $__currentLoopData = \App\Models\Ville::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ville): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($ville->id); ?>" <?php echo e($etudiant->ville_id == $ville->id ? 'selected' : ''); ?>><?php echo e($ville->nom); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>


        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dell\Desktop\maisonneuve-e2195862\resources\views/etudiantEdit.blade.php ENDPATH**/ ?>