<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Endereço -->
        <div class="mt-4">
            <x-input-label for="endereco" :value="__('Endereço')" />
            <x-text-input id="endereco" class="block mt-1 w-full" type="text" name="endereco" :value="old('endereco')" required autofocus autocomplete="endereco" />
            <x-input-error :messages="$errors->get('endereco')" class="mt-2" />
        </div>

        <!-- Bairro -->
        <div class="mt-4">
            <x-input-label for="bairro" :value="__('Bairro')" />
            <x-text-input id="bairro" class="block mt-1 w-full" type="text" name="bairro" :value="old('bairro')" required autofocus autocomplete="bairro" />
            <x-input-error :messages="$errors->get('bairro')" class="mt-2" />
        </div>

        <!-- CEP -->
        <div class="mt-4">
            <x-input-label for="cep" :value="__('CEP')" />
            <x-text-input id="cep" class="block mt-1 w-full" type="text" name="cep" :value="old('cep')" required autofocus autocomplete="cep" />
            <x-input-error :messages="$errors->get('cep')" class="mt-2" />
        </div>

        <script>
        $(document).ready(function() {
        $('#cep').mask('00000-000');
        });
        </script>
        <!-- Estado -->
        <div class="mt-4">
            <x-input-label for="estado" :value="__('Estado')" />
            <!-- <x-text-input id="estado" class="block mt-1 w-full" type="text" name="estado" :value="old('estado')" required autofocus autocomplete="estado" /> -->
            <x-input-error :messages="$errors->get('estado')" class="mt-2" />
            <select class="block mt-1 w-full" name="estado" id="inlineFormCustomSelect" required>
            <option selected value="Acre">AC</option>
            <option value="Alagoas">AL</option>
  <option value="Amapá">AP</option>
  <option value="Amazonas">AM</option>
  <option value="Bahia">BA</option>
  <option value="Ceará">CE</option>
  <option value="Distrito Federal">DF</option>
  <option value="Espirito Santo">ES</option>
  <option value="Goiás">GO</option>
  <option value="Maranhão">MA</option>
  <option value="Mato Grosso">MT</option>
  <option value="Mato Grosso do Sul">MS</option>
  <option value="Minas Gerais">MG</option>
  <option value="Pará">PA</option>
  <option value="Paraíba">PB</option>
  <option value="Paraná">PR</option>
  <option value="Pernambuco">PE</option>
  <option value="Piauí">PI</option>
  <option value="Rio de Janeiro">RJ</option>
  <option value="Rio Grande do Norte">RN</option>
  <option value="Rio Grande do Sul">RS</option>
  <option value="Rondônia">RO</option>
  <option value="Roraima">RR</option>
  <option value="Santa Catarina">SC</option>
  <option value="São Paulo">SP</option>
  <option value="Sergipe">SE</option>
  <option value="Tocantins">TO</option>
                            </select> 
        </div>

        <!-- Telefone -->
        <div class="mt-4">
            <x-input-label for="Telefone" :value="__('Telefone')" />
            <x-text-input id="telefone" class="block mt-1 w-full" type="tel" name="telefone" :value="old('telefone')" required autofocus autocomplete="telefone" placeholder="(11) 0000-0000"/>
            <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
        </div>

        <script>
        $(document).ready(function() {
        $('#telefone').mask('(00) 0000-0000');
        });
        </script>

        <!-- Celular -->
        <div class="mt-4">
            <x-input-label for="celular" :value="__('Celular')" />
            <x-text-input id="celular" class="block mt-1 w-full" type="tel" name="celular" :value="old('celular')" required autofocus autocomplete="celular" placeholder="(11) 00000-0000"/>
            <x-input-error :messages="$errors->get('celular')" class="mt-2" />
        </div>

        <script>
        $(document).ready(function() {
        $('#celular').mask('(00) 00000-0000');
        });
        </script>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
