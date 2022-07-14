@extends('layout.app')
@section('main')
    <main class="d-flex align-items-center">
        <div class="header">
            <h4>header here, i think i shold show name of user, input new tweet</h4>
            <form action="{{route('tweet.store')}}" method="post" class="d-flex flex-column mb-3">
                @csrf
                <p>Please share your tweet today to everybody...</p>
                <div class="mb-3">
                    <textarea spellcheck="false" class="form-control" placeholder="please share your tweet today.."
                              id="tweet_caption" name="tweet_caption" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <input class="form-control" type="file" id="tweet_image" name="tweet_image" accept="image/*">
                </div>

                <button type="submit" class="btn btn-primary">Tweet</button>
            </form>
        </div>
    </main>
@endsection
