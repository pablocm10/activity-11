@extends('layouts.app')

@section('content')
    <h1>General Dashboard</h1>
    <div class="grid">
        <div class="card">
            <h3>Total Balance</h3>
            <p style="font-size: 24px; color: #007bff;">$15,400.00</p>
        </div>
        <div class="card green">
            <h3>Savings Goal</h3>
            <p>85% Completed</p>
            <div class="progress-bar">
                <div class="progress-fill" style="width: 85%;">85%</div>
            </div>
        </div>
    </div>
    <h3>Quick Actions</h3>
    <button onclick="alert('Exporting Report...')">Generate PDF Report</button>
@endsection