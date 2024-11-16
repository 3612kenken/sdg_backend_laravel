<!DOCTYPE html>
<html>

           	@include('api-ui.head');


<body>
    <div class="modal fade" id="art-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Are you sure you want to delete?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="/sdg_marsu/DeleteArticle/delete/" method="DELETE" id="frm-delete">

              <div class="modal-body">
                
                    <h5 id="aid"></h5>
               
              </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Delete</button>

            </form>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            
          </div>
        </div>
      </div>
    </div>
    <!-- AJAX Script/Link-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
      <div class="sidebar-header" >
        
        <p class="title text-primary">SDG Article Information </p>
    
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
        
            <li class='sidebar-title'>Sustainable Development Goals</li>
            <li class="sidebar-item  ">
                <a href="/sdg_marsu/create-project" class='sidebar-link'>
                    <i data-feather="home" width="20"></i> 
                    <span>Project Information</span>
                </a>
                
            </li>
			<li class="sidebar-item active">
                <a href="/sdg_marsu/create-article" class='sidebar-link'>
                    <i data-feather="home" width="20"></i> 
                    <span>SDG Article</span>
                </a>
                
            </li>
    </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
               
            </nav>
            
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="alert text-white" style="background-color: #800200;" role="alert">
        <h3 class="text-white">Articles</h3>
        <p class="text-subtitle text-white">Add Articles Here</p></div>
    </div>
    <section class="section">
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="card ">
                  
                    <div class="card-body">
                      
                        <form action="/sdg_marsu/Article" method="POST" id="frm-article">
                            @CSRF
                            <div class="row">
                             
                                <div class="col-md-8 col-12">
                                   
                                    <div class="form-group">
                                        <label for="article_id">Auto-generated ID: <?php echo 'ART-'.date('mdYhis').rand(1000,99999)?> </label>

                                        <input type="hidden" id="article_id" value="<?php echo 'ART-'.date('mdYhis').rand(1000,99999)?>" class="form-control"  name="article_id">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="headline">Headline</label>
                                        <textarea  id="headline" class="form-control"  name="headline"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="sub_headline">Subheadline</label>
                                        <textarea  id="sub_headline" class="form-control"  name="sub_headline"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="by_line">By Line</label>
                                        <input type="text"  id="by_line" class="form-control"  name="by_line">
                                    </div>
                          
                                    <div class="form-group">
                                        <label for="lead_paragraph">Lead Paragraph</label>
                                        <textarea  id="lead_paragraph" class="form-control"  name="lead_paragraph"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="background_information">Background Information</label>
                                        <textarea type="date" id="background_information" class="form-control"  name="background_information"></textarea>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label for="highlights">Main Activities and Highlights</label>
                                        <textarea  id="highlights" class="form-control"  name="highlights"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="impact">Impact</label>
                                       <textarea id="impact" class="form-control"  name="impact"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="future_plans">Future Plans</label>
                                       <textarea id="future_plans" class="form-control"  name="future_plans"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="conclusion">Conclusion</label>
                                       <textarea id="conclusion" class="form-control"  name="conclusion"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="call_to_action">Call to Action</label>
                                       <textarea id="call_to_action" class="form-control"  name="call_to_action"></textarea>
                                    </div>
                                    <div class="alert text-white" style="background-color: #800200;" role="alert">
                                         Reminder
                                    </div>

                                    <div class="form-group">
                                        <label for="reminder">Reminder</label>
                                        <textarea type="text" id="sub_reminder" class="form-control"  name="sub_reminder"></textarea>
                                        <textarea type="text" id="reminder" class="form-control"  name="reminder" style="display: none;"></textarea>
<br>
 <a class="btn btn-primary float-right" onclick="AddReminder();">Add Reminder</a><br><br>
                                    </div>
                                        <table class="table table-dark">
                                              <thead >
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Reminder</th>
                                                  <th scope="col">Action</th>
                                                </tr>
                                              </thead>
                                              <tbody id="reminder_table">
                                               
                                              </tbody>
                                            </table>  
                               	</div>
                                
                            	</div>

                             <br>
                            <div class="clearfix">
                                
                                <br>
                                <br>
                            </div>
