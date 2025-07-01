(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();

    
    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    
    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Date and time picker
    $('.date').datetimepicker({
        format: 'L'
    });
    $('.time').datetimepicker({
        format: 'LT'
    });


    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        $('#videoModal').on('shown.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        $('#videoModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc);
        })
    });


    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        items: 1,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });


    // Service carousel
    $(".service-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        margin: 25,
        dots: true,
        loop: true,
        nav : false,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:2
            },
            768:{
                items:3
            },
            992:{
                items:2
            },
            1200:{
                items:3
            }
        }
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            // '<i class="bi bi-arrow-left"></i>',
            // '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:4
            }
        }
    });

$(document).ready(function () {
  $(".testimonial-slider").owlCarousel({
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    smartSpeed: 1000,
    center: true,
    loop: true,
    margin: 20,
    nav: true,
    dots: false,
    navText: [
      '<i class="bi bi-arrow-left"></i>',
      '<i class="bi bi-arrow-right"></i>'
    ],
    responsive: {
      0: { items: 1 },
      768: { items: 2 },
      992: { items: 3 }
    }
  });
});



    window.addEventListener('scroll', function () {
        const header = document.querySelector('.main-header');
        if (window.scrollY > 10) {
        header.classList.add('scrolled');
        } else {
        header.classList.remove('scrolled');
        }
    });

    document.addEventListener("DOMContentLoaded", function () {
        const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
            entry.target.classList.add("zoom-in");
            observer.unobserve(entry.target); // Remove if you want it only once
            }
        });
        }, { threshold: 0.6 });

        const btn = document.querySelector(".req-btn");
        if (btn) observer.observe(btn);
    });
    const section = document.getElementById('meeting-section');
    const button = document.getElementById('zoom-btn');

    window.addEventListener('scroll', () => {
        const rect = section.getBoundingClientRect();
        const windowHeight = window.innerHeight;

        if (rect.top >= 0 && rect.top < windowHeight / 2) {
        // When section is near top of screen
        button.classList.add('full-zoom');
        button.classList.remove('light-zoom');
        } else if (rect.top < windowHeight && rect.bottom > 0) {
        // Partially visible
        button.classList.add('light-zoom');
        button.classList.remove('full-zoom');
        } else {
        // Not visible
        button.classList.remove('light-zoom', 'full-zoom');
        }
    });

    const headers = document.querySelectorAll(".accordion-header");
        const boxLeft = document.querySelector(".box-left");

        headers.forEach(header => {
        header.addEventListener("click", () => {
            const item = header.parentElement;
            const isActive = item.classList.contains("active");

            // Close all
            document.querySelectorAll(".accordion-item").forEach(i => {
            i.classList.remove("active");
            });

            // Reset margin on box-left
            boxLeft.classList.remove("shifted");

            // Toggle current
            if (!isActive) {
            item.classList.add("active");
            boxLeft.classList.add("shifted");
            }
        });
    });

    
})(jQuery);

