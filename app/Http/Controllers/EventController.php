<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Event;
Use App\Models\EventType;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\File;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $events=Event::orderBy('id', 'DESC')->paginate(20);
          $data['events']= $events;
          return view('event/list', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $eventTypes=EventType::all();
            $event=[];
            $data['eventTypes']= $eventTypes;
            $data['event']= $event;
            return view('event/create', $data);
        } catch (Exception $e) {
          return redirect('/event')->With('error',  $e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        try {
             $request->validate([
                'name' => 'required',
                'descrption' => 'required',
                'type' => 'required',
                'image' => ['required', File::image()]
            ]);
            $event = new Event;
            $event->name =  $request->input('name');
            $event->description = $request->input('descrption');
            $event->type = $request->input('type');
            $event->save();
            if($request->hasFile('image')){
                $path = $request->image->storeAs('images', 'event_'.$event->id.'.'.$request->image->getClientOriginalExtension(), 'public');
                $event->image = $path ;
                $event->save();
            }
            return redirect('/event')->With('success', 'Event created successfully');
        } catch (Exception $e) {
          return redirect('/event')->With('error',  $e->getMessage());
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       try {
            $id=$this->decryptString($id);
            $event=Event::find($id);
            if(empty($event)){
                return redirect('/event')->With('error',  'Event Not Found');
            }
            $eventTypes=EventType::all();
            $data['eventTypes']= $eventTypes;
            $data['event']= $event;
            return view('event/edit', $data);
        } catch (Exception $e) {
          return redirect('/event')->With('error',  $e->getMessage());
        }

    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        try {
            $id=$this->decryptString($id);
            $event = Event::find($id);
            if(empty($event)){
                return redirect('/event')->With('error',  'Event not found.');
            }
            $request->validate([
                'name' => 'required',
                'descrption' => 'required',
                'type' => 'required',
                'image' => [File::image()]
            ]);
            $event->name =  $request->name;
            $event->description =  $request->descrption;
            $event->type =  $request->type;
            $event->save();
            if($request->hasFile('image')){
                $path = $request->image->storeAs('images', 'event_'.$event->id.'.'.$request->image->getClientOriginalExtension(), 'public');
                $event->image = $path ;
                $event->save();
            }
            return redirect('/event')->With('success', 'Event updated successfully');
        } catch (Exception $e) {
          return redirect('/event')->With('error',  $e->getMessage());
        }

    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         try {
            $id=$this->decryptString($id);
            $event = Event::find($id);
            if(empty($event)){
                return redirect('/event')->With('error',  'Event not found');
            }
            if(!empty($event->image)){
                Storage::disk('public')->delete($event->image);
            }
            $event->delete();
            return redirect('/event')->With('success', 'Event deleted successfully');;
        } catch (Exception $e) {
          return redirect('/event')->With('error',  $e->getMessage());
        }

        
    }
    /**
     * decrypt the string.
    */
    protected function decryptString($data){
        try {
            $id = Crypt::decryptString($data);
            return $id;
        } catch (DecryptException $e) {
           return redirect('/event')->With('error',  $e->getMessage());
        }
    }    
}