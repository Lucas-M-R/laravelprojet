<?php $__env->startSection('content'); ?>
<h1>Nouveau Post</h1>

<?php if($errors->any()): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class=""><?php echo e($error); ?></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
<?php endif; ?>

<form action="<?php echo e(route('posts.store')); ?>" method="post">
    <?php echo csrf_field(); ?>
        <label for="title">intitulé</label>
        <input class="" type="text" name="title">

   
        <label for="content">Contenu</label>
        <textarea class="" cols="30" rows="10" name="content" ></textarea>

    <button class="btn btn-outline-info" type="submit">Créer</button>

</form>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lucas\OneDrive\ACS\PROJETS\laravelprojet\resources\views/form.blade.php ENDPATH**/ ?>