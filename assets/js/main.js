$('.categories-items').owlCarousel({
    loop:true,
    margin:20,
    nav:false,
    dots:false,
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:2
        },
        370:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

// <!-- ============ Trending Items =============== -->

$('.trending-products').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:2
        },
        370:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

// <!-- ============ Trending Items =============== -->

$('.brand-icon').owlCarousel({
    loop:true,
    margin:20,
    nav:false,
    dots:false,
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:4
        },
        1200:{
            items:5
        }
    }
})

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
document.querySelector('#signup form').addEventListener('submit', function(e) {
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
document.querySelector('.forgot-link').addEventListener('click', function(e) {
    e.preventDefault();
    openForgotPassword();
});

// Form submission
document.getElementById('forgot-password-form').addEventListener('submit', function(e) {
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
window.addEventListener('click', function(e) {
    if (e.target == document.getElementById('forgot-password-modal')) {
        closeModal();
    }
});