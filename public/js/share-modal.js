// Share modal safety handler - this script may be referenced in some pages.
// If elements do not exist, it no-ops to avoid null event listener errors.

document.addEventListener('DOMContentLoaded', function () {
    const shareButton = document.getElementById('shareBtn');
    const shareModal = document.getElementById('shareModal');
    const closeShare = document.querySelector('.share-modal-close');

    if (!shareButton || !shareModal || !closeShare) {
        return;
    }

    shareButton.addEventListener('click', function () {
        shareModal.style.display = 'block';
    });

    closeShare.addEventListener('click', function () {
        shareModal.style.display = 'none';
    });

    shareModal.addEventListener('click', function (e) {
        if (e.target === shareModal) {
            shareModal.style.display = 'none';
        }
    });
});