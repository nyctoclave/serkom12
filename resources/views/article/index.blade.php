<x-app-layout>
    <h1>cek data article</h1>
    <a href="{{route('article.create')}}">buat article</a>


    <section id="artikel" class="w-full rounded-2xl gap-4 flex flex-row flex-wrap mx-auto bg-slate-400 py-10 px-6 h-fit">

    @foreach ($data as $dt )
        <div class="w-full sm:w-[calc(50%-0.5rem)] lg:w-[calc(33.333%-0.667rem)]">
            <x-article.card :article="$dt" />
        </div>
    @endforeach

</section>

</x-app-layout>


{{--  @foreach ($data as $dt )
           <tr>
            <td><img src="{{ Storage::url($dt->image) }}" alt="width-100"></td>
             <td>{{$dt->title}}</td>
            <td>{{$dt->content}}</td>
           </tr>
        @endforeach --}}
