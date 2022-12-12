@extends('layouts.authMaster')
@section('title', toTitleCase('register'))

@section('content')
<div class="mx-auto flex min-h-screen max-w-5xl items-center justify-center">
    <div class="card w-[500px] bg-base-300 shadow-2xl">

        <form action="{{ route('register.store') }}" method="POST">
            <div class="card-body sm:space-y-2">

                <div class="flex flex-col items-center justify-between gap-3 sm:flex-row">
                    <div class="form-control w-full">
                         <label class="label">
                            <span class="label-text capitalize text-base">first name</span>
                        </label>
                        <input type="text" name="fname" class="regular-input">
                    </div>

                    <div class="form-control w-full">
                         <label class="label">
                            <span class="label-text capitalize text-base">last name</span>
                        </label>
                        <input type="text" name="lname" class="regular-input">
                    </div>
                </div>

                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text capitalize text-base">Email</span>
                    </label>
                    <input type="email" name="email" class="regular-input">
                </div>

                <div class="form-control">
                     <label class="label">
                            <span class="label-text capitalize text-base">Password</span>
                        </label>
                    <input type="password" name="password" class="regular-input">
                </div>

                <div class="form-control">
                     <label class="label">
                        <span class="label-text capitalize text-base">
                            password confirmation
                        </span>
                    </label>
                    <input type="password" name="password_confirmation" class="regular-input">
                </div>

                <div class="form-control">
                    <button class="btn-primary btn">
                        <i class="fa-solid fa-user-plus mr-2"></i>
                        register
                    </button>
                </div>

                <div class="mt-3">
                    <a href="{{ route('login.create') }}" class="link-hover label-text-alt link">
                        Already have an account
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
