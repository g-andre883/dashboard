@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">{{ __('ユーザー登録／編集') }}</div>

                    {{-- @foreach ($list as $item) --}}
                    <form method="POST" action="/users/{{ $item->id }}">


                        {{-- @endforeach --}}
                        {{-- /{{ $item->$id }}  上のアクション追記 --}}
                        <fieldset>


                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            @csrf
                            @if (!is_null($item->id))
                                @method('PUT')
                            @endif
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <div class="row mb-3">
                                <label for="family_name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('氏') }}</label>
                                <div class="col-md-6">
                                    <input id="family_name" type="text" class="form-control" name="family_name"
                                        value="{{ old('family_name', $item->family_name) }}"required
                                        autocomplete="family_name" autofocus>

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
                                    <input id="personal_name" type="text" class="form-control" name="personal_name"
                                        value="{{ old('personal_name', $item->personal_name) }}"required
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
                                    <input id="family_name_hiragana" type="text" class="form-control"
                                        name="family_name_hiragana"
                                        value="{{ old('family_name_hiragana', $item->family_name_hiragana) }}"required
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
                                    <input id="personal_name_hiragana" type="text" class="form-control"
                                        name="personal_name_hiragana"
                                        value="{{ old('personal_name_hiragana', $item->personal_name_hiragana) }}"required
                                        autocomplete="personal_name_hiragana" autofocus>
                                    @error('personal_name_hiragana')
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
                                    <input id="login_id" type="text" class="form-control" name="login_id"
                                        value="{{ old('login_id', $item->login_id) }}"required autocomplete="login_id"
                                        autofocus>
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
                                    <input id="password" type="text" class="form-control" name="password"
                                        value="{{ old('password', $item->password) }}"required autocomplete="password"
                                        autofocus>
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
                                    <input id="password_confirm" type="text" class="form-control" name="password_confirm"
                                        value="{{ old('password_confirm', $item->password_confirm) }}"required
                                        autocomplete="password" autofocus>
                                </div>
                            </div>
                            {{-- メールアドレス --}}
                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('メールアドレス') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="email"
                                        value="{{ old('email', $item->email) }}"required autocomplete="v" autofocus>
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
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
