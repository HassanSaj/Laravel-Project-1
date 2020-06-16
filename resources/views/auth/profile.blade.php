@extends('layouts.app')

@section('content')
    <div class="container">
        <br><br><br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="border: none;border-radius: 25px;">
                    <div class="card-header" style="background: #3681f7; color: white;">{{ trans('sentence.profile') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert"> <i class="fa fa-thumbs-up fa-2x"></i>
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="/profile/update" enctype="multipart/form-data">
                            <div class="row justify-content-center">

                                <div class="profile-header-container">
                                    <div class="profile-header-img">
                                        <img style="height: 200px; width: 200px;" class="rounded-circle" src="{{ url('avatars/'.$user->avatar) }}" />
                                        <!-- badge -->
                                    </div>
                                </div>

                            </div>
                            <div class="form-group hidden">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
{{--                                <input type="hidden" name="_method" value="PATCH">--}}
                            </div>
                            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="email" class="control-label"><b>Name:</b></label>
                                <input type="text" name="name" placeholder="Please enter your email here" class="form-control" value="{{ $user->name }}"/>

                                <?php if ($errors->has('name')) :?>
                                <span class="help-block">
            <strong>{{$errors->first('name')}}</strong>
        </span>
                                <?php endif;?>

                            </div>
                            <div class="form-group">
                                <label for="email" class="control-label"><b>Avatar:</b></label>
                                <div class="form-group">
                                    <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="control-label"><b>Email:</b></label>
                                <input type="text" readonly name="email" placeholder="Please enter your email here" class="form-control" value="{{ $user->email }}"/>

                                <?php if ($errors->has('email')) :?>
                                <span class="help-block">
            <strong>{{$errors->first('email')}}</strong>
        </span>
                                <?php endif;?>

                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default"> Submit </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
