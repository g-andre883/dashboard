@extends('layouts.app')
@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <table>
                            <thead>
                                <tr>
                                    <th>2022/09/20(火曜日)</th>
                                    <th>ToDo</th>
                                </tr>
                            </thead>
                        </table>
                        <div class="card-header"></div>
                        <table>
                            <thead>
                                <tr>
                                    <th>分類</th>
                                    <th>件名</th>
                                    <th>状態</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $item)
                                <tr>
                                    <td>{{ $item->task_category_id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->state }}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        {{-- {{ $list->links() }} --}}
                    </div>
                </div>
            </div>
        </div>

    @endsection













