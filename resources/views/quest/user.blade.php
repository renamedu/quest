@extends('main')

@section('content')
    <div class="login">
        <div class="profile">
        <h2>
            {{ $user->name }}
        </h2>
        <div>
            Balance: {{ $user->balance }}
        </div>
        <div class="out-btn">
            <a href="{{ route('quest.index') }}">out</a>
        </div>
        </div>
    </div>
    <div class="quest-count">
        <h3>
            Quests Cleared
        </h3>
    </div>
        <table class="table">
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
    <div class="quest-count">
        <h3>
            All Quests: {{ $quests->count() }}
        </h3>
    </div>
    <div>
        <table class="table">
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
