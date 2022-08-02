<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sylnifty</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />

<link href="https://cdn.jsdelivr.net/npm/daisyui@2.20.0/dist/full.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{url('storage/css')}}/app.css">
</head>

<body class="bg-gray-1000">
    <div class="bg-black-opacity">
        <div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
            <div class="relative flex grid items-center grid-cols-2 lg:grid-cols-3">
                <ul class="flex items-center hidden space-x-8 lg:flex">
                    <li><a href="#about" aria-label="Our product" title="Our product"
                            class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Sobre</a>
                    </li>
                    <li><a href="#gallery" aria-label="Our product" title="Our product"
                            class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Galeria</a>
                    </li>
                    <li>
                        <a href="https://privacy.com.br/Checkout/SylNifty/" aria-label="Product pricing" title="Product pricing"
                            class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Assinatura</a>
                    </li>
                    <li>
                        <a href="https://sylnifty.com/?page_id=1394&lang=pt" aria-label="Product pricing" title="Product pricing"
                            class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Loja</a>
                    </li>
                    <li>
                        <a href="/wiki" aria-label="Product pricing" title="Product pricing"
                            class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Aprenda</a>
                    </li>
                    <li>
                        <a href="/blog" aria-label="Product pricing" title="Product pricing"
                            class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Blog</a>
                    </li>
                </ul>
                <a href="/" aria-label="Company" title="Company" class="inline-flex items-center lg:mx-auto">
                    <!-- <svg class="w-8 text-teal-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                <rect x="3" y="1" width="7" height="12"></rect>
                <rect x="3" y="17" width="7" height="6"></rect>
                <rect x="14" y="1" width="7" height="6"></rect>
                <rect x="14" y="11" width="7" height="12"></rect>
              </svg> -->
                    <img src="{{ url('storage/logo') }}/Syl-Nifty-Logo.png" width="100" alt="">
                    <span class="ml-2 text-xl font-bold tracking-wide text-gray-100 uppercase"></span>
                </a>
                <ul class="flex items-center hidden ml-auto space-x-8 lg:flex">
                    <li><a href="/" aria-label="Sign in" title="Sign in"
                            class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Sign
                            in</a></li>
                    <li>
                        <a href="/"
                            class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                            aria-label="Sign up" title="Sign up">
                            Sign up
                        </a>
                    </li>
                </ul>
                <!-- Mobile menu -->
                <div class="ml-auto lg:hidden">
                    <button aria-label="Open Menu" title="Open Menu"
                        class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline">
                        <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path>
                            <path fill="currentColor"
                                d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z"></path>
                            <path fill="currentColor"
                                d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"></path>
                        </svg>
                    </button>
                    <!-- Mobile menu dropdown
              <div class="absolute top-0 left-0 w-full">
                <div class="p-5 bg-white border rounded shadow-sm">
                  <div class="flex items-center justify-between mb-4">
                    <div>
                      <a href="/" aria-label="Company" title="Company" class="inline-flex items-center">
                        <svg class="w-8 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                          <rect x="3" y="1" width="7" height="12"></rect>
                          <rect x="3" y="17" width="7" height="6"></rect>
                          <rect x="14" y="1" width="7" height="6"></rect>
                          <rect x="14" y="11" width="7" height="12"></rect>
                        </svg>
                        <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">Company</span>
                      </a>
                    </div>
                    <div>
                      <button aria-label="Close Menu" title="Close Menu" class="p-2 -mt-2 -mr-2 transition duration-200 rounded hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                          <path
                            fill="currentColor"
                            d="M19.7,4.3c-0.4-0.4-1-0.4-1.4,0L12,10.6L5.7,4.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.3,6.3l-6.3,6.3 c-0.4,0.4-0.4,1,0,1.4C4.5,19.9,4.7,20,5,20s0.5-0.1,0.7-0.3l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L13.4,12l6.3-6.3C20.1,5.3,20.1,4.7,19.7,4.3z"
                          ></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <nav>
                    <ul class="space-y-4">
                      <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Product</a></li>
                      <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Features</a></li>
                      <li><a href="/" aria-label="Product pricing" title="Product pricing" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Pricing</a></li>
                      <li><a href="/" aria-label="Sign in" title="Sign in" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Sign in</a></li>
                      <li>
                        <a
                          href="/"
                          class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                          aria-label="Sign up"
                          title="Sign up"
                        >
                          Sign up
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
              -->
                </div>
            </div>
        </div>
    </div>
    <div class="relative pt-40">
        <img src="{{ url('storage/backgrounds') }}/bg2.jpg" class="absolute inset-0 object-cover w-full h-full" alt="" />
        <div class="relative bg-opacity-75 bg-deep-purple-accent-700">
            <svg class="absolute inset-x-0 bottom-0 text-white" viewBox="0 0 1160 163">
                <path fill="#1B2028"
                    d="M-164 13L-104 39.7C-44 66 76 120 196 141C316 162 436 152 556 119.7C676 88 796 34 916 13C1036 -8 1156 2 1216 7.7L1276 13V162.5H1216C1156 162.5 1036 162.5 916 162.5C796 162.5 676 162.5 556 162.5C436 162.5 316 162.5 196 162.5C76 162.5 -44 162.5 -104 162.5H-164V13Z">
                </path>
            </svg>
            <div
                class="relative px-4 py-16 mx-auto overflow-hidden sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="flex flex-col items-center justify-between xl:flex-row">
                    <div class="w-full max-w-xl mb-12 xl:mb-0 xl:pr-16 xl:w-7/12">
                        <h2
                            class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
                            CONHEÇA O MUNDO <br class="hidden md:block" />
                            SYLNIFTY
                        </h2>
                        <p class="max-w-xl mb-4 text-base text-gray-200 md:text-lg">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudan, totam rem aperiam, eaque ipsa quae.
                        </p>
                        <a href="#about"
                            class="bg-gray-700 inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none">
                            explorar
                        </a>
                        <!-- <a href="/" aria-label=""
                            class="inline-flex items-center font-semibold tracking-wider transition-colors duration-200 text-teal-accent-400 hover:text-teal-accent-700">
                            Learn more
                            <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
                                <path
                                    d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z">
                                </path>
                            </svg>
                        </a> -->
                    </div>
                    <div class="w-full max-w-xl xl:px-8 xl:w-5/12">
                        <div class="bg-gray-900-opacity rounded shadow-2xl p-7 sm:p-10 text-white">
                            <h3 class="mb-4 text-xl font-semibold sm:text-center sm:mb-6 sm:text-2xl">
                                Agende sua Sessão
                            </h3>
                            <form>
                                <div class="mb-1 sm:mb-2">
                                    <label for="firstName" class="inline-block mb-1 font-medium">Nome ou
                                        Apelido:</label>
                                    <input placeholder="John" required="" type="text"
                                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-gray-900-opacity border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                        id="firstName" name="firstName" />
                                </div>
                                <div class="mb-1 sm:mb-2">
                                    <label for="lastName" class="inline-block mb-1 font-medium">Telefone:</label>
                                    <input placeholder="Doe" required="" type="tel"
                                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-gray-900-opacity border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                        id="lastName" name="lastName" />
                                </div>
                                <div class="mb-1 sm:mb-2">
                                    <label for="email" class="inline-block mb-1 font-medium">E-mail</label>
                                    <input placeholder="john.doe@example.org" required="" type="text"
                                        class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-gray-900-opacity border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                        id="email" name="email" />
                                </div>
                                <div class="mt-4 mb-2 sm:mb-4">
                                    <button type="submit"
                                        class="bg-black inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none">
                                        Continuar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-xl sm:mx-auto lg:max-w-2xl">
            <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                <div>
                    <p id="about"
                        class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                        sylnifty
                    </p>
                </div>
                <h2
                    class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-200 sm:text-4xl md:mx-auto">
                    <span class="relative inline-block">
                        <svg viewBox="0 0 52 24" fill="currentColor"
                            class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                            <defs>
                                <pattern id="70326c9b-4a0f-429b-9c76-792941e326d5" x="0" y="0" width=".135"
                                    height=".30">
                                    <circle cx="1" cy="1" r=".7"></circle>
                                </pattern>
                            </defs>
                            <rect fill="url(#70326c9b-4a0f-429b-9c76-792941e326d5)" width="52" height="24"></rect>
                        </svg>
                        <span class="relative">O</span>
                    </span>
                    Mundo de Syl Nifty
                </h2>
                <p class="text-base text-gray-700 md:text-lg">
                    Conheça um pouco mais sobre o mundo de Syl Nifty
                </p>
            </div>
        </div>
        <div class="max-w-screen-xl sm:mx-auto ">
            <div class="grid grid-cols-1 gap-16 row-gap-8 lg:grid-cols-2 ">
                <div class="space-y-8">
                    <div>
                        <p class="mb-4 text-xl font-medium text-gray-300">
                            Title form my paragraph.
                        </p>
                        <p class="text-gray-700">
                            Lady Syl foi o primeiro nome criado, no começo de tudo apenas Syl mesmo. Era inicio de 2016
                            e num vídeo com o acrônimo BDSM no título, despertou a curiosidade, então, fui atrás.
                            Descobrindo entre conhecidos, fui parar num grupo de adeptos e curiosos sobre o tema, no
                            grupo tinham 2 mentores, Mestres Dominadores com muitos anos de experiência. Durante cerca
                            de 4 meses li muito, pesquisei, perguntei e assisti vídeos, eu definitivamente me encaixava
                            nesse mundo, não tinha dúvidas, mas como? Qual posição? ...
                            <br>
                            <!-- read more -->
                            <!-- <a class="" onclick="readMore(true)">
                                <span class="text-blue-500 cursor-pointer" id="link-read-more">
                                    Leia mais
                                </span>
                            </a> -->
                        </p>
                    </div>
                    <div  id="second-article">
                        <p class="text-gray-700">
                            Eu me via em ambas as posições, porque gostava de uma pegada mais bruta no sexo e por esse
                            motivo isso confundia meu posicionamento. E ressalto aqui o “gostava” no passado, pois hoje
                            tenho que ter o controle até mesmo no sexo, qualquer coisa fora disso é brochante, acaba o
                            clima mesmo.
                        </p>
                    </div>
                    <div  id="second-article">
                        <p class="text-gray-700">
                            Voltando ao inicio, como o estudo, leitura, debates e analisando meu passado entendi ser
                            dominante. Mas como sou teimosa, queria ter certeza, procurei e marquei com um Dom para
                            sairmos, cheia de dúvidas, mas precisando experimentar para realmente acreditar, saí com ele
                            e realmente me reconheci uma dominadora… a dominação durou menos de 3 minutos de uso de
                            clamps literalmente. Insuportável para mim alguém fazer algo comigo que eu não tenha pedido,
                            me entregar ao prazer, diversão de outro era impossível definitivamente. Após essa
                            constatação, reconhecendo minha posição como Top, ganhei um presente do meu mentor e amigo
                            que vou chamar de G, ele me deu um sub para eu começar. E eu só disse: Como assim? Meus
                            problemas começariam, o que vou fazer com ele? Vinda de 2 casamentos tradicionais, não sabia
                            nem mandar de forma direta.
                        </p>
                    </div>
                </div>
                <div class="space-y-8">
                    <div  id="second-article">
                        <p class="text-gray-700">
                            Começamos a conversar, ele havia tido experiência com uma ex-namorada de humilhação e como
                            corno. Combinamos nosso primeiro encontro, numa cidade perto da dele, interior de SP, num
                            hotel, ele providenciou tudo, me buscou entramos no quarto. Claro que foi tudo misturado,
                            com ele experiências de servidão, pet play, assplay mas a relação foi misturada e ele acabou
                            confundindo tudo, ou apressando. Cada experiência que ia tendo com ele, vinham dúvidas que
                            eu compartilhava com o G e ele ia me orientando e esclarecendo. Nesse tempo me cadastrei no
                            site Senhor Verdugo e comecei a conversar com outros submissos.
                        </p>
                    </div>
                    <div  id="second-article">
                        <p class="text-gray-700">
                            A relação, já confusa com meu presente, acabou terminando e eu comecei uma nova negociação
                            com um contato do site, meio que paralela.
                        </p>
                    </div>
                    <div  id="second-article">
                        <p class="text-gray-700">
                            Ele, chamarei de A, novato de tudo, mas muito interessado na humilhação e spanking, práticas
                            que não havia vivenciado com o sub presente. Marcamos nossa primeira sessão, e até hoje digo
                            que foi a melhor e mais planejada sessão que fiz, perfeita em todos os aspectos, intensa,
                            sem confundir nada, eu 100% dominando, ele completamente entregue mas… ele não conseguiu
                            lidar com esse prazer, com essa entrega e se desligou do meio se sentindo culpado. Tentei
                            ajudar, mas eu era também uma novata, indiquei outras pessoas, mesmo assim ele preferiu se
                            afastar, e eu, com essa segunda experiência, resolvi vivenciar o BDSM e todas as práticas
                            que surgissem. Fiz um anúncio e comecei a explorar o que eu ia ou não gostar, fazendo cada
                            uma das práticas, tudo que aparecia eu tinha curiosidade, aceitava, marcava e praticava. Foi
                            assim que comecei a entender e moldar a Lady Syl.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="gallery" class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-xl sm:mx-auto lg:max-w-2xl">
            <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                <div>
                    <p id="about"
                        class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                        sylnifty
                    </p>
                </div>
                <h2
                    class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-200 sm:text-4xl md:mx-auto">
                    <span class="relative inline-block">
                        <svg viewBox="0 0 52 24" fill="currentColor"
                            class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                            <defs>
                                <pattern id="70326c9b-4a0f-429b-9c76-792941e326d5" x="0" y="0" width=".135"
                                    height=".30">
                                    <circle cx="1" cy="1" r=".7"></circle>
                                </pattern>
                            </defs>
                            <rect fill="url(#70326c9b-4a0f-429b-9c76-792941e326d5)" width="52" height="24"></rect>
                        </svg>
                        <span  class="relative">Galeria</span>
                    </span>

                </h2>
                <p class="text-base text-gray-700 md:text-lg">
                    Veja nossas imagens produzidas em nossos eventos.
                </p>
            </div>
        </div>
        <div class="modal w-screen p-40" id="my-modal-2" onclick="closeModal()">
           <div id="box-modal" class="w-8/12 h-8/12 p-80 bg-black">

           </div>
        </div>
    </div>
    <section class="overflow-hidden text-gray-700">
        <div class="container px-5 py-2 mx-auto lg:pt-24 lg:px-32">
            <div class="flex flex-wrap -m-1 md:-m-2">
            <div class="flex flex-wrap w-1/2">
                <div class="w-1/2 p-1 md:p-2">
                <a  onclick="imagemInModal()" href="#my-modal-2">
                    <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg small_img"
                    src="{{ url('storage/galeria') }}/272959974_158238179877630_719561505831994432_n.webpfull.jpg">
                </a>
                </div>
                <div class="w-1/2 p-1 md:p-2">
                <a onclick="imagemInModal()"  href="#my-modal-2">
                    <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg small_img"
                    src="{{ url('storage/galeria') }}/273203158_626660568405829_3051469768489746206_n.webpfull.jpg">
                </a>
                </div>
                <div class="w-1/2 p-1 md:p-2">
                <a onclick="imagemInModal()"  href="#my-modal-2">
                    <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg small_img"
                    src="{{ url('storage/galeria') }}/274648835_330614532334238_8435085962843593569_n.webpfull.jpg">
                </a>
                </div>
            </div>
            <div class="flex flex-wrap w-1/2">
                <div class="w-1/2 p-1 md:p-2">
                <a onclick="imagemInModal()"  href="#my-modal-2">
                    <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg small_img"
                    src="{{ url('storage/galeria') }}/275418284_3086573861598289_1270114610346356817_n.webpfull.jpg">
                </a>
                </div>
                <div class="w-1/2 p-1 md:p-2">
                <a onclick="imagemInModal()"  href="#my-modal-2">
                    <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg small_img"
                    src="{{ url('storage/galeria') }}/276026499_293127609453657_637588963423095061_n.webpfull.jpg">
                </a>
                </div>
                <div class="w-1/2 p-1 md:p-2">
                <a onclick="imagemInModal()"  href="#my-modal-2">
                    <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg small_img"
                    src="{{ url('storage/galeria') }}/280217319_1337567600060521_4695298018589754520_n.webpfull.jpg">
                </a>
                </div>
            </div>
            </div>
        </div>
    </section>
    </div>
    <script src="./js/gallery.js"></script>
    <script>
        var modal = false;
        function closeModal() {
            window.location.href = "/#gallery";
        }
        function imagemInModal() {
            var modal = true;
            console.log(event.target.src);
            var boxModal = document.getElementById('box-modal');
            //set the image background to modal
            boxModal.style.backgroundImage = "url(" + event.target.src + ")";
            boxModal.style.backgroundSize = "cover";
            boxModal.style.backgroundPosition = "center";
        }
        function readMore(bool) {
            if (bool) {
                //seect all divs withs id second-article
                var divs = document.querySelectorAll('#second-article');
                var linkReaMore = document.getElementById('link-read-more');

                linkReaMore.style.display = 'none';
                //set display true for all divs
                for (var i = 0; i < divs.length; i++) {
                    divs[i].style.display = 'block';
                }

            } else {
                //seect all divs withs id second-article
                var divs = document.querySelectorAll('#second-article');
                //set display true for all divs
                for (var i = 0; i < divs.length; i++) {
                    divs[i].style.display = 'none';
                }

                linkReaMore.style.display = 'block';
            }
        }
    </script>
</body>

</html>