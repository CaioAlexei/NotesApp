<div class="container">
    <form action="{{$action}}" method="post">
        @csrf

        @if($update)
            @method('PUT')
        @endif


        <div class="mb-3">
            <label for="title" class="form-label">Note Title</label>
            <input type="text"
                   class="form-control"
                   id="title"
                   name="title"
                   @isset($title)
                   value="{{$title}}"
                   @endisset>
            <div id="titleHelp" class="form-text">The title that will be in your note</div>
        </div>
        <div class="mb-3">
            <label for="subtitle" class="form-label">Note Subtitle</label>
            <input type="text"
                   class="form-control"
                   name="subtitle"
                   id="subtitle"
                   @isset($subtitle)
                       value="{{$subtitle}}"
                   @endisset>
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Note Text</label>
            <textarea
                type="text"
                class="form-control"
                id="text"
                name="text">@isset($text){{$text}}@endisset</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Add Note</button>
        <a href="/cards" class="btn btn-dark">Return</a>


    </form>
    <div class="mt-4">

    </div>
</div>
