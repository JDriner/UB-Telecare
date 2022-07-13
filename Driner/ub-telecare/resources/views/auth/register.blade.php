@extends('masterlayout.master')

<div class="container">
    <section class="section register d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
              <a href="index.html" class="logo d-flex align-items-center w-auto">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">UB Telecare</span>
              </a>
            </div><!-- End Logo -->
            <div class="card mb-3">
              <div class="card-body">
                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Creating an Account</h5>
                  <p class="text-center small">Enter the required details to create an account</p>
                </div>
                <form  class="row g-3 needs-validation" method="POST" action="{{ route('register') }}">
                    @csrf
                  <div class="col-12">
                    <label for="yourName" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="yourName" required>
                  </div>
                  <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">@</span>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="yourPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="yourPassword" required>
                  </div>
                  <div class="col-12">
                    <label for="yourPassword" class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="yourPassword" required>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                        <label for="">Role</label>
                        <select class="form-control" name="role_id" id="">
                          <option value="administrator">Administrator</option>
                          <option value="physician">Physician</option>
                          <option value="nurse">Nurse</option>
                          <option value="patient">Patient</option>
                        </select>
                      </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit">Create Account</button>
                  </div>
                  <div class="col-12">
                    <p class="small mb-0">Already have an account? <a href="{{ route('login') }}">Log in</a></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="form-group">
              <label for="">Role</label>
              <select class="form-control" name="role_id" id="">
                <option value="administrator">Administrator</option>
                <option value="physician">Physician</option>
                <option value="nurse">Nurse</option>
                <option value="patient">Patient</option>
              </select>
            </div>


            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
