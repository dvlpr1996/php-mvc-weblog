@extends('layouts.authMaster')
@section('title', toTitleCase('login'))

@section('content')
<div class="mx-auto flex min-h-screen max-w-5xl items-center justify-center">
    <div class="hero-content flex-col lg:flex-row-reverse lg:gap-8">

        <div class="text-center lg:text-left">
            <h1 class="text-5xl font-bold">Login now!</h1>
            <p class="py-6">
                Login to your profile and start writing amazing article and share it to other users
            </p>
        </div>

        <div class="card w-full max-w-sm flex-shrink-0 bg-base-200 shadow-2xl">
            <form action="{{ route('login.store') }}" method="POST">

                <div class="card-body">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text capitalize text-base">Email</span>
                        </label>
                        <input type="email" name="email" class="regular-input">
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text capitalize text-base">password</span>
                        </label>
                        <input type="password" name="password" class="regular-input">
                    </div>

                    <div class="form-control flex-row items-center gap-2">
                        <input type="checkbox" class="checkbox-primary checkbox checkbox-sm" />
                        <label class="label">
                            <span class="label-text capitalize text-base">remember me</span>
                        </label>
                    </div>

                    <div class="form-control mt-4">
                        <button class="btn-primary btn">
                            <i class="fa-solid fa-right-to-bracket mr-2"></i>Login
                        </button>
                    </div>

                    <div class="mt-3 flex items-center justify-between">
                        <a href="#" class="link-hover label-text-alt link">
                            Forgot password?
                        </a>
                        <a href="#" class="link-hover label-text-alt link">
                            Already have an account
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
