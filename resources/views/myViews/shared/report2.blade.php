
@if(Session::has("status"))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-{{ Session::get("status")==="succesTraitement" ? "success":"danger" }}" role="alert">
                {{ Session::get("data")['primaryData']['msg']  }}
                {{--<h4 class="alert-heading">Well done!</h4>
                <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                <hr>
                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>--}}
            </div>
        </div>
    </div>
@endif
