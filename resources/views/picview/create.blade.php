<x-guest-layout> 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   Create
                </div>
            </div>
        </div>
    </div>
    

    <div class="max-w-sm mx-auto">
        <form  method="POST" action="/upload" enctype="multipart/form-data">
        @csrf

            <div class="mb-6 rounded border p-2">         
            
                <label for="title" class="mb-2 uppercase font-bold text-xs text-gray-700">Title:</label>
                <input type="text" class="mb-2 border border-gray-400 p-2 w-full" name="title" value="{{old('title')}}" required>

                <div class="mb-2">    
                <label for="photo" class="mb-2 uppercase font-bold text-xs text-gray-700">Photo:</label>
                <input type="file" class="mb-2 border border-gray-400 p-2 w-full" name="photo" required>
                </div>   

                <div class="mb-2">    
                    <label for="photo" class="mb-2 uppercase font-bold text-xs text-gray-700">Choose a category:</label>
                    <select  class="mb-2 border border-gray-400 p-2 w-full" name="category_id" required>
                        <option value="1">Cat1</option>
                        <option value="2">Cat2</option>
                        <option value="3">Cat3</option>
                      </select>
                    </div>   

                <div class="mb-6">    
                    <label for="description" class="mb-2 uppercase font-bold text-xs text-gray-700">Description:</label>
                    <textarea class="mb-2 border border-gray-400 p-2 w-full" name="description" rows="4" cols="20"></textarea>
                </div>
                
                <input type="submit" name="Upload" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
       
            </div>

        </form>
    <div>
</x-guest-layout>
