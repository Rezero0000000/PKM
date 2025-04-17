<x-main>
    <div class="px-2 mt-20 sm:px-20 sm:px-40">
        <h1 class="pb-20 text-3xl font-semibold text-center">Edit Category</h1>
        <form class="w-full" action="{{ route("category.update", $category->slug) }}" method="POST">
            @method("PUT")
            @csrf
            <input type="hidden" name="id" value="{{ $category->id }}">
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">name</label>
                <input 
                type="name" 
                id="name" 
                name="name" 
                value="{{ old("name") ?? $category->name }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error("name")
                     <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                <input 
                type="slug" 
                id="slug" 
                name="slug"
                value="{{ old("slug") ?? $category->slug }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                @error("slug")
                     <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>                             
   
    </div>
</x-main>