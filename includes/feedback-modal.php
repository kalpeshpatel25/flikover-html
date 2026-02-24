<!-- === FIXED FEEDBACK BUTTON S === -->
<a href="#" class="fixed-feedback-btn" id="open-feedback-modal">Feedback</a>
<!-- === FIXED FEEDBACK BUTTON E === -->

<!-- === FEEDBACK MODAL SECTION S === -->
<div id="feedback-modal" class="modal-overlay">
    <div class="feedback-modal-container">
        <div class="modal-header">
            <h3 class="modal-title">Feedback/Suggestion Box</h3>
            <span class="close-modal">&times;</span>
        </div>
        <div class="modal-body">
            <p class="feedback-label">Anything you like/dislike/recommendation/suggestion:</p>
            <textarea class="feedback-textarea" placeholder="Type your message here"></textarea>
            <p class="feedback-note">
                <span class="note-red">NOTE: For any query</span> 
                <a href="contactus.php" class="contact-link">contact us.</a>
            </p>
        </div>
        <div class="modal-footer feedback-footer">
            <button class="btn-close">Close</button>
            <button class="btn-send">Send</button>
        </div>
    </div>
</div>
<!-- === FEEDBACK MODAL SECTION E === -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    const feedbackModal = document.getElementById('feedback-modal');
    const openFeedbackBtn = document.getElementById('open-feedback-modal');
    
    if (feedbackModal && openFeedbackBtn) {
        const modalContainer = feedbackModal.querySelector('.feedback-modal-container');
        const closeBtns = feedbackModal.querySelectorAll('.close-modal, .btn-close');

        const openModal = (e) => {
            if (e) e.preventDefault();
            feedbackModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        };

        const closeModal = () => {
            feedbackModal.classList.remove('active');
            document.body.style.overflow = 'auto';
        };

        openFeedbackBtn.addEventListener('click', openModal);

        closeBtns.forEach(btn => {
            btn.addEventListener('click', closeModal);
        });

        feedbackModal.addEventListener('click', function(e) {
            if (e.target === feedbackModal) {
                closeModal();
            }
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && feedbackModal.classList.contains('active')) {
                closeModal();
            }
        });
    }
});
</script>
