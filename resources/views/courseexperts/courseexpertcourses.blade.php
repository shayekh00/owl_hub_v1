<!DOCTYPE html>
<html>
 <head>
  <title> Student Search </title>
  <meta name="viewport" content="width=, initial-scale=1.0">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
<style>
    .form-control:focus {
            border-color: forestgreen;
            box-shadow: none;
    }
</style>
 </head>
 <body>
    @extends('courseexperts.courseexpertnavbar')
    <div class="owl_hub_background">
        <br />
        <div class="container box">
        <br />
        <br />
        <br />
        <br />
        <h2 style="color: white;font-weight:Bold ; font-size:30px; text-align: center">Add Courses</h2><br />


        <form action="expertcourses" method="POST" >
        @csrf
        <div class="panel panel-default">
            
            <div class="table-responsive">            
                <table class="table table-striped table-bordered " style="background-color:#FFFFFF" >
                    <thead>
                    {{ csrf_field() }}
                        <tr>
                            <th>Course Code</th>
                            <th>University</th>
                            <th> <a href="javascript:;" class="btn btn-primary addRow"> Add Courses </a> </th>
                        </tr>
                    </thead>
                    
                    <tbody>
          
                        <tr>

                        <td> <input type="text" class="form-control" onkeypress="return event.charCode != 32" oninput="this.value = this.value.toUpperCase()"  name="course_code1[]"  placeholder="  --choose course" >

                        </td>
                        <td>
                            <select class="form-control" name="university_name1[]">
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
            
            </div>

            </div>
        </div>
        </form>
    </div>
 </body>


 <script>

$('thead').on('click',('.addRow'),function(){
            
            var tr= '<tr>'+
        '<td> <input type="text" onkeypress="return event.charCode != 32" oninput="this.value = this.value.toUpperCase()" class="form-control" name="course_code1[]"  placeholder="  --choose course" >'+
        
        '</td>'+

        '<td>'+
            '<select class="form-control" name="university_name1[]">'+
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





</html>
