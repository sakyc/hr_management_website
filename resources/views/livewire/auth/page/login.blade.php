<div class="h-100 w-90 flex flex-col bg-white gap-5">
    <div class="flex items-center gap-2">
        <img src="{{ asset('assets/images/logo/logo.png') }}" class="h-12 w-12" >
        <h1 class="text-3xl font-semibold">HRMS</h1>
    </div>
    <div>
        <h1 class="text-2xl font-semibold">Selamat Datang 👋</h1>
        <p class="text-sm text-grayColor">Silahkan login untuk melanjutkan</p>
    </div>
    <form class="flex flex-col gap-3">
        <label for="" class="flex flex-col py-1 px-2 border-2 border-primary rounded-lg">
            <p class="text-xs font-semibold text-primary">Email Address</p>
            <input type="text" class="w-full focus:outline-none">
        </label>
        <label x-data="{ show: false }" class="flex flex-row justify-between items-center py-1 px-2 border-2 border-primary rounded-lg">
            <div class="flex-1">
                <p class="text-xs font-semibold text-primary">Password</p>
                <input :type="show ? 'text' : 'password'" class="w-full focus:outline-none">
            </div>
            <i 
                :class="show ? 'fa-regular fa-eye' : 'fa-regular fa-eye-slash'" 
                class="text-primary cursor-pointer ml-2"
                @click="show = !show"
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
