<x-app-layout>
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
</x-app-layout>
