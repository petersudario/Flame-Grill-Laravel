<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  @vite('resources/css/app.css')
  <script src="//unpkg.com/alpinejs" defer></script>
  <link rel="shortcut icon" href="{{ asset('img/flame-shape-svgrepo-com.svg') }}"/>
</head>


<nav class="w-full bg-white text-black shadow-2xl	">
  <div x-data="{ open: false }" class="mx-auto flex max-w-screen-xl flex-col px-4 md:flex-row md:items-center md:justify-between md:px-6 lg:px-8">
    <div class="flex flex-row items-center justify-between p-4">
      <a class="flex items-center focus:shadow-outline rounded-lg text-lg font-semibold uppercase tracking-widest text-white focus:outline-none"><?xml version="1.0" encoding="iso-8859-1"?><img class="h-6 mr-3 sm:h-9" <img src="{{ asset('/img/flame-shape-svgrepo-com.svg') }} "/><span class="self-center text-xl font-semibold whitespace-nowrap dark:text-black">FLAME GRILL</span></a>
      <button class="focus:shadow-outline rounded-lg focus:outline-none md:hidden" @click="open = !open">
        <svg fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
          <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>
    <div :class="{'flex': open, 'hidden': !open}" class="hidden flex-grow flex-col pb-4 md:flex md:flex-row md:justify-end md:pb-0">
      <a class="focus:shadow-outline mt-2 rounded-lg bg-transparent px-4 py-2 text-sm font-semibold hover:bg-black hover:text-yellow-400	 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0 md:ml-4" href="{{ route('site.index') }}">HOME</a>
      <a class="focus:shadow-outline mt-2 rounded-lg bg-transparent px-4 py-2 text-sm font-semibold hover:bg-black hover:text-yellow-400	 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0 md:ml-4" href="{{ route('site.cardapio') }}">CARDÁPIO</a>
      <a class="focus:shadow-outline mt-2 rounded-lg bg-transparent px-4 py-2 text-sm font-semibold hover:bg-black hover:text-yellow-400	 focus:bg-gray-200 focus:text-gray-900 focus:outline-none md:mt-0 md:ml-4" href="{{ route('site.contato') }}">CONTATO</a>
      
      </div>
    </div>
  </div>
</nav>

