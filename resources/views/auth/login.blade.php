@extends('layout.login')

@section('title', 'Login')

@section('content')
<div class="p-5">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">{{ __('app_name') }}</h1>
    </div>

    @if (!isset($maintenance) || !$maintenance)
        {{ Form::open(['url' => 'login', 'method' => 'post', 'class' => 'user']) }}
        <div class="form-group">
            {{ Form::email('email', null, [
                'class' => 'form-control form-control-user' . (session()->has('invalid') ? 'is-invalid' : ''),
                'autocomplete' => 'email',
                'id' => 'email',
                'placeholder' => __('email'),
                'required',
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::password('password', [
                'class' => 'form-control form-control-user' . (session()->has('invalid') ? 'is-invalid' : ''),
                'autocomplete' => 'current-password',
                'id' => 'password',
                'placeholder' => __('password'),
                'required',
            ]) }}
            <span class="invalid-feedback" role="alert">
                @if (session()->has('invalid'))
                    {{ __('login_invalid')  }}
                @endif
            </span>
        </div>
        {{ Form::button(__('login'), ['class' => 'btn btn-primary btn-user btn-block', 'name' => 'login', 'type' => 'submit']) }}
        {{ Form::close() }}
        <hr>
        <div class="text-center">
            <a class="small" href="">{{__('password_issue')}}</a>
        </div>
    @else
        <div class="text-center">
            <p>
                現在メンテナンス中です。
                <br>
                Web管までご連絡ください。
            </p>
            <p>
                <a href="">管理者ログイン</a>
            </p>
        </div>
    @endif
    {{-- <?php
if ($mypage_password_success) {
    echo '<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">';
    echo 'パスワードの設定が完了しました。';
    echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    echo '</div>';
}
?> --}}
</div>
@endsection
