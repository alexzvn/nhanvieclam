<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct() {
        $this->authorizeResource(Customer::class, 'customer');
    }

    public function index()
    {
        
    }

    public function show(Customer $customer)
    {
        
    }

    public function create()
    {
        
    }

    public function store(Request $request, Customer $customer)
    {
        
    }

    public function update(Customer $customer)
    {

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
