document.addEventListener('DOMContentLoaded', () => {

    const cta = document.querySelector('.js-floating-cta');

    if (!cta) return;

    const modal = cta.querySelector('.cta-modal');
    const trigger = cta.querySelector('.cta-image-container');
    const close = cta.querySelector('.cta-modal-close');

    if (!modal || !trigger || !close) return;

    trigger.addEventListener('click', () => {
        console.log('OPEN MODAL'); // debug
        modal.classList.add('active');
    });

    close.addEventListener('click', () => {
        modal.classList.remove('active');
    });

    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.remove('active');
        }
    });

});