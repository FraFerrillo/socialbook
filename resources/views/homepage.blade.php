<x-layout>
<div class="container">
    <div class="row">
    <div class="col-12 col-md-2">
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus quam et, ratione mollitia exercitationem, eligendi, at possimus ad consequuntur excepturi eos! Nisi neque harum doloribus dicta optio voluptatibus veritatis praesentium.
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta debitis quasi quidem reiciendis sit consequuntur ullam cupiditate neque quia, dolore, a voluptas vitae. Eum iste quas quisquam laborum nisi commodi.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit perferendis aut ipsa! Quo optio repellat dolor culpa voluptate doloribus mollitia sunt temporibus impedit aliquam maxime unde, expedita sed at ipsam.
    
    </div>


    <div class="col-12 col-md-6 offset-md-1">

        <div class="card">
            <div class="card-body">
                
                
                <div class="card-text">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3 form-group row">
                                    <label for="body">A cosa stai pensando ue?</label>
                                    <textarea name="body" id="body" cols="30" rows="10"
                                    class="form-control">{{old('body')}}</textarea>
                    </div>
                </div>
                <button type="button" class="btn btn-primary">Button</button>
            </div>
        </div>

    </div>
    <div class="col-12 col-md-2 offset-md-1">
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus quam et, ratione mollitia exercitationem, eligendi, at possimus ad consequuntur excepturi eos! Nisi neque harum doloribus dicta optio voluptatibus veritatis praesentium.
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta debitis quasi quidem reiciendis sit consequuntur ullam cupiditate neque quia, dolore, a voluptas vitae. Eum iste quas quisquam laborum nisi commodi.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit perferendis aut ipsa! Quo optio repellat dolor culpa voluptate doloribus mollitia sunt temporibus impedit aliquam maxime unde, expedita sed at ipsam.
    
    </div>
    </div>
</div>
</x-layout>