<?php

namespace App\Http\Controllers\Manager;

use App\Enums\CustomerRole;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Enum;

class CustomerController extends Controller
{
    public function __construct() {
        $this->authorizeResource(Customer::class, 'customer');
    }

    public function index()
    {
        $customers = Customer::latest()->paginate(25);

        return view('dashboard.customer.index', [
            'customers' => $customers
        ]);
    }

    public function show(Customer $customer)
    {
        return view('dashboard.customer.show', compact('customer'));
    }

    public function create()
    {
        return view('dashboard.customer.create');
    }

    public function store(Request $request)
    {
        $customer = new Customer($this->validate($request, [
            'name' => 'required|string',
            'phone' => 'required|string|numeric|unique:customers,phone',
            'address' => 'required|string',
            'identity_id' => 'nullable|string',
            'role' => new Enum(CustomerRole::class),
            'password' => 'required|confirmed'
        ]));

        $customer->forceFill([
            'password' => Hash::make($request->password),
            'role' => $request->role
        ])->save();

        return to_route('manager.customer.show', [
            'customer' => $customer
        ]);
    }

    public function update(Customer $customer, $request)
    {
        $attrs = $this->validate($request, [
            'name' => 'required',
            'address' => 'required|string',
            'identity_id' => 'nullable|string',
            'role' => new Enum(CustomerRole::class),
            'password' => 'nullable|confirmed',
        ]);

        if ($request->password) {
            $attrs['password'] = Hash::make($request->password);
        }

        $customer->forceFill($attrs)->save();

        return to_route('manager.customer.show', $customer);
    }

    public function ban(Customer $customer)
    {
        
    }

    public function pardon(Customer $customer)
    {
        
    }

    public function destroy(Customer $customer)
    {
        
    }
}
