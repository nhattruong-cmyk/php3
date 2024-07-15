
<?php $__env->startSection('titlepage', 'Danh sách sản phẩm'); ?>
<?php $__env->startSection('content'); ?>
    <section>
        <div class="container">
            <div class="col3">
                <h2>Cập nhật Sản Phẩm</h2>

                <form action="<?php echo e(route('productupdate')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <select name="category_id" id="">
                        <option value="0" selected>Chọn danh mục</option>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($item->id == $product->category_id): ?>
                                <option value="<?php echo e($item->id); ?>" selected><?php echo e($item->name); ?></option>
                            <?php else: ?>
                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                   
                    <input type="text" name="name" value="<?php echo e($product->name); ?>" placeholder="Tên sản phẩm">
                    <input type="text" name="price" value="<?php echo e($product->price); ?>" placeholder="Giá">
                    <input type="file" name="img">
                    <img src="<?php echo e(asset('uploaded/' . $product->img)); ?>" width="120" alt="">
                    <input type="text" name="quantity" value="<?php echo e($product->quantity); ?>" placeholder="Số lượng">
                    <textarea name="description" rows="5" style="width:100%"><?php echo e($product->description); ?></textarea>
                    <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
                    <input type="submit" value="Cập nhật">
                </form>
            </div>
            <div class="col9">
                <h2>Danh Sách Sản Phẩm</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Hình ảnh</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Lượt bán</th>
                            <th>Mô tả</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->id); ?></td>
                                <td><img src="<?php echo e(asset('uploaded/' . $item->img)); ?>" width="80" alt=""></td>
                                <td><?php echo e($item->name); ?></td>
                                <td><?php echo e(number_format($item->price, 0, ',', '.')); ?> vnđ</td>
                                <td><?php echo e($item->quantity); ?></td>
                                <td><?php echo e($item->sold); ?></td>
                                <td><?php echo e($item->description); ?></td>
                                <td class="action-icons">
                                    <a href="<?php echo e(route('productupdateform', $item->id)); ?>">Edit</a>
                                    -
                                    <a href="<?php echo e(route('productdelete', $item->id)); ?>">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
                <div class="pagination">
                    <?php echo e($products->links('pagination::default')); ?>

                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Ampps\www\thayhoLaravel\laravel\resources\views/admin/productupdateform.blade.php ENDPATH**/ ?>