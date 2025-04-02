<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  @foreach ($posts as $post )
  
  <article class="py-8 max-w-screen-md border-b border-gray-300">
    <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
      <h1 class="mb-1 tracking-tight text-3xl font-semibold text-gray-900">{{ $post['title'] }}</h1>
    </a>
    <div class="my-3 text-gray-700">
      <a href="#" class="">Author: {{ $post['author'] }} | {{ $post['date'] }}</a>
    </div>
    <p class="my-4 font-light">{{ Str::limit($post['body'], 100, '...') }}</p>
    <a href="/posts/{{ $post['slug'] }}" class="text-blue-500 font-medium hover:underline ease-in-out transition-all duration-300">Read More &raquo;</a>
  </article>
  @endforeach

</x-layout>