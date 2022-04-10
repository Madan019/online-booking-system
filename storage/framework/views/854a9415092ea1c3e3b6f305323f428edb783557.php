<div class="row container-of-errors" style="display: none">
    <div class="col-md-12 error">
        <div class="alert alert-danger">
            <ul class="list-of-errors">
            </ul>
        </div>
    </div>
</div>

<?php if(Session::has('message')): ?>
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success">
                <?php echo e(Session::get('message')); ?>

            </div>
        </div>
    </div>
<?php endif; ?>

<?php if(Session::has('error-message')): ?>
    <div class="row list-of-all-errors">
        <div class="col-md-12 error">
            <div class="alert alert-danger errors">
                <?php echo e(Session::get('error-message')); ?>

            </div>
        </div>
    </div>
<?php endif; ?>

<?php if(count($errors) > 0): ?>
    <div class="row">
        <div class="col-md-12 error">
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>
<?php endif; ?>

<script type="text/javascript">
    setTimeout(function () {
        $('.alert-success').hide();
        $('.errors').hide();
    }, 3000);

</script>