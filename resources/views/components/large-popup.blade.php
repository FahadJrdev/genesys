@props(['visibilityClass' => 'hidden', 'title' => null, 'closeButton' => true])

<div class="overlay-popup fixed inset-0 bg-light-primaryBg/70 dark:bg-primaryBg/70 items-center justify-center z-50 {{ $visibilityClass }} transition-all">
    <div class="bg-light-tertiaryBg dark:bg-tertiaryBg rounded-lg shadow-lg p-6 w-full max-w-5xl relative">
        <!-- Title (Optional) -->
        @if($title)
        <div class="bg-light-primaryBg dark:bg-primaryBg p-2 w-full max-w-5xl rounded absolute top-[-5px] left-0 shadow">
            <h2 class="text-xl font-semibold p-2">{{ $title }}</h2>
        </div>
        @endif

        <!-- Dynamic content -->
        <div class="popup-body mt-6">
            {{ $slot }}
        </div>

        <!-- Close Button -->
        @if($closeButton)
        <button class="close-popup absolute top-0 right-2 text-gray-500 hover:text-gray-900 text-2xl">&times;</button>
        @endif
        
    </div>
</div>

<script>
    // popup-js
    document.addEventListener("DOMContentLoaded", function () {
        const overlays = document.querySelectorAll('.overlay-popup'); // Reference to all overlays

        const hideOverlayPopup = (overlay) => {
            overlay.classList.remove('flex');
            overlay.classList.add('hidden');
        }

        // Loop through all overlays
        overlays.forEach(overlay => {
            // Close popup when clicking an element with 'close-pop' class
            document.addEventListener('click', (event) => {
                if (event.target.classList.contains('close-popup')) {
                    hideOverlayPopup(overlay); // Hide the corresponding overlay
                }
            });

            // Close popup when clicking outside of the popup content
            overlay.addEventListener('click', (event) => {
                if (event.target === overlay) {
                    hideOverlayPopup(overlay);
                }
            });
        });
    });

</script>
