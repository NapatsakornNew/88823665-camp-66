<?php $__env->startSection('content'); ?>
    <div class="layout-fixed sidebar-expand=lg">
        <div class="app-wrapper">

            <?php echo $__env->make('components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('components.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <main class="app-main">
                <!--begin::App Content header-->
                <div class="app-content-header">
                    <!--begin::Container-->
                    <div class="container-fluid">
                        <!--begin::Row -->
                        <div class="row">
                            <div class="col-sm-12"><h3 class="mb-0"> User Tables </h3></div>
                                <div class="col-sm-12">
                                    <ol class="breadcrumb float-sm-end">
                                        <li class="breadcrumb-item"><a href="#"> Home </a></li>
                                        <li class="breadcrumb-item active" aria-current="page"> User Tables </li>
                                    </ol>
                            </div>
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end:;Container-->
                </div>
                <!--end::App Content Header-->
                <!--begin::App Content-->
                <div class="app-content">
                    <!--begin::Container-->
                    <div class="container-fluid">
                        <!--begin::Row-->
                        <div class="Row">
                            <div class="col-md-12">
                                <div class="card mb-12">
                                    <div class="card-header"><h3 class="card-title"> User Tables </h3></div>
                                    <!--/.card-header-->
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px"> # </th>
                                                    <th> Name </th>
                                                    <th> Email </th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($users as $index => $user) { ?>
                                                    <tr class="align-middle">
                                                        <td><?php echo e($index + 1); ?>.</td>
                                                        <td><?php echo e($user->name); ?></td>
                                                        <td><?php echo e($user->email); ?></td>
                                                        <td>
                                                            <a href="<?php echo e(url('/user/'.$user->id)); ?>">
                                                            <button class="btn btn-warning"> Edit </button>
                                                            </a>
                                                            <form action="<?php echo e(url('user')); ?>" onsubmit="clickme(event)" method="post" style="display:inline">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('delete'); ?>
                                                                <input type="hidden" name="id" value="<?php echo e($user->id); ?>">
                                                                <button class="btn btn-danger" type="submit"> Delete </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--/.card-body-->
                                    <div class="card-footer clearfix">
                                        <ul class="pagination pagination-sm m-0 float-end">
                                            <li class="page-item"><a class="page-link" href="#"> $laquo;</a></li>
                                            <li class="page-item"><a class="page-link" href="#"> 1</a></li>
                                            <li class="page-item"><a class="page-link" href="#"> 2</a></li>
                                            <li class="page-item"><a class="page-link" href="#"> 3</a></li>
                                            <li class="page-item"><a class="page-link" href="#"> $raquo;</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/.card-->
                            </div>
                            <!--/.col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::App Content-->
            </main>
            <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    function clickme(event) {
    event.preventDefault(); // ป้องกันการส่งฟอร์มทันที
    Swal.fire({
        title: 'Are you sure?',
        text: 'Do you really want to delete this user?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            event.target.closest('form').submit(); // ส่งฟอร์ม
        }
    });
}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\88823665-camp-66\mylaravel\resources\views/user.blade.php ENDPATH**/ ?>