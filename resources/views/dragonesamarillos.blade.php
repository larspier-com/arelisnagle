<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/setti/css/styles.css">
        <title>{{ config('app.name', 'Laravel') }} - Dragones Amarillos</title>

        <!-- Favicons -->
        <x-favicon />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="nb cc wb wa">
        <main>
            <div class="ab bb _a xl:od" style="background-image: url('assets/setti/img/bg.jpg');"><!-- Start Hero Block -->
                <div class="a db  d ">
                    <header class="l aa ca jb">
                        <div class="flex flex-inline">
                            <a href="{{ route('welcome') }}" class="flex flex-inline w-20 h-12"><img src="images/AN.png" alt=""><a href="{{ route('dragonesamarillos') }}" class="mt-3 tb gc jc">Dragones Amarillos</a></a>
                        </div>
                        <div class="n ea tb lg:k">
                            <a href="#how-it-work" class="gc jc hover:nc">{{__('How it works?')}}</a>
                            <a href="#faq" class="gc jc hover:nc">FAQs</a>
                            <a href="#contact-us" class="gc jc hover:nc">{{__('Contact us')}}</a>
                        </div>
                        <div class="n tb lg:k">
                            <a href="#0" class="gc jc hover:nc ">373-322-1509</a>
                        </div>
                        <div class="k lg:n">
                            <svg xmlns="http://www.w3.org/2000/svg" class="r o " fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                        </div>
                    </header>
                    <div class="flex justify-between items-center">
                        <div class="e ga ">
                            <div class="ha">
                                <h1 class=" ob ub sm:rc sm:xc  md:bd">Programa Bonos Dragones Amarillos</h1>
                                <p class="v pb xb md:zc md:rb">Rerum provident aut quibusdam doloremque officiis iusto quia molestiae.</p>
                            </div>
                            <a href="{{ route('login') }}"><button  class=" my-4 eb py-3 hc jc xa hover:mc dc yb vb oa sm:sc">Ingrese</button></a>
                        </div>
                        <div class="e ga ">
                            <div class="ha">
                                <img class="w-16 md:w-32 lg:w-auto" src="images/chinese-yellow-dragon.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Hero Block -->

            <div class="ta ua"></div>

            <section id="how-it-work" class="gb "><!-- Start How It Works Block -->
                <div class="a db d">
                    <div class="m da lg:fd xl:nd">
                        <div class="ia lg:ha">
                            <h2 class="qb ub sm:ob">{{__('How it works?')}}</h2>
                            <p class="w-full zb sm:tc xl:md md:pb">A continuación relacionamos los pasos que usted debe seguir si desea hacer parte de este Programa.</p>
                        </div>
                        <div class="m da sm:z lg:fd xl:kd">
                            <div class="c p-5 ia ic kc ya dc pa hover:ec md:ad"><!-- Start Step Box -->
                                <dt>
                                    <div class="b l aa ba u q yb xa qa">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="t p" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M12 15c-1.84 0-2-.86-2-1H8c0 .92.66 2.55 3 2.92V18h2v-1.08c2-.34 3-1.63 3-2.92 0-1.12-.52-3-4-3-2 0-2-.63-2-1s.7-1 2-1 1.39.64 1.4 1h2A3 3 0 0 0 13 7.12V6h-2v1.09C9 7.42 8 8.71 8 10c0 1.12.52 3 4 3 2 0 2 .68 2 1s-.62 1-2 1z"></path><path d="M5 2H2v2h2v17a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4h2V2H5zm13 18H6V4h12z"></path></svg>
                                    </div>
                                    <p class="g rb tb">{{__('Step one')}}</p>
                                </dt>
                                <dd class="g bc">🛑🛑🛑🛑🛑
                                    <p>👉Realice la Consignacion en las cuentas autorizadas.</p>
                                    <p>
                                        <span class="H9lube">
                                            <div class="flex flex-inline mt-2  eqA2re NjwKYd Vwoesf LCUpfd" aria-hidden="true">
                                                <img class="XNo5Ab"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAXVBMVEVHcEwsKSgsKiksKigsKiksKikrJigsKSksKCksKSgsKiksKikrKSkkIiEaGBYQCwkCAABSUVCOjY2urq3Pz89ubGybmpq+vr7y8fH////e3t5eXV02NDRAPj6CgYGCTgCIAAAADXRSTlMAU5bM6/8MpBuP7u8hunAH+QAAATFJREFUeAGFk1USxEAIRGPEB4h77n/LNYZ41b7fxpphnAOu5wcAge+5zgNhBAei+KoncME7p6dwIwt3PYdH8i0fDhiDZEDQGplqSIxFWdWNjUhF90QlLtquH770DELy1WPRi3rYKY5NxD9Ww4EOdR+fANu/GZSxqyYDls9+QeBf864s+AMRguD+RpQedTkzfVQztd1Yoi7UBwsSES9qZLBGfCfYlsCNiILdRaAzctGpdDbiiL5KrlJX6wKCtMBd67t1ZmZ1EciQrCtoF/7NWupz+GKT6m9uC/wzUh9ceLIobIduYiQ1srtw7arNTAawu7uQx7Lg0cdq9LFCUHi0RqqG7VXFp4PGyhpBcz5tPWmz1C2IKmS3oyWEI+H/s1fC7C6nkq94Vz1xLsTnz7un//v+byhOJdTeK04XAAAAAElFTkSuQmCC"
                                                style="height:18px;width:18px" alt="" data-atf="1" data-frt="0">&ensp;BANCOLOMBIA
                                            </div>
                                        </span>
                                        Ahorros
                                        47400010109
                                    </p>
                                    <p>Ó por</p>
                                    <p>
                                        <span class="H9lube">
                                            <div class="flex flex-inline mt-2 eqA2re NjwKYd Vwoesf LCUpfd" aria-hidden="true">
                                                <img class="XNo5Ab"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAACCklEQVR4AWKgFIyCf9plgOrLACKCIArDpxKibKFI0iUpke0qAC5AVCpIJ2yRqpSpIISDCEiVQLUASioVqDgCBAcIYSEARgDg9Q/3uMZcrtsZtHwA8//73pv33nhAFPDcKT2++uAW5IC42zrvgGAWSEAF8sBzIe6BCFDz1TMNZvapu3qKduoy9J5cZ3Em78JACCi1eKCEKZkY/cFE1TTdtCzSV882mwhtigepzVPqa5hlwZIMJMY4KnZMnDQGQU/NtGSBcuGojLcuCJW+Sio7AJE6BIfFYnDtWBZS6Jd7pfKA9urnYosz3UfXBAOKPEiXNMDiL63LVoQZFG6xCQk8k7gP6LNLqGKyaoBN4AqzCd9kIA2I8+6C/rZ5arp8kqXC76PqnYkzGW8uMndLFIffu+LcABqWuUeoVpu8eOBO5wzUGHdLoQ8aUvi7F87EUV8srsj+CD8gZng868QAekuxgbSeAgmIJx4q1rqBt/Y1Fg+MQwcQg8ZhvR6M4pqJSZ77CkxBa+KrtTO/i+vRYCNDIztWDCzXzoSV7AJCda649aB+Amd1VLyOIRVZHCRjiEeJuN9H50aAVv2nQZUaFlzUoa0VPFR7XzlGkLbi6Tdp8w0QATIZMYgz9lZ13hsY3YhBPOfiNSQA6UYO25Zk8uyeO6oefusmbjUTEvgq3EAo9KvnKhI5EAKI/cPvGzeiv67WVcDqAAAAAElFTkSuQmCC"
                                                style="height:18px;width:18px" alt="" data-atf="1" data-frt="0">&ensp;NEQUI
                                            </div>
                                        </span>
                                            301 725 4451
                                            Arelis Nagle Baldonado
                                    </p>
                                    </dd>
                                </div><!-- End Step Box -->
                            <div class="c p-5 ia ic kc ya dc pa hover:ec md:ad"><!-- Start Step Box -->
                                <dt>
                                    <div class="b l aa ba u q yb xa qa">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="t p" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                                    </div>
                                    <p class="g rb tb">{{__('Step two')}}</p>
                                </dt>
                                <dd class="g bc">
                                <div class="text-content clearfix with-meta" dir="auto">
                                    🛑🛑🛑🛑🛑
                                    <p>📌Diligencie el Formulario y adjunte el Baucher. Por precaución, coloque su nombre legible en el Baucher.</p>
                                    <p>👇👇👇👇</p>
                                    <p><a href="{{ route('register') }}"><button  class="my-4 eb py-3 hc jc xa hover:mc dc yb vb oa sm:sc">Registro</button></a>
                                    </p>
                                    <p>Asistente de Logística</p>
                                    </div>
                                </dd>
                            </div><!-- End Step Box -->
                            <div class="c p-5 ia ic kc ya dc pa hover:ec md:ad"><!-- Start Step Box -->
                                <dt>
                                    <div class="b l aa ba u q yb xa qa">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="t p" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                    </div>
                                    <p class="g rb tb">{{__('Step three')}}</p>
                                </dt>
                                <dd class="g bc">
                                    🛑🛑🛑🛑🛑
                                    <p>👉CARPETA DE DOCUMENTOS PROYECTO DRAGONES AMARILLOS.</p>
                                    <ul>
                                        <ol>🛑 Copia (1) Soporte de Pago o Voucher</ol>
                                        <ol>🛑 Copia (1) Cédula ampliada al 150%</ol>
                                        <ol>🛑 Copia (1) Pasaporte ampliado al 150%.
                                            <p>👉Foto de Pasaporte a libro Abierto a color en JPG ó PNG</p>
                                        </ol>
                                        <ol><span class="H9lube">
                                                <div class="flex flex-inline mt-2  eqA2re NjwKYd Vwoesf LCUpfd" aria-hidden="true">🛑 RUT -&ensp;
                                                    <img class="XNo5Ab"
                                                        src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIAQEKAQkLDRYPDQwMDQ8UFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OisBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzg3Nys3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc1ODU3KzIrOCstK//AABEIABAAEAMBEQACEQEDEQH/xAAWAAEBAQAAAAAAAAAAAAAAAAAEBQP/xAAjEAACAQQBAwUAAAAAAAAAAAABAgMEBgcRABIhMQUTIkGB/8QAFwEAAwEAAAAAAAAAAAAAAAAAAwQGBf/EAB0RAAIDAAIDAAAAAAAAAAAAAAECAAMRUXEEMWH/2gAMAwEAAhEDEQA/ALVLFSvEGuTNQs9/tPac6/Rx61DxIetKyus+HoxL0iinaexMjJkeNCA+gyld+Ox4lYkKaQELo2gQlPX04p44rrwTHdzR7+fW6k7O++ubFtJ0kGAS+sIFZAc+zV/UFanaCw8bR41RyC/SWYtrx3PE3q5hG8gFCiLgPuf/2Q=="
                                                        style="height:18px;width:18px" alt="" data-atf="1" data-frt="0">&ensp;DIAN
                                                </div>
                                            </span>
                                        </ol>
                                        <ol>🛑 Factura o documento a nombre propio, con dirección igual a la registrada en el RUT</ol>
                                        <ol>🛑 Antecedentes Penales ( Contraloría, Procuraduría y Policía Nacional./ Extranjeros Docuemnto equivalente) </ol>
                                        <ol>🛑 Formato Identificación Personal. (Descargar de la Plataforma) </ol>
                                        <ol>🛑 Formato Adicional. (Descargar de la Plataforma) </ol>
                                    </ul>
                                    <p>👉NOTA: Estos documentos deben permanecer en carpeta física.</p>
                                </dd>
                            </div><!-- End Step Box -->
                            <div class="c p-5 ia ic kc ya dc pa hover:ec md:ad"><!-- Start Step Box -->
                                <dt>
                                    <div class="b l aa ba u q yb xa qa">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="t p" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    </div>
                                    <p class="g rb tb">{{__('Step four')}}</p>
                                </dt>
                                <dd class="g bc">
                                    🛑🛑🛑🛑🛑
                                    <p>👉Grupos TELEGRAM.</p>
                                    <p>Serán ingresados a diversos grupos de Whatsapp y Telegram.</p>
                                    <p>Favor estar atentos a las reuniones y recomendaciones dados en estos grupos oficiales</p>
                                    <p>👇👇👇👇</p>
                                    <p>Guardar mucha Prudencia con la información suministrada</p>
                                </dd>
                            </div><!-- End Step Box -->
                        </div>
                    </div>
                </div>
            </section><!-- End How It Works Block -->

            <section id="faq" class="gb lg:gd xl:pd"><!-- Start FAQs Block -->
                <div class="a db d">
                    <div class="m da lg:fd xl:nd">
                        <div class="ia lg:ha">
                            <h2 class="qb ub sm:ob">{{__('Frequently Asked Questions')}}</h2>
                            <p class="s zb sm:tc xl:md md:pb">En caso de requerir mayor información, no dude en contactarnos.A continuación una serie de preguntas freceuntes realizadas por los visitantes y toda la información para aclararlas.</p>
                            <a href="mailto:dragonamarillo@arelisnagle.com" class="k ac hc kc hover:nc md:pb">dragonamarillo@arelisnagle.com</a>
                        </div>
                        <div class="l _ ja xl:kd">
                            <div x-data="{ open: false }" :class="[open ? 'p-5 ia hc kc ya ec w pa hover:dc hover:nc md:ad' : 'p-5 ia hc kc ya dc w pa hover:ec hover:nc md:ad']"><!-- Start Question -->
                                <div  @click="open = ! open" :class="[open ? 'l aa ca h' : 'l aa ca']">
                                    <h4 class="f tb">Ea numquam aut harum vero et quia expedita et?</h4>
                                    <span>
                                        <template x-if="open">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="t p ac" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                                        </template>
                                        <template x-if="!open">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="t p" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                        </template>
                                    </span>
                                </div>
                                <p x-show="open" @click.outside="open = false"  class="zb">
                                    Sed similique non voluptates doloremque aut aut facilis. Aspernatur tempora libero possimus ut non voluptates deleniti rerum. Quasi nulla consectetur rerum eum sed modi tempora dolorem. Voluptas eos qui voluptatem et. Expedita aliquid illo eligendi.
                                </p>
                            </div><!-- End Question -->
                            <div x-data="{ open: false }" :class="[open ? 'p-5 ia hc kc ya ec w pa hover:dc hover:nc md:ad' : 'p-5 ia hc kc ya dc w pa hover:ec hover:nc md:ad']"><!-- Start Question -->
                                <div  @click="open = ! open" :class="[open ? 'l aa ca h' : 'l aa ca']">
                                    <h4 class="f tb">Lusto laboriosam provident voluptas soluta ipsum nemo molestias?</h4>
                                    <span>
                                        <template x-if="open">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="t p ac" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                                        </template>
                                        <template x-if="!open">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="t p" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                        </template>
                                    </span>
                                </div>
                                <p x-show="open" @click.outside="open = false"  class="zb">
                                    Sed similique non voluptates doloremque aut aut facilis. Aspernatur tempora libero possimus ut non voluptates deleniti rerum. Quasi nulla consectetur rerum eum sed modi tempora dolorem. Voluptas eos qui voluptatem et. Expedita aliquid illo eligendi.
                                </p>
                            </div><!-- End Question -->
                            <div x-data="{ open: false }" :class="[open ? 'p-5 ia hc kc ya ec w pa hover:dc hover:nc md:ad' : 'p-5 ia hc kc ya dc w pa hover:ec hover:nc md:ad']"><!-- Start Question -->
                                <div  @click="open = ! open" :class="[open ? 'l aa ca h' : 'l aa ca']">
                                    <h4 class="f tb">Ut consectetur sint est aut culpa voluptas doloremque?</h4>
                                    <span>
                                        <template x-if="open">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="t p ac" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                                        </template>
                                        <template x-if="!open">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="t p" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                        </template>
                                    </span>
                                </div>
                                <p x-show="open" @click.outside="open = false"  class="zb">
                                    Sed similique non voluptates doloremque aut aut facilis. Aspernatur tempora libero possimus ut non voluptates deleniti rerum. Quasi nulla consectetur rerum eum sed modi tempora dolorem. Voluptas eos qui voluptatem et. Expedita aliquid illo eligendi.
                                </p>
                            </div><!-- End Question -->
                            <div x-data="{ open: false }" :class="[open ? 'p-5 ia hc kc ya ec w pa hover:dc hover:nc md:ad' : 'p-5 ia hc kc ya dc w pa hover:ec hover:nc md:ad']"><!-- Start Question -->
                                <div  @click="open = ! open" :class="[open ? 'l aa ca h' : 'l aa ca']">
                                    <h4 class="f tb">Veniam consequatur et consectetur iure?</h4>
                                    <span>
                                        <template x-if="open">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="t p ac" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                                        </template>
                                        <template x-if="!open">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="t p" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                        </template>
                                    </span>
                                </div>
                                <p x-show="open" @click.outside="open = false"  class="zb">
                                    Sed similique non voluptates doloremque aut aut facilis. Aspernatur tempora libero possimus ut non voluptates deleniti rerum. Quasi nulla consectetur rerum eum sed modi tempora dolorem. Voluptas eos qui voluptatem et. Expedita aliquid illo eligendi.
                                </p>
                            </div><!-- End Question -->
                            <div x-data="{ open: false }" :class="[open ? 'p-5 ia hc kc ya ec w pa hover:dc hover:nc md:ad' : 'p-5 ia hc kc ya dc w pa hover:ec hover:nc md:ad']"><!-- Start Question -->
                                <div  @click="open = ! open" :class="[open ? 'l aa ca h' : 'l aa ca']">
                                    <h4 class="f tb">Blanditiis voluptas quo quisquam aut dolore nostrum modi est?</h4>
                                    <span>
                                        <template x-if="open">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="t p ac" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                                        </template>
                                        <template x-if="!open">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="t p" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                        </template>
                                    </span>
                                </div>
                                <p x-show="open" @click.outside="open = false"  class="zb">
                                    Sed similique non voluptates doloremque aut aut facilis. Aspernatur tempora libero possimus ut non voluptates deleniti rerum. Quasi nulla consectetur rerum eum sed modi tempora dolorem. Voluptas eos qui voluptatem et. Expedita aliquid illo eligendi.
                                </p>
                            </div><!-- End Question -->
                        </div>
                    </div>
                </div>
            </section><!-- End FAQs Block -->

            <div class="ta ua"></div>

            <section id="how-it-work" class="gb "><!-- Start How It Works Block -->
                <div class="a db d">
                    <div class="m da lg:fd xl:nd j lg:dd">
                        <div id="contact-us" class="l _ ca ma xl:vc">
                            <div class="ia lg:ha">
                                <h2 class="qb ub sm:ob">{{__('Contact us')}}</h2>
                                <p class="s zb sm:tc xl:md md:pb">Aut vel cumque cum ut minima tempore aliquid labore. Exercitationem consequatur saepe dolor sequi cum. Aperiam odio rerum sequi nobis sint.</p>
                                <a href="#0" class="k ac hc kc hover:nc md:pb">373-322-1509</a>
                                <a href="mailto:dragonamarillo@arelisnagle.com" class="k ac hc kc hover:nc md:pb">dragonamarillo@arelisnagle.com</a>
                            </div>
                            <div class="na">
                                <a href="#0" class="zb hc jc hover:nc">
                                    <i class="qb bx bxl-facebook-circle"></i>
                                </a>
                                <a href="#0" class="zb hc jc hover:nc">
                                    <i class="qb bx bxl-twitter"></i>
                                </a>
                                <a href="#0" class="zb hc jc hover:nc">
                                    <i class="qb bx bxl-instagram-alt"></i>
                                </a>
                            </div>
                        </div>
                        <div class="xl:kd">
                            <form class="w-full p-5 ya dc pa md:ad" action="#" method="POST">
                                <input type="hidden" name="remember" value="true">
                                <div class="l _ ja">
                                    <input type="text" class="w-full px-6 py-3 oa sa ua fc y focus:pc focus:qc focus:oc md:pb" placeholder="{{__('Full name')}}">
                                    <input type="email" class="w-full px-6 py-3 oa sa ua fc y focus:pc focus:qc focus:oc md:pb" placeholder="{{__('Email')}}">
                                    <input type="text" class="w-full px-6 py-3 oa sa ua fc y focus:pc focus:qc focus:oc md:pb" placeholder="{{__('Phone')}}">
                                    <textarea name="" id="" cols="30" rows="3" class="w-full px-6 py-3 oa sa ua fc y x focus:pc focus:qc focus:oc md:pb" placeholder="{{__('Message')}}"></textarea>
                                    <div>
                                        <button  class=" my-4  eb py-3 hc jc xa hover:mc dc yb vb oa sm:sc">{{__('Send message')}}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="ta ua j lg:ed"></div>

                    <footer class="l _ ca la.5 bc sb mb sm:uc sm:vc sm:wc">
                        <p>Copyright ©  <script>
                            document.write(new Date().getFullYear() + ",");
                        </script> . All rights reserved.</p>
                    </footer>
                </div>
            </section><!-- End justify Block -->
        </main>

    </body>
</html>
