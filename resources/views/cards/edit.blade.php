<x-layout>

    <x-cards.form :action="route('cards.update',$card->id)"
                  :title="$card->title"
                  :subtitle="$card->subtitle"
                  :text="$card->text"
                  :update="true">
    </x-cards.form>
</x-layout>
