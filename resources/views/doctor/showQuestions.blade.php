@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <table class="table table-bordered table-responsive">
                            <tr>
                                <th>Question</th>
                                <th>answer</th>
                                <th>Grade</th>
                            </tr>
                            <form action="{{route('doctorProfile.post.question')}}" method="post">
                                {!!  csrf_field() !!}
                            @foreach($stud_ques_ans_choices as $st)
                                <tr>
                                    <th>
                                        {{$st->question->QUESTION_TEXT}}
                                    </th>
                                    <Th>
                                        @if(is_numeric($st->choice)  )
                                            {{$st->choices->QUESTION_CHOICE_TEXT}}
                                        @else
                                            {{$st->choice}}
                                        @endif

                                    </Th>
                                    <th>
                                        @if(is_numeric($st->choice) )
{{--                                            {{$st->choices->QUESTION_CHOICE_TEXT}}--}}
                                        @elseif($st->point)
                                            {{$st->point}}
                                        @elseif( $st->question->QUESTION_TYPE_ID ==4 || $st->question->QUESTION_TYPE_ID ==5)
                                            <input type="hidden" name="stud_ques[]" value="{{$st->id}}">
                                            <input type="text" name="grades[]" value="">

                                        @endif
                                    </th>
                                </tr>
                            @endforeach
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th><input type="submit" class="btn btn-primary"></th>

                                </tr>
                            </form>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="row">


        <!-- end col-->
    </div>
@endsection
@section('script')

@endsection