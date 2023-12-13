<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Quản lý tài khoản </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 my-3 text-info"><a >XEM DANH SÁCH TÀI KHOẢN ĐANG BÁN</a></div>
                <section class="col-lg-6 connectedSortable">
                    <div class="card card-success card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-file-import mr-1"></i>
                                THÊM TÀI KHOẢN
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
                        <form action="<?php echo e(route('account.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="productId" value="<?php echo e($product['id']); ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                                    <input type="text" class="form-control" value="<?=$product['name'];?>"
                                        placeholder="Nhập tên sản phẩm" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Danh sách tài khoản</label>
                                    <textarea class="form-control" name="listAccount" rows="5"
                                        placeholder="1 dòng 1 tài khoản"></textarea>
                                </div>
                            </div>
                            <div class="card-footer clearfix">
                                <button name="AddAccounts" class="btn btn-info btn-icon-left m-b-10" type="submit"><i
                                        class="fas fa-plus mr-1"></i>Thêm Ngay</button>
                            </div>
                        </form>
                    </div>
                </section>
                <section class="col-lg-6 connectedSortable">
                    <div class="card card-danger card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-file-export mr-1"></i>
                                XOÁ TÀI KHOẢN
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
                        <form action="" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                                    <input type="text" class="form-control" value="<?=$product['name'];?>"
                                        placeholder="Nhập tên sản phẩm" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Danh sách tài khoản</label>
                                    <textarea class="form-control" name="listAccount" rows="5"
                                        placeholder="1 dòng 1 tài khoản"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="filter" value="1"
                                            id="target2" checked>
                                        <label for="target2" class="custom-control-label">Xoá tài khoản bao gồm tài
                                            khoản đã bán</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="filter_like_remove" value="1"
                                            id="filter_like_remove">
                                        <label for="filter_like_remove" class="custom-control-label">Xóa tài khoản theo UID</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer clearfix">
                                <button name="RemoveAccounts" class="btn btn-info btn-icon-left m-b-10" type="submit"><i
                                        class="fas fa-trash-alt mr-1"></i>Xoá Ngay</button>
                            </div>
                        </form>
                    </div>
                </section>
                <section class="col-lg-12 connectedSortable">
                    <div class="card card-success card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-file-import mr-1"></i>
                                Danh sách tài khoản
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


                        <div class="form-group m-3">
                            <label for="exampleInputEmail1">Danh sách tài khoản</label>
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>List</th>
                                        <th>Người bán</th>
                                        <th>Người mua</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <td><?php echo e($row['id']); ?></td>
                                        <td><?php echo e($row['account']); ?></td>
                                        <td><?php echo e($row['seller']); ?></td>
                                        <td><?php echo e($row['buyer']); ?></td>
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

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/shopclone.local/app/resources/views/backend/account/create.blade.php ENDPATH**/ ?>