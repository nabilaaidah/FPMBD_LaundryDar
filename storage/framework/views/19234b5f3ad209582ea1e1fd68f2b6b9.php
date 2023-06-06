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
  <?php
    // Retrieve the transaction total price based on the customer ID
    $customerId = $customerId ?? null; // Get the customer ID from the route or set it to null if not available

    $transaction = App\Models\transaction::where('customer_cst_id', $customerId)->latest()->first();
    $totalPrice = $transaction ? $transaction->tsc_totalprice : 0;
  ?>
  <form action="<?php echo e(route('payment.paymenttotal', ['customerId' => $customerId])); ?>" class="form">
    <?php echo csrf_field(); ?>
    <h1 class="text-center">Payment Form</h1>
    <!-- Progress bar -->
    <div class="progressbar">
        <div class="progress" id="progress"></div>
      <div class="progress-step progress-step-active" data-title="Total"></div>
      <div class="progress-step" data-title="Payment"></div>
    </div>

    <!-- Steps -->
    <div class="form-step form-step-active">
      <div class="input-group">
        <label for="confirmPassword">Payment Information</label>
        <span class="warning-text">Information below is the total you have to pay!</span>
      </div>
      <div class="input-group">
        <label for="totalPrice">Total Price</label>
        <input type="text" name="totalPrice" id="totalPrice" value="<?php echo e($totalPrice); ?>" readonly />
      </div>      
      <div class="btns-group">
        <a href="<?php echo e(route('transaction.processorderform', ['customerId' => $customerId])); ?>" class="btn btn-prev">Previous</a>
        <a href="<?php echo e(route('payment.forminfo', ['customerId' => $customerId])); ?>" class="btn btn-next">Next</a>
      </div>
    </div>
  </form>
</body>
</html>
<?php /**PATH C:\Users\NABILA\Documents\kuliahSem4\mbd\LaundryDar\laundry-dar\resources\views/paymenttotal.blade.php ENDPATH**/ ?>