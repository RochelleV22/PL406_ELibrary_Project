@if(count($errors))
    <div class="alert alert-danger alert-dismissable site-block">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><strong>Errors</strong></h4>

        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach

    </div>
@endif
