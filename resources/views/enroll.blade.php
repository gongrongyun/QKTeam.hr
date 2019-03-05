@extends('Layouts.app')

@section('content')
    @if(session('message'))
        <div class="alert alert-success text-center">
            {{ 'Successful Registration! Congratulations!!!' }}
        </div>
    @endif


    @if(count($errors) > 0)
        <div class="alert alert-danger text-center">
            {{ 'Please fill in as required!!!' }}
        </div>
    @endif
    <div class="container">
        <div class="card">
            <div class="card-header text-center text-info">
                <h3>{{ __('招新报名表') }}</h3>
            </div>
            <div class="card-body">
                <form action="/api/enroll" method="post">
                    @csrf

                    <div class="form-group row">
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="name" placeholder="* 姓名" value="{{ old('name') }}" required>
                            @if($errors->has('name'))
                                <span class="invalid-feedback" style="display: inline-block;">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="col-md-4">
                            <input type="text" class="form-control" name="birthday" placeholder="* 生日 (格式: 1996-01-01)" value="{{ old('birthday') }}" required>
                            @if($errors->has('birthday'))
                                <span class="invalid-feedback" style="display: inline-block;">
                                <strong>{{ $errors->first('birthday') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="col-md-4">
                            <input type="text" class="form-control" name="studentId" placeholder="* 学号" value="{{ old('studentId') }}" required>
                            @if($errors->has('studentId'))
                                <span class="invalid-feedback" style="display: inline-block;">
                                <strong>{{ $errors->first('studentId') }}</strong>
                            </span>
                            @endif
                        </div>

                    </div>

                    <div class="form-group row">
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="college" placeholder="* 学院" value="{{ old('college') }}" required>
                            @if($errors->has('college'))
                                <span class="invalid-feedback" style="display: inline-block;">
                                <strong>{{ $errors->first('college') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="col-md-4">
                            <input type="text" class="form-control" name="profession" placeholder="* 专业" value="{{ old('profession') }}" required>
                            @if($errors->has('profession'))
                                <span class="invalid-feedback" style="display: inline-block;">
                                <strong>{{ $errors->first('profession') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="col-md-4">
                            <input type="text" class="form-control" name="phoneNumber" placeholder="* 电话" value="{{ old('phoneNumber') }}" required>
                            @if($errors->has('phoneNumber'))
                                <span class="invalid-feedback" style="display: inline-block;">
                                <strong>{{ $errors->first('phoneNumber') }}</strong>
                            </span>
                            @endif
                        </div>

                    </div>

                    <div class="form-group row">
                        <div class="col-md-4">
                            <input type="email" class="form-control" name="email" placeholder="* 邮箱" value="{{ old('email') }}" required>
                            @if($errors->has('email'))
                                <span class="invalid-feedback" style="display: inline-block;">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="col-md-4">
                            <input type="text" class="form-control" name="qq" placeholder="* 扣扣" value="{{ old('qq') }}" required>
                            @if($errors->has('qq'))
                                <span class="invalid-feedback" style="display: inline-block;">
                                <strong>{{ $errors->first('qq') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="col-md-1 offset-md-1 custom-control custom-radio custom-control-inline">
                            <input id="male" type="radio" class="custom-control-input" name="gender" @if(!old('gender')) checked @endif value="男"/>
                            <label for="male" class="custom-control-label">{{ __('男') }}</label>
                        </div>
                        <div class="col-md-1 custom-control custom-radio custom-control-inline">
                            <input id="female" type="radio" class="custom-control-input" name="gender" @if(old('gender')) checked @endif value="女"/>
                            <label for="female" class="custom-control-label">{{ __('女') }}</label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <textarea class="form-control" rows="5" name="selfIntroduction" placeholder="自我简介" >{{ old('selfIntroduction') }}</textarea>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <input type="text" name="blog" class="form-control" placeholder="个人主页或博客地址" value="{{ old('blog') }}">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="github" class="form-control" placeholder="Github仓库" value="{{ old('github') }}">
                        </div>
                    </div>

                    <div class="form-group row form-check-inline">
                        <p style="padding-right: 10px">{{ __('快速点技能') }}</p>
                        <p>
                            <input id="C" type="checkbox"  class="form-check-input" name="skills[]" value="C" @if(is_array(old('skills')) && in_array('C', old('skills'))) checked @endif />
                            <label for="C" style="padding-right: 20px" class="form-check-label">{{ __('C') }}</label>

                            <input id="C++" type="checkbox" class="form-check-input" name="skills[]" value="C++" @if(is_array(old('skills')) && in_array('C++', old('skills'))) checked @endif/>
                            <label for="C++" style="padding-right: 20px" class="form-check-label">{{ __('C++') }}</label>

                            <input id="Python" type="checkbox"  class="form-check-input" name="skills[]" value="Python" @if(is_array(old('skills')) && in_array('Python', old('skills'))) checked @endif/>
                            <label for="Python" style="padding-right: 20px" class="form-check-label">{{ __('Python') }}</label>

                            <input id="HTML" type="checkbox" class="form-check-input" name="skills[]" value="HTML" @if(is_array(old('skills')) && in_array('HTML', old('skills'))) checked @endif/>
                            <label for="HTML" style="padding-right: 20px" class="form-check-label">{{ __('HTML') }}</label>

                            <input id="CSS" type="checkbox"  class="form-check-input" name="skills[]" value="CSS" @if(is_array(old('skills')) && in_array('CSS', old('skills'))) checked @endif/>
                            <label for="CSS" style="padding-right: 20px" class="form-check-label">{{ __('CSS') }}</label>

                            <input id="Javascript" type="checkbox" class="form-check-input" name="skills[]" value="Javascript" @if(is_array(old('skills')) && in_array('Javascript', old('skills'))) checked @endif/>
                            <label for="Javascript" style="padding-right: 20px" class="form-check-label">{{ __('Javascript') }}</label>

                            <input id="PHP" type="checkbox"  class="form-check-input" name="skills[]" value="PHP" @if(is_array(old('skills')) && in_array('PHP', old('skills'))) checked @endif/>
                            <label for="PHP" style="padding-right: 20px" class="form-check-label">{{ __('PHP') }}</label>

                            <input id="iOS" type="checkbox" class="form-check-input" name="skills[]" value="iOS" @if(is_array(old('skills')) && in_array('iOS', old('skills'))) checked @endif/>
                            <label for="iOS" style="padding-right: 20px" class="form-check-label">{{ __('iOS') }}</label>

                            <input id="Objective-C" type="checkbox"  class="form-check-input" name="skills[]" value="Objective-C" @if(is_array(old('skills')) && in_array('Objective-C', old('skills'))) checked @endif/>
                            <label for="Objective-C" style="padding-right: 20px" class="form-check-label">{{ __('Objective-C') }}</label>

                            <input id="swift" type="checkbox" class="form-check-input" name="skills[]" value="swift" @if(is_array(old('skills')) && in_array('swift', old('skills'))) checked @endif/>
                            <label for="swift" style="padding-right: 20px" class="form-check-label">{{ __('swift') }}</label>

                            <input id="Android" type="checkbox"  class="form-check-input" name="skills[]" value="Android" @if(is_array(old('skills')) && in_array('Android', old('skills'))) checked @endif/>
                            <label for="Android" style="padding-right: 20px" class="form-check-label">{{ __('Android') }}</label>

                            <input id="Java" type="checkbox" class="form-check-input" name="skills[]" value="Java" @if(is_array(old('skills')) && in_array('Java', old('skills'))) checked @endif/>
                            <label for="Java" style="padding-right: 20px" class="form-check-label">{{ __('Java') }}</label>

                            <input id="PS" type="checkbox"  class="form-check-input" name="skills[]" value="PS" @if(is_array(old('skills')) && in_array('PS', old('skills'))) checked @endif/>
                            <label for="PS" style="padding-right: 20px" class="form-check-label">{{ __('PS') }}</label>

                            <input id="AI" type="checkbox" class="form-check-input" name="skills[]" value="AI" @if(is_array(old('skills')) && in_array('AI', old('skills'))) checked @endif/>
                            <label for="AI" style="padding-right: 20px" class="form-check-label">{{ __('AI') }}</label>

                            <input id="AU" type="checkbox" class="form-check-input" name="skills[]" value="AU" @if(is_array(old('skills')) && in_array('AU', old('skills'))) checked @endif/>
                            <label for="AU" style="padding-right: 20px" class="form-check-label">{{ __('AU') }}</label>

                            <input id="AE" type="checkbox" class="form-check-input" name="skills[]" value="AE" @if(is_array(old('skills')) && in_array('AE', old('skills'))) checked @endif/>
                            <label for="AE" style="padding-right: 20px" class="form-check-label">{{ __('AE') }}</label>

                            <input id="PR" type="checkbox" class="form-check-input" name="skills[]" value="PR" @if(is_array(old('skills')) && in_array('PR', old('skills'))) checked @endif />
                            <label for="PR" style="padding-right: 20px" class="form-check-label">{{ __('PR') }}</label>
                        </p>
                    </div>

                    <div class="form-group row">
                        <textarea class="form-control" rows="5" name="elseSkills" placeholder="其他技能">{{ old('elseSkills') }}</textarea>
                    </div>

                    <div class="form-group row">
                        <textarea name="expectation" rows="5" class="form-control" placeholder="个人期望">{{ old('expectation') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">{{ __('提交') }}</button>
                </form>
            </div>
        </div>
    </div>

@endsection