@extends('layout.app')
@section('main')
    <main>
        <div class="header">
            <h4>header here, i think i shold show name of user, input new tweet</h4>
            <form action="" method="post" class="d-flex flex-column mb-3">
                <p>please share your tweet today..</p>
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
        <div class="tweet-feed">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card">
                        <img
                            src="https://media.istockphoto.com/photos/christmas-tree-with-baubles-and-blurred-shiny-lights-picture-id1179032100?b=1&k=20&m=1179032100&s=612x612&w=0&h=tHExHR-3-0-i_6DdbQCo0VmrpaBD4AMeJWFdRSHQzhI="
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <span>from <h5 class="card-title" style="display: inline;">@MichaelBaoBiBo</h5></span>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img
                            src="https://media.istockphoto.com/photos/christmas-tree-with-baubles-and-blurred-shiny-lights-picture-id1179032100?b=1&k=20&m=1179032100&s=612x612&w=0&h=tHExHR-3-0-i_6DdbQCo0VmrpaBD4AMeJWFdRSHQzhI="
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <span>from <h5 class="card-title" style="display: inline;">@AnnaHanh</h5></span>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img
                            src="https://media.istockphoto.com/photos/christmas-tree-with-baubles-and-blurred-shiny-lights-picture-id1179032100?b=1&k=20&m=1179032100&s=612x612&w=0&h=tHExHR-3-0-i_6DdbQCo0VmrpaBD4AMeJWFdRSHQzhI="
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <span>from <h5 class="card-title" style="display: inline;">@JosTi</h5></span>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img
                            src="https://media.istockphoto.com/photos/christmas-tree-with-baubles-and-blurred-shiny-lights-picture-id1179032100?b=1&k=20&m=1179032100&s=612x612&w=0&h=tHExHR-3-0-i_6DdbQCo0VmrpaBD4AMeJWFdRSHQzhI="
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <span>from <h5 class="card-title" style="display: inline;">@PeterTeo</h5></span>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="statistic"></div>
    </main>
@endsection
