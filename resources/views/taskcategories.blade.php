@extends('layouts.app')
@section('content')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                </div>
            </div>
        </div> --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <table>
                        <thead>
                            <tr>
                                <th>
                                    <h1><span style="border-bottom: solid 5px orange;">タスク分類一覧</span></h1>
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
                                <th>分類</th>
                                <th>並び順</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $item)
                                <tr>
                                    <td><a href="./taskcategories/{{ $item->id }}/edit" class="btn btn-info">編集</a></td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->soft_order }}</td>
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
