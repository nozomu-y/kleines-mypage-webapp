{{Form::open(['url' => 'login', 'method' => 'post'])}}
{{Form::email('email', null, ['placeholder'=>'Email address'])}}
{{Form::password('password', null, ['placeholder'=>'Password'])}}
{{Form::submit()}}
{{Form::close()}}

@if (session('error')) 
    {{ session('error') }}
@endif
