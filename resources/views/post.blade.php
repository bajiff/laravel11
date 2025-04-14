<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>  
  {{-- <article class="py-8 max-w-screen-md ">
      <h1 class="mb-1 tracking-tight text-3xl font-semibold ">{{ $post->title}}</h1>
    <div class="my-3">
      <a href="/authors/{{ $post->author->username }}" class="text-base text-gray-700 hover:underline ">Author: {{ $post->author->name}}</a>
    </div>
    <p class="my-4 font-light">{{ $post->body}}</p>
    <a href="/posts" class="text-blue-500 font-medium hover:underline">&laquo; Back</a>
  </article> --}}
<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white  antialiased">
  <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
          <header class="mb-4 lg:mb-6 not-format">
            <a href="/posts" class=" font-med text-blue-500 hover:text-blue-500 hover:underline">&laquo; Back To All Posts</a>
              <address class="flex items-center my-6 not-italic">
                  <div class="inline-flex items-center mr-3 text-sm text-gray-900 ">
                      <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{ $post->author->name }}">
                      <div>
                          <a href="/authors/{{ $post->author->username }}" rel="author" class="text-xl font-bold text-gray-900 pr-4">{{ $post->author->name }}
                          </a>
                          <p class="text-base text-gray-500 mb-1"><time pubdate datetime="" title="">{{ $post->created_at->diffForHumans() }}</time></p>
                          <a href="/categories/{{$post->category->slug}}">
                            <span class="bg-{{ $post->category->color }}-100 font-semibold text-primary-800 text-xs inline-flex items-center px-2.5 py-0.5 rounded hover:underline dark:bg-primary-200">
                              {{ $post->category->name }}
                            </span>
                          </a>  
                      </div>
                  </div>
              </address>
              <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl ">{{ $post->title }}</h1>
          </header>
          <p>
            {{ $post->body }}
          </p>
              </article>
          </section>
      </article>
  </div>
</main>

</x-layout>
