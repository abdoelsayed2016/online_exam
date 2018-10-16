@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">
                        <h4>Invoice</h4>
                    </div> -->
                <div class="panel-header exam-row-two">

                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="faculty-name m-t-5"> Faculty Of Computers and Information

                            </h4>
                            <p class="m-t-5"> Midterm 2018-2019</p>
                            <span class=""><strong>Date: </strong> Jan 17, 2016</span>
                            <span class="m-l-15"><strong>Time: </strong> <span class="label label-pink">

                                <?php

                                    $hours = floor($exam->EXAM_DURATION / 60);
                                    $minutes = ($exam->EXAM_DURATION % 60);

                                    echo sprintf('%02d:%02d:00', $hours, $minutes);

                                    ?>

                            </span></span>
                            <span class="m-l-15"><strong>Left: </strong> <span id="minutes" class="label label-pink">

                                <?php

                                    $datetime1 = new DateTime($endTime);
                                    $datetime2 = new DateTime(date("h:i:s", time()));
                                    $interval = $datetime1->diff($datetime2);

                                    echo $interval->format('%h') . ":" . $interval->format('%i') . ":" . $interval->format('%s');

                                    ?>

                            </span></span>

                        </div>

                        <div class="pull-right m-t-10">

                            <img class="img-responsive logo-img" src="{{asset('assets/images/logo.png')}}">
                        </div>
                    </div>

                </div>
                <div class="panel-body">
                    <div class="m-h-10"></div>
                    <form action="{{route('student.exam.answer',$exam->id)}}" method="post">
                        {!! csrf_field() !!}
                    <div class="row">
                        <?php $i=1; ?>

                        @foreach($questions as $k=>$question)

                            @if($k==1)
                                    <div class="col-md-12 question">
                                        <div class="question-number">
                                            <p>Question {{$i}} <span>[{{$question->sum('POINTS')}}] </span> :</p>
                                        </div>
                                        <div>
                                            <p class="question-title m-t-20">
                                                <span> </span> choose
                                            </p>

                                            @foreach($question as $j=>$q)
                                                <div class="row question-body m-t-20">
                                                    <div class="col-md-12">
                                                            <span> {{$j+1}}:{{$q->QUESTION_TEXT}}</span>
                                                    </div>

                                                    @foreach($q->choices as $kk=>$choice)
                                                        <div class="col-md-3">

                                                            <div class="radio radio-custom ">
                                                                <input type="radio" name="choice_{{$q->id}}[]" id="radio03" value="{{$choice->id}}" >
                                                                <label for="radio03">
                                                                    {{$choice->QUESTION_CHOICE_TEXT}}
                                                                </label>
                                                            </div>


                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>

                                @endif

                            @if($k==2)
                                <div class="col-md-12 question">
                                    <div class="question-number">
                                        <p>Question {{$i}} <span>[{{$question->sum('POINTS')}}] </span> :</p>
                                    </div>
                                    <div>
                                        <p class="question-title m-t-20">
                                            <span> A .</span> True or False
                                        </p>
                                        @foreach($question as $j=>$q)

                                        <div class="row question-body m-t-20">
                                            <div class="col-md-12">
                                                    {{$j+1}}:{{$q->QUESTION_TEXT}}


                                            </div>


                                            @foreach($q->choices as $kk=>$choice)
                                                <div class="col-md-3">

                                                    <div class="radio radio-custom ">
                                                        <input type="radio" name="choice_{{$q->id}}[]" id="radio03" value="{{$choice->id}}" >
                                                        <label for="radio03">
                                                            {{$choice->QUESTION_CHOICE_TEXT}}
                                                        </label>
                                                    </div>


                                                </div>
                                            @endforeach


                                        </div>
                                        @endforeach


                                    </div>
                                </div>
                            @endif
                            @if($k==3)
                                <div class="col-md-12 question">
                                    <div class="question-number">
                                        <p>Question {{$i}} <span>[{{$question->sum('POINTS')}}] </span> :</p>
                                    </div>
                                    <div>
                                        <p class="question-title m-t-20">
                                            <span> A .</span> Complete
                                        </p>
                                        @foreach($question as $j=>$q)

                                        <div class="row question-body m-t-20">
                                            <div class="col-md-12">
                                                {{$j+1}}:{{$q->QUESTION_TEXT}}

                                            </div>


                                            @foreach($q->choices as $kk=>$choice)
                                                <div class="col-md-3">

                                                    <div class="radio radio-custom ">
                                                        <input type="text" name="choice_{{$q->id}}[]" id="radio03" value="" >
                                                        {{--<label for="radio03">--}}
                                                            {{--{{$choics->QUESTION_CHOICE_TEXT}}--}}
                                                        {{--</label>--}}
                                                    </div>


                                                </div>
                                            @endforeach


                                        </div>

                                        @endforeach
                                    </div>
                                </div>

                            @endif
                            @if($k==4)
                                <div class="col-md-12 question">
                                    <div class="question-number">
                                        <p>Question {{$i}} <span>[{{$question->sum('POINTS')}}] </span> :</p>
                                    </div>
                                    <div>
                                        <p class="question-title m-t-20">
                                            <span> A .</span> Code
                                        </p>
                                        <div class="question-body m-t-20">


                                            @foreach($question as $j=>$q)

                                            <div class="form-group">
                                                <label class="control-label">{{$j+1}}:{{$q->QUESTION_TEXT}}</label>
                                                <div class="">
                                                    <textarea required="" name="choice_{{$q->id}}[]" class="form-control"
                                                              data-parsley-id="50"></textarea>
                                                </div>
                                            </div>
                                            @endforeach



                                        </div>

                                    </div>
                                </div>
                            @endif
                            @if($k==5)
                                    <div class="col-md-12 question">
                                        <div class="question-number">
                                            <p>Question {{$i}} <span>[{{$question->sum('POINTS')}}] </span> :</p>
                                        </div>
                                        <div>
                                            <p class="question-title m-t-20">
                                                <span> A .</span> Define
                                            </p>
                                            <div class="question-body m-t-20">


                                                @foreach($question as $j=>$q)

                                                    <div class="form-group">
                                                        <label class="control-label">{{$j+1}}:{{$q->QUESTION_TEXT}}</label>
                                                        <div class="">
                                                    <textarea required="" name="choice_{{$q->id}}[]" class="form-control"
                                                              data-parsley-id="50"></textarea>
                                                        </div>
                                                    </div>
                                                @endforeach



                                            </div>

                                        </div>
                                    </div>
                            @endif



                            <?php $i++;
                            ?>
                        @endforeach

                    </div>
                    <div class="row">

                        <div class="col-md-12 text-center">

                            <h4>Best Wishes</h4>
                        </div>
                    </div>
                    <hr>
                    <div class="hidden-print">
                        <div class="pull-right">
                            {{--<a href="javascript:window.print()" class="btn btn-inverse waves-effect waves-light"><i--}}
                                        {{--class="fa fa-print"></i></a>--}}
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection
@section('script')
    <script language="Javascript">
        var timer = 0;
        var timer2 = 0;
        var stop = 0;
        $(document).ready(function (e) {


            var $worked = $("#minutes");

            function update() {
                var myTime = $worked.html();
                var ss = myTime.split(":");
                console.log(ss);
                //  alert(ss[0]);
                var dt = new Date();
                dt.setHours(ss[0]);
                dt.setMinutes(ss[1]);
                dt.setSeconds(ss[2]);

                var dt2 = new Date(dt.valueOf() - 1000);
                var temp = dt2.toTimeString().split(" ");
                var ts = temp[0].split(":");
                $worked.html(ts[0] + ":" + ts[1] + ":" + ts[2]);
                //
                {{--$.ajax({--}}
                        {{--type: "GET",--}}
                        {{--url: '{{route('answerQuestion.time')}}',--}}
                        {{--dataType: 'JSON',--}}
                        {{--success: function (data) {--}}
                        {{--if (data == "{{$endTime}}") {--}}
                        {{--alert('TIME IS OUT THANK YOU')--}}
                        {{--window.location = "{{route('answerQuestion.result',$exam)}}";--}}
                        {{--}--}}

                        {{--},--}}
                        {{--error: function (XMLHttpRequest, textStatus, errorThrown) {--}}
                        {{--}--}}

                        {{--});--}}

                    timer = setTimeout(update, 1000);

                return stop;

                function stop() {
                    if (timer) {
                        clearTimeout(timer);
                        timer = 0;
                    }
                }
            }

            function update2() {
                var myTime = $worked.html();
                var ss = myTime.split(":");

                if (ss[0] == 00 && ss[1] == 00 && ss[2] == 00) {
                    stop();
                    //iam will work here
                }
                timer2 = setTimeout(update2, 1000);

            }

            stop = update();
            var stop2 = setTimeout(update2, 1000);
//            stop();

        });
    </script>
@endsection
