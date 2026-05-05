

<?php $__env->startSection('page-title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <div class="stats">
        <div class="stat-card">
            <div class="stat-label">User Queries</div>
            <div class="stat-number"><?php echo e($queriesCount); ?></div>
            <a href="<?php echo e(route('admin.queries.index')); ?>" style="color: #0066cc; text-decoration: none;">View →</a>
        </div>
        <div class="stat-card" style="border-top-color: #dc3545;">
            <div class="stat-label">Unread Messages</div>
            <div class="stat-number"><?php echo e($unreadCount); ?></div>
            <a href="<?php echo e(route('admin.queries.index')); ?>" style="color: #0066cc; text-decoration: none;">View →</a>
        </div>
        <div class="stat-card" style="border-top-color: #28a745;">
            <div class="stat-label">Staff Members</div>
            <div class="stat-number"><?php echo e($staffCount); ?></div>
            <a href="<?php echo e(route('admin.staff.index')); ?>" style="color: #0066cc; text-decoration: none;">View →</a>
        </div>
        <div class="stat-card" style="border-top-color: #ffc107;">
            <div class="stat-label">Testimonials</div>
            <div class="stat-number"><?php echo e($testimonialsCount); ?></div>
            <a href="<?php echo e(route('admin.testimonials.index')); ?>" style="color: #0066cc; text-decoration: none;">View →</a>
        </div>
        <div class="stat-card" style="border-top-color: #17a2b8;">
            <div class="stat-label">Blog Posts</div>
            <div class="stat-number"><?php echo e($blogsCount); ?></div>
            <a href="<?php echo e(route('admin.blogs.index')); ?>" style="color: #0066cc; text-decoration: none;">View →</a>
        </div>
        <div class="stat-card" style="border-top-color: #6f42c1;">
            <div class="stat-label">Gallery Items</div>
            <div class="stat-number"><?php echo e($galleryCount); ?></div>
            <a href="<?php echo e(route('admin.gallery.index')); ?>" style="color: #0066cc; text-decoration: none;">View →</a>
        </div>
    </div>

    <div class="card">
        <h2>Recent User Queries</h2>
        <?php if($queries->count() > 0): ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $queries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $query): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr style="background: <?php echo e(!$query->is_read ? '#e8f4f8' : 'white'); ?>;">
                            <td><strong><?php echo e($query->name); ?></strong> <?php echo e(!$query->is_read ? '🔔 NEW' : ''); ?></td>
                            <td><?php echo e($query->email); ?></td>
                            <td><?php echo e($query->subject); ?></td>
                            <td><?php echo e($query->created_at->format('M d, Y')); ?></td>
                            <td>
                                <a href="<?php echo e(route('admin.queries.show', $query)); ?>" class="btn-edit">View</a>
                                <form action="<?php echo e(route('admin.queries.destroy', $query)); ?>" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure?');">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        <?php else: ?>
            <p style="color: #666; margin-top: 1rem;">No queries received yet.</p>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\vlssycollege\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>