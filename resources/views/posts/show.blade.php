<x-app-layout>
    <div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-600">{{ $post->name }}</h1>
        
        <div class="text-lg text-gray-500 mb-2">
            {!! $post->extract !!}
        </div>

        <p class="text-xs text-gray-500 mb-2"> Escrito por {!! $post->user->name !!} </p>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            
           {{-- contenido principal --}}
            <div class="lg:col-span-2">
            {{-- contenido relacionado --}}
                <figure>
                    @if ($post->image)
                        <img class="w-full h-80 object-cover object-center" src="{{ Storage::url($post->image->url) }}" alt="">
                    @else
                        <img class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2016/03/09/09/17/computer-1245714_960_720.jpg" alt=""> 
                    @endif
                </figure>

                <div class="estilos text-base text-gray-500 mt-4">
                    {!! $post->body !!}
                </div>
            </div>
                <aside>
                    <h1 class="text-2xl font-bold text-gray-600 mb-4">Mas en {{ $post->category->name }}</h1>

                    <ul>
                        @foreach ($similares as $similar)
                            <li class="mb-4">
                                <a class="flex" href="{{ route('posts.show', $similar) }}">

                                    @if ($similar->image)
                                        <img class="w-36 h-20 object-cover object-center" src="{{ Storage::url($similar->image->url) }}" alt="">
                                    @else
                                        <img class="w-36 h-20 object-cover object-center" src="https://cdn.pixabay.com/photo/2016/03/09/09/17/computer-1245714_960_720.jpg" alt="">
                                    @endif

                                   <span class="ml-2 text-gray-600">{{ $similar->name }}</span>     
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </aside>
                
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
            
        </div>
    </div>

    <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-605965646ec6af3f"></script>

</x-app-layout>