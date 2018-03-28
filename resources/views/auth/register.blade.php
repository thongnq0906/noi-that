@extends('shared.master')

@section('content')
<section class="main-container col1-layout">
    <div class="main container">
        <div class="account-login">
            <div class="page-title">
                <h2>Login or Create an Account</h2>
            </div>
            <fieldset class="col2-set">
                <legend>Login or Create an Account</legend>
                <div class="col-1 registered-users"><strong>Registered Customers</strong>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="content">
                            <p>If you have an account with us, please log in.</p>
                            <ul class="form-list">
                                <li>
                                    <label for="name">Name <span class="required">*</span></label>
                                    <br>
                                    <input type="text" title="Name" class="input-text required-entry{{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" name="name" value="{{ old('name') }}">
                                    @if($errors->has('name'))
                                    <p class="required">
                                        {{ $errors->first('name') }}
                                    </p>
                                    @endif
                                </li>

                                <li>
                                    <label for="email">Email Address <span class="required">*</span></label>
                                    <br>
                                    <input type="text" title="Email Address" class="input-text required-entry{{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" name="email" value="{{ old('email') }}">
                                    @if($errors->has('email'))
                                    <p class="required">
                                        {{ $errors->first('email') }}
                                    </p>
                                    @endif
                                </li>
                                <li>
                                    <label for="pass">Password <span class="required">*</span></label>
                                    <br>
                                    <input type="password" title="Password" id="pass" class="input-text required-entry validate-password{{ $errors->has('password') ? 'is-invalid' : '' }}" name="password">
                                    @if($errors->has('password'))
                                    <p class="required">
                                        {{ $errors->first('password') }}
                                    </p>
                                    @endif
                                </li>
                                <li>
                                    <label for="pass">Password confirm <span class="required">*</span></label>
                                    <br>
                                    <input type="password" title="Password" id="pass" class="input-text required-entry validate-password{{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" name="password_confirmation">
                                    @if($errors->has('password_confirmation'))
                                    <p class="required">
                                        {{ $errors->first('password_confirmation') }}
                                    </p>
                                    @endif
                                </li>               
                            </ul>
                            <p class="required">* Required Fields</p>
                            <div class="buttons-set">
                                <button id="send2" name="send" type="submit" class="button login"><span>Create</span></button>
                            </div>
                        </form>
                    </div>
                </fieldset>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </section>
    @endsection
