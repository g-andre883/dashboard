@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">{{ __('タスク分類登録／編集') }}</div>
                    <table>
                        <thead>
                            <tr>
                                <td>
                                    <form method="POST" action="/taskcategories/{{ $item->id }}">
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
                                                <label for="name"
                                                    class="col-md-4 col-form-label text-md-end">{{ __('分類名') }}</label>
                                                <div class="col-md-6">
                                                    <input id="name" type="text" class="form-control" name="name"
                                                        value="{{ old('name', $item->name) }}"required autocomplete="name"
                                                        autofocus>
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="soft_order"
                                                    class="col-md-4 col-form-label text-md-end">{{ __('並び順') }}</label>
                                                <div class="col-md-6">
                                                    <input id="soft_order" type="text" class="form-control"
                                                        name="soft_order"
                                                        value="{{ old('soft_order', $item->soft_order) }}"required
                                                        autocomplete="soft_order" autofocus>
                                                    @error('soft_order')
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
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
