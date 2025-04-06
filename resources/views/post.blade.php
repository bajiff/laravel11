<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>  
  <article class="py-8 max-w-screen-md ">
      <h1 class="mb-1 tracking-tight text-3xl font-semibold ">{{ $post->title}}</h1>
    <div class="my-3">
      <a href="#" class="text-base text-gray-700 ">Author: {{ $post->author}}</a>
    </div>
    <p class="my-4 font-light">{{ $post['body']}}</p>
    <a href="/posts" class="text-blue-500 font-medium hover:underline">&laquo; Back</a>
  </article>
</x-layout>