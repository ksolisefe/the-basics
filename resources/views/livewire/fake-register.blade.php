<div class="rounded-xl shadow p-8 flex flex-col gap-6 max-w-[35rem]">
    <div>
        <h2 class="text-3xl font-bold mb-1">Let's start your journey!</h2>
        <span class="text-lg pb-2 text-slate-600">Sign up for a new account</span>
    </div>

    <hr class="w-[75%]">

    <label class="flex flex-col gap-2">
        Email
        <input type="email" class="px-3 py-2 border border-slate-300 rounded-lg">
    </label>

    <label class="flex flex-col gap-2">
        Password
        <input type="password" class="px-3 py-2 border border-slate-300 rounded-lg">
    </label>

    <label class="flex flex-col gap-2">
        Confirm password
        <input type="password" class="px-3 py-2 border border-slate-300 rounded-lg">
    </label>

    <div class="flex justify-between items-center pt-4">
        <div class="flex justify-start items-center gap-2 text-sm">
            <input type="checkbox" class="border">

            <span>I agree to the</span>

            <div x-data="{ open: false }">
                <button x-on:click="open = true" type="button" class="underline text-blue-500">
                    terms of service.
                </button>
                
                <div x-show="open">
                    <div class="fixed inset-0 flex justify-center items-center">
                        <div class="bg-white rounded-xl shadow-xl p-8 text-black">
                            Some content
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="w-1/2 text-center rounded-xl bg-blue-500 text-white px-3 py-2 font-medium">Register</button>
    </div>
    
</div>
