<?php if($paginator->hasPages()): ?>
    <nav aria-label="Photos Search Navigation">                    
        <ul class="pagination justify-content-end mt-2">
            <li>
                <p class="text-sm text-gray-700 leading-5">
                    <?php echo __('Showing'); ?>

                    <span class="font-medium"><?php echo e($paginator->firstItem()); ?></span>
                    <?php echo __('to'); ?>

                    <span class="font-medium"><?php echo e($paginator->lastItem()); ?></span>
                    <?php echo __('of'); ?>

                    <span class="font-medium"><?php echo e($paginator->total()); ?></span>
                    <?php echo __('results'); ?>

                </p>
            </li>
            <?php if($paginator->onFirstPage()): ?>
                <li class="page-item">
                    <span class="page-link" tabindex="-1" aria-label="Previous">
                    <?php echo __('pagination.previous'); ?>

                    </span>
                </li>
            <?php else: ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo e($paginator->previousPageUrl()); ?>" tabindex="-1" aria-label="Previous">
                    <?php echo __('pagination.previous'); ?>

                    </a>
                </li>
            <?php endif; ?>
            
            
            
            
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <?php if(is_string($element)): ?>
                    <span aria-disabled="true">
                        <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5"><?php echo e($element); ?></span>
                    </span>
                <?php endif; ?>

                
                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($page == $paginator->currentPage()): ?>
                            <li class="page-item active">
                                <a class="page-link" href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
                            </li>
                        <?php else: ?>
                            <li class="page-item">
                                <a class="page-link" href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if($paginator->hasMorePages()): ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo e($paginator->nextPageUrl()); ?>" aria-label="Next">
                        <?php echo __('pagination.next'); ?>

                    </a>
                </li>
            <?php else: ?>
                <li class="page-item">
                    <span class="page-link" aria-label="Next">
                        <?php echo __('pagination.next'); ?>

                    </span>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
<?php endif; ?>
<?php /**PATH /Users/kamyar/Documents/Projects/FixIt/repairshopPanel/resources/views/vendor/pagination/tailwind.blade.php ENDPATH**/ ?>