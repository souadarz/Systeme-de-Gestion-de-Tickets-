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
        return view('client/createTicket',compact('categories'));
    }

    public function store(Request $request)
    {
       
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category_id' => ['required'],
            'description' => ['required'],
            'image' => ['required']
        ]);
    }
    
    public function editTicket(){

    }
}
