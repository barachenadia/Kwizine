{{ Form::open(array('url'=>'users/create', 'class'=>'form-signup')) }}
    <h2 class="form-signup-heading">Please Register</h2>

    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    {{ Form::text('firstname', null, array('class'=>'form-control', 'id'=>'inputFirstName','placeholder'=>'First Name')) }}
    {{ Form::text('lastname', null, array('class'=>'form-control', 'id'=>'inputLastName','placeholder'=>'Last Name')) }}
    {{ Form::text('email', null, array('class'=>'form-control', 'id'=>'inputEmail', 'placeholder'=>'Email Address')) }}
    {{ Form::password('password', array('class'=>'form-control', 'id'=>'inputPassword', 'placeholder'=>'Password')) }}
    {{ Form::password('password_confirmation', array('class'=>'form-control','id'=>'inputPassword', 'placeholder'=>'Confirm Password')) }}

    {{ Form::submit('Register', array('class'=>'btn btn-primary btn-lg btn-block'))}}
    {{ Form::close() }}







