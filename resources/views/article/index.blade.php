<x-app-layout>
    <h1>cek data article</h1>
    <a href="{{route('article.create')}}">buat article</a>


    <thead>
        <th>No</th>
        <th>image</th>
        <th>title</th>
        <th>content</th>

    </thead>
    <tbody>
        @foreach ($data as $dt )
           <tr>
            <td><img src="{{ Storage::url($dt->images) }}" alt="width-100"></td>
            {{-- <td><img src="{{ asset(images/home.jpg) }}" alt="width-100"></td> --}}
             <td>{{$dt->title}}</td>
            <td>{{$dt->content}}</td>
           </tr>
        @endforeach
    </tbody>
</x-app-layout>
