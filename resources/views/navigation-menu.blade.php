<nav x-data="{ open: false }" class="bg-white z-50 top-0 shadow lg:shadow-none sticky">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-end lg:justify-center h-16">
            <div class="hidden lg:flex "><ul class="flex space-x-8 items-center">
                <li class="links"><a href="{{route('home')}}" class="font-bold text-lg my-3 px-2.5 py-2">Inicio</a></li>
                <li class="links"><a href="#herramientas" class="font-bold text-lg my-3 px-2.5 py-2">Herramientas</a></li>
                <li class="links"><a href="#beneficios" class="font-bold text-lg my-3 px-2.5 py-2">Beneficios</a></li>
                <li class="links"><a href="#ventas" class="font-bold text-lg my-3 px-2.5 py-2">¿Qué puedo vender?</a></li>
                <li class="links"><a href="#unete" class="font-bold text-lg my-3 px-2.5 py-2">Únete</a></li>
                <a href="{{route('login')}}" class="text-sm underline text-gray-500 my-3 ml-8 px-2.5 py-3">Iniciar Sesion</a>
                </ul>
            </div>

            <div class="-mr-2 flex items-center lg:hidden">
                <button  @click="open = ! open" @click.away="open = false" class="inline-flex items-center justify-center p-2 rounded-md text-black hover:text-red-400 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-black transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div :class="{'block': open, 'hidden': ! open}" class="hidden lg:hidden ">
        <div class="pt-2 pb-3 space-y-2 bg-opacity-50">
            <a href="{{route('home')}}" class="text-black font-bold text-lg my-3 px-2.5 py-2 rounded block ">
                <h3 class="ml-3">Inicio</h3>
            </a>
            <a href="#herramientas" class="text-black font-bold text-lg my-3 px-2.5 py-2 rounded block ">
                <h3 class="ml-3">Herramientas</h3>
            </a>
            <a href="#beneficios" class="text-black font-bold text-lg my-3 px-2.5 py-2 rounded block">
                <h3 class="ml-3">Beneficios</h3>
            </a>
            <a href="#ventas" class="text-black font-bold text-lg my-3 px-2.5 py-2 rounded block">
                <h3 class="ml-3">¿Que puedo vender?</h3>
            </a>
            <a href="#unete" class="text-red-400 font-bold text-lg my-3 px-2.5 py-2 rounded block">
                <h3 class="ml-3">Únete</h3>
            </a>
            <a href="{{route('login')}}" class="text-sm underline text-gray-500 my-3 px-2.5 py-3 rounded block">
                <h3 class="ml-3">Iniciar Sesión</h3>
            </a>
        </div>
    </div>

</nav>