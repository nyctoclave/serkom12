<x-guest-layout>
<section class="w-full flex flex-col
justify-start items-center border-4 border-emerald-500 p-8">

    <h1 class="text-3x1 font-extrabold text-gray-600 text-center">Profile</h1>
    <p class="text-x1 text-center">{{$dataCompany->profile}}</p>
</section>

{{--edit update --}}
<section class="w-full flex flex-col justify-center items-start border-4 border-emerald-500 p-8">
    <form action="/update/1" method="POST">
    @csrf
    @method('PUT')
    <textarea name="profile" cols="60" rows="10" class="w-3/4">
    {{$dataCompany->profile}}
    </textarea>
    </form>

    <button type="submit" class="rounded-lg p-4 bg-blue-500">simpan</button>
</section>

</x-guest-layout>








