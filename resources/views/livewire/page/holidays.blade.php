<div class="min-h-screen bg-white p-6 ml-64 rounded">
    <div class="p-5 bg-white shadow-md rounded-md flex flex-col gap-5">
        <div class="flex justify-between items-center">
            {{-- search --}}
            <div class="flex gap-2 p-2 shadow-sm rounded-md">
                <i class="fa-solid fa-magnifying-glass text-2xl"></i>
                <input type="text" class="focus:outline-none" placeholder="Search">
            </div>
            {{-- add --}}
            <div>
                <button class="bg-primary text-white py-2 px-4 rounded-lg flex gap-2 items-center" type="submit">
                    <i class="fa-solid fa-plus"></i>
                    Add New Holiday
                </button>
            </div>
        </div>
        {{-- table --}}
        <table class="mt-10 w-full">
            <thead class="border-b border-gray-200">
                <tr class="font-semibold text-grayColor h-10">
                    <td>Date</td>
                    <td>Day</td>    
                    <td>Holidays Name</td>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b border-gray-200 h-10">
                    <td>January 01, 2025</td>
                    <td>Tuesday</td>
                    <td>New Year</td>
                </tr>
                <tr class="border-b border-gray-200 h-10">
                    <td>January 01, 2025</td>
                    <td>Tuesday</td>
                    <td>New Year</td>
                </tr>
                <tr class="border-b border-gray-200 h-10">
                    <td>January 01, 2025</td>
                    <td>Tuesday</td>
                    <td>New Year</td>
                </tr>
            </tbody>
        </table>

        <div class="flex gap-2">
            <div class="flex items-center gap-2">
                <div class="h-2 w-2 bg-primary rounded-full"></div>
                <h1 class="font-bold text-sm">Upcoming</h1>
            </div>
            <div class="flex items-center gap-2">
                <div class="h-2 w-2 bg-grayColor rounded-full"></div>
                <h1 class="font-bold text-sm">Post Holiday</h1>
            </div>
            
        </div>
    </div>
    
</div>