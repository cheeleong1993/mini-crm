<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\Customer;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function index()
    {
        $leads = Lead::with('customer')->get();
        return view('leads.index', compact('leads'));
    }

    public function create()
    {
        $customers = Customer::all();
        return view('leads.create', compact('customers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'lead_name' => 'required|string|max:255',
            'customer_id' => 'required|exists:customers,id',
        ]);

        Lead::create($request->all());

        return redirect()->route('leads.index')->with('success', 'Lead created successfully.');
    }

    public function edit(Lead $lead)
    {
        $customers = Customer::all();
        return view('leads.edit', compact('lead', 'customers'));
    }

    public function update(Request $request, Lead $lead)
    {
        $request->validate([
            'lead_name' => 'required|string|max:255',
            'customer_id' => 'required|exists:customers,id',
        ]);

        $lead->update($request->all());

        return redirect()->route('leads.index')->with('success', 'Lead updated successfully.');
    }

    public function destroy(Lead $lead)
    {
        $lead->delete();

        return redirect()->route('leads.index')->with('success', 'Lead deleted successfully.');
    }
}
