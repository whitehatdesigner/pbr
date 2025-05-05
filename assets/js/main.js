$('.categories-items').owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 2
        },
        370: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
})

// <!-- ============ Trending Items =============== -->

$('.trending-products').owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 2
        },
        370: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
})

// <!-- ============ Trending Items =============== -->

$('.brand-icon').owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 4
        },
        1200: {
            items: 5
        }
    }
})


// Checkout Process Controller
document.addEventListener('DOMContentLoaded', function() {
    // Initialize checkout steps
    const steps = document.querySelectorAll('.checkout-progress .step');
    const forms = document.querySelectorAll('.checkout-form');
    let currentStep = 1;

    // Initialize form data object
    const formData = {
        shipping: {},
        payment: {}
    };

    // Function to navigate between steps
    window.goToStep = function(step) {
        // Validate current step before proceeding
        if (step > currentStep && !validateCurrentStep(currentStep)) {
            return;
        }

        // Update current step
        currentStep = step;

        // Update progress bar
        steps.forEach((stepElement, index) => {
            if (index + 1 <= currentStep) {
                stepElement.classList.add('active');
            } else {
                stepElement.classList.remove('active');
            }
        });

        // Show/hide forms
        forms.forEach(form => {
            form.classList.remove('active');
        });
        document.getElementById(getFormId(currentStep)).classList.add('active');

        // Update review sections if going to step 3
        if (currentStep === 3) {
            updateReviewSections();
        }
    };

    // Helper function to get form ID based on step
    function getFormId(step) {
        switch(step) {
            case 1: return 'shippingForm';
            case 2: return 'paymentForm';
            case 3: return 'reviewForm';
            default: return 'shippingForm';
        }
    }

    // Validate current step before proceeding
    function validateCurrentStep(step) {
        const formId = getFormId(step);
        const form = document.getElementById(formId);
        const inputs = form.querySelectorAll('input[required], select[required]');
        
        let isValid = true;
        
        inputs.forEach(input => {
            if (!input.value.trim()) {
                input.classList.add('error');
                isValid = false;
            } else {
                input.classList.remove('error');
            }
        });

        // Additional validation for payment form
        if (step === 2) {
            const cardNumber = form.querySelector('[name="card_number"]').value.trim();
            const expiry = form.querySelector('[name="expiry"]').value.trim();
            const cvv = form.querySelector('[name="cvv"]').value.trim();
            
            // Simple card number validation (16 digits)
            if (!/^\d{16}$/.test(cardNumber.replace(/\s/g, ''))) {
                form.querySelector('[name="card_number"]').classList.add('error');
                isValid = false;
            }
            
            // Simple expiry date validation (MM/YY)
            if (!/^\d{2}\/\d{2}$/.test(expiry)) {
                form.querySelector('[name="expiry"]').classList.add('error');
                isValid = false;
            }
            
            // Simple CVV validation (3 or 4 digits)
            if (!/^\d{3,4}$/.test(cvv)) {
                form.querySelector('[name="cvv"]').classList.add('error');
                isValid = false;
            }
        }

        if (!isValid) {
            alert('Please fill in all required fields correctly.');
            return false;
        }

        // Save form data
        saveFormData(step);
        return true;
    }

    // Save form data to our object
    function saveFormData(step) {
        const formId = getFormId(step);
        const form = document.getElementById(formId);
        const inputs = form.querySelectorAll('input, select');
        
        inputs.forEach(input => {
            if (input.name) {
                if (step === 1) {
                    formData.shipping[input.name] = input.value;
                } else if (step === 2) {
                    formData.payment[input.name] = input.value;
                }
            }
        });
    }

    // Update review sections with saved data
    function updateReviewSections() {
        // Shipping review
        const shippingReview = document.getElementById('shippingReview');
        shippingReview.innerHTML = `
            <p>Name: <span>${formData.shipping.full_name}</span></p>
            <p>Institution: <span>${formData.shipping.institution}</span></p>
            <p>Shipping Address:<br/> <span>${formData.shipping.address}</span></p>
            <p><span>${formData.shipping.city}, ${formData.shipping.state} ${formData.shipping.zip}</span></p>
            <p>Country: <span>${formData.shipping.country}</span></p>
            <p>Phone: <span>${formData.shipping.phone}</span></p>
            <p>Email: <span>${formData.shipping.email}</span></p>
        `;

        // Payment review
        const paymentReview = document.getElementById('paymentReview');
        const cardNumber = formData.payment.card_number;
        const lastFour = cardNumber.length > 4 ? cardNumber.slice(-4) : cardNumber;
        paymentReview.innerHTML = `
            <p>Credit Card ending in <span>${lastFour}</span></p>
            <p>Expires: <span>${formData.payment.expiry}</span></p>
            <p>Name on card: <span>${formData.payment.card_name}</span></p>
        `;
    }

    // Handle form submission
    const reviewForm = document.getElementById('reviewForm');
    if (reviewForm) {
        reviewForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validate terms checkbox
            const termsCheckbox = reviewForm.querySelector('input[type="checkbox"]');
            if (!termsCheckbox.checked) {
                alert('You must agree to the terms and conditions.');
                return;
            }
            
            // Here you would typically send the data to your server
            console.log('Form data to be submitted:', formData);
            
            // Show success message or redirect
            alert('Order placed successfully!');
            // window.location.href = 'order-confirmation.html';
        });
    }

    // Format credit card number input
    const cardNumberInput = document.querySelector('[name="card_number"]');
    if (cardNumberInput) {
        cardNumberInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\s+/g, '').replace(/[^0-9]/gi, '');
            let formatted = '';
            
            for (let i = 0; i < value.length; i++) {
                if (i > 0 && i % 4 === 0) {
                    formatted += ' ';
                }
                formatted += value[i];
            }
            
            e.target.value = formatted.substring(0, 19);
        });
    }

    // Format expiry date input
    const expiryInput = document.querySelector('[name="expiry"]');
    if (expiryInput) {
        expiryInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            
            if (value.length > 2) {
                value = value.substring(0, 2) + '/' + value.substring(2, 5);
            }
            
            e.target.value = value.substring(0, 5);
        });
    }
});

