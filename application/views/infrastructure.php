 
	<!-- BANNER -->
	<div class="section banner-page gallery">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="title-page">Infrastructure</div>
	
				</div>
			</div>
		</div>
	</div>
<style>
/* Resetting font size */
html {
  font-size: 1rem;
}

/**
 * Grid
 */
.gallery__grid .row:nth-child(n+2) {
  /* Adding some margin to create a bit of space under rows */
  margin-top: 1rem;
}
.gallery__column {
  /* In case the image is bigger than the column */
  overflow: hidden;
}

</style>

<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row"><br>
<!-- Begin div .grid -->
<div id="gallery__grid" class="container gallery__grid" data-element="gallery-item">
  <!-- Begin div .row 1 -->

  <div class="row">
  	<?php  
           if($fetch_infra_data->num_rows() > 0)  
           {    $t = 0;
                foreach($fetch_infra_data->result() as $row)  
                {   
                    $t++;
                    $imgURL = "./uploads/infra/";
                    $image = $row->image;
           ?>

    <div class="col-md-3 gallery__column">
    <img class="gallery-item" src="<?php echo $imgURL.$image; ?>" style="height:250px; width: 300px; padding: 0px 0px 10px 0px; " alt="">

	</div>

  <?php }} ?>

  </div>

  <!-- end div .row 9 -->
</div><!-- end div .grid -->

	
<script>

