<div class="p-20 flex flex-col gap-10 " >
    <a href="/login" wire:navigate class="cursor-pointer flex gap-3 items-center">
        <i class="fa-solid fa-chevron-left"></i>
        <span>Back</span>
    </a>
    <div>
        <h1 class="text-3xl font-semibold">Forgot Password</h1>
        <span class="text-sm text-grayColor">Enter your registered email address. we’ll send you a code to reset your password.</span>
    </div>
    <form class="flex flex-col gap-3">
        <label for="email" 
        class="flex flex-col-reverse py-1 px-2 border-2 border-grayColor rounded-lg focus-within:border-primary ">
            <input 
            type="email" 
            id="email" 
            class="w-full focus:outline-none peer"
            >
            <p class="text-xs font-semibold text-grayColor peer-focus:text-primary">Email Address</p>
        </label>
        <button class="bg-primary text-white py-2 rounded-lg" type="submit">Login</button>
    </form>
</div>
