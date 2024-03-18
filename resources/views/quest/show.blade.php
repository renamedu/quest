@extends('main')

@section('content')
    <div>
        <div>
            <a href="javascript:history.back()">Back</a>
        </div>
        <h1>
            {{ $quest->name }}
        </h1>
    </div>
    <div>
        <ul>
            <li>Author: {{ $quest->creator }}</li>
            <li>Reward: {{ $quest->cost }}</li>
            <li>Date: {{ $quest->created_at }}</li>
        </ul>
        <div>
            {{ $quest->task }}
        </div>
        <form action="{{ route('quest.check', $quest->id) }}" method="POST">
            @csrf
            <textarea name="correct_answer" cols="30" rows="10" placeholder="Answer"></textarea>
            @error('correct_answer')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <input type="text" name="name" placeholder="Username">
            @error('name')
            <div class="text-danger">{{$message}}</div>
            @enderror
            <input type="hidden" name="id" value="{{ $quest->id }}">
            <button type="submit">Reply</button>
        </form>
    </div>
@endsection
