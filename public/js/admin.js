// ---------------------------- Edit Gallery Image Preview ----------------------------
function previewImage() {
    const input = document.getElementById('image_file');
    const newImagePreview = document.getElementById('newImagePreview');
    // const currentImagePreview = document.getElementById('currentImagePreview');

    if (input.files && input.files[0]) {
        const reader = new FileReader();

        reader.onload = function (e) {
            newImagePreview.src = e.target.result;
            newImagePreview.classList.remove('hidden');
            // currentImagePreview.classList.add('hidden');
        };

        reader.readAsDataURL(input.files[0]);
    } else {
        newImagePreview.classList.add('hidden');
        currentImagePreview.classList.remove('hidden');
    }
}