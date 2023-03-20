<div>
    <div class="w-full px-6 mx-auto">
        <div class="relative flex items-center p-0 mt-6 overflow-hidden bg-center bg-cover min-h-75 rounded-2xl"
            style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%">
            <span class="absolute inset-y-0 w-full h-full bg-center bg-cover bg-gradient-fuchsia opacity-60"></span>
        </div>
        <div
            class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 -mt-16 overflow-hidden break-words border-0 shadow-blur rounded-2xl bg-white/80 bg-clip-border backdrop-blur-2xl backdrop-saturate-200">
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-auto max-w-full px-6">
                    <div
                        class="text-size-base ease-soft-in-out h-18.5 w-18.5 relative inline-flex items-center justify-center rounded-xl text-white transition-all duration-200">
                        <img src="images/avatar/{{ $user->photo }}" alt="profile_image"
                            class="w-16 shadow-soft-sm rounded-xl" />
                    </div>
                    <div class="absolute bottom-0 ">
                    <a href="#" class="p-2 bg-yellow-300 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" style="fill: rgba(155, 155, 155, 1);transform: ;msFilter:;">
                            <path d="M20 5h-2.586l-2.707-2.707A.996.996 0 0 0 14 2h-4a.996.996 0 0 0-.707.293L6.586 5H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V7c0-1.103-.897-2-2-2zm-8 12c-2.71 0-5-2.29-5-5 0-2.711 2.29-5 5-5s5 2.289 5 5c0 2.71-2.29 5-5 5z"></path>
                            <path d="M13 9h-2v2H9v2h2v2h2v-2h2v-2h-2z"></path>
                        </svg>
                    </a>
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

                    <h5 class="font-bold py-3">{{ __('Profile Information') }}</h5>

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

                    @if (Session::has('demo'))
                        <div id="alert"
                            class="relative p-4 pr-12 mb-4 text-white border border-solid rounded-lg bg-gradient-red border-slate-100">
                            {{ Session::get('demo') }}
                            <button type="button" onclick="alertClose()"
                                class="box-content absolute top-0 right-0 p-2 text-white bg-transparent border-0 rounded w-4-em h-4-em text-size-sm z-2">
                                <span aria-hidden="true" class="text-center cursor-pointer">&#10005;</span>
                            </button>
                        </div>
                    @endif

                    <form wire:submit.prevent="save">
                        <div class="flex flex-wrap -mx-3">
                            <div class="max-w-full px-3 w-1/2 lg:flex-none">
                                <div class="flex flex-col h-full">
                                    <div class="flex flex-inline mt-0 w-full gap-2">
                                        <div class="mt-0 px-3 pt-0 w-1/6">
                                            <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                                <svg width="16px" height="16px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><circle cx="6" cy="4" r="2"></circle><path d="M9 7H3a1 1 0 0 0-1 1v7h2v7h4v-7h2V8a1 1 0 0 0-1-1z"></path><circle cx="17" cy="4" r="2"></circle><path d="M20.21 7.73a1 1 0 0 0-1-.73h-4.5a1 1 0 0 0-1 .73L12 14h2l-1 4h2v4h4v-4h2l-1-4h2z"></path></svg>
                                                {{ __('Mr/Mrs') }}
                                            </h6>

                                            <div class="mt-0 mb-4">
                                                <select wire:model.lazy="gender"
                                                    class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" name="gender" id="user-gender" required>
                                                    <option value="">{{ __('Choose...')}}</option>
                                                    <option value="male">{{ __('Mr.')}}</option>
                                                    <option value="female">{{ __('Mrs.')}}</option>
                                                    <option value="female">{{ __('Miss')}}</option>
                                                </select>
                                                @error('gender')
                                                    <p class="text-size-sm text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mt-0 px-3 pt-0 w-full">
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
                                                    placeholder="Name" id="user-name" required />
                                                @error('name')
                                                    <p class="text-size-sm text-red-500">{{ $message }}</p>
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
                                            placeholder="Email" id="user-email" required />
                                        @error('email')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>


                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                        <svg fill="#000000" width="16px" height="16px" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.799 5.165l-2.375-1.83a1.997 1.997 0 0 0-.521-.237A2.035 2.035 0 0 0 16.336 3H9.5l.801 5h6.035c.164 0 .369-.037.566-.098s.387-.145.521-.236l2.375-1.832c.135-.091.202-.212.202-.334s-.067-.243-.201-.335zM8.5 1h-1a.5.5 0 0 0-.5.5V5H3.664c-.166 0-.37.037-.567.099-.198.06-.387.143-.521.236L.201 7.165C.066 7.256 0 7.378 0 7.5c0 .121.066.242.201.335l2.375 1.832c.134.091.323.175.521.235.197.061.401.098.567.098H7v8.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-17a.5.5 0 0 0-.5-.5z" />
                                        </svg>
                                        {{ __('Address') }}
                                    </h6>

                                    <div class="mb-4">
                                        <input wire:model.lazy="address" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="{{ __('Address') }}" id="user-address" required />
                                        @error('address')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                            <div class="max-w-full px-3 w-1/2 lg:flex-none">
                                <div class="flex flex-col h-full">

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
                                            placeholder="Profession" id="profession" required />
                                        @error('profession')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
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
                                        {{ __('Phone number') }}
                                    </h6>
                                    <div class="mb-4">
                                        <input wire:model.lazy="mobile" type="phone"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="Phone number" id="mobile" required />
                                        @error('phone')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                        <svg width="16px" height="16px" viewBox="0 0 32 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="16" cy="16" r="14"
                                                fill="url(#paint0_linear_87_7225)" />
                                            <path
                                                d="M22.9866 10.2088C23.1112 9.40332 22.3454 8.76755 21.6292 9.082L7.36482 15.3448C6.85123 15.5703 6.8888 16.3483 7.42147 16.5179L10.3631 17.4547C10.9246 17.6335 11.5325 17.541 12.0228 17.2023L18.655 12.6203C18.855 12.4821 19.073 12.7665 18.9021 12.9426L14.1281 17.8646C13.665 18.3421 13.7569 19.1512 14.314 19.5005L19.659 22.8523C20.2585 23.2282 21.0297 22.8506 21.1418 22.1261L22.9866 10.2088Z"
                                                fill="white" />
                                            <defs>
                                                <linearGradient id="paint0_linear_87_7225" x1="16"
                                                    y1="2" x2="16" y2="30"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#37BBFE" />
                                                    <stop offset="1" stop-color="#007DBB" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                        Telegram
                                    </h6>
                                    <div class="mb-4">
                                        <input wire:model.lazy="telegram" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="telegram" id="user-telegram" required />
                                        @error('telegram')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                        <svg width="16px" height="16px" viewBox="0 0 32 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M16 31C23.732 31 30 24.732 30 17C30 9.26801 23.732 3 16 3C8.26801 3 2 9.26801 2 17C2 19.5109 2.661 21.8674 3.81847 23.905L2 31L9.31486 29.3038C11.3014 30.3854 13.5789 31 16 31ZM16 28.8462C22.5425 28.8462 27.8462 23.5425 27.8462 17C27.8462 10.4576 22.5425 5.15385 16 5.15385C9.45755 5.15385 4.15385 10.4576 4.15385 17C4.15385 19.5261 4.9445 21.8675 6.29184 23.7902L5.23077 27.7692L9.27993 26.7569C11.1894 28.0746 13.5046 28.8462 16 28.8462Z"
                                                fill="#BFC8D0" />
                                            <path
                                                d="M28 16C28 22.6274 22.6274 28 16 28C13.4722 28 11.1269 27.2184 9.19266 25.8837L5.09091 26.9091L6.16576 22.8784C4.80092 20.9307 4 18.5589 4 16C4 9.37258 9.37258 4 16 4C22.6274 4 28 9.37258 28 16Z"
                                                fill="url(#paint0_linear_87_7264)" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M16 30C23.732 30 30 23.732 30 16C30 8.26801 23.732 2 16 2C8.26801 2 2 8.26801 2 16C2 18.5109 2.661 20.8674 3.81847 22.905L2 30L9.31486 28.3038C11.3014 29.3854 13.5789 30 16 30ZM16 27.8462C22.5425 27.8462 27.8462 22.5425 27.8462 16C27.8462 9.45755 22.5425 4.15385 16 4.15385C9.45755 4.15385 4.15385 9.45755 4.15385 16C4.15385 18.5261 4.9445 20.8675 6.29184 22.7902L5.23077 26.7692L9.27993 25.7569C11.1894 27.0746 13.5046 27.8462 16 27.8462Z"
                                                fill="white" />
                                            <path
                                                d="M12.5 9.49989C12.1672 8.83131 11.6565 8.8905 11.1407 8.8905C10.2188 8.8905 8.78125 9.99478 8.78125 12.05C8.78125 13.7343 9.52345 15.578 12.0244 18.3361C14.438 20.9979 17.6094 22.3748 20.2422 22.3279C22.875 22.2811 23.4167 20.0154 23.4167 19.2503C23.4167 18.9112 23.2062 18.742 23.0613 18.696C22.1641 18.2654 20.5093 17.4631 20.1328 17.3124C19.7563 17.1617 19.5597 17.3656 19.4375 17.4765C19.0961 17.8018 18.4193 18.7608 18.1875 18.9765C17.9558 19.1922 17.6103 19.083 17.4665 19.0015C16.9374 18.7892 15.5029 18.1511 14.3595 17.0426C12.9453 15.6718 12.8623 15.2001 12.5959 14.7803C12.3828 14.4444 12.5392 14.2384 12.6172 14.1483C12.9219 13.7968 13.3426 13.254 13.5313 12.9843C13.7199 12.7145 13.5702 12.305 13.4803 12.05C13.0938 10.953 12.7663 10.0347 12.5 9.49989Z"
                                                fill="white" />
                                            <defs>
                                                <linearGradient id="paint0_linear_87_7264" x1="26.5"
                                                    y1="7" x2="4" y2="28"
                                                    gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#5BD066" />
                                                    <stop offset="1" stop-color="#27B43E" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                        Whatsapp
                                    </h6>
                                    <div class="mb-4">
                                        <input wire:model.lazy="whatsapp" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="whatsapp" id="user-whatsapp" required />
                                        @error('whatsapp')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="flow-root">
                            <div class="flex justify-between">
                                <div class="px-3 w-full">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                        {{ __('Neighborhood') }}</h6>
                                    <div class="mb-4">
                                        <input wire:model.lazy="neighborhood" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="neighborhood" id="user-neighborhood" required />
                                        @error('neighborhood')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="px-3 w-full">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                        {{ __('Postal Code') }}</h6>
                                    <div class="mb-4">
                                        <input wire:model.lazy="postal_code" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="postal_code" id="user-postal_code" required />
                                        @error('postal_code')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-between">
                                <div class="px-3 w-full">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                        {{ __('Country') }}</h6>
                                    <div class="mb-4">
                                        <input wire:model.lazy="country" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="country" id="user-country" required />
                                        @error('country')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="px-3 w-full">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                        {{ __('State') }}</h6>
                                    <div class="mb-4">
                                        <input wire:model.lazy="state" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="state" id="user-state" required />
                                        @error('state')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="px-3 w-full">
                                    <h6 class="font-bold leading-tight uppercase text-size-xs text-slate-500">
                                        {{ __('City') }}</h6>
                                    <div class="mb-4">
                                        <input wire:model.lazy="city" type="text"
                                            class="text-size-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            placeholder="city" id="user-city" required />
                                        @error('city')
                                            <p class="text-size-sm text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button type="submit"
                                class="float-right inline-block px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-size-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-dark-gray hover:border-slate-700 hover:bg-slate-700 hover:text-white">
                                Save changes
                            </button>

                        </div>

                </div>

                </form>

            </div>
        </div>
    </div>

    <script>
        function alertClose() {
            document.getElementById("alert").style.display = "none";
        }
    </script>

</div>
