       

<?php $__env->startSection('content'); ?>

    <h2>liste des articles</h2>

<div class="container d-flex flex-wrap justify-content-around">
    <?php if($posts->count() > 0): ?>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   

    <div class="card m-3 d-flex flex-column " style="width: 18rem;">
        <img src="https://loremflickr.com/250/150" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo e($post->title); ?></h5>
          <p class="card-text">Un peu de texte pour décrire le projet</p>
          <a href="<?php echo e(route('posts.show', [$post->id])); ?>" class="btn btn-outline-secondary">En savoir plus</a>
        </div>
      </div>
    



    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
<span>Aucun post disponible</span>
       <?php endif; ?>

</div>
    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lucas\OneDrive\ACS\PROJETS\laravelprojet\resources\views/articles.blade.php ENDPATH**/ ?>