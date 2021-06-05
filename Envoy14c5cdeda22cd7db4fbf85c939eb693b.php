<?php $task = isset($task) ? $task : null; ?>
<?php $changes = isset($changes) ? $changes : null; ?>
<?php $__container->servers(['localhost' => '127.0.0.1']); ?>

<?php $__container->startMacro('updater'); ?>
    update-code
<?php $__container->endMacro(); ?>

<?php $__container->startTask('update-code'); ?>
    git pull
<?php $__container->endTask(); ?>


<?php $__container->startMacro('deploy'); ?>
    add
    commit
    push
<?php $__container->endMacro(); ?>

<?php $__container->startTask('add'); ?>
    git add *
<?php $__container->endTask(); ?>

<?php $__container->startTask('commit'); ?>
    git commit -m " <?php echo $changes; ?> "
<?php $__container->endTask(); ?>

<?php $__container->startTask('push'); ?>
    git push
<?php $__container->endTask(); ?>

<?php $_vars = get_defined_vars(); $__container->after(function($task) use ($_vars) { extract($_vars, EXTR_SKIP)  ; 
    if ($task === 'push') {
        echo "All Uploaded"
    }
}); ?>