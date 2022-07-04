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
    
    <div>
        <form  method="POST" action="/upload" enctype="multipart/form-data">
            @csrf
            <input type="file" name="photo">
            <input type="submit" name="Upload">
        </form>
    </div>
</x-guest-layout>