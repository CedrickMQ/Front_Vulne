@extends('layouts.nav-log')

@section('Nav-Login')

<section>
    <div class="-z-10 bg-cover bg-left-bottom h-screen w-[110vh] -left-10 -top-24 absolute" style="background-image: url({{asset('images/mujer-artista-pintando-estudio.jpg')}})"></div>
    
    <div class="relative h-screen w-screen bg-gradient-to-t from-blue-950 from-40% to-transparent to-70%">
        <div class="h-3/5 w-screen bottom-0 absolute grid place-content-center">
            <div class="text-neutral-100 grid grid-cols-1 gap-2 
            {{-- border-2 border-red-600 --}}
            ">
                <h1 class="font-bold text-5xl">
                    Ingresa
                </h1>
                <p class="mt-4 font-medium text-lg">
                    Correo
                </p>
                <input 
                    type="email" 
                    name="Correo" 
                    id="Correo"
                    placeholder=" Ingrese su correo"
                    class="w-full h-10 bg-blue-900 placeholder-blue-200 border-blue-950 border rounded-md shadow-sm
                    focus:outline-none focus:border-sky-500
                    "
                    >
                <p class="font-medium text-lg">
                    Contraseña
                </p>
                <input 
                    type="password" 
                    name="Contra" 
                    id="Contra"
                    placeholder=" Ingrese su contraseña"
                    class="w-full h-10 bg-blue-900 placeholder-blue-200 border-blue-950 border rounded-md shadow-sm
                    focus:outline-none focus:border-sky-500
                    "
                    >
                <input 
                    type="button"
                    value="Enviar"
                    class="h-10 mt-4 rounded-lg bg-blue-500 text-blue-100">
                
                
                <div class="h-[2px] w-[93%] bg-neutral-100 mx-2 my-2"></div>

                
                <div>
                    <a class="hover:underline" href=""> 
                        ¿Olvidaste tu contraseña?
                    </a>
                    <a href="">
                        Registrate
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection