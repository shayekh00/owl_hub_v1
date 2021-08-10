@extends('html_skeleton')

@section('css_file')
    <link href="{{ asset('css/course_expert_timing.css') }}" rel="stylesheet">
    <link href="{{ asset('css/course_expert_courses.css') }}" rel="stylesheet">
   
@endsection



@section('content')

@extends('courseexperts.courseexpertnavbar')



<style>

a {
  text-align: left;
  padding: 8px;
}

</style>

<div class="center">
    <h1 class="white" >All of Your Student Requests</h1>
    
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
                            <button type="submit"  class="btn btn-success">Finish</button>
                        </div>
                    </div>
                </div>

        </div> 

        
      <script>

        $('thead').on('click',('.addRow'),function(){
                    
                    var tr= '<tr>'+
                '<td> <input type="text" onkeypress="return event.charCode != 32" oninput="this.value = this.value.toUpperCase()" class="course-teach1" name="course_code1[]"  placeholder="  --choose course" >'+
                
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