




    <div class="card" style="width: 20rem;">

        <div class="card-body">
            <h5 class="card-title">{{$title}}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{$subtitle}}</h6>
            <div class="card-text" style="width: 16rem; height: 200px">{{$text}}</div>
            <form action="{{route('cards.destroy',$card->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">X</button>
                <a href="{{route('cards.edit',$card->id)}}" class="btn btn-primary">Edit</a>

            </form>



        </div>
    </div>


