<div class="huisdierForm__parent">
    <!-- Session Status -->
    <x-auth-session-status class="" :status="session('status')" />

    <form class="huisdierForm" method="POST" action="{{ route('collectie.store') }}" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div class="form__div">
            <label for="name">Naam huisdier: </label>
            <input id="name" type="name" name="name" :value="name" required autofocus autocomplete="name" />
        </div>

        <!-- Soort -->
        <div class="form__div">
            <label for="soort">Soort: </label>
            <input id="soort" class="" type="text" name="soort"/>
        </div>

        <!-- Description -->
        <div class="form__div">
            <label for="description">Beschrijving: </label>
            <textarea id="description" class="" type="text" name="description"></textarea>
        </div>

        <!-- Image -->
        <div class="form__div">
            <span>Kies een foto uit</span>
            <input class="form__div__filebutton" type="file" name="image">
            @error('image')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div class="form__div">
            <button class="form__div form__div__button">Voeg toe</button>
        </div>
    </form>
</div>

