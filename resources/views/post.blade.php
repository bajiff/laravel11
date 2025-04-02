<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  
  <article class="py-8 max-w-screen-md ">
      <h1 class="mb-1 tracking-tight text-3xl font-semibold text-gray-900">{{ $post['title'] }}</h1>
    <div class="my-3 text-gray-700">
      <a href="#" class="">Author: {{ $post['author'] }} | {{ $post['date'] }}</a>
    </div>
    <p class="my-4 font-light">{{ $post['body'] }}</p>
    <a href="/posts" class="text-blue-500 font-medium hover:underline ease-in-out transition-all duration-300">&laquo; Back to Blog</a>
  </article>


</x-layout>