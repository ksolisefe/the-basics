<div>
    <h1 class="mb-4 text-2xl text-slate-700 font-semibold">Update your profile...</h1>

    <form wire:submit="save" class="min-w-[30rem] flex flex-col gap-6 rounded-lg shadow p-6 bg-white/5">
        <div class="flex flex-col gap-2">
            <h3 class="font-medium text-base">Username</h3>

            <input
                wire:model.live="form.username"
                @class([
                    'px-3 py-2 rounded-lg text-black',
                    'border border-slate-300' => $errors->missing('form.username'),
                    'border-3 border-red-300' => $errors->has('form.username'),
                ])
            >
            @error('form.username')
                <p class="text-sm text-red-500">{{ $message }}</p>            
            @enderror
        </div>

        <div class="flex flex-col gap-2">
            <h3 class="font-medium text-base">Bio</h3>

            <textarea
                wire:model="form.bio"
                rows="4"
                class="px-3 py-2 border border-slate-300 rounded-lg text-black"
                ></textarea>
        </div>

        <div class="flex">
            <button type="submit" class="relative w-full bg-blue-500 py-3 px-8 rounded-lg text-white font-medium disabled:cursor-not-allowed disabled:opacity-75">
                Save
                <div
                    wire:loading.flex
                    wire:target="save"
                    class="flex absolute top-0 right-0 bottom-0 items-center pr-4"
                >
                    <svg class="mr-2 size-5 animate-spin text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                    </svg>
                </div>
            </button>
        </div>
    </form>

    
    <div
        x-show="$wire.showSuccessIndicator"
        x-transition.opacity.out.duration.2000ms
        x-effect="if($wire.showSuccessIndicator) { setTimeout(() => $wire.set('showSuccessIndicator', false), 3000) }"
        class="flex justify-end space-x-2 mt-4"
    >
        <span class="inline-block w-3 h-3 rounded-full bg-green-500 animate-pulse"></span>
        <span class="text-sm text-white-600">Profile is up to date</span>
    </div>
</div>