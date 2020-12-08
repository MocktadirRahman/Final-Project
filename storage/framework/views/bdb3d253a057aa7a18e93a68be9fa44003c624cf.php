
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update here-</title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3">
    <h1> Update Info </h1>
    <from action ="updated" method="POST">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="id" value="<?php echo e($data['id']); ?>" > <br> <br>
    <input type="text" name="na1" value="<?php echo e($data['na1']); ?>" > <br> <br>
    <input type="text" name="na2" value="<?php echo e($data['na2']); ?>" ><br><br>
    <input type="text" name="na3" value="<?php echo e($data['na3']); ?>" ><br><br>
    <button type="submit" class="">Update</button>
</div>
</div>
</div>
</body>
</html>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\sp\resources\views/update.blade.php ENDPATH**/ ?>