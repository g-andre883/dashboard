@extends('layouts.app')
@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"></div>
                        <table>
                            <thead>
                                <tr>
                                    <th>【分類】</th>
                                    <th>【内容】</th>
                                    <th>【作業予定日】</th>
                                    <th>【納期】</th>
                                    <th>【作業実施日】</th>
                                    <th>【実作業時間】</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($list as $item)
                                    <tr>
                                        <td><a href="./users/{{ $item->id }}/edit">編集</a></td>
                                        <td>{{ $item->family_name }} {{ $item->personal_name }}</td>
                                        <td>{{ $item->family_name_hiragana }} {{ $item->personal_name_hiragana }}</td>
                                    </tr>
                                @endforeach --}}

                            </tbody>
                        </table>
                        {{ $list->links() }}
                    </div>
                </div>
            </div>
        </div>
@endsection













