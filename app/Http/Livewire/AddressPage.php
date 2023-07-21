<?php

namespace App\Http\Livewire;

use App\Models\Address;
use App\Models\Country;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class AddressPage extends Component
{

    public $data, $firstName, $lastName, $phone, $countries, $addressFirst, $addressSecond, $company, $nameAlias, $postcode, $vatNumber, $country, $selectedID, $city, $isDefaultBillingAddress, $isDefaultDeliveryAddress;
    public $updateMode = false;
    public $createMode = false;

    protected $rules = [
        'firstName'                     => 'required',
        'lastName'                      => 'required',
        'phone'                         => 'required',
        'city'                          => 'required',
        'country'                       => 'required|integer',
        'addressFirst'                  => 'required',
        'addressSecond'                 => 'required',
        'nameAlias'                     => 'required',
        'postcode'                      => 'required|integer',
        'vatNumber'                     => 'nullable|integer',
        'isDefaultDeliveryAddress'      => 'nullable|boolean',
        'isDefaultBillingAddress'       => 'nullable|boolean',
    ];

    protected $messages = [
        'addressFirst.required' => 'The Address 1 field is required.',
        'addressSecond.required' => 'The Address 2 field is required.',
        'nameAlias.required' => 'The Address Alias field is required.',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }



    public function render()
    {
        $this->data = auth()->user()->address;
        return view('livewire.address.index');
    }

    public function create()
    {

        $this->countries = Country::all();
        $this->createMode = true;
    }

    public function store()
    {

        $this->validate();
        $this->checkDefaultAddress();

        Address::create([
            'firstname' => $this->firstName,
            'lastname' => $this->lastName,
            'phone' => $this->phone,
            'city' => $this->city,
            'user_id' => auth()->user()->id,
            'address1' => $this->addressFirst,
            'address2' => $this->addressSecond,
            'company' => $this->company,
            'alias' => $this->nameAlias,
            'postcode' => $this->postcode,
            'vat_number' => $this->vatNumber || 0,
            'is_default_billing_address' => $this->isDefaultBillingAddress ? true : false,
            'is_default_delivery_address' => $this->isDefaultDeliveryAddress ? true : false,
            'country_id' => $this->country
        ]);
        $this->resetForm();
        $this->createMode = false;

        Session::flash('status', 'success');
        Session::flash('message', 'Successfully added an address.');
        return redirect()->route('addresses');

    }

    public function edit($id)
    {

        $this->selectedID = $id;

        $address = Address::findOrFail($id);
        $this->countries = Country::all();
        $this->firstName = $address->firstname;
        $this->lastName = $address->lastname;
        $this->phone = $address->phone;
        $this->country = $address->country->id;
        $this->addressFirst = $address->address1;
        $this->addressSecond = $address->address2;
        $this->company = $address->company;
        $this->nameAlias = $address->alias;
        $this->city = $address->city;
        $this->postcode = $address->postcode;
        $this->vatNumber = $address->vat_number;
        $this->isDefaultBillingAddress = $address->is_default_billing_address;
        $this->isDefaultDeliveryAddress = $address->is_default_delivery_address;
        $this->updateMode = true;

    }


    public function update()
    {

        if ($this->selectedID) {
            $this->validate();
            $this->checkDefaultAddress();

            $address = Address::find($this->selectedID);
            $address->update([
                'firstname' => $this->firstName,
                'lastname' => $this->lastName,
                'phone' => $this->phone,
                'city' => $this->city,
                'address1' => $this->addressFirst,
                'address2' => $this->addressSecond,
                'company' => $this->company,
                'alias' => $this->nameAlias,
                'postcode' => $this->postcode,
                'vat_number' => $this->vatNumber || 0,
                'is_default_billing_address' => $this->isDefaultBillingAddress ? true : false,
                'is_default_delivery_address' => $this->isDefaultDeliveryAddress ? true : false,
                'country_id' => $this->country
            ]);

            $this->resetForm();
            $this->updateMode = false;
            Session::flash('status', 'success');
            Session::flash('message', 'Successfully updated an address.');
            return redirect()->route('addresses');

        }

    }


    public function destroy($id)
    {
        if ($id) {
            $address = Address::where('id', $id)->first();
            if($address->is_default_billing_address || $address->is_default_delivery_address){
                Session::flash('message', 'Oops! You cannot delete this address. Please set another default address to proceed deleting this.');
                Session::flash('status', 'error');
            }else{
                $address->delete();
                Session::flash('status', 'success');
                Session::flash('message', 'Successfully deleted an address.');
            }
        }
    }

    private function resetForm()
    {
        $this->firstName = '';
        $this->lastName = '';
        $this->phone = '';
        $this->country = '';
        $this->city = '';
        $this->addressFirst = '';
        $this->addressSecond = '';
        $this->company = '';
        $this->nameAlias ='';
        $this->postcode = '';
        $this->vatNumber = '';

    }

    private function checkDefaultAddress()
    {
        if(auth()->user()->address){
            if($this->isDefaultBillingAddress)

            auth()->user()->address->map(function($add) {
                $add->where('is_default_billing_address', 1)->update(array('is_default_billing_address' => 0));
            });


            if($this->isDefaultDeliveryAddress)
            auth()->user()->address->map(function($add) {
                $add->where('is_default_delivery_address', 1)->update(array('is_default_delivery_address' => 0));
            });
        }

    }

}
