// document.getElementById('contactForm').addEventListener('submit', function (event) {
//     event.preventDefault();

//     // Collect form data
//     const name = document.getElementById('name').value;
//     const email = document.getElementById('email').value;
//     const message = document.getElementById('message').value;

//     // Example: Log data (In a real scenario, submit it to a server or email service)
//     console.log("Name: " + name);
//     console.log("Email: " + email);
//     console.log("Message: " + message);

//     // Display a confirmation message or handle form submission
//     alert('Thank you for reaching out! We will get back to you shortly.');
// });

document.addEventListener("DOMContentLoaded", () => {

    // Collapse navbar on link click
    const navLinks = document.querySelectorAll('#navbarNav .nav-link:not(.dropdown-toggle)'); // Exclude dropdown links
    navLinks.forEach(element => {
        element.addEventListener('click', () => {
            // Use Bootstrap's API to hide the navbar
            new bootstrap.Collapse(document.getElementById('navbarNav'), {
                toggle: false
            }).hide();
        });
    });

    // Collapse navbar when clicking outside of it
    const navbarCollapse = document.getElementById('navbarNav');
    const navbarToggler = document.querySelector('.navbar-toggler');
    document.addEventListener('click', function (event) {
        if (!navbarCollapse.contains(event.target) && !navbarToggler.contains(event.target) && navbarCollapse.classList.contains('show')) {
            new bootstrap.Collapse(navbarCollapse, {
                toggle: false
            }).hide();
        }
    });

    // Active link management based on scroll position
    window.addEventListener('scroll', function () {
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('#navbarNav .nav-link');
        const navbarHeight = document.querySelector('.navbar').offsetHeight;  // Get the height of the navbar

        let passedSection = Array.from(sections).reverse().find(section => {
            return window.scrollY >= section.offsetTop - navbarHeight;
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
        });

        if (passedSection) {
            let activeLink = document.querySelector('#navbarNav .nav-link[href="#' + passedSection.id + '"]');
            if (activeLink) {
                activeLink.classList.add('active');
            }
        }
    });

    // Change background image
    const backgrounds = document.querySelectorAll('.bg-image');
    let currentBackgroundIndex = 0;

    const nextBackground = () => {
        backgrounds[currentBackgroundIndex].style.opacity = '0'; // Fade out the current background
        currentBackgroundIndex = (currentBackgroundIndex + 1) % backgrounds.length;
        backgrounds[currentBackgroundIndex].style.opacity = '1'; // Fade in the next background
    }
    setInterval(nextBackground, 5000); // Change background every 5 seconds

    // Form validation
    const forms = document.querySelectorAll('.needs-validation');
    forms.forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        });
    });

    // Flip card
    document.querySelectorAll('.flip-btn').forEach(button => {
        button.addEventListener('click', (event) => {
            const cardInner = event.currentTarget.closest('.flip-card-inner');
            if (cardInner.style.transform === "rotateY(180deg)") {
                cardInner.style.transform = "rotateY(0deg)";
                cardInner.querySelector('.flip-card-front').style.display = "block";
                cardInner.querySelector('.flip-card-back').style.display = "none";
            } else {
                cardInner.style.transform = "rotateY(180deg)";
                cardInner.querySelector('.flip-card-front').style.display = "none";
                cardInner.querySelector('.flip-card-back').style.display = "block";
            }
        });
    });

    // Function to reset flipped cards
    const resetFlippedCards = () => {
        let anyFlipped = false;
        document.querySelectorAll('.flip-card-inner').forEach(cardInner => {
            if (cardInner.style.transform === "rotateY(180deg)") {
                cardInner.style.transform = "rotateY(0deg)";
                cardInner.querySelector('.flip-card-front').style.display = "block";
                cardInner.querySelector('.flip-card-back').style.display = "none";
                anyFlipped = true;
            }
        });
        return anyFlipped;
    }

    // Reset flipped cards on scroll
    let lastScrollPosition = window.scrollY;
    const scrollThreshold = 500;
    let scrollAnimationFrame;
    window.addEventListener('scroll', () => {
        const currentScrollPosition = window.scrollY;
        if (Math.abs(currentScrollPosition - lastScrollPosition) > scrollThreshold) {
            if (scrollAnimationFrame) {
                cancelAnimationFrame(scrollAnimationFrame);
            }
            scrollAnimationFrame = requestAnimationFrame(() => {
                if (resetFlippedCards()) {
                    lastScrollPosition = currentScrollPosition;
                }
            });
        }
    });

    // Scroll to top functionality
    document.getElementById("scrollToTopBtn").addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
    window.onscroll = () => {
        if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
            document.getElementById("scrollToTopBtn").style.display = "block";
        } else {
            document.getElementById("scrollToTopBtn").style.display = "none";
        }
    };
});

