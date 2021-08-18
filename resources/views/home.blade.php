@extends('layout.main')

@section('title', 'Home')

@section('content')

<div class="d-none d-md-block">
    <div class="container-fluid">
        <div class="row">
            @if (session()->has('message'))
                <div class="col-sm-12">
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        {{ session('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                </div>
            @endif
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary mb-1">
                                    {{ __('individual_accounting_total') }}</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    {{ format_price($data->individual_accounting_total) }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-wallet fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger mb-1">{{ __('delinquent') }}</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    {{ format_price($data->delinquent) }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-yen-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">{{ __('message.looking_for_developers.title') }}</h6>
                    </div>
                    <div class="card-body">
                        <p>
                            {{ __('message.looking_for_developers.content') }}
                        </p>
                        <div class="mb-2">
                            <a href="https://github.com/nozomu-y/kleines-mypage-webapp" target="_blank">
                                <img class="img-fluid"
                                    src="https://gh-card.dev/repos/nozomu-y/kleines-mypage-webapp.svg?fullname=">
                            </a>
                        </div>
                        <div>
                            <a href="https://github.com/nozomu-y/kleines-mypage-api" target="_blank">
                                <img class="img-fluid"
                                    src="https://gh-card.dev/repos/nozomu-y/kleines-mypage-api.svg?fullname=">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
