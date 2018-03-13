<?php $__env->startSection('content'); ?>

<?php if(count($people)): ?>
<h3>best dudes:</h3>
<ul>
	<?php $__currentLoopData = $people; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li><?php echo e($person); ?></li>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php endif; ?>

<p> - </p>
<p>PagesController/about2-method</p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
<em>&copy; late late late 2k18</em>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>