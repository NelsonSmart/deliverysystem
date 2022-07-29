<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Location;
use App\Http\Requests\StorePackageRequest;
use App\Http\Requests\UpdatePackageRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\PackageMail;
use App\Mail\ShippedMail;
use App\Mail\DeliveredMail;
use App\Models\Country;
class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('admin.package');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
     {
    //     $req->validate([
    //         'name'     =>  'required',
    //         'email'  =>  'required|email',
    //         'message' =>  'required'
    //     ]);

    //     $data = array(
    //         'name'      =>  $req->name,
    //         'message'   =>   $req->message,
    //         'email'     =>   $req->email

    //     );
    //     Mail::to(env('SUPPORT_EMAIL'))->send(new ContactMail($data));
    //     return redirect()->back()->with('success', 'Thanks for contacting us!');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePackageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePackageRequest $request)
    {
        $vaidate = $request->validate([
            'packageName' =>['required', 'string'],
            'customerName' =>['required', 'string'],
            'customerNumber' => ['required', 'string'],
            'customerAddress' => ['required','string'], 
            'deliveryEmail' => ['required', 'string','email'],
            'deliveryName' => ['required', 'string'],
            'deliveryNumber' => ['required', 'string'],
            'deliveryAddress' => ['required', 'string'],
            'deliveryState' => ['required', 'string'],
            'deliveryCountry' => ['required'],
            'packageNumber' => ['required', 'string'],
            'packageWeight' => ['required', 'string'],
            'status'=> ['required', 'string']
        ]);

        $country = Country::find($vaidate['deliveryCountry']);

        $package = new Package();

        foreach($vaidate as $key => $value){

            $package->{$key} = $value ;

        }

        $trackNumber = $this->trackingNumber();
        $package->deliveryCountry = $country->name;
        $package->trackNumber = $trackNumber ;

        $package->save();

        $data = [
            'name' => $vaidate['deliveryName'],
            'email' => $vaidate['deliveryEmail'],
            'cusName' => $vaidate['customerName'],
            'trackNumber' => $trackNumber,
            'companyName' => "SkyLimit Express Delivery Services",

        ];

        Mail::to($vaidate['deliveryEmail'])->send(new PackageMail($data));

        return redirect()->back()->with('succ', 'Package Created');

    }


    public function shipped(StorePackageRequest $request , Package $package){

        $shippedPack = $package::find($request->id);

        $shippedPack->status = $request->status ;

        $shippedPack->save();

        $data = [
            'name' => $shippedPack->deliveryName,
            'email' => $shippedPack->deliveryEmail,
            'cusName' => $shippedPack->customerName,
            'trackNumber' => $shippedPack->trackNumber,
            'companyName' => "SkyLimit Express Delivery Services",

        ];

        Mail::to($data['email'])->send(new ShippedMail($data));

        return redirect()->back();

    }

    public function delivered(StorePackageRequest $request , Package $package){
        $deliveredPack = $package::find($request->id);

        $deliveredPack->status = $request->status;

        $deliveredPack->save();

        $data = [
            'name' => $deliveredPack->deliveryName,
            'email' => $deliveredPack->deliveryEmail,
            'cusName' => $deliveredPack->customerName,
            'trackNumber' => $deliveredPack->trackNumber,
            'companyName' => "SkyLimit Express Delivery Services",

        ];

        Mail::to($data['email'])->send(new DeliveredMail($data));

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        return view('admin.packageUpdate',['packages'=> $package::orderBy('created_at', 'desc')->get()]);
    }
    
    public function trackingNumber(){
        $rand = uniqid('SLEDS');
        $package = Package::where('trackNumber', $rand)->first();

        do{
            $track = $rand;
        }while($package) ;

        return $track ;

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Package $package)
    {
        $record = $package::find($id);

        return view('admin.packageLocation', ['package' => $record]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePackageRequest  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePackageRequest $request, Package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy($id , Package $package)
    {
        $package::find($id)->delete();

        return redirect()->back();
    }

    public function location(StorePackageRequest $request){

        $vildate = $request->validate([
            'package_id' => ['required'],
            'currentLocation' => ['required', 'string']
        ]);

       $location =  new Location() ;
       foreach($vildate as $key => $value){
           $location->{$key} = $value ;
       }

       $location->save();

        

       return redirect()->back();

    }
}
