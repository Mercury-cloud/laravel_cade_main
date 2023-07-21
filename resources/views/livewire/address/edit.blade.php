<div class="panel panel-default">
    <div class="panel panel-default">
    </div>
    <div class="panel-heading">
        <h3 class="panel-title">Edit Address</h3>
    </div>
    <form wire:submit.prevent="update" class="space-y-8 divide-y divide-gray-200">
        <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
            <div class="pt-8 space-y-6 sm:pt-5 sm:space-y-5">
                <div class="space-y-6 sm:space-y-5">
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="nameAlias" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Address Alias
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input wire:model="nameAlias" type="text" name="nameAlias" id="nameAlias" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            @error('nameAlias') <span class="text-red-500 mt-2">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <input type="hidden" name="selectedID" wire:model="selectedID">
                        <label for="firstName" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            First name
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input wire:model="firstName" type="text" name="firstName" id="firstName" autocomplete="first-name" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            @error('firstName') <span class="text-red-500 mt-2">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="last_name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Last name
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input wire:model="lastName" type="text" name="last_name" id="last_name" autocomplete="last-name" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            @error('lastName') <span class="text-red-500 mt-2">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <input wire:model="phone" type="text" name="phone" id="phone" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        @error('phone') <span class="text-red-500 mt-2">{{ $message }}</span> @enderror
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="country" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Country
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <select wire:model="country" id="country" name="country" autocomplete="country" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                @foreach ($countries as $country_item)
                                    <option
                                        value="{{ $country_item->id }}"
                                        x-if="{ 'selected' : $country_item->id == country }"
                                    >
                                        {{ $country_item->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('country') <span class="text-red-500 mt-2">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="city" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            City
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input wire:model="city" type="text" id="city" name="city"  autocomplete="address" class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                            @error('city') <span class="text-red-500 mt-2">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="addressFirst" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Address 1
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input wire:model="addressFirst" type="text" id="addressFirst" name="addressFirst"  autocomplete="address" class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                            @error('addressFirst') <span class="text-red-500 mt-2">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="addressSecond" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Address 2
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input wire:model="addressSecond" type="text" name="addressSecond" id="addressSecond" autocomplete="street-address" class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                            @error('addressSecond') <span class="text-red-500 mt-2">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="postcode" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Postcode
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input wire:model="postcode" type="number" name="postcode" id="postcode" autocomplete="postal-code" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            @error('postcode') <span class="text-red-500 mt-2">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="company" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Company (optional)
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input wire:model="company" type="text" name="company" id="company" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            @error('company') <span class="text-red-500 mt-2">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="vatNumber" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Vat Number (optional)
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input wire:model="vatNumber" type="number" name="vatNumber" id="vatNumber" autocomplete="vat-number" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            @error('vatNumber') <span class="text-red-500 mt-2">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="vatNumber" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Set this address as
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <div class="relative flex items-start">
                                <div class="flex items-center h-5">
                                    <input wire:model="isDefaultDeliveryAddress" id="isDefaultDeliveryAddress" name="isDefaultDeliveryAddress" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="isDefaultDeliveryAddress" class="font-medium text-gray-700">Default delivery address</label>
                                </div>
                            </div>
                            <div class="relative flex items-start pt-2">
                                <div class="flex items-center h-5">
                                    <input wire:model="isDefaultBillingAddress" id="isDefaultBillingAddress" name="isDefaultBillingAddress" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="isDefaultBillingAddress" class="font-medium text-gray-700">Default billing address</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-5">
            <div class="flex justify-end">
                <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update Address</button>
            </div>
        </div>
    </form>
</div>
