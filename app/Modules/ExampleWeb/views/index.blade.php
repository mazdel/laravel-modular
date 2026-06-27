@extends('layout')
@php
    $breadcrumb = [
        ['title' => 'Home', 'link' => '/'],
        ['title' => 'Example Web', 'link' => route('example-web.index')],
        ['title' => 'Index', 'link' => '#'],
    ];
@endphp
@section('breadcrumb')
    @json($breadcrumb)
@endsection

@section('title', 'Example Web')
@section('meta-description', 'Example Web')
@section('meta-keywords', 'Example Web, Laravel')
@section('content')
    <div class="row">
        <!-- end col -->
        <div class="col-12">
            <div class="card card-h-100">
                <div class="card-header justify-content-between">
                    <h4 class="card-title">Content Title</h4>
                </div>
                <div class="card-body">
                    <p>This is default content section template. Change it according your idea</p>
                </div>
            </div>
            <!-- end row-->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    @push('scripts')
        <script>
            // start of your javascripts
            // end of your javascripts
        </script>
    @endpush
    @push('styles')
        <style>
            /* start of your styles */
            /* end of your styles */
        </style>
    @endpush
@endsection
