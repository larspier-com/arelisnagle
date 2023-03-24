<div>
    <div class="w-full px-6 mx-auto">
        {{-- <div class="relative flex items-center p-0 mt-6 overflow-hidden bg-center bg-cover min-h-75 rounded-2xl"
            styl

            e="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%">
            <span class="absolute inset-y-0 w-full h-full bg-center bg-cover bg-gradient-fuchsia opacity-60"></span>
        </div> --}}
        <div
            class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 mt-16 overflow-hidden break-words border-0 shadow-blur rounded-2xl bg-white/80 bg-clip-border backdrop-blur-2xl backdrop-saturate-200">
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-auto max-w-full px-6">
                    <div
                        class="text-size-base ease-soft-in-out h-18.5 w-18.5 relative inline-flex items-center justify-center rounded-xl text-white transition-all duration-200">
                        <img src="images/avatar/{{ $user->photo }}" alt="profile_image"
                            class="w-16 shadow-soft-sm rounded-xl" />
                    </div>
                    <div class="absolute bottom-0 ">
                        <button type="button" class="p-2 bg-yellow-300 rounded-full" id="open-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" style="fill: rgba(155, 155, 155, 1);transform: ;msFilter:;">
                                <path d="M20 5h-2.586l-2.707-2.707A.996.996 0 0 0 14 2h-4a.996.996 0 0 0-.707.293L6.586 5H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zm-8 12c-2.71 0-5-2.29-5-5 0-2.711 2.29-5 5-5s5 2.289 5 5c0 2.71-2.29 5-5 5z"></path>
                                <path d="M13 9h-2v2H9v2h2v2h2v-2h2v-2h-2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="flex-none w-auto max-w-full px-3 my-auto">
                    <div class="h-full">
                        <h5 class="mb-1">{{ $user->name }}</h5>
                        <p class="mb-0 font-semibold leading-normal text-size-sm">{{ $user->profession }}</p>
                    </div>
                </div>
                <div class="w-full max-w-full px-3 mx-auto mt-4 sm:my-auto sm:mr-0 md:w-1/2 md:flex-none lg:w-4/12">
                    <div class="relative right-0">
                        <ul class="relative flex flex-wrap p-1 list-none bg-transparent rounded-xl" nav-pills
                            role="tablist">
                            <li class="z-30 flex-auto text-center">
                                <a class="z-30 block w-full px-0 py-1 mb-0 transition-all border-0 rounded-lg ease-soft-in-out bg-inherit text-slate-700"
                                    nav-link href="javascript:;" role="tab" aria-selected="false">
                                    <svg class="text-slate-700" width="16px" height="16px" viewBox="0 0 40 44"
                                        version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <title>document</title>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF"
                                                fill-rule="nonzero">
                                                <g transform="translate(1716.000000, 291.000000)">
                                                    <g transform="translate(154.000000, 300.000000)">
                                                        <path class="fill-slate-800"
                                                            d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                                                            opacity="0.603585379"></path>
                                                        <path class="fill-slate-800"
                                                            d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="ml-1">{{ __('Messages') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full px-3 mb-6 e">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">

                    <h5 class="py-3 font-bold">{{ __('Medical Profile') }}</h5>

                    @if (Session::has('status'))
                        <div id="alert"
                            class="relative p-4 pr-12 mb-4 text-white border border-solid rounded-lg bg-gradient-dark-gray border-slate-100">
                            {{ Session::get('status') }}
                            <button type="button" onclick="alertClose()"
                                class="box-content absolute top-0 right-0 p-2 text-white bg-transparent border-0 rounded w-4-em h-4-em text-size-sm z-2">
                                <span aria-hidden="true" class="text-center cursor-pointer">&#10005;</span>
                            </button>
                        </div>
                    @endif

                    <form wire:submit.prevent="save">
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-1/2 max-w-full px-3 lg:flex-none">
                                <div class="flex flex-col h-full">
                                    <div class="flex w-full gap-2 mt-0 flex-inline">
                                        <div class="w-1/6 px-3 pt-0 mt-0">
                                            <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                                <svg width="16px" height="16px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><circle cx="6" cy="4" r="2"></circle><path d="M9 7H3a1 1 0 0 0-1 1v7h2v7h4v-7h2V8a1 1 0 0 0-1-1z"></path><circle cx="17" cy="4" r="2"></circle><path d="M20.21 7.73a1 1 0 0 0-1-.73h-4.5a1 1 0 0 0-1 .73L12 14h2l-1 4h2v4h4v-4h2l-1-4h2z"></path></svg>
                                                {{ __('Mr/Mrs') }}
                                            </h6>

                                            <div class="mt-0 mb-4">
                                                <select wire:model.lazy="gender"
                                                    class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                    id="user-gender"  disabled="disabled">
                                                    <option value="">{{ __('Choose...')}}</option>
                                                    <option value="male" {{ $gender == 'male' ? 'selected="selected"' : '' }}>{{ __('Mr.')}}</option>
                                                    <option value="female" {{ $gender == 'female' ? 'selected="selected"' : '' }}>{{ __('Mrs.')}}</option>
                                                </select>
                                                @error('gender')
                                                    <p class="text-red-500 text-size-sm">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="w-full px-3 pt-0 mt-0">
                                            <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                                <svg width="16px" height="16px" viewBox="0 0 32 32"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <defs>
                                                        <style>
                                                            .cls-1 {
                                                                fill: none;
                                                            }

                                                            .cls-2 {
                                                                fill: #02a0e1;
                                                            }

                                                            .cls-3 {
                                                                fill: #bdeeff;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <title />
                                                    <g data-name="id card" id="id_card">
                                                        <rect class="cls-1" height="32" id="wrapper" width="32" />
                                                        <path class="cls-2"
                                                            d="M23.92,30.16H8.08a2,2,0,0,1-2-2V3.84a2,2,0,0,1,2-2H23.92a2,2,0,0,1,2,2V28.16A2,2,0,0,1,23.92,30.16Zm0-2v0ZM8.08,3.84V28.16H23.92V3.84Z" />
                                                        <rect class="cls-3" height="10.34" rx="1" ry="1"
                                                            width="17.84" x="7.08" y="18.82" />
                                                        <path class="cls-2"
                                                            d="M23.92,30.16H8.08a2,2,0,0,1-2-2V19.82a2,2,0,0,1,2-2H23.92a2,2,0,0,1,2,2v8.34A2,2,0,0,1,23.92,30.16Zm0-2v0Zm0-8.34H8.08v8.34H23.92Z" />
                                                        <path class="cls-2"
                                                            d="M20.15,26.55h-8.3a1,1,0,1,1,0-2h8.3a1,1,0,0,1,0,2Z" />
                                                        <path class="cls-2"
                                                            d="M18.07,23.5H13.93a1,1,0,0,1,0-2h4.14a1,1,0,0,1,0,2Z" />
                                                        <circle class="cls-3" cx="16" cy="10.34" r="3.09" />
                                                        <path class="cls-2"
                                                            d="M16,14.44a4.1,4.1,0,1,1,4.09-4.1A4.1,4.1,0,0,1,16,14.44Zm0-6.19a2.1,2.1,0,1,0,2.09,2.09A2.1,2.1,0,0,0,16,8.25Z" />
                                                        <path class="cls-2"
                                                            d="M22.38,18.82h-2a4.38,4.38,0,1,0-8.76,0h-2a6.38,6.38,0,1,1,12.76,0Z" />
                                                    </g>
                                                </svg>
                                                {{ __('Full name') }}
                                            </h6>

                                            <div class="mt-0 mb-4">
                                                <input wire:model.lazy="name" type="text"
                                                    class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                                    placeholder="Name" id="user-name" readonly />
                                                @error('name')
                                                    <p class="text-red-500 text-size-sm">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                        <svg width="16px" height="16px" viewBox="0 0 13333.33 13333.33"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:xodm="http://www.corel.com/coreldraw/odm/2003">
                                            <defs>
                                                <style type="text/css">
                                                    <![CDATA[
                                                    .fil0 {
                                                        fill: #03A9F4
                                                    }

                                                    .fil2 {
                                                        fill: #4FC3F7
                                                    }

                                                    .fil1 {
                                                        fill: #FFFF66
                                                    }
                                                    ]]>
                                                </style>
                                            </defs>
                                            <g id="Layer_x0020_1">
                                                <path class="fil0"
                                                    d="M3817.37 2704.92l5698.58 0c1092.77,0 1984.04,891.27 1984.04,1984.04l0 3955.41c0,1092.77 -891.27,1984.04 -1984.04,1984.04l-5698.58 0c-1092.77,0 -1984.04,-891.27 -1984.04,-1984.04l0 -3955.41c0,-1092.77 891.27,-1984.04 1984.04,-1984.04z" />
                                                <path class="fil1"
                                                    d="M10707.65 5458.02l0 3186.35c0,655.43 -536.26,1191.69 -1191.69,1191.69l-5698.58 0c-655.43,0 -1191.69,-536.26 -1191.69,-1191.69l0 -3186.35 3675.37 1911.6c236.43,122.97 494.8,122.97 731.23,0l3675.37 -1911.6z" />
                                                <path class="fil2"
                                                    d="M2631.81 4568.1l4034.86 2098.57 4034.86 -2098.57c-61.07,-599.23 -570.92,-1070.83 -1185.57,-1070.83l-5698.58 0c-614.65,0 -1124.5,471.6 -1185.57,1070.83z" />
                                            </g>
                                        </svg>
                                        {{ __('Email') }}
                                    </h6>

                                    <div class="mb-4">
                                        <input wire:model.lazy="email" type="email"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Email" id="user-email" readonly />
                                        @error('email')
                                            <p class="text-red-500 text-size-sm">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                        <svg width="16px" height="16px" viewBox="0 0 1024 1024" class="icon"
                                            version="1.1" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M512 512m-480 0a480 480 0 1 0 960 0 480 480 0 1 0-960 0Z"
                                                fill="#FFE8CD" />
                                            <path
                                                d="M678.4 780.8H345.6c-25.6 0-44.8-19.2-44.8-44.8V249.6c0-25.6 19.2-44.8 44.8-44.8h332.8c25.6 0 44.8 19.2 44.8 44.8v486.4c0 25.6-19.2 44.8-44.8 44.8z"
                                                fill="#FF9D1C" />
                                            <path
                                                d="M633.6 608H390.4c-19.2 0-32-12.8-32-32V294.4c0-19.2 12.8-32 32-32H640c19.2 0 32 12.8 32 32V576c-6.4 19.2-19.2 32-38.4 32z"
                                                fill="#FFCA83" />
                                            <path d="M512 697.6m-38.4 0a38.4 38.4 0 1 0 76.8 0 38.4 38.4 0 1 0-76.8 0Z"
                                                fill="#FFFFFF" />
                                        </svg>
                                        {{ __('Profession') }}
                                    </h6>
                                    <div class="mb-4">
                                        <input wire:model.lazy="profession" type="phone"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Profession" id="profession" readonly />
                                        @error('profession')
                                            <p class="text-red-500 text-size-sm">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/2 max-w-full px-3 lg:flex-none">
                                <div class="flex flex-col h-full">
                                </div>
                            </div>
                        </div>

                        <h5 class="py-3 font-bold">{{ __('Emergency Contact Information') }}</h5>
                        <div class="flow-root">
                        <h6 class="py-4 font-serif text-sm font-light italic  text-slate-300"><span>En caso de emergencia contactar con</span></h6>
                        </div>

                        <div class="flow-root">
                            {{-- Emergency Contact Information --}}

                            <div class="flex justify-between">
                                <div class="w-full px-3">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                        {{ __('Name') }}</h6>
                                    <div class="mb-4">
                                        <input wire:model.lazy="emergency_contact_name" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="emergency_contact_name" id="user-emergency_contact_name" required />
                                        @error('emergency_contact_name')
                                            <p class="text-red-500 text-size-sm">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="w-full px-3">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                        {{ __('Phone') }}</h6>
                                    <div class="mb-4">
                                        <input wire:model.lazy="emergency_contact_phone" type="tel"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="emergency_contact_phone" id="user-emergency_contact_phone" required />
                                        @error('emergency_contact_phone')
                                            <p class="text-red-500 text-size-sm">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="w-full px-3">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                        {{ __('Email') }}</h6>
                                    <div class="mb-4">
                                        <input wire:model.lazy="emergency_contact_email" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="emergency_contact_email" id="user-emergency_contact_email" required />
                                        @error('emergency_contact_email')
                                            <p class="text-red-500 text-size-sm">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h5 class="py-3 font-bold">{{ __('General Health Conditions') }}</h5>

                        <div class="flow-root">
                            {{-- General Health Conditions --}}
                            <div class="flex justify-between">
                                <div class="w-2/5 px-3 justify-between">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                        {{ __('do you have any disability?') }}</h6>
                                        <div class="flex justify-evenly w-full">
                                            <label class="w-1/3 flex font-medium space-x-2 mt-6 mx-4 px-2 text-sm text-gray-600 items-center justify-center">
                                              <input wire:model.lazy="is_disability" type="radio" value=0 class="accent-violet-500 mx-4 px-2" name="is_disability" checked />
                                              <span>No</span>
                                            </label>

                                            <label class="w-1/3 flex font-medium space-x-2 mt-6 mx-4 px-2 text-sm text-gray-600 items-center justify-center">
                                              <input wire:model.lazy="is_disability" type="radio" value=1 class="accent-violet-500 mx-4 px-2" name="is_disability" />
                                              <span>Si</span>
                                            </label>
                                        </div>
                                </div>
                                <div class="w-full px-3">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">{{ __('Especifique') }}</h6>
                                    <div class="mb-4">
                                        <textarea  wire:model.lazy="disability"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            id="user-disability"
                                            rows="3"
                                            placeholder="{{__('disability')}}">
                                            {{ $disability}}
                                        </textarea>
                                        @error('disability')
                                            <p class="text-red-500 text-size-sm">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flow-root">
                            {{-- General Health Conditions --}}

                            <div class="flex justify-between">
                                <div class="w-full px-3">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                        {{ __('allergies') }}</h6>
                                    <div class="mb-4">
                                        <textarea  wire:model.lazy="allergies"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            id="user-allergies"
                                            rows="3"
                                            placeholder="{{__('allergies')}}">{{ $allergies}}
                                        </textarea>
                                        @error('allergies')
                                            <p class="text-red-500 text-size-sm">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flow-root">
                            {{-- General Health Conditions --}}

                            <div class="flex justify-between">
                                <div class="w-2/5 px-3">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                        {{ __('do you have any disease?') }}</h6>
                                        <div class="flex justify-evenly w-full">
                                            <label class="w-1/3 flex font-medium space-x-2 mt-6 mx-4 px-2 text-sm text-gray-600 items-center justify-center">
                                              <input wire:model.lazy="any_disease" type="radio" value=0 class="accent-violet-500 mx-4 px-2" name="any_disease"/>
                                              <span>No</span>
                                            </label>

                                            <label class="w-1/3 flex font-medium space-x-2 mt-6 mx-4 px-2 text-sm text-gray-600 items-center justify-center">
                                              <input wire:model.lazy="any_disease" type="radio" value=1 class="accent-violet-500 mx-4 px-2" name="any_disease" />
                                              <span>Si</span>
                                            </label>
                                            @error('any_disease')
                                                <p class="text-red-500 text-size-sm">{{ $message }}</p>
                                            @enderror
                                        </div>
                                </div>
                                <div class="w-full px-3">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                        {{ __('Especifique') }}</h6>
                                    <div class="mb-4">
                                        <textarea  wire:model.lazy="disease"
                                        class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                        id="user-disease"
                                        rows="3"
                                        placeholder="{{__('disease')}}">{{ $disease}}</textarea>
                                        @error('disease')
                                            <p class="text-red-500 text-size-sm">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flow-root">
                            {{-- General Health Conditions --}}

                            <div class="flex justify-between">
                                <div class="w-2/5 px-3">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                        {{ __('Medical Prescription') }}</h6>
                                        <div class="flex justify-evenly w-full">
                                            <label class="w-1/3 flex font-medium space-x-2 mt-6 mx-4 px-2 text-sm text-gray-600 items-center justify-center">
                                              <input wire:model.lazy="any_medicine" type="radio" value=0 class="accent-violet-500 mx-4 px-2" name="any_medicine"/>
                                              <span>No</span>
                                            </label>

                                            <label class="w-1/3 flex font-medium space-x-2 mt-6 mx-4 px-2 text-sm text-gray-600 items-center justify-center">
                                              <input wire:model.lazy="any_medicine" type="radio" value=1 class="accent-violet-500 mx-4 px-2" name="any_medicine" />
                                              <span>Si</span>
                                            </label>
                                            @error('any_medicine')
                                                <p class="text-red-500 text-size-sm">{{ $message }}</p>
                                            @enderror
                                        </div>
                                </div>
                                <div class="w-full px-3">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                        {{ __('Medicines') }}</h6>
                                    <div class="mb-4">
                                        <textarea  wire:model.lazy="medicine"
                                        class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                        id="user-medicine"
                                        rows="3"
                                        placeholder="{{__('medicine')}}">{{ $medicine}}</textarea>
                                        @error('medicine')
                                            <p class="text-red-500 text-size-sm">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flow-root">
                            {{-- Food Restriction --}}

                            <div class="flex justify-between">
                                <div class="w-2/5 px-3">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                        {{ __('do you have any food restriction?') }}</h6>
                                        <div class="flex justify-evenly w-full">
                                            <label class="w-1/3 flex font-medium space-x-2 mt-6 mx-4 px-2 text-sm text-gray-600 items-center justify-center">
                                              <input wire:model.lazy="any_foodrestriction" type="radio" value=0 class="accent-violet-500 mx-4 px-2" name="any_foodrestriction"/>
                                              <span>No</span>
                                            </label>

                                            <label class="w-1/3 flex font-medium space-x-2 mt-6 mx-4 px-2 text-sm text-gray-600 items-center justify-center">
                                              <input wire:model.lazy="any_foodrestriction" type="radio" value=1 class="accent-violet-500 mx-4 px-2" name="any_foodrestriction" />
                                              <span>Si</span>
                                            </label>
                                            @error('any_foodrestriction')
                                                <p class="text-red-500 text-size-sm">{{ $message }}</p>
                                            @enderror
                                        </div>
                                </div>
                                <div class="w-full px-3">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                        {{ __('Especifique') }}</h6>
                                    <div class="mb-4">
                                        <textarea  wire:model.lazy="foodrestriction"
                                        class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                        id="user-foodrestriction"
                                        rows="3"
                                        placeholder="{{__('foodrestriction')}}">{{ $foodrestriction}}</textarea>
                                        @error('foodrestriction')
                                            <p class="text-red-500 text-size-sm">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flow-root">
                            <button type="submit"
                                class="inline-block float-right px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-size-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-dark-gray hover:border-slate-700 hover:bg-slate-700 hover:text-white">
                                {{__('Save changes')}}
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <script>
        function alertClose() {
            document.getElementById("alert").style.display = "none";
        }
    </script>

</div>
