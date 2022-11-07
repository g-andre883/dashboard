@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">{{ __('タスク登録／編集') }}</div>
                    <table>
                        <thead>
                            <tr>
                                <td>
                                    <form method="POST" action="{{ $url }}">
                                        <fieldset>
                                            {{-- dd({{ $item->id }}); --}}
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                            @csrf
                                            @if (!is_null($item->id))
                                                @method('PUT')
                                            @endif
                                            <input type="hidden" name="id" value="{{ $item->id }}">





                                            <div class="row mb-3">
                                                <label for="task_category_id"
                                                    class="col-md-4 col-form-label text-md-end">{{ __('分類') }}</label>
                                                <div class="col-md-6">
                                                    <input id="task_category_id" type="text" class="form-control"
                                                        name="task_category_id"
                                                        value="{{ old('task_category_id', $item->task_category_id) }}"required
                                                        autocomplete="task_category_id" autofocus>
                                                    @error('task_category_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="deadline"
                                                    class="col-md-4 col-form-label text-md-end">{{ __('納期') }}</label>
                                                <div class="col-md-6">
                                                    <input id="deadline" type="text" class="form-control"
                                                        name="deadline"
                                                        value="{{ old('deadline', $item->deadline) }}"required
                                                        autocomplete="deadline" autofocus>
                                                    @error('deadline')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="name"
                                                    class="col-md-4 col-form-label text-md-end">{{ __('名称') }}</label>
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
                                                <label for="plans_work_start_date"
                                                    class="col-md-4 col-form-label text-md-end">{{ __('作業開始予定日') }}</label>
                                                <div class="col-md-6">
                                                    <input id="plans_work_start_date" type="text" class="form-control"
                                                        name="plans_work_start_date"
                                                        value="{{ old('plans_work_start_date', $item->plans_work_start_date) }}"required
                                                        autocomplete="plans_work_start_date" autofocus>
                                                    @error('plans_work_start_date')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="plans_work_completion_date"
                                                    class="col-md-4 col-form-label text-md-end">{{ __('作業完了予定日') }}</label>
                                                <div class="col-md-6">
                                                    <input id="plans_work_completion_date" type="text"
                                                        class="form-control" name="plans_work_completion_date"
                                                        value="{{ old('plans_work_completion_date', $item->plans_work_completion_date) }}"required
                                                        autocomplete="plans_work_completion_date" autofocus>
                                                    @error('plans_work_completion_date')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>




                                            <div class="row mb-3">
                                                <label for="state"
                                                    class="col-md-4 col-form-label text-md-end">{{ __('状態') }}</label>
                                                <div class="col-md-6">
                                                    <input id="state" type="text" class="form-control" name="user_id"
                                                        value="{{ old('state', $item->state) }}"required
                                                        autocomplete="state" autofocus>
                                                    @error('state')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>



                                            <div class="row mb-3">
                                                <label for="text"
                                                    class="col-md-4 col-form-label text-md-end">{{ __('タスク内容') }}</label>
                                                <div class="col-md-6">

                                                    <textarea class="form-control" name="text"
                                                        value="{{ old('text', $item->text) }}"required
                                                        autocomplete="text" autofocus></textarea>
                                                    @error('text')
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