</form>
              <button class="btn btn-success float-right" onclick='SaveRecord();' >Save Article</button>
                        <div class="row">
                            <div class="alert text-white" style="background-color: #800200;" role="alert">
                                <h3 class="text-white">Article List</h3>
                            </div>
                       
                        		<table class="table table-dark">
											  <thead>
											    <tr>
											      <th scope="col">#</th>
											      <th scope="col">Headline</th>
                                                  <th scope="col">Sub Headline</th>
											  
											      <th scope="col">Lead Paragraph</th>
											      <th scope="col">Background Information</th>
											      
											      <th scope="col">Other Information</th>
                                            
											    
											      <th scope="col">Action</th>
											    </tr>
											  </thead>
											  <tbody>
                                             <script type="text/javascript">
                                                const aarticle_id=[];
                                                 const headline=[];
                                                 const sub_headline=[];
                                                const by_line=[];
                                                 
                                                 const lead_paragraph=[];
                                                 const background_information=[];
                                                 const highlights=[];
                                                 const impact=[];
                                                 const future_plans=[];
                                                 const conclusion=[];
                                                 const call_to_action=[];
                                                 const tblreminder=[];
                                                 var rreminder;
                                              

                                             </script>
                                               <?php  $i=0; 


                                               ?>

                                                @foreach($data as $data)

											         <tr>
                                                        <td>{{$data->article_id }}
                                                            </td>
                                                        <td>{{$data->headline }}</td>
                                                        <td>{{$data->sub_headline }}</td>
                                                        <td>{{$data->lead_paragraph }}</td>
                                                        <td>{{$data->background_information }}</td>
                                                        <td>
                                                            <button class="btn btn-secondary btn-sm">Show All</button>
                                                        </td>
                                        <td><button class="btn btn-info btn-sm" onclick="EditArticle(<?php echo $i; ?>, &#39;{{$data->article_id }}&#39;);">Edit</button> 
                                                       <button class="btn btn-danger btn-sm" onclick="DeleteArticle(&#39;{{$data->article_id }}&#39;, &#39;{{$data->sub_headline }}&#39;)">Delete</button>
                                                        </td>
                                                     </tr>
                                                      <script type="text/javascript">
                            aarticle_id.push(<?php echo '"' ?> {{$data->article_id }} <?php echo '"' ?>);
                            headline.push(<?php echo '"' ?> {{$data->headline }} <?php echo '"' ?>);
                            sub_headline.push(<?php echo '"' ?> {{$data->sub_headline }} <?php echo '"' ?>);
                            sub_headline.push(<?php echo '"' ?> {{$data->by_line }} <?php echo '"' ?>);
                            lead_paragraph.push(<?php echo '"' ?> {{$data->lead_paragraph }} <?php echo '"' ?>);
                            background_information.push(<?php echo '"' ?> {{$data->background_information }} <?php echo '"' ?>);
                            highlights.push(<?php echo '"' ?> {{$data->highlights }} <?php echo '"' ?>);
                            impact.push(<?php echo '"' ?> {{$data->impact }} <?php echo '"' ?>);
                            future_plans.push(<?php echo '"' ?> {{$data->future_plans }} <?php echo '"' ?>);
                            conclusion.push(<?php echo '"' ?> {{$data->conclusion }} <?php echo '"' ?>);
                            call_to_action.push(<?php echo '"' ?> {{$data->call_to_action }} <?php echo '"' ?>);
                           rreminder = '<?php 
                                $str = $data->reminder; 
                                $str = str_replace("\r\n",'',$str); echo strval($str); ?>';



                                tblreminder.push(rreminder.toString() );
                       

                                                      </script>
                                                   <?php  
                                                   $i+=1; ?>

                                                @endforeach

											  </tbody>
											</table> 
                        </div>
                    </div>
                </div>
                
            </div>
            
           
        </div>
    
	</section>
