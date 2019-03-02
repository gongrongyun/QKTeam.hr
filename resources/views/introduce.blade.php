@extends('Layouts.app')

@section('content')
    <div class="container" id="container">
        @if(isset($member))
            <h2>个人报名信息</h2>
            <div class="card">
                <div class="card-body"><strong>姓名：</strong>{{$member->name}}</div>
            </div>
            <br>
            <div class="card">
                <div class="card-body"><strong>生日：</strong>{{$member->birthday}}</div>
            </div>
            <br>
            <div class="card">
                <div class="card-body"><strong>学号：</strong>{{$member->studentId}}</div>
            </div>
            <br>
            <div class="card">
                <div class="card-body"><strong>学院:</strong>{{$member->college}}</div>
            </div>
            <br>
            <div class="card">
                <div class="card-body"><strong>专业：</strong>{{$member->profession}}</div>
            </div>
            <br>
            <div class="card">
                <div class="card-body"><strong>手机号:</strong>{{$member->phoneNumber}}</div>
            </div>
            <br>
            <div class="card">
                <div class="card-body"><strong>邮箱：</strong>{{$member->email}}</div>
            </div>
            <br>
            <div class="card">
                <div class="card-body"><strong>扣扣：</strong>{{$member->qq}}</div>
            </div>
            <br>
            <div class="card">
                <div class="card-body"><strong>性别：</strong>{{$member->gender}}</div>
            </div>
            <br>
            <?php if($member->selfIntroduction!=null):?>
            <div class="card">
                <div class="card-body"><strong>自我介绍：</strong><?php echo e($member->selfIntroduction); ?></div>
            </div>
            <br>
            <?php endif; ?>

            <?php if($member->blog!=null):?>
            <div class="card">
                <div class="card-body"><strong>个人博客：</strong><?php echo e($member->blog); ?></div>
            </div>
            <br>
            <?php endif; ?>

            <?php if($member->github!=null):?>
            <div class="card">
                <div class="card-body"><strong>github账号：</strong><?php echo e($member->github); ?></div>
            </div>
            <br>
            <?php endif; ?>

            <?php if($member->skills!='null'):?>
            <div class="card">
                <div class="card-body"><strong>技能：</strong><?php echo e($member->skills); ?></div>
            </div>
            <br>
            <?php endif; ?>

            <?php if($member->elseSkills!=null):?>
            <div class="card">
                <div class="card-body"><strong>其他技能：</strong><?php echo e($member->elseSkills); ?></div>
            </div>
            <br>
            <?php endif; ?>

            <?php if($member->expectation!=null):?>
            <div class="card">
                <div class="card-body"><strong>自我预期：</strong><?php echo e($member->expectation); ?></div>
            </div>
            <br>
            <?php endif; ?>
        @endif
    </div>
    <div class="container" style="margin-top:1%">
        <button button type="button" class="btn btn-primary" onclick="printpage()" >打印</button>
    </div>
    <script type="text/javascript">
        function printpage()
        {
            bdhtml=window.document.body.innerHTML;
            document.body.innerHTML=document.getElementById('container').innerHTML;
            window.print()
            window.document.body.innerHTML=bdhtml;
        }
    </script>
@endsection