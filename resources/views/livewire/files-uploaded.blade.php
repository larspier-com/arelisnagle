<div>
    <div class="w-full px-6 mx-auto">
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

                    <h5 class="py-3 font-bold">{{ __('Files uploaded') }}</h5>

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
                                </div>
                            </div>
                            <div class="w-1/2 max-w-full px-3 lg:flex-none">
                            </div>
                        </div>
                        <div class="flow-root">
                            {{-- Country Line --}}
                            <div class="flex justify-between">
                                <div class="w-full px-3">
                                </div>
                            </div>

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

