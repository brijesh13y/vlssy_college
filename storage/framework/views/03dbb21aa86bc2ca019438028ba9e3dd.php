

<?php $__env->startSection('title', 'Facilities - VLSSY Inter College'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Facilities</h1>
            <p>State-of-the-art infrastructure for comprehensive learning</p>
        </div>
    </section>

    <!-- Facilities Content -->
    <section>
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 class="section-title">Our Facilities</h2>
            <p class="section-subtitle">Modern amenities designed for student success</p>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem; margin-top: 3rem;">
                <?php $__currentLoopData = $facilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facility): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div style="background: linear-gradient(135deg, #f8f9fa 0%, #f0f4ff 100%); padding: 2rem; border-radius: 16px; text-align: center; border: 2px solid rgba(0, 102, 204, 0.1); transition: all 0.4s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 50px rgba(0, 102, 204, 0.15)'" onmouseout="this.style.transform='none'; this.style.boxShadow='none'">
                        <div style="font-size: 4rem; margin-bottom: 1rem;"><?php echo e($facility->icon); ?></div>
                        <h3 style="color: #003d7a; margin-bottom: 1rem;"><?php echo e($facility->title); ?></h3>
                        <p style="color: #666;"><?php echo e($facility->description); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="background-color: #e6f0ff; text-align: center;">
        <h2 class="section-title">Experience Our Facilities</h2>
        <p class="section-subtitle">Schedule a campus tour to see our world-class amenities</p>
        <a href="<?php echo e(route('contact')); ?>" class="btn-primary" style="display: inline-block;">Book a Tour</a>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\vlssycollege\resources\views/facilities.blade.php ENDPATH**/ ?>