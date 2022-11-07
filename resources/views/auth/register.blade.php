@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf


                            {{-- 氏 --}}
                            <div class="row mb-3">
                                <label for="family_name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('氏') }}</label>

                                <div class="col-md-6">
                                    <input id="family_name" type="text"
                                        class="form-control @error('family_name') is-invalid @enderror" name="family_name"
                                        value="{{ old('family_name') }}" required autocomplete="family_name" autofocus>

                                    @error('family_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- 名 --}}
                            <div class="row mb-3">
                                <label for="personal_name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('名') }}</label>

                                <div class="col-md-6">
                                    <input id="personal_name" type="text"
                                        class="form-control @error('personal_name') is-invalid @enderror"
                                        name="personal_name" value="{{ old('personal_name') }}" required
                                        autocomplete="personal_name" autofocus>

                                    @error('personal_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- 氏(ひらがな) --}}
                            <div class="row mb-3">
                                <label for="family_name_hiragana"
                                    class="col-md-4 col-form-label text-md-end">{{ __('氏(ひらがな)') }}</label>

                                <div class="col-md-6">
                                    <input id="family_name_hiragana" type="text"
                                        class="form-control @error('family_name_hiragana') is-invalid @enderror"
                                        name="family_name_hiragana" value="{{ old('family_name_hiragana') }}" required
                                        autocomplete="family_name_hiragana" autofocus>

                                    @error('family_name_hiragana')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            {{-- 名(ひらがな) --}}
                            <div class="row mb-3">
                                <label for="personal_name_hiragana"
                                    class="col-md-4 col-form-label text-md-end">{{ __('名(ひらがな)') }}</label>

                                <div class="col-md-6">
                                    <input id="personal_name_hiragana" type="text"
                                        class="form-control @error('personal_name_hiragana') is-invalid @enderror"
                                        name="personal_name_hiragana" value="{{ old('personal_name_hiragana') }}" required
                                        autocomplete="personal_name_hiragana" autofocus>

                                    @error('npersonal_name_hiraganaame')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- ろぐいんid --}}
                            <div class="row mb-3">
                                <label for="login_id"
                                    class="col-md-4 col-form-label text-md-end">{{ __('ログインID') }}</label>

                                <div class="col-md-6">
                                    <input id="login_id" type="text"
                                        class="form-control @error('login_id') is-invalid @enderror" name="login_id"
                                        value="{{ old('login_id') }}" required autocomplete="login_id" autofocus>

                                    @error('login_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- パスワード --}}
                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('パスワード') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                           <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('パスワードを認証') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            {{-- メールアドレス --}}
                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('メールアドレス') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="text"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('登録') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
