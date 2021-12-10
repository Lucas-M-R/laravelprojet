<?php $__env->startSection('content'); ?>
<div class="container d-flex flex-column">
<img src="https://loremflickr.com/450/350" alt="">
<h3><?php echo e($post->title); ?></h3>  <br/>  
<p><?php echo e($post->content); ?></p>

<?php $__empty_1 = true; $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<div class="border-red-100 border-2">
   <span> le <?php echo e($comment->created_at->format('d/m/Y')); ?> à <?php echo e($comment->created_at->format('H:m:s')); ?> </span>
    <br/><hr/>
    <?php echo e($comment->content); ?></div><br/>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 

<div>aucun commentaire pour ce post</div>


<?php endif; ?>






<a href="/posts/edit/<?php echo e($post->id); ?> ">Editer</a>
<a href="/posts/delete/<?php echo e($post->id); ?>">Supprimer</a>
</div>
<?php $__env->stopSection(); ?>

   
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lucas\OneDrive\ACS\PROJETS\laravelprojet\resources\views/article.blade.php ENDPATH**/ ?>