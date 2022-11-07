@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <table>
                        <thead>
                            <tr>
                                <th>
                                    <h1><span style="border-bottom: solid 5px orange;">ユーザー一覧</span></h1>
                                </th>
                                <th><a href="/users/create">新規登録</a></th>
                            </tr>
                        </thead>
                    </table>
                    <div class="card-header"></div>
                    <table>
                        <thead>
                            <tr>
                                <th>操作</th>
                                <th>名前</th>
                                <th>ひらがな</th>
                                {{-- <th>...</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $item)
                                <tr>
                                    <td><a href="./users/{{ $item->id }}/edit" class="btn btn-info">編集</a></td>
                                    <td>{{ $item->family_name }} {{ $item->personal_name }} 
                                        {{-- ({{ $item->tasks->count() }}) --}}
                                    </td>
                                    <td>{{ $item->family_name_hiragana }} {{ $item->personal_name_hiragana }}</td>
                                    {{-- <td>
                                        {{-- @foreach ($item->tasks as $task)
                                            {{ $task->name }}<br>

                                            @endforeach 

                                        {{ $item->name_text }}

                                    </td> --}}
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <br>
                    {{ $list->links() }}
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection
