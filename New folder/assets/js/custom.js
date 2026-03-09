var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});


$(document).ready(function(){
        $('.banner-slider').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          speed: 300,
          infinite: true,
          dots: true,
          arrows: false,
        });
        $('.banner-trusted-slider').slick({
          slidesToShow: 5,
          slidesToScroll: 1,
          speed: 3000,
          autoplaySpeed: 0,
          autoplay: true,
          infinite: true,
          arrows: false,
          dots: false,
          pauseOnFocus: false,
          pauseOnHover: false,
          swipe: false,
          cssEase: 'linear',
          responsive: [
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
              }
            },
            {
              breakpoint: 1180,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
              }
            },
          ]
        });
        $('.our-choose-slider-left').slick({
          slidesToShow: 6,
          slidesToScroll: 1,
          speed: 3000,
          autoplaySpeed: 0,
          autoplay: true,
          infinite: true,
          arrows: false,
          dots: false,
          pauseOnFocus: true,
          pauseOnHover: true,
          swipe: false,
          cssEase: 'linear',
          responsive: [
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 1366,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 1725,
              settings: {
                slidesToShow: 5,
                slidesToScroll: 1
              }
            },
          ]
        });
        $('.our-choose-slider-right').slick({
          slidesToShow: 6,
          slidesToScroll: 1,
          speed: 3000,
          autoplaySpeed: 0,
          autoplay: true,
          infinite: true,
          arrows: false,
          dots: false,
          pauseOnFocus: true,
          pauseOnHover: true,
          swipe: false,
          cssEase: 'linear',
          rtl: true,
          responsive: [
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 1366,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 1725,
              settings: {
                slidesToShow: 5,
                slidesToScroll: 1
              }
            },
          ]
        });
        $('.experience-testimonial-slider').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          speed: 300,
          infinite: true,
          dots: true,
          arrows: false,
        });
        $('.career-straight-slider').slick({
          slidesToShow: 5,
          slidesToScroll: 1,
          speed: 300,
          infinite: true,
          dots: false,
          arrows: true,
          centerMode: true,
          centerPadding: '0',
          focusOnSelect: true,
          variableWidth: true,
          responsive: [
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
              }
            },
          ]
        });
        // Images to switch in the right column
        const images = [
          'assets/img/feedback.png', // Image for slide 1
          'assets/img/feedback.png', // Image for slide 2
          'assets/img/feedback.png', // Image for slide 3
          'assets/img/feedback.png', // Image for slide 4
          'assets/img/feedback.png', // Image for slide 5
          'assets/img/feedback.png', // Image for slide 6
        ];

        // Listen to afterChange event on Slick Slider
        $('.career-straight-slider').on('afterChange', function(event, slick, currentSlide) {
          const $img = $('#right-column-img');
          
          // Add fade-out class
          $img.addClass('fade-out');

          // Wait for the fade-out transition to complete, then change the image
          setTimeout(function() {
            $img.attr('src', images[currentSlide]); // Change the image source

            // Remove the fade-out class and fade in the new image
            $img.removeClass('fade-out');
          }, 500); // Match the timeout to the CSS transition duration
        });

        // Listen to afterChange event on Slick Slider
        // $('.career-straight-slider').on('afterChange', function(event, slick, currentSlide) {
        //   // Change the image in the right column based on the current slide index
        //   $('#right-column-img').attr('src', images[currentSlide]);
        // });



        $('.success-speaks-reviwe-slider').slick({
          slidesToShow: 4,
          slidesToScroll: 1,
          speed: 300,
          infinite: true,
          dots: true,
          arrows: true,
          responsive: [
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 1180,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            }
          ]
        });
        // Update Slick Slider position when a pill is shown
        $('button[data-bs-toggle="pill"]').on('shown.bs.tab', function (e) {
          // debugger
          $('.success-speaks-reviwe-slider').slick('setPosition'); // Adjusts the position of the slider
        });
        // Update Slick Slider position when a pill is shown
        // $('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
        //   $('.success-speaks-reviwe-slider').slick('setPosition'); // Adjusts the position of the slider
        // });

        $('.our-learners-slider-one').slick({
          slidesToShow: 10,
          slidesToScroll: 1,
          speed: 3000,
          autoplaySpeed: 0,
          autoplay: true,
          infinite: true,
          arrows: false,
          dots: false,
          pauseOnFocus: true,
          pauseOnHover: true,
          swipe: false,
          cssEase: 'linear',
          responsive: [
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 1366,
              settings: {
                slidesToShow: 5,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 1725,
              settings: {
                slidesToShow: 8,
                slidesToScroll: 1
              }
            },
          ]
        });
        $('.our-learners-slider-two').slick({
          slidesToShow: 10,
          slidesToScroll: 1,
          speed: 3000,
          autoplaySpeed: 0,
          autoplay: true,
          infinite: true,
          arrows: false,
          dots: false,
          pauseOnFocus: true,
          pauseOnHover: true,
          swipe: false,
          cssEase: 'linear',
          rtl: true,
          responsive: [
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 1366,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 1725,
              settings: {
                slidesToShow: 8,
                slidesToScroll: 1
              }
            },
          ]
        });
      });
      jQuery(document).ready(function(){
        jQuery('.scrollbar-inner').scrollbar();
      });
      function showContent() {
        var x = document.getElementById("myDIV");
        x.style.display = "block";
      };
      function hideContent() {
        var x = document.getElementById("myDIV");
        x.style.display = "none";
      };
	  
	  
	  
	        $(document).ready(function(){
        $('.slider-for').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          fade: true,
          dots: false,
          asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
          slidesToShow: 4,
          slidesToScroll: 1,
          asNavFor: '.slider-for',
          dots: false,
          arrows: true,
          // centerMode: true,
          focusOnSelect: true
        });
        $('.accredited-slider').slick({
          slidesToShow: 5,
          slidesToScroll: 1,
          speed: 3000,
          autoplaySpeed: 0,
          autoplay: true,
          infinite: true,
          arrows: false,
          dots: false,
          pauseOnFocus: false,
          pauseOnHover: false,
          swipe: false,
          cssEase: 'linear',
          responsive: [
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
              }
            },
            {
              breakpoint: 1180,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
              }
            },
          ]
        });
        $('.slider-ceh').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          speed: 300,
          infinite: true,
          dots: true,
          arrows: false,
          autoplay: true,
          autoplaySpeed: 3000
        });
        /* ...Certified Candidates Slider... */
        $('.certified-candidates-slider').slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          speed: 3000,
          autoplaySpeed: 0,
          autoplay: true,
          infinite: true,
          arrows: false,
          dots: false,
          pauseOnFocus: true,
          pauseOnHover: true,
          swipe: true,
          cssEase: 'linear',
          responsive: [
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
              }
            },
            {
              breakpoint: 1180,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
              }
            },
          ]
        });
        /* ...Certified Candidates Video Slider... */
        $('.course-recent-reviews-slider').slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          centerMode: true,
          arrows: false,
          dots: false,
          speed: 300,
          centerPadding: '60px',
          infinite: true,
          autoplaySpeed: 5000,
          autoplay: true,
          responsive: [
            {
              breakpoint: 768,
              settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
              }
            },
            {
              breakpoint: 480,
              settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
              }
            }
          ]
        });
        /* ...Brands Slider... */
        $('.course-our-recent-placement-slider').slick({
          slidesToShow: 5,
          slidesToScroll: 1,
          centerMode: true,
          arrows: false,
          dots: false,
          speed: 300,
          centerPadding: '60px',
          autoplaySpeed: 5000,
          autoplay: true,
          responsive: [
            {
              breakpoint: 768,
              settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
              }
            },
            {
              breakpoint: 480,
              settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
              }
            }
          ]
        });
        /* ...Certified Candidates Reviews Slider... */
        $('.course-discover-profile-slider').slick({
          dots: false,
          arrows: true,
          infinite: true,
          speed: 300,
          slidesToShow: 4,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 769,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
        });
        /* ...Certified Candidates Slider... */
        $('.success-speaks-reviwe-slider').slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          speed: 300,
          infinite: true,
          dots: true,
          arrows: true,
          responsive: [
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 1180,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            }
          ]
        });
      
        $('.carousel-image').on('click', function() {
          const imageUrl = $(this).data('image-url');
          $('#imagePreview').attr('src', imageUrl);
        });

        $('#toggleViewMoreFAQ').on('click', function() {
            // Show all hidden accordion items
            $('#coursefaqAccordionFlush .accordion-item.d-none').removeClass('d-none');
            // Hide the "View More" button after click
            $(this).hide();
        });
      
      });
      jQuery(document).ready(function(){
        jQuery('.scrollbar-inner').scrollbar();
      });
      function showContent() {
        var x = document.getElementById("myDIV");
        x.style.display = "block";
      };
      function hideContent() {
        var x = document.getElementById("myDIV");
        x.style.display = "none";
      };

      document.addEventListener('DOMContentLoaded', function() {
        // Get all video buttons
        const videoBtns = document.querySelectorAll('.video-btn');
        const videoFrame = document.getElementById('videoFrame');

        // When any video button is clicked
        videoBtns.forEach(button => {
            button.addEventListener('click', function() {
                const videoId = this.getAttribute('data-video-id');
                const videoUrl = `https://www.youtube.com/embed/${videoId}?autoplay=1&mute=0`;

                // Update the iframe's src attribute to load the video
                videoFrame.src = videoUrl;
            });
        });
        // Clear the iframe source when modal is closed to stop the video
        document.getElementById('videoModal').addEventListener('hidden.bs.modal', function () {
            videoFrame.src = '';
        });
    });
	
	
	
	
	
	
	