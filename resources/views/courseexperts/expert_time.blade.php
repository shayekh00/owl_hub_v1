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
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png" sizes="16x16">


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
        <h2 style="color: white;font-weight:Bold ; font-size:30px; text-align: center">Add Timing</h2><br />


        <form action="expert_time" method="POST" >
        @csrf
        <div class="panel panel-default">
            
            <div class="table-responsive">            
                <table class="table table-striped table-bordered " style="background-color:#FFFFFF" >
                    <thead>
                    {{ csrf_field() }}
                        <tr>
                            <th>Day</th>
                            <th>Time</th>
                            <th> <a href="javascript:;" class="btn btn-primary addRow"> Add Time </a> </th>
                        </tr>
                    </thead>
                    
                    <tbody>
          
                        <tr>

                        <td>
                            <select class="form-control" name="day[]">
                                
                            <option disabled ="disabled" selected ="selected">--choose Day</option>
                                <option>Saturday</option>
                                <option>Sunday</option>
                                <option>Monday</option>
                                <option>Tuesday</option>
                                <option>Wednesday</option>
                                <option>Thursday</option>
                                <option>Friday</option>

                            </select>
                        </td>
                        
                        <td>
                            <select class="form-control" name="time[]">
                              
                                <option disabled ="disabled" selected ="selected">--choose Times</option>
                                
                                <option> 8:00AM - 9:00AM</option>
                                <option> 8:30AM - 9:30AM</option>
                                <option> 9:00AM - 10:00AM</option>
                                <option> 9:30AM - 10:30AM</option>
                                <option> 10:00AM - 11:00AM</option>
                                <option> 10:30AM - 11:30AM</option>
                                <option> 11:00AM - 12:00PM</option>
                                <option> 11:30AM - 12:30PM</option>
                                <option> 12:00PM - 1:00PM</option>
                                <option> 12:30PM - 1:30PM</option>
                                <option> 1:00PM - 2:00PM</option>
                                <option> 1:30PM - 2:30PM</option>
                                <option> 2:00PM - 3:00PM</option>
                                <option> 2:30PM - 3:30PM</option>
                                <option> 3:00PM - 4:00PM</option>
                                <option> 3:30PM - 4:30PM</option>
                                <option> 4:00PM - 5:00PM</option>
                                <option> 4:30PM - 5:30PM</option>
                                <option> 5:00PM - 6:00PM</option>
                                <option> 5:30PM - 6:30PM</option>
                                <option> 6:00PM - 7:00PM</option>
                                <option> 6:30PM - 7:30PM</option>
                                <option> 7:00PM - 8:00PM</option>
                                <option> 7:30PM - 8:30PM</option>
                                <option> 8:00PM - 9:00PM</option>
                                <option> 8:30PM - 9:30PM</option>
                                <option> 9:00PM - 10:00PM</option>
                                <option> 10:30PM - 11:30PM</option>
                                <option> 11:00PM - 12:00AM</option>

                            </select>
                        </td>
                        </tr>

                    </tbody>

                </table>

                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <button type="submit"  class="btn btn-success">Submit</button>
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

            '<td>'+
                '<select class="form-control" name="day[]">'+
                    
                '<option disabled ="disabled" selected ="selected">--choose Day</option>'+
                '<option>Saturday</option>'+
                '<option>Sunday</option>'+
                '<option>Monday</option>'+
                '<option>Tuesday</option>'+
                '<option>Wednesday</option>'+
                '<option>Thursday</option>'+
                '<option>Friday</option>'+
                    
                '</select>'+
              '</td>'+


        

        '<td>'+
            '<select class="form-control" name="time[]">'+
                '<option disabled ="disabled" selected ="selected">--choose Times</option>'+
                
                '<option> 8:00AM - 9:00AM</option>'+
                '<option> 8:30AM - 9:30AM</option>'+
                '<option> 9:00AM - 10:00AM</option>'+
                '<option> 9:30AM - 10:30AM</option>'+
                '<option> 10:00AM - 11:00AM</option>'+
                '<option> 10:30AM - 11:30AM</option>'+
                '<option> 11:00AM - 12:00PM</option>'+
                '<option> 11:30AM - 12:30PM</option>'+
                '<option> 12:00PM - 1:00PM</option>'+
                '<option> 12:30PM - 1:30PM</option>'+
                '<option> 1:00PM - 2:00PM</option>'+
                '<option> 1:30PM - 2:30PM</option>'+
                '<option> 2:00PM - 3:00PM</option>'+
                '<option> 2:30PM - 3:30PM</option>'+
                '<option> 3:00PM - 4:00PM</option>'+
                '<option> 3:30PM - 4:30PM</option>'+
                '<option> 4:00PM - 5:00PM</option>'+
                '<option> 4:30PM - 5:30PM</option>'+
                '<option> 5:00PM - 6:00PM</option>'+
                '<option> 5:30PM - 6:30PM</option>'+
                '<option> 6:00PM - 7:00PM</option>'+
                '<option> 6:30PM - 7:30PM</option>'+
                '<option> 7:00PM - 8:00PM</option>'+
                '<option> 7:30PM - 8:30PM</option>'+
                '<option> 8:00PM - 9:00PM</option>'+
                '<option> 8:30PM - 9:30PM</option>'+
                '<option> 9:00PM - 10:00PM</option>'+
                '<option> 10:30PM - 11:30PM</option>'+
                '<option> 11:00PM - 12:00AM</option>'+

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
