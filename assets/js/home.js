/* assets/js/home.js */

document.addEventListener('DOMContentLoaded', () => {

/* === FAQ SECTION S === */
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');
    const answer = item.querySelector('.faq-answer');
    const icon = item.querySelector('.faq-icon');

    question.addEventListener('click', (e) => {
      e.stopPropagation();
      
      const isOpen = item.classList.contains('active');
      
      faqItems.forEach(otherItem => {
        if (otherItem !== item) {
            otherItem.classList.remove('active');
            const otherIcon = otherItem.querySelector('.faq-icon');
            otherIcon.textContent = '+'; 
            otherIcon.classList.remove('rotate');
            otherItem.querySelector('.faq-answer').style.maxHeight = null;
        }
      });

      if (isOpen) {
        item.classList.remove('active');
        icon.textContent = '+';
        icon.classList.remove('rotate');
        answer.style.maxHeight = null;
      } else {
        item.classList.add('active');
        icon.textContent = '-';
        icon.classList.add('rotate');
        answer.style.maxHeight = answer.scrollHeight + "px";
      }
    });
  });

  document.addEventListener('click', (e) => {
    faqItems.forEach(item => {
      if (item.classList.contains('active')) {
        if (!item.contains(e.target)) {
          item.classList.remove('active');
          const icon = item.querySelector('.faq-icon');
          icon.textContent = '+';
          icon.classList.remove('rotate');
          item.querySelector('.faq-answer').style.maxHeight = null;
        }
      }
    });
  });
/* === FAQ SECTION E === */

/* === TESTIMONIALS SLIDER SECTION S === */
  if ($('.testimonials-slider').length) {
    $('.testimonials-slider').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: true,
      dots: false,
      infinite: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: { slidesToShow: 2 }
        },
        {
          breakpoint: 768,
          settings: { slidesToShow: 1 }
        }
      ]
    });
  }
/* === TESTIMONIALS SLIDER SECTION E === */

});
