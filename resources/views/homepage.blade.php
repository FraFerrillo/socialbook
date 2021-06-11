<x-layout>
<div class="container-fluid my-5 w-100" style="width: 100vw">
    <div class="row">
    <div class="col-12 col-md-2">
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus quam et, ratione mollitia exercitationem, eligendi, at possimus ad consequuntur excepturi eos! Nisi neque harum doloribus dicta optio voluptatibus veritatis praesentium.
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta debitis quasi quidem reiciendis sit consequuntur ullam cupiditate neque quia, dolore, a voluptas vitae. Eum iste quas quisquam laborum nisi commodi.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit perferendis aut ipsa! Quo optio repellat dolor culpa voluptate doloribus mollitia sunt temporibus impedit aliquam maxime unde, expedita sed at ipsam.
    </div>

    <div class="col-12 col-md-4 offset-md-2">
        <div class="card rounded bg-white shadow">
            <div class="card-body">
                @if (session('message'))
                <div class="alert alert-success my-3">
                    {{session('message')}}
                </div>
                @endif
                @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger my-2">
                    <p>{{$error}}</p>
                </div>
                @endforeach

                @endif
                <div class="card-text p-2">
                <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <input type="hidden" name="user_id" value="{{Auth::id()}}">
                        <div class="mb-3 form-group row">
                            <label class="fw-bold h5" for="body">A cosa stai pensando ?</label>
                            <textarea class="bg-light rounded" name="body" id="body" cols="30" rows="3"
                            class="form-control">{{old('body')}}</textarea>
                        </div>
                        <div class="mb-3 form-group row">
                            <label for="img"><i class="fas fa-images fa-2x text-success"></i></label>
                            <input type="file" name="img" value="{{old('img')}}" class="form-control" id="img">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-custom text-white">Pubblica</button>
                </form>
            </div>
        </div>
        @foreach ($posts as $post)
        <div class="card my-5 w-100 rounded shadow" style="width: 18rem;">
            <img class="img-fluid" src="{{Storage::url($post->img)}}" class="card-img-top" alt="">
            <div class="card-body">
                <div class="card-text p-2">
                    <span class="fw-bold fs-5">{{$post->user->name}}</span>
                    <br>
                        {{$post->body}}

                    <div class="text-end">
                        {{$post->created_at}}
                    </div>
                </div>
            </div>
          </div>
        @endforeach
    </div>

    <div class="col-12 col-md-2 offset-md-2">
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus quam et, ratione mollitia exercitationem, eligendi, at possimus ad consequuntur excepturi eos! Nisi neque harum doloribus dicta optio voluptatibus veritatis praesentium.
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta debitis quasi quidem reiciendis sit consequuntur ullam cupiditate neque quia, dolore, a voluptas vitae. Eum iste quas quisquam laborum nisi commodi.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit perferendis aut ipsa! Quo optio repellat dolor culpa voluptate doloribus mollitia sunt temporibus impedit aliquam maxime unde, expedita sed at ipsam.

    </div>
    </div>
</div>
</x-layout>
