
<div class="min-w-full overflow-y-hidden text-sm">
    <ul id="interval-dropdownList" class="hidden absolute top-12 w-48 py-1 mt-2 origin-top-right bg-gray-800 border border-gray-700 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
        <li class="px-4 py-2 text-sm text-white hover:bg-gray-600 cursor-pointer" data-value="default">Default</li>
        <li class="px-4 py-2 text-sm text-white hover:bg-gray-600 cursor-pointer" data-value="1">1 minute</li>
        <li class="px-4 py-2 text-sm text-white hover:bg-gray-600 cursor-pointer" data-value="3">3 minutes</li>
        <li class="px-4 py-2 text-sm text-white hover:bg-gray-600 cursor-pointer" data-value="5">5 minutes</li>
        <li class="px-4 py-2 text-sm text-white hover:bg-gray-600 cursor-pointer" data-value="15">15 minutes</li>
        <li class="px-4 py-2 text-sm text-white hover:bg-gray-600 cursor-pointer" data-value="30">30 minutes</li>
        <li class="px-4 py-2 text-sm text-white hover:bg-gray-600 cursor-pointer" data-value="60">1 hour</li>
        <li class="px-4 py-2 text-sm text-white hover:bg-gray-600 cursor-pointer" data-value="120">2 hours</li>
        <li class="px-4 py-2 text-sm text-white hover:bg-gray-600 cursor-pointer" data-value="240">4 hours</li>
    </ul>
    <div class="min-w-full flex justify-between items-center space-x-2 py-2">
        <div class="flex flex-1 items-center space-x-4">                
            <!-- Top -->
            <button class="w-40 flex items-center space-x-1 px-2 py-1 rounded bg-transparent border border-brand hover:bg-brand transition-all">
                <svg class="fill-light-primaryFont dark:fill-primaryFont" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2793 2.652C13.9093 2.5 13.4393 2.5 12.5003 2.5C11.5613 2.5 11.0923 2.5 10.7213 2.652C10.2288 2.85421 9.8367 3.24377 9.63132 3.735C9.53732 3.958 9.50132 4.219 9.48632 4.598C9.47965 4.8726 9.40305 5.14097 9.26376 5.37772C9.12448 5.61447 8.92711 5.81178 8.69032 5.951C8.44906 6.0851 8.17786 6.15615 7.90184 6.15754C7.62582 6.15894 7.35392 6.09065 7.11132 5.959C6.77332 5.781 6.52832 5.683 6.28632 5.651C5.75687 5.58148 5.22139 5.7238 4.79632 6.047C4.47832 6.289 4.24332 6.693 3.77432 7.5C3.30432 8.307 3.07032 8.71 3.01732 9.105C2.94732 9.631 3.09132 10.163 3.41732 10.584C3.56532 10.776 3.77432 10.937 4.09732 11.139C4.57432 11.436 4.88032 11.942 4.88032 12.5C4.88032 13.058 4.57432 13.564 4.09832 13.86C3.77432 14.063 3.56532 14.224 3.41632 14.416C3.2554 14.6239 3.13728 14.8617 3.0688 15.1156C3.00031 15.3694 2.98282 15.6343 3.01732 15.895C3.07032 16.289 3.30432 16.693 3.77432 17.5C4.24432 18.307 4.47832 18.71 4.79632 18.953C5.22032 19.276 5.75632 19.418 6.28632 19.349C6.52832 19.317 6.77332 19.219 7.11132 19.041C7.35404 18.9092 7.62613 18.8408 7.90234 18.8422C8.17855 18.8436 8.44994 18.9147 8.69132 19.049C9.17732 19.329 9.46532 19.844 9.48632 20.402C9.50132 20.782 9.53732 21.042 9.63132 21.265C9.83532 21.755 10.2273 22.145 10.7213 22.348C11.0913 22.5 11.5613 22.5 12.5003 22.5C13.4393 22.5 13.9093 22.5 14.2793 22.348C14.7719 22.1458 15.1639 21.7562 15.3693 21.265C15.4633 21.042 15.4993 20.782 15.5143 20.402C15.5343 19.844 15.8233 19.328 16.3103 19.049C16.5516 18.9149 16.8228 18.8439 17.0988 18.8425C17.3748 18.8411 17.6467 18.9093 17.8893 19.041C18.2273 19.219 18.4723 19.317 18.7143 19.349C19.2443 19.419 19.7803 19.276 20.2043 18.953C20.5223 18.711 20.7573 18.307 21.2263 17.5C21.6963 16.693 21.9303 16.29 21.9833 15.895C22.0177 15.6343 22 15.3693 21.9314 15.1155C21.8627 14.8616 21.7444 14.6239 21.5833 14.416C21.4353 14.224 21.2263 14.063 20.9033 13.861C20.4263 13.564 20.1203 13.058 20.1203 12.5C20.1203 11.942 20.4263 11.436 20.9023 11.14C21.2263 10.937 21.4353 10.776 21.5843 10.584C21.7452 10.3761 21.8633 10.1383 21.9318 9.88443C22.0003 9.63057 22.0178 9.36566 21.9833 9.105C21.9303 8.711 21.6963 8.307 21.2263 7.5C20.7563 6.693 20.5223 6.29 20.2043 6.047C19.7792 5.7238 19.2438 5.58148 18.7143 5.651C18.4723 5.683 18.2273 5.781 17.8893 5.959C17.6466 6.09083 17.3745 6.15922 17.0983 6.15782C16.8221 6.15642 16.5507 6.08528 16.3093 5.951C16.0727 5.81166 15.8755 5.61429 15.7364 5.37755C15.5973 5.14081 15.5209 4.87251 15.5143 4.598C15.4993 4.218 15.4633 3.958 15.3693 3.735C15.2677 3.49174 15.1191 3.27088 14.9321 3.08506C14.745 2.89923 14.5232 2.75208 14.2793 2.652ZM12.5003 15.5C14.1703 15.5 15.5233 14.157 15.5233 12.5C15.5233 10.843 14.1693 9.5 12.5003 9.5C10.8303 9.5 9.47732 10.843 9.47732 12.5C9.47732 14.157 10.8313 15.5 12.5003 15.5Z"/>
                </svg>
                <span>Manage tabs</span>
            </button>
            <div class="checkboxes flex items-center space-x-2">
                <span>Show:</span>
                <div class="checkbox flex items-center space-x-1">
                    <input class="cursor-pointer" type="checkbox" name="Menu">
                    <span>Menu</span>
                </div>
                <div class="checkbox flex items-center space-x-1">
                    <input class="cursor-pointer" type="checkbox" name="Header">
                    <span>Header</span>
                </div>
                <div class="checkbox flex items-center space-x-1">
                    <input class="cursor-pointer" type="checkbox" name="Footer">
                    <span>Footer</span>
                </div>
            </div>
            <button id="interval-period" class="min-w-64 flex items-center space-x-1 px-2 py-1 rounded bg-transparent border border-brand hover:bg-brand transition-all">
                <svg class="fill-light-primaryFont dark:fill-primaryFont" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2.375C9.99747 2.375 8.0399 2.96882 6.37486 4.08137C4.70981 5.19392 3.41206 6.77523 2.64572 8.62533C1.87939 10.4754 1.67888 12.5112 2.06955 14.4753C2.46023 16.4393 3.42454 18.2435 4.84055 19.6595C6.25656 21.0755 8.06066 22.0398 10.0247 22.4305C11.9888 22.8211 14.0246 22.6206 15.8747 21.8543C17.7248 21.0879 19.3061 19.7902 20.4186 18.1251C21.5312 16.4601 22.125 14.5025 22.125 12.5C22.122 9.8156 21.0543 7.24199 19.1562 5.34383C17.258 3.44567 14.6844 2.37798 12 2.375ZM12 20.375C10.4425 20.375 8.91993 19.9131 7.62489 19.0478C6.32985 18.1825 5.32049 16.9526 4.72445 15.5136C4.12841 14.0747 3.97246 12.4913 4.27632 10.9637C4.58018 9.43606 5.3302 8.03287 6.43154 6.93153C7.53288 5.8302 8.93607 5.08017 10.4637 4.77632C11.9913 4.47246 13.5747 4.62841 15.0136 5.22445C16.4526 5.82049 17.6825 6.82985 18.5478 8.12488C19.4131 9.41992 19.875 10.9425 19.875 12.5C19.8728 14.5879 19.0424 16.5896 17.566 18.066C16.0896 19.5424 14.0879 20.3728 12 20.375ZM18.375 12.5C18.375 12.7984 18.2565 13.0845 18.0455 13.2955C17.8345 13.5065 17.5484 13.625 17.25 13.625H12C11.7016 13.625 11.4155 13.5065 11.2045 13.2955C10.9935 13.0845 10.875 12.7984 10.875 12.5V7.25C10.875 6.95163 10.9935 6.66548 11.2045 6.4545C11.4155 6.24353 11.7016 6.125 12 6.125C12.2984 6.125 12.5845 6.24353 12.7955 6.4545C13.0065 6.66548 13.125 6.95163 13.125 7.25V11.375H17.25C17.5484 11.375 17.8345 11.4935 18.0455 11.7045C18.2565 11.9155 18.375 12.2016 18.375 12.5Z"/>
                </svg>
                <p>Chart Interval: <span id="interval-selected" class="font-semibold">Default</span></p>
            </button>
            <div class="increment-decrement flex items-center space-x-1">
                <button class="border border-brand rounded px-1">-</button>
                <span>Columns</span>
                <button class="border border-brand rounded px-1">+</button>
            </div>
            <div class="w-40 increment-decrement flex items-center space-x-1">
                <button class="border border-brand rounded px-1">-</button>
                <span>Card height:100%</span>
                <button class="border border-brand rounded px-1">+</button>
            </div>
            <div class=" w-40 increment-decrement flex items-center space-x-1">
                <button class="border border-brand rounded px-1">-</button>
                <span>Spacing: 2</span>
                <button class="border border-brand rounded px-1">+</button>
            </div>
            <button class="w-40 flex items-center space-x-1 px-2 py-1 rounded bg-transparent border border-none hover:bg-brand transition-all">
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.9999 6.5C20.2547 6.50028 20.4999 6.59788 20.6852 6.77285C20.8706 6.94782 20.9821 7.18695 20.997 7.44139C21.012 7.69584 20.9292 7.94638 20.7656 8.14183C20.602 8.33729 20.37 8.4629 20.1169 8.493L19.9999 8.5H19.9189L18.9999 19.5C18.9999 20.2652 18.7075 21.0015 18.1826 21.5583C17.6576 22.115 16.9398 22.4501 16.1759 22.495L15.9999 22.5H7.99987C6.40187 22.5 5.09587 21.251 5.00787 19.75L5.00287 19.583L4.07987 8.5H3.99987C3.74499 8.49972 3.49984 8.40212 3.3145 8.22715C3.12916 8.05218 3.01763 7.81305 3.0027 7.55861C2.98776 7.30416 3.07054 7.05362 3.23413 6.85817C3.39772 6.66271 3.62977 6.5371 3.88287 6.507L3.99987 6.5H19.9999ZM13.9999 2.5C14.5303 2.5 15.039 2.71071 15.4141 3.08579C15.7892 3.46086 15.9999 3.96957 15.9999 4.5C15.9996 4.75488 15.902 5.00003 15.727 5.18537C15.5521 5.3707 15.3129 5.48223 15.0585 5.49717C14.804 5.51211 14.5535 5.42933 14.358 5.26574C14.1626 5.10214 14.037 4.8701 14.0069 4.617L13.9999 4.5H9.99987L9.99287 4.617C9.96277 4.8701 9.83715 5.10214 9.6417 5.26574C9.44625 5.42933 9.19571 5.51211 8.94126 5.49717C8.68682 5.48223 8.44769 5.3707 8.27272 5.18537C8.09775 5.00003 8.00015 4.75488 7.99987 4.5C7.99971 3.99542 8.19028 3.50943 8.53337 3.13945C8.87646 2.76947 9.34671 2.54284 9.84987 2.505L9.99987 2.5H13.9999Z" fill="white"/>
                </svg>
                <span>Clear tab</span>
            </button>
        </div>
    </div>