function goToInvoice() {
    window.location.href = "invoice.php";
}

// ========= cart sidebar ============

let CartSidebar = document.querySelector('.my-cart-sidebar')
console.log(CartSidebar);

function toggleCartSidebar() {
    CartSidebar.classList.toggle('sidebar-active');
}

// Close sidebar when pressing ESC
document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
        CartSidebar.classList.remove('sidebar-active');
    }
});

// ======== search box =========

let searchIcon = document.querySelector('.search-icon');

let searchBox = document.querySelector('.search-box');

searchIcon.addEventListener('click', () => searchBox.classList.add('showSearch'))

let searchClose = document.querySelector('.search-close');

searchClose.addEventListener('click', () => searchBox.classList.remove('showSearch'))

// ============= login page ===========


// Toggle between Login/Signup tabs
function openTab(tabName) {
    const tabs = document.querySelectorAll('.auth-form');
    const buttons = document.querySelectorAll('.tab-btn');

    tabs.forEach(tab => tab.classList.remove('active'));
    buttons.forEach(btn => btn.classList.remove('active'));

    document.getElementById(tabName).classList.add('active');
    event.currentTarget.classList.add('active');
}

// Password validation for signup
document.querySelector('#signup form').addEventListener('submit', function (e) {
    const password = this.querySelector('input[name="password"]').value;
    const confirmPassword = this.querySelector('input[name="confirm_password"]').value;

    if (password !== confirmPassword) {
        e.preventDefault();
        alert('Passwords do not match!');
    }
});

function togglePassword(icon) {
    const input = icon.parentElement.querySelector('input');
    if (input.type === "password") {
        input.type = "text";
        icon.innerHTML = '<i class="eye-icon">🔒</i>';
    } else {
        input.type = "password";
        icon.innerHTML = '<i class="eye-icon">👁️</i>';
    }
}


// Add these functions
function openForgotPassword() {
    document.getElementById('forgot-password-modal').style.display = 'block';
    document.body.style.overflow = 'hidden'; // Prevent scrolling
}

function closeModal() {
    document.getElementById('forgot-password-modal').style.display = 'none';
    document.body.style.overflow = 'auto';
}

// Update your forgot password link
document.querySelector('.forgot-link').addEventListener('click', function (e) {
    e.preventDefault();
    openForgotPassword();
});

// Form submission
document.getElementById('forgot-password-form').addEventListener('submit', function (e) {
    e.preventDefault();

    // Simulate success (replace with actual AJAX call)
    this.style.display = 'none';
    document.querySelector('.success-message').style.display = 'block';

    // Reset after 3 seconds
    setTimeout(() => {
        closeModal();
        this.style.display = 'block';
        document.querySelector('.success-message').style.display = 'none';
        this.reset();
    }, 3000);
});

// Close when clicking outside modal
window.addEventListener('click', function (e) {
    if (e.target == document.getElementById('forgot-password-modal')) {
        closeModal();
    }
});


// Remove item functionality
document.querySelectorAll('.remove-item').forEach(btn => {
    btn.addEventListener('click', function (e) {
        e.stopPropagation();
        const item = this.closest('.wishlist-item');
        item.style.animation = 'fadeOut 0.3s forwards';
        setTimeout(() => {
            item.remove();
            checkEmptyWishlist();
        }, 300);
    });
});

// Clear all button
document.querySelector('.clear-all')?.addEventListener('click', function () {
    if (confirm('Are you sure you want to clear your wishlist?')) {
        document.querySelectorAll('.wishlist-item').forEach(item => {
            item.style.animation = 'fadeOut 0.3s forwards';
            setTimeout(() => item.remove(), 300);
        });
        setTimeout(checkEmptyWishlist, 350);
    }
});

// Check if wishlist is empty
function checkEmptyWishlist() {
    const empty = document.querySelector('.empty-wishlist');
    const grid = document.querySelector('.wishlist-grid');
    if (grid.children.length === 0) {
        empty.style.display = 'block';
        grid.style.display = 'none';
    } else {
        empty.style.display = 'none';
        grid.style.display = 'grid';
    }
}

// Add animation style
const style = document.createElement('style');
style.textContent = `
    @keyframes fadeOut {
        to { opacity: 0; transform: translateY(20px); }
    }
`;
document.head.appendChild(style);



// =============================================
