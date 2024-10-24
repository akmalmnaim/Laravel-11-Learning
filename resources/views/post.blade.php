

<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
   
    
    <article class ="py-8 max-w-screen-md ">
      <h2 class = "mb-1 text-3xl tracking-tight font-bold text-gray-900"> {{ $post['title'] }}</h2>
       
        <div class='text-base text-gray-500'>
            <a href="#">{{ $post['author'] }}</a> | 23 Oktober 2024
        </div>
        <p class="my-4 font-light">{{ $post['body'],}}</p>
        <a class ="font-medium text-violet-500 hover:underline" href="/posts/">&laquo Back to posts</a>
    </article>

  

</x-layout>