<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh sách sản phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(url('admin/')); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Danh sách sản phẩm</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <section class="col-lg-6">
                </section>
                <section class="col-lg-6 text-right">
                    <div class="mb-3">
                        <a class="btn btn-primary btn-icon-left m-b-10" href="<?php echo e(route('product.create')); ?>"
                            type="button"><i class="fas fa-plus-circle mr-1"></i>Thêm sản phẩm</a>
                    </div>
                </section>
                <div class="alert p-3">
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <?php if(session()->has('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>
                    <?php if(session()->has('error')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(session('error')); ?>

                        </div>
                    <?php endif; ?>
                </div>
                <section class="col-lg-12 connectedSortable">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-shopping-cart mr-1"></i>
                                DANH SÁCH SẢN PHẨM HỆ THỐNG
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn bg-success btn-sm" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn bg-warning btn-sm" data-card-widget="maximize"><i
                                        class="fas fa-expand"></i>
                                </button>
                                <button type="button" class="btn bg-danger btn-sm" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="alert p-3">
                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <?php if(session()->has('success')): ?>
                                <div class="alert alert-success">
                                    <?php echo e(session('success')); ?>

                                </div>
                            <?php endif; ?>
                            <?php if(session()->has('error')): ?>
                                <div class="alert alert-danger">
                                    <?php echo e(session('error')); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <table id="datatable1" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 5px;">STT</th>
                                        <th>Username</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Flag</th>
                                        <th>Price</th>
                                        <th>Content</th>
                                        <th>Status</th>
                                        <th>Account</th>
                                        <th style="width: 20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <td><?=$row['stt'];?></td>
                                        <td><a
                                                href="<?php echo e(url('admin/user-edit/'.$row['user_id'])); ?>"><?php echo e(\App\Models\User::find($row['user_id'])['username']); ?></a>
                                        </td>
                                        <td><?=$row['name'];?></td>
                                        <td><?php echo e(\App\Models\Category::find($row['category_id'])['name']); ?></td>
                                        <td><?=$core->display_flag($row['flag']);?></td>
                                        <td><?php echo e($row['cost']); ?> </td>
                                        <td><textarea class="form-control" readonly><?=$row['content'];?></textarea>
                                        </td>
                                        <td><?=$core->display_status_product($row['status']);?></td>
                                        <td>
                                            <ul>
                                                <li>Đang bán:  <b style="color: green;">Xem</a></li>
                                                <li>Đã bán:  <b style="color:blue;">Xem</a></li>
                                                <li>Die: <b style="color: red;">Xem</b></li>
                                            </ul>
                                           </td>
                                        <td>
                                            <a aria-label="" href="<?php echo e(route('account.create','productId='.$row['id'])); ?>"
                                                style="color:white;" class="btn btn-dark btn-sm btn-icon-left m-b-10"
                                                type="button">
                                                <i class="fas fa-tasks mr-1"></i><span class="">Quản lý tài khoản</span>
                                            </a>
                                            <a aria-label="" href="<?php echo e(route('product.edit', $row['id'])); ?>"
                                                style="color:white;" class="btn btn-info btn-sm btn-icon-left m-b-10"
                                                type="button">
                                                <i class="fas fa-edit mr-1"></i><span class="">Edit</span>
                                            </a>
                                            <form action="<?php echo e(route('product.destroy', $row['id'])); ?>" method="post" class="mt-1">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit"  class="btn btn-danger btn-sm btn-icon-left m-b-10"  >Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/shopclone.local/app/resources/views/backend/product/index.blade.php ENDPATH**/ ?>