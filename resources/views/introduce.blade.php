@extends('Layouts.app')

@section('content')
    <div class="container" id="container">
        @if(isset($member))
            <div class="cardBox">
                <div class="headerBox">
                    <p>个人报名信息</p>
                </div>
                <div class="bodyBox">
                    <p><strong>姓名：</strong>{{$member->name}}</p>
                    <p><strong>生日：</strong>{{$member->birthday}}</p>
                    <p><strong>学号：</strong>{{$member->studentId}}</p>
                    <p><strong>学院：</strong>{{$member->college}}</p>
                    <p><strong>专业：</strong>{{$member->profession}}</p>
                    <p><strong>手机号：</strong>{{$member->phoneNumber}}</p>
                    <p><strong>邮箱：</strong>{{$member->email}}</p>
                    <p><strong>扣扣：</strong>{{$member->qq}}</p>
                    <p><strong>性别：</strong>{{$member->gender}}</p>
                    <?php if($member->selfIntroduction!=null):?>
                    <p><strong>自我介绍：</strong><?php echo e($member->selfIntroduction); ?></p>
                    <?php endif;?>
                    <?php if($member->blog!=null):?>
                    <p><strong>个人博客：</strong><?php echo e($member->blog); ?></p>
                    <?php endif;?>
                    <?php if($member->github账号!=null):?>
                    <p><strong>github：</strong><?php echo e($member->github); ?></p>
                    <?php endif;?>
                    <?php if($member->skills!='null'):?>
                    <p><strong>技能：</strong><?php echo e(substr($member->skills,1,strlen($member->skills)-2)); ?></p>
                    <?php endif;?>
                    <?php if($member->elseSkills!=null):?>
                    <p><strong>其他技能：</strong><?php echo e($member->elseSkills); ?></p>
                    <?php endif;?>
                    <?php if($member->expectation!=null):?>
                    <p><strong>自我预期：</strong><?php echo e($member->expectation); ?></p>
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
        .container{
            position: relative;
            margin-left: 2%;
        }
        .cardBox {
            width: 100%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            /*text-align: center;*/
            float: left;
            margin-right: 10px;
            padding: 5px;
            padding-top: 15px;
        }
    </style>
@endsection