<x-basic>
    <x-slot name="content">
        
          <div id="grad1" style="text-align:center;margin:auto;color:#888888;font-size:40px;font-weight:bold">
            <a href="/upload" class="topnav-icons fa fa-home" style="color:white;float:left;padding-top:20px;font-size:20px;" title="Home"> Johnathan Juno</a>
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
                    <div class="card">
                        <img src="{{'storage/'.$photo->storePath}}" alt="{{$photo->originalName}}" id="card{{$photo->id}}" style="width:33%px;height: 333px;"/>
                      </div>
                @endforeach
            </div>
          
          
          <div class="mt-5 p-4 bg-slate-300 text-white text-center">
            <p>Footer</p>
          </div>
    </x-slot>
</x-basic>