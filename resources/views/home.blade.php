<x-app-layout>
    <!-- Posts Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">

        @foreach($posts as $post)
            <x-post-item :post="$post"></x-post-item>
        @endforeach

        {{ $posts->links() }}

        <!-- Pagination 
        <div class="flex items-center py-8">
            <a href="#" class="h-10 w-10 bg-blue-800 hover:bg-blue-600 font-semibold text-white text-sm flex items-center justify-center">1</a>
            <a href="#" class="h-10 w-10 font-semibold text-gray-800 hover:bg-blue-600 hover:text-white text-sm flex items-center justify-center">2</a>
            <a href="#" class="h-10 w-10 font-semibold text-gray-800 hover:text-gray-900 text-sm flex items-center justify-center ml-3">Next <i class="fas fa-arrow-right ml-2"></i></a>
        </div>
        -->
    </section>

    <x-sidebar/>  
    
    <footer class="w-full border-t bg-white pb-12">
        <div class="w-full container mx-auto flex flex-col items-center">
            <br>
            <div class="uppercase pb-6">&copy; Developed by <a href="https://www.linkedin.com/in/mohamed-nasser-0b1388239/" target="_blank">
                Mohamed Nasser</a>
            </div>
            </div>
    </footer>
    
</x-app-layout>
