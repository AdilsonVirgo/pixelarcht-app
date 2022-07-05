<x-basic>
    <x-slot name="content">
        <div class="p-5 bg-primary text-white text-center">
            <h1>My First Bootstrap 5 Page</h1>
            <p>Resize this responsive page to see the effect!</p> 
          </div>
          
          
          <div class="d-flex flex-row-reverse bd-highlight fixed-top">
            <div class="p-2 bd-highlight">
                <select id="selectPhotoMenu" class="form-select" aria-label="Default select example">
                    <option selected>Photography</option>
                    <option value="1">1</option>
                    <option value="2">2</option>    
                    <option value="3">3</option>
                </select>
            </div>
            <div id="selectAboutMenu" class="p-2 bd-highlight">About</div>
            <div id="selectSayHelloMenu" class="p-2 bd-highlight">Say hello</div>
          </div>
          
          
            <div class="row">
                @foreach ($all as $photo)
                    <p>This is photo {{ $photo->id }}</p>
                    <div class="card">
                        <img src="{{'storage/'.$photo->storePath}}" alt="{{$photo->originalName}}" style="width:100%">
                        <div class="container">
                          <h4><b>{{$photo->title}}</b></h4>
                          <p>{{$photo->originalName}}</p>
                        </div>
                      </div>
                @endforeach
            </div>
          
          
          <div class="mt-5 p-4 bg-dark text-white text-center">
            <p>Footer</p>
          </div>
    </x-slot>
</x-basic>