<section>
        <form action="/contact/newMessage" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">                        
                        <div class="col-sm-6">
                            <input type="text" name="name" placeholder="Nom">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="email" placeholder="E-mail">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="password" placeholder="mot de passe">
                    <div class="col-sm-6">
                        <input type="text" name="password_check" placeholder="confirmer mot de passe">                               
                    </div>     
                    <button type="submit" class="btn btn-primary">S'inscrire</button>                 
            </div>
        </form>
        @if(count($errors))
                                <div class="col-md-6">
                                    <div class="alert alert-danger rounded">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
</section>