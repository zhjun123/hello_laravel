@extends('admin.layouts.admin')
@section('admin-content')
    <div class="tpl-content-wrapper">
        <div class="tpl-content-page-title">
            {{trans('admin.admins_add')}}
        </div>
        <ol class="am-breadcrumb">
            <li><a href="#" class="am-icon-home">{{trans('admin.nav_admins')}}</a></li>
            <li><a href="#">{{trans('admin.admins_add')}}</a></li>
        </ol>
        <div class="tpl-portlet-components">
            <div class="portlet-title">


            </div>
            <div class="tpl-block ">
                <div class="am-g tpl-amazeui-form">
                    <div class="am-u-sm-12 am-u-md-9">
                        <form class="am-form am-form-horizontal" method="POST" action="{{url('admins/admins')}}">
                            {{ csrf_field() }}
                            <div class="am-form-group">
                                <label for="user-name" class="am-u-sm-3 am-form-label">{{trans('admin.admins_name')}}</label>
                                <div class="am-u-sm-9">
                                    <input type="text" id="user-name" placeholder="{{trans('admin.admins_name')}}" name="name" value="{{old('name')}}">
                                    @if($errors->has('name'))
                                        <small style="color: #f10215;">{{$errors->first('name')}}</small>
                                    @else
                                    <small>{{trans('admin.admin_name_prompt')}}</small>
                                    @endif
                                </div>
                            </div>

                            <div class="am-form-group">
                                <label for="user-email" class="am-u-sm-3 am-form-label">{{trans('admin.admins_email')}}</label>
                                <div class="am-u-sm-9">
                                    <input type="email" id="user-email" placeholder="{{trans('admin.admins_email')}}" name="email" value="{{old('email')}}">
                                    @if($errors->has('email'))
                                        <small style="color: #f10215;">{{$errors->first('email')}}</small>
                                    @else
                                    <small>{{trans('admin.admins_email_prompt')}}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="user-password" class="am-u-sm-3 am-form-label">{{trans('admin.admins_password')}}</label>
                                <div class="am-u-sm-9">
                                    <input type="password" id="user-password" placeholder="{{trans('admin.admins_password')}}" name="password">
                                    @if($errors->has('password'))
                                        <small style="color: #f10215;">{{$errors->first('password')}}</small>
                                    @else
                                        <small>{{trans('admin.admins_password_prompt')}}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="user-password_confirmation" class="am-u-sm-3 am-form-label">{{trans('admin.admins_confirmed_pwd')}}</label>
                                <div class="am-u-sm-9">
                                    <input type="password" id="user-password_confirmation" placeholder="{{trans('admin.admins_confirmed_pwd')}}" name="password_confirmation">
                                    @if($errors->has('password_confirmation'))
                                        <small style="color: #f10215;">{{$errors->first('password_confirmation')}}</small>
                                    @else
                                        <small>{{trans('admin.admins_confirmed_pwd_prompt')}}</small>
                                    @endif
                                </div>
                            </div>

                            {{--<div class="am-form-group">--}}
                                {{--<label for="user-phone" class="am-u-sm-3 am-form-label">电话 / Telephone</label>--}}
                                {{--<div class="am-u-sm-9">--}}
                                    {{--<input type="tel" id="user-phone" placeholder="输入你的电话号码 / Telephone">--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="am-form-group">--}}
                                {{--<label for="user-QQ" class="am-u-sm-3 am-form-label">QQ</label>--}}
                                {{--<div class="am-u-sm-9">--}}
                                    {{--<input type="number" pattern="[0-9]*" id="user-QQ" placeholder="输入你的QQ号码">--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="am-form-group">
                                <div class="am-u-sm-9 am-u-sm-push-3">
                                    <button type="submit" class="am-btn am-btn-primary">保存修改</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>










    </div>
@endsection