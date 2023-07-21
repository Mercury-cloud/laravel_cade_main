<div class="relative z-10 flex-1 px-2 flex items-center justify-center sm:absolute sm:inset-0"
     @click.away="dropDown=false"
     @click="dropDown=true"
     x-data="{dropDown:'{{$dropdown}}'}"
>
    <div class="w-full sm:max-w-lg">
        <label for="search" class="sr-only">Search</label>
        <div class="relative">
            <input id="search" name="search"
                   wire:model="keyword"
                   wire:keyup="doSearch"
                   wire:focus="doSearch"
                   class="block w-full bg-white border rounded-full border-gray-300 rounded-md py-2 pr-10 pr-3 text-sm placeholder-gray-500 focus:outline-none focus:text-gray-900 focus:placeholder-gray-400 focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Search" type="search">

            <div class="pointer-events-none absolute inset-y-0 right-0 pr-3 flex items-center">
                <!-- Heroicon name: solid/search -->
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
            </div>
            @if($dropdown)
            <div class="absolute mt-1 w-full rounded-md bg-white shadow-lg" x-show="dropDown">
                    <!--
                      Select option, manage highlight styles based on mouseenter/mouseleave and keyboard navigation.

                      Highlighted: "text-white bg-indigo-600", Not Highlighted: "text-gray-900"
                    -->
                    @if(count($results))
                        @foreach($results as $item)
                        <ul tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-item-3" class="max-h-56 rounded-md py-1 text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none sm:text-sm">

                            <li id="listbox-item-0" role="option"
                                    wire:click="chooseItem('{{$item->name?? ''}}')"
                                    class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9 hover:bg-blue-400 cursor-pointer">
                                    <div class="flex items-center">
                                        <img src="{{$item->medias[0]?? ''}}" alt=""
                                             class="flex-shrink-0 h-6 w-6 rounded-full">
                                        <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                                        <span class="ml-3 block font-normal truncate">
                                              {{$item->name?? ''}}
                                        </span>
                                    </div>
                                </li>

                        </ul>
                        @endforeach
                    @else
                        <ul tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-item-3" class="max-h-56 rounded-md py-1 text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none sm:text-sm">

                            <li id="listbox-item-0" role="option"
                                class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9 ">
                                <div class="flex items-center">
                                    <span class="ml-3 block font-normal truncate">
                                      No result
                                    </span>
                                </div>
                            </li>
                        </ul>
                @endif
                    <!-- More items... -->
            </div>
            @endif
        </div>
    </div>

</div>
