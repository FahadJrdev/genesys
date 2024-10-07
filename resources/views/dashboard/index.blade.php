<x-app-layout>
    <div class="bg-primaryBg text-primaryFont">
        <!-- Header with Publicity Advertisements -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-1">
            <!-- Left Banner -->
            <div class="flex items-center">
                <img src="{{ asset('assets/images/ads1.png') }}" alt="Left Banner">
            </div>
            <!-- Right Banner -->
            <div class="flex justify-end items-center">
                <img src="{{ asset('assets/images/ads2.png') }}" alt="Right Banner">
            </div>
        </div>

        <!-- Volume and TXNS Stats -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 text-center my-2">
            <div class="border border-brand rounded-lg py-2">
                <span class="text-sm">24H VOLUME:</span> 
                <span class="font-bold">$7.82B</span>
            </div>
            <div class="border border-brand rounded-lg py-2">
                <span class="text-sm">24H TXNS:</span> 
                <span class="font-bold">19,115,879</span>
            </div>
        </div>

        <!-- Filters and Sorting Options -->
         <div class="min-w-full overflow-y-hidden">
             <div class="min-w-[400%] sm:min-w-[300%] md:min-w-full flex justify-between items-center space-x-2 py-2">
                 <div class="flex flex-1 items-center space-x-2">
                     <!-- Last 24 hours -->
                     <button class="flex items-center space-x-1 px-3 py-2 rounded bg-brand text-primaryFont">
                         <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                             <!-- Clock icon SVG -->
                         </svg>
                         <span>Last 24 hours</span>
                         <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                             <!-- Dropdown arrow SVG -->
                         </svg>
                     </button>
     
                     <!-- Trending -->
                     <div class="flex items-center space-x-1 px-3 py-1 rounded bg-brand text-primaryFont">
                         <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                             <!-- Trending icon SVG -->
                         </svg>
                         <span>Trending</span>
                         <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                             <!-- Info icon SVG -->
                         </svg>
                         <div class="flex items-center text-primaryFont">
                             <button class="period-trade px-2 py-1 rounded bg-transparent hover:bg-white hover:text-black">1h</button>
                             <button class="period-trade px-2 py-1 rounded bg-transparent hover:bg-white hover:text-black">6h</button>
                             <button class="period-trade px-2 py-1 rounded bg-white text-black hover:bg-white hover:text-black">24h</button>
                             <button class="period-trade px-2 py-1 rounded bg-transparent hover:bg-white hover:text-black">7d</button>
                         </div>
                     </div>
     
                     <!-- Top -->
                     <button class="px-3 py-2 rounded bg-transparent border border-brand text-primaryFont">
                         Top
                     </button>
     
                     <!-- Gainers -->
                     <button class="px-3 py-2 rounded bg-transparent border border-brand text-primaryFont">
                         Gainers
                     </button>
     
                     <!-- New Pairs -->
                     <button class="px-3 py-2 rounded bg-transparent border border-brand text-primaryFont">
                         New Pairs
                     </button>
                 </div>
     
                 <!-- Move buttons to the right -->
                 <div class="ml-auto flex items-center space-x-2">
                     <!-- Rank by -->
                     <button class="flex items-center space-x-1 px-3 py-2 rounded bg-transparent border border-brand text-primaryFont">
                         <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                             <!-- Trophy icon SVG -->
                         </svg>
                         <span>Rank by:</span>
                         <span>Trending 6H</span>
                         <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                             <!-- Dropdown arrow SVG -->
                         </svg>
                     </button>
     
                     <!-- Filters -->
                     <button class="flex items-center space-x-1 px-3 py-2 rounded bg-transparent border border-brand text-primaryFont">
                         <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                             <!-- Filter icon SVG -->
                         </svg>
                         <span>Filters</span>
                     </button>
                 </div>
             </div>
         </div>

        <!-- Token List Table -->
        <div class="min-w-full overflow-y-hidden py-2">
            <table class="min-w-[400%] sm:min-w-[300%] md:min-w-full bg-primaryBg text-right text-sm">
                <thead class="bg-secondaryBg text-primaryFont text-sm">
                    <tr>
                        <th class="px-6 py-3 w-1/2">TOKEN</th> <!-- First column wider -->
                        <th class="px-6 py-3 w-1/4">PRICE</th> <!-- Second column wider -->
                        <th class="px-6 py-3">TXNS</th>
                        <th class="px-6 py-3">VOLUME</th>
                        <th class="px-6 py-3">MARKERS</th>
                        <th class="px-6 py-3">5M</th>
                        <th class="px-6 py-3">1H</th>
                        <th class="px-6 py-3">6H</th>
                        <th class="px-6 py-3">24H</th>
                        <th class="px-6 py-3">LIQUIDITY</th>
                        <th class="px-6 py-3">MCAP</th>
                    </tr>
                </thead>
                <tbody class="text-gray-300">
                    <tr class="border-b border-gray-600">
                        <td class="px-6 py-3 w-2/5">#10 SAM/SOL</td> <!-- First column wider -->
                        <td class="px-6 py-3 w-1/4">$0.0007930</td> <!-- Second column wider -->
                        <td class="px-6 py-3">27,529</td>
                        <td class="px-6 py-3">$5.1M</td>
                        <td class="px-6 py-3">6,184</td>
                        <td class="px-6 py-3 text-red-500">-8.89%</td>
                        <td class="px-6 py-3 text-red-500">-22.47%</td>
                        <td class="px-6 py-3 text-green-500">1,273%</td>
                        <td class="px-6 py-3 text-green-500">1,273%</td>
                        <td class="px-6 py-3">$100K</td>
                        <td class="px-6 py-3">$793K</td>
                    </tr>
                    <!-- More rows as needed -->
                </tbody>
            </table>
        </div>

    </div>
</x-app-layout>