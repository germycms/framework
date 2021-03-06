@extends('manage.public.wrap')

@section('main')
    <div class="wrapper wrapper-content animated fadeInUp">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>所有角色</h5>
                        <div class="ibox-tools">
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row m-b-sm m-t-sm">
                            <div class="col-md-1">
                                <button type="button" id="loading-example-btn" class="btn btn-white btn-sm"><i
                                            class="fa fa-refresh"></i> 刷新
                                </button>
                            </div>
                            <div class="col-md-11">
                                <div class="input-group">
                                    <input type="text" placeholder="请输入角色名称" class="input-sm form-control"> <span
                                            class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary">搜索</button> </span>
                                </div>
                            </div>
                        </div>
                        <div class="project-list">
                            <table class="table table-hover">
                                <tbody>
                                @foreach($roles as $role)
                                    <tr>
                                        <td class="project-status">
                                            <span class="label label-primary">{{ $role->display_name }}</span>
                                        </td>
                                        <td class="project-title">
                                            <a href="{{ url('/manage/role/'.$role->id) }}">{{ $role->name }}</a>
                                        </td>
                                        <td class="project-completion">
                                            <small>{{ $role->description }}</small>
                                        </td>
                                        <td class="project-people">
                                            @foreach($role->users->take(5) as $user)
                                                <a href="{{ url('/manage/user/'.$user->id) }}"><img alt="{{ $user->name }}" class="img-circle" src="{{ $user->image }}"></a>
                                            @endforeach
                                        </td>
                                        <td class="project-actions">
                                            <a href="{{ url('/manage/role/'.$role->id) }}" class="btn btn-white btn-sm"><i
                                                        class="fa fa-angle-double-right"></i>详情</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection