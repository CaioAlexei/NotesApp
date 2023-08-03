<x-layout>

    @isset($message)
        <div class="container mt-4">
            <div class="alert alert-success">
                {{$message}}
            </div>
        </div>
    @endisset

    <div class="container mt-4 d-flex justify-content-center gap-3 flex-wrap">

    @foreach($cards as $card)
        <x-cards.card title="{{$card->title}}" subtitle="{{$card->subtitle}}" text="{{$card->text}}" id="{{$card->id}}" :card="$card"></x-cards.card>
    @endforeach
    </div>
</x-layout>
