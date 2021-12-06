<x-app-layout>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 my-16">
        <h1 class="text-red-400 text-5xl font-extrabold text-center">¿Te interesa la idea?</h1>
        <p class="text-gray-500 mx-5 font-bold text-2xl my-7">
            Te inivitamos a ser de los primeros en formar parte de este marketplace exclusivo para la
            emprendedores, déjanos tu info para contactarte :)
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="col-span-1">
                <form action="{{route('inscription')}}" method="POST">
                    @csrf
                    <div class="mx-4 mt-6">
                        <label class="block text-gray-700 font-bold ml-5" for="name">Nombres</label>
                        <input class="w-full rounded border border-gray-400 py-3" name="name" type="text" placeholder="Nombres y Apellidos">
                    </div>

                    <div class="mx-4 mt-6">
                        <label class="block text-gray-700 font-bold ml-5" for="email">Email</label>
                        <input class="w-full rounded border border-gray-400 py-3" name="email" type="text" placeholder="Correo Electronico">
                    </div>

                    <div class="mx-4 mt-6">
                        <label class="block text-gray-700 font-bold ml-5" for="company">Nombre de tu empredimiento</label>
                        <input class="w-full rounded border border-gray-400 py-3" name="company" type="text" placeholder="Nombre de tu empredimiento">
                    </div>

                    <div class="mx-4 mt-3">
                        <textarea class="w-full rounded border border-gray-400" rows="3" name="description" type="text" placeholder="Cuentanos de tu empredimiento"></textarea>
                    </div>

                    <div class="mx-4 mt-3">
                        <label class="block text-gray-700 font-bold ml-5" for="network">Comparte las redes de tu empredimiento</label>
                        <input class="w-full rounded border border-gray-400 py-3" name="network" type="text" placeholder="Perfil de IG, FB o Tik Tok">
                    </div>

                    <div class="mx-4 mt-6">
                        <button class="block w-full text-cente text-white p-4 rounded bg-red-400" type="submit">Enviar</button>
                    </div>
                </form>
            </div>

            <div class="hidden lg:flex">
                <figure>
                    <img src="{{sucure_asset("img/Registro/Comunidad.jpg")}}" alt="">
                </figure>
            </div>
        </div>
    </div>
</x-app-layout>