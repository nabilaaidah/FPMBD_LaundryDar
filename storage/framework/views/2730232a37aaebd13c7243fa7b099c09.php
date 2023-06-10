<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Register Cust</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/register_style.css')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="container">
      <div class="title">Registration</div>
      <div class="content">
        <form action="<?php echo e(route('customer.store')); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <div class="user-details">
            <div class="input-box">
              <span class="details">Full Name</span>
              <input type="text" name="full_name" placeholder="Enter your name" required>
            </div>
            <div class="input-box">
              <span class="details">Age</span>
              <input type="number" name="age" placeholder="Enter your age" required>
            </div>
            <div class="input-box">
              <span class="details">Address</span>
              <input type="text" name="address" placeholder="Enter your address" required>
            </div>
            <div class="input-box">
              <span class="details">Phone Number</span>
              <input type="text" name="phone_number" placeholder="Enter your number" required>
            </div>
            <div class="input-box">
              <span class="details">Username</span>
              <input type="text" name="cst_uname" placeholder="Enter your username" required>
              <?php $__errorArgs = ['cst_uname'];
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
              <input type="password" name="cst_password" placeholder="Enter your password" required>
            </div>
          </div>
          <div class="gender-details">
            <input type="radio" name="gender" id="dot-1" value="M" required>
            <input type="radio" name="gender" id="dot-2" value="F" required>
            <span class="gender-title">Gender</span>
            <div class="category">
              <label for="dot-1">
                <span class="dot one"></span>
                <span class="gender">Male</span>
              </label>
              <label for="dot-2">
                <span class="dot two"></span>
                <span class="gender">Female</span>
              </label>
            </div>
          </div>
          <div class="button">
            <input type="submit" value="Register">
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
<?php /**PATH C:\Users\LENOVO\Documents\.UTAMA\SEMESTER 4\2. MBD\FP\FPMBD_LaundryDar\resources\views/register.blade.php ENDPATH**/ ?>