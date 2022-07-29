<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\ContactMessageMail;
use App\Models\Setting ;
use App\Models\User;
use App\Models\Country;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function trace(Request $req , Package $package)
    {
        $validate =  $req->validate([
            'trackNumber' => ['required' , 'max:18']
        ]);

        try{


            foreach($validate as $key => $value){
                $location = $package::where($key, $value)->first();  
                
               
            }

           return view('pages.package', ['package' => $location]);

        }catch(\exception $e){

            return view('pages.K', ['error' => 'Arrgghhhh!!! We could not find this tracking number. Check again, you might have missed a digit or could you please contact customer support? ', 'traknum'=> $req->trackNumber]);

        }

        

        

        
    }

    public function contact(Request $request){

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'number' => $request->number,
            'company' => $request->company,
            'companyName' => "SkyLimit Express Delivery Services",

        ];

        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMail($data));
        Mail::to($data['email'])->send(new ContactMessageMail($data));

        return redirect('/');
    }


    public function setting(Request $request){

        $validate = $request->validate([
            'email' => ['email', 'required'],
            'phoneNumber' => ['required', 'string'],
            'widget' => ['required', 'string']
        ]);

        $setting = Setting::find(1);

        foreach($validate as $key => $value){

            $setting->{$key} = $value;

        }

        $setting->save();

        return redirect()->back();

    }

    public function newUser(Request $request){

        $validate = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);

        $user = new User() ;

        $user->name = $validate['name'] ;
        $user->email = $validate['email'];
        $user->password = Hash::make($validate['password']);

        $user->save();

        return redirect()->back(); 
        

    }

    public function getStates(Country $country)
    {
        return Response()->json($country->states()->select('id', 'name')->get()) ;
    }

    public function destroy($id, User $user)
    {
        $user::find($id)->delete();

        return redirect()->back();
    }

    public function change(Request $request){
        $user = User::find($request->user()->id);
        $validate = $request->validate([
            'passwrd' => ['required', 'string', 'min:8'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);

        if(Hash::check($validate['passwrd'], $user->password) ){

            $user->password = Hash::make($validate['password']);

            $user->save();
        }
        

        return redirect()->back(); 

    }

    public function updatePic(Request $request){

         $user = User::find($request->user()->id);

        //dd($user);

         $validate = $request->validate([

            'picture' => ['image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);

        if ($validate['picture'] !== null) {
            $file =  $request->file('picture');

            $extension = $file->extension();

            $imageName = $user->name . '_' . $user->email . '_' . $user->id . '.' . $extension;

            $uploadFolder = 'images/profilesPic';

            $image_uploaded_path = $file->storeAs($uploadFolder, $imageName, 'public');

            $user->picture = $imageName;
            $user->save();
        }

        return redirect()->back();

        }


        
}
