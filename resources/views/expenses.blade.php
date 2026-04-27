@extends('layouts.app')

@section('content')
    <h1>Expense Tracking</h1>
    
    <div style="background: #fff3cd; color: #856404; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
        <strong>Notice:</strong> Your spending in "Entertainment" is 10% higher than last month.
    </div>

    <div class="grid">
        <div class="card red">
            <h4>Fixed Expenses</h4>
            <ul>
                <li>Internet Service - $600</li>
                <li>Electricity - $1,200</li>
                <li>Software Licenses - $350</li>
                <li>Entertainment - $250</li>
            </ul>
        </div>
        <div class="card red">
            <h4>Variable Expenses</h4>
            <ul>
                <li>Groceries - $2,500</li>
                <li>Transport - $800</li>
                <li>Clothing - $300</li>
            </ul>
        </div>
    </div>
@endsection