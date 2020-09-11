<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?php echo $__env->yieldContent('title'); ?>
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php echo $__env->make('layouts.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('css'); ?>
        <style type="text/css" media="screen">
            
        </style>
</head>
<body>
 <!--====================  header area ====================-->
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--====================  End of header area  ====================-->
    <div class="site-wrapper-reveal">
        <?php echo $__env->yieldContent('content'); ?>
    </div> 

<!--====================  footer area ====================-->
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--====================  End of footer area  ====================-->

<!--====================  scroll top ====================-->
    
    
    <?php echo $__env->make('layouts.chatting-icon', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<!--====================  End of scroll top  ====================-->


<!--====================  mobile menu overlay ====================-->
    <?php echo $__env->make('layouts.mobile_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--====================  End of mobile menu overlay  ====================-->

<!-- JS== -->
    <?php echo $__env->make('layouts.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('script'); ?>

</body>

</html><?php /**PATH C:\xampp\htdocs\doctors\vistadermsolutions\resources\views/layouts/app.blade.php ENDPATH**/ ?>