@extends('main')

@section('content')
    <div class="login">
        <div class="profile">
            <h2>
                {{ $quest->name }}
            </h2>
            <div class="out-btn">
                <a href="javascript:history.back()">Back</a>
            </div>
        </div>
    </div>
    <div>
        <ul>
            <li>Author: {{ $quest->creator }}</li>
            <li>Reward: {{ $quest->cost }}</li>
            <li>Date: {{ $quest->created_at }}</li>
        </ul>
        <div class="quest-count">
            {{ $quest->task }}
        </div>
        <div class="create">
            <form action="{{ route('quest.check', $quest->id) }}" method="POST" class="create-answer">
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
    </div>
@endsection
