<x-app-layout>
    <div class="bg-search-back-gradient relative rounded-tl rounded-tr">
        <input 
            type="text"
            placeholder="Search"
            class="w-full border-0 p-3 pl-11 rounded-tl rounded-tr bg-transparent placeholder-primaryFont focus:outline-none focus:ring-2 focus:ring-brand"
        />
        <div class="absolute top-1/2 left-2 flex space-x-3 translate-y-[-50%]">
            <svg class="stroke-primaryFont" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.0002 21.0002L16.6572 16.6572M16.6572 16.6572C17.4001 15.9143 17.9894 15.0324 18.3914 14.0618C18.7935 13.0911 19.0004 12.0508 19.0004 11.0002C19.0004 9.9496 18.7935 8.90929 18.3914 7.93866C17.9894 6.96803 17.4001 6.08609 16.6572 5.34321C15.9143 4.60032 15.0324 4.01103 14.0618 3.60898C13.0911 3.20693 12.0508 3 11.0002 3C9.9496 3 8.90929 3.20693 7.93866 3.60898C6.96803 4.01103 6.08609 4.60032 5.34321 5.34321C3.84288 6.84354 3 8.87842 3 11.0002C3 13.122 3.84288 15.1569 5.34321 16.6572C6.84354 18.1575 8.87842 19.0004 11.0002 19.0004C13.122 19.0004 15.1569 18.1575 16.6572 16.6572Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </div>
    <div class="bg-light-tertiaryBg dark:bg-tertiaryBg mx-auto p-4">
        <!-- Search Input -->
        <div class="bg-[#D9D9D9] rounded p-5 mb-2"></div>
        <!-- Navigation Tabs -->
        <div class="my-4">
            <div class="navigation-tabs flex items-center justify-between overflow-y-hidden">
                <h2 class="text-3xl font-semibold hidden md:block">Moonshot</h2>
                <div class="trending-nav flex min-w-1/2 rounded border border-brand">
                    <button class="w-full flex items-center justify-center space-x-1 px-3 py-1 bg-brand border-r border-brand hover:bg-brand transition-all">
                        <svg class="fill-light-primaryFont dark:fill-primaryFont" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_497_18417)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.91979 0.716202C10.148 0.579831 10.408 0.50555 10.6738 0.500738C10.9397 0.495926 11.2022 0.560751 11.4352 0.688774C18.2701 3.86363 22.1392 10.4568 21.9009 15.9699C21.7981 18.2859 20.9701 20.4305 19.3638 21.9956C17.7558 23.5625 15.4466 24.4779 12.5238 24.4831C11.3425 24.5561 10.1585 24.3926 9.04127 24.0021C7.92402 23.6115 6.896 23.0018 6.01749 22.2088C5.13898 21.4157 4.42767 20.4552 3.92527 19.3835C3.42288 18.3119 3.13951 17.1508 3.09179 15.9682V15.9545C3.05689 14.5836 3.39809 13.2294 4.07836 12.0387C4.75862 10.848 5.75198 9.86632 6.95064 9.2002C7.05477 9.1424 7.1698 9.10692 7.2884 9.09605C7.407 9.08517 7.52657 9.09913 7.63947 9.13703C7.75238 9.17494 7.85615 9.23595 7.94416 9.31619C8.03217 9.39643 8.10249 9.49413 8.15064 9.60306C8.56785 10.5493 9.15268 11.4123 9.87693 12.1505C10.7238 11.0448 11.1146 9.61677 11.1026 8.04649C11.0889 6.17792 10.5026 4.17392 9.51864 2.4682C9.34773 2.18053 9.29406 1.83813 9.36874 1.51196C9.44342 1.18578 9.64073 0.900849 9.91979 0.716202Z"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_497_18417">
                            <rect width="24" height="24" fill="white" transform="translate(0.5 0.5)"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <span>Trending</span>
                    </button>
                    <button class="w-full flex items-center justify-center space-x-1 px-3 py-1 bg-transparent border-r border-brand hover:bg-brand transition-all">
                        <svg class="fill-light-primaryFont dark:fill-primaryFont" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.793 2.793C17.5 3.086 17.5 3.557 17.5 4.5V17.5C17.5 18.443 17.5 18.914 17.793 19.207C18.086 19.5 18.557 19.5 19.5 19.5C20.443 19.5 20.914 19.5 21.207 19.207C21.5 18.914 21.5 18.443 21.5 17.5V4.5C21.5 3.557 21.5 3.086 21.207 2.793C20.914 2.5 20.443 2.5 19.5 2.5C18.557 2.5 18.086 2.5 17.793 2.793ZM10.5 7.5C10.5 6.557 10.5 6.086 10.793 5.793C11.086 5.5 11.557 5.5 12.5 5.5C13.443 5.5 13.914 5.5 14.207 5.793C14.5 6.086 14.5 6.557 14.5 7.5V17.5C14.5 18.443 14.5 18.914 14.207 19.207C13.914 19.5 13.443 19.5 12.5 19.5C11.557 19.5 11.086 19.5 10.793 19.207C10.5 18.914 10.5 18.443 10.5 17.5V7.5ZM3.793 9.793C3.5 10.086 3.5 10.557 3.5 11.5V17.5C3.5 18.443 3.5 18.914 3.793 19.207C4.086 19.5 4.557 19.5 5.5 19.5C6.443 19.5 6.914 19.5 7.207 19.207C7.5 18.914 7.5 18.443 7.5 17.5V11.5C7.5 10.557 7.5 10.086 7.207 9.793C6.914 9.5 6.443 9.5 5.5 9.5C4.557 9.5 4.086 9.5 3.793 9.793ZM3.5 21.75C3.30109 21.75 3.11032 21.829 2.96967 21.9697C2.82902 22.1103 2.75 22.3011 2.75 22.5C2.75 22.6989 2.82902 22.8897 2.96967 23.0303C3.11032 23.171 3.30109 23.25 3.5 23.25H21.5C21.6989 23.25 21.8897 23.171 22.0303 23.0303C22.171 22.8897 22.25 22.6989 22.25 22.5C22.25 22.3011 22.171 22.1103 22.0303 21.9697C21.8897 21.829 21.6989 21.75 21.5 21.75H3.5Z"/>
                        </svg>
                        <span>Top</span>
                    </button>
                    <button class="w-full flex items-center justify-center space-x-1 px-3 py-1 bg-transparent border-r border-brand hover:bg-brand transition-all">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_497_18425)">
                            <path d="M1.914 16.9322L0.5 15.5182L7.571 8.4472L13.935 14.8112L18.178 10.5682L16.435 8.8262L23.127 7.0332L21.334 13.7252L19.592 11.9832L13.935 17.6392L7.571 11.2752L1.914 16.9322Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_497_18425">
                            <rect width="24" height="24" fill="white" transform="translate(0.5 0.5)"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <span>Rising</span>
                    </button>
                    <button class="w-full flex items-center justify-center space-x-1 px-3 py-1 bg-transparent border-r border-brand hover:bg-brand transition-all">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_497_18429)">
                            <path d="M24 2C24 7.325 20.0344 11.7266 14.8969 12.4062C14.5641 9.90312 13.4625 7.64375 11.8359 5.87656C13.6313 2.67031 17.0625 0.5 21 0.5H22.5C23.3297 0.5 24 1.17031 24 2ZM0 5C0 4.17031 0.670312 3.5 1.5 3.5H3C8.79844 3.5 13.5 8.20156 13.5 14V23C13.5 23.8297 12.8297 24.5 12 24.5C11.1703 24.5 10.5 23.8297 10.5 23V15.5C4.70156 15.5 0 10.7984 0 5Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_497_18429">
                            <rect width="24" height="24" fill="white" transform="translate(0 0.5)"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <span>New</span>
                    </button>
                    <button class="w-full flex items-center justify-center space-x-1 px-3 py-1 bg-transparent border-r border-brand hover:bg-brand transition-all">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_497_18433)">
                            <path d="M12.5002 0.5C12.2775 0.5 12.0638 0.5885 11.9063 0.74603C11.7487 0.903561 11.6602 1.11722 11.6602 1.34V22.82H9.36344C9.14066 22.82 8.927 22.9085 8.76947 23.066C8.61194 23.2236 8.52344 23.4372 8.52344 23.66C8.52344 23.8828 8.61194 24.0964 8.76947 24.254C8.927 24.4115 9.14066 24.5 9.36344 24.5H15.3634C15.5862 24.5 15.7999 24.4115 15.9574 24.254C16.1149 24.0964 16.2034 23.8828 16.2034 23.66C16.2034 23.4372 16.1149 23.2236 15.9574 23.066C15.7999 22.9085 15.5862 22.82 15.3634 22.82H13.3402V11.78H23.6602C23.883 11.78 24.0967 11.6915 24.2542 11.534C24.4117 11.3764 24.5002 11.1628 24.5002 10.94V1.34C24.5002 1.11722 24.4117 0.903561 24.2542 0.74603C24.0967 0.5885 23.883 0.5 23.6602 0.5H12.6202C12.5999 0.500062 12.5796 0.500862 12.5593 0.5024C12.5396 0.500908 12.5199 0.500107 12.5002 0.5ZM15.8122 2.18H18.1642V3.9632H20.5162V2.18H22.8202V3.9632H20.5162V6.31496H22.8202V8.66696H20.5162V10.1H18.1642V8.6672H15.8122V10.1H13.4602V8.6672H15.8122V6.31496H13.4602V3.96296H15.8122V2.18ZM15.8122 3.9632V6.31496H18.1642V3.96296L15.8122 3.9632ZM18.1642 6.31496V8.6672L20.5162 8.66696V6.31496H18.1642Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_497_18433">
                            <rect width="24" height="24" fill="white" transform="translate(0.5 0.5)"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <span>Finalized</span>
                    </button>
                </div>
                <button class="hidden md:flex items-center justify-end space-x-1 px-3 py-2">
                    <span>When Moon</span>
                    <svg class="stroke-primaryFont" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.66667 11.8332L10 8.49984L6.66667 5.1665" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
        <!-- Moonshot Section -->
        <div class="grid grid-cols-[repeat(auto-fill,minmax(100px,1fr))] sm:grid-cols-[repeat(auto-fill,minmax(200px,1fr))] md:grid-cols-[repeat(auto-fill,minmax(250px,1fr))] gap-4 mb-3">
            <!-- Card 1 -->
            <div class="flex flex-col md:flex-row items-center bg-card-gradient-bg p-4 rounded">
                <div class="h-24 w-24 mb-4 rounded">
                    <img src="{{ asset('assets/images/tokens/card-1.png') }}" alt="Logo" class="large-logo">
                </div> <!-- Placeholder Image -->
                <div class="info">
                    <h3 class="text-lg font-bold">Supercat</h3>
                    <p class="text-sm text-gray-400 flex items-center space-x-2">
                        <span>80%</span>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_497_6540)">
                            <path d="M16.1523 1.5C16.1523 5.05 13.5086 7.98438 10.0836 8.4375C9.86172 6.76875 9.12734 5.2625 8.04297 4.08437C9.23984 1.94687 11.5273 0.5 14.1523 0.5H15.1523C15.7055 0.5 16.1523 0.946875 16.1523 1.5ZM0.152344 3.5C0.152344 2.94688 0.599219 2.5 1.15234 2.5H2.15234C6.01797 2.5 9.15234 5.63438 9.15234 9.5V15.5C9.15234 16.0531 8.70547 16.5 8.15234 16.5C7.59922 16.5 7.15234 16.0531 7.15234 15.5V10.5C3.28672 10.5 0.152344 7.36562 0.152344 3.5Z" fill="#8C8C8C"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_497_6540">
                            <rect width="16" height="16" fill="white" transform="translate(0.152344 0.5)"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <span>7h</span>
                    </p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="flex flex-col md:flex-row items-center bg-card-gradient-bg p-4 rounded">
                <div class="h-24 w-24 mb-4 rounded">
                    <img src="{{ asset('assets/images/tokens/card-2.png') }}" alt="Logo" class="large-logo">
                </div> <!-- Placeholder Image -->
                <div class="info">
                    <h3 class="text-lg font-bold">Supercat</h3>
                    <p class="text-sm text-gray-400 flex items-center space-x-2">
                        <span>80%</span>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_497_6540)">
                            <path d="M16.1523 1.5C16.1523 5.05 13.5086 7.98438 10.0836 8.4375C9.86172 6.76875 9.12734 5.2625 8.04297 4.08437C9.23984 1.94687 11.5273 0.5 14.1523 0.5H15.1523C15.7055 0.5 16.1523 0.946875 16.1523 1.5ZM0.152344 3.5C0.152344 2.94688 0.599219 2.5 1.15234 2.5H2.15234C6.01797 2.5 9.15234 5.63438 9.15234 9.5V15.5C9.15234 16.0531 8.70547 16.5 8.15234 16.5C7.59922 16.5 7.15234 16.0531 7.15234 15.5V10.5C3.28672 10.5 0.152344 7.36562 0.152344 3.5Z" fill="#8C8C8C"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_497_6540">
                            <rect width="16" height="16" fill="white" transform="translate(0.152344 0.5)"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <span>7h</span>
                    </p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="flex flex-col md:flex-row items-center bg-card-gradient-bg p-4 rounded">
                <div class="h-24 w-24 mb-4 rounded">
                    <img src="{{ asset('assets/images/tokens/card-3.png') }}" alt="Logo" class="large-logo">
                </div> <!-- Placeholder Image -->
                <div class="info">
                    <h3 class="text-lg font-bold">Supercat</h3>
                    <p class="text-sm text-gray-400 flex items-center space-x-2">
                        <span>80%</span>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_497_6540)">
                            <path d="M16.1523 1.5C16.1523 5.05 13.5086 7.98438 10.0836 8.4375C9.86172 6.76875 9.12734 5.2625 8.04297 4.08437C9.23984 1.94687 11.5273 0.5 14.1523 0.5H15.1523C15.7055 0.5 16.1523 0.946875 16.1523 1.5ZM0.152344 3.5C0.152344 2.94688 0.599219 2.5 1.15234 2.5H2.15234C6.01797 2.5 9.15234 5.63438 9.15234 9.5V15.5C9.15234 16.0531 8.70547 16.5 8.15234 16.5C7.59922 16.5 7.15234 16.0531 7.15234 15.5V10.5C3.28672 10.5 0.152344 7.36562 0.152344 3.5Z" fill="#8C8C8C"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_497_6540">
                            <rect width="16" height="16" fill="white" transform="translate(0.152344 0.5)"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <span>7h</span>
                    </p>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="flex flex-col md:flex-row items-center bg-card-gradient-bg p-4 rounded">
                <div class="h-24 w-24 mb-4 rounded">
                    <img src="{{ asset('assets/images/tokens/card-4.png') }}" alt="Logo" class="large-logo">
                </div> <!-- Placeholder Image -->
                <div class="info">
                    <h3 class="text-lg font-bold">Supercat</h3>
                    <p class="text-sm text-gray-400 flex items-center space-x-2">
                        <span>80%</span>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_497_6540)">
                            <path d="M16.1523 1.5C16.1523 5.05 13.5086 7.98438 10.0836 8.4375C9.86172 6.76875 9.12734 5.2625 8.04297 4.08437C9.23984 1.94687 11.5273 0.5 14.1523 0.5H15.1523C15.7055 0.5 16.1523 0.946875 16.1523 1.5ZM0.152344 3.5C0.152344 2.94688 0.599219 2.5 1.15234 2.5H2.15234C6.01797 2.5 9.15234 5.63438 9.15234 9.5V15.5C9.15234 16.0531 8.70547 16.5 8.15234 16.5C7.59922 16.5 7.15234 16.0531 7.15234 15.5V10.5C3.28672 10.5 0.152344 7.36562 0.152344 3.5Z" fill="#8C8C8C"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_497_6540">
                            <rect width="16" height="16" fill="white" transform="translate(0.152344 0.5)"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <span>7h</span>
                    </p>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="flex flex-col md:flex-row items-center bg-card-gradient-bg p-4 rounded">
                <div class="h-24 w-24 mb-4 rounded">
                    <img src="{{ asset('assets/images/tokens/card-5.png') }}" alt="Logo" class="large-logo">
                </div> <!-- Placeholder Image -->
                <div class="info">
                    <h3 class="text-lg font-bold">Supercat</h3>
                    <p class="text-sm text-gray-400 flex items-center space-x-2">
                        <span>80%</span>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_497_6540)">
                            <path d="M16.1523 1.5C16.1523 5.05 13.5086 7.98438 10.0836 8.4375C9.86172 6.76875 9.12734 5.2625 8.04297 4.08437C9.23984 1.94687 11.5273 0.5 14.1523 0.5H15.1523C15.7055 0.5 16.1523 0.946875 16.1523 1.5ZM0.152344 3.5C0.152344 2.94688 0.599219 2.5 1.15234 2.5H2.15234C6.01797 2.5 9.15234 5.63438 9.15234 9.5V15.5C9.15234 16.0531 8.70547 16.5 8.15234 16.5C7.59922 16.5 7.15234 16.0531 7.15234 15.5V10.5C3.28672 10.5 0.152344 7.36562 0.152344 3.5Z" fill="#8C8C8C"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_497_6540">
                            <rect width="16" height="16" fill="white" transform="translate(0.152344 0.5)"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <span>7h</span>
                    </p>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="flex flex-col md:flex-row items-center bg-card-gradient-bg p-4 rounded">
                <div class="h-24 w-24 mb-4 rounded">
                    <img src="{{ asset('assets/images/tokens/card-6.png') }}" alt="Logo" class="large-logo">
                </div> <!-- Placeholder Image -->
                <div class="info">
                    <h3 class="text-lg font-bold">Supercat</h3>
                    <p class="text-sm text-gray-400 flex items-center space-x-2">
                        <span>80%</span>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_497_6540)">
                            <path d="M16.1523 1.5C16.1523 5.05 13.5086 7.98438 10.0836 8.4375C9.86172 6.76875 9.12734 5.2625 8.04297 4.08437C9.23984 1.94687 11.5273 0.5 14.1523 0.5H15.1523C15.7055 0.5 16.1523 0.946875 16.1523 1.5ZM0.152344 3.5C0.152344 2.94688 0.599219 2.5 1.15234 2.5H2.15234C6.01797 2.5 9.15234 5.63438 9.15234 9.5V15.5C9.15234 16.0531 8.70547 16.5 8.15234 16.5C7.59922 16.5 7.15234 16.0531 7.15234 15.5V10.5C3.28672 10.5 0.152344 7.36562 0.152344 3.5Z" fill="#8C8C8C"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_497_6540">
                            <rect width="16" height="16" fill="white" transform="translate(0.152344 0.5)"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <span>7h</span>
                    </p>
                </div>
            </div>
            <!-- Card 7 -->
            <div class="flex flex-col md:flex-row items-center bg-card-gradient-bg p-4 rounded">
                <div class="h-24 w-24 mb-4 rounded">
                    <img src="{{ asset('assets/images/tokens/card-7.png') }}" alt="Logo" class="large-logo">
                </div> <!-- Placeholder Image -->
                <div class="info">
                    <h3 class="text-lg font-bold">Supercat</h3>
                    <p class="text-sm text-gray-400 flex items-center space-x-2">
                        <span>80%</span>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_497_6540)">
                            <path d="M16.1523 1.5C16.1523 5.05 13.5086 7.98438 10.0836 8.4375C9.86172 6.76875 9.12734 5.2625 8.04297 4.08437C9.23984 1.94687 11.5273 0.5 14.1523 0.5H15.1523C15.7055 0.5 16.1523 0.946875 16.1523 1.5ZM0.152344 3.5C0.152344 2.94688 0.599219 2.5 1.15234 2.5H2.15234C6.01797 2.5 9.15234 5.63438 9.15234 9.5V15.5C9.15234 16.0531 8.70547 16.5 8.15234 16.5C7.59922 16.5 7.15234 16.0531 7.15234 15.5V10.5C3.28672 10.5 0.152344 7.36562 0.152344 3.5Z" fill="#8C8C8C"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_497_6540">
                            <rect width="16" height="16" fill="white" transform="translate(0.152344 0.5)"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <span>7h</span>
                    </p>
                </div>
            </div>
            <!-- Card 8 -->
            <div class="flex flex-col md:flex-row items-center bg-card-gradient-bg p-4 rounded">
                <div class="h-24 w-24 mb-4 rounded">
                    <img src="{{ asset('assets/images/tokens/card-8.png') }}" alt="Logo" class="large-logo">
                </div> <!-- Placeholder Image -->
                <div class="info">
                    <h3 class="text-lg font-bold">Supercat</h3>
                    <p class="text-sm text-gray-400 flex items-center space-x-2">
                        <span>80%</span>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_497_6540)">
                            <path d="M16.1523 1.5C16.1523 5.05 13.5086 7.98438 10.0836 8.4375C9.86172 6.76875 9.12734 5.2625 8.04297 4.08437C9.23984 1.94687 11.5273 0.5 14.1523 0.5H15.1523C15.7055 0.5 16.1523 0.946875 16.1523 1.5ZM0.152344 3.5C0.152344 2.94688 0.599219 2.5 1.15234 2.5H2.15234C6.01797 2.5 9.15234 5.63438 9.15234 9.5V15.5C9.15234 16.0531 8.70547 16.5 8.15234 16.5C7.59922 16.5 7.15234 16.0531 7.15234 15.5V10.5C3.28672 10.5 0.152344 7.36562 0.152344 3.5Z" fill="#8C8C8C"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_497_6540">
                            <rect width="16" height="16" fill="white" transform="translate(0.152344 0.5)"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <span>7h</span>
                    </p>
                </div>
            </div>
            <!-- Add more cards as shown in the design -->
        </div>
        <div class="show-more w-full flex justify-center items-center mb-5">
            <button class="flex justify-center items-center space-x-4">
                <span class="text-[#8C8C8C]">Show More</span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 10L12 15L17 10" stroke="#8C8C8C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
        <div class="more-title flex items-center justify-between mb-4">
            <h2 class="text-xl font-semibold">Recently Updated Token Info</h2>
            <button class="hidden md:flex items-center justify-end space-x-1 px-3 py-2">
                <span>Claim your spot here</span>
                <svg class="stroke-primaryFont" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.66667 11.8332L10 8.49984L6.66667 5.1665" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
        <!-- Recently Updated Token Info Section -->
        <div class="grid grid-cols-[repeat(auto-fill,minmax(100px,1fr))] sm:grid-cols-[repeat(auto-fill,minmax(200px,1fr))] md:grid-cols-[repeat(auto-fill,minmax(250px,1fr))] gap-4 mb-8">
            <!-- Card 1 -->
            <div class="flex flex-col md:flex-row items-center bg-card-gradient-bg p-4 rounded">
                <div class="w-24 rounded">
                    <img src="{{ asset('assets/images/tokens/card-3.png') }}" alt="Logo" class="large-logo">
                </div> <!-- Placeholder Image -->
                <div class="info flex flex-col space-y-2">
                    <h3 class="text-lg font-bold">Supercat</h3>
                    <p class="text-sm text-gray-400 flex items-center space-x-2">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="10" cy="10" r="10" fill="black"/>
                            <g clip-path="url(#clip0_497_5438)">
                            <path d="M14.9485 12.66L13.2977 14.4039C13.2618 14.4418 13.2184 14.472 13.1701 14.4926C13.1219 14.5133 13.0699 14.5239 13.0173 14.5239H5.19165C5.15431 14.5239 5.11778 14.5131 5.08655 14.493C5.05533 14.4728 5.03077 14.4441 5.01588 14.4103C5.001 14.3766 4.99644 14.3393 5.00278 14.3031C5.00911 14.2668 5.02605 14.2332 5.05153 14.2063L6.70357 12.4625C6.73937 12.4247 6.78264 12.3945 6.83073 12.3739C6.87883 12.3533 6.93071 12.3426 6.98318 12.3425H14.8084C14.8457 12.3425 14.8822 12.3532 14.9135 12.3734C14.9447 12.3936 14.9692 12.4223 14.9842 12.456C14.999 12.4897 15.0036 12.527 14.9972 12.5633C14.9909 12.5995 14.974 12.6331 14.9485 12.66ZM13.2977 9.14839C13.2618 9.11051 13.2184 9.0803 13.1701 9.05966C13.1219 9.03903 13.0699 9.02839 13.0173 9.02842H5.19165C5.15431 9.02842 5.11778 9.03916 5.08655 9.05933C5.05533 9.0795 5.03077 9.10821 5.01588 9.14194C5.001 9.17568 4.99644 9.21296 5.00278 9.24921C5.00911 9.28545 5.02605 9.31908 5.05153 9.34598L6.70357 11.0898C6.73937 11.1276 6.78264 11.1578 6.83073 11.1784C6.87883 11.199 6.93071 11.2097 6.98318 11.2098H14.8084C14.8457 11.2098 14.8822 11.1991 14.9135 11.1789C14.9447 11.1587 14.9692 11.13 14.9842 11.0963C14.999 11.0626 15.0036 11.0253 14.9972 10.989C14.9909 10.9528 14.974 10.9192 14.9485 10.8923L13.2977 9.14839ZM5.19165 7.89576H13.0173C13.0699 7.89578 13.1219 7.88515 13.1701 7.86451C13.2184 7.84387 13.2618 7.81366 13.2977 7.77578L14.9485 6.03192C14.974 6.00503 14.9909 5.97139 14.9972 5.93514C15.0036 5.8989 14.999 5.86162 14.9842 5.82789C14.9692 5.79415 14.9447 5.76544 14.9135 5.74527C14.8822 5.7251 14.8457 5.71436 14.8084 5.71436H6.98318C6.93071 5.71444 6.87883 5.72514 6.83073 5.74577C6.78264 5.76641 6.73937 5.79655 6.70357 5.83433L5.05195 7.5782C5.0265 7.60506 5.00957 7.63867 5.00322 7.67486C4.99687 7.71107 5.00139 7.74832 5.01622 7.78204C5.03105 7.81576 5.05555 7.84447 5.08671 7.86467C5.11787 7.88487 5.15434 7.89567 5.19165 7.89576Z" fill="url(#paint0_linear_497_5438)"/>
                            </g>
                            <defs>
                            <linearGradient id="paint0_linear_497_5438" x1="5.84412" y1="14.7338" x2="13.912" y2="5.50047" gradientUnits="userSpaceOnUse">
                            <stop offset="0.08" stop-color="#9945FF"/>
                            <stop offset="0.3" stop-color="#8752F3"/>
                            <stop offset="0.5" stop-color="#5497D5"/>
                            <stop offset="0.6" stop-color="#43B4CA"/>
                            <stop offset="0.72" stop-color="#28E0B9"/>
                            <stop offset="0.97" stop-color="#19FB9B"/>
                            </linearGradient>
                            <clipPath id="clip0_497_5438">
                            <rect width="10" height="8.80952" fill="white" transform="translate(5 5.71436)"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <span>Solana</span>
                    </p>
                    <div class="social-media flex items-center space-x-2">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_497_5444)">
                            <path d="M14.7442 10.0002C14.7418 9.2532 14.6617 8.50846 14.5053 7.778H16.5053C16.4028 7.47311 16.2784 7.17604 16.1331 6.88911H14.272C13.9223 5.72017 13.3796 4.61794 12.6664 3.628C12.2109 3.43644 11.7359 3.29487 11.2498 3.20577C12.227 4.25503 12.9644 5.50427 13.4109 6.86688H10.4164V3.11133H9.58309V6.87244H6.58865C7.03598 5.50735 7.77535 4.25612 8.75532 3.20577C8.27132 3.29347 7.79821 3.43317 7.34421 3.62244C6.62817 4.60823 6.08177 5.70667 5.72754 6.87244H3.85532C3.70732 7.1646 3.58105 7.46727 3.47754 7.778H5.49421C5.33778 8.50846 5.25772 9.2532 5.25532 10.0002C5.25699 10.8173 5.35017 11.6316 5.53309 12.428H3.56643C3.68073 12.7397 3.81815 13.0424 3.97754 13.3336H5.77198C6.11193 14.3979 6.61616 15.4027 7.26643 16.3113C7.732 16.5109 8.21832 16.6581 8.71643 16.7502C7.80959 15.7613 7.11227 14.5991 6.66643 13.3336H9.58865V16.8558H10.422V13.3336H13.3331C12.8856 14.5995 12.1864 15.7618 11.2775 16.7502C11.778 16.6549 12.2662 16.504 12.7331 16.3002C13.3823 15.395 13.8865 14.3941 14.2275 13.3336H16.0053C16.164 13.0477 16.3014 12.7506 16.4164 12.4447H14.4442C14.6359 11.6437 14.7365 10.8237 14.7442 10.0002ZM9.58309 12.428H6.39421C6.0033 10.899 5.98615 9.29836 6.34421 7.76133H9.58309V12.428ZM13.6053 12.428H10.4164V7.778H13.6553C13.815 8.50784 13.8932 9.25313 13.8886 10.0002C13.8938 10.818 13.7987 11.6334 13.6053 12.428Z" fill="white"/>
                            <path d="M10.0002 1.11133C8.24217 1.11133 6.52359 1.63265 5.06182 2.60938C3.60005 3.5861 2.46074 4.97435 1.78796 6.59859C1.11518 8.22282 0.93915 10.0101 1.28213 11.7344C1.62511 13.4586 2.47169 15.0425 3.71483 16.2856C4.95796 17.5287 6.54181 18.3753 8.26609 18.7183C9.99036 19.0613 11.7776 18.8853 13.4019 18.2125C15.0261 17.5397 16.4143 16.4004 17.3911 14.9386C18.3678 13.4768 18.8891 11.7583 18.8891 10.0002C18.8891 7.64274 17.9526 5.38181 16.2856 3.71482C14.6186 2.04783 12.3577 1.11133 10.0002 1.11133ZM10.0002 17.778C8.46192 17.778 6.95817 17.3218 5.67912 16.4672C4.40007 15.6126 3.40317 14.3978 2.81449 12.9766C2.22581 11.5554 2.07178 9.99159 2.37189 8.48285C2.672 6.97411 3.41276 5.58824 4.5005 4.5005C5.58824 3.41276 6.97411 2.67199 8.48285 2.37189C9.99159 2.07178 11.5554 2.22581 12.9766 2.81449C14.3979 3.40317 15.6126 4.40007 16.4672 5.67912C17.3218 6.95816 17.778 8.46192 17.778 10.0002C17.778 12.063 16.9586 14.0413 15.4999 15.4999C14.0413 16.9586 12.063 17.778 10.0002 17.778Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_497_5444">
                            <rect width="20" height="20" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_497_5448)">
                            <path d="M18.3764 1.77434L0.657315 8.64254C-0.0557314 8.96238 -0.296903 9.60289 0.484972 9.95051L5.03067 11.4026L16.0216 4.57484C16.6217 4.14621 17.2361 4.26051 16.7074 4.73203L7.26771 13.3232L6.97118 16.959C7.24583 17.5204 7.74872 17.523 8.0695 17.244L10.6811 14.76L15.154 18.1267C16.1929 18.7449 16.7581 18.346 16.9817 17.2129L19.9154 3.24922C20.22 1.85449 19.7006 1.23996 18.3764 1.77434Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_497_5448">
                            <rect width="20" height="20" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.496 7.77734L17.2335 0.666504H14.6727L10.2935 6.09734L6.4085 0.666504H0.833496L7.3385 9.75817L1.22516 17.3332H3.78683L8.541 11.4415L12.7585 17.3332H18.3335L11.496 7.77734ZM9.51266 10.2357L8.3085 8.55317L3.6335 2.02234H5.5585L9.33183 7.2865L10.5343 8.96984L15.5493 15.9773H13.6243L9.51266 10.2357Z" fill="white"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row items-center bg-card-gradient-bg p-4 rounded">
                <div class="w-24 rounded">
                    <img src="{{ asset('assets/images/tokens/card-3.png') }}" alt="Logo" class="large-logo">
                </div> <!-- Placeholder Image -->
                <div class="info flex flex-col space-y-2">
                    <h3 class="text-lg font-bold">Supercat</h3>
                    <p class="text-sm text-gray-400 flex items-center space-x-2">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="10" cy="10" r="10" fill="black"/>
                            <g clip-path="url(#clip0_497_5438)">
                            <path d="M14.9485 12.66L13.2977 14.4039C13.2618 14.4418 13.2184 14.472 13.1701 14.4926C13.1219 14.5133 13.0699 14.5239 13.0173 14.5239H5.19165C5.15431 14.5239 5.11778 14.5131 5.08655 14.493C5.05533 14.4728 5.03077 14.4441 5.01588 14.4103C5.001 14.3766 4.99644 14.3393 5.00278 14.3031C5.00911 14.2668 5.02605 14.2332 5.05153 14.2063L6.70357 12.4625C6.73937 12.4247 6.78264 12.3945 6.83073 12.3739C6.87883 12.3533 6.93071 12.3426 6.98318 12.3425H14.8084C14.8457 12.3425 14.8822 12.3532 14.9135 12.3734C14.9447 12.3936 14.9692 12.4223 14.9842 12.456C14.999 12.4897 15.0036 12.527 14.9972 12.5633C14.9909 12.5995 14.974 12.6331 14.9485 12.66ZM13.2977 9.14839C13.2618 9.11051 13.2184 9.0803 13.1701 9.05966C13.1219 9.03903 13.0699 9.02839 13.0173 9.02842H5.19165C5.15431 9.02842 5.11778 9.03916 5.08655 9.05933C5.05533 9.0795 5.03077 9.10821 5.01588 9.14194C5.001 9.17568 4.99644 9.21296 5.00278 9.24921C5.00911 9.28545 5.02605 9.31908 5.05153 9.34598L6.70357 11.0898C6.73937 11.1276 6.78264 11.1578 6.83073 11.1784C6.87883 11.199 6.93071 11.2097 6.98318 11.2098H14.8084C14.8457 11.2098 14.8822 11.1991 14.9135 11.1789C14.9447 11.1587 14.9692 11.13 14.9842 11.0963C14.999 11.0626 15.0036 11.0253 14.9972 10.989C14.9909 10.9528 14.974 10.9192 14.9485 10.8923L13.2977 9.14839ZM5.19165 7.89576H13.0173C13.0699 7.89578 13.1219 7.88515 13.1701 7.86451C13.2184 7.84387 13.2618 7.81366 13.2977 7.77578L14.9485 6.03192C14.974 6.00503 14.9909 5.97139 14.9972 5.93514C15.0036 5.8989 14.999 5.86162 14.9842 5.82789C14.9692 5.79415 14.9447 5.76544 14.9135 5.74527C14.8822 5.7251 14.8457 5.71436 14.8084 5.71436H6.98318C6.93071 5.71444 6.87883 5.72514 6.83073 5.74577C6.78264 5.76641 6.73937 5.79655 6.70357 5.83433L5.05195 7.5782C5.0265 7.60506 5.00957 7.63867 5.00322 7.67486C4.99687 7.71107 5.00139 7.74832 5.01622 7.78204C5.03105 7.81576 5.05555 7.84447 5.08671 7.86467C5.11787 7.88487 5.15434 7.89567 5.19165 7.89576Z" fill="url(#paint0_linear_497_5438)"/>
                            </g>
                            <defs>
                            <linearGradient id="paint0_linear_497_5438" x1="5.84412" y1="14.7338" x2="13.912" y2="5.50047" gradientUnits="userSpaceOnUse">
                            <stop offset="0.08" stop-color="#9945FF"/>
                            <stop offset="0.3" stop-color="#8752F3"/>
                            <stop offset="0.5" stop-color="#5497D5"/>
                            <stop offset="0.6" stop-color="#43B4CA"/>
                            <stop offset="0.72" stop-color="#28E0B9"/>
                            <stop offset="0.97" stop-color="#19FB9B"/>
                            </linearGradient>
                            <clipPath id="clip0_497_5438">
                            <rect width="10" height="8.80952" fill="white" transform="translate(5 5.71436)"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <span>Solana</span>
                    </p>
                    <div class="social-media flex items-center space-x-2">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_497_5444)">
                            <path d="M14.7442 10.0002C14.7418 9.2532 14.6617 8.50846 14.5053 7.778H16.5053C16.4028 7.47311 16.2784 7.17604 16.1331 6.88911H14.272C13.9223 5.72017 13.3796 4.61794 12.6664 3.628C12.2109 3.43644 11.7359 3.29487 11.2498 3.20577C12.227 4.25503 12.9644 5.50427 13.4109 6.86688H10.4164V3.11133H9.58309V6.87244H6.58865C7.03598 5.50735 7.77535 4.25612 8.75532 3.20577C8.27132 3.29347 7.79821 3.43317 7.34421 3.62244C6.62817 4.60823 6.08177 5.70667 5.72754 6.87244H3.85532C3.70732 7.1646 3.58105 7.46727 3.47754 7.778H5.49421C5.33778 8.50846 5.25772 9.2532 5.25532 10.0002C5.25699 10.8173 5.35017 11.6316 5.53309 12.428H3.56643C3.68073 12.7397 3.81815 13.0424 3.97754 13.3336H5.77198C6.11193 14.3979 6.61616 15.4027 7.26643 16.3113C7.732 16.5109 8.21832 16.6581 8.71643 16.7502C7.80959 15.7613 7.11227 14.5991 6.66643 13.3336H9.58865V16.8558H10.422V13.3336H13.3331C12.8856 14.5995 12.1864 15.7618 11.2775 16.7502C11.778 16.6549 12.2662 16.504 12.7331 16.3002C13.3823 15.395 13.8865 14.3941 14.2275 13.3336H16.0053C16.164 13.0477 16.3014 12.7506 16.4164 12.4447H14.4442C14.6359 11.6437 14.7365 10.8237 14.7442 10.0002ZM9.58309 12.428H6.39421C6.0033 10.899 5.98615 9.29836 6.34421 7.76133H9.58309V12.428ZM13.6053 12.428H10.4164V7.778H13.6553C13.815 8.50784 13.8932 9.25313 13.8886 10.0002C13.8938 10.818 13.7987 11.6334 13.6053 12.428Z" fill="white"/>
                            <path d="M10.0002 1.11133C8.24217 1.11133 6.52359 1.63265 5.06182 2.60938C3.60005 3.5861 2.46074 4.97435 1.78796 6.59859C1.11518 8.22282 0.93915 10.0101 1.28213 11.7344C1.62511 13.4586 2.47169 15.0425 3.71483 16.2856C4.95796 17.5287 6.54181 18.3753 8.26609 18.7183C9.99036 19.0613 11.7776 18.8853 13.4019 18.2125C15.0261 17.5397 16.4143 16.4004 17.3911 14.9386C18.3678 13.4768 18.8891 11.7583 18.8891 10.0002C18.8891 7.64274 17.9526 5.38181 16.2856 3.71482C14.6186 2.04783 12.3577 1.11133 10.0002 1.11133ZM10.0002 17.778C8.46192 17.778 6.95817 17.3218 5.67912 16.4672C4.40007 15.6126 3.40317 14.3978 2.81449 12.9766C2.22581 11.5554 2.07178 9.99159 2.37189 8.48285C2.672 6.97411 3.41276 5.58824 4.5005 4.5005C5.58824 3.41276 6.97411 2.67199 8.48285 2.37189C9.99159 2.07178 11.5554 2.22581 12.9766 2.81449C14.3979 3.40317 15.6126 4.40007 16.4672 5.67912C17.3218 6.95816 17.778 8.46192 17.778 10.0002C17.778 12.063 16.9586 14.0413 15.4999 15.4999C14.0413 16.9586 12.063 17.778 10.0002 17.778Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_497_5444">
                            <rect width="20" height="20" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_497_5448)">
                            <path d="M18.3764 1.77434L0.657315 8.64254C-0.0557314 8.96238 -0.296903 9.60289 0.484972 9.95051L5.03067 11.4026L16.0216 4.57484C16.6217 4.14621 17.2361 4.26051 16.7074 4.73203L7.26771 13.3232L6.97118 16.959C7.24583 17.5204 7.74872 17.523 8.0695 17.244L10.6811 14.76L15.154 18.1267C16.1929 18.7449 16.7581 18.346 16.9817 17.2129L19.9154 3.24922C20.22 1.85449 19.7006 1.23996 18.3764 1.77434Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_497_5448">
                            <rect width="20" height="20" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.496 7.77734L17.2335 0.666504H14.6727L10.2935 6.09734L6.4085 0.666504H0.833496L7.3385 9.75817L1.22516 17.3332H3.78683L8.541 11.4415L12.7585 17.3332H18.3335L11.496 7.77734ZM9.51266 10.2357L8.3085 8.55317L3.6335 2.02234H5.5585L9.33183 7.2865L10.5343 8.96984L15.5493 15.9773H13.6243L9.51266 10.2357Z" fill="white"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row items-center bg-card-gradient-bg p-4 rounded">
                <div class="w-24 rounded">
                    <img src="{{ asset('assets/images/tokens/card-3.png') }}" alt="Logo" class="large-logo">
                </div> <!-- Placeholder Image -->
                <div class="info flex flex-col space-y-2">
                    <h3 class="text-lg font-bold">Supercat</h3>
                    <p class="text-sm text-gray-400 flex items-center space-x-2">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="10" cy="10" r="10" fill="black"/>
                            <g clip-path="url(#clip0_497_5438)">
                            <path d="M14.9485 12.66L13.2977 14.4039C13.2618 14.4418 13.2184 14.472 13.1701 14.4926C13.1219 14.5133 13.0699 14.5239 13.0173 14.5239H5.19165C5.15431 14.5239 5.11778 14.5131 5.08655 14.493C5.05533 14.4728 5.03077 14.4441 5.01588 14.4103C5.001 14.3766 4.99644 14.3393 5.00278 14.3031C5.00911 14.2668 5.02605 14.2332 5.05153 14.2063L6.70357 12.4625C6.73937 12.4247 6.78264 12.3945 6.83073 12.3739C6.87883 12.3533 6.93071 12.3426 6.98318 12.3425H14.8084C14.8457 12.3425 14.8822 12.3532 14.9135 12.3734C14.9447 12.3936 14.9692 12.4223 14.9842 12.456C14.999 12.4897 15.0036 12.527 14.9972 12.5633C14.9909 12.5995 14.974 12.6331 14.9485 12.66ZM13.2977 9.14839C13.2618 9.11051 13.2184 9.0803 13.1701 9.05966C13.1219 9.03903 13.0699 9.02839 13.0173 9.02842H5.19165C5.15431 9.02842 5.11778 9.03916 5.08655 9.05933C5.05533 9.0795 5.03077 9.10821 5.01588 9.14194C5.001 9.17568 4.99644 9.21296 5.00278 9.24921C5.00911 9.28545 5.02605 9.31908 5.05153 9.34598L6.70357 11.0898C6.73937 11.1276 6.78264 11.1578 6.83073 11.1784C6.87883 11.199 6.93071 11.2097 6.98318 11.2098H14.8084C14.8457 11.2098 14.8822 11.1991 14.9135 11.1789C14.9447 11.1587 14.9692 11.13 14.9842 11.0963C14.999 11.0626 15.0036 11.0253 14.9972 10.989C14.9909 10.9528 14.974 10.9192 14.9485 10.8923L13.2977 9.14839ZM5.19165 7.89576H13.0173C13.0699 7.89578 13.1219 7.88515 13.1701 7.86451C13.2184 7.84387 13.2618 7.81366 13.2977 7.77578L14.9485 6.03192C14.974 6.00503 14.9909 5.97139 14.9972 5.93514C15.0036 5.8989 14.999 5.86162 14.9842 5.82789C14.9692 5.79415 14.9447 5.76544 14.9135 5.74527C14.8822 5.7251 14.8457 5.71436 14.8084 5.71436H6.98318C6.93071 5.71444 6.87883 5.72514 6.83073 5.74577C6.78264 5.76641 6.73937 5.79655 6.70357 5.83433L5.05195 7.5782C5.0265 7.60506 5.00957 7.63867 5.00322 7.67486C4.99687 7.71107 5.00139 7.74832 5.01622 7.78204C5.03105 7.81576 5.05555 7.84447 5.08671 7.86467C5.11787 7.88487 5.15434 7.89567 5.19165 7.89576Z" fill="url(#paint0_linear_497_5438)"/>
                            </g>
                            <defs>
                            <linearGradient id="paint0_linear_497_5438" x1="5.84412" y1="14.7338" x2="13.912" y2="5.50047" gradientUnits="userSpaceOnUse">
                            <stop offset="0.08" stop-color="#9945FF"/>
                            <stop offset="0.3" stop-color="#8752F3"/>
                            <stop offset="0.5" stop-color="#5497D5"/>
                            <stop offset="0.6" stop-color="#43B4CA"/>
                            <stop offset="0.72" stop-color="#28E0B9"/>
                            <stop offset="0.97" stop-color="#19FB9B"/>
                            </linearGradient>
                            <clipPath id="clip0_497_5438">
                            <rect width="10" height="8.80952" fill="white" transform="translate(5 5.71436)"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <span>Solana</span>
                    </p>
                    <div class="social-media flex items-center space-x-2">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_497_5444)">
                            <path d="M14.7442 10.0002C14.7418 9.2532 14.6617 8.50846 14.5053 7.778H16.5053C16.4028 7.47311 16.2784 7.17604 16.1331 6.88911H14.272C13.9223 5.72017 13.3796 4.61794 12.6664 3.628C12.2109 3.43644 11.7359 3.29487 11.2498 3.20577C12.227 4.25503 12.9644 5.50427 13.4109 6.86688H10.4164V3.11133H9.58309V6.87244H6.58865C7.03598 5.50735 7.77535 4.25612 8.75532 3.20577C8.27132 3.29347 7.79821 3.43317 7.34421 3.62244C6.62817 4.60823 6.08177 5.70667 5.72754 6.87244H3.85532C3.70732 7.1646 3.58105 7.46727 3.47754 7.778H5.49421C5.33778 8.50846 5.25772 9.2532 5.25532 10.0002C5.25699 10.8173 5.35017 11.6316 5.53309 12.428H3.56643C3.68073 12.7397 3.81815 13.0424 3.97754 13.3336H5.77198C6.11193 14.3979 6.61616 15.4027 7.26643 16.3113C7.732 16.5109 8.21832 16.6581 8.71643 16.7502C7.80959 15.7613 7.11227 14.5991 6.66643 13.3336H9.58865V16.8558H10.422V13.3336H13.3331C12.8856 14.5995 12.1864 15.7618 11.2775 16.7502C11.778 16.6549 12.2662 16.504 12.7331 16.3002C13.3823 15.395 13.8865 14.3941 14.2275 13.3336H16.0053C16.164 13.0477 16.3014 12.7506 16.4164 12.4447H14.4442C14.6359 11.6437 14.7365 10.8237 14.7442 10.0002ZM9.58309 12.428H6.39421C6.0033 10.899 5.98615 9.29836 6.34421 7.76133H9.58309V12.428ZM13.6053 12.428H10.4164V7.778H13.6553C13.815 8.50784 13.8932 9.25313 13.8886 10.0002C13.8938 10.818 13.7987 11.6334 13.6053 12.428Z" fill="white"/>
                            <path d="M10.0002 1.11133C8.24217 1.11133 6.52359 1.63265 5.06182 2.60938C3.60005 3.5861 2.46074 4.97435 1.78796 6.59859C1.11518 8.22282 0.93915 10.0101 1.28213 11.7344C1.62511 13.4586 2.47169 15.0425 3.71483 16.2856C4.95796 17.5287 6.54181 18.3753 8.26609 18.7183C9.99036 19.0613 11.7776 18.8853 13.4019 18.2125C15.0261 17.5397 16.4143 16.4004 17.3911 14.9386C18.3678 13.4768 18.8891 11.7583 18.8891 10.0002C18.8891 7.64274 17.9526 5.38181 16.2856 3.71482C14.6186 2.04783 12.3577 1.11133 10.0002 1.11133ZM10.0002 17.778C8.46192 17.778 6.95817 17.3218 5.67912 16.4672C4.40007 15.6126 3.40317 14.3978 2.81449 12.9766C2.22581 11.5554 2.07178 9.99159 2.37189 8.48285C2.672 6.97411 3.41276 5.58824 4.5005 4.5005C5.58824 3.41276 6.97411 2.67199 8.48285 2.37189C9.99159 2.07178 11.5554 2.22581 12.9766 2.81449C14.3979 3.40317 15.6126 4.40007 16.4672 5.67912C17.3218 6.95816 17.778 8.46192 17.778 10.0002C17.778 12.063 16.9586 14.0413 15.4999 15.4999C14.0413 16.9586 12.063 17.778 10.0002 17.778Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_497_5444">
                            <rect width="20" height="20" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_497_5448)">
                            <path d="M18.3764 1.77434L0.657315 8.64254C-0.0557314 8.96238 -0.296903 9.60289 0.484972 9.95051L5.03067 11.4026L16.0216 4.57484C16.6217 4.14621 17.2361 4.26051 16.7074 4.73203L7.26771 13.3232L6.97118 16.959C7.24583 17.5204 7.74872 17.523 8.0695 17.244L10.6811 14.76L15.154 18.1267C16.1929 18.7449 16.7581 18.346 16.9817 17.2129L19.9154 3.24922C20.22 1.85449 19.7006 1.23996 18.3764 1.77434Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_497_5448">
                            <rect width="20" height="20" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.496 7.77734L17.2335 0.666504H14.6727L10.2935 6.09734L6.4085 0.666504H0.833496L7.3385 9.75817L1.22516 17.3332H3.78683L8.541 11.4415L12.7585 17.3332H18.3335L11.496 7.77734ZM9.51266 10.2357L8.3085 8.55317L3.6335 2.02234H5.5585L9.33183 7.2865L10.5343 8.96984L15.5493 15.9773H13.6243L9.51266 10.2357Z" fill="white"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row items-center bg-card-gradient-bg p-4 rounded">
                <div class="w-24 rounded">
                    <img src="{{ asset('assets/images/tokens/card-3.png') }}" alt="Logo" class="large-logo">
                </div> <!-- Placeholder Image -->
                <div class="info flex flex-col space-y-2">
                    <h3 class="text-lg font-bold">Supercat</h3>
                    <p class="text-sm text-gray-400 flex items-center space-x-2">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="10" cy="10" r="10" fill="black"/>
                            <g clip-path="url(#clip0_497_5438)">
                            <path d="M14.9485 12.66L13.2977 14.4039C13.2618 14.4418 13.2184 14.472 13.1701 14.4926C13.1219 14.5133 13.0699 14.5239 13.0173 14.5239H5.19165C5.15431 14.5239 5.11778 14.5131 5.08655 14.493C5.05533 14.4728 5.03077 14.4441 5.01588 14.4103C5.001 14.3766 4.99644 14.3393 5.00278 14.3031C5.00911 14.2668 5.02605 14.2332 5.05153 14.2063L6.70357 12.4625C6.73937 12.4247 6.78264 12.3945 6.83073 12.3739C6.87883 12.3533 6.93071 12.3426 6.98318 12.3425H14.8084C14.8457 12.3425 14.8822 12.3532 14.9135 12.3734C14.9447 12.3936 14.9692 12.4223 14.9842 12.456C14.999 12.4897 15.0036 12.527 14.9972 12.5633C14.9909 12.5995 14.974 12.6331 14.9485 12.66ZM13.2977 9.14839C13.2618 9.11051 13.2184 9.0803 13.1701 9.05966C13.1219 9.03903 13.0699 9.02839 13.0173 9.02842H5.19165C5.15431 9.02842 5.11778 9.03916 5.08655 9.05933C5.05533 9.0795 5.03077 9.10821 5.01588 9.14194C5.001 9.17568 4.99644 9.21296 5.00278 9.24921C5.00911 9.28545 5.02605 9.31908 5.05153 9.34598L6.70357 11.0898C6.73937 11.1276 6.78264 11.1578 6.83073 11.1784C6.87883 11.199 6.93071 11.2097 6.98318 11.2098H14.8084C14.8457 11.2098 14.8822 11.1991 14.9135 11.1789C14.9447 11.1587 14.9692 11.13 14.9842 11.0963C14.999 11.0626 15.0036 11.0253 14.9972 10.989C14.9909 10.9528 14.974 10.9192 14.9485 10.8923L13.2977 9.14839ZM5.19165 7.89576H13.0173C13.0699 7.89578 13.1219 7.88515 13.1701 7.86451C13.2184 7.84387 13.2618 7.81366 13.2977 7.77578L14.9485 6.03192C14.974 6.00503 14.9909 5.97139 14.9972 5.93514C15.0036 5.8989 14.999 5.86162 14.9842 5.82789C14.9692 5.79415 14.9447 5.76544 14.9135 5.74527C14.8822 5.7251 14.8457 5.71436 14.8084 5.71436H6.98318C6.93071 5.71444 6.87883 5.72514 6.83073 5.74577C6.78264 5.76641 6.73937 5.79655 6.70357 5.83433L5.05195 7.5782C5.0265 7.60506 5.00957 7.63867 5.00322 7.67486C4.99687 7.71107 5.00139 7.74832 5.01622 7.78204C5.03105 7.81576 5.05555 7.84447 5.08671 7.86467C5.11787 7.88487 5.15434 7.89567 5.19165 7.89576Z" fill="url(#paint0_linear_497_5438)"/>
                            </g>
                            <defs>
                            <linearGradient id="paint0_linear_497_5438" x1="5.84412" y1="14.7338" x2="13.912" y2="5.50047" gradientUnits="userSpaceOnUse">
                            <stop offset="0.08" stop-color="#9945FF"/>
                            <stop offset="0.3" stop-color="#8752F3"/>
                            <stop offset="0.5" stop-color="#5497D5"/>
                            <stop offset="0.6" stop-color="#43B4CA"/>
                            <stop offset="0.72" stop-color="#28E0B9"/>
                            <stop offset="0.97" stop-color="#19FB9B"/>
                            </linearGradient>
                            <clipPath id="clip0_497_5438">
                            <rect width="10" height="8.80952" fill="white" transform="translate(5 5.71436)"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <span>Solana</span>
                    </p>
                    <div class="social-media flex items-center space-x-2">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_497_5444)">
                            <path d="M14.7442 10.0002C14.7418 9.2532 14.6617 8.50846 14.5053 7.778H16.5053C16.4028 7.47311 16.2784 7.17604 16.1331 6.88911H14.272C13.9223 5.72017 13.3796 4.61794 12.6664 3.628C12.2109 3.43644 11.7359 3.29487 11.2498 3.20577C12.227 4.25503 12.9644 5.50427 13.4109 6.86688H10.4164V3.11133H9.58309V6.87244H6.58865C7.03598 5.50735 7.77535 4.25612 8.75532 3.20577C8.27132 3.29347 7.79821 3.43317 7.34421 3.62244C6.62817 4.60823 6.08177 5.70667 5.72754 6.87244H3.85532C3.70732 7.1646 3.58105 7.46727 3.47754 7.778H5.49421C5.33778 8.50846 5.25772 9.2532 5.25532 10.0002C5.25699 10.8173 5.35017 11.6316 5.53309 12.428H3.56643C3.68073 12.7397 3.81815 13.0424 3.97754 13.3336H5.77198C6.11193 14.3979 6.61616 15.4027 7.26643 16.3113C7.732 16.5109 8.21832 16.6581 8.71643 16.7502C7.80959 15.7613 7.11227 14.5991 6.66643 13.3336H9.58865V16.8558H10.422V13.3336H13.3331C12.8856 14.5995 12.1864 15.7618 11.2775 16.7502C11.778 16.6549 12.2662 16.504 12.7331 16.3002C13.3823 15.395 13.8865 14.3941 14.2275 13.3336H16.0053C16.164 13.0477 16.3014 12.7506 16.4164 12.4447H14.4442C14.6359 11.6437 14.7365 10.8237 14.7442 10.0002ZM9.58309 12.428H6.39421C6.0033 10.899 5.98615 9.29836 6.34421 7.76133H9.58309V12.428ZM13.6053 12.428H10.4164V7.778H13.6553C13.815 8.50784 13.8932 9.25313 13.8886 10.0002C13.8938 10.818 13.7987 11.6334 13.6053 12.428Z" fill="white"/>
                            <path d="M10.0002 1.11133C8.24217 1.11133 6.52359 1.63265 5.06182 2.60938C3.60005 3.5861 2.46074 4.97435 1.78796 6.59859C1.11518 8.22282 0.93915 10.0101 1.28213 11.7344C1.62511 13.4586 2.47169 15.0425 3.71483 16.2856C4.95796 17.5287 6.54181 18.3753 8.26609 18.7183C9.99036 19.0613 11.7776 18.8853 13.4019 18.2125C15.0261 17.5397 16.4143 16.4004 17.3911 14.9386C18.3678 13.4768 18.8891 11.7583 18.8891 10.0002C18.8891 7.64274 17.9526 5.38181 16.2856 3.71482C14.6186 2.04783 12.3577 1.11133 10.0002 1.11133ZM10.0002 17.778C8.46192 17.778 6.95817 17.3218 5.67912 16.4672C4.40007 15.6126 3.40317 14.3978 2.81449 12.9766C2.22581 11.5554 2.07178 9.99159 2.37189 8.48285C2.672 6.97411 3.41276 5.58824 4.5005 4.5005C5.58824 3.41276 6.97411 2.67199 8.48285 2.37189C9.99159 2.07178 11.5554 2.22581 12.9766 2.81449C14.3979 3.40317 15.6126 4.40007 16.4672 5.67912C17.3218 6.95816 17.778 8.46192 17.778 10.0002C17.778 12.063 16.9586 14.0413 15.4999 15.4999C14.0413 16.9586 12.063 17.778 10.0002 17.778Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_497_5444">
                            <rect width="20" height="20" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_497_5448)">
                            <path d="M18.3764 1.77434L0.657315 8.64254C-0.0557314 8.96238 -0.296903 9.60289 0.484972 9.95051L5.03067 11.4026L16.0216 4.57484C16.6217 4.14621 17.2361 4.26051 16.7074 4.73203L7.26771 13.3232L6.97118 16.959C7.24583 17.5204 7.74872 17.523 8.0695 17.244L10.6811 14.76L15.154 18.1267C16.1929 18.7449 16.7581 18.346 16.9817 17.2129L19.9154 3.24922C20.22 1.85449 19.7006 1.23996 18.3764 1.77434Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_497_5448">
                            <rect width="20" height="20" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.496 7.77734L17.2335 0.666504H14.6727L10.2935 6.09734L6.4085 0.666504H0.833496L7.3385 9.75817L1.22516 17.3332H3.78683L8.541 11.4415L12.7585 17.3332H18.3335L11.496 7.77734ZM9.51266 10.2357L8.3085 8.55317L3.6335 2.02234H5.5585L9.33183 7.2865L10.5343 8.96984L15.5493 15.9773H13.6243L9.51266 10.2357Z" fill="white"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row items-center bg-card-gradient-bg p-4 rounded">
                <div class="w-24 rounded">
                    <img src="{{ asset('assets/images/tokens/card-3.png') }}" alt="Logo" class="large-logo">
                </div> <!-- Placeholder Image -->
                <div class="info flex flex-col space-y-2">
                    <h3 class="text-lg font-bold">Supercat</h3>
                    <p class="text-sm text-gray-400 flex items-center space-x-2">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="10" cy="10" r="10" fill="black"/>
                            <g clip-path="url(#clip0_497_5438)">
                            <path d="M14.9485 12.66L13.2977 14.4039C13.2618 14.4418 13.2184 14.472 13.1701 14.4926C13.1219 14.5133 13.0699 14.5239 13.0173 14.5239H5.19165C5.15431 14.5239 5.11778 14.5131 5.08655 14.493C5.05533 14.4728 5.03077 14.4441 5.01588 14.4103C5.001 14.3766 4.99644 14.3393 5.00278 14.3031C5.00911 14.2668 5.02605 14.2332 5.05153 14.2063L6.70357 12.4625C6.73937 12.4247 6.78264 12.3945 6.83073 12.3739C6.87883 12.3533 6.93071 12.3426 6.98318 12.3425H14.8084C14.8457 12.3425 14.8822 12.3532 14.9135 12.3734C14.9447 12.3936 14.9692 12.4223 14.9842 12.456C14.999 12.4897 15.0036 12.527 14.9972 12.5633C14.9909 12.5995 14.974 12.6331 14.9485 12.66ZM13.2977 9.14839C13.2618 9.11051 13.2184 9.0803 13.1701 9.05966C13.1219 9.03903 13.0699 9.02839 13.0173 9.02842H5.19165C5.15431 9.02842 5.11778 9.03916 5.08655 9.05933C5.05533 9.0795 5.03077 9.10821 5.01588 9.14194C5.001 9.17568 4.99644 9.21296 5.00278 9.24921C5.00911 9.28545 5.02605 9.31908 5.05153 9.34598L6.70357 11.0898C6.73937 11.1276 6.78264 11.1578 6.83073 11.1784C6.87883 11.199 6.93071 11.2097 6.98318 11.2098H14.8084C14.8457 11.2098 14.8822 11.1991 14.9135 11.1789C14.9447 11.1587 14.9692 11.13 14.9842 11.0963C14.999 11.0626 15.0036 11.0253 14.9972 10.989C14.9909 10.9528 14.974 10.9192 14.9485 10.8923L13.2977 9.14839ZM5.19165 7.89576H13.0173C13.0699 7.89578 13.1219 7.88515 13.1701 7.86451C13.2184 7.84387 13.2618 7.81366 13.2977 7.77578L14.9485 6.03192C14.974 6.00503 14.9909 5.97139 14.9972 5.93514C15.0036 5.8989 14.999 5.86162 14.9842 5.82789C14.9692 5.79415 14.9447 5.76544 14.9135 5.74527C14.8822 5.7251 14.8457 5.71436 14.8084 5.71436H6.98318C6.93071 5.71444 6.87883 5.72514 6.83073 5.74577C6.78264 5.76641 6.73937 5.79655 6.70357 5.83433L5.05195 7.5782C5.0265 7.60506 5.00957 7.63867 5.00322 7.67486C4.99687 7.71107 5.00139 7.74832 5.01622 7.78204C5.03105 7.81576 5.05555 7.84447 5.08671 7.86467C5.11787 7.88487 5.15434 7.89567 5.19165 7.89576Z" fill="url(#paint0_linear_497_5438)"/>
                            </g>
                            <defs>
                            <linearGradient id="paint0_linear_497_5438" x1="5.84412" y1="14.7338" x2="13.912" y2="5.50047" gradientUnits="userSpaceOnUse">
                            <stop offset="0.08" stop-color="#9945FF"/>
                            <stop offset="0.3" stop-color="#8752F3"/>
                            <stop offset="0.5" stop-color="#5497D5"/>
                            <stop offset="0.6" stop-color="#43B4CA"/>
                            <stop offset="0.72" stop-color="#28E0B9"/>
                            <stop offset="0.97" stop-color="#19FB9B"/>
                            </linearGradient>
                            <clipPath id="clip0_497_5438">
                            <rect width="10" height="8.80952" fill="white" transform="translate(5 5.71436)"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <span>Solana</span>
                    </p>
                    <div class="social-media flex items-center space-x-2">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_497_5444)">
                            <path d="M14.7442 10.0002C14.7418 9.2532 14.6617 8.50846 14.5053 7.778H16.5053C16.4028 7.47311 16.2784 7.17604 16.1331 6.88911H14.272C13.9223 5.72017 13.3796 4.61794 12.6664 3.628C12.2109 3.43644 11.7359 3.29487 11.2498 3.20577C12.227 4.25503 12.9644 5.50427 13.4109 6.86688H10.4164V3.11133H9.58309V6.87244H6.58865C7.03598 5.50735 7.77535 4.25612 8.75532 3.20577C8.27132 3.29347 7.79821 3.43317 7.34421 3.62244C6.62817 4.60823 6.08177 5.70667 5.72754 6.87244H3.85532C3.70732 7.1646 3.58105 7.46727 3.47754 7.778H5.49421C5.33778 8.50846 5.25772 9.2532 5.25532 10.0002C5.25699 10.8173 5.35017 11.6316 5.53309 12.428H3.56643C3.68073 12.7397 3.81815 13.0424 3.97754 13.3336H5.77198C6.11193 14.3979 6.61616 15.4027 7.26643 16.3113C7.732 16.5109 8.21832 16.6581 8.71643 16.7502C7.80959 15.7613 7.11227 14.5991 6.66643 13.3336H9.58865V16.8558H10.422V13.3336H13.3331C12.8856 14.5995 12.1864 15.7618 11.2775 16.7502C11.778 16.6549 12.2662 16.504 12.7331 16.3002C13.3823 15.395 13.8865 14.3941 14.2275 13.3336H16.0053C16.164 13.0477 16.3014 12.7506 16.4164 12.4447H14.4442C14.6359 11.6437 14.7365 10.8237 14.7442 10.0002ZM9.58309 12.428H6.39421C6.0033 10.899 5.98615 9.29836 6.34421 7.76133H9.58309V12.428ZM13.6053 12.428H10.4164V7.778H13.6553C13.815 8.50784 13.8932 9.25313 13.8886 10.0002C13.8938 10.818 13.7987 11.6334 13.6053 12.428Z" fill="white"/>
                            <path d="M10.0002 1.11133C8.24217 1.11133 6.52359 1.63265 5.06182 2.60938C3.60005 3.5861 2.46074 4.97435 1.78796 6.59859C1.11518 8.22282 0.93915 10.0101 1.28213 11.7344C1.62511 13.4586 2.47169 15.0425 3.71483 16.2856C4.95796 17.5287 6.54181 18.3753 8.26609 18.7183C9.99036 19.0613 11.7776 18.8853 13.4019 18.2125C15.0261 17.5397 16.4143 16.4004 17.3911 14.9386C18.3678 13.4768 18.8891 11.7583 18.8891 10.0002C18.8891 7.64274 17.9526 5.38181 16.2856 3.71482C14.6186 2.04783 12.3577 1.11133 10.0002 1.11133ZM10.0002 17.778C8.46192 17.778 6.95817 17.3218 5.67912 16.4672C4.40007 15.6126 3.40317 14.3978 2.81449 12.9766C2.22581 11.5554 2.07178 9.99159 2.37189 8.48285C2.672 6.97411 3.41276 5.58824 4.5005 4.5005C5.58824 3.41276 6.97411 2.67199 8.48285 2.37189C9.99159 2.07178 11.5554 2.22581 12.9766 2.81449C14.3979 3.40317 15.6126 4.40007 16.4672 5.67912C17.3218 6.95816 17.778 8.46192 17.778 10.0002C17.778 12.063 16.9586 14.0413 15.4999 15.4999C14.0413 16.9586 12.063 17.778 10.0002 17.778Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_497_5444">
                            <rect width="20" height="20" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_497_5448)">
                            <path d="M18.3764 1.77434L0.657315 8.64254C-0.0557314 8.96238 -0.296903 9.60289 0.484972 9.95051L5.03067 11.4026L16.0216 4.57484C16.6217 4.14621 17.2361 4.26051 16.7074 4.73203L7.26771 13.3232L6.97118 16.959C7.24583 17.5204 7.74872 17.523 8.0695 17.244L10.6811 14.76L15.154 18.1267C16.1929 18.7449 16.7581 18.346 16.9817 17.2129L19.9154 3.24922C20.22 1.85449 19.7006 1.23996 18.3764 1.77434Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_497_5448">
                            <rect width="20" height="20" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.496 7.77734L17.2335 0.666504H14.6727L10.2935 6.09734L6.4085 0.666504H0.833496L7.3385 9.75817L1.22516 17.3332H3.78683L8.541 11.4415L12.7585 17.3332H18.3335L11.496 7.77734ZM9.51266 10.2357L8.3085 8.55317L3.6335 2.02234H5.5585L9.33183 7.2865L10.5343 8.96984L15.5493 15.9773H13.6243L9.51266 10.2357Z" fill="white"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row items-center bg-card-gradient-bg p-4 rounded">
                <div class="w-24 rounded">
                    <img src="{{ asset('assets/images/tokens/card-3.png') }}" alt="Logo" class="large-logo">
                </div> <!-- Placeholder Image -->
                <div class="info flex flex-col space-y-2">
                    <h3 class="text-lg font-bold">Supercat</h3>
                    <p class="text-sm text-gray-400 flex items-center space-x-2">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="10" cy="10" r="10" fill="black"/>
                            <g clip-path="url(#clip0_497_5438)">
                            <path d="M14.9485 12.66L13.2977 14.4039C13.2618 14.4418 13.2184 14.472 13.1701 14.4926C13.1219 14.5133 13.0699 14.5239 13.0173 14.5239H5.19165C5.15431 14.5239 5.11778 14.5131 5.08655 14.493C5.05533 14.4728 5.03077 14.4441 5.01588 14.4103C5.001 14.3766 4.99644 14.3393 5.00278 14.3031C5.00911 14.2668 5.02605 14.2332 5.05153 14.2063L6.70357 12.4625C6.73937 12.4247 6.78264 12.3945 6.83073 12.3739C6.87883 12.3533 6.93071 12.3426 6.98318 12.3425H14.8084C14.8457 12.3425 14.8822 12.3532 14.9135 12.3734C14.9447 12.3936 14.9692 12.4223 14.9842 12.456C14.999 12.4897 15.0036 12.527 14.9972 12.5633C14.9909 12.5995 14.974 12.6331 14.9485 12.66ZM13.2977 9.14839C13.2618 9.11051 13.2184 9.0803 13.1701 9.05966C13.1219 9.03903 13.0699 9.02839 13.0173 9.02842H5.19165C5.15431 9.02842 5.11778 9.03916 5.08655 9.05933C5.05533 9.0795 5.03077 9.10821 5.01588 9.14194C5.001 9.17568 4.99644 9.21296 5.00278 9.24921C5.00911 9.28545 5.02605 9.31908 5.05153 9.34598L6.70357 11.0898C6.73937 11.1276 6.78264 11.1578 6.83073 11.1784C6.87883 11.199 6.93071 11.2097 6.98318 11.2098H14.8084C14.8457 11.2098 14.8822 11.1991 14.9135 11.1789C14.9447 11.1587 14.9692 11.13 14.9842 11.0963C14.999 11.0626 15.0036 11.0253 14.9972 10.989C14.9909 10.9528 14.974 10.9192 14.9485 10.8923L13.2977 9.14839ZM5.19165 7.89576H13.0173C13.0699 7.89578 13.1219 7.88515 13.1701 7.86451C13.2184 7.84387 13.2618 7.81366 13.2977 7.77578L14.9485 6.03192C14.974 6.00503 14.9909 5.97139 14.9972 5.93514C15.0036 5.8989 14.999 5.86162 14.9842 5.82789C14.9692 5.79415 14.9447 5.76544 14.9135 5.74527C14.8822 5.7251 14.8457 5.71436 14.8084 5.71436H6.98318C6.93071 5.71444 6.87883 5.72514 6.83073 5.74577C6.78264 5.76641 6.73937 5.79655 6.70357 5.83433L5.05195 7.5782C5.0265 7.60506 5.00957 7.63867 5.00322 7.67486C4.99687 7.71107 5.00139 7.74832 5.01622 7.78204C5.03105 7.81576 5.05555 7.84447 5.08671 7.86467C5.11787 7.88487 5.15434 7.89567 5.19165 7.89576Z" fill="url(#paint0_linear_497_5438)"/>
                            </g>
                            <defs>
                            <linearGradient id="paint0_linear_497_5438" x1="5.84412" y1="14.7338" x2="13.912" y2="5.50047" gradientUnits="userSpaceOnUse">
                            <stop offset="0.08" stop-color="#9945FF"/>
                            <stop offset="0.3" stop-color="#8752F3"/>
                            <stop offset="0.5" stop-color="#5497D5"/>
                            <stop offset="0.6" stop-color="#43B4CA"/>
                            <stop offset="0.72" stop-color="#28E0B9"/>
                            <stop offset="0.97" stop-color="#19FB9B"/>
                            </linearGradient>
                            <clipPath id="clip0_497_5438">
                            <rect width="10" height="8.80952" fill="white" transform="translate(5 5.71436)"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <span>Solana</span>
                    </p>
                    <div class="social-media flex items-center space-x-2">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_497_5444)">
                            <path d="M14.7442 10.0002C14.7418 9.2532 14.6617 8.50846 14.5053 7.778H16.5053C16.4028 7.47311 16.2784 7.17604 16.1331 6.88911H14.272C13.9223 5.72017 13.3796 4.61794 12.6664 3.628C12.2109 3.43644 11.7359 3.29487 11.2498 3.20577C12.227 4.25503 12.9644 5.50427 13.4109 6.86688H10.4164V3.11133H9.58309V6.87244H6.58865C7.03598 5.50735 7.77535 4.25612 8.75532 3.20577C8.27132 3.29347 7.79821 3.43317 7.34421 3.62244C6.62817 4.60823 6.08177 5.70667 5.72754 6.87244H3.85532C3.70732 7.1646 3.58105 7.46727 3.47754 7.778H5.49421C5.33778 8.50846 5.25772 9.2532 5.25532 10.0002C5.25699 10.8173 5.35017 11.6316 5.53309 12.428H3.56643C3.68073 12.7397 3.81815 13.0424 3.97754 13.3336H5.77198C6.11193 14.3979 6.61616 15.4027 7.26643 16.3113C7.732 16.5109 8.21832 16.6581 8.71643 16.7502C7.80959 15.7613 7.11227 14.5991 6.66643 13.3336H9.58865V16.8558H10.422V13.3336H13.3331C12.8856 14.5995 12.1864 15.7618 11.2775 16.7502C11.778 16.6549 12.2662 16.504 12.7331 16.3002C13.3823 15.395 13.8865 14.3941 14.2275 13.3336H16.0053C16.164 13.0477 16.3014 12.7506 16.4164 12.4447H14.4442C14.6359 11.6437 14.7365 10.8237 14.7442 10.0002ZM9.58309 12.428H6.39421C6.0033 10.899 5.98615 9.29836 6.34421 7.76133H9.58309V12.428ZM13.6053 12.428H10.4164V7.778H13.6553C13.815 8.50784 13.8932 9.25313 13.8886 10.0002C13.8938 10.818 13.7987 11.6334 13.6053 12.428Z" fill="white"/>
                            <path d="M10.0002 1.11133C8.24217 1.11133 6.52359 1.63265 5.06182 2.60938C3.60005 3.5861 2.46074 4.97435 1.78796 6.59859C1.11518 8.22282 0.93915 10.0101 1.28213 11.7344C1.62511 13.4586 2.47169 15.0425 3.71483 16.2856C4.95796 17.5287 6.54181 18.3753 8.26609 18.7183C9.99036 19.0613 11.7776 18.8853 13.4019 18.2125C15.0261 17.5397 16.4143 16.4004 17.3911 14.9386C18.3678 13.4768 18.8891 11.7583 18.8891 10.0002C18.8891 7.64274 17.9526 5.38181 16.2856 3.71482C14.6186 2.04783 12.3577 1.11133 10.0002 1.11133ZM10.0002 17.778C8.46192 17.778 6.95817 17.3218 5.67912 16.4672C4.40007 15.6126 3.40317 14.3978 2.81449 12.9766C2.22581 11.5554 2.07178 9.99159 2.37189 8.48285C2.672 6.97411 3.41276 5.58824 4.5005 4.5005C5.58824 3.41276 6.97411 2.67199 8.48285 2.37189C9.99159 2.07178 11.5554 2.22581 12.9766 2.81449C14.3979 3.40317 15.6126 4.40007 16.4672 5.67912C17.3218 6.95816 17.778 8.46192 17.778 10.0002C17.778 12.063 16.9586 14.0413 15.4999 15.4999C14.0413 16.9586 12.063 17.778 10.0002 17.778Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_497_5444">
                            <rect width="20" height="20" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_497_5448)">
                            <path d="M18.3764 1.77434L0.657315 8.64254C-0.0557314 8.96238 -0.296903 9.60289 0.484972 9.95051L5.03067 11.4026L16.0216 4.57484C16.6217 4.14621 17.2361 4.26051 16.7074 4.73203L7.26771 13.3232L6.97118 16.959C7.24583 17.5204 7.74872 17.523 8.0695 17.244L10.6811 14.76L15.154 18.1267C16.1929 18.7449 16.7581 18.346 16.9817 17.2129L19.9154 3.24922C20.22 1.85449 19.7006 1.23996 18.3764 1.77434Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_497_5448">
                            <rect width="20" height="20" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.496 7.77734L17.2335 0.666504H14.6727L10.2935 6.09734L6.4085 0.666504H0.833496L7.3385 9.75817L1.22516 17.3332H3.78683L8.541 11.4415L12.7585 17.3332H18.3335L11.496 7.77734ZM9.51266 10.2357L8.3085 8.55317L3.6335 2.02234H5.5585L9.33183 7.2865L10.5343 8.96984L15.5493 15.9773H13.6243L9.51266 10.2357Z" fill="white"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row items-center bg-card-gradient-bg p-4 rounded">
                <div class="w-24 rounded">
                    <img src="{{ asset('assets/images/tokens/card-3.png') }}" alt="Logo" class="large-logo">
                </div> <!-- Placeholder Image -->
                <div class="info flex flex-col space-y-2">
                    <h3 class="text-lg font-bold">Supercat</h3>
                    <p class="text-sm text-gray-400 flex items-center space-x-2">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="10" cy="10" r="10" fill="black"/>
                            <g clip-path="url(#clip0_497_5438)">
                            <path d="M14.9485 12.66L13.2977 14.4039C13.2618 14.4418 13.2184 14.472 13.1701 14.4926C13.1219 14.5133 13.0699 14.5239 13.0173 14.5239H5.19165C5.15431 14.5239 5.11778 14.5131 5.08655 14.493C5.05533 14.4728 5.03077 14.4441 5.01588 14.4103C5.001 14.3766 4.99644 14.3393 5.00278 14.3031C5.00911 14.2668 5.02605 14.2332 5.05153 14.2063L6.70357 12.4625C6.73937 12.4247 6.78264 12.3945 6.83073 12.3739C6.87883 12.3533 6.93071 12.3426 6.98318 12.3425H14.8084C14.8457 12.3425 14.8822 12.3532 14.9135 12.3734C14.9447 12.3936 14.9692 12.4223 14.9842 12.456C14.999 12.4897 15.0036 12.527 14.9972 12.5633C14.9909 12.5995 14.974 12.6331 14.9485 12.66ZM13.2977 9.14839C13.2618 9.11051 13.2184 9.0803 13.1701 9.05966C13.1219 9.03903 13.0699 9.02839 13.0173 9.02842H5.19165C5.15431 9.02842 5.11778 9.03916 5.08655 9.05933C5.05533 9.0795 5.03077 9.10821 5.01588 9.14194C5.001 9.17568 4.99644 9.21296 5.00278 9.24921C5.00911 9.28545 5.02605 9.31908 5.05153 9.34598L6.70357 11.0898C6.73937 11.1276 6.78264 11.1578 6.83073 11.1784C6.87883 11.199 6.93071 11.2097 6.98318 11.2098H14.8084C14.8457 11.2098 14.8822 11.1991 14.9135 11.1789C14.9447 11.1587 14.9692 11.13 14.9842 11.0963C14.999 11.0626 15.0036 11.0253 14.9972 10.989C14.9909 10.9528 14.974 10.9192 14.9485 10.8923L13.2977 9.14839ZM5.19165 7.89576H13.0173C13.0699 7.89578 13.1219 7.88515 13.1701 7.86451C13.2184 7.84387 13.2618 7.81366 13.2977 7.77578L14.9485 6.03192C14.974 6.00503 14.9909 5.97139 14.9972 5.93514C15.0036 5.8989 14.999 5.86162 14.9842 5.82789C14.9692 5.79415 14.9447 5.76544 14.9135 5.74527C14.8822 5.7251 14.8457 5.71436 14.8084 5.71436H6.98318C6.93071 5.71444 6.87883 5.72514 6.83073 5.74577C6.78264 5.76641 6.73937 5.79655 6.70357 5.83433L5.05195 7.5782C5.0265 7.60506 5.00957 7.63867 5.00322 7.67486C4.99687 7.71107 5.00139 7.74832 5.01622 7.78204C5.03105 7.81576 5.05555 7.84447 5.08671 7.86467C5.11787 7.88487 5.15434 7.89567 5.19165 7.89576Z" fill="url(#paint0_linear_497_5438)"/>
                            </g>
                            <defs>
                            <linearGradient id="paint0_linear_497_5438" x1="5.84412" y1="14.7338" x2="13.912" y2="5.50047" gradientUnits="userSpaceOnUse">
                            <stop offset="0.08" stop-color="#9945FF"/>
                            <stop offset="0.3" stop-color="#8752F3"/>
                            <stop offset="0.5" stop-color="#5497D5"/>
                            <stop offset="0.6" stop-color="#43B4CA"/>
                            <stop offset="0.72" stop-color="#28E0B9"/>
                            <stop offset="0.97" stop-color="#19FB9B"/>
                            </linearGradient>
                            <clipPath id="clip0_497_5438">
                            <rect width="10" height="8.80952" fill="white" transform="translate(5 5.71436)"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <span>Solana</span>
                    </p>
                    <div class="social-media flex items-center space-x-2">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_497_5444)">
                            <path d="M14.7442 10.0002C14.7418 9.2532 14.6617 8.50846 14.5053 7.778H16.5053C16.4028 7.47311 16.2784 7.17604 16.1331 6.88911H14.272C13.9223 5.72017 13.3796 4.61794 12.6664 3.628C12.2109 3.43644 11.7359 3.29487 11.2498 3.20577C12.227 4.25503 12.9644 5.50427 13.4109 6.86688H10.4164V3.11133H9.58309V6.87244H6.58865C7.03598 5.50735 7.77535 4.25612 8.75532 3.20577C8.27132 3.29347 7.79821 3.43317 7.34421 3.62244C6.62817 4.60823 6.08177 5.70667 5.72754 6.87244H3.85532C3.70732 7.1646 3.58105 7.46727 3.47754 7.778H5.49421C5.33778 8.50846 5.25772 9.2532 5.25532 10.0002C5.25699 10.8173 5.35017 11.6316 5.53309 12.428H3.56643C3.68073 12.7397 3.81815 13.0424 3.97754 13.3336H5.77198C6.11193 14.3979 6.61616 15.4027 7.26643 16.3113C7.732 16.5109 8.21832 16.6581 8.71643 16.7502C7.80959 15.7613 7.11227 14.5991 6.66643 13.3336H9.58865V16.8558H10.422V13.3336H13.3331C12.8856 14.5995 12.1864 15.7618 11.2775 16.7502C11.778 16.6549 12.2662 16.504 12.7331 16.3002C13.3823 15.395 13.8865 14.3941 14.2275 13.3336H16.0053C16.164 13.0477 16.3014 12.7506 16.4164 12.4447H14.4442C14.6359 11.6437 14.7365 10.8237 14.7442 10.0002ZM9.58309 12.428H6.39421C6.0033 10.899 5.98615 9.29836 6.34421 7.76133H9.58309V12.428ZM13.6053 12.428H10.4164V7.778H13.6553C13.815 8.50784 13.8932 9.25313 13.8886 10.0002C13.8938 10.818 13.7987 11.6334 13.6053 12.428Z" fill="white"/>
                            <path d="M10.0002 1.11133C8.24217 1.11133 6.52359 1.63265 5.06182 2.60938C3.60005 3.5861 2.46074 4.97435 1.78796 6.59859C1.11518 8.22282 0.93915 10.0101 1.28213 11.7344C1.62511 13.4586 2.47169 15.0425 3.71483 16.2856C4.95796 17.5287 6.54181 18.3753 8.26609 18.7183C9.99036 19.0613 11.7776 18.8853 13.4019 18.2125C15.0261 17.5397 16.4143 16.4004 17.3911 14.9386C18.3678 13.4768 18.8891 11.7583 18.8891 10.0002C18.8891 7.64274 17.9526 5.38181 16.2856 3.71482C14.6186 2.04783 12.3577 1.11133 10.0002 1.11133ZM10.0002 17.778C8.46192 17.778 6.95817 17.3218 5.67912 16.4672C4.40007 15.6126 3.40317 14.3978 2.81449 12.9766C2.22581 11.5554 2.07178 9.99159 2.37189 8.48285C2.672 6.97411 3.41276 5.58824 4.5005 4.5005C5.58824 3.41276 6.97411 2.67199 8.48285 2.37189C9.99159 2.07178 11.5554 2.22581 12.9766 2.81449C14.3979 3.40317 15.6126 4.40007 16.4672 5.67912C17.3218 6.95816 17.778 8.46192 17.778 10.0002C17.778 12.063 16.9586 14.0413 15.4999 15.4999C14.0413 16.9586 12.063 17.778 10.0002 17.778Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_497_5444">
                            <rect width="20" height="20" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_497_5448)">
                            <path d="M18.3764 1.77434L0.657315 8.64254C-0.0557314 8.96238 -0.296903 9.60289 0.484972 9.95051L5.03067 11.4026L16.0216 4.57484C16.6217 4.14621 17.2361 4.26051 16.7074 4.73203L7.26771 13.3232L6.97118 16.959C7.24583 17.5204 7.74872 17.523 8.0695 17.244L10.6811 14.76L15.154 18.1267C16.1929 18.7449 16.7581 18.346 16.9817 17.2129L19.9154 3.24922C20.22 1.85449 19.7006 1.23996 18.3764 1.77434Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_497_5448">
                            <rect width="20" height="20" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.496 7.77734L17.2335 0.666504H14.6727L10.2935 6.09734L6.4085 0.666504H0.833496L7.3385 9.75817L1.22516 17.3332H3.78683L8.541 11.4415L12.7585 17.3332H18.3335L11.496 7.77734ZM9.51266 10.2357L8.3085 8.55317L3.6335 2.02234H5.5585L9.33183 7.2865L10.5343 8.96984L15.5493 15.9773H13.6243L9.51266 10.2357Z" fill="white"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row items-center bg-card-gradient-bg p-4 rounded">
                <div class="w-24 rounded">
                    <img src="{{ asset('assets/images/tokens/card-3.png') }}" alt="Logo" class="large-logo">
                </div> <!-- Placeholder Image -->
                <div class="info flex flex-col space-y-2">
                    <h3 class="text-lg font-bold">Supercat</h3>
                    <p class="text-sm text-gray-400 flex items-center space-x-2">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="10" cy="10" r="10" fill="black"/>
                            <g clip-path="url(#clip0_497_5438)">
                            <path d="M14.9485 12.66L13.2977 14.4039C13.2618 14.4418 13.2184 14.472 13.1701 14.4926C13.1219 14.5133 13.0699 14.5239 13.0173 14.5239H5.19165C5.15431 14.5239 5.11778 14.5131 5.08655 14.493C5.05533 14.4728 5.03077 14.4441 5.01588 14.4103C5.001 14.3766 4.99644 14.3393 5.00278 14.3031C5.00911 14.2668 5.02605 14.2332 5.05153 14.2063L6.70357 12.4625C6.73937 12.4247 6.78264 12.3945 6.83073 12.3739C6.87883 12.3533 6.93071 12.3426 6.98318 12.3425H14.8084C14.8457 12.3425 14.8822 12.3532 14.9135 12.3734C14.9447 12.3936 14.9692 12.4223 14.9842 12.456C14.999 12.4897 15.0036 12.527 14.9972 12.5633C14.9909 12.5995 14.974 12.6331 14.9485 12.66ZM13.2977 9.14839C13.2618 9.11051 13.2184 9.0803 13.1701 9.05966C13.1219 9.03903 13.0699 9.02839 13.0173 9.02842H5.19165C5.15431 9.02842 5.11778 9.03916 5.08655 9.05933C5.05533 9.0795 5.03077 9.10821 5.01588 9.14194C5.001 9.17568 4.99644 9.21296 5.00278 9.24921C5.00911 9.28545 5.02605 9.31908 5.05153 9.34598L6.70357 11.0898C6.73937 11.1276 6.78264 11.1578 6.83073 11.1784C6.87883 11.199 6.93071 11.2097 6.98318 11.2098H14.8084C14.8457 11.2098 14.8822 11.1991 14.9135 11.1789C14.9447 11.1587 14.9692 11.13 14.9842 11.0963C14.999 11.0626 15.0036 11.0253 14.9972 10.989C14.9909 10.9528 14.974 10.9192 14.9485 10.8923L13.2977 9.14839ZM5.19165 7.89576H13.0173C13.0699 7.89578 13.1219 7.88515 13.1701 7.86451C13.2184 7.84387 13.2618 7.81366 13.2977 7.77578L14.9485 6.03192C14.974 6.00503 14.9909 5.97139 14.9972 5.93514C15.0036 5.8989 14.999 5.86162 14.9842 5.82789C14.9692 5.79415 14.9447 5.76544 14.9135 5.74527C14.8822 5.7251 14.8457 5.71436 14.8084 5.71436H6.98318C6.93071 5.71444 6.87883 5.72514 6.83073 5.74577C6.78264 5.76641 6.73937 5.79655 6.70357 5.83433L5.05195 7.5782C5.0265 7.60506 5.00957 7.63867 5.00322 7.67486C4.99687 7.71107 5.00139 7.74832 5.01622 7.78204C5.03105 7.81576 5.05555 7.84447 5.08671 7.86467C5.11787 7.88487 5.15434 7.89567 5.19165 7.89576Z" fill="url(#paint0_linear_497_5438)"/>
                            </g>
                            <defs>
                            <linearGradient id="paint0_linear_497_5438" x1="5.84412" y1="14.7338" x2="13.912" y2="5.50047" gradientUnits="userSpaceOnUse">
                            <stop offset="0.08" stop-color="#9945FF"/>
                            <stop offset="0.3" stop-color="#8752F3"/>
                            <stop offset="0.5" stop-color="#5497D5"/>
                            <stop offset="0.6" stop-color="#43B4CA"/>
                            <stop offset="0.72" stop-color="#28E0B9"/>
                            <stop offset="0.97" stop-color="#19FB9B"/>
                            </linearGradient>
                            <clipPath id="clip0_497_5438">
                            <rect width="10" height="8.80952" fill="white" transform="translate(5 5.71436)"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <span>Solana</span>
                    </p>
                    <div class="social-media flex items-center space-x-2">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_497_5444)">
                            <path d="M14.7442 10.0002C14.7418 9.2532 14.6617 8.50846 14.5053 7.778H16.5053C16.4028 7.47311 16.2784 7.17604 16.1331 6.88911H14.272C13.9223 5.72017 13.3796 4.61794 12.6664 3.628C12.2109 3.43644 11.7359 3.29487 11.2498 3.20577C12.227 4.25503 12.9644 5.50427 13.4109 6.86688H10.4164V3.11133H9.58309V6.87244H6.58865C7.03598 5.50735 7.77535 4.25612 8.75532 3.20577C8.27132 3.29347 7.79821 3.43317 7.34421 3.62244C6.62817 4.60823 6.08177 5.70667 5.72754 6.87244H3.85532C3.70732 7.1646 3.58105 7.46727 3.47754 7.778H5.49421C5.33778 8.50846 5.25772 9.2532 5.25532 10.0002C5.25699 10.8173 5.35017 11.6316 5.53309 12.428H3.56643C3.68073 12.7397 3.81815 13.0424 3.97754 13.3336H5.77198C6.11193 14.3979 6.61616 15.4027 7.26643 16.3113C7.732 16.5109 8.21832 16.6581 8.71643 16.7502C7.80959 15.7613 7.11227 14.5991 6.66643 13.3336H9.58865V16.8558H10.422V13.3336H13.3331C12.8856 14.5995 12.1864 15.7618 11.2775 16.7502C11.778 16.6549 12.2662 16.504 12.7331 16.3002C13.3823 15.395 13.8865 14.3941 14.2275 13.3336H16.0053C16.164 13.0477 16.3014 12.7506 16.4164 12.4447H14.4442C14.6359 11.6437 14.7365 10.8237 14.7442 10.0002ZM9.58309 12.428H6.39421C6.0033 10.899 5.98615 9.29836 6.34421 7.76133H9.58309V12.428ZM13.6053 12.428H10.4164V7.778H13.6553C13.815 8.50784 13.8932 9.25313 13.8886 10.0002C13.8938 10.818 13.7987 11.6334 13.6053 12.428Z" fill="white"/>
                            <path d="M10.0002 1.11133C8.24217 1.11133 6.52359 1.63265 5.06182 2.60938C3.60005 3.5861 2.46074 4.97435 1.78796 6.59859C1.11518 8.22282 0.93915 10.0101 1.28213 11.7344C1.62511 13.4586 2.47169 15.0425 3.71483 16.2856C4.95796 17.5287 6.54181 18.3753 8.26609 18.7183C9.99036 19.0613 11.7776 18.8853 13.4019 18.2125C15.0261 17.5397 16.4143 16.4004 17.3911 14.9386C18.3678 13.4768 18.8891 11.7583 18.8891 10.0002C18.8891 7.64274 17.9526 5.38181 16.2856 3.71482C14.6186 2.04783 12.3577 1.11133 10.0002 1.11133ZM10.0002 17.778C8.46192 17.778 6.95817 17.3218 5.67912 16.4672C4.40007 15.6126 3.40317 14.3978 2.81449 12.9766C2.22581 11.5554 2.07178 9.99159 2.37189 8.48285C2.672 6.97411 3.41276 5.58824 4.5005 4.5005C5.58824 3.41276 6.97411 2.67199 8.48285 2.37189C9.99159 2.07178 11.5554 2.22581 12.9766 2.81449C14.3979 3.40317 15.6126 4.40007 16.4672 5.67912C17.3218 6.95816 17.778 8.46192 17.778 10.0002C17.778 12.063 16.9586 14.0413 15.4999 15.4999C14.0413 16.9586 12.063 17.778 10.0002 17.778Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_497_5444">
                            <rect width="20" height="20" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_497_5448)">
                            <path d="M18.3764 1.77434L0.657315 8.64254C-0.0557314 8.96238 -0.296903 9.60289 0.484972 9.95051L5.03067 11.4026L16.0216 4.57484C16.6217 4.14621 17.2361 4.26051 16.7074 4.73203L7.26771 13.3232L6.97118 16.959C7.24583 17.5204 7.74872 17.523 8.0695 17.244L10.6811 14.76L15.154 18.1267C16.1929 18.7449 16.7581 18.346 16.9817 17.2129L19.9154 3.24922C20.22 1.85449 19.7006 1.23996 18.3764 1.77434Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_497_5448">
                            <rect width="20" height="20" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.496 7.77734L17.2335 0.666504H14.6727L10.2935 6.09734L6.4085 0.666504H0.833496L7.3385 9.75817L1.22516 17.3332H3.78683L8.541 11.4415L12.7585 17.3332H18.3335L11.496 7.77734ZM9.51266 10.2357L8.3085 8.55317L3.6335 2.02234H5.5585L9.33183 7.2865L10.5343 8.96984L15.5493 15.9773H13.6243L9.51266 10.2357Z" fill="white"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>