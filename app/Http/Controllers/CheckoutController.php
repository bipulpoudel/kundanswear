<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Order;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = \Cart::getContent();
        return view('pages.checkout')->with('items',$items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request,[
            'name' => ['required'],
            'address' => ['required'],
            'town' => ['required'],
            'state' => [ 'required'],
            'postcode' => ['required', 'numeric'],
            'phone' => ['required', 'numeric'],
            'email' => ['required'],
        ]);
        $items = \Cart::getContent();
        $product_details = [];
        foreach($items as $item){
            array_push($product_details, ['name' => $item->name, 'quantity' =>$item->quantity,'size' => reset($item->attributes)[0] ]);
        }
        $order = new Order;
        $order->name = $request->input('name');
        $order->address = $request->input('address');
        $order->town = $request->input('town');
        $order->state = $request->input('state');
        $order->postcode =$request->input('postcode');
        $order->phone =$request->input('phone');
        $order->email =$request->input('email');
        $order->order_note =$request->input('order_note');
        $order->product_details =json_encode($product_details);
        $order->order_track_id = Str::random(32);
        $order->save();
        notify()->success('Your Order has been added successfuly!','Success!');
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
