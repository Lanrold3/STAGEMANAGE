<x-mail::message>
Bonjour {{$name}}
<br>
<x-mail::panel>
    Salut.C'est pour vous informer que vous avez été retenu pour le satage à l'entreprise {{$name_enterprise}}.Vous pouvez confirmez votre place ou alors déclinez pour permettre de donnez la place à d'autres personnes qu en veulent.
    <x-mail::button :url="$confUrl" color="success">
        Confirmer ma place
    </x-mail::button>
    <x-mail::button  :url="$delUrl"  >
        Déclinez
    </x-mail::button>
    <br>
    <x-mail::panel color="secondary">
        Localisation:{{$localisation}}
    </x-mail::panel>
</x-mail::panel>
Thanks,<br>

</x-mail::message>
