@extends('Layouts.app')

@section('content')
    <div class="container" id="container">
        @if(isset($member))
            <div class="cardBox">
                <div class="headerBox" style="text-align: center;font-size: 30px">
                    <p><strong>个人报名信息</strong></p>
                    </br>
                </div>
                <div class="bodyBox" style="padding: 30px">
                    <p><strong>姓名：</strong>{{$member->name}}</p></br>
                    <p><strong>生日：</strong>{{$member->birthday}}</p></br>
                    <p><strong>学号：</strong>{{$member->studentId}}</p></br>
                    <p><strong>学院：</strong>{{$member->college}}</p></br>
                    <p><strong>专业：</strong>{{$member->profession}}</p></br>
                    <p><strong>手机号：</strong>{{$member->phoneNumber}}</p></br>
                    <p><strong>邮箱：</strong>{{$member->email}}</p></br>
                    <p><strong>扣扣：</strong>{{$member->qq}}</p></br>
                    <p><strong>性别：</strong>{{$member->gender}}</p></br>
                    <?php if($member->selfIntroduction!=null):?>
                    <h><strong>自我介绍：</strong></h>
                    </br>
                    <div class="textarea"><?php echo e($member->selfIntroduction); ?></div>
                    </br>
                    <?php endif;?>
                    <?php if($member->blog!=null):?>
                    <p><strong>个人博客：</strong><?php echo e($member->blog); ?></p>
                    </br>
                    <?php endif;?>
                    <?php if($member->github账号!=null):?>
                    <p><strong>github：</strong><?php echo e($member->github); ?></p>
                    </br>
                    <?php endif;?>
                    </br>
                    <?php if($member->skills!='null'):?>
                    <p><strong>技能：</strong><?php echo e(substr($member->skills,1,strlen($member->skills)-2)); ?></p>
                    </br>
                    <?php endif;?>
                    <?php if($member->elseSkills!=null):?>
                    <h><strong>其他技能：</strong></h>
                    </br>
                    <div class="textarea"><?php echo e($member->elseSkills); ?></div>
                    </br>
                    <?php endif;?>
                    <?php if($member->expectation!=null):?>
                    <h><strong>自我预期：</strong></h>
                    </br>
                    <div class="textarea"><?php echo e($member->expectation); ?></textarea>
                    <?php endif;?>
                </div>
            </div>

        @endif
    </div>
    <div class="container" style="margin-bottom:1%;position: relative;">
        <button button type="button" class="btn btn-primary" onclick="printpage()" >打印</button>
    </div>
    <script type="text/javascript">
        function printpage()
        {
            bdhtml=window.document.body.innerHTML;
            document.body.innerHTML=document.getElementById('container').innerHTML;
            window.print();
            window.document.body.innerHTML=bdhtml;
        }
    </script>
    <style>

    </style>
@endsection