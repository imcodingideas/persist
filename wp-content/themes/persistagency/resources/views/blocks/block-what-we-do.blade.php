<div class="{{ $class }} bg-primary text-black block-what-we-do">

  <div class="container mx-auto px-4 py-32 relative">

    @if (!empty($header))
      <h2 class="bg-fill font-brushup inline-block leading-none pb-2 px-6 text-4xl text-white uppercase" style="background-image:url('@asset('images/brush-red.png')')">
        {{ $header }}
      </h2>
    @endif

    @if ($pieces)
      <div class="flex flex-col md:flex-row space-y-10 md:space-y-0 justify-between mt-12">
        @foreach ($pieces as $items)

          {{-- items are split in two columns --}}

          @if ($items)
            <div class="gap-12 grid justify-between">

              @foreach ($items as $item)
                <div class="flex flex-col items-center">

                  @if ($item['titleLines'] && count($item['titleLines']))
                    @foreach ($item['titleLines'] as $title)

                      <div class="inline-flex items-center px-5 py-1 space-x-3" style="background-image:url('@asset('images/brush-white.png')');background-size: 100% 100%">

                        @if (!empty($item['icon']))
                          {!! get_svg($item['icon'], '') !!}
                          @php unset($item['icon']) @endphp
                        @endif

                        <div class="font-brushup leading-none md:text-4xl text-3xl xl:text-5xl">{!! $title !!}</div>

                      </div>
                    @endforeach

                  @endif

                </div>

              @endforeach
            </div>

          @endif

          {{-- end pieces --}}
        @endforeach
      </div>
    @endif


    @if (!empty($link))
      <div class="">
        <a class="block flex font-bold hover:text-gray-700 items-center justify-end mt-10 space-x-1 text-black text-lg uppercase" href="{{ $link['url'] }}" target="{{ $link['target'] }}">
          <span>{{ $link['title'] }}</span>
          <img src="@asset('images/arrow-right.png')" alt="arrow" />
        </a>
      </div>
    @endif

  </div>
</div>