</div>


<script>
    // Toggle the dropdown menu
    document.getElementById("interval-period").addEventListener("click", function() {
        const dropdownButton = document.getElementById("interval-period");
        const dropdownList = document.getElementById("interval-dropdownList");

        // Get button's position and dimensions
        const rect = dropdownButton.getBoundingClientRect();

        // Position the dropdown just below the button
        dropdownList.style.top = `${rect.bottom + window.scrollY + 8}px`;
        dropdownList.style.left = `${rect.left + window.scrollX}px`;

        dropdownList.classList.toggle("hidden");
    });

    // Update selected option and close the menu
    document.querySelectorAll("#interval-dropdownList li").forEach(function(item) {
        item.addEventListener("click", function() {
            // Update the button's label with the selected option
            document.getElementById("interval-selected").textContent = item.textContent;

            // Remove 'selected' class from all options and add it to the clicked one
            document.querySelectorAll("#interval-dropdownList li").forEach(li => li.classList.remove("selected"));
            item.classList.add("selected");

            // Close the dropdown
            document.getElementById("interval-dropdownList").classList.add("hidden");
        });
    });

    document.addEventListener("click", function(event) {
        const dropdownList = document.getElementById("interval-dropdownList");
        const dropdownButton = document.getElementById("interval-period");

        // If the click is outside the dropdown or the button, close the dropdown
        if (!dropdownList.contains(event.target) && !dropdownButton.contains(event.target)) {
            dropdownList.classList.add("hidden");
        }
    });
</script>