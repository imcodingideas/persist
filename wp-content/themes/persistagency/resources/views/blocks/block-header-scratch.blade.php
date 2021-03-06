<div class="{{ $class }} block-header-scratch">
  <div class="container mx-auto px-4">

    @if (!empty($header))
      <h2 class="bg-fill font-brushup inline-block leading-none pb-2 px-6 text-4xl uppercase relative z-10
                 {{ $variant == 'yellow' ? 'text-black' : 'text-white' }}
                 " style="background-image:url('@asset($scratch)')">
        {{ $header }}
      </h2>
    @endif

  </div>
</div>
