@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block mt-5">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($errors->any())
    <div class="alert alert-danger alert-block mt-5">
        <button type="button" class="close" data-dismiss="alert">×</button>
        @foreach ($errors->all() as $error)
            <strong> {{ $error }}</strong>
        @endforeach
    </div>
@endif