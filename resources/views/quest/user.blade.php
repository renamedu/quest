@extends('main')

@section('content')
    <div>
        <h1>
            {{ $user->name }}
        </h1>
        <div>
            Balance: {{ $user->balance }}
        </div>
    </div>
    <div>
        <a href="{{ route('quest.index') }}">out</a>
    </div>
    <div>
        Quests Cleared
        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>Creator</th>
                <th>Cost</th>
            </tr>
            </thead>
            <tbody>
            @foreach($user_quests as $quest)
                <tr>
                    <td>{{ $quest->name }}</td>
                    <td>{{ $quest->creator }}</td>
                    <td>{{ $quest->cost }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
        <div>
            <h1>
                Tasks
            </h1>
        </div>
    <h3>
        Quests: {{ $quests->count() }}
    </h3>
    <div>
        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>Creator</th>
                <th>Cost</th>
                <th>Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($quests as $quest)
                <tr>
                    <td><a href="{{ route('quest.show', $quest->id) }}">{{ $quest->name }}</a></td>
                    <td>{{ $quest->creator }}</td>
                    <td>{{ $quest->cost }}</td>
                    <td>{{ $quest->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
