@props(['visibilityClass' => 'hidden', 'title' => null, 'closeButton' => true])

<div class="fixed inset-0 bg-light-primaryBg/70 dark:bg-primaryBg/70 items-center justify-center z-50 {{ $visibilityClass }} transition-all" id="overlay-popup">
    <div class="bg-light-tertiaryBg dark:bg-tertiaryBg rounded-lg shadow-lg p-6 w-full max-w-md relative">
        <!-- Title (Optional) -->
        @if($title)
        <div class="bg-primaryBg p-2 w-full max-w-md rounded absolute top-[-5px] left-0 shadow">
            <h2 class="text-xl font-semibold">{{ $title }}</h2>
        </div>
        @endif

        <!-- Dynamic content -->
        <div class="popup-body mt-6">
            {{ $slot }}
        </div>

        <!-- Close Button -->
        @if($closeButton)
        <button id="close-popup" class="absolute top-0 right-2 text-gray-500 hover:text-gray-900 text-2xl">&times;</button>
        @endif
    </div>
</div>

<script>
    // popup-js
    document.addEventListener("DOMContentLoaded", function () {
        const overlay = document.getElementById('overlay-popup'); // Reference to the overlay
        const closePopUp = document.getElementById('close-popup');

        // Function to hide the popup
        const hideOverlayPopup = () => {
            overlay.classList.remove('flex');
            overlay.classList.add('hidden');
        }

        // Close popup on clicking the close button
        closePopUp?.addEventListener('click', () => {
            hideOverlayPopup();
        });

        // Close popup when clicking outside of the popup content
        overlay.addEventListener('click', (event) => {
            if (event.target === overlay) { // Check if the click is on the overlay
                hideOverlayPopup(); // Hide the popup
            }
        });
    });
</script>
