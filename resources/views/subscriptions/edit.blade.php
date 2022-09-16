<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Info over abonnement') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="/subscriptions/{{ $subscription->id }}">
                        <table>
                            @method('PUT')
                            @csrf
                            <tr>
                                <th>Eigenaar</th>
                                <th>Type abonnement</th>
                                <th>Begindatum</th>
                                <th>Einddatum</th>
                                <th>Aantal bezoeken deze week</th>
                            </tr>
                            <tr>
                                <td>{{ $subscription->guest->firstname }} {{ $subscription->guest->lastname }}</td>
                                <td>
                                    <select name="subscriptiontype" id="">
                                        @foreach ($subscriptionTypes as $subscriptionType)
                                            <option value="{{ $subscriptionType->id }}">{{ $subscriptionType->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>{{ $subscription->startdate }}</td>
                                <td>{{ $subscription->enddate }}</td>
                                <td>{{ $subscription->visitsmade }}</td>
                            </tr>
                        </table>
                        <input type="submit" value="Abonnement aanpassen">
                    </form>
                    <form action="/subscriptions/{{ $subscription->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Abonnement verwijderen">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
