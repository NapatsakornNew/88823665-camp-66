<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
        integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
        integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI=" crossorigin="anonymous" />
    <!--
    <link rel="stylesheet" href="../../../dist/css/adminlte.css" />
    -->
    <link rel="stylesheet" href="<?php echo e(url('public/css/adminlte.css')); ?>" />
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <style>
        body {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }
    </style>
</head>

<body>
    <div class="d-flex align-items-center justify-content-center vh-100 flex-row">
        <h1
            class="display-1 mx-5
            <?php if(trim($__env->yieldContent('code')) == '404'): ?> text-warning
            <?php elseif(trim($__env->yieldContent('code')) == '500'): ?> text-danger
            <?php else: ?> text-secondary <?php endif; ?>">
            <?php echo $__env->yieldContent('code'); ?>
        </h1>

        <div class="align-items-center">
            <div class="h4">
                <?php if(trim($__env->yieldContent('code')) === '404'): ?>
                    <i class="bi bi-exclamation-triangle-fill text-warning"></i>
                <?php elseif(trim($__env->yieldContent('code')) === '500'): ?>
                    <i class="bi bi-exclamation-triangle-fill text-danger"></i>
                <?php endif; ?>
                <?php echo $__env->yieldContent('title'); ?>
            </div>

            <div class="h6">
                <?php echo $__env->yieldContent('message'); ?>
                <a href="<?php echo e(url('/')); ?>"> return to dashboard </a>
            </div>

            <div class="input-group mt-3">
                <input type="text" name="search" class="form-control" placeholder="Search">
                <?php if(trim($__env->yieldContent('code')) == '404'): ?>
                    <button type="button" class="btn btn-warning">
                        <i class="bi bi-search"></i>
                    </button>
                <?php elseif(trim($__env->yieldContent('code')) == '500'): ?>
                    <button type="button" class="btn btn-danger">
                        <i class="bi bi-search"></i>
                    </button>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
        integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="<?php echo e(url('public/js/adminlte.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\88823665-camp-66\mylaravel\resources\views/errors/minimal.blade.php ENDPATH**/ ?>