@extends('layouts.master')

@section('title', '新增文章')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">新增文章</div>
                    <div class="card-body>">
                        <div class="container-fluid">
                            <form action="{{route('posts.store')}}" method="POST" class="mt-2">
                                @csrf
                                <div class="form-group row">
                                    <label for="title" class="col-md-2 col-form-label-md text-md-right">標題</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control form-control-md" name="title" id="title">
                                    @if($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$errors->first('title')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label for="type" class="col-md-2 col-form-label-md text-md-right">分類</label>
                                <div class="col-md-8">
                                    <select name="type" id="type" class="form-control form-control-md">
                                        <option value="0">請選擇...</option>
                                        @foreach($post_types as $post_type)
                                            <option value="{{$post_type->id}}">
                                                {{$post_type->name}}
                                            </option>
                                            @endforeach
                                    </select>
                            </div>
                            </div>
                                <div class="form-group row">
                                    <label for="content" class="col-md-2 col-form-label-md text-md-right">內文</label>
                                <div class="col-md-8">
                                    <textarea name="content" id="content" rows="15" class="form-control form-control-md" style="resize: vertical;"></textarea>
                                </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-10 offset-md-2">
                                        <button class="btn btn-md btn-primary">儲存</button>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
