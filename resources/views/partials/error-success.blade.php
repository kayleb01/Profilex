<div class="mx-auto">
    @if ($message = Session::get('success'))
        <div class="bg-green-500 p-6 m-2 text-white rounded-sm">
            {{$message}}
        </div>
    @endif


    @if ($message = Session::get('error'))
        <div class="bg-red-500 text-white p-6 rounded-sm m-2">
            {{$message}}
        </div>
    @endif


    @if ($message = Session::get('warning'))
        <div class="alert alert-warning alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif


    @if ($message = Session::get('info'))
        <div class="alert alert-info alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif


    @if ($errors->any())
    <div class="alert alert-danger">
        Please check the form below for errors
    </div>
    @endif
    @if ($errors->any())
    <div class="bg-red-500 text-white p-6 m-2 rounded-sm">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
