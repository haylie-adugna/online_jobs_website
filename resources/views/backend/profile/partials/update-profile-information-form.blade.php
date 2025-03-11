<section class="bg-white shadow rounded-md overflow-hidden">
    <!-- Section Header -->
    <div class="p-6">
        <header>
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Profile Information') }}
            </h2>
            <p class="mt-1 text-sm text-gray-600">
                {{ __('Update your account\'s profile information and email address.') }}
            </p>
        </header>

        <!-- Verification Form -->
        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>

        <!-- Profile Update Form -->
        <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('patch')

            <!-- First Name Input -->
            <div>
                <label for="first_name" class="block text-sm font-medium text-gray-700">{{ __('First Name') }}</label>
                <input id="first_name" name="first_name" type="text" class="mt-1 block w-full border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300 sm:text-sm" value="{{ old('first_name', $user->first_name) }}" required autofocus autocomplete="first_name" />
                @if($errors->has('first_name'))
                    <p class="mt-2 text-red-600 text-sm">{{ $errors->first('first_name') }}</p>
                @endif
            </div>

            <!-- Middle Name Input -->
            <div>
                <label for="middle_name" class="block text-sm font-medium text-gray-700">{{ __('Middle Name') }}</label>
                <input id="middle_name" name="middle_name" type="text" class="mt-1 block w-full border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300 sm:text-sm" value="{{ old('middle_name', $user->middle_name) }}" required autocomplete="middle_name" />
                @if($errors->has('middle_name'))
                    <p class="mt-2 text-red-600 text-sm">{{ $errors->first('middle_name') }}</p>
                @endif
            </div>

            <!-- Last Name Input -->
            <div>
                <label for="last_name" class="block text-sm font-medium text-gray-700">{{ __('Last Name') }}</label>
                <input id="last_name" name="last_name" type="text" class="mt-1 block w-full border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300 sm:text-sm" value="{{ old('last_name', $user->last_name) }}" required autocomplete="last_name" />
                @if($errors->has('last_name'))
                    <p class="mt-2 text-red-600 text-sm">{{ $errors->first('last_name') }}</p>
                @endif
            </div>

            <!-- Email Input -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
                <input id="email" name="email" type="email" class="mt-1 block w-full border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300 sm:text-sm" value="{{ old('email', $user->email) }}" required autocomplete="username" />
                @if($errors->has('email'))
                    <p class="mt-2 text-red-600 text-sm">{{ $errors->first('email') }}</p>
                @endif

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                    <div class="mt-4">
                        <p class="text-sm text-gray-800">
                            {{ __('Your email address is unverified.') }}
                            <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 font-medium text-sm text-green-600">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                        @endif
                    </div>
                @endif
            </div>

            <!-- Image Upload Section -->
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">{{ __('Profile Image') }}</label>
                <input type="file" accept="image/*" class="form-control border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300 sm:text-sm" name="image" id="imageInput" value="{{ asset('upload/user/image') }}/{{$user->photo}}">
                <div id="imagePreviewContainer" class="mt-2"></div>
            </div>

            <!-- Save Button -->
            <div class="flex items-center gap-4 mt-4">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">{{ __('Save') }}</button>

                @if (session('status') === 'profile-updated')
                    <p class="text-sm text-gray-600">
                        {{ __('Updated.') }}
                    </p>
                @endif
            </div>
        </form>
    </div>
</section>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="ad6a379b5a73756c7bd7b3cd-text/javascript"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
