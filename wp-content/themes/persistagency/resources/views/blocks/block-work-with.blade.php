<div class="{{ $class }} block-work-with">
  <div class="container mx-auto pb-24 pt-20 px-4 xl:pb-32">

    @if (!empty($header))
      <h2 class="bg-fill font-brushup inline-block leading-none pb-2 px-6 text-4xl text-white uppercase" style="background-image:url('@asset('images/brush-red.png')')">
        {{ $header }}
      </h2>
    @endif

    @if (!empty($items))
      <div class="gap-4 grid grid-cols-2 justify-center lg:grid-cols-3 max-w-5xl mt-6 mx-auto xl:gap-x-10 xl:gap-y-5 xl:mt-16">

        @foreach ($items as $item)
          <div class="flex items-center justify-center">

            @if (!empty($item['image']))
              {!! wp_get_attachment_image($item['image']['id'], 'full', false, ['class' => '']) !!}
            @endif

          </div>
        @endforeach
      </div>
    @endif

  </div>
</div>
