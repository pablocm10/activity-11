@extends('layouts.app')

@section('content')
    <h1>Income Management</h1>
    <div class="card">
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="border-bottom: 2px solid #333; text-align: left;">
                    <th>Source</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Web Development Project</td>
                    <td>2026-04-15</td>
                    <td><span style="color: green;">● Paid</span></td>
                    <td>$5,000.00</td>
                </tr>
                <tr>
                    <td>Tutoring Session</td>
                    <td>2026-04-20</td>
                    <td><span style="color: orange;">● Pending</span></td>
                    <td>$450.00</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection