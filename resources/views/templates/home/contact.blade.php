<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                <div class="section-title left">
                    <h2>{{$contact->title}}</h2>
                </div>
                <p>{{$contact->text}}</p>
                <h3 class="mt60">{{$contact->sub_title}}</h3>
                <p class="con-item">{{$contact->champ1}}</p>
                <p class="con-item">{{$contact->champ2}}</p>
                <p class="con-item">{{$contact->champ3}}</p>
                <p class="con-item">{{$contact->champ4}}</p>
            </div>
            <!-- contact form -->
            <div class="col-md-6 col-pull">
                <form class="form-class" id="con_form">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" placeholder="{{$contactform->name}}">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="email" placeholder="{{$contactform->mail}}">
                        </div>
                        <div class="col-sm-12">
                            <input type="text" name="subject" placeholder="{{$contactform->subject}}">
                            <textarea name="message" placeholder="{{$contactform->message}}"></textarea>
                            <button class="site-btn">{{$contactform->button}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end-->
