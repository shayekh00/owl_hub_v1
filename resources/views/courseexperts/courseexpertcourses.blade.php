@extends('html_skeleton')

@section('css_file')
    <link href="{{ asset('css/course_expert_courses.css') }}" rel="stylesheet">
@endsection



@section('content')

@extends('commons.navbar')
<div class="container">
    <h1 class="white" >Course Willing to Teach</h1>
</div>

<div class="courseexpert-course-box">

<div id="Courses_div">
    {{ csrf_field() }}
        <div class="input-group">
            <a style="color: white;font-weight:Bold ; font-size:25px;">Course 1</a>
            <input id="courses" type="text" class="course-teach" name="courses" placeholder="" >
                <select class="select-box-university">
                        <option disabled ="disabled" selected ="selected">--choose university</option>
                        <option>NSU</option>
                        <option>BRAC</option>
                        <option>EWU</option>
                        <option>AIUB</option>
                        <option>IUB</option>
                        <option>DU</option>
                        <option>JU</option>
                        <option>JNU</option>
                        <option>BUET</option>
                        <option>SUST</option>
                        <option>MIST</option>
                        <option>BUP</option>
                        <option>IUBAT</option>
                </select>
        </div>

        <div class="input-group">
            <a style="color: white;font-weight:Bold ; font-size:25px;">Course 2</a>
            <input id="courses" type="text" class="course-teach" name="courses" placeholder="">
            <select class="select-box-university">
                        <option disabled ="disabled" selected ="selected">--choose university</option>
                        <option>NSU</option>
                        <option>BRAC</option>
                        <option>EWU</option>
                        <option>AIUB</option>
                        <option>IUB</option>
                        <option>DU</option>
                        <option>JU</option>
                        <option>JNU</option>
                        <option>BUET</option>
                        <option>SUST</option>
                        <option>MIST</option>
                        <option>BUP</option>
                        <option>IUBAT</option>
                </select>
        </div>

        <div class="input-group">
            <a style="color: white;font-weight:Bold ; font-size:25px;">Course 3</a>
            <input id="courses" type="text" class="course-teach" name="courses" placeholder="">
                <select class="select-box-university">
                        <option disabled ="disabled" selected ="selected">--choose university</option>
                        <option>NSU</option>
                        <option>BRAC</option>
                        <option>EWU</option>
                        <option>AIUB</option>
                        <option>IUB</option>
                        <option>DU</option>
                        <option>JU</option>
                        <option>JNU</option>
                        <option>BUET</option>
                        <option>SUST</option>
                        <option>MIST</option>
                        <option>BUP</option>
                        <option>IUBAT</option>
                </select>
        </div>

        <div class="input-group">
            <a style="color: white;font-weight:Bold ; font-size:25px;">Course 4</a>
            <input id="courses" type="text" class="course-teach" name="courses" placeholder="">
                <select class="select-box-university">
                        <option disabled ="disabled" selected ="selected">--choose university</option>
                        <option>NSU</option>
                        <option>BRAC</option>
                        <option>EWU</option>
                        <option>AIUB</option>
                        <option>IUB</option>
                        <option>DU</option>
                        <option>JU</option>
                        <option>JNU</option>
                        <option>BUET</option>
                        <option>SUST</option>
                        <option>MIST</option>
                        <option>BUP</option>
                        <option>IUBAT</option>
                </select>
        </div>

        <div class="input-group">
            <a style="color: white;font-weight:Bold ; font-size:25px;">Course 5</a>
            <input id="courses" type="text" class="course-teach" name="courses" placeholder="">
                <select class="select-box-university">
                        <option disabled ="disabled" selected ="selected">--choose university</option>
                        <option>NSU</option>
                        <option>BRAC</option>
                        <option>EWU</option>
                        <option>AIUB</option>
                        <option>IUB</option>
                        <option>DU</option>
                        <option>JU</option>
                        <option>JNU</option>
                        <option>BUET</option>
                        <option>SUST</option>
                        <option>MIST</option>
                        <option>BUP</option>
                        <option>IUBAT</option>
                </select>
        </div>

        <div class="input-group">
            <a style="color: white;font-weight:Bold ; font-size:25px;">Course 6</a>
            <input id="courses" type="text" class="course-teach" name="courses" placeholder="">
                <select class="select-box-university">
                        <option disabled ="disabled" selected ="selected">--choose university</option>
                        <option>NSU</option>
                        <option>BRAC</option>
                        <option>EWU</option>
                        <option>AIUB</option>
                        <option>IUB</option>
                        <option>DU</option>
                        <option>JU</option>
                        <option>JNU</option>
                        <option>BUET</option>
                        <option>SUST</option>
                        <option>MIST</option>
                        <option>BUP</option>
                        <option>IUBAT</option>
                </select>
        </div>

        <div class="input-group">
            <a style="color: white;font-weight:Bold ; font-size:25px;">Course 7</a>
            <input id="courses" type="text" class="course-teach" name="courses" placeholder="">
                <select class="select-box-university">
                        <option disabled ="disabled" selected ="selected">--choose university</option>
                        <option>NSU</option>
                        <option>BRAC</option>
                        <option>EWU</option>
                        <option>AIUB</option>
                        <option>IUB</option>
                        <option>DU</option>
                        <option>JU</option>
                        <option>JNU</option>
                        <option>BUET</option>
                        <option>SUST</option>
                        <option>MIST</option>
                        <option>BUP</option>
                        <option>IUBAT</option>
                </select>
        </div>

        <div class="input-group">
            <a style="color: white;font-weight:Bold ; font-size:25px;">Course 8</a>
            <input id="courses" type="text" class="course-teach" name="courses" placeholder="">
                <select class="select-box-university">
                        <option disabled ="disabled" selected ="selected">--choose university</option>
                        <option>NSU</option>
                        <option>BRAC</option>
                        <option>EWU</option>
                        <option>AIUB</option>
                        <option>IUB</option>
                        <option>DU</option>
                        <option>JU</option>
                        <option>JNU</option>
                        <option>BUET</option>
                        <option>SUST</option>
                        <option>MIST</option>
                        <option>BUP</option>
                        <option>IUBAT</option>
                </select>
        </div>


        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <button type="submit" name="action" value="student" class="btn btn-success owl_hub_green">Finish</button>
                </div>
            </div>
        </div>



    </form>
</div>
</div>



@endsection