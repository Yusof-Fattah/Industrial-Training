@extends('layouts.app')

@section('title', 'Weekly Report')
@section('breadcrumb', 'Weekly Report > ' . $weeklyReport->title)

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="mb-0">{{ $weeklyReport->title }}</h4>
    <a href="{{ route('weekly') }}" class="btn btn-outline-secondary">
        <i class="bi bi-arrow-left me-1"></i>Back
    </a>
</div>

<div class="row g-3">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Weekly Report Details</div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <small class="text-muted">Payment Reference</small>
                        <div class="fw-bold">{{ $payment->payment_reference }}</div>
                    </div>
                    <div class="col-md-6">
                        <small class="text-muted">Invoice</small>
                        <div>
                            <a href="{{ route('invoices.show', $payment->invoice) }}">{{ $payment->invoice->invoice_number }}</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <small class="text-muted">Amount</small>
                        <div class="h5 fw-bold text-success">RM {{ number_format($payment->amount, 2) }}</div>
                    </div>
                    <div class="col-md-4">
                        <small class="text-muted">Payment Date</small>
                        <div>{{ $payment->payment_date->format('d M Y') }}</div>
                    </div>
                    <div class="col-md-4">
                        <small class="text-muted">Type</small>
                        <div><span class="badge bg-primary">{{ $payment->payment_type }}</span></div>
                    </div>
                    <div class="col-md-4">
                        <small class="text-muted">Method</small>
                        <div>{{ $payment->payment_method }}</div>
                    </div>
                    <div class="col-md-4">
                        <small class="text-muted">Bank Reference</small>
                        <div>{{ $payment->bank_reference ?? '-' }}</div>
                    </div>
                    <div class="col-md-4">
                        <small class="text-muted">Processed By</small>
                        <div>{{ $payment->processor->name ?? '-' }}</div>
                    </div>
                    @if($payment->notes)
                    <div class="col-12">
                        <small class="text-muted">Notes</small>
                        <div>{{ $payment->notes }}</div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">Vendor</div>
            <div class="card-body">
                <h6>{{ $payment->invoice->vendor->company_name }}</h6>
                <div class="text-muted small">{{ $payment->invoice->vendor->vendor_code }}</div>
                <hr>
                <div class="d-flex justify-content-between small">
                    <span>Invoice Total</span>
                    <span>RM {{ number_format($payment->invoice->grand_total, 2) }}</span>
                </div>
                <div class="d-flex justify-content-between small text-success">
                    <span>Total Paid</span>
                    <span>RM {{ number_format($payment->invoice->amount_paid, 2) }}</span>
                </div>
                <div class="d-flex justify-content-between small text-danger">
                    <span>Balance Due</span>
                    <span>RM {{ number_format($payment->invoice->balance_due, 2) }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
