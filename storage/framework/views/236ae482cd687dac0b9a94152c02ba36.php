<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo e(asset('css/transactionform_style.css')); ?>" />
    <script src="<?php echo e(asset('js/transactionform.js')); ?>" defer></script>
    <title>Order Form</title>
  </head>
  <body>
    <form action="<?php echo e(route('payment.processpaymentform', ['customerId' => $customerId])); ?>" class="form">
      <h1 class="text-center">Payment Form</h1>
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress-step progress-step-active" data-title="Total"></div>
        <div class="progress-step progress-step-active" data-title="Payment"></div>
      </div>

      <!-- Steps -->
      <div class="form-step form-step-active">
        <div class="input-group">
          <label for="pm_method">Payment Method</label>
          <input type="text" name="pm_method" id="pm_method" />
        </div>
        <div class="input-group">
          <label for="confirmPassword">Warning</label>
          <span class="warning-text">Please remember to save your payment receipt.</span>
        </div>        
        <div class="btns-group">
          <a href="<?php echo e(route('payment.paymenttotal', ['customerId' => $customerId])); ?>" class="btn btn-prev">Previous</a>
          <input type="submit" value="Submit" class="btn" />
        </div>
      </div>
    </form>
  </body>
</html><?php /**PATH C:\Users\NABILA\Documents\kuliahSem4\mbd\LaundryDar\laundry-dar\resources\views/paymentform.blade.php ENDPATH**/ ?>