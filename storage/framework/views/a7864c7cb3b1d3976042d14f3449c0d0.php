

<?php $__env->startSection('title', 'Contact Us - VLSSY Inter College'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Get In Touch</h1>
            <p>We're here to answer your questions and help you start your educational journey</p>
        </div>
    </section>

    <!-- Contact Content -->
    <section>
        <div style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: 1fr 1fr; gap: 3rem;">
            <!-- Contact Information -->
            <div>
                <h2 style="color: #003d7a; margin-bottom: 2rem;">Contact Information</h2>
                
                <div style="margin-bottom: 2rem;">
                    <h4 style="color: #0066cc; margin-bottom: 0.5rem;">📍 Campus Address</h4>
                    <p style="color: #666;">Jujharpur (Hariharpur), Ghazipur, Uttar Pradesh – 233226 <br>India</p>
                </div>

                <div style="margin-bottom: 2rem;">
                    <h4 style="color: #0066cc; margin-bottom: 0.5rem;">📞 Phone</h4>
                    <p style="color: #666;"><a href="tel:+919506898967" style="color: #0066cc; text-decoration: none;">+91 95068 98967</a></p>
                </div>

                <div style="margin-bottom: 2rem;">
                    <h4 style="color: #0066cc; margin-bottom: 0.5rem;">📧 Email</h4>
                    <p style="color: #666;"><a href="mailto:info@vlssy.com" style="color: #0066cc; text-decoration: none;">info@vlssy.com</a></p>
                </div>

                <div style="margin-bottom: 2rem;">
                    <h4 style="color: #0066cc; margin-bottom: 0.5rem;">🕐 Office Hours</h4>
                    <p style="color: #666;">
                        Monday - Saturday: 8:00 AM - 4:00 PM<br>
                        Sunday: Closed
                    </p>
                </div>

                <div style="background-color: #e6f0ff; padding: 2rem; border-radius: 10px; margin-top: 2rem;">
                    <h4 style="color: #003d7a; margin-bottom: 1rem;">Why Choose VLSSY Inter College?</h4>
                    <ul style="list-style: none; color: #666;">
                        <li style="margin-bottom: 0.8rem;">✓ 25+ years of educational excellence</li>
                        <li style="margin-bottom: 0.8rem;">✓ Qualified and experienced faculty</li>
                        <li style="margin-bottom: 0.8rem;">✓ Comprehensive curriculum for all streams</li>
                        <li style="margin-bottom: 0.8rem;">✓ Modern facilities and learning environment</li>
                        <li style="margin-bottom: 0.8rem;">✓ 95% student pass rate</li>
                    </ul>
                </div>
            </div>

            <!-- Contact Form -->
            <div>
                <h2 style="color: #003d7a; margin-bottom: 2rem;">Send us a Message</h2>

                <?php if($errors->any()): ?>
                    <div style="background-color: #f8d7da; color: #721c24; padding: 1rem; border-radius: 5px; margin-bottom: 1.5rem;">
                        <ul style="list-style: none; margin: 0;">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php if(session('success')): ?>
                    <div style="background-color: #d4edda; color: #155724; padding: 1rem; border-radius: 5px; margin-bottom: 1.5rem;">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>

                <form action="<?php echo e(route('contact.submit')); ?>" method="POST" id="contactForm">
                    <?php echo csrf_field(); ?>

                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" required value="<?php echo e(old('name')); ?>">
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required value="<?php echo e(old('email')); ?>">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number *</label>
                        <input type="tel" id="phone" name="phone" required value="<?php echo e(old('phone')); ?>">
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject *</label>
                        <input type="text" id="subject" name="subject" required value="<?php echo e(old('subject')); ?>">
                    </div>

                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" required><?php echo e(old('message')); ?></textarea>
                    </div>

                    <button type="submit" class="btn-primary" style="width: 100%; padding: 1rem; border: none; cursor: pointer;">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="background-color: #e6f0ff; text-align: center;">
        <h2 class="section-title">Ready to Apply?</h2>
        <p class="section-subtitle">Take the first step towards your bright future</p>
        <a href="<?php echo e(route('contact')); ?>" class="btn-primary" style="display: inline-block;">Submit Application</a>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            // Optional: Add form submission tracking or validation
            console.log('Contact form submitted');
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\vlssycollege\resources\views/contact.blade.php ENDPATH**/ ?>