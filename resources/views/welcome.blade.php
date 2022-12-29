<x-layouts.app
title="Welcome"
meta-Description="Welcome meta description"
>


<h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500" >Home</h1>
<h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500" >Esta es la vista del Welcome</h1>
@auth
    <div class="text-white">{{Auth::user()->name}}</div>
@endauth

</x-layout>
