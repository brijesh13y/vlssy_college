

<?php $__env->startSection('title', 'Our Staff - VLSSY Inter College'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Our Staff</h1>
            <p>Dedicated professionals committed to student success</p>
        </div>
    </section>

    <!-- Staff Content -->
    <section>
        <h2 class="section-title">Administrative & Support Staff</h2>
        <p class="section-subtitle">The backbone of our institution</p>

        <div class="team-grid">
            <?php $__empty_1 = true; $__currentLoopData = $teamMembers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="team-card">
                    <?php if($member->image): ?>
                        <img src="<?php echo e(asset('images/' . $member->image)); ?>" alt="<?php echo e($member->name); ?>" class="team-image">
                    <?php else: ?>
                        <div class="team-image" style="background: linear-gradient(135deg, #0066cc, #003d7a); display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 2rem;">
                            <?php echo e(substr($member->name, 0, 1)); ?>

                        </div>
                    <?php endif; ?>
                    <h3><?php echo e($member->name); ?></h3>
                    <p class="team-position"><?php echo e($member->position); ?></p>
                    <p class="team-qualification"><?php echo e($member->qualification); ?></p>
                    <p style="color: #666; font-size: 0.9rem;"><?php echo e($member->bio); ?></p>
                    <?php if($member->email): ?>
                        <a href="mailto:<?php echo e($member->email); ?>" style="color: #0066cc; text-decoration: none; margin-top: 0.5rem; display: inline-block;">Contact</a>
                    <?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p style="grid-column: 1/-1; text-align: center;">Staff members coming soon...</p>
            <?php endif; ?>
        </div>
    </section>

    <!-- Additional Staff Categories -->
    <section style="background-color: #f8f9fa;">
        <h2 class="section-title">Support Services</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-top: 3rem; max-width: 1200px; margin-left: auto; margin-right: auto;">
            <div style="background: white; padding: 2rem; border-radius: 10px; text-align: center;">
                <div style="font-size: 3rem; margin-bottom: 1rem;">👨‍💼</div>
                <h3 style="color: #003d7a;">Administrative Staff</h3>
                <p style="color: #666; margin-top: 0.5rem;">Managing day-to-day operations and student affairs</p>
            </div>
            <div style="background: white; padding: 2rem; border-radius: 10px; text-align: center;">
                <div style="font-size: 3rem; margin-bottom: 1rem;">🧹</div>
                <h3 style="color: #003d7a;">Maintenance Staff</h3>
                <p style="color: #666; margin-top: 0.5rem;">Keeping our campus clean and well-maintained</p>
            </div>
            <div style="background: white; padding: 2rem; border-radius: 10px; text-align: center;">
                <div style="font-size: 3rem; margin-bottom: 1rem;">🍽️</div>
                <h3 style="color: #003d7a;">Cafeteria Staff</h3>
                <p style="color: #666; margin-top: 0.5rem;">Providing nutritious meals and snacks</p>
            </div>
            <div style="background: white; padding: 2rem; border-radius: 10px; text-align: center;">
                <div style="font-size: 3rem; margin-bottom: 1rem;">🚐</div>
                <h3 style="color: #003d7a;">Transport Staff</h3>
                <p style="color: #666; margin-top: 0.5rem;">Ensuring safe transportation for students</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="background-color: #e6f0ff; text-align: center;">
        <h2 class="section-title">Join Our Team</h2>
        <p class="section-subtitle">We're always looking for dedicated professionals</p>
        <a href="<?php echo e(route('contact')); ?>" class="btn-primary" style="display: inline-block;">Contact HR</a>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\vlssycollege\resources\views/our-staff.blade.php ENDPATH**/ ?>