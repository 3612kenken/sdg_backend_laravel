<!DOCTYPE html>
<html>

            @include('api-ui.head');

<body>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
      <div class="sidebar-header" >
        
        <p class="title text-primary">SDG Project Information </p>
    
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
        
            <li class='sidebar-title'>Sustainable Development Goals</li>
            <li class="sidebar-item  active">
                <a href="/sdg_marsu/create-project" class='sidebar-link'>
                    <i data-feather="home" width="20"></i> 
                    <span>Project Information</span>
                </a>
                
            </li>
            <li class="sidebar-item ">
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
        <h3 class="text-white">Projects</h3>
        <p class="text-subtitle text-white">Add Projects Here</p></div>
    </div>
    <section class="section">
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="card ">
                  
                    <div class="card-body">
                      
                        <form action="" method="POST">
                            <div class="row">
                                
                              
                                <div class="col-md-8 col-12">
                                   
                                    <div class="alert alert-primary" role="alert">
                                          <h4 class="text-white">Project Introduction</h4>
                                        </div>

                                    <div class="form-group">
                                        <label for="id">Auto-generated ID: <?php echo 'PRJ-'.date('mdYhis').rand(1000,99999)?> </label>

                                        <input type="hidden" id="id" value="<?php echo 'PRJ-'.date('mdYhis').rand(1000,99999)?>" class="form-control"  name="id">
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="text" id="image" class="form-control"  name="image">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" id="title" class="form-control"  name="title">
                                    </div>
                                    <div class="form-group">
                                        <label for="subtitle">Subtitle</label>
                                        <textarea type="text" id="subtitle" class="form-control"  name="subtitle"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="author">Author</label>
                                        <input type="text" id="author" class="form-control"  name="author">
                                    </div>
                                    <div class="form-group">
                                        <label for="proj_date">Date</label>
                                        <input type="date" id="proj_date" class="form-control"  name="proj_date">
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label for="link">Link</label>
                                        <input type="text" id="link" class="form-control"  name="link">
                                    </div>
                                    <div class="form-group">
                                        <label for="logo">Logo</label>
                                        <input type="text" id="logo" class="form-control"  name="logo">
                                    </div>
                                    <div class="alert alert-primary" role="alert">
                                          <h4 class="text-white">Contents</h4>
                                        </div>
                                   
                            

                                    <div class="form-group">
                                        <label for="background">Background</label>
                                        <textarea type="text" id="background" class="form-control"  name="background"></textarea>
                                    </div>
                                
                                 <div class="alert text-white" style="background-color: #800200;"  role="alert">
                                          Highlights
                                        </div>

                                    <div class="form-group">
                                        <label for="highlights">Highlights</label>
                                        
                                         <input type="text" id="sub_highlights" class="form-control"  name="sub_highlights">
                                        <input type="hidden" id="highlights" class="form-control"  name="highlights">
                                    </div>
                                     <a class="btn btn-primary float-right" onclick="AddHighlight();" >+</a>
                                 
                                        <table class="table table-dark">
                                              <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">highlights</th>
                                                
                                                
                                                  <th scope="col">Action</th>
                                                </tr>
                                              </thead>
                                              <tbody id="highlights_table">
                                               
                                              </tbody>
                                            </table>  
                              
                                  <div class="alert text-white" style="background-color: #800200;"  role="alert">
                                          Impacts
                                        </div>    
                                    <div class="form-group">
                                        <label for="sub_impact">Impact</label>
                                        <textarea type="text" id="sub_impact" class="form-control"  name="sub_impact"></textarea>

                                <textarea  id="impact"  name="impact" style="display: none;"></textarea>
                                    </div>
                                    <a class="btn btn-primary float-right" onclick="AddImpact();">+</a>
                                            <table class="table table-dark">
                                              <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Impact</th>
                                                  <th scope="col">Action</th>
                                                </tr>
                                              </thead >
                                              <tbody id="impact_table">
                                               
                                              </tbody>
                                            </table> 
                          
                                 <div class="alert text-white" style="background-color: #800200;"  role="alert">
                                          Outcomes
                                        </div>      
                                    <div class="form-group">
                                        <label for="outcome">Outcome</label>
                                        <textarea type="text" id="sub_outcome" class="form-control"  name="sub_outcome"></textarea>
                                        <textarea type="hidden" id="outcome" class="form-control"  name="outcome" style="display: none;"></textarea>
                                    </div>
                                    <a class="btn btn-primary float-right" onclick="AddOutcome();">+</a>
                                            <table class="table table-dark">
                                              <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Outcome</th>
                                                  <th scope="col">Action</th>
                                                </tr>
                                              </thead>
                                              <tbody id="outcome_table">
                                               
                                              </tbody >
                                            </table> 
                             
                                  <div class="alert text-white" style="background-color: #800200;"  role="alert">
                                          Plans
                                        </div>       
                                    <div class="form-group">
                                        <label for="plan">Plan</label>
                                        <textarea type="text" id="sub_plan" class="form-control"  name="sub_plan" ></textarea>
                                        <textarea id="plan" class="form-control"  name="plan" style="display: none;"></textarea>
                                    </div>
                                    <a class="btn btn-primary float-right" onclick="AddPlan();">+</a>
                                            <table class="table table-dark">
                                              <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Outcome</th>
                                                  <th scope="col">Action</th>
                                                </tr>
                                              </thead>
                                              <tbody id="plan_table">
                                               
                                              </tbody>
                                            </table> 
                                 <div class="alert alert-primary" role="alert"><h4 class="text-white">Other Contents</b></div>
                                <div class="form-group">
                                        <label for="conclusion">Conclusion</label>
                                        <input type="text" id="conclusion" class="form-control"  name="conclusion">
                                    </div>
                                 <div class="form-group">
                                        <label for="cta">CTA</label>
                                        <input type="text" id="cta" class="form-control"  name="cta">
                                    </div>

                                    <div class="alert text-white" style="background-color: #800200;"  role="alert">
                                          Tags
                                        </div> 
                              

                                    <div class="form-group">
                                        <label for="tag_name">Name</label>
                                        <input type="hidden" id="tag_name" class="form-control"  name="tag_name">
                                        <input type="text" id="sub_tag_name" class="form-control"  name="sub_tag_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="tag_icon">Icon</label>
                                        <input type="text" id="sub_tag_icon" class="form-control"  name="sub_tag_icon">
                                        <input type="hidden" id="tag_icon" class="form-control"  name="tag_icon" >
                                    </div>
                                     <button class="btn btn-primary float-right">+</button>
                                 
                                        <table class="table table-dark">
                                              <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                             
                                                  <th scope="col">Tag Name</th>
                                                  <th scope="col">Tag Icon</th>
                                                
                                                
                                                  <th scope="col">Action</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                               
                                              </tbody>
                                            </table> 
                      
                                <div class="alert text-white" style="background-color: #800200;"  role="alert">
                                          Gallery
                                        </div> 

                                    <div class="form-group">
                                        <label for="gallery_image">Gallery Image</label>
                                        <input type="text" id="gallery_image" class="form-control"  name="gallery_image">
                                    </div>
                                    <div class="form-group">
                                        <label for="gallery_caption">Caption</label>
                                        <input type="text" id="gallery_caption" class="form-control"  name="gallery_caption">
                                    </div>
                                    <div class="form-group">
                                        <label for="gallery_alt">Alt</label>
                                        <input type="text" id="gallery_alt" class="form-control"  name="gallery_alt">
                                    </div>
                                     <button class="btn btn-primary float-right">+</button>
                                 
                                        <table class="table table-dark">
                                              <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                             
                                                  <th scope="col">Gallery Image</th>
                                                  <th scope="col">Caption</th>
                                                <th scope="col">Alt</th>
                                                
                                                  <th scope="col">Action</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                               
                                              </tbody>
                                            </table> 
                               
                                   
                               
                                </div>
                                
                                </div>

                             <br>
                            <div class="clearfix">
                                <button class="btn btn-success float-right">Save Project</button>
                                <br>   <br>
                            </div>

                        </form>
                        <div class="row">
                            <div class="alert alert-primary" role="alert">
                             <h4 class="text-white">Projects List</h4> </div>
                                <table class="table table-dark">
                                              <thead>
                                                
                                    <tr>
                                                 
                                                  <th scope="col">ID</th>
                                                  <th scope="col">Image</th>
                                                  <th scope="col">Title</th>
                                                  
                                                  <th scope="col">Author</th>
                                                  <th scope="col">Project Date</th>
                                                  
                                                  <th scope="col">Other Information</th>
                                             
                                                
                                                  <th scope="col">Action</th>
                                    </tr>

                                    </thead>
                                    <tbody>
                                          <?php  $i=0; 


                                               ?>
                                        @foreach($data2 as $data2)
                                            <tr>
                                                        <td>{{$data2->id}}</td>
                                                        <td>{{$data2->image }}</td>
                                                        <td>{{$data2->title }}</td>
                                                        <td>{{$data2->author }}</td>
                                                        <td>{{$data2->proj_date }}</td>
                                                        <td>
                                                            <button class="btn btn-secondary btn-sm">Show All</button>
                                                        </td>
                                        <td><button class="btn btn-info btn-sm" onclick="EditProject(<?php echo $i; ?>, &#39;{{$data2->id }}&#39;);">Edit</button> 
                                                       <button class="btn btn-danger btn-sm" onclick="DeleteProject(&#39;{{$data2->id }}&#39;)">Delete</button>
                                                        </td>
                                                     </tr> 
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
      
        </div>
    </div>
     <script src="{{ url('assets/js/feather-icons/feather.min.js') }}"></script>
    <script src="{{ url('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ url('assets/js/app.js') }}"></script>
    
    <script src="{{ url('assets/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ url('assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ url('assets/js/pages/dashboard.js') }}"></script>

    <script src="{{ url('assets/js/main.js') }}"></script>
     <!-- AJAX Script/Link-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript">

        var IndexHighlights=0;
        var IndexImpact=0;
        var IndexOutcomes=0;
        var IndexPlans=0;

        const highlights=[];
        const impact=[];
        const outcomes=[];
        const plans=[];
        function AddHighlight(){
            var highlightsContents=$('#sub_highlights').val();
            IndexHighlights+=1;
            highlights.push('<tr><td>'+ IndexHighlights + '</td><td>'+ highlightsContents +'</td><td><a class="btn btn-danger btn-sm">Delete</a></td></tr>');
            

            $('#highlights_table').html(highlights);
            $('#sub_highlights').val('');
            $('#highlights').val( $('#highlights').val() + ':*+!/:'+  highlightsContents);
 
        }
        function AddImpact(){
            var impactContents=$('textarea#sub_impact').val();
           // alert(impactContents);
            IndexImpact+=1;
            impact.push('<tr><td>'+ IndexImpact + '</td><td>'+ impactContents +'</td><td><a class="btn btn-danger btn-sm">Delete</a></td></tr>');
            

            $('#impact_table').html(impact);
            $('textarea#sub_impact').val('');
            $('textarea#impact').val( $('textarea#impact').val() + ':*+!/:'+  impactContents);
 
        }

        function AddOutcome(){
            var outcomeContents=$('textarea#sub_outcome').val();
         
            IndexOutcomes+=1;
            outcomes.push('<tr><td>'+ IndexOutcomes + '</td><td>'+ outcomeContents +'</td><td><a class="btn btn-danger btn-sm">Delete</a></td></tr>');
            $('#outcome_table').html(outcomes);
            $('textarea#sub_outcome').val('');
            $('textarea#outcome').val( $('textarea#outcome').val() + ':*+!/:'+  outcomeContents);
 
        }
        function AddPlan(){
            var planContents=$('textarea#sub_plan').val();
        
            IndexPlans+=1;
            plans.push('<tr><td>'+ IndexPlans + '</td><td>'+ planContents +'</td><td><a class="btn btn-danger btn-sm">Delete</a></td></tr>');
            $('#plan_table').html(plans);
            $('textarea#sub_plan').val('');
            $('textarea#plan').val( $('textarea#plan').val() + ':*+!/:'+  planContents);
 
        }
    </script>
</body>
</html>