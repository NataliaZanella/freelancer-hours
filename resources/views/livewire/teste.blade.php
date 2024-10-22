<div>

    <h1>Componente Limewire</h1>

    <input wire:model.live="search"/>



    <br>


    <ul>

        @foreach ($users as $user )

            <li>{{ $user->name }} </li>

        @endforeach


    </ul>

</div>
