
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Login</title>
</head>
<body>
<div class="container">
<div class="row" style="margin-top:45px">
<div class="col-md-4 col-md-offset-4">
<h4>User Login</h4>
<form action="<?php echo e(route('check')); ?>"method="post">
<?php echo csrf_field(); ?>
<div class="result">
<?php if(Session::get('fail')): ?>
<div class="alert alert-dangers">
<?php echo e(Session::get('fail')); ?>

</div>
<?php endif; ?>
</div>
<div class="form-group">
<label for="email">Email</label>
<input type="text" class="form-control" name="email" placeholder="Enter email">
<span class ="text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    <span class ="text-danger"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
  </div>
<div class="form-group">
<button type="submit" class="btn btn-block btn-primary">Login</button>
</div>
<br>
<a href="register">create an new account now!</a>
</form>
</div>
</div>
</div>

    
</body>
</html>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xamp\htdocs\sp\resources\views//login.blade.php ENDPATH**/ ?>