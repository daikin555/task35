<?php $__env->startSection('content'); ?>
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">ダッシュボード</div>

<div class="panel-body">
<?php if(session('status')): ?>
<div class="alert alert-success">
<?php echo e(session('status')); ?>

<div>
<?php endif; ?>
<a href="<?php echo e(route('item.index')); ?>">商品一覧はこちら</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>