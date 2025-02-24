<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ticket;
use Illuminate\Http\Request;


class TicketController extends Controller
{
    public function showTicket()
    {
        $tickets = Ticket::with('category','user')->get();
  
        // dd($tickets);
        return view('/admin/tickets',["tickets"=> $tickets]);
    }

    public function showTicketsClient()
    {
        $tickets = Ticket::where('user_id', auth()->id())->get();
  
        // dd($tickets);
        return view('/client/mesTickets',["tickets"=> $tickets]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('/client/createTicket',compact('categories'));
    }

    public function store(Request $request)
    {
        // dd('gggg');
    
        // $request->validate([
        //     'title' => ['required', 'string', 'max:255'],
        //     'categorie_id' => ['required'],
        //     'description' => ['required'],
        // ]);
        // dd($request);
        Ticket::create([
            'title' => $request->title,
            'description' => $request->description,
            'categorie_id' => $request->category_id,
            'user_id' => auth()->id(),
            'status' => 'pending'
        ]);

        return redirect()->route('client.tickets');
    }
    
    public function editTicket(){

    }
}
