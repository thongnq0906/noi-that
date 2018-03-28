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
          <div class="col-1 new-users"><strong>New Customers</strong>
            <div class="content">
              <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
              <div class="buttons-set">
                <button onclick="window.location='http://demo.magentomagik.com/computerstore/customer/account/create/';" class="button create-account" type="button"><span>Create an Account</span></button>
              </div>
            </div>
          </div>
          <div class="col-2 registered-users"><strong>Registered Customers</strong>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="content">
                  <p>If you have an account with us, please log in.</p>
                  <ul class="form-list">
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
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                            </label>
                        </div>
                    
                  </ul>
                  <p class="required">* Required Fields</p>
                  <div class="buttons-set">
                    <button id="send2" name="send" type="submit" class="button login"><span>Login</span></button>
                    <a class="forgot-word" href="{{ route('password.request') }}">Forgot Your Password?</a> </div>
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
