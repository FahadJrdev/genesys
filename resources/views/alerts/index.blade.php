<x-app-layout>
    <div class="flex flex-col space-y-6 items-center justify-center py-2 h-screen">
        <div class="bg-white dark:bg-tertiaryBg rounded-lg shadow-lg py-6 px-4 w-full max-w-2xl relative">
            <!-- Title (Optional) -->
            <div class="bg-light-secondaryBg dark:bg-black p-2 w-full max-w-2xl rounded absolute top-[-5px] left-0 shadow">
                <h2 class="text-xl font-semibold p-2">Alerts</h2>
            </div>

            <!-- Dynamic content -->
            <div class="popup-body mt-6 py-8">
                <!-- Icon -->
                <div class="flex items-center justify-center mb-4">
                    <svg class="fill-brandTertiary" width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M62.7966 42.2034L56.875 36.2819V28.4375C56.8682 23.0165 54.8516 17.7906 51.2151 13.7703C47.5787 9.74994 42.5806 7.22079 37.1875 6.67188V2.1875H32.8125V6.67188C27.4194 7.22079 22.4214 9.74994 18.7849 13.7703C15.1484 17.7906 13.1318 23.0165 13.125 28.4375V36.2819L7.20344 42.2034C6.79317 42.6136 6.56262 43.1699 6.5625 43.75V50.3125C6.5625 50.8927 6.79297 51.4491 7.2032 51.8593C7.61344 52.2695 8.16984 52.5 8.75 52.5H24.0625V54.6875C24.0625 57.5883 25.2148 60.3703 27.266 62.4215C29.3172 64.4727 32.0992 65.625 35 65.625C37.9008 65.625 40.6828 64.4727 42.734 62.4215C44.7852 60.3703 45.9375 57.5883 45.9375 54.6875V52.5H61.25C61.8302 52.5 62.3866 52.2695 62.7968 51.8593C63.207 51.4491 63.4375 50.8927 63.4375 50.3125V43.75C63.4374 43.1699 63.2068 42.6136 62.7966 42.2034ZM41.5625 54.6875C41.5625 56.428 40.8711 58.0972 39.6404 59.3279C38.4097 60.5586 36.7405 61.25 35 61.25C33.2595 61.25 31.5903 60.5586 30.3596 59.3279C29.1289 58.0972 28.4375 56.428 28.4375 54.6875V52.5H41.5625V54.6875Z"/>
                    </svg>
                </div>
                <!-- Message -->
                <p class="text-center text-lg mb-2 font-bold">You haven't set any alerts yet</p>
                <p class="text-sm mb-2 font-bold flex flex-col sm:flex-row items-center justify-center space-y-1 sm:space-x-1">
                    <span>To set price alerts for a pair,</span>
                    <!-- Button -->
                    <button class="flex items-center justify-center space-x-1 bg-brandTertiary hover:bg-hoverBrand font-semibold py-1 px-2 rounded-lg">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.0303 14.9697L20 12.9395V10.25C19.9977 8.39138 19.3063 6.59964 18.0595 5.22124C16.8127 3.84284 15.0991 2.9757 13.25 2.7875V1.25H11.75V2.7875C9.90093 2.9757 8.18732 3.84284 6.94053 5.22124C5.69373 6.59964 5.00233 8.39138 5 10.25V12.9395L2.96975 14.9697C2.82909 15.1104 2.75004 15.3011 2.75 15.5V17.75C2.75 17.9489 2.82902 18.1397 2.96967 18.2803C3.11032 18.421 3.30109 18.5 3.5 18.5H8.75V19.25C8.75 20.2446 9.14509 21.1984 9.84835 21.9016C10.5516 22.6049 11.5054 23 12.5 23C13.4946 23 14.4484 22.6049 15.1517 21.9016C15.8549 21.1984 16.25 20.2446 16.25 19.25V18.5H21.5C21.6989 18.5 21.8897 18.421 22.0303 18.2803C22.171 18.1397 22.25 17.9489 22.25 17.75V15.5C22.25 15.3011 22.1709 15.1104 22.0303 14.9697ZM14.75 19.25C14.75 19.8467 14.5129 20.419 14.091 20.841C13.669 21.2629 13.0967 21.5 12.5 21.5C11.9033 21.5 11.331 21.2629 10.909 20.841C10.4871 20.419 10.25 19.8467 10.25 19.25V18.5H14.75V19.25Z"/>
                        </svg>
                        <span>Alerts</span>
                    </button>
                    <span>click the button on the pair detail screen</span>
                </p>
            </div>
        </div>
        <div class="bg-light-tertiaryBg dark:bg-tertiaryBg rounded-lg shadow-lg py-6 px-4 w-full max-w-2xl relative">
            <!-- Title (Optional) -->
            <div class="bg-white dark:bg-black p-2 w-full max-w-2xl rounded absolute top-[-5px] left-0 shadow">
                <h2 class="text-xl font-semibold p-2">Manage price alerts</h2>
            </div>

            <!-- Dynamic content -->
            <div class="popup-body mt-6 py-8">
                <p class="text-center text-sm my-4 font-bold">To set price alerts please enable <span class="text-[#1877F2] underline"><a href="#">browser notifications</a></span> for DEX Screener first:</p>
                <!-- Button -->
                <button class="mx-auto mt-12 flex items-center justify-center space-x-1 bg-brandTertiary hover:bg-hoverBrand font-semibold py-3 px-6 rounded-lg">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.0303 14.9697L20 12.9395V10.25C19.9977 8.39138 19.3063 6.59964 18.0595 5.22124C16.8127 3.84284 15.0991 2.9757 13.25 2.7875V1.25H11.75V2.7875C9.90093 2.9757 8.18732 3.84284 6.94053 5.22124C5.69373 6.59964 5.00233 8.39138 5 10.25V12.9395L2.96975 14.9697C2.82909 15.1104 2.75004 15.3011 2.75 15.5V17.75C2.75 17.9489 2.82902 18.1397 2.96967 18.2803C3.11032 18.421 3.30109 18.5 3.5 18.5H8.75V19.25C8.75 20.2446 9.14509 21.1984 9.84835 21.9016C10.5516 22.6049 11.5054 23 12.5 23C13.4946 23 14.4484 22.6049 15.1517 21.9016C15.8549 21.1984 16.25 20.2446 16.25 19.25V18.5H21.5C21.6989 18.5 21.8897 18.421 22.0303 18.2803C22.171 18.1397 22.25 17.9489 22.25 17.75V15.5C22.25 15.3011 22.1709 15.1104 22.0303 14.9697ZM14.75 19.25C14.75 19.8467 14.5129 20.419 14.091 20.841C13.669 21.2629 13.0967 21.5 12.5 21.5C11.9033 21.5 11.331 21.2629 10.909 20.841C10.4871 20.419 10.25 19.8467 10.25 19.25V18.5H14.75V19.25Z"/>
                    </svg>
                    <span>Enable notifications</span>
                </button>
            </div>
        </div>
    </div>
</x-app-layout>