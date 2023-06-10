<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/login_style.css')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="container">
      <div class="title">Login</div>
      <div class="content">
        <form action="<?php echo e(route('customer.login')); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <div class="user-details">
            <div class="input-box">
              <span class="details">Username</span>
              <input type="text" name="username" placeholder="Enter your username" required>
              <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="text-danger"><?php echo e($message); ?></span>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="input-box">
              <span class="details">Password</span>
              <input type="password" name="password" placeholder="Enter your password" required>
              <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="text-danger"><?php echo e($message); ?></span>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
          </div>
          <?php if($errors->has('login_error')): ?>
            <div class="error"><?php echo e($errors->first('login_error')); ?></div>
          <?php endif; ?>
          <div class="button">
            <input type="submit" value="Login">
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
<?php /**PATH C:\Users\LENOVO\Documents\.UTAMA\SEMESTER 4\2. MBD\FP\FPMBD_LaundryDar\resources\views/logincust.blade.php ENDPATH**/ ?>