
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list Delete</title>
</head>
<body>

<h1>Favourites</h1>

<?php $__currentLoopData = $edits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<h3>Favourite Game=<?php echo e($item['na1']); ?></h3>
<h3>Favourite Teacher=<?php echo e($item['na2']); ?></h3>
<h3>Skill=<?php echo e($item['na3']); ?></h3>
<p></p>
<H2><a href=<?php echo e("delete/" .$item['id']); ?>>Delete</a></H2>
<H2><a href=<?php echo e("update/" .$item['id']); ?>>Update</a></H2>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<a href="logout" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out

              
</body>
</html>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\sp\resources\views/list.blade.php ENDPATH**/ ?>