</div>

           	@include('api-ui.footer');
            @include('api-ui.swalert');
      
        </div>
    </div>

     <script src="{{ url('assets/js/feather-icons/feather.min.js') }}"></script>
    <script src="{{ url('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ url('assets/js/app.js') }}"></script>
    
    <script src="{{ url('assets/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ url('assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ url('assets/js/pages/dashboard.js') }}"></script>

    <script src="{{ url('assets/js/main.js') }}"></script>
     <script src="{{ url('assets/js/main.js') }}"></script>

    

    <script type="text/javascript">
        
        var article_id=$('#article_id').val();
        const Reminder=[];

        var UserEdit=false;
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
        var reminderIndex = 0;
        
     
        function AddReminder(){
            

            var reminterContents=$('textarea#sub_reminder').val();
            reminderIndex+=1;
            Reminder.push('<tr><td>'+ reminderIndex + '</td><td>'+ reminterContents +'</td><td><a class="btn btn-danger btn-sm">Delete</a></td></tr>');
            

            $('#reminder_table').html(Reminder);
            $('textarea#sub_reminder').val('');
            $('textarea#reminder').val( $('textarea#reminder').val() + ':*+!/:'+  reminterContents);
            


        }
        function forTableReminder(rmd){
                        const reminders = rmd.split(":*+!/:");

            reminderIndex =0;

            for (const remd in reminders) {

                Reminder.push('<tr><td>'+ reminderIndex + '</td><td>'+ remd +'</td><td><a class="btn btn-danger btn-sm">Delete</a></td></tr>');
            }

            $('#reminder_table').html(Reminder);
            $('textarea#sub_reminder').val('');
            $('textarea#reminder').val( $('textarea#reminder').val() + ':*+!/:'+  rmd);

        }


        function SaveRecord(){
    
            
            var headline=$('#headline').val();
            var sub_headline=$('#sub_headline').val();
            var by_line=$('#by_line').val();
            var lead_paragraph=$('#lead_paragraph').val();
            var background_information=$('#background_information').val();
            var highlights=$('#highlights').val();
            var impact=$('#impact').val();
            var future_plans=$('#future_plans').val();
            var conclusion=$('#conclusion').val();
            var call_to_action=$('#call_to_action').val();
            var rminder=$('#reminder').val();

    
            
            if(headline=='' || sub_headline==''){
                SwalAlert(3,"Please fillup the required fields","Error Saving");
            }else{
                if(UserEdit==false){

                   /*   $.ajax({
                        
                        url: "/sdg_marsu/SaveArticle",
                        data: {
                          '_token = <?php echo csrf_token() ?>',
                          'headline': headline,
                          'sub_headline': sub_headline,
                          'lead_paragraph': lead_paragraph,
                          'background_information': background_information,
                          'highlights': highlights,
                          'impact': impact,
                          'future_plans': future_plans,
                          'conclusion': conclusion,
                          'headline': headline,
                          'call_to_action': call_to_action,
                        },
                        type: "POST",
                        dataType: "json",
                   
                        success: function(data) {
                            SwalAlert(1,"Data Entry","Saved Data");
                            alert(data);
                        }
                      });*/
                
                    $.post("{{ url('/sdg_marsu/Article') }}", {_token: '',headline:headline,sub_headline:sub_headline,by_line:by_line,lead_paragraph:lead_paragraph,background_information:background_information,highlights:highlights,impact:impact,future_plans:future_plans,conclusion:conclusion,call_to_action:call_to_action,reminder:rminder})
                    .done(function(data) {
                         SwalAlert(1,"Data Entry","Saved Data");
                            alert(data);
                        //location.reload();
                    });
                    
                }else{
                    $.post("functions.php", {ufirstname:fn,ulastname:ln,uID:UserID})
                    .done(function(data) {
                        alert(data);
                        UserEdit=false;
                        location.reload();
                    });
                }
            }
        }
        //alert('_token = <?php echo csrf_token() ?>');
        function EditArticle(edit_id, art_id){


           // alert(rreminder[0]);

            $('#article_id').val(aarticle_id[edit_id]);
            $('textarea#headline').val(headline[edit_id]);
            $('textarea#sub_headline').val(sub_headline[edit_id]);
            $('#by_line').val(by_line[edit_id]);
            $('textarea#lead_paragraph').val(lead_paragraph[edit_id]);
            $('textarea#background_information').val(background_information[edit_id]);
            $('textarea#highlights').val(highlights[edit_id]);
            $('textarea#impact').val(impact[edit_id]);
            $('textarea#future_plans').val(future_plans[edit_id]);
            $('textarea#conclusion').val(conclusion[edit_id]);
        $('textarea#reminder').val(rreminder[edit_id]);
            forTableReminder(rreminder[edit_id]);

            $("#frm-article").attr('action', '/sdg_marsu/edit/'+ art_id);
             $("#frm-article").attr("method", "PUT");

        }

        function DeleteArticle(del_id, art_hl){
     

            $('#aid').html("ID: " + del_id + "<br><small>Article Headline: " + art_hl +"</small>");
            $('#art-modal').modal('show');


            $("#frm-delete").attr('action', '/sdg_marsu/delete/'+ del_id);

        }
    </script>

</body>
</html>