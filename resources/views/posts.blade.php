<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  @foreach ($posts as $post )
  
  <article class="py-8 max-w-screen-md border-b border-gray-300">
    <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
      <h1 class="mb-1 tracking-tight text-3xl font-semibold ">{{ $post->title }}</h1>
    </a>
    <div class="my-3">
      By
      <a href="/authors/{{ $post->author->username }}" class="text-base hover:underline ">
        <span class="font-bold text-blue-800">{{ $post->author->name}}</span>
      </a>
      In
      <a href="/categories/{{ $post->category->slug }}" class="hover:underline font-semibold ">{{ $post->category->name}}</a>
      <span class="font-bold text-blue-500">{{ $post->created_at->diffForHumans() }}</span>
    </div>
    <p class="my-4 font-light">{{ Str::limit($post->body, 100, '...') }}</p>
    <a href="/posts/{{ $post->slug }}" class="text-blue-500 font-medium hover:underline">Read More &raquo;</a>
  </article>
  @endforeach

</x-layout>