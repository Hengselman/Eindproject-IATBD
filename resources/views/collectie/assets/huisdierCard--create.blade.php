<div class="huisdierForm__parent">
    <!-- Session Status -->
    <x-auth-session-status class="" :status="session('status')" />

    <form class="huisdierForm" method="POST" action="{{ route('collectie.store') }}" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div class="form__div">
            <label for="name">Naam huisdier: </label>
            <input class="form__input" id="name" type="name" name="name" :value="name" required autofocus autocomplete="name" />
        </div>

        <!-- Soort -->
        <div class="form__div">
            <label for="soort">Soort: </label>
           <!-- <input id="soort" class="" type="text" name="soort"/> -->
            <select id="soort" name="soort">
                @foreach ($huisdier->unique('soort') as $huisdier_soort)
                    <option value="{{$huisdier_soort->soort}}">{{$huisdier_soort->soort}}</option>
                @endforeach
            </select>
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

        <!-- Later toevoegen
         Zoekt oppas?
        <div class="form__div form__radio">
            <input type="radio" id="zoektOppasTrue" name="zoekt_oppas" value="zoekOppasTrue" checked><label for="zoektOppasTrue">Ik zoek een oppas!</label>
            <input type="radio" id="zoektOppasFalse" name="zoekt_oppas"><label for="zoektOppasFalse">Ik zoek nog geen oppas.</label>
        </div>
                -->

        <!-- Wanneer -->
        <div class="form__div">
            <span>Wanneer heeft u de oppas nodig?</span>
            <input class="form__input" name="wanneer" type="date" value=""/>
        </div>

        <!-- Hoeveel_dagen -->
        <div>
            <span>Voor hoeveel dagen is de oppas nodig?</span>
            <input name="hoeveel_dagen" type="number" min="1" step="1"/>
        </div>

        <!-- Uurtarief -->
        <div>
            <span>Wat is het uurtarief voor de oppasser?</span>
            <input name="uurtarief" type="number" min="1" step="any"/>
        </div>

        <!-- Belangrijke_info -->
        <div>
            <span>Heeft u nog andere belangrijke info die u kwijt wilt? Een allergie of eetgewoontes bijv.</span>
            <textarea name="belangrijke_info" id="belangrijke_info" cols="30" rows="10"></textarea>
        </div>


        <div class="form__div">
        <input class="form__div form__div__button" type="submit" value="Huisdier aanmaken">
        </div>
    </form>
</div>

