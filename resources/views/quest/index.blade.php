@extends('main')

@section('content')
    <div class="">
        <p class="">Login:</p>
        <form action="{{ route('quest.user') }}" method="POST">
            @csrf
            <input type="text" name="username" placeholder="Username" value="robert">
            @error('username')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <button type="submit">Login</button>
        </form>
    </div>
        <h3>
            All Quests: {{ $quests->count() }}
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
                    <td>{{ $quest->name }}</td>
                    <td>{{ $quest->creator }}</td>
                    <td>{{ $quest->cost }}</td>
                    <td>{{ $quest->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div>
        <div>
            Create Task
        </div>
        <form action="{{ route('quest.store') }}" method="POST">
            @csrf
            <input type="text" name="creator" placeholder="Username">
            <input type="text" name="name" placeholder="Task name">
            @error('name')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <textarea name="task" cols="30" rows="10" placeholder="Task"></textarea>
            @error('task')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <input type="text" name="correct_answer" placeholder="Correct answer">
            @error('correct_answer')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <label for="cost">Reward for task (1-5)</label>
            <input type="number" id="cost" name="cost" list="markers" min="1" max="5">
            <button type="submit">Create</button>
        </form>
    </div>
@endsection
