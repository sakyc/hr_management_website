<div class="h-100 w-90 flex flex-col gap-10">
    <div class="flex items-center gap-2">
        <img src="{{ asset('assets/images/logo/logo.png') }}" class="h-12 w-12" >
        <h1 class="text-3xl font-semibold">HRMS</h1>
    </div>
    <div class="flex flex-col gap-2">
        <h1 class="text-2xl font-semibold">Welcome 👋</h1>
        <p class="text-sm text-grayColor">Please login here</p>
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

        <label 
        for="password" 
        x-data="{ showPw: true}" 
        class="flex flex-row justify-between items-center py-1 px-2 border-2 border-grayColor focus-within:border-primary rounded-lg"
        >
            <div  class="flex flex-col-reverse ">
                <input  
                x-bind:type="showPw ? 'text' : 'password'" id="password" 
                class="w-full focus:outline-none peer">
                <p class="text-xs font-semibold text-grayColor peer-focus:text-primary">Password</p>
            </div>
            <i 
            x-bind:class="showPw ? 'fa-solid fa-eye' : 'fa-solid fa-eye-slash'"
            class=" text-primary cursor-pointer ml-2"
            x-on:click="showPw = !showPw"
            >
            </i>
        </label>

        <div class="flex justify-between items-center">
            <div class="flex gap-2">
                <input type="checkbox">
                <a class="text-sm font-semibold">Remember me</a>
            </div>
            <a href="#" class="text-primary font-light text-sm">Forgot Password</a href="#">
        </div>
        
        <button class="bg-primary text-white py-2 rounded-lg" type="submit">Login</button> 
    </form>
</div>
