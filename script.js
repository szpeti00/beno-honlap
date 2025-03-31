// On DOMContentLoaded
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
    if (backgrounds.length > 0) {
        let currentBackgroundIndex = 0;

        const nextBackground = () => {
            backgrounds[currentBackgroundIndex].style.opacity = '0'; // Fade out the current background
            currentBackgroundIndex = (currentBackgroundIndex + 1) % backgrounds.length;
            backgrounds[currentBackgroundIndex].style.opacity = '1'; // Fade in the next background
        }
        setInterval(nextBackground, 5000); // Change background every 5 seconds
    }

    // Form validation
    const forms = document.querySelectorAll('.needs-validation');
    if (forms.length > 0) {
        forms.forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            });
        });
    }

    // Contact form
    const contactForm = document.getElementById('contactForm')
    if (!contactForm) {
        return;
    }
    contactForm.addEventListener('submit', function (event) {
        event.preventDefault();
        const form = this;
        if (!this.checkValidity()) {
            event.stopPropagation();
        } else {
            const formData = new FormData(this);
            fetch('sendmail.php', {
                method: 'POST',
                body: formData,
            })
                .then(response => response.text())
                .then(data => {
                    // Clear the form if submission was successful
                    form.reset();
                    form.classList.remove('was-validated');
                    // Select the button and insert the message right after it
                    const button = document.querySelector('.sending-button');
                    const messageContainer = document.createElement('div');
                    messageContainer.innerHTML = `<div class="alert alert-success mt-2">${data}</div>`;
                    if (button.nextSibling) {
                        button.parentNode.removeChild(button.nextSibling); // Remove existing message if present
                    }
                    button.parentNode.insertBefore(messageContainer, button.nextSibling);
                })
                .catch((error) => {
                    const button = document.querySelector('.sending-button');
                    const messageContainer = document.createElement('div');
                    messageContainer.innerHTML = `<div class="alert alert-danger mt-2">Error: ${error}</div>`;
                    if (button.nextSibling) {
                        button.parentNode.removeChild(button.nextSibling); // Remove existing message if present
                    }
                    button.parentNode.insertBefore(messageContainer, button.nextSibling);
                });
        }
        this.classList.add('was-validated');
    }, false);

    // Flip card event
    document.querySelectorAll('.flip-btn').forEach(button => {
        button.addEventListener('click', (event) => {
            const cardInner = event.currentTarget.closest('.flip-card-inner');
            cardInner.classList.toggle('is-flipped');
        });
    });

    // Intersection Observer to flip back cards when they are not visible
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) {
                const cardInner = entry.target;
                cardInner.classList.remove('is-flipped');
            }
        });
    }, { threshold: 0.05 });  // threshold based on how much of the card should be visible before flipping back

    // Add each flip-card-inner to the observer
    document.querySelectorAll('.flip-card-inner').forEach(cardInner => {
        observer.observe(cardInner);
    });

    // Dynamically changing date in copyright section
    document.getElementById("year").textContent = new Date().getFullYear();

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

