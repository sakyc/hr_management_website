<div>
    {{-- Profile Detail Container --}}
    <div class="bg-white min-h-screen ml-64 p-6">
        <div class="w-full mx-auto">
            {{-- Header Section --}}
            <div class="bg-white px-6 py-4 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <img src="https://via.placeholder.com/60x60" alt="Profile"
                            class="w-15 h-15 rounded-full object-cover">
                        <div>
                            <h1 class="text-2xl font-semibold text-gray-900">Brooklyn Simmons</h1>
                            <div class="flex items-center space-x-1 text-gray-600 mt-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6M8 6V4a2 2 0 012-2h4a2 2 0 012 2v2M8 6v10a2 2 0 002 2h4a2 2 0 002-2V6">
                                    </path>
                                </svg>
                                <span class="text-sm">Project Manager</span>
                            </div>
                            <div class="flex items-center space-x-1 text-gray-600 mt-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <span class="text-sm">brooklyn.s@example.com</span>
                            </div>
                        </div>
                    </div>
                    <button
                        class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg flex items-center space-x-2 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                            </path>
                        </svg>
                        <span>Edit Profile</span>
                    </button>
                </div>
            </div>

            {{-- Navigation Tabs --}}
            <div class="flex bg-white border-b border-gray-200">
                <div class="flex space-x-8 px-6">
                    <button
                        class="text-primary font-bold hover:text-primary px-4 py-3 flex items-center space-x-2 transition-colors border-b-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span>Personal Information</span>
                    </button>
                    <button
                        class="text-gray-600 hover:text-primary px-4 py-3 flex items-center space-x-2 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6M8 6V4a2 2 0 012-2h4a2 2 0 012 2v2M8 6v10a2 2 0 002 2h4a2 2 0 002-2V6">
                            </path>
                        </svg>
                        <span>Professional Information</span>
                    </button>
                    <button
                        class="text-gray-600 hover:text-primary px-4 py-3 flex items-center space-x-2 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                        <span>Documents</span>
                    </button>
                    <button
                        class="text-gray-600 hover:text-primary px-4 py-3 flex items-center space-x-2 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                            </path>
                        </svg>
                        <span>Account Access</span>
                    </button>
                </div>
            </div>

            {{-- Main Content Area --}}
            <div class="flex">
                {{-- Sidebar --}}
                <div class="w-64 bg-white border-r border-gray-200 min-h-screen">
                    <nav class="py-4">
                        <a href="#"
                            class="flex items-center space-x-3 px-6 py-3 text-white bg-primary border-r-2 border-indigo-600 rounded-t-lg">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"></path>
                            </svg>
                            <span>Profile</span>
                        </a>
                        <a href="#" class="flex items-center space-x-3 px-6 py-3 text-gray-700 hover:bg-gray-50">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                                </path>
                            </svg>
                            <span>Attendance</span>
                        </a>
                        <a href="#"
                            class="flex items-center space-x-3 px-6 py-3 text-gray-700 hover:bg-gray-50 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                </path>
                            </svg>
                            <span>Projects</span>
                        </a>
                        <a href="#"
                            class="flex items-center space-x-3 px-6 py-3 text-gray-700 hover:bg-gray-50 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                </path>
                            </svg>
                            <span>Leave</span>
                        </a>
                    </nav>
                </div>

                {{-- Content Area --}}
                <div class="flex-1 p-6">
                    <div class="grid grid-cols-2 gap-8">
                        {{-- Left Column --}}
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">First Name</label>
                                <p class="text-gray-900 font-medium">Brooklyn</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">Mobile Number</label>
                                <p class="text-gray-900 font-medium">(702) 555-0122</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">Date of Birth</label>
                                <p class="text-gray-900 font-medium">July 14, 1995</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">Gender</label>
                                <p class="text-gray-900 font-medium">Female</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">Address</label>
                                <p class="text-gray-900 font-medium">2464 Royal Ln, Mesa, New Jersey</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">State</label>
                                <p class="text-gray-900 font-medium">United State</p>
                            </div>
                        </div>

                        {{-- Right Column --}}
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">Last Name</label>
                                <p class="text-gray-900 font-medium">Simmons</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">Email Address</label>
                                <p class="text-gray-900 font-medium">brooklyn.s@example.com</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">Marital Status</label>
                                <p class="text-gray-900 font-medium">Married</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">Nationality</label>
                                <p class="text-gray-900 font-medium">America</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">City</label>
                                <p class="text-gray-900 font-medium">California</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500 mb-1">Zip Code</label>
                                <p class="text-gray-900 font-medium">35624</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
