<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nom -->
        <div>
            <x-input-label for="name" :value="__('Nom')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Adresse e-mail -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Adresse e-mail')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Numéro de téléphone -->
        <div class="mt-4">
            <x-input-label for="phone" :value="__('Numéro de téléphone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Spécialité (choix unique) -->
        <div class="mt-4">
            <x-input-label for="specialty" :value="__('Spécialité')" />
            <select id="specialty" name="specialty" class="block mt-1 w-full border-gray-300 rounded-md" required>
                <option value="" disabled selected>-- Sélectionnez une spécialité --</option>
                <option value="Cardiologie">Cardiologie</option>
                <option value="Dentiste">Dentiste</option>
                <option value="Dermatologie">Dermatologie</option>
                <option value="Pédiatrie">Pédiatrie</option>
                <option value="Ophtalmologie">Ophtalmologie</option>
                <option value="Neurologie">Neurologie</option>
                <option value="Orthopédie">Orthopédie</option>
                <option value="Gynécologie">Gynécologie</option>
            </select>
            <x-input-error :messages="$errors->get('specialty')" class="mt-2" />
        </div>

        <!-- Jours de travail -->
        <div class="mt-4">
            <x-input-label :value="__('Jours de travail')" />
            <div class="grid grid-cols-2 gap-4">
                @php
                    $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
                @endphp

                @foreach ($days as $day)
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="working_days[]" value="{{ $day }}" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                        <span>{{ __($day) }}</span>
                    </label>
                @endforeach
            </div>
            <x-input-error :messages="$errors->get('working_days')" class="mt-2" />
        </div>

        <!-- Horaires de travail -->
        <div class="mt-4">
            <x-input-label :value="__('Horaires de travail')" />
            <div class="flex space-x-4">
                <input type="time" id="opening_time" name="opening_time" class="block w-1/2 border-gray-300 rounded-md" required>
                <input type="time" id="closing_time" name="closing_time" class="block w-1/2 border-gray-300 rounded-md" required>
            </div>
            <x-input-error :messages="$errors->get('working_hours')" class="mt-2" />
        </div>

        <!-- Mot de passe -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Mot de passe')" />
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirmation du mot de passe -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmez le mot de passe')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Bouton d'inscription -->
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Déjà inscrit(e) ?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('S\'inscrire') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
