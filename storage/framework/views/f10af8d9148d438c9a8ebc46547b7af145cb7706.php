<!DOCTYPE html>
<html lang="en">
  <head>
    <?php echo $__env->make('layout.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <?php if(Route::is(['map-grid'])): ?>
  <body class="map-page">
  <?php endif; ?>
  <?php if(Route::is(['chat-doctor','chat'])): ?>
  <body class="chat-page">
  <?php endif; ?>
  <?php if(Route::is(['doctor-register','forgot-password','login','register'])): ?>
  <body class="account-page">
  <?php endif; ?>
  <?php if(Route::is(['video-call','voice-call'])): ?>
  <body class="call-page">
  <?php endif; ?>
<?php echo $__env->make('layout.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php if(!Route::is(['chat-doctor','map-grid','map-list','chat','voice-call','video-call'])): ?>
<?php echo $__env->make('layout.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php echo $__env->make('layout.partials.footer-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>
<script>
$(document).ready(function(){
  // alert(1);
 /*$('.submenu li a').click(function(){
   $(.submenu li a).removeClass("active");
   $(this).addClass("active");
   $('.has-submenu a').removeClass("active");
   $('.has-submenu a').addClass("active");
   
   //$(this).toggleClass("active");
 });*/
});
</script><?php /**PATH D:\Alex-Medical\doctor\laravel-files\template\resources\views/layout/mainlayout.blade.php ENDPATH**/ ?>