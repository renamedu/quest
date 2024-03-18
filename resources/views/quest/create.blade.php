@extends('main')

@section('content')
    <div>
        <h1>
            Tasks
        </h1>
    </div>
    <div>
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
