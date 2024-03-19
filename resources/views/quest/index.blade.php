@extends('main')

@section('content')
    <div class="login">
        <p class="login-p">Login:</p>
        <form action="{{ route('quest.user') }}" method="POST" class="login-form">
            @csrf
            <input type="text" name="username" placeholder="Username" value="robert">
            @error('username')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <button type="submit" class="login-btn">Login</button>
        </form>
    </div>
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
                <th>Reward</th>
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
    <div class="create">
        <div class="create-task">
            <h3>Create Task</h3>
        </div>
        <form action="{{ route('quest.store') }}" method="POST" class="create-form">
            @csrf
            <div class="input">
                <p>Creator:</p>
                <input type="text" name="creator" placeholder="Username">
            </div>
            @error('creator')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <div class="input">
                <p>Task name:</p>
                <input type="text" name="name" placeholder="Task name">
            </div>
            @error('name')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <div class="input">
                <p>Task quest:</p>
                <textarea name="task" cols="30" rows="10" placeholder="Task"></textarea>
            </div>
            @error('task')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <div class="input">
                <p>Correct answer:</p>
                <input type="text" name="correct_answer" placeholder="Correct answer">
            </div>
            @error('correct_answer')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <div class="input">
                <label for="cost">Reward for task:</label>
                <input type="number" id="cost" name="cost" list="markers" min="1" max="5" placeholder="1-5">
            </div>
            @error('cost')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <button type="submit">Create</button>
        </form>
    </div>
@endsection
