@extends('html_skeleton')

@section('css_file')
    <link href="{{ asset('css/course_expert_courses.css') }}" rel="stylesheet">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection



@section('content')


@extends('courseexperts.courseexpertnavbar')

<div class="container1">
    <h1 class="white" >Course Willing to Teach</h1>
</div>



<form action="expertcourses" method="POST" >
    @csrf

    <div courseexpert-course-box>
        <table class="table">
        <thead>
            {{ csrf_field() }}
                    <th><a style="color: white;font-weight:Bold ; font-size:25px;">Course</a> </th>
                    <th><a style="color: white;font-weight:Bold ; font-size:25px;">University</a> </th>
                    <th> <a href="javascript:;" class="btn btn-info addRow">add courses</a> </th>
                    
        </thead>
                    <tbody>
      
                        <tr>

                        <td> <input type="text" onkeypress="return event.charCode != 32" oninput="this.value = this.value.toUpperCase()" class="course-teach1" name="course_code1[]"  placeholder="  --choose course" >

                        </td>
                        <td>
                            <select class="select-box-university1" name="university_name1[]">
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
                        </td>
        
                        <!-- <th> <a href="javascript:;" class="btn btn-danger deleteRow">-</a> </th> -->
                        </tr>

                    </tbody>
                    
    
        </table>

        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <button type="submit"  class="btn btn-success owl_hub_green">Finish</button>
                </div>
            </div>
        </div>

    </div> 


<script>

$('thead').on('click',('.addRow'),function(){
            
            var tr= '<tr>'+
        '<td> <input type="text" class="course-teach1" name="course_code1[]"  placeholder="--choose course" >'+
        
        '</td>'+

        '<td>'+
            '<select class="select-box-university1" name="university_name1[]">'+
                '<option disabled ="disabled" selected ="selected">--choose university</option>'+
                '<option>NSU</option>'+
                '<option>BRAC</option>'+
                '<option>EWU</option>'+
                '<option>AIUB</option>'+
                '<option>IUB</option>'+
                '<option>DU</option>'+
                '<option>JU</option>'+
                '<option>JNU</option>'+
                '<option>BUET</option>'+
                '<option>SUST</option>'+
                '<option>MIST</option>'+
                '<option>BUP</option>'+
                '<option>IUBAT</option>'+

            '</select>'+
        '</td>'+
        
        '<th> <a href="javascript:;" class="btn btn-danger deleteRow">-</a> </th>'+
        '</tr>';

        $('tbody').append(tr);
        });


        $('tbody').on('click', '.deleteRow', function(){

        $(this).parent().parent().remove();

        })

</script>
</form>




@endsection