// Smooth scroll behavior for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});

// Add animation on scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.animation = 'fadeInUp 0.6s ease-out forwards';
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

// Observe all service cards and testimonial cards
document.querySelectorAll('.service-card, .testimonial-card, .team-card').forEach(el => {
    el.style.opacity = '0';
    observer.observe(el);
});

// Add CSS animation
const style = document.createElement('style');
style.textContent = `
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
`;
document.head.appendChild(style);

// Mobile menu toggle (if needed in future)
function toggleMobileMenu() {
    const navLinks = document.querySelector('.nav-links');
    if (navLinks) {
        navLinks.classList.toggle('active');
    }
}

// Close mobile menu when clicking outside
document.addEventListener('click', function (event) {
    const nav = document.querySelector('nav');
    const mobileToggle = document.querySelector('.mobile-menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    if (!nav) return;

    if (navLinks && navLinks.classList.contains('active')) {
        if (event.target !== mobileToggle && !event.target.closest('nav')) {
            navLinks.classList.remove('active');
        }
    }
});

// Form validation
const contactForm = document.getElementById('contactForm');
if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        const phone = document.getElementById('phone').value;
        
        // Basic phone validation (simple check for at least 10 digits)
        const phoneRegex = /^\d{10,}$/;
        const cleanPhone = phone.replace(/\D/g, '');
        
        if (!phoneRegex.test(cleanPhone)) {
            e.preventDefault();
            alert('Please enter a valid phone number (at least 10 digits).');
            return false;
        }
    });
}

// Scroll to top on page load if needed
window.addEventListener('load', function() {
    // Add any post-load animations here
    console.log('Page loaded successfully');
});

// Active navigation link highlighting (now handled by Blade)
// function updateActiveNavLink() {
//     const currentPath = window.location.pathname;
//     document.querySelectorAll('.nav-links a').forEach(link => {
//         const href = link.getAttribute('href');
//         if (href === currentPath || (currentPath === '/' && href === '/')) {
//             link.style.color = '#0066cc';
//         }
//     });
// }

// document.addEventListener('DOMContentLoaded', updateActiveNavLink);

// ========== COUNTER ANIMATION ==========
// Animate numbers counting up when they come into view
function animateCounters() {
    const counters = document.querySelectorAll('.counter');
    
    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const counterObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.dataset.animated) {
                const target = parseInt(entry.target.dataset.target);
                const duration = 2000; // 2 seconds
                const increment = target / (duration / 16); // 60fps
                let current = 0;
                
                const updateCounter = () => {
                    current += increment;
                    if (current < target) {
                        entry.target.textContent = Math.floor(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        entry.target.textContent = target;
                        entry.target.dataset.animated = 'true';
                    }
                };
                
                updateCounter();
                counterObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    counters.forEach(counter => {
        counterObserver.observe(counter);
    });
}

// Floating Social Icons Position Handler
function updateFloatingSocialPosition() {
    const floatingSocial = document.querySelector('.floating-social');
    if (!floatingSocial) return;
    
    const viewportHeight = window.innerHeight;
    const viewportWidth = window.innerWidth;
    
    // Check if screen is in vertical orientation (height is close to or greater than width)
    if (viewportHeight >= viewportWidth * 0.8) {
        // Vertical orientation - center the icons
        floatingSocial.style.top = '50%';
        floatingSocial.style.transform = 'translateY(-50%)';
    } else {
        // Horizontal orientation - keep at middle
        floatingSocial.style.top = '50%';
        floatingSocial.style.transform = 'translateY(-50%)';
    }
}

// Initialize floating social position on load and resize
window.addEventListener('load', updateFloatingSocialPosition);
window.addEventListener('resize', updateFloatingSocialPosition);
window.addEventListener('orientationchange', updateFloatingSocialPosition);

// Start counter animation when page loads
window.addEventListener('load', function() {
    animateCounters();
    updateFloatingSocialPosition();
    console.log('Page loaded successfully');
});

// Share modal button handling (guard against missing elements)
document.addEventListener('DOMContentLoaded', function () {
    const shareButton = document.getElementById('shareBtn');
    const shareModal = document.getElementById('shareModal');
    const closeShare = document.querySelector('.share-modal-close');

    if (!shareButton || !shareModal || !closeShare) {
        // If the share modal or controls don't exist on this page, skip safely.
        return;
    }

    shareButton.addEventListener('click', function () {
        shareModal.style.display = 'block';
    });

    closeShare.addEventListener('click', function () {
        shareModal.style.display = 'none';
    });

    shareModal.addEventListener('click', function (e) {
        if (e.target === shareModal) {
            shareModal.style.display = 'none';
        }
    });
});
