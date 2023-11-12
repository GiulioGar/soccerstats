<?php $__env->startSection('content'); ?>


    <?php if(!empty($teams)): ?>
    <div class="col-lg-6 grid-margin stretch-card">

    <?php $__env->startComponent('components.card', ['card_title'=>'Serie A']); ?>

    <table class="table">
        <thead>
            <tr class="">
            <th><?php echo e($title); ?></th>
            <th>Team</th>
            <th>Points</th>
            </tr>
            </thead>

        <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr style="<?php echo e($loop->first ?'color:green':''); ?><?php echo e($loop->last ?'color:red':''); ?>">
            <td style='width:10%'><?php echo e($loop->iteration); ?></td>
            <td style='width:70%'><?php echo e($team['name']); ?></td>
            <td style='width:20%'><?php echo e($team['points']); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php echo $__env->renderComponent(); ?>

    </div>
    <?php endif; ?>

    <div><?php if (isset($component)) { $__componentOriginalb5e767ad160784309dfcad41e788743b = $component; } ?>
<?php $component = App\View\Components\Alert::resolve(['info' => 'Pollo'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Alert::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb5e767ad160784309dfcad41e788743b)): ?>
<?php $component = $__componentOriginalb5e767ad160784309dfcad41e788743b; ?>
<?php unset($__componentOriginalb5e767ad160784309dfcad41e788743b); ?>
<?php endif; ?></div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('templates.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\soccerstats\resources\views/ita1.blade.php ENDPATH**/ ?>