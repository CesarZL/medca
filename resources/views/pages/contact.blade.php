{{-- <x-guest-layout>
<!-- component -->

</x-guest-layout> --}}

<x-guest-layout>
  <main role="main" class="min-h-screen overflow-hidden bg-gray-200">
    <div id="shopify-section-header" class="shopify-section">
      <div class="isolate z-50 top-0 left-0 w-full font-medium">
          <div class="container-fluid max-w-screen-3xl mx-auto">
              <div class="lg:px-6 lg:py-0 py-4 px-4 bg-white w-full">
                  <div class="flex items-center justify-between">
                      <div class="grow basis-0">
                          <div class="lg:flex hidden items-center gap-7">

                              <div class="relative nav-link">
                                  <a class="shop-toggle" href="{{ route('welcome') }}">
                                      <div class="py-6">
                                          <span>Inicio</span>
                                      </div>
                                  </a>
                              </div>

                              <div class="relative nav-link">
                                  <button class="nav-toggle">
                                      <div class="py-6">
                                          <span>Medicamentos</span>
                                      </div>
                                  </button>
                              </div>

                              <div class="relative nav-link">
                                  <button class="nav-toggle">
                                      <div class="py-6">
                                          <span>Cuidado personal</span>
                                      </div>
                                  </button>
                              </div>

                              <div class="relative nav-link">
                                  <button class="nav-toggle">
                                      <div class="py-6">
                                          <span>Hospitalarios</span>
                                      </div>
                                  </button>
                              </div>

                              <div class="relative nav-link">
                                  <a class="nav-toggle" href="{{ route('contact') }}">
                                      <div class="py-6">
                                          <span>Contacto</span>
                                      </div>
                                  </a>
                              </div>

                          </div>
                      </div>
                      <svg id="a" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 390.4 390.4" class="w-16 h-16 text-sky-400">
                          <path d="M.14,195.2C.14,132.07.2,68.93,0,5.8-.02.97.97,0,5.8,0c126.27.17,252.53.17,378.8,0,4.83,0,5.81.97,5.8,5.8-.17,126.27-.17,252.53,0,378.8,0,4.83-.97,5.81-5.8,5.8-126.27-.17-252.53-.17-378.8,0-4.83,0-5.82-.97-5.8-5.8.2-63.13.14-126.27.14-189.4ZM94.22,198.95c.03-5.88.06-11.77.08-17.65,1.29-6.86,2.38-13.76,3.91-20.56,4.09-18.19,12.27-34.57,23.92-50.97-25.73,16.62-52.34,65.44-46.25,117.15,6.28,53.27,47.9,100.79,102.49,114.32,48.69,12.07,101.53-7.55,123.62-35.06-19.7,11.92-41.22,18.07-63.83,20.79-5.98,0-11.96.01-17.94.02-2.37-.43-4.73-.92-7.11-1.29-54.1-8.36-91.07-38.03-110.87-89.08-4.7-12.12-5.88-24.99-8.01-37.66ZM272.13,235.06c21-.15,41.99-.31,62.99-.46,1.13-.53,1.34-1.53,1.34-2.64-.01-18.32.48-36.65-.17-54.94-.61-17.31-14.27-30.92-31.86-33.21-12.43-1.62-13.63-.79-19.7,10.07-3.28,5.86-4.92,12.67-10.08,17.52,6.06-24.02,16.02-46.33,29.66-67.07-6.94,4.07-11.71,9.88-15.97,16.11-16.46,24.07-26.49,51-34.08,78.85-10.64,39.04-31.94,69.57-68.34,88.6-4.44,2.32-12.39,2.72-6.05,11,.15.19.12.52.18.78-.17,1.07.32,1.49,1.36,1.36,18.6.07,37.21.63,55.79.08,16.65-.49,29.58-12.43,33.13-29.05.11-1.08.22-2.17.32-3.25,2.2-11.17-.41-22.55,1.5-33.74ZM168.52,163.31c-3.27-3.78-7.7-6.04-11.42-9.35,29.61,4.94,53.47,19.72,72.55,43.66,10.41-23.9,23.18-45.64,40.21-64.67,1.8-2.02,1.81-4.36,1.81-6.81-.02-14.02-.15-28.03.07-42.05.07-4.48-1.22-6.14-5.92-6.07-16.98.26-33.97-.22-50.94.24-19.85.54-34.82,16.21-35.12,36.07-.11,7.55-.31,15.11.07,22.64.25,5.03-1.59,6.45-6.45,6.38-17.25-.24-34.5.05-51.75-.18-4.98-.07-7.14.96-6.99,6.64.41,16.43.01,32.88.19,49.32.22,19.98,15.16,35.25,35.07,35.94,7.81.27,15.64.34,23.44,0,4.82-.21,6.75,1.08,6.51,6.26-.35,7.52.09,15.07.2,22.61-.33,5.69-.83,11.39.31,17.74,5.95-5.4,10.26-10.88,14.33-16.53,19.76-27.47,18.08-61.62-5.31-86.16-5.85-6.14-10.76-14.73-20.87-15.68ZM138.67,335.85c-71.9-50.23-83.78-132.35-58.68-190.79,6.86-15.97,16.08-30.48,27.75-43.36,11.67-12.88,25.13-23.55,40.33-32.01,15.19-8.46,31.4-14.12,48.52-16.98,17.13-2.87,34.37-3.06,51.51-.18,17.1,2.87,33.31,8.52,48.6,16.81,14.7,7.97,27.48,18.6,39.91,29.73-35.46-52.34-108.01-80.84-179.81-57.24-65.44,21.52-110.74,87.29-108.07,158.92,2.11,56.7,46.75,124.99,89.94,135.1Z" style="fill: #fefefe00; stroke-width: 0px;"/>
                          <path d="M180.05,263.95c-.11-7.54-.55-15.1-.2-22.61.24-5.17-1.69-6.46-6.51-6.26-7.8.33-15.64.26-23.44,0-19.91-.68-34.85-15.96-35.07-35.94-.18-16.44.22-32.89-.19-49.32-.14-5.69,2.01-6.71,6.99-6.64,17.25.22,34.5-.06,51.75.18,4.87.07,6.7-1.34,6.45-6.38-.37-7.53-.18-15.09-.07-22.64.3-19.85,15.27-35.53,35.12-36.07,16.97-.46,33.96.01,50.94-.24,4.7-.07,5.99,1.59,5.92,6.07-.22,14.01-.09,28.03-.07,42.05,0,2.45,0,4.79-1.81,6.81-17.03,19.03-29.8,40.77-40.21,64.67-19.08-23.94-42.94-38.72-72.55-43.66,3.72,3.31,8.15,5.57,11.42,9.35,3.47,4.38,6.95,8.75,10.4,13.15,20.62,26.33,23.63,63.3,1.13,87.49ZM209.02,160.42l-.04-.1c0,2.39-.01,4.69,1.06,7.01,4.83,10.48,16.74,12.92,23.17,4.63,2.31-2.94,4.41-5.99,5.51-9.63,2.98-9.83-2.85-22.41-11.85-25.53-8.38-2.91-14.86,1.56-18.61,12.8-.35,3.65-2.33,7.41.76,10.82Z" style="fill: #2476ba; stroke-width: 0px;"/>
                          <path d="M270.31,272.05c-3.55,16.62-16.48,28.56-33.13,29.05-18.58.55-37.19,0-55.79-.08-.45-.45-.91-.91-1.36-1.36-.06-.26-.03-.59-.18-.78-6.34-8.27,1.61-8.67,6.05-11,36.41-19.02,57.7-49.56,68.34-88.6,7.59-27.85,17.63-54.78,34.08-78.85,4.26-6.23,9.04-12.03,15.97-16.11-13.64,20.75-23.6,43.05-29.66,67.07,5.16-4.85,6.8-11.66,10.08-17.52,6.07-10.85,7.27-11.68,19.7-10.07,17.59,2.29,31.25,15.9,31.86,33.21.64,18.29.16,36.63.17,54.94,0,1.12-.21,2.11-1.34,2.64-1.19-1.35-2.8-1.36-4.41-1.36-17.87,0-35.75,0-53.62,0-1.87,0-3.79-.11-4.95,1.82-1.91,11.18.7,22.57-1.5,33.74-1.67.93-1.98,1.99-.32,3.25Z" style="fill: #8ec044; stroke-width: 0px;"/>
                          <path d="M138.67,335.85c-43.18-10.11-87.82-78.4-89.94-135.1-2.67-71.63,42.63-137.4,108.07-158.92,71.8-23.61,144.34,4.9,179.81,57.24-12.44-11.13-25.21-21.77-39.91-29.73-15.29-8.28-31.5-13.94-48.6-16.81-17.14-2.88-34.37-2.69-51.51.18-17.12,2.87-33.32,8.52-48.52,16.98-15.2,8.46-28.67,19.13-40.33,32.01-11.67,12.88-20.88,27.39-27.75,43.36-25.1,58.44-13.21,140.56,58.68,190.79Z" style="fill: #1161a1; stroke-width: 0px;"/>
                          <path d="M238.17,326.96c22.61-2.72,44.13-8.87,63.83-20.79-22.09,27.51-74.93,47.12-123.62,35.06-54.59-13.53-96.21-61.04-102.49-114.32-6.09-51.71,20.52-100.54,46.25-117.15-11.64,16.4-19.83,32.78-23.92,50.97-1.53,6.8-2.62,13.7-3.91,20.56-2.8,5.87-3.18,11.75-.08,17.65,2.13,12.67,3.31,25.54,8.01,37.66,19.8,51.05,56.77,80.72,110.87,89.08,2.38.37,4.74.86,7.11,1.29,5.98,2.86,11.97,2.89,17.94-.02Z" style="fill: #8ec044; stroke-width: 0px;"/>
                          <path d="M180.05,263.95c22.5-24.18,19.49-61.15-1.13-87.49-3.45-4.4-6.93-8.77-10.4-13.15,10.11.95,15.03,9.54,20.87,15.68,23.38,24.55,25.06,58.7,5.31,86.16-4.07,5.66-8.38,11.13-14.33,16.53-1.14-6.35-.65-12.05-.31-17.74Z" style="fill: #1a5f93; stroke-width: 0px;"/>
                          <path d="M272.13,235.06c1.16-1.93,3.09-1.82,4.95-1.82,17.87,0,35.75,0,53.62,0,1.61,0,3.22.01,4.41,1.36-21,.15-41.99.31-62.99.46Z" style="fill: #87bd2f; stroke-width: 0px;"/>
                          <path d="M94.22,198.95c-3.1-5.9-2.72-11.78.08-17.65-.03,5.88-.06,11.77-.08,17.65Z" style="fill: #87bd2f; stroke-width: 0px;"/>
                          <path d="M238.17,326.96c-5.98,2.91-11.96,2.88-17.94.02,5.98,0,11.96-.01,17.94-.02Z" style="fill: #87bd2f; stroke-width: 0px;"/>
                          <path d="M270.31,272.05c-1.66-1.26-1.34-2.32.32-3.25-.11,1.08-.22,2.17-.32,3.25Z" style="fill: #87bd2f; stroke-width: 0px;"/>
                          <path d="M180.04,299.66c.45.45.91.91,1.36,1.36-1.03.13-1.53-.28-1.36-1.36Z" style="fill: #87bd2f; stroke-width: 0px;"/>
                          <path d="M208.26,149.6c3.74-11.24,10.23-15.71,18.61-12.8,9,3.12,14.83,15.7,11.85,25.53-1.1,3.63-3.2,6.69-5.51,9.63-12.67,3.03-16.36,1.27-24.22-11.64,0,0,.04.1.04.1-.25-3.61-.51-7.21-.76-10.82Z" style="fill: #fefefe00; stroke-width: 0px;"/>
                          <path d="M208.98,160.31c7.87,12.9,11.55,14.67,24.22,11.64-6.43,8.29-18.34,5.85-23.17-4.63-1.07-2.32-1.06-4.62-1.06-7.01Z" style="fill: #1a5f93; stroke-width: 0px;"/>
                          <path d="M208.26,149.6c.25,3.61.51,7.21.76,10.82-3.09-3.4-1.12-7.17-.76-10.82Z" style="fill: #1a5f93; stroke-width: 0px;"/>
                        </svg>

                      
                        <div class="flex items-center justify-end gap-5 grow basis-0">
                          <div class="lg:block hidden relative isolate">
                              <i class="absolute top-1/2 -translate-y-1/2 left-4 fa-solid fa-magnifying-glass opacity-50"></i>
                              <input placeholder="Buscar..." class="lg:w-48 w-full transition-all pr-4 pl-10 py-3 bg-grayscale-100 text-black origin-right rounded-full text-sm placeholder:text-black/50" id="searchInput" type="text">
                          </div>
                          @if (Route::has('login'))
                              @auth
                              <div class="relative py-6">
                                  <a id="toggleAccountMenu" class="lg:block hidden" href="{{ url('/dashboard') }}">
                                      Dashboard
                                  </a>
                              </div>    
                              @else
                              <div class="relative py-6">
                                  <a id="toggleAccountMenu" class="lg:block hidden" href="{{ route('login') }}">
                                      Iniciar sesión
                                  </a>
                              </div>   
                                  @if (Route::has('register'))
                                  <div class="relative py-6">
                                      <a id="toggleAccountMenu" class="lg:block hidden" href="{{ route('register') }}">
                                          Registrarse
                                      </a>
                                  </div>   
                                  @endif
                              @endauth
                          @endif

                          <button class="lg:text-base text-lg toggle-drawer-cart">
                              <i class="fa-solid fa-shopping-cart"></i>
                          </button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div> 

      <section class="text-gray-600 body-font relative h-screen">
        <div class="absolute inset-0 bg-gray-300">
          <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="mapa" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=es&q=%C4%B0zmir+(Mi%20Nombre%20de%20Negocio)&ie=UTF8&t=&z=14&iwloc=B&output=embed" style=""></iframe>
        </div>
        <div class="container px-5 py-24 mx-auto flex">
          <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
            <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Comentarios</h2>
            <p class="leading-relaxed mb-5 text-gray-600">¿Tienes alguna duda? Contáctanos</p>
            <div class="relative mb-4">
              <label for="email" class="leading-7 text-sm text-gray-600">Correo electrónico</label>
              <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
              <label for="message" class="leading-7 text-sm text-gray-600">Mensaje</label>
              <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
            </div>
            <button class="border-0 py-2 px-6 focus:outline-none bg-slate-900 text-white hover:bg-slate-700 rounded text-lg">Enviar</button>
            <p class="text-xs text-gray-500 mt-3">No recibirás mensajes no deseados</p>
          </div>
        </div>
      </section>
      

  </main>
</x-guest-layout>