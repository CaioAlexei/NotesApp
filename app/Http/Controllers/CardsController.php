<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function index(Request $request)
    {


        $cards = Card::all();

        $message = session('message');
        return view('cards.index')
            ->with('cards',$cards)
            ->with('message',$message);
    }

    public function create(Request $request)
    {
        return view('cards.create');
    }

    public function store(Request $request){
        $card = Card::create($request->all());

        return to_route('cards.index')
            ->with('message',"Note Created !");
    }

    // /cards/destroy/{card}
    public function destroy(Card $card)
    {

        $card->delete();

        return to_route('cards.index')
            ->with('messagem.sucess',"Note removed !");

    }

    public function edit(Card $card)
    {
        return view('cards.edit')
            ->with('card',$card);

    }

    public function update( Request $request, Card $card)
    {


        $card->fill($request->all());
        $card->save();

        return to_route('cards.index')
            ->with('message',"Note edited !");
    }
}
