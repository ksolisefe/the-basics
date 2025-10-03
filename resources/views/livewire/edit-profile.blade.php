<div>
    <h1 class="mb-4 text-2xl text-slate-700 font-semibold">Update your profile...</h1>

    <form wire:submit="save" class="min-w-[30rem] flex flex-col gap-6 rounded-lg shadow p-6 bg-white/5">
        <label class="flex flex-col gap-2">
            <h3 class="font-medium text-base">Username <span class="text-red-500 opacity-75" aria-hidden="true">*</span></h3>

            <input
                
                wire:model.live="form.username"
                @class([
                    'px-3 py-2 rounded-lg text-black',
                    'border border-slate-300' => $errors->missing('form.username'),
                    'border-3 border-red-300' => $errors->has('form.username'),
                ])
                @error('form.username')
                    aria-invalid="true"
                    aria-description="{{ $message }}"
                @enderror
            >
            @error('form.username')
                <p class="text-sm text-red-500" aria-live="assertive">{{ $message }}</p>            
            @enderror
        </label>

        <label class="flex flex-col gap-2">
            <h3 class="font-medium text-base">Bio</h3>

            <textarea
                aria-label="Bio"
                wire:model="form.bio"
                rows="4"
                class="px-3 py-2 border border-slate-300 rounded-lg text-black"
                ></textarea>
        </label>

        <label class="flex flex-col gap-2">
            <h3 class="font-medium text-base">Country <span class="text-red-500 opacity-75" aria-hidden="true">*</span></h3>

            <select
                
                wire:model.live="form.country"
                @class([
                    'px-3 py-2 rounded-lg text-black',
                    'border border-slate-300' => $errors->missing('form.country'),
                    'border-3 border-red-300' => $errors->has('form.country'),
                ])
                @error('form.country')
                    aria-invalid="true"
                    aria-description="{{ $message }}"
                @enderror
            >
                <option value="" selected disabled>Choose your country</option>
                @foreach (App\Enums\Country::cases() as $country)
                    <option value="{{ $country->value }}">{{ $country->label() }}</option>
                @endforeach
            </select>
            @error('form.country')
                <p class="text-sm text-red-500" aria-live="assertive">{{ $message }}</p>            
            @enderror
        </label>

        <fieldset class="flex flex-col gap-2">
            <div>
                <legend class="font-medium text-base">Receive Emails</legend>
            </div>

            <div class="flex gap-6">
                <label class="flex items-center gap-2">
                    <input wire:model.boolean="form.receive_emails" type="radio" name="receive_emails" value="true">
                    Yes
                </label>
                <label class="flex items-center gap-2">
                    <input wire:model.boolean="form.receive_emails" type="radio" name="receive_emails" value="false">
                    No
                </label>
            </div>
        </fieldset>

        <fieldset x-show="$wire.form.receive_emails" x-collapse class="flex flex-col gap-2">
            <div>
                <legend class="font-medium text-base">Email Type</legend>
            </div>

            <div class="flex flex-col gap-2">
                <label class="flex items-center gap-2">
                    <input
                        wire:model="form.receive_updates"
                        type="checkbox"
                        name="receive_updates"
                        class="rounded"
                    >
                    General Updates
                </label>
                <label class="flex items-center gap-2">
                    <input
                        wire:model="form.receive_offers"
                        type="checkbox"
                        name="receive_offers"
                        class="rounded"
                    >
                    Marketing offers
                </label>
            </div>
        </fieldset>

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
        aria-live="polite"
    >
        <span class="inline-block w-3 h-3 rounded-full bg-green-500 animate-pulse"></span>
        <span class="text-sm text-white-600">Profile is up to date</span>
    </div>
</div>