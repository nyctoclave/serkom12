{{-- <x-app-layout>
    <h1>buat article</h1>
    <form action="{{ route('article.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <input type="file" name="image" accept="images">

        <p>judul</p>
        <input type="text" name="title">

    <p>jisi artikel</p>
    <textarea name="content"  cols="100" rows="10"></textarea>
        <button type="submit">simpan</button>
    </form>
</x-app-layout> --}}


<x-app-layout>

    <div class="bg-white">

        <h1>Tambah Data</h1>

        <form action="/dashboard/article" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <p>Title</p>
            <input type="text" name="title">

            <p>Content</p>
            <textarea name="content" id="" cols="30" rows="10"></textarea>

            <p>image</p>
            <input type="file" name="image" accept="image/*">

            <button type="submit" class="bg-blue-400 p-4 □text-white">Simpan</button>

            @if ($errors->any())
                <div class="bg-red-500 text-2xl font-bold">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>

    </div>

</x-app-layout>
