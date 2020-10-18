
'use_strict';

$(document).ready(function() {

    var overlay = '<div class="modal-overlay"></div>';
    var btnOpen = $('[data-modal="open-modal"]');
    var btnClose = $('[data-modal="close-modal"]');

    /* Actions */

    // Open the modal with the open button.
    btnOpen.on('click', function(e) {
        e.preventDefault();
        // console.log($(e.currentTarget));
        openModal(e)
    })

    // Close the modal.
    btnClose.on('click', function(e) {
        e.preventDefault();
        closeModal(e)
    })

    // Close the modal when the overlay is clicked.
	$(document).on('click', '.modal-overlay', function(e){
		$('[data-modal="visible"]').fadeOut(400);
		$('[data-modal="visible"]').attr('data-modal', 'hidden');
		$(e.currentTarget).fadeOut(400);
	})

    /* Functions */

    // Open the modal.
    function openModal(e) {

		// Add the overlay.
		
        $('body').prepend(overlay);
        $('.modal-overlay').fadeIn(400);
		$(e.currentTarget).parents('.our-project').find('.modal').attr('data-modal', 'visible')
        $(e.currentTarget).parents('.our-project').find('.modal').fadeIn(400)
        $(e.currentTarget).parents('.our-project').find('.modal').css('visibility', 'visible');
    }

    // Close the modal.
    function closeModal(e) {
		$(e.currentTarget).parents('.modal').fadeOut(400);
		$(e.currentTarget).parents('.modal').attr('data-modal', 'hidden')

		$('.modal-overlay').fadeOut(500, function(e){
			$('.modal-overlay').remove();
		});
    }

})