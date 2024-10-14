@props(['visibilityClass' => 'hidden', 'closeButton' => false])

<div class="fixed inset-0 bg-light-primaryBg/70 dark:bg-primaryBg/70 items-center justify-center z-50 {{ $visibilityClass }} transition-all" id="overlay-loading">
    <div class="bg-light-tertiaryBg dark:bg-tertiaryBg rounded-lg shadow-lg p-6 w-full max-w-md relative">
        <!-- Title (Optional) -->
        @isset($title)
        <h2 class="text-xl font-semibold mb-4">{{ $title }}</h2>
        @endisset

        <!-- Dynamic content -->
        <div class="popup-body">
            <div class="loading-container text-center">
                <p class="text-xl mb-2">Loading</p>
                <div class="loading-spinner flex items-center justify-center mb-3">
                    <div class="spinner-icon border-4 border-gray-300 border-t-brand rounded-full w-12 h-12 animate-spin"></div>
                </div>
            </div>
        </div>
        <!-- Close Button -->
        @if($closeButton)
        <button id="close-loading" class="absolute top-2 right-2 text-gray-500 hover:text-gray-900 text-2xl">&times;</button>
        @endif
    </div>
</div>

<script>
    // popup-js
    document.addEventListener("DOMContentLoaded", function () {
        const overlayLoading = document.getElementById('overlay-loading'); // Reference to the overlay
        const closeLoading = document.getElementById('close-loading');

        // Function to hide the popup
        const hideOverlayLoading = () => {
            overlayLoading.classList.remove('flex');
            overlayLoading.classList.add('hidden');
        }

        // Close popup on clicking the close button
        closeLoading?.addEventListener('click', () => {
            hideOverlayLoading();
        });

        // Close popup when clicking outside of the popup content
        overlayLoading.addEventListener('click', (event) => {
            if (event.target === overlayLoading) { // Check if the click is on the overlay
                hideOverlayLoading(); // Hide the popup
            }
        });
    });
</script>