// Creating self-invoking anonymous function
(function() {
  'use strict';
  var app = {
    // Setting couple variables 
    settings: {
      grid: $('#gallery__grid'),
      modalDialog: $('#modal-dialog'),
      elementClass: $('#gallery__grid').data('element')
    },
    controllers: function() {
      // Run the code only if gallery exists
      if (this.settings.grid.length > 0) {
        // Modal Constructor
        var modalBuilder = '<div id="modal-dialog" class="js-modal-overlay modal__overlay"><section class="js-modal-dialog modal-dialog"><button class="js-modal-close modal__close"><span class="sr-only">Close Modal</span>&Cross;</button><img class="js-modal-dialog__img modal-dialog__img" src="" alt="Gallery thumbnail"><div class="modal__navigation"><a href="#" class="js-modal-prev modal__prev theme-background">&lsaquo;</a><a href="#" class="js-modal-next modal__next theme-background">&rsaquo;</a></div></section></div>';
        // Putting the modal contructor right after the grid container
        $(app.settings.grid).after(modalBuilder);

        // Creating variables we are going to use through the code
        var modalOverlay = $('.js-modal-overlay'),
          modalImage = $('.js-modal-dialog__img'),
          modalCloseBtn = $('.js-modal-close'),
          nextImageAnchor = $('.js-modal-next'),
          prevImageAnchor = $('.js-modal-prev'),
          grid = $('.gallery__grid'),
          imagesArray = grid.find(this.settings.elementClass),
          imagesArrayLength = imagesArray.length;
        
        // Styling the modal dialog
        $('.js-modal-dialog').css({
          'position': 'relative',
          'top': '50%',
          'right': '0',
          'left': '0',
          'transform': 'translateY(-50%)',
          'margin-right': 'auto',
          'margin-left': 'auto',
          'max-width': '25rem',
          'text-align': 'center'
        });
        
        // Styling the modal overlay
        modalOverlay.css({
          'position': 'fixed',
          'top': '0',
          'left': '0',
          'z-index': '-1',
          'width': '100%',
          'height': '100%',
          'background': 'rgba(0,0,0,.75)',
          'opacity': '0',
          'transition': '.25s opacity ease-in-out'
        });
        
        // Styling close button
        modalCloseBtn.css({
          'position': 'absolute',
          'top': '-25px',
          'right': '-26px',
          'padding-top': '.75rem',
          'padding-bottom': '.75rem',
          'width': '3rem',
          'font-size': '1rem',
          'color': '#fff',
          'border': '0',
          'border-radius': '50%',
          'opacity': '0',
          'cursor': 'pointer',
          'background': '#111',
          'transition': '.25s opacity ease-in-out'
        });
        
        // Styling close button - hover over overlay
        modalOverlay.on('mouseenter', function() {
          modalCloseBtn.css({'opacity': '.5'});
        });
        
        // Styling close button - mouse leaves the overlay
        modalOverlay.on('mouseleave', function() {
          modalCloseBtn.css({'opacity': '0'});
        });
        
        // Styling close button - hover over button itself
        modalOverlay.on('mouseenter', function() {
          modalCloseBtn.on('mouseenter', function() {
            $(this).css({'opacity': '1'});
          });
        });
        
        // Styling close button - mouse leaves the button
        modalOverlay.on('mouseleave', function() {
          modalCloseBtn.on('mouseleave', function() {
            $(this).css({'opacity': '.5'});
          });
        });
        
        // Styling the arrows
        $('.js-modal-next, .js-modal-prev').css({
          'position': 'absolute',
          'top': '50%',
          'z-index': '91',
          'display': 'block',
          'width': '3rem',
          'height': '3rem',
          'font-size': '32px',
          'font-weight': '400',
          'text-decoration': 'none',
          'color': '#fff',
          'background': '#111',
          'box-shadow': '0 1px 3px rgba(0,0,0,.12), 0 1px 2px rgba(0,0,0,.24)',
          'opacity': '0',
          'transition': '.25s all ease-in-out'
        });
        $('.js-modal-prev').css({
          'left': '0'
        });
        $('.js-modal-next').css({
          'right': '0'
        });
        
        // Styling arrows - hover over overlay
        modalOverlay.on('mouseenter', function() {
          $('.js-modal-next, .js-modal-prev').css({'opacity': '.5'});
        });
        
        // Styling arrows - mouse leaves the overlay
        modalOverlay.on('mouseleave', function() {
          $('.js-modal-next, .js-modal-prev').css({'opacity': '0'});
        });
        
        // Styling arrows - hover over the buttons
        $('.js-modal-next, .js-modal-prev').on('mouseenter', function() {
          $(this).css({
            'color': '#fff',
            'box-shadow': '0 3px 6px rgba(0,0,0,.16), 0 3px 6px rgba(0,0,0,.23)',
            'opacity': '1'
          });
        });
        
        // Styling arrows - mouse leaves the buttons
        $('.js-modal-next, .js-modal-prev').on('mouseleave', function() {
          $(this).css({
            'color': '#fff',
            'box-shadow': '0 1px 3px rgba(0,0,0,.12), 0 1px 2px rgba(0,0,0,.24)',
            'opacity': '.5'
          });
        });

        // Grid-Based Gallery
        $('.' + app.settings.elementClass).on('click', function() {
          // Itterating over all images in the gallery
          $('.' + app.settings.elementClass).each(function(index) {
            // Assigning data-index attribute with unique number
            // to every image in the gallery
            $(this).attr('data-index', index);
            $(this).css({'max-width': '100%'});
          });
          var currentImage = $(this), // Currently clicked image
            imgSrc = currentImage.attr('src'), // Src attribute of clicked image
            imgAlt = currentImage.attr('alt'), // Alt attribute of clicked image
            currentImageIndex = currentImage.data('index'), // Number from data-index attribute of clicked image
            imgArray = $('img[data-index]'), // array of all images
            numOfImages = imgArray.length - 1, // switch to 0-based index
            nextIndex, // prepare nextIndex variable
            prevIndex; // prepare prevIndex variable

          if (currentImageIndex > 0) {
            // If you are not on the first image, decrease the index by 1
            prevIndex = currentImageIndex - 1;
          } else {
            // If you are on the first image, go on the last one
            prevIndex = numOfImages;
          }
          if ((currentImageIndex + 1) < numOfImages) {
            // If you are not on the last image, increase the index by 1
            nextIndex = currentImageIndex + 1;
          } else {
            // If you are on the last image, go on the first one
            nextIndex = 0;
          }

          // Attach image to modal window
          function imageAttach() {
            modalImage.attr({
              src: imgSrc,
              alt: imgAlt,
              "data-index": currentImageIndex
            });
          }

          // Open Modal Window
          function modalOpen() {
            modalOverlay.css({
              'z-index': '90',
              'opacity': '1'
            });
            // Show previous image on "left arrow" key press
            $(document).on('keydown', function(e) {
              if (e.keyCode == 37 || e.charCode == 37 || e.which == 37) {
                prevImage(e);
              }
            });
            // Show next image on "right arrow" key press
            $(document).on('keydown', function(e) {
              if (e.keyCode == 39 || e.charCode == 39 || e.which == 39) {
                nextImage(e);
              }
            });
            // Close modal on "Esc" key press
            $(document).on('keydown', function(e) {
              if (e.keyCode == 27 || e.charCode == 27 || e.which == 27) {
                closeModal(e);
              }
            });
          }

          // Show previous image
          function prevImage(e) {
            e.preventDefault();

            modalImage.attr({
              src: $('[data-index=' + prevIndex + ']').attr('src'),
              alt: $('[data-index=' + prevIndex + ']').attr('alt'),
              'data-index': $('[data-index=' + prevIndex + ']').attr('data-index')
            });
            currentImageIndex = prevIndex;

            if (currentImageIndex > 0) {
              // If you are not on the first image, decrease the index by 1
              prevIndex = currentImageIndex - 1;
            } else {
              // If you are on the first image, go on the last one
              prevIndex = numOfImages;
            }
            if ((currentImageIndex + 1) < numOfImages) {
              // If you are not on the last image, increase the index by 1
              nextIndex = currentImageIndex + 1;
            } else {
              // If you are on the last image, go on the first one
              nextIndex = 0;
            }
          }

          // Show next image
          function nextImage(e) {
            e.preventDefault();

            modalImage.attr({
              src: $('[data-index=' + nextIndex + ']').attr('src'),
              alt: $('[data-index=' + nextIndex + ']').attr('alt'),
              'data-index': $('[data-index=' + nextIndex + ']').attr('data-index')
            });
            currentImageIndex = nextIndex;

            if (currentImageIndex > 0) {
              // If you are not on the first image, decrease the index by 1
              prevIndex = currentImageIndex - 1;
            } else {
              // If you are on the first image, go on the last one
              prevIndex = numOfImages;
            }
            if ((currentImageIndex + 1) <= numOfImages) {
              // If you are not on the last image, increase the index by 1
              nextIndex = currentImageIndex + 1;
            } else {
              // If you are on the last image, go on the first one
              nextIndex = 0;
            }
          }

          // Closing Modal Window
          function closeModal(e) {
            e.preventDefault();
            modalOverlay.css({
              'z-index': '-1',
              'opacity': '0'
            });
          }

          // Attach clicked image to modal dialog
          imageAttach();
          // Open modal dialog
          modalOpen();
          // Handle click on right arrow
          nextImageAnchor.on('click', function(e) {
            nextImage(e);
          });
          // Handle click on left arrow
          prevImageAnchor.on('click', function(e) {
            prevImage(e);
          });
          // Handle click on close button
          modalCloseBtn.on('click', function(e) {
            closeModal(e);
          });
        });
      }
    },
    // Run the controllers
    init: function() {
      app.controllers();
    }
  };
  // Initialize the app
  app.init();
})($);
</script>
	
	</div>
</div>