<div>
    <div class="min-h-screen bg-gray-50">
        <!-- Main Content -->
        <div class="ml-64">
            <!-- Dashboard Content -->
            <main class="p-6">
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
                    <!-- Left Column - Stats and Charts -->
                    <div class="lg:col-span-3 space-y-6">
                        <!-- Stats Cards -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                            <!-- Total Employees -->
                            <div class="bg-white rounded-lg p-6 shadow-sm">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-sm text-gray-600">Total Employee</p>
                                        <p class="text-2xl font-bold text-gray-900">560</p>
                                        <p class="text-xs text-gray-500">4 Unread</p>
                                    </div>
                                    <div class="text-green-500 text-xs font-medium">+4%</div>
                                </div>
                            </div>

                            <!-- Job Applicant -->
                            <div class="bg-white rounded-lg p-6 shadow-sm">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-sm text-gray-600">Job Applicant</p>
                                        <p class="text-2xl font-bold text-gray-900">1050</p>
                                        <p class="text-xs text-gray-500">Update from 18 days</p>
                                    </div>
                                    <div class="text-green-500 text-xs font-medium">+4%</div>
                                </div>
                            </div>

                            <!-- Today Attendance -->
                            <div class="bg-white rounded-lg p-6 shadow-sm">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-sm text-gray-600">Today Attendance</p>
                                        <p class="text-2xl font-bold text-gray-900">470</p>
                                        <p class="text-xs text-gray-500">Update from 18 days</p>
                                    </div>
                                    <div class="text-red-500 text-xs font-medium">-4%</div>
                                </div>
                            </div>

                            <!-- Total Projects -->
                            <div class="bg-white rounded-lg p-6 shadow-sm">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-sm text-gray-600">Total Projects</p>
                                        <p class="text-2xl font-bold text-gray-900">250</p>
                                        <p class="text-xs text-gray-500">Update from 18 days</p>
                                    </div>
                                    <div class="text-green-500 text-xs font-medium">+4%</div>
                                </div>
                            </div>
                        </div>

                        <!-- Attendance Chart -->
                        <div class="bg-white rounded-lg p-6 shadow-sm">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-semibold text-gray-900">Attendance Overview</h3>
                                <select
                                    class="text-sm border rounded px-3 py-1 focus:outline-none focus:ring-2 focus:ring-purple-500">
                                    <option>Today</option>
                                    <option>This Week</option>
                                    <option>This Month</option>
                                </select>
                            </div>

                            <!-- Chart Container -->
                            <div class="h-64 flex items-end justify-between">
                                <!-- Mon -->
                                <div class="flex-1 flex flex-col items-center">
                                    <div class="w-2 bg-gray-100 rounded-t flex flex-col" style="height: 200px;">
                                        <div class="bg-blue-500 rounded-t mb-2" style="height: 45%;"></div>
                                        <div class="bg-yellow-400" style="height: 25%;"></div>
                                        <div class="bg-red-500 rounded-b" style="height: 30%;"></div>
                                    </div>
                                    <span class="text-xs text-gray-500 mt-2">Mon</span>
                                </div>

                                <!-- Tue -->
                                <div class="flex-1 flex flex-col items-center">
                                    <div class="w-4 bg-gray-100 rounded-t flex flex-col" style="height: 220px;">
                                        <div class="bg-blue-500 rounded-t" style="height: 50%;"></div>
                                        <div class="bg-yellow-400" style="height: 20%;"></div>
                                        <div class="bg-red-500 rounded-b" style="height: 30%;"></div>
                                    </div>
                                    <span class="text-xs text-gray-500 mt-2">Tue</span>
                                </div>

                                <!-- Wed -->
                                <div class="flex-1 flex flex-col items-center">
                                    <div class="w-4 bg-gray-100 rounded-t flex flex-col" style="height: 240px;">
                                        <div class="bg-blue-500 rounded-t" style="height: 55%;"></div>
                                        <div class="bg-yellow-400" style="height: 15%;"></div>
                                        <div class="bg-red-500 rounded-b" style="height: 30%;"></div>
                                    </div>
                                    <span class="text-xs text-gray-500 mt-2">Wed</span>
                                </div>

                                <!-- Thu -->
                                <div class="flex-1 flex flex-col items-center">
                                    <div class="w-4 bg-gray-100 rounded-t flex flex-col" style="height: 200px;">
                                        <div class="bg-blue-500 rounded-t" style="height: 60%;"></div>
                                        <div class="bg-yellow-400" style="height: 10%;"></div>
                                        <div class="bg-red-500 rounded-b" style="height: 30%;"></div>
                                    </div>
                                    <span class="text-xs text-gray-500 mt-2">Thu</span>
                                </div>

                                <!-- Fri -->
                                <div class="flex-1 flex flex-col items-center">
                                    <div class="w-4 bg-gray-100 rounded-t flex flex-col" style="height: 180px;">
                                        <div class="bg-blue-500 rounded-t" style="height: 40%;"></div>
                                        <div class="bg-yellow-400" style="height: 25%;"></div>
                                        <div class="bg-red-500 rounded-b" style="height: 35%;"></div>
                                    </div>
                                    <span class="text-xs text-gray-500 mt-2">Fri</span>
                                </div>

                                <!-- Sat -->
                                <div class="flex-1 flex flex-col items-center">
                                    <div class="w-4 bg-gray-100 rounded-t flex flex-col" style="height: 260px;">
                                        <div class="bg-blue-500 rounded-t" style="height: 65%;"></div>
                                        <div class="bg-yellow-400" style="height: 15%;"></div>
                                        <div class="bg-red-500 rounded-b" style="height: 20%;"></div>
                                    </div>
                                    <span class="text-xs text-gray-500 mt-2">Sat</span>
                                </div>

                                <!-- Sun -->
                                <div class="flex-1 flex flex-col items-center">
                                    <div class="w-4 bg-gray-100 rounded-t flex flex-col" style="height: 160px;">
                                        <div class="bg-blue-500 rounded-t" style="height: 50%;"></div>
                                        <div class="bg-yellow-400" style="height: 20%;"></div>
                                        <div class="bg-red-500 rounded-b" style="height: 30%;"></div>
                                    </div>
                                    <span class="text-xs text-gray-500 mt-2">Sun</span>
                                </div>
                            </div>

                            <!-- Chart Legend -->
                            <div class="flex justify-center space-x-6 mt-4">
                                <div class="flex items-center space-x-2">
                                    <div class="w-3 h-3 bg-blue-500 rounded"></div>
                                    <span class="text-xs text-gray-600">Present</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="w-3 h-3 bg-yellow-400 rounded"></div>
                                    <span class="text-xs text-gray-600">Late</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="w-3 h-3 bg-red-500 rounded"></div>
                                    <span class="text-xs text-gray-600">Absent</span>
                                </div>
                            </div>
                        </div>

                        <!-- Attendance Overview Table -->
                        <div class="bg-white rounded-lg p-6 shadow-sm">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-semibold text-gray-900">Attendance Overview</h3>
                                <a href="#" class="text-purple-600 text-sm hover:underline">View All</a>
                            </div>

                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                        <tr class="border-b">
                                            <th class="text-left py-3 px-4 font-medium text-gray-600">Employee</th>
                                            <th class="text-left py-3 px-4 font-medium text-gray-600">Team Lead -
                                                Design</th>
                                            <th class="text-left py-3 px-4 font-medium text-gray-600">Office</th>
                                            <th class="text-left py-3 px-4 font-medium text-gray-600">Check In Time
                                            </th>
                                            <th class="text-left py-3 px-4 font-medium text-gray-600">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-b hover:bg-gray-50">
                                            <td class="py-3 px-4">
                                                <div class="flex items-center space-x-3">
                                                    <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                        alt="Employee" class="w-8 h-8 rounded-full">
                                                    <span class="font-medium text-gray-900">Leslie Watson</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4 text-gray-600">Team Lead - Design</td>
                                            <td class="py-3 px-4 text-gray-600">Office</td>
                                            <td class="py-3 px-4 text-gray-600">09:27 AM</td>
                                            <td class="py-3 px-4">
                                                <span
                                                    class="px-2 py-1 text-xs font-medium bg-green-100 text-green-800 rounded-full">On
                                                    Time</span>
                                            </td>
                                        </tr>

                                        <tr class="border-b hover:bg-gray-50">
                                            <td class="py-3 px-4">
                                                <div class="flex items-center space-x-3">
                                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                        alt="Employee" class="w-8 h-8 rounded-full">
                                                    <span class="font-medium text-gray-900">Darlene Robertson</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4 text-gray-600">Web Designer</td>
                                            <td class="py-3 px-4 text-gray-600">Office</td>
                                            <td class="py-3 px-4 text-gray-600">10:15 AM</td>
                                            <td class="py-3 px-4">
                                                <span
                                                    class="px-2 py-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full">Late</span>
                                            </td>
                                        </tr>

                                        <tr class="border-b hover:bg-gray-50">
                                            <td class="py-3 px-4">
                                                <div class="flex items-center space-x-3">
                                                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                        alt="Employee" class="w-8 h-8 rounded-full">
                                                    <span class="font-medium text-gray-900">Jacob Jones</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4 text-gray-600">Medical Assistant</td>
                                            <td class="py-3 px-4 text-gray-600">Remote</td>
                                            <td class="py-3 px-4 text-gray-600">10:24 AM</td>
                                            <td class="py-3 px-4">
                                                <span
                                                    class="px-2 py-1 text-xs font-medium bg-red-100 text-red-800 rounded-full">Absent</span>
                                            </td>
                                        </tr>

                                        <tr class="border-b hover:bg-gray-50">
                                            <td class="py-3 px-4">
                                                <div class="flex items-center space-x-3">
                                                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                        alt="Employee" class="w-8 h-8 rounded-full">
                                                    <span class="font-medium text-gray-900">Kathryn Murphy</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4 text-gray-600">Marketing Coordinator</td>
                                            <td class="py-3 px-4 text-gray-600">Office</td>
                                            <td class="py-3 px-4 text-gray-600">09:10 AM</td>
                                            <td class="py-3 px-4">
                                                <span
                                                    class="px-2 py-1 text-xs font-medium bg-green-100 text-green-800 rounded-full">On
                                                    Time</span>
                                            </td>
                                        </tr>

                                        <tr class="border-b hover:bg-gray-50">
                                            <td class="py-3 px-4">
                                                <div class="flex items-center space-x-3">
                                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                        alt="Employee" class="w-8 h-8 rounded-full">
                                                    <span class="font-medium text-gray-900">Leslie Alexander</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4 text-gray-600">Data Analyst</td>
                                            <td class="py-3 px-4 text-gray-600">Office</td>
                                            <td class="py-3 px-4 text-gray-600">09:15 AM</td>
                                            <td class="py-3 px-4">
                                                <span
                                                    class="px-2 py-1 text-xs font-medium bg-green-100 text-green-800 rounded-full">On
                                                    Time</span>
                                            </td>
                                        </tr>

                                        <tr class="border-b hover:bg-gray-50">
                                            <td class="py-3 px-4">
                                                <div class="flex items-center space-x-3">
                                                    <img src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                        alt="Employee" class="w-8 h-8 rounded-full">
                                                    <span class="font-medium text-gray-900">Ronald Richards</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4 text-gray-600">Python Developer</td>
                                            <td class="py-3 px-4 text-gray-600">Remote</td>
                                            <td class="py-3 px-4 text-gray-600">09:20 AM</td>
                                            <td class="py-3 px-4">
                                                <span
                                                    class="px-2 py-1 text-xs font-medium bg-green-100 text-green-800 rounded-full">On
                                                    Time</span>
                                            </td>
                                        </tr>

                                        <tr class="hover:bg-gray-50">
                                            <td class="py-3 px-4">
                                                <div class="flex items-center space-x-3">
                                                    <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                        alt="Employee" class="w-8 h-8 rounded-full">
                                                    <span class="font-medium text-gray-900">Jenny Wilson</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4 text-gray-600">React JS Developer</td>
                                            <td class="py-3 px-4 text-gray-600">Remote</td>
                                            <td class="py-3 px-4 text-gray-600">11:30 AM</td>
                                            <td class="py-3 px-4">
                                                <span
                                                    class="px-2 py-1 text-xs font-medium bg-red-100 text-red-800 rounded-full">Late</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column - Calendar and Schedule -->
                    <div class="space-y-6">
                        <!-- Calendar -->
                        <div class="bg-white rounded-lg p-6 shadow-sm">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-semibold text-gray-900">My Schedule</h3>
                                <button class="p-1 rounded hover:bg-gray-100">
                                    <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                        </path>
                                    </svg>
                                </button>
                            </div>

                            <!-- Calendar Header -->
                            <div class="text-center mb-4">
                                <h4 class="text-lg font-semibold text-gray-900">July, 2023</h4>
                            </div>

                            <!-- Calendar Grid -->
                            <div class="grid grid-cols-7 gap-1 mb-4">
                                <div class="text-center text-xs font-medium text-gray-500 py-2">Su</div>
                                <div class="text-center text-xs font-medium text-gray-500 py-2">Mo</div>
                                <div class="text-center text-xs font-medium text-gray-500 py-2">Tu</div>
                                <div class="text-center text-xs font-medium text-gray-500 py-2">We</div>
                                <div class="text-center text-xs font-medium text-gray-500 py-2">Th</div>
                                <div class="text-center text-xs font-medium text-gray-500 py-2">Fr</div>
                                <div class="text-center text-xs font-medium text-gray-500 py-2">Sa</div>

                                <!-- Empty cells for padding -->
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>

                                <!-- Calendar days -->
                                <div
                                    class="text-center py-2 text-sm text-gray-600 cursor-pointer hover:bg-gray-100 rounded">
                                    1</div>
                                <div
                                    class="text-center py-2 text-sm text-gray-600 cursor-pointer hover:bg-gray-100 rounded">
                                    2</div>
                                <div
                                    class="text-center py-2 text-sm text-gray-600 cursor-pointer hover:bg-gray-100 rounded">
                                    3</div>
                                <div
                                    class="text-center py-2 text-sm text-gray-600 cursor-pointer hover:bg-gray-100 rounded">
                                    4</div>
                                <div
                                    class="text-center py-2 text-sm text-gray-600 cursor-pointer hover:bg-gray-100 rounded">
                                    5</div>
                                <div
                                    class="text-center py-2 text-sm font-medium text-white bg-purple-600 rounded cursor-pointer">
                                    6</div>
                                <div
                                    class="text-center py-2 text-sm text-gray-600 cursor-pointer hover:bg-gray-100 rounded">
                                    7</div>
                                <div
                                    class="text-center py-2 text-sm text-gray-600 cursor-pointer hover:bg-gray-100 rounded">
                                    8</div>
                                <div
                                    class="text-center py-2 text-sm text-gray-600 cursor-pointer hover:bg-gray-100 rounded">
                                    9</div>
                                <div
                                    class="text-center py-2 text-sm text-gray-600 cursor-pointer hover:bg-gray-100 rounded">
                                    10</div>
                                <div
                                    class="text-center py-2 text-sm text-gray-600 cursor-pointer hover:bg-gray-100 rounded">
                                    11</div>
                                <div
                                    class="text-center py-2 text-sm text-gray-600 cursor-pointer hover:bg-gray-100 rounded">
                                    12</div>
                                <div
                                    class="text-center py-2 text-sm text-gray-600 cursor-pointer hover:bg-gray-100 rounded">
                                    13</div>
                                <div
                                    class="text-center py-2 text-sm text-gray-600 cursor-pointer hover:bg-gray-100 rounded">
                                    14</div>
                                <div
                                    class="text-center py-2 text-sm text-gray-600 cursor-pointer hover:bg-gray-100 rounded">
                                    15</div>
                                <div
                                    class="text-center py-2 text-sm text-gray-600 cursor-pointer hover:bg-gray-100 rounded">
                                    16</div>
                                <div
                                    class="text-center py-2 text-sm text-gray-600 cursor-pointer hover:bg-gray-100 rounded">
                                    17</div>
                                <div
                                    class="text-center py-2 text-sm text-gray-600 cursor-pointer hover:bg-gray-100 rounded">
                                    18</div>
                                <div
                                    class="text-center py-2 text-sm text-gray-600 cursor-pointer hover:bg-gray-100 rounded">
                                    19</div>
                                <div
                                    class="text-center py-2 text-sm text-gray-600 cursor-pointer hover:bg-gray-100 rounded">
                                    20</div>
                                <div
                                    class="text-center py-2 text-sm text-gray-600 cursor-pointer hover:bg-gray-100 rounded">
                                    21</div>
                                <div
                                    class="text-center py-2 text-sm text-gray-600 cursor-pointer hover:bg-gray-100 rounded">
                                    22</div>
                                <div
                                    class="text-center py-2 text-sm text-gray-600 cursor-pointer hover:bg-gray-100 rounded">
                                    23</div>
                                <div
                                    class="text-center py-2 text-sm text-gray-600 cursor-pointer hover:bg-gray-100 rounded">
                                    24</div>
                                <div
                                    class="text-center py-2 text-sm text-gray-600 cursor-pointer hover:bg-gray-100 rounded">
                                    25</div>
                                <div
                                    class="text-center py-2 text-sm text-gray-600 cursor-pointer hover:bg-gray-100 rounded">
                                    26</div>
                                <div
                                    class="text-center py-2 text-sm text-gray-600 cursor-pointer hover:bg-gray-100 rounded">
                                    27</div>
                                <div
                                    class="text-center py-2 text-sm text-gray-600 cursor-pointer hover:bg-gray-100 rounded">
                                    28</div>
                                <div
                                    class="text-center py-2 text-sm text-gray-600 cursor-pointer hover:bg-gray-100 rounded">
                                    29</div>
                                <div
                                    class="text-center py-2 text-sm text-gray-600 cursor-pointer hover:bg-gray-100 rounded">
                                    30</div>
                            </div>
                        </div>

                        <!-- Schedule Events -->
                        <div class="bg-white rounded-lg p-6 shadow-sm">
                            <div class="space-y-4">
                                <!-- Wednesday Schedule -->
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <h4 class="text-sm font-medium text-gray-900">Wednesday, 05 July 2023</h4>
                                        <button class="p-1 rounded hover:bg-gray-100">
                                            <svg class="w-4 h-4 text-gray-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>

                                    <div class="space-y-3">
                                        <div class="flex items-center space-x-3 p-3 bg-purple-50 rounded-lg">
                                            <div class="w-2 h-8 bg-purple-600 rounded"></div>
                                            <div class="flex-1">
                                                <p class="text-sm font-medium text-gray-900">09:30</p>
                                                <p class="text-sm text-gray-600">Product Task Review</p>
                                                <p class="text-xs text-gray-500">Magento Developer</p>
                                            </div>
                                        </div>

                                        <div class="flex items-center space-x-3 p-3 bg-blue-50 rounded-lg">
                                            <div class="w-2 h-8 bg-blue-600 rounded"></div>
                                            <div class="flex-1">
                                                <p class="text-sm font-medium text-gray-900">12:00</p>
                                                <p class="text-sm text-gray-600">Resume Review</p>
                                                <p class="text-xs text-gray-500">Sales Manager</p>
                                            </div>
                                        </div>

                                        <div class="flex items-center space-x-3 p-3 bg-green-50 rounded-lg">
                                            <div class="w-2 h-8 bg-green-600 rounded"></div>
                                            <div class="flex-1">
                                                <p class="text-sm font-medium text-gray-900">01:30</p>
                                                <p class="text-sm text-gray-600">Final HR Round</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Thursday Schedule -->
                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <h4 class="text-sm font-medium text-gray-900">Thursday, 07 July 2023</h4>
                                        <button class="p-1 rounded hover:bg-gray-100">
                                            <svg class="w-4 h-4 text-gray-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>

                                    <div class="space-y-3">
                                        <div class="flex items-center space-x-3 p-3 bg-yellow-50 rounded-lg">
                                            <div class="w-2 h-8 bg-yellow-600 rounded"></div>
                                            <div class="flex-1">
                                                <p class="text-sm font-medium text-gray-900">09:30</p>
                                                <p class="text-sm text-gray-600">Product Task Review</p>
                                                <p class="text-xs text-gray-500">Front and Developer</p>
                                            </div>
                                        </div>

                                        <div class="flex items-center space-x-3 p-3 bg-red-50 rounded-lg">
                                            <div class="w-2 h-8 bg-red-600 rounded"></div>
                                            <div class="flex-1">
                                                <p class="text-sm font-medium text-gray-900">11:00</p>
                                                <p class="text-sm text-gray-600">TL Meeting</p>
                                                <p class="text-xs text-gray-500">React JS</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>


</div>
