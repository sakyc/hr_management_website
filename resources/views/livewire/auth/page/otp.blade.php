<div class="p-20 flex flex-col gap-10 ">
    <a href="/login" wire:navigate class="cursor-pointer flex gap-3 items-center">
        <i class="fa-solid fa-chevron-left"></i>
        <span>Back</span>
    </a>
    <div>
        <h1 class="text-3xl font-semibold">Forgot Password</h1>
        <span 
        class="text-sm text-grayColor">
            We have share a code of your registered email address nuansauai@example.com
        </span>
    </div>
        <form wire:submit.prevent="tust" class="flex flex-col gap-5">
            <div class="flex flex-row gap-5">
                <input type="text" class="w-full border-2 border-grayColor focus:border-primary rounded-lg focus:outline-none h-14 text-center" maxlength="1">
                <input type="text" class="w-full border-2 border-grayColor focus:border-primary rounded-lg focus:outline-none h-14 text-center" maxlength="1">
                <input type="text" class="w-full border-2 border-grayColor focus:border-primary rounded-lg focus:outline-none h-14 text-center" maxlength="1">
                <input type="text" class="w-full border-2 border-grayColor focus:border-primary rounded-lg focus:outline-none h-14 text-center" maxlength="1">
                <input type="text" class="w-full border-2 border-grayColor focus:border-primary rounded-lg focus:outline-none h-14 text-center" maxlength="1">
            </div>
        <button class="bg-primary text-white py-2 rounded-lg" type="submit">Verify</button>
        </form>
</div>
